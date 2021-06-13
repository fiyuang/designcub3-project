<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Schedule;
use Illuminate\Support\Facades\Hash;

class ScheduleController extends Controller
{
    public function index()
    {
        $doctors = User::doctorOnly()->orderBy('id', 'DESC')->get();
        return view('booking', get_defined_vars());
    }

    public function store(Request $request)
    {
            $schedule = Schedule::where('doctor_id', $request->doctor_id)->where('date', $request->date_schedule)->where('time', $request->time_schedule)->first();
            if(isset($schedule)){
                return response()->json([
                    'success' => false,
                    'message' => "Jadwal periksa dengan Dokter pada Waktu & Jam tersebut telah terisi, silahkan pilih ulang jadwal Anda",
                ]);
            } else {
                $user = User::where('mobile_number', $request->mobile_number)->first();
                if (isset($user)){ //pasien yang sudah terdaftar

                    return $this->createAppointment($user->id, $request->doctor_id, $request->date_schedule, $request->time_schedule, $request->notes);

                } else {

                    \DB::beginTransaction();
                    try {

                        $register_user = User::create([
                            'name' => $request->name,
                            'user_type' => 3,
                            'date_of_birth' => $request->dob,
                            'mobile_number' => $request->mobile_number,
                            'password' => Hash::make(12345678),
                        ]);
                        \DB::commit();

                        return $this->createAppointment($register_user->id, $request->doctor_id, $request->date_schedule, $request->time_schedule, $request->notes);

                    } catch (\Exception $e){
                        \DB::rollback();
                        return response()->json([
                            'success' => false,
                            'data'    => null,
                            'error' => $e->getMessage()
                        ]);
                    }

                }
            }
        
    }

    public function createAppointment($user_id, $doctor_id, $date_schedule, $time_schedule, $notes)
    {
        \DB::beginTransaction();
        try {
            $create_appointment = Schedule::create([
                'patient_id' => $user_id,
                'doctor_id' => $doctor_id,
                'date' => $date_schedule,
                'time' => $time_schedule,
                'notes' => $notes
            ]);
            \DB::commit();

            $patient_name = $create_appointment->patient->name;
            $doctor_name = $create_appointment->doctor->name;
            return response()->json([
                'success' => true,
                'data'    => $create_appointment,
                'message' => "Jadwal pemeriksaan gigi anda dengan $doctor_name pada $create_appointment->date pukul $create_appointment->time, atas nama $patient_name. Harap datang tepat waktu, terima kasih."
            ]);
        } catch(\Exception $e){
            \DB::rollback();
            return response()->json([
                'success' => false,
                'data'    => null,
                'error' => $e->getMessage()
            ]);
        }
    }

}
