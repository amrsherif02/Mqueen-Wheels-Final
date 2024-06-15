window.addEventListener("scroll",function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky",window.scrollY>0);
})

$(document).ready(function(){
  $(".show-more-buttonAZ").click(function(){
      $(".show-more-contentAZ").toggle();
      var buttonText = $(".show-more-buttonAZ").text();
      if (buttonText === "Show more") {
          $(".show-more-buttonAZ").text("Show less");
      } else {
          $(".show-more-buttonAZ").text("Show more");
      }
  });
});





$(document).ready(function() {
  $('#submitBtnDX').click(function(event) {
      event.preventDefault(); // Prevent form submission
      
      // Check if any form field is empty
      var fullNameAZ = $('#FullNameAZ').val();
      var EmailAZ = $('#EmailAZ').val();
      var PhoneNumberAZ = $('#PhoneNumberAZ').val();
      var BrandAZ = $('#BrandAZ').val();
      var ModelAZ = $('#ModelAZ').val();
      var kilometerAZ = $('#KilometersAZ').val();
      var ColorAZ = $('#ColorAZ').val();
      var transmissionAZ = $('#transmissionAZ').val();
    


      if (fullNameAZ === '' || EmailAZ === '' || PhoneNumberAZ === '' || BrandAZ === '' || ModelAZ === '' || kilometerAZ === '' || ColorAZ === '' || transmissionAZ === '0' ) {
          // If any field is empty or car is not selected, display an error message
          $('#errorModalAZ').show();
      } else {
          // All fields are filled, display the success modal and set the total price value
          
          $('#successModalAZ').show();
          
      }
  });

  // Close the success modal when the close button is clicked
  $('.closeAZ').click(function() {
      $('#successModalAZ').hide();
  });

  // Close the error modal when the close button is clicked
  $('#errorCloseButtonAZ').click(function() {
      $('#errorModalAZ').hide();
  });

  // Close the modals when the user clicks outside

});


// const leftArrow = document.querySelector('.left-arrowAZ');
// const rightArrow = document.querySelector('.right-arrowAZ');
// const imageContainer = document.querySelector('.image-containerAZ');
// const images = ['images/int1.jpg','images/int2.jpg', 'images/int3.jpg', 'images/680x.jpg',  'images/myb1.jpg','images/interior3.png', 'images/interior2.png','images/interior1.png','images/interio.png', 'images/int5.jpg', 'images/jant.png' ]; // List of image URLs
// let currentIndex = 0;

// leftArrow.addEventListener('click', () => {
//   currentIndex = (currentIndex - 1 + images.length) % images.length;
//   updateImage();
// });

// rightArrow.addEventListener('click', () => {
//   currentIndex = (currentIndex + 1) % images.length;
//   updateImage();
// });

// function updateImage() {
//     imageContainer.innerHTML = `
//       <img src="${images[currentIndex]}" alt="Image ${currentIndex + 1}">
//       <button class="arrowAZ left-arrowAZ">&lt;</button>
//       <button class="arrowAZ right-arrowAZ">&gt;</button>`;
  
   
//     const newLeftArrow = document.querySelector('.left-arrowAZ');
//     const newRightArrow = document.querySelector('.right-arrowAZ');
  
//     newLeftArrow.addEventListener('click', () => {
//       currentIndex = (currentIndex - 1 + images.length) % images.length;
//       updateImage();
//     });
  
//     newRightArrow.addEventListener('click', () => {
//       currentIndex = (currentIndex + 1) % images.length;
//       updateImage();
//     });
//   }
  // const wrapper = document.querySelector(".wrapper"),
  //         signupHeader = document.querySelector(".signup header"),
  //         loginHeader = document.querySelector(".login header");

  //       loginHeader.addEventListener("click", () => {
  //         wrapper.classList.add("active");
  //       });
  //       signupHeader.addEventListener("click", () => {
  //         wrapper.classList.remove("active");
  //       });



        