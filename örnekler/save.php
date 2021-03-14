<?php
	include 'database.php';
	if(isset($_POST['Kaydet'])){
 		$name=$_POST['name'];
 		$author=$_POST['author'];
 		$price=$_POST['price'];

 		$book_save=mysqli_query($baglanti,"INSERT INTO books (name,price,author,created) VALUES ('$name','$price','$author',CURDATE())");
 		if (!$book_save) {
 			echo "kaydedilemedi";
 		}else{
 			echo "kaydedildi";
 		}

	}


?>