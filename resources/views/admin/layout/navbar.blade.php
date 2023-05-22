<nav>
    <div class="adKanav" data-aos="fade-right">
        <div class="tpNav">
            <button id="PorfAct" class="proNav">
                <p class="navName">{{ Auth::User()->name }}</p>
                {{-- <img class="adnavimg" src="{{ asset('assets/img/Ellipse 2.png') }}" alt=""> --}}
                @if (Auth::user()->img == null)
                    <img src="{{ asset('assets/img/av.png') }}" alt="" class="adnavimg">
                @else
                    <img src="{{ asset('gambar') . '/' . Auth::user()->img }}" alt="" class="adnavimg">
                @endif
            </button>
            <div id="dropAct" class="adPronav">
                <a href="profile/edit/{{ Auth::user()->id }}" class="toProf"
                    style=" border-bottom: 1px solid #524799; border-radius: 10px 10px 0 0">
                    <i class="fa-regular fa-user" style="text-align: center; margin-right: 10px"></i>
                    Profil
                </a>
                <a href="/logout" class="toLog" style="border-radius: 0 0 10px 10px">
                    <i class="fa-solid fa-arrow-right-from-bracket" style="text-align: center; margin-right: 10px"></i>
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
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin </p> / <b style="text-align: center; margin: 0px 10px">dashboard</b>
                    </div>
                @elseif (request()->is('halaman_utama'))
                    <h1 class="navH1">Halaman Utama</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin </p> / <b style="text-align: center; margin: 0px 10px"> Halaman utama</b>
                    </div>
                @elseif (request()->is('microsite_admin'))
                    <h1 class="navH1">Total Keseluruhan Microsite Terbuat</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin </p> / <b style="text-align: center; margin: 0px 10px"> Microsite</b>
                    </div>
                @elseif (request()->is('microsite'))
                    <h1 class="navH1">Microsite</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin </p> / <b style="text-align: center; margin: 0px 10px"> Microsite</b>
                    </div>
                @elseif (request()->is('kategori'))
                    <h1 class="navH1">Kategori</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <b style="text-align: center; margin: 0px 10px"> Kategori</b>
                    </div>
                @elseif (request()->is('template'))
                    <h1 class="navH1">Template Microsite</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <b style="text-align: center; margin: 0px 10px"> Template</b>
                    </div>
                @elseif (request()->is('paket'))
                    <h1 class="navH1">Paket Microsite</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <b style="text-align: center; margin: 0px 10px"> Paket</b>
                    </div>
                @elseif (request()->is('transaksi'))
                    <h1 class="navH1">Transaksi</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <b style="text-align: center; margin: 0px 10px"> Transaksi</b>
                    </div>
                @elseif (request()->is('budget'))
                    <h1 class="navH1">budget</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <b style="text-align: center; margin: 0px 10px"> Budget</b>
                    </div>
                @elseif (request()->is('get_link'))
                    <h1 class="navH1">Edit Landing Page
                    </h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <p style="text-align: center; margin: 0px 10px">Edit landing page</p> / <b style="text-align: center; margin: 0px 10px">Get Link</b>
                    </div>
                @elseif (request()->is('sponsor'))
                    <h1 class="navH1">Edit Landing Page
                    </h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <p style="text-align: center; margin: 0px 10px">Edit landing page</p> / <b style="text-align: center; margin: 0px 10px">Sponsor</b>
                    </div>
                @elseif (request()->is('short_link'))
                    <h1 class="navH1">Edit Landing Page
                    </h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <p style="text-align: center; margin: 0px 10px">Edit landing page</p> / <b style="text-align: center; margin: 0px 10px">Short Link</b>
                    </div>
                @elseif (request()->is('microsite1'))
                    <h1 class="navH1">Edit Landing Page
                    </h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <p style="text-align: center; margin: 0px 10px">Edit landing page</p> / <b style="text-align: center; margin: 0px 10px">Microsite 1</b>
                    </div>
                @elseif (request()->is('microsite2'))
                    <h1 class="navH1">Edit Landing Page
                    </h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <p style="text-align: center; margin: 0px 10px">Edit landing page</p> / <b style="text-align: center; margin: 0px 10px">Microsite 2</b>
                    </div>
                @elseif (request()->is('cms'))
                    <h1 class="navH1">Edit Landing Page
                    </h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <p style="text-align: center; margin: 0px 10px">Edit landing page</p> / <b style="text-align: center; margin: 0px 10px">CMS</b>
                    </div>
                @elseif (request()->is('keunggulan'))
                    <h1 class="navH1">Edit Landing Page
                    </h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <p style="text-align: center; margin: 0px 10px">Edit landing page</p> / <b style="text-align: center; margin: 0px 10px">Keunggulan Website</b>
                    </div>
                @elseif (request()->is('account'))
                    <h1 class="navH1">Account</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <p style="text-align: center; margin: 0px 10px">Account</p> / <b style="text-align: center; margin: 0px 10px">Account</b>
                    </div>
                @elseif (request()->is('comment'))
                    <h1 class="navH1">comment</h1>
                    <div class="bungkus-kal">
                        <p style="text-align: center; margin: 0px 10px 0px 0px;"> Admin</p> / <p style="text-align: center; margin: 0px 10px">Account</p> / <b style="text-align: center; margin: 0px 10px">Comment</b>
                    </div>
                @endif
            </p>
        </div>
    </div>
</nav>
