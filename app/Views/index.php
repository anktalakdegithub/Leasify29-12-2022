<?= $this->extend('header')?>

<?= $this->section('content')?>
<style>
/* Float three columns side by side */
.column {
    float: left;
    width: 33.33%;
    padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {
    margin: 0 -5px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive columns */
@media screen and (max-width: 700px) {

    .container {
        width: 100%;
    }

    .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
    }
}

/* Style the counter cards */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 5px;
    text-align: center;
    background-color: #fff;
    border-radius: 10px;
    cursor: pointer;
}

.card .profile {
    border-radius: 10px;
    transition: 0.2s;
}

.card:hover .profile {
    transform: scale(1.4);
    border-top-right-radius: 50px;
    border-top-left-radius: 50px;
}

.card .content {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.card .content .back {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: #f1f1f1e6;
    transition: 1s;

    z-index: 1;
    padding: 10px;
}

.from-left {
    top: 0;
    left: -100%;
}

.card:hover .content .from-left {
    left: 0%;
}

.from-bottom {
    top: 100%;
    left: 0;
}

.card:hover .content .from-bottom {
    top: 0%;
}

.from-right {
    top: 0%;
    right: -100%;
}

.card:hover .content .from-right {
    right: 0;
}

.card .content .back h3 {
    font-size: 15px;
    letter-spacing: 2px;
}

.card .content .back .tem-img {
    border-radius: 100%;
}

.card .content .back .des {
    /* font-size: 13px; */
    font-size: 16px;
    color: #505050;
    padding: 20px 0px;
}

.card .content .back .social-icon {
    list-style: none;
    margin: 0px;
    padding: 0px;
}

.card .content .back .social-icon li {
    display: inline-block;
}

.card .content .back .social-icon li a {
    display: block;
    background: #333;
    color: #fff;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    border-radius: 100%;
}

/* second */

.card1 {
    position: relative;
    width: 400px;
    height: 250px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 2s
}

.circle {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color: #fff;
    overflow: hidden;
    border-radius: 10px;
    z-index: 5
}

.circle::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background-color: #0d0d0d; */
    background-color: #f4f5fe;
    /* clip-path: circle(120px at 50% 50%); */
    transition: 0.9s;
    z-index: 10
}

.card1:hover .circle::before {
    clip-path: circle(400px at 50% 50%)
}

.card1 img {
    z-index: 10;
    position: absolute;
    transition: 0.5s;
    pointer-event: none
}

.card1:hover img {
    height: 250px;
    width: 300px;
    top: -20%;
    right: -20%
}

.card1 .content {
    position: absolute;
    opacity: 0;
    color: #fff;
    top: 40px;
    /* width: 200px; */
    width: 80%;
    left: 20px;
    z-index: 20;
    transition: 0.4s
}

.content p {
    font-size: 13px
}

.content button {
    width: 90px;
    height: 35px;
    border: none;
    background-color: #0000ffb8;
    color: #fff;
    font-size: 14px;
    border-radius: 4px
}

.content button:hover {
    background-color: blue
}

.card1:hover .content {
    opacity: 1
}

/* second */
/* Third */




.panel {
    box-shadow: 0 5px 1rem rgba(0, 0, 0, 0.1);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 45vh;
    border-radius: 10px;
    color: #fff;
    cursor: pointer;
    flex: 0.5;
    margin: 10px;
    position: relative;
    transition: flex 0.5s ease-in;
}

.panel h2 {
    /* font-size: calc(24 / 16 * 1rem); */
    font-size: calc(30 / 20 * 0.9rem);
    position: absolute;
    bottom: 20px;
    left: 20px;
    margin: 0;
    opacity: 1;
}

.panel h3 {
    /* font-size: calc(24 / 16 * 1rem); */
    font-size: calc(30 / 20 * 0.7rem);
    position: absolute;
    bottom: 20px;
    left: 20px;
    margin: 0;
    opacity: 0;
}

.panel.active {
    flex: 5;
}

.panel.active h3 {
    opacity: 1;
    transition: all 0.5s ease-in 0.4s;
}

@media (max-width: 480px) {
    .container {
        width: 100vw;
    }

    .panel:nth-of-type(4),
    .panel:nth-of-type(5) {
        display: none;
    }
}

