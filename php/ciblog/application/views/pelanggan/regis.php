<section class="engine"><a href="https://mobirise.info/m">free web design templates</a></section><section class="mbr-section form1 cid-rHabkEQmas" id="form1-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Register Form</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">ISILAH DENGAN DATA ASLI</h3>
            </div>
        </div>
    </div>
<form action="<?php echo base_url() ?>registrasi/add" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="nama" name='nama' value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="alamat" name='alamat'value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="telp" class="col-sm-2 col-form-label">Nomer Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control-plaintext" id="telp" name='telp' value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="email" name='email' value="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="hutang" class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control-plaintext" id="hutang" name='hutang' value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="lama" class="col-sm-2 col-form-label">Lama Meminjam</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control-plaintext" id="lama" name='lama' value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="deskripsi" name='deskripsi' rows="3"></textarea>
                </div>
            </div>
                <div class="row">
                    <div class="card-box">
                        Foto Diri
                        <input type="file" class="form-control" id="gambardiri" name="gambardiri" required>
                    </div>
                </div>
                <div class="row">
                    <div class="card-box">
                        KTP
                        <input type="file" class="form-control" id="gambarktp" name="gambarktp" required>
                    </div>
                </div>
                <div class="row">
                    <div class="card-box">
                        Slip Gaji
                        <input type="file" class="form-control" id="gambarslip" name="gambarslip" required>
                    </div>
                </div>
                <div class="row">
                    <div class="card-box">
                        KK
                        <input type="file" class="form-control" id="gambarkk" name="gambarkk" required>
                    </div>
                </div>
                <div class="row">
                    <div class="card-box">
                        Jaminan
                        <input type="file" class="form-control" id="gambarjaminan" name="gambarjaminan" required>
                    </div>
                </div>
              
                <button type="submit" class="" style="width: 100%">Submit</button>
            </div>
        </div>

    </form>
</section>