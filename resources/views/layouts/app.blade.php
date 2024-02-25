<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('images/profile.png') }}" type="image/png">
    <link href="{{ asset('style/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Paroki St Mikael Semarang Indah</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="{{ asset('images/profile.png') }}" alt="logo" style="width: 50px" height="50px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex justify-content-center text-dark" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-center w-100">
                <li class="nav-item active ">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Perayaan</a>
                </li>
            </ul>
            <ul class="navbar-nav logo ms-auto order-1 text-white">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.index') }}"><span class="material-symbols-outlined">
                            person
                        </span></a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var toggler = document.querySelector('.navbar-toggler');
        toggler.addEventListener('click', function() {
            var navbarNav = document.querySelector('.navbar-collapse');
            if (navbarNav.classList.contains('show')) {
                navbarNav.classList.remove('show');
            } else {
                navbarNav.classList.add('show');
            }
        });
    });
</script>
</body>

</html>
