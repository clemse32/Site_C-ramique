<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" />
    <title>Annie B. Céramique</title>
  
</head>
<style>


.image-dame {
    width: 100%; 
    height: auto;
}
.Texte_propos{
    position: relative; 
  top: 100px;
}

.footerbloquer {
    position: fixed;
    bottom: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f8f2e8;
}


</style>
<body>

<?php
    include "./Asset/Header.PHP";
    ?>


    <?php
            include "Asset/nav.HTML";
        ?>
    </footer>


    <section class="dame">
        <article> <img src="Image\094.jpg" class=" image-dame"></article>
        <aside class="Texte_propos">
            <h2>Qui modèle l'argile ?</h2>

            <p>
            Passionnée d'arts plastiques, j'ai commencé à toucher l'argile il y a plus de 20 ans.
             J'enseigne auprès d'adultes et d'enfants les différentes techniques céramiques depuis 15 ans.
              Mes pièces, tout d'abord hétéroclites servant de modèles à mes élèves, sont devenues plus pour depuis maintenant 8 ans.
                <br><br>
            De recherches en rencontres, j'ai orienté mon travail vers la sculpture de personnages en grés colorés, tendres et drôles.
            </p>
            <h3>L'histoire de mes "bouilles"</h3>
            <p>
            Croiser des personnes, voir des attitudes douces, 
            tendres ou loufoques me donnent une inspiration pour créer mes personnages, mes héros du quotidien.   
            </p>

        </aside>
     
    </section>

    


    <footer class ="footerbloquer">
    <?php
            include "Asset/Footer.HTML";
        ?>
    </footer>


</body>

</html>
