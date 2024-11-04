// hier worden de elementen in html geselecteerd die ik gebruik voor menu links, menu overlay en hamburger menu
    const menuLinks = document.querySelector(".menu-links"); // selecteert de klasse .menu.links
    const overlay = document.querySelector(".menu-overlay"); // selecteert de klasse .menu overlay
    const hamburgerIcon=document.querySelector(".hamburger-icon"); // selecteert de klasse.hamburger-icon

// hier maak ik een functie om het menu te kunnen openen en sluiten
    function toggleMenu() {
        menuLinks.classList.toggle("open"); // voegt de open klasse toe als die er nog niet was
        overlay.classList.toggle("show"); // doet hier hetzelfde voor de overlay

// hier controleer ik of het menu open is op dingen aan te passen bij het scrollen als het menu open is
        if (menuLinks.classList.contains("open")) {
            document.body.style.overflow = "hidden"; // zorgt ervoor dat je niet kan scrollen als het menu open is
            hamburgerIcon.style.display = "none"; // verbergt het hamburgermenu als het menu open is
        } else {
            document.body.style.overflow = "auto"; // hier zorg ik ervoor dat je weer kan scrollen als het menu gesloten is
            hamburgerIcon.style.display = "flex"; // hiermee zorg ik ervoor dat dat het hamburgermenu weer te zien is als het menu is gesloten
        }

    }

    // zorgt ervoor dat als er buiten het menu wordt geklikt dat het menu sluit
        overlay.addEventListener('click', toggleMenu);

// hier wacht hij tot volledige inhoud is geladen
        document.addEventListener("DOMContentLoaded", function () {
            // hier selecteer ik alle elementen die de klasse ".progress" heeft zodat ik een prgressiebar kan maken
            const progresses = document.querySelectorAll(".progress");

            progresses.forEach(progress => {
                const width = parseInt(progress.getAttribute("data-progress")); // dit haalt de waarde van data-progress op en zet het om in een getal
                progress.style.width = width + '%'; // hierdoor krijgt de balk de breedte van de waarde die is aangegeven

                if (width < 50) { // hier zeg ik als de waarde kleiner is dan 50
                    progress.style.backgroundColor = 'orange'; //geef de balk een oranje kleur
                } else {
                    progress.style.backgroundColor = '#4caf50'; // anders als de waarde 50 of groter dan 50 is, geef de balk een groene waarde
                }
            });

// dit zorgt ervoor dat alle id's een klik gebeurtenis krijgen binnen de pagina
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const target = document.querySelector(this.getAttribute('href'));// het elementen zoeken waarnaar verwezen wordt door de href
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth' // scroll vloeiend naar het element
                        });
                    }
                });
            });
        });

        // dit is een functie om soepel te scrollen naar de volgende functie
        function scrollToSection(sectionId) {
            const target = document.querySelector(sectionId); // Vind het element aan het ID dat overeenkomt met sectionID
            if (target) {
                target.scrollIntoView({ // dit zorgt ervoor dat het soepel naar het element scrolt
                    behavior: 'smooth'
                });
            }

        }

        // Dit is een functie om extra content te verbergen of tonen als je op lees meer of minder button klikt
        function showExtraContent(button) {
            // dit Vind de `extra-content` sectie binnen hetzelfde box
            const extraContent = button.parentElement.nextElementSibling;

            if (extraContent.style.display === "block") {
                //  dit verbergt de extra content en verandert de tekst knop naar 'Lees meer'
                extraContent.style.display = "none";
                button.textContent = "Lees meer";
            } else {
                // dit toont de extra content en verandert de tekst knop naar 'Lees minder'
                extraContent.style.display = "block";
                button.textContent = "Lees minder";
            }
        }
