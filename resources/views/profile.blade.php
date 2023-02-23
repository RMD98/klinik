@extends('template/user/app')
@section('content')
<section class="pages-section">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{asset('build/assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image" width="100%">
            </div>
            <div class="row">
                <div class="col">
                    <h6>Nama : {{$user->name}}</h6> 
                    <h6>Email : {{$user->email}}</h6>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <table class="table table-bordered table-striped table-responsive-lg ">
                <thead class="thead-primary">
                    <th>No.</th>
                    <th>Hari,Tanggal</th>
                    <th>Jam</th>
                    <th>Pelayanan</th>
                </thead>
                @foreach($data as $key=>$value)
                    <tr>
                        <td>
                            {{$key}}
                        </td>
                        <td>
                            {{$value->tanggal}}
                        </td>
                        <td>
                            {{$value->jam}}
                        </td>
                        <td>
                            {{$value->pelayanan}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@stop