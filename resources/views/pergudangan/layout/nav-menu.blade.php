<div class="col-md-12 mb-3">
    <h1>PERGUDANGAN BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <ul class="d-flex fs-3 fw-bolder" style="list-style: none; padding:0;margin:0;">
                <li class="me-4">
                    <a href="{{route('warehouse.purchase')}}" class="@if(Request::is('dashboard/warehouse/purchase*')) active-nav @else link-secondary @endif d-flex align-items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Pembelian</span>
                    </a>
                </li>
                <li class="me-4">
                    <a href="{{route('warehouse.stock')}}" class="@if(Request::is('dashboard/warehouse/stock*')) active-nav @else link-secondary @endif d-flex align-items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Stok</span>
                    </a>
                </li>
                <li class="me-4">
                    <a href="{{route('warehouse.opname')}}" class="d-flex align-items-center @if(Request::is('dashboard/warehouse/opname*')) active-nav @else link-secondary @endif">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Opname</span>
                    </a>
                </li>
                <li class="me-4">
                    <a href="{{route('warehouse.spoil')}}" class="d-flex align-items-center @if(Request::is('dashboard/warehouse/spoil*')) active-nav @else link-secondary @endif">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Spoil</span>
                    </a>
                </li>
                <li class="me-4">
                    <a href="{{route('warehouse.arus-produk')}}" class="d-flex align-items-center @if(Request::is('dashboard/warehouse/arus-produk*')) active-nav @else link-secondary @endif">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Arus Produk</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
