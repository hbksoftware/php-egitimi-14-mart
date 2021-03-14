<?php
	include 'database.php';
	$books=mysqli_query($baglanti,'Select * From books');
	if(!$books){
		exit("Sizin Sorgunuzda hata var");
	}

	if
?>


<table border="1">
	<tr>
		<th>Kitap İsmi</th>
		<th>Kitap Yazarı</th>
		<th>Kitap Fiyatı</th>
		<th>Kitap Kayıt Tarihi</th>
	</tr>

	<?php 
	while ($book=mysqli_fetch_array($books)) {
		echo '<tr><td>'.$book['name'].'</td>';
		echo '<td>'.$book['author'].'</td>';
		echo '<td>'.$book['price'].' TL</td>';
		echo '<td>'.$book['created'].'</td></tr>';
	}

	?>

</table>
</br></br></br></br></br></br></br></br>
<form action="save.php" method="post">
	<label>Kitap İsmi</label>
	<input type="text" name="name">
</br></br>
	<label>Kitap Yazarı</label>
	<input type="text" name="author">
	</br></br>
	<label>Kitap Fiyatı</label>
	<input type="text" name="price">
	</br></br>
	<input type="submit" name="Kaydet">
</form>