<x-header/>
<head>
    <link rel="stylesheet" href="/front/css/vendor/bootstrap.css">
    <link rel="stylesheet" href="/front/css/contact.css">
</head>
    <div class="container-fluid home">
        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-background">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-title">
                <h1>CONTACT</h1>
            </div>
            </div>
        </div>
    </div>
    <div class="container container-form">
        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form">
                <div class="form-title">
                    <h2>GET IN TOUCH</h2>
                </div>
                @if(Session::has('thanhcong'))
                <script>alert("Gửi message thành công!")</script>
                @endif
                <form class="contact-form" method="POST" action="/contact" row>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" placeholder="Name" class="contact_form_name" name="sender_name">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" placeholder="E-mail" class="contact_form_email" name="email">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="text" placeholder="Subject" class="contact_form_subject" name="title">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <textarea id="" cols="30" rows="10" placeholder="Message" name="content"></textarea>
                    </div>
                    <div class="l-12 m-12 c-12 text-center"><button type="submit" class="form_submit_button">SEND MESSAGE<span></span><span></span><span></span></button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="container contact-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 img">
                    <img src="/front/images/img/image_contact/xman.png.pagespeed.ic.EFVcLSPoud.png" alt="">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="contact__about--logo">
                        <a href="# ">
                            <img src="/front/images/img/image_contact/logo.webp"> Travelong
                        </a>
                    </div>
                    <p class="contact__about-text">Happiness is not a destination, but a journey we are on. And to prolong happiness, we need a companion. 
                        Travelong is pleased to be your travel companion</p>
                    <ul class="contact__about--social">
                        <li><a href="# "><ion-icon name="logo-pinterest"></ion-icon></a></li>
                        <li><a href="# "><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="# "><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="# "><ion-icon name="logo-dribbble"></ion-icon></a></li>
                        <li><a href="# "><ion-icon name="logo-behance"></ion-icon></a></li>
                    </ul>
                </div>  
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="contact__container info">
                        <div class="contact__container__content ">
                            <div class="contact__container__info ">
                                <div class="contact__container__info--img ">
                                    <img src="/front/images/img/image_contact/placeholder.svg" alt=" ">
                                </div>
                                <span>Khu phố 6, P.Linh Trung, Tp.Thủ Đức, Tp.Hồ Chí Minh.</span>
                            </div>
                            <div class="contact__container__info ">
                                <div class="contact__container__info--img ">
                                    <img src="/front/images/img/image_contact/message.svg" alt=" ">
                                </div>
                                <span>(028) 372 52002</span>
                            </div>
                            <div class="contact__container__info ">
                                <div class="contact__container__info--img ">
                                    <img src="/front/images/img/image_contact/phone-call.svg" alt=" ">
                                </div>
                                <span>info@uit.edu.vn</span>
                            </div>
                            <div class="contact__container__info ">
                                <div class="contact__container__info--img ">
                                    <img src="/front/images/img/image_contact/planet-earth.svg" alt=" ">
                                </div>
                                <span>www.longkhanhankhindaidatvy.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<x-footer/>