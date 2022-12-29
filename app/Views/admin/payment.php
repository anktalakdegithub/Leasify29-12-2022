<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-5">
                <h4 class="fw-bold py-3 mb-4">Payment</h4>
            </div>
            <div class="col-md-7 text-end">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6 px-1">
                                <input type="text" name="fromdate" class="form-control" placeholder="From Date"
                                    id="fromDate">
                            </div>
                            <div class="col-md-6 px-1">
                                <input type="text" name="todate" class="form-control" placeholder="To Date" id="toDate">
                            </div>

                        </div>

                    </div>
                    <div class="col-md-5 px-1">
                        <div class="row">
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="search" placeholder="Search..."
                                    aria-label="Search..." aria-describedby="basic-addon-search31" />

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-start">
                        <button class="search_order_data btn btn-primary" type="button" name="button"><i
                                class="bx bx-search"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive text-nowrap bg-white" id="exportdata">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <td>#</td>
                                <td>Proposal</td>
                                <td>Customer</td>
                                <td>Investor</td>
                                <td>Amount</td>
                                <td>Payment Date</td>
                                <td>Status</td>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                      $i = 1;
                      if(is_array($payment) && count($payment) > 0){
                      foreach($payment as $pay){
                        ?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><?=$pay['proposal_title']?></td>
                                <td><?=$pay['firstname']?><?=$pay['lastname']?></td>
                                <td><?=$pay['firstname']?><?=$pay['lastname']?></td>
                                <td><i class='bx bx-rupee'></i> <?=$pay['amount']?></td>
                                <td> <?=$pay['pay_date']?></td>
                                <td><span class="badge bg-label-danger me-1">Pending</span></td>
                                <!-- <td>
                            <i class="bx bx-edit-alt me-1"></i>
                            <i class="bx bx-trash me-1"></i>
                          </td> -->

                            </tr>
                            <?php
                      }}else{ ?>
                        <tr class="text-center">
                          <td colspan="7">
                        <p class="text-center">No Data Found</p>
                        </td>
                        </tr>
                       <?php } ?>




                        </tbody>
                    </table>
                </div>
                <div class="table-responsive text-nowrap bg-white" id="invoice"></div>
                <div class="mt-3">
                    <?php echo $pager->links();?>
                </div>
            </div>
        </div>


    </div>
    <!-- / Content -->


    <?=  $this->endSection()?>
    <?= $this->section('scripts')?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>
 
    <script>
    $(document).ready(function() {
        $("#fromDate").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
        }).on('changeDate', function(selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#toDate').datepicker('setStartDate', minDate);
        });

        $("#toDate").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
        }).on('changeDate', function(selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#fromDate').datepicker('setEndDate', minDate);
        });
    });
    </script> 
    <script>
             $(document).ready(function() {
        $('.search_order_data').on('click', function(e) {

            $.ajax({

                url: '<?=base_url();?>/admin/searchpayment',
                data: {
                     'fromdate': $('#fromDate').val(),
                     'todate': $('#toDate').val(),
                    'search': $('#search').val()

                },
                type: 'post',
                success: function(response) {
                  
                     document.getElementById("exportdata").style.display = "none";
                      //  alert();
                    $('#invoice').html(response);
                      // alert();
                 
                }
            })
        });
    });
    </script>
    <?=  $this->endSection()?>