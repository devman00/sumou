// Wrap every letter in a span
// var textWrapper = document.querySelector(".ml11 .letters");
// var affairRoles = document.querySelectorAll(".affair-role > .container > div ");

// console.log(affairRoles);

// affairRoles.forEach((element) => {
//   element.addEventListener("click", function () {
//     affairRoles.forEach((x) => {
//       x.classList.remove("selected");
//     });

//     element.classList.add("selected");
//   });
// });

// textWrapper.innerHTML = textWrapper.textContent.replace(
//   /([^\x00-\x80]|\w)/g,
//   "<span class='letter'>$&</span>"
// );

// anime
//   .timeline({ loop: true })
//   .add({
//     targets: ".ml11 .line",
//     scaleY: [0, 1],
//     opacity: [0.5, 1],
//     easing: "easeOutExpo",
//     duration: 700,
//   })
//   .add({
//     targets: ".ml11 .line",
//     translateX: [
//       0,
//       document.querySelector(".ml11 .letters").getBoundingClientRect().width +
//         10,
//     ],
//     easing: "easeOutExpo",
//     duration: 700,
//     delay: 100,
//   })
//   .add({
//     targets: ".ml11 .letter",
//     opacity: [0, 1],
//     easing: "easeOutExpo",
//     duration: 600,
//     offset: "-=775",
//     delay: (el, i) => 34 * (i + 1),
//   })
//   .add({
//     targets: ".ml11",
//     opacity: 0,
//     duration: 1000,
//     easing: "easeOutExpo",
//     delay: 1000,
//   });

//   -----------------------

// Wrap every letter in a span
// var textWrapper = document.querySelector('.ml12');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

// anime.timeline({loop: true})
//   .add({
//     targets: '.ml12 .letter',
//     translateX: [40,0],
//     translateZ: 0,
//     opacity: [0,1],
//     easing: "easeOutExpo",
//     duration: 1200,
//     delay: (el, i) => 500 + 30 * i
//   }).add({
//     targets: '.ml12 .letter',
//     translateX: [0,-30],
//     opacity: [1,0],
//     easing: "easeInExpo",
//     duration: 1100,
//     delay: (el, i) => 100 + 30 * i
//   });




// $('#firstLetter').change(function(){
//       alert($(this).val());
//   });







if ($('.mobSidebar').length) {

  // Selecting the mobSidebar and buttons
  const mobSidebar = document.querySelector(".mobSidebar");
  const mobSidebarOpenBtn = document.querySelector("#mobSidebar-open");
  const mobSidebarCloseBtn = document.querySelector("#mobSidebar-close");
  const mobSidebarLockBtn = document.querySelector("#lock-icon");

  // Function to toggle the lock state of the mobSidebar
  const toggleLock = () => {
    mobSidebar.classList.toggle("locked");
    // If the mobSidebar is not locked
    if (!mobSidebar.classList.contains("locked")) {
      mobSidebar.classList.add("hoverable");
      mobSidebarLockBtn.classList.replace("bx-lock-alt", "bx-lock-open-alt");
    } else {
      mobSidebar.classList.remove("hoverable");
      mobSidebarLockBtn.classList.replace("bx-lock-open-alt", "bx-lock-alt");
    }
  };

  // Function to hide the mobSidebar when the mouse leaves
  const hideSidebar = () => {
    if (mobSidebar.classList.contains("hoverable")) {
      mobSidebar.classList.add("close");
    }
  };

  // Function to show the mobSidebar when the mouse enter
  const showSidebar = () => {
    if (mobSidebar.classList.contains("hoverable")) {
      mobSidebar.classList.remove("close");
    }
  };

  // Function to show and hide the mobSidebar
  const toggleSidebar = () => {
    mobSidebar.classList.toggle("close");
  };

  // Adding event listeners to buttons and mobSidebar for the corresponding actions
  mobSidebarLockBtn.addEventListener("click", toggleLock);
  mobSidebar.addEventListener("mouseleave", hideSidebar);
  mobSidebar.addEventListener("mouseenter", showSidebar);
  mobSidebarOpenBtn.addEventListener("click", toggleSidebar);
  mobSidebarCloseBtn.addEventListener("click", toggleSidebar);

}





// ---------- 
$(document).ready(function(){ 

  if ($('#numbersType').length) {
    $('#numbersType').on('change', function() {
      if ($(this).find('option:selected').attr('data-value') == '1') {
        $('.cnt_firstNumber').show();
        $('.cnt_secondNumber').hide();
        $('.cnt_thirdNumber').hide();
        $('.cnt_fourthNumber').hide();
      } else if ($(this).find('option:selected').attr('data-value') == '2') {
        $('.cnt_firstNumber').show();
        $('.cnt_secondNumber').show();
        $('.cnt_thirdNumber').hide();
        $('.cnt_fourthNumber').hide();
      } else if ($(this).find('option:selected').attr('data-value') == '3') {
        $('.cnt_firstNumber').show();
        $('.cnt_secondNumber').show();
        $('.cnt_thirdNumber').show();
        $('.cnt_fourthNumber').hide();
      } else if ($(this).find('option:selected').attr('data-value') == '4') {
        $('.cnt_firstNumber').show();
        $('.cnt_secondNumber').show();
        $('.cnt_thirdNumber').show();
        $('.cnt_fourthNumber').show();
      } else {
        $('.cnt_firstNumber').show();
        $('.cnt_secondNumber').show();
        $('.cnt_thirdNumber').show();
        $('.cnt_fourthNumber').show();
      }
    });
  }

});

// ---------------- 




// ----  OWL Carousel 
$(document).ready(function(){
  $('.partnersCarousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
  })

  $('.affair-process-steps').owlCarousel({
    loop:true,
    margin:5,
    nav:true,
    dots: false,
    responsiveClass:false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        800:{
            items:3,
            nav:false
        }
    }
  })


});
// ---------------- 


