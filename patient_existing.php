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
                        <h1>Welcome Back Patient</h1>
                        <p class="">Please provide your NHI so we can pull up your record</p>
                        <ol class="option-menu">
                            <li><a href="patient_welcome.php">Back to Home</a></li>
                        </ol>
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- /.section --><script type="text/javascript">
                            jQuery(document).ready(function(){
                                $("#template-contactform").validator().on('submit', function (e) {
                                    $(this).ajaxSubmit({
                                        target: '#contact-form-result',
                                        success: function(response) {
                                            $('.form-process').fadeOut();
                                            $('#template-contactform').find('.form-control').val('');
                                            $('#contact-form-result').php(response);
                                            $('#contact-form-result').fadeIn();
                                            console.log(response);
                                        }
                                    });
                                    return false;
                                })

                            });

                        </script><section class="section big-padding active-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form data-toggle="validator" id="template-contactform" name="template-contactform" action="patient_selectspecialty.php" method="post" role="form" novalidate="true">

                            <div class="form-process"></div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-name">NHI <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12">                                
                                <p id="contact-form-result"></p>
                                <br>
                            </div><!--/.col-->

                            <div class="col-md-12">
                                <button class="btn btn-punch btn-xs btn-black disabled" type="submit" id="submit-nhi" name="template-contactform-submit" value="submit" style="pointer-events: all; cursor: pointer;">Submit your NHI</button>
                            </div>

                        </form><!--/.form-->
                        
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section --><section class="section black-background active-section">
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
        </section><!-- /.section --></div><!-- /.layout-wrapper -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



</body></html>