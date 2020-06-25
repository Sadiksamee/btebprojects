@extends('layouts.app')


@section('content')

                    <div class="row pb-4">

                    <div class="col-lg-3 col-xs-6 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Income</h6>
                                        <h2 class="m-t-0">953,000</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Expense</h6>
                                        <h2 class="m-t-0">236,000</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Assets</h6>
                                        <h2 class="m-t-0">987,563</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Staff</h6>
                                        <h2 class="m-t-0">987,563</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-12">
<div class="card">
    <div class="card-body">
        <h5>Monthly View</h5>
        <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
        <div id="monthly-graph" style="height: 300px;"></div>
    </div>
</div>


<script src="{{ asset('') }}assets/js/dashboard/amchart/js/amcharts.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/dashboard/amchart/js/serial.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/dashboard/amchart/js/light.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/dashboard/crm-dashboard.min.js" type="text/javascript"></script>

@stop