/* Third */
/* four */
.profile-card {
    display: flex;
    align-items: center;
    justify-content: center;
    /* height: 100vh; */
    height: 70vh;
}

.card-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 20px;
}

.cardhover {
    width: 100%;
    height: 400px;
    display: block;
    border-radius: 10px;
    background: #fff;
    overflow: hidden;
    position: relative;
    /* filter: blur(3px); */
    filter: blur(1px);
    transition: background 0.8s linear;
}

/* .card0 {
    background: url('./assets/images/digi.jpg') center center no-repeat;
    background-size: 400px;
}

.card1 {
    background: url('./assets/images/digi2.jpg') center center no-repeat;
    background-size: 400px;
}

.card2 {
    background: url('./assets/images/digi3.jpg') center center no-repeat;
    background-size: 400px;
}

.card3 {
    background: url('./assets/images/digi3.jpg') center center no-repeat;
    background-size: 400px;
} */

.cardhover:hover {
    background-size: 600px;
    background-position: left center;
    filter: unset;
}

.overlay {
    opacity: 1;
    height: 100%;
    padding: 20px;
    background: rgba(0 0 0 / .4);
    transition: opacity 0.8s linear;
}

.contenthover>h2 {
    margin-bottom: 10px;
}

/*
.contenthover {
    height: 90%;
    position: relative;
    /* right: -300px; *
    right: -380px;
    transition: right 0.8s linear;
}*/
.contenthover {
    height: 90%;
    position: relative;
    /* right: -300px; */
    right: -380px;
    transition: top 0.8s linear;
}

.icons {
    position: absolute;
    left: 10px;
    bottom: 10px;
    color: #fff;
    height: 130px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    opacity: 0;
    transition: opacity 0.8s linear;
}

.icons>a {
    color: #fff;
}

.cardhover:hover .contenthover {
    right: 0;
}

.cardhover:hover .icons {
    opacity: 1;
}

.learn-more-btn {
    position: absolute;
    right: 0;
    bottom: 0;
    color: #fff;
    text-decoration: unset;
    padding: 5px 10px;
    border: 1px solid;
}

/* four */

/* video */
.main-banner {
    position: relative;
    max-height: 100%;
    overflow: hidden;
    margin-bottom: -7px;
}

/* #bg-video {
    min-width: 100%;
    min-height: 100vh;
    max-width: 100%;
    max-height: 100vh;
    object-fit: cover;
    z-index: -1;
} */
#bg-video {
    min-width: 100%;
    min-height: 100vh;
    max-width: 100%;
    max-height: 100vh;
    object-fit: fill;
    z-index: -1;
}

#bg-video::-webkit-media-controls {
    display: none !important;
}

.video-overlay {
    position: absolute;
    /* background-color: rgba(31,39,43,0.75); */
    /* background-color: rgba(31, 39, 43, 0.75); */
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
}

.main-banner .caption {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.main-banner .caption h6 {
    margin-top: 0px;
    font-size: 15px;
    text-transform: uppercase;
    font-weight: 600;
    color: #fff;
    letter-spacing: 1px;
}

.main-banner .caption h2 {
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 36px;
    text-transform: uppercase;
    font-weight: 800;
    color: #fff;
    letter-spacing: 1px;
}

.main-banner .caption h2 em {
    font-style: normal;
    color: #f5a425;
    font-weight: 900;
}

.main-banner .caption p {
    color: #fff;
    font-size: 14px;
    max-width: 570px;
}

.main-banner .caption .main-button-red {
    margin-top: 30px;
}
.videomobile{
    display:none;
}
@media screen and (max-width: 767px) {

    .main-banner .caption h6 {
        font-weight: 500;
    }

    .main-banner .caption h2 {
        font-size: 36px;
    }

    #bg-video {
        min-width: 100%;
        min-height: 31vh;
        max-width: 100%;
        max-height: 100vh;
        object-fit: contain;
        z-index: -1;
        /* background-color: #253046; */
    }
    .videodesktop{
        display:none;
    }
    .videomobile{
    display:block;
    }
    .videomobile{
        display: block;
        width: 100vw;
        max-width: 177.78vh;
        height: 56.25vw;
        max-height: 100vh;
        background-color: black;
    }

}

