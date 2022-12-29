<!DOCTYPE html>
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
    <!-- <link rel="icon" type="image/x-icon" href="<?=base_url();?>/public/assets/img/favicon/favicon.ico" /> -->
    <link rel="shortcut icon" href="http://localhost/leasiffronts/public/assetsl/images/favicon.png" type="image/png" />
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
                <a href="index.php" class="app-brand-link gap-2">
              
                  <span class="app-brand-text demo text-body fw-bolder">Leasify</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">OTP Verification</h4>

              <form id="formAuthentication" class="mb-3" action="index.php" method="POST">
                <div class="mb-3">
                  <!-- <label for="email" class="form-label">OTP Number</label> -->
                  <div class="input-group">

                  <input class="form-control" type="text" name="otpv" id="otpv" value=" ">

                 </div>
                
                </div>
          
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="button" id="proceed">Proceed</button>
                  <!-- <a href="<?=base_url();?>/customer/rfq" class="btn btn-primary d-grid w-100" type="submit">Proceed</a> -->
                </div>
              </form>
             <div id="msg"></div>
            
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->


    <script src="<?=base_url();?>/public/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/js/bootstrap.js"></script>
    <script src="<?=base_url();?>/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?=base_url();?>/public/assets/vendor/js/menu.js"></script>
      <script src="<?=base_url();?>/public/assets/js/main.js"></script>

 
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
     function inputInsideOtpInput(el) {
            if (el.value.length > 1){
                el.value = el.value[el.value.length - 1];
            }
            try {
                if(el.value == null || el.value == ""){
                    this.foucusOnInput(el.previousElementSibling);
                }else {
                    this.foucusOnInput(el.nextElementSibling);
                }
            }catch (e) {
                console.log(e);
            }
        }

       function foucusOnInput(ele){
           ele.focus();
           let val = ele.value;
           ele.value = "";
           // ele.value = val;
           setTimeout(()=>{
               ele.value = val;
           })
       }
</script>
<?= $this->section('scripts')?>

<script>
$("#proceed").click(function() {
      //  alert();
        var otpv = $('#otpv').val();
        $.ajax({
            url: '<?=base_url();?>/customer/process_otp',
            data: {
                otpv: otpv
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
                
                         window.location.href = "<?= base_url()?>/customer/rfq";

                }

            }
        });

    });
</script>
  </body>
</html>
