@extends('layout.general')
@section('title', 'Mitra Reseller')

@section('content')
<div class="col-md-12">
    <h1>MITRA BIDANG PERDAGANGAN</h1>
</div>
{{-- Include Nav Menu Start --}}
@include('mitra.layout.nav-menu')
{{-- Include Nav Menu End --}}
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">Mitra Reseller</font> <br>
                <a href="" class="text-decoration-underline">Data mitra reseller</a>
            </p>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-9 mb-3">
                    <h2>Data Mitra Reseller</h2>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="row">
                        <div class="col-md-10 col-10">
                            <form action="">
                                <input type="search" class="form-control" placeholder="Cari produk ...">
                            </form>
                        </div>
                        <div class="col-md-2 col-2">
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
                                        ID Reseller
                                    </div>
                                </th>
                                <th style="width: 25%">
                                    <div class="form-control">
                                        Nama Reseller
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Kategori Reseller
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Status Reseller
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
                                        <span class="form-control border border-0 fs-3">MR.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Muhammad Fahruddin</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Personal</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/mitra/reseller/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">2</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">MR.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Lembaga Jepara</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Lembaga</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/mitra/reseller/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">3</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">MR.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Andreas Salsabila</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Personal</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/mitra/reseller/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">4</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">MR.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Tsaniyatul Faiz</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Personal</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/mitra/reseller/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">5</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">MR.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Agus Alfaridli</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Personal</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/mitra/reseller/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-blur fade" id="modal-upload" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Upload Data Supplier</h5>
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
                                <h5 class="modal-title">Filter Data Supplier</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Filter data supplier</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Filter 1</option>
                                            <option value="">Filter 2</option>
                                            <option value="">Filter 3</option>
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
