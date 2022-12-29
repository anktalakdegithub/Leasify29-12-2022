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
                        <!-- <li class="nav-item my-2">
                            <button type="button" class="nav-link px-4" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-left-profile" aria-controls="navs-pills-left-profile"
                                aria-selected="false">KYC Details</button>
                        </li> -->
                        <li class="nav-item my-2">
                            <button type="button" class="nav-link px-4" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-left-messages" aria-controls="navs-pills-left-messages"
                                aria-selected="false">KYC Details</button>
                        </li>
                    </ul>
                    </div>
                    <div class="col-md-10">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-pills-left-home" role="tabpanel">
                            <div class="container">
                            <?php
                            // print_r($profiledetails);die();
                            $i=1; foreach($profiledetails as $profile){?>
                                <div class="row">
                                    <div class="col-md-2 ">
                                        <strong>Name</strong>
                                    </div>
                                    <div class="col-md-10">
                                        <p>
                                            <input id="userid" type="hidden" value="<?= $profile['user_id'];?>">
                                            <?php echo $profile['firstname'];?></p>
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
                                    <div class="col-md-10">
                                        <p><?= $profile['mobile_number'];?></p>
                                    </div>
                                    <hr>
                                    <div class="col-6"></div>
                                    <div class="col-6 text-end">
                                        <!-- <button class="btn btn-primary">Save</button> -->
                                    </div>

                                </div>
                                <?php } ?>
                            </div>

                        </div>
                        <!-- <div class="tab-pane fade" id="navs-pills-left-profile" role="tabpanel">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="nav-align-top mb-3">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button class="nav-link active" data-bs-toggle="tab"
                                                        data-bs-target="#form-tabs-personal" role="tab"
                                                        aria-selected="true">Pan Card</button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link " data-bs-toggle="tab"
                                                        data-bs-target="#form-tabs-account" role="tab"
                                                        aria-selected="false">Address Proof</button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#form-tabs-social" role="tab"
                                                        aria-selected="false">Bank Details</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="form-tabs-personal"
                                                    role="tabpanel">
                                                    <form>
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-first-name">First Name</label>
                                                                <input type="text" id="formtabs-first-name"
                                                                    class="form-control" placeholder="John" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-last-name">Last
                                                                    Name</label>
                                                                <input type="text" id="formtabs-last-name"
                                                                    class="form-control" placeholder="Doe" />
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-birthdate">Birth
                                                                    Date</label>
                                                                <input type="text" id="formtabs-birthdate"
                                                                    class="form-control dob-picker"
                                                                    placeholder="YYYY-MM-DD" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-phone">Phone
                                                                    No</label>
                                                                <input type="text" id="formtabs-phone"
                                                                    class="form-control phone-mask"
                                                                    placeholder="658 799 8941"
                                                                    aria-label="658 799 8941" />
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="form-label" for="formtabs-phone">PAN Photo
                                                                    Upload</label>
                                                                <input type="file" id="formtabs-phone"
                                                                    class="form-control phone-mask" />
                                                            </div>
                                                        </div>
                                                        <div class="pt-4">
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                            <button type="reset"
                                                                class="btn btn-label-secondary">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                                                    <form>
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-first-name">Resident Area</label>
                                                                <select class="form-select"
                                                                    id="exampleFormControlSelect1"
                                                                    aria-label="Default select example">
                                                                    <option selected>Resident Indian</option>
                                                                    <option value="1">OCI</option>
                                                                    <option value="3">Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-birthdate">Aadhaar Name</label>
                                                                <input type="file" id="formtabs-birthdate"
                                                                    class="form-control dob-picker"
                                                                    placeholder="Enter Name" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-birthdate">Aadhaar Address</label>
                                                                <input type="file" id="formtabs-birthdate"
                                                                    class="form-control dob-picker"
                                                                    placeholder="Aadhaar Address" />
                                                            </div>
                                                            <h6 class="mt-4">Address Proof</h6>
                                                            <small class="py-0 my-0">Aadhaar Front and Back side maybe
                                                                placed in the same document</small>
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-last-name">Aadhaar Front Side</label>
                                                                <input type="File" id="formtabs-last-name"
                                                                    class="form-control" />
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-birthdate">Aadhaar Back side</label>
                                                                <input type="file" id="formtabs-birthdate"
                                                                    class="form-control dob-picker"
                                                                    placeholder="YYYY-MM-DD" />
                                                            </div>
                                                        </div>
                                                        <div class="pt-4">
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                            <button type="reset"
                                                                class="btn btn-label-secondary">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                                                    <form>
                                                        <div class="row g-3">
                                                            <h6>Bank Details</h6>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-first-name">Bank
                                                                    Account Type</label>
                                                                <select class="form-select"
                                                                    id="exampleFormControlSelect1"
                                                                    aria-label="Default select example">
                                                                    <option selected>Saving Account</option>
                                                                    <option value="1">Salary Account</option>
                                                                    <option value="3">Current Account</option>
                                                                </select>
                                                            </div>
                                                            <h6>Account Details</h6>
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="formtabs-facebook">Account Number</label>
                                                                <input type="text" id="formtabs-facebook"
                                                                    class="form-control"
                                                                    placeholder="Enter Account Number" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-google">IFSC
                                                                    Code</label>
                                                                <input type="text" id="formtabs-google"
                                                                    class="form-control"
                                                                    placeholder="Enter IFSC Code" />
                                                            </div>

                                                        </div>
                                                        <div class="pt-4">
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                            <button type="reset"
                                                                class="btn btn-label-secondary">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="tab-pane fade" id="navs-pills-left-messages" role="tabpanel">
                            <div class="accordion" id="collapsibleSection">
                                <!-- Delivery Address -->
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingDeliveryAddress">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseDeliveryAddress" aria-expanded="true"
                                            aria-controls="collapseDeliveryAddress"> Pan Card </button>
                                    </h2>
                                    <div id="collapseDeliveryAddress" class="accordion-collapse collapse show"
                                        aria-labelledby="headingDeliveryAddress" data-bs-parent="#collapsibleSection">
                                        <div class="accordion-body">
                                        <?php $i=1; foreach($profiledetails as $kycprofile){?>
                                            <div class="row g-3">
                                                <form>
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-first-name">First
                                                                Name</label>
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control" value="<?=$kycprofile['firstname']?>" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-last-name">Last
                                                                Name</label>
                                                            <input type="text" id="formtabs-last-name"
                                                                class="form-control" value="<?=$kycprofile['lastname']?>" />
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-birthdate">Birth
                                                                Date</label>
                                                            <input type="date" id="kycbod"
                                                                class="form-control kycbod" placeholder="YYYY-MM-DD" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-phone">Phone
                                                                No</label>
                                                            <input type="text" id="phoneno"
                                                                class="form-control phone-mask" value="<?=$kycprofile['mobile_number']?>" />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="form-label" for="formtabs-phone">PAN Photo
                                                                Upload</label>
                                                            <input type="file" id="panphoto"
                                                                class="form-control panphoto" />
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Delivery Options -->
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingDeliveryOptions">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseDeliveryOptions"
                                            aria-expanded="false" aria-controls="collapseDeliveryOptions">Address
                                            Proof</button>
                                    </h2>
                                    <div id="collapseDeliveryOptions" class="accordion-collapse collapse"
                                        aria-labelledby="headingDeliveryOptions" data-bs-parent="#collapsibleSection">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <form>
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-first-name">Resident
                                                                Area</label>
                                                            <select class="form-select" id="residentarea"
                                                                aria-label="Default select example">
                                                                <option value="Resident Indian" selected>Resident Indian</option>
                                                                <option value="OCI">OCI</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-birthdate">Aadhaar
                                                                Name</label>
                                                            <input type="text" id="aadhaarname" class="form-control aadhaarname"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-birthdate">Aadhaar
                                                                Address</label>
                                                            <input type="text" id="aadhaaraddress" class="form-control aadhaaraddress"/>
                                                        </div>
                                                        <h6 class="mt-4">Address Proof</h6>
                                                        <small class="py-0 my-0">Aadhaar Front and Back side maybe
                                                            placed in the same document</small>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-last-name">Aadhaar Front Side</label>
                                                            <input type="File" id="aadharfrontside" class="form-control aadharfrontside" />
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="form-label" for="formtabs-birthdate">Aadhaar Back side</label>
                                                            <input type="file" id="aadharbackside" class="form-control aadharbackside" />
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Payment Method -->
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingPaymentMethod">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsePaymentMethod"
                                            aria-expanded="false" aria-controls="collapsePaymentMethod"> Bank Details
                                        </button>
                                    </h2>
                                    <div id="collapsePaymentMethod" class="accordion-collapse collapse"
                                        aria-labelledby="headingPaymentMethod" data-bs-parent="#collapsibleSection">
                                        <form>
                                            <div class="accordion-body">

                                                <div class="row">
                                                    <form>
                                                        <div class="row ">
                                                           
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="formtabs-first-name">Bank
                                                                    Account Type</label>
                                                                <select class="form-select" id="bankaccounttype">
                                                                    <option value="Saving Account" selected>Saving Account</option>
                                                                    <option value="Salary Account">Salary Account</option>
                                                                    <option value="Current Account">Current Account</option>
                                                                </select>
                                                            </div>
                                                            <h6>Account Details</h6>
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
                                                <div class="mt-1">
                                                    <button type="button" class="btn btn-primary me-sm-3 me-1 my-3 myaccountlease">Submit</button>
                                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="msg"></div>
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
                   formData.append( 'userid', $('#userid').val());
                   formData.append( 'address', $('#address').val());
                   formData.append( 'occupation', $('#occupation').val());
                   formData.append( 'dinnum', $('#dinnum').val());
                   formData.append( 'aadhaaraddress', $('#aadhaaraddress').val());
                   formData.append( 'nominee', $('#nominee').val());
                   formData.append( 'kycbod', $('#kycbod').val());
                   formData.append('panphoto', $('#panphoto').get(0).files[0]);
                   formData.append( 'residentarea', $('#residentarea').val());
                   formData.append( 'aadhaarname', $('#aadhaarname').val());
                   formData.append( 'bankaccounttype', $('#bankaccounttype').val());
                   formData.append( 'accountnum', $('#accountnum').val());
                   formData.append( 'ifsccode', $('#ifsccode').val());
                   formData.append('aadharfrontside', $('#aadharfrontside').get(0).files[0]);
                   formData.append('aadharbackside', $('#aadharbackside').get(0).files[0]);
                  
                    $.ajax({
                            method: "POST",
                            url: '<?=base_url();?>/customer/myaccountkyc',
                            data: formData,
                            headers: { 'IsAjax': 'true' },
                            processData: false,
                            contentType: false,
                            dataType: 'json',
                            success:function(reponse){
                                if (reponse.code == "404") {
                    $('#msg').html('<p class="text-danger">' + reponse.msg + '</p>');
                    // window.location.href = "<?= base_url()?>Welcome/login";
                    $('.myaccountlease').text('Submit').attr('disabled', false);

                } else {
                    $('#msg').html('<p class="text-success">' + reponse.msg + '</p>');
                    // window.location.href = "<?= base_url()?>";
                    // alert();
                    $('.myaccountlease').text('Submit').attr('disabled', false);

                } 
                           

                            }
                    });
    });
    </script>
<?=  $this->endSection()?>