@extends('layout.general')

@section('content')
<!-- Menu KPI Start -->
@include('KPI.layout.nav-menu')
<!-- Menu KPI End -->

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h2>Program Kegiatan Bisnis</h2>
                </div>
                <div>
                    <h2>Skor Matrik Prioritas 60%</h2>
                </div>
                <div>
                    
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
                    <tr>
                        <th>Kategori Kegiatan</th>
                        <th>Bobot Kategori</th>
                        <th>Kegiatan Bisnis</th>
                        <th>Bobot Kegiatan</th>
                    </tr>

                    <tbody>
                        <!-- Penjualan -->
                        <tr>
                            <td rowspan="3" class="align-middle">Penjualan</td>
                            <td rowspan="3" class="align-middle text-center">20%</td>
                            <td class="text-center align-middle">ATK</td>
                            <td class="text-center align-middle">80</td>
                            <td></td>
                            <td class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Bobot kegiatan = ( 8.000.000 / 10.000.000 ) x 100 = 80%
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-dribbble">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">Kopi</td>
                            <td class="text-center align-middle">100</td>
                            <td class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-dribbble">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">Air</td>
                            <td class="text-center align-middle">100</td>
                            <td class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-dribbble">View</a>
                            </td>
                        </tr>
                        <!-- Pembelian -->
                        <tr>
                            <td rowspan="3" class="align-middle">Pembelian</td>
                            <td rowspan="3" class="align-middle text-center">20%</td>
                            <td class="text-center align-middle">ATK</td>
                            <td class="text-center align-middle">100</td>
                            <td class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-dribbble">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">Kopi</td>
                            <td class="text-center align-middle">100</td>
                            <td class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-dribbble">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">Air</td>
                            <td class="text-center align-middle">100</td>
                            <td class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-dribbble">View</a>
                            </td>
                        </tr>
                        <!-- Laba Kotor -->
                        <tr>
                            <td rowspan="3" class="align-middle">Laba Kotor</td>
                            <td rowspan="3" class="align-middle text-center">20%</td>
                            <td class="text-center align-middle">ATK</td>
                            <td class="text-center align-middle">100</td>
                            <td class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-dribbble">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">Kopi</td>
                            <td class="text-center align-middle">100</td>
                            <td class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-dribbble">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">Air</td>
                            <td class="text-center align-middle">100</td>
                            <td class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-dribbble">View</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Total KPI</th>
                            <th class="text-center">60%</th>
                            <th></th>
                            <th class="text-center">58.66%</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
