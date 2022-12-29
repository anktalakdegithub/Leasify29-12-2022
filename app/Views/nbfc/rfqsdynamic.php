<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>
<style>
.pricingTable {
    color: black;
    background-color: #fff;
    text-align: center;
    margin: 0 15px 0px;
    position: relative;
    height:100%;
    /* box-shadow: -10px 0px 10px -5px #aaaaaa; */
    box-shadow: -4px 0px 5px -2px #aaaaaaad;
}


.pricingTable:after {
    background: #ee184e;
    width: 90%;
    height: 80px;
    transform: translateX(-50%);
    bottom: -80px;
    left: 50%;
    z-index: 0;
    clip-path: polygon(0 0, 100% 0, 100% 25%, 50% 100%, 0% 25%);
}

.pricingTable .pricingTable-header {
    padding: 15px 0 12px;
}

.pricingTable .title {
    font-size: 35px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 0 23px;
    margin: 0;
    display: inline-block;
    position: relative;
}


.pricingTable .price-value {
   
    background: #c2c2c2;
    padding: 15px 0 13px;
    margin: 0px -15px;
    /* width: 85%; */
    position: relative;
    border-radius: 0px 30px 30px 0px;
}

.pricingTable .price-value:before {
    content: "";
    background: linear-gradient(to right top, transparent 49%, #909090 50%);
    width: 15px;
    height: 30px;
    position: absolute;
    bottom: -30px;
    left: 0;
}


.pricingTable .price-value:after {
    content: "";
    /* background: linear-gradient(to right top, transparent 49%, #a31330 50%); */
    width: 15px;
    height: 15px;
    position: absolute;
    bottom: -15px;
    left: 0;
}

.pricingTable .price-value:after {
    transform: rotateY(180deg);
    left: auto;
    right: 0;
}


.htitle {
    font-weight: 700;
    color: #fff;
}


.comcolor {
    color: #cb8779;
}

.hweight {
    font-weight: 700;
    color: #cb8779;
}

.plink {
    font-weight: 700;
    padding: 20px 0px 15px;
    font-size: 20px;
    color: #cb8779;

}

.imgbg {
    background: url(<?=base_url();
    ?>/public/assets/img/deal/livedealsillustration.png);
    background-repeat: no-repeat;
    background-position: right;
    background-size: contain;
}

@media only screen and (max-width: 990px) {
    .pricingTable {
        margin: 0 15px 100px;
    }
}

html:not(.layout-footer-fixed) .content-wrapper {
    padding-bottom: 0 !important;
    background-color: white !important;
}
.ud-abtfooter {
    background: #e2cfb6;
    padding-top: 100px;
    padding-bottom: 100px;
    position: relative;
    z-index: 1;
    overflow: hidden;
}
.imgabt {
    width: 400px;
}
.ud-abtfooter .shape.shape-3 {
    bottom: 0;
    right: 0;
}
.ud-abtfooter .shape {
    position: absolute;
    z-index: -1;
}
.textcolor {
    color: #e0887a;
    font-weight: bold;
}
h1 {
    font-size: 48px;
}
@media (max-width: 767px){
.imglive {
    /* width: 150px; */
    width: 300px;
}
}
@media (max-width: 480px){
.footheading {
    font-size: 30px;
    padding-bottom: 41px;
}
.livehead {
    margin-left: -13px;
}
}

</style>
<!-- Content wrapper -->
<section class="ud-abtfooter wow fadeInUp" data-wow-delay=".15s">


    <div class="shape shape-3">
        <img src="<?=base_url();?>/public/assetsl/images/live1new.png" class="imgabt imglive" alt="shape" />
    </div>
    <div class="ud-footer-widgets">
        <div class="container">
            <div class="row">
                <h1 class="textcolor text-md-center text-sm-start footheading livehead">Past Deals</h1>
            </div>
        </div>
    </div>
</section>
<div class="content-wrapper imgbg">
    <!-- Content -->

    <!-- <div class="container-xxl flex-grow-1 container-p-y"> -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!--<h2 class="fw-bold py-4 mt-2 text-center indicative">Indicative Proposals</h2>-->
        <!-- <h4 class="fw-bold py-2 mb-2">RFQ List</h4> -->
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 text-end">
                <!-- <a href="new_rfq.php" class="btn btn-primary my-3 text-white"> Create RFQ</a> -->
            </div>
        </div>


        <div class="row">
            <!-- Grid Card -->
            <!-- <h6 class="pb-1 mb-4 text-muted">Grid Card</h6> -->

            <div class="row" id="load_data">

            </div>
            <input type="hidden" id="page" value="1" />
            <div id='load_data_message' class="my-3"></div>


        </div>
    </div>
    <!-- / Content -->

    <?=  $this->endSection()?>
    <?= $this->section('scripts')?>
    <script>
    $(document).ready(function() {

        var limit = 6;
        var start = 0;
        var startimg = 0;
        var limitimg = 1;
        var action = 'inactive';
        var id = $('#id').val();

        function lazzy_loader(limit) {
            var output = '';
            for (var count = 0; count < limit; count++) {
                output += '<div class="post_data">';
                output +=
                    '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
                output +=
                    '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
                output += '</div>';
            }
            $('#load_data_message').html(output);
        }

        lazzy_loader(limit);

        function load_data(limit, start, limitimg, startimg) {
            // alert();
            // debugger
            var page = parseInt($('#page').val()) + 1;
            $.ajax({
                url: '<?=base_url();?>/nbfc/fetch_past',
                method: "POST",
                data: {
                    limit: limit,
                    start: start,
                    page: $('#page').val(),
                    id: id,
                    limitimg: limitimg,
                    startimg: startimg,

                },
                cache: false,
                success: function(data) {
                    // debugger

                    if (data == '') {
                        $('#load_data_message').html('');
                        action = 'active';
                    } else {
                        $('#page').val(page + 1);
                        $('#load_data').append(data);
                        $('#load_data_message').html("");
                        action = 'inactive';
                    }
                }
            })
        }


        if (action == 'inactive') {
            action = 'active';
            load_data(limit, start, limitimg, startimg);
        }

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
                lazzy_loader(limit);
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_data(limit, start, limitimg, startimg);
                }, 1000);
            }
        });

    });
    </script>

    <?=  $this->endSection()?>