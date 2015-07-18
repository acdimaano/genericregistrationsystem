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
            <div class="background-image" style="background-image:url(images/admin_header.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="column-whole">
                        <h1>People Directory</h1>
                        <p class="">Contains the list of all users and doctor records</p>
                        <ol class="option-menu">
                            <li><a href="admin_welcomepage.php">Home</a>
                            <li><a href="admin_user.php">User</a></li>
                            <li><a href="admin_record.php">Doctor</a></li>
                            <li class="selected">Directory</li>
							<li><a href="admin_orgsettings.php">Settings</a></li>
							<li><a href="index.php">Logout</a></li>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section -->
		<div class="section record-details">
            <div class="container">	
				<div class="search">
					<label>Search by Name or Role</label>
					<input type="text" id="search-user" name="search-user">
				</div>
                <div class="row">
                    <div class="column-whole">
                        <div class="content">
                            <div class="row">
                                <div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Rhiza Roque</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>Apr 1, 2014</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Site Admin</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->

                                <div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Neville Longbottom</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>Sep 10, 2013</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Doctor Account</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->
								
								<div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Callie Torres</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>Jan 15, 2014</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Doctor Account</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->
								
								<div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Carla Joy Castel</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>Dec 18, 2013</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Pateint Access</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->
								
								<div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Alan Dimaano</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>May 3, 2015</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Doctor Account</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->
								
								<div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Arizona Robins</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>Jul 10, 2015</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Doctor Account</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->
								
								<div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Ludo Bagman</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>Oct 13, 2014</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Doctor Account</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->
								
								<div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Rhiza Roque</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>Apr 1, 2014</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Site Admin</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->
								
								<div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Molly Weasley</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>Feb 9, 2015</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Site Admin</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->
								
								<div class="column-one-third space-one-fourth">
                                    <div class="details">
                                        <div class="details-header">
                                            <h3 class="details-name">Rhiza Roque</h3>
                                            <ul class="details-header-desc list-inline ">
                                                <li>Last Update:</li>
                                                <li>Apr 1, 2014</li>
                                            </ul>
											<ul class="details-header-desc list-inline ">
                                                <li>Role/Access:</li>
                                                <li>Site Admin</li>
                                            </ul>
                                        </div><!--/.entry-top-->
                                        <div class="details-link">
                                            <ul class="list-inline">
                                                <li><a href="#" title=""> Edit</a></li>
                                                <li class="right-align"><a href="#" title="">Delete</a></li>
                                            </ul><!--/.entry-meta-->
                                        </div><!--/.entry-bottom-->
                                    </div><!--/.entry-->
                                </div><!--/.col-->
							</div><!--/.row-->

                            <nav class="text-center">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div><!--/.content-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.section--><section class="section footer">
            <div class="container">
                <div class="row">
                    <div class="column-one-half">
                        <ul class="list-inline">
                            <li><a href="#" title="" class="strong-text">About</a></li>
                            <li><a href="#" title="" class="strong-text">Overview</a></li>
                            <li><a href="#" title="" class="strong-text">Help</a></li>
                            <li><a href="#" title="" class="strong-text">Terms</a></li>
                            <li><a href="#" title="" class="strong-text">Contact Us</a></li>
                        </ul>
                    </div><!-- /.col -->
                    <div class="column-one-half text-right">
                        <p>© 2015 - GRS Application by Alan & Rhiza</p>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --></div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



</body></html>