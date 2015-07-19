<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GRS Application</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">


    <!-- Icon Fonts -->
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css">

    <!-- Required CSS Files -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">

	 <!-- Login js -->    
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>   
	<style type="text/css"></style>
</head>

<form method="post" action="php/login.php" >
<body>
    <!-- Defining the page layout -->
    <div class="page-layout">  
		<header id="header" class="section transparent white-header header active-section">
		<div class="container">
			<div class="row">
				<div class="column-one-fourth">
					<div class="logo">
						<a href="" title="">
							<img src="">
						</a>
					</div>
				</div><!-- /.col-->
				<div class="column-three-fourth menu-col text-right">
					<div class="menu">
						<ul class="list-inline">
							<li><a href="patient_welcome.php">Patient</a></li>
							<li><a href="doctor_welcome.php">Doctor</a></li>
							<!--this will be removed, work around only-->
							<li><a href="admin_welcomepage.php">Admin</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div>
				</div><!-- /.col-->
				<div class="header-line">
					<div class="line"></div><!--/.line-->
				</div><!-- /.header-line -->
				<div class="menu-toggle">
					<i class="ti-menu"></i>
				</div>
			</div>
		</div><!-- /.container -->    
    </header><!-- /header -->
	
        <!-- PARALLAX SECTION -->
        <section class="bigger-padding section background-wrapper black-background active-section">
            <div class="background-image parallax-background" data-stellar-background-ratio="0.5" style="background-image: url(images/index_screen.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="column-one-half">
                        <div class="element">
                            <p class="welcome-text">A friendly application for doctors and patients. Patient can view and set an appointment
									with their doctors. Doctors can access their patient records.</p>
                            <p><a class="btn btn-pink login-window" role="button">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <div class="container">
                <div class="row">
                    <div class="column-one-half">
                        <ul class="list-inline">
                            <li><a href="#" title="" class="strong-text">About</a></li>
                            <li><a href="#" title="" class="strong-text">Overview</a></li>
                            <li><a href="#" title="" class="strong-text">Help</a></li>
                            <li><a href="#" title="" class="strong-text">Terms</a></li>
                            <li><a href="#" title="" class="strong-text">Contact Us</a></li>
                        </ul>
                    </div><!-- /.col -->
                    <div class="column-one-half text-right">
                        <p>© 2015 - GRS Application by Alan & Rhiza</p>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --></div><!-- /.layout-wrapper -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/scripts.js"></script>
	<div id="grs-overlay-login" class="grs-hidden"></div>

</body>
</form>
</html>
