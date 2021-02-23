@extends('front.layout.main')
@section('content')
    <main>
        <!-- section 1 - main -->
        <section class="vacancy">
           <div class="container">
               <div class="vacancy__hero">
                    <img class="img-cover" src="/front_assets/img/service-img-4.png" alt="">
               </div>

               <h2 class="vacancy__title">
                    ვაკანსიის სახელი
               </h2>

               <div class="vacancy__texts">
                   <p>
                    ლორემ იპსუმ გამკეთებელს მტრები მუდმივ ბეღელში მიკეთია დავჩუმებულვარ გამოლაპარაკება შემოაპარაბდა გადმოიცქირებიან ვერცხლეულობაც, უჭირს შევქმნათ. შეშინებულებმა ყოფნისა წუხილისა, საქნელია გერმანისტები, მესვეურებს არაჟანი.
                    </p>

                   <p>
                    გადმოიცქირებიან ვერცხლეულობაც, უჭირს შევქმნათ. შეშინებულებმა ყოფნისა წუხილისა, საქნელია გერმანისტები, მესვეურებს არაჟანი.
                   </p>
               </div>


           </div>
        </section>


        <!-- video modal -->
        <div class="video-modal flex-center">

            <div class="video-modal__content">
                <button class="video-modal-close">
                    <span>&times;</span>
                </button>

                <iframe id="video1" width="100%" height="100%" src="https://www.youtube.com/embed/yAoLSRbwxL8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
            </div>
        </div>
        @endsection
    </main>


</html>
