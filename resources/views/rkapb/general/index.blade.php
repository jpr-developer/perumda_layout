@extends('layout.general')

@section('content')

<!-- Menu RKAPB Start -->
@include('rkapb.layout.nav-menu')
<!-- Menu RKAPB End -->


<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">RKAPB</font> <br>
                <span href="" class="">Data RKAPB</span>
            </p>
        </div>
    </div>
</div>
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
           <div class="row">
                <div class="col-md-3 col-2">

                </div>
                <div class="col-md-6 col-8">
                    <h2 class="text-center">
                        PENJABARAN <br>
                        RENCANA KERJA ANGGARAN PENDAPATAN DAN BELANJA
                        PERUSAHAAN UMUM DAERAH "ANEKA USAHA" KABUPATEN JEPARA <br>
                        TAHUN 2023
                    </h2>
                </div>
                <div class="col-md-3 col-2">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-icon btn-rss" data-bs-toggle="modal" data-bs-target="#modal-filter">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="align-middle">
                                <th style="width: 3%" class="text-center">No</th>
                                <th>Kode Perkiraan</th>
                                <th style="width: 15%">Uraian</th>
                                <th style="width: 15%">RKAPB Tahun 2022</th>
                                <th style="width: 15%">Estimasi s/d Desember 2022</th>
                                <th style="width: 15%">RKAPB 2023</th>
                                <th style="width: 20%">Keterangan</th>
                            </tr>
                            <tbody>
                                <!-- Pendapatan Usaha -->
                                <tr class="align-middle">
                                    <td class="text-center">1</td>
                                    <td>4,2,1</td>
                                    <td colspan="5">
                                        <span class="fw-bold">PENDAPATAN USAHA</span>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td></td>
                                    <td>4,2,1,1</td>
                                    <td>Penerimaan Alat Tulis kantor</td>
                                    <td>Rp 1.900.000.000</td>
                                    <td>
                                        Rp 1.548.682.452
                                    </td>
                                    <td>
                                        Rp 1.720.000.000
                                    </td>
                                    <td>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td></td>
                                    <td>4,2,1,2</td>
                                    <td>Penjualan Barang Lain</td>
                                    <td>Rp 0</td>
                                    <td>
                                        Rp 7.900.000
                                    </td>
                                    <td>
                                        Rp 0
                                    </td>
                                    <td>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td></td>
                                    <td>4,2,1,3</td>
                                    <td>Penjualan Kopi</td>
                                    <td>
                                        Rp 1.532.640.000
                                    </td>
                                    <td>
                                        Rp 299.905.500
                                    </td>
                                    <td>
                                        Rp 2.055.250.000
                                    </td>
                                    <td>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td></td>
                                    <td>4,2,1,4</td>
                                    <td>Penjualan Air Mineral Dalam Kemasan</td>
                                    <td>
                                        Rp 602.190.000
                                    </td>
                                    <td>
                                        Rp 583.380.541
                                    </td>
                                    <td>
                                        Rp 900.000.000
                                    </td>
                                    <td>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </td>
                                </tr>
                                <!-- HPP -->
                                <tr class="align-middle">
                                    <td class="text-center">2</td>
                                    <td>5,1</td>
                                    <td colspan="5">
                                        <span class="fw-bold">HARGA POKOK PENJUALAN</span>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td></td>
                                    <td>5,1,1</td>
                                    <td>Pembelian Alat Tulis Kantor</td>
                                    <td>Rp 1.463.000.000</td>
                                    <td>
                                        1.037.664.532
                                    </td>
                                    <td>
                                        Rp 1.376.000.000
                                    </td>
                                    <td>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td></td>
                                    <td>5,1,2</td>
                                    <td>Pembelian Barang lain</td>
                                    <td>Rp 0</td>
                                    <td>
                                        Rp07.900.000
                                    </td>
                                    <td>
                                        Rp 0
                                    </td>
                                    <td>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td></td>
                                    <td>5,1,3</td>
                                    <td>Transport ATK</td>
                                    <td>
                                        Rp 3.000.000
                                    </td>
                                    <td>
                                        Rp 2.390.208
                                    </td>
                                    <td>
                                        Rp 2.500.000
                                    </td>
                                    <td>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
           </div>

           <!-- Modal -->
           <div class="modal modal-blur fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Filter RKAPB</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Pilih Tahun</label>
                                <select name="" id="" class="form-select">
                                    <option value="">2023</option>
                                    <option value="">2022</option>
                                    <option value="">2021</option>
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
@endsection
