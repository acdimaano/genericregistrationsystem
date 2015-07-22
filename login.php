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

<form data-toggle="validator" id="template-contactform" method="post" action="php/login_functions.php" >
<body>
    <!-- Defining the page layout -->
	<div class="page-layout">   
		<div class="header page-title background-header">
            <div class="background-image" style="background-image:url(images/admin_header.jpg)";></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>Login to GRS Application</h1>
                        <p class="">Please provide your email address and password</p>
                        <ol class="option-menu">
                            <li><a href="index.php">Back to Home</a>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section -->
			<section class="section big-padding active-section">
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                            <div class="form-process"></div>

                            <div class="column-one-third form-group">
                                <label>Email Address <small>*</small></label>
                                <input type="text" id="login_email" name="login_email" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="column-one-third form-group">
                                <label>Password <small>*</small></label>
                                <input type="password" id="login_password" name="login_password" value="" class="form-control" required="">
								<div class="help-block with-errors"></div>
                            </div>
                            <div class="column-whole">                                
                            </div><!--/.col-->

                            <div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" type="submit" id="login" value="submit" style="pointer-events: all; cursor: pointer;">Login</button>
                            </div>
							
							<div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small " type="submit" id="cancel_login" value="submit">Cancel</button>
                            </div>
							<!--action for cancelling the changes made-->
							<script type="text/javascript">
								document.getElementById("cancel-org-changes").onclick=function(){
								location.href="index.php";};
							</script>	

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --><section class="section footer">
            <div class="container">
                <div class="row">
                    <div class="column-one-half">
                        <ul class="list-inline">
                            <li><a href="footer_details.php" target="_blank" class="strong-text">About Us</a></li>
                            <li><a href="footer_details.php" target="_blank" class="strong-text">Overview</a></li>
                            <li><a href="footer_details.php" target="_blank" class="strong-text">Contact Us</a></li>
							<li><a href="footer_details.php" target="_blank" class="strong-text">Help</a></li>
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
    <script src="js/validator.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/scripts.js"></script>

</body>
</form>
</html>