var i = 0;
var currentSlider = 1;
var timeOut;
var interval;

$(function() {
    startSlide();
    i++;
    //$(".newsSlide.n1").addClass("selected");
});

function startSlide() {
    clearInterval(interval);
    interval = setInterval(function() {
        nextSlider();
    }, 5000);
}

function nextSlider() {
    currentSlider++;
    if(currentSlider <= i) {
        switchToOtherSlide(currentSlider);
    } else {
        currentSlider = 1;
        switchToOtherSlide(1);
    }
}

function switchToOtherSlide(current) {
    clearTimeout(timeOut);
    currentSlider = current;
    current = current;
    timeOut = setTimeout(function() {
        $("#newsSlides .newsSlide").stop(true, true).fadeOut(100);
        $("#newsSlides .newsSlide:nth-child("+currentSlider+")").stop(true, true).fadeIn(1000).css('display','block');    
    }, 250);
}