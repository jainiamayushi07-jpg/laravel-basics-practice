<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Website Layout</title>
    <link rel="stylesheet" href="css/style.css">
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
        <a href="#">About</a>
        <a href="/post">Post</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
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

       @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2026 My Website | Designed by You</p>
    </footer>

</body>
</html>
