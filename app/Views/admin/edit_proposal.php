<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <h4 class="fw-bold py-3 mb-4">Proposals</h4> -->
        <h4 class="fw-bold py-3 mb-4">Proposals</h4>




        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Proposals</h5>

            </div>
            <div class="card-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Title</label>
                        <div class="input-group input-group-merge">
                           
                            <input type="text" id="proposaltitle" class="form-control" placeholder="Enter Title" aria-label="Title" value="<?=$proposal->proposal_title?>"/>
                            <input type="hidden" id="proposalid"  value="<?=$proposal->proposal_id?>"/>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Pre-Tax XIRR</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" class="form-control" id="proposaltrr"
                                        placeholder="Pre-Tax IRR" value="<?=$proposal->pre_tax?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Tenure(In Month)</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" class="form-control" id="tenure"
                                        placeholder="Tenure" value="<?=$proposal->tenure?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Minimum Investment</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" class="form-control" id="miniinvestment"
                                        placeholder="Minimum Investment" value="<?=$proposal->min_investment?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Requirement Amount</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" class="form-control" id="requirementamount"
                                        placeholder="Requirement Amount" value="<?=$proposal->requirementamount?>"/>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <!-- <label class="form-label" for="basic-icon-default-fullname">Subject</label> -->
                        <!-- <div class="full-editor">

                        </div> -->


                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Upload lOGO</label>
                        <div class="input-group input-group-merge">
                        <img class="" src="<?=base_url();?>/<?=$proposal->proposal_logo?>" width="100px" height="100px" alt="logo" >
                            <input class="form-control" type="file" id="proposallogo" multiple />

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="customer_recordss">
                                <div class="row my-1">
                                    <div class="col-12 mb-3">
                                        <label class="form-label" for="basic-icon-default-company">Upload Image</label>
                                        
                                        <div class="input-group input-group-merge">
                                            <img class="" src="<?=base_url();?>/<?=$proposal->proposal_images?>" width="100px" height="100px"  alt="" >
                                            <input class="form-control" type="file" id="proposalimg"  />

                                        </div>
                                        <div class="customer_recordss mt-2">
                                            <!-- <div class="row">
                                                <div class="col-12 text-end">
                                                    <span class="btn btn-primary addimgbtn my-3">+ Add</span>
                                                </div>
                                            </div> -->
                                            <div class="row my-1 addimg ">
                                                <div class="col-12 mb-1">
                                                    <label class="form-label" for="basic-icon-default-company">Upload
                                                        Documents</label>
                                                        
                                                        <div class="input-group input-group-merge">
                                                        <img class="" src="<?=base_url();?>/<?=$proposal->proposal_documents?>" width="100px" height="100px" alt="" >
                                                        <input class="form-control" type="file" id="proposaldoc"  />

                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="customer_records_dynamics"></div>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-company">Select Tags</label>

                                    <select class="choices form-select multiple-remove" id="proposaltags" value="<?=$proposal->proposal_tag?>"
                                        multiple="multiple">
                                        <option value="1" selected>One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>

                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-company">Select Sector</label>
                                    <select class="choices form-select multiple-remove" id="proposalsector" value="<?=$proposal->proposal_slector?>"
                                        multiple="multiple">
                                        <option value="Subject 1">Subject 1</option>
                                        <option value="Subject 2">Subject 2</option>
                                        <option value="Subject 3">Subject 3</option>
                                        <option value="Subject 4">Subject 4</option>

                                    </select>

                                 
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-company">Date</label>
                                    <div class="input-group input-group-merge">

                                        <input type="date" id="proposaldate" class="form-control" placeholder="ACME Inc." value="<?=$proposal->proposal_date?>" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-message">Other Details</label>
                                    <div class="input-group input-group-merge">

                                        <textarea id="otherdetails" class="form-control"
                                            placeholder="Other Details"><?=$proposal->proposal_details?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="customer_records">
                                       <div class="row">
                                            <div class="col-12 text-end">
                                                <span class="btn btn-primary addbtn my-1">+ Add</span>
                                            </div>
                                        </div>
                                        <div class="addcontent">
