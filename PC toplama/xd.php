 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<?php

   session_start();

   if(isset($_SESSION['user'])) 
   {

    echo"(".$_SESSION['user']['kuladi'].")";

   }
   else
    {
         echo"giriş yapılmamış";
         header("Location:index.php");
    }
   
   
   


?>


 <?php
 include('baglan.php');
 
    $id=$_GET["id"];
    $sorgu=$DB->prepare("SELECT * FROM pc WHERE id=:id");
    $sorgu->execute(array(":id"=>$id));
    $row = $sorgu->fetch(PDO::FETCH_ASSOC);

  ?>



 

<!DOCTYPE html>

<html lang="en">

<head>







   <meta charset="UTF-8">

   <meta name="viewport" content="width-device-width,initial-scale=1.0">


   <meta http-equiv="X-UA-Compatible" content="ie=edge">


   <title>Bilgisayar Toplama</title>




   
</head>

<body>

   <label for="">İSLEMCİ</label> <br>
   
  <form action="" method="post">
 
 <input type="text" name="islemci" value="<?php echo $row["islemci"];?>">

</select>


 <input type="text" name="ekran" value="<?php echo $row["ekran"];?>">
</select>

<input type="text" name="ram" value="<?php echo $row["ram"];?>">
</select>
 
  <input type="text" name="anakart" value="<?php echo $row["anakart"];?>">
</select>

<input type="text" name="psu" value="<?php echo $row["psu"];?>">
</select>

  <input type="text" name="kasa" value="<?php echo $row["kasa"];?>">
</select>
  <button>Ekle</button>
  </form>

  



 
<?php 

if ($_POST)
{
   $islemci=$_POST["islemci"]; 
    $ekran=$_POST["ekran"];  
    $ram=$_POST["ram"];    
    $anakart=$_POST["anakart"];
   $psu=$_POST["psu"];
   $kasa=$_POST["kasa"];

   $guncelle = $DB->prepare("UPDATE pc SET islemci=:islemci,ekran=:ekran,ram=:ram,anakart=:anakart,psu=:psu,kasa=:kasa WHERE id=:id");
   $guncelle->execute(array(":islemci"=>$islemci,":ekran"=>$ekran,":ram"=>$ram,":anakart"=>$anakart,":psu"=>$psu,":kasa"=>$kasa, ":id"=>$id));

   if($guncelle)
   {

       echo"başarılı";
      header("location:sepet3.php");

   }else{
      "hata";
   }
}

?>



</body>


</html>

