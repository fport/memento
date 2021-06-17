<?php
include 'cfg.php';
if (!(isset($_SESSION['user_email']))) {
?>

<?php 
$gecici=$_POST["umail"];
$sql="SELECT user_mail FROM user WHERE user_mail='$gecici'";
$srg1=mysqli_query($baglan,$sql);
$srg1f=$srg1->fetch_assoc();

 if(isset($_POST["signupbutton"])){
	

	if(isset($srg1f)){

		echo "<script type='text/javascript'>alert('Bu hesap mevcut,lütfen giriş yapınız!')</script>
		<meta http-equiv = 'refresh' content = ' 0 ; url=log-in.php'/>";
	
	}
	else{
	 if(($_POST["uname"] && $_POST["usurname"] && $_POST["umail"]&& $_POST["psw"])!=NULL){//ad soyad şifre email signup phpdeki formdan geliyor postların hepsi
	
	$sql2="INSERT INTO user(user_mail,user_adi,user_soyadi,user_sifre)values('".$_POST["umail"]."','".$_POST["uname"]."','".$_POST["usurname"]."','".$_POST["psw"]."')";

	$srg2=mysqli_query($baglan,$sql2);
	?>

	<meta http-equiv = "refresh" content = " 0 ; url=index.php"/>
<?php	
}
	 else  {
	 echo "<script type='text/javascript'>alert('Boş alan kalamaz!');</script>";}
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