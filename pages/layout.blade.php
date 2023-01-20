<!DOCTYPE html>
<html lang='en'>

@section('head')

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
  <title>Hotel Miranda | About</title>
  <meta name="description=" content="Welcome to the Hotel Miranda website. Get to know our hotel, book rooms, discover our offers, contact us and more!" />
  <meta name="keywords" content="Hotel Miranda, Hotel, Rooms to book, Hotel Miranda prices, Hotel Miranda services, Hotel Miranda Prices, Contact Hotel Miranda" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Old+Standard+TT:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <!-- Swiper JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <!-- Styles.css import  -->
  <link rel="stylesheet" href="../styles/styles.css" />
  @yield('head')

</head>

<body>

  <div class="announcement">
    <p>We Make Your Feel Comfortable</p>
  </div>

  @section('header')
  <header class="header" id="header">
    <div class="header__container">
      <div class="nav-bar">
        <nav class="nav-bar__container">
          <ul class="nav-bar__ul">
            <li><a href="../about.php">About Us</a></li>
            <li><a href="../rooms.php">Rooms</a></li>
            <li><a href="../offers.php">Offers</a></li>
            <li><a href="../contact.php">Contact</a></li>
          </ul>
        </nav>
        <label for="menu" class="nav-bar__burger-menu">
          <span id="span1"></span>
          <span id="span2"></span>
          <span id="span3"></span>
        </label>
      </div>
      <div class="logo">
        <div class="logo-sm__container">
          <a href="../index.php">
            <img class="logo-sm" src="../assets/icons/header/h.svg" alt="Short Logo" />
          </a>
        </div>
        <a href="../index.php">
          <img class="logo__lg" src="../assets/icons/header/hotelMiranda.svg" alt="Full Logo" />
        </a>
      </div>
    </div>
    <div class="header__container">
      <div class="icon-container">
        <img class="icon" src="../assets/icons/header/account.svg" alt="Profile Icon" />
      </div>
      <div class="icon-container">
        <img class="icon" src="../assets/icons/header/search.svg" alt="Search Icon" />
      </div>
    </div>
  </header>

  @section('content')
  @show

  @section('footer')
  <footer class="footer">
    <div class="footer__container">
      <div class="footer__information">
        <div class="footer__information__logo">
          <div class="sm-logo-container">
            <p class="sm-logo">H</p>
          </div>
          <img class="lg-logo" src="../assets/icons/header/hotelMiranda.svg" alt="Full Logo" />
        </div>
        <p class="footer__information__description">
          Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
          eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
        </p>
        <div class="social-icons__container">
          <a class="social-icon__item">
            <img src="../assets/icons/footer/fb.svg" alt="Facebook logo" />
          </a>
          <a class="social-icon__item">
            <img src="../assets/icons/footer/be.svg" alt="Twitter logo" />
          </a>
          <a class="social-icon__item">
            <img class="twitter-icon" src="../assets/icons/footer/tw.svg" alt="Bahance logo" />
          </a>
          <a class="social-icon__item">
            <img src="../assets/icons/footer/in.svg" alt="Linkedin logo" />
          </a>
          <a class="social-icon__item">
            <img src="../assets/icons/footer/yt.svg" alt="Youtube logo" />
          </a>
        </div>
      </div>
      <div class="footer__services">
        <h6>Services.</h6>
        <div class="footer__services__container">
          <div class="footer__services__columun1">
            <p class="services_item">+ Bar</p>
            <p class="services_item">+ Restaurant</p>
            <p class="services_item">+ Swimming Pool</p>
            <p class="services_item">+ Wellness & Spa</p>
            <p class="services_item">+ Conference Room</p>
            <p class="services_item">+ Cocktail Party House</p>
          </div>
          <div class="footer__services__columun2">
            <p class="services_item">+ Gaming Zone</p>
            <p class="services_item">+ Marrige Party</p>
            <p class="services_item">+ Party Planning</p>
            <p class="services_item">+ Tour Consultancy</p>
          </div>
        </div>
      </div>
      <div class="footer__contact-us">
        <h6>Contact Us.</h6>
        <div class="contact-us__container">
          <img src="../assets/icons/footer/phone.svg" alt="Phone logo" />
          <div class="contact-us_information-container">
            <p class="information__container__item">Phone Number</p>
            <a href="tel:+34664158703" class="information__container__item-sm">+34 664 158 703</a>
          </div>
        </div>
        <div class="contact-us__container">
          <img src="../assets/icons/footer/mail.svg" alt="Mail logo" />
          <div class="contact-us_information-container">
            <p class="information__container__item">E-mail</p>
            <a href="mailto:fran.felicioni@gmail.com" class="information__container__item-sm">
              fran.felicioni@gmail.com
            </a>
          </div>
        </div>
        <div class="contact-us__container">
          <img src="../assets/icons/footer/phone.svg" alt="Phone logo" />
          <div class="contact-us_information-container">
            <p class="information__container__item">Our Address</p>
            <p class="information__container__item-sm">
              Palma de Mallorca, Spain
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__copyright-policies">
      <div class="footer__copyright">
        <p>Copyright By@Example - 2022</p>
      </div>
      <div class="footer__policies">
        <a href="#">Terms of use</a>
        <p>|</p>
        <a href="#">Privacy Environmental Policy</a>
      </div>
    </div>
  </footer>
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script type="module" src="../scripts/scripts.js"></script>

  <script src='../scripts/pagination-about.js'></script>
  <script src='../scripts/pagination-rooms.js'></script>
  <script src='../scripts/googleMapsAPI.js'></script>

  @section('scripts')
  @show

</body>

</html>