@extends('layout.general')
@section('title', 'Detail Karyawan')

@section('content')
<div class="col-md-12 mb-3">
    <h1>KARYAWAN BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/employee')}}" class="text-decoration-underline fs-2 fw-bold">Karyawan</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">Muhammad Fahruddin</span>
        </div>
    </div>
</div>
<div class="row row-deck">
    <div class="col-md-6 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 mb-3 text-center">
                        <img class="rounded-circle" src="{{asset('assets/static/avatars/000f.jpg')}}" alt="" height="200" width="200">
                    </div>
                    <div class="col-md-8 mb-3">
                        <h2>Muhammad Fahruddin</h2>
                        <span class="fs-3">Manager</span> <br>
                        <span class="fs-3">Karyawan Bidang Perdagangan</span>
                    </div>
                    <hr>
                    <table class="fs-3 table table-borderless">
                        <tr>
                            <td>Pendidikan</td>
                            <td class="text-end">Sarjana Ekonomi</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td class="text-end">Jl. Pemuda No.03</td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td class="text-end">Jepara, 20 Mei 1990</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td class="text-end">+62 8945 9878 4567</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="text-end">muhammadfahruddin@gmail.com</td>
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
                    <h2>Informasi Kepegawaian</h2>
                    <hr class="mt-1 mb-1">
                    <div class="table-responsive">
                        <table class="fs-3 table table-borderless">
                            <tr>
                                <td>No Induk Karyawan</td>
                                <td class="text-end">876788787687</td>
                            </tr>
                            <tr>
                                <td>Tanggal Bergabung</td>
                                <td class="text-end">20 Mei 2020</td>
                            </tr>
                            <tr>
                                <td>Posisi</td>
                                <td class="text-end">Bidang Perdangan</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td class="text-end">Manager</td>
                            </tr>
                            <tr>
                                <td>Status Kepegawaian</td>
                                <td class="text-end">Honorer</td>
                            </tr>
                            <tr>
                                <td>No Kontrak</td>
                                <td class="text-end">34398437532</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <h2>Hak Akses</h2>
                    <hr class="mt-1 mb-1">
                    <div class="table-responsive">
                        <table class="fs-3 table table-borderless">
                            <tr>
                                <td>Role User / Privilage</td>
                                <td class="text-end">Admin Perumda</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td class="text-end">Aktif</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
