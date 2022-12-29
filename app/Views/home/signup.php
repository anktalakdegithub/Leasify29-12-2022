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
    <link rel="icon" type="image/x-icon" href="<?=base_url();?>/public/assets/img/favicon/favicon.ico" />

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
              <h4 class="mb-2">Let’s get to know you better</h4>

              <form id="formAuthentication" class="mb-3" action="index.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">First Name</label>
                  <input type="text" class="form-control firstname" id="firstname" name="name" placeholder="Enter your First Name" autofocus />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Last Name</label>
                  <input type="text" class="form-control lastname" id="lastname" name="lastname" placeholder="Enter your Last Name" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Mobile Number</label>
                  <input type="tel" class="form-control mobilenumber" id="mobilenumber" name="mobilenumber" placeholder="Enter your Mobile Number" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email Id</label>
            
                <div class="input-group mb-3">
                <input type="text" class="form-control email" placeholder="Enter your Email Id" id="emailid" aria-label="Enter your Email Id" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Verify</button>
              </div>

                </div>
                <div class="mb-3">
                <!-- <label for="otp" class="form-label">Verify OTP</label> -->
                <!-- <div class="input-group">
                                            <input class="form-control py-2 border-left-0 border form-rounded mx-2" oninput="inputInsideOtpInput(this)"
                                                type="numbar">
                                            <input class="form-control py-2 border-left-0 border form-rounded mx-2" oninput="inputInsideOtpInput(this)"
                                                type="numbar">
                                            <input class="form-control py-2 border-left-0 border form-rounded mx-2" oninput="inputInsideOtpInput(this)"
                                                type="numbar">
                                            <input class="form-control py-2 border-left-0 border form-rounded mx-2" oninput="inputInsideOtpInput(this)"
                                                type="numbar">
                                        </div> -->
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100 signbtn"  type="button">Sign in</button>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="login">
                  <span>login</span>
                </a>
              </p>
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
<script>
 
  $(".signbtn").click(function() {
    // var fname=$("#firstname").val();
    // var lname=$("#lastname").val();
    // var mobilenum=$("#mobilenumber").val();
    // var email=$("#emailid").val();
    var formData = new FormData();
                   formData.append( 'fname', $('#firstname').val());
                   formData.append( 'lname', $('#lastname').val());
                   formData.append( 'mobilenum', $('#mobilenumber').val());
                   formData.append( 'email', $('#emailid').val());
    $.ajax({
                method: "POST",
                url: '<?=base_url();?>/customer/registeration',
                data:formData,
                headers: {
                    'IsAjax': 'true'
                },
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                  //  alert()
                    if (data.code == "404") {
                        $('#msg').html('<div class="alert alert-danger" role="alert">' + data.msg + '</div>');
                        // window.location.href = "<?= base_url()?>Welcome/login";

                    } else {
                        $('#msg').html('<div class="alert alert-success" role="alert">' + data.msg + '</div>');
                       
                     

                    }


                }
            });
  });
</script>
  </body>
</html>