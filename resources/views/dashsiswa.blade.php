<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        /* Fixed sidenav, full height */
        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fbb017;
            overflow-x: hidden;
            padding-top: 30px;
        }

        .sidenav-logo {
            padding-bottom: 20px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
            padding: 8px 8px 6px 16px;
            text-decoration: none;
            font-size: 18px;
            color: #111f47;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
            color: white;
            text-decoration: none;
        }

        /* Main content */
        .main {
            margin-left: 200px; /* Same as the width of the sidenav */
            font-size: 12px; /* Increased text to enable scrolling */
            padding: 0px 50px;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: #fbb017;
            color: #16244b;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: #ffc44c;
            padding-left: 24px;
            color: white;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 12px;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

</style>
	<title>Blaemt Senior Highschool</title>
	<link rel="favicon" href="{{asset('frontend/image/favicon.png')}}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/mine.css')}}">
    <link rel="script" href="{{asset('frontend/js/mine.js')}}">
    <link rel='stylesheet' id="camera-css"  href="{{asset('frontend/css/camera.css')}}" type="text/css" media="all">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="sidenav">
        <div class="sidnav-logo">
        <a class="navbar-brand" href="{{url('home')}}">
            <img src="{{asset('frontend/image/logo-dash.png')}}" alt="Logo">
        </a>
        <a href="#">&nbsp;</a>
        <a href="#">RAPORT SAYA</a>
        </div>
    </div>

    <div class="main">
        <nav class="navbar navbar-light bg-light">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-left mainNav">
                    <a class="navbar-brand" href="{{url('dashboard/tatausaha')}}">RAPORT SISWA</a>
                </ul>
                <ul class="nav navbar-nav pull-right mainNav">
                <i class="fa fa-user">&nbsp;</i>Account
                </ul>
            </div>
        </nav>
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="white-box-icon">
                            <div class="text-center">
                                <img src="{{asset('frontend/image/logo-dash.png')}}" class="rounded mx-auto d-block" alt="Logo BSN">
                            </div>
                            <p class="text-left">Nama :</p>
                            <p class="text-left">Kelas</p>
                            <p class="text-left">Semester :</p>
                            <p class="text-left">Tahun Ajaran :</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="row">No.</th>
                                        <th scope="row">Mata Pelajaran</th>
                                        <th scope="row">Nilai Akhir</th>
                                        <th scope="row">Catatan</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>1</td>
                                        <td>TBD</td>
                                        <td>TBD</td>
                                        <td>TBD</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td coolspan="2">Nilai Rata-rata</td>
                                        <td>TBD</td>
                                        <td></td>
                                    </tr>
                                </table>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="row">Keterangan Tidak Masuk</th>
                                            <th scope="row">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>Sakit</td>
                                        <td>TBD</td>
                                    </tr>
                                    <tr>
                                        <td>Izin</td>
                                        <td>TBD</td>
                                    </tr>
                                    <tr>
                                        <td>Tanpa Keterangan</td>
                                        <td>TBD</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>TBD</td>
                                    </tr>
                                </table>
                                <div class="form-group">
                                    <label>Catatan Wali Kelas : </label>
                                    <textarea class="form-control" id="catatanwali" rows="3" readonly></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
            });
        }
    </script>
</body>
</html>