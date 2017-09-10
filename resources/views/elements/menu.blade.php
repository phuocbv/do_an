<nav class="navbar navbar-default mega-nav">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="main-menu">
        <ul class="nav navbar-nav menu-list">
            <li class="dropdown list-category">
                <a href="{{ url('/') }}">Trang chủ</a>
            </li>
            @if (Auth::check())
                @if (Auth::user()->role == config('settings.role.admin'))
                    <li class="dropdown list-category">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Quản lí khóa thực tập</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li><a href="#">Danh sách khóa thực tập</a></li>
                            <li><a href="{{ route('admin.listPlanStudy') }}">Kế hoạch học tập</a></li>
                        </ul>
                    </li>
                    <li class="dropdown list-category">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Quản lí người dùng</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li><a href="#">Danh sách người dùng</a></li>
                            <li><a href="#">Thêm người dùng</a></li>
                        </ul>
                    </li>
                    <li class="dropdown list-category">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Quản lí tin tức</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li><a href="#">Danh sách tin tức</a></li>
                        </ul>
                    </li>
                    <li class="dropdown list-category">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Thống kê đánh giá</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li><a href="#">Thông kê đánh giá</a></li>
                        </ul>
                    </li>
                @elseif (Auth::user()->role == config('settings.role.company'))
                    <li class="dropdown list-category">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Thông tin người dùng</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li><a href="#">Thông tin công ti</a></li>
                        </ul>
                    </li>
                    <li class="dropdown list-category">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Khóa thực tập</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li><a href="#">Danh sách kỳ tham gia</a></li>
                            <li><a href="#">Đăng ký tham gia</a></li>
                        </ul>
                    </li>
                @elseif (Auth::user()->role == config('settings.role.teacher'))
                    <li class="dropdown list-category">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Thông tin người dùng</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li><a href="#">Thông tin giáo viên</a></li>
                        </ul>
                    </li>
                @else
                    <li class="dropdown list-category">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Thông tin người dùng</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li><a href="#">Thông tin sinh viên</a></li>
                        </ul>
                    </li>
                @endif

                <li class="dropdown list-category">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                       role="button" aria-haspopup="true" aria-expanded="false">Thông tin tài khoản</a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li><a href="#">Đổi mật khẩu</a></li>
                    </ul>
                </li>
            @endif
            {{--<li class="dropdown list-category">--}}
                {{--<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"--}}
                   {{--role="button" aria-haspopup="true" aria-expanded="false">Gioi</a>--}}
                {{--<ul class="dropdown-menu mega-dropdown-menu">--}}
                    {{--<li><a href="#">Cushion</a></li>--}}
                    {{--<li><a href="#">Bath</a></li>--}}
                    {{--<li><a href="#">Air Conditioner</a></li>--}}
                    {{--<li><a href="#">Radiator</a></li>--}}
                    {{--<li><a href="#">Washing Machine</a></li>--}}
                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li><a href="#">View all</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="#">Products</a></li>--}}
            {{--<li><a href="#">Latest News</a></li>--}}
            {{--<li><a href="#">Contacts</a></li>--}}
        </ul>
    </div>
</nav>
