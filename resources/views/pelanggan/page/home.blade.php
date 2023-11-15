@extends('pelanggan.layout.index')

@section('content')
    <h4 class="mt-5">Best Seller</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5">
        <div class="card" style="width: 220px">
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
        <div class="card" style="width: 220px">
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
        <div class="card" style="width: 220px">
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
        <div class="card" style="width: 220px">
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