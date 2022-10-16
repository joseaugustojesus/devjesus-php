(function () {
    "use strict";
  
    // Scroll Down
    const btnScrollDown = document.querySelector("#scroll_down");
    if(btnScrollDown) btnScrollDown.addEventListener("click", scrollDown);
  
    // Navigation
    const burger = document.querySelector(".burger i");
    const nav = document.querySelector(".nav");
    if(burger) {
      burger.addEventListener("click", function () {
        toggleNav();
      });
    
      function toggleNav() {
        burger.classList.toggle("fa-bars");
        burger.classList.toggle("fa-times");
        nav.classList.toggle("nav-active");
      }
    }
  
    function scrollDown() {
      let scrollAboutMe =  document.getElementById('aboutMe').offsetTop;
      window.scrollTo({top: scrollAboutMe, behavior: "smooth"})
    }
  })();