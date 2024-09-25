<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Bienvenue, Admin</h1>
    <p>Vous avez accès à toutes les fonctionnalités administratives.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
