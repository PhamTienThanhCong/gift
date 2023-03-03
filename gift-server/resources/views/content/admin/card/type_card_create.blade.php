@extends('template.admin')

@section('css')
    {{-- css here --}}
@endsection

@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="{{ asset('js/admin/type_card.js') }}"></script> --}}
    {{-- form submit form-submit --}}
    <script>
        $(document).ready(function () {
            $('#form-submit').submit(function (e) {
                e.preventDefault();
                
            });
        });
@endsection

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo ra các thể loại thẻ cho người dùng</h3>
        </div>

        <div class="box-body">
            <form class="row" id="form-submit" method="post" action="{{ route('admin.type-card.store') }}" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name-type">Tên thể loại</label>
                        <input type="text" name="name" class="form-control" id="name-type" placeholder="Nhập tên" required>
                    </div>
                    <div class="form-group">
                        <label for="name-url">Tên url</label>
                        <div class="input-group">
                            <input type="text" name="url" id="name-url" class="form-control" placeholder="Nhập tên trên đường dẫn url" required>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat">kiểm tra url!</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="img-new">Ảnh mô tả</label>
                        <input type="file" name="img" id="img-new" required>
                        <p class="help-block">Hãy upload một hình ảnh hấp dẫn về thể loại thẻ của bạn !</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="description" style="resize:vertical;" rows="4"
                            placeholder="Hãy viết mô tả ngắn gọn về thể loại thẻ của bạn" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <div class="box-footer">
            Tạo ra các thể loại thẻ cho người dùng dễ dàng lựa chọn và sử dụng
        </div>
    </div>
@endsection
