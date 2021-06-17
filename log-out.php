<?php
include 'cfg.php';
if (isset($_SESSION['user_email'])) {
    
?>

<?php

session_destroy();

echo'<meta http-equiv="refresh" content=" 0.5; index.php">';

?>


<?php

}
else {
    echo'<script>alert("Erişim izniniz yok!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
?>
