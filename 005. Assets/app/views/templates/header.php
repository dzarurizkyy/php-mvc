<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data["title"] ?></title>
    <!-- Page Icon -->
    <link rel="icon" type="image/x-icon" href="<?= BASEURL ?>/img/PHP MVC.jpg"/>
    <!-- CSS Bootstrap -->
    <link href="<?= BASEURL ?>/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <a class="navbar-brand text-light fw-bold" href="#">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active text-light fw-semibold" aria-current="page" href="<?= BASEURL ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?= BASEURL ?>/about">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>