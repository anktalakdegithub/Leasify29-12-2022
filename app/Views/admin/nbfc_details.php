<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-8">
                <h4 class="fw-bold py-3 mb-4">NBFC page</h4>
                <h5>Lorem, ipsum dolor pvt.LTD</h5>
                <p class="mb-0">BID:#23</p>
                <p class="mb-0">Mobile No. +91 88888888888</p>
                <p class="py-0">Email Id:info@gmail.com</p>
            </div>
            <div class="col-4 d-flex justify-content-center align-middle" style="align-items: end;">
                <label class="mx-2 fw-bold" for="">Status:</label>
                <div class="form-check form-switch pt-2">

                    <input class="form-check-input " type="checkbox" role="switch" id="flexSwitchCheckChecked">
                </div>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-pills mb-3" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                                        aria-selected="true">
                                        Active Projects
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-homes" aria-controls="navs-pills-top-homes"
                                        aria-selected="true">
                                        Bids
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                                        aria-selected="false">
                                        Payment Schedule
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-messages"
                                        aria-controls="navs-pills-top-messages" aria-selected="false">
                                        Approved Documents
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                                    <div class="table-responsive text-nowrap bg-white">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <td>NBFC No.</td>
                                                    <th>Title</th>
                                                    <th>Quote Value</th>
                                                    <th>Delivered By</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>001</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>002</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                            </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade show " id="navs-pills-top-homes" role="tabpanel">
                                    <div class="table-responsive text-nowrap bg-white">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <td>NBFC No.</td>
                                                    <th>Title</th>
                                                    <th>Quote Value</th>
                                                    <th>Delivered By</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>001</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>002</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                            </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                                    <div class="table-responsive text-nowrap bg-white">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <td>NBFC No.</td>
                                                    <th>Title</th>
                                                    <th>Quote Value</th>
                                                    <th>Add Amount </th>
                                                    <th>Withdraw Amount</th>
                                                    <th>Delivered By</th>
                                                    <th> Approved</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>001</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>10cr</td>
                                                    <td>1cr</td>
                                                    <td>25/Aug/22</td>
                                                    <td>
                                                        <div class="form-check form-switch pt-2">

                                                            <input class="form-check-input " type="checkbox"
                                                                role="switch" id="flexSwitchCheckChecked">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>002</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>10cr</td>
                                                    <td>1cr</td>
                                                    <td>25/Aug/22</td>
                                                    <td>
                                                        <div class="form-check form-switch pt-2">

                                                            <input class="form-check-input " type="checkbox"
                                                                role="switch" id="flexSwitchCheckChecked">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>10cr</td>
                                                    <td>1cr</td>
                                                    <td>25/Aug/22</td>
                                                    <td>
                                                        <div class="form-check form-switch pt-2">

                                                            <input class="form-check-input " type="checkbox"
                                                                role="switch" id="flexSwitchCheckChecked">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                                    <div class="table-responsive text-nowrap bg-white">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <td>NBFC No.</td>
                                                    <th>Title</th>
                                                    <th>Quote Value</th>
                                                    <th>Delivered By</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>001</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>002</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>
                                                        <a href="nbfc_bid_detail">
                                                            item</a>
                                                    </td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                            </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- / Content -->

    <?=  $this->endSection()?>