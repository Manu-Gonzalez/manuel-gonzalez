const animatedName = document.getElementById("animated-name");

setInterval(() => {
    // Brillo más fuerte y color más brillante
    animatedName.style.textShadow = "0px 0px 20px rgba(255, 255, 255, 1)";
    
    setTimeout(() => {
        // Elimina el brillo
        animatedName.style.textShadow = "none";
    }, 300); // El brillo se elimina más rápido
}, 800); // El intervalo ahora es más rápido

// Mostrar la sección de habilidades con animación
document.getElementById('mis-habilidades').style.display = "block";

function flipCard(card) {
    card.classList.toggle('flipped');
}