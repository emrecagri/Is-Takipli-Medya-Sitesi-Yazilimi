<?php 
$baglanti=mysqli_connect('veritabanı sunucunuzun adını buraya yazın','veritabanı kullanıcı adınızı buraya yazın','veritabanı şifrenizi buraya yazın','veritabanı adnızı buraya yazın');
if(!$baglanti) {
echo "Veritabanına bağlanılamadı ".mysqli_connect_error();

}

//tr karakter sorunu çözümü
mysqli_set_charset($baglanti,"uft8mb4");
mysqli_query($baglanti,"SET NAMES 'utf8'  ");
mysqli_query($baglanti,"SET CHARACTER SET utf8");
mysqli_query($baglanti,"SET COLLATION_CONNECTION = 'utf8_general_ci' ");
//tr karakter sorunu çözümü

?>