<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Vinoo</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="(max-width: 800px)" href="style.css" />
</head>

<body>
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="/"><span class="material-symbols-outlined">&#xf22e;</span>Главная</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="material-symbols-outlined">
                    &#xe87d;
                  </span>Знакомства</a>
                <ul class="dropdown-menu">
                  <!-- <li class="nav-item"><a class="nav-link" href="category.html"></a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html"></a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html"></a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html"></a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.html"></a></li> -->
                </ul>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="material-icons">&#xe0f0;</span>Блог</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="/blog">О любви</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="single-blog.html">Статьи</a></li> -->
                </ul>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="material-symbols-outlined">&#xe89a;</span>Кабинет</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="/auth">Вход</a></li>
                  <li class="nav-item"><a class="nav-link" href="/reg">Регистрация</a></li>
                  <li class="nav-item"><a class="nav-link" href="tracking-order.html"></a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="/contact"><span class="material-icons">&#xf05d;</span>О нас</a></li>
            </ul>

            <ul class="nav-shop">
              <!-- <li class="nav-item"><button><i class="ti-search"></i></button></li> -->
              <!-- <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li> -->
              <li class="nav-item"><a class="button button-header" href="/auth">Вход в кабинет</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>



  <?php echo $content ?>

  </p>
  </div>
  </div>
  </div>
  </footer>

  <!-- Виджет согласия с куки -->
  <script charset="utf-8" type="text/javascript" src="https://soglkuki.prolexgroup.ru/widget/script.js"></script>
  <script charset="utf-8" type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      getCookieNotification({
        siteName: 'Vinoo',
        personalInformationLink: 'https://edelson.p-host.in/',
        color: 'purple'
      });
    });
  </script><!-- Виджет согласия с куки -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>

</html>