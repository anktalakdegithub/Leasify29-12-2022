<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>
<style>
.pricingTable {
    color: black;
    background-color: #fff;
    text-align: center;
    margin: 0 15px 0px;
    position: relative;
    /* box-shadow: -10px 0px 10px -5px #aaaaaa; */
    box-shadow: -4px 0px 5px -2px #aaaaaaad;
}

/* .pricingTable:before,
        .pricingTable:after {
            content: "";
            background: #294046;
            width: 100%;
            height: 65px;
            position: absolute;
            bottom: -65px;
            left: 0;
            z-index: 1;
            clip-path: polygon(0 0, 100% 0, 100% 0%, 50% 100%, 0% 0%);
        } */

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

/* .pricingTable .title:before,
.pricingTable .title:after {
    content: "";
    background: #fff;
    width: 10px;
    height: 10px;
    border-radius: 50px;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 0;
} */

/* .pricingTable .title:after {
    left: auto;
    right: 0;
} */

.pricingTable .price-value {
    /* background: #ee184e;
            padding: 15px 0 13px;
            margin: 0 -15px;
            position: relative; */
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

/* .pricingTable .price-value .amount {
    font-size: 50px;
    font-weight: 700;
    line-height: 40px;
    display: inline-block;
} */

/* .pricingTable .price-value .amount-sm {
    font-size: 25px;
    font-weight: 700;
    vertical-align: top;
    margin: 0px 0 0;
    display: inline-block;
} */

/* .pricingTable .pricing-content {
    padding: 20px 0;
    margin: 0;
    list-style: none;
    box-shadow: -10px 0px 10px -6px #aaaaaa;
} */

.htitle {
    font-weight: 700;
    color: #fff;
}

/* .pricingTable .pricing-content li {
    background: #fff;
    font-size: 17px;
    /* line-height: 33px; *
    text-transform: uppercase;
    margin-bottom: 20px;
}

.pricingTable .pricing-content li:last-child {
    margin: 0;
}

.pricingTable .pricing-content li.disable {
    color: #526164;
}


.pricingTable .pricingTable-signup a:hover {
    text-shadow: -2px 2px 1px #000;
    box-shadow: 0 0 15px #000;
} */

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
    background: url(<?=base_url();?>/public/assets/img/deal/livedealsillustration.png);
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
    background-color: white!important;
}
</style>
<!-- Content wrapper -->
<div class="content-wrapper imgbg">
    <!-- Content -->

    <div class="container mt-4 pt-4">
        <h2 class="fw-bold py-3 mb-4 text-center text-dark">Indicative Proposals</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="pricingTable">
                    <div class="pricingTable-header">

                    </div>
                    <div class="price-value">
                        <div class="row">
                            <div class="col-3 text-end"> <span class="amount ms-2"><img class="card-img-top"
                                        width="100px" height="45px"
                                        src="https://www.jiraaf.com/_next/image?url=%2Fimages%2Fhomepage%2Fdeals%2Fwadhwa.svg&w=1920&q=75"
                                        alt="Card image cap" /></span>
                            </div>
                            <div class="col-9 ps-0 my-auto">
                                <!-- <span class="amount-sm text-start">POIJA</span> -->
                                <h3 class="text-start htitle my-auto">Home Credit</h3>
                            </div>
                        </div>

                    </div>

                    <div class="px-4 comcolor">
                        <p class="mt-3 text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio
                            neque quod
                            asperiores iste quos natus.</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="mb-0">Pre-Tax IRR</p>
                                <h3 class="hweight">18.8%</h3>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Tenure</p>
                                <h3 class="hweight">18M</h3>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Minimum Investment</p>
                                <h3 class="hweight">1890</h3>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Amount Raised</p>
                                <h3 class="hweight">₹ 4,807</h3>
                            </div>
                            <a href="newproposalsingle" class="text-center plink">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="pricingTable">
                    <div class="pricingTable-header">

                    </div>
                    <div class="price-value">
                        <div class="row">
                            <div class="col-3 text-end"> <span class="amount ms-2"><img class="card-img-top"
                                        width="100px" height="45px"
                                        src="https://prod-opportunity.s3.ap-south-1.amazonaws.com/edelweiss_logo.png"
                                        alt="Card image cap" /></span>
                            </div>
                            <div class="col-9 ps-0 my-auto">
                                <!-- <span class="amount-sm text-start">POIJA</span> -->
                                <h3 class="text-start htitle my-auto">Edelweiss Group</h3>
                            </div>
                        </div>

                    </div>

                    <div class="px-4 comcolor">
                        <p class="mt-3 text-start">Opportunity to earn attractive returns through highest rated
                            (A1+) Commercial Paper (CP) of Edelweiss Group</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="mb-0">Pre-Tax IRR</p>
                                <h3 class="hweight">18.8%</h3>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Tenure</p>
                                <h3 class="hweight">18M</h3>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Minimum Investment</p>
                                <h3 class="hweight">1890</h3>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Amount Raised</p>
                                <h3 class="hweight">₹ 4,807</h3>
                            </div>
                            <a href="newproposalsingle" class="text-center plink">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="pricingTable">
                    <div class="pricingTable-header">

                    </div>
                    <div class="price-value">
                        <div class="row">
                            <div class="col-3 text-end"> <span class="amount ms-2"><img class="card-img-top"
                                        width="100px" height="45px"
                                        src="https://www.jiraaf.com/_next/image?url=%2Fimages%2Fhomepage%2Fdeals%2FAris.svg&w=1920&q=75"
                                        alt="Card image cap" /></span>
                            </div>
                            <div class="col-9 ps-0 my-auto">
                                <!-- <span class="amount-sm text-start">POIJA</span> -->
                                <h3 class="text-start htitle my-auto">Aris Invoice</h3>
                            </div>
                        </div>

                    </div>

                    <div class="px-4 comcolor">
                        <p class="mt-3 text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio
                            neque quod
                            asperiores iste quos natus.</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="mb-0">Pre-Tax IRR</p>
                                <h3 class="hweight">18.8%</h3>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Tenure</p>
                                <h3 class="hweight">18M</h3>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Minimum Investment</p>
                                <h3 class="hweight">1890</h3>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Amount Raised</p>
                                <h3 class="hweight">₹ 4,807</h3>
                            </div>
                            <a href="newproposalsingle" class="text-center plink">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="pricingTable">
                    <div class="pricingTable-header">

                    </div>
                    <div class="price-value">
                        <div class="row">
                            <div class="col-3 text-end"> <span class="amount ms-2"><img class="card-img-top"
                                        width="100px" height="45px"
                                        src="https://www.jiraaf.com/_next/image?url=%2Fimages%2Fhomepage%2Fdeals%2Feverest_fleet.svg&w=1920&q=75"
                                        alt="Card image cap" /></span>
                            </div>
                            <div class="col-9 ps-0 my-auto">
                                <!-- <span class="amount-sm text-start">POIJA</span> -->
                                <h3 class="text-start htitle my-auto">Everest Fleet</h3>
                            </div>
                        </div>

                    </div>

                    <div class="px-4 comcolor">
                        <p class="mt-3 text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio
                            neque quod
                            asperiores iste quos natus.</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="mb-0">Pre-Tax IRR</p>
                                <h3 class="hweight">18.8%</h3>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Tenure</p>
                                <h3 class="hweight">18M</h3>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Minimum Investment</p>
                                <h3 class="hweight">1890</h3>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Amount Raised</p>
                                <h3 class="hweight">₹ 4,807</h3>
                            </div>
                            <a href="newproposalsingle" class="text-center plink">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>


    <?=  $this->endSection()?>