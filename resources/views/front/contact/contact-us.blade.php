@extends('front.layout.main')
@section('content')
 <main>
        <!-- section 1 - main -->
        <section class="contact-us">
            <div class="container">

                <div class="contact-us__left">
                    <h2 class="big-title-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.5" height="12" viewBox="0 0 11.975 11.437">
                            <path id="Icon_feather-star" data-name="Icon feather-star" d="M8.488,3l1.7,3.435,3.792.554L11.231,9.662l.648,3.775L8.488,11.654,5.1,13.437l.648-3.775L3,6.989l3.792-.554Z" transform="translate(-2.5 -2.5)" fill="none" stroke="#384145" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </svg>
                     @lang('front.contact')
                    </h2>

                    <p class="contact-us__left-p">
                        ლორემ იპსუმ გამკეთებელს მტრები მუდმივ ბეღელში მიკეთია დავჩუმებულვარ გამოლაპარაკება შემოაპარაბდა გადმოიცქირებიან ვერცხლეულობაც.
                    </p>

                    <div class="contact-us__left-infos">
                        <div class="info-box">
                            <span class="flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.832" height="11.065" viewBox="0 0 13.832 11.065">
                                    <path id="Icon_material-email" data-name="Icon material-email" d="M15.448,6H4.383A1.381,1.381,0,0,0,3.007,7.383L3,15.682a1.387,1.387,0,0,0,1.383,1.383H15.448a1.387,1.387,0,0,0,1.383-1.383v-8.3A1.387,1.387,0,0,0,15.448,6Zm0,2.766L9.916,12.224,4.383,8.766V7.383l5.533,3.458,5.533-3.458Z" transform="translate(-3 -6)"/>
                                  </svg>
                            </span>
                            <p>cleanlab@gmail.com</p>
                        </div>

                        <div class="info-box">
                            <span class="flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.618" height="13.618" viewBox="0 0 13.618 13.618">
                                    <path id="Icon_awesome-phone-alt" data-name="Icon awesome-phone-alt" d="M13.229,9.623,10.251,8.347a.638.638,0,0,0-.745.184L8.187,10.142A9.859,9.859,0,0,1,3.474,5.429L5.086,4.11a.637.637,0,0,0,.184-.745L3.992.386a.643.643,0,0,0-.731-.37L.495.655A.638.638,0,0,0,0,1.277,12.34,12.34,0,0,0,12.341,13.618a.638.638,0,0,0,.622-.495l.638-2.766a.646.646,0,0,0-.373-.734Z" transform="translate(0 0)" />
                                  </svg>
                            </span>
                            <p>+995 555 555 555</p>
                        </div>

                        <div class="info-box">
                            <span class="flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.337" height="14.93" viewBox="0 0 10.337 14.93">
                                    <path id="Icon_ionic-ios-pin" data-name="Icon ionic-ios-pin" d="M13.043,3.375a5,5,0,0,0-5.168,4.8c0,3.733,5.168,10.132,5.168,10.132s5.168-6.4,5.168-10.132A5,5,0,0,0,13.043,3.375Zm0,6.852a1.683,1.683,0,1,1,1.683-1.683A1.683,1.683,0,0,1,13.043,10.227Z" transform="translate(-7.875 -3.375)" />
                                  </svg>
                            </span>
                            <p>თბილისი, ლორემ ქუჩა N4</p>
                        </div>
                    </div>


                </div>

                <form action="" class="contact-us__form">

                    <div class="inputs-flex">
                        <input class="form-field" type="text" placeholder="სახელი" >

                        <input class="form-field" type="text" placeholder="გვარი" >
                    </div>

                    <div class="inputs-flex">
                        <input class="form-field-email" type="email" placeholder="ელ-ფოსტა" >

                        <input class="form-field" type="number" placeholder="მობილურის ნომერი" >
                    </div>

                    <textarea class="form-field" placeholder="დაწერეთ შეტყობინება..."  name="" id="" cols="30" rows="10"></textarea>

                    <button class="contact-us__form-submit" type="button">
                        გაგზავნა
                    </button>
                </form>

            </div>
        </section>

@endsection
    </main>

</html>
