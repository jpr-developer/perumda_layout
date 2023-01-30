@extends('layout.general')

@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{asset('assets/plugin/leaflet.css')}}">
@endsection

@section('content')
<div class="col-12 mb-4">
    <div class="row row-cards">
        <div class="col-sm-6 col-lg-3">
            <div class="card card-sm shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-blue text-white avatar rounded-circle"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path d="M12 3v3m0 12v3"></path></svg>
                            </span>
                        </div>
                        <div class="col">
                            <div class="">
                               <span class="fs-2 fw-bold">Rp. 2.5 M</span>
                            </div>
                            <div class="text-muted">
                                Total Pendapatan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card card-sm shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-dribbble text-white avatar rounded-circle"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-laptop" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="3" y1="19" x2="21" y2="19"></line>
                                    <rect x="5" y="6" width="14" height="10" rx="1"></rect>
                                 </svg>
                            </span>
                        </div>
                        <div class="col">
                            <div class="">
                                <span class="fs-2 fw-bold">2000</span>
                            </div>
                            <div class="text-muted">
                                Total Penjualan Produk
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card card-sm shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-info text-white avatar rounded-circle"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash-banknote" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <rect x="3" y="6" width="18" height="12" rx="2"></rect>
                                    <line x1="18" y1="12" x2="18.01" y2="12"></line>
                                    <line x1="6" y1="12" x2="6.01" y2="12"></line>
                                 </svg>
                            </span>
                        </div>
                        <div class="col">
                            <div class="">
                                <span class="fs-2 fw-bold">Rp. 2.6 M</span>
                            </div>
                            <div class="text-muted">
                                Target Pendapatan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card card-sm shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-warning text-white avatar rounded-circle"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-pie" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a0.9 .9 0 0 0 -1 -.8"></path>
                                    <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5"></path>
                                 </svg>
                            </span>
                        </div>
                        <div class="col">
                            <div class="">
                                <span class="fs-2 fw-bold">3000</span>
                            </div>
                            <div class="text-muted">
                                Target Penjualan Produk
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Maps -->
<div class="col-md-12 mb-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="ratio ratio-16x9">
                <div class="mt-3 ms-3" style="position: absolute;" id="filter_map--dashboard">
                    <div class="row">
                        <div class="col-md-4" style="z-index:999;">
                            <form action="" class="mb-2">
                                <div class="input-icon">
                                    <input type="text" value="" class="form-control" placeholder="Search…">
                                    <span class="input-icon-addon">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                                    </span>
                                </div>
                            </form>
                            <div class="card">
                                <div class="card-body">
                                    <span class="fs-4 fw-bold">ROJOKU STORE</span>
                                    <table class="table table-borderless">
                                        <tr>
                                            <td class="p-0">Total Rojoku Store</td>
                                            <td class="p-0">100 Toko</td>
                                        </tr>
                                        <tr>
                                            <td class="p-0">Kecamatan Kedung</td>
                                            <td class="p-0">65 Toko</td>
                                        </tr>
                                        <tr>
                                            <td class="p-0">Kecamatan Welahan</td>
                                            <td class="p-0">35 Toko</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="z-index:999;">
                            <form action="" class="mb-2">
                                <button href="#" class="btn btn-success w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="3" y1="21" x2="21" y2="21"></line>
                                        <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
                                        <line x1="5" y1="21" x2="5" y2="10.85"></line>
                                        <line x1="19" y1="21" x2="19" y2="10.85"></line>
                                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
                                    </svg>
                                    Rojoku Store
                                </button>
                            </form>
                            <div class="card mb-1">
                                <form action="" class="p-2">
                                    <label class="form-label">Kecamatan</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">Kedung</option>
                                    </select>
                                </form>
                            </div>
                            <div class="card mb-1">
                                <form action="" class="p-2">
                                    <label class="form-label">Desa / Kelurahan</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">Bugel</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3" style="z-index:999;">
                            <form action="">
                                <button href="#" class="btn btn-light w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="18" y1="6" x2="18" y2="6.01"></line>
                                        <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5"></path>
                                        <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15"></polyline>
                                        <line x1="9" y1="4" x2="9" y2="17"></line>
                                        <line x1="15" y1="15" x2="15" y2="20"></line>
                                    </svg>
                                    Rojoku Mart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="map" class="w-100 h-100"></div>
            </div>
        </div>
    </div>
