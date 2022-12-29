<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h3 class="fw-bold py-2 mb-2">Indicative Proposal Detail</h3>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 text-end">
            </div>
        </div>
        <?php ?>

        <div class="row">
            <div class="row ">
                <div class="col-9">
                    <div class="col my-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <?php  $i=1;  foreach($proposaldetails as $proposal){?>
                                <h5 class="card-title">
                                    <img src="<?=base_url();?><?=$proposal['proposal_logo'];?>"
                                        class="w-full object-scale-down shadow me-3" width="100px" height="100px">
                                    <?=$proposal['proposal_title'];?>
                                </h5>
                                <p class="card-text">
                                <!-- <p class="mb-1"><i class="bx bx-border-all"></i> Oreder Resource: Website </p> -->
                                <p><?=$proposal['proposal_details'];?></p>
                                </p>

                                <p><b>Required Amount: </b><i class="bx bx-rupee"></i> <?=$proposal['min_investment'];?>
                                </p>

                                <?php  }?>

                                <div class="nav-align-top my-4">
                                    <ul class="nav nav-pills mb-3" role="tablist">
                                        <?php $i=1; $j=0; ?>
                                        <?php foreach($proposalsingledetails as $single){ ?>
                                        <li class="nav-item">
                                            <button type="button"
                                                class="nav-link <?php if($j==0) { echo 'active' ; } ?>" role="tab"
                                                data-bs-toggle="tab" data-bs-target="#navs_proposal_<?= $i++;?>"
                                                aria-controls="navs-pills-top-home" aria-selected="true">
                                                <?=$single['proposal_tag_title'];?>
                                            </button>
                                        </li>
                                        <?php $j++; ?>
                                        <?php } ?>


                                    </ul>
                                    <div class="tab-content">
                                        <?php $i=1; $i1=0;  foreach($proposalsingledetails as $single){ 
                                          
                                            ?>
                                        <div class="tab-pane fade show <?php if($i1==0) { echo 'active' ; } ?>"
                                            id="navs_proposal_<?= $i++;?>" role="tabpanel">
                                            <p>

                                            <?=$single['proposal_tags_description'];?>
                                            </p>
                                          
                                        </div>

                                        <?php $i1++; }?>

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
                            <h5>Place Your BID: </h5>
                            <form action="">
                                <input type="hidden" name="" id="propid" value="<?=$proposal['proposal_id'];?>">
                                <input type="hidden" name="" id="customer_id" value="<?=$proposal['customer_id'];?>">
                                <input type="text" class="form-control" id="nbfcbid" placeholder="Enter BID" />
                                <h6 class="mt-3">Upload Files</h6>
                                <input type="file" class="form-control" id="nbfcfile" />
                                <center><button type="button" class="btn btn-primary mt-3 nbfcsend">Send</button>
                                </center>
                                <div id="msg"></div>
                             
                            </form>
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
    $('.nbfcsend').click(function() {
        $('.nbfcsend').text('Please Wait..').prop("disabled",true);
        var formData = new FormData();
        formData.append('propid', $('#propid').val());
        formData.append('nbfcbid', $('#nbfcbid').val());
        formData.append('customer_id', $('#customer_id').val());
        formData.append('nbfcfile', $('#nbfcfile').get(0).files[0]);


        $.ajax({
            method: "POST",
            url: '<?=base_url();?>/nbfc/placebid',
            data: formData,
            headers: {
                'IsAjax': 'true'
            },
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(reponse) {
              
                if (reponse.code == "404") {
                    $('#msg').html('<div class="alert alert-danger" role="alert">' + reponse.msg + '</div>');
                    // window.location.href = "<?= base_url()?>Welcome/login";
                    $('.nbfcsend').text('Send').prop("disabled",false);

                } else {
                    $('#msg').html('<div class="alert alert-success" role="alert">' + reponse.msg + '</div>');
                    window.location.href = "<?= base_url()?>/user/thanks";
                    // alert();
                    $('.nbfcsend').text('Send').prop('disabled', false);

                }


            }
        });


    });
    </script>
    <?=  $this->endSection()?>