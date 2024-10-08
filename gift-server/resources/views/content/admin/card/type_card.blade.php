@extends('template.admin')

@section('css')
    {{-- css here --}}
@endsection

@section('js')
    {{-- js here --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Bordered Table</h3>
                </div>

                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Đường dẫn</th>
                                <th>Mô tả</th>
                                <th>Thao tác</th>
                            </tr>
                            @foreach ($card_types as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><img src="{{ asset("/images/card_type/$item->img") }}" alt="" height="100px"></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->url }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.type-card.edit', ['id' => $item->id]) }}"
                                            class="btn btn-primary">Sửa</a>
                                        <a href="#"
                                            class="btn btn-danger">Xem</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endsection
