@extends('layout.general')
@section('title', "Produk")

@section('content')
<div class="col-md-12">
    <h1>RKAPB BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">RKAPB</font> <br>
                <a href="" class="text-decoration-underline">Data RKAPB</a>
            </p>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="w-50" style="margin: auto">
                <h1 class="text-center">
                    PENJABARAN RENCANA KERJA ANGGARAN PENDAPATAN DAN BELANJA
                    PERUSAHAAN UMUM DAERAH  "ANEKA USAHA" KABUPATEN JEPARA  <br>
                    TAHUN 2023
                </h1>
            </div>
            <div class="d-flex justify-content-end mb-2">
                <a href="" class="btn btn-rss btn-icon" title="Filter Data">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5"></path>
                    </svg>
                </a>
            </div>
            <table class="table table-bordered">
                <tr class="align-middle text-center">
                    <th style="width: 5%">Kode Perkiraan</th>
                    <th style="width: 15%">Uraian</th>
                    <th style="width: 10%">RKAPB Tahun 2022</th>
                    <th style="width: 10%">Estimasi S/D Desember 2022</th>
                    <th style="width: 10%">RKAPB Tahun 2023</th>
                    <th style="width: 30%" colspan="7">Keterangan</th>
                </tr>
                <!-- Pendapatan -->
                @foreach ($rows as $row)
                    @if (isset($row[0]))
                            <tr class="
                                align-middle
                                @if ($row[2] == 'JUMLAH PENDAPATAN' or $row[2] == 'PENDAPATAN USAHA' or $row[2] == 'HARGA POKOK PENJUALAN')
                                    fw-bold
                                @endif
                            ">
                                <td>{{$row[1]}}</td>
                                <td>
                                {{$row[2]}}
                                </td>
                                <td>
                                {{$row[3]}}</td>
                                <td>{{$row[4]}}</td>
                                <td>{{$row[5]}}</td>
                                <td>{{$row[6]}}</td>
                                <td>{{$row[7]}}</td>
                                <td>{{$row[8]}}</td>
                                <td>{{$row[9]}}</td>
                                <td>{{$row[10]}}</td>
                                <td>{{$row[11]}}</td>
                                <td>{{$row[12]}}</td>
                            </tr>
                    @endif
                @endforeach
                {{-- <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">4,1,2</td>
                    <th>
                        PENDAPATAN USAHA
                    </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-center">4,1,2,1</td>
                    <td>Penerimaan Alat Tulis</td>
                    <td class="text-center">1,900,000,000</td>
                    <td class="text-center">1,548,682,452</td>
                    <td class="text-center">1,720,000,000</td>
                    <td>
                        143,333,333 x 12 bulan = 1,720,000,000
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-center">4,1,2,2</td>
                    <td>Penjualan Barang Lain</td>
                    <td class="text-center">0</td>
                    <td class="text-center">7,900,000</td>
                    <td class="text-center">0</td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-center align-middle">4,1,2,3</td>
                    <td class="align-middle">Penjualan Kopi</td>
                    <td class="text-center align-middle">1,532,640,000</td>
                    <td class="text-center align-middle">299,905,500</td>
                    <td class="text-center align-middle">2,055,250,000</td>
                    <td>
                        167,187,500 x 12 bulan = 2,006,250,000 ( Pihak ke 3) <br>
                        4,083,333 x	12 bulan = 49,000,000 (Umum) <br>
                        Total = 2,055,250,000
                    </td>
                </tr> --}}
            </table>
        </div>
    </div>
</div>
@endsection
