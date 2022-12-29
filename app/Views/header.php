<?php 

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$htitle;?></title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="<?=$htitle;?>">
    <meta name="description" content="<?=$hdescription;?>">
    <meta name="keywords" content="<?=$hkeywords;?>">
   

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="Leasify"/>
    <meta property="og:url" content="<?=$actual_link;?>">
    <meta property="og:title" content="<?=$htitle;?>">
    <meta property="og:description" content="<?=$hdescription;?>">
    <meta property="og:image" content="<?=base_url();?>/public/assetsl/images/darklogo.png">
    <meta property="og:image:secure_url" content="<?=base_url();?>/public/assetsl/images/darklogo.png" />
    <meta property="og:image:height" content="50" />
    <meta property="og:image:width" content="150" />
    <meta property="og:image:alt" content="<?=$hdescription;?>" />
    <meta property="og:image:type" content="image/png" />


    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?=$actual_link;?>">
    <meta property="twitter:title" content="<?=$htitle;?>">
    <meta property="twitter:description" content="<?=$hdescription;?>">
    <meta property="twitter:image" content="<?=base_url();?>/public/assetsl/images/darklogo.png">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?=base_url();?>/public/assetsl/images/favicon.png" type="image/png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url();?>/public/assetsl/images/favicon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>/public/assetsl/images/favicon.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>/public/assetsl/images/favicon.png">
<link rel="manifest" href="<?=base_url();?>/public/assetsl/images/favicon.png">

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="<?=base_url();?>/public/assetsl/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>/public/assetsl/css/animate.css" />
    <link rel="stylesheet" href="<?=base_url();?>/public/assetsl/css/lineicons.css" />
    <link rel="stylesheet" href="<?=base_url();?>/public/assetsl/css/ud-styles.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8335XV1BGV"></script>
<script> 
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8335XV1BGV');
</script>
</head>

