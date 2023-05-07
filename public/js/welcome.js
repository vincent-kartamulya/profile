const { entries } = require("lodash");

var typed = new Typed(".auto-input",{
    strings: ["Vincent", "Student", "Human", "Sneakys"],
    typeSpeed: 100,
    backSpeed: 70,
    loop: true
})

VanillaTilt.init(document.querySelector(".card"), {
    max: 25,
    speed: 400,
    glare: true,
    "max-glare": 1,
})

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

$(document).ready(function() {
    // Smooth scrolling to anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
            window.history.pushState("", "", this.href);
        }
    });

    // Highlight active navbar link
    $(window).on('scroll', function() {
        var cur_pos = $(this).scrollTop();
        $('section').each(function() {
            var top = $(this).offset().top - 100,
                bottom = top + $(this).outerHeight();
            if (cur_pos >= top && cur_pos <= bottom) {
                $('nav li a').removeClass('active selected');
                $('nav li a[href="#'+$(this).attr('id')+'"]').addClass('active selected');
            }
        });
    });
});

$(document).ready(function() {
    $("#myCarousel").on("slide.bs.carousel", function(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 4;
      var totalItems = $(".carousel-item").length;

      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $(".carousel-item")
              .eq(i)
              .appendTo(".carousel-inner");
          } else {
            $(".carousel-item")
              .eq(0)
              .appendTo($(this).find(".carousel-inner"));
          }
        }
      }
    });
  });



