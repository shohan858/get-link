<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Microsite</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#home"
                    aria-expanded="true" aria-controls="home">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Home</span>
                </a>
                <div id="home" class="collapse" aria-labelledby="home" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        @if(Auth::User()->usertype == 'superadmin')
                        <a class="collapse-item"  href="/">Dashboard</a>
                        @elseif(Auth::User()->usertype == 'member')
                        <a class="collapse-item"  href="/testing">Home</a>
                        @endif
                    </div>
                </div>
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Pengaturan Microsite
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    
        {{-- <a class="nav-link " href="edit_landing_page" >
            <span>Landing Page</span>
        </a> --}}
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Microsite</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        <a class="collapse-item"  href="/microsite">Buat Microsite</a>
                    </div>
                </div>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>