@extends('template.admin')

@section('css')
    {{-- css here --}}
@endsection

@section('js')
    {{-- csript --}}
    <script>
        let check_submit = true;

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
                    if (name != url_old) {
                        $.ajax({
                            url: "{{ route('admin.card.check-url') }}",
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
                    }else{
                        check_submit = true;
                        $('#name-url').parent().find('.control-label').text(
                            `Tên trên đường dẫn url`);
                        $('#name-url').parent().removeClass('has-error');
                        $('#name-url').parent().removeClass('has-warning');
                        $('#name-url').parent().addClass('has-success');
                        $('#name-url').parent().find('.help-block').text('Tên có thể sử dụng');
                    }
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
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo ra các thẻ cho người dùng</h3>

        </div>

        <div class="box-body">
            <form class="row" id="form-submit" method="post" action="{{ route('admin.card.update', $data->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name-type">Tên loại thẻ</label>
                        <input type="text" name="name" class="form-control" id="name-type" placeholder="Nhập tên"
                            value="{{ $data->name }}" required>
                    </div>

                    <div class="form-group has-success">
                        <label class="control-label" for="inputWarning">
                            Tên trên đường dẫn url
                        </label>
                        <input type="text" name="url" id="name-url" class="form-control" value="{{ $data->url }}"
                            placeholder="Nhập tên trên đường dẫn url" required>
                        <span class="help-block">
                            Tên trên đường dẫn url
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Chọn thể loại mẫu</label>
                        <select class="form-control" name="cardId" >
                            @foreach ($card_types as $card)
                                <option 
                                    value="{{ $card->id }}"
                                    @if ($data->cardId == $card->id)
                                        selected
                                    @endif
                                    >{{ $card->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="img-new">Ảnh mô tả</label>
                        <input type="file" name="img" id="img-new">
                        <p class="help-block">Hãy upload một hình ảnh hấp dẫn về thể loại thẻ của bạn !</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>json config</label>
                        <textarea class="form-control" name="config" style="resize:vertical;" rows="10"
placeholder='[{
    "name":"Tên mô tả",
    "data_type":"Kiểu dữ liệu",
    "demo":"Mẫu dữ liệu"
},{
    "name":"Tên mô tả",
    "data_type":"Kiểu dữ liệu",
    "demo":"Mẫu dữ liệu"
}
]' required
>{{ $data->config }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="template-name">Tên template</label>
                        <input type="text" name="template" class="form-control" id="template-name" placeholder="Nhập tên"
                            value="{{ $data->template }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="source-name">Nguồn giao diện</label>
                        <input type="text" name="source" class="form-control" id="source-name" placeholder="Nhập tên"
                        value="{{ $data->source }}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="description" style="resize:vertical;" rows="4"
                            placeholder="Hãy viết mô tả ngắn gọn về thể loại thẻ của bạn" required>{{ $data->description }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Sửa đổi </button>
                </div>
            </form>
        </div>

        <div class="box-footer">
            Tạo ra các thể loại thẻ cho người dùng dễ dàng lựa chọn và sử dụng
        </div>
    </div>
@endsection
