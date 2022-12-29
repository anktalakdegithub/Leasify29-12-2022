<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Investor Detail Page</h4>


        <div class="row">
            <div class="col-md-12">

                <h5>Lorem ipsum dolor sit amet.</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore tenetur praesentium odio minus autem
                    incidunt. Quo quos veritatis soluta recusandae!</p>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive text-nowrap bg-white">
                                    <table class="table">
                                        <thead class="table-light">
                                            <tr>
                                                <td>ID</td>
                                                <th>Item</th>
                                                <th>Qunatity</th>


                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                                <td>001</td>
                                                <td>item</td>
                                                <td>11</td>
                                            </tr>
                                            <tr>
                                                <td>002</td>
                                                <td>item</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>003</td>
                                                <td>item</td>
                                                <td>4</td>
                                            </tr>
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>View Documents:</h5>
                                <button type="button" class="w-100 my-2 btn btn-outline-success">
                                    <span class="tf-icons bx bx-cloud-download"></span>&nbsp; Download
                                </button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exLargeModal"
                                    class="w-100 my-2 btn btn-outline-danger">

                                    <span class="tf-icons bx bxs-file-doc"></span>&nbsp; View Documents
                                </button>
                                <!-- Extra Large Modal -->
                                <div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel4">View Documents</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                <object data="../assets/pdf/TATA-COMMUNICATIONS-INTERNET-LEASED-LINE-SERVICE-TARIF-.pdf" height="500px" type="application/pdf">
        <div>No online PDF viewer installed</div>
    </object>
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
    <!-- / Content -->

    <?=  $this->endSection()?>