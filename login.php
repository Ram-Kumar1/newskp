<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Car Serving a Auto Mobile Category Category Bootstrap Responsive Template | Contact :: W3layouts</title>
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .div-background {
        padding: 2rem 0;
        align-items: center;
        background: url(../images/light.jpg) no-repeat top;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        position: relative;
        display: grid;
        align-items: center;
        z-index: 0;
        text-align: center;
    }
</style>
<body>

<!-- about breadcrumb -->

<!-- //about breadcrumb -->
<section class="w3l-contact-11">
    <section class="w3l-forms-23">
        <div class="forms23-block-hny">
            <div class="wrapper">
                <h1>SKT Speed Parcel Service</h1>
                <!-- if logo is image enable this
                    <a class="logo" href="index.html">
                      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a>
                -->
                <div class="d-grid forms23-grids">
                    <div class="form23">
                        <div class="main-bg">
                            <h6 class="sec-one"></h6>
                            <div class="speci-login first-look">
                                <span class="fa fa-user-circle" aria-hidden="true" style="font-size: 3em; margin-top: 5%;"></span>
                            </div>
                        </div>
                        <div class="bottom-content">
                            <form action="#" method="post">
                                <input type="email" name="email" class="input-form" placeholder="Your Email"
                                       required="required"/>
                                <input type="password" name="password" class="input-form"
                                       placeholder="Your Password" required="required"/>
                                <button type="submit" class="loginhny-btn btn">Login</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- //contact-form -->
    <!-- footer-66 -->
    <footer class="w3l-footer-66">
        <section class="footer-inner-main">

            <div class="below-section">
                <div class="container">
                    <div class="copyright-footer">
                        <div class="columns text-lg-left">
                            <p>© 2022 SKT Parcel Service. All rights reserved </p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- copyright -->
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-long-arrow-up" aria-hidden="true"></span>
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->

        </section>
    </footer>
    <!--//footer-66 -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- disable body scroll which r is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->
    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>