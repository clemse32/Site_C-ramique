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
            margin:25px 300px 200px;
        }
    
        .Connexion {
    background-color: #007bff; /* Couleur de fond du bouton, à personnaliser */
    color: #fff; /* Couleur du texte du bouton, à personnaliser */
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    position: absolute;
        top: 20px; 
        right: 20px; 
}
</style>


<body>




    <?php
            include "Asset/nav.HTML";
        ?>
    </footer>

    <section>
        <section>
        <div class="image-container1">
            <img src="Image/038.jpg" alt="Description de l'image" class="image-menu">
            <p class="texte-superpose1">
                <span class="texte3">Contacter</span><br /><br />
            </p>
            <p class="texte-superpose2">
                <span class="texte4">Annie B. Céramique<br></span>
                <div class="textecontact">
                <span class="texte5">Contactez-moi pour la réalisation de projets sur mesure, pour discuter des techniques et échanger des modèles.
                Vous pouvez me joindre par email ou sur les réseaux sociaux.<br>
                Facebook <br>
                Instagram <br>
                Adresse e-mail: annieb.ceramique@gmail.com <br>
                Numéro de téléphone: +33603033453 </span>
                </div>
            </p>
        </div>
    </section>
     
    </section>
   <section>
    <div 
        id="map">
    </div>

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
    }

    window.onload = function () {
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };
</script>
</html>
