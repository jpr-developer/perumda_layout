@extends('layout.general')
@section('title', 'Mitra Toko')

@section('content')
<div class="col-md-12">
    <h1>MITRA BIDANG PERDAGANGAN</h1>
</div>
{{-- Include Nav Menu Start --}}
@include('mitra.layout.nav-menu')
{{-- Include Nav Menu End --}}

<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/mitra/supplier')}}" class="text-decoration-underline fs-2 fw-bold">Mitra Toko</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">Toko Indah Lestari</span>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-4 mb-3 text-center">
                    <img class="rounded-circle" src="{{asset('assets/static/avatars/000f.jpg')}}" alt="" height="200" width="200">
                </div>
                <div class="col-md-8 mb-3">
                    <h2>Toko Indah Lestari</h2>
                    <span class="fs-3">UMKM</span> <br>
                    <span class="fs-3">Mitra Toko Bidang Perdagangan</span>
                </div>
                <hr>
                <table class="fs-3 table table-borderless">
                    <tr>
                        <td>Alamat</td>
                        <td class="text-end">Jl. Pemuda No.03</td>
                    </tr>
                    <tr>
                        <td>No Telepon Perusahaan</td>
                        <td class="text-end">(0291) 4564 4565</td>
                    </tr>
                    <tr>
                        <td>No Telepon Personal</td>
                        <td class="text-end">+62 8945 9878 4567</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td class="text-end">muhammadfahruddin@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td class="text-end">fahruddin.com</td>
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
                <h2>Business Data</h2>
                <hr class="mt-1 mb-1">
                <div class="table-responsive">
                    <table class="fs-3 table-md table table-borderless">
                        <tr>
                            <td class="fw-bold">
                                Toko yang didaftarkan <br>
                                <select name="" id="" class="form-select">
                                    <option value="">Filter by date</option>
                                    <option value="">All</option>
                                    <option value="">Per bulan</option>
                                    <option value="">Per tahun</option>
                                </select>
                            </td>
                            <td class="text-end fw-bold">
                                50 Toko <br>
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td class=" fw-bold">
                                Stok <br>
                                <select name="" id="" class="form-select">
                                    <option value="">Filter by date</option>
                                    <option value="">All</option>
                                    <option value="">Per bulan</option>
                                    <option value="">Per tahun</option>
                                </select>
                            </td>
                            <td class="text-end  fw-bold">
                                50 DUS <br>
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                Hutang <br>
                                <select name="" id="" class="form-select">
                                    <option value="">Filter by date</option>
                                    <option value="">All</option>
                                    <option value="">Per bulan</option>
                                    <option value="">Per tahun</option>
                                </select>
                            </td>
                            <td class="text-end fw-bold">
                                Rp. 500.000 <br>
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                Total transaksi <br>
                                <select name="" id="" class="form-select">
                                    <option value="">Filter by date</option>
                                    <option value="">All</option>
                                    <option value="">Per bulan</option>
                                    <option value="">Per tahun</option>
                                </select>
                            </td>
                            <td class="text-end  fw-bold">
                                Rp. 10.000.000 <br>
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                Total reward <br>
                                <select name="" id="" class="form-select">
                                    <option value="">Filter by date</option>
                                    <option value="">All</option>
                                    <option value="">Per bulan</option>
                                    <option value="">Per tahun</option>
                                </select>
                            </td>
                            <td class="text-end  fw-bold">
                                Rp. 2.500.000 <br>
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <h2>Data Transaksi</h2>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                            <form action="">
                                <input type="search" class="form-control" placeholder="Cari toko ...">
                            </form>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1 me-1">
                            <a href="#" class="btn btn-danger w-100 btn-icon" aria-label="Upload" data-bs-toggle="modal" data-bs-target="#modal-upload">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                    <polyline points="9 15 12 12 15 15"></polyline>
                                    <line x1="12" y1="12" x2="12" y2="21"></line>
                                </svg>
                            </a>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1 me-1">
                            <a href="#" class="btn btn-success w-100 btn-icon" aria-label="Download">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4"></path>
                                    <line x1="12" y1="13" x2="12" y2="22"></line>
                                    <polyline points="9 19 12 22 15 19"></polyline>
                                </svg>
                            </a>
                        </div>
                        <div class=" col-lg-1 col-md-1 col-sm-1 col-1 me-1">
                            <a href="#" class="btn btn-rss w-100 btn-icon" aria-label="Filter" data-bs-toggle="modal" data-bs-target="#modal-filter">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead class="card-table">
                                <th style="width: 5%" class="rounded-start">
                                    <div class="form-control">
                                        No
                                    </div>
                                </th>
                                <th style="width: 20%">
                                    <div class="form-control">
                                        ID Transaksi Supplier
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Tanggal Transaksi
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Toko
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Produk
                                    </div>
                                </th>
                                <th style="width: 8%">
                                    <div class="form-control">
                                        Jumlah
                                    </div>
                                </th>
                                <th style="width: 15%" class="rounded-end">
                                    <div class="form-control">
                                        Nominal
                                    </div>
                                </th>
                            </thead>
                            <tbody class="fs-3">
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">1</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">TR.123456789</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Senin, 23 Mei 2022</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Indah Lestari</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rojoku Sachet</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">50 DUS</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rp. 2.000.000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">2</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">TR.123456789</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Selasa, 24 Mei 2022</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Barokah Jaya</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rojoku Sachet</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">50 DUS</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rp. 2.000.000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">3</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">TR.123456789</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rabu, 25 Mei 2022</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Toko Makmur Jaya</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rojoku Sachet</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">50 DUS</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rp. 2.000.000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">4</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">TR.123456789</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Kamis, 26 Mei 2022</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Cafe Outbond Jepara</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rojoku Sachet</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">50 DUS</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rp. 2.000.000</span>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-blur fade" id="modal-upload" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Upload Data Transaksi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Import data supplier</label>
                                        <input type="file" class="form-control" name="file">
                                        <small class="text-small"><b>Note:</b> format file .xlxs, .xls</small>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal modal-blur fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Filter Data Transaksi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Filter by date</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">all</option>
                                            <option value="">Bulan</option>
                                            <option value="">Tahun</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-rss">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
