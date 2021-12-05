<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css"
    />
    <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <script
      src="https://kit.fontawesome.com/5608fd0780.js"
      crossorigin="anonymous"
    ></script>
    <meta charset="utf-8" />
    <title>PETSCOP</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md">
      <a class="navbar-brand" href="index.php"><i class="fas fa-paw"></i> PETSCOP</a>
      <button
        class="navbar-toggler navbar-dark"
        type="button"
        data-toggle="collapse"
        data-target="#main-navigation"
      >
      </button>
      <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="products.php">продукция</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">о нас</a>
          </li>
          <li class="nav-item">|</li>
          <li class="nav-item">
            <a class="nav-link" href="#">вход</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reg.php">регистрация</a>
          </li>
        </ul>
      </div>
    </nav>
    <header class="gradient-3 login">
        <div class="login__title grid">
            <h1>ВХОД</h1>
            <i style="font-size: 2.75rem;" class="fas fa-paw"></i>
        </div>
        <form action="logged/log-index.php" style="width: 600px;" method="POST" class="mt-5 container news">
                <div class="form-group mb-2">
                    <input type="text" class="mt-3 form-control" placeholder="Ваше имя" name="first_name">
                </div>
                <div class="form-group mb-2">
                    <input type="password" class="mt-3 form-control" placeholder="Пароль" name="passw">
                </div>
                <input type="submit" class="mt-5 btn btn-primary btn-block send" value="Войти" name="submit">
        </form>
    </header>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Дополнительная информация</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 left">
                <h6 class="text-uppercase font-weight-bold">Контакты</h6>
                <p>169600 Mandela CO, California
                <br/>email@email.com
                <br/>+ 7 (900) 555-35-35
                <br/>+ 7 (900) 555-35-35</p>
            </div>
        <div>
        <div class="footer-copyright text-center">© 2021 PETSCOP</div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
