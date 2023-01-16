<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <p>
                    <font class="fs-1 fw-bold">Financial Bisnis</font> <br>
                    <span href="" class="">Data financial bisnis</span>
                </p>
                <div>
                    <ul class="d-flex" style="list-style: none">
                        <li class="me-3 @if(Request::is('financial/bisnis/pendapatan-usaha*')) text-decoration-underline @endif" >
                            <a href="{{url('/financial/bisnis/pendapatan-usaha')}}">Pendapatan Usaha</a>
                        </li>
                        <li class="me-3 @if(Request::is('financial/bisnis/hpp*')) text-decoration-underline @endif">
                            <a href="{{url('/financial/bisnis/hpp')}}">Harga Pokok Penjualan</a>
                        </li>
                        <li class="me-3 @if(Request::is('financial/bisnis/laba-kotor*')) text-decoration-underline @endif">
                            <a href="{{url('/financial/bisnis/laba-kotor')}}">Laba Kotor Usaha</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
