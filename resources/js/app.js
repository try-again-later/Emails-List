import './bootstrap';

const closeButtons = document.querySelectorAll('[data-closes]');
for (const closeButton of closeButtons) {
    const elementToBeClosedId = closeButton.dataset.closes;
    const elementToBeClosed = document.getElementById(elementToBeClosedId);
    if (elementToBeClosed) {
        closeButton.addEventListener('click', () => {
            elementToBeClosed.classList.add('hidden');
        });
    }
}
