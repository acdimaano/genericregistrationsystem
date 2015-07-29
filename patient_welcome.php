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
		
        <section class="fullscreen section background-wrapper" style="height: 267px;">
            <div class="background-image" style="background-image: url(images/welcome_screen.jpg)"></div>
            <div class="container middle-content">
                <div class="row">
                    <div class="column-one-half offset-one-fourth text-center">
                        <div class="element">
                            <h1 class="strong-text">Welcome to GRS Application!</h1>
							<h3 class="strong-text">Setting an appointment to your doctors in just simple clicks.
                            <div class="space"></div>
                            <p><a href="patient_new.php" class="btn btn-white" role="button">New Patient</a> <a href="patient_existing.php" class="btn btn-pink" role="button">Return Patient</a>
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



</body></html>