<?php 
include 'header.php';
?>
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style type="text/css" media="screen">
	@media only screen and (max-width: 700px) {
		.mobilgizle {
			display: none;
		}
		.mobilgizleexport {
			display: none;
		}
		.mobilgoster {
			display: block;
		}
	}
	@media only screen and (min-width: 700px) {
		.mobilgizleexport {
			display: flex;
		}
		.mobilgizle {
			display: block;
		}
		.mobilgoster {
			display: none;
		}
	}
</style>
<script type="text/javascript">
	var genislik = $(window).width()   
	if (genislik < 768) {
		function yenile(){
			$('#sidebarToggleTop').trigger('click');
		}
		setTimeout("yenile()",1);
	}
</script>
<div class="container-fluid p-2">


	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$siparissayisor=$db->prepare("SELECT sip_id FROM siparis");
		$siparissayisor->execute();
		$siparissayisicek = $siparissayisor->rowCount();
		?>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<a href="siparisler.php">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Toplam <b>Sipariş</b> Sayısı</div>
							<div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $siparissayisicek; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</a>
			</div>
		</div>	

		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$siparis_biten_sayi_sor=$db->prepare("SELECT sip_id FROM siparis WHERE sip_durum='Sipariş Tamamlandı'");
		$siparis_biten_sayi_sor->execute();
		$siparis_biten_sayi_cek = $siparis_biten_sayi_sor->rowCount();
		?>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<a href="siparisler.php">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Biten <b>Sipariş</b> Sayısı</div>
							<div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $siparis_biten_sayi_cek; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar-check fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</a>
			</div>
		</div>	
		<!-- Earnings (Monthly) Card Example -->
		

		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$siparissayisor=$db->prepare("SELECT sip_id FROM siparis WHERE sip_aciliyet='Acil'");
		$siparissayisor->execute();
		$siparissayicek = $siparissayisor->rowCount();
		?>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 py-2">
				<a href="siparisler.php">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Acil <b>Sipariş</b> Sayısı</div>
							<div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $siparissayicek; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar-plus fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</a>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$siparis_biten_sayi_sor=$db->prepare("SELECT sip_id FROM siparis  WHERE sip_aciliyet='Acelesi Yok'");
		$siparis_biten_sayi_sor->execute();
		$siparis_biten_sayi_cek = $siparis_biten_sayi_sor->rowCount();
		?>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<a href="siparisler.php">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Önemsiz <b>Sipariş</b> Sayısı</div>
							<div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $siparis_biten_sayi_cek; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</a>
			</div>
		</div>	

		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$bugun = date('d.m.Y');
		$mesaj_gelen_sayi_sor=$db->prepare("SELECT id FROM mesajlar  WHERE gonderimtarihi LIKE '$bugun %'");
		$mesaj_gelen_sayi_sor->execute();
		$mesaj_gelen_sayi_cek = $mesaj_gelen_sayi_sor->rowCount();
		?>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<a href="mesajlar.php">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Bugün Gelen <b>Mesaj</b> Sayısı</div>
							<div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $mesaj_gelen_sayi_cek; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-envelope fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</a>
			</div>
		</div>	

		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$cevir = strtotime('-1 day',strtotime(date('d.m.Y'))); //bir gün çıkardık
		$dun = date("d.m.Y",$cevir); // dünün tarihi 
		$mesaj_gelen_sayi_sor=$db->prepare("SELECT id FROM mesajlar  WHERE gonderimtarihi LIKE '$dun %'");
		$mesaj_gelen_sayi_sor->execute();
		$mesaj_gelen_sayi_cek = $mesaj_gelen_sayi_sor->rowCount();
		?>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<a href="mesajlar.php">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dün Gelen <b>Mesaj</b> Sayısı</div>
							<div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $mesaj_gelen_sayi_cek; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-envelope-open fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</a>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$bugun = date("Y-m-d");
		$ziyaretci_gelen_sayi_sor=$db->prepare("SELECT id FROM ziyaretciler  WHERE giris_tarihi='$bugun'");
		$ziyaretci_gelen_sayi_sor->execute();
		$ziyaretci_gelen_sayi_cek = $ziyaretci_gelen_sayi_sor->rowCount();
		?>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<a href="ziyaretciler.php">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Bugün Gelen <b>Ziyaretçi</b> Sayısı</div>
							<div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $ziyaretci_gelen_sayi_cek; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user-alt fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</a>
			</div>
		</div>	

				<!-- Bitmeyen Sipariş Toplamı Başlangıç -->
		<?php 
		$siparis_onaylanan_sayi_sor=$db->prepare("SELECT sip_id FROM siparis  WHERE sip_durum='Sipariş Onaylandı'");
		$siparis_onaylanan_sayi_sor->execute();
		$siparis_onaylanan_sayi_cek = $siparis_onaylanan_sayi_sor->rowCount();

		$siparis_calisilan_sayi_sor=$db->prepare("SELECT sip_id FROM siparis  WHERE sip_durum='Sipariş &Uuml;zerinde &Ccedil;alışılıyor'");
		$siparis_calisilan_sayi_sor->execute();
		$siparis_calisilan_sayi_cek = $siparis_calisilan_sayi_sor->rowCount();

		$siparis_toplam_bitmeyen = $siparis_onaylanan_sayi_cek + $siparis_calisilan_sayi_cek;
		?>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<a href="siparisler.php">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Bitmeyi Bekleyen <b>Sipariş</b> Sayısı</div>
							<div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $siparis_toplam_bitmeyen ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar-minus fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</a>
			</div>
		</div>	
			<!-- Bitmeyen Sipariş Toplamı Bitiş -->

	</div>


	<!--Projeler Giriş-->
	<div class="row">
		<div class="col-md-6">
			<div class="card shadow mb-4">
				<div class="card-header py-3 text-center">
					<h5 class="m-0 font-weight-bold text-primary"><a href="siparisler.php">Siparişler</a></h5>
				</div>
				<div class="card-body" style="width: 100%">

					<div class="table-responsive">
						<table class="table table-bordered" id="siparistablosu" width="100%" cellspacing="0">
							<thead>
								<tr> 
									<th>İsim</th>
									<th>Bitiş Tarihi</th>
									<th>Aciliyet</th>

								</tr>
							</thead>
							<!--While döngüsü ile veritabanında ki verilerin tabloya çekilme işlemi giriş-->
							<tbody>
								<?php 
								$siparissor=$db->prepare("SELECT * FROM siparis");
								$siparissor->execute();
								while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) { $say++?>

									<tr>
										<td><?php echo $sipariscek['musteri_isim']; ?></td>										
										<td><?php echo $sipariscek['sip_teslim_tarihi']; ?></td>
										<td><?php echo $sipariscek['sip_aciliyet']; ?></td>
									</tr>
								<?php }
								?>
							</tbody>
							<!--While döngüsü ile veritabanında ki verilerin tabloya çekilme işlemi çıkış-->
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h5 class="m-0 font-weight-bold text-primary text-center"><a href="mesajlar.php">Mesajlar</a></h5>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><a href="tummesajlarisil.php">Hepsini Sil</a>
							<thead>
								<tr> 
									<th>Ad Soyad</th>
									<th>Konu</th>
									<th>Gönderim Tarihi</th>
									
								</tr>
							</thead>
							
							<tbody>
								<?php 
								$say=0;
								$mesajsor=$db->prepare("SELECT * FROM mesajlar");
								$mesajsor->execute();
								while ($mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC)) { $say++?>

									<tr>
										<td><?php echo $mesajcek['adsoyad']; ?></td>
										<td><?php echo $mesajcek['konu']; ?></td>
										<td><?php echo $mesajcek['gonderimtarihi']; ?></td>

									</tr>
								<?php } ?>
							</tbody>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>



