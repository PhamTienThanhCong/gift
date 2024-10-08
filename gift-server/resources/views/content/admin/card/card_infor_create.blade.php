@extends('template.admin')

@section('css')
    {{-- css here --}}
@endsection

@section('js')
    {{-- csript --}}
    <script>
        let check_submit = false;

        // on keyup event name-url
        $('#name-url').focusout(function() {
            check_submit = false;
            $('#name-url').parent().find('.control-label').text('Tên trên đường dẫn url');
            var name = $(this).val();
            // check name is english and no space can be used - or _
            var regex = /^[a-zA-Z0-9-_]+$/;
            if (regex.test(name)) {
                // check name is not empty
                if (name != '') {
                    // check name is not exist
                    $.ajax({
                        url: "{{ route('user.card.check-url') }}",
                        type: "GET",
                        data: {
                            url: name,
                        },
                        success: function(data) {
                            if (data.status == false) {
                                $('#name-url').parent().addClass('has-error');
                                $('#name-url').parent().removeClass('has-warning');
                                $('#name-url').parent().find('.help-block').text('Tên đã tồn tại');
                            } else {
                                check_submit = true;
                                $('#name-url').parent().find('.control-label').text(
                                    `Tên trên đường dẫn url`);
                                $('#name-url').parent().removeClass('has-error');
                                $('#name-url').parent().removeClass('has-warning');
                                $('#name-url').parent().addClass('has-success');
                                $('#name-url').parent().find('.help-block').text('Tên có thể sử dụng');
                            }
                        }
                    });
                } else {
                    $('#name-url').parent().removeClass('has-error');
                    $('#name-url').parent().removeClass('has-warning');
                    $('#name-url').parent().find('.help-block').text(
                        'Nhập tên url có các kí tự từ A - Z, a - z, 0 - 9, dấu gạch ngang (-) và dấu gạch dưới (_)'
                        );
                }
            } else {
                $('#name-url').parent().addClass('has-error');
                $('#name-url').parent().removeClass('has-warning');
                $('#name-url').parent().find('.help-block').text(
                    'Nhập tên url có các kí tự từ A - Z, a - z, 0 - 9, dấu gạch ngang (-) và dấu gạch dưới (_)');
            }

        });

        // onsubmit form form-submit
        $('#form-submit').submit(function(e) {
            if (check_submit == false) {
                e.preventDefault();
                swal("Lỗi", "Vui lòng kiểm tra lại các trường dữ liệu", "error");
            }
        });

        $(document).ready(function() {
            // check session error and show message
            @if (session('error'))
                swal("Lỗi", "{{ session('error') }}", "error");
            @endif
            // check session success and show message
            @if (session('success'))
                swal("Thành công", "{{ session('success') }}", "success");
            @endif
        });
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-solid">
                <div class="box-header">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Xem trước mẫu</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i
                                class="fa fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="box-body">
                    <h4>
                        Tên mẫu: {{ $usesTemplate->name }}
                    </h4>

                    <img width="80%" style="margin-left: 10%" src="{{ asset("images/cards/$usesTemplate->img") }}" alt="{{ $usesTemplate->name }}">

                    <p style="margin-top: 15px; font-size:16px">
                        {!! nl2br(e($usesTemplate->description)) !!}
                    </p>

                    {{-- một nút để xem trước --}}
                    <a href="{{ route("card.demo", $usesTemplate->url) }}" class="btn btn-info" target="_blank">Xem web mẫu</a>

                </div>

            </div>

        </div>

    </div>
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">
                <a href="{{ route('user.card.template') }}" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i>
                </a>
                Xem thêm về loại thẻ khác
            </h3>

        </div>

        <div class="box-body">
            <form class="row" id="form-submit" method="post" action="{{ route('user.card.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="form-group has-warning">
                        <label class="control-label" for="inputWarning">
                            Tên trên đường dẫn url
                        </label>
                        <input type="text" name="url" id="name-url" class="form-control"
                            placeholder="Nhập tên trên đường dẫn url" required>
                        <span class="help-block">Nhập tên url có các kí tự từ A - Z, a - z, 0 - 9, dấu gạch ngang (-) và
                            dấu gạch dưới (_)
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="name-type">Số lượng lượt xem tối đã</label>
                        <input type="number" class="form-control" name="maxview" placeholder="Nhập số lượng"
                            min="0" max="99999" value="0" required>
                        <span class="help-block">
                            Với số lượng là 0 thì không giới hạn số lượt xem
                        </span>
                        <input type="hidden" name="themeLanding" value="{{ $usesTemplate->id }}">
                    </div>
                </div>
                @foreach ($configs as $index => $config)
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name-type">{{ $config->name }}</label>
                            @if ($config->data_type == 'text')
                                <input type="text" class="form-control" name="data{{ $index }}"
                                    placeholder="example {{ $config->demo }}" required>
                            @elseif ($config->data_type == 'file')
                                <input type="file" class="form-control" name="data{{ $index }}"
                                    placeholder="example {{ $config->demo }}" required>
                            @endif
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Tạo mẫu thiệp</button>
                </div>
            </form>
        </div>

        <div class="box-footer">
            Nguồn: <a href="{{ $usesTemplate->source }}" target="_blank">{{ $usesTemplate->source }}</a>
        </div>
    </div>
@endsection
