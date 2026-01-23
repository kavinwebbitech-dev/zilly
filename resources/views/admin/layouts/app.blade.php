<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body { background: #f4f6f9; }
        .sidebar {
            width: 280px;
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
            background: rgba(255,255,255,0.2);
        }
        /* .content {
            margin-left: 240px;
        } */
        .header {
            background: #fff;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="d-flex">
    @include('admin.layouts.sidebar')

    <div class="content w-100">
        @include('admin.layouts.header')

        <div class="p-4">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')

</body>
</html>
