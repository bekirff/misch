<?php
session_start();
session_destroy();
header("location: ürün.php");
exit();
?>
