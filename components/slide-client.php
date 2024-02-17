<style>
    .brand-image {
        width: 150px;
        /* Set your desired width */
        height: 100px;
        /* Set your desired height */
        object-fit: contain;
        /* To maintain aspect ratio and cover the entire container */
    }
</style>
<div id="client" style="padding-bottom: 0px!important;" class="section techwix-brand-section techwix-brand-section-03 techwix-brand-section-04 section-padding">
    <div class="section-title text-center">

        <h2 class="title">Nos Clients</h2>
    </div>
    <div class="container">
        <!-- Brand Wrapper Start -->
        <div class="brand-wrapper text-center">

            <!-- Brand Active Start -->
            <div class="brand-active" id="brandCarousel">
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-f0f233228f066c2b" aria-live="polite" style="transform: translate3d(-1100px, 0px, 0px); transition-duration: 0ms;">

                        <?php for ($i = 1; $i <= 28; $i++) { ?>
                            <div class="swiper-slide single-brand" data-swiper-slide-index="<?php echo $i - 1; ?>" role="group" aria-label="<?php echo $i; ?> / 28" style="width: 190px; margin-right: 30px;">
                                <img class="brand-image" src="assets/images/client/c<?php echo $i; ?><?php echo in_array($i, [28,5,11]) ? '.jpg' : '.png'; ?>" alt="Brand <?php echo $i; ?>">
                            </div>
                        <?php } ?>

                    </div>

                </div>
                <!-- Brand Active End -->

            </div>
            <!-- Brand Wrapper End -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var container = document.getElementById('brandCarousel');
            var wrapper = document.getElementById('swiper-wrapper-f0f233228f066c2b');
            var interval = 3000; // intervalle en millisecondes (3 secondes dans cet exemple)
            var slideWidth = 150; // largeur d'une diapositive (ajustez en fonction de votre conception)

            // Fonction pour déplacer les diapositives vers la gauche
            function moveSlidesLeft() {
                var currentTransform = parseInt(wrapper.style.transform.replace('translate3d(', '').split('px')[0]);
                var newTransform = currentTransform - slideWidth;

                // Animation de déplacement
                wrapper.style.transitionDuration = '500ms';
                wrapper.style.transform = 'translate3d(' + newTransform + 'px, 0, 0)';

                // Réinitialisation de la position après l'animation
                setTimeout(function() {
                    wrapper.style.transitionDuration = '0ms';
                    if (newTransform <= -(slideWidth * 28)) { // Ajustez la valeur 8 en fonction du nombre total d'images
                        wrapper.style.transform = 'translate3d(0px, 0, 0)';
                    } else {
                        wrapper.style.transform = 'translate3d(' + newTransform + 'px, 0, 0)';
                    }
                }, 500);
            }

            // Démarrez l'animation toutes les "interval" millisecondes
            setInterval(moveSlidesLeft, interval);
        });
    </script>