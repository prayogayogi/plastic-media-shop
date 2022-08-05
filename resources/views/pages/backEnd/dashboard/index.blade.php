@extends("layouts.app-custome")

@section("title", "Dashboard")

@section("content")
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            @include("pages.backEnd.dashboard._statistics")
        </div>

        <div class="row">
            <div class="col-xl-8 col-md-12">
                <!-- Sales Graph -->
                @include("pages.backEnd.dashboard._salesGraph")
            </div>

            <div class="col-xl-4 col-md-12">
                <!-- Doughnut Chart -->
                @include("pages.backEnd.dashboard._doughnut")
            </div>
        </div>
    </div>
@endsection

@push('after-script')
<script src='{{ asset("assets-backEnd/plugins/charts/Chart.min.js") }}'></script>
<script src='{{ asset("assets-backEnd/js/chart.js") }}'></script>

<script>
    var ctx = document.getElementById("linechart");
    if (ctx !== null) {
        var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: "line",

        // The data for our dataset
        data: {
            labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec"
            ],
            datasets: [
            {
                label: "",
                backgroundColor: "transparent",
                borderColor: "rgb(82, 136, 255)",
                data: [
                100,
                11000,
                10000,
                14000,
                11000,
                17000,
                14500,
                18000,
                5000,
                23000,
                14000,
                19000,
                ],
                lineTension: 0.3,
                pointRadius: 5,
                pointBackgroundColor: "rgba(255,255,255,1)",
                pointHoverBackgroundColor: "rgba(255,255,255,1)",
                pointBorderWidth: 2,
                pointHoverRadius: 8,
                pointHoverBorderWidth: 1
            }
            ]
        },

        // Configuration options go here
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
            display: false
            },
            layout: {
            padding: {
                right: 10
            }
            },
            scales: {
            xAxes: [
                {
                gridLines: {
                    display: false
                }
                }
            ],
            yAxes: [
                {
                gridLines: {
                    display: true,
                    color: "#eee",
                    zeroLineColor: "#eee",
                },
                ticks: {
                    callback: function(value) {
                    var ranges = [
                        { divider: 1e6, suffix: "M" },
                        { divider: 1e4, suffix: "k" }
                    ];
                    function formatNumber(n) {
                        for (var i = 0; i < ranges.length; i++) {
                        if (n >= ranges[i].divider) {
                            return (
                            (n / ranges[i].divider).toString() + ranges[i].suffix
                            );
                        }
                        }
                        return n;
                    }
                    return formatNumber(value);
                    }
                }
                }
            ]
            },
            tooltips: {
            callbacks: {
                title: function(tooltipItem, data) {
                return data["labels"][tooltipItem[0]["index"]];
                },
                label: function(tooltipItem, data) {
                return "$" + data["datasets"][0]["data"][tooltipItem["index"]];
                }
            },
            responsive: true,
            intersect: false,
            enabled: true,
            titleFontColor: "#888",
            bodyFontColor: "#555",
            titleFontSize: 12,
            bodyFontSize: 18,
            backgroundColor: "rgba(256,256,256,0.95)",
            xPadding: 20,
            yPadding: 10,
            displayColors: false,
            borderColor: "rgba(220, 220, 220, 0.9)",
            borderWidth: 2,
            caretSize: 10,
            caretPadding: 15
            }
        }
        });
    }
</script>

@endpush
