
function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    const overlay = document.querySelector(".menu-overlay")
    console.log("Menu getoggled!"); // Test of dit werkt

    menu.classList.toggle("open");
    icon.classList.toggle("open");
    overlay.classList.toggle("open")
}



document.addEventListener("DOMContentLoaded", function () {
    const progresses = document.querySelectorAll(".progress");
    progresses.forEach(progress => {
        const width = parseInt(progress.getAttribute("data-progress"));
        progress.style.width = width + '%';

        if (width <50) {
            progress.style.backgroundColor = 'orange';
        } else {
            progress.style.backgroundColor = '#4caf50';
        }
    });
});


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});
function scrollToSection(sectionId) {
    const target = document.querySelector(sectionId);
    if (target) {
        target.scrollIntoView({
            behavior: 'smooth'
        });
    }
}

