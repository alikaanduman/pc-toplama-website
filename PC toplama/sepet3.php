




<?php
include('baglan.php');
?>

<a href="anasayfa.php"> <button>geri dön</button></a>


<?php
  $cek=$DB->query("SELECT * FROM pc");
  $cek->execute();
  while($row = $cek->fetch(PDO::FETCH_ASSOC)){
    ?>

<div class="table-responsive">

<table class="table table-borderless table-dark">
   <td> <?= $row['islemci']; ?></td>
   <td> <?= $row['ekran']; ?></td>
   <td> <?= $row['ram']; ?></td>
   <td> <?= $row['anakart']; ?></td>
   <td> <?= $row['psu']; ?></td>
   <td> <?= $row['kasa']; ?>  </td>

    <td><button type="button" class="btn btn-primary">
     <a href="xd.php?id=<?php echo $row["id"];?>"><font color="0">Düzenle</font></a>  

   </button>

   <button type="button" class="btn btn-danger">
     
     <a href="sil.php?id=<?php echo $row["id"];?><font color="0">Sil</font></a>
   </button>
  
</table>

</div>


<?php } ?>



