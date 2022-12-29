<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" 
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Leasify</title>
  <meta content="Leasify Admin-Lease Better, Finance Cheaper " name="keywords">
    <meta content="Leasify Admin-Lease Better, Finance Cheaper " name="description">
  <meta name="description" content="Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!" />

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

  <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/libs/apex-charts/apex-charts.css" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.2/daterangepicker.min.css"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- 
  <link rel="stylesheet" href="<?=base_url();?>/public/assets/choices.js/choices.min.css" />

<script src="<?=base_url();?>/public/assets/choices.js/choices.min.js"></script> -->
  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?=base_url();?>/public/assets/vendor/js/helpers.js"></script>
  <script src="<?=base_url();?>/public/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="indicativeproposal" class="app-brand-link">
           
          <img src="<?=base_url();?>/public/assetsl/images/darklogo.png" width="150px" alt="">
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <!-- <li class="menu-item active">
            <a href="home" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Home</div>
            </a>
          </li> -->
          <li class="menu-item">
            <a href="indicativeproposal" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Basic"> Indicative Proposals</div>
            </a>
          </li>
          <!-- <li class="menu-item">
            <a href="indicativeproposals" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Basic"> Indicative Proposals Submitted</div>
            </a>
          </li> -->
          <li class="menu-item">
            <a href="nbfc" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Basic">NBFC</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="rfq" class="menu-link">
            <i class='menu-icon  tf-icons bx bx-user-circle'></i>
        
              <div data-i18n="Basic">RFQ</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="customer" class="menu-link">
            <i class='menu-icon  tf-icons bx bx-user-circle'></i>
        
              <div data-i18n="Basic">Corporate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="investor" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-user"></i>
              <div data-i18n="Basic">Investors</div>
            </a>
          </li>
          <!-- Layouts -->
       

          <!-- Cards -->
          <li class="menu-item">
            <a href="payment" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Basic">Payment Schedule</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="withdrawmoney" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Basic">Withdraw Money</div>
            </a>
          </li>
          <!-- <li class="menu-item">
            <a href="login" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Basic">Login</div>
            </a>
          </li> -->




          <!-- Tables -->
          <li class="menu-item">
            <a href="<?=base_url();?>/admin/logout" class="menu-link">
              <i class="menu-icon tf-icons bx bx-power-off"></i>
              <div data-i18n="Tables">Logout</div>
            </a>
          </li>

        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">

                Welcome.
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->

              <!-- <li class="nav-item lh-1 me-3">
                <span class="badge bg-secondary">Fri 30th June 2022 | 20:05:50</span>
              </li> -->

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
                            <img src="<?=base_url();?>/public/assets/img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          Admin
                          
                        </div>
                      </div>
                    </a>
                  </li>
                  <div class="dropdown-divider"></div>
               
                  
                  <li>
                    <a class="dropdown-item" href="<?=base_url();?>/admin/logout">
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
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      ©
      <script>
        document.write(new Date().getFullYear());
      </script>
      All rights reserved.

    </div>
    <div>

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

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
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
<script src="<?=base_url();?>/public/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?=base_url();?>/public/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?=base_url();?>/public/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link rel="stylesheet" href="<?=base_url();?>/public/assets/choices.js/choices.min.css" />

<script src="<?=base_url();?>/public/assets/choices.js/choices.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- <script src="<?=base_url();?>assets/vendors/tinymce/tinymce.min.js"></script> -->
<script src="<?=base_url();?>/public/assets/vendor/css/tinymce/tinymce.min.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/css/tinymce/plugins/code/plugin.min.js"></script>
    <script>
        tinymce.init({ selector: '.default' });
        tinymce.init({ selector: '.dark', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
    </script>
<!-- <script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script> -->
<script>
  const fullToolbar = [
  [
    {
      font: []
    },
    {
      size: []
    }
  ],
  ['bold', 'italic', 'underline', 'strike'],
  [
    {
      color: []
    },
    {
      background: []
    }
  ],
  [
    {
      script: 'super'
    },
    {
      script: 'sub'
    }
  ],
  [
    {
      header: '1'
    },
    {
      header: '2'
    },
    'blockquote',
    'code-block'
  ],
  [
    {
      list: 'ordered'
    },
    {
      list: 'bullet'
    },
    {
      indent: '-1'
    },
    {
      indent: '+1'
    }
  ],
  [
    'direction',
    {
      align: []
    }
  ],
  ['link', 'image', 'video', 'formula'],
  ['clean']
];

const fullEditor = new Quill('.full-editor', {
  bounds: '.full-editor',
  placeholder: 'Type Something...',
  modules: {
    formula: true,
    toolbar: fullToolbar
  },
  theme: 'snow'
});

</script>
<?= $this->renderSection('scripts')?>
</body>

</html>