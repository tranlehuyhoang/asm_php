<?php

include __DIR__ .  '/../inc/Header.php';

?>

<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">HRM</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">HRM</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-5 col-xl-12">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card hrm-main-card primary">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3"> <span class="avatar bg-primary"> <i
                                                class="ri-team-line fs-18"></i> </span> </div>
                                    <div class="flex-fill"> <span class="fw-semibold text-muted d-block mb-2">Total
                                            Employees</span>
                                        <h5 class="fw-semibold mb-2">22,124</h5>
                                        <p class="mb-0"> <span class="badge bg-primary-transparent">This
                                                Month</span> </p>
                                    </div>
                                    <div> <span class="fs-14 fw-semibold text-success">+1.03%</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card hrm-main-card secondary">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3"> <span class="avatar bg-secondary"> <i
                                                class="ri-user-unfollow-line fs-18"></i> </span> </div>
                                    <div class="flex-fill"> <span class="fw-semibold text-muted d-block mb-2">Employees
                                            In
                                            Leave</span>
                                        <h5 class="fw-semibold mb-2">528</h5>
                                        <p class="mb-0"> <span class="badge bg-secondary-transparent">This
                                                Month</span> </p>
                                    </div>
                                    <div> <span class="fs-14 fw-semibold text-success">+0.36%</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card  hrm-main-card warning">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3"> <span class="avatar bg-warning"> <i
                                                class="ri-service-line fs-18"></i> </span> </div>
                                    <div class="flex-fill"> <span class="fw-semibold text-muted d-block mb-2">Total
                                            Clients</span>
                                        <h5 class="fw-semibold mb-2">8,289</h5>
                                        <p class="mb-0"> <span class="badge bg-warning-transparent">This
                                                Month</span> </p>
                                    </div>
                                    <div> <span class="fs-14 fw-semibold text-danger">-1.28%</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card  hrm-main-card danger">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3"> <span class="avatar bg-danger"> <i
                                                class="ri-contacts-line fs-18"></i> </span> </div>
                                    <div class="flex-fill"> <span class="fw-semibold text-muted d-block mb-2">New
                                            Leads</span>
                                        <h5 class="fw-semibold mb-2">1,453</h5>
                                        <p class="mb-0"> <span class="badge bg-danger-transparent">This
                                                Month</span> </p>
                                    </div>
                                    <div> <span class="fs-14 fw-semibold text-success">+4.25%</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Applicants Summary</div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-md-0 gy-3">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span
                                                    class="avatar avatar-rounded bg-light text-primary"> <i
                                                        class="ti ti-files fs-18"></i> </span> </div>
                                            <div> <span class="d-block mb-1 text-muted">New Applicants</span>
                                                <h6 class="fw-semibold mb-0">2,981</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span
                                                    class="avatar avatar-rounded bg-light text-secondary"> <i
                                                        class="ti ti-file-check fs-18"></i> </span> </div>
                                            <div> <span class="d-block mb-1 text-muted">Selected
                                                    Candidates</span>
                                                <h6 class="fw-semibold mb-0">2,981</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span
                                                    class="avatar avatar-rounded bg-light text-warning"> <i
                                                        class="ti ti-file-dislike fs-18"></i> </span> </div>
                                            <div> <span class="d-block mb-1 text-muted">Rejected
                                                    Candidates</span>
                                                <h6 class="fw-semibold mb-0">2,981</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between align-items-center d-sm-flex d-block">
                        <div class="card-title mb-sm-0 mb-2"> Performance By Category </div>
                        <div class="btn-group" role="group" aria-label="Basic example"> <button type="button"
                                class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1W</button>
                            <button type="button"
                                class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1M</button>
                            <button type="button"
                                class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">6M</button>
                            <button type="button"
                                class="btn btn-primary btn-sm btn-wave waves-effect waves-light">1Y</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="performanceReport" style="min-height: 325px;">
                            <div id="apexchartsbvr0gaq3h"
                                class="apexcharts-canvas apexchartsbvr0gaq3h apexcharts-theme-light"
                                style="width: 1184px; height: 310px;"><svg id="SvgjsSvg1221" width="1184" height="310"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1223" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(45.48533630371094, 30)">
                                        <defs id="SvgjsDefs1222">
                                            <linearGradient id="SvgjsLinearGradient1227" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1228" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1229" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1230" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaskbvr0gaq3h">
                                                <rect id="SvgjsRect1232" width="1132.514663696289" height="242.7525"
                                                    x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskbvr0gaq3h"></clipPath>
                                            <clipPath id="nonForecastMaskbvr0gaq3h"></clipPath>
                                            <clipPath id="gridRectMarkerMaskbvr0gaq3h">
                                                <rect id="SvgjsRect1233" width="1132.514663696289" height="246.7525"
                                                    x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1231" width="18.808577728271484" height="242.7525" x="0"
                                            y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                            fill="url(#SvgjsLinearGradient1227)" class="apexcharts-xcrosshairs"
                                            y2="242.7525" filter="none" fill-opacity="0.9"></rect>
                                        <line id="SvgjsLine1321" x1="0" y1="243.7525" x2="0" y2="249.7525"
                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1323" x1="94.04288864135742" y1="243.7525"
                                            x2="94.04288864135742" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1325" x1="188.08577728271484" y1="243.7525"
                                            x2="188.08577728271484" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1327" x1="282.12866592407227" y1="243.7525"
                                            x2="282.12866592407227" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1329" x1="376.1715545654297" y1="243.7525"
                                            x2="376.1715545654297" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1331" x1="470.2144432067871" y1="243.7525"
                                            x2="470.2144432067871" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1333" x1="564.2573318481445" y1="243.7525"
                                            x2="564.2573318481445" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1335" x1="658.300220489502" y1="243.7525"
                                            x2="658.300220489502" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1337" x1="752.3431091308594" y1="243.7525"
                                            x2="752.3431091308594" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1339" x1="846.3859977722168" y1="243.7525"
                                            x2="846.3859977722168" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1341" x1="940.4288864135742" y1="243.7525"
                                            x2="940.4288864135742" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1343" x1="1034.4717750549316" y1="243.7525"
                                            x2="1034.4717750549316" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1345" x1="1128.514663696289" y1="243.7525"
                                            x2="1128.514663696289" y2="249.7525" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <g id="SvgjsG1316" class="apexcharts-grid">
                                            <g id="SvgjsG1317" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1347" x1="0" y1="48.5505" x2="1128.514663696289"
                                                    y2="48.5505" stroke="#f1f1f1" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1348" x1="0" y1="97.101" x2="1128.514663696289"
                                                    y2="97.101" stroke="#f1f1f1" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1349" x1="0" y1="145.6515" x2="1128.514663696289"
                                                    y2="145.6515" stroke="#f1f1f1" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1350" x1="0" y1="194.202" x2="1128.514663696289"
                                                    y2="194.202" stroke="#f1f1f1" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1318" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine1320" x1="0" y1="0" x2="0" y2="242.7525"
                                                    stroke="#f1f1f1" stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1322" x1="94.04288864135742" y1="0"
                                                    x2="94.04288864135742" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1324" x1="188.08577728271484" y1="0"
                                                    x2="188.08577728271484" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1326" x1="282.12866592407227" y1="0"
                                                    x2="282.12866592407227" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1328" x1="376.1715545654297" y1="0"
                                                    x2="376.1715545654297" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1330" x1="470.2144432067871" y1="0"
                                                    x2="470.2144432067871" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1332" x1="564.2573318481445" y1="0"
                                                    x2="564.2573318481445" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1334" x1="658.300220489502" y1="0"
                                                    x2="658.300220489502" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1336" x1="752.3431091308594" y1="0"
                                                    x2="752.3431091308594" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1338" x1="846.3859977722168" y1="0"
                                                    x2="846.3859977722168" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1340" x1="940.4288864135742" y1="0"
                                                    x2="940.4288864135742" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1342" x1="1034.4717750549316" y1="0"
                                                    x2="1034.4717750549316" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1344" x1="1128.514663696289" y1="0"
                                                    x2="1128.514663696289" y2="242.7525" stroke="#f1f1f1"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine1353" x1="0" y1="242.7525" x2="1128.514663696289"
                                                y2="242.7525" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1352" x1="0" y1="1" x2="0" y2="242.7525"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                            </line>
                                        </g>
                                        <g id="SvgjsG1319" class="apexcharts-grid-borders">
                                            <line id="SvgjsLine1346" x1="0" y1="0" x2="1128.514663696289" y2="0"
                                                stroke="#f1f1f1" stroke-dasharray="3" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1351" x1="0" y1="242.7525" x2="1128.514663696289"
                                                y2="242.7525" stroke="#f1f1f1" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1397" x1="0" y1="243.7525" x2="1128.514663696289"
                                                y2="243.7525" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1234" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1235" class="apexcharts-series" seriesName="Designing" rel="1"
                                                data:realIndex="0">
                                                <path id="SvgjsPath1239"
                                                    d="M37.61715545654297 242.7535L37.61715545654297 135.9424L56.42573318481445 135.9424L56.42573318481445 242.7535L37.61715545654297 242.7535C37.61715545654297 242.7535 37.61715545654297 242.7535 37.61715545654297 242.7535C37.61715545654297 242.7535 37.61715545654297 242.7535 37.61715545654297 242.7535C37.61715545654297 242.7535 37.61715545654297 242.7535 37.61715545654297 242.7535C37.61715545654297 242.7535 37.61715545654297 242.7535 37.61715545654297 242.7535C37.61715545654297 242.7535 37.61715545654297 242.7535 37.61715545654297 242.7535C37.61715545654297 242.7535 37.61715545654297 242.7535 37.61715545654297 242.7535C37.61715545654297 242.7535 37.61715545654297 242.7535 37.61715545654297 242.7535C37.61715545654297 242.7535 37.61715545654297 242.7535 37.61715545654297 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 37.61715545654297 242.7535 L 37.61715545654297 135.9424 L 56.42573318481445 135.9424 L 56.42573318481445 242.7535 Z"
                                                    pathFrom="M 37.61715545654297 242.7535 L 37.61715545654297 135.9424 L 56.42573318481445 135.9424 L 56.42573318481445 242.7535 Z L 37.61715545654297 242.7535 L 56.42573318481445 242.7535 L 56.42573318481445 242.7535 L 56.42573318481445 242.7535 L 56.42573318481445 242.7535 L 56.42573318481445 242.7535 L 37.61715545654297 242.7535 Z"
                                                    cy="135.9414" cx="131.6600440979004" j="0" val="44"
                                                    barHeight="106.8111" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1241"
                                                    d="M131.6600440979004 242.7535L131.6600440979004 109.23962500000002L150.46862182617187 109.23962500000002L150.46862182617187 242.7535L131.6600440979004 242.7535C131.6600440979004 242.7535 131.6600440979004 242.7535 131.6600440979004 242.7535C131.6600440979004 242.7535 131.6600440979004 242.7535 131.6600440979004 242.7535C131.6600440979004 242.7535 131.6600440979004 242.7535 131.6600440979004 242.7535C131.6600440979004 242.7535 131.6600440979004 242.7535 131.6600440979004 242.7535C131.6600440979004 242.7535 131.6600440979004 242.7535 131.6600440979004 242.7535C131.6600440979004 242.7535 131.6600440979004 242.7535 131.6600440979004 242.7535C131.6600440979004 242.7535 131.6600440979004 242.7535 131.6600440979004 242.7535C131.6600440979004 242.7535 131.6600440979004 242.7535 131.6600440979004 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 131.6600440979004 242.7535 L 131.6600440979004 109.23962500000002 L 150.46862182617187 109.23962500000002 L 150.46862182617187 242.7535 Z"
                                                    pathFrom="M 131.6600440979004 242.7535 L 131.6600440979004 109.23962500000002 L 150.46862182617187 109.23962500000002 L 150.46862182617187 242.7535 Z L 131.6600440979004 242.7535 L 150.46862182617187 242.7535 L 150.46862182617187 242.7535 L 150.46862182617187 242.7535 L 150.46862182617187 242.7535 L 150.46862182617187 242.7535 L 131.6600440979004 242.7535 Z"
                                                    cy="109.23862500000001" cx="225.70293273925782" j="1" val="55"
                                                    barHeight="133.51387499999998" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1243"
                                                    d="M225.70293273925782 242.7535L225.70293273925782 143.224975L244.5115104675293 143.224975L244.5115104675293 242.7535L225.70293273925782 242.7535C225.70293273925782 242.7535 225.70293273925782 242.7535 225.70293273925782 242.7535C225.70293273925782 242.7535 225.70293273925782 242.7535 225.70293273925782 242.7535C225.70293273925782 242.7535 225.70293273925782 242.7535 225.70293273925782 242.7535C225.70293273925782 242.7535 225.70293273925782 242.7535 225.70293273925782 242.7535C225.70293273925782 242.7535 225.70293273925782 242.7535 225.70293273925782 242.7535C225.70293273925782 242.7535 225.70293273925782 242.7535 225.70293273925782 242.7535C225.70293273925782 242.7535 225.70293273925782 242.7535 225.70293273925782 242.7535C225.70293273925782 242.7535 225.70293273925782 242.7535 225.70293273925782 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 225.70293273925782 242.7535 L 225.70293273925782 143.224975 L 244.5115104675293 143.224975 L 244.5115104675293 242.7535 Z"
                                                    pathFrom="M 225.70293273925782 242.7535 L 225.70293273925782 143.224975 L 244.5115104675293 143.224975 L 244.5115104675293 242.7535 Z L 225.70293273925782 242.7535 L 244.5115104675293 242.7535 L 244.5115104675293 242.7535 L 244.5115104675293 242.7535 L 244.5115104675293 242.7535 L 244.5115104675293 242.7535 L 225.70293273925782 242.7535 Z"
                                                    cy="143.223975" cx="319.7458213806152" j="2" val="41"
                                                    barHeight="99.528525" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1245"
                                                    d="M319.7458213806152 242.7535L319.7458213806152 80.10932500000001L338.5543991088867 80.10932500000001L338.5543991088867 242.7535L319.7458213806152 242.7535C319.7458213806152 242.7535 319.7458213806152 242.7535 319.7458213806152 242.7535C319.7458213806152 242.7535 319.7458213806152 242.7535 319.7458213806152 242.7535C319.7458213806152 242.7535 319.7458213806152 242.7535 319.7458213806152 242.7535C319.7458213806152 242.7535 319.7458213806152 242.7535 319.7458213806152 242.7535C319.7458213806152 242.7535 319.7458213806152 242.7535 319.7458213806152 242.7535C319.7458213806152 242.7535 319.7458213806152 242.7535 319.7458213806152 242.7535C319.7458213806152 242.7535 319.7458213806152 242.7535 319.7458213806152 242.7535C319.7458213806152 242.7535 319.7458213806152 242.7535 319.7458213806152 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 319.7458213806152 242.7535 L 319.7458213806152 80.10932500000001 L 338.5543991088867 80.10932500000001 L 338.5543991088867 242.7535 Z"
                                                    pathFrom="M 319.7458213806152 242.7535 L 319.7458213806152 80.10932500000001 L 338.5543991088867 80.10932500000001 L 338.5543991088867 242.7535 Z L 319.7458213806152 242.7535 L 338.5543991088867 242.7535 L 338.5543991088867 242.7535 L 338.5543991088867 242.7535 L 338.5543991088867 242.7535 L 338.5543991088867 242.7535 L 319.7458213806152 242.7535 Z"
                                                    cy="80.10832500000001" cx="413.78871002197263" j="3" val="67"
                                                    barHeight="162.644175" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1247"
                                                    d="M413.78871002197263 242.7535L413.78871002197263 189.34795L432.5972877502441 189.34795L432.5972877502441 242.7535L413.78871002197263 242.7535C413.78871002197263 242.7535 413.78871002197263 242.7535 413.78871002197263 242.7535C413.78871002197263 242.7535 413.78871002197263 242.7535 413.78871002197263 242.7535C413.78871002197263 242.7535 413.78871002197263 242.7535 413.78871002197263 242.7535C413.78871002197263 242.7535 413.78871002197263 242.7535 413.78871002197263 242.7535C413.78871002197263 242.7535 413.78871002197263 242.7535 413.78871002197263 242.7535C413.78871002197263 242.7535 413.78871002197263 242.7535 413.78871002197263 242.7535C413.78871002197263 242.7535 413.78871002197263 242.7535 413.78871002197263 242.7535C413.78871002197263 242.7535 413.78871002197263 242.7535 413.78871002197263 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 413.78871002197263 242.7535 L 413.78871002197263 189.34795 L 432.5972877502441 189.34795 L 432.5972877502441 242.7535 Z"
                                                    pathFrom="M 413.78871002197263 242.7535 L 413.78871002197263 189.34795 L 432.5972877502441 189.34795 L 432.5972877502441 242.7535 Z L 413.78871002197263 242.7535 L 432.5972877502441 242.7535 L 432.5972877502441 242.7535 L 432.5972877502441 242.7535 L 432.5972877502441 242.7535 L 432.5972877502441 242.7535 L 413.78871002197263 242.7535 Z"
                                                    cy="189.34695" cx="507.83159866333006" j="4" val="22"
                                                    barHeight="53.40555" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1249"
                                                    d="M507.83159866333006 242.7535L507.83159866333006 138.369925L526.6401763916016 138.369925L526.6401763916016 242.7535L507.83159866333006 242.7535C507.83159866333006 242.7535 507.83159866333006 242.7535 507.83159866333006 242.7535C507.83159866333006 242.7535 507.83159866333006 242.7535 507.83159866333006 242.7535C507.83159866333006 242.7535 507.83159866333006 242.7535 507.83159866333006 242.7535C507.83159866333006 242.7535 507.83159866333006 242.7535 507.83159866333006 242.7535C507.83159866333006 242.7535 507.83159866333006 242.7535 507.83159866333006 242.7535C507.83159866333006 242.7535 507.83159866333006 242.7535 507.83159866333006 242.7535C507.83159866333006 242.7535 507.83159866333006 242.7535 507.83159866333006 242.7535C507.83159866333006 242.7535 507.83159866333006 242.7535 507.83159866333006 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 507.83159866333006 242.7535 L 507.83159866333006 138.369925 L 526.6401763916016 138.369925 L 526.6401763916016 242.7535 Z"
                                                    pathFrom="M 507.83159866333006 242.7535 L 507.83159866333006 138.369925 L 526.6401763916016 138.369925 L 526.6401763916016 242.7535 Z L 507.83159866333006 242.7535 L 526.6401763916016 242.7535 L 526.6401763916016 242.7535 L 526.6401763916016 242.7535 L 526.6401763916016 242.7535 L 526.6401763916016 242.7535 L 507.83159866333006 242.7535 Z"
                                                    cy="138.368925" cx="601.8744873046875" j="5" val="43"
                                                    barHeight="104.383575" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1251"
                                                    d="M601.8744873046875 242.7535L601.8744873046875 135.9424L620.683065032959 135.9424L620.683065032959 242.7535L601.8744873046875 242.7535C601.8744873046875 242.7535 601.8744873046875 242.7535 601.8744873046875 242.7535C601.8744873046875 242.7535 601.8744873046875 242.7535 601.8744873046875 242.7535C601.8744873046875 242.7535 601.8744873046875 242.7535 601.8744873046875 242.7535C601.8744873046875 242.7535 601.8744873046875 242.7535 601.8744873046875 242.7535C601.8744873046875 242.7535 601.8744873046875 242.7535 601.8744873046875 242.7535C601.8744873046875 242.7535 601.8744873046875 242.7535 601.8744873046875 242.7535C601.8744873046875 242.7535 601.8744873046875 242.7535 601.8744873046875 242.7535C601.8744873046875 242.7535 601.8744873046875 242.7535 601.8744873046875 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 601.8744873046875 242.7535 L 601.8744873046875 135.9424 L 620.683065032959 135.9424 L 620.683065032959 242.7535 Z"
                                                    pathFrom="M 601.8744873046875 242.7535 L 601.8744873046875 135.9424 L 620.683065032959 135.9424 L 620.683065032959 242.7535 Z L 601.8744873046875 242.7535 L 620.683065032959 242.7535 L 620.683065032959 242.7535 L 620.683065032959 242.7535 L 620.683065032959 242.7535 L 620.683065032959 242.7535 L 601.8744873046875 242.7535 Z"
                                                    cy="135.9414" cx="695.9173759460449" j="6" val="44"
                                                    barHeight="106.8111" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1253"
                                                    d="M695.9173759460449 242.7535L695.9173759460449 109.23962500000002L714.7259536743164 109.23962500000002L714.7259536743164 242.7535L695.9173759460449 242.7535C695.9173759460449 242.7535 695.9173759460449 242.7535 695.9173759460449 242.7535C695.9173759460449 242.7535 695.9173759460449 242.7535 695.9173759460449 242.7535C695.9173759460449 242.7535 695.9173759460449 242.7535 695.9173759460449 242.7535C695.9173759460449 242.7535 695.9173759460449 242.7535 695.9173759460449 242.7535C695.9173759460449 242.7535 695.9173759460449 242.7535 695.9173759460449 242.7535C695.9173759460449 242.7535 695.9173759460449 242.7535 695.9173759460449 242.7535C695.9173759460449 242.7535 695.9173759460449 242.7535 695.9173759460449 242.7535C695.9173759460449 242.7535 695.9173759460449 242.7535 695.9173759460449 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 695.9173759460449 242.7535 L 695.9173759460449 109.23962500000002 L 714.7259536743164 109.23962500000002 L 714.7259536743164 242.7535 Z"
                                                    pathFrom="M 695.9173759460449 242.7535 L 695.9173759460449 109.23962500000002 L 714.7259536743164 109.23962500000002 L 714.7259536743164 242.7535 Z L 695.9173759460449 242.7535 L 714.7259536743164 242.7535 L 714.7259536743164 242.7535 L 714.7259536743164 242.7535 L 714.7259536743164 242.7535 L 714.7259536743164 242.7535 L 695.9173759460449 242.7535 Z"
                                                    cy="109.23862500000001" cx="789.9602645874023" j="7" val="55"
                                                    barHeight="133.51387499999998" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1255"
                                                    d="M789.9602645874023 242.7535L789.9602645874023 143.224975L808.7688423156739 143.224975L808.7688423156739 242.7535L789.9602645874023 242.7535C789.9602645874023 242.7535 789.9602645874023 242.7535 789.9602645874023 242.7535C789.9602645874023 242.7535 789.9602645874023 242.7535 789.9602645874023 242.7535C789.9602645874023 242.7535 789.9602645874023 242.7535 789.9602645874023 242.7535C789.9602645874023 242.7535 789.9602645874023 242.7535 789.9602645874023 242.7535C789.9602645874023 242.7535 789.9602645874023 242.7535 789.9602645874023 242.7535C789.9602645874023 242.7535 789.9602645874023 242.7535 789.9602645874023 242.7535C789.9602645874023 242.7535 789.9602645874023 242.7535 789.9602645874023 242.7535C789.9602645874023 242.7535 789.9602645874023 242.7535 789.9602645874023 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 789.9602645874023 242.7535 L 789.9602645874023 143.224975 L 808.7688423156739 143.224975 L 808.7688423156739 242.7535 Z"
                                                    pathFrom="M 789.9602645874023 242.7535 L 789.9602645874023 143.224975 L 808.7688423156739 143.224975 L 808.7688423156739 242.7535 Z L 789.9602645874023 242.7535 L 808.7688423156739 242.7535 L 808.7688423156739 242.7535 L 808.7688423156739 242.7535 L 808.7688423156739 242.7535 L 808.7688423156739 242.7535 L 789.9602645874023 242.7535 Z"
                                                    cy="143.223975" cx="884.0031532287597" j="8" val="41"
                                                    barHeight="99.528525" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1257"
                                                    d="M884.0031532287597 242.7535L884.0031532287597 80.10932500000001L902.8117309570313 80.10932500000001L902.8117309570313 242.7535L884.0031532287597 242.7535C884.0031532287597 242.7535 884.0031532287597 242.7535 884.0031532287597 242.7535C884.0031532287597 242.7535 884.0031532287597 242.7535 884.0031532287597 242.7535C884.0031532287597 242.7535 884.0031532287597 242.7535 884.0031532287597 242.7535C884.0031532287597 242.7535 884.0031532287597 242.7535 884.0031532287597 242.7535C884.0031532287597 242.7535 884.0031532287597 242.7535 884.0031532287597 242.7535C884.0031532287597 242.7535 884.0031532287597 242.7535 884.0031532287597 242.7535C884.0031532287597 242.7535 884.0031532287597 242.7535 884.0031532287597 242.7535C884.0031532287597 242.7535 884.0031532287597 242.7535 884.0031532287597 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 884.0031532287597 242.7535 L 884.0031532287597 80.10932500000001 L 902.8117309570313 80.10932500000001 L 902.8117309570313 242.7535 Z"
                                                    pathFrom="M 884.0031532287597 242.7535 L 884.0031532287597 80.10932500000001 L 902.8117309570313 80.10932500000001 L 902.8117309570313 242.7535 Z L 884.0031532287597 242.7535 L 902.8117309570313 242.7535 L 902.8117309570313 242.7535 L 902.8117309570313 242.7535 L 902.8117309570313 242.7535 L 902.8117309570313 242.7535 L 884.0031532287597 242.7535 Z"
                                                    cy="80.10832500000001" cx="978.0460418701172" j="9" val="67"
                                                    barHeight="162.644175" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1259"
                                                    d="M978.0460418701172 242.7535L978.0460418701172 189.34795L996.8546195983887 189.34795L996.8546195983887 242.7535L978.0460418701172 242.7535C978.0460418701172 242.7535 978.0460418701172 242.7535 978.0460418701172 242.7535C978.0460418701172 242.7535 978.0460418701172 242.7535 978.0460418701172 242.7535C978.0460418701172 242.7535 978.0460418701172 242.7535 978.0460418701172 242.7535C978.0460418701172 242.7535 978.0460418701172 242.7535 978.0460418701172 242.7535C978.0460418701172 242.7535 978.0460418701172 242.7535 978.0460418701172 242.7535C978.0460418701172 242.7535 978.0460418701172 242.7535 978.0460418701172 242.7535C978.0460418701172 242.7535 978.0460418701172 242.7535 978.0460418701172 242.7535C978.0460418701172 242.7535 978.0460418701172 242.7535 978.0460418701172 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 978.0460418701172 242.7535 L 978.0460418701172 189.34795 L 996.8546195983887 189.34795 L 996.8546195983887 242.7535 Z"
                                                    pathFrom="M 978.0460418701172 242.7535 L 978.0460418701172 189.34795 L 996.8546195983887 189.34795 L 996.8546195983887 242.7535 Z L 978.0460418701172 242.7535 L 996.8546195983887 242.7535 L 996.8546195983887 242.7535 L 996.8546195983887 242.7535 L 996.8546195983887 242.7535 L 996.8546195983887 242.7535 L 978.0460418701172 242.7535 Z"
                                                    cy="189.34695" cx="1072.0889305114747" j="10" val="22"
                                                    barHeight="53.40555" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1261"
                                                    d="M1072.0889305114747 242.7535L1072.0889305114747 138.369925L1090.8975082397462 138.369925L1090.8975082397462 242.7535L1072.0889305114747 242.7535C1072.0889305114747 242.7535 1072.0889305114747 242.7535 1072.0889305114747 242.7535C1072.0889305114747 242.7535 1072.0889305114747 242.7535 1072.0889305114747 242.7535C1072.0889305114747 242.7535 1072.0889305114747 242.7535 1072.0889305114747 242.7535C1072.0889305114747 242.7535 1072.0889305114747 242.7535 1072.0889305114747 242.7535C1072.0889305114747 242.7535 1072.0889305114747 242.7535 1072.0889305114747 242.7535C1072.0889305114747 242.7535 1072.0889305114747 242.7535 1072.0889305114747 242.7535C1072.0889305114747 242.7535 1072.0889305114747 242.7535 1072.0889305114747 242.7535C1072.0889305114747 242.7535 1072.0889305114747 242.7535 1072.0889305114747 242.7535 "
                                                    fill="rgba(132,90,223, 1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 1072.0889305114747 242.7535 L 1072.0889305114747 138.369925 L 1090.8975082397462 138.369925 L 1090.8975082397462 242.7535 Z"
                                                    pathFrom="M 1072.0889305114747 242.7535 L 1072.0889305114747 138.369925 L 1090.8975082397462 138.369925 L 1090.8975082397462 242.7535 Z L 1072.0889305114747 242.7535 L 1090.8975082397462 242.7535 L 1090.8975082397462 242.7535 L 1090.8975082397462 242.7535 L 1090.8975082397462 242.7535 L 1090.8975082397462 242.7535 L 1072.0889305114747 242.7535 Z"
                                                    cy="138.368925" cx="1166.1318191528321" j="11" val="43"
                                                    barHeight="104.383575" barWidth="18.808577728271484"></path>
                                                <g id="SvgjsG1237" class="apexcharts-bar-goals-markers"
                                                    style="pointer-events: none">
                                                    <g id="SvgjsG1238" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1240" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1242" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1244" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1246" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1248" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1250" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1252" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1254" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1256" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1258" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1260" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1262" class="apexcharts-series" seriesName="Development"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1266"
                                                    d="M37.61715545654297 135.9434L37.61715545654297 104.385575L56.42573318481445 104.385575L56.42573318481445 135.9434L37.61715545654297 135.9434C37.61715545654297 135.9434 37.61715545654297 135.9434 37.61715545654297 135.9434C37.61715545654297 135.9434 37.61715545654297 135.9434 37.61715545654297 135.9434C37.61715545654297 135.9434 37.61715545654297 135.9434 37.61715545654297 135.9434C37.61715545654297 135.9434 37.61715545654297 135.9434 37.61715545654297 135.9434C37.61715545654297 135.9434 37.61715545654297 135.9434 37.61715545654297 135.9434C37.61715545654297 135.9434 37.61715545654297 135.9434 37.61715545654297 135.9434C37.61715545654297 135.9434 37.61715545654297 135.9434 37.61715545654297 135.9434C37.61715545654297 135.9434 37.61715545654297 135.9434 37.61715545654297 135.9434 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 37.61715545654297 135.9434 L 37.61715545654297 104.385575 L 56.42573318481445 104.385575 L 56.42573318481445 135.9434 Z"
                                                    pathFrom="M 37.61715545654297 135.9434 L 37.61715545654297 104.385575 L 56.42573318481445 104.385575 L 56.42573318481445 135.9434 Z L 37.61715545654297 135.9434 L 56.42573318481445 135.9434 L 56.42573318481445 135.9434 L 56.42573318481445 135.9434 L 56.42573318481445 135.9434 L 56.42573318481445 135.9434 L 37.61715545654297 135.9434 Z"
                                                    cy="104.384575" cx="131.6600440979004" j="0" val="13"
                                                    barHeight="31.557824999999998" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1268"
                                                    d="M131.6600440979004 109.24062500000002L131.6600440979004 53.407550000000015L150.46862182617187 53.407550000000015L150.46862182617187 109.24062500000002L131.6600440979004 109.24062500000002C131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002C131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002C131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002C131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002C131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002C131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002C131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002C131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002 131.6600440979004 109.24062500000002 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 131.6600440979004 109.24062500000002 L 131.6600440979004 53.407550000000015 L 150.46862182617187 53.407550000000015 L 150.46862182617187 109.24062500000002 Z"
                                                    pathFrom="M 131.6600440979004 109.24062500000002 L 131.6600440979004 53.407550000000015 L 150.46862182617187 53.407550000000015 L 150.46862182617187 109.24062500000002 Z L 131.6600440979004 109.24062500000002 L 150.46862182617187 109.24062500000002 L 150.46862182617187 109.24062500000002 L 150.46862182617187 109.24062500000002 L 150.46862182617187 109.24062500000002 L 150.46862182617187 109.24062500000002 L 131.6600440979004 109.24062500000002 Z"
                                                    cy="53.40655000000002" cx="225.70293273925782" j="1" val="23"
                                                    barHeight="55.833075" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1270"
                                                    d="M225.70293273925782 143.225975L225.70293273925782 94.675475L244.5115104675293 94.675475L244.5115104675293 143.225975L225.70293273925782 143.225975C225.70293273925782 143.225975 225.70293273925782 143.225975 225.70293273925782 143.225975C225.70293273925782 143.225975 225.70293273925782 143.225975 225.70293273925782 143.225975C225.70293273925782 143.225975 225.70293273925782 143.225975 225.70293273925782 143.225975C225.70293273925782 143.225975 225.70293273925782 143.225975 225.70293273925782 143.225975C225.70293273925782 143.225975 225.70293273925782 143.225975 225.70293273925782 143.225975C225.70293273925782 143.225975 225.70293273925782 143.225975 225.70293273925782 143.225975C225.70293273925782 143.225975 225.70293273925782 143.225975 225.70293273925782 143.225975C225.70293273925782 143.225975 225.70293273925782 143.225975 225.70293273925782 143.225975 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 225.70293273925782 143.225975 L 225.70293273925782 94.675475 L 244.5115104675293 94.675475 L 244.5115104675293 143.225975 Z"
                                                    pathFrom="M 225.70293273925782 143.225975 L 225.70293273925782 94.675475 L 244.5115104675293 94.675475 L 244.5115104675293 143.225975 Z L 225.70293273925782 143.225975 L 244.5115104675293 143.225975 L 244.5115104675293 143.225975 L 244.5115104675293 143.225975 L 244.5115104675293 143.225975 L 244.5115104675293 143.225975 L 225.70293273925782 143.225975 Z"
                                                    cy="94.674475" cx="319.7458213806152" j="2" val="20"
                                                    barHeight="48.5505" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1272"
                                                    d="M319.7458213806152 80.11032500000002L319.7458213806152 60.690125000000016L338.5543991088867 60.690125000000016L338.5543991088867 80.11032500000002L319.7458213806152 80.11032500000002C319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002C319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002C319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002C319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002C319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002C319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002C319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002C319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002 319.7458213806152 80.11032500000002 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 319.7458213806152 80.11032500000002 L 319.7458213806152 60.690125000000016 L 338.5543991088867 60.690125000000016 L 338.5543991088867 80.11032500000002 Z"
                                                    pathFrom="M 319.7458213806152 80.11032500000002 L 319.7458213806152 60.690125000000016 L 338.5543991088867 60.690125000000016 L 338.5543991088867 80.11032500000002 Z L 319.7458213806152 80.11032500000002 L 338.5543991088867 80.11032500000002 L 338.5543991088867 80.11032500000002 L 338.5543991088867 80.11032500000002 L 338.5543991088867 80.11032500000002 L 338.5543991088867 80.11032500000002 L 319.7458213806152 80.11032500000002 Z"
                                                    cy="60.68912500000002" cx="413.78871002197263" j="3" val="8"
                                                    barHeight="19.420199999999998" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1274"
                                                    d="M413.78871002197263 189.34895L413.78871002197263 157.791125L432.5972877502441 157.791125L432.5972877502441 189.34895L413.78871002197263 189.34895C413.78871002197263 189.34895 413.78871002197263 189.34895 413.78871002197263 189.34895C413.78871002197263 189.34895 413.78871002197263 189.34895 413.78871002197263 189.34895C413.78871002197263 189.34895 413.78871002197263 189.34895 413.78871002197263 189.34895C413.78871002197263 189.34895 413.78871002197263 189.34895 413.78871002197263 189.34895C413.78871002197263 189.34895 413.78871002197263 189.34895 413.78871002197263 189.34895C413.78871002197263 189.34895 413.78871002197263 189.34895 413.78871002197263 189.34895C413.78871002197263 189.34895 413.78871002197263 189.34895 413.78871002197263 189.34895C413.78871002197263 189.34895 413.78871002197263 189.34895 413.78871002197263 189.34895 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 413.78871002197263 189.34895 L 413.78871002197263 157.791125 L 432.5972877502441 157.791125 L 432.5972877502441 189.34895 Z"
                                                    pathFrom="M 413.78871002197263 189.34895 L 413.78871002197263 157.791125 L 432.5972877502441 157.791125 L 432.5972877502441 189.34895 Z L 413.78871002197263 189.34895 L 432.5972877502441 189.34895 L 432.5972877502441 189.34895 L 432.5972877502441 189.34895 L 432.5972877502441 189.34895 L 432.5972877502441 189.34895 L 413.78871002197263 189.34895 Z"
                                                    cy="157.790125" cx="507.83159866333006" j="4" val="13"
                                                    barHeight="31.557824999999998" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1276"
                                                    d="M507.83159866333006 138.370925L507.83159866333006 72.82775000000001L526.6401763916016 72.82775000000001L526.6401763916016 138.370925L507.83159866333006 138.370925C507.83159866333006 138.370925 507.83159866333006 138.370925 507.83159866333006 138.370925C507.83159866333006 138.370925 507.83159866333006 138.370925 507.83159866333006 138.370925C507.83159866333006 138.370925 507.83159866333006 138.370925 507.83159866333006 138.370925C507.83159866333006 138.370925 507.83159866333006 138.370925 507.83159866333006 138.370925C507.83159866333006 138.370925 507.83159866333006 138.370925 507.83159866333006 138.370925C507.83159866333006 138.370925 507.83159866333006 138.370925 507.83159866333006 138.370925C507.83159866333006 138.370925 507.83159866333006 138.370925 507.83159866333006 138.370925C507.83159866333006 138.370925 507.83159866333006 138.370925 507.83159866333006 138.370925 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 507.83159866333006 138.370925 L 507.83159866333006 72.82775000000001 L 526.6401763916016 72.82775000000001 L 526.6401763916016 138.370925 Z"
                                                    pathFrom="M 507.83159866333006 138.370925 L 507.83159866333006 72.82775000000001 L 526.6401763916016 72.82775000000001 L 526.6401763916016 138.370925 Z L 507.83159866333006 138.370925 L 526.6401763916016 138.370925 L 526.6401763916016 138.370925 L 526.6401763916016 138.370925 L 526.6401763916016 138.370925 L 526.6401763916016 138.370925 L 507.83159866333006 138.370925 Z"
                                                    cy="72.82675" cx="601.8744873046875" j="5" val="27"
                                                    barHeight="65.54317499999999" barWidth="18.808577728271484">
                                                </path>
                                                <path id="SvgjsPath1278"
                                                    d="M601.8744873046875 135.9434L601.8744873046875 104.385575L620.683065032959 104.385575L620.683065032959 135.9434L601.8744873046875 135.9434C601.8744873046875 135.9434 601.8744873046875 135.9434 601.8744873046875 135.9434C601.8744873046875 135.9434 601.8744873046875 135.9434 601.8744873046875 135.9434C601.8744873046875 135.9434 601.8744873046875 135.9434 601.8744873046875 135.9434C601.8744873046875 135.9434 601.8744873046875 135.9434 601.8744873046875 135.9434C601.8744873046875 135.9434 601.8744873046875 135.9434 601.8744873046875 135.9434C601.8744873046875 135.9434 601.8744873046875 135.9434 601.8744873046875 135.9434C601.8744873046875 135.9434 601.8744873046875 135.9434 601.8744873046875 135.9434C601.8744873046875 135.9434 601.8744873046875 135.9434 601.8744873046875 135.9434 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 601.8744873046875 135.9434 L 601.8744873046875 104.385575 L 620.683065032959 104.385575 L 620.683065032959 135.9434 Z"
                                                    pathFrom="M 601.8744873046875 135.9434 L 601.8744873046875 104.385575 L 620.683065032959 104.385575 L 620.683065032959 135.9434 Z L 601.8744873046875 135.9434 L 620.683065032959 135.9434 L 620.683065032959 135.9434 L 620.683065032959 135.9434 L 620.683065032959 135.9434 L 620.683065032959 135.9434 L 601.8744873046875 135.9434 Z"
                                                    cy="104.384575" cx="695.9173759460449" j="6" val="13"
                                                    barHeight="31.557824999999998" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1280"
                                                    d="M695.9173759460449 109.24062500000002L695.9173759460449 53.407550000000015L714.7259536743164 53.407550000000015L714.7259536743164 109.24062500000002L695.9173759460449 109.24062500000002C695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002C695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002C695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002C695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002C695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002C695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002C695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002C695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002 695.9173759460449 109.24062500000002 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 695.9173759460449 109.24062500000002 L 695.9173759460449 53.407550000000015 L 714.7259536743164 53.407550000000015 L 714.7259536743164 109.24062500000002 Z"
                                                    pathFrom="M 695.9173759460449 109.24062500000002 L 695.9173759460449 53.407550000000015 L 714.7259536743164 53.407550000000015 L 714.7259536743164 109.24062500000002 Z L 695.9173759460449 109.24062500000002 L 714.7259536743164 109.24062500000002 L 714.7259536743164 109.24062500000002 L 714.7259536743164 109.24062500000002 L 714.7259536743164 109.24062500000002 L 714.7259536743164 109.24062500000002 L 695.9173759460449 109.24062500000002 Z"
                                                    cy="53.40655000000002" cx="789.9602645874023" j="7" val="23"
                                                    barHeight="55.833075" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1282"
                                                    d="M789.9602645874023 143.225975L789.9602645874023 94.675475L808.7688423156739 94.675475L808.7688423156739 143.225975L789.9602645874023 143.225975C789.9602645874023 143.225975 789.9602645874023 143.225975 789.9602645874023 143.225975C789.9602645874023 143.225975 789.9602645874023 143.225975 789.9602645874023 143.225975C789.9602645874023 143.225975 789.9602645874023 143.225975 789.9602645874023 143.225975C789.9602645874023 143.225975 789.9602645874023 143.225975 789.9602645874023 143.225975C789.9602645874023 143.225975 789.9602645874023 143.225975 789.9602645874023 143.225975C789.9602645874023 143.225975 789.9602645874023 143.225975 789.9602645874023 143.225975C789.9602645874023 143.225975 789.9602645874023 143.225975 789.9602645874023 143.225975C789.9602645874023 143.225975 789.9602645874023 143.225975 789.9602645874023 143.225975 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 789.9602645874023 143.225975 L 789.9602645874023 94.675475 L 808.7688423156739 94.675475 L 808.7688423156739 143.225975 Z"
                                                    pathFrom="M 789.9602645874023 143.225975 L 789.9602645874023 94.675475 L 808.7688423156739 94.675475 L 808.7688423156739 143.225975 Z L 789.9602645874023 143.225975 L 808.7688423156739 143.225975 L 808.7688423156739 143.225975 L 808.7688423156739 143.225975 L 808.7688423156739 143.225975 L 808.7688423156739 143.225975 L 789.9602645874023 143.225975 Z"
                                                    cy="94.674475" cx="884.0031532287597" j="8" val="20"
                                                    barHeight="48.5505" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1284"
                                                    d="M884.0031532287597 80.11032500000002L884.0031532287597 60.690125000000016L902.8117309570313 60.690125000000016L902.8117309570313 80.11032500000002L884.0031532287597 80.11032500000002C884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002C884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002C884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002C884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002C884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002C884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002C884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002C884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002 884.0031532287597 80.11032500000002 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 884.0031532287597 80.11032500000002 L 884.0031532287597 60.690125000000016 L 902.8117309570313 60.690125000000016 L 902.8117309570313 80.11032500000002 Z"
                                                    pathFrom="M 884.0031532287597 80.11032500000002 L 884.0031532287597 60.690125000000016 L 902.8117309570313 60.690125000000016 L 902.8117309570313 80.11032500000002 Z L 884.0031532287597 80.11032500000002 L 902.8117309570313 80.11032500000002 L 902.8117309570313 80.11032500000002 L 902.8117309570313 80.11032500000002 L 902.8117309570313 80.11032500000002 L 902.8117309570313 80.11032500000002 L 884.0031532287597 80.11032500000002 Z"
                                                    cy="60.68912500000002" cx="978.0460418701172" j="9" val="8"
                                                    barHeight="19.420199999999998" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1286"
                                                    d="M978.0460418701172 189.34895L978.0460418701172 157.791125L996.8546195983887 157.791125L996.8546195983887 189.34895L978.0460418701172 189.34895C978.0460418701172 189.34895 978.0460418701172 189.34895 978.0460418701172 189.34895C978.0460418701172 189.34895 978.0460418701172 189.34895 978.0460418701172 189.34895C978.0460418701172 189.34895 978.0460418701172 189.34895 978.0460418701172 189.34895C978.0460418701172 189.34895 978.0460418701172 189.34895 978.0460418701172 189.34895C978.0460418701172 189.34895 978.0460418701172 189.34895 978.0460418701172 189.34895C978.0460418701172 189.34895 978.0460418701172 189.34895 978.0460418701172 189.34895C978.0460418701172 189.34895 978.0460418701172 189.34895 978.0460418701172 189.34895C978.0460418701172 189.34895 978.0460418701172 189.34895 978.0460418701172 189.34895 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 978.0460418701172 189.34895 L 978.0460418701172 157.791125 L 996.8546195983887 157.791125 L 996.8546195983887 189.34895 Z"
                                                    pathFrom="M 978.0460418701172 189.34895 L 978.0460418701172 157.791125 L 996.8546195983887 157.791125 L 996.8546195983887 189.34895 Z L 978.0460418701172 189.34895 L 996.8546195983887 189.34895 L 996.8546195983887 189.34895 L 996.8546195983887 189.34895 L 996.8546195983887 189.34895 L 996.8546195983887 189.34895 L 978.0460418701172 189.34895 Z"
                                                    cy="157.790125" cx="1072.0889305114747" j="10" val="13"
                                                    barHeight="31.557824999999998" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1288"
                                                    d="M1072.0889305114747 138.370925L1072.0889305114747 72.82775000000001L1090.8975082397462 72.82775000000001L1090.8975082397462 138.370925L1072.0889305114747 138.370925C1072.0889305114747 138.370925 1072.0889305114747 138.370925 1072.0889305114747 138.370925C1072.0889305114747 138.370925 1072.0889305114747 138.370925 1072.0889305114747 138.370925C1072.0889305114747 138.370925 1072.0889305114747 138.370925 1072.0889305114747 138.370925C1072.0889305114747 138.370925 1072.0889305114747 138.370925 1072.0889305114747 138.370925C1072.0889305114747 138.370925 1072.0889305114747 138.370925 1072.0889305114747 138.370925C1072.0889305114747 138.370925 1072.0889305114747 138.370925 1072.0889305114747 138.370925C1072.0889305114747 138.370925 1072.0889305114747 138.370925 1072.0889305114747 138.370925C1072.0889305114747 138.370925 1072.0889305114747 138.370925 1072.0889305114747 138.370925 "
                                                    fill="rgba(132,90,223, 0.5)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 1072.0889305114747 138.370925 L 1072.0889305114747 72.82775000000001 L 1090.8975082397462 72.82775000000001 L 1090.8975082397462 138.370925 Z"
                                                    pathFrom="M 1072.0889305114747 138.370925 L 1072.0889305114747 72.82775000000001 L 1090.8975082397462 72.82775000000001 L 1090.8975082397462 138.370925 Z L 1072.0889305114747 138.370925 L 1090.8975082397462 138.370925 L 1090.8975082397462 138.370925 L 1090.8975082397462 138.370925 L 1090.8975082397462 138.370925 L 1090.8975082397462 138.370925 L 1072.0889305114747 138.370925 Z"
                                                    cy="72.82675" cx="1166.1318191528321" j="11" val="27"
                                                    barHeight="65.54317499999999" barWidth="18.808577728271484">
                                                </path>
                                                <g id="SvgjsG1264" class="apexcharts-bar-goals-markers"
                                                    style="pointer-events: none">
                                                    <g id="SvgjsG1265" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1267" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1269" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1271" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1273" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1275" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1277" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1279" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1281" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1283" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1285" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1287" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1289" class="apexcharts-series" seriesName="SEO" rel="3"
                                                data:realIndex="2">
                                                <path id="SvgjsPath1293"
                                                    d="M37.61715545654297 104.38657500000001L37.61715545654297 77.6838L56.42573318481445 77.6838L56.42573318481445 104.38657500000001L37.61715545654297 104.38657500000001C37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001C37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001C37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001C37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001C37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001C37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001C37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001C37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001 37.61715545654297 104.38657500000001 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 37.61715545654297 104.38657500000001 L 37.61715545654297 77.6838 L 56.42573318481445 77.6838 L 56.42573318481445 104.38657500000001 Z"
                                                    pathFrom="M 37.61715545654297 104.38657500000001 L 37.61715545654297 77.6838 L 56.42573318481445 77.6838 L 56.42573318481445 104.38657500000001 Z L 37.61715545654297 104.38657500000001 L 56.42573318481445 104.38657500000001 L 56.42573318481445 104.38657500000001 L 56.42573318481445 104.38657500000001 L 56.42573318481445 104.38657500000001 L 56.42573318481445 104.38657500000001 L 37.61715545654297 104.38657500000001 Z"
                                                    cy="77.6828" cx="131.6600440979004" j="0" val="11"
                                                    barHeight="26.702775" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1295"
                                                    d="M131.6600440979004 53.40855000000001L131.6600440979004 12.140625000000016L150.46862182617187 12.140625000000016L150.46862182617187 53.40855000000001L131.6600440979004 53.40855000000001C131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001C131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001C131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001C131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001C131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001C131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001C131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001C131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001 131.6600440979004 53.40855000000001 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 131.6600440979004 53.40855000000001 L 131.6600440979004 12.140625000000016 L 150.46862182617187 12.140625000000016 L 150.46862182617187 53.40855000000001 Z"
                                                    pathFrom="M 131.6600440979004 53.40855000000001 L 131.6600440979004 12.140625000000016 L 150.46862182617187 12.140625000000016 L 150.46862182617187 53.40855000000001 Z L 131.6600440979004 53.40855000000001 L 150.46862182617187 53.40855000000001 L 150.46862182617187 53.40855000000001 L 150.46862182617187 53.40855000000001 L 150.46862182617187 53.40855000000001 L 150.46862182617187 53.40855000000001 L 131.6600440979004 53.40855000000001 Z"
                                                    cy="12.139625000000017" cx="225.70293273925782" j="1" val="17"
                                                    barHeight="41.267925" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1297"
                                                    d="M225.70293273925782 94.67647500000001L225.70293273925782 58.263600000000004L244.5115104675293 58.263600000000004L244.5115104675293 94.67647500000001L225.70293273925782 94.67647500000001C225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001C225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001C225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001C225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001C225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001C225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001C225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001C225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001 225.70293273925782 94.67647500000001 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 225.70293273925782 94.67647500000001 L 225.70293273925782 58.263600000000004 L 244.5115104675293 58.263600000000004 L 244.5115104675293 94.67647500000001 Z"
                                                    pathFrom="M 225.70293273925782 94.67647500000001 L 225.70293273925782 58.263600000000004 L 244.5115104675293 58.263600000000004 L 244.5115104675293 94.67647500000001 Z L 225.70293273925782 94.67647500000001 L 244.5115104675293 94.67647500000001 L 244.5115104675293 94.67647500000001 L 244.5115104675293 94.67647500000001 L 244.5115104675293 94.67647500000001 L 244.5115104675293 94.67647500000001 L 225.70293273925782 94.67647500000001 Z"
                                                    cy="58.262600000000006" cx="319.7458213806152" j="2" val="15"
                                                    barHeight="36.412875" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1299"
                                                    d="M319.7458213806152 60.691125000000014L319.7458213806152 24.278250000000018L338.5543991088867 24.278250000000018L338.5543991088867 60.691125000000014L319.7458213806152 60.691125000000014C319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014C319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014C319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014C319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014C319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014C319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014C319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014C319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014 319.7458213806152 60.691125000000014 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 319.7458213806152 60.691125000000014 L 319.7458213806152 24.278250000000018 L 338.5543991088867 24.278250000000018 L 338.5543991088867 60.691125000000014 Z"
                                                    pathFrom="M 319.7458213806152 60.691125000000014 L 319.7458213806152 24.278250000000018 L 338.5543991088867 24.278250000000018 L 338.5543991088867 60.691125000000014 Z L 319.7458213806152 60.691125000000014 L 338.5543991088867 60.691125000000014 L 338.5543991088867 60.691125000000014 L 338.5543991088867 60.691125000000014 L 338.5543991088867 60.691125000000014 L 338.5543991088867 60.691125000000014 L 319.7458213806152 60.691125000000014 Z"
                                                    cy="24.277250000000016" cx="413.78871002197263" j="3" val="15"
                                                    barHeight="36.412875" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1301"
                                                    d="M413.78871002197263 157.792125L413.78871002197263 106.8141L432.5972877502441 106.8141L432.5972877502441 157.792125L413.78871002197263 157.792125C413.78871002197263 157.792125 413.78871002197263 157.792125 413.78871002197263 157.792125C413.78871002197263 157.792125 413.78871002197263 157.792125 413.78871002197263 157.792125C413.78871002197263 157.792125 413.78871002197263 157.792125 413.78871002197263 157.792125C413.78871002197263 157.792125 413.78871002197263 157.792125 413.78871002197263 157.792125C413.78871002197263 157.792125 413.78871002197263 157.792125 413.78871002197263 157.792125C413.78871002197263 157.792125 413.78871002197263 157.792125 413.78871002197263 157.792125C413.78871002197263 157.792125 413.78871002197263 157.792125 413.78871002197263 157.792125C413.78871002197263 157.792125 413.78871002197263 157.792125 413.78871002197263 157.792125 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 413.78871002197263 157.792125 L 413.78871002197263 106.8141 L 432.5972877502441 106.8141 L 432.5972877502441 157.792125 Z"
                                                    pathFrom="M 413.78871002197263 157.792125 L 413.78871002197263 106.8141 L 432.5972877502441 106.8141 L 432.5972877502441 157.792125 Z L 413.78871002197263 157.792125 L 432.5972877502441 157.792125 L 432.5972877502441 157.792125 L 432.5972877502441 157.792125 L 432.5972877502441 157.792125 L 432.5972877502441 157.792125 L 413.78871002197263 157.792125 Z"
                                                    cy="106.81309999999999" cx="507.83159866333006" j="4" val="21"
                                                    barHeight="50.978024999999995" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1303"
                                                    d="M507.83159866333006 72.82875000000001L507.83159866333006 38.84340000000001L526.6401763916016 38.84340000000001L526.6401763916016 72.82875000000001L507.83159866333006 72.82875000000001C507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001C507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001C507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001C507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001C507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001C507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001C507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001C507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001 507.83159866333006 72.82875000000001 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 507.83159866333006 72.82875000000001 L 507.83159866333006 38.84340000000001 L 526.6401763916016 38.84340000000001 L 526.6401763916016 72.82875000000001 Z"
                                                    pathFrom="M 507.83159866333006 72.82875000000001 L 507.83159866333006 38.84340000000001 L 526.6401763916016 38.84340000000001 L 526.6401763916016 72.82875000000001 Z L 507.83159866333006 72.82875000000001 L 526.6401763916016 72.82875000000001 L 526.6401763916016 72.82875000000001 L 526.6401763916016 72.82875000000001 L 526.6401763916016 72.82875000000001 L 526.6401763916016 72.82875000000001 L 507.83159866333006 72.82875000000001 Z"
                                                    cy="38.84240000000001" cx="601.8744873046875" j="5" val="14"
                                                    barHeight="33.98535" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1305"
                                                    d="M601.8744873046875 104.38657500000001L601.8744873046875 77.6838L620.683065032959 77.6838L620.683065032959 104.38657500000001L601.8744873046875 104.38657500000001C601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001C601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001C601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001C601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001C601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001C601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001C601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001C601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001 601.8744873046875 104.38657500000001 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 601.8744873046875 104.38657500000001 L 601.8744873046875 77.6838 L 620.683065032959 77.6838 L 620.683065032959 104.38657500000001 Z"
                                                    pathFrom="M 601.8744873046875 104.38657500000001 L 601.8744873046875 77.6838 L 620.683065032959 77.6838 L 620.683065032959 104.38657500000001 Z L 601.8744873046875 104.38657500000001 L 620.683065032959 104.38657500000001 L 620.683065032959 104.38657500000001 L 620.683065032959 104.38657500000001 L 620.683065032959 104.38657500000001 L 620.683065032959 104.38657500000001 L 601.8744873046875 104.38657500000001 Z"
                                                    cy="77.6828" cx="695.9173759460449" j="6" val="11"
                                                    barHeight="26.702775" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1307"
                                                    d="M695.9173759460449 53.40855000000001L695.9173759460449 12.140625000000016L714.7259536743164 12.140625000000016L714.7259536743164 53.40855000000001L695.9173759460449 53.40855000000001C695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001C695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001C695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001C695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001C695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001C695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001C695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001C695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001 695.9173759460449 53.40855000000001 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 695.9173759460449 53.40855000000001 L 695.9173759460449 12.140625000000016 L 714.7259536743164 12.140625000000016 L 714.7259536743164 53.40855000000001 Z"
                                                    pathFrom="M 695.9173759460449 53.40855000000001 L 695.9173759460449 12.140625000000016 L 714.7259536743164 12.140625000000016 L 714.7259536743164 53.40855000000001 Z L 695.9173759460449 53.40855000000001 L 714.7259536743164 53.40855000000001 L 714.7259536743164 53.40855000000001 L 714.7259536743164 53.40855000000001 L 714.7259536743164 53.40855000000001 L 714.7259536743164 53.40855000000001 L 695.9173759460449 53.40855000000001 Z"
                                                    cy="12.139625000000017" cx="789.9602645874023" j="7" val="17"
                                                    barHeight="41.267925" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1309"
                                                    d="M789.9602645874023 94.67647500000001L789.9602645874023 58.263600000000004L808.7688423156739 58.263600000000004L808.7688423156739 94.67647500000001L789.9602645874023 94.67647500000001C789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001C789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001C789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001C789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001C789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001C789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001C789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001C789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001 789.9602645874023 94.67647500000001 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 789.9602645874023 94.67647500000001 L 789.9602645874023 58.263600000000004 L 808.7688423156739 58.263600000000004 L 808.7688423156739 94.67647500000001 Z"
                                                    pathFrom="M 789.9602645874023 94.67647500000001 L 789.9602645874023 58.263600000000004 L 808.7688423156739 58.263600000000004 L 808.7688423156739 94.67647500000001 Z L 789.9602645874023 94.67647500000001 L 808.7688423156739 94.67647500000001 L 808.7688423156739 94.67647500000001 L 808.7688423156739 94.67647500000001 L 808.7688423156739 94.67647500000001 L 808.7688423156739 94.67647500000001 L 789.9602645874023 94.67647500000001 Z"
                                                    cy="58.262600000000006" cx="884.0031532287597" j="8" val="15"
                                                    barHeight="36.412875" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1311"
                                                    d="M884.0031532287597 60.691125000000014L884.0031532287597 24.278250000000018L902.8117309570313 24.278250000000018L902.8117309570313 60.691125000000014L884.0031532287597 60.691125000000014C884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014C884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014C884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014C884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014C884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014C884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014C884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014C884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014 884.0031532287597 60.691125000000014 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 884.0031532287597 60.691125000000014 L 884.0031532287597 24.278250000000018 L 902.8117309570313 24.278250000000018 L 902.8117309570313 60.691125000000014 Z"
                                                    pathFrom="M 884.0031532287597 60.691125000000014 L 884.0031532287597 24.278250000000018 L 902.8117309570313 24.278250000000018 L 902.8117309570313 60.691125000000014 Z L 884.0031532287597 60.691125000000014 L 902.8117309570313 60.691125000000014 L 902.8117309570313 60.691125000000014 L 902.8117309570313 60.691125000000014 L 902.8117309570313 60.691125000000014 L 902.8117309570313 60.691125000000014 L 884.0031532287597 60.691125000000014 Z"
                                                    cy="24.277250000000016" cx="978.0460418701172" j="9" val="15"
                                                    barHeight="36.412875" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1313"
                                                    d="M978.0460418701172 157.792125L978.0460418701172 106.8141L996.8546195983887 106.8141L996.8546195983887 157.792125L978.0460418701172 157.792125C978.0460418701172 157.792125 978.0460418701172 157.792125 978.0460418701172 157.792125C978.0460418701172 157.792125 978.0460418701172 157.792125 978.0460418701172 157.792125C978.0460418701172 157.792125 978.0460418701172 157.792125 978.0460418701172 157.792125C978.0460418701172 157.792125 978.0460418701172 157.792125 978.0460418701172 157.792125C978.0460418701172 157.792125 978.0460418701172 157.792125 978.0460418701172 157.792125C978.0460418701172 157.792125 978.0460418701172 157.792125 978.0460418701172 157.792125C978.0460418701172 157.792125 978.0460418701172 157.792125 978.0460418701172 157.792125C978.0460418701172 157.792125 978.0460418701172 157.792125 978.0460418701172 157.792125 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 978.0460418701172 157.792125 L 978.0460418701172 106.8141 L 996.8546195983887 106.8141 L 996.8546195983887 157.792125 Z"
                                                    pathFrom="M 978.0460418701172 157.792125 L 978.0460418701172 106.8141 L 996.8546195983887 106.8141 L 996.8546195983887 157.792125 Z L 978.0460418701172 157.792125 L 996.8546195983887 157.792125 L 996.8546195983887 157.792125 L 996.8546195983887 157.792125 L 996.8546195983887 157.792125 L 996.8546195983887 157.792125 L 978.0460418701172 157.792125 Z"
                                                    cy="106.81309999999999" cx="1072.0889305114747" j="10" val="21"
                                                    barHeight="50.978024999999995" barWidth="18.808577728271484"></path>
                                                <path id="SvgjsPath1315"
                                                    d="M1072.0889305114747 72.82875000000001L1072.0889305114747 38.84340000000001L1090.8975082397462 38.84340000000001L1090.8975082397462 72.82875000000001L1072.0889305114747 72.82875000000001C1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001C1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001C1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001C1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001C1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001C1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001C1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001C1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001 1072.0889305114747 72.82875000000001 "
                                                    fill="rgba(132,90,223, 0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectMaskbvr0gaq3h)"
                                                    pathTo="M 1072.0889305114747 72.82875000000001 L 1072.0889305114747 38.84340000000001 L 1090.8975082397462 38.84340000000001 L 1090.8975082397462 72.82875000000001 Z"
                                                    pathFrom="M 1072.0889305114747 72.82875000000001 L 1072.0889305114747 38.84340000000001 L 1090.8975082397462 38.84340000000001 L 1090.8975082397462 72.82875000000001 Z L 1072.0889305114747 72.82875000000001 L 1090.8975082397462 72.82875000000001 L 1090.8975082397462 72.82875000000001 L 1090.8975082397462 72.82875000000001 L 1090.8975082397462 72.82875000000001 L 1090.8975082397462 72.82875000000001 L 1072.0889305114747 72.82875000000001 Z"
                                                    cy="38.84240000000001" cx="1166.1318191528321" j="11" val="14"
                                                    barHeight="33.98535" barWidth="18.808577728271484">
                                                </path>
                                                <g id="SvgjsG1291" class="apexcharts-bar-goals-markers"
                                                    style="pointer-events: none">
                                                    <g id="SvgjsG1292" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1294" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1296" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1298" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1300" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1302" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1304" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1306" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1308" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1310" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1312" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                    <g id="SvgjsG1314" className="apexcharts-bar-goals-groups">
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1236" class="apexcharts-datalabels" data:realIndex="0">
                                            </g>
                                            <g id="SvgjsG1263" class="apexcharts-datalabels" data:realIndex="1">
                                            </g>
                                            <g id="SvgjsG1290" class="apexcharts-datalabels" data:realIndex="2">
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1354" x1="0" y1="0" x2="1128.514663696289" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1355" x1="0" y1="0" x2="1128.514663696289" y2="0"
                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1356" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1357" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1358" class="apexcharts-point-annotations"></g>
                                        <g id="SvgjsG1359" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1360" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1362"
                                                    font-family="Helvetica, Arial, sans-serif" x="47.02144432067871"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1363">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText1365"
                                                    font-family="Helvetica, Arial, sans-serif" x="141.06433296203613"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1366">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1368"
                                                    font-family="Helvetica, Arial, sans-serif" x="235.10722160339355"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1369">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText1371"
                                                    font-family="Helvetica, Arial, sans-serif" x="329.150110244751"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1372">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1374"
                                                    font-family="Helvetica, Arial, sans-serif" x="423.1929988861084"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1375">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1377"
                                                    font-family="Helvetica, Arial, sans-serif" x="517.2358875274658"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1378">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1380"
                                                    font-family="Helvetica, Arial, sans-serif" x="611.2787761688232"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1381">Jul</tspan>
                                                    <title>Jul</title>
                                                </text><text id="SvgjsText1383"
                                                    font-family="Helvetica, Arial, sans-serif" x="705.3216648101807"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1384">Aug</tspan>
                                                    <title>Aug</title>
                                                </text><text id="SvgjsText1386"
                                                    font-family="Helvetica, Arial, sans-serif" x="799.3645534515381"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1387">Sep</tspan>
                                                    <title>Sep</title>
                                                </text><text id="SvgjsText1389"
                                                    font-family="Helvetica, Arial, sans-serif" x="893.4074420928955"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1390">Oct</tspan>
                                                    <title>Oct</title>
                                                </text><text id="SvgjsText1392"
                                                    font-family="Helvetica, Arial, sans-serif" x="987.4503307342529"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1393">Nov</tspan>
                                                    <title>Nov</title>
                                                </text><text id="SvgjsText1395"
                                                    font-family="Helvetica, Arial, sans-serif" x="1081.4932193756104"
                                                    y="271.7525" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1396">Dec</tspan>
                                                    <title>Dec</title>
                                                </text></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1398" class="apexcharts-yaxis" rel="0"
                                        transform="translate(15.485336303710938, 0)">
                                        <g id="SvgjsG1399" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1401"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="31.5"
                                                text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1402">100</tspan>
                                                <title>100</title>
                                            </text><text id="SvgjsText1404" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="80.0505" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1405">80</tspan>
                                                <title>80</title>
                                            </text><text id="SvgjsText1407" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="128.601" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1408">60</tspan>
                                                <title>60</title>
                                            </text><text id="SvgjsText1410" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="177.1515" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1411">40</tspan>
                                                <title>40</title>
                                            </text><text id="SvgjsText1413" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="225.702" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1414">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText1416" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="274.2525" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1417">0</tspan>
                                                <title>0</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1224" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 155px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(132, 90, 223);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(132, 90, 223, 0.5);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(132, 90, 223, 0.2);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                                <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                    <div class="apexcharts-menu-icon" title="Menu"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                        </svg></div>
                                    <div class="apexcharts-menu">
                                        <div class="apexcharts-menu-item exportSVG" title="Download SVG">
                                            Download SVG</div>
                                        <div class="apexcharts-menu-item exportPNG" title="Download PNG">
                                            Download PNG</div>
                                        <div class="apexcharts-menu-item exportCSV" title="Download CSV">
                                            Download CSV</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
        <!-- Start::row-2 -->
        <div class="row">
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title"> Jobs Summary </div>
                    </div>
                    <div class="card-body p-4">
                        <div id="jobs-summary" style="min-height: 232.8px;">
                            <div id="apexchartsfzpxbzdw"
                                class="apexcharts-canvas apexchartsfzpxbzdw apexcharts-theme-light"
                                style="width: 463px; height: 232.8px;"><svg id="SvgjsSvg1418" width="463"
                                    height="232.79999999999998" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1420" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(119.5, 0)">
                                        <defs id="SvgjsDefs1419">
                                            <clipPath id="gridRectMaskfzpxbzdw">
                                                <rect id="SvgjsRect1422" width="230" height="248" x="-2" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskfzpxbzdw"></clipPath>
                                            <clipPath id="nonForecastMaskfzpxbzdw"></clipPath>
                                            <clipPath id="gridRectMarkerMaskfzpxbzdw">
                                                <rect id="SvgjsRect1423" width="230" height="252" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG1424" class="apexcharts-pie">
                                            <g id="SvgjsG1425" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle1426" r="74.37073170731708" cx="113" cy="113"
                                                    fill="transparent"></circle>
                                                <g id="SvgjsG1427" class="apexcharts-slices">
                                                    <g id="SvgjsG1428" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Published" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1429"
                                                            d="M 113 6.756097560975604 A 106.2439024390244 106.2439024390244 0 1 1 86.02433530640596 215.76225143413177 L 94.11703471448418 184.93357600389226 A 74.37073170731708 74.37073170731708 0 1 0 113 38.62926829268292 L 113 6.756097560975604 z"
                                                            fill="#845adf" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                            index="0" j="0" data:angle="194.70860314523588"
                                                            data:startAngle="0" data:strokeWidth="0" data:value="1754"
                                                            data:pathOrig="M 113 6.756097560975604 A 106.2439024390244 106.2439024390244 0 1 1 86.02433530640596 215.76225143413177 L 94.11703471448418 184.93357600389226 A 74.37073170731708 74.37073170731708 0 1 0 113 38.62926829268292 L 113 6.756097560975604 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1430" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Private" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1431"
                                                            d="M 86.02433530640596 215.76225143413177 A 106.2439024390244 106.2439024390244 0 0 1 10.329801572522726 140.32393017732588 L 41.13086110076591 132.1267511241281 A 74.37073170731708 74.37073170731708 0 0 0 94.11703471448418 184.93357600389226 L 86.02433530640596 215.76225143413177 z"
                                                            fill="rgba(132,90,223, 0.7)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                            index="0" j="1" data:angle="60.38852913968549"
                                                            data:startAngle="194.70860314523588" data:strokeWidth="0"
                                                            data:value="544"
                                                            data:pathOrig="M 86.02433530640596 215.76225143413177 A 106.2439024390244 106.2439024390244 0 0 1 10.329801572522726 140.32393017732588 L 41.13086110076591 132.1267511241281 A 74.37073170731708 74.37073170731708 0 0 0 94.11703471448418 184.93357600389226 L 86.02433530640596 215.76225143413177 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1432" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Closed" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath1433"
                                                            d="M 10.329801572522726 140.32393017732588 A 106.2439024390244 106.2439024390244 0 0 1 61.1756725137287 20.253000662724205 L 76.72297075961009 48.077100463906945 A 74.37073170731708 74.37073170731708 0 0 0 41.13086110076591 132.1267511241281 L 10.329801572522726 140.32393017732588 z"
                                                            fill="rgba(132,90,223, 0.4)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                            index="0" j="2" data:angle="75.70767807585571"
                                                            data:startAngle="255.09713228492137" data:strokeWidth="0"
                                                            data:value="682"
                                                            data:pathOrig="M 10.329801572522726 140.32393017732588 A 106.2439024390244 106.2439024390244 0 0 1 61.1756725137287 20.253000662724205 L 76.72297075961009 48.077100463906945 A 74.37073170731708 74.37073170731708 0 0 0 41.13086110076591 132.1267511241281 L 10.329801572522726 140.32393017732588 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1434" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="OnxHold" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath1435"
                                                            d="M 61.1756725137287 20.253000662724205 A 106.2439024390244 106.2439024390244 0 0 1 112.98145694101684 6.75609917916276 L 112.98701985871179 38.62926942541394 A 74.37073170731708 74.37073170731708 0 0 0 76.72297075961009 48.077100463906945 L 61.1756725137287 20.253000662724205 z"
                                                            fill="#f3f6f8" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                            index="0" j="3" data:angle="29.195189639222917"
                                                            data:startAngle="330.8048103607771" data:strokeWidth="0"
                                                            data:value="263"
                                                            data:pathOrig="M 61.1756725137287 20.253000662724205 A 106.2439024390244 106.2439024390244 0 0 1 112.98145694101684 6.75609917916276 L 112.98701985871179 38.62926942541394 A 74.37073170731708 74.37073170731708 0 0 0 76.72297075961009 48.077100463906945 L 61.1756725137287 20.253000662724205 z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1436" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"><text id="SvgjsText1437"
                                                    font-family="Helvetica, Arial, sans-serif" x="113" y="109"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="22px"
                                                    font-weight="600" fill="#495057"
                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                    style="font-family: Helvetica, Arial, sans-serif; fill: rgb(73, 80, 87);">Total</text><text
                                                    id="SvgjsText1438" font-family="Helvetica, Arial, sans-serif"
                                                    x="113" y="137" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="18px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                    style="font-family: Helvetica, Arial, sans-serif;">3243</text>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1439" x1="0" y1="0" x2="226" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1440" x1="0" y1="0" x2="226" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1421" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark"
                                    style="left: 86.5039px; top: 104.895px;">
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="order: 1; display: flex; background-color: rgba(132, 90, 223, 0.7);">
                                        <span class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(132, 90, 223, 0.7); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Private:
                                                </span><span class="apexcharts-tooltip-text-y-value">544</span>
                                            </div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"
                                        style="order: 2; display: none; background-color: rgba(132, 90, 223, 0.7);">
                                        <span class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(132, 90, 223, 0.7); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Private:
                                                </span><span class="apexcharts-tooltip-text-y-value">544</span>
                                            </div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"
                                        style="order: 3; display: none; background-color: rgba(132, 90, 223, 0.7);">
                                        <span class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(132, 90, 223, 0.7); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Private:
                                                </span><span class="apexcharts-tooltip-text-y-value">544</span>
                                            </div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"
                                        style="order: 4; display: none; background-color: rgba(132, 90, 223, 0.7);">
                                        <span class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(132, 90, 223, 0.7); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Private:
                                                </span><span class="apexcharts-tooltip-text-y-value">544</span>
                                            </div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-4 my-2">
                        <div class="row row-cols-12">
                            <div class="col p-0">
                                <div class="text-center"> <span
                                        class="text-muted fs-12 mb-1 hrm-jobs-legend published d-inline-block ms-2">Published
                                    </span>
                                    <div><span class="fs-16 fw-semibold">1,624</span> </div>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="text-center"> <span
                                        class="text-muted fs-12 mb-1 hrm-jobs-legend private d-inline-block ms-2">Private
                                    </span>
                                    <div><span class="fs-16 fw-semibold">1,267</span></div>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="text-center"> <span
                                        class="text-muted fs-12 mb-1 hrm-jobs-legend closed d-inline-block ms-2">Closed
                                    </span>
                                    <div><span class="fs-16 fw-semibold">1,153</span> </div>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="text-center"> <span
                                        class="text-muted fs-12 mb-1 hrm-jobs-legend onhold d-inline-block ms-2">On
                                        Hold </span>
                                    <div><span class="fs-16 fw-semibold">1,153</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Upcoming Events</div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled timeline-widget mb-0 my-3">
                            <li class="timeline-widget-list">
                                <div class="d-flex align-items-top">
                                    <div class="me-5 text-center"> <span
                                            class="d-block fs-20 fw-semibold text-primary">02</span> <span
                                            class="d-block fs-12 text-muted">Mon</span> </div>
                                    <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                        <div>
                                            <p class="mb-1 text-truncate timeline-widget-content text-wrap">You
                                                have an announcement - Ipsum Est Diam Eirmod</p>
                                            <p class="mb-0 fs-12 lh-1 text-muted">10:00AM<span
                                                    class="badge bg-primary-transparent ms-2">Announcement</span>
                                            </p>
                                        </div>
                                        <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                                class="p-2 fs-16 text-muted" data-bs-toggle="dropdown"> <i
                                                    class="fe fe-more-vertical"></i> </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-widget-list">
                                <div class="d-flex align-items-top">
                                    <div class="me-5 text-center"> <span
                                            class="d-block fs-20 fw-semibold text-primary">15</span> <span
                                            class="d-block fs-12 text-muted">Sun</span> </div>
                                    <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                        <div>
                                            <p class="mb-1 text-truncate timeline-widget-content text-wrap">
                                                National holiday - Vero Jayanti</p>
                                            <p class="mb-0 fs-12 lh-1 text-muted"><span
                                                    class="badge bg-warning-transparent">Holiday</span></p>
                                        </div>
                                        <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                                class="p-2 fs-16 text-muted" data-bs-toggle="dropdown"> <i
                                                    class="fe fe-more-vertical"></i> </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-widget-list">
                                <div class="d-flex align-items-top">
                                    <div class="me-5 text-center"> <span
                                            class="d-block fs-20 fw-semibold text-primary">23</span> <span
                                            class="d-block fs-12 text-muted">Mon</span> </div>
                                    <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                        <div>
                                            <p class="mb-1 text-truncate timeline-widget-content text-wrap">John
                                                pup birthday - Team Member</p>
                                            <p class="mb-4 fs-12 lh-1 text-muted">09:00AM<span
                                                    class="badge bg-success-transparent ms-2">Birthday</span>
                                            </p>
                                            <p class="mb-1 text-truncate timeline-widget-content text-wrap">Amet
                                                sed no dolor kasd - Et Dolores Tempor Erat</p>
                                            <p class="mb-0 fs-12 lh-1 text-muted">04:00PM<span
                                                    class="badge bg-primary-transparent ms-2">Announcement</span>
                                            </p>
                                        </div>
                                        <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                                class="p-2 fs-16 text-muted" data-bs-toggle="dropdown"> <i
                                                    class="fe fe-more-vertical"></i> </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-widget-list">
                                <div class="d-flex align-items-top">
                                    <div class="me-5 text-center"> <span
                                            class="d-block fs-20 fw-semibold text-primary">31</span> <span
                                            class="d-block fs-12 text-muted">Tue</span> </div>
                                    <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                        <div>
                                            <p class="mb-1 text-truncate timeline-widget-content text-wrap">
                                                National Holiday - Dolore Ipsum</p>
                                            <p class="mb-0 fs-12 lh-1 text-muted"><span
                                                    class="badge bg-warning-transparent">Holiday</span></p>
                                        </div>
                                        <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                                class="p-2 fs-16 text-muted" data-bs-toggle="dropdown"> <i
                                                    class="fe fe-more-vertical"></i> </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Clients</div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Client</th>
                                        <th scope="col">Mail</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/2.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Diana Aise</span>
                                                    <span class="d-block text-muted fs-12">C.E.O</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td>diana.1116@demo.com</td>
                                        <td> <select class="form-select" aria-label="Default select example">
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select> </td>
                                        <td>
                                            <div class="btn-list"> <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-primary-light btn-icon"><i
                                                        class="ri-pencil-line"></i></button> <button aria-label="button"
                                                    type="button" class="btn btn-sm btn-success-light btn-icon"><i
                                                        class="ri-delete-bin-line"></i></button> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/8.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Rose Mary</span>
                                                    <span class="d-block text-muted fs-12">C.E.O</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td>rose756@demo.com</td>
                                        <td> <select class="form-select" aria-label="Default select example">
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select> </td>
                                        <td>
                                            <div class="btn-list"> <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-primary-light btn-icon"><i
                                                        class="ri-pencil-line"></i></button> <button aria-label="button"
                                                    type="button" class="btn btn-sm btn-success-light btn-icon"><i
                                                        class="ri-delete-bin-line"></i></button> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/13.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Gretchen Iox</span>
                                                    <span class="d-block text-muted fs-12">Manager</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td>gretchen.1.25@demo.com</td>
                                        <td> <select class="form-select" aria-label="Default select example">
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select> </td>
                                        <td>
                                            <div class="btn-list"> <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-primary-light btn-icon"><i
                                                        class="ri-pencil-line"></i></button> <button aria-label="button"
                                                    type="button" class="btn btn-sm btn-success-light btn-icon"><i
                                                        class="ri-delete-bin-line"></i></button> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/11.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Gray Noal</span>
                                                    <span class="d-block text-muted fs-12">Manager</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td>gray12gray@demo.com</td>
                                        <td> <select class="form-select" aria-label="Default select example">
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select> </td>
                                        <td>
                                            <div class="btn-list"> <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-primary-light btn-icon"><i
                                                        class="ri-pencil-line"></i></button> <button aria-label="button"
                                                    type="button" class="btn btn-sm btn-success-light btn-icon"><i
                                                        class="ri-delete-bin-line"></i></button> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border-bottom-0">
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/5.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Isa Bella</span>
                                                    <span class="d-block text-muted fs-12">C.E.O</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="border-bottom-0">isa158@demo.com</td>
                                        <td class="border-bottom-0"> <select class="form-select"
                                                aria-label="Default select example">
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select> </td>
                                        <td class="border-bottom-0">
                                            <div class="btn-list"> <button aria-label="button" type="button"
                                                    class="btn btn-sm btn-primary-light btn-icon"><i
                                                        class="ri-pencil-line"></i></button> <button aria-label="button"
                                                    type="button" class="btn btn-sm btn-success-light btn-icon"><i
                                                        class="ri-delete-bin-line"></i></button> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End::row-2 -->
        <!-- Start::row-3 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between flex-wrap">
                        <div class="card-title"> Bills Summary </div>
                        <div class="d-flex">
                            <div class="me-3"> <input class="form-control form-control-sm" type="text"
                                    placeholder="Search Here" aria-label=".form-control-sm example"> </div>
                            <div class="dropdown"> <a href="javascript:void(0);"
                                    class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                    data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                        class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Invoice ID</th>
                                        <th scope="col">Client</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>#INV111611</td>
                                        <td>
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img
                                                            src="../assets/images/faces/1.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Rena Mark</span>
                                                    <span class="text-muted fs-12">renamark123@demo</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 14-05-2023 </td>
                                        <td> <span class="badge bg-success">Paid</span> </td>
                                        <td> $9,523 </td>
                                        <td>
                                            <div class="btn-list"> <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-info-light"><i
                                                        class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                    href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light"><i
                                                        class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>#INV111611</td>
                                        <td>
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img
                                                            src="../assets/images/faces/4.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Xong Yun</span>
                                                    <span class="text-muted fs-12">xongyun2134@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 14-05-2023 </td>
                                        <td> <span class="badge bg-warning">Pending</span> </td>
                                        <td> $8,243 </td>
                                        <td>
                                            <div class="btn-list"> <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-info-light"><i
                                                        class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                    href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light"><i
                                                        class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>#INV147852</td>
                                        <td>
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img
                                                            src="../assets/images/faces/6.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Kane William</span>
                                                    <span class="text-muted fs-12">william154@demo</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 16-05-2023 </td>
                                        <td> <span class="badge bg-primary">Overdue</span> </td>
                                        <td> $5,234 </td>
                                        <td>
                                            <div class="btn-list"> <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-info-light"><i
                                                        class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                    href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light"><i
                                                        class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>#INV753159</td>
                                        <td>
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img
                                                            src="../assets/images/faces/12.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Stewart Rem</span>
                                                    <span class="text-muted fs-12">remstew092@demo</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 21-05-2023 </td>
                                        <td> <span class="badge bg-success">Paid</span> </td>
                                        <td> $7,546 </td>
                                        <td>
                                            <div class="btn-list"> <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-info-light"><i
                                                        class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                    href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light"><i
                                                        class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>#INV369874</td>
                                        <td>
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img
                                                            src="../assets/images/faces/3.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Elliot Yun</span>
                                                    <span class="text-muted fs-12">eiiliot000@demo</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 18-05-2023 </td>
                                        <td> <span class="badge bg-primary">Overdue</span> </td>
                                        <td> $7,541 </td>
                                        <td>
                                            <div class="btn-list"> <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-info-light"><i
                                                        class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                    href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light"><i
                                                        class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>#INV123456</td>
                                        <td>
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img
                                                            src="../assets/images/faces/5.jpg" alt=""> </span>
                                                </div>
                                                <div> <span class="d-block fw-semibold mb-1">Gretchen Xio</span>
                                                    <span class="text-muted fs-12">gretchenxio999@demo</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 20-05-2023 </td>
                                        <td> <span class="badge bg-warning">Pending</span> </td>
                                        <td> $2,541 </td>
                                        <td>
                                            <div class="btn-list"> <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-info-light"><i
                                                        class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                    href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light"><i
                                                        class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div> Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);">
                                                Prev </a> </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"> <a class="page-link text-primary"
                                                href="javascript:void(0);"> next </a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End::row-3 -->
    </div>
</div> <!-- End::app-content -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group"> <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i
                            class="fe fe-search header-link-icon fs-18"></i></a> <input type="search"
                        class="form-control border-0 px-2" placeholder="Search" aria-label="Username"> <a
                        href="javascript:void(0);" class="input-group-text" id="voice-search"><i
                            class="fe fe-mic header-link-icon"></i></a> <a href="javascript:void(0);"
                        class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false"> <i
                            class="fe fe-more-vertical"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p><span
                        class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)"
                            class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                            class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i
                                class="fe fe-x"></i></a></span> <span class="search-tags"><i
                            class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i
                                class="fe fe-x"></i></a></span> <span class="search-tags"><i
                            class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i
                                class="fe fe-x"></i></a></span>
                </div>
                <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                            href="notifications.html"><span>Notifications</span></a> <a class="ms-auto lh-1"
                            href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                            href="alerts.html"><span>Alerts</span></a> <a class="ms-auto lh-1"
                            href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"> <a
                            href="mail.html"><span>Mail</span></a> <a class="ms-auto lh-1" href="javascript:void(0);"
                            data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group ms-auto"> <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Footer Start -->

<?php

include __DIR__ .  '/../inc/footer.php';

?>