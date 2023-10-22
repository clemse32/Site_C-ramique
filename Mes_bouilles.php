<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" />
    <title>Annie B. Céramique</title>
    <?php
    include "./Asset/Header.HTML";
    ?>
</head>

<style>

.carousel-container {
    display: flex;
    overflow: hidden;
    width: 100%; /* Utilisez 100% pour que le carrousel occupe toute la largeur disponible */
    margin: 0 auto;
    max-height: 400px; /* Définissez la hauteur maximale souhaitée */
}

.carousel-slide {
    flex: 0 0 100%; /* Chaque diapositive occupe 100% de la largeur du conteneur */
    position: relative; /* Ajoutez cette ligne */
}

.carousel-slide img {
    max-width: 100%; /* Limitez la largeur de l'image à 100% de la largeur du conteneur */
    max-height: 100%; /* Limitez la hauteur de l'image à 100% de la hauteur du conteneur */
    object-fit: contain; /* Redimensionnez l'image pour qu'elle s'adapte tout en maintenant son aspect */
}

        
.MesBouilles {
        text-align: center; /* Centrer le texte horizontalement */
        margin-top: 20px; /* Espacement du haut pour centrer verticalement */
    }

.prev-button, .next-button {
        display: block; /* Assurez-vous qu'ils occupent toute la largeur */
        margin: 0 auto; /* Centrez les boutons horizontalement */
}
        


</style>

<body>
   
    

    <?php
    include "./Asset/nav.HTML";
    ?>

    <section>
        <h2 class="MesBouilles"> Mes "bouilles"</h2>
    </section>

    <section>
    <?php
    $directory = 'Image/'; // Répertoire où sont stockées les images
    $images = glob($directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Liste les fichiers d'images

    if (count($images) > 0) {
    echo '<div class="carousel-container">';
    foreach ($images as $index => $image) {
        echo '<div class="carousel-slide">';
        echo '<img src="' . $image . '" alt="Image ' . ($index + 1) . '">';
        echo '</div>';
    }
    echo '</div>';
    } else {
    echo 'Aucune image trouvée.';
    }
?>

        <button class="prev-button">Précédent</button>
        <button class="next-button">Suivant</button>
    </section>

   

    <footer>
        <?php
        include "Asset/Footer.HTML";
        ?>
    </footer>


    <script>
    const carouselContainer = document.querySelector('.carousel-container');
    const carouselSlides = document.querySelectorAll('.carousel-slide');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');

    let slideIndex = 0;

    function showSlide(index) {
        carouselSlides[slideIndex].style.display = 'none'; // Masquer l'image actuelle
        carouselSlides[index].style.display = 'block'; // Afficher la nouvelle image
        slideIndex = index;
    }

    function nextSlide() {
        let newIndex = (slideIndex + 1) % carouselSlides.length;
        showSlide(newIndex);
    }

    function prevSlide() {
        let newIndex = (slideIndex - 1 + carouselSlides.length) % carouselSlides.length;
        showSlide(newIndex);
    }

    showSlide(slideIndex);

    prevButton.addEventListener('click', prevSlide);
    nextButton.addEventListener('click', nextSlide);
</script>

</body>

</html>
