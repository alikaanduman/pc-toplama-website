<?php
 


include('baglan.php');


$kuladi=$_POST['kuladi'];
$sifre=$_POST['sifre'];

if (!$kuladi || !$sifre) 
{
	die("Lütfen boş alan bırakmayınız.");
}

$ekle=$DB->prepare("INSERT INTO veri SET kuladi = ?,sifre=?");
$ekle->execute([$kuladi,$sifre]);

if($ekle)
{

	echo "Kayıt oldunuz";
	header("Location:index.php");

}
else {

	echo "HATA";
}

