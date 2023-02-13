@extends('layout.general')

@section('content')
<!-- Menu KPI Start -->
@include('KPI.layout.nav-menu')
<!-- Menu KPI End -->

<div class="col-md-12 mb-3">
    <div class="card">
        <div class="card-body">
            <p>
                <font class="fs-1 fw-bold">Performa Indikator</font> <br>
            </p>
        </div>
    </div>
</div>

<div class="col-md-4 mb-3">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card shadow-sm" style="height: 19.8rem">
                <div class="card-body">
                    <h1 class="text-center">Skor Performa Indikator</h1>
                    <div class="d-flex justify-content-center mb-2">
                        <div style="height: 200px; width:200px;" class="border border-1 rounded-circle border-success">
                            <span style="font-size: 110pt" class="d-flex justify-content-center fw-bold">
                                A
                            </span>
                        </div>
                    </div>
                    <span class="d-flex justify-content-center">
                        Perusahaan dalam keadaan sehat
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Pendapatan Usaha</h3>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="45" height="45" viewBox="0 0 24 24" stroke-width="1" stroke="#2fb344" fill="#2fb344" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"></path>
                                </svg>
                                <div>
                                    <p class="lh-sm">
                                        <font class="fs-2 fw-bold">Rp. 25.000.000.000</font> <br>
                                        <small class="text-green">+20%</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="chart-active-users" class="chart-sm"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Harga Pokok Penjualan</h3>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="45" height="45" viewBox="0 0 24 24" stroke-width="2" stroke="#d63939" fill="#d63939" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 4h14a2 2 0 0 1 1.84 2.75l-7.1 12.25a2 2 0 0 1 -3.5 0l-7.1 -12.25a2 2 0 0 1 1.75 -2.75"></path>
                                </svg>
                                <div>
                                    <p class="lh-sm">
                                        <font class="fs-2 fw-bold">Rp. 29.000.000.000</font> <br>
                                        <small class="text-red">-20%</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="chart-revenue-bg" class="chart-sm"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Laba Kotor</h3>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="45" height="45" viewBox="0 0 24 24" stroke-width="2" stroke="#f59f00" fill="#f59f00" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                <div>
                                    <p class="lh-sm">
                                        <font class="fs-2 fw-bold">Rp. 25.000.000.000</font> <br>
                                        <small class="text-green">+20%</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="chart-3" class="chart-sm"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="col-md-8">
    <div class="row row-deck">
        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Scorecard Q3</h3>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tr>
                                <th>KPI</th>
                                <th>Actual</th>
                                <th>Target</th>
                                <th>Target %</th>
                                <th>Progress Indikator</th>
                            </tr>
                            <tbody>
                                <tr class="align-middle">
                                    <td>Pendapatan Usaha</td>
                                    <td>Rp 80.000.000</td>
                                    <td>Rp 100.000.000</td>
                                    <td>80%</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" aria-label="80% Complete">
                                                <small class="pt-1">80% Complete</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td>Pembelian</td>
                                    <td>Rp 80.000.000</td>
                                    <td>Rp 80.000.000</td>
                                    <td>100%</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" aria-label="80% Complete">
                                                <small class="pt-1">100% Complete</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td>Laba Kotor</td>
                                    <td>Rp 200.000.000</td>
                                    <td>Rp 400.000.000</td>
                                    <td>50%</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" style="width: 50%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" aria-label="80% Complete">
                                                <small class="pt-1">50% Complete</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2">
                        <h3>Program Kegiatan Bisnis</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="server-load" style="height:180px;"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#FC6180" fill="#FC6180" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                        </svg>
                                        <span>Kondisi Perusahaan Kurang Sehat</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#4680ff" fill="#4680ff" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                        </svg>
                                        <span>Kondisi Perusahaan Cukup Sehat</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#93BE52" fill="#93BE52" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                        </svg>
                                        <span>Kondisi Perusahaan Sangat Sehat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2">
                        <h3>Program Penunjang Bisnis</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="penunjang-bisnis" style="height:180px"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#FC6180" fill="#FC6180" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                        </svg>
                                        <span>Kondisi Perusahaan Kurang Sehat</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#4680ff" fill="#4680ff" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                        </svg>
                                        <span>Kondisi Perusahaan Cukup Sehat</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#93BE52" fill="#93BE52" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                        </svg>
                                        <span>Kondisi Perusahaan Sangat Sehat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2">
                        <h3>Penjualan Kopi</h3>
                    </div>
                    <div class="text-center">
                        <svg class="radial-progress indikator" data-percentage="60" viewBox="0 0 80 80">
                            <circle class="incomplete matrix-blue" cx="40" cy="40" r="35"></circle>
                            <circle class="complete matrix-blue" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">60% <br> Rp. 25.000.000.000</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2">
                        <h3>Pembelian Bahan</h3>
                    </div>
                    <div class="text-center">
                        <svg class="radial-progress indikator" data-percentage="80" viewBox="0 0 80 80">
                            <circle class="incomplete primary" cx="40" cy="40" r="35"></circle>
                            <circle class="complete primary" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">80% <br> Rp. 250.000.000</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2">
                        <h3>Transport</h3>
                    </div>
                    <div class="text-center">
                        <svg class="radial-progress indikator" data-percentage="90" viewBox="0 0 80 80">
                            <circle class="incomplete primary" cx="40" cy="40" r="35"></circle>
                            <circle class="complete primary" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90% <br> Rp. 10.000.000.000</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2">
                        <h3>Penjualan ATK</h3>
                    </div>
                    <div class="text-center">
                        <svg class="radial-progress indikator" data-percentage="100" viewBox="0 0 80 80">
                            <circle class="incomplete primary" cx="40" cy="40" r="35"></circle>
                            <circle class="complete primary" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">100% <br> Rp. 10.000.000.000</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('assets/dist/js/apexcharts/dist/apexcharts.min.js')}}"></script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
            chart: {
                type: "bar",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            plotOptions: {
                bar: {
                    columnWidth: '80%',
                }
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1,
            },
            series: [{
                name: "Profits",
                data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
            }],
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: ["#206bc4"],
            legend: {
                show: false,
            },
        })).render();
    });
    // @formatter:on
