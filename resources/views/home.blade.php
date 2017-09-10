@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
            </ol>
        </div>
        <div class="col-md-12 view-data">
            @foreach($listNews as $value)
                <div class="info-item col-md-12">
                    <div class="title-info">
                        <a href="">{{ $value->title }}</a>
                    </div>
                    <div class="time-info">
                        {{ $value->created_at->format('d/m/Y') }}
                    </div><hr>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
