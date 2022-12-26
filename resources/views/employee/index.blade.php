@extends('layout.general')
@section('title', 'Karyawan')

@section('content')
<div class="col-md-12">
    <h1>KARYAWAN BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">Karyawan</font> <br>
                <a href="" class="text-decoration-underline">Data karyawan</a>
            </p>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <h2>Data Karyawan Perdagangan</h2>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                            <form action="">
                                <input type="search" class="form-control" placeholder="Cari karyawan ...">
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
                                <th style="width: 5%">
                                    <div class="form-control">
                                        No
                                    </div>
                                </th>
                                <th style="width: 20%">
                                    <div class="form-control">
                                        ID Karyawan
                                    </div>
                                </th>
                                <th style="width: 25%">
                                    <div class="form-control">
                                        Nama Karyawan
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Posisi Karyawan
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Status Karyawan
                                    </div>
                                </th>
                                <th style="width: 10%" class="text-center">
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
                                        <span class="form-control border border-0 fs-3">K.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Muhammad Fahruddin</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Manager</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/employee/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">2</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">K.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Endah Mulyana</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Staf</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/employee/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">3</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">K.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Andreas Salsabila</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Komisaris</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/employee/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">4</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">K.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Tsaniyatul Faiz</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Staf</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/employee/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">5</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">K.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Agus Alfaridli</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Staf</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Aktif</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/employee/detail')}}" class="btn btn-dribbble form-control mx-2">View</a>
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
                                <h5 class="modal-title">Upload Data Karyawan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Import data karyawan</label>
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
                                <h5 class="modal-title">Filter Data Karyawan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Filter data karyawan</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Komisaris</option>
                                            <option value="">Staf</option>
                                            <option value="">Manager</option>
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
