@extends(head)
<body>
    <div class="detail-page">
        <div class="detail-shell">
            <div class="detail-topbar">
                <a class="back-button" href="?slug=panel">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <span>Todas las estaciones</span>
                </a>
            </div>

            <div class="detail-hero">
                <div class="station-meta">
                    <h1 class="station-name">{{ STATION_NAME }}</h1>
                    <p class="station-location">{{ STATION_LOCATION }}</p>
                </div>
                <div class="station-weather">
                    <p class="station-temp">{{ STATION_TEMP }}</p>
                    <div class="station-condition">
                        <span class="material-symbols-outlined">partly_cloudy_day</span>
                        <span>{{ STATION_CONDITION }}</span>
                    </div>
                </div>
            </div>

            <div class="detail-card">
                <div class="trend-headline">
                    <p class="trend-label">Tendencia de temperatura</p>
                    <p class="trend-value">{{ TREND_VALUE }}</p>
                    <p class="trend-sub">
                        <span>{{ TREND_PERIOD }}</span>
                        <span class="change">{{ TREND_CHANGE }}</span>
                    </p>
                </div>

                <div class="chart-wrapper">
                    <svg fill="none" height="148" preserveAspectRatio="none" viewBox="-3 0 478 150" width="100%" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient gradientUnits="userSpaceOnUse" id="paint0_linear_grad" x1="0" x2="472" y1="0" y2="0">
                                <stop stop-color="#C3AED6"></stop>
                                <stop offset="1" stop-color="#F3D4D4"></stop>
                            </linearGradient>
                            <linearGradient gradientUnits="userSpaceOnUse" id="paint1_linear_grad" x1="0" x2="0" y1="0" y2="150">
                                <stop stop-color="#C3AED6" stop-opacity="0.2"></stop>
                                <stop offset="1" stop-color="#F3D4D4" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                        <path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H0V109Z" fill="url(#paint1_linear_grad)"></path>
                        <path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25" stroke="url(#paint0_linear_grad)" stroke-linecap="round" stroke-width="2"></path>
                    </svg>
                </div>

                <div class="chart-times">
                    <span>12 AM</span>
                    <span>4 AM</span>
                    <span>8 AM</span>
                    <span>12 PM</span>
                    <span>4 PM</span>
                    <span>8 PM</span>
                    <span>Ahora</span>
                </div>
            </div>

            <div class="stat-grid">
                <div class="stat-card">
                    <p>Humedad</p>
                    <p class="stat-value">{{ HUMIDITY }}</p>
                </div>
                <div class="stat-card">
                    <p>Velocidad del viento</p>
                    <p class="stat-value">{{ WIND }}</p>
                </div>
                <div class="stat-card">
                    <p>Indice UV</p>
                    <p class="stat-value">{{ UV_INDEX }}</p>
                </div>
                <div class="stat-card">
                    <p>Presion</p>
                    <p class="stat-value">{{ PRESSURE }}</p>
                </div>
            </div>
        </div>
    </div>

    @extends(footer)
    <script src="views/assets/js/navigation.js"></script>
</body>
</html>
