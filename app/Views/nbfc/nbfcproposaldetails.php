<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>
<style>
    .form-control:focus{
        color: #192c45;
        background-color: #aad4f7;
        font-weight: bold;
    }
.cardimg {
    height: 250px;
    overflow: hidden;
}

.inputlight {
    position: relative;
    top: 130%;
    transform: translateY(50%);
}

.imgwidth {
    width: 88%;
    margin-left: 2px;
    background-color: #aad4f7;
}

.imgbgg {
    background: url('<?=base_url();?>/public/assets/img/deal/Iwanttoinvest.png');
    background-size: contain;
    background-repeat: no-repeat;
    height: auto;
}

.nextbtn {
    height: 30px;
}

@media only screen and (min-width: 1260px) and (max-width: 1330px) {
    .inputlight {
        position: relative;
        top: 115%;
        transform: translateY(50%);
    }
}

@media only screen and (min-width: 1216px) and (max-width: 1265px) {
    .inputlight {
        position: relative;
        top: 120%;
        transform: translateY(50%);
    }
}

@media only screen and (min-width: 1216px) and (max-width: 1265px) {
    .imgwidth {
        width: 89%;
        margin-top: -5px;
        background-color: #aad4f7;
    }
}

@media only screen and (min-width: 1205px) and (max-width: 1216px) {
    .inputlight {
        position: relative;
        top: 105%;
        transform: translateY(50%);
    }

    .ptext {
        font-size: 14px;
    }
}

@media only screen and (min-width: 1101px) and (max-width: 1204px) {
    .imgwidth {
        width: 92%;
        margin-top: 3px;
        background-color: #aad4f7;
    }

    .inputlight {
        position: relative;
        top: 100%;
        transform: translateY(50%);
    }

    .palltext {
        padding-right: 1rem !important;

    }

    .nextbtn {
        height: 25px;
        margin-left: -10px;
    }

    .ptext {
        font-size: 13.5px;
    }
}

@media only screen and (min-width: 1000px) and (max-width: 1100px) {
    .imgwidth {
        width: 92%;
        margin-top: 3px;
        background-color: #aad4f7;
    }

    .inputlight {
        position: relative;
        top: 75%;
        transform: translateY(50%);
    }
}

