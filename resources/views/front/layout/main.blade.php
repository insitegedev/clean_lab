@extends('front.layout.base')

@section('body')
    <body class="{{Request::route()->getName() === 'homePage' ? 'home' : ''}}">
    @include('front.layout.header')
    @yield('content')
    @include('front.layout.footer')
    <!-- form modal-->
    <div class="form-modal flex-center">
        <form class="form-modal__form" id="contact-form">
            <button type="button" class="form-modal__form-close">
                <span>×</span>
            </button>

            <h2>{{__('front.contact')}}</h2>
            <div class="notification-container" style="padding: 10px 0px">
                <div class="notification-warning" hidden style="color: red">
                    <li><span>{{__('front.message_not_sent')}}</span></li>
                </div>
                <div class="notification-success" hidden style="color: green">
                    <li><span>{{__('front.message_send')}}</span></li>
                </div>
            </div>
            <input class="form-field" type="text" name="modal_first_name" required placeholder="{{__('front.first_name')}}">
            <input class="form-field" type="text" name="modal_last_name" required placeholder="{{__('front.last_name')}}">

            <input class="form-field-email" type="email" name="modal_email" required placeholder="{{__('front.email')}}">
            <input class="form-field" type="number" required name="modal_phone" placeholder="{{__('front.mobile')}}">

            <textarea class="form-field" placeholder="{{__('front.message')}}..." name="modal_message" required id="" cols="30" rows="10"></textarea>

            <button class="contact-us__form-submit " type="button">
                {{__('front.send')}}
            </button>
        </form>
    </div>
    <a class="fixedButton" href="tel:{{$phone}}">
        <div class="roundedFixedBtn">
            <img class="call-button" src="/front_assets/img/phone.jpg" alt="call">
        </div>
    </a>
    <!-- BEGIN: JS Assets-->
    <!-- third-p js-->
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <!--slick js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"
            integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA=="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <!-- regular js-->
    <script src="/front_assets/script/general.js?v=2"></script>
    <!-- END: JS Assets-->

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v10.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution="setup_tool"
         page_id="376359892852239"
         logged_in_greeting="სალამი! მადლობა, რომ დაინტერესდით ჩვენი კომპანიით. რით შეგვიძლია დაგეხმაროთ? :blush:"
         logged_out_greeting="სალამი! მადლობა, რომ დაინტერესდით ჩვენი კომპანიით. რით შეგვიძლია დაგეხმაროთ? :blush:">
    </div>

    </body>
@endsection