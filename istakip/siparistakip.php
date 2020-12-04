<?php 
include 'vtbaglan.php';



//yanıtlanacak mesaj ID'yi alıyoruz
$sip_no = $_GET["sip_no"];

if (empty($_GET["sip_no"])) { //formdan gelen veri varmı diye bakar
echo "Lüften Sipariş Konudu Giriniz.<br><a href='takipform.php'>Takip Sayfasına Dön</a>";
	} else {

//select sorgusu ile ders tablosundan ilgili kaydı seçiyoruz
$sql="select * from siparis WHERE sip_no='".$sip_no."'";

//Sorgumuzu veritabanına gönderiyoruz.
$sonuc1= mysqli_query($baglanti,$sql);

//Sorgunun sonucunda dönen satır sayısına mysql_num_rows() fonksiyonu ile bakıyoruz
$satirsay=mysqli_num_rows($sonuc1);

if ($satirsay>0)
{
    $satir = mysqli_fetch_array($sonuc1);
    //Kayıt bulundu
    //Bu kısımda form içine veritabanında çekilen değerleri yazıyoruz.

$siparisdurum = $satir['sip_durum'];


echo
"<table style='width: 550px;'>
<tbody>
<tr>
<td colspan='2'><h3><center>Sayın " . $satir['musteri_isim'] . "</center></h3><br><hr></td>
</tr>
<tr>
<td>Siparişinizin Tahmini Teslim Tarihi:</td>
<td>". $satir['sip_teslim_tarihi'] . "</td>
</tr>
<tr>
<td>Siparişinizin Durumu:</td>
<td>". $satir['sip_durum'] ."</td>
</tr>
<tr>
<td>Siparişinizin Ücreti:</td>
<td>" . $satir['sip_ucret'] . " TL</td>
</tr>
<tr>
<td>Ücret Ödemesi:</td>
<td>" . $satir['sip_odeme'] . "</td>
</tr>
</tbody>
</table>
<br><br>
<a href='../index.php'><button  class='btn btn-primary'>Çıkış Yap</button></a>"
;

 
} else {
//Mesaj bulunamadı
echo "Sipariş Kodunu Hatalı Girdiniz. Lütfen Tekrar Deyein.<br><a href='takipform.php'>Takip Sayfasına Dön</a>";
}
}
 

?>