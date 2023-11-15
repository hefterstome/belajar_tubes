@extends('pelanggan.layout.index')

<style>
    input[type="number"]:::-webkit-inner-spin-button,
    input[type="number"]:::-webkit-outer-spin-button{
        -webkit-appearance: none;
        margin: 0;
    }
</style>

@section('content')
    <h3 class="mt-5">Keranjang Belanja</h3>
    <div class="card mb-3">
        <div class="card-body d-flex gap-4">
            <img src="{{asset('assets/images/produk-beras.png')}}" alt="" style="height: 200px; align-self: center;">
            <div class="desc w-100">
                <p style="font-size: 24px; font-weight: 700;">Beras Organik Kepala Super 2KG</p>
                <div class="input-group mb-2">
                    <span class="input-group-text bg-transparent border-0 fs-3">Rp </span>
                    <input type="number" class="form-control border-0 fs-3" id="harga" value="20000">
                </div>
                <div class="row mb-2">
                    <label for="qty" class="col-sm-2 col-form-label fs-5">Quantity</label>
                    <div class="col-sm-5 d-flex">
                        <button class="rounded-start bg-secondary p-2 border border-0" id="plus">+</button>
                        <input type="number" name="qty" class="form-control w-25 text-center" id="qty" min="0" max="9999" value="1">
                        <button class="rounded-end bg-secondary p-2 border border-0" id="minus" disabled>-</button>
                    </div>
                </div>
                <div class="row">
                    <label for="price" class="col-sm-2 col-form-label fs-5">Total</label>
                    <div class="col-sm-4 d-flex">
                        <span class="input-group-text bg-transparent border-0 fs-5">Rp </span>
                        <input type="text" class="form-control w-75 border-0 fs-5 bg-transparent" readonly id="total" value="">
                    </div>
                </div>
                <div class="row w-50 gap-2">
                    <a href="/checkout" class="btn btn-success col-sm-4">
                        <i class="fa fa-shopping-cart"></i> Checkout
                    </a href="/checkout">
                    <button class="btn btn-danger col-sm-4">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection