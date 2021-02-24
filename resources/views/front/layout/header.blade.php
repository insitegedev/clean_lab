<!-- header -->
<header class="header {{Request::route()->getName() === 'homePage' ? 'transparent' : ''}}">

    <nav class="nav">

        <div class="container">

            <a href="{{route('homePage',app()->getLocale())}}" class="brand-logo">
                <img class="brand-logo__main" src="/front_assets/img/icons/site-logo.svg" alt="">
                <div class="brand-logo__secondary">
                    <img src="/front_assets/img/icons/logo-text.svg" alt="">
                </div>
            </a>

            <button class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -53 384 384">
                    <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                    <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                    <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                </svg>

            </button>


            <div class="navigation-sm">
                <ul class="navigation">
                    <li class="navigation__item">
                        <a href="{{route('homePage',app()->getLocale())}}" class="navigation__link active">@lang('front.home')</a>
                    </li>

                    <li class="navigation__item">
                        <a href="{{route('servicePage',app()->getLocale())}}" class="navigation__link">@lang('front.services')</a>
                    </li>

                    <li class="navigation__item">
                        <a href="{{route('aboutPage',app()->getLocale())}}" class="navigation__link">@lang('front.about_us')</a>
                    </li>

                    <li class="navigation__item">
                        <a href="{{route('contactPage',app()->getLocale())}}" class="navigation__link">@lang('front.contact')</a>
                    </li>

                    <li class="navigation__item">
                        <a href="{{route('vacancyPage',app()->getLocale())}}" class="navigation__link highlighted">@lang('front.vacancies')</a>
                    </li>

                </ul>
            </div>

            <div class="nav__social">

                <a href="{{$facebook}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 31.5 31.5">
                        <path id="Icon_awesome-facebook-square" data-name="Icon awesome-facebook-square"
                              d="M28.125,2.25H3.375A3.375,3.375,0,0,0,0,5.625v24.75A3.375,3.375,0,0,0,3.375,33.75h9.65V23.041H8.6V18h4.43V14.158c0-4.37,2.6-6.784,6.586-6.784a26.836,26.836,0,0,1,3.9.34V12h-2.2a2.521,2.521,0,0,0-2.842,2.723V18h4.836l-.773,5.041H18.475V33.75h9.65A3.375,3.375,0,0,0,31.5,30.375V5.625A3.375,3.375,0,0,0,28.125,2.25Z"
                              transform="translate(0 -2.25)"/>
                    </svg>
                </a>
                <a href="{{$instagram}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 9.08 9.078">
                        <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram"
                              d="M4.536,4.449A2.327,2.327,0,1,0,6.863,6.777,2.324,2.324,0,0,0,4.536,4.449Zm0,3.841A1.513,1.513,0,1,1,6.049,6.777,1.516,1.516,0,0,1,4.536,8.29ZM7.5,4.354a.543.543,0,1,1-.543-.543A.542.542,0,0,1,7.5,4.354ZM9.043,4.9A2.687,2.687,0,0,0,8.31,3a2.7,2.7,0,0,0-1.9-.733c-.749-.043-3-.043-3.745,0A2.7,2.7,0,0,0,.76,3,2.7,2.7,0,0,0,.027,4.9c-.043.749-.043,3,0,3.745a2.687,2.687,0,0,0,.733,1.9,2.708,2.708,0,0,0,1.9.733c.749.043,3,.043,3.745,0a2.687,2.687,0,0,0,1.9-.733,2.7,2.7,0,0,0,.733-1.9c.043-.749.043-2.994,0-3.743ZM8.075,9.453a1.532,1.532,0,0,1-.863.863,10,10,0,0,1-2.676.182,10.083,10.083,0,0,1-2.676-.182A1.532,1.532,0,0,1,1,9.453,10,10,0,0,1,.815,6.777,10.083,10.083,0,0,1,1,4.1a1.532,1.532,0,0,1,.863-.863,10,10,0,0,1,2.676-.182,10.083,10.083,0,0,1,2.676.182,1.532,1.532,0,0,1,.863.863,10,10,0,0,1,.182,2.676A10,10,0,0,1,8.075,9.453Z"
                              transform="translate(0.005 -2.238)"/>
                    </svg>
                </a>
            </div>

            @if(isset($languages['current']))
            <div class="language-box">
                <div class="language-box__selected">
                    <img src="/adm/img/flags-icons/{{$languages['current']['img']}}" alt="">
                </div>
                @endif
                @if(count($languages['data']) > 0)

                <div class="language-box__menu">
                    @foreach($languages['data'] as $data)
                    <a href="{{$data['url']}}">
                        <img src="/adm/img/flags-icons/{{$data['img']}}" alt="">
                    </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </nav>

</header>
