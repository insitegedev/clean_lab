@extends('front.layout.main')
@section('sub-head')
    <title>{{(count($page->availableLanguage) > 0) ? $page->availableLanguage[0]->meta_title : ''}}</title>
@endsection
@section('content')
    <main>
        <!-- section 1 - main -->
        <section class="about-us">
            <div class="container">
                <h2 class="big-title-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12.5" height="12" viewBox="0 0 11.975 11.437">
                        <path id="Icon_feather-star" data-name="Icon feather-star"
                              d="M8.488,3l1.7,3.435,3.792.554L11.231,9.662l.648,3.775L8.488,11.654,5.1,13.437l.648-3.775L3,6.989l3.792-.554Z"
                              transform="translate(-2.5 -2.5)" fill="none" stroke="#384145" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="1"/>
                    </svg>
                    {!! (count($page->availableLanguage) > 0 ? $page->availableLanguage[0]->description : '') !!}
                </h2>

                <div class="about-us__wrapper">
                    <div class="about-us__wrapper-pictures">
                        <div class="about-us__wrapper-pictures--box one">
                            @if (count($page->files)>0)
                                <img class="img-cover"
                                     src="{{asset('../storage/page/'.$page->files[0]->fileable_id.'/'.$page->files[0]->name)}}"
                                     alt="">
                            @else
                                <img class="img-cover" src="/front_assets/img/about-1.png" alt="">
                            @endif
                        </div>

                        <div class="about-us__wrapper-pictures--box two">
                            @if (count($page->files)>1)
                                <img class="img-cover"
                                     src="{{asset('../storage/page/'.$page->files[1]->fileable_id.'/'.$page->files[1]->name)}}"
                                     alt="">
                            @else
                                <img class="img-cover" src="/front_assets/img/about-2.png" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="about-us__wrapper-texts">
                        {!! (count($page->availableLanguage) > 0 ? $page->availableLanguage[0]->content : '') !!}
                    </div>
                </div>
            </div>
        </section>

        @endsection
    </main>

    </html>
