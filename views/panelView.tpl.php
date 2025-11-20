@extends(head)
<body>
    <div class="panel-page">
        <div class="panel-shell">
            <header class="panel-header">
                <div class="panel-brand">
                    <span class="material-symbols-outlined">partly_cloudy_day</span>
                    <span class="panel-title">Estaciones meteorológicas</span>
                </div>
                <button class="icon-button" type="button" aria-label="Agregar estacion" disabled aria-disabled="true" title="Proximamente">
                    <span class="material-symbols-outlined">add</span>
                </button>
            </header>

        <main class="panel-main">
            <div class="panel-heading">
                <p class="heading-title">Selecciona una estacion</p>
                <p class="heading-sub">Elige una estacion para ver sus datos con detalle.</p>
            </div>

            <div id="stations-status" class="stations-status" aria-live="polite"></div>

            <div class="stations-grid" id="stations-list" aria-live="polite"></div>

            <template id="station-template">
                <button type="button" class="station-card">
                    <div>
                        <p class="station-name"></p>
                        <p class="station-location"></p>
                    </div>
                    <div class="station-meta">
                        <span class="material-symbols-outlined">visibility</span>
                        <span class="station-views"></span>
                    </div>
                </button>
            </template>
        </main>
    </div>
    </div>

    @extends(footer)
    <script src="views/assets/js/panel.js"></script>
</body>
</html>
