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
                    <div class="card">
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
                                  <div id="visitor-chart" class="traffic-chart mt-4"></div>
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
    jQuery(document).ready(function($) {
        "use strict";

        // ===================== Visitor Card Hold Feature =====================
        let card = document.getElementById('visitor-card');
        let count = document.getElementById('visitor-count');
        let label = document.getElementById('visitor-label');

        let isHolding = false;
        let holdTimer;

        let today = {{ $data['todayVisitors'] }};
        let total = {{ $data['totalVisitors'] }};

        if (card && count && label) {
            card.addEventListener('mousedown', function () {
                isHolding = true;
                holdTimer = setTimeout(() => {
                    if (isHolding) {
                        count.classList.add('fade-text');
                        count.innerText = total;
                        label.innerText = "Total Visitor";
                    }
                }, 600);
            });

            document.addEventListener('mouseup', function () {
                if (isHolding) {
                    clearTimeout(holdTimer);
                    count.classList.remove('fade-text');
                    count.innerText = today;
                    label.innerText = "Visitor Hari Ini";
                    isHolding = false;
                }
            });
        }

            const labels = @json($data['chartLabels']);
    const data = @json($data['chartData']);

    var chart = new Chartist.Line('#traffic-chart', {
        labels: labels,
        series: [data]
    }, {
        low: 0,
        showArea: true,
        showLine: false,
        showPoint: false,
        fullWidth: true,
        axisX: {
            showGrid: true
        }
    });
});
</script>

@endsection
