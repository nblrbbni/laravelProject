<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Charts - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/demo.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="{{ asset('assets/dist/js/demo-theme.min.js') }}"></script>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="page-header d-print-none">
                    <h2 class="page-title">
                        Jumlah Arsip Masuk
                    </h2>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="chart-tasks-overview"></div>
                        </div>
                    </div>
                </div>
                <div class="page-header d-print-none">
                    <h2 class="page-title">
                        Jumlah Pengguna
                    </h2>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div id="chart-demo-pie"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/demo.min.js') }}" defer></script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-tasks-overview'), {
                chart: {
                    type: "bar",
                    fontFamily: 'inherit',
                    height: 320,
                    parentHeightOffset: 0,
                    toolbar: {
                        show: false,
                    },
                    animations: {
                        enabled: false
                    },
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: 1,
                },
                series: [{
                    name: "A",
                    data: [44, 32, 48, 72, 60, 16, 44, 32, 78, 50, 68, 34]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    padding: {
                        top: -20,
                        right: 0,
                        left: -4,
                        bottom: -4
                    },
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
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Juni', 'Juli', 'Agus', 'Septr',
                        'Okt', 'Nov', 'Des'
                    ],
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                colors: [tabler.getColor("primary")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-demo-pie'), {
                chart: {
                    type: "donut",
                    fontFamily: 'inherit',
                    height: 240,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                fill: {
                    opacity: 1,
                },
                series: [2, 5],
                labels: ['Admin', 'User'],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 2,
                },
                colors: [tabler.getColor("primary"), tabler.getColor(
                    "primary", 0.6)],
                legend: {
                    show: true,
                    position: 'bottom',
                    offsetY: 12,
                    markers: {
                        width: 10,
                        height: 10,
                        radius: 100,
                    },
                    itemMargin: {
                        horizontal: 8,
                        vertical: 8
                    },
                },
                tooltip: {
                    fillSeriesColor: false
                },
            })).render();
        });
        // @formatter:on
    </script>
</body>

</html>
