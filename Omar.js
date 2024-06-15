
document.addEventListener("DOMContentLoaded", function() {
  var submitButton211 = document.getElementById('Submitbtn210');
  var firstName211 = document.getElementById('FirstName');
  var lastName211 = document.getElementById('LastName');
  var phoneNumber211 = document.getElementById('PhoneNumber');
  var email211 = document.getElementById('Email');
  var description211 = document.getElementById('Description');
  var errorModal211 = document.getElementById('errorModal222');
  var successModal211 = document.getElementById('successModal222');
  var closeButtons211 = document.querySelectorAll('.close222');
  var errorCloseButton211 = document.getElementById('errorCloseButton222');

  submitButton211.addEventListener('click', function(event) {
      event.preventDefault(); 
      

      var firstNameValue211 = firstName211.value;
      var lastNameValue211 = lastName211.value;
      var phoneNumberValue211 = phoneNumber211.value;
      var emailValue211 = email211.value;
      var descriptionValue211 = description211.value;

      if (firstNameValue211 === '' || lastNameValue211 === '' || phoneNumberValue211 === '' || emailValue211 === '' || descriptionValue211 === '') {

          errorModal211.style.display = 'block';
      } else {

          successModal211.style.display = 'block';
      }
  });

  closeButtons211.forEach(function(button) {
      button.addEventListener('click', function() {
          successModal211.style.display = 'none';
      });
  });


  errorCloseButton211.addEventListener('click', function() {
      errorModal211.style.display = 'none';
  });





  window.addEventListener('click', function(event) {
      if (event.target === successModal211 || event.target === errorModal211) {
          successModal211.style.display = 'none';
          errorModal211.style.display = 'none';
      }
  });
});




$(document).ready(function() {
  $('.show-more210').click(function() {
      $('.container2210 div:not(:first-child)').slideDown();
      $(this).hide();
      $('.show-less210').show();
  });

  $('.show-less210').click(function() {
      $('.container2210 div:not(:first-child)').slideUp();
      $(this).hide();
      $('.show-more210').show();
  });
});





function scrolltoBottom()
{
    var height = document.body.scrollHeight;
    window.scroll(0,700);
}





$(document).ready(function() {
    $('#rentSubmitButton').click(function(event) {
        event.preventDefault(); 
        

        var fullName222 = $('#fullName222').val();
        var email222 = $('#email222').val();
        var phoneNumber222 = $('#phoneNumber222').val();
        var carPrice222 = $('#carSelect222').val();
        var numberOfDays222 = $('#numberOfDays222').val();
        var totalPrice222 = carPrice222 * numberOfDays222;

        if (fullName222 === '' || email222 === '' || phoneNumber222 === '' || carPrice222 === '0' || numberOfDays222 === '') {

            $('#errorModal222').show();
        } else {

            $('#totalPrice222').val(totalPrice222);
            $('#successModal222').show();
            
        }
    });




    $('.close222').click(function() {
        $('#successModal222').hide();
    });


    $('#errorCloseButton222').click(function() {
        $('#errorModal222').hide();
    });
x





    $(window).click(function(event) {
        if ($(event.target).is('#successModal222, #errorModal222')) {
            $('#successModal222, #errorModal222').hide();
        }
    });
});

