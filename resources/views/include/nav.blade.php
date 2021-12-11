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
            <a  href="/register">
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