<?= $this->extend('header')?>
<?= $this->section('content')?>
<!-- ====== Header End ====== -->

<!-- ====== Banner Start ====== -->

<section class="ud-abtfooter wow fadeInUp" data-wow-delay=".15s">
    <div class="shape shape-3">
        <img src="<?=base_url();?>/public/assetsl/images/SignUpillustration.png" class="imgcon" alt="Sign Up shape" />
    </div>
    <div class="ud-footer-widgets">
        <div class="container">
            <div class="row">
                <h1 class="textcolor text-start footheading">Sign Up</h1>
            </div>
        </div>
    </div>
</section>
<!-- ====== Banner End ====== -->

<!-- ====== Login Start ====== -->
<section class="ud-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-login-wrapper">
                    <div class="ud-login-logo">
                        <!-- <img src="assets/images/logo/logo-2.svg" alt="logo" /> -->
                        <h3 class="text-center">Leasify</h3>
                    </div>
                    <form class="ud-login-form">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="ud-form-group">
                            <input type="text" name="first_name" placeholder="First Name" id="first_name" />
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="ud-form-group">
                            <input type="text" name="last_name" placeholder="Last Name" id="last_name" />
                        </div>
                            </div>
                        </div>
                       
                       
                        <div class="ud-form-group">
                            <select class="form-select" id="user_type" aria-label="Default select example">
                                <option selected>Select Option</option>
                                <option value="investor">Investors</option>
                                <option value="nbfc">NBFC</option>
                                <option value="customer">Corporates</option>
                            </select>
                        </div>
                        <div class="ud-form-group">
                            <input type="email" name="email" placeholder="Email" id="email" />
                        </div>
                        <div class="ud-form-group">
                                <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrappingS">+91 </span>
                                <input type="text" class="form-control" pattern="[1-9]{1}[0-9]{9}" maxlength="10" id="phone" name="phone" placeholder="Contact Number" aria-label="Username" aria-describedby="addon-wrappingS"/>
                                </div>
                            <!-- <input type="text" name="mobile" pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Contact Number" id="phone" /> -->
                        </div>
                        <div class="ud-form-group">
                            <input type="password" name="password" placeholder="Password" id="password" onclick="checkPasswordStrength();"/>
                            
                            <div id="password-strength-status"></div>
                        </div>
                   
                        <div class="ud-form-group">
                            <button type="button" class="ud-main-btn w-100" id="signup">Sign Up</button>
                        </div>
                        <br>
                       
                        <p id="msg"></p>
                    </form>



                    <p class="signup-option">
                    Already have an account? <a href="<?=base_url();?>/login"> Login </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Login End ====== -->

<!-- ====== Footer Start ====== -->
<?=  $this->endSection()?>
<?= $this->section('scripts')?>

<script>
    $(document).ready(function(){
  
  $("#phone").on("blur", function(){
        var mobNum = $('#phone').val();
        var filter = /[1-9]{1}[0-9]{9}/;

          if (filter.test(mobNum)) {
            if(mobNum.length==10){
                  $('#msg').html('<div class="alert alert-success" role="alert">Valid Contact Number</div>');
            
             } else {
                $('#msg').html('<div class="alert alert-danger" role="alert">Please put 10  digit mobile number</div>');
             
                return false;
              }
            }
            else {
             
              $('#msg').html('<div class="alert alert-danger" role="alert">Not a valid number</div>');
             
            
              return false;
           }
    
  });
  
});
</script>
<script>
//      $(document).ready(function(){
  
//   $("#password").on("blur", function(){
    function checkPasswordStrength() {
	var number = /([0-9])/;
	var alphabets = /([a-zA-Z])/;
	var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
	var password = $('#password').val().trim();
	if (password.length < 6) {
		$('#password-strength-status').removeClass();
		$('#password-strength-status').addClass('weak-password');
		$('#password-strength-status').html("Weak (should be atleast 6 characters.)");
	} else {
		if (password.match(number) && password.match(alphabets) && password.match(special_characters)) {
			$('#password-strength-status').removeClass();
			$('#password-strength-status').addClass('strong-password');
			$('#password-strength-status').html("Strong");
		}
		else {
			$('#password-strength-status').removeClass();
			$('#password-strength-status').addClass('medium-password');
			$('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
		}
	}
}
// });
  
// });
</script>
<script>
   $('#password').hide(); 
    $('#user_type').change(function(){
        if($('#user_type').val() == 'customer') {
            $('#password').hide(); 
        } 
        if($('#user_type').val() == 'investor') {
            $('#password').show(); 
        } 
        if($('#user_type').val() == 'nbfc') {
            $('#password').show(); 
        } 
    });
</script>
<script>
$('#signup').click(function() {
    $('#signup').text('Please Wait..').prop("disabled",true);
    var fname = $('#first_name').val();
    var lname = $('#last_name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var password = $('#password').val();
    var user_type = $('#user_type').val();

    $.ajax({
        url: "<?=base_url();?>/process_signup",
        data: {
            fname: fname,
            lname: lname,
            email: email,
            phone: phone,
            user_type: user_type,
            password: password
        },
        type: "post",
        dataType: 'json',
        success: function(data) {
            if (data.code == 200) {
                // $('#msg').html('<p class="text-success">' + data.msg + '</p>');
                $('#msg').html('<div class="alert alert-Success" role="alert">' + data.msg + '</div>');
                $('#signup').text('Sign Up').prop("disabled",false);
                window.location.href = "<?=base_url();?>/thankyou";
                // alert();

            } else {
                $('#msg').html('<div class="alert alert-danger" role="alert">' + data.msg + '</div>');
                $('#signup').text('Sign Up').prop("disabled",false);
            }
        }
    });
});
</script>
<?=  $this->endSection()?>
