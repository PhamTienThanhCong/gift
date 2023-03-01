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
                            <p class="mb-4 text-center">
                              Nhập đúng email đã đăng kí để nhận link đổi mật khẩu.
                              <br><i style="font-size: 12px;">Tính năng chưa phát triển nếu bạn cần lấy lại mật khẩu hãy liên hệ quản trị viên</i>
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
                                {{-- @csrf --}}
                                <div class="form-group first">
                                    <label for="username">Email của bạn</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Nhập email" id="email" required>
                                </div>
                                {{-- <button class="btn btn-block btn-primary w-100 font-weight-bold">
                                    Lấy lại mật khẩu
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button> --}}

                                <button 
                                    onclick="return confirm('Tính năng chưa phát triển nếu bạn cần lấy lại mật khẩu hãy liên hệ quản trị viên');"
                                    class="btn btn-block btn-primary w-100 font-weight-bold">
                                    Lấy lại mật khẩu
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>

                                {{-- nếu bạn chưa có tài khoản? --}}
                                <div class="d-flex align-items-center text-center mt-2">
                                    <span>Bạn nhớ tài khoản? <a href="{{ route('login') }}" class="forgot-pass">Đăng nhập ngay</a></span>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
