@extends('be_layouts.master')

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Analytical</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Statistik</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex flex-row-reverse">
                        <div class="page_action">
                            <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                            <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                        </div>
                        <div class="p-2 d-flex">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix row-deck">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card number-chart">
                    <div class="body">
                        <span class="text-uppercase">New Sessions</span>
                        <h4 class="mb-0 mt-2">22,500 <i class="fa fa-level-up font-12"></i></h4>
                        <small class="text-muted">Analytics for last week</small>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                    data-line-Width="1" data-line-Color="#39afa6" data-fill-Color="#73cec7">4,1,5,2,7,3,4</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection