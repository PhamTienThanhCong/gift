@extends('template.home')
@section('css')
    {{-- css hear --}}
@endsection

@section('js')
    {{-- js hear --}}
@endsection

@section('content')
{{-- import first image --}}
@include('content.components.first_image')

{{-- import file about_web --}}
@include('content.components.about_web')

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Nhà phát triển</span>
                <h2 class="mb-2">Đội ngũ phát triển</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($develops as $develop)
                <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch justify-content-end">
                            <div class="img align-self-stretch" style="background-image: url(images/web/{{ $develop->avatar }});">
                                <ul class="ftco-social">
                                    <li class="ftco-animate d-flex"><a href="{{ $develop->github }}"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-github"></span></a></li>
                                    <li class="ftco-animate d-flex"><a href="{{ $develop->facebook }}"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate d-flex"><a href="{{ $develop->email }}"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate d-flex"><a href="{{ $develop->instagram }}"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text d-flex align-items-center pt-3">
                            <div class="desc">
                                <h3 class="mb-2">{{ $develop->name }}</h3>
                                <span class="position mb-4">{{ $develop->position }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- Người dùng nói gì ? --}}
<section class="ftco-section testimony-section ftco-no-pt">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Lời thẩm định</span>
                <h2 class="mb-4">Nhà phát triển nói gì ?</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-6">
                <div class="carousel-testimony owl-carousel">
                
                    @foreach ($develops as $develop)
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="user-img" style="background-image: url(images/web/{{ $develop->avatar }})"></div>
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">{{ $develop->description }}</p>
                                    <p class="name">{{ $develop->name }}</p>
                                    <span class="position">{{ $develop->position }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection