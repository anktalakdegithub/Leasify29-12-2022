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
                <h5 class="mb-0">Create New Project</h5>

            </div>
            <div class="card-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Title</label>
                        <div class="input-group input-group-merge">
                           
                            <input type="text" id="proposaltitle" class="form-control" placeholder="Enter Title" aria-label="Title" />
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">XIRR</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" class="form-control" id="proposaltrr"
                                        placeholder="XIRR"  />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Tenure(In Month)</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" class="form-control" id="tenure"
                                        placeholder="Tenure" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Minimum Investment</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" class="form-control" id="miniinvestment"
                                        placeholder="Minimum Investment" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Requirement Amount</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" class="form-control" id="requirementamount"
                                        placeholder="Requirement Amount" />
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

                                    <select class="choices form-select multiple-remove" id="proposaltags"
                                        multiple="multiple">
                                        <option value="1" selected>One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>

                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-company">Select Sector</label>
                                    <select class="choices form-select multiple-remove" id="proposalsector"
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

                                        <input type="date" id="proposaldate" class="form-control" placeholder="ACME Inc." />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-message">Other Details</label>
                                    <div class="input-group input-group-merge">

                                        <textarea id="otherdetails" class="form-control"
                                            placeholder="Other Details"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="customer_records">
                                        <div class="row">
                                            <div class="col-12 text-end">
                                                <span class="btn btn-primary addbtn my-1">+ Add</span>
                                            </div>
                                        </div>
                                        <div class="row my-1 addcontent">
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="basic-icon-default-message">Title</label>
                                                <input type="text" class="form-control proposaltagtitle" id="proposaltagtitle"
                                                    placeholder="Title" aria-label="Title"/>
                                            </div>

                                            <div class="col-12">
                                                <div class="">
                                                    <label class="form-label"
                                                        for="basic-icon-default-fullname">Description</label>

                                                    <textarea class="form-control default proposaldes" id="proposaldes_1" name="" cols="30"
                                                        rows="5"></textarea>


                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="customer_records_dynamic"></div>

                                </div>


                                <button type="button" class="btn btn-primary mt-3 createproject">Submit</button>
                                <p id="msg"></p>
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
            '<div class="my-1 row"><div class="col-12 mb-3"><label class=form-label for=basic-icon-default-message>Title</label><input aria-describedby=basic-icon-default-fullname2 aria-label=Title class="form-control proposaltagtitle" id="proposaltagtitle" placeholder=Title></div><div class=col-12><div><label class=form-label for=basic-icon-default-fullname>Description</label><textarea class="form-control default proposaldes" cols=30 id="proposaldes_'+i+'" name=""rows=5></textarea></div></div><a href="javascript:void(0);" class="text-danger delete">-Delete</a></div>'
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

    $(".addimgbtn").click(function() {

        $(".addimg").append(
            '<div class="my-1 row"><div class="col-12 mb-2"><label class=form-label for=basic-icon-default-company>Upload Documents</label><div class="input-group input-group-merge"><input class=form-control id="proposaldoc" multiple type=file></div></div><a href="javascript:void(0);" class="text-danger delete">-Delete</a></div>'
        );
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
            var proposaldes=tinyMCE.editors[$('.proposaldes').attr('id')].getContent();
        $('.proposaltagtitle').each(function(){
            proposal_title.push($(this).val());
           
          
            i++;
        })
        j=1;
        $(".proposaldes").each(function(){
            pid=this.id;
            proposal_des.push(tinyMCE.editors[$('#'+pid).attr('id')].getContent());
           
          
            d++;
            j++;
        })
            var formData = new FormData();
            formData.append('proposaltitle', $('#proposaltitle').val());
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
            formData.append("customer_id", '<?=$_GET['customer_id'];?>');
            formData.append("rfq_id", '<?=$_GET['rfq_id'];?>');
            // formData.append('description', JSON.stringify(descriptions));
        
            // formData.append('totalcost', $('#totalcost').val());
         

            $.ajax({
                method: "POST",
                url: '<?=base_url();?>/admin/createproject',
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
                        $('#msg').html('<div class="alert alert-Success" role="alert">' + reponse.msg + '</div>');
                        $('.createproject').text('Submit').prop('disabled', false);
                        window.location.href = "<?=base_url();?>/admin/rfq";
                        // alert("success");

                    }


                }
            });
        });
    });
    </script>

<?=  $this->endSection()?>