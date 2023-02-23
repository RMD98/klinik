@extends('template/user/app')
@section('content')
<section class="pages-section">
    <h1 class="text-center">About US</h1>
    <div class="container">
        {!!$data->konten!!}
    </div>
</section>
@stop