const log = console.log; // test

// ______________ General  _______________________

// make header small on scroll
window.addEventListener('scroll',function() {
  if (window.pageYOffset > 80) {
    $('.nav ').addClass("shorter");
  } else {
    $('.nav ').removeClass("shorter");
  }
});

// menu on small screen
$('.menu-icon').on('click', () => {
  $('.navigation-sm').toggleClass('shown');
});


// close menu on sm on outside click
window.addEventListener('click', function(e){
  if ($(e.target).is($('.navigation-sm')) ){
      $('.navigation-sm').removeClass('shown')
  } 
})

// _________________    index page   __________________________

// --  header  on scroll  

if($('body.home').length > 0) {
  window.addEventListener('scroll', function() {

    if (window.pageYOffset > 80) {
      $('.header').removeClass("transparent");
    } else {
      $('.header').addClass("transparent");
    }
  }) 
};

// -- services slider -- section 2
if($('.services__wrapper').length > 0) {

  $(".services__wrapper").slick({
      prevArrow: `<button class="s-btn btn-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="18.634" height="30.704" viewBox="0 0 18.634 30.704">
        <path id="Icon_awesome-chevron-left" data-name="Icon awesome-chevron-left" d="M2.427,16.807,16.092,3.142a1.688,1.688,0,0,1,2.386,0l1.594,1.594a1.688,1.688,0,0,1,0,2.384L9.245,18l10.83,10.881a1.687,1.687,0,0,1,0,2.384l-1.594,1.594a1.688,1.688,0,0,1-2.386,0L2.427,19.193A1.688,1.688,0,0,1,2.427,16.807Z" transform="translate(-2 -2.648)" />
        </svg>
    </button>`,
      nextArrow: `<button class="s-btn btn-right">
          <svg xmlns="http://www.w3.org/2000/svg" width="18.634" height="30.705" viewBox="0 0 18.634 30.705">
          <path id="Icon_awesome-chevron-left" data-name="Icon awesome-chevron-left" d="M20.073,16.807,6.408,3.142a1.688,1.688,0,0,0-2.386,0L2.427,4.736a1.688,1.688,0,0,0,0,2.384L13.255,18,2.425,28.881a1.687,1.687,0,0,0,0,2.384l1.594,1.594a1.688,1.688,0,0,0,2.386,0L20.073,19.193A1.688,1.688,0,0,0,20.073,16.807Z" transform="translate(-0.5 -2.648)" />
          </svg>
      </button>`,
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1800,
      speed: 1000,
      arrows: true,
      dots: false,
      rtl: false,
      responsive: [
        {
            breakpoint: 1450,
            settings: {
              slidesToShow: 4,
            }
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 540,
            settings: {
              slidesToShow: 1,
            }
          }
    ]
  })

};


// _________________   contact page   __________________________

// -- form validation
// email validation regedex
function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
};

$('.contact-us__form-submit').on('click', () => {
  let email = false;
  let otherInputs = false;

  // validate email
  let emailVal = $('.form-field-email').val(); 
  if(  validateEmail( emailVal) ) {
    email = true;
    $('.form-field-email').removeClass('error');
  }else {
    $('.form-field-email').addClass('error');
    email = false;
  }

  // validate other inputs (length > 2)
  $('.form-field').each( (i, el) => {
     if($(el).val().length > 1 ) {
      $(el).removeClass('error');
      otherInputs = true;
     }else {
      $(el).addClass('error');
      otherInputs = false;
     }
  });

  // check if email is ok && other inputs are filed too
  if (email && otherInputs) {
    log('submit')
    // submit if both true
    $('.contact-us__form').submit()
  }else {
    log('inputs error')
  }

});


// _________________   service-details page   __________________________

// open video modal
$('.video-modal-btn').on('click', ()=> {
  $('.video-modal').addClass('shown');
});

// close by btn
$('.video-modal-close').on('click', ()=> {
  $('.video-modal').removeClass('shown');
});
// close modal  outside click
window.addEventListener('click', function(e){
  if ($(e.target).is($('.video-modal')) ){
      $('.video-modal').removeClass('shown')
  } 
})

// play video


