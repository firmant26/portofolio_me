<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firman Portfolio | @yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<nav>
    <div class="logo"><strong style="color: white; font-size: 1.2rem;">TRPL Dev</strong></div>
    <div class="menu">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/products">Products</a>
        <a href="/projects">Projects</a>
    </div>
</nav>

@yield('hero')

<div class="container">
    @yield('content')
</div>

<footer>
    <p>© 2026 - Portfolio Firman Triswanda | by Laravel</p>
</footer>

</body>
</html>
