@extends('layout.general')
@section('title', "Produk")

@section('content')
<div class="col-md-12 mb-3">
    <h1>PRODUK BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">Produk</font> <br>
                <span>Data produk</span>
            </p>
        </div>
    </div>
</div>
<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-9 mb-3">
                    <h2>Data Produk Perdagangan</h2>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="row">
                        <div class="col-md-7 col-7">
                            <form action="">
                                <input type="search" onkeyup="searchProduct()" class="form-control" id="keywords" placeholder="Cari produk ...">
                            </form>
                        </div>
                        <div class="col-md-5 col-5">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-danger btn-icon" title="Import" data-bs-toggle="modal" data-bs-target="#modal-import">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                        <polyline points="9 15 12 12 15 15"></polyline>
                                        <line x1="12" y1="12" x2="12" y2="21"></line>
                                    </svg>
                                </a>
                                <a href="{{route('product.export')}}" class="btn btn-success btn-icon" title="Download">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4"></path>
                                        <line x1="12" y1="13" x2="12" y2="22"></line>
                                        <polyline points="9 19 12 22 15 19"></polyline>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-rss btn-icon" title="Filter" data-bs-toggle="modal" data-bs-target="#modal-filter">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead class="card-table">
                                <th style="width: 5%" class="rounded-start">
                                    <div class="form-control">
                                        No
                                    </div>
                                </th>
                                <th style="width: 20%">
                                    <div class="form-control">
                                        ID Produk
                                    </div>
                                </th>
                                <th style="width: 25%">
                                    <div class="form-control">
                                        Nama Produk
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Kategori Produk
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Sub Kategori Produk
                                    </div>
                                </th>
                                <th style="width: 10%" class="text-center rounded-end">
                                    <div class="form-control">
                                        Action
                                    </div>
                                </th>
                            </thead>
                            <tbody class="fs-3" id="products">
                                @foreach ($products as $result => $key)
                                    <tr>
                                        <td class="text-center">
                                            <span class="form-control border border-0 fs-3">{{$result + $products->firstitem()}}</span>
                                        </td>
                                        <td>
                                            <span class="form-control border border-0 fs-3">{{$key->code}}</span>
                                        </td>
                                        <td>
                                            <span class="form-control border border-0 fs-3">{{$key->name}}</span>
                                        </td>
                                        <td>
                                            <span class="form-control border border-0 fs-3">{{$key->productCategory->name}}</span>
                                        </td>
                                        <td>
                                            <span class="form-control border border-0 fs-3">{{$key->productSubCategory->name}}</span>
                                        </td>
                                        <td>
                                            <div style="width: 75%;">
                                                <a href="{{route('product.detail', $key->code)}}" class="btn btn-dribbble form-control mx-2">View</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="pagination">
                            {{$products->appends(['product_category_id' => $filter])->links()}}
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-blur fade" id="modal-import" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Import Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('product.import')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Import produk</label>
                                        <input type="file" class="form-control" name="product_import">
                                        <small class="fw-bold">Type file .xlsx</small>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Import</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal modal-blur fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Filter Kategori Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('product.index')}}" method="GET">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Filter berdasarkan kategori</label>
                                        <select name="product_category_id" id="" class="form-select">
                                            <option value="">All</option>
                                            @foreach ($productCategories as $result)
                                                <option value="{{$result->id}}"
                                                    @if ($result->id == $filter)
                                                        selected
                                                    @endif
                                                >{{$result->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-rss">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        function searchProduct()
        {
            var search = document.getElementById('keywords').value;
            $.ajax({
                url:"{{route('product.search')}}",
                data: {search:search},
                type: 'get',
                dataType: 'json',
                success: function(resp)
                {
                    var products = resp.products;
                    var html = "";

                    if (products.length > 0) {
                        for (let i = 0; i < products.length; i++) {
                            var no = i+1;
                            html +=  "<tr>\
                                        <td class='text-center'>\
                                            <span class='form-control border border-0 fs-3'>"+no+"</span>\
                                        </td>\
                                        <td>\
                                            <span class='form-control border border-0 fs-3'>"+products[i]['code']+"</span>\
                                        </td>\
                                        <td>\
                                            <span class='form-control border border-0 fs-3'>"+products[i]['name']+"</span>\
                                        </td>\
                                        <td>\
                                            <span class='form-control border border-0 fs-3'>"+products[i]['product_category']+"</span>\
                                        </td>\
                                        <td>\
                                            <span class='form-control border border-0 fs-3'>"+products[i]['product_sub_category']+"</span>\
                                        </td>\
                                        <td>\
                                            <div style='width: 75%;'>\
                                                <a href='{{url('/product/detail')}}/"+products[i]['code']+"' class='btn btn-dribbble form-control mx-2'>View</a>\
                                            </div>\
                                        </td>\
                                    </tr>"

                        }
                    } else {
                        html += "<tr>\
                                    <td colspan='6' class='text-center'>Data tidak ditemukan</td>\
                                </tr>"
                    }

                    $("#products").html(html);
                    $("#pagination").hide();
                }
            });
        }
    </script>
@endsection
