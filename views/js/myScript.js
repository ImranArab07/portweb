
// function toggleMenu() {
    const menuLinks = document.querySelector(".menu-links");
    // const icon = document.querySelector(".hamburger-icon");
    const overlay = document.querySelector(".menu-overlay");
    const hamburgerIcon=document.querySelector(".hamburger-icon");

    function toggleMenu() {
        menuLinks.classList.toggle("open");
        overlay.classList.toggle("show");
        hamburgerIcon.classList.toggle("open");


    hamburgerIcon.addEventListener('click', () => {
        menuLinks.classList.toggle("open");
        // icon.classList.toggle("open");
        overlay.classList.toggle("show");
        hamburgerIcon.classList.toggle("open");
    });

    overlay.addEventListener('click', () => {
        menuLinks.classList.remove('open');
        overlay.classList.remove('show');
        hamburgerIcon.classList.remove('open');
    });



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

//
// function showExtraContent(button) {
//     const detailsContainer = button.closest(".details-container");
//     const extraContent = detailsContainer.querySelector(".extra-content");
//
//     if (extraContent.style.display === "none" || extraContent.style.display === "") {
//         extraContent.style.display = "block";
//         button.textContent = "Lees minder";
//         detailsContainer.style.height = "auto"; // Laat de container groter worden
//     } else {
//         extraContent.style.display = "none";
//         button.textContent = "Lees meer";
//         detailsContainer.style.height = ""; // Reset de hoogte

}
function showExtraContent(button) {
    // Vind de `extra-content` sectie binnen hetzelfde blok
    const extraContent = button.parentElement.nextElementSibling;

    console.log("Extra content sectie:", extraContent);

    if (extraContent.style.display === "block") {
        // Verberg de extra content en verander knop tekst naar 'Lees meer'
        extraContent.style.display = "none";
        button.textContent = "Lees meer";
    } else {
        // Toon de extra content en verander knop tekst naar 'Lees minder'
        extraContent.style.display = "block";
        button.textContent = "Lees minder";
    }
}


