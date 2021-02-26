<!-- section 1 - hero --->
<section class="hero">
    <div class="container">
        <div class="hero__left">
            <div class="hero__left-logo">
                <img src="/front_assets/img/logo-hero.svg" alt="">
            </div>
            <div class="hero__left-bubles">
                <span class="b-1"><img src="/front_assets/img/buble-sm.svg" alt=""></span>
                <span class="b-2"><img src="/front_assets/img/buble-big.svg" alt=""></span>
                <span class="b-3"><img src="/front_assets/img/buble-empty.svg" alt=""></span>

                <span class="b-4"><img src="/front_assets/img/buble-empty.svg" alt=""></span>
                <span class="b-5"><img src="/front_assets/img/buble-big.svg" alt=""></span>
                <span class="b-6"><img src="/front_assets/img/buble-sm.svg" alt=""></span>
                <span class="b-7"><img src="/front_assets/img/buble-big.svg" alt=""></span>
                <div class="bubl"></div>
            </div>
        </div>

        <div class="hero__right">
            <div class="hero__right-content">
                <div class="hero__right-text">
                    @if(count($page->availableLanguage) > 0)

                        <h2 class="title">{!!$page->availableLanguage[0]->title !!}</h2>
                        <h2 class="brand-name">{!!$page->availableLanguage[0]->description !!}</h2>
                    @endif


                </div>

                <img src="/front_assets/img/icons/site-logo.svg" alt="">
            </div>
        </div>
    </div>
</section>