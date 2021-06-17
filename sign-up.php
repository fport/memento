<?php
include 'cfg.php';
if (!(isset($_SESSION['user_email']))) {
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
            <form action="sign-up-do.php" method="POST">
                <div class="container">
                    <label for="uname"><b>Ad</b></label>
                    <input type="text" placeholder="Adınızı giriniz" name="uname" required>

                    <label for="psw"><b>Soyad</b></label>
                    <input type="text" placeholder="Soyad Giriniz" name="usurname" required>

                    <label for="uname"><b>Mail Adresi</b></label>
                    <input type="text" placeholder="Mail Adresinizi Giriniz" name="umail" required>

                    <label for="psw"><b>Şifre</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit" name="signupbutton">Üye Ol</button>
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