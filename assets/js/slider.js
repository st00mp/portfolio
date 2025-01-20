document.addEventListener("DOMContentLoaded", function () {
    const sliderContainer = document.querySelector('.slider-container');
    const sliderItems = document.querySelectorAll('.slider-item');
    const itemWidth = sliderItems[0].offsetWidth; // Largeur d'un élément
    let currentIndex = 0;

    // Duplique les premiers éléments à la fin pour un effet cyclique
    for (let i = 0; i < 3; i++) {
        const clone = sliderItems[i].cloneNode(true);
        sliderContainer.appendChild(clone);
    }

    function moveSlider() {
        currentIndex++;
        sliderContainer.style.transition = "transform 1s ease";
        sliderContainer.style.transform = `translateX(-${currentIndex * itemWidth}px)`;

        // Réinitialise la position après l'animation
        setTimeout(() => {
            if (currentIndex >= sliderItems.length) {
                sliderContainer.style.transition = "none";
                sliderContainer.style.transform = "translateX(0)";
                currentIndex = 0;
            }
        }, 900); // Temps de l'animation
    }

    // Défilement automatique toutes les 3 secondes
    setInterval(moveSlider, 3000);
});