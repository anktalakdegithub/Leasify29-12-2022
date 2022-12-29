<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h3 class="fw-bold py-2 mb-2">RFQ Details List</h3>
        <!-- <p class="fw-bold py-3 mb-4">Listing All The Orders</p> -->
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 text-end">
                <!-- <a href="new_rfq.php" class="btn btn-primary my-3 text-white"> Create RFQ</a> -->
            </div>
        </div>
<?php print_r("dfrdg");die();?>

        <div class="row">
            <!-- Grid Card -->
            <h6 class="pb-1 mb-4 text-muted">Grid Card</h6>
            <div class="row ">
                <div class="col-9">
                    <div class="col my-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><img
                                        src="https://prod-opportunity.s3.ap-south-1.amazonaws.com/EF6_logo.png"
                                        class="w-full object-scale-down shadow me-3">
                                    RFQ Request</h5>
                                <p class="card-text">
                                <p class="mb-1"><i class="bx bx-border-all"></i> Oreder Resource: Website </p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, minima.</p>
                                </p>

                                <p><b>Required Amount: </b><i class="bx bx-rupee"></i> 5456</p>
                                <a class="btn btn-warning" href="rfqlist_details.php">Read More</a>

                                <!-- <div class="col-xl-6"> -->

                                <div class="nav-align-top my-4">
                                    <ul class="nav nav-pills mb-3" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab"
                                                data-bs-toggle="tab" data-bs-target="#navs-pills-top-home"
                                                aria-controls="navs-pills-top-home" aria-selected="true">
                                                Snapshot
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-pills-top-profile"
                                                aria-controls="navs-pills-top-profile" aria-selected="false">
                                                Key Investment Highlights
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-pills-top-messages"
                                                aria-controls="navs-pills-top-messages" aria-selected="false">
                                                Key Performance Metrics
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-pills-top-doc" aria-controls="navs-pills-top-doc"
                                                aria-selected="false">
                                                Documents
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                                            <p>
                                                Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake
                                                caramels sesame snaps
                                                powder. Bear claw candy topping.
                                            </p>
                                            <p class="mb-0">
                                                Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot
                                                cake jelly. Bonbon
                                                jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie
                                                jelly beans marshmallow
                                                jujubes sweet.
                                            </p>
                                            <div class="table-responsive text-nowrap my-3">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Tenure</th>
                                                            <th>Total Deal Size</th>
                                                            <th>Vendor</th>
                                                            <th>Settlement Date</th>
                                                            <th>Payout frequency</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <strong>90 D</strong>
                                                            </td>
                                                            <td>
                                                                <b>₹ 5 Cr</b>
                                                            </td>
                                                            <td>
                                                                <p>
                                                                    1K Kirana Bazaar
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <b>14 November 2022 </b>
                                                            </td>
                                                            <td>
                                                                <b>At Maturity</b>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                                            <h4>Lorem ipsum dolor sit amet.</h4>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nam.
                                                </li>
                                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nam.
                                                </li>
                                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nam.
                                                </li>

                                            </ul>
                                            <p class="mb-0">
                                                Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin
                                                pie tiramisu halvah
                                                cotton candy liquorice caramels.
                                            </p>
                                            <h4 class="my-2">Lorem ipsum dolor sit amet.</h4>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nam.
                                                </li>
                                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nam.
                                                </li>
                                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nam.
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                                            <h6>1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis,
                                                inventore.</h6>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                            </ul>
                                            <h6 class="mt-2">2. Lorem, ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Debitis, inventore.</h6>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                            </ul>
                                            <h6 class="mt-2">3. Lorem, ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Debitis, inventore.</h6>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae modi
                                                quos,
                                                obcaecati illum est provident dolorem minima quasi quae culpa?</p>
                                            <h6 class="mt-2">4. Lorem, ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Debitis, inventore.</h6>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                            </ul>
                                            <h6 class="mt-2">5. Lorem, ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Debitis, inventore.</h6>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptatem
                                                molestiae saepe ratione earum provident temporibus placeat sapiente
                                                laborum
                                                est?</p>

                                        </div>
                                        <div class="tab-pane fade" id="navs-pills-top-doc" role="tabpanel">
                                            <h6>1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis,
                                                inventore.</h6>
                                            <a href="https://prod-opportunity.s3.ap-south-1.amazonaws.com/1k-kirana/deal-14th/1KProductNoteDeal14.pdf"
                                                target="_blank" class="btn btn-outline-success">
                                                <span class="bx bxs-file-doc"></span>
                                                View Document</a>
                                            <a href="https://prod-opportunity.s3.ap-south-1.amazonaws.com/1k-kirana/deal-14th/1KProductNoteDeal14.pdf"
                                                target="_blank" class="btn btn-outline-success">
                                                <span class="bx bxs-file-doc"></span>
                                                View Document</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>Place Your BID:</h5>
                            <form action="">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    placeholder="Enter BID" aria-describedby="basic-icon-default-fullname2" />
                                    <h6 class="mt-3">Upload Files</h6>
                                <input type="file" class="form-control" id="basic-icon-default-fullname"/>
                                <center><button type="submit" class="btn btn-primary mt-3">Send</button></center>
                                <p class="py-3">
                                    <b>Note:</b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente,
                                    aut!
                                </p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- / Content -->


    <?=  $this->endSection()?>