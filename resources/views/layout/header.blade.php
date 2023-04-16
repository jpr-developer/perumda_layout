<header class="navbar navbar-expand-md shadow-sm navbar-expand-sm navbar-light d-lg-flex d-print-none sticky-top">
    <div class="container-fluid">
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url({{asset('assets/static/avatars/002f.jpg')}})"></span>
                <div class="d-none d-xl-block ps-2">
                <div>Administrator</div>
                <div class="mt-1 small text-muted">Administrator</div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="{{route('home.screen')}}" class="dropdown-item">Kembali</a>
            </div>
            </div>
        </div>
        <div class="navbar-nav navbar-collapse" id="navbar-menu">
            <!-- Notification -->
            <div class="nav-item col-xl-auto me-3">
                <button class="btn btn-rss w-100 btn-icon rounded-circle toggle-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="4" y1="6" x2="20" y2="6"></line>
                        <line x1="4" y1="12" x2="20" y2="12"></line>
                        <line x1="4" y1="18" x2="20" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="nav-item  col-xl-auto">
                <a href="{{url('/dashboard')}}">
                    <img src="{{asset('assets/logo/logo.png')}}" alt="" height="40">
                </a>
            </div>
        </div>
    </div>
</header>
