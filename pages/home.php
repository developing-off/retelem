<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php
    require_once("partials/head.php")
    ?>
</head>

<body>
    <div class="main-wrapper" id="home">
        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Header Start  -->
        <?php require_once("partials/header.php") ?>
        <!-- Header End -->
        <!-- Hero tart -->
        <?php require_once("components/hero.php") ?>
        <!-- Hero End -->
        <!-- Features Start -->
        <?php require_once("components/features.php") ?>
        <!-- Features End -->
        <!-- Service Start -->
        <?php require_once("components/services.php") ?>
        <!-- Service End -->
        <!-- chart Start -->
        <?php #require_once("components/chart.php") ?>
        <!-- chart End -->
        <!-- stats Start -->
        <?php require_once("components/stats.php") ?>
        <!-- stats End -->
       
        <?php require_once("components/choose-us.php") ?>
        <!-- Choose Us End -->
        <!-- Video Start -->
        <?php require_once("components/video-section.php") ?>
        <!-- Video End -->
        <!-- client Start -->
        <?php require_once("components/slide-client.php") ?>
        <!-- client End -->
        <!-- Testimonial Start  -->
        <?php require_once("components/tweet.php") ?>
        <!-- Testimonial End  -->
         <!-- partner Start -->
         <?php require_once("components/slide-partner.php") ?>
        <!-- partner End -->
        <!-- Contact Start -->
        <?php require_once("components/contact.php") ?>
        <!-- Contact End -->
        <!-- Footer Section Start -->
        <?php require_once("partials/footer.php") ?>
        <!-- Footer Section End -->
        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->
    </div>

    <?php
    require_once("partials/scripts.php")
    ?>
</body>

</html>