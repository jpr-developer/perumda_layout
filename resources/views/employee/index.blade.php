@extends('layout.general')
@section('title', 'Karyawan')

@section('content')
<div class="col-md-12 mb-3">
    <h1>KARYAWAN BIDANG PERDAGANGAN</h1>
</div>
<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">Karyawan</font> <br>
                <span>Data karyawan</span>
            </p>
        </div>
    </div>
</div>
<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-9 mb-3">
                    <h2>Data Karyawan Perdagangan</h2>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="row">
                        <div class="col-md-9 col-9">
                            <form action="">
                                <input type="search" onkeyup="searchEmployee()" class="form-control" id="keywords" placeholder="Cari karyawan ...">
                            </form>
                        </div>
                        <div class="col-md-3 col-3">
                            <div class="d-flex">
                                <a href="{{route('employee.export')}}" class="btn btn-success btn-icon me-1" title="Download">
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
                                        Nomor Induk Pegawai
                                    </div>
                                </th>
                                <th style="width: 25%">
                                    <div class="form-control">
                                        Nama Pegawai
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Posisi Pegawai
                                    </div>
                                </th>
                                <th style="width: 15%">
                                    <div class="form-control">
                                        Jabatan
                                    </div>
                                </th>
                                <th style="width: 10%" class="text-center rounded-end">
                                    <div class="form-control">
                                        Action
                                    </div>
                                </th>
                            </thead>

                            <tbody class="fs-3" id="tableEmployee">
                                @foreach ($employees as $result => $key)
                                    <tr>
                                        <td class="text-center">
                                            <span class="form-control border border-0 fs-3">{{$result + $employees->firstitem()}}</span>
                                        </td>
                                        <td>
                                            <span class="form-control border border-0 fs-3">{{$key->nip}}</span>
                                        </td>
                                        <td>
                                            <span class="form-control border border-0 fs-3">{{$key->name}}</span>
                                        </td>
                                        <td>
                                            <span class="form-control border border-0 fs-3">{{$key->position}}</span>
                                        </td>
                                        <td>
                                            <span class="form-control border border-0 fs-3">{{$key->job}}</span>
                                        </td>
                                        <td>
                                            <div style="width: 75%;">
                                                <a href="{{route('employee.detail', $key->nip)}}" class="btn btn-dribbble form-control mx-2">View</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="pagination">
                            {{$employees->appends(['filter_job' => $filter_job])->links()}}
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-blur fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Filter Jabatan Karyawan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('employee.index')}}" method="GET">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Filter berdasarkan jabatan karyawan</label>
                                        <select name="filter_job" id="" class="form-select">
                                            <option value="">All</option>
                                            <option value="komisaris"
                                                @if ($filter_job == 'komisaris')
                                                    selected
                                                @endif
                                            >Komisaris</option>
                                            <option value="staf"
                                            @if ($filter_job == 'staf')
                                                selected
                                            @endif
                                            >Staf</option>
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
    function searchEmployee()
    {
        var search = $("#keywords").val();

        if (search == "") {
            window.location.reload(true);
        }

        $.ajax({
                url: "{{route('employee.search')}}",
                data: {search:search},
                type: 'get',
                dataType: 'json',
                success: function(resp)
                {

                    var employee = resp.employees;
                    var html = "";

                    if (employee.length > 0) {
                            for (let i = 0; i < employee.length; i++) {
                                var no = i+1;
                                html += "<tr>\
                                            <td class='text-center'>\
                                                <span class='form-control border border-0 fs-3'>"+no+"</span>\
                                            </td>\
                                            <td>\
                                                <span class='form-control border border-0 fs-3'>"+employee[i]['nip']+"</span>\
                                            </td>\
                                            <td>\
                                                <span class='form-control border border-0 fs-3'>"+employee[i]['name']+"</span>\
                                            </td>\
                                            <td>\
                                                <span class='form-control border border-0 fs-3'>"+employee[i]['position']+"</span>\
                                            </td>\
                                            <td>\
                                                <span class='form-control border border-0 fs-3'>"+employee[i]['job']+"</span>\
                                            </td>\
                                            <td>\
                                                <div style='width: 75%;''>\
                                                    <a href='{{url('dashboard/employee/detail')}}/"+employee[i]['nip']+"' class='btn btn-dribbble form-control mx-2'>View</a>\
                                                </div>\
                                            </td>\
                                        </tr>"
                            }
                    } else {
                        html += "<tr>\
                                    <td class='text-center' colspan='6'>Data tidak ditemukan</td>\
                                </tr>"
                    }

                    $("#tableEmployee").html(html);
                    $("#pagination").hide();
                }
            });
    }
</script>
@endsection
