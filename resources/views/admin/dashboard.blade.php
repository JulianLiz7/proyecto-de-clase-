@extends('layouts.admin')

@section('title', 'Panel de Control')

@section('header_title', 'Visión General')

@section('content')

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-title">Total Productos</div>
            <div class="stat-value">{{ $totalProducts }}</div>
        </div>
        <div class="stat-card">
            <div class="stat-title">Total Categorías</div>
            <div class="stat-value">{{ $totalCategories }}</div>
        </div>
        <div class="stat-card">
            <div class="stat-title">Ventas Totales (Simulado)</div>
            <div class="stat-value">$24,500.00</div>
        </div>
        <div class="stat-card">
            <div class="stat-title">Órdenes (Simulado)</div>
            <div class="stat-value">12</div>
        </div>
    </div>

    <!-- Recent Actions Table Simulation -->
    <div style="margin-top: 30px;">
        <h3 style="margin-bottom: 15px; color: #4b5563; font-weight: 600;">Órdenes Recientes</h3>
        <div class="admin-table-container">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID Orden</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#ORD-001</td>
                        <td>María López</td>
                        <td>Sep 12, 2026</td>
                        <td><span class="badge badge-success">Completado</span></td>
                        <td>$120.50</td>
                    </tr>
                    <tr>
                        <td>#ORD-002</td>
                        <td>Carlos Gómez</td>
                        <td>Sep 12, 2026</td>
                        <td><span class="badge badge-warning">En Proceso</span></td>
                        <td>$85.00</td>
                    </tr>
                    <tr>
                        <td>#ORD-003</td>
                        <td>Ana Martínez</td>
                        <td>Sep 11, 2026</td>
                        <td><span class="badge badge-danger">Cancelado</span></td>
                        <td>$45.00</td>
                    </tr>
                    <tr>
                        <td>#ORD-004</td>
                        <td>Luis Hernández</td>
                        <td>Sep 09, 2026</td>
                        <td><span class="badge badge-success">Completado</span></td>
                        <td>$210.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
