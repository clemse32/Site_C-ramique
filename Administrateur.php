<?php
session_start();
if (isset($_SESSION["loggedin"])) {
} else {
    echo "Pas de session en cours";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css" />
    <title>Annie B. Céramique</title>
</head>
<body>
    <h1>Compte Administration</h1>
    <section>
        <h2>Récupération des images du Carrousel</h2>
        <div id="imageList">Images du Carrousel</div>
        <div id="validationStatus"></div>
        <button onclick="loadImagesFromXML()">Charger les images</button>
    </section>
    <section>
        <h2>Modification du texte</h2>
    </section>
    <section>
        <h2>Récupération des messages</h2>
    </section>
</body>
<script>
function loadImagesFromXML() {
    let xmlhttp = new XMLHttpRequest();
    // Méthode évènementielle
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                // La requête a réussi (statut 200)
                let rootNode = this.responseXML;
                let imageNodes = rootNode.getElementsByTagName('image');
                let imageList = document.getElementById('imageList');
                let validationStatus = document.getElementById('validationStatus');

                if (imageNodes.length > 0) {
                    let imageHTML = "<ul>";
                    for (let i = 0; i < imageNodes.length; i++) {
                        let filename = imageNodes[i].getElementsByTagName('filename')[0].textContent;
                        imageHTML += "<li>" + filename + "</li>";
                    }
                    imageHTML += "</ul>";
                    imageList.innerHTML = "Liste des images : " + imageHTML;
                    validationStatus.innerHTML = "Le fichier XML est correctement formé.";
                } else {
                    imageList.innerHTML = "Aucune image trouvée dans le fichier XML.";
                    validationStatus.innerHTML = "Le fichier XML est incorrect ou vide.";
                }
            } else {
                // La requête a échoué
                console.error("Erreur lors de la requête : Statut " + this.status);
                console.error("Réponse serveur : " + this.responseText);
                document.getElementById('validationStatus').innerHTML = 'ERREUR DE TRANSMISSION';
            }
        }
    }

    // Envoi de la requête
    xmlhttp.open('GET', 'XML.xml', true);
    xmlhttp.send();
}

</script>
</html>
