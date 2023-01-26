const timeline = (function () {
  function timelineOverflow() {
  
    const timelinePrev = document.querySelector("#timeline-prev");
    const timelineNext = document.querySelector("#timeline-next");
    const timelineContainer = document.querySelector("#timeline-container");

    
    timelinePrev.addEventListener("click", function(e){
      timelineNext.classList.remove("active");
      
      this.classList.add("active");
      timelineContainer.classList.remove("active");
    });


    timelineNext.addEventListener("click", function(e){

      timelinePrev.classList.remove("active");
      
      this.classList.add("active");
      timelineContainer.classList.add("active");
    });

  }

  return {
    timelineOverflow: timelineOverflow,
  };
})();
timeline.timelineOverflow(); 
