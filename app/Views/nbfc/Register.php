<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?=base_url();?>/public/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Leasify</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=base_url();?>/public/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?=base_url();?>/public/assets/vendor/js/helpers.js"></script>

    <script src="<?=base_url();?>/public/assets/js/config.js"></script>

</head>

<body>

    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <!-- Register -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4 bg-white">
               
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand mb-5 pb-md-4">
                        <a href="index.html" class="app-brand-link gap-2">
                           
                            <span class="app-brand-text demo text-body fw-bolder text-capitalize">Leasify</span>
                            
                        </a>
                    </div>
                    <div class="app-brand mb-3">
                        <a href="login.html" class="app-brand-link gap-2">
                           
                            <span class="app-brand-text demo text-body text-capitalize">Signup</span>
                           
                        </a>
                    </div>
                    <!-- /Logo -->
                    <!-- <h4 class="mb-2">Adventure starts here </h4>
        <p class="mb-4">Make your app management easy and fun!</p> -->
                    <p class="text-end">Already have an Account? 
                        <a href="">
                        Login</a></p>
                    <form id="formAuthentication" class="mb-3" action="login.html" method="POST">

                        <div class="form-floating mb-3">

                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="Enter Your Name">
                            <label for="floatingInput">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="Enter Your email">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="floatingInput"
                                placeholder="Enter Your Contact Number">
                            <label for="floatingInput">Contact Number</label>
                        </div>
                       
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="floatingInput" placeholder="Enter Your Upload Documents">
                            <label for="floatingInput">Upload Documents</label>
                        </div>
                        <div class="d-flex">

                            <button class="btn btn-primary d-grid mr-2">
                                Login
                            </button>

                            <button class="btn btn-secondary d-grid mx-2">
                                Cancle
                            </button>
                        </div>

                    </form>

                 
                </div>
            </div>
            <!-- /Register -->
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
                <div class="w-100 d-flex justify-content-center">
                    <img src="<?=base_url();?>/public/assets/img/illustrations/girl-with-laptop-light.png" class="img-fluid"
                        alt="Login image" width="700" data-app-dark-img="illustrations/girl-with-laptop-dark.png"
                        data-app-light-img="illustrations/girl-with-laptop-light.png">

                </div>
            </div>
            <!-- /Left Text -->


        </div>
    </div>

    <!-- / Content -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?=base_url();?>/public/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/js/bootstrap.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?=base_url();?>/public/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?=base_url();?>/public/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?=base_url();?>/public/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?=base_url();?>/public/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>