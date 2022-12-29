<?= $this->extend('header')?>
<?= $this->section('content')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<style>
p {
    color: grey
}

#heading {
    text-transform: uppercase;
    color: #253046;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;

    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #253046;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #253046;
    display: inline-block;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    font-weight: 500;
    font-size: 16px;
    border-radius: 5px !important;
    padding: 15px 25px;
    /* font-weight: bold; */
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    /* float: right */
}

#msform .action-button:hover,
#msform .action-button:focus {
    /* background-color: #311B92 */
    background-color: #e08879;
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    vertical-align: middle;
    font-weight: 500;
    font-size: 16px;
    border-radius: 5px !important;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    /* float: right */
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #253046;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #253046;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: gray;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #253046
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 50%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f030"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #253046
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #253046
}

.fit-image {
    width: 100%;
    object-fit: cover
}
</style>
<!-- ====== Banner Start ====== -->

<section class="ud-abtfooter wow fadeInUp" data-wow-delay=".15s">
  
    <div class="shape shape-3">
        <img src="<?= base_url();?>/public/assetsl/images/loginillustration.png" class="imgcon" alt="shape" />
    </div>
    <div class="ud-footer-widgets">
        <div class="container">
            <div class="row">
            <h1 class="textcolor text-start footheading">Login</h1>
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
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0mb-2">
                            <div class="card px-0 pb-0  mb-3">
                                <!-- <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p> -->
                                <form id="msform">
                                    <!-- progressbar -->
                                    <!-- <ul id="progressbar">
                                        <li class="active" id="account"><strong>Option</strong></li>
                                        <li id="personal"><strong>Login</strong></li>
                                  
                                    </ul> -->
                                    <!-- <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> <br>  -->
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="" id="leasify">
                                                    <div class="ud-login-logo my-4">
                                                        <h3 class="text-center">Welcome to Leasify, You are a?</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="Email Id" /> <label class="fieldlabels">Username: *</label> <input type="text" name="uname" placeholder="UserName" /> <label class="fieldlabels">Password: *</label> <input type="password" name="pwd" placeholder="Password" /> <label class="fieldlabels">Confirm Password: *</label> <input type="password" name="cpwd" placeholder="Confirm Password" /> -->
                                        </div>
                                        <a href="<?= base_url();?>/user/login"> <input type="button" name="next" class="next action-button"
                                            id="btninvest" value="Investor" /></a>
                                        <a href="<?= base_url();?>/customer/login"><input type="button" name="next" class="next action-button"
                                            id="btncorporate" value="Corporate" /></a>
                                        <a href="<?= base_url();?>/user/login"><input type="button" name="next" class="next action-button" id="btnnbfc"
                                            value="NBFC"/></a>
                                    </fieldset>
                                
                                </form>
                            </div>
                        </div>
                    </div>
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
$(document).ready(function() {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function() {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous").click(function() {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function() {
        return false;
    })

});
</script>
<script>
$(".logoin").click(function() {
    var btninvest = $("#btninvest").val();
    // var btninvest=document.getElementById("#btninvest");
    var btncorporate = $("#btncorporate").val();
    // var btncorporate=document.getElementById("#btncorporate");
    var btnnbfc = $("#btnnbfc").val();
    // var btnnbfc=document.getElementById("#btnnbfc");
    var email = $(".email").val();
    // alert(btninvest);

    $.ajax({
        method: "POST",
        url: '<?=base_url();?>/loginfront',
        data: {
            'btninvest': btninvest,
            'btncorporate': btncorporate,
            'btnnbfc': btnnbfc,
            'email': email
        },
        headers: {
            'IsAjax': 'true'
        },
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function(result) {

            if (result['btnnbfc'] == 'NBFC') {
                window.location.href = "<?= base_url()?>/nbfc/login";
            } else if (result['btninvest'] == 'Investor') {
                window.location.href = "<?= base_url()?>/investor/login";
            } else if (result['btncorporate'] == 'Corporate') {
                window.location.href = "<?= base_url()?>/customer/login";
            } else {
                mvbgh
            }


        }
    });
})
</script>
<?=  $this->endSection()?>
