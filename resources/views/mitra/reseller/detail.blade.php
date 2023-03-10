@extends('layout.general')
@section('title', 'Mitra Reseller')

@section('content')
<div class="col-md-12 mb-3">
    <h1>MITRA BIDANG PERDAGANGAN</h1>
</div>
<!-- Menu Nav Reseller Start -->
@include('mitra.layout.nav-menu')
<!-- Menu Nav Reseller End -->

<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{route('reseller.index')}}" class="fs-2 fw-bold">Mitra Reseller</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">{{$reseller->name}}</span>
        </div>
    </div>
</div>
<!-- Data Personal -->
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-4 mb-3 text-center">
                    <img class="rounded-circle" src="{{asset('assets/static/avatars/000f.jpg')}}" alt="" height="180" width="180">
                </div>
                <div class="col-md-8 mb-3">
                    <h2>{{$reseller->name}}</h2>
                    <span class="fs-3">{{$reseller->resellerCategory->name}}</span> <br>
                    <span class="fs-3">Mitra Reseller Bidang Perdagangan</span>
                </div>
                <hr>
                <table class="fs-3 table table-borderless">
                    <tr>
                        <td>Alamat</td>
                        <td class="text-end">{{$reseller->address}}</td>
                    </tr>
                    <tr>
                        <td>No Telepon Perusahaan</td>
                        <td class="text-end">{{$reseller->phone}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td class="text-end">{{$reseller->email}}</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td class="text-end">{{$reseller->website}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Status Reseller -->
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-3">
                <h2>Status Reseller</h2>
                <hr class="mt-1 mb-1">
                <div class="table-responsive">
                    <table class="fs-3 table table-borderless">
                        <tr>
                            <td>ID Reseller</td>
                            <td class="text-end">{{$reseller->code}}</td>
                        </tr>
                        <tr>
                            <td>Kategori Reseller</td>
                            <td class="text-end">{{$reseller->resellerCategory->name}}</td>
                        </tr>
                        <tr>
                            <td>Sub Kategori Reseller</td>
                            <td class="text-end">{{$reseller->resellerSubCategory->name}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai Kerjasama</td>
                            <td class="text-end">{{$reseller->join_date}}</td>
                        </tr>
                        <tr>
                            <td>Durasi Kerjasama</td>
                            <td class="text-end">{{$reseller->contract_duration}} Tahun</td>
                        </tr>
                        <tr>
                            <td>NO Rekening Resmi</td>
                            <td class="text-end">{{$reseller->account_number}}</td>
                        </tr>
                        <tr>
                            <td>Dokumen Kontrak Kerjasama</td>
                            <td class="text-end">
                                <a href="" class="btn btn-dribbble" data-bs-toggle="modal" data-bs-target="#modal-contract">Lihat Dokumen</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table Transaksi -->
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Data Transaksi {{$reseller->name}}</h2>
                        <div class="d-flex">
                            <a href="" class="btn btn-green w-100 btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4"></path>
                                    <path d="M12 13l0 9"></path>
                                    <path d="M9 19l3 3l3 -3"></path>
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
                                        ID Transaksi
                                    </div>
                                </th>
                                <th style="width: 25%">
                                    <div class="form-control">
                                        Tanggal Transaksi
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Nominal
                                    </div>
                                </th>
                                <th style="width: 10%" class="text-center rounded-end">
                                    <div class="form-control">
                                        Action
                                    </div>
                                </th>
                            </thead>
                            <tbody class="fs-3">
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">1</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">TR.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">20 Mei 2022</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rp 7500.000</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{route('reseller.transaction-detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- Grafik -->
<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <h2>Grafik Data Transaksi</h2>
                <div class="ms-auto">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-muted me-3" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tahun</a>
                        <div class="dropdown-menu dropdown-menu-end card-body-scrollable" style="height: 18rem">
                            <a class="dropdown-item" href="#">2015</a>
                            <a class="dropdown-item" href="#">2016</a>
                            <a class="dropdown-item" href="#">2017</a>
                            <a class="dropdown-item" href="#">2018</a>
                            <a class="dropdown-item" href="#">2019</a>
                            <a class="dropdown-item" href="#">2020</a>
                            <a class="dropdown-item" href="#">2021</a>
                            <a class="dropdown-item" href="#">2022</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chart-line-stroke"></div>
        </div>
    </div>
</div>
<!-- Profit Sharing -->
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2>Profit Sharing</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="card-table">
                        <th style="width: 5%" class="rounded-start">
                            <div class="form-control">
                                No
                            </div>
                        </th>
                        <th style="width: 15%">
                            <div class="form-control">
                                Tanggal
                            </div>
                        </th>
                        <th style="width: 15%">
                            <div class="form-control">
                                Harga Beli
                            </div>
                        </th>
                        <th style="width: 15%">
                            <div class="form-control">
                                Harga Jual
                            </div>
                        </th>
                        <th style="width: 15%">
                            <div class="form-control">
                                Margin Profit
                            </div>
                        </th>
                        <th style="width: 15%">
                            <div class="form-control">
                                Profit Sharing
                            </div>
                        </th>
                    </thead>
                    <tbody class="fs-3">
                        <tr>
                            <td class="text-center">
                                <span class="form-control border border-0 fs-3">1</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Selasa, 20 Mei 2022</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Rp. 1.500.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Rp. 2.500.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 1.000.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 750.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="form-control border border-0 fs-3">2</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Rabu, 21 Mei 2022</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Rp. 2.000.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Rp. 3.500.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 1.500.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 850.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="form-control border border-0 fs-3 fw-bold">TOTAL</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3 fw-bold">RP 2.500.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3 fw-bold">RP 1.600.000</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Grafik Profit Sharing -->
<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <h2>Grafik Profit Sharing</h2>
                <div class="ms-auto">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-muted me-3" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tahun</a>
                        <div class="dropdown-menu dropdown-menu-end card-body-scrollable" style="height: 18rem">
                            <a class="dropdown-item" href="#">2015</a>
                            <a class="dropdown-item" href="#">2016</a>
                            <a class="dropdown-item" href="#">2017</a>
                            <a class="dropdown-item" href="#">2018</a>
                            <a class="dropdown-item" href="#">2019</a>
                            <a class="dropdown-item" href="#">2020</a>
                            <a class="dropdown-item" href="#">2021</a>
                            <a class="dropdown-item" href="#">2022</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chart-line-stroke1"></div>
        </div>
    </div>
</div>
<!-- Data Saldo -->
<div class="col-md-4 mb-3">
    <div class="card shadow-sm" style="height: 22rem">
        <h2 class="ms-3 mt-3">Saldo Reseller</h2>
        <div class="card-body card-body-scrollable card-body-scrollable-shadow mx-3" style="padding: 0;margin:0">
            <table class="table table-borderless">
                <tr>
                    <th style="width: 30%">Uraian</th>
                    <th>Tipe</th>
                    <th style="width: 30%">Nominal</th>
                    <th style="width: 30%" class="text-center">Sisa Saldo</th>
                </tr>
                <tbody>
                    <tr>
                        <td style="width: 30%">
                            Tarik tunai kartu 32523532532532532
                            Bank Negara Indonesia Jepara
                            <br>
                            <div class="d-flex justify-content-between">
                                <small class="text-orange">2023-01-10</small>
                                <small class="text-secondary">19:00:30</small>
                            </div>
                        </td>
                        <td class="text-orange fw-bold">D</td>
                        <td style="width: 30%">250.000</td>
                        <td style="width: 30%" class="text-center">500.000</td>
                    </tr>
                    <tr>
                        <td style="width: 30%">
                            TopUp Echannel Kartu 3243243243242 Vivit Wulan Sari
                            <br>
                            <div class="d-flex justify-content-between">
                                <small class="text-orange">2023-01-09</small>
                                <small class="text-secondary">16:00:30</small>
                            </div>
                        </td>
                        <td class="text-orange fw-bold">K</td>
                        <td style="width: 30%">500.000</td>
                        <td style="width: 30%" class="text-center">750.000</td>
                    </tr>
                    <tr>
                        <td style="width: 30%">
                            TopUp Echannel Kartu 3243243243242 Vivit Wulan Sari
                            <br>
                            <div class="d-flex justify-content-between">
                                <small class="text-orange">2023-01-09</small>
                                <small class="text-secondary">16:00:30</small>
                            </div>
                        </td>
                        <td class="text-orange fw-bold">K</td>
                        <td style="width: 30%">500.000</td>
                        <td style="width: 30%" class="text-center">750.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Data Piutang -->
<div class="col-md-4 mb-3">
    <div class="card shadow-sm" style="height: 22rem">
        <h2 class="ms-3 mt-3">Piutang Reseller</h2>
        <div class="card-body card-body-scrollable card-body-scrollable-shadow mx-3" style="padding: 0;margin:0">
            <table class="table table-borderless">
                <tr>
                    <th style="width: 30%">Uraian</th>
                    <th style="width: 30%">Tempo</th>
                    <th style="width: 15%">Nominal</th>
                    <th style="width: 15%" class="text-center">Terbayar</th>
                </tr>
                <tbody>
                    <tr>
                        <td>
                            Toko Indah Lestari
                            <br>
                            <small class="text-orange">2023-01-10</small>
                        </td>
                        <td class="fw-bold">3 Maret 2023</td>
                        <td>500.000</td>
                        <td class="text-center">250.000</td>
                    </tr>
                    <tr>
                        <td>
                            Toko Barokah Jaya
                            <br>
                            <small class="text-orange">2023-01-09</small>
                        </td>
                        <td class="fw-bold">3 Maret 2023</td>
                        <td>700.000</td>
                        <td class="text-center">350.000</td>
                    </tr>
                    <tr>
                        <td>
                            Toko Abadi
                            <br>
                            <small class="text-orange">2023-01-09</small>
                        </td>
                        <td class="fw-bold">3 Maret 2023</td>
                        <td>700.000</td>
                        <td class="text-center">350.000</td>
                    </tr>
                    <tr>
                        <td>
                            Toko Sejahtera
                            <br>
                            <small class="text-orange">2023-01-09</small>
                        </td>
                        <td class="fw-bold">3 Maret 2023</td>
                        <td>700.000</td>
                        <td class="text-center">350.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Komplain -->
<div class="col-lg-4 mb-3">
    <div class="row row-cards">
        <div class="col-12">
            <div class="card shadow-sm" style="height: 22rem">
                <h2 class="ms-3 mt-3">Permasalahan ( Komplain )</h2>
                <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                    <div class="divide-y">
                        <div>
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar text-white">JL</span>
                                </div>
                                <div class="col">
                                    <div class="text-truncate">
                                        <strong>Jeffie Lewzey</strong> memberikan komplain. <strong>"Produk sering rusak"</strong>
                                    </div>
                                    <div class="text-muted">yesterday</div>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div>
                                        <a href="" class="text-decoration-underline" data-bs-toggle="modal" data-bs-target="#modal-komplain">lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar" style="background-image: url({{asset('assets/static/avatars/002m.jpg')}})"></span>
                                </div>
                                <div class="col">
                                    <div class="text-truncate">
                                        <strong>Andrawan</strong> memberikan komplain. <strong>"Pengiriman tidak sesuai jadwal"</strong>
                                    </div>
                                    <div class="text-muted">2 days ago</div>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div>
                                        <a href="" class="text-decoration-underline">lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar" style="background-image: url({{asset('assets/static/avatars/003m.jpg')}})"></span>
                                </div>
                                <div class="col">
                                    <div class="text-truncate">
                                        <strong>Agustin</strong> memberikan komplain. <strong>"Pengiriman tidak sesuai jadwal"</strong>
                                    </div>
                                    <div class="text-muted">today</div>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div>
                                        <a href="" class="text-decoration-underline">lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar" style="background-image: url({{asset('assets/static/avatars/000f.jpg')}})"></span>
                                </div>
                                <div class="col">
                                    <div class="text-truncate">
                                        <strong>Endah Listiwati</strong> memberikan komplain. <strong>"Pengiriman tidak sesuai jadwal"</strong>
                                    </div>
                                    <div class="text-muted">4 days ago</div>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div>
                                        <a href="" class="text-decoration-underline">lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar" style="background-image: url({{asset('assets/static/avatars/001f.jpg')}})"></span>
                                </div>
                                <div class="col">
                                    <div class="text-truncate">
                                        <strong>Agustina</strong> memberikan komplain. <strong>"Barang sering rusak"</strong>
                                    </div>
                                    <div class="text-muted">2 days ago</div>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div>
                                        <a href="" class="text-decoration-underline">lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Komplain --}}
    <div class="modal modal-blur fade" id="modal-komplain" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Komplain</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-blur fade" id="modal-import" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Transaksi Reseller</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Import data</label>
                        <input type="file" class="form-control" required name="import">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter Data Transaksi Reseller</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Filter data berdasarkan</label>
                        <select name="" id="" class="form-select">
                            <option value="">All</option>
                            <option value="">Tahun</option>
                            <option value="">Bulan</option>
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
<div class="modal modal-blur fade" id="modal-contract" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Dokumen Kontrak Kerja Sama</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <img src="https://i.pinimg.com/originals/24/0a/bf/240abf3f95beb7132611144ad63525f2.jpg" alt="" width="100%">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- Libs JS -->
<script src="{{asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
<!-- Chart Weekly Sales -->
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-line-stroke'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 340,
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
                name: "Grafik",
                data: [8, 10, 11, 12, 20, 27, 30, 20, 10, 40, 50, 60]
            },],
            grid: {

                strokeDashArray: 2,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
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
<!-- Chart Weekly Sales1 -->
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-line-stroke1'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 340,
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
                name: "Grafik",
                data: [8, 10, 11, 12, 20, 27, 30, 20, 10, 40, 50, 60]
            },],
            grid: {

                strokeDashArray: 2,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
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
<!-- Chart Weekly Sales1 End -->
@endsection
