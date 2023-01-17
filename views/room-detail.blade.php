<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <title>Hotel Miranda | Rooms Details</title>
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
</head>

<body>
    <div class="annoucement">
        <p>We Make Your Feel Comfortable</p>
    </div>
    <header class="header" id="header">
        <div class="header__container">
            <div class="nav-bar">
                <nav class="nav-bar__container">
                    <ul class="nav-bar__ul">
                        <li><a href="../pages/about.php">About Us</a></li>
                        <li><a href="../pages/rooms.php">Rooms</a></li>
                        <li><a href="../pages/offers.php">Offers</a></li>
                        <li><a href="../pages/contact.php">Contact</a></li>
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

    <div class="about__container--detail">
        <div>
            <h3>THE ULTIMATE LUXURY</h3>
            <h2>Ultimate Room</h2>
        </div>

        <div class="page-navigation--detail">
            <a class="page-navitation__home" href="../index.html"> Home </a>
            <p>|</p>
            <a class="page-navitation__current" href="./rooms-page.html">
                Room Details
            </a>
        </div>
    </div>

    <section class="main--detail">
        <div class="detail__container">
            <div class="title__price__container">
                <div>
                    <h3>DOUBLE BED</h3>
                    <h2>Luxury Double Bed</h2>
                </div>

                <div class="price__container">
                    <p class="room__price">
                        $345 <span class="room__price--sm"> /Night</span>
                    </p>
                </div>
            </div>

            <div class="detail__img__container">
                <img class="detail__img" src="../assets/images/home/4.png" />
            </div>

            <div class="reservation__container">
                <h3>Check Availability</h3>
                <div class="form__item">
                    <label>Check In</label>
                    <input class="form__input" type="date" placeholder="Fri, 14th June 2020" required />
                </div>
                <div class="form__item">
                    <label>Check Out</label>
                    <input class="form__input" type="date" placeholder="Sun, 16th June 2020" required />
                </div>
                <div class="form__item">
                    <label>Full Name</label>
                    <input class="form__input" type="text" placeholder="Enter your name" required />
                </div>
                <div class="form__item">
                    <label>Email</label>
                    <input class="form__input" type="email" placeholder="Enter your email" required />
                </div>
                <div class="form__item">
                    <label>Phone</label>
                    <input class="form__input" type="number" placeholder="Enter your phone number" required />
                </div>
                <div class="form__item">
                    <label>Message</label>
                    <input class="form__input" type="text" placeholder="Let us know for any special request" required />
                </div>
                <button id="check-availability__button">CHECK AVAILABILITY</button>
            </div>

            <p class="room__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum. Sed ut
                perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                voluptatem.
            </p>
        </div>

        <div class="facilities__container">
            <h3>Facilities</h3>

            <div class="facilities__grid">
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/ac.svg" alt="A/C Facility" />
                    <p>Air conditioner</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/wifi.svg" alt="Wifi Facility" />
                    <p>High speed WiFi</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/breakfast.svg" alt="Breakfast Facility" />
                    <p>Breakfast</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/kitchen.svg" alt="Kitchen Facility" />
                    <p>Kitchen</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/cleaning.svg" alt="Cleaning Facility" />
                    <p>Cleaning</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/shower.svg" alt="Shower Facility" />
                    <p>Shower</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/grocery.svg" alt="Grocery Facility" />
                    <p>Grocery</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/single-bed.svg" alt="Single bed Facility" />
                    <p>Single bed</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/shop.svg" alt="Shop near Facility" />
                    <p>Shop near</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/towels.svg" alt="Towels Facility" />
                    <p>Towels</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/assistance.svg" alt="24/7 Online Support Facility" />
                    <p>24/7 Online Support</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/locker.svg" alt="Strong Locker Facility" />
                    <p>Strong Locker</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/security.svg" alt="Smart Security Facility" />
                    <p>Smart Security</p>
                </li>
                <li class="facilitites__li">
                    <img src="../assets/icons/room-detail/facilities/team.svg" alt="Expert Team Facility" />
                    <p>Expert Team</p>
                </li>
            </div>
        </div>

        <div class="guest-information">
            <div class="guest-img__container">
                <img src="../assets/images/room-detail/avatar-70af823a42634caea130b1e9e73b3057.jpg" alt="Guest Image" />
            </div>
            <h3>Franco Felicioni</h3>
            <h4>Front-end Developer</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
            </p>
        </div>

        <div class="policies">
            <h3>Cancellation</h3>
            <p>
                Phasellus volutpat neque a tellus venenatis, a euismod augue
                facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus.
                Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to
                get a full refund.
            </p>
        </div>

        <section class="related-rooms">
            <h3>Related Rooms</h3>

            <div class="swiper-detail">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="room-container">
                            <div class="room__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <img src="../assets/images/home/1.png" alt="Hotel Room" />
                            <div class="room__information__container">
                                <div>
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
                                    <button class="boooking__button">
                                        <a href="./room-detail.html"><span>Booking Now</span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="room-container">
                            <div class="room__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <img src="../assets/images/home/11.jpg" alt="Hotel Room" />

                            <div class="room__information__container">
                                <div>
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
                                    <button class="boooking__button">
                                        <a href="./room-detail.html"><span>Booking Now</span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="room-container">
                            <div class="room__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <img src="../assets/images/home/9.jpg" alt="Hotel Room" />

                            <div class="room__information__container">
                                <div>
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
                                    <button class="boooking__button">
                                        <a href="./room-detail.html"><span>Booking Now</span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="room-container">
                            <div class="room__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <img src="../assets/images/home/10.jpg" alt="Hotel Room" />

                            <div class="room__information__container">
                                <div>
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
                                    <button class="boooking__button">
                                        <a href="./room-detail.html"><span>Booking Now</span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="room-container">
                            <div class="room__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <img src="../assets/images/home/11.jpg" alt="Hotel Room" />

                            <div class="room__information__container">
                                <div>
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
                                    <button class="boooking__button">
                                        <a href="./room-detail.html"><span>Booking Now</span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="room-container">
                            <div class="room__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <img src="../assets/images/home/11.jpg" alt="Hotel Room" />

                            <div class="room__information__container">
                                <div>
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
                                    <button class="boooking__button">
                                        <a href="./room-detail.html"><span>Booking Now</span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="room-container">
                            <div class="room__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <img src="../assets/images/home/11.jpg" alt="Hotel Room" />

                            <div class="room__information__container">
                                <div>
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
                                    <button class="boooking__button">
                                        <a href="./room-detail.html"><span>Booking Now</span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="room-container">
                            <div class="room__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <img src="../assets/images/home/11.jpg" alt="Hotel Room" />

                            <div class="room__information__container">
                                <div>
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
                                    <button class="boooking__button">
                                        <a href="./room-detail.html"><span>Booking Now</span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="room-container">
                            <div class="room__facilities">
                                <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                                <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                            </div>
                            <img src="../assets/images/home/12.jpg" alt="Hotel Room" />
                            <div class="room__information">
                                <div class="room__information__container">
                                    <div>
                                        <h4>Deluxe Duplex</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore.
                                        </p>
                                    </div>
                                    <div class="price__container">
                                        <p class="room__price">
                                            $745/ <span class="room__price--sm">Night</span>
                                        </p>
                                        <button class="boooking__button">
                                            <a href="./room-detail.html"><span>Booking Now</span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-buttons__container">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="rooms__responisve">
                <div class="room-container">
                    <div class="room__facilities">
                        <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                    </div>
                    <img src="../assets/images/home/1.png" alt="Hotel Room" />
                    <div class="room__information__container">
                        <div>
                            <h4>Minimal Duplex Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $345/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="boooking__button">
                                <a href="./room-detail.html"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="room-container">
                    <div class="room__facilities">
                        <img src="../assets/icons/home/roomFacilities/bed.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/wifi.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/car.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/snowflake.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/gym.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/no-smoking.svg" alt="Room facility icon" />
                        <img src="../assets/icons/home/roomFacilities/cocktail.svg" alt="Room facility icon" />
                    </div>
                    <img src="../assets/images/home/11.jpg" alt="Hotel Room" />
                    <div class="room__information__container">
                        <div>
                            <h4>Economy Duplex</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="price__container">
                            <p class="room__price">
                                $290/ <span class="room__price--sm">Night</span>
                            </p>
                            <button class="boooking__button">
                                <a href="./room-detail.html"><span>Booking Now</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

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
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../scripts/pagination-rooms.js"></script>
    <script src="../scripts/scripts.js"></script>
</body>

</html>