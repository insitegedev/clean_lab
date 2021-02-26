@extends('front.layout.main')
@section('sub-head')
    <title>{{(count($page->availableLanguage) > 0) ? $page->availableLanguage[0]->meta_title : ''}}</title>
@endsection
@section('content')
    <main>

        @include('front.home.hero')

        @include('front.home.service')

        @include('front.home.why')

        @include('front.home.working')

        @include('front.home.banner')

    </main>
@endsection
