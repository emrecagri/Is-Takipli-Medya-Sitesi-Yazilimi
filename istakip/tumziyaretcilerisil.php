<?php
 
include 'vtbaglan.php';
 
$sonuc=mysqli_query($baglanti,"DELETE from ziyaretciler");
 
if($sonuc>0){
echo "Başarıyla silindi.";
header( "refresh:0;url=index.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
 
?>