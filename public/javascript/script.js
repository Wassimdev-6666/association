    // Initialisation du slider avec les options
    $(document).ready(function(){
        $('.slider').slick({
            autoplay: true, // Lecture automatique
            autoplaySpeed: 2000, // Vitesse de lecture automatique en millisecondes
            dots: true, // Affichage des indicateurs de pagination
            arrows: true, // Affichage des flèches de navigation
            prevArrow: '<button type="button" class="slick-prev">&#10094;</button>', // Flèche précédente
            nextArrow: '<button type="button" class="slick-next">&#10095;</button>' // Flèche suivante
            // Ajoutez d'autres options au besoin
        });
    });