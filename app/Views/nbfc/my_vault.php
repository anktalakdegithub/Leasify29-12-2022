<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-2 mb-2">My Vault</h4>
        <!-- <p class="fw-bold py-3 mb-4">Listing All The Orders</p> -->
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 text-end">
                <!-- <a href="new_rfq.php" class="btn btn-primary my-3 text-white"> Create RFQ</a> -->
            </div>
        </div>


        <div class="row">
            <div class="col-8">
                <div class="card  text-white">
                    <div class="card-body">
                        <h3>Transaction History</h3>
                        <div class="table-responsive text-nowrap my-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Total Deal Size</th>
                                        <th>Payment Method</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td>
                                            <strong>1</strong>
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
                                            <b>
                                                <span class="badge rounded-pill bg-label-success">Withdraw</span>
                                            </b>
                                        </td>
                                    </tr> -->
                                    <?php
                                    // print_r("<pre>");
                                    // print_r($walletdetails);die();
                                    if(is_array($walletdetails) && count($walletdetails) > 0){  $i=1; foreach($walletdetails as $wallet){ ?>
                                  
                                    <tr>
                                        <td>
                                            <strong><?php echo $i++; ?></strong>
                                        </td>
                                        <td>
                                            <b>₹ <?= $wallet['Amount']; ?></b>
                                        </td>
                                        <td>
                                            <p>
                                            <?= $wallet['payment_method']; ?>
                                            </p>
                                        </td>
                                        <td>
                                            <b><?= $wallet['pay_date'];?> </b>
                                        </td>
                                        <td>
                                        <b>
                                            <?php if($wallet['is_money']==1){ ?>
                                                <span class="badge rounded-pill bg-label-success">Success</span>
                                                <?php }else{?>
                                                <span class="badge rounded-pill bg-label-danger">Requested</span>
                                                <?php } ?>
                                            </b>
                                        </td>
                                    </tr>
                                    <?php }}else{ ?>
                        <tr class="text-center">
                          <td colspan="5">
                        <p class="text-center">No Data Found</p>
                        </td>
                        </tr>
                       <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <?php echo $pager->links();?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <p>Available Balance</p>
                        <h3>₹ <?= $sumdemo; ?></h3>
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-justified-home"
                                        aria-controls="navs-pills-justified-home" aria-selected="true">
                                        Add Money
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-justified-profile"
                                        aria-controls="navs-pills-justified-profile" aria-selected="false">
                                        Withdraw
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                                    <h4><i class="bx bx-wallet"></i> Add Money</h4>
                                    <form action="<?=base_url();?>/add_money" method="post">
                                        <input type="hidden" name="avmoney" id="avamoney" value="<?= $sumdemo; ?>">
                                        <input type="text" name="money" class="form-control" placeholder="Enter Amount" id="money"
                                            name="type" />
                                        <a><span class="badge rounded-pill bg-label-primary mt-2" id="technician"
                                                onclick="changeValue(this)">1000</span></a>
                                        <a><span class="badge rounded-pill bg-label-primary mt-2" id="developer"
                                                onclick="changeValue(this)">2000</span></a>
                                        <a><span class="badge rounded-pill bg-label-primary mt-2" id="developer1"
                                                onclick="changeValue(this)">5000</span></a>
                                        <a><span class="badge rounded-pill bg-label-primary mt-2" id="developer2"
                                                onclick="changeValue(this)">10000</span></a>
                                        <!-- <center><a href="money" class="btn btn-primary w-100 mt-3">Continue</a></center> -->
                                        <center><button class="btn btn-primary w-100 mt-3 myvault" type="submit">Submit</button>
                                        </center>
                                        <div id="msg"></div>

                                    </form>
                                </div>
                                <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
                                <h4><i class="bx bx-wallet"></i> Withdraw Money</h4>
                                    <form action="">
                                        <!-- <input type="hidden" id="avamoney" value="<?= $sumdemo; ?>"> -->
                                        <input type="text" class="form-control" placeholder="Enter Amount" id="withdrawmoney"
                                            name="type" />
                                        <!-- <a><span class="badge rounded-pill bg-label-primary mt-2" id="technician"
                                                onclick="changeValue(this)">1000</span></a>
                                        <a><span class="badge rounded-pill bg-label-primary mt-2" id="developer"
                                                onclick="changeValue(this)">2000</span></a>
                                        <a><span class="badge rounded-pill bg-label-primary mt-2" id="developer1"
                                                onclick="changeValue(this)">5000</span></a>
                                        <a><span class="badge rounded-pill bg-label-primary mt-2" id="developer2"
                                                onclick="changeValue(this)">10000</span></a> -->
                                        <!-- <center><a href="money" class="btn btn-primary w-100 mt-3">Continue</a></center> -->
                                        <center><button class="btn btn-primary w-100 mt-3 myvaultwithdraw" type="button">Submit</button>
                                        </center>

                                        <div id="msgs"></div>
                                    </form>
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
    // $(document).on('click', '.myvault', function(e) {
        
    //     var formData = new FormData();
    //                formData.append('money', $('#money').val());
    //                formData.append('avamoney', $('#avamoney').val());
  
    //     $.ajax({
    //         method: "POST",
    //         url: '<?=base_url();?>/nbfc/money',
    //         data: formData,
    //         headers: {
    //             'IsAjax': 'true'
    //         },
    //         processData: false,
    //         contentType: false,
    //         dataType: 'json',
    //         success: function(reponse) {
    //             if (reponse.code == "404") {
    //                 $('#msg').html('<p class="text-danger">' + reponse.msg + '</p>');
    //                 // window.location.href = "<?= base_url()?>Welcome/login";

    //             } else {
    //                 $('#msg').html('<p class="text-success">' + reponse.msg + '</p>');
    //                 // window.location.href = "<?= base_url()?>";
    //                 // alert();
    //                  location.reload(true); 
    //             }


    //         }
    //     });

    // });
    </script>
    <script>
    $(document).on('click', '.myvaultwithdraw', function(e) {
        $reason="withdraw";
        var formData = new FormData();
                   formData.append('withdrawmoney', $('#withdrawmoney').val());
                   formData.append('avamoney', $('#avamoney').val());
  
        $.ajax({
            method: "POST",
            url: '<?=base_url();?>/nbfc/withdrawmoney',
            data: formData,
            headers: {
                'IsAjax': 'true'
            },
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(reponse) {
                if (reponse.code == "404") {
                    $('#msgs').html('<div class="alert alert-danger" role="alert">' + reponse.msg + '</div>');
                    // window.location.href = "<?= base_url()?>Welcome/login";

                } else {
                    $('#msgs').html('<div class="alert alert-success" role="alert">' + reponse.msg + '</div>');
                    // window.location.href = "<?= base_url()?>";
                    // alert();
                    location.reload(true); 
                    
                }


            }
        });

    });
    </script>
    <?=  $this->endSection()?>