@extends('front.layout.base')

@section('body')
    <body class="{{Request::route()->getName() === 'homePage' ? 'home' : ''}}">
    @include('front.layout.header')
    @yield('content')
    @include('front.layout.footer')

    <!-- BEGIN: JS Assets-->
    <!-- third-p js-->
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <!--slick js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <!-- regular js-->
    <script src="/front_assets/script/general.js"></script>

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
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution="setup_tool"
         page_id="772438736276304"
         theme_color="#ffc300"
         logged_in_greeting="სალამი! მადლობა, რომ დაინტერესდით ჩვენი კომპანიით. რით შეგვიძლია დაგეხმაროთ?"
         logged_out_greeting="სალამი! მადლობა, რომ დაინტერესდით ჩვენი კომპანიით. რით შეგვიძლია დაგეხმაროთ?">
    </div>

    </body>
@endsection