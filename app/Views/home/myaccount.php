<?= $this->extend('home/headers')?>

<?= $this->section('content')?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">My Account</h4>
        <div class="row">


            <div class="col-xl-12">

                <div class="nav-align-left mb-4">
                    <div class="row">
                        <div class="col-md-2">

                            <ul class="nav nav-pills me-3" style="width: 275px!important;" role="tablist">
                                <li class="nav-item mb-2">
                                    <button type="button" class="nav-link active px-4" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-left-home" aria-controls="navs-pills-left-home"
                                        aria-selected="true">General Details</button>
                                </li>

                                <li class="nav-item my-2">
                                    <button type="button" class="nav-link px-4" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-left-messages"
                                        aria-controls="navs-pills-left-messages" aria-selected="false">KYC
                                        Details</button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-left-home" role="tabpanel">
                                    <div class="container">
                                        <?php 
                                        // print_r($profiledetails);die();
                                        $i=1; foreach($profiledetail as $profile){?>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <strong>Name</strong>
                                            </div>
                                            <div class="col-md-10">
                                                <p>
                                                    <input id="userid" type="hidden" value="<?= $profile['user_id'];?>">
                                                    <?php echo $profile['firstname'];?>
                                                </p>
                                            </div>
                                            <hr>
                                            <div class="col-md-2 ">
                                                <strong>Email</strong>
                                            </div>
                                            <div class="col-md-10">
                                                <p><?= $profile['emailid'];?></p>
                                            </div>
                                            <hr>
                                            <div class="col-md-2 ">
                                                <strong>Mobile Number</strong>
                                            </div>
                                         
                                            <hr>
                                          

                                        </div>
                                        <?php } ?>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="navs-pills-left-messages" role="tabpanel">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <!--  -->
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item my-2">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                Pan Card
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <!--  -->
                                                                <div class="container">
                                                                    <?php $i=1; foreach($profiledetail as $kycprofile){?>

                                                                    <form>
                                                                        <div class="row g-3">
                                                                            <div class="col-md-6">
                                                                                <label class="form-label"
                                                                                    for="formtabs-first-name">First
                                                                                    Name</label>
                                                                                <input type="text"
                                                                                    id="formtabs-first-name"
                                                                                    class="form-control"
                                                                                    value="<?=$kycprofile['firstname']?>" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label"
                                                                                    for="formtabs-last-name">Last
                                                                                    Name</label>
                                                                                <input type="text"
                                                                                    id="formtabs-last-name"
                                                                                    class="form-control"
                                                                                    value="<?=$kycprofile['lastname']?>" />
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <label class="form-label"
                                                                                    for="formtabs-birthdate">Birth
                                                                                    Date</label>
                                                                                <input type="date" id="kycbod"
                                                                                    class="form-control kycbod"
                                                                                    placeholder="YYYY-MM-DD" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label"
                                                                                    for="formtabs-phone">Phone
                                                                                    No</label>
                                                                                <input type="text" id="phoneno"
                                                                                    class="form-control phone-mask"
                                                                                    value="<?=$kycprofile['mobile_number']?>" />
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label class="form-label"
                                                                                    for="formtabs-phone">PAN Photo
                                                                                    Upload</label>
                                                                                <input type="file" id="panphoto"
                                                                                    class="form-control panphoto" />
                                                                            </div>
                                                                        </div>

                                                                    </form>

                                                                    <?php } ?>
                                                                </div>
                                                                <!--  -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item my-2">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Address Proof
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <!--  -->
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <form>
                                                                            <div class="row g-3">
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label"
                                                                                        for="formtabs-first-name">Resident
                                                                                        Area</label>
                                                                                    <select class="form-select"
                                                                                        id="residentarea"
                                                                                        aria-label="Default select example">
                                                                                        <option value="Resident Indian"
                                                                                            selected>Resident Indian
                                                                                        </option>
                                                                                        <option value="OCI">OCI</option>
                                                                                        <option value="Other">Other
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label"
                                                                                        for="formtabs-birthdate">Aadhaar
                                                                                        Name</label>
                                                                                    <input type="text" id="aadhaarname"
                                                                                        class="form-control aadhaarname" />
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label"
                                                                                        for="formtabs-birthdate">Aadhaar
                                                                                        Address</label>
                                                                                    <input type="text"
                                                                                        id="aadhaaraddress"
                                                                                        class="form-control aadhaaraddress" />
                                                                                </div>
                                                                                <h6 class="mt-4">Address Proof</h6>
                                                                                <small class="py-0 my-0">Aadhaar Front
                                                                                    and Back side maybe
                                                                                    placed in the same document</small>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label"
                                                                                        for="formtabs-last-name">Aadhaar
                                                                                        Front Side</label>
                                                                                    <input type="File"
                                                                                        id="aadharfrontside"
                                                                                        class="form-control aadharfrontside" />
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <label class="form-label"
                                                                                        for="formtabs-birthdate">Aadhaar
                                                                                        Back side</label>
                                                                                    <input type="file"
                                                                                        id="aadharbackside"
                                                                                        class="form-control aadharbackside" />
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!--  -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item my-2">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Bank Details
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <!--  -->
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                        <form>
                                                                            <div class="row">
                                                                            
                                                                                <div class="col-md-12 my-2">
                                                                                    <label class="form-label" for="formtabs-first-name">Bank
                                                                                        Account Type</label>
                                                                                    <select class="form-select" id="bankaccounttype">
                                                                                        <option value="Saving Account" selected>Saving Account</option>
                                                                                        <option value="Salary Account">Salary Account</option>
                                                                                        <option value="Current Account">Current Account</option>
                                                                                    </select>
                                                                                </div>
                                                                                <h6 class="py-1">Account Details</h6>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label"
                                                                                        for="formtabs-facebook">Bank Name </label>
                                                                                    <input type="text" id="bankname" class="form-control bankname" placeholder="Enter Bank Name" />
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label" for="formtabs-google">Account Name</label>
                                                                                    <input type="text" id="accountname" class="form-control accountname" placeholder="Enter Account Name" />
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label"
                                                                                        for="formtabs-facebook">Account Number</label>
                                                                                    <input type="text" id="accountnum" class="form-control accountnum" placeholder="Enter Account Number" />
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label" for="formtabs-google">IFSC
                                                                                        Code</label>
                                                                                    <input type="text" id="ifsccode" class="form-control ifsccode" placeholder="Enter IFSC Code" />
                                                                                </div>

                                                                            </div>

                                                                        </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mt-1">
                                                                                <button type="button"
                                                                                    class="btn btn-primary me-sm-3 me-1 my-3 myaccountlease">Submit</button>
                                                                                <button type="reset"
                                                                                    class="btn btn-label-secondary">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                        <div id="msg"></div>
                                                                    </div>
                                                                </div>
                                                                <!--  -->
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
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<?=  $this->endSection()?>

