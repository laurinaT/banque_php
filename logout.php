<?php
// Page qui gère la déconnexion 
session_start();
if(isset($_SESSION["userName"])) {
    // Vide et détruit toutes les informations en session
    session_unset();
    session_destroy();
    // Redirige sur login
    header("Location: home.php");
    exit;
}
?>