<?php
session_start();
ob_start();
session_destroy();
echo "Çıkış yaptınız. Ana sayfaya yönlendiriliyorsunuz";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>