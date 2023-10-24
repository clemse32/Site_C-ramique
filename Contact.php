<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" 
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <title>Annie B. Céramique</title>
  <?php
    include "./Asset/Header.HTML";
    ?>
</head>
<style>
    #map {
    height: 400px;
    margin: 25px 300px 50px;
}

    form {
    text-align: center;
    max-width: 400px;
    margin: 0 auto;
  }

  .form-group {
    width: 48%; 
    margin-bottom: 10px;
    text-align: left;
  }

 
  .form-group input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 5px;
    cursor: pointer;
    border-radius: 5px;
  }

</style>


<body>




    <?php
            include "Asset/nav.HTML";
        ?>
    </footer>

    <section>
    <div class="image-container1">
        <img src="Image/038.jpg" alt="Description de l'image" class="image-menu">
        <div class="texte-superpose1">
            <span class="texte3">Contacter</span><br><br>
        </div>
        <div class="texte-superpose2">
            <span class="texte4">Annie B. Céramique</span>
        </div>
        <div class ="texte-superpose3">
            <p class="texte5">
                Contactez-moi pour la réalisation de projets sur mesure, pour discuter des techniques et échanger des modèles.
                Vous pouvez me joindre par email ou sur les réseaux sociaux.<br> <br>
                <a href="https://www.facebook.com/" > Facebook</a> <br>
                <a href="https://www.instagram.com/annieb.ceramique/" > Instagram</a> <br><br>
                Adresse e-mail : annieb.ceramique@gmail.com <br>
                Numéro de téléphone : +33603033453
            </p>
        </div>

    </div>
 
     </section>

    <section>
    <div 
        id="map">
    </div>

 <form action="" method="POST">
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom">
    </div>

    <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom">
    </div>

    <div class="form-group">
        <label for="email">E-Mail :</label>
        <input type="text" name="email">
    </div>

    <div class="form-group">
        <label for="message">Message :</label>
        <textarea name="message" rows="10" cols="40"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Envoyer">
    </div>
    </form>
   </section>

    <footer>
    <?php
            include "Asset/Footer.HTML";
        ?>
    </footer>

</body>

<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>
<script type="text/javascript">
    // On initialise la latitude et la longitude du nouvel emplacement
    var lat = 44.449083;
    var lon = 2.493333;
    var macarte = null;

    // Fonction d'initialisation de la carte
    function initMap() {
        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        macarte = L.map('map').setView([lat, lon], 11);

        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(macarte);

        // Nous ajoutons un marqueur
        var marker = L.marker([lat, lon]).addTo(macarte);
        marker.bindPopup("Je suis ici").openPopup();
    }

    window.onload = function () {
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };
</script>
</html>
