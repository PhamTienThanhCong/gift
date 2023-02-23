@extends('template.home')

@section('css')
    {{-- css here --}}
@endsection

@section('js')
    {{-- js here --}}
@endsection

@section('content')
<section class="slider-hero js-fullheight">
    <div class="overlay"></div>
    <div class="featured-carousel owl-carousel">
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center js-fullheight"
                    style="background-image: url(images/bg_1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 order-md-last">
                                <div class="text mt-md-5">
                                    <h2>Xây dựng profile cá nhân của bạn.</h2>
                                    <p class="mb-5">A small river named Duden flows by their place and supplies it
                                        with the necessary regelialia. It is a paradisematic country, in which
                                        roasted parts of sentences fly into your mouth.</p>
                                    <p><a href="#" class="btn btn-primary px-5 py-3">Bắt đầu ngay <span
                                                class="ion ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center justify-content-center js-fullheight"
                    style="background-image: url(images/bg_2.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text mt-md-5">
                                    <h2>Tạo ra các lời chúc online</h2>
                                    <p class="mb-5">Tạo ra các thiệp hoặc lời chúng online không cần phải code. 
                                        Chúng tôi sẽ thiết kế cho bạn các mẫu có sẵn cho bạn sử dụng, việc của bạn chỉ cần gửi các mẫu đó cho người thân yêu của bạn
                                    </p>
                                    <p><a href="#" class="btn btn-primary px-5 py-3">Bắt đầu ngay <span
                                                class="ion ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center justify-content-center js-fullheight"
                    style="background-image: url(images/bg_3.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text mt-md-5">
                                    <h2>Ghi nhớ những ngày lễ trọng đại</h2>
                                    <p class="mb-5">A small river named Duden flows by their place and supplies it
                                        with the necessary regelialia. It is a paradisematic country, in which
                                        roasted parts of sentences fly into your mouth.</p>
                                    <p><a href="#" class="btn btn-primary px-5 py-3">Bắt đầu ngay <span
                                                class="ion ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 text-center">
        <ol class="thumbnail">
            <li class="active img"><a href="#">01.</a></li>
            <li><a href="#">02.</a></li>
            <li><a href="#">03.</a></li>
        </ol>
    </div>
