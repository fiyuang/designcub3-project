<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Klinik Gigi Cub3</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12" style="background-color: #14141c;">
                            <div class="text-center" style="margin-top: 15px;margin-bottom: -10px;">
                                <h1 class="h4 mb-4">Klinik Gigi Cub3</h1>
                            </div>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4" style="margin-top: -5px;">Isi Data Diri</h1>
                            </div>
                            <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
                            <!-- <form> -->
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">Nama Lengkap</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control " id="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">No. Telepon</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control " id="mobile_number" name="mobile_number" placeholder="contoh: 0878xxxx">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">Tanggal Lahir</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control " id="dob" name="dob" placeholder="Pilih Tanggal">
                                    </div>
                                </div>
                                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> -->
                                <hr>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Pilih Jadwal Periksa</h1>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">Dokter</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="doctor"> 
                                            <option value="0" disabled selected> Pilih Dokter</option>
                                            <option value="3"> drg. Kelvin William</option>
                                            <option value="4"> drg. Nina Liliana</option>
                                            <option value="6"> drg. Christian Henri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">Tanggal Periksa</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="date_schedule" placeholder="Pilih Tanggal">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">Jam Periksa</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="time_schedule">
                                            <option value="00:00" disabled selected> Pilih Jam</option>
                                            <option value="17:00"> 17:00</option>
                                            <option value="18:00"> 18:00</option>
                                            <option value="19:00"> 19:00</option>
                                            <option value="20:00"> 20:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-facebook btn-user btn-block save-data">
                                        <i class="fas fa-notes-medical"></i>   Daftar
                                    </button>
                                </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery-mask/jquery.mask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            
            //jquery-mask-plugin
            $('#mobile_number').mask('0000000000000', {reverse: true});

            //save data
            $(".save-data").click(function(event){
                event.preventDefault();

                // disable button
                $(this).prop("disabled", true);
                // add spinner to button
                $(this).html(
                    `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`
                );

                let name = $("input[name=name]").val();
                let mobile_number = $("input[name=mobile_number]").val();
                let dob = document.getElementById("dob").value; 
                let doctor = document.getElementById("doctor").value;
                let date_schedule = document.getElementById("date_schedule").value; 
                let time_schedule = document.getElementById("time_schedule").value; 
                let _token   = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: "/create-appointment",
                    type:"POST",
                    data:{
                        name:name,
                        mobile_number:mobile_number,
                        dob:dob,
                        doctor_id:doctor,
                        date_schedule:date_schedule,
                        time_schedule:time_schedule,
                        _token: _token
                    },
                    success: function(data){
                        console.log(data);
                        if(data.success == true) {
                            Swal.fire({
                                icon: 'success',
                                title: data.message,
                                showConfirmButton: true,
                            }).then(() => {
                                location.reload(true);
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: data.message,
                                showConfirmButton: true,
                            },
                            function(){ 
                                window.location.reload();
                            })
                        }
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $(this).html(`<i class="fas fa-notes-medical"></i> Daftar`);
                    }
                });
            });
        })
    </script>

</body>

</html>