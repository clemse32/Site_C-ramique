<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["image_src"])) {
        $imagePath = $_POST["image_src"];

        if (file_exists($imagePath)) {
            if (unlink($imagePath)) {
                echo "success";
            } else {
                echo "Erreur lors de la suppression de l'image.";
            }
        } else {
            echo "L'image n'existe pas.";
        }
    } else {
        echo "Paramètre 'image_src' manquant.";
    }
} else {
    echo "Méthode de requête incorrecte.";
}
?>
