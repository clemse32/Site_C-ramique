<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $connect = mysqli_connect("mysql-ceramique.alwaysdata.net", "ceramique", "Clement32!", "ceramique_bdd" );
    
    if(isset($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['message'])){

        $nom = mysqli_real_escape_string($connect, $_POST['nom']);
        $prenom = mysqli_real_escape_string($connect, $_POST['prenom']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $message = mysqli_real_escape_string($connect, $_POST['message']);
        
    }
    

    $sql ="INSERT INTO avis_message (Prenom, Nom, Mail, Message) value('$prenom', '$nom', '$email', '$message')";

    if (mysqli_query($connect, $sql)) {
        echo 'Message bien envoyé !';
    } else {
        echo "Veuillez m'envoyer un mail via mon addresse mail ci-dessous";
    }

mysqli_close($connect);

}
?>