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

<form data-toggle="validator" id="template-contactform" method="post" action="php/login_functions.php" >
<body>
    <!-- Defining the page layout -->
    <div class="page-layout">
		<div class="header page-title background-header">
            <div class="background-image" style="background-image: url(images/admin_header.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>List of Doctors</h1>
                        <p>Choose your preferred doctor based from the speciality you have selected</p>
                        <ol class="option-menu">
                            <li><a href="patient_selectspecialty.php">Back to Specialty</a></li>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section -->
		<div class="section record-details">
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <div class="content">
                            <div class="row">

							<?php
							
								include("php\db_connection.php");
								include("php\constants.php");
								global $tbuser;
								$conn = getConnection();
								
								$specialty = $_GET["specialty"]; 
								
								$query = "select oid, first_name, last_name, specialty, time_avail, days_avail, room_no from $tbuser where specialty = '$specialty'";
								$result = mysqli_query($conn, $query);
								
								if (!$result) die ("Close DB connection!");
								
								//If no data for the specified specialty
								if ($result->num_rows == 0){
										echo "<div class='column-one-third space-one-fourth'>";
										echo "<div class='details'>";
											echo "<div class='details-header'>";
												echo "<h3 class='details-name'>None</h3>";
												echo "<ul class='details-header-desc list-inline'>";
													echo "<li>Specialty:</li>";
													echo "<li>None</li>";
												echo "</ul>";
											echo "</div>";
											echo "<div>";
												echo "<p>Room No. None<br />";
													echo "None<br />";
													echo "None</p>";
												echo "<p></p>";
											echo "</div>";
											echo "<div class='details-link'>";
													echo "<p>None</p>";
												echo "</div>";
										echo "</div>";
										echo "</div>";
								}
								else { //If there are records for the specified specialty
									while($row = mysqli_fetch_array($result)){								
										$first_name = $row['first_name'];
										$last_name = $row['last_name'];
										$room_no = $row['room_no'];
										$specialty = $row['specialty'];
										$doctor_number = $row['oid'];
										$time_avail = $row['time_avail'];
										$days_avail = $row['days_avail'];
										
										if ($time_avail == 'am'){
											$time_avail = '8am to 12nn';
										}
										else if ($time_avail == 'pm'){
											$time_avail = '1pm to 5pm';
										}
										else if ($time_avail == 'fm'){
											$time_avail = '9am to 4pm';
										}	
										//echo '--'.$days_avail;
										$avail_days = '';
										if (strpos($days_avail, 'm') === 0 || stripos($days_avail, "m")){
											//echo "Monday";
											$avail_days = $avail_days.' Mon';
										}
										if (strpos($days_avail, 'tu') === 0 || stripos($days_avail, "tu")){
											//echo "Tuesday";
											$avail_days = $avail_days.' Tue';
										}
										if (strpos($days_avail, 'w') === 0 || stripos($days_avail, "w")){
											//echo "Wednesday";
											$avail_days = $avail_days.' Wed';
										}
										if (strpos($days_avail, 'th') === 0 || stripos($days_avail, "th")){
											//echo "Thursday";
											$avail_days = $avail_days.' Thu';
										}
										if (strpos($days_avail, 'f') === 0 || stripos($days_avail, "f")){
											//echo "Friday";
											$avail_days = $avail_days.' Fri';
										}
										if (strpos($days_avail, 's') === 0 || stripos($days_avail, "s")){
											//echo "Saturday";
											$avail_days = $avail_days.' Sat';
										}
										
														if ($specialty == 'neuro'){
															$specialty = 'Neurologist';
														}	
														else if ($specialty == 'cardio'){
															$specialty = 'Cardiologist';
														}	
														else if ($specialty == 'natmed'){
															$specialty = 'Natural Medicine';
														}	
														else if ($specialty == 'dentist'){
															$specialty = 'Dentist';
														}	
														else if ($specialty == 'lab'){
															$specialty = 'Laboratory';
														}	
														else if ($specialty == 'int'){
															$specialty = 'Internist';
														}	
														else if ($specialty == 'ortho'){
															$specialty = 'Orthopedic';
														}	
														else if ($specialty == 'pulmo'){
															$specialty = 'Pulmonologist';
														}	
														else if ($specialty == 'pedia'){
															$specialty = 'Pediatrician';
														}	
														else if ($specialty == 'eye'){
															$specialty = 'Eye Center';
														}	
														else if ($specialty == 'fammed'){
															$specialty = 'Family Medicine';
														}	
														else if ($specialty == 'ob'){
															$specialty = 'OB Gynecologist';
														}	
										
										echo "<div class='column-one-third space-one-fourth'>";
										echo "<div class='details'>";
											echo "<div class='details-header'>";
												echo "<h3 class='details-name'>$first_name $last_name</h3>";
												echo "<ul class='details-header-desc list-inline'>";
													echo "<li>Specialty:</li>";
													echo "<li>Neurologist</li>";
												echo "</ul>";
											echo "</div>";
											echo "<div>";
												echo "<p>Room No. $room_no<br />";
													echo "$time_avail<br />";
													echo "$avail_days</p>";
												echo "<p></p>";
											echo "</div>";
											echo "<div class='details-link'>";
													echo "<p><a href='doctor_welcome.php?doctor_number=$doctor_number'>Choose this Doctor</a></p>";
												echo "</div>";
										echo "</div>";
										echo "</div>";
									}
								}
								closeConnection($conn);	
							?>

							</div><!--/.row-->
                        </div><!--/.content-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.section--><section class="section footer">
            <div class="container">
                <div class="row">
                    <div class="column-one-half">
                        <?php
					
							//include("php\db_connection.php");
							//include("php\constants.php");
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
    <script src="js/scripts.js"></script>



</body>
</form>
</html>