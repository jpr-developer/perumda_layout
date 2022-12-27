@extends('layout.general')
@section('title', 'Mitra Supplier')

@section('content')
<div class="col-md-12">
    <h1>MITRA BIDANG PERDAGANGAN</h1>
</div>
{{-- Include Nav Menu Start --}}
@include('mitra.layout.nav-menu')
{{-- Include Nav Menu End --}}

<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/mitra/supplier')}}" class="text-decoration-underline fs-2 fw-bold">Mitra Supplier</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">Muhammad Fahruddin</span>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-4 mb-3 text-center">
                    <img class="rounded-circle" src="{{asset('assets/static/avatars/000f.jpg')}}" alt="" height="200" width="200">
                </div>
                <div class="col-md-8 mb-3">
                    <h2>Muhammad Fahruddin</h2>
                    <span class="fs-3">Personal</span> <br>
                    <span class="fs-3">Mitra Supplier Bidang Perdagangan</span>
                </div>
                <hr>
                <table class="fs-3 table table-borderless">
                    <tr>
                        <td>Alamat</td>
                        <td class="text-end">Jl. Pemuda No.03</td>
                    </tr>
                    <tr>
                        <td>No Telepon Perusahaan</td>
                        <td class="text-end">(0291) 4564 4565</td>
                    </tr>
                    <tr>
                        <td>No Telepon Personal</td>
                        <td class="text-end">+62 8945 9878 4567</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td class="text-end">muhammadfahruddin@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td class="text-end">fahruddin.com</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-3">
                <h2>Business Data</h2>
                <hr class="mt-1 mb-1">
                <div class="table-responsive">
                    <table class="fs-3 table table-sm table-borderless">
                        <tr>
                            <td>Produk</td>
                            <td class="text-end">500 Produk</td>
                        </tr>
                        <tr>
                            <td style="width: 75%">
                                <select name="" id="" class="form-select">
                                    <option value="">List harga produk</option>
                                </select>
                            </td>
                            <td class="text-end">
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td class="text-end">+62 8945 9878 4567</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="text-end">muhammadfahruddin@gmail.com</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
