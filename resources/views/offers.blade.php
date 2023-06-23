<x-header/>
<head>
<link rel="stylesheet" href="/front/css/offers.css">
</head>

    <div class="container-fluid home">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-background">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-title">
                    <h1>OUR OFFERS</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="form-div">
            <!-- <div class="upper_form">
                <button><i class="fa-solid fa-hotel"></i> HOTELS</button>
                <button><i class="fa-solid fa-car"></i> CAR RENTAL</button>
                <button><i class="fa-solid fa-plane-departure"></i> FLIGHTS</button>
                <button><i class="fa-solid fa-umbrella-beach"></i> TRIPS</button>
                <button><i class="fa-solid fa-ship"></i> SHIPS</button>
                <button><i class="fa-solid fa-person-swimming"></i> ACTIVITIES</button>
            </div> -->
            <form class="destination-form" method="POST" action="/offers_search">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="top-form">
                    <div class="destination-box1">
                        <label for="destination">DESTINATION</label><br>
                        <input type="text" name="keyword_submit">
                    </div>
                    <div class="destination-box2">
                        <label for="checkin">CHECK IN</label><br>
                        <input type="date" name="date_checkin">
                    </div>
                    <div class="destination-box3">
                        <label for="checkout">CHECK OUT</label><br>
                        <input type="date" name="date_checkout">
                    </div>
                    <!-- <div class="destination-box4">
                        <label for="adultNumber">ADULT</label><br>
                        <select name="adult" id="adults1">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                        </select>
                    </div>
                    <div class="destination-box5">
                        <label for="childrenNumber">CHILDREN</label><br>
                        <select name="adult" id="children1">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                        </select>
                    </div> -->
                </div>
                <div class="destination-box6">
                    <input type="submit" value="SEARCH . . .">
                </div>
            </form>
        </div>
    </div>

    <div class="best-offers">
        <!-- <div class="wrap-btn">
            <div class="btn-group mb-6">
                <button type="button" class="btn btn-danger dropdown-toggle mr-2 style-btn"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Giá
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Tất cả</a></li>
                    <li><a class="dropdown-item" href="#">Từ thấp đến cao</a></li>
                    <li><a class="dropdown-item" href="#">Từ cao đến thấp</a></li>
                </ul>
                <button type="button" class="btn btn-danger dropdown-toggle mr-2 style-btn"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Địa điểm
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Mặc định</a></li>
                    <li><a class="dropdown-item" href="#">Bảng chữ cái</a></li>
                </ul>
            </div>
        </div> -->
        <div class="offers-grid">
            @foreach ($tours as $tour)
                <div class="grid1 all-grid">
                    <div class="box1">
                        <img src="/front/images/tour_images/{{ $tour->image }}" alt="phuquoc">
                        <div class="offer-title">
                            {{ $tour->destination }}
                        </div>
                    </div>
                    <div class="box2">
                        <div class="offers_price">{{ number_format($tour->price) }} VNĐ<span>10 days</span></div>
                        <div class="star">
                            <i class="fa fa-star star1"></i>
                            <i class="fa fa-star star2"></i>
                            <i class="fa fa-star star3"></i>
                            <i class="fa fa-star star4"></i>
                            <i class="fa fa-star star5"></i>
                        </div>
                        <div class="point-div">
                            <div class="review-point">
                                <div class="text">
                                    <p><span>Rất tốt</span><br>100 đánh giá</p>
                                </div>
                                <div>
                                    <h1>9.5</h1>
                                </div>
                            </div>
                        </div>
                        <div class="offer-desciption">
                            <p>{{ $tour->description }} </p>
                        </div>

                        <div class="icon">
                            <i class="fa-solid fa-3x fa-signs-post"></i>
                            <i class="fa-regular fa-3x fa-compass"></i>
                            <i class="fa-solid fa-3x fa-bicycle"></i>
                            <i class="fa-solid fa-3x fa-sailboat"></i>
                        </div>
                        <div class="read-more"><button id="btnBook" class="book-now">ĐẶT NGAY ...</button></div>

                        <div class="bookingForm">
                            <div class="overlay"></div>
                            <form id="bookingForm" name="bookingForm"
                                action="{{ route('BookingForm.store', ['id' => $tour->id]) }}" method="POST">
                                @csrf
                                <h1>THÔNG TIN LIÊN HỆ</h1>
                                <div class="bookTourInfo">
                                    <img src="{{ asset('front/images/tour_images') }}/{{ $tour->image }}"
                                        alt="">

                                    <div class="bookTourInfo_Customor">
                                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                        <label for="bookTourInfo_Customor_name">Họ và tên</label> <br>
                                        <input type="text" name="bookTourInfo_Customor_name"
                                            id="bookTourInfo_Customor_name" required> <br>
                                        <label for="bookTourInfo_Customor_phoneNumber">Số điện thoại</label> <br>
                                        <input type="tel" name="bookTourInfo_Customor_phoneNumber"
                                            id="bookTourInfo_Customor_phoneNumber" required> <br>
                                        <label for="bookTourInfo_Customor_email">Email</label> <br>
                                        <input type="email" name="bookTourInfo_Customor_email"
                                            id="bookTourInfo_Customor_email" required> <br>
                                        <label for="bookTourInfo_Customor_department_place">Địa Điểm Khởi Hành</label>
                                        <br>
                                        <input type="text" name="bookTourInfo_Customor_department_place"
                                            id="bookTourInfo_Customor_department_place" required> <br>
                                    </div>
                                    <div class="bookTourInfo_detail">
                                        <p id="bookTourInfo_detail_code">Mã tour: {{ $tour->id }}</p>
                                        {{-- <p id="bookTourInfo_detail_departure">Nơi xuất phát: Lấy từ Database</p> --}}
                                        <p id="bookTourInfo_detail_destination">Điểm đến: {{ $tour->destination }}</p>
                                        <p id="bookTourInfo_detail_Dateofdepartment">Ngày xuất phát:
                                            {{ $tour->start_date }}</p>
                                        <p id="bookTourInfo_detail_ArrivalDate">Ngày đến: {{ $tour->back_date }}</p>
                                        <p id="bookTourInfo_detail_price">Giá: {{ number_format($tour->price) }} VNĐ
                                        </p>
                                    </div>
                                </div>
                                <input type="submit" name="btn_bookTour" id="submit_exitOverlay" value="Gửi thông tin">
                                {{-- <button type="submit" name="btn_bookTour" id="submit_exitOverlay">Gửi thông
                                    tin</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }} <br>
                    <span>Chúng tôi sẽ liên hệ để xác nhận thông tin của bạn trong vòng <strong>24 giờ</strong>,
                        chân thành cảm ơn bạn đã sử dụng dịch vụ của chúng tôi</span>
                </div>
                <script>
                    setTimeout(() => {
                        document.querySelector('.alert').classList.add('display_none')
                    }, 8000);
                </script>
            @endif
        </div>
    </div>
    <script>
        let overlay = document.querySelectorAll('.overlay');
        let btn = document.querySelectorAll('#btnBook');

        let BookingForm = document.querySelectorAll('.bookingForm');



        for (let i = 0; i < btn.length; i++) {
            overlay[i].onclick = function() {
                BookingForm[i].style.display = 'none';
            }
        }

        for (let i = 0; i < btn.length; i++) {
            btn[i].onclick = function() {
                BookingForm[i].style.display = 'block';
            }
        }
    </script>
    <x-footer/>