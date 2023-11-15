<!-- Modal Login Pelanggan-->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Registrasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label">Name <span style="color: red">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" value="" placeholder="Masukkan nama Anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email <span style="color: red">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" value="" placeholder="Masukkan email Anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-3 col-form-label">Password <span style="color: red">*</span></label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password" value="" placeholder="Masukkan password Anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label">Address 1 <span style="color: red">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="" placeholder="Masukkan alamat Anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label">Address 2</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat2" value="" placeholder="Masukkan alamat Anda">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tlp" class="col-sm-3 col-form-label">Phone Number <span style="color: red">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tlp" name="tlp" value="" placeholder="Masukkan nomor telepon Anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="date" class="col-sm-3 col-form-label">Date of Birth <span style="color: red">*</span></label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="date" name="date" value="" placeholder="Masukkan tanggal lahir Anda" required>
                    </div>
                </div>
                <button type="button" class="btn btn-success col-sm-12 mb-3">Daftar</button>
                <button type="button" class="btn btn-danger col-sm-12" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>