@media screen and (max-width: 415px) {
    #bg-video {
        min-width: 100%;
        min-height: 20vh;
        max-width: 100%;
        max-height: 100vh;
        object-fit: contain;
        z-index: -1;
        /* background-color: #253046; */
    }
}


/* video */
.ycontainer {
    position: relative;
    width: 100%;
    height: 100px;
    padding-bottom: 56.25%;
}

.yvideo {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;

}
.whyleasemb{
    margin-bottom: -60px;
}
.whyleasecard{
    border: 2px solid black;border-radius: 10px;
}
</style>
<!-- ====== Hero Start ====== -->
<section class="section main-banner" id="top" data-section="section1">

    <video id="bg-video" class="videodesktop" autoplay="autoplay" loop muted playsinline>
        <source src="<?=base_url();?>/public/assetsl/images/LeasifyVO.mp4" type="video/mp4">
    </video>
    <!-- <video id="bg-video" class="videomobile" autoplay="autoplay" loop muted playsinline>
        <source src="<?=base_url();?>/public/assetsl/images/LeasifyExplanatoryVideo_2.mp4" type="video/mp4">
    </video> -->
    <div class="iframe-container ">
    <!-- <div class="videomobile" id="player" width="100%" height="100%"> -->
        <img src="<?=base_url();?>/public/assetsl/images/video.png" class="videomobile" alt="leasify">
    </div>
    </div>

    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ====== Features Start ====== -->
