@if (Auth::check())
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Get Link Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengaturan Landing Page
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        {{-- <a class="nav-link " href="edit_landing_page" >
            <span>Landing Page</span>
        </a> --}}
                @if (Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Halaman Utama</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        <a class="collapse-item" href="/layout">Layout</a>
                    </div>
                </div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Edit Landing Page</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        <a class="collapse-item" href="{{ url('judul1') }}">
                            Get Link
                        </a>
                        <a class="collapse-item" href="{{ url('sponsor') }}">
                            Sponsor
                        </a>
                        <a class="collapse-item" href="{{ url('judul2') }}">
                            Short Link
                        </a>
                        <a class="collapse-item" href="{{ url('judul3') }}">
                            Microsite 1
                        </a>
                        <a class="collapse-item" href="{{ url('judul4') }}">
                            Microsite 2
                        </a>
                        <a class="collapse-item" href="{{ url('judul5') }}">
                            CMS
                        </a>
                        <a class="collapse-item" href="{{ url('keunggulan') }}">
                            Keunggulan Website
                        </a>
                    </div>
                </div>

                {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi"
                aria-expanded="true" aria-controls="transaksi">
                <i class="fas fa-money-check-alt"></i>
                <span>Transaksi</span>
                </a> --}}
                @endif
                <div id="transaksi" class="collapse" aria-labelledby="transaksi" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        <a class="collapse-item" href="transaksidetail">
                            Transaksi
                        </a>
                    </div>
                </div>
                <h1>{{ Auth()->user()->usertype }}</h1>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#microsite"
                    aria-expanded="true" aria-controls="microsite">
                    <i class="fas fa-money-check-alt"></i>
                    <span>Microsite</span>
                </a>
                <div id="microsite" class="collapse" aria-labelledby="microsite" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        <a class="collapse-item" href="{{ url('microsite') }}">
                            Microsite
                        </a>
                        {{-- <a class="collapse-item" href="{{ url('testing') }}">
                            Landing Page
                        </a> --}}
                        @if (Auth::user()->role_id == 3)
                        <a class="collapse-item" href="/budget">
                            budget
                        </a>
                        @endif
                        @if (Auth::user()->role_id == 2)
                        <a class="collapse-item" href="{{ url('micrositeslot') }}">
                            Microsite Slot
                        </a>
                        {{-- <a class="collapse-item" href="{{ url('tambah_template') }}">
                            Template microsite
                        </a> --}}
                        @endif
                    </div>
                </div>

                @if (Auth::user()->role_id == 2)
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#account"
                aria-expanded="true" aria-controls="transaksi">
                <i class="fas fa-money-check-alt"></i>
                <span>Account</span>
                </a>
                <div id="account" class="collapse" aria-labelledby="account" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        <a class="collapse-item" href="account">
                            Account
                        </a>
                        <a class="collapse-item" href="comment">
                            Comment
                        </a>
                    </div>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kategori"
                    aria-expanded="true" aria-controls="kategori">
                    <i class="fas fa-money-check-alt"></i>
                    <span>Kategori</span>
                </a>
                <div id="kategori" class="collapse" aria-labelledby="kategori" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        <a class="collapse-item" href="/table/kategori">
                            Table Kategori
                        </a>
                    </div>
                </div>
                @endif
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
@else
<script>
    window.location.href = "login"
</script>
@endif