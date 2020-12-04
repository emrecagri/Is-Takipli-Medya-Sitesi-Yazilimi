<?php include 'ziyaretciipkayit.php'; ?>
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="tr"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="tr"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>ECBMEDYA Sipariş Takibi</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
    
    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="Yükleniyor">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <?php include 'ustmenubeyaz.php'; ?>

        <section class="section cb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tagline-message page-title">
                            <h3>Sipariş Takip</h3>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="breadcrumb">
                            <li><a href="javascript:void(0)">ECBMEDYA</a></li>
                            <li class="active">Sipariş Takip</li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section">
            <div class="container">
                <div class=" ">
                    

                    <center>


                        
                    <h4>Siparişinizin durumunu öğrenmek için lütfen sipariş numaranızı yazınız.</h4>
                    <br>
                    

                    <form method="GET" action="takip.php">
                        <input type="text" placeholder="Sipariş No.." required="" name="sip_no"><br><br>
                        <input type="submit" class="btn btn-primary" value="Sorgula">
                    </form>


                        </font>

                    



                  
                </div><!-- end boxed -->
            </div><!-- end container -->
        </section>

        <?php include 'altkisim.php'; ?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/custom.js"></script>



</body>
</html>