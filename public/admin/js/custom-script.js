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






