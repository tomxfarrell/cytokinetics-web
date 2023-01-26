
const slider = (function () {
  function heroSlider() {
    console.log('slider loaded');

    const heroSliderElement = document.querySelector('#hero-slider');
    const carousel = new bootstrap.Carousel(heroSliderElement, {
      interval: 5000,
      wrap: true
    })


  }

  function heroSliderHeight() {
    let heroImageHeight = document.querySelector(".hero-asset").clientHeight;
    let carouselItem = document.querySelector(".carousel-inner .active");

    carouselItem.setAttribute("style","height:" + heroImageHeight);
    console.log(heroImageHeight);
  }

  return {
    heroSlider: heroSlider,
    // heroSliderHeight: heroSliderHeight
  };
})();
slider.heroSlider(); 
// slider.heroSliderHeight();