<?= $this->section('scripts')?>

<script>
$(document).on('click', '.myaccountlease', function(e) {
    $('.myaccountlease').text('Please Wait..').attr('disabled', true);
    var formData = new FormData();
    formData.append('userid', $('#userid').val());
    formData.append('address', $('#address').val());
    formData.append('occupation', $('#occupation').val());
    formData.append('dinnum', $('#dinnum').val());
    formData.append('aadhaaraddress', $('#aadhaaraddress').val());
    formData.append('nominee', $('#nominee').val());
    formData.append('kycbod', $('#kycbod').val());
    formData.append('panphoto', $('#panphoto').get(0).files[0]);
    formData.append('residentarea', $('#residentarea').val());
    formData.append('aadhaarname', $('#aadhaarname').val());
    formData.append('bankaccounttype', $('#bankaccounttype').val());
    formData.append('accountnum', $('#accountnum').val());
    formData.append('ifsccode', $('#ifsccode').val());
    formData.append('bankname', $('#bankname').val());
    formData.append('accountname', $('#accountname').val());
    formData.append('aadharfrontside', $('#aadharfrontside').get(0).files[0]);
    formData.append('aadharbackside', $('#aadharbackside').get(0).files[0]);

    $.ajax({
        method: "POST",
        url: '<?=base_url();?>/customer/myaccountkyc',
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
                $('.myaccountlease').text('Submit').attr('disabled', false);

            } else {
                $('#msg').html('<div class="alert alert-success" role="alert">' + reponse.msg + '</div>');
                // window.location.href = "<?= base_url()?>";
                // alert();
                $('.myaccountlease').text('Submit').attr('disabled', false);

            }


        }
    });
});
</script>
<?=  $this->endSection()?>