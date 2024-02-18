<div id="header" class="section header-section header-section-04">
    <div class="container">
        <!-- Header Wrap Start  -->
        <div class="header-wrap">
            <div class="header-logo">
                <a class="logo-black"  href="<?=$base_url?>"><img style="width: 190px!important;" src="assets/images/retelem-logo-black.png" alt="" /></a>
                <a class="logo-white"  href="<?=$base_url?>"><img style="width: 190px!important;" src="assets/images/retelem-logo-black.png" alt="" /></a>
            </div>

            <div class="header-menu d-none d-lg-block">
                <ul class="main-menu">
                    <li >
                        <a href="<?=$base_url?>#home">ACCUEIL</a>
                    </li>
                    <li>
                        <a href="<?=$base_url?>#about-us">A PROPOS</a>
                    </li>
                    <li>
                        <a href="<?=$base_url?>#services">NOS SERVICES</a>
                    </li>
                    <li>
                        <a href="<?=$base_url?>#client">NOS CLIENTS</a>
                    </li>
                    
                </ul>
            </div>

            <!-- Header Meta Start -->
            <div class="header-meta">
                <!-- Header Cart Start -->

                <!-- Header Cart End -->
                

                <div class="header-btn d-none d-xl-block">
                    <a class="btn" href="#contact">CONTACTEZ-NOUS</a>
                </div>
                <!-- Header Toggle Start -->
                <div class="header-toggle d-lg-none">
                    <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <!-- Header Toggle End -->
            </div>
            <!-- Header Meta End  -->
        </div>
        <!-- Header Wrap End  -->
    </div>
</div>
<!-- Offcanvas Start-->
<div class="offcanvas offcanvas-start" id="offcanvasExample">
    <div class="offcanvas-header">
        <!-- Offcanvas Logo Start -->
        <div class="offcanvas-logo">
            <a href="<?=$base_url?>"><img style="width: 190px!important;" src="assets/images/retelem-logo-white.png" alt="" /></a>
        </div>
        <!-- Offcanvas Logo End -->
        <button type="button" class="close-btn" data-bs-dismiss="offcanvas">
            <i class="flaticon-close"></i>
        </button>
    </div>

    <!-- Offcanvas Body Start -->
    <div class="offcanvas-body">
        <div class="offcanvas-menu">
            <ul class="main-menu">

                <li >
                    <a href="<?=$base_url?>#home">ACCEUIL</a>
                </li>
                <li>
                    <a href="<?=$base_url?>#about-us">A PROPOS</a>
                </li>
                <li>
                    <a href="<?=$base_url?>#services">NOS SERVICES</a>
                </li>
                <li><a href="<?=$base_url?>#contact">NOS CLIENTS</a></li>
                <li> <a class="btn" href="<?=$base_url?>#contact">CONTACTEZ-NOUS</a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Body End -->
</div>
<!-- Offcanvas End -->
<script>
        // Add active class to the navigation link based on scroll position
        window.addEventListener('scroll', function () {
            var headerLinks = document.querySelectorAll('.header-menu .main-menu li a');
            
            headerLinks.forEach(function (link) {
                var targetId = link.getAttribute('href').substring(1);
                var targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    var position = targetSection.getBoundingClientRect();

                    if (position.top <= 50 && position.bottom >= 50) {
                        // Section is in view
                        headerLinks.forEach(function (otherLink) {
                            otherLink.parentNode.classList.remove('active-menu');
                        });

                        link.parentNode.classList.add('active-menu');
                    }
                }
            });
        });
    </script>