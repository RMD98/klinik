@extends('template/admin/app')
@section('content')
<div class="card">
<div class="card-body">
    <a href="/pages/add" class="btn btn-primary">Tambah data &nbsp <i class="fas fa-plus"></i></a>
    <table class="table">
        <tr>
            <th>no</th>
            <th>Judul</th>
            <th>Jenis</th>
            <th>Status</th>
            <th></th>
        </tr>
        @foreach($data as $key=>$value)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$value->judul}}</td>
                <td>{{$value->jenis}}</td>
                <td>{{$value->status}}</td>
                <td>
                    <a href="/pages/edit/{{$value->id}}" class="btn btn-primary">Edit &nbsp<i class="fas fa-pencil-alt fa-sm text-white-10"></i></a>
                    <a href="/pages/delete/{{$value->id}}" class="btn btn-danger">Delete &nbsp<i class="fas fa-trash-alt fa-sm text-white-10"></i></a>
                </td>

            </tr>
        @endforeach
    </table>

</div>
</div>
@stop