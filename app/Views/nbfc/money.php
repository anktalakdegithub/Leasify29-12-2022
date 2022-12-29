
<?= $this->extend('nbfc/headers')?>
<?= $this->section('content')?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-2 mb-2">My Vault</h4>
        <!-- <p class="fw-bold py-3 mb-4">Listing All The Orders</p> -->
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 text-end">
                <!-- <a href="new_rfq.php" class="btn btn-primary my-3 text-white"> Create RFQ</a> -->
            </div>
        </div>


        <div class="row">
    <center>
        <img src="<?=base_url();?>/public/assets/img/qr-codes.png" alt="">
    </center>

        </div>
    </div>
    <!-- / Content -->

    <?=  $this->endSection()?>
