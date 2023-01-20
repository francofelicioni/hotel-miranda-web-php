@extends('layout')

@section('content')

<section class="main--detail">

    <div id='detail_container' class="detail__container">
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

        <div id="reservation__container" class="reservation__container">
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
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
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
                                <button class="booking__button">
                                    <a href="../room-detail.php"><span>Booking Now</span></a>
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
                                <button class="booking__button">
                                    <a href="./room-detail.php"><span>Booking Now</span></a>
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
                                <button class="booking__button">
                                    <a href="./room-detail.php"><span>Booking Now</span></a>
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
                                <button class="booking__button">
                                    <a href="./room-detail.php"><span>Booking Now</span></a>
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
                                <button class="booking__button">
                                    <a href="./room-detail.php"><span>Booking Now</span></a>
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
                                <button class="booking__button">
                                    <a href="./room-detail.php"><span>Booking Now</span></a>
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
                                <button class="booking__button">
                                    <a href="./room-detail.php"><span>Booking Now</span></a>
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
                                    <button class="booking__button">
                                        <a href="./room-detail.php"><span>Booking Now</span></a>
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
                        <button class="booking__button">
                            <a href="#reservation__container"><span>Booking Now</span></a>
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
                        <button class="booking__button">
                            <a href="#reservation__container"><span>Booking Now</span></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection