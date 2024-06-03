// {{ Add Navbar Active class Start }} //

const navLinks = document.querySelectorAll('.nav-links li');
navLinks.forEach(link => {
    link.addEventListener('click', function () {
        navLinks.forEach(nav => nav.classList.remove('active'));
        this.classList.add('active');
    });
});

// {{ Add Navbar Active class End }} //


// {{ Popup Add in student information start }} //

document.addEventListener('DOMContentLoaded', (event) => {
    var modal = document.getElementById('myModal');
    var btn = document.getElementById('openModalBtn');
    var span = document.getElementsByClassName('close')[0];
    btn.onclick = function () {
        modal.style.display = 'block';
    }
    span.onclick = function () {
        modal.style.display = 'none';
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});

// {{ Popup Add in student information End }} //

   document.addEventListener('DOMContentLoaded', function() {
      //Father Mobile Number
      const fatherPhoneNoInput = document.getElementById('father_phone_no');
      fatherPhoneNoInput.addEventListener('input', function(event) {
         const inputValue = event.target.value;
         const numericValue = inputValue.replace(/\D/g, ''); 
         const truncatedValue = numericValue.slice(0, 10);
         event.target.value = truncatedValue;
      });   
      //Student Mobile Number
      const studentPhoneNoInput = document.getElementById('student_phone_no');
      studentPhoneNoInput.addEventListener('input', function(event) {
         const inputValue = event.target.value;
         const numericValue = inputValue.replace(/\D/g, ''); 
         const truncatedValue = numericValue.slice(0, 10); 
         event.target.value = truncatedValue;
      });  
      //Aadhar Number
      const aadharNoInput = document.getElementById('aadhar_no');
      aadharNoInput.addEventListener('input', function(event) {
         const inputValue = event.target.value;
         const numericValue = inputValue.replace(/\D/g, '');
         const truncatedValue = numericValue.slice(0, 12);
         event.target.value = truncatedValue;
      });  
        //Pin Code
        const pinCodeInput = document.getElementById('pin_code');
        pinCodeInput.addEventListener('input', function(event) {
            const inputValue = event.target.value;
            const numericValue = inputValue.replace(/\D/g, ''); 
            const truncatedValue = numericValue.slice(0, 6); 
            event.target.value = truncatedValue;
        });
        
      //Total Fees
      const totalFeesInput = document.getElementById('total_fees');
      totalFeesInput.addEventListener('input', function(event) {
         const inputValue = event.target.value;
         const numericValue = inputValue.replace(/\D/g, '');
         event.target.value = numericValue;
      });

   });


