<nav>
    <div class="adKanav">
        <div class="tpNav">
            <button id="PorfAct" class="proNav">
                <p class="navName">Admin</p>
                <img class="adnavimg" src="{{ asset('assets/img/Ellipse 2.png') }}" alt="">
            </button>
            <div id="dropAct" class="adPronav">
                <a href="" class="toProf" style=" border-bottom: 1px solid #524799; border-radius: 10px 10px 0 0">
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
            <h1 class="navH1">Dashboard</h1>
            <p class="navP">
                @if (request()->is('admin_get'))
                    Admin / <b>dashboard</b>
                @elseif (request()->is('halaman_utama'))
                    Admin / <b> Halaman utama</b>
                @elseif (request()->is('microsite'))
                    Admin / <b> Microsite</b>
                @elseif (request()->is('kategori'))
                    Admin / <b> Kategori</b>
                @elseif (request()->is('template'))
                    Admin / <b> Template</b>
                @elseif (request()->is('paket'))
                    Admin / <b> Paket</b>
                @elseif (request()->is('transaksi'))
                    Admin / <b> Transaksi</b>
                @elseif (request()->is('budget'))
                    Admin / <b> Budget</b>
                @elseif (request()->is('get_link'))
                    Admin /Edit landing page / <b>Get Link</b>
                @elseif (request()->is('sponsor'))
                    Admin / Edit landing page / <b>Sponsor</b>
                @elseif (request()->is('short_link'))
                    Admin / Edit landing page / <b>Short Link</b>
                @elseif (request()->is('microsite1'))
                    Admin / Edit landing page / <b>Microsite 1</b>
                @elseif (request()->is('microsite2'))
                    Admin / Edit landing page / <b>Microsite 2</b>
                @elseif (request()->is('cms'))
                    Admin / Edit landing page / <b>CMS</b>
                @elseif (request()->is('keunggulan'))
                    Admin / Edit landing page / <b>Keunggulan Website</b>
                @elseif (request()->is('account'))
                    Admin / Account / <b>Account</b>
                @elseif (request()->is('comment'))
                    Admin / Account / <b>Comment</b>
                @endif
            </p>
        </div>
    </div>
</nav>
