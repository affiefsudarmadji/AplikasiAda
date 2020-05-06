@extends('layouts.main')

@section('content')
<!-- Dashboard content -->
<div class="row">
    <div class="col-lg-12">
        <!-- User details (with sample pattern) -->
        <div class="content-group">
            <div class="panel-body bg-blue border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                <div class="display-inline-block content-group-sm">
                    <img src="{{asset('template/assets/images/user.png')}}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                </div>

                <div class="content-group-sm">
                    <h5 class="text-semibold no-margin-bottom">
                       {{Session::get('name')}}
                    </h5>
                    <span class="display-block"><h4>{{Session::get('jabatan')}}</h4></span>
                    <span class="display-block"><h4>{{session::get('unit_kerja')}}</h4></span>
                </div>
            </div>
        </div>
        <!-- /user details (with sample pattern) -->
    </div>
</div>
<!-- /dashboard content -->
@endsection
