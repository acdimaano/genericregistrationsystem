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
                    <div class="col-md-12">
                        <h1>Done for Consultation</h1>
                        <p>List of patients that have undergo consultation today</p>
                        <ol class="option-menu">
                            <li><a href="doctor_welcome.php">Back to Home</a></li>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section -->
		<div class="section blog-section active-section">
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
					<tr>
						<td>B001</td>
						<td>Rhiza Roque</td>
						<td>Low RBC count</td>
						<td><a href="doctor_patientrecord.php">Edit</a></td>
					</tr>
					<tr>
						<td>B003</td>
						<td>Luna Lovegood</td>
						<td>Low RBC count</td>
						<td><a href="doctor_patientrecord.php">Edit</a></td>
					</tr>
					<tr>
						<td>B008</td>
						<td>Horace Slughorn</td>
						<td>Low RBC count</td>
						<td><a href="doctor_patientrecord.php">Edit</a></td>
					</tr>
					<tr>
						<td>B011</td>
						<td>Minerva McGonagal</td>
						<td>Low RBC count</td>
						<td><a href="doctor_patientrecord.php">Edit</a></td>
					</tr>
					<tr>
						<td>B017</td>
						<td>Parvati Patil</td>
						<td>Low RBC count</td>
						<td><a href="doctor_patientrecord.php">Edit</a></td>
					</tr>
					
				</table><!--/.patient-->
            </div><!--/.container-->
        </div><!--/.section--><section class="section black-background active-section">
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
        </section><!-- /.section --></div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



</body></html>