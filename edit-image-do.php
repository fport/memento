<?php
include 'cfg.php';
if (isset($_SESSION['user_email'])) {
    
?>

<?php
$fotoid_eski=$_POST['eskiid'];

$yenifotolink=$_POST['fotolink'];





if (($fotoid_eski!=NULL)) {
    $updatefoto="UPDATE foto SET foto_link='$yenifotolink' WHERE foto_id='$fotoid_eski'";
    
    
    if ($baglan->query($updatefoto) === TRUE) {
        echo'<script>alert("Fotoğraf güncellendi!");</script>
  <meta http-equiv = "refresh" content = " 0.5 ; url=list-image.php"/>';
    } else {
      echo "Error updating record: " . $baglan->error;
    }
}
else {
    echo'<script>alert("Boş alan kalmamalı");</script>
  <meta http-equiv = "refresh" content = " 0.5 ; url=list-image.php"/>';
}

?>
<?php

}
else {
    echo'<script>alert("Erişim izniniz yok!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
?>