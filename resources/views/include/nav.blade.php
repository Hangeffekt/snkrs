

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


    <header class="home_header">
        @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="regisztracio_div">
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </div>
                </form>

                <div    class="regisztracio_div">
                    <a  href="/ownproducts">
                        <button type="button"   class="register_button">Termékeim</button>
                    </a>
                </div>

        @else
            <div    class="regisztracio_div">
                <a  href="/registration">
                    <button type="button"   class="register_button">Regisztráció</button>
                </a>
            </div>

            <div    class="belepes_div">
                <a  href="/login">
                    <button type="button"   class="login_button">Belépés</button>
                </a>
            </div>
        @endif
        <div    class="logo_name_div">
            <a  href="/">
                <img    src="Style/melon.jpg"   class="logo_nem_vegleges">
            </a>
        </div>

        <div    class="us_div">
            <a  href="SNKRS_Us.html">
                <button type="button"   class="us_button">Us</button>
            </a>
        </div>

        <div    class="user_div">
            <button type="button"   class="user_button">Én</button>
        </div>
    </header>

    <header class="mobile_header">

    <div class="mobile_screen">
        <div class="mobile_dropdown">
            <button onclick="myFunction()" class="dropbtn">
                    <span   class="dropdown_span"></span>
                    <span   class="dropdown_span"></span>
                    <span   class="dropdown_span"></span>
            </button>
            <div id="myDropdown" class="dropdown-content">
                <a href="/"     >Főoldal</a>
                <a href="/login"    >Bejelentkezés</a>
                <a href="/registration"  >Regisztráció</a>
                <a href=""  >ShoeTrade</a>
                <a href="SNKRS_Us.html"  >Én</a>
            </div>
        </div>
    </div>

    <div    class="mobile_aruhaz_container">

        <div    class="mobile_aruhaz_felso_sav">
            <div    class="main_mobile_text">
                <h1 class="mobile_h1">ShoeTrade</h1>
            </div>

            <div    class="mobile_white_sav"></div>

            <button    class="mobile_wts">
                <a href="/registration" class="mobile_wts_text">Want To Sell</a>
                <div    class="kacsacsor_mobile"><a href="/registration" class="kacsacsor_mobile_a">></a></div>
            </button>

            <div    class="mobile_white_sav"></div>

            <div    class="mobile_wts">
                <a  href="/wtb"  class="mobile_wts_text">Want To Buy</a>
                <div    class="kacsacsor_mobile"><a class="kacsacsor_mobile_a">></a></div>
            </div>

            <div    class="mobile_white_sav"></div>

            <div    class="mobile_wts">
                <a  href="/wtt"  class="mobile_wts_text">Want To Trade</a>
                <div    class="kacsacsor_mobile"><a class="kacsacsor_mobile_a">></a></div>
            </div>

            <div    class="mobile_white_sav"></div>

            <div    class="mobile_wts">
                <a  href="/"  class="mobile_wts_text">Legit Check</a>
                <div    class="kacsacsor_mobile"><a class="kacsacsor_mobile_a">></a></div>
            </div>

        </div>

    </div>

















    </header>

















