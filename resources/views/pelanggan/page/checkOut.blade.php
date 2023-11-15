@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-5">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-3">Masukkan Alamat Penerima</h3>
                    <div class="row mb-3">
                        <label for="nama_penerima" class="col-form-label col-sm-3">Nama Penerima</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_penerima" name="namaPenerima" placeholder="Masukkan Nama Penerima" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat_penerima" class="col-form-label col-sm-3">Alamat Penerima</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control col-sm-9" id="alamat_penerima" name="alamatPenerima" placeholder="Masukkan Alamat Penerima">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tlp" class="col-form-label col-sm-3">Nomor Telepon Penerima</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control col-sm-9" id="tlp" name="tlp" placeholder="Masukkan Nomor Telepon Penerima">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ekspedisi" class="col-form-label col-sm-3">Ekspedisi</label>
                        <div class="col-sm-9">
                            <select name="ekspedisi" class="form-control" id="ekspedisi">
                                <option value="">--- Pilih Ekspedisi --</option>
                                <option value="jnt">JNT Express</option>
                                <option value="jne">JNE Express</option>
                                <option value="sicepat">Si Cepat Express</option>
                                <option value="ninja">Ninja Express</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header p-3 text-center">
                    <h3>Total Belanja</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="totalBelanja" class="col-form-label col-sm-5">Total Belanja</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="totalBelanja" name="totalBelanja" value="100000">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="diskon" class="col-form-label col-sm-5">Diskon</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="diskon" name="diskon" value="0">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ongkir" class="col-form-label col-sm-5">Ongkir</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="ongkir" name="ongkir" value="8000">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="PPn" class="col-form-label col-sm-5">PPn (11%)</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="PPn" name="PPn" value="11880">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label for="dibayarkan" class="col-form-label col-sm-5">Total Bayar</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="dibayarkan" name="dibayarkan" value="118800">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="diterima" class="col-form-label col-sm-5">Uang diterima</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="diterima" name="diterima" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dikembalikan" class="col-form-label col-sm-5">Kembalian</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="dikembalikan" name="dikembalikan" value="" readonly>
                        </div>
                    </div>
                    <button class="btn-success w-100 border-0" style="border-radius: 5px">
                        <i class="fa fa-print"></i> Print Struk
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection