<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/dashboard.css') }}">
</head>

<body>

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="d-flex">
            <img src="{{ asset('images/profile.png') }}" width="50px" height="50px" alt="">
            <h1 style="color: white;">St Mikael</h1>
        </div>
        <ul class="nav">
            <li class="nav-item menu-items">
                <a class="nav-link" href="">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="menu-title" style="color: white;">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#profile-dropdown" aria-expanded="false"
                    aria-controls="profile-dropdown">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <span class="menu-title text-white">Menu Profile</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="profile-dropdown">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.index') }}">Buat Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.show') }}">Edit Profile</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#announcement-dropdown" aria-expanded="false"
                    aria-controls="announcement-dropdown">
                    <span class="material-symbols-outlined">notifications_active</span>
                    <span class="menu-title" style="color: white;">Pengumuman</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="announcement-dropdown">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pengumuman 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pengumuman 2</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#celebration-dropdown" aria-expanded="false"
                    aria-controls="celebration-dropdown">
                    <span class="material-symbols-outlined">celebration</span>
                    <span class="menu-title" style="color: white;">Perayaan</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="celebration-dropdown">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Perayaan 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Perayaan 2</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
