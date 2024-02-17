<!-- Section pour les Partenaires -->
<div id="partners" class="section techwix-brand-section techwix-brand-section-03 techwix-brand-section-04 section-padding">
    <div class="section-title text-center">
        <h2 class="title">Nos Partenaires</h2>
    </div>
    <div class="container">
        <div class="brand-wrapper text-center">
            <div class="brand-active" id="partnersCarousel">
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-partners" aria-live="polite" style="transform: translate3d(-1100px, 0px, 0px); transition-duration: 0ms;">
                        <?php for ($i = 1; $i <= 22; $i++) { ?>
                            <div class="swiper-slide single-brand" data-swiper-slide-index="<?php echo $i - 1; ?>" role="group" aria-label="<?php echo $i; ?> / 9" style="width: 190px; margin-right: 30px;">
                                <img class="brand-image" src="assets/images/partner/p<?php echo $i; ?><?php echo in_array($i, [20]) ? '.jpg' : '.png'; ?>" alt="Partner <?php echo $i; ?>">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var brandWrapper = document.getElementById('brandCarousel');
        var brandSlidesWrapper = document.getElementById('swiper-wrapper-f0f233228f066c2b');
        var partnersWrapper = document.getElementById('partnersCarousel');
        var partnersSlidesWrapper = document.getElementById('swiper-wrapper-partners');
        var interval = 3000;
        var slideWidth = 220;

        function moveSlidesLeft(wrapper, slidesWrapper) {
            var currentTransform = parseInt(slidesWrapper.style.transform.replace('translate3d(', '').split('px')[0]);
            var newTransform = currentTransform - slideWidth;

            slidesWrapper.style.transitionDuration = '500ms';
            slidesWrapper.style.transform = 'translate3d(' + newTransform + 'px, 0, 0)';

            setTimeout(function () {
                slidesWrapper.style.transitionDuration = '0ms';
                if (newTransform <= -(slideWidth * 22)) {
                    slidesWrapper.style.transform = 'translate3d(0px, 0, 0)';
                }
                else {
                    slidesWrapper.style.transform = 'translate3d(' + newTransform + 'px, 0, 0)';
                }
            }, 500);
        }

        setInterval(function () {
            moveSlidesLeft(brandWrapper, brandSlidesWrapper);
            moveSlidesLeft(partnersWrapper, partnersSlidesWrapper);
        }, interval);
    });
</script>
