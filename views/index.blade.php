@extends('layout')

@section('content')

<section class="main">
    <div class="main__container">
        <h3>THE ULTIMATE LUXURY EXPERIENCE</h3>
        <h2>The Perfect Base For You</h2>
        <div class="btn-container">
            <button class="btn">Take a Tour</button>
            <button class="btn btn--transparent">Learn more</button>
        </div>
    </div>
    <div class="main__container main__container--black">
        <div class="main-container-dates">
            <div class="main__container__date">
                <p>Arrival Date</p>
                <div class="date">
                    <input type="date" placeholder="24th march 2020" />
                </div>
                <div class="line-divider"></div>
            </div>
            <div class="main__container__date">
                <p>Departure Date</p>
                <div class="date">
                    <input type="date" placeholder="30th march 2020" />
                </div>
                <div class="line-divider"></div>
            </div>
        </div>
        <button class="btn">Check availability</button>
    </div>
</section>

<section class="about-us">
    <div class="about-us__container about-us__container--rigth">
        <h3>About Us</h3>
        <h2>Discover Our Underground.</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
        </p>
        <button class="btn">Book Now</button>
    </div>
    <div class="about-us__container about-us__container--left">
        <div class="about-us__container__item">
            <img class="about-us__container__img" src="./assets/images/home/7.png" alt="Hotel Staff" />
            <div class="about-us__container__item-description">
                <img src="./assets/icons/home/team.svg" />
                <img class="team-icon" src="./assets/icons/home/team2.svg" />
                <h4>Strong Team</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor.
                </p>
            </div>
        </div>
        <div class="about-us__container__item about-us__container__item--row">
            <img class="about-us__container__img" src="./assets/images/home/4.png" alt="Luxury Room" />
            <div class="about-us__container__item-description about-us__container__item-description--black">
                <img src="./assets/icons/home/calendar2.svg " />
                <h4>Luxury Room</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="rooms">
    <h3>Rooms</h3>
    <h2>Hand Picked Rooms</h2>

    <div class="room__facilities">
        <img src="./assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
        <img src="./assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
        <img src="./assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
        <img src="./assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
        <img src="./assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
        <img src="./assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
        <img src="./assets/icons/home/roomFacilities/cocktail.svg" alt="    Room facility icon" />
    </div>

    <!-- Responsive -->
    <div class="swiper home__swiper__navigation-coverflow">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./assets/images/home/1.png" alt="Hotel Room" />
                <div class="room__information">
                    <div class="room__information__container">
                        <div>
                            <h4>Minimal Duplex Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <p class="room__price">
                            $345/ <span class="room__price--sm">Night</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/home/4.png" alt="Hotel Room" />
                <div class="room__information">
                    <div class="room__information__container">
                        <div>
                            <h4>Full Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <p class="room__price">
                            $645/ <span class="room__price--sm">Night</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/home/8.jpg" alt="Hotel Room" />
                <div class="room__information">
                    <div class="room__information__container">
                        <div>
                            <h4>Standard Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <p class="room__price">
                            $445/ <span class="room__price--sm">Night</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/home/9.jpg" alt="Hotel Room" />
                <div class="room__information">
                    <div class="room__information__container">
                        <div>
                            <h4>Sea View Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <p class="room__price">
                            $490/ <span class="room__price--sm">Night</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/home/10.jpg" alt="Hotel Room" />
                <div class="room__information">
                    <div class="room__information__container">
                        <div>
                            <h4>Full Sea View Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <p class="room__price">
                            $545/ <span class="room__price--sm">Night</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/home/11.jpg" alt="Hotel Room" />
                <div class="room__information">
                    <div class="room__information__container">
                        <div>
                            <h4>Economy Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <p class="room__price">
                            $290/ <span class="room__price--sm">Night</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/home/12.jpg" alt="Hotel Room" />
                <div class="room__information">
                    <div class="room__information__container">
                        <div>
                            <h4>Deluxe Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <p class="room__price">
                            $745/ <span class="room__price--sm">Night</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/home/13.jpg" alt="Hotel Room" />
                <div class="room__information">
                    <div class="room__information__container">
                        <div>
                            <h4>Gold Duplex Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <p class="room__price">
                            $590/ <span class="room__price--sm">Night</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/home/14.jpg" alt="Hotel Room" />
                <div class="room__information">
                    <div class="room__information__container">
                        <div>
                            <h4>Silver Duplex Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <p class="room__price">
                            $490/ <span class="room__price--sm">Night</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-container">
            <div class="swiper-button-next swiper-button-next--customized"></div>
            <div class="swiper-button-prev swiper-button-prev--customized"></div>
        </div>
    </div>
