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

<form method="post" >

<body>
    <!-- Defining the page layout -->
    <div class="page-layout">
	<div class="header page-title background-header">
            <div class="background-image" style="background-image: url(images/admin_header.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>Patient in Queue</h1>
                        <p>List of patient in queue for consultation today</p>
                        <ol class="option-menu">
                            <li><a href="doctor_welcome.php?&doctor_number=<?php echo $_GET["doctor_number"]; ?>">Back to Home</a></li>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section -->
		<div class="section">
            <div class="container">
                <table class="patient-table">
					<col width="150">
					<col width="600">
					<col width="200">
					<col width="200">
					<tr>
						<th>Queue Number</th>
						<th>Patient Name</th>
						<th>Select Patient</th>
						<th>Remove Patient</th>
					</tr>
					<!-- PHP code here -->
					
					<?php 
					
								include("php\db_connection.php");
								include("php\constants.php");
								global $tbpracticeschedule, $tbcustomerdetails;
								$conn = getConnection();
								
								$doctor_number = $_GET["doctor_number"]; 
								
								$query = "select user_oid, customer_oid, schedule from $tbpracticeschedule where user_oid = '$doctor_number' and served = '0' order by schedule asc";
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
										
										$query2 = "select oid, first_name, last_name from $tbcustomerdetails where oid = '$customer_oid'";
										$result2 = mysqli_query($conn, $query2);
										if (!$result2) die ("Close DB connection!");
										while($row2 = mysqli_fetch_array($result2)){

										$last_name = $row2[1];
										$first_name = $row2[2];
											echo "<tr>";
												echo "<td>00$schedule</td>";
												echo "<td>$last_name $first_name</td>";
												echo "<td><a href='php\doctor_patientrecord_functions.php?doctor_number=$doctor_number&customer_oid=$customer_oid'>Select</a></td>";
												echo "<td>Remove</td>";
											echo "</tr>";
										}
									}
								}
					?>
					
					<!-- end of PHP code here -->
					
				</table><!--/.patient-->
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
        </section><!-- /.section --></div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



</body>
</form>
</html>