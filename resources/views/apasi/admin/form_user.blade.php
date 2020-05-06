@extends('layouts.main')

@section('content')
<!-- Form horizontal -->
<div class="panel panel-flat">
    <div class="panel-body">
        <form class="form-horizontal" action="{{url('/data-user/save')}}" method="post">
            @csrf
            <fieldset class="content-group">
                <legend class="text-bold">Form Input User</legend>

                <div class="form-group">
                    <label class="control-label col-md-2">NIK Pegawai</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="nik">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">Nama Pegawai</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
            </fieldset>
            <div class="text-left">
                <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- /form horizontal -->
@endsection