<section id="features" class="ud-features">
    <div class="container">
        <div class="row text-center ">
            <div class="col-lg-12 ">
                <div class="ud-section-title m-auto mb-4">
                    <!-- <span>Lease</span> -->
                    <h1 class="wlease py-2"> Why Leasing is awesome for you?</h1>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1 "></div>
            <div class="col-12 col-md-10 w-100">
                <div class="card mb-3 h-100 shadow-none border-0 leasifycordss">
                    <div class="row g-0">

                        <div class="col-md-8 order-1 order-lg-0">
                            <div class="card-body px-md-5">
                                <h3 class="text-start">Earn upto <span class="hbgcardcolordark">22% Return</span> on
                                    your
                                    Investment. </h3>
                                <ul class="text-start text-dark pt-2">
                                    <li class="lifont">
                                        <i class="lni lni-checkmark-circle"></i> Zero market risk
                                    </li>
                                    <li class="lifont">
                                        <i class="lni lni-checkmark-circle"></i> Invest from INR 10000
                                    </li>
                                    <li class="lifont"> <i class="lni lni-checkmark-circle"></i> Diversification</li>
                                    <li class="lifont"> <i class="lni lni-checkmark-circle"></i> Non Market Linked
                                        Returns</li>
                                    <li class="lifont"> <i class="lni lni-checkmark-circle"></i> Asset Backed</li>
                                </ul>
                                <div class="d-md-flex">
                                    <button class="ud-main-btn ud-white-btn p-2 my-4 text-start d-flex me-2 btnswidth"
                                        onclick="location.href='https://leasify.in/user/login';">Invest
                                        with
                                        Leasify</button>
                                    <button class="ud-main-btn ud-white-btn p-2 my-4 text-start d-flex btnswidth"
                                        onclick="location.href='https://calendly.com/leasify/15minutes';">Book a
                                        Demo</button>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4 p-md-4 order-0 order-lg-1">
                            <img src="<?=base_url();?>/public/assetsl/images/clogo/For_Investors.png"
                                class="img-fluid rounded-start " width="280px" alt="For_Investors">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 "></div>
        </div>
        <div class="row my-3 ">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card mb-3 h-100 shadow-none border-0 leasifycord ">
                    <div class="row g-0">

                        <div class="col-md-8 order-1 order-lg-0">
                            <div class="card-body">
                                <h4 class="text-start cardare">Are you a <span class="hbgcardcolor">Bank or an
                                        NBFC</span> who
                                    finances Assets?</h4>

                                <ul class="text-start text-dark pt-2 cardul">

                                    <li class="lifont">
                                        <div class="row">
                                            <div class="col-1 pe-0">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </div>
                                            <div class="col-11 ps-md-1 pe-md-0 smartparad">
                                                Preliminary Credit
                                                Evaluation done
                                                before Deal
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lifont">
                                        <div class="row">
                                            <div class="col-1 pe-0">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </div>
                                            <div class="col-11 ps-md-1 pe-md-0 smartparad">
                                                Tech Driven Assessment
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lifont">
                                        <div class="row">
                                            <div class="col-1 pe-0">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </div>
                                            <div class="col-11 ps-md-1 pe-md-0 smartparad">
                                                Holistic Documentation
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lifont">
                                        <div class="row">
                                            <div class="col-1 pe-0">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </div>
                                            <div class="col-11 ps-md-1 pe-md-0 smartparad">
                                                Better Creditworthy
                                                Opportunities
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <div class="d-md-flex ">
                                    <button class="ud-main-btn ud-white-btn p-2 my-4 text-start d-flex me-2 btnswidth"
                                        onclick="location.href='https://leasify.in/user/login';">Fund
                                        with
                                        Leasify</button> <button
                                        class="ud-main-btn ud-white-btn p-2 my-4 text-start d-flex btnswidth"
                                        onclick="location.href='https://calendly.com/leasify/15minutes';">Book a
                                        Demo</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-md-3 order-0 order-lg-1">
                            <img src="<?=base_url();?>/public/assetsl/images/clogo/For_Banks_and_NBFCs.png"
                                class="img-fluid rounded-start" alt="For_Banks_and_NBFCs">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card mb-3 h-100 shadow-none border-0 leasifycord">
                    <div class="row g-0">

                        <div class="col-md-8 order-1 order-lg-0">
                            <div class="card-body">
                                <h4 class="text-start cardare">Would you like to <span class="hbgcardcolor">save
                                        28.8%</span>
                                    on capital expenditure? </h4>

                                <ul class="text-start text-dark pt-2 cardul">
                                    <li class="lifont">
                                        <div class="row">
                                            <div class="col-1 pe-0">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </div>
                                            <div class="col-11 ps-md-1 pe-md-0 smartparad">
                                                Save upto 28.8% on
                                                financing of Assets
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lifont">
                                        <div class="row">
                                            <div class="col-1 pe-0">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </div>
                                            <div class="col-11 ps-md-1 pe-md-0 smartparad">
                                                48 hours Credit
                                                Assessment Window
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lifont">
                                        <div class="row">
                                            <div class="col-1 pe-0">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </div>
                                            <div class="col-11 ps-md-1 pe-md-0 smartparad">
                                                Unlock your capital
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lifont">
                                        <div class="row">
                                            <div class="col-1 pe-0">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </div>
                                            <div class="col-11 ps-md-1 pe-md-0 smartparad">
                                                Single
                                                Dashboard and Payment reminder
                                            </div>
                                        </div>
                                    </li>



                                </ul>
                                <div class="d-md-flex ">
                                    <button class="ud-main-btn ud-white-btn p-2 my-4 me-2 text-start d-flex btnswidth"
                                        onclick="location.href='https://leasify.in/customer/login';">Leasify
                                        for
                                        corporate</button>
                                    <button class="ud-main-btn ud-white-btn p-2 my-4 d-flex text-start btnswidth"
                                        onclick="location.href='https://calendly.com/leasify/15minutes';">Book a
                                        Demo</button>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 p-md-3 order-0 order-lg-1">
                            <img src="<?=base_url();?>/public/assetsl/images/clogo/For_Corporates.png"
                                class="img-fluid rounded-start" alt="For_Corporates">
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>


