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
    <title>ECBMEDYA İletişime Geç</title>
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
    <link rel="stylesheet" href="css/carousel.css">
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

        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>İletişime Geç & Fiyat Teklifi Al</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">ECBMEDYA</a></li>
                                <li class="active">İletişim</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">

                    <!--harita <div id="map" class="wow slideInUp"></div> -->
<br><br>
                    <div class="text-center">
                        <div class="col-md-6">

                            <div class="small-box">
                                <i class="flaticon-map-with-position-marker wow fadeIn" style="visibility: visible; animation-name: fadeIn;"></i>
                                <h4>Bize aklınızdaki soruyu sorabilir, fiyat talep edebilir ve sipariş verebilirsiniz.</h4>
                                <small>Mutlu müşterilerimiz arasına katımanıza bir adım kaldı.</small>
                            </div><!-- end small-box -->
                        
<hr>
                        
                            <div class="small-box">
                                <i class="flaticon-email wow fadeIn" style="visibility: visible; animation-name: fadeIn;"></i>
                                <h4>Mail Adresimiz</h4>
                                <small><a href="mailto:#">info@mail.mail</a></small>
                                <!--<small>Fax:  +90 987 665 55 45</small>
                                <p><a href="mail:to">info@yoursite.com</a></p>-->
                            </div><!-- end small-box -->
                        

<hr>
                        
                            <div class="small-box">
                                <i class="flaticon-share wow fadeIn" style="visibility: visible; animation-name: fadeIn;"></i>
                                <h4>Sosyal Medya Hesaplarımız</h4>
                                <small>Twitter: @</small>
                                <small>Instagram: @</small>
                                
                            </div><!-- end small-box -->
                        </div><!-- end col -->
                    </div><!-- end contactv2 -->



<br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-title text-center">
                                <h3>İletişim Formu</h3>
                                <p>En kısa zamanda size döneceğiz.</p>
                            </div><!-- end title -->
                            
                            <form class="big-contact-form" role="search" action="iletisimkayit.php" method="POST">
                                <input type="text" class="form-control" maxlength="50" placeholder="Adınız Soyadınız.." name="adsoyad" required="">
                                <input type="email" class="form-control" placeholder="Mail Adresiniz.." name="mail" required="">
                                <input type="text" class="form-control" maxlength="50" placeholder="Konu yada Ürün.." name="konu" required="">
                                <textarea class="form-control" placeholder="Mesajınız.." name="mesaj" required=""></textarea>
                                <button type="submit" class="btn btn-primary">Gönder</button>
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>

        <?php include 'altkisim.php'; ?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkADq7R0xf6ami9YirAM1N-yl7hdnYBhM "></script>
    <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

   


</body>
</html>