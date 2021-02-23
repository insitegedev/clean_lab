@extends('front.layout.main')
@section('content')
    <main>
        <!-- section 1 - main -->
        <section class="services-page">
            <div class="container">
                <!-- services section-->
                <div class="services">

                    <h2 class="services__title big">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.5" height="12" viewBox="0 0 11.975 11.437">
                            <path id="Icon_feather-star" data-name="Icon feather-star" d="M8.488,3l1.7,3.435,3.792.554L11.231,9.662l.648,3.775L8.488,11.654,5.1,13.437l.648-3.775L3,6.989l3.792-.554Z" transform="translate(-2.5 -2.5)" fill="none" stroke="#384145" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </svg>

                        @lang('front.our_services')
                    </h2>

                    <div class="services__grid">

                        <a href="#" class="services__card">
                            <div class="services__card-hero">
                                <img class="img-cover" src="/front_assets/img/service-img-1.png" alt="">
                            </div>

                            <div class="services__card-body">
                                <span class="flex-center icon">
                                    <img src="/front_assets/img/icons/service-1.svg" alt="">
                                </span>
                                <div class="services__card-body--texts">
                                    <h2>რბილი ავეჯის წმენდა</h2>
                                    <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
                                </div>
                            </div>
                        </a>

                        <a href="#"class="services__card">
                            <div class="services__card-hero">
                                <img class="img-cover" src="/front_assets/img/service-img-2.png" alt="">
                            </div>

                            <div class="services__card-body">
                                <span class="flex-center icon">
                                    <img src="/front_assets/img/icons/service-2.svg" alt="">
                                </span>
                                <div class="services__card-body--texts">
                                    <h2>მინა-ვიტრაჟის წმენდა</h2>
                                    <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
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
                                    <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
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
                                    <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
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
                                    <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
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
                                    <p>ლორემ იპსუმ რიგზედ მოიქცია ცირკთანაც დაიკარგა რუმინული ზევითაც ერნსტ გაკმინდეს იდგამს მოფიქრებულ ძნელდებოდა</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

@endsection
    </main>


</html>
