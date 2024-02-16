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

                        <?php for ($i = 1; $i <= 9; $i++) { ?>
                            <div class="swiper-slide single-brand" data-swiper-slide-index="<?php echo $i - 1; ?>" role="group" aria-label="<?php echo $i; ?> / 9" style="width: 190px; margin-right: 30px;">
                                <img class="brand-image" src="assets/images/client/c<?php echo $i; ?><?php echo in_array($i, [3, 6, 7, 8, 9]) ? '.png' : '.jpg'; ?>" alt="Brand <?php echo $i; ?>">
                            </div>
                        <?php } ?>

                    </div>

                </div>
                <!-- Brand Active End -->

            </div>
            <!-- Brand Wrapper End -->
        </div>
    </div>