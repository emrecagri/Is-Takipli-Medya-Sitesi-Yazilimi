<?php 
$host=""; //Host adınızı girin varsayılan olarak Localhosttur eğer bilginiz yoksa bu şekilde bırakın
$veritabani_ismi=""; //Veritabanı İsminiz
$kullanici_adi=""; //Veritabanı kullanıcı adınız
$sifre=""; //Kullanıcı şifreniz

try {
	$db=new PDO("mysql:host=$host;dbname=$veritabani_ismi;charset=utf8",$kullanici_adi,$sifre);
	$db->exec("SET NAMES UTF8");
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {
	echo $e->getMessage();
}

?>
