<?php
$baglanti=mysqli_connect('localhost','root','');
if(!$baglanti){
	exit("Mysql Bağlantısı Sağlanmadı");
}
$veritabani=mysqli_select_db($baglanti,'libraries');
if(!$veritabani){
	exit("Veritabani Bağlantısı Sağlanmadı");
}

?>