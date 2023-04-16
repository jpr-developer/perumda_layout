<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 col-4">
                    <a href="{{route('supplier.index')}}" class="@if(Request::is('dashboard/mitra/supplier*')) active-nav @else link-secondary @endif d-flex align-items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Mitra Supplier</span>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="{{route('reseller.index')}}" class="d-flex align-items-center @if(Request::is('dashboard/mitra/reseller*')) active-nav @else link-secondary @endif">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Mitra Reseller</span>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="{{route('store.index')}}" class="d-flex align-items-center @if(Request::is('dashboard/mitra/store*')) active-nav @else link-secondary @endif">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                            </svg>
                        </span>
                        <span class="fs-3 fw-bolder">Mitra Toko</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
