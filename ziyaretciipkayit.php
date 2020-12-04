<?php 

/*
ziyaretciyi veriyabanına kayıt eden php kodu. Bu kodu sitenin her sayfasına iclude ediyoruz.

sql tablosu kodu:


CREATE TABLE ziyaretciler (
  id int(11) NOT NULL,
  dis_adres varchar(45) NOT NULL,
  ziyaretci_ip varchar(18) NOT NULL,
  ic_adres varchar(100) NOT NULL,
  giris_tarihi date NOT NULL,
  pcadi varchar(200) DEFAULT NULL,
  tarayici varchar(200) DEFAULT NULL,
  tarayicidili varchar(200) DEFAULT NULL,
  gercekip varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


ALTER TABLE ziyaretciler
  ADD PRIMARY KEY (id);


ALTER TABLE ziyaretciler
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

*/
include 'istakip/vtbaglan.php';
if ( isset ( $_SERVER['HTTP_REFERER'] ) )
{

// Regular expression ile sitenize adres veren sunucunun domain adresini alıyoruz
 preg_match('@^(?:http://)?([^/]+)@i', $_SERVER['HTTP_REFERER'], $matches);
$dis_adres = $matches[1];
 // Ziyaretçinin ip adresini alıyoruz
$ziyaretci_ip = $_SERVER['REMOTE_ADDR'];
 // İstek yapılan sayfanın adresini alıyoruz
$ic_adres =$_SERVER['REQUEST_URI'];

	$pcadi = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$tarayici = @$_SERVER['HTTP_USER_AGENT'];
	$tarayicidili = @$_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$gercekip = @$_SERVER['HTTP_X_FORWARDED_FOR'];

	
	
// Veritabanına bağlantı yapıyoruz	

// Bugünkü tarihi kontrol etmek üzere alıyoruz
$today_date=date("Y-m-d");
// Daha önce ziyeretçinin aynı günde aynı ip adresle veya aynı sayfaya istek yapıp yapmadığını   
// burada kontrol ediyoruz. Böylece aynı verileri tekrar girmekten kurtuluyoruz
$sql="select * FROM ziyaretciler where (ziyaretci_ip= '$ziyaretci_ip') AND (giris_tarihi = '$today_date') AND (dis_adres = '$dis_adres')";
$result=mysqli_query($baglanti, $sql); 
$total =mysqli_num_rows($result);
 // 0 değilse daha önce bu verinin girilmediğini anlıyoruz
	if ( $total == 0 )	
	{
	$sql="INSERT INTO ziyaretciler VALUES ('NEW.id' ,'$dis_adres','$ziyaretci_ip','$ic_adres',NOW(),'$pcadi','$tarayici','$tarayicidili','$gercekip')";
	mysqli_query($baglanti, $sql); 
	}

	
}

// Bu kısımda ziyaretçi sitenizi direk olarak ziyaret ettiğinde yapılacak işi yapıyoruz.
// Tek farkı HTTP_REFERER bilgisine direct yazıyoruz. 

else 

{
	

$ziyaretci_ip = $_SERVER['REMOTE_ADDR'];
$ic_adres =$_SERVER['REQUEST_URI'];

$today_date=date("Y-m-d");
$sql="select * FROM ziyaretciler where (ziyaretci_ip= '$ziyaretci_ip') AND (giris_tarihi = '$today_date') AND (dis_adres = 'direct') ";
$result=mysqli_query($baglanti, $sql); 
$total =mysqli_num_rows($result);

	if ( $total == 0 )	
	{
	$sql="INSERT INTO ziyaretciler VALUES ('NEW.id' ,'direct','$ziyaretci_ip','$ic_adres',NOW(),'$pcadi','$tarayici','$tarayicidili','$gercekip')";
	mysqli_query($baglanti, $sql);
	}
}
   
?>