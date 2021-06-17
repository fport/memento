<?php
include 'cfg.php';
if (!(isset($_SESSION['user_email']))) {
?>
<?php

$usermail= $_POST['umail'];

$sqluser1="SELECT * FROM user WHERE user_mail='$usermail'";
$sqluser2 = "SELECT * FROM user";
$srg1 = $baglan->query($sqluser2);
$kont = $baglan->query($sqluser1);
$kontf= $kont->fetch_assoc();
if($srg1->num_rows>0){
    while($line = $srg1->fetch_assoc()){

       
       if($_POST['umail']==$line["user_mail"] && $_POST['psw']==$line["user_sifre"]){
           
           $flag1=1;
           $_SESSION['user_email']= $kontf["user_mail"];
           $_SESSION['user_adi']=$kontf["user_adi"];
           $_SESSION['user_soyadi']=$kontf["user_soyadi"];
           $_SESSION['user_sifre']=$kontf["user_sifre"];
           
          
           echo'<script>alert("Hoşgeldiniz!");</script><meta http-equiv="refresh" content=" 0.5; index.php">';
       
           
           }
       }
       if($flag1!=1){
           echo'<script>alert("Yanlış bilgi girdiniz!");</script>
           <meta http-equiv="refresh" content=" 0; log-in.php">';

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