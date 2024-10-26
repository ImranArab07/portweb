// document.addEventListener('DOMContentLoaded', function() {
//     document.querySelector('.sidebar li a svg').addEventListener('click', hideSidebar);
//     document.querySelector('nav ul li:last-child a svg').addEventListener('click', showSidebar);
// });
function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    const overlay = document.querySelector(".menu-overlay")
    console.log("Menu getoggled!"); // Test of dit werkt

    menu.classList.toggle("open");
    icon.classList.toggle("open");
    overlay.classList.toggle("open")
}

//
//
//     sidebar.querySelector('li a svg').addEventListener('click', function() {
//         sidebar.style.display = 'none'; // Zijbalk verbergen
//     });
// });
