<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-5">
                <h4 class="fw-bold py-3 mb-4">RFQ </h4>
            </div>
            <div class="col-md-7 text-end">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6 px-1">
                                <input type="text" name="fromdate" class="form-control" placeholder="From Date"
                                    id="fromDate">
                            </div>
                            <div class="col-md-6 px-1">
                                <input type="text" name="todate" class="form-control" placeholder="To Date" id="toDate">
                            </div>

                        </div>

                    </div>
                    <div class="col-md-5 px-1">
                        <div class="row">
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="search" placeholder="Search..."
                                    aria-label="Search..." aria-describedby="basic-addon-search31" />

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-start">
                        <button class="search_order_data btn btn-primary" type="button" name="button"><i
                                class="bx bx-search"></i></button>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" id="exportdata">
                        <?php if(is_array($customerlist) && count($customerlist) > 0){ $i=1; foreach($customerlist as $customer){ ?>
                        <div class="row">
                            <div class="col-2 text-center">
                                <img class="card-img-top" src="<?=base_url();?>/public/assets/img/user.png" alt=""
                                    style="width:50%;">
                            </div>
                            <div class="col-6">
                                <a href="rfqdetails?id=<?=$customer['rfq_id']?>">
                                    <h5><i class='bx bx-user'></i><?= $customer['rfqtitlte']; ?> </h5>
                                   
                                </a>
                               
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="mb-1"><i class='bx bxs-calendar'></i>
                                            <?php echo date("d-m-Y", strtotime($customer['expiry_date']));?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mb-1"> <i class='bx bx-border-all'></i> Order Resource:
                                            <?= $customer['resource'];?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <b class="mb-1">
                                            <i class='bx bx-wallet-alt'></i> <i class='bx bx-rupee'></i>
                                            <?= $customer['total_cost'];?></b>
                                    </div>


                                </div>
                                <!-- <div class="form-check form-switch my-2">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Status(Approved/ Not
                                        Approved)</label>
                                        <?php if($customer['is_approved']==1){ ?>
                                    <input class="form-check-input approvedstatus" type="checkbox" id="approvedstatus"
                                        value="<?=$customer['rfq_id'];?>" checked="">
                                       <?php }else{?>
                                    <input class="form-check-input approvedstatus" type="checkbox" id="approvedstatus"
                                        value="<?=$customer['rfq_id'];?>" >
                                        <?php }?>
                                </div> -->
                            </div>
                         
                            <div class="col-2 text-center">
                            <a href="<?= base_url().'/public/uploads/'.$customer['rfqupload']; ?>"
                                 class="text-success" download><i class='bx bx-cloud-download'></i> 
                                 <small class="downloadfiles">Download File</small></a>
                            </div>
                            <div class="col-2 text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="edit_rfq?id=<?=$customer['rfq_id']?>"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#basicModal_<?=$customer['rfq_id']?>"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php } }else{ ?>
                        <div class="row">
                            <div class="col-12 text-center text-danger">No Data Found</div>
                        </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <?php if ($pager) :?>

                                    <?= $pager->links() ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>


                        <?php
                        foreach($customerlist as $customer){
                        ?>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal_<?=$customer['rfq_id']?>" tabindex="-1"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Are You Sure ?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            No
                                        </button>
                                        <button type="button" class="btn btn-primary delete_rfq"
                                            value="<?=$customer['rfq_id']?>">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>


                        <!--  -->
                    </div>
                    <div class="card-body" id="invoice" ></div>
                </div>
            </div>
        </div>


    </div>
    <!-- / Content -->

    <?=  $this->endSection()?>
    <?= $this->section('scripts')?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>
 
    <script>
    $(document).ready(function() {
        $("#fromDate").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
        }).on('changeDate', function(selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#toDate').datepicker('setStartDate', minDate);
        });

        $("#toDate").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
        }).on('changeDate', function(selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#fromDate').datepicker('setEndDate', minDate);
        });
    });
    </script>
    <script>
    $('.approvedstatus').click(function() {
        var mem_id = $(this).val();
        var is_check = 0;

        // alert(mem_id);
        if (document.getElementById('approvedstatus').checked) {
            is_check = 1;
            // alert(is_check);

        } else {
            is_check = 0;
            // alert(is_check);
        }
        // $.ajax({

        //     url: '<?=base_url();?>/admin/approvedcustomer',
        //     data: {
        //         'mem_id': mem_id,
        //         'is_check': is_check
        //     },
        //     type: 'post',
        //     success: function(response) {
        //         location.reload();
        //         alert("success");
        //     }
        // });
    });

    $('body').on('click', '.delete_rfq', function() {


        var id = $(this).val();

        var is_delete= 1;

        $.ajax({

            url: "<?php echo base_url('delete_rfq');?>",

            data: {
                id: id,
                is_delete: is_delete
            },

            type: "post",

            success: function(response) {
                // alert(response);
                window.location.href = "<?php echo base_url('admin/rfq');?>";

            }

        });

    });
    </script>
    <script>
    $(document).ready(function() {
        $('.search_order_data').on('click', function(e) {

            $.ajax({

                url: '<?=base_url();?>/admin/searcrfq',
                data: {
                    'fromdate': $('#fromDate').val(),
                    'todate': $('#toDate').val(),
                    'search': $('#search').val(),

                },
                type: 'post',
                success: function(response) {
                    document.getElementById("exportdata").style.display = "none";
                    $('#invoice').html(response);
                    //  document.getElementById("invoice").style.display = "block";

                }
            })
        });
    });
    </script>
    <?=  $this->endSection()?>