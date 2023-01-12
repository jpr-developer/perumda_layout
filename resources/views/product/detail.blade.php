@extends('layout.general')
@section('title', 'Detail Karyawan')

@section('content')
<div class="col-md-12">
    <h1>PRODUK BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/products')}}" class="text-decoration-underline fs-2 fw-bold">Produk</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">Kopi Rojoku Pouds</span>
        </div>
    </div>
</div>
{{-- <div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-4 mb-3 text-center">
                    <img class="rounded-circle" src="{{asset('assets/static/avatars/000f.jpg')}}" alt="" height="200" width="200">
                </div>
                <div class="col-md-8 mb-3">
                    <h2>Kopi Rojoku Pouds</h2>
                    <span class="fs-3">Kopi</span> <br>
                    <span class="fs-3">Produk Bidang Perdagangan</span>
                </div>
                <hr>
                <table class="fs-3 table table-borderless">
                    <tr>
                        <td>ID produk</td>
                        <td class="text-end">PR.123456789</td>
                    </tr>
                    <tr>
                        <td>Kategori Produk</td>
                        <td class="text-end">Kopi</td>
                    </tr>
                    <tr>
                        <td>Sub Kategori Produk</td>
                        <td class="text-end">Kopi Sachet</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-3">
                <h2>Deskripsi Produk</h2>
                <hr class="mt-1 mb-1">
                <p class="fs-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </p>
                <p class="fs-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
</div> --}}

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    {{-- <img src="{{asset('assets/images/kopi_rojoku.png')}}" alt=""> --}}
                    <div id="carousel-indicators-thumb" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators carousel-indicators-thumb mb-1">
                          <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="0" class=" ratio ratio-4x3 active" style="background-image: url({{asset('assets/static/photos/a12804818c417ea3.jpg')}})"></button>
                          <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="1" class=" ratio ratio-4x3" style="background-image: url({{asset('assets/static/photos/abb0721ac43820f9.jpg')}})"></button>
                          <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="2" class=" ratio ratio-4x3" style="background-image: url({{asset('assets/static/photos/d366fc3df37fe65b.jpg')}})"></button>
                          <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="3" class=" ratio ratio-4x3" style="background-image: url({{asset('assets/static/photos/da6119936bd7f566.jpg')}})"></button>
                          <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="4" class=" ratio ratio-4x3" style="background-image: url({{asset('assets/static/photos/e8f47263360d96af.jpg')}})"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100 rounded-2" alt="" src="{{asset('assets/static/photos/a12804818c417ea3.jpg')}}">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 rounded-2" alt="" src="{{asset('assets/static/photos/abb0721ac43820f9.jpg')}}">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 rounded-2" alt="" src="{{asset('assets/static/photos/d366fc3df37fe65b.jpg')}}">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 rounded-2" alt="" src="{{asset('assets/static/photos/da6119936bd7f566.jpg')}}">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 rounded-2" alt="" src="{{asset('assets/static/photos/e8f47263360d96af.jpg')}}">
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ms-3">
                        <h1>Kopi Rojoku Pouds</h1>
                        <div class="d-flex fs-3 mb-3">
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
                            <div class="border-start border-secondary me-3">
                                <div class="ps-1">
                                    <span class="text-decoration-underline fw-bold">56RB</span> Penilaian
                                </div>
                            </div>
                            <div class="border-start border-secondary">
                                <div class="ps-1">
                                    <span class="text-decoration-underline fw-bold">50RB</span> Terjual
                                </div>
                            </div>
                        </div>
                        <div>
                            <h1>Rp 1.500</h1>
                        </div>
                        <div class="mb-3">
                            <span class="fs-3">Kategori : Kopi</span>,
                            <span class="fs-3">Sub Kategori : Kopi Sachet</span>
                        </div>
                        <div class="mb-3">
                            <span class="fs-2">Spesifikasi Produk</span>
                            <div>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a
                                type specimen book. It has survived not only five centuries, but also the
                                leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                        <div>
                            <span class="fs-2">Deskripsi Produk</span>
                            <div>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a
                                type specimen book. It has survived not only five centuries, but also the
                                leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
