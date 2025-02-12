<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">{{ config('app.name') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.dashboard') }}">General Dashboard</a></li>
                    <li class=active><a class="nav-link" href="{{ route('admin.dashboard') }}">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Default Layout</a></li>
                    <li><a class="nav-link" href="#">Transparent Sidebar</a></li>
                    <li><a class="nav-link" href="#">Top Navigation</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Blank
                        Page</span></a></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Product</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.product.index') }}">All Products</a></li>
                    <li><a class="nav-link" href="{{ route('admin.product.create') }}">Create New</a></li>
                </ul>
            </li>

        </ul>

    </aside>
</div>