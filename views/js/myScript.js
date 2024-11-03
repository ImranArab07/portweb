
    const menuLinks = document.querySelector(".menu-links");
    const overlay = document.querySelector(".menu-overlay");
    const hamburgerIcon=document.querySelector(".hamburger-icon");

    function toggleMenu() {
        menuLinks.classList.toggle("open");
        overlay.classList.toggle("show");
        hamburgerIcon.classList.toggle("open");

        if (menuLinks.classList.contains("open")) {
            document.body.style.overflow = "hidden";
        } else {
            document.body.style.overflow = "auto";
        }
    }


    hamburgerIcon.addEventListener('click', toggleMenu);
    // () => {
    //     menuLinks.classList.toggle("open");
    //     // icon.classList.toggle("open");
    //     overlay.classList.toggle("show");
    //     hamburgerIcon.classList.toggle("open");


        overlay.addEventListener('click', () => {
            menuLinks.classList.remove('open');
            overlay.classList.remove('show');
            hamburgerIcon.classList.remove('open');
        });


        document.addEventListener("DOMContentLoaded", function () {
            const progresses = document.querySelectorAll(".progress");
            progresses.forEach(progress => {
                const width = parseInt(progress.getAttribute("data-progress"));
                progress.style.width = width + '%';

                if (width < 50) {
                    progress.style.backgroundColor = 'orange';
                } else {
                    progress.style.backgroundColor = '#4caf50';
                }
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
        });

        function scrollToSection(sectionId) {
            const target = document.querySelector(sectionId);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }

        }

        function showExtraContent(button) {
            // Vind de `extra-content` sectie binnen hetzelfde blok
            const extraContent = button.parentElement.nextElementSibling;

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