</div>
<!-- Maps End -->

<!-- Chart Weekly Sales -->
<div class="col-md-8 mb-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h1 class="card-title">Weekly Sales</h1>
        </div>
        <div class="card-body">
            <div id="chart-line-stroke"></div>
        </div>
    </div>
</div>
<div class="col-md-4 mb-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h1 class="card-title">Produk Teratas</h1>
        </div>
        <div class="list-group list-group-flush overflow-auto scrollbar-green" style="max-height: 25rem">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="me-3">
                        <img class="rounded-2 shadow-sm" src="{{asset('assets/images/kopi_rojoku.png')}}" alt="" width="100" height="100">
                    </div>
                    <div class="">
                        <h3>Kopi Rojoku Pouds Aneka Usaha Jepara</h3>
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <span class="text-decoration-underline" style="color: rgb(253, 118, 39)">5.0</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="border-start border-secondary">
                                <div class="ps-3">
                                    <span class="text-decoration-underline fw-bold">50RB</span> Terjual
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and ...
                                <a href="">selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="me-3">
                        <img class="rounded-2 shadow-sm" src="{{asset('assets/images/kopi_rojoku.png')}}" alt="" width="100" height="100">
                    </div>
                    <div class="">
                        <h3>Kopi Rojoku Pouds Aneka Usaha Jepara</h3>
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <span class="text-decoration-underline" style="color: rgb(253, 118, 39)">5.0</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="border-start border-secondary">
                                <div class="ps-3">
                                    <span class="text-decoration-underline fw-bold">50RB</span> Terjual
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and ...
                                <a href="">selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="me-3">
                        <img class="rounded-2 shadow-sm" src="{{asset('assets/images/kopi_rojoku.png')}}" alt="" width="100" height="100">
                    </div>
                    <div class="">
                        <h3>Kopi Rojoku Pouds Aneka Usaha Jepara</h3>
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <span class="text-decoration-underline" style="color: rgb(253, 118, 39)">5.0</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="border-start border-secondary">
                                <div class="ps-3">
                                    <span class="text-decoration-underline fw-bold">50RB</span> Terjual
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and ...
                                <a href="">selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="me-3">
                        <img class="rounded-2 shadow-sm" src="{{asset('assets/images/kopi_rojoku.png')}}" alt="" width="100" height="100">
                    </div>
                    <div class="">
                        <h3>Kopi Rojoku Pouds Aneka Usaha Jepara</h3>
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <span class="text-decoration-underline" style="color: rgb(253, 118, 39)">5.0</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="border-start border-secondary">
                                <div class="ps-3">
                                    <span class="text-decoration-underline fw-bold">50RB</span> Terjual
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and ...
                                <a href="">selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="me-3">
                        <img class="rounded-2 shadow-sm" src="{{asset('assets/images/kopi_rojoku.png')}}" alt="" width="100" height="100">
                    </div>
                    <div class="">
                        <h3>Kopi Rojoku Pouds Aneka Usaha Jepara</h3>
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <span class="text-decoration-underline" style="color: rgb(253, 118, 39)">5.0</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(253, 118, 39)" fill="rgb(253, 118, 39)" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="border-start border-secondary">
                                <div class="ps-3">
                                    <span class="text-decoration-underline fw-bold">50RB</span> Terjual
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and ...
                                <a href="">selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Chart Weekly Sales End -->

