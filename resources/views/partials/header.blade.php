<header>
    <div id="logo">
        <a href="{{ route('pagina-home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>
    </div>

    <div class="main-menu">
        <nav>
            <ul>
                <li><a class="{{ Request::route()->getName() == 'pagina-home' ? 'active' :  ''}}" href="{{ route('pagina-home') }}">Homepage</a></li>
                <li><a class="{{ Request::route()->getName() == 'pagina-prodotti' ? 'active' :  ''}}" href="{{ route('pagina-prodotti') }}">Prodotti</a></li>
                <li><a class="{{ Request::route()->getName() == 'pagina-contatti' ? 'active' :  ''}}" href="{{ route('pagina-contatti') }}">Contatti</a></li>
                <li><a class="{{ Request::route()->getName() == 'pagina-about' ? 'active' :  ''}}" href="{{ route('pagina-about') }}">About Us</a></li>
            </ul>
        </nav>
    </div>
</header>