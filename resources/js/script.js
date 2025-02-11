// Funzione per verificare se un elemento è visibile nella finestra di visualizzazione
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Aggiungi la classe "show" agli eventi visibili
function checkTimeline() {
    const events = document.querySelectorAll('.event');
    events.forEach(event => {
        if (isElementInViewport(event)) {
            event.classList.add('show');
        }
    });
}

// Ascoltiamo l'evento di scroll
window.addEventListener('scroll', checkTimeline);

// Verifica la visibilità degli eventi all'inizio
document.addEventListener('DOMContentLoaded', checkTimeline);
