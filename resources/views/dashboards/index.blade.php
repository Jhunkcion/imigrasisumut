@extends('layouts.admin')

@section('title', 'Dashboard')

@section('breadcrumbs', 'Dashboard')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <style>
        .traffic-chart {
            min-height: 100px;
        }
    </style>
@endsection

@section('content')
        <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <a href="{{route('news.index', ['status' => 'publish'])}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="fa fa-file-o"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{$data ["publish"]}}</span></div>
                                            <div class="stat-heading">Berita Publish</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-12">
                    <a href="{{route('news.index', ['status'=>'draft'])}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="fa fa-clipboard"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{$data ["draft"]}}</span></div>
                                            <div class="stat-heading">Berita Draf</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card" id="visitor-card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count" id="visitor-count">{{ $data["todayVisitors"] }}</span></div>
                                         <div class="stat-heading" id="visitor-label">Visitor Hari Ini</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /Widgets -->

        <!--  Traffic  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Traffic </h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <!-- <canvas id="TrafficChart"></canvas>   -->
                                  <div id="visitor-chart" class="traffic-chart mt-4">
                                  </div>
                                </div>
                            </div>
                        </div> <!-- /.row -->
                        <div class="card-body"></div>
                    </div>
                </div><!-- /# column -->
            </div>
        <!--  /Traffic -->
@endsection

@section('script')

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>

    <style>
    #visitor-count {
        transition: all 0.3s ease-in-out;
    }

    .fade-text {
        color: #28a745 !important;
        font-weight: bold;
    }
</style>
<script>
    let chart;

    const initialLabels = @json($data['chartLabels']);
    const initialData = @json($data['chartData']);

    function renderChart(labels, data, range = 'month') {
    let chartWidth = '100%';

    // Tentukan lebar berdasarkan range
    if (range === 'day') {
        chartWidth = `${labels.length * 60}px`; // contoh: 7 hari * 60px = 420px
    } else if (range === 'week') {
        chartWidth = `${labels.length * 80}px`; // contoh: 6 minggu * 80px
    } else {
        chartWidth = '100%'; // default bulanan
    }

    // Set width DOM chart secara manual
    document.getElementById('visitor-chart').style.width = chartWidth;

    const options = {
        low: 0,
        showArea: true,
        showLine: true,
        showPoint: true,
        fullWidth: false, // <--- ini penting
        axisY: {
            onlyInteger: true,
            offset: 20
        },
        chartPadding: {
            right: 20
        },
        axisX: {
            showGrid: true,
            labelInterpolationFnc: function (value, index) {
                if (range === 'day' || range === 'week') {
                    return value;
                } else {
                    return index % 2 === 0 ? value : null;
                }
            }
        }
    };

    chart = new Chartist.Line('#visitor-chart', {
        labels: labels,
        series: [data]
    }, options);
}


    function updateChart(labels, data, range) {
        if (chart) {
            chart.update({
                labels: labels,
                series: [data]
            });
        } else {
            renderChart(labels, data, range);
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        renderChart(initialLabels, initialData, 'month');

        document.querySelectorAll('input[name="range"]').forEach(radio => {
            radio.addEventListener('change', function () {
                const range = this.value;
                fetch(`/dashboard/traffic-data?range=${range}`)
                    .then(res => res.json())
                    .then(result => {
                        updateChart(result.labels, result.data, range);
                    });
            });
        });
    });
</script>



@endsection
