<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h2 class="fw-bold py-3 mb-4 text-center text-dark">My Deals</h2>




        <div class="row">
            <div class="col-md-12">
                <div class="nav-align-top my-4">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">My Deals</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Repayment Schedule</button>
                        </li>


                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <h4 class="fw-bold py-3 mb-4">My Deals</h4>
                            <div class="col-md-12">
                                <div class="table-responsive text-nowrap bg-white mb-4">
                                    <table class="table table-hover">
                                        <thead class="table-dark">
                                            <tr>
                                                <td>ID</td>
                                                <td>Deal</td>
                                                <td>Investment Amount</td>
                                                <td>Date</td>
                                                <td>Status</td>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">

                                            <?php if(is_array($all_nbfc_active) && count($all_nbfc_active) > 0){ $i=1; foreach($all_nbfc_active as $nbfc){ ?>
                                            <tr>

                                                <td><?= $i++; ?></td>
                                                <td><?= $nbfc['proposal_title']; ?></td>
                                                <td><?= $nbfc['min_investment'];?></td>
                                                <td><?= $nbfc['proposal_date'];?></td>
                                                <td>
                                                    <?php if($nbfc['status']==1){?>
                                                    <span class="badge bg-label-success me-1">Active</span>
                                                    <?php }elseif($nbfc['status']==0){ ?>
                                                    <span class="badge bg-label-danger me-1">Pending</span>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php }}else{ ?>
                                            <tr class="text-center">
                                                <td colspan="6">
                                                <h5 class="text-center py-3">Many more deals coming your way, stay tuned!</h5>
                                                </td>
                                            </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>
                                </div>
                                <?php echo $pager->links();?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <h4 class="fw-bold py-3 mb-4">Repayment Schedule</h4>




                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive text-nowrap bg-white">
                                        <table class="table table-hover">
                                            <thead class="table-dark">
                                                <tr>
                                                    <td>ID</td>
                                                    <td>Date</td>
                                                    <td>Vendor</td>
                                                    <td>Project</td>
                                                    <td>Amount</td>
                                                    <td>Status</td>
                                                    <!-- <th>Action</th> -->
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <?php if(is_array($payment) && count($payment) > 0){            
              $i = 1;
              foreach($payment as $pay){ ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?=$pay->pay_date?></td>
                                                    <td><?=$pay->firstname?><?=$pay->lastname?></td>
                                                    <td><?=$pay->proposal_title?></td>
                                                    <td><i class='bx bx-rupee'></i> <?=$pay->amount?></td>
                                                    <td>
                                                        <?php if($pay->status==1){?>
                                                        <span class="badge bg-label-success me-1">Completed</span>
                                                        <?php }else{ ?>

                                                        <span class="badge bg-label-danger me-1">Pending</span>
                                                        <?php } ?>
                                                    </td>


                                                </tr>
                                                <?php }}
                else{
                    // echo 'No Data Found';?>
                                                <tr>
                                                    <td colspan="6">
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <h5 class="text-center py-3">Many more deals coming your way, stay tuned!</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php }
                ?>



                                            </tbody>
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