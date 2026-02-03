<style>
    .sidebar {
        background-color: #603917;
        /* Rich brown */
    }

    .sidebar .nav-link {
        color: #fff;
        padding: 12px 20px;
        border-radius: 8px;
        margin-bottom: 5px;
        transition: all 0.2s ease;
    }

    .sidebar .nav-link:hover {
        background-color: #7a4f2b;
        /* lighter brown on hover */
        color: #fff;
        text-decoration: none;
    }

    .sidebar .nav-link.active {
        background-color: #ff8c42;
        /* accent orange for active link */
        color: #fff;
        font-weight: bold;
    }
</style>

<div class="sidebar bg-dark\ p-3">
    <h5 class="text-white text-center py-3 mb-4">Admin Panel</h5>

    <nav class="nav flex-column">
        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
        </a>

        <a href="{{ route('admin.categories.index') }}"
            class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
            <i class="fas fa-list me-2"></i> Categories
        </a>

        <a href="{{ route('admin.brands.index') }}" class="nav-link {{ Request::is('admin/brands*') ? 'active' : '' }}">
            <i class="fas fa-tags me-2"></i> Brands
        </a>

        <a href="{{ route('admin.products.index') }}"
            class="nav-link {{ Request::is('admin/products*') ? 'active' : '' }}">
            <i class="fas fa-boxes me-2"></i> Products
        </a>

        <a href="{{ route('admin.orders.index') }}" class="nav-link {{ Request::is('admin/orders*') ? 'active' : '' }}">
            <i class="fas fa-shopping-cart me-2"></i> Orders
        </a>
         <a href="{{ route('admin.userlist.index') }}"
            class="nav-link {{ Request::is('admin/userlist*') ? 'active' : '' }}">
            <i class="fas fa-users me-2"></i> Users
        </a>
        <a href="{{ route('admin.coupons.index') }}"
            class="nav-link {{ Request::is('admin/coupons*') ? 'active' : '' }}">
            <i class="fas fa-ticket-alt me-2"></i> Coupons
        </a>
        <a href="{{ route('admin.reports.index') }}"
            class="nav-link {{ Request::is('admin/reports*') ? 'active' : '' }}">
            <i class="fas fa-chart-line"></i> Reports
        </a>
    </nav>
</div>
