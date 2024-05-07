@extends('layouts.app')
@section('body')
    <style>
        canvas {
            height: 300px !important;
            
        }

        .card {
            margin: 0px 14px;
        }
    </style>
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Analytics
                    </h2>
                </div>
            </div>
            <div class="row mt-3 row-deck row-cards">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Employee</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mb-3">50</div>
                            <div class="d-flex mb-2">
                                <div>Progress Bar</div>
                                <div class="ms-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        8%
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 17l6 -6l4 4l8 -8"></path>
                                            <path d="M14 7l7 0l0 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 75%" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                    <span class="visually-hidden">75% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Job</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mb-3">30</div>
                            <div class="d-flex mb-2">
                                <div>Progress Bar</div>
                                <div class="ms-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        10%
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 17l6 -6l4 4l8 -8"></path>
                                            <path d="M14 7l7 0l0 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 30%" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                    <span class="visually-hidden">75% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Task</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-secondary" href="#"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7
                                            days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mb-3">28</div>
                            <div class="d-flex mb-2">
                                <div>Progress Bar</div>
                                <div class="ms-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        2%
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 17l6 -6l4 4l8 -8"></path>
                                            <path d="M14 7l7 0l0 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 30%" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="28% Complete">
                                    <span class="visually-hidden">75% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Finshed</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-secondary" href="#"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7
                                            days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mb-3">40</div>
                            <div class="d-flex mb-2">
                                <div>Progress Bar</div>
                                <div class="ms-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        30%
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 17l6 -6l4 4l8 -8"></path>
                                            <path d="M14 7l7 0l0 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 90%" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="28% Complete">
                                    <span class="visually-hidden">75% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            Paint Stok
                        </div>
                        <div class="card-body">
                            <canvas id="line-chart" class="w-100"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="card">
                        <div class="card-header">
                            Paint
                        </div>
                        <div class="card-body">
                            <canvas id="bar-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            Job
                        </div>
                        <div class="card-body">
                            <canvas id="pie-chart" class="m-auto"></canvas>
                        </div>
                    </div>
                </div>
                
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script>
       // line chart 
       var ctx = document.getElementById("line-chart").getContext('2d');


var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July' ],
        datasets: [{
            label: 'Paint Stok',
            data: [100,	390,50,300,202,39,100], 
            fill: false,
            borderColor: '#2196f3',
            backgroundColor: '#2196f3', 
            borderWidth: 1 
        }]},
    options: {
      responsive: true, 
      maintainAspectRatio: false, 
    }
});
        // Bar chart
        new Chart(document.getElementById("bar-chart"), {
            type: 'bar',
            data: {
                labels: ["Paint Brand", "Name & Code", "Cost", "Quantity", "Comment"],
                datasets: [{
                    label: "Paint",
                    backgroundColor: ["#206BC4", "#4299E1",
                        "#2FB344", "#F7BFAB", "#82CD47"
                    ],
                    data: [1490, 1300, 1000, 800, 750]
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Chart JS Bar Chart Example'
                }
            }
        });

        new Chart(document.getElementById("pie-chart"), {
        	type : 'pie',
        	data : {
        		labels : [ "Pendding", "Approve", "Total"],
        		datasets : [ {
        			backgroundColor : [ "yellow", "Green",
        					"#FF9D76" ],
        			data : [10, 20,30 ]
        		} ]
        	},
        	options : {
        		title : {
        			display : true,
        			text : 'Chart JS Pie Chart Example'
        		}
        	}
        });
       
    </script>
@endsection
