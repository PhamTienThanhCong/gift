<footer class="ftco-footer">
    <div class="container">
        <div class="row mb-5 justify-content-between">
            <div class="col-sm-12 col-lg-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 mb-4 logo"><a href="{{ route('home') }}">{{ $web_config->web_name }}</a></h2>
                    <p class="mb-4">{{ $web_config->description_2 }}</p>
                    <h2 class="ftco-heading-2 mb-4">Kết nối với chúng tôi</h2>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li class="ftco-animate"><a target="_blank" href="{{ $web_config->social->youtube }}"><span class="fa fa-youtube"></span></a></li>
                        <li class="ftco-animate"><a target="_blank" href="{{ $web_config->social->facebook }}"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a target="_blank" href="{{ $web_config->social->tiktok }}"><span class="fa-brands fa-tiktok"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5">
                <h2 class="ftco-heading-2 mb-4">Đường dẫn</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ftco-footer-widget">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                <li><a href="{{ route('home') }}">Services</a></li>
                                <li><a href="{{ route('home') }}">Mẫu thiệp</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('home') }}">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ftco-footer-widget">
                            <ul class="list-unstyled">
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 mb-4">Địa chỉ liên hệ</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">{{ $web_config->address }}</span></li>
                            <li><span class="icon fa fa-phone"></span><span class="text">{{ $web_config->phone }}</span></li>
                            <li><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><span class="text">{{ $web_config->email }}</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">
                        Copyright &copy;
                        <script data-cfasync="false"
                            src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                        template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by 
                        <a href="{{ $web_config->social->facebook }}" target="_blank" rel="nofollow noopener">Han Pham</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>