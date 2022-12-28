@extends('layout.general')
@section('title', 'Detail Pemesanan')

@section('content')
<div class="col-md-12">
    <h1>PERGUDANGAN BIDANG PERDAGANGAN</h1>
</div>
{{-- Include Nav Menu Start --}}
@include('pergudangan.layout.nav-menu')
{{-- Include Nav Menu End --}}


<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/warehouse/pengadaan/pembayaran')}}" class="text-decoration-underline fs-2 fw-bold">Pembayaran</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">Kopi Rojoku Pouds</span>
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
                    <tr>
                        <td>Stok Produk</td>
                        <td class="text-end">120 DUS</td>
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
                            <td>ID Pembayaran</td>
                            <td class="text-end">RO.123456789</td>
                        </tr>
                        <tr>
                            <td>ID Pembayaran</td>
                            <td class="text-end">TR/RO.123456789</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pembayaran</td>
                            <td class="text-end">Selasa, 24 Mei 2022</td>
                        </tr>
                        <tr>
                            <td>Supplier</td>
                            <td class="text-end">PT.Indah Jaya</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td class="text-end">100 DUS</td>
                        </tr>
                        <tr>
                            <td>Nominal</td>
                            <td class="text-end">Rp. 1.500.000</td>
                        </tr>
                        <tr>
                            <td>Status Pembayaran</td>
                            <td class="text-end">
                                <span class="badge bg-success">Selesai</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Keterangan <br>
                                <textarea class="form-control" disabled id="" cols="30" rows="10" style="height: 80px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
