<!DOCTYPE html>
<html lang="en">
<head>
    <form action="display_result.php" method="post"></form>
    <script src="https://unpkg.com/feather-icons"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web HTML CSS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="RPG_40_flat_vector_logo_of_circle_gradient_betta_fish_simple_m_1-removebg-preview.png" alt="">
                <button id="myButton">Lanjut</button>
            <ul>
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="cv.html">ABOUT ME</a></li>
                <li><a href="req.html">REQUEST</a></li>
                <li><a href="dashboard.php">DAFTAR REQUEST</a></li>
            </ul>
            </div>
            <div class="content">
                <h1>Aquarium <span class="color"> Si Oren</span></h1>
                <p>Selamat datang di Website <span class="color"> Si Oren</span></p>
                <p>Sedia berbagai jenis ikan hias dan peralatan aquarium</p>
            </div>
            <button id="darkModeToggle" onclick="toggleDarkMode()">Toggle Dark Mode</button>
        </div>
    </header>
    
    <footer>
        <p id="jam">
         <?php
          date_default_timezone_set("asia/pontianak");
          echo date("l, d F Y - H:i:s");
          ?></p>
        <p>&copy; rafiadit</p>
        <p>Contact: rafiadit234@gmail.com</p>
    </footer>
    
    <script src="script.js"></script>


    <script>
        feather.replace();
      </script>
</body>
</html>

