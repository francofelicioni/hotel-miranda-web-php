@extends('layout')

@section('content')

<section class="main">
  <div class="about__container">
    <h3>THE ULTIMATE LUXURY</h3>
    <h2>New Details</h2>

    <div class="page-navigation">
      <a class="page-navigation__home" href="../index.php"> Home </a>
      <p>|</p>
      <a class="page-navigation__contact" href="../contact.php">
        Contact
      </a>
    </div>
  </div>
</section>

<section class="contact__details">
  <div class="detail__item">
    <img src="../assets/icons/contact/location.svg" class="detail__item__icon" />
    <div class="detail__item__info">
      <h3>Hotel Address</h3>
      <h4>19/A, Cirikon City hall Tower New York, NYC</h4>
    </div>
    <img class="contact__list__number" src="../assets/icons/home/coreFeatures/numbers/1.svg" alt="Contact list number" />
  </div>
  <div class="detail__item">
    <img src="../assets/icons/contact/phone.svg" class="detail__item__icon" />
    <div class="detail__item__info">
      <h3>Phone Number</h3>
      <h4>+ 976 586 7578 644 7</h4>
      <h4>+ 876 766 8675 765 6</h4>
    </div>
    <img class="contact__list__number" src="../assets/icons/home/coreFeatures/numbers/2.svg" alt="Contact list number" />
  </div>
  <div class="detail__item">
    <img src="../assets/icons/contact/mail.svg" class="detail__item__icon" />
    <div class="detail__item__info">
      <h3>Email</h3>
      <h4>info@webmail.com</h4>
      <h4>jobs.webmail@mail.com</h4>
    </div>
    <img class="contact__list__number" src="../assets/icons/home/coreFeatures/numbers/3.svg" alt="Contact list number" />
  </div>
</section>

<div id="container">
  <div id="map"></div>
  <div class="inputs__container">
    <div>
      <div class="input__adress">
        <p class="inputs__p">Or</p>
        <input id="address" type="textbox" placeholder="Enter any address" />
      </div>
    </div>
    <div id="select__container">
      <p>Select a location:</p>
    </div>
  </div>
  <div class="location__button__container">
    <input type="button" id="location__button" value="Search" />
  </div>
  <div id="locations"></div>
</div>

<form class="form">
  <div class="form__container">
    <div class="form__item">
      <img src="../assets/icons/contact/form-fullname.svg" class="contact__form__img" alt="Full Name Icon" />
      <input class="form__input" type="text" placeholder="Your full name" required />
    </div>
    <div class="form__item">
      <img src="../assets/icons/contact/form-phone.svg" class="contact__form__img" alt="Phone Icon" />
      <input class="form__input" type="number" placeholder="Add your phone number" required />
    </div>
  </div>
  <div class="form__container">
    <div class="form__item">
      <img src="../assets/icons/contact/form-mail.svg" class="contact__form__img" alt="Email Icon" />
      <input class="form__input" type="email" placeholder="Enter email address" required />
    </div>
    <div class="form__item">
      <img src="../assets/icons/contact/form-subject.svg" class="contact__form__img" alt="Subject Icon" />
      <input class="form__input" type="text" placeholder="Enter subject" required />
    </div>
  </div>
  <div class="form__container form__container-column">
    <div class="form__item form__item-full">
      <img src="../assets/icons/contact/form-pen.svg" class="contact__form__img" alt="Message Icon" />
      <!-- <textarea class="form_input" placeholder="Tell us what you need" required></textarea> -->
      <input class="form__input" type="text" placeholder="Tell us what you need" required />
    </div>
  </div>
  <button class="form__button" type="button">SEND</button>
</form>

@endsection


<!-- <?php $apiKey = $_ENV['GOOGLE_MAPS_API_KEY']; ?> -->

@section('scripts')
    <script src="../scripts/scripts.js"></script>
    <script type="module" src="../scripts/googleMapsAPI.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfN_i1GDsnjJ9_sNUMKi_KhSw4wqHTZZA&callback=initMap"></script>
@endsection
