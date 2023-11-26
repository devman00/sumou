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



// ---------- 
$(document).ready(function(){ 

  if ($('#numbersType').length) {
    $('#numbersType').on('change', function() {
      if ($(this).find('option:selected').attr('data-value') == '1') {
        $('.cnt_firstNumber').show();
        $('.lawha .serial-number .numbers .first').show();
        $('.cnt_secondNumber').hide();
        $('.lawha .serial-number .numbers .second').hide();
        $('.cnt_thirdNumber').hide();
        $('.lawha .serial-number .numbers .third').hide();
        $('.cnt_fourthNumber').hide();
        $('.lawha .serial-number .numbers .fourth').hide();
      } else if ($(this).find('option:selected').attr('data-value') == '2') {
        $('.cnt_firstNumber').show();
        $('.lawha .serial-number .numbers .first').show();
        $('.cnt_secondNumber').show();
        $('.lawha .serial-number .numbers .second').show();
        $('.cnt_thirdNumber').hide();
        $('.lawha .serial-number .numbers .third').hide();
        $('.cnt_fourthNumber').hide();
        $('.lawha .serial-number .numbers .fourth').hide();
      } else if ($(this).find('option:selected').attr('data-value') == '3') {
        $('.cnt_firstNumber').show();
        $('.lawha .serial-number .numbers .first').show();
        $('.cnt_secondNumber').show();
        $('.lawha .serial-number .numbers .second').show();
        $('.cnt_thirdNumber').show();
        $('.lawha .serial-number .numbers .third').show();
        $('.cnt_fourthNumber').hide();
        $('.lawha .serial-number .numbers .fourth').hide();
      } else if ($(this).find('option:selected').attr('data-value') == '4') {
        $('.cnt_firstNumber').show();
        $('.lawha .serial-number .numbers .first').show();
        $('.cnt_secondNumber').show();
        $('.lawha .serial-number .numbers .second').show();
        $('.cnt_thirdNumber').show();
        $('.lawha .serial-number .numbers .third').show();
        $('.cnt_fourthNumber').show();
        $('.lawha .serial-number .numbers .fourth').show();
      } else {
        $('.cnt_firstNumber').show();
        $('.lawha .serial-number .numbers .first').show();
        $('.cnt_secondNumber').show();
        $('.lawha .serial-number .numbers .second').show();
        $('.cnt_thirdNumber').show();
        $('.lawha .serial-number .numbers .third').show();
        $('.cnt_fourthNumber').show();
        $('.lawha .serial-number .numbers .fourth').show();
      }
    });
  }

  


});

// ---------------- 


  if ($('select#first_letter').length) {
    $('select#first_letter').on('change', function() {
      if ($(this).val() != '') {
        $('.letters .arabic-version .first').html($(this).val());
        $('.letters .english-version .first').html(lettersTraduction($(this).val()));

      }
    });
  }
  if ($('select#second_letter').length) {
    $('select#second_letter').on('change', function() {
      if ($(this).val() != '') {
        $('.letters .arabic-version .second').html($(this).val());
        $('.letters .english-version .second').html(lettersTraduction($(this).val()));
      }
    });
  }
  if ($('select#third_letter').length) {
    $('select#third_letter').on('change', function() {
      if ($(this).val() != '') {
        $('.letters .arabic-version .third').html($(this).val());
        $('.letters .english-version .third').html(lettersTraduction($(this).val()));
      }
    });
  }

  if ($('select#first_number').length) {
    $('select#first_number').on('change', function() {
      if ($(this).val() != '') {
        $('.numbers .arabic .first').html($(this).val());
        $('.numbers .english .first').html(numbersTraduction($(this).val()));
      }
    });
  }
  if ($('select#second_number').length) {
    $('select#second_number').on('change', function() {
      if ($(this).val() != '') {
        $('.numbers .arabic .second').html($(this).val());
        $('.numbers .english .second').html(numbersTraduction($(this).val()));
      }
    });
  }
  if ($('select#third_number').length) {
    $('select#third_number').on('change', function() {
      if ($(this).val() != '') {
        $('.numbers .arabic .third').html($(this).val());
        $('.numbers .english .third').html(numbersTraduction($(this).val()));
      }
    });
  }
  if ($('select#fourth_number').length) {
    $('select#fourth_number').on('change', function() {
      if ($(this).val() != '') {
        $('.numbers .arabic .fourth').html($(this).val());
        $('.numbers .english .fourth').html(numbersTraduction($(this).val()));
      }
    });
  }


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


function lettersTraduction(letter) {
  if (letter != "") {
    var letterList = {
      أ: 'A',
      ب: 'B',
      ح: 'J',
      د: 'D',
      ر: 'R',
      س: 'S',
      ص: 'X',
      ط: 'T',
      ع: 'E',
      ق: 'G',
      ك: 'K',
      ل: 'L',
      م: 'Z',
      ن: 'N',
      ه: 'H',
      و: 'U',
      ي: 'V'
    };
    return letterList[letter];
  }
}

function numbersTraduction(number) {
  if (number != "") {
    var numberList = {
      '٠': '0',
      '١': '1',
      '٢': '2',
      '٣': '3',
      '٤': '4',
      '٥': '5',
      '٦': '6',
      '٧': '7',
      '٨': '8',
      '٩': '9'
    };
    return numberList[number];
  }
}


// disable price if Auction is Checked 
$('input#in_auction').change(function(){
  console.log("111");
  if($(this).is(":checked")) {
      $('.price_input').addClass('bg-gray');
      $("input#price").prop('disabled', true)
  } else {
      $('.price_input').removeClass('bg-gray');
      $("input#price").prop('disabled', false)
  }
});



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


