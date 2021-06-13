<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function patients()
    {
        $patients = User::patientOnly()->orderBy('id', 'DESC')->get();
        return view('dashboard.patients.index', [
            'patients' => $patients
        ]);
    }

    public function doctors()
    {
        $doctors = User::doctorOnly()->orderBy('id', 'DESC')->get();
        return view('dashboard.doctors.index', [
            'doctors' => $doctors
        ]);
    }

    public function create_doctor(Request $request)
    {
        \DB::beginTransaction();
        try {

            $result = User::create([
                'name' => $request->name,
                'user_type' => 2,
                'mobile_number' => $request->mobile_number,
                'date_of_birth' => $request->dob,
                'password' => Hash::make(12345678),
            ]);
            \DB::commit();

            if($result){
                Alert::toast('Data berhasil disimpan', 'success')->padding('10px')->timerProgressBar();
            }

        } catch (\Exception $e){
            \DB::rollback();
            Alert::toast($e->getMessage(), 'error')->padding('10px')->timerProgressBar();
        }

        return redirect()->back();

    }

    public function delete_doctor($id)
    {
        User::where('id', $id)->forceDelete();
        Alert::toast('Data berhasil dihapus', 'success')->padding('10px')->timerProgressBar();
        return redirect()->back();
    }
}
