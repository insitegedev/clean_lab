<!-- section 5 -  -->
@if($cleanLub)
    @if (count($cleanLub->files)>0)
        <section class="banners">
            <div class="container">
                <div class="banners__wrapper">
                    @foreach($cleanLub->files as $key => $item)
                        @if($key > 1)
                            @break
                        @endif
                        <div class="banners__item {{$key === 0 ? 'sm' : 'big'}}">
                            <img src="{{asset('../storage/page/'.$cleanLub->id.'/'.$cleanLub->files[$key]->name)}}" alt="" class="img-cover">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endif
