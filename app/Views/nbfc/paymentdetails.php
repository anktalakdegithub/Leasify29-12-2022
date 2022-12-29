<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>

<div class="container my-auto">
    <div class="row ">
        <div class="col-md-3"></div>
        <div class="col-md-6 my-auto">
            <div class="card bg-primary">
                <div class="card-body ">
                    <h2 class="text-center text-white">Bank Details</h2>
                    <div class="row py-3">
                        <div class="col-md-12 text-center">
                            <h6 class="text-white">Bank Name:
                                <b>Kotak Mahindra Bank</b>
                            </h6>
                        </div>
                        <div class="col-md-12 text-center">
                            <h6 class="text-white">Account Name : <b>ANAHAT FINSERV LLP </b></h6>
                        </div>
                        <div class="col-md-12 text-center">
                            <h6 class="text-white">Account Number: <b>7347188132</b>
                            </h6>
                        </div>
                       
                        <div class="col-md-12 text-center">
                            <h6 class="text-white">IFSC CODE : <b>KKBK0000681</b></h6>
                        </div>
                    </div>
                    <div class="row">
                        <p class="text-center text-white">If the deal is cancelled or not closed due to unforeseen circumstances, the refund will be initiated within 22 days of your investment-  and should reflect in your bank account within the next 7 working days post initiation.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        <h4 class="text-center my-4 ">Please note- While making the IMPS/NEFT/RTGS payment do mention the following in your remarks section: Investor Name- Name of Deal Invested In (Eg. Ramesh Jain-  Pet Pooja)</h4>
        <h4 class="text-center my-4 d-none">Kindly make IMPS/NEFT/RTGS on above account details.</h4>
        <div class="col-md-3"></div>
        <div class="col-md-6 my-3 d-none">
            <div class="card shadow">
                <div class="card-body ">
                    <h5 class="text-center">Personal Details</h5>
                    <form action="">
                        <label for="" class="py-2">Project Name</label>
                        <select class="form-control"  name="projectname" id="projectname">
                        <?php 
                       $i=1;
                            foreach($indicativedetails as $nb){
                           
                            ?>
                            <option class="form-control" value="<?=$nb['proposal_title'];?>"><?=$nb['proposal_title'];?></option>
                            <?php }?>
                        </select>
                        <!-- <input type="text" class="form-control" placeholder="Enter Amount" id="projectname" name="type" /> -->
                        <label for="" class="py-2">Enter Project Details</label>
                        <textarea name="" class="form-control" id="prodetails" cols="10" rows="2"></textarea>
                        <center><button class="btn btn-primary w-100 my-3 mypaymentdetails" type="button">Submit</button>
                        </center>

                        <div id="msgs"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?=  $this->endSection()?>
<?= $this->section('scripts')?>
<script>
    $(document).on('click', '.mypaymentdetails', function(e) {
        $('.mypaymentdetails').text('Please Wait..').attr('disabled', true);
        var formData = new FormData();
                   formData.append('projectname', $('#projectname').val());
                   formData.append('prodetails', $('#prodetails').val());
  
        $.ajax({
            method: "POST",
            url: '<?=base_url();?>/user/prodetails',
            data: formData,
            headers: {
                'IsAjax': 'true'
            },
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(reponse) {
                if (reponse.code == "404") {
                    $('.mypaymentdetails').text('Submit').attr('disabled', false);
                    $('#msgs').html('<div class="alert alert-danger" role="alert">' + reponse.msg + '</div>');
                    // window.location.href = "<?= base_url()?>Welcome/login";

                } else {
                    $('.mypaymentdetails').text('Submit').attr('disabled', false);
                    $('#msgs').html('<div class="alert alert-success" role="alert">' + reponse.msg + '</div>');
                    // window.location.href = "<?= base_url()?>";
                    // alert();
                    // location.reload(true); 
                    
                }


            }
        });

    });
    </script>
<?=  $this->endSection()?>