@php
$colours=['one'=>'orange','two'=>'yellow','three'=>'green'];
@endphp
@include('pages.header',['names'=>$colours])

@include('pages.footer')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Layout</title>
  <!-- Link to external CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    My Website
  </header>

  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <div class="container">
    <aside class="sidebar">
      <h3>Sidebar</h3>
      <ul>
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
      </ul>
    </aside>

    <main class="content">
      <h2>Main Content</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula turpis nec diam tincidunt, vel scelerisque elit tempor. Integer sit amet erat ac nisl tincidunt bibendum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nisl non sapien dictum aliquet. Sed nec justo sit amet libero gravida vehicula.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non velit nec nisl convallis aliquam.</p>
    </main>
  </div>

  <footer>
    &copy; 2026 My Website. All rights reserved.
  </footer>

</body>
</html>