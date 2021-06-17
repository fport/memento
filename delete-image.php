<?php
include 'cfg.php';
if (isset($_SESSION['user_email'])) {
?>

<?php
$fotosil=$_POST["silbuton"];

$foto_sayisi = "SELECT * FROM foto";
$foto_sayi= $baglan->query($foto_sayisi);
$foto_sayi1=$foto_sayi ->num_rows;

$find_foto= "SELECT * FROM foto WHERE foto_id='$fotosil'";
$foto= $baglan->query($find_foto);
$foto1= $foto->fetch_assoc();

$foto_sira=$foto1["foto_no"];
     


$dlt_foto = "DELETE FROM foto WHERE foto_id='$fotosil'";
$dlt_userfoto = "DELETE FROM user_foto WHERE foto_id='$fotosil'";

$result2=$baglan->query($dlt_userfoto);

 
if ($baglan->query($dlt_foto) === TRUE) {
    echo'<script>alert("Fotoğraf silindi!");</script>
        <meta http-equiv = "refresh" content = " 0.5 ; url=list-image.php"/>';
  } else {
    echo "Error deleting record: " . $baglan->error;
  }

if($foto_sayi1!=$foto_sira){
    $update_foto2 = "UPDATE foto SET foto_no =$foto_sira  WHERE foto_no =$foto_sayi1 ";
    $result=$baglan->query($update_foto2);

  }

?>
<?php

}
else {
    echo'<script>alert("Erişim izniniz yok!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
?>