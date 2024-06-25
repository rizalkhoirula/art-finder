@extends('admin.layout.main')
@section('title', 'Dashboard - ')
@section('content')
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Dashboard</h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle"><a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="nk-ecwg nk-ecwg6">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Order</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div class="amount">{{$totalsewa}}</div>
                                            <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="nk-ecwg nk-ecwg6">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Art</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div class="amount">{{$jumlahart}}</div>
                                            <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
