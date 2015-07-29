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

<form method="post" action="php/patient_select_functions.php" >
<body>
    <!-- Defining the page layout -->
	<?php
		$patient_number = $_GET["patient_number"];
		//echo $patient_number;
	?>
	<input type="hidden" id="patient_number" name="patient_number" value="<?php echo $_GET["patient_number"]; ?>">
    <div class="page-layout">
		<div class="header page-title background-header">
            <div class="background-image" style="background: url(images/admin_header.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>Select Speciality</h1>
                        <p class="">Choose the service you needed</p>
                        <ol class="option-menu">
                            <li><a href="patient_new.php">Back to Details</a></li>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section --><section class="section big-padding active-section">
            <div class="container">
                <div class="row">
                    <div class="column-one-fourth">
                        <div class="paper blue-background text-center">
                            <a href="php/patient_select_functions.php?specialty=neuro&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/neuro.gif" alt="neuro"></a>
                            <a href="php/patient_select_functions.php?specialty=neuro&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Neurologist</h4></a>
                        </div><!-- /.paper -->
                    </div><!-- /.col -->
                    <div class="column-one-fourth">
                        <div class="paper pink-background text-center">
                            <a href="php/patient_select_functions.php?specialty=cardio&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/cardio.gif" alt="cardio"></a>
                            <a href="php/patient_select_functions.php?specialty=cardio&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Cardiologist</h4></a>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
                    <div class="column-one-fourth">
                        <div class="paper green-background text-center">
                            <a href="php/patient_select_functions.php?specialty=natmed&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/natmed.gif" alt="natmed"></a>
                            <a href="php/patient_select_functions.php?specialty=natmed&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Natural Medicine</h4></a>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
                    <div class="column-one-fourth">
                        <div class="paper yellow-background text-center">
                            <a href="php/patient_select_functions.php?specialty=dentist&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/dentist.gif" alt="dentist"></a>
                            <a href="php/patient_select_functions.php?specialty=dentist&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Dentist</h4></a>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
					
					<div class="column-one-fourth">
                        <div class="paper  pink-background text-center">
                            <a href="php/patient_select_functions.php?specialty=lab&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/lab.gif" alt="lab"></a>
                            <a href="php/patient_select_functions.php?specialty=lab&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Laboratory</h4></a>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
					<div class="column-one-fourth">
                        <div class="paper yellow-background text-center">
                            <a href="php/patient_select_functions.php?specialty=int&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/internist.gif" alt="internist"></a>
                            <a href="php/patient_select_functions.php?specialty=int&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Internist</h4></a>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
					<div class="column-one-fourth">
                        <div class="paper blue-background text-center">
                            <a href="php/patient_select_functions.php?specialty=ortho&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/ortho.gif" alt="ortho"></a>
                            <a href="php/patient_select_functions.php?specialty=ortho&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Orthopedic</h4></a>
                        </div><!-- /.paper -->
                    </div><!-- /.col -->
					<div class="column-one-fourth">
                        <div class="paper green-background text-center">
                            <a href="php/patient_select_functions.php?specialty=pulmo&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/pulmo.gif" alt="pulmo"></a>
                            <a href="php/patient_select_functions.php?specialty=pulmo&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Pulmonologist</h4></a>
						</div><!--/.paper -->
					</div><!-- /.col -->
					
					<div class="column-one-fourth">
                        <div class="paper green-background text-center">
                            <a href="php/patient_select_functions.php?specialty=pedia&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/pedia.gif" alt="pedia"></a>
                            <a href="php/patient_select_functions.php?specialty=pedia&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Pediatrician</h4></a>
						</div><!--/.paper -->
					</div><!-- /.col -->
					<div class="column-one-fourth">
                        <div class="paper blue-background text-center">
                            <a href="php/patient_select_functions.php?specialty=eye&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/eye.gif" alt="eye"></a>
                            <a href="php/patient_select_functions.php?specialty=eye&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Eye Center</h4></a>
                        </div><!-- /.paper -->
                    </div><!-- /.col -->
					<div class="column-one-fourth">
                        <div class="paper pink-background text-center">
                            <a href="php/patient_select_functions.php?specialty=fammed&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/fammed.gif" alt="fammed"></a>
                            <a href="php/patient_select_functions.php?specialty=fammed&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>Family Medicine</h4></a>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
					<div class="column-one-fourth">
                        <div class="paper yellow-background text-center">
                            <a href="php/patient_select_functions.php?specialty=ob&patient_number=<?php echo $_GET["patient_number"]; ?>"><img src="images/ob.gif" alt="ob"></a>
                            <a href="php/patient_select_functions.php?specialty=ob&patient_number=<?php echo $_GET["patient_number"]; ?>"><h4>OB Gynecologist</h4></a>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --><!--/.section--><section class="section footer">
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
    <script src="js/scripts.js"></script>



</body>
</form>
</html>