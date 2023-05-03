<nav>
    <div class="adKanav" data-aos="fade-right">
        <div class="tpNav">
            <button id="PorfAct" class="proNav">
                <p class="navName">{{ Auth::User()->name }}</p>
                {{-- <img class="adnavimg" src="{{ asset('assets/img/Ellipse 2.png') }}" alt=""> --}}
                @if (Auth::user()->img == null)
                        <img src="{{ asset('assets/img/av.png') }}" alt="" class="adnavimg">
                    @else
                        <img src="{{ asset('gambar') . "/" .Auth::user()->img }}" alt="" class="adnavimg">
                    @endif
            </button>
            <div id="dropAct" class="adPronav">
                <a href="profile/edit/{{ Auth::user()->id }}" class="toProf" style=" border-bottom: 1px solid #524799; border-radius: 10px 10px 0 0">
                    <i class="fa-regular fa-user" style="margin-right: 10px"></i>
                    Profil
                </a>
                <a href="/logout" class="toLog" style="border-radius: 0 0 10px 10px">
                    <i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 10px"></i>
                    Logout
                </a>
            </div>
        </div>
    </div>


    <div class="adNav">
        <div class="adKinav">
           
            <p class="navP">
                @if (request()->is('admin_get'))
                <h1 class="navH1">Dashboard</h1>
                    Admin / <b>dashboard</b>

                @elseif (request()->is('halaman_utama'))
                <h1 class="navH1">Halaman Utama</h1>
                    Admin / <b> Halaman utama</b>

                @elseif (request()->is('microsite_admin'))
                <h1 class="navH1">Total Keseluruhan Microsite Terbuat</h1>
                    Admin / <b> Microsite</b>

                @elseif (request()->is('microsite'))
                <h1 class="navH1">Microsite</h1>
                    Admin / <b> Microsite</b>

                @elseif (request()->is('kategori'))
                <h1 class="navH1">Kategori</h1>
                    Admin / <b> Kategori</b>

                @elseif (request()->is('template'))
                <h1 class="navH1">Template Microsite</h1>
                    Admin / <b> Template</b>

                @elseif (request()->is('paket'))
                <h1 class="navH1">Paket Microsite</h1>
                    Admin / <b> Paket</b>

                @elseif (request()->is('transaksi'))
                <h1 class="navH1">Transaksi</h1>
                    Admin / <b> Transaksi</b>

                @elseif (request()->is('budget'))
                <h1 class="navH1">budget</h1>
                    Admin / <b> Budget</b>

                @elseif (request()->is('get_link'))
                <h1 class="navH1">edit landing page</h1>
                    Admin /Edit landing page / <b>Get Link</b>

                @elseif (request()->is('sponsor'))
                <h1 class="navH1">edit landing page</h1>
                    Admin / Edit landing page / <b>Sponsor</b>

                @elseif (request()->is('short_link'))
                <h1 class="navH1">edit landing page</h1>
                    Admin / Edit landing page / <b>Short Link</b>

                @elseif (request()->is('microsite1'))
                <h1 class="navH1">edit landing page</h1>
                    Admin / Edit landing page / <b>Microsite 1</b>

                @elseif (request()->is('microsite2'))
                <h1 class="navH1">edit landing page</h1>
                    Admin / Edit landing page / <b>Microsite 2</b>

                @elseif (request()->is('cms'))
                <h1 class="navH1">edit landing page</h1>
                    Admin / Edit landing page / <b>CMS</b>

                @elseif (request()->is('keunggulan'))
                <h1 class="navH1">edit landing page</h1>
                    Admin / Edit landing page / <b>Keunggulan Website</b>

                @elseif (request()->is('account'))
                <h1 class="navH1">account</h1>
                    Admin / Account / <b>Account</b>

                @elseif (request()->is('comment'))
                <h1 class="navH1">comment</h1>
                    Admin / Account / <b>Comment</b>
                @endif
            </p>
        </div>
    </div>
</nav>
