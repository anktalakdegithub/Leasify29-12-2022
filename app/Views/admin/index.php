<?= $this->extend('admin/header_candidate')?>
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
                <h5 class="py-3 ">All Notifications</h5>
                <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home"
                                aria-selected="true">
                                <i class="tf-icons bx bx-home"></i> Unread
                                <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">3</span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-justified-profile"
                                aria-controls="navs-pills-justified-profile" aria-selected="false">
                                <i class="tf-icons bx bx-user"></i> Read
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-justified-messages"
                                aria-controls="navs-pills-justified-messages" aria-selected="false">
                                <i class="tf-icons bx bx-message-square"></i> Request
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                            <ul>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
                        <ul>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
                        <ul>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                              <li>Lorem ipsum dolor sit amet consectetur.</li>
                            </ul>
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