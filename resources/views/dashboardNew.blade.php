{{-- Memanggil file master yang di folder layouts --}}
@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halaman @yield('title')</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{ $jumlahAnggota }}</h3>
                            <p>Jumlah Anggota</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{ url('members') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $jumlahKerjaSama }}</h3>
                            <p>Jumlah Kerjasama</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-document"></i>
                        </div>
                        <a href="{{ url('cooperations') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $jumlahStatus[0]->jumlah }}</h3>
                            <p>Kerjasama Sedang Proses</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-refresh"></i>
                        </div>
                        <a href="{{ url('cooperations') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $jumlahStatus[1]->jumlah }}</h3>
                            <p>Kerjasama Disetujui</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-checkmark-circled"></i>
                        </div>
                        <a href="{{ url('cooperations') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <style>
                    .highcharts-figure,
                    .highcharts-data-table table {
                        min-width: 320px;
                        max-width: 800px;
                        margin: 1em auto;
                    }

                    .highcharts-data-table table {
                        font-family: Verdana, sans-serif;
                        border-collapse: collapse;
                        border: 1px solid #ebebeb;
                        margin: 10px auto;
                        text-align: center;
                        width: 100%;
                        max-width: 500px;
                    }

                    .highcharts-data-table caption {
                        padding: 1em 0;
                        font-size: 1.2em;
                        color: #555;
                    }

                    .highcharts-data-table th {
                        font-weight: 600;
                        padding: 0.5em;
                    }

                    .highcharts-data-table td,
                    .highcharts-data-table th,
                    .highcharts-data-table caption {
                        padding: 0.5em;
                    }

                    .highcharts-data-table thead tr,
                    .highcharts-data-table tr:nth-child(even) {
                        background: #f8f8f8;
                    }

                    .highcharts-data-table tr:hover {
                        background: #f1f7ff;
                    }

                    input[type="number"] {
                        min-width: 50px;
                    }
                </style>
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                <figure class="highcharts-figure">
                    <div id="container"></div>
                    {{-- <p class="highcharts-description">
                        Pie charts are very popular for showing a compact overview of a
                        composition or comparison. While they can be harder to read than
                        column charts, they remain a popular choice for small datasets.
                    </p> --}}
                </figure>
                <script>
                    Highcharts.chart('container', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: 'Jumlah Anggota MDP TV dalam Setiap Divisi'
                        },
                        tooltip: {
                            // pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            formatter: function() {
                                return '<b>' + this.point.name + ': ' + this.y + '</b>';
                            }
                        },
                        accessibility: {
                            point: {
                                valueSuffix: '%'
                            }
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    // format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                    formatter: function() {
                                        return '<b>' + this.point.name + ': ' + this.y + '</b>';
                                    }
                                }
                            }
                        },
                        series: [{
                            name: 'Brands',
                            colorByPoint: true,
                            data: [
                                @foreach ($anggotaPerDivisi as $item)
                                    {
                                        name: '{{ $item->nama_divisi }}',
                                        y: {{ $item->jumlah }}
                                    },
                                @endforeach
                            ]
                        }]
                    });
                </script>
            </div>
        </div>

        <div class="card-footer">

        </div>
    </div>
@endsection
