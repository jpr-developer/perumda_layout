@extends('layout.general')
@section('title', 'Mitra Supplier')

@section('content')
<div class="col-md-12 mb-3">
    <h1>MITRA BIDANG PERDAGANGAN</h1>
</div>
{{-- Include Nav Menu Start --}}
@include('mitra.layout.nav-menu')
{{-- Include Nav Menu End --}}

<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/mitra/supplier')}}" class="fs-2 fw-bold">Mitra Supplier</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <a href="{{route('supplier.detail', $code_sp)}}" class="fs-2 fw-bold">PT. Aston Putra</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">Detail Transaksi</span>
        </div>
    </div>
</div>

<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3>Taggal Transaksi : {{$transaction->getDateAttribute()}}</h3>
            <h3>ID Transaksi : {{$transaction->code}}</h3>

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
                        <th style="width: 15%">
                            <div class="form-control">
                                Sub Total
                            </div>
                        </th>
                    </thead>
                    <tbody class="fs-3">
                        @for ($i = 0; $i < count($transaction_details); $i++)
                            <tr>
                                <td class="text-center">
                                    <span class="form-control border border-0 fs-3">{{$i + 1}}</span>
                                </td>
                                <td>
                                    <span class="form-control border border-0 fs-3">{{$transaction_details[$i]['uraian']}}</span>
                                </td>
                                <td>
                                    <span class="form-control border border-0 fs-3">{{$transaction_details[$i]['qty']}} PCS</span>
                                </td>
                                <td>
                                    <span class="form-control border border-0 fs-3">RP {{number_format($transaction_details[$i]['unit_price'],0,',','.')}}</span>
                                </td>
                                <td>
                                    <span class="form-control border border-0 fs-3">
                                        RP {{number_format($transaction_details[$i]['qty']*$transaction_details[$i]['unit_price'], 0, ',','.')}}
                                    </span>
                                </td>
                            </tr>
                        @endfor
                        <tr>
                            <td colspan="4">
                                <span class="form-control border border-0 fs-3 fw-bold">TOTAL</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3 fw-bold">RP {{number_format($transaction->nominal, 0, ',', '.')}}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
