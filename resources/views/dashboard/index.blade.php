@extends('layouts.dashboard-menu')

@section('title')
    Dashboard
@endsection

@section('content')
    
                <!-- Hero -->
                <div class="bg-image" style="background-image: url('assets/media/photos/photo26@2x.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top content-full text-center">
                            <div class="py-20">
                                <h1 class="h2 font-w700 text-white mb-10">e-Commerce Dashboard</h1>
                                <h2 class="h4 font-w400 text-white-op mb-0">Welcome Admin, you have <a class="text-primary-light link-effect" href="#">12 pending orders</a>.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Breadcrumb -->
                <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="#">e-Commerce</a>
                            <span class="breadcrumb-item active">Dashboard</span>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Statistics -->
                    <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
                    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
                    <div class="content-heading">
                        <div class="dropdown float-right">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-dashboard-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Today
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-dashboard-stats-drop">
                                <a class="dropdown-item active" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>Today
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                                </a>
                            </div>
                        </div>
                        Statistics <small class="d-none d-sm-inline">Awesome!</small>
                    </div>
                    <div class="row gutters-tiny">
                        <!-- Earnings -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-elegance" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-area-chart text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="2420" data-before="$">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Earnings</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Earnings -->

                        <!-- Orders -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-dusk" href="#">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-archive text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="35">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Orders</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Orders -->

                        <!-- New Customers -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-sea" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-users text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="15">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">New Customers</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END New Customers -->

                        <!-- Conversion Rate -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-aqua" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-cart-arrow-down text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white">5.6%</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Conversion</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Conversion Rate -->
                    </div>
                    <!-- END Statistics -->

                    <!-- Orders Overview -->
                    <div class="content-heading">
                        <div class="dropdown float-right">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-overview-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                This Week
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-overview-drop">
                                <a class="dropdown-item active" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                                </a>
                            </div>
                        </div>
                        Orders <small class="d-none d-sm-inline">Overview</small>
                    </div>

                    <!-- Chart.js Chart functionality is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _es6/pages/be_pages_ecom_dashboard.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <div class="row gutters-tiny">
                        <!-- Orders Earnings Chart -->
                        <div class="col-md-6">
                            <div class="block block-rounded block-mode-loading-refresh">
                                <div class="block-header">
                                    <h3 class="block-title">
                                        Earnings
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full bg-body-light text-center">
                                    <div class="row gutters-tiny">
                                        <div class="col-4">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">All</div>
                                            <div class="font-size-h3 font-w600">$9,587</div>
                                        </div>
                                        <div class="col-4">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Profit</div>
                                            <div class="font-size-h3 font-w600 text-success">$8,087</div>
                                        </div>
                                        <div class="col-4">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Expenses</div>
                                            <div class="font-size-h3 font-w600 text-danger">$1,500</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="pull-all">
                                        <!-- Earnings Chart Container -->
                                        <canvas class="js-chartjs-ecom-dashboard-earnings"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Orders Earnings Chart -->

                        <!-- Orders Volume Chart -->
                        <div class="col-md-6">
                            <div class="block block-rounded block-mode-loading-refresh">
                                <div class="block-header">
                                    <h3 class="block-title">
                                        Volume
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full bg-body-light text-center">
                                    <div class="row gutters-tiny">
                                        <div class="col-4">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">All</div>
                                            <div class="font-size-h3 font-w600">183</div>
                                        </div>
                                        <div class="col-4">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Completed</div>
                                            <div class="font-size-h3 font-w600 text-success">175</div>
                                        </div>
                                        <div class="col-4">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Canceled</div>
                                            <div class="font-size-h3 font-w600 text-danger">8</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="pull-all">
                                        <!-- Orders Chart Container -->
                                        <canvas class="js-chartjs-ecom-dashboard-orders"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Orders Volume Chart -->
                    </div>
                    <!-- END Orders Overview -->

                    <!-- Latest Orders and Top Products -->
                    <div class="row gutters-tiny">
                        <!-- Latest Orders -->
                        <div class="col-xl-6">
                            <h2 class="content-heading">Latest Orders</h2>
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 100px;">ID</th>
                                                <th>Status</th>
                                                <th class="d-none d-sm-table-cell">Customer</th>
                                                <th class="text-right">Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1851</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">Processing</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Jose Parker</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$249</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1850</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-warning">Pending</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Albert Ray</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$940</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1849</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Jack Estrada</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$157</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1848</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Canceled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Barbara Scott</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$214</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1847</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">Processing</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Amber Harvey</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$636</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1846</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Wayne Garcia</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$871</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1845</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">Processing</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Jesse Fisher</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$791</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1844</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Amanda Powell</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$240</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1843</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Canceled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Ralph Murray</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$649</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="#">ORD.1842</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Canceled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="#">Betty Kelley</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$428</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Latest Orders -->

                        <!-- Top Products -->
                        <div class="col-xl-6">
                            <h2 class="content-heading">Top Products</h2>
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
                                                <th>Product</th>
                                                <th class="text-center">Orders</th>
                                                <th class="d-none d-sm-table-cell text-center">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.258</a>
                                                </td>
                                                <td>
                                                    <a href="#">Dark Souls III</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">912</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.198</a>
                                                </td>
                                                <td>
                                                    <a href="#">Bioshock Collection</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">895</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.852</a>
                                                </td>
                                                <td>
                                                    <a href="#">Alien Isolation</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">820</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.741</a>
                                                </td>
                                                <td>
                                                    <a href="#">Bloodborne</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">793</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.985</a>
                                                </td>
                                                <td>
                                                    <a href="#">Forza Motorsport 7</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">782</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.056</a>
                                                </td>
                                                <td>
                                                    <a href="#">Fifa 18</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">776</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.036</a>
                                                </td>
                                                <td>
                                                    <a href="#">Gears of War 4</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">680</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.682</a>
                                                </td>
                                                <td>
                                                    <a href="#">Minecraft</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">670</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.478</a>
                                                </td>
                                                <td>
                                                    <a href="#">Dishonored 2</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">640</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="#">PID.952</a>
                                                </td>
                                                <td>
                                                    <a href="#">Gran Turismo Sport</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="#">630</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Top Products -->
                    </div>
                    <!-- END Latest Orders and Top Products -->
                </div>
                <!-- END Page Content -->

@endsection