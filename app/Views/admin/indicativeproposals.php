<?= $this->extend('admin/header_candidate')?>
<?= $this->section('content')?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Quote</h4>




        <div class="row">
              <div class="col-md-12">
                <div class="table-responsive text-nowrap bg-white">
                  <table class="table table-hover">
                    <thead class="table-dark">
                      <tr>
                        <td>RFQ Number</td>
                        <td>Title</td>
                        <td>Quote Value</td>
                        <td>Delivered By</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1</td>
                        <td>Albert Cook</td>
                        <td>Website</td>
                        <td>20/30/2022</td>
                        <td>
                          <i class="bx bx-trash me-1"></i>
                        </td>

                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Albert Cook</td>
                        <td>Website</td>
                        <td>20/30/2022</td>
                        <td>
                          <i class="bx bx-trash me-1"></i>
                        </td>

                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Albert Cook</td>
                        <td>Website</td>
                        <td>20/30/2022</td>
                        <td>
                          <i class="bx bx-trash me-1"></i>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                </div>
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
        $('.single').append('<a href="#" class="remove-field btn-remove-customer btn btn-danger my-2"><i class="bx bx-minus"></i> </a>');
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
     <?=  $this->endSection()?>