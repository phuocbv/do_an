<div class="top row">
    <div class="col-md-1 col-sm-2 col-xs-3 image-home">
        <img src="{{ url('img/icon-soict.png') }}">
    </div>
    <div class="col-md-6 col-sm-10 col-xs-9 system-name">
        <div class="institute-name">VIỆN CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</div>
        <div class="manage-system">HỆ THỐNG QUẢN LÝ THỰC TẬP</div>
    </div>
    <div class="col-md-5 col-sm-12 col-xs-12 current-account">
        <div class="name-account">
            @if (Auth::guest())
                <a href="{{ route('login') }}">Login</a>
            @else
                <span>{{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    [Logout]
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </div>
        <div class="button-social">
            <button type="button" class="button-social-face">&nbsp;</button>
            <button type="button" class="button-social-google">&nbsp;</button>
            <button type="button" class="button-social-twitter">&nbsp;</button>
        </div>
    </div>
</div>
