window.addEventListener("scroll",function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky",window.scrollY>0);
})


$(document).ready(function() {
  $('#submitBtnDX').click(function(event) {
      event.preventDefault(); 
      
    
      var fullNameAG = $('#fullnameAG').val();
      var phoneNumberAG = $('#phonenumberAG').val();
      var brandAG = $('#brandAG').val();
      var modelAG = $('#modelAG').val();
      var modelyearAG = $('#modelyearAG').val();
      var kilometerAG = $('#kilometerAG').val();
      var transmissionAG = $('#transmissionAG').val();
      var colorAG = $('#colorAG').val();
    


      if (fullNameAG === '' || phoneNumberAG === '' || brandAG === '' || modelAG === '' || modelyearAG === '' || kilometerAG === '' || transmissionAG === '0' || colorAG === '' ) {
         
          $('#errorModalAG').show();
      } else {
      
          
          $('#successModalAG').show();
          
      }
  });


  $('.closeAG').click(function() {
      $('#successModalAG').hide();
  });

  $('#errorCloseButtonAG').click(function() {
      $('#errorModalAG').hide();
  });


});



// slideshow for mercedes page 
const leftArrow = document.querySelector('.left-arrowag');
const rightArrow = document.querySelector('.right-arrowag');
const imageContainer = document.querySelector('.image-containerag');
const images = ['images/mercedesS680.jpg','images/mercedesGLS.jpg', 'images/mercedesGclass.jpg', 'images/mercedesAmg.jpg']; // List of image URLs
let currentIndex1 = 0;

leftArrow.addEventListener('click', () => {
  currentIndex1 = (currentIndex1 - 1 + images.length) % images.length;
  updateImage();
});

rightArrow.addEventListener('click', () => {
  currentIndex1 = (currentIndex1 + 1) % images.length;
  updateImage();
});

function updateImage() {
    imageContainer.innerHTML = `
      <img src="${images[currentIndex1]}" alt="Image ${currentIndex1 + 1}">
      <button class="arrowag left-arrowag">&lt;</button>
      <button class="arrowag right-arrowag">&gt;</button>`;
  
    
    const newLeftArrow = document.querySelector('.left-arrowag');
    const newRightArrow = document.querySelector('.right-arrowag');
  
    newLeftArrow.addEventListener('click', () => {
      currentIndex1 = (currentIndex1 - 1 + images.length) % images.length;
      updateImage();
    });
  
    newRightArrow.addEventListener('click', () => {
      currentIndex1 = (currentIndex1 + 1) % images.length;
      updateImage();
    });
  }

  

// Separator

$(document).ready(function(){
  $("#showMoreButtonAG").click(function(){
 
    $(".hidden-sectionAG").show();
    
   
    $(this).hide();
  });
});





//admin message

function acceptSelectedRows() {
  if(isAnyCheckboxSelected()) {
      var selectedRows = document.querySelectorAll('.rowCheckbox:checked');
      selectedRows.forEach(function(row) {
         
          var rowNumber = row.parentElement.parentElement.cells[1].innerText;
          var name = row.parentElement.parentElement.cells[2].innerText;
          var phoneNumber = row.parentElement.parentElement.cells[3].innerText;
        
          alert('Accepted: Row ' + rowNumber + ' - ' + name + ' - ' + phoneNumber);
      });
  } else {
      alert("Please select a row before accepting.");
  }
}

function rejectSelectedRows() {
  if(isAnyCheckboxSelected()) {
      var selectedRows = document.querySelectorAll('.rowCheckbox:checked');
      selectedRows.forEach(function(row) {
        
          var rowNumber = row.parentElement.parentElement.cells[1].innerText;
          var name = row.parentElement.parentElement.cells[2].innerText;
          var phoneNumber = row.parentElement.parentElement.cells[3].innerText;
          
          alert('Rejected: Row ' + rowNumber + ' - ' + name + ' - ' + phoneNumber);
      });
  } else {
      alert("Please select a row before rejecting.");
  }
}

function isAnyCheckboxSelected() {
  const checkboxes = document.querySelectorAll(".tableContainerAG input[type='checkbox']");
  for (const checkbox of checkboxes) {
      if (checkbox.checked) {
          return true;
      }
  }
  return false;
}







