<?= $this->extend('home/headers')?>
<?= $this->section('content')?>


<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex align-items-end row">
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Payment Schedule </h5>
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Amount</th>
                                                    <th>Client Name</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                   <td><i class='bx bx-rupee' ></i> 100</td>
                                                    <td>Albert Cook</td>
                                                   
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex align-items-end row">
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Active Orders </h5>
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Amount</th>
                                                    <th>Client</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>1</td>
                                                   <td><i class='bx bx-rupee' ></i> 100</td>
                                                    <td>Albert Cook</td>
                                                   
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?=base_url();?>/public/assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>

                                </div>
                                <span class="d-block mb-1">Active</span>
                                <h3 class="card-title text-nowrap mb-2"><i class='bx bx-rupee' ></i> 2,456</h3>
                                <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title text-primary">Requirement Details </h5>
              <div class="table-responsive text-nowrap bg-white">
                  <table class="table table-hover">
                    <thead class="table-dark">
                      <tr>
                        <td>Bid</td>
                        <td>Title</td>
                        <td>Quote Value</td>
                        <td>Delivered By</td>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1</td>
                        <td>Albert Cook</td>
                        <td>Website</td>
                        <td>20/30/2022</td>
                      
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Albert Cook</td>
                        <td>Website</td>
                        <td>20/30/2022</td>
                      
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Albert Cook</td>
                        <td>Website</td>
                        <td>20/30/2022</td>
                      
                      </tr>

                    </tbody>
                  </table>
                </div>
         
              </div>
            </div>
          </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?=base_url();?>/public/assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>

                                </div>
                                <span class="d-block mb-1">This Month</span>
                                <h3 class="card-title text-nowrap mb-2"><i class='bx bx-rupee' ></i> 2,456</h3>
                                <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?=base_url();?>/public/assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>

                                </div>
                                <span class="fw-semibold d-block mb-1">Last Month</span>
                                <h3 class="card-title mb-2"><i class='bx bx-rupee' ></i> 14,857</h3>
                                <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->
    <?=  $this->endSection()?>