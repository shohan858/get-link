@if (Auth::check())
        <!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    {{-- @if (Auth::User()->jumlah_microsite == Auth::user()->batas_microsite)
        <a href="/premium" class="btn btn-primary btn-sm">Upgrade To Premium</a>
    @endif --}}

  
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

       
       
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                @if (Auth::user()->image != null)
                <img class="img-profile rounded-circle"
                    src="{{ asset('gambar/images.user_profile/' . Auth::user()->image ) }}">
                @else
                <img class="img-profile rounded-circle"
                    src="{{ asset('assets/img/Vector (13).png') }}" alt="profile">
                @endif
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ url('/edit_profile/' . auth()->user()->id) }} ">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('testing') }}" >
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Halaman Utama
                </a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Log Out
                    </a>
            </div>
        </li>

    </ul>

</nav>

@else
<script>
    window.location.href = "login"
</script>    
@endif