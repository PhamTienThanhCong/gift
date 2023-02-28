@extends('template.home')

@section('css')
    {{-- css hear --}}
@endsection

@section('js')
    {{-- js hear --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- if have message alert register sucess --}}
    <script>
        @if (session('message'))
            swal({
                    title: "Đăng ký thành công",
                    text: "Hãy đăng nhập để tiếp tục !",
                    icon: "success",
                    button: "OK",
                });
        @endif
        @if ($errors->any() || session('error'))
            swal({
                title: "Đăng nhập thất bại",
                text: "Email hoặc mật khẩu không đúng !",
                icon: "error",
                button: "OK",
            });
        @endif
    </script>
@endsection

@section('content')
    {{-- import first image --}}
    @include('content.components.first_image')

    <section class="mt-2 mb-2">
        <div class="d-lg-flex half">
            <div class="contents order-2 order-md-1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                            <h3 class="text-center">Đăng nhập vào <strong>{{ $web_config->web_name }}</strong></h3>
                            <p class="mb-4">
                              Đăng nhập để tận hưởng vô vàn các ưu đãi và tính năng của {{ $web_config->web_name }}.
                            </p>
                            <form action="{{ route('login-process') }}" method="post">
                                @csrf
                                {{-- email --}}
                                <div class="form-group first">
                                    <label for="username">Email của bạn</label>
                                    <input type="text" class="form-control" value="{{ old('email') }}" name="email" placeholder="your email" id="email">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
                                </div>
                                <div class="d-flex mb-2 align-items-center">
                                    <span><a href="{{ route('forgot-password') }}" class="forgot-pass">Quên mật khẩu</a></span>
                                </div>
                                {{-- nếu bạn chưa có tài khoản? --}}
                                <div class="d-flex align-items-center text-center">
                                    <span>Bạn chưa có tài khoản?<a href="{{ route('register') }}" class="forgot-pass"> Đăng kí ngay</a></span>
                                </div>
                                {{-- login width --}}
                                <div class="d-flex mb-2 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Login with</span>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto">
                                        <a style="font-size: 35px" href="#" class="forgot-pass">
                                            <i class="fab fa-google-plus-square"></i>
                                        </a>
                                    </span>
                                </div>
                                <input type="submit" value="Đăng nhập" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
