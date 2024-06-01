document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.getElementById('menu-icon');
    const navbar = document.querySelector('.navbar');

    // Toggle the navbar when the menu icon is clicked
    menuIcon.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });


    const menuItems = document.querySelectorAll(".navbar a");
    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener("click", function () {
            navbar.classList.remove("active");
        });
    });

    // Add 'active' class to nav links on scroll
    window.addEventListener('scroll', () => {
        let sections = document.querySelectorAll('section');
        let scrollPos = window.scrollY + 200; // Adjust for header height and padding

        sections.forEach(section => {
            if (scrollPos >= section.offsetTop && scrollPos < section.offsetTop + section.offsetHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').substring(1) === section.getAttribute('id')) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });
});
