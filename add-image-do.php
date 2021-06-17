<?php
include 'cfg.php';
if (isset($_SESSION['user_email'])) {
?>

<?php
$mail=$_SESSION['user_email'];
$id=$_POST["fotoid"];
$link=$_POST["fotourl"];
if ($id==NULL || $link==NULL) {
  echo'<script>alert("Boş alan kalmamalı!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=add-image.php"/>';
}
else {
    $sqlfoto="SELECT * FROM foto";
    $fotocount=$baglan->query($sqlfoto);
    $fotocount1=$fotocount->num_rows;
    $temp=$fotocount1+1;
    $sqlfotoinsert="INSERT INTO foto(foto_id,foto_link,foto_No)VALUES('".$_POST["fotoid"]."','".$_POST["fotourl"]."','".$temp."')";//inputla alınacak
    $result2=mysqli_query($baglan,$sqlfotoinsert);

    $sqlfotouser_insert="INSERT INTO user_foto(user_Mail,foto_id)VALUES('".$_SESSION['user_email']."','".$_POST["fotoid"]."')";//inputla id alınacak email zaten var



if ($baglan->query($sqlfotouser_insert) === TRUE) {
    echo'<script>alert("Fotoğraf eklendi!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=list-image.php"/>';

  } else {
    echo "Error updating record: " . $baglan->error;
  }
}
?>
<?php

}
else {
    echo'<script>alert("Erişim izniniz yok!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
?>