@extends('template/admin/app')
@section('content')
<div class="card">
<div class="card-body">
    <a href="/user/add" class="btn btn-primary">Tambah data &nbsp <i class="fas fa-plus"></i></a>
    <table class="table">
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th></th>
        </tr>
        @foreach($data as $key=>$value)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->role}}</td>
                <td>
                    <a href="/user/edit/{{$value->id}}" class="btn btn-primary">Edit &nbsp<i class="fas fa-pencil-alt fa-sm text-white-10"></i></a>
                    <a href="/user/delete/{{$value->id}}" class="btn btn-danger">Delete &nbsp<i class="fas fa-trash-alt fa-sm text-white-10"></i></a>
                </td>

            </tr>
        @endforeach
    </table>

</div>
</div>
@stop