<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 col-4">
                    <a href="{{url('/warehouse/pemesanan')}}" class="@if(Request::is('warehouse/pemesanan*')) active-nav @else link-secondary @endif d-flex align-items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Pemesanan</span>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="{{url('/warehouse/stock')}}" class="@if(Request::is('warehouse/stock*')) active-nav @else link-secondary @endif d-flex align-items-center">
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
                </div>
                <div class="col-md-2 col-4">
                    <a href="{{url('/warehouse/opname')}}" class="d-flex align-items-center @if(Request::is('warehouse/opname*')) active-nav @else link-secondary @endif">
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
                </div>
                <div class="col-md-2 col-4">
                    <a href="{{url('/warehouse/spoil')}}" class="d-flex align-items-center @if(Request::is('warehouse/spoil*')) active-nav @else link-secondary @endif">
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
                </div>
                <div class="col-md-2 col-4">
                    <a href="{{url('/warehouse/arus-distribusi')}}" class="d-flex align-items-center @if(Request::is('warehouse/arus-distribusi*')) active-nav @else link-secondary @endif">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Arus Distribusi</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
