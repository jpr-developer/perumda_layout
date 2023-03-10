@extends('layout.general')
@section('title', 'Mitra Supplier')

@section('content')
<div class="col-md-12 mb-3">
    <h1>MITRA BIDANG PERDAGANGAN</h1>
</div>
{{-- Include Nav Menu Start --}}
@include('mitra.layout.nav-menu')
{{-- Include Nav Menu End --}}

<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{route('supplier.index')}}" class="fs-2 fw-bold">Mitra Supplier</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">{{$supplier->name}}</span>
        </div>
    </div>
</div>
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-4 mb-3 text-center">
                    <img class="rounded-circle" src="{{asset('assets/static/avatars/000f.jpg')}}" alt="" height="180" width="180">
                </div>
                <div class="col-md-8 mb-3">
                    <h2>{{$supplier->name}}</h2>
                    <span class="fs-3">{{$supplier->supplierCategory->name}}</span> <br>
                    <span class="fs-3">Mitra Supplier Bidang Perdagangan</span>
                </div>
                <hr>
                <table class="fs-3 table table-borderless">
                    <tr>
                        <td style="width: 40%">Alamat</td>
                        <td class="text-end">{{$supplier->address}}</td>
                    </tr>
                    <tr>
                        <td  style="width: 40%">No Telepon Perusahaan</td>
                        <td class="text-end">{{$supplier->phone}}</td>
                    </tr>
                    <tr>
                        <td  style="width: 40%">Email</td>
                        <td class="text-end">{{$supplier->email}}</td>
                    </tr>
                    <tr>
                        <td  style="width: 40%">Website</td>
                        <td class="text-end">{{$supplier->website}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-3">
                <h2>Status Supplier</h2>
                <hr class="mt-1 mb-1">
                <div class="table-responsive">
                    <table class="fs-3 table table-borderless">
                        <tr>
                            <td>ID Supplier</td>
                            <td class="text-end">{{$supplier->code}}</td>
                        </tr>
                        <tr>
                            <td>Kategori Supplier</td>
                            <td class="text-end">{{$supplier->supplierCategory->name}}</td>
                        </tr>
                        <tr>
                            <td>Sub Kategori Supplier</td>
                            <td class="text-end">{{$supplier->supplierSubCategory->name}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai Kerjasama</td>
                            <td class="text-end">{{$supplier->join_date()}}</td>
                        </tr>
                        <tr>
                            <td>Durasi Kerjasama</td>
                            <td class="text-end">{{$supplier->contract_duration}} Tahun</td>
                        </tr>
                        <tr>
                            <td>NO Rekening Resmi</td>
                            <td class="text-end">{{$supplier->account_number}}</td>
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
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Data Transaksi {{$supplier->name}}</h2>
                        <div class="d-flex">
                            <a href="{{route('supplier.export-transaction', $supplier->id)}}" class="btn btn-green w-100 btn-icon">
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
                                @foreach ($transactions as $result => $key)
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">{{$result + $transactions->firstitem()}}</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">{{$key->code}}</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">{{$key->date}}</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rp. {{number_format($key->nominal,2,',','.')}}</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{route('supplier.detail-transaction', [$supplier->code, $key->code])}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{$transactions->links()}}
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-blur fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Fillter Transaksi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('supplier.detail', $supplier->code)}}" method="GET">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Filter berdasarkan</label>
                                        <select name="year" id="" class="form-select">
                                            {{-- <option value="">All</option>
                                            @foreach ($getYears as $years)
                                                <option value="{{$years}}">{{$years}}</option>
                                            @endforeach --}}
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
<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <div id="chart-title">

                </div>
                <div class="ms-auto">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-muted me-3" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tahun</a>
                        <div class="dropdown-menu dropdown-menu-end card-body-scrollable" style="height: 3rem" id="yearsChart">

                        </div>
                    </div>
                </div>
            </div>
            <div id="chart-line-stroke"></div>
        </div>
    </div>
</div>
<div class="col-md-6 mb-3">
    <div class="card shadow-sm" style="height: 22rem">
        <h2 class="ms-3 mt-3">Hutang Supllier</h2>
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
<div class="col-lg-6 mb-3">
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
<div class="modal modal-blur fade" id="modal-contract" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Dokumen Kontrak Kerjasama</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="https://berita.99.co/wp-content/uploads/2020/11/kartap.jpg" alt="" width="100%">
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- Libs JS -->
<script src="{{asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
<!-- Chart Weekly Sales -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: "{{route('supplier.chart', $supplier->code)}}",
            type: 'get',
            dataType: 'json',
            success: function(resp)
            {
                var total = resp.total;
                var months = resp.months;
                var years = resp.years;

                // Chart title
                var date = new Date();
                $("#chart-title").html("<h2>Grafik Total Transaksi "+date.getFullYear()+"</h2>")

                // Chart
                grafik(total, months);

                // Filter Years
                var listYears = "";
                if (years.length > 0) {
                    for (let i = 0; i < years.length; i++) {
                        listYears += "<a class='dropdown-item' href='javascript:void(0)' onclick='years("+years[i]+")'>"+years[i]+"</a>"
                    }
                } else {
                    listYears += "<a class='dropdown-item' href='#'>Data kosong</a>"
                }

                $("#yearsChart").html(listYears);

            }
        });
    });


    function years(year)
    {
        $.ajax({
            url: "{{route('supplier.chart-filter', $supplier->code)}}",
            data: {year:year},
            dataType: 'json',
            success: function(resp)
            {
                var total = resp.total;
                var months = resp.months;

                if (months.length < 2) {

                    alert("Transaksi hanya pada bulan :"+ " " + months + ", Total : Rp. "+ " " + total);


                } else {
                    grafik(total, months);

                    // Chart title
                    $("#chart-title").html("<h2>Grafik Total Transaksi "+resp.year+"</h2>");
                }

            }
        });
    }

</script>
<script>
    // @formatter:off
    function grafik(total, months)
    {
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
                name: "Total Transaksi",
                data: total,
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
                categories: months,
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
    }

    document.addEventListener("DOMContentLoaded", function () {


    });
    // @formatter:on
</script>
<!-- Chart Weekly Sales End -->
@endsection
