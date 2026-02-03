<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #603917;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 12px 40px;
            display: block;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: rgba(255, 255, 255, 0.2);
        }

        .header {
            background: #fff;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        /* Pagination left/right layout */
        .pagination-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    @if (session()->has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: @json(session('success')),
                    timer: 2500,
                    showConfirmButton: false
                });
            });
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: @json(session('error')),
                    timer: 3000,
                    showConfirmButton: false
                });
            });
        </script>
    @endif

    <div class="d-flex">
        {{-- Sidebar --}}
        <div class="sidebar position-fixed top-0 start-0 ">
            @include('admin.layouts.sidebar')
        </div>

        {{-- Main content --}}
        <div class="flex-grow-1" style="margin-left: 250px;">
            @include('admin.layouts.header')
            <div class="p-1" style="margin-top: 60px; height: calc(100vh - 60px); overflow-y: auto;">
                @yield('content')
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
