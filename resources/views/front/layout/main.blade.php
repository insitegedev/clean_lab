@extends('front.layout.base')

    <body>
    @section('body')
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
    <!-- END: JS Assets-->
    </body>
@endsection
