<?php
include('baglan.php');

$islemci=$_POST['islemci'];
$ekran=$_POST['ekran'];
$ram=$_POST['ram'];
$anakart=$_POST['anakart'];
$psu=$_POST['psu'];
$kasa=$_POST['kasa'];


if (!$islemci || !$ekran ||!$ram || !$anakart|| !$psu|| !$kasa) 
{
	die("Lütfen boş alan bırakmayınız.");
}

$ekle=$DB->prepare("INSERT INTO pc SET islemci = ?,ekran=?,ram = ?,anakart=?,psu=?,kasa=?");
$ekle->execute([$islemci,$ekran,$ram,$anakart,$psu,$kasa]);

if($ekle)
{

	echo "Ürün başarılı bir şekilde eklendi";
	header("location:sepet3.php");
}
else {

	echo "HATA";
}
