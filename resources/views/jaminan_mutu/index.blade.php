@extends('layout.general')

@section('content')
<div class="col-md-12 mb-3">
    <h1>JAMINAN MUTU BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">Jaminan Mutu</font> <br>
                <span>Data jaminan mutu</span>
            </p>
        </div>
    </div>
</div>

<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h3>Jaminan Mutu Perusahaan</h3>
                <div>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4"></path>
                            <line x1="12" y1="13" x2="12" y2="22"></line>
                            <polyline points="9 19 12 22 15 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row row-deck mb-3">
                <div class="col-md-6 mb-2">
                    <table class="table table-borderless">
                        <tr>
                            <td style="width: 60%">Nama Perusahaan</td>
                            <td>: PERUMDA ANEKA USAHA JEPARA</td>
                        </tr>
                        <tr>
                            <td style="width: 60%">Nomor Perusahaan</td>
                            <td>: 324098324098324</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6 mb-2">
                    <table class="table table-borderless">
                        <tr>
                            <td style="width: 60%">Tahun</td>
                            <td>: 2023</td>
                        </tr>
                        <tr>
                            <td style="width: 60%">Bidang</td>
                            <td>: PERDAGANGAN</td>
                        </tr>
                    </table>
                </div>
            </div>
            <h3>Capaian Mutu Program Kegiatan Bisnis</h3>
            <table class="table table-bordered mb-3">
                <tr>
                    <th colspan="5">Penjualan : 20%</th>
                </tr>
                <tr>
                    <th>Kegiatan Bisnis</th>
                    <th>Bobot</th>
                    <th>KPI Skor</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>Penjualan Kopi</td>
                    <td>80</td>
                    <td>B</td>
                    <td>Cukup Bagus</td>
                </tr>
                <tr>
                    <td>Penerimaan Alat Tulis Kantor</td>
                    <td>80</td>
                    <td>B</td>
                    <td>Cukup Bagus</td>
                </tr>
                <tr>
                    <th colspan="5">Pembelian : 20%</th>
                </tr>
                <tr>
                    <th>Kegiatan Bisnis</th>
                    <th>Bobot</th>
                    <th>KPI Skor</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>Pembelian Kopi</td>
                    <td>80</td>
                    <td>B</td>
                    <td>Cukup Bagus</td>
                </tr>
                <tr>
                    <td>Pembelian Bahan Lain</td>
                    <td>80</td>
                    <td>B</td>
                    <td>Cukup Bagus</td>
                </tr>
            </table>
            <h3>Capaian Mutu Program Kegiatan Penunjang Bisnis</h3>
            <table class="table table-bordered mb-5">
                <tr>
                    <th colspan="5">Biaya Umum : 10%</th>
                </tr>
                <tr>
                    <th>Kegiatan Penunjang Bisnis</th>
                    <th>Bobot</th>
                    <th>KPI Skor</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>Gaji karyawan</td>
                    <td>100</td>
                    <td>A</td>
                    <td>Sangat Bagus</td>
                </tr>
                <tr>
                    <td>Biaya Kesejahteraan Pegawai</td>
                    <td>100</td>
                    <td>A</td>
                    <td>Sangat Bagus</td>
                </tr>
                <tr>
                    <th colspan="5">Biaya Kantor : 10%</th>
                </tr>
                <tr>
                    <th>Kegiatan Penunjang Bisnis</th>
                    <th>Bobot</th>
                    <th>KPI Skor</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>Biaya Perlengkapan Kantor</td>
                    <td>100</td>
                    <td>A</td>
                    <td>Sangat Bagus</td>
                </tr>
                <tr>
                    <td>Biaya Pos dan Telepon</td>
                    <td>100</td>
                    <td>A</td>
                    <td>Sangat Bagus Bagus</td>
                </tr>
            </table>
            <div class="d-flex justify-content-end">
                <p class="text-center">
                    Jepara, 24 Maret 2023 <br> <br> <br>
                    <span>
                        Andreas
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
