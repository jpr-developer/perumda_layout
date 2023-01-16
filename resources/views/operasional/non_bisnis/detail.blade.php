@extends('layout.general')
@section('content')

@include('operasional.layout.nav-menu')

<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/operasional/non-bisnis')}}" class="text-decoration-underline fs-2 fw-bold">Operasional Non Bisnis</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">TR.123456789</span>
        </div>
    </div>
</div>
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3>Taggal : Selasa, 20 Mei 2022</h3>
            <h3>ID Operasional Non Bisnis : TR.123456789</h3>

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
                                Operasional Non Bisnis
                            </div>
                        </th>
                        <th style="width: 10%">
                            <div class="form-control">
                                Keterangan
                            </div>
                        </th>
                        <th style="width: 5%">
                            <div class="form-control">
                                Sub Total
                            </div>
                        </th>
                    </thead>
                    <tbody class="fs-3">
                        <tr>
                            <td class="text-center">
                                <span class="form-control border border-0 fs-3">1</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Distribusi</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Beli Bensin</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Rp 100.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="form-control border border-0 fs-3">2</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Distribusi</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Beli Bensin</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Rp 150.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <span class="form-control border border-0 fs-3 fw-bold">TOTAL</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3 fw-bold">Rp 250.000</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
