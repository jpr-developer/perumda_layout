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
            <a href="{{url('/mitra/store')}}" class="text-decoration-underline fs-2 fw-bold">Mitra Toko</a>
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
                    <img class="rounded-circle" src="{{asset('assets/static/avatars/000f.jpg')}}" alt="" height="180" width="180">
                </div>
                <div class="col-md-8 mb-3">
                    <h2>Toko Indah Lestari</h2>
                    <span class="fs-3">Personal</span> <br>
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
                <h2>Status Toko</h2>
                <hr class="mt-1 mb-1">
                <div class="table-responsive">
                    <table class="fs-3 table table-borderless">
                        <tr>
                            <td>ID Toko</td>
                            <td class="text-end">SP.123456789</td>
                        </tr>
                        <tr>
                            <td>Kategori Toko</td>
                            <td class="text-end">Lembaga</td>
                        </tr>
                        <tr>
                            <td>Sub Kategori Toko</td>
                            <td class="text-end">PT (Perseroan Terbatas)</td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai Kerjasama</td>
                            <td class="text-end">Selasa, 20 Mei 2022</td>
                        </tr>
                        <tr>
                            <td>Durasi Kerjasama</td>
                            <td class="text-end">1 Tahun</td>
                        </tr>
                        <tr>
                            <td>NO Rekening Resmi</td>
                            <td class="text-end">BNI - PT.Aston Putra - 32709273025</td>
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
<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Data Transaksi Toko Indah Lestari</h2>
                        <div>
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
                                        <span class="form-control border border-0 fs-3">Rp. 1.500.000</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/mitra/store/detail/transaksi')}}" class="btn btn-dribbble form-control mx-2">View</a>
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
<div class="col-md-12">
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
                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bulan</a>
                        <div class="dropdown-menu dropdown-menu-end card-body-scrollable" style="height: 18rem">
                            <a class="dropdown-item" href="#">Januari</a>
                            <a class="dropdown-item" href="#">Februari</a>
                            <a class="dropdown-item" href="#">Maret</a>
                            <a class="dropdown-item" href="#">April</a>
                            <a class="dropdown-item" href="#">Mei</a>
                            <a class="dropdown-item" href="#">Juni</a>
                            <a class="dropdown-item" href="#">Juli</a>
                            <a class="dropdown-item" href="#">Agustus</a>
                            <a class="dropdown-item" href="#">September</a>
                            <a class="dropdown-item" href="#">Oktober</a>
                            <a class="dropdown-item" href="#">November</a>
                            <a class="dropdown-item" href="#">Desember</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chart-line-stroke2"></div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card shadow-sm" style="height: 22rem">
        <h2 class="ms-3 mt-3">Piutang Toko</h2>
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
                            simply dummy text of the printing and typesetting
                            <br>
                            <small class="text-orange">2023-01-10</small>
                        </td>
                        <td class="fw-bold">3 Maret 2023</td>
                        <td>500.000</td>
                        <td class="text-center">250.000</td>
                    </tr>
                    <tr>
                        <td>
                            simply dummy text of the printing and typesetting
                            <br>
                            <small class="text-orange">2023-01-09</small>
                        </td>
                        <td class="fw-bold">3 Maret 2023</td>
                        <td>700.000</td>
                        <td class="text-center">350.000</td>
                    </tr>
                    <tr>
                        <td>
                            simply dummy text of the printing and typesetting
                            <br>
                            <small class="text-orange">2023-01-09</small>
                        </td>
                        <td class="fw-bold">3 Maret 2023</td>
                        <td>700.000</td>
                        <td class="text-center">350.000</td>
                    </tr>
                    <tr>
                        <td>
                            simply dummy text of the printing and typesetting
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
<div class="col-lg-6">
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
{{-- modal --}}
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
<div class="modal modal-blur fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter Data Transaksi Toko</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Filter berdasarkan</label>
                        <select name="" id="" class="form-select">
                            <option value="">All</option>
                            <option value="">Bulan</option>
                            <option value="">tahun</option>
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
@endsection

@section('js')
<!-- Libs JS -->
<script src="{{asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
<!-- Chart Weekly Sales2 -->
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-line-stroke2'), {
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
