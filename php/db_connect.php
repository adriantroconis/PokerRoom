<?php
try {
    $db = new PDO('mysql:host=pokercriollo.com.ve;dbname=pokercriollo_heroku', 'pokercriollo_heroku', '1813mami.');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = $e->getMessage();
}
