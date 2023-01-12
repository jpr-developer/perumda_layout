@extends('layout.general')

@section('content')
<div class="col-md-12">
    <h1>PENDAPATAN LAIN BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/pendapatan_lain')}}" class="text-decoration-underline fs-2 fw-bold">Pendapatan Lain</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">TR.123456789</span>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3>Taggal : Selasa, 20 Mei 2022</h3>
            <h3>ID Pendapatan Lain : TR.123456789</h3>

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
                                Uraian
                            </div>
                        </th>
                        <th style="width: 15%">
                            <div class="form-control">
                                Sub Total
                            </div>
                        </th>
                        <th style="width: 15%" class="rounded-end">
                            <div class="form-control">
                                Keterangan
                            </div>
                        </th>
                    </thead>
                    <tbody class="fs-3">
                        <tr>
                            <td class="text-center">
                                <span class="form-control border border-0 fs-3">1</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Lorep</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Rp 550.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="form-control border border-0 fs-3">2</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Ipsum</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">Rp 1000.000</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="form-control border border-0 fs-3 fw-bold">TOTAL</span>
                            </td>
                            <td>
                                <span class="form-control border border-0 fs-3 fw-bold">Rp 1.550.000</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