</div>
</div>
</div>
</section>
<!-- ====== Contact Start ====== -->
<section id="contact" class="ud-contact py-2">
    <div class="ud-contact-content-wrapper text-center">
        <div class="ud-contact-title my-3">

            <h2 class="smarttitle py-5">
                Our Other Smart Solutions
            </h2>

        </div>

    </div>
    <div class="container pb-5 ">
        <div class="row align-items-center">

            <div class="col-xl-4 col-lg-4  smartcard">
                <div class="ud-contact-form-wrapper wow fadeInUp text-center smartbg my-2 h-100 inventfinance"
                    data-wow-delay=".2s">
                    <div class="ud-single-feature wow fadeInUp mb-3 " data-wow-delay=".1s">
                        <center>

                            <img src="<?=base_url();?>/public/assetsl/images/clogo/inventory-financing.png" alt="Inventory-Financing"
                                width="100px" class="smartimg">
                        </center>
                        <h3 class="ud-contact-form-title mt-4 pcardcolor">Inventory Financing</h3>

                        <p class="ud-feature-desc text-dark">We can discount your bills but what if you have to invest
                            too much in inventory first to deliver that order? We ease that bottleneck for you too. Like
                            magic, Inventory financing can be of periods as long as 9 months! What's better? Subject to
                            due diligence, financing rates will ensure you keep expanding, keep reinvesting. Wishing you
                            business expansion with us.</p>
                        <button class="ud-main-btn ud-white-btn p-2 btnbgsmart text-start"
                            onclick="location.href='mailto:inventory@leasify.in';">Write to Us</button>
                    </div>

                </div>
            </div>
            <div class="col-xl-4 col-lg-4  smartcard">
                <div class="ud-contact-form-wrapper wow fadeInUp text-center smartbg my-2 h-100 inventfinance"
                    data-wow-delay=".2s">
                    <div class="ud-single-feature wow fadeInUp mb-3 " data-wow-delay=".1s">
                        <center>

                            <img src="<?=base_url();?>/public/assetsl/images/clogo/Tender-Financing.png" alt="Tender-Financing"
                                width="100px" class="smartimg">
                        </center>
                        <h3 class="ud-contact-form-title mt-4 pcardcolor">Tender Financing</h3>
                        <p class="ud-feature-desc text-dark"> Swipe right to match with your future cash flows.
                            Too tired of excessive reliance on past performance of the company despite insanely massive
                            future opportunities? Or you have government tender allotted to you and you got to deliver?
                            Reach out to us as we open your doorways to liquidity.
                        </p>
                        <button class="ud-main-btn ud-white-btn p-2  btnbgsmart text-start"
                            onclick="location.href='mailto:tenders@leasify.in';">Write to Us</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4  smartcard">
                <div class="ud-contact-form-wrapper wow fadeInUp text-center smartbg my-2 h-100 inventfinance"
                    data-wow-delay=".2s">
                    <div class="ud-single-feature wow fadeInUp mb-3 " data-wow-delay=".1s">
                        <center>

                            <img src="<?=base_url();?>/public/assetsl/images/clogo/Invoice_Discounting.png" alt="Invoice_Discounting"
                                width="100px" class="smartimg">
                        </center>
                        <h3 class="ud-contact-form-title mt-4 pcardcolor">Invoice Discounting</h3>

                        <p class="ud-feature-desc text-dark"> Too much capital stuck because long tenure debts are a
                            norm in your industry? We can free up the capital for you so that next time you have orders
                            to deliver upon, the capital crunch shouldn't hold you back.
                            At attractive rates of as low as 9% p.a.; and tenures as long as 180 days, capital could be
                            yours at a click!</p>
                        <button class="ud-main-btn ud-white-btn p-2  btnbgsmart text-start"
                            onclick="location.href='mailto:invoice@leasify.in';">Write to Us</button>
                    </div>
                </div>
            </div>

        </div>
        <div id="whyleasify" class="py-md-2"></div>
        <div id="whyleasifys" class="py-3 udmobilewhy"></div>
    </div>
</section>

<!-- ====== About Start ====== -->
<section class="ud-faq imgwhyimgdesktop">
    <div class="container-fluid imgwhybg">
        <div class="row">
            <div class="col-md-12">
                <div class="ud-section-title mx-auto text-center">
                    <!-- <span>Testimonials</span> -->
                    <h2 class="pt-5">Why Leasify</h2>
                    <p class="py-2">
                        Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across
                        tenures is now just a click away.
                        Schedule a call to speak to us now!
                    </p>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-5 whyrow">
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column whyleasecard">
                        <p class="text-dark cardsp py-2">
                            48 hours of credit assessment window. Faster Credit evaluation and disbursement by the
                            virtue of our experienced credit team.</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column whyleasecard">
                        <p class="text-dark cardsp py-2">Reducing Credit Refusals by
                            stringent credit evaluation and sharper Risk Management- We bear the Risk with NBFCs!</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a2.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column whyleasecard">
                        <p class="text-dark cardsp py-2">Tech Enabled, Tech Driven
                            Evaluation and Approvals- Assessments that go beyond Credit Rating!</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a3.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column whyleasecard" >
                        <p class="text-dark cardsp py-2">Better Price Discovery,
                            Flexible Leasing Periods and Better Negotiating Power, Readjustment of cashflows, Lease
                            durations and Transparent Commercials</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a4.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column whyleasecard" >
                        <p class="text-dark cardsp py-2">
                            Efficient returns to clients, better appraisal and risk management for the NBFCs, support
                            and
                            update before, during and after transaction
                        </p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a5.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
   
