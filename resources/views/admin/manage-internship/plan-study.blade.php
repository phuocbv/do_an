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
                    <table class="table table-hover" id="table-semester">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Học kì</th>
                                {{--<th>Ngày bắt đầu</th>--}}
                                {{--<th>Ngày kết thúc</th>--}}
                                {{--<th>Edit</th>--}}
                            </tr>
                        </thead>
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

@section('script')
    <script>
        $(function() {
            var table = $('#table-semester').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 20,
                {{--ajax: '{!! route('admin.getDataListPlanStudy') !!}',--}}
                ajax:{
                    url: '{!! route('admin.getDataListPlanStudy') !!}',
                    data: {
                        to: 'a',
                        from: 'b'
                    }
                },
                columns: [
                    {
                        data: 'tid',
                        name: 'tid',
//                        render: function (data) {
//                            if (data == 1) {
//                                return "MOT"
//                            } else {
//                                return data;
//                            }
//                        }
                    },
                    { data: 'tracking', name: 'tracking' }
//                    {
//                        data: 'start',
//                        name: 'start',
//                        render: function(data) {
//                            var date = new Date(data);
//                            var month = date.getMonth() + 1;
//                            return date.getDate() + '/' + (month.length > 1 ? month : '0' + month) + '/' + date.getFullYear();
//                        }
//                    },
//                    {
//                        data: 'finish',
//                        name: 'finish ' ,
//                        render: function(data) {
//                            var date = new Date(data);
//                            var month = date.getMonth() + 1;
//                            return date.getDate() + '/' + (month.length > 1 ? month : '0' + month) + '/' + date.getFullYear();
//                        }
//                    },
//                    { defaultContent: '<button class="edit">Click{id}</button>'}
                ]
            });

            $('#table-semester tbody').on('click', 'button.edit', function () {
                var data = table.row($(this).parents('tr')).data();
                console.log(data);
            } );
        });
    </script>
@endsection
