@extends('front.layout.main')
@section('sub-head')
    <title> CleanLab - @lang('client.home_meta_title')</title>
@endsection
@section('content')
    <main>

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
                            <h2 class="title">სისუფთავის ლაბორატორია</h2>
                            <h2 class="brand-name">Clean Lab</h2>

                        </div>

                        <img src="/front_assets/img/icons/site-logo.svg" alt="">
                    </div>
                </div>
            </div>
        </section>


        <!-- section 2 - services -->
        <section class="service-section">

            <div class="container">
                <div class="service-section__wrap">
                    <!-- services section-->
                    <div class="services">

                        <h2 class="services__title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12.5" height="12"
                                 viewBox="0 0 11.975 11.437">
                                <path id="Icon_feather-star" data-name="Icon feather-star"
                                      d="M8.488,3l1.7,3.435,3.792.554L11.231,9.662l.648,3.775L8.488,11.654,5.1,13.437l.648-3.775L3,6.989l3.792-.554Z"
                                      transform="translate(-2.5 -2.5)" fill="none" stroke="#384145"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </svg>

                            სერვისები
                        </h2>

                        <div class="services__wrapper">

                            <!-- Services detail redirect --> <a href="" class="services__card">
                                <div class="services__card-hero">
                                    <img class="img-cover" src="/front_assets/img/service-img-1.png" alt="">
                                </div>

                                <div class="services__card-body">
                                    <span class="flex-center icon">
                                        <img src="/front_assets/img/icons/service-1.svg" alt="">
                                    </span>
                                    <div class="services__card-body--texts">
                                        <h2>რბილი ავეჯის წმენდა</h2>
                                        <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ
                                            გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="services__card">
                                <div class="services__card-hero">
                                    <img class="img-cover" src="/front_assets/img/service-img-2.png" alt="">
                                </div>

                                <div class="services__card-body">
                                    <span class="flex-center icon">
                                        <img src="/front_assets/img/icons/service-2.svg" alt="">
                                    </span>
                                    <div class="services__card-body--texts">
                                        <h2>მინა-ვიტრაჟის წმენდა</h2>
                                        <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ
                                            გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="services__card">
                                <div class="services__card-hero">
                                    <img class="img-cover" src="/front_assets/img/service-img-3.png" alt="">
                                </div>

                                <div class="services__card-body">
                                    <span class="flex-center icon">
                                        <img src="/front_assets/img/icons/service-3.svg" alt="">
                                    </span>
                                    <div class="services__card-body--texts">
                                        <h2>სანიტარული მომსახურება</h2>
                                        <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ
                                            გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="services__card">
                                <div class="services__card-hero">
                                    <img class="img-cover" src="/front_assets/img/service-img-4.png" alt="">
                                </div>

                                <div class="services__card-body">
                                    <span class="flex-center icon">
                                        <img src="/front_assets/img/icons/service-4.svg" alt="">
                                    </span>
                                    <div class="services__card-body--texts">
                                        <h2>გენერალური დასუფთავება</h2>
                                        <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ
                                            გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="services__card">
                                <div class="services__card-hero">
                                    <img class="img-cover" src="/front_assets/img/service-img-5.png" alt="">
                                </div>

                                <div class="services__card-body">
                                    <span class="flex-center icon">
                                        <img src="/front_assets/img/icons/service-5.svg" alt="">
                                    </span>
                                    <div class="services__card-body--texts">
                                        <h2>რემონტის შემდგომი
                                            დასუფთავება</h2>
                                        <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ
                                            გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="services__card">
                                <div class="services__card-hero">
                                    <img class="img-cover" src="/front_assets/img/service-img-5.png" alt="">
                                </div>

                                <div class="services__card-body">
                                    <span class="flex-center icon">
                                        <img src="/front_assets/img/icons/service-5.svg" alt="">
                                    </span>
                                    <div class="services__card-body--texts">
                                        <h2>6 სერვისი</h2>
                                        <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ
                                            გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- section 3 - why-us -->
        <section class="why-us">
            <div class="container">
                <div class="why-us__wrapper">

                    <div class="why-us__wrapper-left">
                        <h2 class="why-us__wrapper-left--title">რატომ ჩვენ?</h2>
                        <p class="why-us__wrapper-left--p">ლორემ იპსუმ შოუ უდაღავენ გიორგისთან აღმოსავლელი მცველს,
                            დავუტოვებდით ღარიბია სკოლებში მაჩვენეთ ამბობ კვნესასა გაძვირდა საოცარი თეთრდება. დაგვინთეს
                            არსებაა პროგრესს ეფექტსაც თვინიერ, განუზომელ ღვდლის ერთიმეორეზე</p>

                        <div class="why-us__wrapper-left--body">
                            <div class="ul">
                                <p>
                                    <span class="flex-center">
                                        <img src="/front_assets/img/icons/svg-check.svg" alt="">
                                    </span>
                                    სერვისის უპირატესობა აქ
                                </p>
                                <p>
                                    <span class="flex-center">
                                        <img src="/front_assets/img/icons/svg-check.svg" alt="">
                                    </span>
                                    სერვისის უპირატესობა აქ
                                </p>
                                <p>
                                    <span class="flex-center">
                                        <img src="/front_assets/img/icons/svg-check.svg" alt="">
                                    </span>
                                    სერვისის უპირატესობა აქ
                                </p>
                            </div>
                            <div class="award">
                                <div class="award__top">
                                    <span class="flex-center">
                                        <img src="/front_assets/img/icons/svg-award.svg" alt="">
                                    </span>
                                    <h2>12+</h2>
                                </div>
                                <p>წლიანი გამოცდილება</p>
                            </div>
                        </div>
                    </div>

                    <div class="why-us__wrapper-gallery">
                        <span>
                            <img class="img-cover" src="/front_assets/img/why-us-1.png" alt="">
                        </span>
                        <span>
                            <img class="img-cover" src="/front_assets/img/why-us-2.png" alt="">
                        </span>
                        <span>
                            <img class="img-cover" src="/front_assets/img/why-us-3.png" alt="">
                        </span>
                    </div>

                    <div class="why-us__wrapper-decoration">
                        <img src="/front_assets/img/why-us-decor.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- section 4 -  working-->
        <section class="working">
            <div class="container">
                <div class="working__cover">
                    <img class="img-cover" src="/front_assets/img/how-it-works.png" alt="">
                </div>

                <div class="working__main">
                    <h2 class="working__main-heading">
                       <span class="flex-center">
                           <img class="img-cover" src="/front_assets/img/svg-how-works.svg" alt="">
                       </span>
                        როგორ მუშაობს?
                    </h2>

                    <p class="working__main-p">
                        ლორემ იპსუმ შოუ უდაღავენ გიორგისთან აღმოსავლელი მცველს, დავუტოვებდით ღარიბია სკოლებში მაჩვენეთ
                        ამბობ კვნესასა გაძვირდა საოცარი თეთრდება. დაგვინთეს არსებაა პროგრესს ეფექტსაც თვინიერ, განუზომელ
                        ღვდლის ერთიმეორეზე
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
                                <h3>განაცხადის შევსება</h3>
                                <p>ლორემ იპსუმ ჩუსტიან ეთარგმნა კრინტსაც, გაუკვირდა კლეიმანმა
                                    მეთერთმეტე, დაიჭირებდეთ. ბაბუამისი </p>
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
                                <h3>აირჩიე კატეგორია</h3>
                                <p>ლორემ იპსუმ ჩუსტიან ეთარგმნა კრინტსაც, გაუკვირდა კლეიმანმა
                                    მეთერთმეტე, დაიჭირებდეთ. ბაბუამისი </p>
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
                                <h3>დროის შეთანხმება</h3>
                                <p>ლორემ იპსუმ ჩუსტიან ეთარგმნა კრინტსაც, გაუკვირდა კლეიმანმა
                                    მეთერთმეტე, დაიჭირებდეთ. ბაბუამისი </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section 5 -  -->
        <section class="banners">
            <div class="container">
                <div class="banners__wrapper">
                    <div class="banners__item sm">
                        <img src="/front_assets/img/banner-sm.png" alt="" class="img-cover">
                    </div>

                    <div class="banners__item big">
                        <img src="/front_assets/img/banner-big.png" alt="" class="img-cover">
                    </div>
                </div>
            </div>
        </section>


        <!-- section 6 -  -->


    </main>
@endsection