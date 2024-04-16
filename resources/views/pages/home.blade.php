<x-app>
    <!-- Slider -->
    <div class="slider">
         <div><img src="{{ asset('images/activite/slider3.jpg') }}" alt="Slide 3"></div>
        <div><img src="{{ asset('images/activite/slider3.jpg') }}" alt="Slide 1"></div>
        <div><img src="{{ asset('images/activite/slider3.jpg') }}" alt="Slide 2"></div>
        
        <!-- Ajoutez plus de diapositives au besoin -->
    </div>

    <!-- Autres sections de contenu -->
    <section class="presentation">
        <div>
        <h2>Qui Sommes-Nous</h2>
        <p>L'association des enfants, créée dans les années 1980, est une organisation dédiée à rassembler les enfants autour d'activités éducatives, récréatives et culturelles. Elle offre aux enfants un environnement sûr où ils peuvent participer à des jeux, des ateliers créatifs, des sorties éducatives et des voyages. L'objectif principal de cette association est de favoriser le développement global des enfants en stimulant leur curiosité, leur créativité et leur esprit d'équipe. En résumé, l'association des enfants offre depuis les années 1980 un cadre enrichissant où les enfants peuvent s'amuser, apprendre et grandir ensemble.</p>
        </div>
       
        <div class="photo de presentation">
            <img  src="{{ asset('images/activite/slider3.jpg') }}" alt="Slide 2"/>
        </div>
    </section>

    <!-- Autres sections de contenu -->
    <section class=" section-activites">
        <h2>Activités de l'association</h2>
        <div class="activité">
            <div class="first child">
            <img  src="{{ asset('images/activite/slider3.jpg') }}"/>
            <img  src="{{ asset('images/activite/slider3.jpg') }}"/>
            <img  src="{{ asset('images/activite/slider3.jpg') }}"/>
            <img  src="{{ asset('images/activite/slider3.jpg') }}"/>
            </div>
            <div class="secend child">
            <img  src="{{ asset('images/activite/slider3.jpg') }}"/>
            <img  src="{{ asset('images/activite/slider3.jpg') }}"/>
            <img  src="{{ asset('images/activite/slider3.jpg') }}"/>
            <img  src="{{ asset('images/activite/slider3.jpg') }}"/>
            </div>
            
        </div>

    </section>
</x-app>

<!-- Scripts JavaScript -->

<script>
    // Initialisation du slider avec les options
    $(document).ready(function(){
        $('.slider').slick({
            autoplay: true, // Lecture automatique
            autoplaySpeed: 3000, // Vitesse de lecture automatique en millisecondes
            dots: true, // Affichage des indicateurs de pagination
            arrows: true, // Affichage des flèches de navigation
            prevArrow: '<button type="button" class="slick-prev">&#10094;</button>', // Flèche précédente
            nextArrow: '<button type="button" class="slick-next">&#10095;</button>' // Flèche suivante
            // Ajoutez d'autres options au besoin
        });
    });
</script>
