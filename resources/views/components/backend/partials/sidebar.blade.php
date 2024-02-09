<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard Home
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>

                <a class="nav-link" href="{{ route('users.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    User List
                </a>



                @can('catagory')
                    <a class="nav-link" href="{{ route('category.list') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-list-alt"></i></div>
                        Catagory
                    </a>
                @endcan

                <a class="nav-link" href="{{ route('sub_categories.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                    Sub Catagory
                </a>
                @can('product')
                    <a class="nav-link" href="{{ route('product.list') }}">
                        <div class="sb-nav-link-icon"><i class="fa-brands fa-product-hunt"></i></i></div>
                        Product
                    </a>
                @endcan

                <a class="nav-link" href="{{ route('sizes.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Size
                </a>
                <a class="nav-link" href="{{ route('tags.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Tag
                </a>
                <a class="nav-link" href="{{ route('colors.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Color
                </a>
                <a class="nav-link" href="{{ route('brands.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Brand
                </a>










            </div>
        </div>

    </nav>
</div>
