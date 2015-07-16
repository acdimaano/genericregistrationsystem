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
    <!-- Defining the page layout for admin -->
    <div class="page-layout">
    <div class="header page-title background-header">
            <div class="background-image" style="background-image:url(images/admin_header.jpg)";></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>GRS Application</h1>
                        <p>Howdy Admin!!! Configure your organization's details here. </p>
                        <ol class="option-menu">
							<li class="selected">Home</li>
                            <li><a href="admin_user.php">User</a></li>
                            <li><a href="admin_record.php">Doctor</a></li>
                            <li><a href="admin_directory.php">Directory</a></li>
							<li><a href="admin_orgsettings.php">Settings</a></li>
							<li><a href="index.php">Logout</a></li>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section --><section class="section big-padding active-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="paper shadow-1 pink-background text-center">
                            <a href="admin_user.php"><img src="images/user.gif" alt="Add/Update User"></a>
                            <a href="admin_user.php"><h4>Add/Update Users</h4></a>
                            <p class="admin-option">Add, update or remove any user account to limit the access in our system</p>
                        </div><!-- /.paper -->
                    </div><!-- /.col -->
                    <div class="col-md-3">
                        <div class="paper shadow-1 yellow-background text-center">
                            <a href="admin_record.php"><img src="images/doctor.gif" alt="Add/Update Doctor"></a>
                            <a href="admin_record.php"><h4>Add/Update Doctors</h4></a>
                            <p class="admin-option">You can add or update records so our patients can view all of our doctor's details</p>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
                    <div class="col-md-3">
                        <div class="paper shadow-1 blue-background text-center">
                            <a href="admin_directory.php"><img src="images/directory.gif" alt="People Directory"></a>
                            <a href="admin_directory.php"><h4>People Directory</h4></a>
                            <p class="admin-option">Contains the list of all user account and doctors that are currently available</p>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
                    <div class="col-md-3">
                        <div class="paper shadow-1 green-background text-center">
                            <a href="admin_orgsettings.php"><img src="images/settings.gif" alt="Organization Settings" ></a>
                            <a href="admin_orgsettings.php"><h4>Org Settings</h4></a>
                            <p class="admin-option">Define the organization name and upload logo that represents our brand</p>
                        </div><!--/.paper -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --><section class="section black-background active-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline">
                            <li><a href="#" title="" class="strong-text">About</a></li>
                            <li><a href="#" title="" class="strong-text">Overview</a></li>
                            <li><a href="#" title="" class="strong-text">Help</a></li>
                            <li><a href="#" title="" class="strong-text">Terms</a></li>
                            <li><a href="#" title="" class="strong-text">Contact Us</a></li>
                        </ul>
                    </div><!-- /.col -->
                    <div class="col-md-6 text-right">
                        <p>© 2015 - GRS Application by Alan & Rhiza</p>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --></div><!-- /.layout-wrapper -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



</body></html>