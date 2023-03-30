<nav>
    <div class="navbar navAni">
      <div class="navbar-kiri">
        {{-- <button type="button" class="pages5-buttonside">
          <img
            class="navbar-menu"
            src="assets/img/🦆 icon _menu_.png"
            alt=""
          />
          <img
              class="pages5-navbar-menu"
              src="assets/img/🦆 icon _menu_.png"
              alt=""
            />
        </button> --}}
        <button class="button-side">
          {{-- <img
            class="navbar-menu"
            src="{{ asset('assets/img/🦆 icon _menu_.png') }}"
            alt=""
          /> --}}
          <span class="navbar-menu">
            <i id="bars" class="fa-solid fa-bars"></i>
          </span>
        </button>
        <img class="navbar-img" src="{{ asset('assets/img/logo-text2 1.png') }}" alt="" />
      </div>
      <div class="navKanan">
        <a href="/langganan" class="navbar-upgrade">
        <svg
          class="navbar-thumb-up"
          width="23"
          height="21"
          viewBox="0 0 23 21"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M22.9587 9.41663C22.9587 8.86409 22.7392 8.33419 22.3485 7.94349C21.9578 7.55279 21.4279 7.33329 20.8753 7.33329H14.292L15.292 2.57288C15.3128 2.46871 15.3232 2.35413 15.3232 2.23954C15.3232 1.81246 15.1462 1.41663 14.8649 1.13538L13.7607 0.041626L6.90658 6.89579C6.52116 7.28121 6.29199 7.80204 6.29199 8.37496V18.7916C6.29199 19.3442 6.51149 19.8741 6.90219 20.2648C7.29289 20.6555 7.82279 20.875 8.37533 20.875H17.7503C18.6149 20.875 19.3545 20.3541 19.667 19.6041L22.8128 12.2604C22.9066 12.0208 22.9587 11.7708 22.9587 11.5V9.41663ZM0.0419922 20.875H4.20866V8.37496H0.0419922V20.875Z"
            fill="#6B75E6"
          />
        </svg>
        Upgrade
      </a>
      <a href="/" class="navbar-upgrade">
        Logout
      </a>
      </div>
    </div>
  </nav>
