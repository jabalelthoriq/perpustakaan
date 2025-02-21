<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .header-container {
            display: flex;
            justify-content: space-between;
        }
        .logout-btn {
            background-color: #fff;
            color: #dc2626;
            border: 1px solid #dc2626;
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
        .logout-btn:hover {
            background-color: #dc2626;
            color: #fff;
        }
        .logout-icon {
            width: 16px;
            height: 16px;
        }
        .sidebar {
            background-color: #213f74;
            height: 100vh;
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
            color: white;
        }
        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .sidebar-link {
            display: block;
            padding: 1.5rem;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        .sidebar-link.active {
            background-color: rgba(255, 255, 255, 0.5);
        }
        .sidebar-link:hover:not(.active) {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }
    </style>
</head>
<body class="bg-light">
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h1 class="fs-4 fw-bold">Homepage</h1>
            </div>
            <nav class="mt-3">
                <a href="#" class="sidebar-link active">Home</a>
                <a href="#" class="sidebar-link">coming soon</a>
                <a href="#" class="sidebar-link">coming soon</a>
                <a href="#" class="sidebar-link">coming soon</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-grow-1">
            <div class="header-container">
                <h2 class="fs-3 fw-bold mb-4">Dashboard</h2>
                <button class="logout-btn" onclick="handleLogout()">
                    <svg class="logout-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    Logout
                </button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function handleLogout() {
            Swal.fire({
                title: 'Logout Confirmation',
                text: 'Are you sure you want to logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Logout',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    localStorage.removeItem('token');
                    sessionStorage.clear();
                    window.location.href = '/test';
                }
            });
        }
    </script>
</body>
</html>
