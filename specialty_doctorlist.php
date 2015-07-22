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
								$conn = getConnection();
								
								$specialty = $_GET["specialty"]; 
								
								$query = "select oid, first_name, last_name, specialty, time_avail, days_avail, room_no from tbuser where specialty = '$specialty'";
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
										$doctor_number = $row['oid'];
										
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
													echo "9am - 12nn<br />";
													echo "Tue, Thur, Sat</p>";
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
    <script src="js/scripts.js"></script>



</body>
</form>
</html>