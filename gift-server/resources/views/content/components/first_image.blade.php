<section class="hero-wrap hero-wrap-2" style="background-image: url('images/web/{{ $web_config->imagePreview }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pt-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Trang chủ <i
                                class="fa fa-chevron-right"></i></a></span> <span>{{ $web_config->title }} <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">{{ $web_config->title }}</h1>
            </div>
        </div>
    </div>
</section>