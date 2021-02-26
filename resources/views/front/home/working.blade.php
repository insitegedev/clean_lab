<!-- section 4 -  working-->
@if($howWorks)
    <section class="working">
        <div class="container">
            <div class="working__cover">
                @if(count($howWorks->files) > 0)
                    <img class="img-cover" src="{{asset('../storage/page/'.$howWorks->id.'/'.$howWorks->files[0]->name)}}" alt="">
                @else
                    <img class="img-cover" src="/front_assets/img/how-it-works.png" alt="">
                @endif
            </div>

            <div class="working__main">
                <h2 class="working__main-heading">
                       <span class="flex-center">
                           <img class="img-cover" src="/front_assets/img/svg-how-works.svg" alt="">
                       </span>
                    {{(count($howWorks->availableLanguage) > 0) ? $howWorks->availableLanguage[0]->description : ''}}
                </h2>

                <p class="working__main-p">
                    {!! (count($howWorks->availableLanguage) > 0) ? $howWorks->availableLanguage[0]->content : '' !!}

                </p>

                <div class="working__main-steps">
                    <div class="step">
                        <div class="step__top">

                            <img class="logo" src="/front_assets/img/how-works-1.png" alt="">

                            <span class="flex-center">
                                    01
                                </span>
                        </div>

                        <div class="step__body">
                            {!! (count($howWorks->availableLanguage) > 0) ? $howWorks->availableLanguage[0]->content_2 : '' !!}

                        </div>

                    </div>

                    <div class="step">
                        <div class="step__top">

                            <img class="logo" src="/front_assets/img/how-works-2.png" alt="">

                            <span class="flex-center">
                                    02
                                </span>
                        </div>

                        <div class="step__body">
                            {!! (count($howWorks->availableLanguage) > 0) ? $howWorks->availableLanguage[0]->content_3 : '' !!}

                        </div>

                    </div>

                    <div class="step">
                        <div class="step__top">

                            <img class="logo" src="/front_assets/img/how-works-3.png" alt="">

                            <span class="flex-center">
                                    03
                                </span>
                        </div>

                        <div class="step__body">
                            {!! (count($howWorks->availableLanguage) > 0) ? $howWorks->availableLanguage[0]->content_4 : '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif