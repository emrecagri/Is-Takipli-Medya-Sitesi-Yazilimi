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
    <title>ECBMEDYA Mesajınız Gönderildi</title>
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
                            <h3>İletişim</h3>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="breadcrumb">
                            <li><a href="javascript:void(0)">ECBMEDYA</a></li>
                            <li class="active">İletişim</li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section">
            <div class="container">
                <div class=" ">
                    

                    

                    <?php 

include 'istakip/vtbaglan.php'; //vtbaglan.php sayfasındaki tüm kodları bu sayfaya çağırdık

if($_POST)
    $adsoyad = $_POST["adsoyad"];
    $mail = $_POST["mail"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];
    date_default_timezone_set('Europe/Istanbul');
    $gonderimtarihi = date('d.m.Y H:i');
    $ipadresi = $_SERVER["REMOTE_ADDR"];


    $uzakhost='<br><b>Bilgisayar Adı-Uzak Host:</b> '. gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $tarayici='<br><b>İnternet Tarayıcısı:</b> '. @$_SERVER['HTTP_USER_AGENT'];
    $geldigiadres='<br><b>Geldiği Adres:</b> '. @$_SERVER['HTTP_REFERER'];
    $tarayicidili='<br><b>Tarayıcı Dili:</b> '. @$_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $gercekip='<br><b>Gerçek IP (Proxy ile gelmişse):</b> '. @$_SERVER['HTTP_X_FORWARDED_FOR'];

    $bilgileri=$uzakhost.$tarayici.$geldigiadres.$tarayicidili.$gercekip;

    
    if($ekle=mysqli_query($baglanti,"INSERT INTO mesajlar(adsoyad,mail,konu,mesaj,gonderimtarihi,ipadresi,bilgileri) VALUES('$adsoyad','$mail','$konu','$mesaj','$gonderimtarihi','$ipadresi','$bilgileri')"))
    
    {
        echo '<h2>Mesajınız başarıyla gönderildi.</h2><div>EN KISA ZAMANDA SİZİNLE İLETİŞİME GEÇECEĞİZ.';
        
    }else{
            echo '<h2>Mesajınız gönderilemedi.</h2><div>Bir hata oldu. Lütfen sonra tekrar deneyin.';
    }
            

 ?>

                    



                  
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