<nav class="navbar">
    <h1>
        <a href="{{ url('/') }}" style="text-decoration: none; color: white;">MiniMarket</a>
    </h1>
    <div>
        <a href="{{ url('/product') }}">Inicio</a>
        <a href="{{ url('/product/create') }}">Vender</a>
        <a href="{{ url('/product/about') }}" style="display: none;">Acerca de</a>
        <a href="{{ url('/product/contact') }}" style="display: none;">Contacto</a>
    </div>
</nav>
