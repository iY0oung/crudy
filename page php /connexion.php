<?php
/*  // connexion.
$serveurname ="localhost";
$username ="root"
$password ="";
$dbname = "crudydb"

// se connecter a la db 
$conn = new mysqli($serveurname,$username,$password,$dbname);

// verifier si ça marche 
if ($conn->connect_error) */





// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $utilisateur = $_POST['login'];
    $motdepasse = $_POST['password'];

    // Validation des identifiants
    if ($utilisateur == $utilisateur_correct && $motdepasse == $motdepasse_correct) {
        $_SESSION['login'] = $utilisateur;
        header("Location: tableau_de_bord.php");
        exit();
    } else {
        $erreur = "Identifiant ou mot de passe incorrect.";
    }
}
?>
