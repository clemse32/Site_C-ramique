<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imageSrc = $_POST["image_src"];

    if (file_exists($imageSrc)) {
        if (unlink($imageSrc)) {
            echo "success";
        } else {
            echo "Erreur lors de la suppression de l'image.";
        }
    } else {
        echo "L'image n'existe pas.";
    }
}
?>
