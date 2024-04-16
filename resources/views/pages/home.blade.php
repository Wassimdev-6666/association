<x-app>
    <!-- Slider -->
    <div class="slider">
         <img src="{{ asset('images/activite/slider3.jpg') }}" alt="Slide 3">
        <img src="{{ asset('images/activite/image1.jpg') }}" alt="Slide 1">
        <img src="{{ asset('images/activite/image2.jpg') }}" alt="Slide 2">
        
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
