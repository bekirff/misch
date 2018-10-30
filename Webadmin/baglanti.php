<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=baglanti", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>
