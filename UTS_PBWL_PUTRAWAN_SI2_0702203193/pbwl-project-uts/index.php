<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurban | Berkah</title>
    <link rel="shortcut icon" href="layouts/assets/img/ramadan.ico" type="image/x-icon"> 
    <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>
<body>
<aside>

<header>
      <img src="layouts/assets/img/qurbani.png" class="brand">
      <div class="user">Kurban-Berkah</div>
</header>

<nav>
      <ul>
            <li>
                  <a href="index.php">Home
                  </a>
            </li>
            <li>
                  <a href="index.php?page=pengkurban_tampil">Sohibul Kurban</a>
            </li>
            <li>
                  <a href="index.php?page=kurban_tampil">Kurban</a>
            </li>
            <li>
                <a href="index.php?page=pelaksanaan_tampil">Pelaksanaan</a>
            </li>
      </ul>
</nav>

</aside>

<main>
<article>
      <?php

      require_once "vendor/autoload.php";
      require_once "inc/Koneksi.php";

      if (isset($_GET['page'])) {
            require $_GET['page'] . ".php";
      } else {
            require "main.php";
      }
      ?>
</article>

<footer>
      Copyright &copy; 2023. Designed by Putrawan &#10004;
</footer>
</main>

</body>
</html>