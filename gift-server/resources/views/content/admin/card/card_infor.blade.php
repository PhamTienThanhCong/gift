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
                                <th>Giao diện mẫu</th>
                                <th>url</th>
                                <th>Số lượt xem</th>
                                <th>Giới hạn xem</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a style="color: black" href="{{ route('user.card.create',$item->themeUrl) }}">
                                            {{ $item->themeName }}
                                        </a>
                                    </td>
                                    <td>{{ $item->url }}</td>
                                    <td>{{ $item->view }} lượt</td>
                                    <td>
                                        {{ $item->limit_view == 0 ? 'Không giới hạn' : $item->limit_view . ' lượt' }}
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('card.send', $item->url) }}" class="btn btn-danger" target="_blank">Xem</a>
                                        <a href="{{ route('user.card.edit', $item->id) }}" class="btn btn-primary">Sửa</a>
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
