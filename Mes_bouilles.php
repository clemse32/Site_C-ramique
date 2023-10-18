<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" />
    <title>Annie B. Céramique</title>
  
</head>

<body>

    <header>
        <h1>Annie B. Céramique</h1>
    </header>

    <?php
            include "Asset/nav.HTML";
        ?>
    </footer>

    <section>
        <h2>Mes "bouilles"</h2>
        
    </section>
    <section>
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="Image/045_Annie B Céramique © Franck Tourneret Photographe_Web.jpg" alt="Image 1">
            </div>
            <div class="carousel-slide">
                <img src="Image/053_Annie B Céramique © Franck Tourneret Photographe_Web.jpg" alt="Image 2">
            </div>
            <div class="carousel-slide">
                <img src="Image/063_Annie B Céramique © Franck Tourneret Photographe_Web.jpg" alt="Image 3">
            </div>
        </div>
    </section>

    <footer>
    <?php
            include "Asset/Footer.HTML";
        ?>
    </footer>



</body>
<script>
const carouselContainer = document.querySelector('.carousel-container');
const carouselSlides = document.querySelectorAll('.carousel-slide');

let slideIndex = 0;

function showSlide(index) {
  carouselContainer.style.transform = `translateX(${-index * 100}%)`;
}

function nextSlide() {
  slideIndex = (slideIndex + 1) % carouselSlides.length;
  showSlide(slideIndex);
}

function prevSlide() {
  slideIndex = (slideIndex - 1 + carouselSlides.length) % carouselSlides.length;
  showSlide(slideIndex);
}

showSlide(slideIndex);

</scrip>
          
</html>
