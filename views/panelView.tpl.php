@extends(head)
<body>
    <div class="panel-page">
        <div class="panel-shell">
            <header class="panel-header">
                <div class="panel-brand">
                    <span class="material-symbols-outlined">partly_cloudy_day</span>
                    <span class="panel-title">Weather Stations</span>
                </div>
                <button class="icon-button" type="button" aria-label="Agregar estacion">
                    <span class="material-symbols-outlined">add</span>
                </button>
            </header>

            <main class="panel-main">
                <div class="panel-heading">
                    <p class="heading-title">Selecciona una estacion</p>
                    <p class="heading-sub">Elige una estacion para ver sus datos con detalle.</p>
                </div>

                <div class="stations-grid">
                    <article class="station-card">
                        <div>
                            <p class="station-name">Home Base</p>
                            <p class="station-location">San Francisco, CA</p>
                        </div>
                        <div class="station-meta">
                            <span class="material-symbols-outlined">visibility</span>
                            <span>128 visitas</span>
                        </div>
                    </article>

                    <article class="station-card">
                        <div>
                            <p class="station-name">Downtown Office</p>
                            <p class="station-location">New York, NY</p>
                        </div>
                        <div class="station-meta">
                            <span class="material-symbols-outlined">visibility</span>
                            <span>92 visitas</span>
                        </div>
                    </article>

                    <article class="station-card">
                        <div>
                            <p class="station-name">Mountain Cabin</p>
                            <p class="station-location">Denver, CO</p>
                        </div>
                        <div class="station-meta">
                            <span class="material-symbols-outlined">visibility</span>
                            <span>45 visitas</span>
                        </div>
                    </article>

                    <article class="station-card">
                        <div>
                            <p class="station-name">Lakeside Retreat</p>
                            <p class="station-location">Lake Tahoe, NV</p>
                        </div>
                        <div class="station-meta">
                            <span class="material-symbols-outlined">visibility</span>
                            <span>76 visitas</span>
                        </div>
                    </article>

                    <article class="station-card">
                        <div>
                            <p class="station-name">Coastal Outpost</p>
                            <p class="station-location">Big Sur, CA</p>
                        </div>
                        <div class="station-meta">
                            <span class="material-symbols-outlined">visibility</span>
                            <span>31 visitas</span>
                        </div>
                    </article>

                    <article class="station-card">
                        <div>
                            <p class="station-name">Desert Monitoring</p>
                            <p class="station-location">Phoenix, AZ</p>
                        </div>
                        <div class="station-meta">
                            <span class="material-symbols-outlined">visibility</span>
                            <span>58 visitas</span>
                        </div>
                    </article>
                </div>
            </main>
        </div>
    </div>

    @extends(footer)
    <script src="views/assets/js/navigation.js"></script>
</body>
</html>
