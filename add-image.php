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
            <form action="add-image-do.php" method="POST">
                <div class="container">
                    <label for="fotoid"><b>Fotoğrafınızı adlandırın.</b></label>
                    <input type="text" placeholder="Fotoğrafınızı adlandırın." name="fotoid" required>

                    <label for="fotourl"><b>Fotoğrafınızın urlini giriniz.</b></label>
                    <input type="text" placeholder="Fotoğrafınızın urlini giriniz." name="fotourl" required>

                    <button type="submit">Memonta'ya Yükle</button>
                </div>
            </form>
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