@extends('/template/user/app')
@section('content')
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Artikel</h2>
        </div>
        <div class="row">
            @foreach($data as $key=>$value)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$key}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('storage/'.$value->gambar)}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{$value->judul}}</div>
                            <div class="portfolio-caption-subheading text-muted">{!! Str::limit($value->konten,100)!!}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@foreach($data as $key=>$value)
<div class="portfolio-modal modal fade" id="portfolioModal{{$key}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="{{asset('build/assets/user/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">{{$value->judul}}</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="{{asset('build/assets/user/assets/img/portfolio/01-thumbnail.jpg')}}" alt="" />
                            <p>{{$value->konten}}</p>
                            <ul class="list-inline">
                                <li>Date: January 2020</li>
                                <li>Client: Window</li>
                                <li>Category: Photography</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@stop