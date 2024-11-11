<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}

echo "<h1>Bem-vindo, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
echo "<a href='logout.php'>Sair</a>";
?>
