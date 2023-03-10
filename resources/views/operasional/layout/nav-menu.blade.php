<div class="col-md-12 mb-3">
    <h1>OPERASIONAL BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <ul class="d-flex fs-3 fw-bolder" style="list-style: none;padding:0;margin:0">
                <li class="me-4">
                    <a href="{{url('/operasional/bisnis')}}" class="link-custome @if(Request::is('operasional/bisnis*')) active-nav @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                            <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                            <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                        </svg>
                        Bisnis
                    </a>
                </li>
                <li class="me-4">
                    <a href="{{url('/operasional/non-bisnis')}}" class="link-custome @if(Request::is('operasional/non-bisnis*')) active-nav @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                            <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                            <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                        </svg>
                        Non Bisnis
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
