<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">RFQ</h4>




        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit RFQ</h5>

            </div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url('admin/update_rfq')?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Title</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
<?php if($rfq->rfqtitlte!=''){?>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="John Doe" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2" name="rfqtitlte" value="<?=$rfq->rfqtitlte?>"/>
                                       
<?php }else{?>
    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="John Doe" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2" name="rfqtitlte" value="<?=$rfq->rfqtitlte?>"/>
         <br>                           
    <!-- <p class="text-danger">Please Enter Value </p> -->
    <?php }?>    <input type="hidden" name="rfq_id" value="<?=$rfq->rfq_id?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Subject</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="John Doe" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2" name="subject" value="<?=$rfq->subject?>"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Date</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-buildings"></i></span>
                            <input type="date" id="basic-icon-default-company" class="form-control"
                                placeholder="ACME Inc." aria-label="ACME Inc."
                                aria-describedby="basic-icon-default-company2" name="expiry_date" value="<?=$rfq->expiry_date?>"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-message">Other Details</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-comment"></i></span>
                            <textarea id="basic-icon-default-message" class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"  name="additional_details"><?=$rfq->additional_details?></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                      <h5>Requirement</h5>

                    </div>
                    <div class="row">
                       
                    <div class="col-2 mt-4">
                                  
                                  <a class="extra-fields-customer btn btn-success" href="#">
                                   
                                      <i class="bx bx-plus"></i>
                                  
                                  </a>
                              </div>
                        <div class="customer_records">
                            <?php
                            foreach($rfq_requirment as $rfqr){
                            ?>
                            <div class="row">
                                <div class="col-md-7">
                                <label class="form-label" for="basic-icon-default-message">Description</label>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="John Doe" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2" name="requiremnet_details[]" value="<?=$rfqr->requiremnet_details?>"/>
                                </div>
                                <div class="col-md-2">
                                <label class="form-label" for="basic-icon-default-message">Cost</label>
                                    <input type="number" class="form-control cost" id="basic-icon-default-fullname"
                                        min="1" aria-describedby="basic-icon-default-fullname2" name="cost[]" value="<?=$rfqr->cost?>" />
                                </div>
                                <div class="col-md-2">
                                <label class="form-label" for="basic-icon-default-message">Quantity</label>
                                    <input type="number" class="form-control quantity" id="basic-icon-default-fullname"
                                        min="1" aria-describedby="basic-icon-default-fullname2" name="quantity[]" value="<?=$rfqr->quantity?>" />
                                </div>
                               
                                <a href="javascript:void(0);" class="text-danger mt-2 delete">-Delete</a>
                             
                                </div>
                            <?php
                            }
                            ?>
                            </div>
                            <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-message">Total Cost</label>
                        <div class="input-group input-group-merge">
                     
                            
                            <input type="text" id="totalcost" name="totalcost" class="form-control totalcost" value="<?=$rfq->total_cost?>" placeholder="Total Cost" />
                        </div>
                    </div>

                        </div>
                       
                        

                        <div class="customer_records_dynamic"></div>

                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Send</button>
                </form>
            </div>
        </div>


    </div>
    <!-- / Content -->


    <?=  $this->endSection()?>
    <?= $this->section('scripts')?>
    <script>
    $('.extra-fields-customer').click(function() {
        $('.customer_records').append('<div class="row"><div class="col-md-7"><label class="form-label" for="basic-icon-default-message">Description</label>    <input type="text" class="form-control" id="basic-icon-default-fullname"        placeholder="John Doe" aria-label="John Doe"        aria-describedby="basic-icon-default-fullname2" name="requiremnet_details[]" value=""/></div><div class="col-md-2"><label class="form-label" for="basic-icon-default-message">Cost</label>    <input type="number" class="form-control cost" id="basic-icon-default-fullname"        min="1" aria-describedby="basic-icon-default-fullname2" name="cost[]" value="" /></div><div class="col-md-2"><label class="form-label" for="basic-icon-default-message">Quantity</label>    <input type="number" class="form-control quantity" id="basic-icon-default-fullname"        min="1" aria-describedby="basic-icon-default-fullname2" name="quantity[]" value="" /></div><a href="javascript:void(0);" class="text-danger mt-2 delete">-Delete</a></div>');
        $('.customer_records_dynamic .customer_records').addClass('single remove');
        $('.single .extra-fields-customer').remove();
        $('.single').append('<a href="#" class="remove-field btn-remove-customer btn btn-danger my-2"><i class="bx bx-minus"></i> </a>');
        $('.customer_records_dynamic > .single').attr("class", "remove");

        $('.customer_records_dynamic input').each(function() {
            var count = 0;
            var fieldname = $(this).attr("name");
            $(this).attr('name', fieldname + count);
            count++;
        });

    });
    $(document).on("click", "a.delete", function() {
        $(this).parent().remove();
    });
    $(document).on('click', '.remove-field', function(e) {
        $(this).parent('.remove').remove();
        e.preventDefault();
    });
    $(document).on("input", ".cost, .quantity", function() {
  calculate();
});   
function calculate(){
    totalcost=0;
    c=0;
    $('.cost').each(function(){
        
        totalcost=totalcost+(parseInt($(this).val())*parseInt($('.quantity').eq(c).val()));
        c++;
    })
    $('.totalcost').val(totalcost);
}
    </script>
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