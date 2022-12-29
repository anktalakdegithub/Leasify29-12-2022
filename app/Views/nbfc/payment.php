<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Payment</h4>




        <div class="row">
              <div class="col-md-12">
                <div class="table-responsive text-nowrap bg-white">
                  <table class="table table-hover">
                    <thead class="table-dark">
                      <tr>
                        <td>ID</td>
                        <td>Date</td>
                        <td>Vendor</td>
                        <td>Project</td>
                        <td>Amount</td>
                        <td>Status</td>
                        <!-- <th>Action</th> -->
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php if(is_array($payment) && count($payment) > 0){            
                      $i = 1;
                      foreach($payment as $pay){ ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?=$pay->pay_date?></td>
                        <td><?=$pay->firstname?><?=$pay->lastname?></td>
                        <td><?=$pay->proposal_title?></td>
                       <td><i class='bx bx-rupee' ></i> <?=$pay->amount?></td>
                       <td>
                        <?php if($pay->status==1){?>
                        <span class="badge bg-label-success me-1">Completed</span>
                        <?php }else{ ?>
                      
                        <span class="badge bg-label-danger me-1">Pending</span>
                        <?php } ?>
                      </td>
                        

                      </tr>
                      <?php }}
                        else{
                            // echo 'No Data Found';?>
                          <tr>
                            <td colspan="6">
                            <div class="row">
                            <div class="col-md-12 text-center">
                            <h4 class="text-center">No Data Found</h4>
                            </div>
                            </div>
                            </td>
                            </tr>
                        <?php }
                        ?> 
                    
                    

                    </tbody>
                  </table>
                </div>
               
              </div>
            </div>


    </div>
    <!-- / Content -->


    <?=  $this->endSection()?>

