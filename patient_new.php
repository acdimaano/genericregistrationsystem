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

<body>
    <!-- Defining the page layout -->
    <div class="page-layout">
		<div class="header page-title background-header">
            <div class="background-image parallax-background" style="background-image: url(images/admin_header.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Welcome Patient</h1>
                        <p class="">Please complete your profile for our record</p>
						<!--this will be remove-->
                        <ol class="option-menu">
                            <li><a href="patient_welcome.php">Back to Home</a></li>
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

                        </script>
			<section class="section big-padding active-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form data-toggle="validator" id="template-contactform" name="template-contactform" action="patient_selectspecialty.php" method="post" role="form" novalidate="true">

                            <div class="form-process"></div>

                            <div class="col-md-4 form-group">
                                <label>First Name <small>*</small></label>
                                <input type="text" id="fname" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Last Name <small>*</small></label>
                                <input type="text" id="lname" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Middle Name</label>
                                <input type="text" id="mi" value="" class="form-control">
                            </div>

							<div class="col-md-8 form-group">
                                <label style="padding-bottom: 15px">Gender <small>*</small></label><br />
								<input type="radio" id="m" name="gender" value="" style="margin-right:5px;" required="">Male
								<input type="radio" id="f" name="gender" value="" style="margin-right:5px; margin-left:80px" required="">Female
								<input type="radio" id="o" name="gender" value="" style="margin-right:5px; margin-left:80px" required="">Other
								<div class="help-block with-errors"></div>
                            </div>
							
                            <div class="col-md-4 form-group">
                                <label>Date of Birth</label>
                                <input type="date" id="bdate" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
							
                            <div class="col-md-8 form-group">
                                <label>Home Address</label>
                                <input type="text" id="address" class="form-control">
                            </div>

							<div class="col-md-4 form-group">
                                <label>Phone No.</label>
                                <input type="text" id="phone" class="form-control">
                            </div>
							
                            <div class="col-md-12 form-group">
                                <h4>If you know your NHI number please provide below. If not, please inform your doctor or GP.</h4>
                            </div>
							
							<div class="col-md-4 form-group">
                                <label>NHI</label>
                                <input type="text" id="nhi" class="form-control">
                            </div>
		
                            <div class="col-md-12">                                
                                <p id="contact-form-result"></p>
                                <br>
                            </div><!--/.col-->

                            <div class="col-md-2">
                                <button class="btn btn-punch btn-xs btn-black disabled" type="submit" id="submit-patient-record" value="submit" style="pointer-events: all; cursor: pointer;">Submit Record</button>
                            </div>
							<div class="col-md-2">
                                <button class="btn btn-punch btn-xs btn-black disabled" type="submit" id="cancel-create-patient" value="submit" style="pointer-events: all; cursor: pointer;">Cancel Record</button>
                            </div>
							<!--cancel button is selected-->
							<script type="text/javascript">
								document.getElementById("cancel-create-patient").onclick=function(){
								location.href="patient_welcome.php";};
							</script>	

                        </form><!--/.form-->
                        
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --><section class="section black-background active-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Medical City<br/>
						#820 Symond St. Auckland CBD<br/>
						0800 634 8892</p>
                    </div><!-- /.col -->
                    <div class="col-md-6 text-right">
                        <p><br/>© 2015 - GRS Application by Alan & Rhiza</p>
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



</body></html>