<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-md-5">
                <h4 class="fw-bold py-3 mb-4">Indicative Proposals List</h4>
                <!-- <p class="fw-bold py-3 ">Listing All The Orders</p> -->
            </div>
            <div class="col-md-7 text-end">
                <!-- <a href="new_rfq" class="btn btn-primary my-3 text-white"> Create Indicative Proposals</a> -->
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
                        <!-- <div class="row">
                            <div class="col-10 px-0">
                                <input id='out' class="form-control" placeholder="mm/dd/yy to mm/dd/yy" />
                            </div>
                            <div class="col-2 bg-primary pt-2">
                                <span id='i' class="bx bx-calendar text-white"></span>


                            </div>
                            <div id='ccc'></div>
                        </div> -->
                    </div>
                    <div class="col-md-5 px-1">
                        <div class="row">
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="search" placeholder="Search..."
                                    aria-label="Search..." aria-describedby="basic-addon-search31" />
                                <!-- <span class="input-group-text" id="basic-addon-search31"><i
                                        class="bx bx-search"></i></span> -->
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
                        <?php
                        if(is_array($inductive_list) && count($inductive_list) > 0){
                        foreach($inductive_list as $inductive){
                            ?>
                        <div class="row">
                            <div class="col-2 text-center">
                                <img class="card-img-top" src="<?=base_url();?>/<?=$inductive['proposal_logo']?>" alt=""
                                    style="width:50%;">
                            </div>
                            <div class="col-8">

                                <div class="row">
                                    <div class="col-md-9">
                                        <a href="proposal_details?id=<?=$inductive['proposal_id']?>">
                                            <h5><i class='bx bx-user'></i> <?=$inductive['proposal_title']?>

                                                <?php if($inductive['NBFC_publish']==1){ ?>
                                                <span class="badge bg-label-success me-1">Completed</span>
                                                <?php }elseif($inductive['investor_publish']==1){?>
                                                <span class="badge bg-label-success me-1">Completed</span>
                                                <?php }elseif($inductive['NBFC_publish']==1 && $inductive['investor_publish']==1){?>
                                                <span class="badge bg-label-success me-1">Completed</span>
                                                <?php }else{ ?>
                                                <span class="badge bg-label-warning me-1">Pending</span>
                                                <?php } ?>
                                            </h5>

                                        </a>
                                        <p class="m-0">Date: <?=$inductive['proposal_date']?></p>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <p class="mb-0">Mobile No. +91 <?=$inductive['mobile_number'];?></p>
                                            </div>
                                            <div class="col-md-7">
                                                <p class="py-0">Email Id:<?=$inductive['emailid'];?></p>
                                            </div>
                                        </div>


                                        <!-- <p><?=$inductive['proposal_details']?></p> -->
                                    </div>
                                    <div class="col-md-3">
                                        <h6>Requirement Amount</h6>
                                        <h6><i class='bx bx-rupee'></i> <?=$inductive['requirementamount']?></h6>
                                    </div>

                                </div>
                            </div>
                            <div class="col-2 text-center">

                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="edit_proposal?id=<?=$inductive['proposal_id']?>"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#basicModal_<?=$inductive['proposal_id']?>"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal_<?=$inductive['proposal_id']?>">
                                            Publish Proposal
                                        </button>

                                        <!-- Modal -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        
                        <?php
                        foreach($inductive_list as $inductive){
                        ?>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal_<?=$inductive['proposal_id']?>" tabindex="-1"
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
                                        <button type="button" class="btn btn-primary delete_proposal"
                                            value="<?=$inductive['proposal_id'];?>">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal_<?=$inductive['proposal_id']?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Publish Proposal </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="<?php echo base_url('publish_proposal'); ?>">
                                        <div class="modal-body">
                                            <input type="hidden" value="<?=$inductive['proposal_id']?>"
                                                name="proposal_id" id="flexCheckDefault">
                                            <?php
                                        // if($inductive['NBFC_publish'] == 0){
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="yes" name="nbfc"
                                                    id="nbfc" <?php if($inductive['NBFC_publish']==1){echo 'checked';}?>>
                                                <label class="form-check-label" for="nbfc">
                                                    NBFC
                                                </label>
                                            </div>
                                            <?php
                                        // }else{
                                        ?>
                                            <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked value="" name="nbfc" id="nbfc">
                                                <label class="form-check-label" for="nbfc">
                                                    NBFC
                                                </label>
                                            </div> -->
                                            <?php
                                        // }
                                        ?>
                                            <?php
                                        // if($inductive['investor_publish'] == 0){
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="yes"
                                                    name="investor" id="investor" <?php if($inductive['investor_publish']==1){echo 'checked';}?>>
                                                <label class="form-check-label" for="investor">
                                                    Investor
                                                </label>
                                            </div>
                                            <?php
                                        // }else{
                                        ?>
                                            <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked value="" name="investor" id="investor" >
                                                <label class="form-check-label" for="investor">
                                                    Investor
                                                </label>
                                            </div> -->
                                            <?php
                                        // }
                                        ?>


                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            <button type="submit" class="btn btn-primary">Save changes</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        ?>
                        <?php
                        }}else{ ?>
                        <div class="row">
                            <div class="col-12 text-center text-danger">No Data Found</div>
                        </div>
                        <?php } ?>
                        <!-- <div id="exportdatas" > -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <?php if ($pager) :?>
                                    <?php //$pagi_path='admin/indicativeproposal'; ?>
                                    <?php //$pager->setPath($pagi_path); ?>
                                    <?= $pager->links() ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-2 text-center">
                                <img class="card-img-top" src="<?=base_url();?>/public/assets/img/elements/19.jpg" alt="" style="width:50%;">
                            </div>
                            <div class="col-8">

                                <div class="row">
                                    <div class="col-9">
                                        <a href="rfq_details">
                                            <h5><i class='bx bx-user'></i> RFQ's Request <span
                                                    class="badge bg-label-warning me-1">Pending</span></h5>

                                        </a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sapiente
                                            recusandae, libero cumque quia nisi.</p>
                                    </div>
                                    <div class="col-3">
                                        <h6>Requirement Amount</h6>
                                        <h6><i class='bx bx-rupee'></i> 4456</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="col-2 text-center">

                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="edit_rfq"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#basicModal"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr> -->

                        <!-- <div class="row">
                            <div class="col-2 text-center">
                                <img class="card-img-top" src="<?=base_url();?>/public/assets/img/elements/19.jpg" alt="" style="width:50%;">
                            </div>
                            <div class="col-8">

                                <div class="row">
                                    <div class="col-9">
                                        <a href="rfq_details">
                                            <h5><i class='bx bx-user'></i> RFQ's Request <span
                                                    class="badge bg-label-warning me-1">Pending</span></h5>

                                        </a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sapiente
                                            recusandae, libero cumque quia nisi.</p>
                                    </div>
                                    <div class="col-3">
                                        <h6>Requirement Amount</h6>
                                        <h6><i class='bx bx-rupee'></i> 4456</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="col-2 text-center">

                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="edit_rfq"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#basicModal"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!--  -->
                    </div>
                    <div class="card-body" id="invoice"></div>
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
    // $('#i').dateRangePicker({
    //         inline: true,
    //         format: 'MM-DD-YYYY',
    //         container: '#ccc',
    //         alwaysOpen: false,
    //         singleMonth: true,
    //         showTopbar: false,
    //         setValue: function(s) {

    //             $(this).val('12-01-2017');
    //         }
    //     })
    //     .bind('datepicker-change', (e, data) => {
    //         $('#out').val(data.value);
    //     })
    $('body').on('click', '.delete_proposal', function() {


        var id = $(this).val();

        // var img=$('#img').val();

        // alert(id)

        $.ajax({

            url: "<?php echo base_url('delete_proposal');?>",

            data: {
                id: id,
            },

            type: "post",

            success: function(response) {
                // alert(response);
                window.location.href = "<?php echo base_url('admin/indicativeproposal');?>";

            }

        });



        // alert('ok');



    });
    </script>

    <script>
    $(document).ready(function() {
        $('.search_order_data').on('click', function(e) {

            $.ajax({

                url: '<?=base_url();?>/admin/searchindicative',
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