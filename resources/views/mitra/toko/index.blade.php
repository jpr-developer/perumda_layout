@extends('layout.general')
@section('title', 'Mitra Toko')

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
                <font class="fs-1 fw-bold">Mitra Toko</font> <br>
                <a href="" class="text-decoration-underline">Data mitra toko</a>
            </p>
        </div>
    </div>
</div>
@endsection
