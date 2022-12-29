<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h2 class="fw-bold py-3 mb-4 text-center text-dark">Past Deals</h2>




        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive text-nowrap bg-white mb-4">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <td>RFQ Number</td>
                                <td>Title</td>
                                <td>Quote Value</td>
                                <td>Delivered By</td>
                                <td>Files</td>
                                <td>Status</td>
                                <!-- <td>Action</td> -->
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php if(is_array($all_nbfc) && count($all_nbfc) > 0){ $i=1; foreach($all_nbfc as $nbfc){
                                ?>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?= $nbfc['proposal_title']; ?></td>
                                <td><?= $nbfc['proposal_bid']; ?></td>
                                <td><?= $nbfc['proposal_date']; ?></td>
                                <td> <a href="<?= base_url().$nbfc['proposalfiles']; ?>" class="text-success" download>
                                        <i class='bx bx-cloud-download'></i></a></td>
                                <td>
                                        <?php 
                                            if($nbfc['status']==0){?>
                                            <span class="badge bg-label-danger me-1">Pending</span>
                                            <?php }elseif($nbfc['status']==2){?>
                                                <span class="badge bg-label-danger me-1">Rejected</span>
                                           <?php } ?>
                                </td>
                                <!-- <td>
                                    <i class="bx bx-trash me-1" data-bs-toggle="modal"
                                        data-bs-target="#default_<?=$nbfc['proposal_id'];?>"></i>
                                </td> -->
                                <!--Basic Modal -->
                                <div class="modal fade text-left" id="default_<?=$nbfc['proposal_id'];?>" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <h3 class="text-center">
                                                    Are You Sure
                                                </h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">

                                                    <span class="d-none d-sm-block">No</span>
                                                </button>
                                                <button type="button" value="<?=$nbfc['proposalbid_id'];?>"
                                                    class="deletebtn btn btn-primary ml-1">

                                                    <span class="d-none d-sm-block">Yes</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <?php }}else{ ?>
                        <tr class="text-center">
                          <td colspan="6">
                        <p class="text-center">No Data Found</p>
                        </td>
                        </tr>
                       <?php } ?>
                         

                        </tbody>
                    </table>
                </div>
                <?php echo $pager->links();?>
            </div>
        </div>


    </div>
    <!-- / Content -->


    <?=  $this->endSection()?>
    <?= $this->section('scripts')?>

    <script>
    $('.extra-fields-customer').click(function() {
        $('.customer_records').clone().appendTo('.customer_records_dynamic');
        $('.customer_records_dynamic .customer_records').addClass('single remove');
        $('.single .extra-fields-customer').remove();
        $('.single').append(
            '<a href="#" class="remove-field btn-remove-customer btn btn-danger my-2"><i class="bx bx-minus"></i> </a>'
            );
        $('.customer_records_dynamic > .single').attr("class", "remove");

        $('.customer_records_dynamic input').each(function() {
            var count = 0;
            var fieldname = $(this).attr("name");
            $(this).attr('name', fieldname + count);
            count++;
        });

    });

    $(document).on('click', '.remove-field', function(e) {
        $(this).parent('.remove').remove();
        e.preventDefault();
    });
    </script>


    <script>
    $('body').on('click', '.deletebtn', function() {
        //debugger

        var proposalbid_id = $(this).val();
        alert(proposalbid_id);
        $.ajax({

            url: '<?=base_url();?>/nbfc/deleteproposal',
            data: {
                'proposalbid_id': proposalbid_id
            },
            type: 'post',
            success: function(response) {
                // alert();
                location.reload();
            }
        })
    })
    </script>
    <?=  $this->endSection()?>