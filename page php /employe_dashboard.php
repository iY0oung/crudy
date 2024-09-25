<?php
session_start();
if ($_SESSION['role'] !== 'employe') {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employé Dashboard</title>
</head>
<body>
    <h1>Bienvenue, Employé</h1>
    <p>Vous avez accès aux fonctionnalités d'employé.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
