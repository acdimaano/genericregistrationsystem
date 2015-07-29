<!DOCTYPE html>
<html><head>
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

</head>

<form method="post" action="php/admin_functions.php" >
<body>
    <!-- Defining the page layout -->
    <div class="page-layout">
	<div class="header page-title background-header">
            <div class="background-image"style="background-image:url(images/admin_header.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>User Account</h1>
                        <p class="">Add and update user account details</p>
                        <ol class="option-menu">
							<li><a href="admin_welcomepage.php">Home</a>
                            <li class="selected">User</li>
                            <li><a href="admin_record.php">Doctor</a></li>
                            <li><a href="admin_directory.php?search=start">Directory</a></li>
							<li><a href="php\admin_org_functions.php?transaction=1">Settings</a></li>
							<li><a href="index.php">Logout</a></li>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section --><script type="text/javascript">
                            jQuery(document).ready(function(){
                                $("#template-contactform").validator().on('submit', function (e) {
                                    $(this).ajaxSubmit({
                                        target: '#contact-form-result',
                                        success: function(response) {
                                            $('.form-process').fadeOut();
                                            $('#template-contactform').find('.form-control').val('');
                                            $('#contact-form-result').php(response);
                                            $('#contact-form-result').fadeIn();
                                            console.log(response);
                                        }
                                    });
                                    return false;
                                })

                            });

                        </script><section class="section big-padding active-section">
            <div class="container">
                <div class="row">
                    <div class="column-whole">

                            <div class="form-process"></div>

                            <div class="column-one-third form-group">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname" value="<?php echo $_GET["first_name"]; ?>" class="form-control" required="" >
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Last Name</label>
                                <input type="text" id="lname" name="lname" value="<?php echo $_GET["last_name"]; ?>" class="form-control" required="" >
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>User Name</label>
                                <input type="text" id="userid" name="userid" value="<?php echo $_GET["user_id"]; ?>" class="form-control" required="" >
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-two-third form-group">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" value="<?php echo $_GET["email"]; ?>" class="email form-control" required="" >
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Access Type</label>
                                <input type="text" id="userid" name="userid" value="<?php echo $_GET["role"]; ?>" class="form-control" required="" >
                                <div class="help-block with-errors"></div>
                            </div>
							
                            <div class="column-whole">                                
                                <p id="contact-form-result"></p>
                                <br>
                            </div><!--/.col-->

                            <div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" type="submit" id="save-user-details" name="template-contactform-submit" value="submit" style="pointer-events: all; cursor: pointer;">Update / Delete</button>
                            </div>
							<div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" type="submit" id="cancel-user-details" name="template-contactform-submit" value="submit" style="pointer-events: all; cursor: pointer;">Cancel Update / Delete</button>
                            </div>
							
							<!--action for cancelling the changes made-->
							<script type="text/javascript">
								document.getElementById("cancel-user-details").onclick=function(){
								location.href="admin_welcomepage.php";};
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