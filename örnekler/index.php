<?php
$baglanti=mysqli_connect('localhost','root','');
if(!$baglanti){
	exit("Mysql Bağlantısı Sağlanmadı");
}else{
	echo "Bağlantı sağlandı";
}

$veritabani=mysqli_select_db($baglanti,'veritabani');
if(!$veritabani){
	exit("Veritabani Bağlantısı Sağlanmadı");
}else{
	echo "Veritabani Bağlantısı sağlandı";
}
$customers=mysqli_query($baglanti,'Select * From kullanicilar');
$customers=mysqli_fetch_all($customers);
var_dump($customers)
// while($customer=mysqli_fetch_array($customers)){
// 	var_dump($customer);
// }

?>