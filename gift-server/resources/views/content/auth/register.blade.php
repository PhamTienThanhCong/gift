@extends('template.home')

@section('css')
    {{-- css hear --}}
    <style>
        .form-error {
            color: red;
            border: 1px solid red;
        }
        .alert-danger li{
            color: red;
        }
    </style>
@endsection

@section('js')
    {{-- js hear --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script>
        @if ($errors->any())
            swal({
                title: "Đăng ký thất bại",
                text: "Vui lòng kiểm tra lại thông tin đăng ký",
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
                            <h3 class="text-center">Đăng ký vào <strong>{{ $web_config->web_name }}</strong></h3>
                            <p class="mb-4">
                              Đăng ký để tận hưởng vô vàn các ưu đãi và tính năng của <span style="color: red">{{ $web_config->web_name }}</span>.
                            </p>
                            {{-- response all erors --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('register-process') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Tên của bạn</label>
                                    <input type="text" value="{{ old('fullname') }}" class="form-control" name="fullname" placeholder="Nhập tên của bạn" id="fullname">
                                </div>
                                <div class="form-group first">
                                    <label for="username">Email của bạn</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Nhập email" id="email">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Nhập Password" id="password">
                                </div>
                                <div class="d-flex mb-2 align-items-center">
                                    <span><a href="{{ route('forgot-password') }}" class="forgot-pass">Quên mật khẩu</a></span>
                                </div>
                                {{-- nếu bạn chưa có tài khoản? --}}
                                <div class="d-flex align-items-center text-center">
                                    <span>Bạn đã có tài khoản?<a href="{{ route('login') }}" class="forgot-pass"> Đăng nhập ngay</a></span>
                                </div>
                                {{-- login width --}}
                                <div class="d-flex mb-2 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">register with</span>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto">
                                        <a style="font-size: 35px" href="#" class="forgot-pass">
                                            <i class="fab fa-google-plus-square"></i>
                                        </a>
                                    </span>
                                </div>
                                <input type="submit" value="Đăng ký ngay" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
