<div class="navbar-container">
                <div class="navbar-content">
                    <h3>Furkan Portakal</h3>
                    <ul class="navbar-item"> 
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <?php
                            if (isset($_SESSION['user_email'])) {
                            
                            
                        ?>
                         <li><a href="add-image.php">Resim Ekle</a></li>
                        <li><a href="list-image.php">Resimleri Görüntüle</a></li>
                        <li><a href="log-out.php">Çıkış Yap</a></li>
                       <?php
                            }
                            else{
?>
<li><a href="log-in.php">Giriş Yap</a></li>
                        <li><a href="sign-up.php">Üye Ol</a></li>
<?php
                       }
                       ?>
                        
                      
                    </ul>
                </div>
            </div>