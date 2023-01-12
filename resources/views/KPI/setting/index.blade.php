@extends('layout.general')

@section('content')
<!-- Menu KPI Start -->
@include('KPI.layout.nav-menu')
<!-- Menu KPI End -->

<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h2>Program Kegiatan Bisnis</h2>
                </div>
                <div>
                    <h2>Skor Matrik Prioritas 0%</h2>
                </div>
                <div>
                    <span>
                        <button class="btn btn-success btn-icon" data-bs-toggle="modal" data-bs-target="#modal-bisnis">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2" colspan="4" class="align-middle" style="width:40%">Program Kegiatan Bisnis</th>
                        <th colspan="5" class="text-center">KPI Skor</th>
                        <th rowspan="3" class="align-middle text-center" style="width:30%">Keterangan</th>
                        <th rowspan="3" class="align-middle text-center" style="width:8%">Action</th>
                    </tr>
                    <tr class="text-center">
                        <th rowspan="2">
                            A <br>
                            > 90
                        </th>
                        <th rowspan="2">
                            B <br>
                            80 - 90
                        </th>
                        <th rowspan="2">
                            C <br>
                            70 - 80
                        </th>
                        <th rowspan="2">
                            D <br>
                            60 - 70
                        </th>
                        <th rowspan="2">
                            E <br>
                            60 >
                        </th>
                    </tr>
                    <tr class="align-middle">
                        <th style="width: 10%">Kategori Kegiatan</th>
                        <th style="width: 8%">Bobot Kategori</th>
                        <th>Kegiatan Bisnis</th>
                        <th>Bobot Kegiatan</th>
                    </tr>

                    <tbody>
                        <!-- Penjualan -->
                        <form action="">
                            <tr class="align-middle">
                                <td>Penjualan</td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" min="100">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" max="100">
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="A" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="B" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="C" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="D" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="E" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-dribbble">Add</a>
                                </td>
                            </tr>
                        </form>
                        <form action="">
                            <tr class="align-middle">
                                <td>Pembelian</td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" min="100">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" max="100">
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="A" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="B" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="C" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="D" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="E" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-dribbble">Add</a>
                                </td>
                            </tr>
                        </form>
                        <form action="">
                            <tr class="align-middle">
                                <td>Laba Kotor</td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" min="100">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" max="100">
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="A" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="B" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="C" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="D" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="E" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-dribbble">Add</a>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h2>Program Kegiatan Penunjang <br> Bisnis</h2>
                </div>
                <div>
                    <h2>Skor Matrik Prioritas 0%</h2>
                </div>
                <div>
                    <span>
                        <button class="btn btn-success btn-icon" data-bs-toggle="modal" data-bs-target="#modal-penunjang-bisnis">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr class="align-middle">
                        <th rowspan="2" colspan="4" class="align-middle" style="width:40%">Program Kegiatan Penunjang Bisnis</th>
                        <th colspan="5" class="text-center">KPI Skor</th>
                        <th rowspan="3" class="align-middle text-center" style="width:30%">Keterangan</th>
                        <th rowspan="3" class="align-middle text-center" style="width:8%">Action</th>
                    </tr>
                    <tr class="text-center align-middle">
                        <th rowspan="2">
                            A <br>
                            > 90
                        </th>
                        <th rowspan="2">
                            B <br>
                            80 - 90
                        </th>
                        <th rowspan="2">
                            C <br>
                            70 - 80
                        </th>
                        <th rowspan="2">
                            D <br>
                            60 - 70
                        </th>
                        <th rowspan="2">
                            E <br>
                            60 >
                        </th>
                    </tr>
                    <tr class="align-middle">
                        <th style="width: 10%">Kategori Kegiatan</th>
                        <th style="width: 8%">Bobot Kategori</th>
                        <th>Kegiatan Bisnis</th>
                        <th>Bobot Kegiatan</th>
                    </tr>

                    <tbody>
                        <form action="">
                            <tr class="align-middle">
                                <td>Biaya Pegawai</td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" min="100">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" max="100">
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="A" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="B" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="C" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="D" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="E" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-dribbble">Add</a>
                                </td>
                            </tr>
                        </form>
                        <form action="">
                            <tr class="align-middle">
                                <td>Biaya Kantor</td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" min="100">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" max="100">
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="A" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="B" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="C" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="D" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="E" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-dribbble">Add</a>
                                </td>
                            </tr>
                        </form>
                        <form action="">
                            <tr class="align-middle">
                                <td>Biaya Umum</td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" min="100">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" max="100">
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="A" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="B" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="C" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="D" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="E" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-dribbble">Add</a>
                                </td>
                            </tr>
                        </form>
                        <form action="">
                            <tr class="align-middle">
                                <td>Biaya Pemasaran</td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" min="100">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="form-control">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="form-control" min="0" max="100">
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="A" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="B" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="C" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="D" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="form-colorinput form-colorinput-light">
                                        <input name="kpi_skor" type="radio" value="E" class="form-colorinput-input" checked="">
                                        <span class="form-colorinput-color bg-white"></span>
                                    </label>
                                </td>
                                <td>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-dribbble">Add</a>
                                </td>
                            </tr>
                        </form>
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
