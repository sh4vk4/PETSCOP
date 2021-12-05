<?php

$link = mysqli_connect("localhost", "root", "root", "petscop");

if (isset($_POST["nickname"])) {
  //Вставляем данные, подставляя их в запрос
  $sql = mysqli_query($link, "INSERT INTO `feedback` (`nickname`, `email`, `msg`) VALUES ('{$_POST['nickname']}', '{$_POST['email']}', '{$_POST['msg']}')");
  //Если вставка прошла успешно
  if ($sql) {
    echo '';
  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style/style.css" />
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
    <link rel="shortcut icon" href="../assets/img/fav-icon.png" type="image/x-icon">
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
            <a class="nav-link" href="#">продукция</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">о нас</a>
          </li>
          <li class="nav-item">|</li>
          <li class="nav-item ms-2">
            Здравствуйте, <?php echo $_REQUEST['first_name']?>!
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">выйти</a>
          </li>
        </ul>
      </div>
    </nav>
    <header class="gradient-1 page-header header container-fluid">
      <div class="description">
        <h1 style="font-size: 3.5rem;">ПРОДУКЦИЯ</h1>
        <h1 style="font-size: 5.5rem;"><i style="margin-right: .75rem;" class="fas fa-paw"></i>PETSCOP</h1>
      </div>
      <div class="description-img">
        <img
          src="../assets/img/toy-dog.png"
          alt=""
          style="width: 580px;"
        />
      </div>
    </header>
    <div class="container products mb-5 mt-5">
        <div class="products__category grid">
            <a class="no-style" href="scripts/food.php#products">
                <div class="products__category-item">
                    <img  src="../assets/img/bowl.png" class="product-img img-fluid"/>
                     <h4 class="mb-5 fw-bold">КОРМ</h4>
                </div>
            </a>
            <a class="no-style" href="scripts/toys.php#products">
                <div class="products__category-item">
                    <img src="assets/img/toy.png" class="product-img img-fluid" />
                    <h4 class="mb-5 fw-bold">ИГРУШКИ</h4>
              </div>
            </a>
            <a class="no-style" href="scripts/accessory.php#products">
              <div class="products__category-item">
                    <img src="../assets/img/accessory.png" class="product-img img-fluid" />
                    <h4 class="mb-5 fw-bold">АКСЕССУАРЫ</h4>
              </div>
            </a>
            <a class="no-style" href="scripts/healthcare.php#products">
              <div class="products__category-item">
                    <img src="../assets/img/healthcare.png" class="product-img img-fluid"/>
                    <h4 class="mb-5 fw-bold">УХОД</h4>
              </div>
            </a>
        </div>
        <div style="margin: 5rem 0;" class="products__catalogue grid">
            <div class="products__catalogue-items">
                <img class="img-fluid" src="assets/img/products-dog.png" alt="">
                <h2 class="fw-bold mt-4 mb-4">Порадуйте своего питомца вместе<br>с <i style="margin-right: .15rem;" class="fa fa-paw"></i>PETSCOP!</h2>
                <a class="link" href="about.php">ПОДРОБНЕЕ <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="products__catalogue-items">
                <div clas="products__items">
                    <div class="products__item mb-5 grid">
                        <img src="../assets/img/toy.png" class="products__item-img img-fluid" alt="">
                        <div class="products__item-txt">
                <h3>Lorem ipsum</h3>
                <p>Quisque
                    interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor
                    id sapien rutrum, id vulputate quam iaculis.</p>
                </div>
                <p class="products__item-cost">300р</p>
                <a class="products__item-link link" href="cart.html">КУПИТЬ <i class="fas fa-angle-right"></i></a>
                </div>
                <div class="products__item mb-5 grid">
                    <img src="../assets/img/toy.png" class="products__item-img img-fluid" alt="">
                    <div class="products__item-txt">
            <h3>Lorem ipsum</h3>
            <p>Quisque
                interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor
                id sapien rutrum, id vulputate quam iaculis.</p>
            </div>
            <p class="products__item-cost">300р</p>
            <a class="products__item-link link" href="cart.html">КУПИТЬ <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="products__item mb-5 grid">
                <img src="../assets/img/toy.png" class="products__item-img img-fluid" alt="">
                <div class="products__item-txt">
        <h3>Lorem ipsum</h3>
        <p>Quisque
            interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor
            id sapien rutrum, id vulputate quam iaculis.</p>
        </div>
        <p class="products__item-cost">300р</p>
        <a class="products__item-link link" href="cart.html">КУПИТЬ <i class="fas fa-angle-right"></i></a>
        </div>
        <div class="products__item grid">
            <img src="../assets/img/toy.png" class="products__item-img img-fluid" alt="">
            <div class="products__item-txt">
    <h3>Lorem ipsum</h3>
    <p>Quisque
        interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor
        id sapien rutrum, id vulputate quam iaculis.</p>
    </div>
    <p class="products__item-cost">300р</p>
    <a class="products__item-link link" href="cart.html">КУПИТЬ <i class="fas fa-angle-right"></i></a>
    </div>
                </div>
            </div>
        </div>
  </div>
 <div class="gradient-2">
        <p>
            Если у Вас возникли какие-либо вопросы, не стесняйтесь связаться с нами в любое время!<br><br>
            <span style="font-size: .75em;">Время ответа может занять от нескольких минут, до часа, в зависимости от нагруженности.</span>
          </p>
          <form method="POST" class="container news">
            <h3 class="news-title">Свяжитесь с нами!</h3>
                <div class="form-group mb-2">
                    <input type="text" class="form-control" placeholder="Ваше имя" name="nickname">
                </div>
                <div class="form-group mb-2">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group mb-2">
                    <input type="text" style="height: 160px;" class="form-control" placeholder="Сообщение" rows="4" name="msg">
                </div>
                <input type="submit" class="btn btn-primary btn-block send" value="Отправить" name="">
        </form>
</div>
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
