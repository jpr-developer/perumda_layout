<div class="sidebar" id="getSidebar">
    <div class="side-top p-3">
        <div class="close d-flex justify-content-end" id="getClose">
            <img src="{{asset('assets/icon/close.png')}}" alt="">
        </div>
        <!-- Logo -->
        <a href="" class="logo-box">
            <div class="logo-brand d-flex justify-content-center">
                <img src="{{asset('assets/logo/logo.png')}}" alt="" class="">
            </div>
        </a>
        <!-- End Logo -->
    </div>

    <!-- Menu -->
    <div class="sidebar-group">
        <ul class="sidebar-list ">
            <li class="@if(Request::is('/')) active @endif">
                <a href="{{url('/')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Dashboard_white.png')}}" alt="" class="icon">
                        <span class="name">Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('employee*')) active @endif">
                <a href="{{url('/employee')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Mitra_white.png')}}" alt="" class="icon">
                        <span class="name">Karyawan</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('mitra*')) active @endif">
                <a href="{{url('/mitra/supplier')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/partner.png')}}" alt="" class="icon">
                        <span class="name">Mitra</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('products*')) active @endif">
                <a href="{{url('/products')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Product_white.png')}}" alt="" class="icon">
                        <span class="name">Produk</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('warehouse*')) active @endif">
                <a href="{{url('/warehouse/pemesanan')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/warehouse_white.png')}}" alt="" class="icon">
                        <span class="name">Pergudangan</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('penjualan*')) active @endif">
                <a href="{{url('/penjualan')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/penjualan_white.png')}}" alt="" class="icon">
                        <span class="name">Penjualan</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('pengiriman*')) active @endif">
                <a href="{{url('/pengiriman/permintaan')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Pengiriman_white.png')}}" alt="" class="icon">
                        <span class="name">Pengiriman</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('pendapatan_lain*')) active @endif">
                <a href="{{url('/pendapatan_lain')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/operasional.png')}}" alt="" class="icon">
                        <span class="name">Pendapatan Lain</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('operasional*')) active @endif">
                <a href="{{url('/operasional/bisnis')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/operasional.png')}}" alt="" class="icon">
                        <span class="name">Operasional</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('financial*')) active @endif">
                <a href="{{url('/financial/pendapatan_usaha')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Financial_white.png')}}" alt="" class="icon">
                        <span class="name">Financial</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('rkapb*')) active @endif">
                <a href="{{url('/rkapb/program-bisnis/pendapatan-usaha')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/RKAB_white.png')}}" alt="" class="icon">
                        <span class="name">RKAP</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('kpi*')) active @endif">
                <a href="{{url('/kpi/performa_indikator')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/KPI_white.png')}}" alt="" class="icon">
                        <span class="name">KPI</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Quality_white.png')}}" alt="" class="icon">
                        <span class="name">Jaminan Mutu</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('kegiatan*')) active @endif">
                <a href="{{url('/kegiatan')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Kegiatan_white.png')}}" alt="" class="icon">
                        <span class="name">Kegiatan</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Menu -->
</div>
