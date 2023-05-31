@extends('ManageSpecialIncentiveView.Admin.base')
@section('ManageSpecialIncentiveView.Admin.AdminMainPageView')

<div class="header">
    <h1 class="header-title">
        Admin Overview
    </h1>
    {{-- <p class="header-subtitle">Your bounce rate increased by 5.25% over the past 30 days.</p> --}}
</div>

<div class="row">
    <div class="col-xl-6 col-xxl-5 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Pemohon</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-2 mb-4">2,562</h1>
                            <div class="mb-0">
                                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                Kurang pemohon dari kebiasaan
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Aktiviti</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle" data-feather="activity"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-2 mb-4">17.212</h1>
                            <div class="mb-0">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>
                                Lebih Aktiviti dari kebiasaan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Permohonan</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle" data-feather="external-link"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-2 mb-4">24,300</h1>
                            <div class="mb-0">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>
                                Lebih permohonan dari kebiasaan
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Remisi</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-2 mb-4">43</h1>
                            <div class="mb-0">
                                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
                                Kurang remisi dari kebiasaan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-xxl-7 d-flex">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <div class="card-actions float-end">
                    <a href="#" class="me-1">
                        <i class="align-middle" data-feather="refresh-cw"></i>
                    </a>
                    <div class="d-inline-block dropdown show">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="align-middle" data-feather="more-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Jenis Bil Tuntutan</h5>
            </div>
            <div class="card-body px-4">
                
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdivPie");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
var chart = root.container.children.push(am5percent.PieChart.new(root, {
  layout: root.verticalLayout,
  innerRadius: am5.percent(50)
}));


// Create series
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
var series = chart.series.push(am5percent.PieSeries.new(root, {
  valueField: "value",
  categoryField: "category",
  alignLabels: false
}));

series.labels.template.setAll({
  textType: "circular",
  centerX: 0,
  centerY: 0
});


// Set data
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
series.data.setAll([
  { value: 10, category: "Bil Tuntutan Keluaran" },
  { value: 9, category: "Bil Tuntutan Batal" },
  { value: 6, category: "Bil Tuntutan Pinda" },
]);


// Create legend
// https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
var legend = chart.children.push(am5.Legend.new(root, {
  centerX: am5.percent(50),
  x: am5.percent(50),
  marginTop: 15,
  marginBottom: 15,
}));

legend.data.setAll(series.dataItems);


// Play initial series animation
// https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
series.appear(1000, 100);

}); // end am5.ready()
</script>

<!-- HTML -->
<div id="chartdivPie"></div>

            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12 col-lg-7 col-xl-8 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <div class="card-actions float-end">
                    <a href="#" class="me-1">
                        <i class="align-middle" data-feather="refresh-cw"></i>
                    </a>
                    <div class="d-inline-block dropdown show">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="align-middle" data-feather="more-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Jumlah permohonan</h5>
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = [{
  "month": "Januari",
  "visits": 2025
}, {
  "month": "Februari",
  "visits": 1882
}, {
  "month": "Mac",
  "visits": 1809
}, {
  "month": "April",
  "visits": 1322
}, {
  "month": "Mei",
  "visits": 1122
}, {
  "month": "Jun",
  "visits": 1114
}, {
  "month": "July",
  "visits": 984
}, {
  "month": "Ogos",
  "visits": 711
}, {
  "month": "September",
  "visits": 665
}, {
  "month": "Oktober",
  "visits": 580
}, {
  "month": "November",
  "visits": 443
}, {
  "month": "Disember",
  "visits": 441
}];

// Create axes

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "month";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 30;

categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
  if (target.dataItem && target.dataItem.index & 2 == 2) {
    return dy + 25;
  }
  return dy;
});

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.valueY = "visits";
series.dataFields.categoryX = "month";
series.name = "Visits";
series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
series.columns.template.fillOpacity = .8;

var columnTemplate = series.columns.template;
columnTemplate.strokeWidth = 2;
columnTemplate.strokeOpacity = 1;

}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-5 col-xl-4 d-flex">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <div class="card-actions float-end">
                    <a href="#" class="me-1">
                        <i class="align-middle" data-feather="refresh-cw"></i>
                    </a>
                    <div class="d-inline-block dropdown show">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="align-middle" data-feather="more-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Jenis permohonan</h5>
            </div>
            <div class="card-body d-flex">
                <div class="align-self-center w-100">
                    <div class="py-3">
                        <div class="chart chart-xs">
                            <canvas id="chartjs-dashboard-pie"></canvas>
                        </div>
                    </div>

                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle text-primary fa-fw"></i> Permohonan 1</td>
                                <td class="text-end">4401</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-warning fa-fw"></i> Permohonan 2</td>
                                <td class="text-end">4003</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-danger fa-fw"></i> Permohonan 3</td>
                                <td class="text-end">1589</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: 'pie',
				data: {
					labels: ["Permohonan 1", "Permohonan 2", "Permohonan 3", "Other"],
					datasets: [{
						data: [4401, 4003, 1589],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							"#E8EAED"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			$("#datatables-dashboard-traffic").DataTable({
				pageLength: 7,
				lengthChange: false,
				bFilter: false,
				autoWidth: false,
				order: [
					[1, "desc"]
				]
			});
		});
	</script>





@stop