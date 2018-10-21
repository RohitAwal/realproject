var slideIndex, timeoutId;

function currentSlide(index) {
    clearTimeout(timeoutId);
    slideIndex = index-1;
    showSlides();
}

slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = $(".right-text");
    var dots = $(".slider-indicator");
    for (i = 0; i < slides.length; i++) {
        slides.eq(i).addClass("hide"); 
    }
    for (i = 0; i < dots.length; i++) {
      dots.eq(i).removeClass("active-indicator");
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    } 
    dots.eq(slideIndex-1).addClass("active-indicator");
    slides.eq(slideIndex-1).removeClass("hide");
    timeoutId = setTimeout(showSlides, 6000);
}


var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var date1 = new Date();
var date2 = new Date("2018-09-01T09:30:51");
var timeDiff = Math.abs(date2.getTime() - date1.getTime());
var deadline = new Date(Date.parse(new Date()) + timeDiff);
if ($("#clockdiv").length){
  initializeClock('clockdiv', deadline);
}
initializeClock('clockdiv-footer', deadline);


$(".navbar-toggler").click(function(){
  $(".navbar-collapse").is( ":visible" ) ?  $(".navbar").removeClass("bg-dark") : $(".navbar").addClass("bg-dark");
})

$(".right-button").click(function(){
  window.location = "sup-register.php";
})

$(".enroll-button").click(function(){
  window.location = "sup-register.php";
})