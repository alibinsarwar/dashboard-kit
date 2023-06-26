<nav class="pc-sidebar ">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{route('admin.dashboard')}}" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{asset('admin_theme/images/logo.svg')}}" alt="" class="logo logo-lg">
                <img src="{{asset('admin_theme/images/logo-sm.svg')}}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>
                <li class="pc-item">
                    <a href="{{route('admin.dashboard')}}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">home</i></span><span class="pc-mtext">Dashboard</span></a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Elements</label>
                </li>
                <li class="pc-item pc-hasmenu @routeis('admin.product.*') active @endrouteis">
                    <a href="#" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">edit</i></span><span class="pc-mtext">Product</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item @routeis('admin.product.list') active @endrouteis" ><a class="pc-link" href="{{route('admin.product.list')}}">List</a></li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <label>Chart</label>
                    <span>Tones of readymade charts</span>
                </li>
                <li class="pc-item">
                    <a href="{{route('admin.charts')}}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">bubble_chart</i></span><span class="pc-mtext">Chart</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>