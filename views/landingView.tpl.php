@extends(head)
<body>
    <div class="landing-layout">
        <header class="landing-header">
            <span class="material-symbols-outlined">partly_cloudy_day</span>
            <span class="brand">{{ APP_NAME }}</span>
        </header>

        <main class="landing-card">
            <div class="landing-hero">
                <h1 class="landing-title">Descubre el clima en tu ciudad y planifica tus pasos</h1>
                <p class="landing-subtitle">{{ APP_DESCRIPTION }}</p>
                <a class="cta-button" href="?slug=panel">
                    <span>Comenzar</span>
                    <span class="material-symbols-outlined" aria-hidden="true">north_east</span>
                </a>
            </div>
        </main>
    </div>

    @extends(footer)
</body>
</html>
