(() => {
  const API_URL = 'https://mattprofe.com.ar/proyectos/app-estacion/datos.php?mode=list-stations';

  const listEl = document.getElementById('stations-list');
  const statusEl = document.getElementById('stations-status');
  const template = document.getElementById('station-template');
  const numberFormatter = new Intl.NumberFormat('es-AR');

  if (!listEl || !template) {
    return;
  }

  const setStatus = (message, isError = false) => {
    if (!statusEl) return;
    statusEl.textContent = message;
    statusEl.classList.toggle('is-error', Boolean(isError));
    statusEl.style.display = message ? 'block' : 'none';
  };

  const goToDetail = (chipid) => {
    if (!chipid) return;
    window.location.href = `detalle/${encodeURIComponent(chipid)}`;
  };

  const buildCard = (station) => {
    const clone = template.content.cloneNode(true);
    const card = clone.querySelector('.station-card');
    const nameEl = clone.querySelector('.station-name');
    const locationEl = clone.querySelector('.station-location');
    const viewsEl = clone.querySelector('.station-views');

    card.dataset.chipid = station.chipid || '';
    nameEl.textContent = station.apodo || 'Estación sin nombre';
    locationEl.textContent = station.ubicacion || 'Ubicación no disponible';

    const visitas = station.visitas ? Number(station.visitas) : 0;
    viewsEl.textContent = visitas ? `${numberFormatter.format(visitas)} visitas` : 'Sin visitas';

    if (Number(station.dias_inactivo) > 0) {
      card.classList.add('is-inactive');
    }

    card.addEventListener('click', () => goToDetail(station.chipid));
    card.addEventListener('keydown', (event) => {
      const key = event.key;
      if (key === 'Enter' || key === ' ') {
        event.preventDefault();
        goToDetail(station.chipid);
      }
    });

    return clone;
  };

  const renderStations = (stations) => {
    listEl.replaceChildren();

    if (!stations.length) {
      setStatus('No hay estaciones disponibles en este momento.');
      return;
    }

    const fragment = document.createDocumentFragment();
    stations.forEach((station) => {
      fragment.appendChild(buildCard(station));
    });
    listEl.appendChild(fragment);
  };

  const fetchStations = async () => {
    const response = await fetch(API_URL);

    if (!response.ok) {
      throw new Error(`Respuesta inesperada (${response.status})`);
    }

    return response.json();
  };

  const init = async () => {
    setStatus('Cargando estaciones...');

    try {
      const stations = await fetchStations();
      setStatus('');
      renderStations(Array.isArray(stations) ? stations : []);
    } catch (error) {
      console.error('No se pudieron cargar las estaciones', error);
      setStatus('No pudimos cargar las estaciones. Reintenta en unos segundos.', true);
    }
  };

  init();
})();
