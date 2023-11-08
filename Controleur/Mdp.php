<?php
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;//évite injection sql
    $bdd = new PDO('mysql:host=localhost;dbname=ceramique', 'root', '', $pdo_options);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Récupérer les données du formulaire
        $login = "clem";
        $password = "admin";
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hacher le mot de passe
       
        $query = $bdd->prepare("INSERT INTO user (login, password) VALUES (:login, :password)"); // Insérer le mdp dans la base de données
        $query->execute(array('login' => $login, 'password' => $hashedPassword));
    }
} catch (Exception $ex) {
    die("Erreur: " . $ex->getMessage());
}
?>