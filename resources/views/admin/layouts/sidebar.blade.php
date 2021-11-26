<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="#">
                    <div class="brand-logo"></div>
                    <!-- <h2 class="brand-text mb-0">Admin</h2> -->
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                <a href="{{route('admin.view.dashboard')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>                                

            <li class=" nav-item {{ (request()->is('admin/users')) ? 'active' : '' }}">
                <a href="{{route('admin.view.users')}}">
                    <i class="feather icon-user"></i>
                    <span class="menu-title" data-i18n="User">User</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->