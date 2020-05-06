@extends('layouts.main')

@section('content')
<!-- Form horizontal -->
<div class="panel panel-flat">
    <div class="panel-body">
        <form class="form-horizontal" action="{{url('/data-menu/save')}}" method="post">
            @csrf
            <fieldset class="content-group">
                <legend class="text-bold">Form Input Menu</legend>

                <div class="form-group">
                    <label class="control-label col-md-2">Nama Menu</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">Keterangan</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="keterangan">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Url</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="url">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Role</label>
                    <div class="col-lg-8">
                        <select name="role" class="form-control">
                            <option hidden>-- Role Menu --</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
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
