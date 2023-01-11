<div class="col-md-12">
    <h1>KPI BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <ul class="d-flex fs-3 fw-bolder" style="list-style: none; padding:0;margin:0">
                <li class="me-4">
                    <a href="{{url('/kpi/performa_indikator')}}" class="link-custome @if(Request::is('kpi/performa_indikator*')) active-nav @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                            <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                            <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                        </svg>
                        Performa Indikator
                    </a>
                </li>
                <li class="me-4">
                    <a href="{{url('/kpi/view')}}" class="link-custome @if(Request::is('kpi/view*')) active-nav @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                            <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                            <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                        </svg>
                        View
                    </a>
                </li>
                <li class="me-4">
                    <a href="{{url('/kpi/setting')}}" class="link-custome @if(Request::is('kpi/setting*')) active-nav @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                            <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                            <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                        </svg>
                        Setting
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