</section>
<section  class="ud-faq udmobilewhy">
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-md-12 mobilewhyt">
                <div class="ud-section-title mx-auto text-center">
                    <!-- <span>Testimonials</span> -->
                    <h2 class="pt-3 mb-0">Why Leasify</h2>
                    <p class="py-3 ">
                        Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across
                        tenures is now just a click away.
                        Schedule a call to speak to us now!
                    </p>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 whyrow">
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">

                            48 hours of credit assessment window. Faster Credit evaluation and disbursement by the
                            virtue of our experienced credit team. </p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">Reducing Credit Refusals by
                            stringent credit evaluation and sharper Risk Management- We bear the Risk with NBFCs!</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a2.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">Tech Enabled, Tech Driven
                            Evaluation and Approvals- Assessments that go beyond Credit Rating!</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a3.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">Better Price Discovery,
                            Flexible Leasing Periods and Better Negotiating Power, Readjustment of cashflows, Lease
                            durations and Transparent Commercials</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a4.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">
                            Efficient returns to clients, better appraisal and risk management for the NBFCs, support
                            and
                            update before, during and after transaction
                        </p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/whylease/a5.png" width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ud-section-title mx-auto text-center">
            <!-- <span>Testimonials</span> -->
            <h2 class="pt-md-1 pt-5 pb-1 mb-1">Why Lease?</h2>

        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 whyrow mt-5">
            <div class="col whymargin mt-md-5 pt-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">Lowers upfront costs, freeing
                            up cash for other financial needs of a growing company</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/clogo/lowers_upfront_costs.png"
                                    width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">Reduces the chance that your
                            company gets stuck with obsolete equipment</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb"  src="<?=base_url();?>/public/assetsl/images/clogo/reduces_the_chance.png"
                                    width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">Gives greater flexibility to
                            companies as they can replace/update their equipment as per their requirements</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb"  src="<?=base_url();?>/public/assetsl/images/clogo/gives_greater_flexibility.png"
                                    width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">Lease Payments are
                            tax-deductible</p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/clogo/tax_deductible.png" width="100px"
                                    alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">
                            Eliminates the hassle and cost of disposing off outdated and sometimes environmentally
                            harmful equipment
                        </p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/clogo/eliminates_the_hassle.png"
                                    width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col whymargin">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column mobilwhylease">
                        <p class="text-dark cardsp py-2">
                            Manage your equipment as per your demand cycle requirements
                        </p>
                        <div class="mt-auto">
                            <center>
                                <img class="whyleasemb" src="<?=base_url();?>/public/assetsl/images/clogo/Manage_your_equipment.png"
                                    width="100px" alt="Why lease">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="ycontainer ">
                    <iframe src="https://www.youtube-nocookie.com/embed/fLIRcqkOf2I?autoplay=1&rel=0&showinfo=0&mute=1&modestbranding=1&fs=0&loop=1" title="leasify" width="400" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="yvideo" ></iframe>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- ====== About End ====== -->