<body>
    <!-- ====== Header Start ====== -->
    <!-- <header class="ud-header "style="background-color:#ffffff9c;" > -->
    <header class="ud-header ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- <a class="navbar-brand" href="index.html">
                <img src="<?=base_url();?>/public/assetsl/images/logo/logo.svg" alt="Logo" />
              </a> -->
                        <a href="<?=base_url();?>" class="toggleimg">
                            <!-- <h3 class="text-white">Leasify</h3> -->
                            <img src="<?=base_url();?>/public/assetsl/images/logol.png" alt="Lesify Logo">
                        </a>
                        <button class="navbar-toggler">
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                        </button>

                        <div class="navbar-collapse">
                            <ul id="nav" class="navbar-nav mx-auto">


                                <li class="nav-item imgwhyimgdesktop">
                                    <a href="<?=base_url();?>#whyleasify">Why Leasify?</a>
                                </li>

                                <li class="nav-item udmobilewhy">
                                    <a href="<?=base_url();?>#whyleasifys">Why Leasify?</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url();?>#faqall">FAQs</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="live">Live Deals</a>
                                </li> -->

                                <li class="nav-item">
                                    <a href="contact">Contact Us</a>
                                </li>

                            </ul>
                            <div class="mb-4 btnsignup d-flex justify-content-center ">
                            <?php 
                           $session = session();
                           if($session->get('isnbfclogin') || $session->get('isadminlogin')){
                            if($session->get('isnbfclogin')){ ?>
                                <a href="<?=base_url();?>/user/logout"
                                    class="ud-main-btn ud-login-btn btn btn-small mx-1">
                                    Logout
                                </a>
                                <a class="ud-main-btn ud-white-btn mx-1" href="<?=base_url();?>/user/order">
                                    My Dashboard
                                </a>
                                <?php }if($session->get('isadminlogin')){ ?>

                                <a href="<?=base_url();?>/customer/logout"
                                    class="ud-main-btn ud-login-btn btn btn-small mx-1">
                                    Logout
                                </a>
                                <a class="ud-main-btn ud-white-btn mx-1" href="<?=base_url();?>/customer/rfq">
                                    My Dashboard
                                </a>
                                <?php }
                                }else{?>
                                <a href="login" class="ud-main-btn ud-login-btn btn btn-small mx-1">
                                    Login
                                </a>
                                <a class="ud-main-btn ud-white-btn mx-1" href="signup">
                                    Sign Up
                                </a>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                        <?php 
                           $session = session();
                           if($session->get('isnbfclogin') || $session->get('isadminlogin')){
                            if($session->get('isnbfclogin')){ ?>

                            <a href="<?=base_url();?>/user/rfqlist" class="ud-main-btn ud-white-btn">
                                My Dashboard
                            </a>
                            <a href="<?=base_url();?>/user/logout" class="ud-main-btn ud-login-btn loginn">
                                Logout
                            </a>

                            <?php }if($session->get('isadminlogin')){ ?>

                            <a href="<?=base_url();?>/customer/rfq" class="ud-main-btn ud-white-btn">
                                My Dashboard
                            </a>
                            <a href="<?=base_url();?>/customer/logout" class="ud-main-btn ud-login-btn loginn">
                                Logout
                            </a>
                            <?php }
                                }else{?>

                            <a href="login" class="ud-main-btn ud-login-btn loginn">
                                Login
                            </a>
                            <a class="ud-main-btn ud-white-btn" href="signup">
                                Sign Up
                            </a>

                            <?php } ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Header End ====== -->


    <?= $this->renderSection('content')?>


    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
        <div class="shape shape-1">
            <img src="<?=base_url();?>/public/assetsl/images/shape-1.png" alt="Footer shape" />
        </div>
        <div class="shape shape-2">
            <img src="<?=base_url();?>/public/assetsl/images/footer/shape-2.svg" alt="Footer shape" />
        </div>
        <div class="shape shape-3">
            <img src="<?=base_url();?>/public/assetsl/images/shape-3.png" alt="Footer shape" />
        </div>
        <div class="ud-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="ud-widget">
                            <a href="<?=base_url();?>/" class="ud-footer-logo">
                                <img src="<?=base_url();?>/public/assetsl/images/logol.png" alt="Leasify Logo" />
                            </a>
                            <!-- <h3 class="text-white mb-2">Leasify</h3> -->
                            <p class="ud-widget-desc">
                Leasify is a tech driven, tech enabled asset leasing platform that provides capital on a click to firms that require to spend various movable assets including heavy plant and machinery!
                </p>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="ud-widget">
                            <h5 class="ud-widget-title">About Us</h5>
                            <ul class="ud-widget-links">
                                <li>
                                    <a href="<?=base_url();?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>/about">About Us</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>#whyleasify">Why Leasify?</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>#faqall">FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="ud-widget">
                            <h5 class="ud-widget-title">Features</h5>
                            <ul class="ud-widget-links">
                                <li>
                                    <a href="<?=base_url();?>/policy">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>/terms">Terms of service</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="ud-widget">
                            <h5 class="ud-widget-title">Follow Us</h5>
                            <ul class="ud-widget-socials">
                                <!-- <li>
                                    <a href="https://twitter.com/MusharofChy">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/MusharofChy">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/MusharofChy">
                                        <i class="lni lni-instagram-filled"></i>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="https://www.linkedin.com/company/leasifyin/">
                                        <i class="lni lni-linkedin-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="ud-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <p class="ud-footer-bottom-right text-center">
                        Copyright of Anahat Finserv LLP &copy;<script>
                            new Date().getFullYear() > 2012 && document.write(" " + new Date().getFullYear());
                            </script> All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
        <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="<?=base_url();?>/public/assetsl/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url();?>/public/assetsl/js/wow.min.js"></script>
    <script src="<?=base_url();?>/public/assetsl/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
    <script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");

    pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
                offsetTop: 1 - 60,
            });
        });
    });

    // section menu active
    function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document
                    .querySelector(".ud-menu-scroll")
                    .classList.remove("active");
                currLink.classList.add("active");
            } else {
                currLink.classList.remove("active");
            }
        }
    }

    window.document.addEventListener("scroll", onScroll);
    </script>
    <?= $this->renderSection('scripts')?>
</body>

</html>