@media only screen and (min-width: 768px) and (max-width: 768px) {
    .imgwidth {
    margin-left: 11px!important;
    width: 74%!important;
    margin-bottom: -5px;
    background-color: #aad4f7;
  }
}
@media only screen and (min-width: 779px) and (max-width: 970px) {
    .imgbgg {
        background: url('<?=base_url();?>/public/assets/img/deal/Iwanttoinvest.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
        width: fit-content;
    }

    .imgwidth {
        margin-left: 9px;
        width: 69%;
        background-color: #aad4f7;
    }
}

@media only screen and (min-width: 650px) and (max-width: 780px) {
    .imgbgg {
        background: url('<?=base_url();?>/public/assets/img/deal/Iwanttoinvest.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
        width: fit-content;
    }

    .imgwidth {
        margin-left: 9px;
        /* width: 69%; */
        width: 50%;
        background-color: #aad4f7;
    }
}

@media only screen and (min-width: 400px) and (max-width: 649px) {
    .imgbgg {
        background: url('<?=base_url();?>/public/assets/img/deal/Iwanttoinvest.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
        width: fit-content;
    }

    .imgwidth {
        margin-left: 10px;
        width: 50%;
    }

    .palltext {
        text-align: initial;
        margin-left: 34px;
    }
}

@media only screen and (min-width: 450px) and (max-width: 499px) {
    .imgbgg {
        background: url('<?=base_url();?>/public/assets/img/deal/Iwanttoinvest.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
        width: fit-content;
    }

    .imgwidth {
        margin-left: 10px;
        width: 50%;
    }

    .palltext {
        text-align: initial;
        margin-left: 34px;
    }

    .ptext {
        font-size: 14px;
    }
}

@media only screen and (min-width: 390px) and (max-width: 449px) {
    .imgbgg {
        background: url('<?=base_url();?>/public/assets/img/deal/Iwanttoinvest.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
        width: fit-content;
    }

    .inputlight {
        position: relative;
        top: 112%;
        transform: translateY(50%);
    }

    .imgwidth {
        margin-left: 10px;
        width: 50%;
    }

    .palltext {
        text-align: initial;
        margin-left: 34px;
    }

    .ptext {
        font-size: 14px;
    }

}

@media only screen and (min-width: 370px) and (max-width: 389px) {
    .imgbgg {
        background: url('<?=base_url();?>/public/assets/img/deal/Iwanttoinvest.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
        width: fit-content;
    }

    .inputlight {
        position: relative;
        top: 104%;
        transform: translateY(50%);
    }

    .imgwidth {
        margin-left: 10px;
        width: 50%;
    }

    .palltext {
        text-align: initial;
        margin-left: 25px;
    }

    .ptext {
        font-size: 14px;
    }

    .nextbtn {
        height: 22px;
        margin-left: 20px;
    }
}

@media only screen and (min-width: 330px) and (max-width: 369px) {
    .imgbgg {
        background: url('<?=base_url();?>/public/assets/img/deal/Iwanttoinvest.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
        width: fit-content;
    }

    .inputlight {
        position: relative;
        top: 58%;
        transform: translateY(50%);
    }

    .imgwidth {
        margin-left: 10px;
        width: 50%;
    }

    .palltext {
        text-align: initial;
        margin-left: 20px;
    }

    .ptext {
        font-size: 14px;
    }

    .nextbtn {
        height: 22px;
        margin-left: 20px;
    }
}

@media only screen and (min-width: 250px) and (max-width: 329px) {
    .imgbgg {
        background: url('<?=base_url();?>/public/assets/img/deal/Iwanttoinvest.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
        width: fit-content;
    }

    .imgwidth {
        margin-left: 2px;
        height: 33px;
        width: 56%;
    }

    .inputlight {
        position: relative;
        top: 85%;
        transform: translateY(50%);
    }


    .palltext {
        text-align: initial;
        margin-left: 10px;
    }

    .ptext {
        font-size: 12px;
    }

    .nextbtn {
        height: 22px;
        margin-left: 20px;
    }
}

html:not(.layout-footer-fixed) .content-wrapper {
    padding-bottom: 0 !important;
    background-color: white !important;
}
</style>
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <?php  $i1=1; 
                // print_r($proposaldetails);die();
                foreach($proposaldetails as $proposal){?>
                <h3>
                    <!-- <i class='bx bx-left-arrow-alt'></i> -->
                    <span>
                        <img src="<?=base_url();?><?=$proposal['proposal_logo'];?>" width="100px" height="100px" alt="">
                    </span>
                </h3>
                <h4 class="mt-3"> <?=$proposal['proposal_title'];?></h4>
                <!-- <div class="demo-inline-spacing">
                    <span class="badge bg-label-secondary">Secondary</span>
                    <span class="badge bg-label-secondary">Secondary</span>

                    <span class="badge bg-label-dark">Dark</span>
                    <span class="badge bg-label-secondary">Secondary</span>
                    <span class="badge bg-label-secondary">Secondary</span>

                    <span class="badge bg-label-dark">Dark</span>
                </div> -->
                <p class="cardimg" style="">
                    <img src="<?=base_url();?><?=$proposal['proposal_images']?>" class="mt-3 img-fluid w-100"
                        style="border-radius:25px;" alt="">
                </p>
                <div class="card" style="margin: -35px 10px 0px;border: 4px solid #184b8140;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p><?=$proposal['proposal_details'];?></p>
                                <p><b>Minimum Investment: </b><i class="bx bx-rupee"></i> <?=$proposal['min_investment'];?>
                                </p>

                            </div>

                        </div>
                        <!-- <div class="row">
                            <div class="col-md-4 col-sm-12 text-center">
                                <h4>16%</h4>
                                <p>Pre Tax Return (IRR)</p>
                            </div>
                            <div class="col-md-4 col-sm-12 text-center">
                                <h4>30 months</h4>
                                <p>Tenure</p>
                            </div>
                            <div class="col-md-4 col-sm-12 text-center">

                                <div class="progress" style="height: 5px">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-2"><b>24%</b> Completed</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <?php $i1++; }?>

                <div class="nav-align-top my-4">
                    <ul class="nav nav-pills mb-3" role="tablist">
                    <?php  $i1=1; 
                // print_r($proposaldetails);die();
                foreach($proposaldetails as $proposal){
                    if($proposal['proposal_documents']!=""){
                    ?>
                        <li class="nav-item">
                            <a href="<?=$proposal['proposal_documents']?>" class="nav-link "  target="_blank">
                              More Info
                          </a>
                        </li>
                        <?php } 
                else{
                    echo "No File";
                }
                $i1++; }
                ?>
                        <?php $i=1; $j=0; ?>
                        <?php foreach($proposalsingledetails as $single){ ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link <?php if($j==0) { echo 'active' ; } ?>" role="tab"
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
                <?php  $i1=1; 
                foreach($proposaldetails as $proposal){
                    if($proposal['proposal_documents']!=""){
                    ?>
               
                <!-- <iframe src="<?=$proposal['proposal_documents']?>#toolbar=0" type='application/pdf'  width="100%" height="300"></iframe> -->
                <?php } 
                else{
                    // echo "No File";
                }
                $i1++; }
                ?>

            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 px-2 text-center imgbgg">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-8 ">
                            <div class="row inputlight">
                                <div class="col-12">
                                    <form action="">
                                        <input type="hidden" name="" id="propid" value="<?=$proposal['proposal_id'];?>">
                                        <input type="hidden" name="" id="customer_id"
                                            value="<?=$proposal['customer_id'];?>">
                                        <input type="number" id="nbfcbid" class="form-control border-0 imgwidth" placeholder="Enter Amount">
                                    </form>
                                </div>
                                <div class="col-12 mt-3 pe-5 palltext">
                                <?php  $i1=1;  foreach($proposaldetails as $proposal){?>
                                    <p class="px-0 mb-0 ptext">XIRR: <?php echo $proposal['pre_tax'].'%';?></p>
                                   
                                   <?php }?>
                                    <button type="button" class="nbfcsend border-0 pt-1 bg-white">

                                        <img class="nextbtn mt-2"
                                            src="<?=base_url();?>/public/assets/img/deal/nextbutton.png"
                                            alt="next button">

                                    </button>
                                    
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4"></div>

                    </div>
                   
                </div>
            </div>
        </div>
        <div class="row">
        <p id="msg"></p>
        </div>
    </div>

    <?=  $this->endSection()?>
    <?= $this->section('scripts')?>
    <script>
    $('.nbfcsend').click(function() {
        // $('.nbfcsend').text('Please Wait..').prop("disabled", true);
        var formData = new FormData();
        formData.append('propid', $('#propid').val());
        formData.append('nbfcbid', $('#nbfcbid').val());
        formData.append('customer_id', $('#customer_id').val());
        // formData.append('nbfcfile', $('#nbfcfile').get(0).files[0]);


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
                    $('#msg').html('<div class="alert alert-danger" role="alert">' + reponse.msg +
                        '</div>');
                   
                    // $('.nbfcsend').text('Send').prop("disabled", false);

                } 
               else if (reponse.code == "203") {
                    $('#msg').html('<div class="alert alert-danger" role="alert">' + reponse.msg +
                        '</div>');
                        window.location.href = "<?= base_url()?>/user/profile";
                    // $('.nbfcsend').text('Send').prop("disabled", false);

                } 
                else {
                    $('#msg').html('<div class="alert alert-success" role="alert">' + reponse.msg +
                        '</div>');
                    window.location.href = "<?= base_url()?>/user/thanks";
                    // alert();
                    // $('.nbfcsend').text('Send').prop('disabled', false);

                }


            }
        });


    });
    </script>
    <?=  $this->endSection()?>