<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?=base_url();?>/public/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Leasify</title>
    <meta content="Leasify NBFC" name="keywords">
    <meta content="Leasify NBFC" name="description">

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="<?=base_url();?>/public/assetsl/images/favicon.png"
      type="image/png"
    />
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
    <!-- <link rel="stylesheet" href="<?=base_url();?>/public/assets/choices.js/choices.css"> -->
 
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?=base_url();?>/public/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=base_url();?>/public/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->



                <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?=base_url();?>/public/assetsl/images/darklogo.png" width="150px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
                <nav class="layout-navbar layoutsnav container-xxl navbar navbar-expand-xl align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <a href="index" class="app-brand-link">
                                 
                                    <!-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Leasify</span> -->  <img src="<?=base_url();?>/public/assetsl/images/darklogo.png" width="150px" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <!-- <li class="nav-item lh-1 me-3">
                             
                                <a href="<?=base_url();?>/nbfc/index" class="menu-link text-dark fw-bold">
                                    <div data-i18n="Analytics">Home</div>
                                </a>
                            </li> -->
                            <li class="nav-item lh-1 me-3">
                            
                                <a href="<?=base_url();?>/nbfc/rfqlist" class="menu-link text-dark fw-bold">
                                    <div data-i18n="Analytics">Indicative Proposals</div>
                                </a>
                            </li>
                            <!-- <li class="nav-item lh-1 me-3">
                            
                                <a href="<?=base_url();?>/nbfc/rfqs" class="menu-link text-dark fw-bold">
                                    <div data-i18n="Analytics">Indicative Proposals Submitted</div>
                                </a>
                            </li> -->
                            <li class="nav-item lh-1 me-3">
                            
                                <a href="<?=base_url();?>/nbfc/proposalsubmit" class="menu-link text-dark fw-bold">
                                    <div data-i18n="Analytics">Proposals Submitted</div>
                                </a>
                            </li>
                            <!-- <li class="nav-item lh-1 me-3">
                            
                                <a href="<?=base_url();?>/nbfc/order" class="menu-link text-dark fw-bold">
                                    <div data-i18n="Analytics">Active Indicative Proposals</div>
                                </a>
                            </li> -->
                            <li class="nav-item lh-1 me-3">
                            
                                <a href="<?=base_url();?>/nbfc/order" class="menu-link text-dark fw-bold">
                                    <div data-i18n="Analytics">Active Proposals</div>
                                </a>
                            </li>
                            <li class="nav-item lh-1 me-3">
                            
                                <a href="<?=base_url();?>/nbfc/payment" class="menu-link text-dark fw-bold">
                                    <div data-i18n="Analytics">Payment Schedule</div>
                                </a>
                            </li>
                            <li class="nav-item lh-1 me-3">
                            
                            <a href="<?=base_url();?>/nbfc/my_vault" class="menu-link text-dark fw-bold">
                <span class="badge bg-primary">My Vault</span>
                </a>
                            </li>
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?=base_url();?>/public/assets/img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?=base_url();?>/public/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">
                            <?php $session = session(); $firstname=$session->get('firstname');echo $firstname;?>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                
                    <li>
                      <a class="dropdown-item" href="<?=base_url();?>/nbfc/logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
                      
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <?= $this->renderSection('content')?>       

              
                      <!-- Footer -->
      <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                document.write(new Date().getFullYear());
                                </script>
                                All rights reserved.
                            </div>
                            <div>
                                <!-- <a href="" class="footer-link me-4"
                                    target="_blank">License</a> -->
                                <a href="" target="_blank" class="footer-link me-4">Terms & Condition</a>
<!-- 
                                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                    target="_blank" class="footer-link me-4">Documentation</a> -->

                                <a href=""
                                    target="_blank" class="footer-link me-4">Privacy & Policy </a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->

  

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?=base_url();?>/public/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/js/bootstrap.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?=base_url();?>/public/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?=base_url();?>/public/assets/js/main.js"></script>
    <script>
   function changeValue(o){
     document.getElementById('money').value=o.innerHTML;
    }
</script>
    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <?= $this->renderSection('scripts')?>
</body>

</html>