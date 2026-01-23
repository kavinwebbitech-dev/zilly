<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            /* background: #603917; Updated background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .login-box {
            width: 380px;
            background: #603917; /* Slightly transparent card */
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 18px rgba(0, 0, 0, 0.4);

            /* Animation */
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn 0.8s ease-out forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-box label,
        .login-box h4,
        .login-box .form-control {
            color: #ffffff;
        }

        .login-box .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: #fff;
        }

        .login-box .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .login-box .btn {
            background: #ffffff;
            color: #603917;
            font-weight: bold;
        }

        .login-box .btn:hover {
            background: #f1f1f1;
        }

        .alert {
            font-size: 0.9rem;
        }

        .position-absolute i {
            color: #fff;
        }
    </style>

</head>

<body>

    <div class="login-box">
        <h4 class="text-center mb-3">Admin Login</h4>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="mb-3 position-relative">
                <label class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control"
                    placeholder="Password" required>

                <span class="position-absolute" onclick="togglePassword()"
                    style="right: 12px; top: 38px; cursor: pointer;">
                    <i id="toggleIcon" class="fa-solid fa-eye"></i>
                </span>
            </div>

            <button type="submit" class="btn w-100 mt-3">Login</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            let input = document.getElementById("password");
            let icon = document.getElementById("toggleIcon");

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>

</body>

</html>
