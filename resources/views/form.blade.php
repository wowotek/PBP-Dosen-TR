<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Blaemt Senior Highschool</title>
	<link rel="favicon" href="{{asset('frontend/image/favicon.png')}}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"> 
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap-theme.css')}}" media="screen"> 
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel='stylesheet' id="camera-css"  href="{{asset('frontend/css/camera.css')}}" type="text/css" media="all"> 
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			    <a class="navbar-brand" href="{{url('home')}}">
                    <img src="{{asset('frontend/image/logo-hor.png')}}" alt="Logo">
                </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-left mainNav">
                <li><a href="{{url('home')}}">Beranda</a></li>
                <li><a href="{{url('about')}}">Tentang</a></li>
                <li class="active"><a href="#">Daftar PPDB</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right mainNav">
                <li><a href="{{url('login')}}">Login</a></li>
                <li><a href="{{url('register')}}">Register</a></li>
            </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
  <!-- /.navbar -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="grey-box-icon">
                <div class="text-center">
                    <img width="50%" class="image-fluid" src="{{asset('frontend/image/logo-hor.png')}}" alt="Logo">
                    <h2>
                        Form Pendaftaran PPDB
                    </h2>
                    <p>Silahkan isi data diri anda untuk masuk ke data peserta PPDB</p><br>
                </div>
                <form action="" method="">
                    <div class="form-group row">
                        <h4><label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label></h4>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="nama" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h4><label for="inputTK" class="col-sm-3 col-form-label">TK Asal</label></h4>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="tk" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h4><label for="inputSD" class="col-sm-3 col-form-label">SD Asal</label></h4>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="sd" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h4><label for="inputSMP" class="col-sm-3 col-form-label">SMP Asal</label></h4>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="smp" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h4><label for="inputNEM" class="col-sm-3 col-form-label">Nilai Akhir TK</label></h4>
                        <div class="col-sm-2">
                            <input type="number" class="form-control form-control-sm" min="0" data-bind="value:replyNumber" id="nemtk" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h4><label for="inputNEM" class="col-sm-3 col-form-label">Nilai Akhir SD</label></h4>
                        <div class="col-sm-2">
                            <input type="number" class="form-control form-control-sm" min="0" data-bind="value:replyNumber" id="nemsd" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h4><label for="inputNEM" class="col-sm-3 col-form-label">Nilai Akhir SMP</label></h4>
                        <div class="col-sm-2">
                            <input type="number" class="form-control form-control-sm" min="0" data-bind="value:replyNumber" id="nemsmp" placeholder="">
                        </div>
                    </div>
                    <div class="">
                        &nbsp;
                    </div>
                        <h2><a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Daftar</a></h2>
                </form>
                </div>
            </div><!--/span3-->
        </div>
    </div>
    
    <footer id="footer">
	    <div class="container">
            <div class="row">
                <div class="footerbottom">
                    <div class="col-md-3 col-sm-6">
                        <div class="footerwidget">
                            <a class="navbar-brand" href="#">
                                <img src="{{asset('frontend/image/logo-hor.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        &nbsp;
                    </div>
                    <div class="col-md-3 col-sm-6">
                        &nbsp;
                    </div>
                    <div class="col-md-3 col-sm-6">
                        &nbsp;
                    </div>
                    <div class="col-md-3 col-sm-6">
                        &nbsp;
                    </div>
                    <div class="col-md-3 col-sm-6">
                        &nbsp;
                    </div>
                    <div class="col-md-3 col-sm-6"> 
                    <div class="footerwidget"> 
                        <h4>Contact</h4> 
                        <p></p>
                        <div class="contact-info"> 
                            <i class="fa fa-map-marker"></i> &nbsp; Jl. Mantareno No. 13, District Shigansina<br>
                            <i class="fa fa-phone"></i> &nbsp; +62 666 619 123 <br>
                            <i class="fa fa-envelope-o"></i> &nbsp; contact@blaemt.sch.id
                        </div>
                        </div><!-- end widget --> 
                        </div>
                    </div>
                </div>
            <div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
            <div class="clear"></div>
            <!--CLEAR FLOATS-->
            </div>
            <div class="footer2">
                <div class="container">
                <div class="row">
                    <div class="panel-body">
                        <p class="text-center">
                            Copyright &copy; 2019. Team 0xDEADBEEF
                        </p>
                    </div>
                </div>
            <!-- /row of panels -->
            </div>
        </div>
    </footer>    
</body>
</html>
