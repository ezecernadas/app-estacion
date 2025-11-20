(() => {
  // Manejo del botón volver en la vista de detalle.
  const backButton = document.querySelector('.back-button');
  if (!backButton) return;

  backButton.addEventListener('click', (event) => {
    event.preventDefault();

    if (window.history.length > 1) {
      window.history.back();
    } else {
      window.location.href = '../panel';
    }
  });
})();
