<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    </style>
</head>
    <body class="bg-gray-100">
        <div class="flex min-h-screen">

            <div style="background-color: #213f74;" class="fixed left-0 top-0 h-full w-64 text-white">
                <div class="p-6 border-b border-white border-opacity-20">
                    <h1 class="text-2xl font-bold">Homepage</h1>
                </div>
                <nav class="mt-6">
                    <a href="#" class="block w-full p-6 bg-white bg-opacity-50">Home</a>
                    <a href="#" class="block w-full p-6 hover:bg-white hover:bg-opacity-20">coming soon</a>
                    <a href="#" class="block w-full p-6 hover:bg-white hover:bg-opacity-20">coming soon</a>
                    <a href="#" class="block w-full p-6 hover:bg-white hover:bg-opacity-20">coming soon</a>
                </nav>
            </div>
            <div class="flex-1 ml-64 p-8">
                <div class="header-container">
                    <h2 class="text-2xl font-bold mb-6">Dashboard</h2>
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
            window.location.href = '/login';
        }
    });
}
            </script>
</body>
</html>
