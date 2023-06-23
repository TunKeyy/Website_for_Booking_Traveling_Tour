<x-header/>
<head>
    <link rel="stylesheet" href="/front/css/style.css">
</head>
    <!-- ---------------------------------------------------------------SLIDER------------------------------------------------- -->
    <!-- copy carousel trong bootstrap -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/front/images/img/xhome_slider.jpg.pagespeed.ic.lLDKIDdpoS.webp" class="d-block w-100" alt="home slider">
                <!-- copy đoạn code captio đã được viết sẵn bên dưới vào -->
                <div class="carousel-caption caption">
                    DISCOVER
                    <br>
                    <span>the world 1</span>
                    <br>
                    <button class="carousel_explore_btn">EXPLORE NOW ...</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/front/images/img/xhome_slider.jpg.pagespeed.ic.lLDKIDdpoS.webp" class="d-block w-100" alt="home slider">
                <!-- copy đoạn code captio đã được viết sẵn bên dưới vào -->
                <div class="carousel-caption caption">
                    DISCOVER
                    <br>
                    <span>the world 2</span>
                    <br>
                    <button class="carousel_explore_btn">EXPLORE NOW ...</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/front/images/img/xhome_slider.jpg.pagespeed.ic.lLDKIDdpoS.webp" class="d-block w-100" alt="home slider">
                <!-- copy đoạn code captio đã được viết sẵn bên dưới vào -->
                <div class="carousel-caption caption">
                    DISCOVER
                    <br>
                    <span>the world 3</span>
                    <br>
                    <button class="carousel_explore_btn">EXPLORE NOW ...</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev carousel_control_btn_custom" type="button"
            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel_control_btn_custom" type="button"
            data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <!-- làm caption 
          Những caption này được thiết kế ban đầu chỉ có một class là caption 
          về sau để đưa vào trong carousel thì thêm class carousel-caption (class này có sẵn trong bootstrap) 
                                   <div class="carousel-caption caption">
                                    DISCOVER
                                    <br>
                                    <span>the world 1</span>
                                    <br>
                                    <button class="carousel_explore_btn">EXPLORE NOW ...</button>
                                  </div>
                                  <div class="carousel-caption caption">
                                    DISCOVER
                                    <br>
                                    <span>the world 2</span>
                                    <br>
                                    <button class="carousel_explore_btn">EXPLORE NOW ...</button>
                                  </div>
                                  <div class="carousel-caption caption">
                                    DISCOVER
                                    <br>
                                    <span>the world 3</span>
                                    <br>
                                    <button class="carousel_explore_btn">EXPLORE NOW ...</button>
                                </div> 
          -->
        <!-- làm nút bấm slide -->
        <!-- Những nút slide được thiết kế riêng không dùng bootstrap ban đầu chỉ có hai class là carousel_slide_btn và number_1
        về sau để kết hợp với carosel bên trên thì thêm data-bs-target, data-bs-slide-to, class="active", aria-current, aria-label vào
      -->
        <div class="carousel_slide_control">
            <button class="carousel_slide_btn number_1" data-bs-target="#carouselExampleControls" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1">01.</button>
            <button class="carousel_slide_btn number_2" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"
                aria-label="Slide 2">02.</button>
            <button class="carousel_slide_btn number_3" data-bs-target="#carouselExampleControls" data-bs-slide-to="2"
                aria-label="Slide 3">03.</button>
        </div>
    </div>
    <!-- ---------------------------------------------------------------FORM------------------------------------------------ ----->
    <!-- <div class="option_form">
        <div class="upper_form">
            <button><i class="fa-solid fa-hotel"></i> HOTELS</button>
            <button><i class="fa-solid fa-car"></i> CAR RENTAL</button>
            <button><i class="fa-solid fa-plane-departure"></i> FLIGHTS</button>
            <button><i class="fa-solid fa-umbrella-beach"></i> TRIPS</button>
            <button><i class="fa-solid fa-ship"></i> SHIPS</button>
            <button><i class="fa-solid fa-person-swimming"></i> ACTIVITIES</button>
        </div>
        <form action="#">
            <div class="wrap_destination">
                <label for="destination">DESTINATION</label><br>
                <input type="text" id="destination"><br>
            </div>
            <div class="wrap_check_in">
                <label for="check_in">CHECK IN</label><br>
                <input type="date" id="check_in"><br>
            </div>
            <div class="wrap_check_out">
                <label for="check_out">CHECK OUT</label><br>
                <input type="date" id="check_out"><br>
            </div>
            <div class="wrap_quantity_adult">
                <label for="quantity_adult">ADULT</label><br>
                <input type="number" min="1" value="1" id="quantity_adult"><br>
            </div>
            <div class="wrap_quantity_child">
                <label for="quantity_child">CHILDREN</label><br>
                <input type="number" min="0" value="0" id="quantity_child"><br>
            </div>
            <input type="Submit" id="Submit" value="SEARCH ...">
        </form>
    </div> -->
    <!-- -------------------------------------------------------------BEST TOUR------------------------------------------- ------->
    <div class="best_tour">
        <div class="best_tour_desc">
            <h2>We have best tours</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo accusantium totam aspernatur eveniet.
                Obcaecati dicta consectetur, quasi sapiente possimus dolor ab magni illum quia ipsam distinctio,
                recusandae magnam ex numquam?</p>
        </div>
        <!-- copy grid trong bootstrap -->
        <!-- class gx- và gy để làm gutter cho grid, xem thêm về gutter trong bootstrap -->
        <div class="container text-center">
            <div class="row gx-5 gy-5">
                <div class="col col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!-- copy card trong bootstrap -->
                    <div class="card card_picture_1">

                        <div class="card-body">
                            <div class="best_tour_date">
                                May 25th - June 01st
                            </div>
                            <h5 class="card-title">Mauritius</h5>
                            <p class="card-text">From $1450</p>
                            <div class="best_tour_rate">
                                <i class="bi bi-star-fill color_star_1"></i>
                                <i class="bi bi-star-fill color_star_2"></i>
                                <i class="bi bi-star-fill color_star_3"></i>
                                <i class="bi bi-star-fill color_star_4"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <a href="#" class="btn btn-primary best_tour_btn">SEE MORE ...</a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!-- copy card trong bootstrap -->
                    <div class="card card_picture_2">
                        <div class="card-body">
                            <div class="best_tour_date">
                                May 25th - June 01st
                            </div>
                            <h5 class="card-title">GREECE</h5>
                            <p class="card-text">From $1450</p>
                            <div class="best_tour_rate">
                                <i class="bi bi-star-fill color_star_1"></i>
                                <i class="bi bi-star-fill color_star_2"></i>
                                <i class="bi bi-star-fill color_star_3"></i>
                                <i class="bi bi-star-fill color_star_4"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <a href="#" class="btn btn-primary best_tour_btn">SEE MORE ...</a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!-- copy card trong bootstrap -->
                    <div class="card card_picture_3">
                        <div class="card-body">
                            <div class="best_tour_date">
                                May 25th - June 01st
                            </div>
                            <h5 class="card-title">SCOTLAND</h5>
                            <p class="card-text">From $1450</p>
                            <div class="best_tour_rate">
                                <i class="bi bi-star-fill color_star_1"></i>
                                <i class="bi bi-star-fill color_star_2"></i>
                                <i class="bi bi-star-fill color_star_3"></i>
                                <i class="bi bi-star-fill color_star_4"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <a href="#" class="btn btn-primary best_tour_btn">SEE MORE ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -----------------------------------------------------------DELUXE PACKAGE ----------------------------------------------->
    <div class="deluxe_package">
        <img src="/front/images/img/xcta.jpg.pagespeed.ic.m69gPEowgD.webp" alt="ảnh nền cho phần deluxe package" width="100%"
            height="100%">
        <div class="deluxe_content">
            <h1>MALDIVES DELUXE PACKAGE</h1>
            <div class="deluxe_rate">
                <i class="bi bi-star-fill color_star_1"></i>
                <i class="bi bi-star-fill color_star_2"></i>
                <i class="bi bi-star-fill color_star_3"></i>
                <i class="bi bi-star-fill color_star_4"></i>
                <i class="bi bi-star-fill"></i>
            </div>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, dolores aliquid eius explicabo aut
                distinctio qui quod provident sapiente adipisci ut neque cupiditate recusandae sunt nobis perspiciatis
                totam tempore vitae rem maxime modi
            </p>
            <button class="deluxe_package_btn">BOOK NOW ...</button>
        </div>
    </div>
    <!-- --------------------------------------------------------THE BEST OFFERS WITH ROOMS--------------------------------- -->
    <div class="best_offers">
        <h2 class="text-center">THE BEST OFFERS WITH ROOMS</h2>
        <div class="offers">
            <div class="container text-left">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- copy card trong bootstrap -->
                        <div class="card mb-3 border-0">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="/front/images/img/offer_1.jpg.webp" class="img-fluid_custom rounded-start"
                                        alt="offer 1">
                                    <div class="img_location">GRAND CASTLE</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body offer_body">
                                        <h5 class="card-title offer_title">$70 <span>per night</span></h5>
                                        <div class="offer_rate">
                                            <i class="bi bi-star-fill color_star_1"></i>
                                            <i class="bi bi-star-fill color_star_2"></i>
                                            <i class="bi bi-star-fill color_star_3"></i>
                                            <i class="bi bi-star-fill color_star_4"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="offer_icon text-secondary">
                                            <i class="fa-solid fa-signs-post"></i>
                                            <i class="fa-regular fa-compass"></i>
                                            <i class="fa-solid fa-bicycle"></i>
                                            <i class="fa-solid fa-sailboat"></i>
                                        </div>
                                        <p class="card-text text-black offer_content">Lorem ipsum dolor sit amet
                                            consectetur, adipisicing elit. Laborum voluptatem tempore numquam minus nisi
                                            ullam. Minima excepturi, inventore illum eaque</p>
                                        <p class="card-text" style="margin: 3rem 0 1rem 0;"><small class="text-muted">
                                                <a class="offer_read_more" href="#">Read more</a> </small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- copy card trong bootstrap -->
                        <div class="card mb-3 border-0">
                            <div class="row g-0">
                                <div class="col-md-5 ">
                                    <img src="/front/images/img/offer_2.jpg.webp" class="img-fluid_custom rounded-start"
                                        alt="offer 2">
                                    <div class="img_location">GRAND CASTLE</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body offer_body">
                                        <h5 class="card-title offer_title">$50 <span>per night</span></h5>
                                        <div class="offer_rate">
                                            <i class="bi bi-star-fill color_star_1"></i>
                                            <i class="bi bi-star-fill color_star_2"></i>
                                            <i class="bi bi-star-fill color_star_3"></i>
                                            <i class="bi bi-star-fill color_star_4"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="offer_icon text-secondary">
                                            <i class="fa-solid fa-signs-post"></i>
                                            <i class="fa-regular fa-compass"></i>
                                            <i class="fa-solid fa-bicycle"></i>
                                            <i class="fa-solid fa-sailboat"></i>
                                        </div>
                                        <p class="card-text text-black offer_content">Lorem ipsum dolor sit amet
                                            consectetur, adipisicing elit. Laborum voluptatem tempore numquam minus nisi
                                            ullam. Minima excepturi, inventore illum eaque</p>
                                        <p class="card-text" style="margin: 3rem 0 1rem 0;"><small class="text-muted">
                                                <a class="offer_read_more" href="#">Read more</a> </small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- copy card trong bootstrap -->
                        <div class="card mb-3 border-0">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="/front/images/img/offer_3.jpg.webp" class="img-fluid_custom rounded-start offer_img"
                                        alt="offer 3">
                                    <div class="img_location">GRAND CASTLE</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body offer_body">
                                        <h5 class="card-title offer_title">$90 <span>per night</span></h5>
                                        <div class="offer_rate">
                                            <i class="bi bi-star-fill color_star_1"></i>
                                            <i class="bi bi-star-fill color_star_2"></i>
                                            <i class="bi bi-star-fill color_star_3"></i>
                                            <i class="bi bi-star-fill color_star_4"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="offer_icon text-secondary">
                                            <i class="fa-solid fa-signs-post"></i>
                                            <i class="fa-regular fa-compass"></i>
                                            <i class="fa-solid fa-bicycle"></i>
                                            <i class="fa-solid fa-sailboat"></i>
                                        </div>
                                        <p class="card-text text-black offer_content">Lorem ipsum dolor sit amet
                                            consectetur, adipisicing elit. Laborum voluptatem tempore numquam minus nisi
                                            ullam. Minima excepturi, inventore illum eaque</p>
                                        <p class="card-text" style="margin: 3rem 0 1rem 0;"><small class="text-muted">
                                                <a class="offer_read_more" href="#">Read more</a> </small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- copy card trong bootstrap -->
                        <div class="card mb-3 border-0">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="/front/images/img/offer_4.jpg.webp" class="img-fluid_custom rounded-start"
                                        alt="offer 4">
                                    <div class="img_location">GRAND CASTLE</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body offer_body">
                                        <h5 class="card-title offer_title">$30 <span>per night</span></h5>
                                        <div class="offer_rate ">
                                            <i class="bi bi-star-fill color_star_1"></i>
                                            <i class="bi bi-star-fill color_star_2"></i>
                                            <i class="bi bi-star-fill color_star_3"></i>
                                            <i class="bi bi-star-fill color_star_4"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="offer_icon text-secondary">
                                            <i class="fa-solid fa-signs-post"></i>
                                            <i class="fa-regular fa-compass"></i>
                                            <i class="fa-solid fa-bicycle"></i>
                                            <i class="fa-solid fa-sailboat"></i>
                                        </div>
                                        <p class="card-text text-black offer_content">Lorem ipsum dolor sit amet
                                            consectetur, adipisicing elit. Laborum voluptatem tempore numquam minus nisi
                                            ullam. Minima excepturi, inventore illum eaque</p>
                                        <p class="card-text" style="margin: 3rem 0 1rem 0;"><small class="text-muted">
                                                <a class="offer_read_more" href="#">Read more</a> </small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- WHAT OUR CLIENTS SAY ABOUT US -->
    <div class="client-say">
        <h2 class="text-center">
            WHAT OUR CLIENTS SAY ABOUT US
        </h2>


        <div class="row client-say__item">
            <div class="row__item col-lg-4 col-md-6 col-sm-12">
                <img src="/front/images/img/img_index/Say-about-us1.webp" alt="" class="item__img">
                <div class="item__img-icon"><img src="/front/images/img/img_index/img-icon1.webp" alt=""></div>
                <div class="img__bg">
                    <div class="square-text">
                        <p class="bold-text">CARLA SMITH</p>
                        <p class="day">November 11, 2022</p>
                    </div>
                    <div class="row__item-text">
                        <p>Best holliday ever</p>
                        <p class="margined-text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa
                            arcu, vitae cursus mi
                            hendrerit nec.</p>
                    </div>
                </div>
            </div>
            <div class="row__item col-lg-4 col-md-6 col-sm-12">
                <img src="/front/images/img/img_index/Say-about-us2.webp" alt="" class="item__img">
                <div class="item__img-icon"><img src="/front/images/img/img_index/img-icon2.webp" alt=""></div>
                <div class="img__bg">
                    <div class="square-text">
                        <p class="bold-text">CARLA SMITH</p>
                        <p class="day">November 11, 2022</p>
                    </div>
                    <div class="row__item-text">
                        <p>Best holliday ever</p>
                        <p class="margined-text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa
                            arcu, vitae cursus mi
                            hendrerit nec.</p>
                    </div>
                </div>

            </div>
            <div class="row__item col-lg-4 col-md-6 col-sm-12">
                <img src="/front/images/img/img_index/Say-about-us3.webp" alt="" class="item__img">
                <div class="item__img-icon"><img src="/front/images/img/img_index/img-icon3.webp" alt=""></div>
                <div class="img__bg">
                    <div class="square-text">
                        <p class="bold-text">CARLA SMITH</p>
                        <p class="day">November 11, 2022</p>
                    </div>
                    <div class="row__item-text">
                        <p>Best holliday ever</p>
                        <p class="margined-text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa
                            arcu, vitae cursus mi
                            hendrerit nec.</p>
                    </div>
                </div>
            </div>

        </div>
        <hr class="after-client">

        <!-- TRENDING NOW -->
        <div class="trending-now">
            <h2 class="trending-now-title">TRENDING NOW</h2>
            <div class="container-fluid">
                <div class="row four-items">
                    <div class="row__items col-lg-3 col-md-4 col-sm-6">
                        <a href="#"><img src="/front/images/img/img_index/Trending-now1.webp" alt=""></a>
                        <div class="row__items-info">
                            <a href="#">GRAND HOTEL</a>
                            <p class="price">FROM $200</p>
                            <p>MADRID, SPAIN</p>
                        </div>
                    </div>
                    <div class="row__items col-lg-3 col-md-4 col-sm-6">
                        <a href="#"><img src="/front/images/img/img_index/Trending-now2.webp" alt=""></a>
                        <div class="row__items-info">
                            <a href="#">GRAND HOTEL</a>
                            <p class="price">FROM $200</p>
                            <p>MADRID, SPAIN</p>
                        </div>
                    </div>
                    <div class="row__items col-lg-3 col-md-4 col-sm-6">
                        <a href="#"><img src="/front/images/img/img_index/Trending-now3.webp" alt=""></a>
                        <div class="row__items-info">
                            <a href="#">GRAND HOTEL</a>
                            <p class="price">FROM $200</p>
                            <p>MADRID, SPAIN</p>
                        </div>
                    </div>
                    <div class="row__items col-lg-3 col-md-4 col-sm-6">
                        <a href="#"><img src="/front/images/img/img_index/Trending-now4.webp" alt=""></a>
                        <div class="row__items-info">
                            <a href="#">GRAND HOTEL</a>
                            <p class="price">FROM $200</p>
                            <p>MADRID, SPAIN</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row__items col-lg-3 col-md-4 col-sm-6">
                        <a href="#"><img src="/front/images/img/img_index/Trending-now5.webp" alt=""></a>
                        <div class="row__items-info">
                            <a href="#">GRAND HOTEL</a>
                            <p class="price">FROM $200</p>
                            <p>MADRID, SPAIN</p>
                        </div>
                    </div>
                    <div class="row__items col-lg-3 col-md-4 col-sm-6">
                        <a href="#"><img src="/front/images/img/img_index/Trending-now6.webp" alt=""></a>
                        <div class="row__items-info">
                            <a href="#">GRAND HOTEL</a>
                            <p class="price">FROM $200</p>
                            <p>MADRID, SPAIN</p>
                        </div>
                    </div>
                    <div class="row__items col-lg-3 col-md-4 col-sm-6">
                        <a href="#"><img src="/front/images/img/img_index/Trending-now7.webp" alt=""></a>
                        <div class="row__items-info">
                            <a href="#">GRAND HOTEL</a>
                            <p class="price">FROM $200</p>
                            <p>MADRID, SPAIN</p>
                        </div>
                    </div>
                    <div class="row__items col-lg-3 col-md-4 col-sm-6">
                        <a href="#"><img src="/front/images/img/img_index/Trending-now8.webp" alt=""></a>
                        <div class="row__items-info">
                            <a href="#">GRAND HOTEL</a>
                            <p class="price">FROM $200</p>
                            <p>MADRID, SPAIN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<x-footer/>
