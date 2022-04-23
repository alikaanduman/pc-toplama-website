<?php

include("baglan.php");

?>

<?php

$gelenid=$_GET["id"];
$sil = $DB->prepare("DELETE FROM pc WHERE id=?");
$islem = $sil ->execute(array($gelenid));
if ($islem) {
 
  header("Location:sepet3.php");
}



  ?>