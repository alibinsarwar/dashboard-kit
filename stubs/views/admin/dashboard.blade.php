@extends('layouts.admin')

@section('content')
<div class="pcoded-content">
    <div class="row">
        <!-- support-section start -->
        <div class="col-xl-6 col-md-12">
            <div class="card flat-card">
                <div class="row-table">
                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="material-icons-two-tone text-primary mb-1">group</i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>1000</h5>
                                <span>Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="material-icons-two-tone text-primary mb-1">language</i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>$1252</h5>
                                <span>Revenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="material-icons-two-tone text-primary mb-1">unarchive</i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>600</h5>
                                <span>Growth</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-table">
                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="material-icons-two-tone text-primary mb-1">swap_horizontal_circle</i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>3550</h5>
                                <span>Returns</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="material-icons-two-tone text-primary mb-1">cloud_download</i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>3550</h5>
                                <span>Downloads</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="material-icons-two-tone text-primary mb-1">shopping_cart</i>
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>100%</h5>
                                <span>Order</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card support-bar overflow-hidden">
                        <div class="card-body pb-0">
                            <h2 class="m-0">53.94%</h2>
                            <span class="text-primary">Conversion Rate</span>
                            <p class="mb-3 mt-3">Number of conversions divided by the total visitors. </p>
                        </div>
                        <div id="support-chart"></div>
                        <div class="card-footer border-0 bg-primary text-white background-pattern-white">
                            <div class="row text-center">
                                <div class="col">
                                    <h4 class="m-0 text-white">10</h4>
                                    <span>2018</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white">15</h4>
                                    <span>2017</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white">13</h4>
                                    <span>2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card support-bar overflow-hidden">
                        <div class="card-body pb-0">
                            <h2 class="m-0">1432</h2>
                            <span class="text-primary">Order delivered</span>
                            <p class="mb-3 mt-3">Total number of order delivered in this month.</p>
                        </div>
                        <div class="card-footer border-0">
                            <div class="row text-center">
                                <div class="col">
                                    <h4 class="m-0">130</h4>
                                    <span>May</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0">251</h4>
                                    <span>June</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 ">235</h4>
                                    <span>July</span>
                                </div>
                            </div>
                        </div>
                        <div id="support-chart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card feed-card">
                <div class="card-header">
                    <h5>Feeds</h5>
                </div>
                <div class="feed-scroll" style="height:385px;position:relative;overflow: auto;">
                    <div class="card-body">
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New order received <span class="text-muted float-right f-14">30 min ago</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-right f-14">1 hours ago</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 2 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New order received <span class="text-muted float-right f-14">4 hours ago</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New order Done <span class="text-muted float-right f-14">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 5 pending tasks. <span class="text-muted float-right f-14">5 hours ago</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-0 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-right f-14">2 hours ago</span></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection