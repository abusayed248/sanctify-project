<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link " href="{{ route('admin.site-info.edit') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Website Info
                </a>
                <a class="nav-link " href="{{ route('admin.blog.index') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Blog
                </a>
                
            </div>
        </div>
    </nav>
</div>