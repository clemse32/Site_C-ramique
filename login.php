<?php


try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=ceramique', 'Annie BURETTE', 'admin', $pdo_options);

    // Récupére les données du formulaire
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Recherche de l'utilisateur en fonction du nom d'utilisateur
    $query = $bdd->prepare("SELECT * FROM user WHERE login = :login");//va chercher le user dans la base de donnée
    $query->execute(array('login' => $login)); //Va chercher le mot de passe 
    $user = $query->fetch();//execute la requète

    if ($user && ($password == $user['password'])) { //Si le mot de passe est égale au mot de passe de son user
        // Authentification réussie
        // Rediriger vers la page d'accueil (index.php)
        session_start();

        header("Location: Administrateur.php");
    } else {
        // Authentification échouée
        echo "Nom d'utilisateur ou mot de passe incorrect.";
        echo "utilisateur : " . $login;
        // ajoute un lien pour revenir à la page de connexion.
    }
} catch (Exception $ex) {
    die("Erreur: " . $ex->getMessage());
}
?>
