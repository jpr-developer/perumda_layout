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
                <div class="title">
                    <a href="{{url('/')}}" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/Dashboard_white.png')}}" alt="" class="icon">
                        <span class="name">Dashboard</span>
                    </a>
                </div>
            </li>
            <li class="@if(Request::is('employee*')) active @endif">
                <div class="title">
                    <a href="{{url('/employee')}}" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/Mitra_white.png')}}" alt="" class="icon">
                        <span class="name">Karyawan</span>
                    </a>
                </div>
            </li>
            <li class="@if(Request::is('mitra*')) active @endif">
                <div class="title">
                    <a href="{{url('/mitra/supplier')}}" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/partner.png')}}" alt="" class="icon">
                        <span class="name">Mitra</span>
                    </a>
                </div>
            </li>
            <li class="@if(Request::is('products*')) active @endif">
                <div class="title">
                    <a href="{{url('/products')}}" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/Product_white.png')}}" alt="" class="icon">
                        <span class="name">Produk</span>
                    </a>
                </div>
            </li>
            <li class="@if(Request::is('warehouse*')) active @endif">
                <div class="title">
                    <a href="{{url('/warehouse/pemesanan')}}" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/warehouse_white.png')}}" alt="" class="icon">
                        <span class="name">Pergudangan</span>
                    </a>
                </div>
            </li>
            <li class="@if(Request::is('penjualan*')) active @endif">
                <div class="title">
                    <a href="{{url('/penjualan')}}" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/penjualan_white.png')}}" alt="" class="icon">
                        <span class="name">Penjualan</span>
                    </a>
                </div>
            </li>
            <li class="@if(Request::is('pengiriman*')) active @endif">
                <div class="title">
                    <a href="{{url('/pengiriman/permintaan')}}" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/Pengiriman_white.png')}}" alt="" class="icon">
                        <span class="name">Pengiriman</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="title">
                    <a href="" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/operasional.png')}}" alt="" class="icon">
                        <span class="name">Operasional</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="title">
                    <a href="" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/Financial_white.png')}}" alt="" class="icon">
                        <span class="name">Financial</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="title">
                    <a href="" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/RKAB_white.png')}}" alt="" class="icon">
                        <span class="name">RKAPB</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="title">
                    <a href="" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/KPI_white.png')}}" alt="" class="icon">
                        <span class="name">KPI</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="title">
                    <a href="" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/Quality_white.png')}}" alt="" class="icon">
                        <span class="name">Jaminan Mutu</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="title">
                    <a href="" class="link mb-2 mt-2">
                        <img src="{{asset('assets/icon/Kegiatan_white.png')}}" alt="" class="icon">
                        <span class="name">Kegiatan</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <!-- End Menu -->
</div>
