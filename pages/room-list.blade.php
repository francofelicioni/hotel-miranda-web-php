@extends('layout')

@section('content')

<section class="main">
    <div class="about__container">
        <h3>THE ULTIMATE LUXURY</h3>
        <h2>Ultimate Room</h2>

        <div class="page-navigation">
            <a class="page-navigation__home" href="../index.php"> Home </a>
            <p>|</p>
            <a class="page-navigation__about" href="../rooms.php"> Rooms </a>
        </div>
    </div>

    <div class="swiper rooms-list-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="list-container">
                    <img src="../assets/images/home/1.png" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Minimal Duplex Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $345/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/4.png" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Full Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $645/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/11.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Economy Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $290/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/9.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Sea View Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $490/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/10.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Full Sea View Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $545/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/11.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Economy Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $290/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/11.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Economy Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $290/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/11.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Economy Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $290/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/11.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Economy Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $290/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="list-container">
                    <img src="../assets/images/home/12.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Deluxe Duplex</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $745/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/13.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Gold Duplex Room</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $590/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/14.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Silver Duplex Room</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $490/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/14.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Silver Duplex Room</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $490/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/14.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Silver Duplex Room</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $490/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/14.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Silver Duplex Room</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $490/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/14.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Silver Duplex Room</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $490/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/14.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Silver Duplex Room</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $490/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/14.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Silver Duplex Room</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $490/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="list-container">
                    <img src="../assets/images/home/1.png" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Minimal Duplex Room</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $345/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/4.png" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Full Duplex</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $645/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/8.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Standard Duplex</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $445/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/8.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Standard Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $445/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/9.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Sea View Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $490/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/10.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Full Sea View Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $545/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/11.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Economy Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $290/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/11.jpg" alt="Hotel Room" />
                    <div class="room__list__container">
                        <div class='title-desc__container'>
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <h4>Economy Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $290/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="booking__button">
                                <a href="../room-detail.php"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-container">
                    <img src="../assets/images/home/11.jpg" alt="Hotel Room" />
                    <div class="room__information">
                        <div class="room__list__container">
                            <div class="list__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <div class='title-desc__container'>
                                <h4>Economy Duplex</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                            </div>
                            <div class="price__container">
                                <p class="room__price">
                                    $290/ <span class="room__price--sm">Night</span>
                                </p>
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

@endsection