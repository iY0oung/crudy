<?php
session_start();
if ($_SESSION['role'] !== 'client') {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
</head>
<body>
    <h1>Bienvenue, Client</h1>
    <p>Vous avez accès aux fonctionnalités client.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
