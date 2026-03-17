<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - MiniMarket</title>
    <!-- Link to the specific admin CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Tailwind Optional if needed inside some views -->
    @yield('css')
</head>
<body>

    <!-- Sidebar Navigation -->
    <aside class="admin-sidebar" style="background:#0f172a;">
        <div class="sidebar-header" style="color: #38bdf8;">
            MiniMarket <span style="font-weight: 300;">Admin</span>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li><a href="{{ url('/admin') }}" class="{{ request()->is('admin') ? 'active' : '' }}">Dashboard</a></li>
                <li><a href="{{ route('admin.products') }}" class="{{ request()->is('admin/products') ? 'active' : '' }}">Productos</a></li>
                <li><a href="{{ route('admin.categories.index') }}" class="{{ request()->is('admin/categories*') ? 'active' : '' }}">Categorías</a></li>
                <li><a href="{{ route('product.index') }}" target="_blank" style="margin-top: 20px; border-top: 1px solid #374151; padding-top: 20px;">Ver Tienda Publica</a></li>
                <!-- Add more links here later (e.g., Products, Users, Settings) -->
            </ul>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <main class="admin-main">
        <!-- Top Navigation -->
        <header class="admin-header">
            <div class="header-title">
                @yield('header_title', 'Dashboard')
            </div>
            <div class="header-user">
                <span>Administrador</span>
                <div class="user-avatar">AD</div>
            </div>
        </header>

        <!-- Inject Blade View Content -->
        <section class="admin-content" style="background-color: #f1f5f9;">
            @yield('content')
        </section>
    </main>

    @yield('js')
</body>
</html>
