<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="d-md-flex full-wrap">
            <div class="half order-md-last d-flex align-items-stretch">
                <div class="img w-100" style="background-image: url(images/web/{{ $config["about_image"] }});"></div>
            </div>
            <div class="half d-flex">
                <div class="text-about pr-md-5">
                    <div class="col-md-6 d-flex">
                        <div class="heading-section">
                            <span class="subheading">Chào mừng đã đến với {{ $config["web_name"] }}</span>
                            <h2 class="mb-4">{{ $config["about_title"] }}</h2>
                            <p>
                                {!! nl2br(e($config["about_content"])) !!}
                            </p>
                            <p class="mt-md-5"><a href="#" class="btn btn-primary px-5 py-3">Start A Project <span
                                        class="ion ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter img" id="section-counter" style="background-image: url(images/web/{{$config['slide_images'][1]}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 mb-xl-0 mb-2">
                    <div class="text text-center w-100">
                        <p>
                            <strong class="number" data-number="{{ $review["project_count"] }}">0</strong>
                            <span>+</span>
                        </p>
                        <span>Mẫu đã tạo</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 mb-xl-0 mb-2">
                    <div class="text text-center w-100">
                        <p>
                            <strong class="number" data-number="{{ $review['year_count'] }}">0</strong>
                        </p>
                        <span>Số năm hoạt động</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 mb-xl-0 mb-2">
                    <div class="text text-center w-100">
                        <p>
                            <strong class="number" data-number="{{ $review["client_count"] }}">0</strong>
                            <span>+</span>
                        </p>
                        <span>Số người dùng</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                <div class="block-18 mb-xl-0 mb-2">
                    <div class="text text-center w-100">
                        <p>
                            <strong class="number" data-number="{{ $review["blog_count"] }}">0</strong>
                            <span>+</span>
                        </p>
                        <span>Blog đã viết</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>