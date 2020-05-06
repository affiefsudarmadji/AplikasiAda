@extends('layouts.main')

@section('content')
<!-- Basic datatable -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Menu</h5>
        <div class="heading-elements">
            <a href="{{url('/data-menu/form')}}" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <table class="table datatable-basic">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Url</th>
                <th>Role</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach ($data as $rows)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $rows->nama }}</td>
                <td>{{ $rows->keterangan }}</td>
                <td>{{ $rows->url }}</td>
                <td>{{ $rows->role }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<!-- /basic datatable -->
