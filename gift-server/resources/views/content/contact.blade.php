@extends('template.home')

@section('css')
    {{-- css hear --}}
@endsection

@section('js')
    {{-- js hear --}}
    {{-- onsubmit contactForm --}}
    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var subject = $('#subject').val();
                var message = $('#message').val();
                var _token = $('input[name="_token"]').val();
                // $.ajax({
                //     url: "{{ route('contact') }}",
                //     type: "POST",
                //     data: {
                //         name: name,
                //         email: email,
                //         subject: subject,
                //         message: message,
                //         _token: _token
                //     },
                //     success: function(data) {
                //         if (data.error) {
                //             if (data.error.name) {
                //                 $('#name').addClass('is-invalid');
                //                 $('.errorName').html(data.error.name);
                //             }
                //             if (data.error.email) {
                //                 $('#email').addClass('is-invalid');
                //                 $('.errorEmail').html(data.error.email);
                //             }
                //             if (data.error.subject) {
                //                 $('#subject').addClass('is-invalid');
                //                 $('.errorSubject').html(data.error.subject);
                //             }
                //             if (data.error.message) {
                //                 $('#message').addClass('is-invalid');
                //                 $('.errorMessage').html(data.error.message);
                //             }
                //         }
                //         if (data.success) {
                //             $('#contactForm')[0].reset();
                //             $('.alert-success').html(data.success);
                //         }
                //     }
                // });
            });
        });
    </script>
@endsection

@section('content')    
    {{-- import first image --}}
    @include('content.components.first_image')
    
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-6 ftco-animate">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3>Liên hệ với chúng tôi</h3>
                                    <p class="mb-4">Chúng tôi sẵn sàng cho bất kỳ đề xuất nào hoặc chỉ để trò chuyện</p>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Địa chỉ:</span> 
                                                        {{ $web_config->address }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Email:</span> 
                                                        {{ $web_config->email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Số điện thoại:</span> <a href="tel://{{ $web_config->phone }}">{{ $web_config->phone }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="contactForm" name="contactForm" class="contactForm" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Tên của bạn">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Địa chỉ Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                        placeholder="Tiêu đề...">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                        rows="4" placeholder="Nội dung tin nhắn..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="w-100 social-media mt-5">
                                        <h3>Theo giõi chúng tôi tại</h3>
                                        <p>
                                            <a href="{{ $web_config->social->facebook }}">Facebook</a>
                                            <a href="{{ $web_config->social->youtube }}">Youtube</a>
                                            <a href="{{ $web_config->social->tiktok }}">Tiktok</a>
                                            {{-- <a href="#">Dribbble</a> --}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div id="map" class="bg-white"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection