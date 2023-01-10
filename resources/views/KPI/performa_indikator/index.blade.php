@extends('layout.general')

@section('content')
<!-- Menu KPI Start -->
@include('KPI.layout.nav-menu')
<!-- Menu KPI End -->

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">Performa Indikator</font> <br>
            </p>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h2>Program Kegiatan Bisnis</h2>
            <div class="mb-3">
                <div class="d-flex mb-2">
                    <div class="fs-3">Penjualan Kopi</div>
                    <div class="ms-auto">
                      <span class="text-danger d-inline-flex align-items-center lh-1">
                        75%
                      </span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                      <span class="visually-hidden">75% Complete</span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex mb-2">
                    <div class="fs-3">ATK</div>
                    <div class="ms-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        100%
                      </span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-label="100% Complete">
                      <span class="visually-hidden">100% Complete</span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex mb-2">
                    <div class="fs-3">ATK</div>
                    <div class="ms-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        100%
                      </span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-label="100% Complete">
                      <span class="visually-hidden">100% Complete</span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex mb-2">
                    <div class="fs-3">Penjualan Kopi</div>
                    <div class="ms-auto">
                      <span class="text-danger d-inline-flex align-items-center lh-1">
                        75%
                      </span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                      <span class="visually-hidden">75% Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h2>Program Kegiatan Penunjang Bisnis</h2>
            <div class="mb-3">
                <div class="d-flex mb-2">
                    <div class="fs-3">Gaji Karyawan</div>
                    <div class="ms-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        100%
                      </span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-label="100% Complete">
                      <span class="visually-hidden">100% Complete</span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex mb-2">
                    <div class="fs-3">Biaya Kesejahteraan Pegawai</div>
                    <div class="ms-auto">
                      <span class="text-yellow d-inline-flex align-items-center lh-1">
                        90%
                      </span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90" aria-label="90% Complete">
                      <span class="visually-hidden">100% Complete</span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex mb-2">
                    <div class="fs-3">Gaji Karyawan</div>
                    <div class="ms-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        100%
                      </span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-label="100% Complete">
                      <span class="visually-hidden">100% Complete</span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex mb-2">
                    <div class="fs-3">Biaya Kesejahteraan Pegawai</div>
                    <div class="ms-auto">
                      <span class="text-yellow d-inline-flex align-items-center lh-1">
                        90%
                      </span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90" aria-label="90% Complete">
                      <span class="visually-hidden">100% Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
