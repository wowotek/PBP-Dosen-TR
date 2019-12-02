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
					<li class="active"><a href="#">Beranda</a></li>
					<li><a href="{{url('about')}}">Tentang</a></li>
          <li><a href="{{url('ppdb')}}">Daftar PPDB</a></li>
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
    <div class="ror">

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="grey-box-icon">
          <div class="icon-box-top grey-box-icon-pos">
            <img src="{{asset('frontend/image/4.png')}}" alt="" />
          </div><!--icon box top -->
          <h4>Berkedaulatan Pancasila</h4>
          <p>Berpegang teguh pada idealisme Pancasila</p>
        </div><!--grey box -->
      </div><!--/span3-->
      <div class="col-md-3">
        <div class="grey-box-icon">
          <div class="icon-box-top grey-box-icon-pos">
            <img src="{{asset('frontend/image/1.png')}}" alt="" />
          </div><!--icon box top -->
          <h4>Berbudaya Santuy</h4>
          <p>Berperilaku dan Bersikap Santuy dalam menghadapi masalah namun tetap taat pada aturan</p>
        </div><!--grey box -->
      </div><!--/span3-->
      <div class="col-md-3">
        <div class="grey-box-icon">
          <div class="icon-box-top grey-box-icon-pos">
            <img src="{{asset('frontend/image/2.png')}}" alt="" />
          </div><!--icon box top -->
          <h4>Toleransi</h4>
          <p>Bertoleransi terhadap sesama antar berbeda Suku, Ras, dan Agama</p>
        </div><!--grey box -->
      </div><!--/span3-->
      <div class="col-md-3">
        <div class="grey-box-icon">
          <div class="icon-box-top grey-box-icon-pos">
            <img src="{{asset('frontend/image/3.png')}}" alt="" />
          </div><!--icon box top -->
          <h4>Development Jiwa Champion</h4>
          <p>Pengembangan jiwa Juara dalam kompetisi ruangan maupun lapangan</p>
        </div><!--grey box -->
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
              Copyright &copy; 2014.
            </p>
          </div>
				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>
</body>
</html>
