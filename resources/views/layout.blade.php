<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<nav>
    <h2>My Portfolio</h2>
     <div class="nav-links">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>

<style>
.footer {
    text-align: center;
    padding: 500px ; /* control vertical space */
}
</style>

<footer class="footer">
    <p>© 2026 Maynard Villar. All rights reserved. Built with Laravel | Aspiring Full Stack Developer</p>
</footer>

