const toggleButton = document.getElementById('navbar-toggle');
const navbar = document.getElementById('navbar');
const navbarIcon = document.getElementById('navbar-icon');

toggleButton.addEventListener('click', function () {
    navbar.classList.toggle('hidden'); // Toggle the visibility of the mobile menu

    // Change the icon based on the menu state
    if (navbar.classList.contains('hidden')) {
        navbarIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                `;
    } else {
        navbarIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                `;
    }
});




// scroll to top button
// script.js
const scrollToTopBtn = document.getElementById('scrollToTopBtn');

window.onscroll = function () {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = 'block';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
};

scrollToTopBtn.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scroll animation
    });
};





//tab sections

// script.js
document.addEventListener("DOMContentLoaded", function () {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('[role="tabpanel"]');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const tabId = button.getAttribute('data-tab');

            // Remove active class from all buttons and hide all tab contents
            tabButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Add active class to clicked button and show the corresponding tab content
            button.classList.add('active');
            document.getElementById(tabId).classList.remove('hidden');
        });
    });
});


window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    const scrollPercent = (window.scrollY / document.documentElement.scrollHeight) * 100;

    if (scrollPercent > 40) {
        header.classList.add('fixed-nav');
    } else {
        header.classList.remove('fixed-nav');
    }
});


window.addEventListener('scroll', () => {
    const header = document.querySelector('nav');
    const logoContainer = document.getElementById('logo-container');
    const scrollPercent = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;

    // Handle fixed position for the header
    if (scrollPercent > 40) {
        header.classList.add('fixed-nav'); // Add fixed class
        logoContainer.classList.remove('hidden'); // Show logo
    } else {
        header.classList.remove('fixed-nav'); // Remove fixed class
        logoContainer.classList.add('hidden'); // Hide logo
    }
});


// script.js
document.addEventListener("DOMContentLoaded", function () {
    
    const tabContents = document.querySelectorAll('[role="tabpanel"]');
    const poper = document.querySelector('.poper');


    
});


const tabButtons = document.getElementById('user-poper');
tabButtons.addEventListener('click', () => {
    const tab = document.getElementById('poper-tab');

    // Remove active class from all buttons and hide all tab contents
    tab.classList.toggle('hidden');
});