<!-- Card -->
<div class="col-md-4 mb-4">
    <div class="card">
        <div class="card-header bg-danger">
            <h3 class="card-title">SARAN DAN MASUKAN</h3>
        </div>
        <div class="list-group list-group-flush overflow-auto scrollbar-red" style="max-height: 35rem">
            <div class="list-group-item">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(236, 236, 236) ;">
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-danger">Kopi Rojoku</span>
                        </div>
                        <div class="mb-1">
                            <span>Kamis, 23 April 2022</span>
                        </div>
                        <div class="mb-3">
                            <span class="fs-4 fw-bold">Pak Yasin - Toko Jaya Makmur</span>
                        </div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ...
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(236, 236, 236) ;">
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-danger">Kopi Rojoku</span>
                        </div>
                        <div class="mb-1">
                            <span>Kamis, 23 April 2022</span>
                        </div>
                        <div class="mb-3">
                            <span class="fs-4 fw-bold">Pak Yasin - Toko Jaya Makmur</span>
                        </div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ...
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(236, 236, 236) ;">
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-danger">Kopi Rojoku</span>
                        </div>
                        <div class="mb-1">
                            <span>Kamis, 23 April 2022</span>
                        </div>
                        <div class="mb-3">
                            <span class="fs-4 fw-bold">Pak Yasin - Toko Jaya Makmur</span>
                        </div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ...
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 mb-4">
    <div class="card">
        <div class="card-header bg-info">
            <h3 class="card-title">KOMPLAIN</h3>
        </div>
        <div class="list-group list-group-flush overflow-auto scrollbar-blue" style="max-height: 35rem">
            <div class="list-group-item">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(236, 236, 236);">
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-info">Kopi Rojoku</span>
                        </div>
                        <div class="mb-1">
                            <span>Kamis, 23 April 2022</span>
                        </div>
                        <div class="mb-3">
                            <span class="fs-4 fw-bold">Pak Yasin - Toko Jaya Makmur</span>
                        </div>
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-info">Komplain</span> <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ...
                            <a href="">Read More</a>
                        </div>
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-info">Penyelesaian</span> <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ...
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(236, 236, 236) ;">
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-info">Kopi Rojoku</span>
                        </div>
                        <div class="mb-1">
                            <span>Kamis, 23 April 2022</span>
                        </div>
                        <div class="mb-3">
                            <span class="fs-4 fw-bold">Pak Yasin - Toko Jaya Makmur</span>
                        </div>
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-info">Komplain</span> <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ...
                            <a href="">Read More</a>
                        </div>
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-info">Penyelesaian</span> <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ...
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="card">
                    <div class="card-body" style="background-color:rgb(226, 226, 226) ;">
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-info">Kopi Rojoku</span>
                        </div>
                        <div class="mb-1">
                            <span>Kamis, 23 April 2022</span>
                        </div>
                        <div class="mb-3">
                            <span class="fs-4 fw-bold">Pak Yasin - Toko Jaya Makmur</span>
                        </div>
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-info">Komplain</span> <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ...
                            <a href="">Read More</a>
                        </div>
                        <div class="mb-1">
                            <span class="fs-3 fw-bold text-info">Penyelesaian</span> <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ...
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 mb-4">
    <div class="card">
        <div class="card-header bg-success">
            <h3 class="card-title">JADWAL PENGIRIMAN</h3>
        </div>
        <div class="list-group list-group-flush overflow-auto scrollbar-green" style="max-height: 35rem">
            <div class="list-group-item">
                <div class="card mb-2">
                    <div class="card-body" style="background-color:rgb(236, 236, 236) ;">
                        <div class="">
                            <span class="fs-3 fw-bold text-success">KAMIS, 23 APRIL 2022</span>
                        </div>
                        <div class="">
                            <span class="fw-bold">Jadwal pengiriman</span>
                        </div>
                    </div>
                </div>
                <div class="card mb-1">
                    <div class="card-body" style="background-color: #fddbc4 ;">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bold">Pak Yasin - Toko jaya Makmur</td>
                                <td class="fw-bold">DO.231234.98</td>
                            </tr>
                            <tr>
                                <td colspan="2">Jl.A Yani no.23 Komplek ruko-Kedung-Bogel-Jepara</td>
                            </tr>
                            <tr>
                                <td>Rojoku Mineral 330</td>
                                <td>20 DUS</td>
                            </tr>
                            <tr>
                                <td>Rojoku Kopi Pouch</td>
                                <td>5 DUS</td>
                            </tr>
                            <tr>
                                <td>Minyak Goreng Resto</td>
                                <td>100 DUS</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Petugas - Arga</span> <br>
                                    <span class="fs-4 fw-bold text-danger">BELUM TERKIRIM</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card mb-1">
                    <div class="card-body" style="background-color: #c7fcd0 ;">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bold">Pak Jhony - Toko Mandiri</td>
                                <td class="fw-bold">DO.231234.99</td>
                            </tr>
                            <tr>
                                <td colspan="2">Jl.A Yani no.23 Komplek ruko-Kedung-Bogel-Jepara</td>
                            </tr>
                            <tr>
                                <td>Rojoku Mineral 330</td>
                                <td>20 DUS</td>
                            </tr>
                            <tr>
                                <td>Rojoku Kopi Pouch</td>
                                <td>5 DUS</td>
                            </tr>
                            <tr>
                                <td>Minyak Goreng Resto</td>
                                <td>100 DUS</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Petugas - Arga</span> <br>
                                    <span class="fs-4 fw-bold text-success">TERKIRIM</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="card mb-2">
                    <div class="card-body" style="background-color:rgb(236, 236, 236) ;">
                        <div class="">
                            <span class="fs-3 fw-bold text-success">JUMAT, 24 APRIL 2022</span>
                        </div>
                        <div class="">
                            <span class="fw-bold">Jadwal pengiriman</span>
                        </div>
                    </div>
                </div>
                <div class="card mb-1">
                    <div class="card-body" style="background-color: #fddbc4 ;">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bold">Pak Yasin - Toko jaya Makmur</td>
                                <td class="fw-bold">DO.231234.98</td>
                            </tr>
                            <tr>
                                <td colspan="2">Jl.A Yani no.23 Komplek ruko-Kedung-Bogel-Jepara</td>
                            </tr>
                            <tr>
                                <td>Rojoku Mineral 330</td>
                                <td>20 DUS</td>
                            </tr>
                            <tr>
                                <td>Rojoku Kopi Pouch</td>
                                <td>5 DUS</td>
                            </tr>
                            <tr>
                                <td>Minyak Goreng Resto</td>
                                <td>100 DUS</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Petugas - Arga</span> <br>
                                    <span class="fs-4 fw-bold text-danger">BELUM TERKIRIM</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card mb-1">
                    <div class="card-body" style="background-color: #c7fcd0 ;">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bold">Pak Jhony - Toko Mandiri</td>
                                <td class="fw-bold">DO.231234.99</td>
                            </tr>
                            <tr>
                                <td colspan="2">Jl.A Yani no.23 Komplek ruko-Kedung-Bogel-Jepara</td>
                            </tr>
                            <tr>
                                <td>Rojoku Mineral 330</td>
                                <td>20 DUS</td>
                            </tr>
                            <tr>
                                <td>Rojoku Kopi Pouch</td>
                                <td>5 DUS</td>
                            </tr>
                            <tr>
                                <td>Minyak Goreng Resto</td>
                                <td>100 DUS</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Petugas - Arga</span> <br>
                                    <span class="fs-4 fw-bold text-success">TERKIRIM</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card End -->
