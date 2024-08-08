jQuery(document).ready(function($){
    console.log("hello");
    $('.my-color-field').wpColorPicker();
    var myOptions = {
        // you can declare a default color here,
        // or in the data-default-color attribute on the input
        defaultColor: false,
        // a callback to fire whenever the color changes to a valid color
        change: function(event, ui){},
        // a callback to fire when the input is emptied or an invalid color
        clear: function() {},
        // hide the color picker controls on load
        hide: true,
        // show a group of common colors beneath the square
        // or, supply an array of colors to customize further
        palettes: true
    };
     
    $('.my-color-field').wpColorPicker(myOptions);
});


const overlay = document.querySelector(".overlay");
const overlay_exists = document.querySelector(".overlay--active");
const body = document.querySelector("body");
const menuBtn = document.querySelector(".menu-btn");
const menuItems = document.querySelector(".menu-items");
const expandBtn = document.querySelectorAll(".expand-btn");
const expandBtn2 = document.querySelectorAll(".expand-btn2");
const exploreMoreDrop = document.querySelectorAll(".srs_explore_more_dropDown");
const mbOpenMega = document.querySelectorAll(".srs_mobile_mega");
const cross = document.querySelector(".srs_cross");
document.addEventListener("DOMContentLoaded", function (){
    function toggle() {
        // add open class
        menuBtn.classList.toggle("open");
        menuItems.classList.toggle("open");
          
      }
      
      menuBtn.addEventListener("click", () => {
        e.stopPropagation();
        toggle();
      });
      
      window.onkeydown = function (event) {
        const key = event.key; // const {key} = event; in ES6+
        const active = menuItems.classList.contains("open");
        if (key === "Escape" && active) {
          toggle();
        }
      };
      // function bg_toggle() {
      //     // disable overflow body
      //     body.classList.toggle("overflow");
      //     // dark background
          
      // }
      document.addEventListener("click", (e) => {
        let target = e.target,
          its_menu = target === menuItems || menuItems.contains(target),
          its_hamburger = target === menuBtn,
          menu_is_active = menuItems.classList.contains("open");
        if (!its_menu && !its_hamburger && menu_is_active) {
          toggle();
        }
      });
      
      cross.addEventListener("click", (e) => {
        closeMega();
      })
      function closeMega(){
        mbOpenMega[0].classList.remove("open");
        bg_toggle();
      }
      
      // mobile menu expand
      expandBtn.forEach((btn) => {
        btn.addEventListener("click", () => {
          mbOpenMega[0].classList.add("open");
          toggle();
          
          
        });
      });
      expandBtn2.forEach((btn) => {
        btn.addEventListener("click", () =>{
          exploreMoreDrop[0].classList.toggle("dropOpen");
        });
      })
});





















function toggle() {
  // add open class
  menuBtn.classList.toggle("open");
  menuItems.classList.toggle("open");
    
}

menuBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  toggle();
});

window.onkeydown = function (event) {
  const key = event.key; // const {key} = event; in ES6+
  const active = menuItems.classList.contains("open");
  if (key === "Escape" && active) {
    toggle();
  }
};
// function bg_toggle() {
//     // disable overflow body
//     body.classList.toggle("overflow");
//     // dark background
    
// }
document.addEventListener("click", (e) => {
  let target = e.target,
    its_menu = target === menuItems || menuItems.contains(target),
    its_hamburger = target === menuBtn,
    menu_is_active = menuItems.classList.contains("open");
  if (!its_menu && !its_hamburger && menu_is_active) {
    toggle();
  }
});

cross.addEventListener("click", (e) => {
  closeMega();
})
function closeMega(){
  mbOpenMega[0].classList.remove("open");
//   bg_toggle();
}

// mobile menu expand
expandBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    mbOpenMega[0].classList.add("open");
    toggle();
    
    
  });
});
expandBtn2.forEach((btn) => {
  btn.addEventListener("click", () =>{
    exploreMoreDrop[0].classList.toggle("dropOpen");
  });
})

$(document).ready(function () {
  var srsContentMenu = $(".r4h-main-content-menu");
  var header = $(".navbar");
  var container = $(".r4h-main-content");

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var containerHeight = container.height();
    var srsContentMenuHeight = srsContentMenu.height();

    // Check if navbar exists
    var headerHeight = header.length > 0 ? header.height() : 0;

    // Check if window width is 768 pixels or greater
    if ($(window).width() >= 768) {
      if (
        scroll > container.offset().top &&
        scroll < containerHeight - srsContentMenuHeight - headerHeight
      ) {
        srsContentMenu.css({
          position: "fixed",
          top: headerHeight,
        });
      } else if (
        scroll >=
        containerHeight - srsContentMenuHeight - headerHeight
      ) {
        srsContentMenu.css({
          position: "absolute",
          top: containerHeight - srsContentMenuHeight - headerHeight,
        });
      } else {
        srsContentMenu.css({
          position: "absolute",
          top: 0,
        });
      }
    } else {
      // For screen widths less than 767 pixels, reset styles
      srsContentMenu.css({
        position: "static",
        top: "auto",
      });
    }
  });
});