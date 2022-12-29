<?= $this->extend('home/headers')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
       
        <div class="row">
            <div class="col-md-6">
            <h4 class="fw-bold py-3 mb-4">RFQ List</h4>
        <!-- <p class="fw-bold py-3 mb-4">Listing All The Orders</p> -->
            </div>
            <div class="col-md-6 text-end">
                <a href="createrfq" class="btn btn-primary my-3 text-white"> Create RFQ</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <?php if(is_array($rfqlist) && count($rfqlist) > 0){ $i=1; foreach($rfqlist as $rfqs){ ?>
                        <div class="row">
                            <div class="col-2 text-center">
                                <img class="card-img-top" src="<?=base_url();?>/public/assets/img/user.png" alt="" style="width:50%;">
                            </div>
                            <div class="col-8">
                                <!-- <a href="rfq_details"> -->
                                <a href="rfqdetails/<?=$rfqs['rfq_id']?>">
                                    <h5><i class='bx bx-user'></i> <?= $rfqs['rfqtitlte']; ?> 
                                    <?php if($rfqs['is_approved']==1){?>
                                    <span class="badge bg-label-success me-1">Approved</span>
                                    <?php }else{ ?>
                                    <span class="badge bg-label-warning me-1">Pending</span>
                                    <?php }?>
                                   </h5>
                                </a>
                                <div class="row">
                                    <div class="col-3">
                                        <p class="mb-1"><i class='bx bxs-calendar'></i><?php echo date("d-m-Y", strtotime($rfqs['expiry_date']));?></p>
                                    </div>
                                    <div class="col-5">
                                        <b class="mb-1">
                                            <i class='bx bx-wallet-alt'></i> <i class='bx bx-rupee' ></i> <?= $rfqs['total_cost'];?></b>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="col-3">
                                        <p class="mb-1"> <i class='bx bx-mobile'></i> +91 8888888888 </p>
                                    </div> -->
                                    <div class="col-4">
                                        <p class="mb-1"><i class='bx bx-border-all'></i> Oreder Resource: <?= $rfqs['resource'];?> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 ntext=center">
                                 <a href="<?= base_url().'/public/uploads/'.$rfqs['rfqupload']; ?>"
                                 class="btn btn-primary" download>
                                                            <i class='bx bx-cloud-download'></i> Download File</a>
                            </div>
                        </div>
                        <hr>
                        <?php }}
                        else{
                            // echo 'No Data Found';?>
                          
                            <div class="row">
                            <div class="col-md-12 text-center">
                            <h4 class="text-center">No Data Found</h4>
                <a href="createrfq" class="btn btn-primary my-3 text-white"> Create RFQ</a>
            </div>
                            </div>
                        <?php }
                        ?>
                         <?php echo $pager->links();?>
<!-- 
                        <div class="row">
                            <div class="col-2 text-center">
                                <img class="card-img-top" src="<?=base_url();?>/public/assets/img/elements/19.jpg" alt="" style="width:50%;">
                            </div>
                            <div class="col-8">
                                <a href="rfq_details">
                                    <h5><i class='bx bx-user'></i> Customer Name <span
                                            class="badge bg-label-success me-1">Pending</span></h5>
                                </a>
                                <div class="row">
                                    <div class="col-3">
                                        <p class="mb-1"><i class='bx bxs-calendar'></i> 20-July-2022</p>
                                    </div>
                                    <div class="col-5">
                                        <b class="mb-1">
                                            <i class='bx bx-wallet-alt'></i> <i class='bx bx-rupee' ></i> 86876</b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <p class="mb-1"> <i class='bx bx-mobile'></i> +91 8888888888 </p>
                                    </div>
                                    <div class="col-4">
                                        <p class="mb-1"><i class='bx bx-border-all'></i> Oreder Resource: Website </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 ntext=center">
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
               


                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
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
                                        <button type="button" class="btn btn-primary">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <?=  $this->endSection()?>

