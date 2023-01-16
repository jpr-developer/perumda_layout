@extends('layout.general')

@section('content')
@include('penjualan.layout.nav-menu')

<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/penjualan')}}" class="text-decoration-underline fs-2 fw-bold">Penjualan Produk</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">Kopi Rojoku Pouds</span>
        </div>
    </div>
</div>
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3>Taggal Transaksi : Selasa, 20 Mei 2022</h3>
            <h3>ID Transaksi : TR.123456789</h3>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="card-table">
                        <th style="width: 5%" class="rounded-start">
                            <div class="form-control">
                                No
                            </div>
                        </th>
                        <th style="width: 25%">
                            <div class="form-control">
                                Nama Produk
                            </div>
                        </th>
                        <th style="width: 5%">
                            <div class="form-control">
                                Quantity
                            </div>
                        </th>
                        <th style="width: 10%">
                            <div class="form-control">
                                Harga Satuan
                            </div>
                        </th>
                        <th style="width: 10%">
                            <div class="form-control">
                                Harga Jual
                            </div>
                        </th>
                        <th style="width: 15%">
                            <div class="form-control">
                                Sub Total
                            </div>
                        </th>
                        <th style="width: 15%" class="rounded-end">
                            <div class="form-control">
                                Profit Margin
                            </div>
                        </th>
                    </thead>
                    <tbody class="fs-3">
                        <tr>
                            <td class="text-center">
                                <span class="form-control border border-0 fs-3">1</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Kopi Rojoku Pouds</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">100 PCS</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 1.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 1.500</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 150.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 50.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="form-control border border-0 fs-3">2</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Kopi Rojoku Pouds</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">200 PCS</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 1.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 2.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 400.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">RP 200.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <span class="form-control border border-0 fs-3 fw-bold">TOTAL</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3 fw-bold">Rp 550.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3 fw-bold">RP 250.000</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                <h2>Informasi Lainnya</h2>
                <table class="table table-borderless fs-3">
                    <tr>
                        <td style="width: 40%">
                            Pembeli
                        </td>
                        <td>
                            : Agung Priyanto
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marketing Partner
                        </td>
                        <td>
                            : Hendrawan
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marketing Fee
                        </td>
                        <td>
                            : Rp 100.000
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Total Pendapatan Kotor
                        </td>
                        <td>
                            : Rp. 150.000
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