@endsection

@section('js')
<script>
    $(document).ready(function() {
        var sidebar = document.getElementById("getSidebar");
        sidebar.style.display = "block";
    });
</script>
<!-- Libs JS -->
<script src="{{asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
<!-- Maps -->
<script src="{{asset('assets/plugin/leaflet.js')}}"></script>
<script>

    var map = L.map('map', { zoomControl: false }).setView([-6.587920031313035, 110.66716816848049], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
    }).addTo(map);

    myIcon = L.icon({
        iconUrl: './assets/plugin/images/shopping.png',
        iconSize: [40, 40],
        iconAnchor: [22, 94],
        popupAnchor: [0, -86],
        shadowSize: [68, 95],
        shadowAnchor: [22, 94]
    });

    var maker = L.marker([-6.615589291666122, 110.69204792556074], {icon: myIcon}).addTo(map);
    var maker1 = L.marker([-6.609562022931297, 110.68688156081416], {icon: myIcon}).addTo(map);

    maker.on('click', function(e) {
        L.popup({
            offset: [0, -80],
            minWidth: 280,
            maxWidth:280,
            })
            .setLatLng(e.latlng)
            .setContent(
                "<div class='card text-start'>"+
                    "<img src='./assets/static/photos/1b73704b282a8ec6.jpg' style='filter: brightness(80%); height: 120px'>"+
                    "<div class='card-body'>"+
                        "<div class='d-flex justify-content-between'>"+
                            "<div>"+
                                "<span class='fw-bold'>Joglokebon Resto & Kopi</span>"+
                            "</div>"+
                            "<div>"+
                                "<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-brand-whatsapp' width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'></path><path d='M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9'></path><path d='M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1'></path></svg>"+
                            "</div>"+
                        "</div>"+
                        "<div class='mb-2 mt-2'>"+
                            "<span class='fs-4 fw-bold text-danger'>Produk</span>"+
                            "<table class='table table-borderless mb-2'>"+
                                "<tr>"+
                                    "<td class='p-0'>Kopi Rojoku Sachet</td>"+
                                    "<td class='p-0'>20 PCS</td>"+
                                "</tr>"+
                                "<tr>"+
                                    "<td class='p-0'>Kopi Rojoku Pouch</td>"+
                                    "<td class='p-0'>5 PCS</td>"+
                                "</tr>"+
                                "<tr>"+
                                    "<td class='p-0'>Minyak Goreng</td>"+
                                    "<td class='p-0'>10 DUS</td>"+
                                "</tr>"+
                            "</table>"+
                            "<span class='fs-4 fw-bold text-danger'>Transaksi</span>"+
                            "<table class='table table-borderless mb-2'>"+
                                "<tr>"+
                                    "<td class='p-0'>Total Transaksi</td>"+
                                    "<td class='p-0'>Rp. 20.000.000</td>"+
                                "</tr>"+
                                "<tr>"+
                                    "<td class='p-0'>Nilai Persediaan</td>"+
                                    "<td class='p-0'>Rp. 2.500.000</td>"+
                                "</tr>"+
                            "</table>"+
                            "<span class='fs-4 fw-bold text-danger'>Sales Visit</span>"+
                            "<br>"+
                            "<span>Kunjungan Terakhir</span>"+
                            "<br>"+
                            "<span>10 Novenber 2022</span>"+
                        "</div>"+
                    "</div>"+
                "</div>"
            )
            .openOn(map);
    });
    maker1.on('click', function(e) {
        L.popup({
            offset: [0, -86]
            })
            .setLatLng(e.latlng)
            .setContent('<p>Hello world!<br />This is a nice popup.</p>')
            .openOn(map);
    });

