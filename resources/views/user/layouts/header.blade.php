<!-- Admin Status Start -->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        @if(Auth::guard('user')->check())
                                    
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600"> {{ auth()->guard('user')->user()->full_name }}</span>
                                    <span class="user-status">User</span>
                                </div>
                                <span>
                                    <img class="round" src="{{ url('public/images/default-user.png') }}" alt="avatar" height="40" width="40">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">                                        
                                <a class="dropdown-item" href="{{ url('admin/logout') }}">
                                    <i class="feather icon-power"></i> Logout
                                </a>
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Admin Status End -->