</section>

<section class="intro-video">
    <div class="intro-video__container">
        <h3>Intro video</h3>
        <h2>Meet With Our Luxury Place.</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat you have to understand this.
        </p>
        <div class="intro-video__item intro-video__item--hidden">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&controls=0&autoplay=1&showinfo=0&rel=0&iv_load_policy=3&end=85&disablekb=1&cc_load_policy=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <button class="btn">Book now</button>
    </div>
    <div class="intro-video__container intro-video__container--right">
        <div class="intro-video__item--right">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&controls=0&autoplay=1&showinfo=0&rel=0&iv_load_policy=3&end=85&disablekb=1&cc_load_policy=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section class="home-facilities">
    <h3>Facilities</h3>
    <h2>Core Features</h2>

    <div class="swiper home__swiper__pagination">
        <div class="swiper-wrapper">
            <div class="swiper-slide facilities__card">
                <div class="card__icons">
                    <img class="facilities__card__icon--number" src="./assets/icons/about/numbers/1.svg" alt="Facility 1" />
                    <img class="facilities__card__icon" src="./assets/icons/home/coreFeatures/icons/1.svg" alt="Facilities" />
                </div>
                <div class="card__texts">
                    <h4>Have High Rating</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide facilities__card">
                <div class="card__icons">
                    <img class="facilities__card__icon--number" src="./assets/icons/about/numbers/2.svg" alt="Facility 1" />
                    <img class="facilities__card__icon" src="./assets/icons/home/coreFeatures/icons/2.svg" alt="Facilities" />
                </div>
                <div class="card__texts">
                    <h4>Quiet Hours</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide facilities__card">
                <div class="card__icons">
                    <img class="facilities__card__icon--number" src="./assets/icons/about/numbers/3.svg" alt="Facility 1" />
                    <img class="facilities__card__icon" src="./assets/icons/home/coreFeatures/icons/3.svg" alt="Facilities" />
                </div>
                <div class="card__texts">
                    <h4>Best Locations</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide facilities__card">
                <div class="card__icons">
                    <img class="facilities__card__icon--number" src="./assets/icons/about/numbers/4.svg" alt="Facility 1" />
                    <img class="facilities__card__icon" src="./assets/icons/home/coreFeatures/icons/4.svg" alt="Facilities" />
                </div>
                <div class="card__texts">
                    <h4>Free Cancellation</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide facilities__card">
                <div class="card__icons">
                    <img class="facilities__card__icon--number" src="./assets/icons/about/numbers/5.svg" alt="Facility 1" />
                    <img class="facilities__card__icon" src="./assets/icons/home/coreFeatures/icons/5.svg" alt="Facilities" />
                </div>
                <div class="card__texts">
                    <h4>Payment Options</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide facilities__card">
                <div class="card__icons">
                    <img class="facilities__card__icon--number" src="./assets/icons/about/numbers/6.svg" alt="Facility 1" />
                    <img class="facilities__card__icon" src="./assets/icons/home/coreFeatures/icons/6.svg" alt="Facilities" />
                </div>
                <div class="card__texts">
                    <h4>Special Offers</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
        </div>
        swiper
        <div class="swiper-pagination"></div>
    </div>

    <div class="home-facilities__grid">
        <div class="facilities__item">
            <img class="facilities__icon--number" src="./assets/icons/home/coreFeatures/numbers/1.svg" alt="Facility 1" />
            <img class="facilities__icon" src="./assets/icons/home/coreFeatures/icons/1.svg" alt="Facilities" />
            <h4>Have High Rating</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
            </p>
            <div class="facilities__slider-dots facilities__slider-dots--hidden">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <div class="facilities__item facilities__item--hidden">
            <img class="facilities__icon--number" src="./assets/icons/home/coreFeatures/numbers/2.svg" alt="Facility 2" />
            <img class="facilities__icon" src="./assets/icons/home/coreFeatures/icons/2.svg" alt="Facilities" />
            <h4>Quiet Hours</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
            </p>
        </div>
        <div class="facilities__item facilities__item--hidden">
            <img class="facilities__icon--number" src="./assets/icons/home/coreFeatures/numbers/3.svg" alt="Facility 3" />
            <img class="facilities__icon" src="./assets/icons/home/coreFeatures/icons/3.svg" alt="Facilities" />
            <h4>Best Locations</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
            </p>
        </div>
        <div class="facilities__item facilities__item--hidden">
            <img class="facilities__icon--number" src="./assets/icons/home/coreFeatures/numbers/4.svg" alt="Facility 4" />
            <img class="facilities__icon" src="./assets/icons/home/coreFeatures/icons/4.svg" alt="Facilities" />
            <h4>Free Cancellation</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
            </p>
        </div>
        <div class="facilities__item facilities__item--hidden">
            <img class="facilities__icon--number" src="./assets/icons/home/coreFeatures/numbers/5.svg" alt="Facility 5" />
            <img class="facilities__icon" src="./assets/icons/home/coreFeatures/icons/5.svg" alt="Facilities" />
            <h4>Payment Options</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
            </p>
        </div>
        <div class="facilities__item facilities__item--hidden">
            <img class="facilities__icon--number" src="./assets/icons/home/coreFeatures/numbers/6.svg" alt="Facility 6" />
            <img class="facilities__icon" src="./assets/icons/home/coreFeatures/icons/6.svg" alt="Facilities" />
            <h4>Special Offers</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna..
            </p>
        </div>
    </div>