<section>
<div id="faqall" class="py-md-5 mb-3"></div>
</section>
<!-- ====== Testimonials End ====== -->
<!--  -->
<section  class="ud-faq">
    <div class="shape">
        <img src="<?=base_url();?>/public/assetsl/images/faq/shape.svg" alt="FAQ's shape" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-section-title text-center mx-auto">
                    <!-- <span>FAQ</span> -->
                    <h2>Frequently Asked Questions</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                    <div class="accordion">
                        <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#Investors">
                            <span class="icon flex-shrink-0">
                                <i class="lni lni-chevron-down"></i>
                            </span>
                            <span>Investors</span>
                        </button>
                        <div id="Investors" class="accordion-collapse collapse show">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>Who can Invest with Leasify?</span>
                                                </button>
                                                <div id="collapseOne" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        Any individual over the age of 18 years having a valid PAN and
                                                        Aadhaar card can invest. Investment options provided offer upto
                                                        20%+ IRR, are non-market linked with flexible tenure and asset
                                                        backed.
                                                        Leasify follows rigorous due diligence and risk mitigation
                                                        processes before listing investment options but the returns
                                                        still carry certain amount of risk which is highlighted in each
                                                        deal. Please refer to the listing carefully before investing.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span> How is an asset listed for leasing on Leasify?</span>
                                                </button>
                                                <div id="collapseTwo" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        Each prospective lessee is scrutinized on the type of asset and
                                                        lending period and due diligence is carried out of the
                                                        prospective lessee, their finances, management and the industry.
                                                        Next, we negotiate with the prospective lessee on the deal and
                                                        contract terms.
                                                        Once the credit team clears stringent checks, the deal is listed
                                                        on our platform.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>How do I invest with Leasify?</span>
                                                </button>
                                                <div id="collapseThree" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        <p>
                                                            <b> Step 1: </b>
                                                            Just schedule a call if you would like a run-through from
                                                            our team.
                                                            It's as easy as reviewing available investment opportunities
                                                            on leasify.in, including financial performance, leasing
                                                            terms and return expectations for mentioned deals.
                                                        </p>
                                                        <p>
                                                            <b>Step 2:</b>
                                                            Complete e-KYC and finalize the investment amount by
                                                            transferring via our payment gateway partner, PayTm.
                                                        </p>
                                                        <p>
                                                            <b>Step 3:</b>
                                                            Read and digitally sign the investment documents.
                                                            Once the asset is fully financed, you will start receiving
                                                            payments (depending on whether the deal is quarterly or
                                                            monthly) as per the deal completion statement.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>Are my returns guaranteed?</span>
                                                </button>
                                                <div id="collapseFour" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        The returns are covered by the operation of civil law and
                                                        non-payment/ delayed payment by the lessee leads to adverse
                                                        credit consequences. Despite being asset-backed, returns are
                                                        covered by contractual obligations. Leasify shall act as a mere
                                                        platform to deliver these returns to you.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>What are the tax implications on my returns?</span>
                                                </button>
                                                <div id="collapseFive" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        No tax/ TDS is deducted by the LLP or Anahat Finserv LLP while
                                                        remitting the income from Lease Rentals.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSix">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>What is the time horizon for the investments?</span>
                                                </button>
                                                <div id="collapseSix" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        The investment window varies from 90 days up to 60 months
                                                        depending on the type of investment. However, all of these are
                                                        backed by an asset, irrespective of the time horizon.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                    <div class="accordion">
                        <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#nbfc">
                            <span class="icon flex-shrink-0">
                                <i class="lni lni-chevron-down"></i>
                            </span>
                            <span>NBFC</span>
                        </button>
                        <div id="nbfc" class="accordion-collapse collapse">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#nbfccollapseOne">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>Who holds ownership of the asset?</span>
                                                </button>
                                                <div id="nbfccollapseOne" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        Anahat Finserv LLP (Leasify) will hold ownership of the assets
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#nbfccollapseTwo">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>Why should your NBFC or Bank partner with us?</span>
                                                </button>
                                                <div id="nbfccollapseTwo" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        We run a comprehensive credit evaluation and attach a
                                                        transparent and comprehensive credit report while a deal lists
                                                        on our platform thus saving NBFCs precious resource and reducing
                                                        the TATs for deals.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#nbfccollapseThree">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>Who holds the credit risk?</span>
                                                </button>
                                                <div id="nbfccollapseThree" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        The NBFC/ Banking partner holds complete liability for credit
                                                        risks in relation to the transaction. However, the assets are
                                                        hypothecated to them
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#nbfccollapseFour">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>Is there any financial recourse on Leasify in case of default?
                                                    </span>
                                                </button>
                                                <div id="nbfccollapseFour" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        Leasify does not take any responsibility for any defaults
                                                        through its platform. The recourse would be on the end client
                                                        and the assets financed.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#nbfccollapseFive">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span> Are the assets insured?</span>
                                                </button>
                                                <div id="nbfccollapseFive" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        Yes, the assets are covered under insurance, always.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#nbfccollapseSix">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>What is the Average deal size??</span>
                                                </button>
                                                <div id="nbfccollapseSix" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        The Deal size can range from 30L to 30 Cr per transaction, per
                                                        tranch.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#nbfccollapseseven">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>How do we mitigate risks?</span>
                                                </button>
                                                <div id="nbfccollapseseven" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        The deals are asset-backed. We hypothecate the assets to the
                                                        NBFC partner. PDC’s equivalent to the total rental quarters or a
                                                        NACH mandate is acquired from the client.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                    <div class="accordion">
                        <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#corporate">
                            <span class="icon flex-shrink-0">
                                <i class="lni lni-chevron-down"></i>
                            </span>
                            <span>Corporates</span>
                        </button>
                        <div id="corporate" class="accordion-collapse collapse">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>Who owns the asset?</span>
                                                </button>
                                                <div id="collapseOne" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        The assets are owned by the firm Anahat Finserv LLP and are
                                                        hypothecated to the lenders.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>Is it a finance lease or Operating Lease?</span>
                                                </button>
                                                <div id="collapseTwo" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        We do prefer Operating leases. However, corporates can avail
                                                        finance leases from our direct institutional partners.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>What is the minimum & maximum leasing tenures?</span>
                                                </button>
                                                <div id="collapseThree" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        We have a soft spot for leases of 2 to 3 years and up to 5
                                                        years, subject to the financials and credit risk.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>What happens to the asset at the end of the leasing
                                                        tenure?</span>
                                                </button>
                                                <div id="collapseFour" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        The treatment of the asset depends on the type of lease. We may
                                                        hand it over to the Lessee or sell it off in the secondary
                                                        market at the Residual Value.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>Why should you choose asset leasing with Leasiy?</span>
                                                </button>
                                                <div id="collapseFive" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        Leasing with leasify can save up to 28.8% cost, including impact
                                                        of taxes and depreciation while keeping the balance sheet free
                                                        of debt. What's even better is that it's all a click away,
                                                        hassle free and free of cumbersome back and forth of
                                                        documentation!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                                            <div class="accordion">
                                                <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSix">
                                                    <span class="icon flex-shrink-0">
                                                        <i class="lni lni-chevron-down"></i>
                                                    </span>
                                                    <span>What all documents do we have to submit to Leasify to set the
                                                        ball rolling?</span>
                                                </button>
                                                <div id="collapseSix" class="accordion-collapse collapse">
                                                    <div class="ud-faq-body">
                                                        The list of documentation is provided once you log in. A
                                                        comprehensive yet simple one time exercise! And of course, under
                                                        a non-disclosure agreement!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!--  -->

