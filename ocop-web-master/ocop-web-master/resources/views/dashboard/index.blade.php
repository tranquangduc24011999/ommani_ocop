@extends('master')
@section('content')
<link href="{{ asset('css/float-chart.css') }}" rel="stylesheet">
<style>
    text {
        font-weight: normal !important;
    }

    svg text {
        font-size: 10px !important;
    }

    #server-donut svg text {
        font-size: 6px !important;
    }

    #server-donut tspan {
        font-size: 6px !important;
    }
</style>
<style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    @keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
    }
</style>
<style type="text/css">
    .jqstooltip {
        position: absolute;
        left: 0px;
        top: 0px;
        visibility: hidden;
        background: rgb(0, 0, 0) transparent;
        background-color: rgba(0, 0, 0, 0.6);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
        color: white;
        font: 10px arial, san serif;
        text-align: left;
        white-space: nowrap;
        padding: 5px;
        border: 1px solid white;
        z-index: 10000;
    }

    .jqsfield {
        color: white;
        font: 10px arial, san serif;
        text-align: left;
    }
</style>
<div class="page-wrapper" style="min-height: 954px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Thống kê</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"> </a></li> -->
                        <!-- <li class="breadcrumb-item active">Thống kê</li> -->
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box Content -->
        <!-- ============================================================== -->
        <a href="#" title="Thêm từ file excel" style="display: none;"><label for="fileUploader">Thêm từ
                excel</label></a>
        <input type="file" id="fileUploader" name="fileUploader" accept=".xls, .xlsx" style="visibility: hidden">
        <div class="row" style="display: none;">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hồ sơ</h5>
                        <div class="text-center m-t-20 m-b-20">
                            <h2><i class="icon-doc"></i><span class="text-success" id="fileNumber">121</span></h2>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chủ thể Ocop</h5>
                        <div class="text-center m-t-20 m-b-20">
                            <h2><i class="icon-user"></i> <span class="text-purple" id="ocopNumber">77</span></h2>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hồ sơ hoàn thành</h5>
                        <div class="text-center m-t-20 m-b-20">
                            <h2><i class=" icon-docs" style="margin-right: 7px;"></i><span class="text-info"
                                    id="completedNumber">52</span></h2>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Đã chấm</h5>
                        <div class="text-center m-t-20 m-b-20">
                            <h2><i class="icon-note" style="margin-right: 7px;"></i><span class="text-danger"
                                    id="markedNumber">26</span></h2>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
        </div>

        <div class="row" style="display: none;">
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tổng số hồ sơ đã nộp</h4>
                        <div>
                            <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                                class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="chart2" style="display: block; height: 352px; width: 704px;"
                                class="chartjs-render-monitor" width="1408" height="704"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Chủ thể Ocop</h4>
                        <div id="morris-donut-chart"><svg height="342" version="1.1" width="704"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                style="overflow: hidden; position: relative; left: -0.5px; top: -0.200012px;">
                                <desc>Created with Raphaël 2.2.0</desc>
                                <defs></defs>
                                <path style="opacity: 1;" fill="none" stroke="#009efb"
                                    d="M351.75,278.3333333333333A107.33333333333333,107.33333333333333,0,1,0,335.0448102725263,64.9746205825532"
                                    stroke-width="2" opacity="1"></path>
                                <path style="" fill="#009efb" stroke="#ffffff"
                                    d="M351.75,281.3333333333333A110.33333333333333,110.33333333333333,0,1,0,334.5778950316963,62.0111783006991L326.6922154087895,11.9619308738298A161,161,0,1,1,351.75,332Z"
                                    stroke-width="3"></path>
                                <path style="opacity: 0;" fill="none" stroke="#55ce63"
                                    d="M335.0448102725263,64.9746205825532A107.33333333333333,107.33333333333333,0,0,0,247.96936359022067,198.38656515201617"
                                    stroke-width="2" opacity="0"></path>
                                <path style="" fill="#55ce63" stroke="#ffffff"
                                    d="M334.5778950316963,62.0111783006991A110.33333333333333,110.33333333333333,0,0,0,245.06866257255604,199.1520281531595L200.91354708143874,210.8040760594521A156,156,0,0,1,327.47040747683945,16.901001343586643Z"
                                    stroke-width="3"></path>
                                <path style="opacity: 0;" fill="none" stroke="#2f3d4a"
                                    d="M247.96936359022067,198.38656515201617A107.33333333333333,107.33333333333333,0,0,0,259.5169487011711,225.89543416853576"
                                    stroke-width="2" opacity="0"></path>
                                <path style="" fill="#2f3d4a" stroke="#ffffff"
                                    d="M245.06866257255604,199.1520281531595A110.33333333333333,110.33333333333333,0,0,0,256.9390062735641,227.42977860181782L217.696993764435,250.78591053066685A156,156,0,0,1,200.91354708143874,210.8040760594521Z"
                                    stroke-width="3"></path>
                                <path style="opacity: 0;" fill="none" stroke="#ffbc34"
                                    d="M259.5169487011711,225.89543416853576A107.33333333333333,107.33333333333333,0,0,0,351.71628023940633,278.3333280366457"
                                    stroke-width="2" opacity="0"></path>
                                <path style="" fill="#ffbc34" stroke="#ffffff"
                                    d="M256.9390062735641,227.42977860181782A110.33333333333333,110.33333333333333,0,0,0,351.7153377616258,281.3333278886016L351.70099115541046,326.99999230170863A156,156,0,0,1,217.696993764435,250.78591053066685Z"
                                    stroke-width="3"></path><text
                                    style="text-anchor: middle; font-family: &quot;Arial&quot;; font-size: 15px; font-weight: 800;"
                                    x="351.75" y="161" text-anchor="middle" font-family="&quot;Arial&quot;"
                                    font-size="15px" stroke="none" fill="#000000" font-weight="800"
                                    transform="matrix(3.0513,0,0,3.0513,-721.5551,-342.572)"
                                    stroke-width="0.3277260126781266">
                                    <tspan dy="3.5">Doanh nghiệp</tspan>
                                </text><text
                                    style="text-anchor: middle; font-family: &quot;Arial&quot;; font-size: 14px;"
                                    x="351.75" y="181" text-anchor="middle" font-family="&quot;Arial&quot;"
                                    font-size="14px" stroke="none" fill="#000000"
                                    transform="matrix(2.9815,0,0,2.9815,-696.9861,-346.7593)"
                                    stroke-width="0.33540372670807456">
                                    <tspan dy="3.5">53.33%</tspan>
                                </text>
                            </svg></div>
                    </div>
                </div>
                <!-- <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Chủ thể Ocop</h4>
                        <div id="doughnut-chart" style="width:100%; height:400px;"></div>
                    </div>
                </div> -->
            </div>
            <!-- column -->
        </div>

        <div class="row" style="display: none;">
            <div class="col-lg-12">
                <!-- <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Yêu cầu hỗ trợ</h4>
                        <div class="flot-chart">
                            <div class="sales-bars-chart" style="height: 320px;"> </div>
                        </div>
                    </div>
                </div> -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Yêu cầu hỗ trợ</h4>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-bar-chart"
                                style="padding: 0px; position: relative;"><canvas class="flot-base"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1467px; height: 400px;"
                                    width="2934" height="800"></canvas>
                                <div class="flot-text"
                                    style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                    <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                        style="position: absolute; inset: 0px;">
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 20px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 1</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 101px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 2</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 184px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 3</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 266px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 4</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 349px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 5</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 431px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 6</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 514px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 7</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 596px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 8</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 679px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 9</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 760px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 10</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 845px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 11</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 925px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 12</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 1008px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 13</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 1090px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 14</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 1173px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 15</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 1256px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 16</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 1339px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 17</div>
                                        <div style="position: absolute; max-width: 81px; top: 383px; left: 1421px; text-align: center;"
                                            class="flot-tick-label tickLabel">ND 18</div>
                                    </div>
                                    <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                        style="position: absolute; inset: 0px;">
                                        <div style="position: absolute; top: 368px; left: 0px; text-align: right;"
                                            class="flot-tick-label tickLabel">0</div>
                                        <div style="position: absolute; top: 276px; left: 4px; text-align: right;"
                                            class="flot-tick-label tickLabel">1</div>
                                        <div style="position: absolute; top: 184px; left: 0px; text-align: right;"
                                            class="flot-tick-label tickLabel">2</div>
                                        <div style="position: absolute; top: 92px; left: 0px; text-align: right;"
                                            class="flot-tick-label tickLabel">3</div>
                                        <div style="position: absolute; top: 0px; left: 0px; text-align: right;"
                                            class="flot-tick-label tickLabel">4</div>
                                    </div>
                                </div><canvas class="flot-overlay"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1467px; height: 400px;"
                                    width="2934" height="800"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="display: none;">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tiến độ nộp</h4>
                        <ul class="country-state slimscrollcountry ps ps--theme_default ps--active-y"
                            data-ps-id="4fec0af8-4d25-f6c3-f569-8818ef93b42e" id="li-char">

                            <!-- <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div> -->
                            <li>
                                <h2>18</h2>
                                <small>Hà Nội</small><br>
                                <small>Hồ sơ hoàn thành: 10/18 = 55.56%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:55.56%; height: 6px;">
                                        <span class="sr-only">55.56% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>17</h2>
                                <small>Bến Tre</small><br>
                                <small>Hồ sơ hoàn thành: 14/17 = 82.35%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:82.35%; height: 6px;">
                                        <span class="sr-only">82.35% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>17</h2>
                                <small>Kon Tum</small><br>
                                <small>Hồ sơ hoàn thành: 9/17 = 52.94%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:52.94%; height: 6px;">
                                        <span class="sr-only">52.94% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>10</h2>
                                <small>Bắc Kạn</small><br>
                                <small>Hồ sơ hoàn thành: 6/10 = 60.00%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:60%; height: 6px;">
                                        <span class="sr-only">60.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>7</h2>
                                <small>Đồng Nai</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>6</h2>
                                <small>Phú Yên</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>6</h2>
                                <small>Trà Vinh</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>4</h2>
                                <small>Lâm Đồng</small><br>
                                <small>Hồ sơ hoàn thành: 2/4 = 50.00%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:50%; height: 6px;">
                                        <span class="sr-only">50.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>3</h2>
                                <small>Bình Định</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>3</h2>
                                <small>Đồng Tháp</small><br>
                                <small>Hồ sơ hoàn thành: 3/3 = 100.00%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 6px;">
                                        <span class="sr-only">100.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>3</h2>
                                <small>Kiên Giang</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>3</h2>
                                <small>Nam Định</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>2</h2>
                                <small>An Giang</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>2</h2>
                                <small>Bình Thuận</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>2</h2>
                                <small>Hải Dương</small><br>
                                <small>Hồ sơ hoàn thành: 2/2 = 100.00%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 6px;">
                                        <span class="sr-only">100.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>2</h2>
                                <small>Hà Tĩnh</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>2</h2>
                                <small>Lào Cai</small><br>
                                <small>Hồ sơ hoàn thành: 2/2 = 100.00%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 6px;">
                                        <span class="sr-only">100.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>2</h2>
                                <small>Long An</small><br>
                                <small>Hồ sơ hoàn thành: 2/2 = 100.00%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 6px;">
                                        <span class="sr-only">100.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>2</h2>
                                <small>Thừa Thiên Huế</small><br>
                                <small>Hồ sơ hoàn thành: 1/2 = 50.00%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:50%; height: 6px;">
                                        <span class="sr-only">50.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>2</h2>
                                <small>Tiền Giang</small><br>
                                <small>Hồ sơ hoàn thành: 1/2 = 50.00%</small>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:50%; height: 6px;">
                                        <span class="sr-only">50.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>1</h2>
                                <small>Bình Phước</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>1</h2>
                                <small>Cần Thơ</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>1</h2>
                                <small>Hà Giang</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>1</h2>
                                <small>Nghệ An</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>1</h2>
                                <small>Ninh Bình</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>1</h2>
                                <small>Quảng Nam</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>1</h2>
                                <small>Quảng Ngãi</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>1</h2>
                                <small>Vĩnh Phúc</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0.00% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Bắc Giang</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Bạc Liêu</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Bắc Ninh</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Bà Rịa - Vũng Tàu</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Bình Dương</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Cà Mau</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Cao Bằng</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Đắk Lắk</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Đắk Nông</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Đà Nẵng</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Điện Biên</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Gia Lai</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Hải Phòng</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Hà Nam</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Hậu Giang</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Hòa Bình</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Hồ Chí Minh</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Hưng Yên</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Khánh Hòa</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Lai Châu</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Lạng Sơn</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Ninh Thuận</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Phú Thọ</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Quảng Bình</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Quảng Ninh</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Quảng Trị</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Sóc Trăng</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Sơn La</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Tây Ninh</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Thái Bình</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Thái Nguyên</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Thanh Hóa</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Tuyên Quang</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Vĩnh Long</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                            <li>
                                <h2>0</h2>
                                <small>Yên Bái</small><br>

                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 6px;">
                                        <span class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar ps ps--theme_default" data-ps-id="5c874361-21eb-e6ed-4c19-10c108e27122">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme working">1</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
</div>
@endsection()