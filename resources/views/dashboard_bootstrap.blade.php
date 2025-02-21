<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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
            background-color: #01173d;
            min-height: 100vh;
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
        }
        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }
        .sidebar-link {
            color: white;
            padding: 1.5rem;
            display: block;
            text-decoration: none;
            transition: all 0.3s;
        }
        .sidebar-link.active {
            background-color: rgba(255, 255, 255, 0.5);
        }
        .sidebar-link:hover:not(.active) {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .icon-container {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .notification-container {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .notification {
            padding: 15px;
            border-radius: 5px;
            width: 300px;
            display: flex;
            align-items: start;
            gap: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            animation: slideIn 0.3s ease-in-out;
            position: relative;
        }

        .notification.hide {
            animation: slideOut 0.3s ease-in-out forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }

        .notification-success {
            background-color: #E8F5E9;
            border-left: 4px solid #4CAF50;
        }
        .notification-icon {
            font-size: 20px;
        }

        .notification-content {
            flex-grow: 1;
        }

        .notification-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .notification-message {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body class="bg-light">
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h1 class="fs-4 fw-bold text-white">Admin Panel</h1>
            </div>
            <nav class="mt-3">
                <a href="#" class="sidebar-link active">Dashboard</a>
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

            <div class="container-fluid p-0">
                <!-- Stats Cards -->
                <div class="row g-4 mb-4">
                    <!-- Total Pesanan Card -->
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex justify-content-between">
                                <div>
                                    <p class="text-muted small">Card 1</p>
                                    <h2 class="fs-1 fw-bold mt-2">1000</h2>
                                </div>
                                <div class="icon-container bg-success bg-opacity-10">
                                    <svg class="text-success" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Menunggu Konfirmasi Card -->
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex justify-content-between">
                                <div>
                                    <p class="text-muted small">Card 2</p>
                                    <h2 class="fs-1 fw-bold mt-2">2000</h2>
                                </div>
                                <div class="icon-container bg-warning bg-opacity-10">
                                    <svg class="text-warning" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pesanan Dikonfirmasi Card -->
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex justify-content-between">
                                <div>
                                    <p class="text-muted small">Card 3</p>
                                    <h2 class="fs-1 fw-bold mt-2">2399</h2>
                                </div>
                                <div class="icon-container bg-primary bg-opacity-10">
                                    <svg class="text-primary" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
