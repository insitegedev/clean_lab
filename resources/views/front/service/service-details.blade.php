@extends('front.layout.main')
    <title>Clean Lub{{(count($product->availableLanguage) > 0) ? ' - '.$product->availableLanguage[0]->title : ''}}</title>
@section('content')
    <main>
        <!-- section 1 - main -->
        <section class="details">
            <div class="container">
                @if(count($product->files) > 1)
                    <div class="details__hero">
                        <img class="img-cover"
                             src="{{asset('../storage/product/'.$product->id.'/'.$product->files[1]->name)}}" alt="">
                    </div>
                @endif


                <h2 class="details__title">
                    @if(count($product->files) > 0)
                        <span class="flex-center icon">
                        <img src="{{asset('../storage/product/'.$product->id.'/'.$product->files[0]->name)}}" alt="">
                    </span>
                    @endif
                    {{count($product->availableLanguage) > 0 ? $product->availableLanguage[0]->title : ''}}
                </h2>

                <div class="details__main">
                    {!! (count($product->availableLanguage) > 0 ? $product->availableLanguage[0]->content : '') !!}
                    @if($product->youtube_url)
                        <iframe width="420" height="345" src="https://www.youtube.com/embed/{{$product->youtube_url}}">
                        </iframe>
                    @endif

                </div>
            </div>
        </section>
    </main>

@endsection
