<?= $this->extend('header')?>
<?= $this->section('content')?>
<!-- ====== Banner Start ====== -->
<section class="ud-abtfooter wow fadeInUp" data-wow-delay=".15s">
    <div class="shape shape-1">
        <img src="<?=base_url();?>/public/assetsl/images/Contactus_Illustrationnew.png" class="imgabt imgcon"
            alt="contact shape" />
    </div>


    <div class="ud-footer-widgets">
        <div class="container">
            <div class="row">
                <h1 class="textcolor text-end footheading conhead">Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<!-- ====== Banner End ====== -->

<!-- ====== Contact Start ====== -->
<section id="contact" class="ud-contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7">
                <div class="ud-contact-content-wrapper">
                    <div class="ud-contact-title">

                        <span class="text-white">CONTACT US</span>
                        <h2 class="smarttitle">
                            We'd Love to hear you!
                        </h2>
                    </div>
                    <div class="ud-contact-info-wrapper">

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-2 "> <img
                                            src="<?=base_url();?>/public/assetsl/images/clogo/Address_Icon.png"
                                            width="60px" alt="Address_Icon"></div>
                                    <div class="col-10 pt-2">
                                        <h5 class="mb-2 conpara">Our Location</h5>

                                        <p>310-311, Crescent Business Park,
                                            Andheri East, Mumbai-72</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-2 "> <img
                                            src="<?=base_url();?>/public/assetsl/images/clogo/Email_ICon.png"
                                            width="60px" alt="Email_ICon"></div>
                                    <div class="col-10 pt-2">
                                        <h5 class="mb-2 conpara">We're Just An Email Away</h5>
                                        <a href="mailto:business@leasify.in">
                                            <p>business@leasify.in</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="ud-contact-form-title">Send us a Message</h3>
                    <form class="ud-contact-form">
                        <div class="ud-form-group">
                            <label for="fullName">Full Name*</label>
                            <input type="text" name="fullName" id="name" placeholder="Please Enter Your Name" />
                        </div>
                        <div class="ud-form-group">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" placeholder="example@yourmail.com" />
                        </div>
                        <div class="ud-form-group">
                            <label for="types">Select Option</label>
                            <select class="form-select" id="selectoption" aria-label="Default select example">
                                <option value="NBFC">NBFC</option>
                                <option value="Investors">Investors</option>
                                <option value="Corporates">Corporates</option>
                                <option value="Invest Bank">Investment Bank</option>
                                <option value="DSA">DSA</option>
                                <option value="Other">Other</option>
                            </select>

                        </div>
                        <div class="ud-form-group">
                            <label for="phone">Phone*</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">+91 </span>
                                <input type="text" class="form-control" pattern="[1-9]{1}[0-9]{9}" maxlength="10" id="phone" name="phone" placeholder=" **********" aria-label="Username" aria-describedby="addon-wrapping"/>
                                </div>
                                                        
                        </div>
                        <div class="ud-form-group">
                            <label for="message">Message*</label>
                            <textarea name="message" id="message" rows="1"
                                placeholder="type your message here"></textarea>
                        </div>
                        <div class="ud-form-group mb-0">
                            <button type="button" class="ud-main-btn" id="sendmsg">
                                Send Message
                            </button>
                        </div>
                        <div class="mt-2" id="msgs"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Footer Start ====== -->
<?=  $this->endSection()?>
<?= $this->section('scripts')?>
<script>
$(document).ready(function() {
    $("#phone").on("blur", function() {
        var mobNum = $('#phone').val();
        var filter = /[1-9]{1}[0-9]{9}/;

        if (filter.test(mobNum)) {
            if (mobNum.length == 10) {
                $('#msgs').html(
                    '<div class="alert alert-success" role="alert">Valid Contact Number.</div>');

            } else {
                $('#msgs').html(
                    '<div class="alert alert-danger" role="alert">Please put 10  digit mobile number.</div>'
                    );

                return false;
            }
        } else {

            $('#msgs').html('<div class="alert alert-danger" role="alert">Not a valid number.</div>');


            return false;
        }

    });

});
</script>
<script type="text/javascript">        
$(document).ready(function () {        
    
$("#email").on("blur", function() {  
var inputvalues = $("#email").val();    
var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
if(!regex.test(inputvalues)){    
    $('#msgs').html('<div class="alert alert-danger" role="alert">Email Id is not a valid.</div>'); 
}else{
    $('#msgs').html('<div class="alert alert-success" role="alert">Email is a valid.</div>'); 
}    
});    
    
 });            
</script>   
<script>
$('#sendmsg').on('click', function() {
    $('#sendmsg').text('Please Wait..').prop("disabled",true);
    var name = $('#name').val();
    var email = $('#email').val();
    var selectoption = $('#selectoption').val();
    var phone = $('#phone').val();
    var message = $('#message').val();
    if ($.trim($('#name').val()).length == 0) {
        $('#msgs').html('<div class="alert alert-danger mt-3" role="alert">Please Enter Name.</div>');
    } else if ($.trim($('#email').val()).length == 0) {
        $('#msgs').html('<div class="alert alert-danger mt-3" role="alert">Please Enter Email.</div>');
    }else if ($.trim($('#phone').val()).length == 0) {
        $('#msgs').html('<div class="alert alert-danger mt-3" role="alert">Please Enter Email.</div>');
    }else if ($.trim($('#message').val()).length == 0) {
        $('#msgs').html('<div class="alert alert-danger mt-3" role="alert">Please Enter Message.</div>');
    }else {
        $.ajax({
            url: "<?=base_url();?>/savecondata",
            data: {
                'name': name,
                'email': email,
                'selectoption': selectoption,
                'phone': phone,
                'message': message
            },
            dataType: "json",
            type: "post",
            success: function(data) {
                if (data.code == "404") {
                    $('#msgs').html('<div class="alert alert-danger mt-3" role="alert">' + data.msg + '</div>');
                    $('#sendmsg').text('Send Message').prop("disabled",false);
                } else {
                    $('#msgs').html('<div class="alert alert-success mt-3" role="alert">' + data.msg + '</div>');
                    // purchase_product();
                    window.location.href = "<?=base_url();?>/thankyou";
                    $('#sendmsg').text('Send Message').prop("disabled",false);

                }

            }
        });
    }
});
</script>
<?=  $this->endSection()?>