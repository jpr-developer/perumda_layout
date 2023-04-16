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
            <li class="@if(Request::routeIs('dashboard')) active @endif">
                <a href="{{route('dashboard')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Dashboard_white.png')}}" alt="" class="icon">
                        <span class="name">Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::routeIs('employee*')) active @endif">
                <a href="{{route('employee.index')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Mitra_white.png')}}" alt="" class="icon">
                        <span class="name">Karyawan</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/mitra*')) active @endif">
                <a href="{{route('supplier.index')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/partner.png')}}" alt="" class="icon">
                        <span class="name">Mitra</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/products*')) active @endif">
                <a href="{{route('product.index')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Product_white.png')}}" alt="" class="icon">
                        <span class="name">Produk</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/warehouse*')) active @endif">
                <a href="{{route('warehouse.purchase')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/warehouse_white.png')}}" alt="" class="icon">
                        <span class="name">Pergudangan</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/penjualan*')) active @endif">
                <a href="{{url('dashboard/penjualan')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/penjualan_white.png')}}" alt="" class="icon">
                        <span class="name">Penjualan</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/pengiriman*')) active @endif">
                <a href="{{url('dashboard/pengiriman/permintaan')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Pengiriman_white.png')}}" alt="" class="icon">
                        <span class="name">Pengiriman</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/pendapatan_lain*')) active @endif">
                <a href="{{url('dashboard/pendapatan_lain')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/operasional.png')}}" alt="" class="icon">
                        <span class="name">Pendapatan Lain</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/operasional*')) active @endif">
                <a href="{{url('dashboard/operasional/bisnis')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/operasional.png')}}" alt="" class="icon">
                        <span class="name">Operasional</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/financial*')) active @endif">
                <a href="{{url('dashboard/financial/bisnis/pendapatan-usaha')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Financial_white.png')}}" alt="" class="icon">
                        <span class="name">Financial</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/rkapb*')) active @endif">
                <a href="{{url('dashboard/rkapb/program-bisnis/pendapatan-usaha')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/RKAB_white.png')}}" alt="" class="icon">
                        <span class="name">RKAP</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/kpi*')) active @endif">
                <a href="{{url('dashboard/kpi/performa_indikator')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/KPI_white.png')}}" alt="" class="icon">
                        <span class="name">KPI</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/jaminan-mutu*')) active @endif">
                <a href="{{url('dashboard/jaminan-mutu')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Quality_white.png')}}" alt="" class="icon">
                        <span class="name">Jaminan Mutu</span>
                    </div>
                </a>
            </li>
            <li class="@if(Request::is('dashboard/import-data*')) active @endif">
                <a href="{{route('import.index')}}" class="title">
                    <div class="mb-2 mt-2">
                        <img src="{{asset('assets/icon/Product_white.png')}}" alt="" class="icon">
                        <span class="name">Import Data</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Menu -->
</div>
