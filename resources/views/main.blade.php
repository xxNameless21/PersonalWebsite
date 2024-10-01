<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    <title>Portfolio | Rayya Fawuziyyah</title>
</head>
<body>
    <nav>
        <div class="nav__bar">
            <a href="/" class="nav__logo">R</a>
            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-3-line"></i>
            </div>
           <!-- Assuming this is part of your navigation in main.blade.php -->
<ul class="nav__links" id="nav-links">
    <li><a href="/">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li> <!-- Updated Link -->
    <li><a href="{{ url('profil') }}">Profil</a></li>
    <li><a href="{{ url('portofolio') }}">Portofolio</a></li>
    <li><a href="{{ url('contact') }}" class="btn btn__large">Contact</a></li>
</ul>

        </div>
    </nav>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const navLinks = document.getElementById('nav-links');

        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('open');
        });
    </script>

    <div class="content">
        @yield('content')
    </div>
</body>
<footer>
    <p>&copy; 2024 Rayya Fawuziyyah</p>
</footer>
</html>
