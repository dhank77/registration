@extends('layouts.app')

@section('content')
<div class="main-container container-fluid">
    <div class="row align-items-center">
        <div class="col-6">
            <div class="dashboard-header-title mb-30">
                <h4 class="mb-0">Welcome back</h4>
                <p class="mb-0">Congratulations, You have sold 3 new items.</p>
            </div>
        </div>
        <div class="col-6">
            <div class="dashboard-infor-mation d-flex flex-wrap align-items-center mb-30">
                <div class="dashboard-clock">
                    <div id="dashboardDate"></div>
                    <ul class="d-flex align-items-center justify-content-end">
                        <li id="hours"></li>
                        <li>:</li>
                        <li id="min"></li>
                        <li>:</li>
                        <li id="sec"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Card Widget -->
        <div class="col-sm-6 col-xl-3 mb-30">
            <div class="card p-4">
                <div class="d-flex flex-wrap justify-content-between mb-3">
                    <h6 class="card-title">Pageviews</h6>
                    <p class="mb-0"><small>Last 7 days</small></p>
                </div>
                <div class="widget-content">
                    <div id="pageViews"></div>
                </div>
            </div>
        </div>

        <!-- Card Widget -->
        <div class="col-sm-6 col-xl-3 mb-30">
            <div class="card p-4">
                <div class="d-flex flex-wrap justify-content-between mb-3">
                    <h6 class="card-title">Revenue</h6>
                    <p class="mb-0"><small>Last 7 days</small></p>
                </div>
                <div class="widget-content">
                    <div id="revenueBar"></div>
                </div>
            </div>
        </div>

        <!-- Card Widget -->
        <div class="col-sm-6 col-xl-3 mb-30">
            <div class="card widget-slider-area p-4">
                <div class="d-flex flex-wrap justify-content-between mb-3">
                    <h6 class="card-title">Sales</h6>
                    <a href="#" class="btn btn-circle btn-sm btn-primary"><i class="lni lni-cart"></i></a>
                </div>
                <div class="widget-slides owl-carousel">
                    <!-- Widget Slider Content -->
                    <div class="widget-slider-content">
                        <h6 class="mb-0">$630.63</h6>
                        <p class="mb-0">Last 7 days</p>
                    </div>

                    <!-- Widget Slider Content -->
                    <div class="widget-slider-content">
                        <h6 class="mb-0">$1896.36</h6>
                        <p class="mb-0">Last 30 days</p>
                    </div>

                    <!-- Widget Slider Content -->
                    <div class="widget-slider-content">
                        <h6 class="mb-0">$4987.36</h6>
                        <p class="mb-0">Last 90 days</p>
                    </div>

                    <!-- Widget Slider Content -->
                    <div class="widget-slider-content">
                        <h6 class="mb-0">$1896.36</h6>
                        <p class="mb-0">Last 30 days</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Widget -->
        <div class="col-sm-6 col-xl-3 mb-30">
            <div class="card widget-slider-area p-4">
                <div class="d-flex flex-wrap justify-content-between mb-3">
                    <h6 class="card-title">Export</h6>
                    <a href="#" class="btn btn-circle btn-sm btn-success"><i class="lni lni-exit-up"></i></a>
                </div>
                <div class="widget-slides owl-carousel">
                    <!-- Widget Slider Content -->
                    <div class="widget-slider-content">
                        <h6 class="mb-0">$630.63</h6>
                        <p class="mb-0">Last 7 days</p>
                    </div>

                    <!-- Widget Slider Content -->
                    <div class="widget-slider-content">
                        <h6 class="mb-0">$1896.36</h6>
                        <p class="mb-0">Last 30 days</p>
                    </div>

                    <!-- Widget Slider Content -->
                    <div class="widget-slider-content">
                        <h6 class="mb-0">$4987.36</h6>
                        <p class="mb-0">Last 90 days</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 mb-30">
            <div class="card">
                <div class="card-header bg-transparent d-flex align-items-center justify-content-between">
                    <div class="widgets-card-title">
                        <h5 class="card-title mb-0">Sales Overview</h5>
                    </div>
                    <div class="dashboard-dropdown">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dashboardDropdown8819"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="lni lni-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dashboardDropdown8819">
                                <a class="dropdown-item" href="#"><i class="lni lni-pencil"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="#"><i class="lni lni-cog"></i>
                                    Settings</a>
                                <a class="dropdown-item" href="#"><i class="lni lni-trash"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div id="salesOverview"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 mb-30">
            <div class="card full-height">
                <div class="card-header bg-transparent d-flex align-items-center justify-content-between">
                    <div class="widgets-card-title">
                        <h5 class="card-title mb-0">User By Countries</h5>
                    </div>
                    <div class="dashboard-dropdown">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dashboardDropdown881"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="lni lni-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dashboardDropdown881">
                                <a class="dropdown-item" href="#"><i class="lni lni-pencil"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="#"><i class="lni lni-cog"></i>
                                    Settings</a>
                                <a class="dropdown-item" href="#"><i class="lni lni-trash"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="world-map-markers" class="world-vector-map"></div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
