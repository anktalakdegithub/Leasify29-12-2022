<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-6">
                <h4 class="fw-bold py-3 mb-4">Corporate</h4>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row d-none">
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
                <div class="table-responsive text-nowrap bg-white " id="exportdata">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Phone Number</td>
                                <td>Email</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php 
                       $i=1;
                            foreach($customerlist as $nb){
                            ?>
                            <tr>
                                <td><?=$i++;?></td>
                                <td><?=$nb['firstname'];?> <?=$nb['lastname'];?>

                                </td>
                                <td><?=$nb['mobile_number'];?></td>
                                <td><?=$nb['emailid'];?></td>
                                <td>
                                 <?php if($nb['is_verify']==1){?>
                                    <span class="badge bg-label-success me-1">Verified</span>
                                <?php }else{?>
                                    <span class="badge bg-label-danger me-1">Verification Pending</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <!-- <div class="col-2 text-center"> -->

                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="edit_cust?id=<?=$nb['id']?>"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#basicModal_<?=$nb['id']?>"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                           <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#kycModal_<?=$nb['id']?>"><i
                                                    class="bx bx-file me-1"></i>KYC Details</a>
                                           <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#investorModal_<?=$nb['id']?>"><i
                                                    class="bx bx-circle me-1"></i>Status</a>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </td>


                            </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="table-responsive text-nowrap bg-white" id="invoice"></div>
                <div class="mt-3">
                    <?php echo $pager->links();?>
                </div>
            </div>
        </div>
        <?php
                        foreach($customerlist as $nb){
                        ?>
        <!-- Modal -->
        <div class="modal fade" id="basicModal_<?=$nb['id']?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Are You Sure ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            No
                        </button>
                        <button type="button" class="btn btn-primary delete_nbfc"
                            value="<?=$nb['user_id'];?>">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="investorModal_<?=$nb['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Status </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <input type="hidden" value="<?=$nb['id']?>" name="user_id" id="flexCheckDefault">

                            <div class="form-check">
                                <input class="form-check-input erified_<?=$nb['id']?>" type="checkbox" name="Verified" id="Verified"
                                    <?php if($nb['is_verify']==1){echo 'checked';}?>>
                                <label class="form-check-label" for="Verified">
                                    Is Verified
                                </label>
                            </div>
                            <div id="msgs"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" value="<?=$nb['id']?>" class="btn btn-primary isverified">Save
                                changes</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="modal fade" id="kycModal_<?=$nb['id']?>" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">KYC Details</h5>
        <hr>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           <div class="row">
              
                <div class="col-md-12">
                    <label class="form-check-label fw-bold mt-1" for="Verified">Name</label>
                    <p><?=$nb['firstname']?> <?=$nb['lastname']?></p>
                </div>
                <hr>
                <div class="col-md-6">
                    <label class="form-check-label fw-bold mt-1" for="Verified">Mobile Number</label>
                    <p><?=$nb['mobile_number']?></p>
               </div>
              
                <div class="col-md-6">
                        <label class="form-check-label fw-bold mt-1" for="Verified">Email Id</label>
                        <p><?=$nb['emailid']?></p>
                </div>
                <hr>
                <div class="col-md-6">
                        <label class="form-check-label fw-bold mt-1" for="Verified">Aadhaar Name</label>
                        <p> <?=$nb['aadhaarname']?></p>
                        
                </div>
                <div class="col-md-6">
                        <label class="form-check-label fw-bold mt-1" for="Verified">Aadhaar Address</label>
                        <p> <?=$nb['aadhaaraddress']?></p>
                </div>
                <hr>
                <div class="col-md-6">
                        <label class="form-check-label fw-bold mt-1" for="Verified">Account Number</label>
                        <p> <?=$nb['accountnum']?></p>
                        
                </div>
                <div class="col-md-6">
                        <label class="form-check-label fw-bold mt-1" for="Verified">IFSC Code</label>
                        <p> <?=$nb['ifsccode']?></p>
                </div>
                <hr>
                <div class="col-md-12">
                    <label class="form-check-label fw-bold mt-1" for="Verified">PAN Photo</label>
                       <div class="row">
                        <div class="col-3">
                        <img class="" src="<?=base_url();?>/<?=$nb['panphoto']?>" width="100px" height="100px" alt="PAN Photo" >
                        </div>
                        <div class="col-9">
                        <a href="<?= base_url()?>/<?=$nb['panphoto']; ?>"
                                 class="text-success" download><i class='bx bx-cloud-download'></i> 
                                 <small class="downloadfiles">Download File</small></a>
                        </div>
                       </div>
                       
                </div>
                <hr>
               
                <div class="col-md-6">
                    <label class="form-check-label fw-bold mt-1" for="Verified">Aadhar Frontside Photo</label>
                       <div class="row">
                        <div class="col-3">
                        <img class="" src="<?=base_url();?><?=$nb['aadhaarfront']?>" width="100px" height="100px" alt="Aadhar Frontside Photo" >
                        </div>
                        <div class="col-9">
                        <a href="<?= base_url()?><?=$nb['aadhaarfront']; ?>"
                                 class="text-success" download><i class='bx bx-cloud-download'></i> 
                                 <small class="downloadfiles">Download File</small></a>
                        </div>
                       </div>
                       
                </div>
                <div class="col-md-6">
                    <label class="form-check-label fw-bold mt-1" for="Verified">Aadhar Backside Photo</label>
                       <div class="row">
                        <div class="col-3">
                        <img class="" src="<?=base_url();?><?=$nb['aadhaarback']?>" width="100px" height="100px" alt="Aadhar Backside Photo" >
                        </div>
                        <div class="col-9">
                        <a href="<?= base_url()?><?=$nb['aadhaarback']; ?>"
                                 class="text-success" download><i class='bx bx-cloud-download'></i> 
                                 <small class="downloadfiles">Download File</small></a>
                        </div>
                       </div>
                       
                </div>
           </div>
      </div>
    
    </div>
  </div>
</div>
        <!--  -->
        <?php
                        }
                        ?>




    </div>
    <!-- / Content -->


    <?=  $this->endSection()?>

    <?= $this->section('scripts')?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>
    <script>
    $('body').on('click', '.delete_nbfc', function() {


        var id = $(this).val();
        var is_delete= 1;

        $.ajax({

            url: "<?php echo base_url('delete_cust');?>",

            data: {
                id: id,
                is_delete: is_delete
            },

            type: "post",

            success: function(response) {
                // alert(response);
                window.location.href = "<?php echo base_url('admin/customer');?>";

            }

        });
    });
    </script>
     <script>
    $(document).ready(function() {
        $('.search_order_data').on('click', function(e) {

            $.ajax({

                url: '<?=base_url();?>/admin/searchcust',
                data: {
                    'fromdate': $('#fromDate').val(),
                    'todate': $('#toDate').val(),
                    'search': $('#search').val(),

                },
                type: 'post',
                success: function(response) {
                    document.getElementById("exportdata").style.display = "none";
                    $('#invoice').html(response);
                    //  document.getElementById("invoice").style.display = "block";

                }
            })
        });
    });
    </script>
    <script>
        
        
        $(document).ready(function() {
            $('.isverified').on('click', function(e) {
                
                $isverifyid = $(this).val();
                inputs = $('.erified_'+$isverifyid);
        inputs.each(function() {
           $value = $(this).val();	
            if( $( this ).attr( 'type' ) === 'checkbox' ) {
                $value = +$(this).is( ':checked' );
            }
           
        });	
              
               $.ajax({
    
                    url: '<?=base_url();?>/admin/isverified',
                    data: {
                        'verified': $value,
                        'isverifyid': $isverifyid
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