<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">

            <div class="col-12">
                <h4 class="fw-bold py-3 mb-4">Proposal Details</h4>
                <div class="row">
                    <div class="col-md-2">
                        <img class="card-img-top" src="<?=base_url();?>/<?=$proposal->proposal_logo?>" alt=""
                            style="width:80%;">
                    </div>
                    <div class="col-md-8">
                        <h5><i class='bx bx-user'></i> <?=$proposal->proposal_title?>

                            <?php if($proposal->NBFC_publish==1){ ?>
                            <span class="badge bg-label-success me-1">Completed</span>
                            <?php }elseif($proposal->investor_publish==1){?>
                            <span class="badge bg-label-success me-1">Completed</span>
                            <?php }elseif($proposal->NBFC_publish==1 && $proposal->investor_publish==1){?>
                            <span class="badge bg-label-success me-1">Completed</span>
                            <?php }else{ ?>
                            <span class="badge bg-label-warning me-1">Pending</span>
                            <?php } ?>
                        </h5>
                        <p class="mb-0">Name: <?=$proposal->firstname?></p>
                        <p class="mb-0">Mobile No.: +91 <?=$proposal->mobile_number?></p>
                        <p class="py-0">Email Id: <?=$proposal->emailid?></p>
                    </div>
                    <div class="col-md-2">
                        <h6>Requirement Amount</h6>
                         <h6><i class='bx bx-rupee'></i> <?=$proposal->min_investment?></h6>
                    </div>
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
                                <!-- <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                                        aria-selected="true">
                                        Active Projects
                                    </button>
                                </li> -->
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
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

                                <div class="tab-pane fade show active" id="navs-pills-top-homes" role="tabpanel">
                                    <div class="table-responsive text-nowrap bg-white">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <td>RFQ No.</td>
                                                    <th>Quote Value</th>
                                                    <th>Date</th>
                                                    <th>Delivered By</th>
                                                    <!-- <th>Action</th> -->


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <?php $i=1;
                                                foreach($bid as $bb){
                                                    //  print_r($bb->proposalbid_id)
                                                ?>
                                                <tr>
                                                    <td><?=$bb->proposalbid_id?></td>
                                                
                                                        <!-- <a href="rfq_bid_detail">
                                                            item</a> -->
                                                    </td>
                                                    <td><?=$bb->proposal_bid?></td>
                                                    <td><?=$bb->created_at?></td>
                                                    <td>
                                                        <?php
                                                        // $bb->created_at
                                                        if($bb->status == 0){
                                                        ?>
                                                        <div class="d-flex justify-content-center align-middle"
                                                            style="align-items: end;">
                                                            <label class="mx-2 fw-bold" for="">Status:</label>
                                                            <div class="form-check form-switch pt-2">

                                                                <input class="form-check-input approvedstatus statusapproved"
                                                                    type="checkbox" value="<?=$bb->proposalbid_id?>"
                                                                    role="switch" id="status">
                                                            </div>
                                                        </div>
                                                        
                                         <!-- Modal -->
<div class="modal fade" id="statusbid_<?=$bb->proposalbid_id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure? You want to Place BID
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rembid" value="<?=$bb->proposalbid_id?>" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary addbid" value="<?=$bb->proposalbid_id?>" data-bs-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>
                                    <!-- modal end -->
                                                           
                                                        <?php
                                                        }else{
                                                            ?>
                                                        <button type="button" class="dropdown-item btnpay"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal_<?=$bb->proposalbid_id?>">
                                                            Payment Schedule
                                                        </button>
                                                        <?php
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>


                                                <!-- Modal -->

                                                <div class="modal fade" id="exampleModal_<?=$bb->proposalbid_id?>"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Payment
                                                                    Schedule </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                           
                                                            <form>
                                                                <div class="modal-body">

                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Amount</label>
                                                                        <input type="number" class="form-control amt" id="payamount" placeholder="Enter Amount">
                                                                       
                                                                        <input type="hidden" name="customer_id"
                                                                            id="payuserid"
                                                                            value="<?=$proposal->user_id?>"> 
                                                                             <input type="hidden" name="investor_id"
                                                                            id="investor_id"
                                                                            value="<?=$bb->investor_id?>">
                                                                        <input type="hidden" name="proposal_id"
                                                                            id="payproposalid"
                                                                            value="<?=$proposal->proposal_id?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Payment Date</label>
                                                                        <input type="date" class="form-control"
                                                                            id="datepay" value="<?=date('Y-m-d')?>"
                                                                            name="pay_date">
                                                                    </div>
                                                                    <div id="msgs"></div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <!-- <button type="submit" class="btn btn-primary " id="paybtn">Save changes</button> -->
                                                                    <button type="button" class="btn btn-primary demopay" id="paybtn">Save changes</button>
                                                                    <!-- <div id="msgs"></div> -->
                                                                </div>
                                                               
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                                 }
                                                 ?>



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
                                                    <td>#</td>
                                                    <th>Investor</th>
                                                    <th>Amount</th>
                                                    <th>Payment Date</th>
                                                    <th>Status</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <?php
                                                $i = 1;
                                                foreach($payment as $pay){
                                                ?>
                                                <tr>
                                                    <td><?=$i++?></td>
                                                    <td><?=$pay->firstname?><?=$pay->lastname?></td>
                                                    <td><?=$pay->amount?></td>
                                                    <td><?=$pay->pay_date?></td>
                                                    <!-- <td><?=$pay->status?></td> -->
                                                    <td>
                                                        <?php 
                                            if($pay->status==1){?>
                                                        <span class="badge bg-label-success me-1">Complete</span>
                                                        <?php }elseif($pay->status==0){?>
                                                        <span class="badge bg-label-warning me-1">Pending</span>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>


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
                                                    <td>#</td>
                                                    <td>RFQ No.</td>
                                                    <th>Title</th>
                                                    <th>Document</th>
                                                    <th>Minimum Investment</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <?php
                                                $i = 1;
                                                foreach($documents as $doc){
                                                    // print_r($documents);die();
                                                ?>
                                                <tr>
                                                    <td><?=$i++?></td>
                                                    <td><?=$doc->rfq_id?></td>
                                                    <td><?=$doc->proposal_title?></td>
                                                    <!-- <td><?=$doc->proposal_documents?></td> -->
                                                    <td><a href="<?= base_url().$doc->proposal_documents ?>"
                                                            class="text-success" download>
                                                            <i class='bx bx-cloud-download'></i></a></td>
                                                    <td><?=$doc->min_investment?></td>
                                                </tr>
                                                <?php
                                                }
                                                ?>

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
    // $(document).ready(function(){
    //     $("#status").change(function(){
    //         alert("The text has been changed.");
    //     });
    // });

    // $('body').on('click', '#status', function() {
    $('body').on('click', '.statusapproved', function() {
        var bid_id = $(this).val();
        // alert(bid_id);
        $('#statusbid_'+bid_id).modal('show'); 
    });
    $('body').on('click', '.rembid', function() {
        window.location.reload(true);

    });
    $('body').on('click', '.addbid', function() {

        // alert("hii");
     
     
        var bid_id = $(this).val();
        // alert(bid_id);
        $.ajax({
            url: "<?php echo base_url('update_status');?>",
            type: "POST",
            data: {
                bid_id: bid_id,
               
            },

            success: function(data) {

                window.location.reload(true);



            }
        });
  
    });

    $('body').on('click', '.demopay', function() {

        alert("hii");
        var amount = $(".amt").val();
        alert(amount);
        // var amount = $("#payamount").val();
    
        var customer_id = $("#payuserid").val();
        var investor_id = $("#investor_id").val();
        var proposal_id = $("#payproposalid").val();
        var pay_date = $("#datepay").val();
        // alert(vendor_id);
        $.ajax({
            url: "<?php echo base_url('add_payment');?>",
            type: "POST",
            data: {
                amount: amount,
                pay_date: pay_date,
                proposal_id: proposal_id,
                customer_id: customer_id,
                investor_id:investor_id
            },
            success: function(response) {

                // window.location.reload(true);          
                if (response.code == "404") {
                    $('#msgs').html('<div class="alert alert-danger" role="alert">' + response.msg + '</div>');
                    // window.location.href = "<?= base_url()?>Welcome/login";

                } else {

                    $('#msgs').html('<div class="alert alert-success" role="alert">' + response.msg + '</div>');

                    //  location.reload(true); 
                }


            }
        });
    });
    </script>
    <?=  $this->endSection()?>