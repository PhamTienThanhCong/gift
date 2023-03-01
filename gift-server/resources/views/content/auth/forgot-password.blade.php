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
                            <h3 class="text-center">Lấy lại mật khẩu</h3>
                            <p class="mb-4">
                              Nhập đúng email đã đăng kí để nhận link đổi mật khẩu.
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
                            <form action="{{ route('register-process') }}" method="post" id="form-register">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Email của bạn</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Nhập email" id="email" required>
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
