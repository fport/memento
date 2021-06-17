<?php
include 'cfg.php';
if (isset($_SESSION['user_email'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/sign-in.css">
    <style>
        .card {

          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 400px;
          display: flex;
          margin-top: 2rem ;
        }
        .card-container{
            width: 50%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
           
        }
        
        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        
        .container {
          padding: 2px 16px;
        }
        </style>
</head>

<body>
    <div class="app-container">
        <div class="app-wrapper">
            <!-- Navbar -->
            <?php
       include "nb.php";
       ?><div class="card-container">
       <?php

$priv_mail=$_SESSION['user_email'];

            $priv_foto="SELECT * FROM foto RIGHT JOIN user_foto ON foto.foto_id=user_foto.foto_id WHERE user_foto.user_Mail='$priv_mail'";
            
            
            $foto_sayi= $baglan->query($priv_foto);
            $foto_sayi1=$foto_sayi ->num_rows;

for ($i=1; $i <=$foto_sayi1 ; $i++) { 
    $bul_foto= "SELECT * FROM foto RIGHT JOIN user_foto ON foto.foto_id=user_foto.foto_id WHERE user_foto.user_Mail='$priv_mail' AND foto_no='$i'";
    $foto= $baglan->query($bul_foto);
    $foto1= $foto->fetch_assoc();
    $foto_id_dizi[$i]=$foto1['foto_id'];
    $foto_no_dizi[$i]=$foto1['foto_no'];
    $foto_link_dizi[$i]=$foto1['foto_link'];


?>
            <!-- Main -->
            
                <div class="card">
                    <img src="<?php echo $foto_link_dizi[$i]; ?>" alt="Avatar" style="width: 200px; height: 200px;">
                    <div class="container">
                        <h4><b>Fotoğraf Adı:<?php echo $foto_id_dizi[$i]; ?></b></h4>
                        <p>Fotoğraf Numarası:<?php echo $foto_no_dizi[$i]; ?> </p>
                        <div class="option">
                            <form action="delete-image.php" method="POST">
                                <input type="hidden" name="silbuton" value="<?php echo $foto_id_dizi[$i]; ?>">
                        <button type="submit" >Sil</button>
                    </form>
                    <form action="edit-image.php" method="POST">
                                <input type="hidden" name="editbuton" value="<?php echo $foto_id_dizi[$i]; ?>">
                        <button type="submit" >Düzenle</button>
                    </form>
                       
                    </div>
                    </div>
                </div>
            
           

            <?php
}
                ?> 
                </div>
        </div>
    </div>
</body>

</html>

<?php

}
else {
    echo'<script>alert("Erişim izniniz yok!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
?>