</section>

<section class="menu">
    <img class="menu-icon" src="./assets/icons/home/donut.svg" alt="Donut Icon" />
    <img class="menu-icon__responsive" src="./assets/icons/home/donut-responsive.svg" alt="Donut Icon" />
    <h3>Menu</h3>
    <h2>Our Foods Menu</h2>

    <div class="swiper home__swiper__navigation">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <li class="menu__li">
                    <img src="./assets/images/home/menu/1.jpg" class="menu__li__img" alt="Eggs & Bacon" />
                    <div class="menu__li__info">
                        <h4>Eggs & Bacon</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                            do eiusmod tempor.
                        </p>
                    </div>
                </li>
                <li class="menu__li">
                    <img src="./assets/images/home/menu/tea-coffee.jpg" class="menu__li__img" alt="Tea or Coffee" />
                    <div class="menu__li__info">
                        <h4>Tea or Coffee</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                            do eiusmod tempor.
                        </p>
                    </div>
                </li>
                <li class="menu__li">
                    <img src="./assets/images/home/menu/3.jpg" class="menu__li__img" alt="Chia Oatmeal" />
                    <div class="menu__li__info">
                        <h4>Chia Oatmeal</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                            do eiusmod tempor.
                        </p>
                    </div>
                </li>
            </div>
            <div class="swiper-slide">
                <li class="menu__li">
                    <img src="./assets/images/home/menu/5.jpg" class="menu__li__img" alt="Fruit Parfait" />
                    <div class="menu__li__info">
                        <h4>Fruit Parfait</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                            do eiusmod tempor.
                        </p>
                    </div>
                </li>
                <li class="menu__li">
                    <img src="./assets/images/home/menu/6.jpg" class="menu__li__img" alt="Marmalade Selection" />
                    <div class="menu__li__info">
                        <h4>Marmalade Selection</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                            do eiusmod tempor.
                        </p>
                    </div>
                </li>
                <li class="menu__li">
                    <img src="./assets/images/home/menu/7.jpg" class="menu__li__img" alt="heese Plate" />
                    <div class="menu__li__info">
                        <h4>Cheese Plate</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                            do eiusmod tempor.
                        </p>
                    </div>
                </li>
            </div>
        </div>
        <div class="food-menu__swiper__button-container">
            <div class="swiper-button-next swiper-button-next--customized"></div>
            <div class="swiper-button-prev swiper-button-prev--customized"></div>
        </div>
    </div>

    <div class="food-menu-responsive">
        <div class="food-menu-responsive__container">
            <li class="menu__li">
                <img src="./assets/images/home/menu/1.jpg" class="menu__li__img" alt="Eggs & Bacon" />
                <div class="menu__li__info">
                    <h4>Eggs & Bacon</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                        do eiusmod tempor.
                    </p>
                </div>
                <img class="right-arrow-icon" src="./assets/icons/home/right_arrow.svg" alt="Rigth Arrow Icon" />
            </li>
            <li class="menu__li">
                <img src="./assets/images/home/menu/tea-coffee.jpg" class="menu__li__img" alt="Tea or Coffee" />
                <div class="menu__li__info">
                    <h4>Tea or Coffee</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                        do eiusmod tempor.
                    </p>
                </div>
                <img class="right-arrow-icon" src="./assets/icons/home/right_arrow.svg" alt="Rigth Arrow Icon" />
            </li>
            <li class="menu__li">
                <img src="./assets/images/home/menu/3.jpg" class="menu__li__img" alt="Chia Oatmeal" />
                <div class="menu__li__info">
                    <h4>Chia Oatmeal</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                        do eiusmod tempor.
                    </p>
                </div>
                <img class="right-arrow-icon" src="./assets/icons/home/right_arrow.svg" alt="Rigth Arrow Icon" />
            </li>
        </div>
        <div class="food-menu-responsive__container">
            <li class="menu__li">
                <img src="./assets/images/home/menu/5.jpg" class="menu__li__img" alt="Fruit Parfait" />
                <div class="menu__li__info">
                    <h4>Fruit Parfait</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                        do eiusmod tempor.
                    </p>
                </div>
                <img class="right-arrow-icon" src="./assets/icons/home/right_arrow.svg" alt="Rigth Arrow Icon" />
            </li>
            <li class="menu__li">
                <img src="./assets/images/home/menu/6.jpg" class="menu__li__img" alt="Marmalade Selection" />
                <div class="menu__li__info">
                    <h4>Marmalade Selection</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                        do eiusmod tempor.
                    </p>
                </div>
                <img class="right-arrow-icon" src="./assets/icons/home/right_arrow.svg" alt="Rigth Arrow Icon" />
            </li>
            <li class="menu__li">
                <img src="./assets/images/home/menu/7.jpg" class="menu__li__img" alt="heese Plate" />
                <div class="menu__li__info">
                    <h4>Cheese Plate</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                        do eiusmod tempor.
                    </p>
                </div>
                <img class="right-arrow-icon" src="./assets/icons/home/right_arrow.svg" alt="Rigth Arrow Icon" />
            </li>
        </div>
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="slider__img" src="./assets/images/home/hotel-food.jpg" alt="Hotel Food" />
            </div>
            <div class="swiper-slide">
                <img class="slider__img slider__img--hidden" src="./assets/images/home/hotel-food2.jpg" alt="Hotel Food" />
            </div>
            <div class="swiper-slide">
                <img class="slider__img slider__img--hidden" src="./assets/images/home/hotel-food3.jpg" alt="Hotel Food" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="food-slider__responsive">
        <img class="slider__img" src="./assets/images/home/hotel-food.jpg" alt="Hotel Food" />
        <img class="slider__img slider__img--hidden" src="./assets/images/home/hotel-food2.jpg" alt="Hotel Food" />
        <img class="slider__img slider__img--hidden" src="./assets/images/home/hotel-food3.jpg" alt="Hotel Food" />
    </div>
</section>

<div class="featured">
    <div class="featured-container">
        <img src="./assets/icons/home/rocket.svg" alt="Rocket Icon" />
        <h5>84k<span>+</span></h5>
        <p>Projects are Completed</p>
    </div>
    <div class="featured-container">
        <img src="./assets/icons/home/people.svg" alt="Customers Icon" />
        <h5>10M<span>+</span></h5>
        <p>Active Backers Around World</p>
    </div>
    <div class="featured-container">
        <img src="./assets/icons/home/person.svg" alt="Customer Icon" />
        <h5>02k<span>+</span></h5>
        <p>Categories Served</p>
    </div>
    <div class="featured-container">
        <img src="./assets/icons/home/book.svg" alt="Rocket Icon" />
        <h5>100M<span>+</span></h5>
        <p>Idea Raised Funds</p>
    </div>
</div>

@endsection
