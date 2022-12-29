<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-5">
                <h4 class="fw-bold py-3 mb-4">Withdraw Money</h4>
            </div>
            <div class="col-md-7 text-end">
                <!-- <div class="row">
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
                </div> -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive text-nowrap bg-white" id="exportdata">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <td>#</td>
                                <td>Customer</td>
                                <td>Amount</td>
                                <td>Payment Date</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                      $i = 1;
                      if(is_array($withdrawpayment) && count($withdrawpayment) > 0){
                      foreach($withdrawpayment as $pay){
                        ?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><?=$pay['firstname']?><?=$pay['lastname']?></td>
                                <td><i class='bx bx-rupee'></i> <?=$pay['Amount']?></td>
                                <td> <?=$pay['pay_date']?></td>
                                <td>
                                    <?php if($pay['is_money']==0){?>
                                    <span class="badge bg-label-danger me-1">Pending</span>
                                    <?php }else{?>
                                    <span class="badge bg-label-success me-1">Completed</span>
                                    <?php } ?>
                                </td>
                                <td>

                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal_<?=$pay['uwallet_id']?>">
                                            Status
                                        </button>
                                        
                        <div class="modal fade" id="exampleModal_<?=$pay['uwallet_id']?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Status </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <input type="hidden" value="<?=$pay['user_id']?>" name="user_id" id="flexCheckDefault">
                                         
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="paid"
                                                    id="paid" <?php if($pay['is_money']==1){echo 'checked';}?>>
                                                <label class="form-check-label" for="paid">
                                                    Paid
                                                </label>
                                            </div>
                                     <div id="msgs"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" value="<?=$pay['uwallet_id']?>" class="btn btn-primary ismoneyadded">Save changes</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                          </td>

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
        $('.ismoneyadded').on('click', function(e) {
            $uwallet= $(this).val();
            $.ajax({

                url: '<?=base_url();?>/admin/ismoneyadded',
                data: {
                    'paid': $('#paid').val(),
                    'uwallet': $uwallet
                },
                type: 'post',
                success: function(response) {
                    location.reload(true); 
                 
                }
            })
        });
    });
    </script>
    <?=  $this->endSection()?>