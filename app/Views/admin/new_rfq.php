<?= $this->extend('home/headers')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">RFQ</h4>




        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create New RFQ</h5>

            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Title</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control" id="rfqtitle" placeholder="Enter Title"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Subject</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control" id="rfqsub" placeholder="Enter Subject"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Expiry Date</label>
                        <div class="input-group input-group-merge">
                            <input type="date" id="expirydate" class="form-control" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Upload File</label>
                        <div class="input-group input-group-merge">
                            <input type="file" id="rfquploadfile" class="form-control" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-message">Additional Details</label>
                        <div class="input-group input-group-merge">
                            <textarea class="form-control" id="additionaldetails"
                                placeholder="Enter Subject"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5>Requirement</h5>

                    </div>
                    <div class="row">
                        <div class="col-12 text-end"><span class="btn btn-primary addbtn my-1">+
                                Add</span>
                        </div>
                        <div class="col-12">

                            <div class="row my-1 addcontent">
                                <div class="col-8">
                                    <label class="form-label" for="basic-icon-default-message">Description</label>
                                    <input type="text" class="form-control description" id="description"
                                        placeholder="Enter Description" aria-label="Description" />
                                </div>
                                <div class="col-2">
                                    <label class="form-label" for="basic-icon-default-message">Cost</label>
                                    <input type="text" class="form-control cost" id="cost" placeholder="Enter Cost"
                                        min="1" />
                                </div>
                                <div class="col-2">
                                    <label class="form-label" for="basic-icon-default-message">Quantity</label>
                                    <input type="number" class="form-control quantity" id="quantity" min="1"
                                        placeholder="Quantity" />
                                </div>

                            </div>



                        </div>

                    </div>
                    <!-- <input type="text" id="fcost" class="form-control fcost"/> -->
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-message">Total Cost</label>
                        <div class="input-group input-group-merge">
                     
                            
                            <input type="text" id="totalcost" class="form-control totalcost" value="" placeholder="Total Cost" />
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mt-3 addrfq">Submit</button>
                </form>
                <div id="msg"></div>
            </div>
        </div>


    </div>
    <!-- / Content -->



    <?=  $this->endSection()?>

    <?= $this->section('scripts')?>
    <script>
//         $(document).on("change", ".quantity", function() {
//     var mul = 0;
//     $(".quantity").each(function(){
//         mul =+$('.quantity').val()*$('.cost').val();
//         // sum += $('.cost').val();
//     });
//     $(".cost").val(mul);
// });
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
    <script>
//         $('.quantity, .cost').on('keyup', function() { 
//             var v=$('.cost').val();
//             alert(v);
//         const quantity = $(this).closest('div').find('.quantity').first().val();
//         const rate = $(this).closest('div').find('.cost').first().val();
//         // Assign the total to the total
//        var demoo=$(this).closest('div').find('.cost').first().val(parseFloat(quantity) * parseFloat(rate));
//     //    alert(demoo);
// });
    </script>
    
    <script>
    $(document).ready(function() {

        $(".addbtn").click(function() {
          
            $(".addcontent").append(
                '<div class="row my-2"><div class=col-8><label class=form-label for=basic-icon-default-message>Description</label><input class="form-control description" id=description placeholder="Enter Description"aria-label=Description></div><div class=col-2><label class=form-label for=basic-icon-default-message>Cost</label><input class="form-control cost" id=cost placeholder="Enter Cost" min=1></div><div class=col-2><label class=form-label for=basic-icon-default-message>Quantity</label><input class="form-control quantity" id=quantity placeholder=Quantity min=1 type=number></div><a href="javascript:void(0);" class="text-danger mt-3 delete">-Delete</a></div>'
            );
        });

        $(document).on("click", "a.delete", function() {
            $(this).parent().remove();
            calculate();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $(document).on('click', '.addrfq', function() {
            $('.addrfq').text('Please Wait..').prop('disabled', true);
            var descriptions = [];
            var costs = [];
            var quantites = [];
            var sum_value=0;
            var i=1;
            var c=1;
            var q=1;
        $('.description').each(function(){
            descriptions.push($(this).val());
           
          
            i++;
        })
        $('.cost').each(function(){
        
            costs.push($(this).val());
        
          
            c++;
        })
        $('.quantity').each(function(){
        //   alert('q');
            quantites.push($(this).val());
          
            q++;
        })
            var formData = new FormData();
            formData.append('rfqtitle', $('#rfqtitle').val());
            formData.append('rfqsub', $('#rfqsub').val());
            formData.append('expirydate', $('#expirydate').val());
            formData.append('additionaldetails', $('#additionaldetails').val());
            formData.append('description', JSON.stringify(descriptions));
            formData.append('cost', JSON.stringify(costs));
            formData.append('quantity', JSON.stringify(quantites));
            formData.append('totalcost', $('#totalcost').val());
            formData.append('rfquploadfile', $('#rfquploadfile').get(0).files[0]);
         

            $.ajax({
                method: "POST",
                url: '<?=base_url();?>/customer/addrfq',
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
                        
                        $('.addrfq').text('Submit').prop('disabled', false);
                    } else {
                        $('#msg').html('<div class="alert alert-success" role="alert">' + reponse.msg + '</div>');
                        $('.addrfq').text('Submit').prop('disabled', false);
                        window.location.href = "<?= base_url()?>/customer/rfq";
                        // alert("success");

                    }


                }
            });
        });
    });
    </script>
    <?=  $this->endSection()?>