<?php
$i=1;
foreach($details as $detail){
    ?>
    
    <div class="row my-1 ">
        <div class="col-12 mb-3">
            <label class="form-label" for="basic-icon-default-message">Title</label>
            <input type="text" class="form-control proposaltagtitle" id="proposaltagtitle"
                placeholder="Title" aria-label="Title"  data-id="<?=$i;?>" value="<?=$detail->proposal_tag_title;?>"/>
        </div>

        <div class="col-12">
            <div class="">
                <label class="form-label"
                    for="basic-icon-default-fullname">Description</label>

                <textarea class="form-control default proposaldes" id="proposaldes_<?=$i;?>" data-id="<?=$i;?>" name="" cols="30"
                    rows="5"><?=$detail->proposal_tags_description;?></textarea>


            </div>
        </div>
<a href="javascript:void(0);" class="text-danger delete">-Delete</a>
    </div>
    <?php
    $i++;
}
?>
                                       


                                    </div>
                                    </div>

                                    <div class="customer_records_dynamic"></div>

                                </div>

                                <div id="msg"></div>
                                <button type="button" class="btn btn-primary mt-3 createproject">Submit</button>
                </form>
            </div>
        </div>


    </div>
    <!-- / Content -->

</div>
</div>

<?=  $this->endSection()?>

<?= $this->section('scripts')?>
<script>
$(document).ready(function() {

    $(".addbtn").click(function() {
        i = $('.proposaldes').length+1;
        count=0;
        while($('#proposaldes_'+i).length>0){
            i=i+1;
        }
        $(".addcontent").append(
            '<div class="my-1 row"><div class="col-12 mb-3"><label class=form-label for=basic-icon-default-message>Title</label><input aria-describedby=basic-icon-default-fullname2 aria-label=Title class="form-control proposaltagtitle"  data-id="'+i+'" id="proposaltagtitle" placeholder=Title></div><div class=col-12><div><label class=form-label for=basic-icon-default-fullname>Description</label><textarea class="form-control default proposaldes" cols=30 id="proposaldes_'+i+'" data-id="'+i+'" name=""rows=5></textarea></div></div><a href="javascript:void(0);" class="text-danger delete">-Delete</a></div>'
        );
        tinymce.remove();
        tinymce.init({selector : '.default'});
    });
     
    $(document).on("click", "a.delete", function() {
        $(this).parent().remove();
    });
});
</script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.createproject', function() {
            $('.createproject').text('Please Wait..').prop('disabled', true);
            var proposal_title = [];
            var proposal_des = [];
        
            var i=1;
            var d=1;
            // var proposaldes=tinyMCE.editors[$('.proposaldes').attr('id')].getContent();
        $('.proposaltagtitle').each(function(){
            proposal_title.push($(this).val());
           
          
            i++;
        })
        j=1;
        $(".proposaldes").each(function(){
            pid=this.id;
            pid = $(this).attr('data-id');
            proposal_des.push(tinyMCE.editors[$('#proposaldes_'+pid).attr('id')].getContent());
           
          
            d++;
            j++;
        })
            var formData = new FormData();
            formData.append('proposaltitle', $('#proposaltitle').val());
            formData.append('proposalid', $('#proposalid').val());
            formData.append('proposaltrr', $('#proposaltrr').val());
            formData.append('tenure', $('#tenure').val());
            formData.append('miniinvestment', $('#miniinvestment').val());
            formData.append('requirementamount', $('#requirementamount').val());
            formData.append('proposallogo', $('#proposallogo').get(0).files[0]);
            formData.append('proposalimg', $('#proposalimg').get(0).files[0]);
            formData.append('proposaldoc', $('#proposaldoc').get(0).files[0]);
            formData.append('proposaltags', $('#proposaltags').val());
            formData.append('proposalsector', $('#proposalsector').val());
            formData.append('proposaldate', $('#proposaldate').val());
            formData.append('otherdetails', $('#otherdetails').val());
            formData.append('proposaltagtitle',JSON.stringify(proposal_title));
            formData.append('proposaldes', JSON.stringify(proposal_des));
                       formData.append('customer_id', '<?=$proposal->customer_id;?>');
            // formData.append('description', JSON.stringify(descriptions));
        
            // formData.append('totalcost', $('#totalcost').val());
         

            $.ajax({
                method: "POST",
                url: '<?=base_url();?>/admin/updateproject',
                data: formData,
                headers: {
                    'IsAjax': 'true'
                },
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(reponse) {
                    // alert()
                    if (reponse.code == "404") {
                        $('#msg').html('<div class="alert alert-danger" role="alert">' + reponse.msg + '</div>');
                        $('.createproject').text('Submit').prop('disabled', false);

                    } else {
                        $('#msg').html('<div class="alert alert-success" role="alert">' + reponse.msg + '</div>');
                        $('.createproject').text('Submit').prop('disabled', false);
                        // alert("success");
                        window.location.href = "<?= base_url()?>/admin/indicativeproposal";

                    }


                }
            });
        });
    });
    </script>
<!-- <script type="text/javascript">
  $(window).on('beforeunload', function(){
var c=confirm();
if(c){
  return true;
}
else
return false;
});
</script> -->
<?=  $this->endSection()?>
