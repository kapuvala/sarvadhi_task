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
            <li class=" nav-item {{ (request()->is('user/dashboard')) ? 'active' : '' }}">
                <a href="{{route('user.view.dashboard')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>                                

            <li class=" nav-item {{ (request()->is('user/vendor*')) ? 'active' : '' }}">
                <a href="{{ route('user.view.vendor.lists') }}">
                    <i class="feather icon-user"></i>
                    <span class="menu-title" data-i18n="Vendors">Vendors</span>
                </a>
            </li>

            <li class=" nav-item {{ (request()->is('user/product*')) ? 'active' : '' }}">
                <a href="{{ route('user.view.product.lists') }}">
                    <i class="feather icon-user"></i>
                    <span class="menu-title" data-i18n="Products">Products</span>
                </a>
            </li>

            <li class=" nav-item {{ (request()->is('user/invoice*')) ? 'active' : '' }}">
                <a href="{{ route('user.view.invoice.lists') }}">
                    <i class="feather icon-file"></i>
                    <span class="menu-title" data-i18n="Invoices">Invoices</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->