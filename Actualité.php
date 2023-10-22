<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" />
    <title>Annie B. Céramique</title>

    <style>
    .fond-actualite {
      background-image: url('Image/005.jpg');
      background-size: cover; 
      background-position: center; 
      background-repeat: no-repeat; 
      text-align: center; /* Alignement du texte au centre */
      padding: 50px 0; /* Marge pour le centrage vertical */
    }

    .texte5 {
        font-size: 50px;
        font-weight: bold;
        color: #ffffff;
    }

    .image-act {
        width: 60%; 
        height: auto;
    }

    .texte-act {
        color: #ffffff; 
        margin-left: 20px; 
    }
    </style>
    </head>

    <body>
        <?php
        include "./Asset/Header.HTML";
        ?>

        <?php
        include "Asset/nav.HTML";
        ?>

        <div class="fond-actualite">
            <h2 class="texte5">Actualité</h2>
            <div class="dame">
                <article>
                    <img src="Image/Argilla.jpg" class="image-act">
                </article>
                <aside class="texte-act">
                    <p>
                        12 & 13 août 2023 - AUBAGNE <br><br>
                        Participation au salon ARGILLA <br><br><br><br>
                        14 mai 2023<br><br>
                        Atelier MODELE VIVANT - Rodez - MJC
                    </p>
                </aside>
            </div>
        </div>

        <footer>
            <?php
            include "Asset/Footer.HTML";
            ?>
        </footer>
    </body>
</html>
