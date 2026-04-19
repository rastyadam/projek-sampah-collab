<!DOCTYPE html>
<html>
<head>
    <title>Admin Kantin Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('admin.toko.index') }}">
                <i class="fas fa-store"></i> Admin Kantin
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('admin.toko.index') }}">Daftar Toko</a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button class="nav-link btn btn-link text-white">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container-fluid mt-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>