<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">Nama Lengkap</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control " id="exampleLastName">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">No. Telepon</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control " id="phone" placeholder="contoh: 0878xxxx">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">Tanggal Lahir</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control " id="dob" autocompleto="off" placeholder="Pilih Tanggal">
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
                                        <select class="form-control" name="doctor"> 
                                            <option value="0" disabled selected> Pilih Dokter</option>
                                            <option value="1"> drg. Kelvin William</option>
                                            <option value="2"> drg. Nina Liliana</option>
                                            <option value="3"> drg. Christian Henri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">Tanggal Periksa</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="date_schedule" autocompleto="off" placeholder="Pilih Tanggal">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <p class="text-gray-900" style="margin-top: 6px;">Jam Periksa</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="time_schedule">
                                            <option value="00:00" disabled selected> Pilih Jam</option>
                                            <option value="17:00"> 17:00</option>
                                            <option value="18:00"> 18:00</option>
                                            <option value="19:00"> 19:00</option>
                                            <option value="20:00"> 20:00</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="" class="btn btn-facebook btn-user btn-block">
                                    <i class="fas fa-notes-medical"></i>   Daftar
                                </a>
                            </form>
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

</body>

</html>