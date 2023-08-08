// SCRIPT FOR - HAMBURGUER MENU ACTIVE
// Creating consts that I'll use in the hamburguer menu function
const menuToggle = document.querySelector('.menu-toggle');
const menuItems = document.querySelector('.menu-items');

// Use arrow function for cleaner code
menuToggle.addEventListener('click', () => {
    menuItems.classList.toggle('active');
});

// SCRIPT FOR THANK YOU MSG IN THE CONTACT PAGE
// Create consts for every item that I'll use
// Use arrow function for cleaner code
document.addEventListener('DOMContentLoaded', () => {
    const contact = document.getElementById('contact');
    const form = document.querySelector('.forms');
    const tyMsg = document.getElementById('ty');
    const send = document.getElementById('send');

    // defining function
    send.addEventListener('click', function(event) {
        event.preventDefault(); 

        // Clearing everything but the thank you msg
        contact.style.display = 'none';
        form.style.display = 'none';
        send.style.display = 'none';

        // Display the thank you message in block
        tyMsg.style.display = 'block';
    });
});