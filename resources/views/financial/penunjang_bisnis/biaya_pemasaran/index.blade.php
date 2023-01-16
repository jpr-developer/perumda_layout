@extends('layout.general')

@section('content')

<!-- Menu Financial Start -->
@include('financial.layout.nav-menu')
<!-- Menu Financial End -->


@include('financial.penunjang_bisnis.layout.menu')


<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-9 mb-3">
                    <h2>Financial Penunjang Bisnis - Biaya Pemasaran</h2>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="row">
                        <div class="col-md-10 col-10">
                            <form action="">
                                <input type="search" class="form-control" placeholder="Cari uraian ...">
                            </form>
                        </div>
                        <div class="col-md-2 col-2">
                            <a href="#" class="btn btn-rss w-100 btn-icon" aria-label="Filter" data-bs-toggle="modal" data-bs-target="#modal-filter">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead class="card-table">
                                <th style="width: 5%" class="rounded-start">
                                    <div class="form-control">
                                        No
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        ID Financial Penunjang Bisnis
                                    </div>
                                </th>
                                <th style="width: 20%">
                                    <div class="form-control">
                                        Uraian
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Tanggal
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Nominal
                                    </div>
                                </th>
                                <th style="width: 10%" class="text-center rounded-end">
                                    <div class="form-control">
                                        Action
                                    </div>
                                </th>
                            </thead>
                            <tbody class="fs-3">
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control border border-0 fs-3">1</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">PR.12345678</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Biaya Penjualan Kopi</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Jumat, 30 Mei 2023</span>
                                    </td>
                                    <td>
                                        <span class="form-control border border-0 fs-3">Rp 50.000.000</span>
                                    </td>
                                    <td>
                                        <div style="width: 75%;">
                                            <a href="{{url('/financial/penunjang-bisnis/biaya-pemasaran/detail')}}" class="btn btn-dribbble form-control mx-3">View</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-blur fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Filter by Date - Biaya Pemasaran</h5>
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
</div>
@endsection
