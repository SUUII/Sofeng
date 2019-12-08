<section class="engine"><a href="https://mobirise.info/m">free web design templates</a></section><section class="mbr-section form1 cid-rHabkEQmas" id="form1-8">
    <div class="container">
		<br><div class="row justify-content-center">
            <div class="title col-12 col-lg-5">
				<img src="<?php echo base_url(); ?>assets/images/regist.png" alt="Mobirise" title="" style="height: 6.0rem;">
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-8">isilah dengan data asli!</h3>
            </div>
        </div>
    </div>
<form action="<?php echo base_url() ?>registrasi/add" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="nama" class="col-sm-2 col-form-label"><h6>Nama</h6></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="nama" name='nama' value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="alamat" class="col-sm-2 col-form-label"><h6>Alamat</h6></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="alamat" name='alamat'value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="telp" class="col-sm-2 col-form-label"><h6>Nomer Telepon</h6></label>
                <div class="col-sm-10">
                    <input type="number" class="form-control-plaintext" id="telp" name='telp' value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="email" class="col-sm-2 col-form-label"><h6>Email</h6></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="email" name='email' value="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="hutang" class="col-sm-2 col-form-label"><h6>Jumlah Pinjaman</h6></label>
                <div class="col-sm-10">
                    <input type="number" class="form-control-plaintext" id="hutang" name='hutang' value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black; border-radius: 100px">
                <label for="lama" class="col-sm-2 col-form-label"><h6>Lama Meminjam</h6></label>
                <div class="col-sm-10">
                    <input type="number" class="form-control-plaintext" id="lama" name='lama' value="" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black">
                <label for="deskripsi" class="col-sm-2 col-form-label"><h6>Deskripsi</h6></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="deskripsi" name='deskripsi' rows="3"></textarea>
                </div>
            </div>
            <p style="font-size: 18px">Tolong gunakan foto dengan ekstensi jpg</p>
            <div class="form-group row" style="border:1px solid black">
			 <label for="deskripsi" class="col-sm-2 col-form-label"><h6>Foto Diri</h6></label>
                <div class="col-sm-10">
					<input type="file" class="form-control" id="gambardiri" name="gambardiri" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black">
			<label for="deskripsi" class="col-sm-2 col-form-label"><h6>KTP</h6></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambarktp" name="gambarktp" required>
                </div>
            </div>
            <div class="form-group row" style="border:1px solid black">
			<label for="deskripsi" class="col-sm-2 col-form-label"><h6>Slip Gaji</h6></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambarslip" name="gambarslip" required>
                </div>
            </div>
			<div class="form-group row" style="border:1px solid black">
			<label for="deskripsi" class="col-sm-2 col-form-label"><h6>KK</h6></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambarkk" name="gambarkk" required>
                </div>
            </div>
			<div class="form-group row" style="border:1px solid black">
			<label for="deskripsi" class="col-sm-2 col-form-label"><h6>Foto Jaminan</h6></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambarjaminan" name="gambarjaminan" required>
                </div>
            </div>
              <br>
			  <div class="row justify-content-md-center">
                <button type="submit" class="btn btn-primary mb-5" style="width: 20%">Submit</button>
			  </div>
			</div>
        </div>

    </form>
</section>