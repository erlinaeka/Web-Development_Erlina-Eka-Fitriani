<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="{{asset('icon.png')}}" alt="Mail" width="40px;" height="40px;"> <a href="/"
                class="text-primary text-capitalize">SuratKu</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">

            <a href="/"><img src="{{asset('icon.png')}}" alt="Mail" width="45px;" height="45px;"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard Admin</li>
            <li class="active"><a class="nav-link" href="/home"><i
                        class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            </li>
            <li class="menu-header">Surat</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-envelope"></i><span>Surat</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/surat-izin-kerja">Surat Izin Kerja</a></li>
                    <li><a class="nav-link" href="/surat-lamaran-kerja">Surat Lamaran Kerja</a></li>
                </ul>
            </li>
            </li>

    </aside>
</div>