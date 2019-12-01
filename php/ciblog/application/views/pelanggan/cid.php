
<section class="mbr-section form3 cid-rHxd4pu94R" id="form3-y">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2" style="padding-top:60px">
                    Check ID</h2>
                <h3 class="mbr-section-subtitle align-center pb-3 mbr-light mbr-fonts-style display-5"></h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                                    <?php
                                    if ($this->session->flashdata('salah')) {
                                        $flash = $this->session->flashdata('salah');
                                        ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $flash ?>
                                        </div>
                                    <?php } ?>
                    <div class="dragArea row">
                        <form class="form-inline" action="<?php echo base_url() ?>cid/hasil/" method="post" >
                          <div class="form-group mx-sm-3">
                            <input type="token" class="form-control" id="token" name="token" placeholder="Masukan Token" size="30" required="">
                          </div>
                          <button type="submit" class="btn btn-primary mb-2">Check ID</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>