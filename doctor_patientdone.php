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
                        <h1>Done for Consultation</h1>
                        <p>List of patients that have undergo consultation today</p>
                        <ol class="option-menu">
                            <li><a href="doctor_welcome.php">Back to Home</a></li>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section -->
		<div class="section">
            <div class="container">
                <table class="patient-table">
					<col width="150">
					<col width="400">
					<col width="450">
					<col width="150">
					<tr>
						<th>Queue Number</th>
						<th>Patient Name</th>
						<th>Diagnosis</th>
						<th>Update Details</th>
					</tr>
					
					<!-- PHP code here -->
					
					<?php 
					
								include("php\db_connection.php");
								$conn = getConnection();
								
								$doctor_number = $_GET["doctor_number"]; 
								
								$query = "select user_oid, customer_oid, schedule from tbpracticeschedule where user_oid = '$doctor_number' and served = '1' order by schedule asc";
								$result = mysqli_query($conn, $query);
								
								if (!$result) die ("Close DB connection!");
					
								//If no data for the specified specialty
								if ($result->num_rows == 0){
									echo "<tr>";
										echo "<td> </td>";
										echo "<td> </td>";
										echo "<td> </td>";
										echo "<td>Remove</td>";
									echo "</tr>";
								}
								else { //If there are records for the specified specialty
									while($row = mysqli_fetch_array($result)){
									
										$customer_oid = $row[1];
										$schedule = $row[2];
										
										$query2 = "select oid, first_name, last_name from tbcustomerdetails where oid = '$customer_oid'";
										$result2 = mysqli_query($conn, $query2);
										if (!$result2) die ("Close DB connection!");
										while($row2 = mysqli_fetch_array($result2)){

										$last_name = $row2[1];
										$first_name = $row2[2];
										
										$query3 = "select oid, details from tbpracticecustomerdetails where user_oid = '$doctor_number' and customer_oid = '$customer_oid'";
										$result3 = mysqli_query($conn, $query3);
										if (!$result3) die ("Close DB connection!");
											while($row3 = mysqli_fetch_array($result3)){
											$diagnosis = $row3[1];

												echo "<tr>";
													echo "<td>00$schedule</td>";
													echo "<td>$last_name $first_name</td>";
													echo "<td>$diagnosis</td>";
													echo "<td><a href='php\doctor_patientrecord_functions.php?doctor_number=$doctor_number&customer_oid=$customer_oid'>Edit</a></td>";
												echo "</tr>";
											}
										}
									}
								}
								
							closeConnection($conn);	
					?>
					
					<!-- end of PHP code here -->
					
				</table><!--/.patient-->
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
        </section><!-- /.section --></div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



</body></html>