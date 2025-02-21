<!DOCTYPE html>
<html>
<head>
    <title>Form Post Data</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <form method="POST" action="{{ url('/postdata') }}">
        @csrf
        <div>
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Kirim</button>
    </form>



</body>
</html>
