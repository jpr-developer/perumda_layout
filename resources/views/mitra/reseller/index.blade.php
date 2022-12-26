@extends('layout.general')
@section('title', 'Mitra Reseller')

@section('content')
<div class="col-md-12">
    <h1>MITRA BIDANG PERDAGANGAN</h1>
</div>
{{-- Include Nav Menu Start --}}
@include('mitra.layout.nav-menu')
{{-- Include Nav Menu End --}}
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">Mitra Reseller</font> <br>
                <a href="" class="text-decoration-underline">Data mitra reseller</a>
            </p>
        </div>
    </div>
</div>
@endsection
