(() => {
  // Navegacion simple entre el panel y el detalle.
  const detailBase = '?slug=detail';
  const panelBase = '?slug=panel';

  const buildDetailUrl = (stationName) => {
    if (!stationName) {
      return detailBase;
    }

    return detailBase + '&station=' + encodeURIComponent(stationName);
  };

  document.querySelectorAll('.station-card').forEach((card) => {
    card.style.cursor = 'pointer';
    card.setAttribute('role', 'button');
    card.setAttribute('tabindex', '0');

    const titleEl = card.querySelector('.station-name');
    const stationName = card.getAttribute('data-station') || (titleEl ? titleEl.textContent.trim() : '');

    const goToDetail = () => {
      window.location.href = buildDetailUrl(stationName);
    };

    card.addEventListener('click', goToDetail);
    card.addEventListener('keydown', (event) => {
      const key = event.key;
      if (key === 'Enter' || key === ' ') {
        event.preventDefault();
        goToDetail();
      }
    });
  });

  const backButton = document.querySelector('.back-button');
  if (backButton) {
    backButton.addEventListener('click', (event) => {
      event.preventDefault();

      if (window.history.length > 1) {
        window.history.back();
      } else {
        window.location.href = panelBase;
      }
    });
  }
})();
