@extends('layout.general')
@section('content')

<div class="row">
    <div class="col-md-12 mb-3">
        <h1>Data Umum</h1>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-yellow text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-invoice" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M9 7l1 0"></path>
                                <path d="M9 13l6 0"></path>
                                <path d="M13 17l2 0"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">RKAPB</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-rkapb">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-blue text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-address-book" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z"></path>
                                <path d="M10 16h6"></path>
                                <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M4 8h3"></path>
                                <path d="M4 12h3"></path>
                                <path d="M4 16h3"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">Karyawan</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-karyawan">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-green text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">Supplier</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-supplier">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-red text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 21l18 0"></path>
                                <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
                                <path d="M5 21l0 -10.15"></path>
                                <path d="M19 21l0 -10.15"></path>
                                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">Toko</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-store">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-info text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">Reseller</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-reseller">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-2">
        <h1>Pergudangan</h1>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-green text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M17 17h-11v-14h-2"></path>
                                <path d="M6 5l14 1l-1 7h-13"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">Produk</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-product">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-dribbble text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash-banknote" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M3 6m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                                <path d="M18 12l.01 0"></path>
                                <path d="M6 12l.01 0"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">Opname</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-opname">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <h1>Transaksi</h1>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-yellow text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-mastercard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M12 9.765a3 3 0 1 0 0 4.47"></path>
                                <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">Transaksi Pembelian</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-purchase-transaction">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-green text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-mastercard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M12 9.765a3 3 0 1 0 0 4.47"></path>
                                <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">Transaksi Penjualan Reseller</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-sales-transaction-reseller">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-sm shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-green text-white avatar rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-mastercard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M12 9.765a3 3 0 1 0 0 4.47"></path>
                                <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <div class="">
                           <span class="fs-2 fw-bold">Testing Import</span>
                        </div>
                        <div class="text-muted">
                            <a href="#" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import-test">Import data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Import Modal -->
<div class="modal modal-blur fade" id="modal-import-financial" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data RKAPB</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="category" id="" class="form-select">
                            <option value="program_bisnis">Program Bisnis</option>
                            <option value="program_non_bisnis">Program Non Bisnis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Import data rkapb</label>
                        <input type="file" class="form-control" name="employee_import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-import-rkapb" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Financial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="category" id="" class="form-select">
                            <option value="program_bisnis">Program Bisnis</option>
                            <option value="program_non_bisnis">Program Non Bisnis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Import data financial</label>
                        <input type="file" class="form-control" name="import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-import-karyawan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('employee.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Import data karyawan</label>
                        <input type="file" class="form-control" name="employee_import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-import-supplier" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Supplier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('supplier.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Import data supplier</label>
                        <input type="file" class="form-control" name="supplier_import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-import-store" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Toko</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('store.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Import data toko</label>
                        <input type="file" class="form-control" name="import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-import-reseller" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Reseller</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('reseller.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Import data reseller</label>
                        <input type="file" class="form-control" name="reseller_import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-import-product" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('product.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Import data produk</label>
                        <input type="file" class="form-control" name="import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-import-purchase-transaction" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Transaksi Pembelian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('purchase.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Supplier</label>
                        <select name="supplier_id" id="" class="form-select">
                            @foreach ($suppliers as $result)
                                <option value="{{$result->id}}">{{$result->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Import data transaksi pembelian</label>
                        <input type="file" class="form-control" name="import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-import-sales-transaction-reseller" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Transaksi Reseller</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('sales-transaction-reseller.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Reseller</label>
                        <select name="reseller_id" id="" class="form-select">
                            @foreach ($resellers as $result)
                                <option value="{{$result->id}}">{{$result->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Import data transaksi pembelian</label>
                        <input type="file" class="form-control" name="import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-import-opname" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Opname</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('warehouse.opname-import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Import data opname</label>
                        <input type="file" class="form-control" name="import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal modal-blur fade" id="modal-import-test" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import test</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('test.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Import test</label>
                        <input type="file" class="form-control" name="import" required>
                        <small class="text-muted fw-bold">Type file : .xlxs</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-green">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
