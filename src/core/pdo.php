<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=alibaba_db','admin','admin');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>