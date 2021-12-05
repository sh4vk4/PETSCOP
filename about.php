<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="assets/js/main.js"></script>
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
            <a class="nav-link" href="#">о нас</a>
          </li>
          <li class="nav-item">|</li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">вход</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reg.php">регистрация</a>
          </li>
        </ul>
      </div>
    </nav>
    <header class="gradient-1 page-header header container-fluid">
      <div class="description">
        <h1 style="font-size: 3.5rem;">О КОМПАНИИ</h1>
        <h1 style="font-size: 5.5rem;"><i style="margin-right: .75rem;" class="fas fa-paw"></i>PETSCOP</h1>
      </div>
      <div class="description-img">
        <img
          src="assets/img/paw-dog.png"
          alt=""
          style="width:590px;"
        />
      </div>
    </header>
    <div class="container features">
        <p>«PETSCOP» - компания, специализирующаяся на производстве натуральных кормов для собак всех пород. Наше предприятие было  основано в 2015 году. Несмотря на столь небольшой период времени, мы уже успели завоевать доверие клиентов, а многие наши покупатели перевели своих питомцев исключительно на корма нашего производства.
        </p>
        <p>Надо отметить, что направление деятельности компании было выбрано не случайно. Ее создатель является собаководом с большим стажем. Однако при этом, весьма деловым человеком, не имеющим возможности тратить по одному, два часа в день на приготовление корма. Прекрасно понимая, что эта проблема касается многих людей, которые заводят собак и искренне любят своих питомцев, им было принято решение разрешить данный вопрос путем основания собственного предприятия и производства качественного, натурального корма.
        </p>
<p>Основав компанию «PETSCOP» около трех лет назад, ее руководитель смог за столь краткий срок существенно развить свое детище, обеспечив производство кормов в промышленных масштабах.
</p>
<p>Абсолютно вся деятельность компании, начиная от закупки сырья и заканчивая передачей готовой продукции в руки покупателя, представляет собой заботу о четвероногих друзьях наших соотечественников. Предлагаемый вашему вниманию продукт не только не имеет аналогов, произведенных в нашей стране, но также отличается высочайшим уровнем качества и доступной стоимостью.
</p>
<p>Натуральные ингредиенты, уникальная производственная технология, быстрая, шоковая заморозка, позволяющая сохранить полезные свойства продуктов – это и многое другое способствует популяризации кормов «Petdiets». Мы не только производим, но также осуществляем доставку любых объемов в пределах Москвы и Московской области. 
</p>
<p>Мы неустанно работаем над расширением серии наших кормов, а также готовы выполнять индивидуальные заказы, выпуская корма из ингредиентов, подобранных клиентами самостоятельно.
</p>
<p>Мы искренне надеемся, что владельцы собак, начиная от карманных и заканчивая крупными охранными породами, по достоинству оценят наше предложение, что даст их питомцам возможность ежедневно питаться натуральной, полезной и вкусной едой.
</p>
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
              <input type="submit" onclick="return clicked();" class="btn btn-primary btn-block send" value="Отправить" name="">
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
  <script>
    function clicked() {
    alert('Ваше сообщение было успешно отправлено. Ожидайте ответ в течение часа!');
}
  </script>
</html>
