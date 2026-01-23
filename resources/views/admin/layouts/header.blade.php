<div class="header d-flex justify-content-between align-items-center">
    <h6 class="mb-0">Welcome, {{ auth()->user()->name }}</h6>

    <div class="dropdown">
        <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
            <i class="fa fa-user-circle"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-end">
            <li>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="dropdown-item">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</div>
