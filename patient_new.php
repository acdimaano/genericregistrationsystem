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

		<script type="text/javascript">
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
</head>

<form data-toggle="validator" id="template-contactform" name="template-contactform" method="post" action="php/patient_functions.php" >
<body>
    <!-- Defining the page layout -->
    <div class="page-layout">
		<div class="header page-title background-header">
            <div class="background-image" style="background-image: url(images/admin_header.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>Welcome Patient</h1>
                        <p class="">Please complete your profile for our record</p>
						<!--this will be remove-->
                        <ol class="option-menu">
                            <li><a href="patient_welcome.php">Back to Home</a></li>
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
                                <label>First Name <small>*</small></label>
                                <input type="text" id="fname" name="fname" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Last Name <small>*</small></label>
                                <input type="text" id="lname" name="lname" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Middle Name</label>
                                <input type="text" id="middlename" name="middlename" value="" class="form-control">
                            </div>

							<div class="column-two-third form-group">
                                <label style="padding-bottom: 15px">Gender <small>*</small></label><br />
								<input type="radio" name="gender" value="m" style="margin-right:5px;" required="">Male
								<input type="radio" name="gender" value="f" style="margin-right:5px; margin-left:80px" required="">Female
								<input type="radio" name="gender" value="o" style="margin-right:5px; margin-left:80px" required="">Other
								<div class="help-block with-errors"></div>
                            </div>
							
                            <div class="column-one-third form-group">
                                <label>Date of Birth</label>
                                <input type="date" id="bdate" name="bdate" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
							
                            <div class="column-two-third form-group">
                                <label>Home Address</label>
                                <input type="text" id="address" name="address" class="form-control">
                            </div>

							<div class="column-one-third form-group">
                                <label>Phone No.</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
							
                            <div class="column-whole form-group">
                                <h4>If you know your NHI number please provide below. If not, please inform your doctor or GP.</h4>
                            </div>
							
							<div class="column-one-third form-group">
                                <label>NHI</label>
                                <input type="text" id="nhi" name="nhi" class="form-control">
                            </div>
		
                            <div class="column-whole">                                
                                <p id="contact-form-result"></p>
                                <br>
                            </div><!--/.col-->

                            <div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" type="submit" id="submit-patient-record" value="submit" style="pointer-events: all; cursor: pointer;">Submit Record</button>
                            </div>
							<div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" type="submit" id="cancel-create-patient" value="submit" style="pointer-events: all; cursor: pointer;">Cancel Record</button>
                            </div>
							<!--cancel button is selected-->
							<script type="text/javascript">
								document.getElementById("cancel-create-patient").onclick=function(){
								location.href="patient_welcome.php";};
							</script>	

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --><section class="section footer">
            <div class="container">
                <div class="row">
                    <div class="column-one-half">
                        <?php
					
							include("php\db_connection.php");
							include("php\constants.php");
							$conn = getConnection();
							global $tborganization;
							
							$query = "select * from $tborganization where oid = 1";
							//echo $query;
							$result = mysqli_query($conn, $query);
							
							if (!$result) die ("Close DB connection!");

							$row = mysqli_fetch_assoc($result);
							$name = $row['name'];
							$address = $row['address'];
							$phone = $row['phone'];
							
                        echo "<p>$name<br/>";
						echo "$address<br/>";
						echo "$phone</p>";
						closeConnection($conn);	
					?>
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



</body>
</form>
</html>