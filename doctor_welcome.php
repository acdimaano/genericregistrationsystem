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
    <div class="layout-wrapper page" id="page">
	<header id="header" class="section transparent white-header header active-section">
            <div class="container">
                <div class="row">
                    <div class="column-one-fourth">
                        <div class="logo">
                                <img src="">
                        </div>
                    </div><!-- /.col-->
                    <div class="column-three-fourth menu-col text-right">
                        <div class="menu">
                            <ul class="list-inline">
                                <li><a href="index.php">Logout</a></li>
                            </ul>
                        </div>
                    </div><!-- /.col-->
                    <div class="header-line">
                        <div class="line"></div><!--/.line-->
                    </div><!-- /.header-line -->
                </div><!--/.row-->
            </div><!-- /.container -->    
        </header><!-- /header -->
        <section class="fullscreen section background-wrapper" style="height: 267px;">
            <div class="background-image" style="background-image: url(images/welcome_screen.jpg)"></div>
            <div class="container middle-content">
                <div class="row">
                    <div class="column-one-half offset-one-fourth text-center">
                        <div class="element">
                            <h1 class="strong-text">Welcome to Medical City!</h1>
							<h3 class="strong-text">Access your patient details in just a click.
                            <div class="space"></div>
                            <p><a href="doctor_patientqueue.php?doctor_number=<?php echo $_GET["doctor_number"]; ?>" class="btn btn-white" role="button">Patient Queue</a> <a href="doctor_patientdone.php?doctor_number=<?php echo $_GET["doctor_number"]; ?>"" class="btn btn-pink" role="button">Patient Done</a>
                            </p>
                        </h1></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.section --><section class="section footer">
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



</body></html>