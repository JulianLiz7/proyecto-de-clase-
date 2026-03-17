<nav>
    <a href="{{ url('/') }}" style="text-decoration: none;">
        <h2>MiniMarket</h2>
    </a>
    <div style="display: flex; gap: 20px; align-items: center;">
        <a href="{{ url('/product') }}" style="text-decoration: none; font-weight: 600;">Inicio</a>
        <a href="{{ url('/product/create') }}" style="text-decoration: none; font-weight: 600;">Vender</a>
        <a href="{{ route('cart.index') }}" style="text-decoration: none; font-weight: bold; background: rgba(56, 189, 248, 0.2); padding: 5px 15px; border-radius: 20px; color: #38bdf8;">
            🛒 Carrito 
            <span style="background: #38bdf8; color: #111; padding: 2px 8px; border-radius: 10px; font-size: 0.8rem; margin-left: 5px;">
                {{ session('cart') ? count(session('cart')) : 0 }}
            </span>
        </a>
    </div>
</nav>