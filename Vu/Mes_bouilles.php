<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css" />
    <title>Annie B. Céramique</title>
    <?php
    include("Header.HTML");
    ?>
</head>

<style>

.carousel-container {
    display: flex;
    overflow: hidden;
    width: 100%; 
    margin: 0 auto;
    max-height: 400px; 
}

.carousel-slide {
    flex: 0 0 100%; 
    position: relative; 
}

.carousel-slide img {
    max-width: 100%; 
    max-height: 100%;
    object-fit: contain;
}

        
.MesBouilles {
        text-align: center; 
        margin-top: 20px; 
    }

.prev-button, .next-button {
        display: block; 
        margin: 0 auto; 
}


</style>

<body>

    <?php
    include "nav.HTML";
    ?>

    <section>
        <h2 class="MesBouilles"> Mes "bouilles"</h2>
    </section>

    <section>
    <?php
    $directory = '../Image/Carroussel/'; 
    $images = glob($directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

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

        <?php
        include("Footer.HTML");
        ?>


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