@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Quản lí khóa thực tập</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.listPlanStudy') }}">Kế hoạch học tập</a></li>
            </ol>
            <div>
                <button class="btn btn-default" data-toggle="modal" data-target="#myModal">Thêm học kì</button>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Kế hoạch học tập
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Học kì</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày kết thúc</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp

                            @foreach ($listSemester as $value)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->start)->format(config('settings.format_date_view')) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->finish)->format(config('settings.format_date_view')) }}</td>
                                    <td>@</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal create semester -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Tạo học kì mới</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-info">Tạo học kì</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal create semester-->
    </div>
@endsection
