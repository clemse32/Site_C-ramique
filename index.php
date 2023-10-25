<?php
    session_start();
    if(isset($_SESSION['user'])){
    }else{
        echo "Pas de session en cours";
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css" />
    <title>Annie B. Céramique</title>
    <?php
    include "./Asset/Header.PHP";
    ?>
</head>

<body>


    <?php
            include "./Asset/nav.HTML";
        ?>
    </footer>

    <section>
        <div class="image-container">
            <img src="Image/061.jpg"  class="image-menu">
            <p class="texte-superpose">
                <span class="texte1">Céramique contemporaine</span><br /><br />
                <span class="texte2">Sculptures & personnages en grès</span>
            </p>
        </div>
    </section>
    <section class="dame">
        <article> <img src="Image\096.jpg" class=" image-dame"></article>
        <aside>
            <h2>Qui modèle l'argile ?</h2>

            <p>
                Je suis Annie et j'aime voir naître mes "bouilles" à travers l'argile...
                <br><br>
                « Je rêve ma peinture et je peins mon rêve. » Vincent van Gogh
                <br><br>
                J'adapte au quotidien cette citation de Van Gogh à mes sculptures, ma création en céramique.
                <br><br>
                Croiser des personnes, voir des attitudes douces, tendres ou loufoques me donnent une inspiration pour créer mes personnages, mes héros du quotidien.
                <br><br>
                Un de mes mentors m'a qualifiée de "coloriste". J'allie l'humour et les couleurs dans mon imaginaire...
            </p>
        </aside>
    </section>

    <footer>
    <?php
            include "./Asset/Footer.HTML";
        ?>
    </footer>

</body>

</html>

