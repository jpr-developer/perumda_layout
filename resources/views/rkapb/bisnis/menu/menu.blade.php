<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <p>
                    <font class="fs-1 fw-bold">Program Bisnis</font> <br>
                    <span href="" class="">Data program bisnis</span>
                </p>
                <div>
                    <ul class="d-flex" style="list-style: none">
                        <li class="me-3 @if(Request::is('rkapb/program-bisnis/pendapatan-usaha')) text-decoration-underline @endif" >
                            <a href="{{url('/rkapb/program-bisnis/pendapatan-usaha')}}">Pendapatan Usaha</a>
                        </li>
                        <li class="me-3 @if(Request::is('rkapb/program-bisnis/harga-pokok-penjualan')) text-decoration-underline @endif">
                            <a href="{{url('/rkapb/program-bisnis/harga-pokok-penjualan')}}">Harga Pokok Penjualan</a>
                        </li>
                        <li class="me-3 @if(Request::is('rkapb/program-bisnis/laba-kotor-usaha')) text-decoration-underline @endif">
                            <a href="{{url('/rkapb/program-bisnis/laba-kotor-usaha')}}">Laba Kotor Usaha</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