</script>
<!-- Maps End -->

<!-- Circle Progress Bar -->
<script>
    $(function(){

        // Remove svg.radial-progress .complete inline styling
        $('svg.radial-progress').each(function( index, value ) {
            $(this).find($('circle.complete')).removeAttr( 'style' );
        });

        // Activate progress animation on scroll
        $(window).scroll(function(){
            $('svg.radial-progress').each(function( index, value ) {
                // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
                if (
                    $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                    $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
                ) {
                    // Get percentage of progress
                    percent = $(value).data('percentage');
                    // Get radius of the svg's circle.complete
                    radius = $(this).find($('circle.complete')).attr('r');
                    // Get circumference (2πr)
                    circumference = 2 * Math.PI * radius;
                    // Get stroke-dashoffset value based on the percentage of the circumference
                    strokeDashOffset = circumference - ((percent * circumference) / 100);
                    // Transition progress for 1.25 seconds
                    $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
                }
            });
        }).trigger('scroll');

    });
</script>
<!-- Circle progress Bar End -->

<!-- Chart Weekly Sales -->
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-line-stroke'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 370,
                parentHeightOffset: 0,
                toolbar: {
                    show: false,
                },
                animations: {
                    enabled: false
                },
            },
            fill: {
                opacity: 1,
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "straight",
            },
            series: [{
                name: "Development",
                data: [8, 10, 11, 12, 20, 27, 30]
            },{
                name: "Marketing",
                data: [3, 16, 17, 19, 20, 30, 30]
            },{
                name: "Sales",
                data: [7, 10, 11, 18, 18, 18, 24]
            }],
            grid: {
                padding: {
                    top: -20,
                    right: 0,
                    left: -4,
                    bottom: -4
                },
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                categories: ['2013', '2014', '2015', '2016', '2017', '2018', '2019'],
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            colors: ["#ff922b", "#206bc4", "#5eba00"],
            legend: {
                show: false,
            },
        })).render();
    });
    // @formatter:on
</script>
<!-- Chart Weekly Sales End -->
@endsection
