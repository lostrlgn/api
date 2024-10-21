<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная Panda</title>
  <link rel="stylesheet" href="/mvc/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="icon" href="" type="image/x-icon">
</head>

<body>

  <header class="header">
    <div class="container header__container">
      <div class="container header__container">
        <a href="index.html">
        <div class="header__logo">
          <img src="/img/logo.svg" alt="логотип" class="header__logo-pic">
        </div>
        </a>

      <div class="header__search">
        <input type="text" placeholder="Search" class="header__search-input">
        <button type="submit" class="header__search-button">
          <svg class="header__search-button-pic">
            <use xlink:href="sprite.svg#search"></use>
          </svg>
        </button>
      </div>

      <div class="header__user">
        <div class="header__user-pic">
        <?= !empty($user) ? 'Привет, ' . $user->getNickname() : 'Войдите на сайт' ?>
          <img src="/img/user.svg" alt="логотип" class="header__user-img">
        </div>
        <div class="header__user-pic__phone">
          <img src="/img/user__phone.svg" alt="логотип" class="header__user-img">
        </div>
        <div class="header__user-name">
          <h3 class="text"></h3>
        </div>
      </div>
    </div>
  </header>
<main>
<?= $content ?>
<main>
  <footer>
    <div class="line"></div>
    <div class="container footer">

      <div class="footer__contact">
        <a href="index.html" class="footer__contact__logo">
          <img class="footer__contact-pic" src="img/footer_logo.svg" alt="">
        </a>
        <a class="footer__contact-phone" href="">+79811712353</a>
        <a class="footer__contact-email" href="">barakatamir@gmail.com</a>
      </div>

      <div class="footer__suport">
        <h3 class=" text footer__suport-tittle">Поддержка</h3>

        <div class="footer__suport-email">
          <a class="footer__suport-email-color" href="">PandaSupport@gmail.com</a>
        </div>


        <div class="footer__suport-license">
          <div class="footer__suport-license-pic">
            <img src="/img/license.svg" alt="" class="">
          </div>

          <span class="footer__suport-year" href="">2023</span>
        </div>

      </div>

      <div class="footer__feedback">
        <h3 class=" text footer__feedback-tittle">Мы в соц сетях</h3>

        <div class="footer__feedback-items">
          <div class="">
            <a class="" href="">
              <img src="/img/twitter.svg" alt="">
            </a>
          </div>

          <div class="">
            <a class="" href="">
              <img src="/img/telegram.svg" alt="">
            </a>
          </div>
          <div class="">
            <a class="" href="">
              <img src="/img/dzen.svg" alt="">
            </a>
          </div>

        </div>

      </div>

    </div>

  </footer>

  <script defer src="/script.js"></script>
  <script defer src="/fast_panel.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>