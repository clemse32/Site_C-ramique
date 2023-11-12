<?php
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=ceramique', 'root', '', $pdo_options);

    // Récupérer les données du formulaire
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Recherche de l'utilisateur en fonction du nom d'utilisateur
    $query = $bdd->prepare("SELECT * FROM user WHERE login = :login");
    $query->execute(array('login' => $login));
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Authentification réussie
        // Rediriger vers la page d'accueil (administrateur.php)
        
        session_start();
        $_SESSION["loggedin"] = true;
        header("Location: Administrateur.php");
    } else {
        // Authentification échouée
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
} catch (Exception $ex) {
    die("Erreur: " . $ex->getMessage());
}
?>