<!-- ====== FAQ End ====== -->
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
                                            width="60px" alt="Email_Icon"></div>
                                    <div class="col-10 pt-2">
                                        <h5 class="mb-2 conpara">We're Just An Email Away</h5>
                                        <p>business@leasify.in</p>
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


<!-- ====== Contact End ====== -->
<?=  $this->endSection()?>
<?= $this->section('scripts')?>
<script>
  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      width: '100%',
      videoId: 'fLIRcqkOf2I',
      playerVars: { 'autoplay': 1, 'playsinline': 1, 'controls': 0, 'fs':0, 'loop': 1, 'modestbranding': 1, 'rel': 0},
      events: {
        'onReady': onPlayerReady
      }
    });
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
     event.target.mute();
    event.target.playVideo();
  }
</script>
<script>
const panels = document.querySelectorAll(".panel");

panels.forEach((panel) => {
    panel.addEventListener("mouseover", () => {
        removeActiveClasses();
        panel.classList.add("active");
    });
});

const removeActiveClasses = () => {
    panels.forEach((panel) => {
        panel.classList.remove("active");
    });
};
</script>
<script>
const panels = document.querySelectorAll(".panel");

panels.forEach((panel) => {
    panel.addEventListener("mouseover", () => {
        removeActiveClasses();
        panel.classList.add("active");
    });
});

const removeActiveClasses = () => {
    panels.forEach((panel) => {
        panel.classList.remove("active");
    });
};
</script>
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