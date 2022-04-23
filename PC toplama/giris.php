<?php 
session_start();

include('baglan.php');

$kuladi=$_POST['kuladi'];
$sifre=$_POST['sifre'];

if (!$kuladi || !$sifre) 
{
	die("Lütfen boş alan bırakmayınız.");
}

$user = $DB->query("SELECT * FROM veri WHERE kuladi='$kuladi' AND sifre='$sifre'")->fetch();

if($user)
{
	$_SESSION['user'] = $user;

	header("location:anasayfa.php");
}
else
{
	echo "Bilgiler hatalı";
}