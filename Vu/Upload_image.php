<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $targetDir = "../Image/Carroussel/";

    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        
        header("Location: Administrateur.php");
    } else {
        echo " Erreur téléchargement image.";
    }
}
?>
