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
                                <th>Mô tả</th>
                                @if (Auth::user()->isAdmin == 1)
                                    <th>Số lượng</th>
                                @endif
                                <th>Thao tác</th>
                            </tr>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><img src="{{ asset("/images/cards/$item->img") }}" alt="" height="100px"></td>
                                    <td>{{ $item->name }}</td>
                                    <td style="max-width: 400px">{{ $item->description }}</td>
                                    @if (Auth::user()->isAdmin == 1)
                                        <td>{{ $item->quantity }}</td>
                                    @endif
                                    <td>
                                        @if (Auth::user()->isAdmin == 1)
                                            <a href="{{ route('admin.card.edit', ['id' => $item->id]) }}"
                                                class="btn btn-primary">Sửa</a>
                                        @else
                                            <a href="{{ route('user.card.create', ['template' => $item->url]) }}"
                                                class="btn btn-primary">Sử dụng mẫu</a>
                                        @endif
                                        <a href="{{ route('card.demo', ['url' => $item->url]) }}"
                                            target="_blank" class="btn btn-danger">Xem</a>
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
