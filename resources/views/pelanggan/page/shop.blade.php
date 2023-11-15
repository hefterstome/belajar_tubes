@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card" style="width: 16rem;">
                <div class="card-header">
                  Category
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Kebutuhan Rumah Tangga
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="d-flex flex-column gap-2">
                                    <a href="#" class="page-link"><i class="fa fa-plus"></i> Beras</a>
                                    <a href="#" class="page-link"><i class="fa fa-plus"></i> Sabun</a>
                                    <a href="#" class="page-link"><i class="fa fa-plus"></i> Susu Anak</a>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              Makanan
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="d-flex flex-column gap-2">
                                    <a href="#" class="page-link"><i class="fa fa-plus"></i> Snack</a>
                                    <a href="#" class="page-link"><i class="fa fa-plus"></i> Roti</a>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              Minuman
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="d-flex flex-column gap-2">
                                    <a href="#" class="page-link"><i class="fa fa-plus"></i> Es Krim</a>
                                    <a href="#" class="page-link"><i class="fa fa-plus"></i> Teh</a>
                                    <a href="#" class="page-link"><i class="fa fa-plus"></i> Susu</a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 d-flex flex-wrap gap-4 mb-4">
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
                    <p class="m-0" style="font-size: 16px font-weight:200;">Rp 25.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 12px">
                        <i class="fa-solid fa-cart-plus fa-2x"></i>
                    </button>
                </div>
            </div>
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
                    <p class="m-0" style="font-size: 16px font-weight:200;">Rp 25.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 12px">
                        <i class="fa-solid fa-cart-plus fa-2x"></i>
                    </button>
                </div>
            </div>
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
                    <p class="m-0" style="font-size: 16px font-weight:200;">Rp 25.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 12px">
                        <i class="fa-solid fa-cart-plus fa-2x"></i>
                    </button>
                </div>
            </div>
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
                    <p class="m-0" style="font-size: 16px font-weight:200;">Rp 25.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 12px">
                        <i class="fa-solid fa-cart-plus fa-2x"></i>
                    </button>
                </div>
            </div>
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
                    <p class="m-0" style="font-size: 16px font-weight:200;">Rp 25.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 12px">
                        <i class="fa-solid fa-cart-plus fa-2x"></i>
                    </button>
                </div>
            </div>
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
                    <p class="m-0" style="font-size: 16px font-weight:200;">Rp 25.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 12px">
                        <i class="fa-solid fa-cart-plus fa-2x"></i>
                    </button>
                </div>
            </div>
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
                    <p class="m-0" style="font-size: 16px font-weight:200;">Rp 25.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 12px">
                        <i class="fa-solid fa-cart-plus fa-2x"></i>
                    </button>
                </div>
            </div>
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
                    <p class="m-0" style="font-size: 16px font-weight:200;">Rp 25.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 12px">
                        <i class="fa-solid fa-cart-plus fa-2x"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection