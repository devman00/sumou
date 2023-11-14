// Wrap every letter in a span
var textWrapper = document.querySelector(".ml11 .letters");
var affairRoles = document.querySelectorAll(".affair-role > .container > div ");

console.log(affairRoles);

affairRoles.forEach((element) => {
  element.addEventListener("click", function () {
    affairRoles.forEach((x) => {
      x.classList.remove("selected");
    });

    element.classList.add("selected");
  });
});

textWrapper.innerHTML = textWrapper.textContent.replace(
  /([^\x00-\x80]|\w)/g,
  "<span class='letter'>$&</span>"
);

anime
  .timeline({ loop: true })
  .add({
    targets: ".ml11 .line",
    scaleY: [0, 1],
    opacity: [0.5, 1],
    easing: "easeOutExpo",
    duration: 700,
  })
  .add({
    targets: ".ml11 .line",
    translateX: [
      0,
      document.querySelector(".ml11 .letters").getBoundingClientRect().width +
        10,
    ],
    easing: "easeOutExpo",
    duration: 700,
    delay: 100,
  })
  .add({
    targets: ".ml11 .letter",
    opacity: [0, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: "-=775",
    delay: (el, i) => 34 * (i + 1),
  })
  .add({
    targets: ".ml11",
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000,
  });

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


$(document).ready(function(){ 
  console.log("aaa");
  if ($('#numbersType').length) {
    $(document).on("change", "#numbersType", function () {

      if ($(this).attr('data-value') == '1') {
        console.log("11");
        $('.cnt_firstNumber').show();
        $('.cnt_secondNumber').hide();
        $('.cnt_thirdNumber').hide();
        $('.cnt_fourthNumber').hide();
      } else if ($(this).attr('data-value') == '2') {
        console.log("22");
        $('.cnt_firstNumber').hide();
        $('.cnt_secondNumber').show();
        $('.cnt_thirdNumber').hide();
        $('.cnt_fourthNumber').hide();
      } else if ($(this).attr('data-value') == '3') {
        console.log("33");
        $('.cnt_firstNumber').hide();
        $('.cnt_secondNumber').hide();
        $('.cnt_thirdNumber').show();
        $('.cnt_fourthNumber').hide();
      } else if ($(this).attr('data-value') == '4') {
        console.log("44");
        $('.cnt_firstNumber').hide();
        $('.cnt_secondNumber').hide();
        $('.cnt_thirdNumber').hide();
        $('.cnt_fourthNumber').show();
      }
    });
  }
});