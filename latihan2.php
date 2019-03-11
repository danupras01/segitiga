<html>
<h3>hitung Luas Segitiga</h3>
<p>Masukkan ukuran alas dan tinggi segitiga</p>
<form action="luas-segitiga.php" method="post">
	Alas :<input type="text" name="alas"><br>
	Tinggi :<input type="text" name="tinggi"><br>
	<input type="submit" name="submit" value="Hitung">
<form/>
<?php
if (isset($_POST ['submit'])){
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	$Luas_segitiga = 1/2 * $alas * $tinggi; //Menghitung luas segitiga
	echo "Luas segitiga dengan alas : $alas, dan $tinggi <br>";
	echo "yaitu $Luas_segitiga";
}
?>
</html>