@extends('pelanggan.layout.index')

@section('content')

    <div id="HomeCarouselPromo" class="carousel slide mt-5" data-bs-ride="carousel"">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="{{asset('assets/images/promo.jpg')}}" class="d-block w-100" alt="promo" style="height: 250px">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('assets/images/promo.jpg')}}" class="d-block w-100" alt="promo" style="height: 250px">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('assets/images/promo.jpg')}}" class="d-block w-100" alt="promo" style="height: 250px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#HomeCarouselPromo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#HomeCarouselPromo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    

    <h4 class="mt-5">Best Seller</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5">
        <div class="card" style="width: 180px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 25.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row mb-md-5">
        <div class="col-md-12">
            <div class="d-flex" style="width: 100%; height: 50vh; border-radius: 10px; background-color: rgb(221, 221, 221) ">
                <div class="col-md-3 offset-md-1 m-2 d-flex align-items-center justify-content-center" style="background-color: rgb(249, 248, 248); border-radius: 10px;">
                    <img src="{{asset('assets/images/produk-beras.png')}}" alt="Deskripsi gambar" style="height: 100%; border-radius: 10px;">
                </div>
                <div class="col-md-8 d-flex flex-column align-items-start justify-content-center" style="margin-left: 12px">
                    <h5 class="mt-2">Beras Organik Kepala Super 2KG</h5>
                    <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sint perferendis dignissimos doloremque ex soluta beatae temporibus placeat eveniet autem dolorum laborum, in molestiae modi, voluptatem ipsam corrupti tempore cupiditate. Molestias cupiditate, minus nihil, voluptates maxime reiciendis suscipit magnam aliquam laudantium, nostrum fugiat eligendi perferendis itaque praesentium velit vero ea adipisci asperiores in! Facere officia accusamus similique a, quae ad molestias harum illum laboriosam eaque, provident amet ipsam odio, earum sapiente magnam aspernatur totam distinctio nemo in repellendus? Molestias, autem? Tenetur incidunt a voluptate dignissimos exercitationem ad, officiis voluptas sequi nostrum? Ipsa itaque iusto quas facere dicta at ex ratione?</p>    
                </div>
            </div>
        </div>
    </div>

    <h4 class="mt-5">New Products</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-3">
        <div class="card" style="width: 180px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 25.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-3">
        <div class="card" style="width: 180px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 25.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-3">
        <div class="card" style="width: 180px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 25.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header" style="border-radius: 5px">
                <img src="{{asset('assets/images/produk-beras.png')}}" alt="baju 1" style="width: 100%">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Beras Organik Kepala Super 2KG</p>
                <p class="m-0">
                    <i class="fa-regular fa-star"> 5+</i>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center ">
                <p class="m-0" style="font-size: 16px font-weight:600;">Rp 20.000</p>
                <button class="btn btn-outline-primary" style="font-size: 12px">
                    <i class="fa-solid fa-cart-plus fa-2x"></i>
                </button>
            </div>
        </div>
    </div>
    
    
@endsection