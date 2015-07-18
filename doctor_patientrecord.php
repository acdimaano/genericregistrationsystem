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
            <div class="background-image" style="background-image: url(images/admin_header.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>Patient Details</h1>
                        <p>Provide findings and prescription for your patient</p>
                        <ol class="option-menu">
                            <li><a href="doctor_welcome.php">Home</a>
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
                        <form data-toggle="validator" id="template-contactform" name="template-contactform" action="doctor_welcome.php" method="post" role="form" novalidate="true">

                            <div class="form-process"></div>

                            <div class="column-one-third form-group">
                                <label>First Name <small>*</small></label>
                                <input type="text" id="fname" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Last Name <small>*</small></label>
                                <input type="text" id="lname" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Middle Name</label>
                                <input type="text" id="mi" value="" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-two-third form-group">
                                <label>Home Address</label>
                                <input type="text" id="address" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
							
							<div class="column-one-third form-group">
                                <label>Gender</label>
                                <input type="text" id="gender" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
							
							 <div class="column-one-third form-group">
                                <label>Date of Birth</label>
                                <input type="date" id="bdate" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Phone No.</label>
                                <input type="text" id="phone" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>NHI </label><small>*</small>
                                <input type="text" id="nhi" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-whole form-group">
                                <label>Diagnosis <small>*</small></label>
                                <textarea class="form-control" id="diagnosis" rows="4" cols="30" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
							
							<div class="column-whole form-group">
                                <label>Prescription <small>*</small></label>
                                <textarea class="form-control" id="diagnosis" rows="4" cols="30" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
							
							<div class="column-whole form-group">
								<h4>Medication History</h4>
								<table class="patient-table">
									<col width="250">
									<col width="900">
									<tr>
										<th>Consultation Date</th>
										<th>Diagnosis Details</th>
									</tr>
									<tr>
										<td>20/05/2015</td>
										<td>Acute bronchitis</td>
									</tr>
								</table>	
							</div><!--/.col-->
							
                            <div class="column-whole">                                
                                <p id="contact-form-result"></p>
                                <br>
                            </div><!--/.col-->

                            <div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" type="submit" id="submit-patient-record" value="submit" style="pointer-events: all; cursor: pointer;">Submit Changes</button>
                            </div>
							<div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" type="submit" id="cancel-patient-record" value="cancel" style="pointer-events: all; cursor: pointer;">Cancel Changes</button>
                            </div>
							
							<!--action for cancelling the changes made-->
							<script type="text/javascript">
								document.getElementById("cancel-patient-record").onclick=function(){
								location.href="doctor_welcome.php";};
							</script>
                        </form><!--/.form-->
                        
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --><section class="section footer">
            <div class="container">
                <div class="row">
                    <div class="column-one-half">
                        <p>Medical City<br/>
						#820 Symond St. Auckland CBD<br/>
						0800 634 8892</p>
                    </div><!-- /.col -->
                    <div class="column-one-half text-right">
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