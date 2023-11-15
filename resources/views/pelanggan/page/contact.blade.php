@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, quis culpa impedit nisi eveniet nobis excepturi. Modi consequatur obcaecati, repellat illo necessitatibus in sit eligendi facilis quas labore nobis repudiandae ipsa, quisquam quasi recusandae nihil. Nesciunt molestiae debitis quasi! Harum hic perspiciatis obcaecati consectetur repudiandae ullam sunt iure adipisci tenetur quas nesciunt cum, laborum similique nemo nisi praesentium libero corrupti ipsam dicta provident voluptate doloremque voluptas magni error. Impedit voluptate assumenda unde fuga temporibus harum, maiores esse nam repellendus labore est tenetur molestias. Et ea placeat architecto saepe maiores possimus tempore, repudiandae cum esse minus dolorum ullam, debitis perferendis. Excepturi iste consequatur saepe vero dignissimos! Mollitia neque asperiores velit quibusdam cupiditate minus eligendi autem tempora vitae incidunt. Cumque, fuga omnis.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/images/toko.png')}}" style="width: 100%" alt="toko">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5">100++ Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-burger fa-2x"></i> 
            <p class="m-0 fs-5">300++ Produk</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-money-check-dollar fa-2x"></i> 
            <p class="m-0 fs-5">1000++ Transaksi</p>
        </div>   
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5">
    <div class="row mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px">

            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik dan Saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Masukkan kritik dan saran Anda untuk kenyamanan dan agar kami dapat berkembang lebih baik</p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" value="" placeholder="Masukkan email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="pesan" placeholder="Masukkan pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-2 w-100">Kirim</button>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            
        </div>
        
    </div>
@endsection