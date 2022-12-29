<?= $this->extend('home/headers')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">RFQ Detail </h4>


        <div class="row">
            <div class="col-md-12">
                    <?php foreach($rfqs as $rfq){?>
                <h3><?php echo $rfq['rfqtitlte'];?></h3>
                <div class="row">
                <div class="col-1 text-start">
                                <img class="card-img-top" src="<?=base_url();?>/public/assets/img/user.png" alt="" style="width:100%;">
                            </div>
                    <div class="col-9 text-start">
                    <p class="my-2"><i class='bx bx-border-all'></i> Oreder Resource: <?= $rfq['resource'];?> </p>
                <p class="my-2"><i class='bx bx-wallet-alt'></i> <i class='bx bx-rupee' ></i> <?= $rfq['total_cost'];?></p>
                <p class="my-2"><i class='bx bxs-calendar'></i><?php echo date("d-m-Y", strtotime($rfq['expiry_date']));?></p>
                    </div>
                </div>
             
                    <?php } ?>
                    <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive text-nowrap bg-white">
                                    <table class="table">
                                        <thead class="table-light">
                                            <tr>
                                                <td>ID</td>
                                                <th>Item</th>
                                                <th>Cost</th>
                                                <th>Qunatity</th>
                                                <th>Total</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php 
                                            $i=1; foreach($rfqdetail as $rfq){?>
                                            <tr>
                                                <td><?= $i++;?></td>
                                              
                                                <td>
                                                    <?=$rfq['requiremnet_details'];?>
                                               
                                                </td>
                                                <td>
                                                    <?=$rfq['cost'];?>
                                               
                                                </td>
                                              
                                                <td><?=$rfq['quantity'];?></td>
                                                <td><?=$rfq['cost']*$rfq['quantity'];?></td>
                                            </tr>
                                            <?php } ?>
                                            <!-- <tr>
                                                <td>002</td>
                                                <td>item</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>003</td>
                                                <td>item</td>
                                                <td>4</td>
                                            </tr> -->
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>Place Your BID:</h5>
                                <form action="">
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="Enter BID" aria-describedby="basic-icon-default-fullname2" />
                                    <center><button type="submit" class="btn btn-primary mt-3">Send</button></center>
                                    <p class="py-3">
                                        <b>Note:</b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente,
                                        aut!
                                    </p>

                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <?=  $this->endSection()?>