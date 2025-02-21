<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .login-btn {
            background-color: #fff;
            color: #11a525;
            border: 1px solid #11a525;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.875rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 20px;
        }
        .login-btn:hover {
            background-color: #11a525;
            color: #fff;
        }
        .login-icon {
            width: 16px;
            height: 16px;
        }
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            padding: 2rem;
            width: 24rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h2 class="text-center fw-bold mb-4">Login</h2>

            @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    @foreach ($errors->all() as $error)
                        <p class="mb-0">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold" for="email">
                        Email
                    </label>
                    <input class="form-control"
                        id="email" type="email" name="email" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold" for="password">
                        Password
                    </label>
                    <input class="form-control"
                        id="password" type="password" name="password" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="login-btn" action="login">
                        <svg class="login-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>
