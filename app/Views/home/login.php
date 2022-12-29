<!DOCTYPE html>
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?=base_url();?>/public/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login </title>

    <meta name="description" content="" />

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
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?=base_url();?>/public/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=base_url();?>/public/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <!-- <a href="index.php" class="app-brand-link gap-2"> -->
                 
                <center class="bg-dark p-3">
                    <img src="<?=base_url();?>/public/assets/img/logol.png" alt="">
                  </center>
                <!-- </a> -->
              </div>
              
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Leasify!</h4>

              <form id="formAuthentication" class="mb-3">
                <div class="mb-3">
                  <label for="tel" class="form-label">Email Id</label>
             
                  <input type="tel" class="form-control mobilenumber" name="phone" id="phone" placeholder="Enter your Email Id" autofocus/>
                </div>
          
                <div class="mb-3">
                  <!-- <a class="btn btn-primary d-grid w-100" href="verifyotp" type="button">Login</a> -->
                  <button class="btn btn-primary d-grid w-100 addcustomer"  type="button">Login</button>
                </div>
              </form>
<p id="msg"></p>
              <!-- <p class="text-center">
                <span>New on our platform?</span>
                <a href="signup">
                  <span>Create an account</span>
                </a>
              </p> -->
            </div>
          </div>
          <!-- /Register -->
        </div>
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

    <!-- Main JS -->
    <script src="<?=base_url();?>/public/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
    $(".addcustomer").click(function() {
      //  alert();
        var phone = $('#phone').val();
        $.ajax({
            url: '<?=base_url();?>/customer/process_login',
            data: {
                phone: phone
            },
            type: "post",
            dataType: 'json',

            success: function(data) {
                // debugger
                if (data.code == "404") {
                    $('#msg').html('<div class="alert alert-danger" role="alert">' + data.msg + '</div>');
                    // window.location.href = "<?= base_url()?>Welcome/login";

                } else {
                    $('#msg').html('<div class="alert alert-success" role="alert">' + data.msg + '</div>');
                //    window.location.href = "<?= base_url()?>";
// alert();
// alert("success");
                        window.location.href = "<?= base_url()?>/customer/verifyotp";

                }

            }
        });

    });
    </script>
  </body>

</html>
