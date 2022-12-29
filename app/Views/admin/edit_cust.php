
<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Edit Details</h4>




        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <!-- <h5 class="mb-0">Create New Customer</h5> -->

            </div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url('admin/update_user')?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">First Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="hidden" name="user_id" value="<?=$customer->user_id?>">
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="Enter Your Name" aria-label="Enter Your Name"
                                        aria-describedby="basic-icon-default-fullname2" name="firstname" value="<?=$customer->firstname?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Last Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="Enter Your Name" aria-label="Enter Your Name"
                                        aria-describedby="basic-icon-default-fullname2" name="lastname" value="<?=$customer->lastname?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Email</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-envelope"></i></span>
                                    <input type="email" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="Enter Your email" aria-label="Enter Your email"
                                        aria-describedby="basic-icon-default-fullname2" name="emailid" value="<?=$customer->emailid?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Phone Number</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-mobile"></i></span>
                            <input type="tel" id="basic-icon-default-company" class="form-control"
                                placeholder="Enter Your Phone Number" name="mobile_number" value="<?=$customer->mobile_number?>"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Password</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-mobile"></i></span>
                            <input type="password" id="basic-icon-default-company" class="form-control"
                                placeholder="Enter Your Password" name="password" value="<?=$customer->password?>"/>
                        </div>
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Date</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-buildings"></i></span>
                            <input type="date" id="basic-icon-default-company" class="form-control"
                                placeholder="ACME Inc." aria-label="ACME Inc."
                                aria-describedby="basic-icon-default-company2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Status</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected="">Active</option>
                          <option value="1">Completed</option>
                          <option value="2">Not Completed</option>
                          <option value="3">Pending</option>
                        </select>
                    </div> -->
                    <!-- <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-message">Other Details</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-comment"></i></span>
                            <textarea id="basic-icon-default-message" class="form-control"
                                placeholder="Other Details"
                              ></textarea>
                        </div>
                    </div> -->
                    <?php if (isset($validation)): ?>
                                <div class="col-12">
                                  <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                  </div>
                                </div>
                    <?php endif; ?>
                    <?php if (isset($allowed)): ?>
                                <div class="col-12">
                                  <div class="alert alert-danger" role="alert">
                                    <?= $allowed; ?>
                                  </div>
                                </div>
                              <?php endif; ?>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>


    </div>
    <!-- / Content -->



    <?=  $this->endSection()?>
    <?= $this->section('scripts')?>
    <script type="text/javascript">
  $(window).on('beforeunload', function(){
var c=confirm();
if(c){
  return true;
}
else
return false;
});
</script>
<?=  $this->endSection()?>
