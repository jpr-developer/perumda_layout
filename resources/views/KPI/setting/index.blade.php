@extends('layout.general')

@section('content')
<!-- Menu KPI Start -->
@include('KPI.layout.nav-menu')
<!-- Menu KPI End -->

<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">Setting KPI Bidang Perdagangan</font> <br>
            </p>
        </div>
    </div>
</div>

<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-3">
                <form action="">
                    <div class="mb-3">
                        <h3>Setting Program Kegiatan</h3>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Kegiatan Bisnis</label>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="kegiatan bisnis" min="0" max="100">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Penunjang Bisnis</label>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="penunjang bisnis" min="0" max="100">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mb-3">
                <form action="">
                    <div class="mb-3">
                        <h3>Setting Kategori Kegiatan</h3>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Program Kegiatan</label>
                        <div class="col">
                            <select name="" id="" class="form-select">
                                <option value="">Program Kegiatan Bisnis</option>
                                <option value="">Program Penunjang Bisnis</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Nama Kategori Kegiatan</label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama kategori kegiatan" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Bobot Kategori Kegiatan</label>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Bobot kategori kegiatan" min="0" max="100" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mb-3">
                <table class="table">
                    <tr>
                        <th>Program Kegiatan</th>
                        <th>Kategori Kegiatan</th>
                        <th>Bobot Kategori</th>
                        <th class="text-center">Action</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>Prioritas</td>
                            <td>Penjualan</td>
                            <td>20%</td>
                            <td class="text-center">
                                <span class="dropdown">
                                    <a href="" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-start">
                                        <a class="dropdown-item" href="#">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Delete
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-3">
                <form action="">
                    <div class="mb-3">
                        <h3>Setting Bobot Kegiatan Bisnis</h3>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Nama Kategori Kegiatan</label>
                        <div class="col">
                            <select name="" class="form-select">
                                <option value="">Penjualan</option>
                                <option value="">Pembelian</option>
                                <option value="">Laba Kotor</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Bobot Kategori Kegiatan</label>
                        <div class="col">
                            <input type="text" class="form-control" value="20%" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Program Kegiatan</label>
                        <div class="col">
                            <input type="text" class="form-control" value="Prioritas" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Nama Kegiatan Bisnis</label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama kegiatan bisnis" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">Bobot Kegiatan Bisnis</label>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Bobot kegiatan bisnis" min="0" max="100" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label required">KPI Skor</label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="KPI skor" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mb-3">
                <table class="table">
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Kategori Kegiatan</th>
                        <th>Bobot Kegiatan</th>
                        <th>KPI Skor</th>
                        <th class="text-center">Action</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>Penjualan Kopi</td>
                            <td>Penjualan</td>
                            <td>100</td>
                            <td>A</td>
                            <td class="text-center">
                                <span class="dropdown">
                                    <a href="" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-start">
                                        <a class="dropdown-item" href="#">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Delete
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-blur fade" id="modal-bisnis" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Setting Total Matrik Prioritas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <label class="form-label">Masukkan Nilai Matrik Prioritas</label>
                    <input type="number" min="0" max="100" class="form-control" placeholder="0%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-penunjang-bisnis" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Setting Total Matrik Prioritas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <label class="form-label">Masukkan Nilai Matrik Prioritas</label>
                    <input type="number" min="0" max="100" class="form-control" placeholder="0%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