</script>

<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
            chart: {
                type: "area",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: .16,
                type: 'solid'
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "smooth",
            },
            series: [{
                name: "Profits",
                data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
            }],
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: ["#206bc4"],
            legend: {
                show: false,
            },
        })).render();
    });
    // @formatter:on
</script>

<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-3'), {
            chart: {
                type: "bar",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            plotOptions: {
                bar: {
                    columnWidth: '80%',
                }
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1,
            },
            series: [{
                name: "Profits",
                data: [100, 90, 100, 99, 20, 20, 20, 20, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
            }],
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: ["#206bc4"],
            legend: {
                show: false,
            },
        })).render();
    });
    // @formatter:on
</script>

{{-- Spedometer --}}
<script src="{{asset('assets/dist/js/echarts/js/echarts-all.js')}}"></script>
<script>
     var myChartGauge = echarts.init(document.getElementById('server-load'));

    var optionGauge = {

            tooltip : {
                formatter: "{b} : {c}%"
            },
            toolbox: {
                show : false,
                feature : {
                    mark : {show: false},
                    restore : {show: false},
                    saveAsImage : {show: false}
                }
            },
            series : [
                {
                    name:'Server Load',
                    type:'gauge',
                    center: ['50%', '50%'],
                    radius: ['0%', '100%'],
                    axisLine: {
                        show: true,
                        lineStyle: {
                            color: [
                                [0.2, '#FC6180'],
                                [0.8, '#4680ff'],
                                [1, '#93BE52']
                            ],
                            width: 10
                        }
                    }  ,
                    title: {
                        show : false,
                        offsetCenter: [0, '120%'],
                        textStyle: {
                            color: '#93BE52',
                            fontSize : 15
                        }
                    }  ,
                    detail: {
                        show : true,
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderWidth: 0,
                        borderColor: '#ccc',
                        width: 100,
                        height: 40,
                        offsetCenter: [0, '40%'],
                        formatter:'{value}%',
                        textStyle: {
                            color: 'auto',
                            fontSize : 20
                        }
                    },

                    data:[{value: 50, name: 'Server Load (MB)'}]
                }
        ]
    };

    gauge_load_chart(optionGauge);
    var timeTicket = setInterval(function (){

    gauge_load_chart(optionGauge);
    },1000);


    function gauge_load_chart(optionGauge){

        optionGauge.series[0].data[0].value = 60;
        myChartGauge.setOption(optionGauge,true);
    }
</script>
<script>
    var myChartGauge = echarts.init(document.getElementById('penunjang-bisnis'));

   var optionGauge = {

           tooltip : {
               formatter: "{b} : {c}%"
           },
           toolbox: {
               show : false,
               feature : {
                   mark : {show: false},
                   restore : {show: false},
                   saveAsImage : {show: true}
               }
           },
           series : [
               {
                   name:'Server Load',
                   type:'gauge',
                   center: ['50%', '50%'],
                   radius: ['0%', '100%'],
                   axisLine: {
                       show: true,
                       lineStyle: {
                           color: [
                               [0.2, '#FC6180'],
                               [0.8, '#4680ff'],
                               [1, '#93BE52']
                           ],
                           width: 10
                       }
                   }  ,
                   title: {
                       show : false,
                       offsetCenter: [0, '120%'],
                       textStyle: {
                           color: '#93BE52',
                           fontSize : 15
                       }
                   }  ,
                   detail: {
                       show : true,
                       backgroundColor: 'rgba(0,0,0,0)',
                       borderWidth: 0,
                       borderColor: '#ccc',
                       width: 100,
                       height: 40,
                       offsetCenter: [0, '40%'],
                       formatter:'{value}%',
                       textStyle: {
                           color: 'auto',
                           fontSize : 20
                       }
                   },

                   data:[{value: 50, name: 'Server Load (MB)'}]
               }
       ]
   };

   gauge_load_chart(optionGauge);
   var timeTicket = setInterval(function (){

   gauge_load_chart(optionGauge);
   },1000);


   function gauge_load_chart(optionGauge){

       optionGauge.series[0].data[0].value = 90;
       myChartGauge.setOption(optionGauge,true);
   }
</script>

{{-- Pie Chart Matrik Prioritas --}}
<script>
    $(function(){

        // Remove svg.radial-progress .complete inline styling
        $('svg.radial-progress').each(function( index, value ) {
            $(this).find($('circle.complete')).removeAttr( 'style' );
        });

        // Activate progress animation on scroll
        $(window).scroll(function(){
            $('svg.radial-progress').each(function( index, value ) {
                // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
                if (
                    $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                    $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
                ) {
                    // Get percentage of progress
                    percent = $(value).data('percentage');
                    // Get radius of the svg's circle.complete
                    radius = $(this).find($('circle.complete')).attr('r');
                    // Get circumference (2πr)
                    circumference = 2 * Math.PI * radius;
                    // Get stroke-dashoffset value based on the percentage of the circumference
                    strokeDashOffset = circumference - ((percent * circumference) / 100);
                    // Transition progress for 1.25 seconds
                    $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
                }
            });
        }).trigger('scroll');

    });
</script>
@endsection
