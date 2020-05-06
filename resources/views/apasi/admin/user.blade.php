@extends('layouts.main')

@section('content')
<!-- Basic datatable -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data User</h5>
        <div class="heading-elements">
            <a href="{{url('/data-user/form')}}" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <table class="table datatable-basic">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIK</th>
                <th>Nama Pegawai</th>
                <th>User Role</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach ($data as $rows)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $rows->nik }}</td>
                <td>{{ $rows->name }}</td>
                <td>{{ $rows->role_name }}</td>
                <td>{{ $rows->status_desc }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<!-- /basic datatable -->
