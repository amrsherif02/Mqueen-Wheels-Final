//  amr js
$(document).ready(function(){
    $(".jread11").click(function(){
        // Find the corresponding "more" content relative to the clicked "Read more" span
        var moreContent = $(this).closest('.Sec2Card11').find('.more11');
        // Toggle the visibility of the "more" content
        moreContent.slideToggle();
    });
  });
  function scrollToTop() {
    window.scrollTo(0, 0); 
  }
  window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY>0);
  })
  const leftArrow = document.querySelector('.left-arrow23');
  const rightArrow = document.querySelector('.right-arrow23');
  const imageContainer = document.querySelector('.image-container23');
  const images = ['images/mercyo.JPG','images/eqs.JPG', 'images/porschewp2.jpg', 'images/bentelywp.jpg']; // List of image URLs
  let currentIndex = 0;
  
  leftArrow.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateImage();
    
  });
  
  rightArrow.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    updateImage();
    
  });
  
  function updateImage() {
      imageContainer.innerHTML = `
        <img src="${images[currentIndex]}" alt="Image ${currentIndex + 1}">
        <button class="arrow23 left-arrow23">&lt;</button>
        <button class="arrow23 right-arrow23">&gt;</button>`;
    
      // Add event listeners to the newly added buttons
      const newLeftArrow = document.querySelector('.left-arrow23');
      const newRightArrow = document.querySelector('.right-arrow23');
    
      newLeftArrow.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateImage();
        
      });
    
      newRightArrow.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateImage();
        
      });
    }
    function autoChangeImage() {
      setInterval(() => {
        currentIndex = (currentIndex + 1) % images.length;
        updateImage();
      }, 5000); // 5000 milliseconds = 5 seconds
    }
    
    // Start auto-changing images
    autoChangeImage();
    
    const slides = document.querySelectorAll(".featuredcard23");
    const totalSlides = slides.length;
    
    function plusSlides(n) {
      currentIndex += n;
      showSlides();
    }
    
    function showSlides() {
      for (let i = 0; i < totalSlides; i++) {
        slides[i].style.display = "none";
      }
    
      let startIndex = currentIndex % totalSlides;
      if (startIndex < 0) {
        startIndex += totalSlides;
      }
    
      for (let i = 0; i < 3; i++) {
        const index = (startIndex + i) % totalSlides;
        slides[index].style.display = "block";
      }
    }
    
    // Initial slide display
    showSlides();
  
  
    document.addEventListener("DOMContentLoaded", function () {
      const acceptButton = document.getElementById("acceptButton");
      const rejectButton = document.getElementById("rejectButton");
  
      acceptButton.addEventListener("click", function () {
          if (isAnyCheckboxSelected()) {
              console.log("Accept button clicked and checkbox selected.");
              openModal("Your custom accept message goes here.");
          } else {
              alert("Please select a row before accepting.");
          }
      });
  
      rejectButton.addEventListener("click", function () {
          if (isAnyCheckboxSelected()) {
              console.log("Reject button clicked and checkbox selected.");
              openModal("Your custom reject message goes here.");
          } else {
              alert("Please select a row before rejecting.");
          }
      });
  
      function isAnyCheckboxSelected() {
          const checkboxes = document.querySelectorAll(".tableContainer input[type='checkbox']");
          for (const checkbox of checkboxes) {
              if (checkbox.checked) {
                  return true;
              }
          }
          return false;
      }
  
      function openModal(message) {
          console.log("Opening modal with message: ", message);
          const modal = document.getElementById("myModal");
          const modalContent = document.getElementById("modalContent");
          const closeBtn = document.getElementById("close");
  
          modalContent.innerHTML = message;
          modal.style.display = "block";
  
        
   
          
  
          window.onclick = function (event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          };
      }
  });
  