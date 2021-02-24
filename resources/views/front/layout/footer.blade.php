<!-- footer-->
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">

            <div class="b-col">
                <h2 class="footer__title">@lang('front.our_services')</h2>

                <div class="footer__services">
                    <p>
                        <img src="/front_assets/img/icons/check-dark.svg" alt="">
                        დასუფთავება
                    </p>
                    <p>
                        <img src="/front_assets/img/icons/check-dark.svg" alt="">
                        <span> სერვისის დასახელება</span>
                    </p>
                    <p>
                        <img src="/front_assets/img/icons/check-dark.svg" alt="">
                        სერვისის დასახელება
                    </p>
                    <p>
                        <img src="/front_assets/img/icons/check-dark.svg" alt="">
                        სერვისის დასახელება
                    </p>
                    <p>
                        <img src="/front_assets/img/icons/check-dark.svg" alt="">
                        სერვისის დასახელება 5
                    </p>
                    <p>
                        <img src="/front_assets/img/icons/check-dark.svg" alt="">
                        სერვისის დასახელება
                    </p>
                </div>
            </div>

            <div class="b-col">
                <h2 class="footer__title">@lang('front.links')</h2>

                <ul class="footer__nav">
                    <a href="{{route('homePage',app()->getLocale())}}">@lang('front.home')</a>
                    <a href="{{route('servicePage',app()->getLocale())}}">@lang('front.services')</a>
                    <a href="{{route('aboutPage',app()->getLocale())}}">@lang('front.about_us')</a>
                    <a href="{{route('contactPage',app()->getLocale())}}">@lang('front.contact')</a>
                </ul>
            </div>
            <div class="b-col">
                <h2 class="footer__title">@lang('front.contact')</h2>

                <div class="footer__info">
                    <div class="col">
                        <p>
                            <img src="/front_assets/img/icons/svg-pin.svg" alt="">
                            {{$address}}
                        </p>
                        <a href="">
                            <img src="/front_assets/img/icons/svg-pin.svg" alt="">
                            რუკაზე ნახვა
                        </a>
                    </div>
                    <div class="col">
                        <p>
                            <img src="/front_assets/img/icons/svg-phone.svg" alt="">
                          {{$phone}}
                        </p>
                        <p>
                            <img src="/front_assets/img/icons/svg-mail.svg" alt="">
                          {{$contact_email}}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
</footer>
