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

<form method="post" action="php/admin_org_functions.php" >
<body>
    <!-- Defining the page layout -->
    <div class="page-layout">   
		<div class="header page-title background-header">
            <div class="background-image" style="background-image:url(images/admin_header.jpg)";></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>Defining Organization</h1>
                        <p class="">Provide your organization's details</p>
                        <ol class="option-menu">
                            <li><a href="admin_welcomepage.php">Home</a>
                            <li><a href="admin_user.php">User</a></li>
                            <li><a href="admin_record.php">Doctor</a></li>
                            <li><a href="admin_directory.php">Directory</a></li>
							<li class="selected">Settings</li>
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
                        <form data-toggle="validator" id="template-contactform" name="template-contactform" action="admin_orgsettings.php" method="post" role="form" novalidate="true">

                            <div class="form-process"></div>

                            <div class="column-two-third form-group">
                                <label for="template-contactform-name">Organization Name <small>*</small></label>
                                <input type="text" id="orgname" name="orgname" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label for="template-contactform-phone">Contact Number <small>*</small></label>
                                <input type="text" id="phone" name="phone" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-two-third form-group">
                                <label for="template-contactform-subject">Address <small>*</small></label>
                                <input type="text" id="address" name="address" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-whole">                                
                                <p id="contact-form-result"></p>
                                <br>
                            </div><!--/.col-->

                            <div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" type="submit" id="submit-org-changes" value="submit" style="pointer-events: all; cursor: pointer;">Save Changes</button>
                            </div>
							
							<div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" type="submit" id="cancel-org-changes" value="submit">Cancel Changes</button>
                            </div>
							<!--action for cancelling the changes made-->
							<script type="text/javascript">
								document.getElementById("cancel-org-changes").onclick=function(){
								location.href="admin_welcomepage.php";};
							</script>	

                        </form><!--/.form-->
                        
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section -->
		<section class="section footer">
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