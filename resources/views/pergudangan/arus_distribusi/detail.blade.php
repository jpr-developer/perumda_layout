@extends('layout.general')
@section('title', 'Opname')

@section('content')
<div class="col-md-12">
    <h1>ARUS DISTRIBUSI PRODUK BIDANG PERDAGANGAN</h1>
</div>
{{-- Include Nav Menu Start --}}
@include('pergudangan.layout.nav-menu')
{{-- Include Nav Menu End --}}

<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/warehouse/arus-distribusi')}}" class="text-decoration-underline fs-2 fw-bold">Arus Distribusi Produk</a>
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
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-3">
                <table class="w-100">
                    <tr>
                        <td>
                            <h2>Produk Masuk</h2>
                        </td>
                        <td class="text-end" style="width: 10%">
                            <a href="" class="text-decoration-underline" data-bs-toggle="modal" data-bs-target="#modal-filter">Filter</a>
                        </td>
                    </tr>
                </table>
                <hr class="mt-1 mb-1">
                <div class="table-responsive mb-3">
                    <table class="fs-3 table table-borderless">
                        <tr>
                            <td>Tanggal Produk Masuk</td>
                            <td class="text-end">Selasa, 20 Mei 2022</td>
                        </tr>
                        <tr>
                            <td>Jumlah Produk Masuk</td>
                            <td class="text-end">100 DUS</td>
                        </tr>
                        <tr>
                            <td>Supplier</td>
                            <td class="text-end">PT. Aston Putra</td>
                        </tr>
                    </table>
                </div>
                <h2>Produk keluar</h2>
                <hr class="mt-1 mb-1">
                <div class="table-responsive">
                    <table class="fs-3 table table-borderless">
                        <tr>
                            <td>Tanggal Produk keluar</td>
                            <td class="text-end">Selasa, 20 Mei 2022</td>
                        </tr>
                        <tr>
                            <td>Jumlah Produk keluar</td>
                            <td class="text-end">100 DUS</td>
                        </tr>
                        <tr>
                            <td>Tujuan</td>
                            <td class="text-end">Toko Indah Lestari</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal modal-blur fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Pilih Tanggal</label>
                        <input type="date" class="form-control" name="file">
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
