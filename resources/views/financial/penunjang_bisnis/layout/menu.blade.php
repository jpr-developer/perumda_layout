<div class="col-md-12 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <p>
                    <font class="fs-1 fw-bold">Financial Penunjang Bisnis</font> <br>
                    <span href="" class="">Data financial penunjang bisnis</span>
                </p>
                <div>
                    <ul class="d-flex" style="list-style: none">
                        <li class="me-3 @if(Request::is('financial/penunjang-bisnis/biaya-pegawai*')) text-decoration-underline @endif">
                            <a href="{{url('/financial/penunjang-bisnis/biaya-pegawai')}}">Biaya Pegawai</a>
                        </li>
                        <li class="me-3 @if(Request::is('financial/penunjang-bisnis/biaya-kantor*')) text-decoration-underline @endif">
                            <a href="{{url('/financial/penunjang-bisnis/biaya-kantor')}}">Biaya Kantor</a>
                        </li>
                        <li class="me-3 @if(Request::is('financial/penunjang-bisnis/biaya-umum*')) text-decoration-underline @endif" >
                            <a href="{{url('/financial/penunjang-bisnis/biaya-umum')}}">Biaya Umum</a>
                        </li>
                        <li class="me-3 @if(Request::is('financial/penunjang-bisnis/biaya-pemasaran*')) text-decoration-underline @endif" >
                            <a href="{{url('/financial/penunjang-bisnis/biaya-pemasaran')}}">Biaya Pemasaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
