<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('logo.svg') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="author" content="insite.international">


@yield('sub-head')

<!-- BEGIN: CSS Assets-->
    <link rel="icon" type="image/png" href="/front_assets/img/icons/site-logo.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/front_assets/css/main.css?v=3">

    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
@yield('body')

</html>