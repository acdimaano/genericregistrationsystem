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

<form method="post" action="admin_directory.php">
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
					<input type="text" id="search_user" name="search_user">
                    <button class="btn btn-save-cancel btn-small" type="submit" id="submit-patient-record" value="submit" style="pointer-events: all; cursor: pointer;">Search</button>
				</div>
                <div class="row">
                    <div class="column-whole">
                        <div class="content">
                            <div class="row">
							
											<!-- start PHP code here -->
											<?php
											
												include("php\db_connection.php");
												$conn = getConnection();
												
												if(isset($_POST['search_user'])){
													$search_user = $_POST['search_user'];
													$query = "select * from tbuser where email like '%$search_user%' or user_id like '%$search_user%' or last_name like '%$search_user%' or first_name like '%$search_user%'";
												}
												else {
													$query = "select * from tbuser";
												}
												
												$result = mysqli_query($conn, $query);
												if (!$result) die ("Close DB connection!");
												//If no data for the specified specialty
												if ($result->num_rows == 0){
											
												}
												else {
													while($row = mysqli_fetch_assoc($result)){
													
													$user_oid = $row['oid'];
													$last_name = $row['last_name'];
													$first_name = $row['first_name'];
													$date_updated = $row['date_updated'];
													$role = $row['role'];
													
													if ($role == '1'){
														$role = 'Site Admin';
													}
													else if ($role == '2'){
														$role = 'Doctor Account';
													}
													else if ($role == '3'){
														$role = 'Patient Access';
													}	
													
													echo "<div class='column-one-third space-one-fourth'>";
														echo "<div class='details'>";
															echo "<div class='details-header'>";
														echo "<h3 class='details-name'>$first_name $last_name</h3>";
														echo "<ul class='details-header-desc list-inline '>";
															echo "<li>Last Update:</li>";
															echo "<li>$date_updated</li>";
														echo "</ul>";
														echo "<ul class='details-header-desc list-inline '>";
															echo "<li>Role/Access:</li>";
															echo "<li>$role</li>";
														echo "</ul>";
													echo "</div>";
													echo "<div class='details-link'>";
														echo "<ul class='list-inline'>";
															echo "<li><a href='#' title=''> Edit</a></li>";
															echo "<li class='right-align'><a href='#' title=''>Delete</a></li>";
																echo "</ul>";
															echo "</div>";
														echo "</div>";
													echo "</div>";
														
													}	
												}
												closeConnection($conn);	
												
											?>
							<!-- end PHP code here -->
							
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



</body>
</form>
</html>