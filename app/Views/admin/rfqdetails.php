<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
            <div class="col-md-9">
        <h4 class="fw-bold py-3 mb-4">Rfq Details</h4>
       <!-- <h5>Lorem, ipsum dolor pvt.LTD</h5> -->
       <p class="mb-0">Mobile No. +91 <?=$rfq->mobile_number?></p>
       <p class="py-0">Email Id:<?=$rfq->emailid?></p>
       </div>
        <div class="col-md-3 ">

            <a href="create_project?customer_id=<?=$rfq->customer_id;?>&rfq_id=<?=$rfq->rfq_id;?>" class="btn btn-primary my-2 text-white w-100" style="align-items: end;"> Create
            Proposal</a>
                <!-- <div class="d-flex justify-content-center align-middle" style="align-items: end;">
                    <label class="mx-2 fw-bold" for="">Status:</label>
                    <div class="form-check form-switch pt-2">

                        <input class="form-check-input " type="checkbox" role="switch" id="flexSwitchCheckChecked">
                    </div>
                </div> -->
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
                                        data-bs-target="#navs-pills-top-homes" aria-controls="navs-pills-top-homes"
                                        aria-selected="true">
                                        RFQ Requirment
                                    </button>
                                </li>
                                <!-- <li class="nav-item">
                                    <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
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
                                        Documents
                                    </button>
                                </li> -->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-top-homes" role="tabpanel">
                                    <div class="table-responsive text-nowrap bg-white">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <td> Id</td>
                                                    <th>Details</th>
                                                    <th>Amount</th>
                                                    <th>Quantity</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <?php $i=1;
                                                // print_r($rfq_requirment);die();
                                                foreach($rfq_requirment as $rfqr){
                                                    
                                                    ?>
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><?=$rfqr->requiremnet_details?></td>
                                                    <td><?=$rfqr->cost?></td>
                                                    <td><?=$rfqr->quantity?></td>
                                                </tr>
                                                    <?php
                                                }
                                                ?>
                                                
                                                <!-- <tr>
                                                    <td>002</td>
                                                    <td>item</td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>item</td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr> -->
                                            </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="navs-pills-top-home" role="tabpanel">
                                    <div class="table-responsive text-nowrap bg-white">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <td>Customer No.</td>
                                                    <th>Title</th>
                                                    <th>Quote Value</th>
                                                    <th>Delivered By</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>001</td>
                                                    <td>item</td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>002</td>
                                                    <td>item</td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>item</td>
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
                                                    <td>RFQ No.</td>
                                                    <th>Title</th>
                                                    <th>Quote Value</th>
                                                    <th>Delivered By</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>001</td>
                                                    <td>item</td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>002</td>
                                                    <td>item</td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>item</td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
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
                                                    <td>RFQ No.</td>
                                                    <th>Title</th>
                                                    <th>Quote Value</th>
                                                    <th>Delivered By</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>001</td>
                                                    <td>item</td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>002</td>
                                                    <td>item</td>
                                                    <td>11cr</td>
                                                    <td>25/Aug/22</td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>item</td>
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
    <?= $this->section('scripts')?>
    <script>
    $('.extra-fields-customer').click(function() {
        $('.customer_records').clone().appendTo('.customer_records_dynamic');
        $('.customer_records_dynamic .customer_records').addClass('single remove');
        $('.single .extra-fields-customer').remove();
        $('.single').append(
            '<a href="#" class="remove-field btn-remove-customer btn btn-danger my-2"><i class="bx bx-minus"></i> </a>'
        );
        $('.customer_records_dynamic > .single').attr("class", "remove");

        $('.customer_records_dynamic input').each(function() {
            var count = 0;
            var fieldname = $(this).attr("name");
            $(this).attr('name', fieldname + count);
            count++;
        });

    });

    $(document).on('click', '.remove-field', function(e) {
        $(this).parent('.remove').remove();
        e.preventDefault();
    });
    </script>

<?=  $this->endSection()?>