<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 col-4 dropdown">
                    <a href="#" class="@if(Request::is('warehouse/pengadaan*')) active-nav @else link-secondary @endif d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Pengadaan</span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item @if(Request::is('warehouse/pengadaan/pemesanan*')) dropdown-active @endif" href="{{url('/warehouse/pengadaan/pemesanan')}}">
                                    Pemesanan
                                </a>
                                <a class="dropdown-item @if(Request::is('warehouse/pengadaan/pembayaran*')) dropdown-active @endif" href="{{url('/warehouse/pengadaan/pembayaran')}}">
                                    Pembayaran
                                </a>
                                <a class="dropdown-item @if(Request::is('warehouse/pengadaan/retur*')) dropdown-active @endif" href="{{url('/warehouse/pengadaan/retur')}}">
                                    Retur
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <a href="#" class="@if(Request::is('warehouse/penyimpanan*')) active-nav @else link-secondary @endif d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Penyimpanan</span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item @if(Request::is('warehouse/penyimpanan/opname*')) dropdown-active @endif" href="{{url('/warehouse/penyimpanan/opname')}}">
                                    Opname
                                </a>
                                <a class="dropdown-item @if(Request::is('warehouse/penyimpanan/spoil*')) dropdown-active @endif" href="{{url('/warehouse/penyimpanan/spoil')}}">
                                    Spoil
                                </a>
                                <a class="dropdown-item @if(Request::is('warehouse/penyimpanan/penyesuaian*')) dropdown-active @endif" href="{{url('/warehouse/penyimpanan/penyesuaian')}}">
                                    Penyesuaian
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <a href="{{url('/mitra/store')}}" class="d-flex align-items-center @if(Request::is('mitra/store*')) active-nav @else link-secondary @endif">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Pengeluaran</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
