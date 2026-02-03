<div class="header position-fixed top-0 start-0 end-0 bg-white shadow-sm d-flex justify-content-between align-items-center px-3 py-3"
    style="margin-left: 250px; z-index: 1050;">
    <h6 class="mb-0">Welcome, {{ auth()->user()->name }}</h6>

    <div class="dropdown">
        <a href="#" class="text-dark" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user-circle fa-lg"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li>
                <form method="POST" action="{{ route('admin.logout') }}" class="m-0">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="fa fa-sign-out-alt me-2"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
