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

<form method="post" action="php/login.php">
	<body>
	<header id="header" class="section transparent white-header header active-section">
		<div id='grs-login' style='display:none;'> 
			<div class='grs-login-header'>Login</div>
			<div class='grs-login-content'>
			<div class='grs-user-login'>Email</div>
				<input type='text' class='grs-user-text grs-input-login' size='35' name='login_email' id='login_email'></input>
			<div class='grs-pass-login'>Password</div>
				<input type='password' class='grs-pass-text grs-input-login' size='35' name='login_password' id='login_password'></input>
			</div>
			<div class='grs-login-footer'>
			<div class='grs-close-btn grs-login-buttons'><input type='button'>Close</input></div>
			<div class='grs-login-btn grs-login-buttons'><input type='button'>Login</input></div>
			</div>
			</div>
	</header>	

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.localscroll.min.js"></script>
    <script src="js/jquery.scrollto.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/scripts.js"></script>

	<div id="grs-overlay-login" class="grs-hidden"></div>
	
	</body>
</form>
</html>