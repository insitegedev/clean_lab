<!-- section 2 - services -->
@if(count($products) > 0)
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

                        @lang('front.services')
                    </h2>

                    <div class="services__wrapper">
                        @foreach($products as $product)
                            <a href="{{route('serviceDetailPage',[app()->getLocale(),$product->slug])}}"
                               class="services__card">
                                <div class="services__card-hero">
                                    @if(count($product->files) > 1)
                                        <img class="img-cover"
                                             src="{{asset('../storage/product/'.$product->id.'/'.$product->files[1]->name)}}"
                                             alt="">
                                    @else
                                        <img class="img-cover" src="noimage.png" alt="">
                                    @endif
                                </div>

                                <div class="services__card-body">
                                    @if(count($product->files) > 0)
                                        <span class="flex-center icon">
                                             <img src="{{asset('../storage/product/'.$product->id.'/'.$product->files[0]->name)}}"
                                                  alt="">
                                        </span>
                                    @else
                                        <span class="flex-center icon">
                                             <img src="/front_assets/img/icons/service-1.svg" alt="">
                                        </span>
                                    @endif

                                    <div class="services__card-body--texts">
                                        @if(count($product->availableLanguage)>0)
                                            <h2>{!! $product->availableLanguage[0]->title !!}</h2>
                                            <p>{!! $product->availableLanguage[0]->description !!}</p>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </section>
@endif