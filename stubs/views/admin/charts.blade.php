@extends('layouts.admin')

@section('content')
<div class="pcoded-content">
    <div class="row">
        <!-- [ variant-chart ] start -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Basic line chart</h5>
                </div>
                <div class="card-body">
                    <div id="line-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Area chart</h5>
                </div>
                <div class="card-body">
                    <div id="area-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Bar chart</h5>
                </div>
                <div class="card-body">
                    <div id="bar-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Bar chart horizontal</h5>
                </div>
                <div class="card-body">
                    <div id="bar-chart-3"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Pie Charts</h5>
                </div>
                <div class="card-body">
                    <div id="pie-chart-1" style="width:100%"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Pie Charts donut</h5>
                </div>
                <div class="card-body">
                    <div id="pie-chart-2" style="width:100%"></div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
<script src="{{asset('admin_theme/js/plugins/apexcharts.min.js')}}"></script>
<script src="{{asset('admin_theme/js/pages/chart-apex.js')}}"></script>
@endsection