</div>
<!--Projeler Çıkış-->

</div>


<?php 
include 'footer.php';
?>

<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script> 
<script src="vendor/datatables/dataTables.buttons.min.js"></script>
<script src="vendor/datatables/buttons.flash.min.js"></script>
<script src="vendor/datatables/jszip.min.js"></script>
<script src="vendor/datatables/pdfmake.min.js"></script>
<script src="vendor/datatables/vfs_fonts.js"></script>
<script src="vendor/datatables/buttons.html5.min.js"></script>
<script src="vendor/datatables/buttons.print.min.js"></script>
<script type="text/javascript">
	$("#aktarmagizleme").click(function(){
		$(".dt-buttons").toggle();
	});
</script>
<script type="text/javascript">
	$(".mobilgoster").click(function(){
		$(".gizlemeyiac").toggle();
	});
</script>

<script>
	var dataTables = $('#dataTable').DataTable({
    "ordering": true,  //Tabloda sıralama özelliği gözüksün mü? true veya false
    "searching": true,  //Tabloda arama yapma alanı gözüksün mü? true veya false
    "lengthChange": true, //Tabloda öğre gösterilme gözüksün mü? true veya false
    "info": true,
    "lengthMenu": [ 5, 10, 25, 50, 75, 100 ],
    dom: "<'row '<'col-md-6'l><'col-md-6'f><'col-md-4 d-none d-print-block'B>>rtip",
});
</script>

<script>
	var dataTables = $('#siparistablosu').DataTable({
    "ordering": true,  //Tabloda sıralama özelliği gözüksün mü? true veya false
    "searching": true,  //Tabloda arama yapma alanı gözüksün mü? true veya false
    "lengthChange": true, //Tabloda öğre gösterilme gözüksün mü? true veya false
    "info": true,
    "lengthMenu": [ 5, 10, 25, 50, 75, 100 ],
    dom: "<'row '<'col-md-6'l><'col-md-6'f><'col-md-4 d-none d-print-block'B>>rtip",
});
</script>

<?php 
if (isset($_GET['durum'])) {?>
	<?php if ($_GET['durum']=="izinsiz")  {?>	
		<script>
			Swal.fire({
				type: 'error',
				title: 'İzniniz Yok',
				text: 'Girme İzniniz olmayan bir alana girmeye çalıştınız',
				showConfirmButton: false,
				timer: 2000
			})
		</script>
	<?php } ?>
	<?php if ($_GET['durum']=="ok")  {?>	
		<script>
			Swal.fire({
				type: 'success',
				title: 'İşlem Başarılı',
				text: 'İşleminiz Başarıyla Gerçekleştirildi',
				showConfirmButton: false,
				timer: 2000
			})
		</script>
	<?php } } ?>
