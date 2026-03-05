<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Laravel Basics - @yield('title')
    </title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('styles')
</head>
<body>

    <!-- Header -->
    <header class="header">
        <h1>My Website</h1>
        <p>Simple HTML & CSS Layout</p>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="/">Home</a>
        <a href="about">About</a>
        <a href="/post">Post</a>
    </nav>

    <!-- Main Section -->
    <div class="container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <h3>Sidebar</h3>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </aside>
        <div>
       @hasSection('content')<!--if content section exist in other pagess-->
       @yield('content')
       @else <h2> No content Found</h2>
       @endIf
</div>                               
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2026 My Website | Designed by You</p>
    </footer>
    @stack('scripts')
</body>
</html>
