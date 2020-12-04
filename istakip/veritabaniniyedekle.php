<?php 
include 'header.php';
if (yetkikontrol()!="yetkili") {
	header("location:index.php?durum=izinsiz");
	exit;
};
?>
<link rel="stylesheet" media="all" type="text/css" href="vendor/upload/css/fileinput.min.css">
<link rel="stylesheet" type="text/css" media="all" href="vendor/upload/themes/explorer-fas/theme.min.css">
<script src="vendor/upload/js/fileinput.js" type="text/javascript" charset="utf-8"></script>
<script src="vendor/upload/themes/fas/theme.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vendor/upload/themes/explorer-fas/theme.minn.js" type="text/javascript" charset="utf-8"></script>
<!-- Begin Page Content -->
<script type="text/javascript">
	var genislik = $(window).width()   
	if (genislik < 768) {
		function yenile(){
			$('#sidebarToggleTop').trigger('click');
		}
		setTimeout("yenile()",1);
	}
</script>
<div class="container">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary">Site Ayarları</h5>   
		</div>
		<div class="card-body">

										<?php
							include 'DBBackup_vtyedeklemesinifi.class.php';
							$db = new DBBackup(array(
							'driver' => 'mysql',
							'host' => 'veritabanı sunucunuzun adını buraya yazın',
							'user' => 'veritabanı kullanıcı adınızı buraya yazın',
							'password' => 'veritabanı şifrenizi buraya yazın',
							'database' => 'veritabanı adnızı buraya yazın'
							));
							$backup = $db->backup();
							if(!$backup['error']){


							//tarih alıyoruz
								date_default_timezone_set('Europe/Istanbul');
								$tarih = date('dmY_His');

							// SQL olarak kaydetmek için 
							 $fp = fopen('veritabaniyedekleri/sql_yedek_' . $tarih . '.sql', 'w');
							 fwrite($fp, $backup['msg']);
							 fclose($fp);

							echo "<hr>Veritabanınızın yedeği başarıyla oluşturuldu ve ftp'ye kayıt edildi.<br><a href='" . "veritabaniyedekleri/sql_yedek_" . $tarih . ".sql'>BU CİHAZADA İNDİR</a><hr><br><h3>Veritabanı Oluşturma ve Verileri Kayıt Etme Kodu:</h3><br>";

							echo nl2br($backup['msg']);
							} else {
							echo 'Bir hata oluştu.';
							}
							?>




</div>
	</div>
</div>

<script type="text/javascript">
	function ayarlarikaydet() {
		$.ajax({
        type: 'POST',   //post olarak belirledik
        url: 'islemler/mail.php',  //formdaki verilerin gidecegi adres
        data: $('form#mailformu').serialize(), //#form id li formumuzu bilesenlerine ayirdik
        success: function(gelen) { //islem basarili oldugunda yapilacak
        	$('#sonuc').html(gelen);
        }
    });
	}
</script>﻿
<?php include 'footer.php' ?>

<?php if (@$_GET['durum']=="no")  {?>  
	<script>
		Swal.fire({
			type: 'error',
			title: 'İşlem Başarısız',
			text: 'Lütfen Tekrar Deneyin',
			showConfirmButton: true,
			confirmButtonText: 'Kapat'
		})
	</script>
<?php } ?>

<?php if (@$_GET['durum']=="ok")  {?>  
	<script>
		Swal.fire({
			type: 'success',
			title: 'İşlem Başarılı',
			text: 'İşleminiz Başarıyla Gerçekleştirildi',
			showConfirmButton: true,
			confirmButtonText: 'Kapat'
		})
	</script>
	<?php } ?>