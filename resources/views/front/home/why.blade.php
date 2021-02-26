<!-- section 3 - why-us -->
@if ($whyUs)
    <section class="why-us">
        <div class="container">
            <div class="why-us__wrapper">

                @if(count($whyUs->availableLanguage) > 0)
                    <div class="why-us__wrapper-left">
                        <h2 class="why-us__wrapper-left--title">{!! $whyUs->availableLanguage[0]->description !!}</h2>
                        <p class="why-us__wrapper-left--p">
                            {!! $whyUs->availableLanguage[0]->content !!}
                        </p>

                        <div class="why-us__wrapper-left--body">
                            <div class="ul">
                                <p>
                                    <span class="flex-center">
                                        <img src="/front_assets/img/icons/svg-check.svg" alt="">
                                    </span>
                                    {{strip_tags($whyUs->availableLanguage[0]->content_2)}}
                                </p>
                                <p>
                                    <span class="flex-center">
                                        <img src="/front_assets/img/icons/svg-check.svg" alt="">
                                    </span>
                                    {{strip_tags($whyUs->availableLanguage[0]->content_3)}}
                                </p>
                                <p>
                                    <span class="flex-center">
                                        <img src="/front_assets/img/icons/svg-check.svg" alt="">
                                    </span>
                                    {{strip_tags($whyUs->availableLanguage[0]->content_4)}}
                                </p>
                            </div>
                            <div class="award">
                                <div class="award__top">
                                    <span class="flex-center">
                                        <img src="/front_assets/img/icons/svg-award.svg" alt="">
                                    </span>
                                    <h2>{{__('front.12+')}}</h2>
                                </div>
                                <p>{{__('front.year_experience')}}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if(count($whyUs->files) > 0)
                    <div class="why-us__wrapper-gallery">

                        @foreach($whyUs->files as $key => $item)
                            @if($key>2)
                                @break
                            @endif
                            <span>
                                <img class="img-cover"
                                     src="{{asset('../storage/page/'.$item->fileable_id.'/'.$item->name)}}" alt="">
                            </span>
                        @endforeach
                    </div>

                @endif

                <div class="why-us__wrapper-decoration">
                    <img src="/front_assets/img/why-us-decor.png" alt="">
                </div>
            </div>
        </div>
    </section>
@endif