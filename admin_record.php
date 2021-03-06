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
							function checkbox()
							{
								var checkboxes = document.getElementsByName('day');
								var selected = [];
								var flag = 0;
								for (var i=0; i<checkboxes.length; i++) {
									if (checkboxes[i].checked) {
										selected.push(checkboxes[i].value);
										flag++;
									}
								}
								if (flag == 0){
									document.getElementById('checkbox-errors').innerHTML = "errors!";
								}
								else {
									document.getElementById('checkbox-errors').innerHTML = "";
								}
								
							}
							function cancel(){
								location.href="admin_welcomepage.php";}
        </script>
</head>

<form data-toggle="validator" id="template-contactform" name="template-contactform" method="post" action="php/admin_user_functions.php" >
<body>

<!-- Hidden fields -->

<input type="hidden" name="admin_page" value="doctor">

    <!-- Defining the page layout -->
    <div class="page-layout">
		<div class="header page-title background-header">
            <div class="background-image" style="background-image:url(images/admin_header.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>Doctor Details</h1>
                        <p class="">Add or update doctor's details</p>
                        <ol class="option-menu">
                            <li><a href="admin_welcomepage.php">Home</a>
                            <li><a href="admin_user.php">User</a></li>
                            <li class="selected">Doctor</a></li>
                            <li><a href="admin_directory.php?search=start">Directory</a></li>
							<li><a href="php\admin_org_functions.php?transaction=1">Settings</a></li>
							<li><a href="index.php">Logout</a></li>
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
                                <input type="text" id="fname" name="fname" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Last Name <small>*</small></label>
                                <input type="text" id="lname" name="lname" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Clinic Room No <small>*</small></label>
                                <input type="text" id="room" name="room_number" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-two-third form-group">
                                <label>Email Address <small>*</small></label>
                                <input type="email" id="email" name="email" value="" class="email form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-one-third form-group">
                                <label>Specialty <small>*</small></label>
                                <select id="specialty" name="specialty" class="form-control" required="">
                                    <option value="">-- Select One --</option>
                                    <option value="cardio">Cardiologist</option>
                                    <option value="dentist">Dentist</option>
									<option value="eye">Eye Specialist</option>
									<option value="fammed">Family Medicine</option>
									<option value="int">Internist</option>
									<option value="lab">Laboratory Staff</option>
									<option value="natmed">Natural Medicine</option>
									<option value="neuro">Neurologist</option>
									<option value="ob">OB Gyne</option>
									<option value="ortho">Orthopedic</option>
									<option value="pedia">Pediatrician</option>
									<option value="pulmo">Pulmonologist</option>
                                </select>
								<div class="help-block with-errors"></div>
                            </div>

                            <div class="column-whole form-group">
                                <label style="padding-bottom: 10px">Select Availability <small>*</small></label><br />
								<input type="checkbox" id="day" name="day[]" value="mm" style="margin-right: 5px" >Monday
								<input type="checkbox" id="day" name="day[]" value="tu" style="margin-right:5px; margin-left:80px">Tuesday
								<input type="checkbox" id="day" name="day[]" value="w" style="margin-right:5px; margin-left:80px">Wednesday
								<input type="checkbox" id="day" name="day[]" value="th" style="margin-right:5px; margin-left:80px">Thursday
								<input type="checkbox" id="day" name="day[]" value="f" style="margin-right:5px; margin-left:80px">Friday
								<input type="checkbox" id="day" name="day[]" value="s" style="margin-right:5px; margin-left:80px">Saturday
                                <div class="help-block with-errors"></div>
                            </div>
							
							
							<div class="column-whole form-group">
                                <label style="padding-bottom: 10px; padding-top:10px">Select Time Schedule <small>*</small></label><br />
								<input type="radio" id="am" name="time" value="am" style="margin-right: 5px;" required="">Morning (8am to 12nn)
								<input type="radio" id="pm" name="time" value="pm" style="margin-right:5px; margin-left:80px" required="">Afternoon (1pm to 5pm)
								<input type="radio" id="fm" name="time" value="fm" style="margin-right:5px; margin-left:80px" required="">Full Day (9am to 4pm)
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="column-whole hidden form-group">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control">
                            </div>

                            <div class="column-whole">                                
                                <p id="contact-form-result"></p>
                                <br>
                            </div><!--/.col-->

                            <div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" onclick="checkbox()" type="submit" id="save-doctor-details" name="template-contactform-submit" value="submit" style="pointer-events: all; cursor: pointer;">Save Changes</button>
                            </div>
							<div class="column-one-sixth">
                                <button class="btn btn-save-cancel btn-small" onclick="cancel()" type="submit" id="cancel-doctor-changes" name="template-contactform-submit" value="submit" style="pointer-events: all; cursor: pointer;">Cancel Changes</button>
                            </div>
							<!--action for cancelling the changes made-->
							
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --><section class="section footer active-section">
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