</section>
<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="d-md-flex full-wrap">
            <div class="half order-md-last d-flex align-items-stretch">
                <div class="img w-100" style="background-image: url(images/about.jpg);"></div>
            </div>
            <div class="half d-flex">
                <div class="text-about pr-md-5">
                    <div class="col-md-6 d-flex">
                        <div class="heading-section">
                            <span class="subheading">Welcome Pexman</span>
                            <h2 class="mb-4">We Are Creative Agency That Create Beautiful Websites</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                at the coast of the Semantics, a large language ocean.</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                at the coast of the Semantics, a large language ocean.</p>
                            <p class="mt-md-5"><a href="#" class="btn btn-primary px-5 py-3">Start A Project <span
                                        class="ion ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 mb-xl-0 mb-2">
                    <div class="text text-center w-100">
                        <p>
                            <strong class="number" data-number="10">0</strong>
                            <span>K+</span>
                        </p>
                        <span>Achievements</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 mb-xl-0 mb-2">
                    <div class="text text-center w-100">
                        <p>
                            <strong class="number" data-number="21">0</strong>
                            <span>K+</span>
                        </p>
                        <span>Project Completed</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 mb-xl-0 mb-2">
                    <div class="text text-center w-100">
                        <p>
                            <strong class="number" data-number="27">0</strong>
                        </p>
                        <span>Years of Experienced</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 mb-xl-0 mb-2">
                    <div class="text text-center w-100">
                        <p>
                            <strong class="number" data-number="30">0</strong>
                            <span>K+</span>
                        </p>
                        <span>Happy Customers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="d-md-flex full-wrap">
            <div class="half">
                <div class="img" style="background-image: url(images/about-2.jpg);"></div>
            </div>
            <div class="half d-flex">
                <div class="text-about d-flex justify-content-end pl-md-5">
                    <div class="col-md-6 d-flex pl-md-5">
                        <div class="heading-section">
                            <span class="subheading">What we offer</span>
                            <h2 class="mb-4">What We Offer</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts.</p>
                            <div class="media block-6 services-2 w-100 d-flex align-items-center">
                                <div class="icon d-flex justify-content-center align-items-center"><span>1</span>
                                </div>
                                <div class="text">
                                    <h3>Research</h3>
                                    <p class="mb-0">A small river named Duden flows by their place.</p>
                                </div>
                            </div>
                            <div class="media block-6 services-2 w-100 d-flex align-items-center">
                                <div class="icon d-flex justify-content-center align-items-center"><span>2</span>
                                </div>
                                <div class="text">
                                    <h3>Design</h3>
                                    <p class="mb-0">A small river named Duden flows by their place.</p>
                                </div>
                            </div>
                            <div class="media block-6 services-2 w-100 d-flex align-items-center">
                                <div class="icon d-flex justify-content-center align-items-center"><span>3</span>
                                </div>
                                <div class="text">
                                    <h3>Development</h3>
                                    <p class="mb-0">A small river named Duden flows by their place.</p>
                                </div>
                            </div>
                            <div class="media block-6 services-2 w-100 d-flex align-items-center">
                                <div class="icon d-flex justify-content-center align-items-center"><span>4</span>
                                </div>
                                <div class="text">
                                    <h3>Testing</h3>
                                    <p class="mb-0">A small river named Duden flows by their place.</p>
                                </div>
                            </div>
                            <p class="mt-md-5"><a href="#" class="btn btn-primary px-5 py-3">Start A Project <span
                                        class="ion ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services services-4 d-block text-center px-2 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-computer"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Web Design</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services services-4 d-block text-center px-2 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-camera"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Photography</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services services-4 d-block text-center px-2 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-bullhorn"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Marketing</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services services-4 d-block text-center px-2 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-vector"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Graphic Design</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row mb-5 justify-content-between">
            <div class="col-md-5 heading-section">
                <span class="subheading">Our Portfolio</span>
                <h2 class="mb-3">Our Stunning Works</h2>
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <ul class="work-category">
                    <li class="active"><a href="#">All</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Illustration</a></li>
                    <li><a href="#">Application</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/work-1.jpg);">
                    <a href="images/work-1.jpg"
                        class="icon image-popup d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></a>
                    <div class="text text-center">
                        <h3><a href="work.html">Hark Website</a></h3>
                        <p><span>Web Design</span>,<span>Branding</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/work-2.jpg);">
                    <a href="images/work-2.jpg"
                        class="icon image-popup d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></a>
                    <div class="text text-center">
                        <h3><a href="work.html">Hark Website</a></h3>
                        <p><span>Web Design</span>,<span>Branding</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/work-3.jpg);">
                    <a href="images/work-3.jpg"
                        class="icon image-popup d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></a>
                    <div class="text text-center">
                        <h3><a href="work.html">Hark Website</a></h3>
                        <p><span>Web Design</span>,<span>Branding</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/work-4.jpg);">
                    <a href="images/work-4.jpg"
                        class="icon image-popup d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></a>
                    <div class="text text-center">
                        <h3><a href="work.html">Hark Website</a></h3>
                        <p><span>Web Design</span>,<span>Branding</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/work-5.jpg);">
                    <a href="images/work-5.jpg"
                        class="icon image-popup d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></a>
                    <div class="text text-center">
                        <h3><a href="work.html">Hark Website</a></h3>
                        <p><span>Web Design</span>,<span>Branding</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/work-6.jpg);">
                    <a href="images/work-6.jpg"
                        class="icon image-popup d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></a>
                    <div class="text text-center">
                        <h3><a href="work.html">Hark Website</a></h3>
                        <p><span>Web Design</span>,<span>Branding</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/work-7.jpg);">
                    <a href="images/work-7.jpg"
                        class="icon image-popup d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></a>
                    <div class="text text-center">
                        <h3><a href="work.html">Hark Website</a></h3>
                        <p><span>Web Design</span>,<span>Branding</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/work-8.jpg);">
                    <a href="images/work-8.jpg"
                        class="icon image-popup d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></a>
                    <div class="text text-center">
                        <h3><a href="work.html">Hark Website</a></h3>
                        <p><span>Web Design</span>,<span>Branding</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section testimony-section ftco-no-pt">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">What Are Clients Says</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-6">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="text">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">Cheif Executive Officer @pexman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="text">
                                <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">Cheif Executive Officer @pexman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="text">
                                <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">Cheif Executive Officer @pexman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="text">
                                <div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">Cheif Executive Officer @pexman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="text">
                                <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">Cheif Executive Officer @pexman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Read Latest News</span>
                <h2 class="mb-4">Our Latest Blog</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Oct. 27, 2020</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Far far away, behind the word mountains </a></h3>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Oct. 27, 2020</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Far far away, behind the word mountains </a></h3>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Oct. 27, 2020</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Far far away, behind the word mountains </a></h3>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/image_4.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Oct. 27, 2020</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Far far away, behind the word mountains </a></h3>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection