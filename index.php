
<?php
include "cfg.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="app-container">
        <div class="app-wrapper">
        <!-- Navbar -->
       <?php
       include "nb.php";
       ?>
        <!-- Main -->
        <div class="main-container">
            <h1>Hosgeldininiz!</h1>
            <p>Güzel anılarınızı bir arada saklamak ister misiniz 🥳</p>
            <?php
            if (!(isset($_SESSION['user_email']))) {
            
        ?>
        <h3>Hemen Üye olarak başlayabilirsin <a href="sign-up.php" style="color: #617df6;">Üye Ol</a> </h3>
            <?php 
        
        }
            ?>
            </div>
        </div>
    </div>
</body>
</html>