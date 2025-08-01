<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top px-4 py-3 shadow-sm" role="navigation" aria-label="Main navigation">
  <div class="container-fluid">
    
    <!-- Brand / Logo -->
    <a class="navbar-brand" href="/" title="AISC Madrid - Inicio">
      <img src="images/logos/SVG/navbar - AISC Madrid logo and letters.svg" alt="Logo de AISC Madrid" style="width: 160px;">
    </a>

    <!-- Toggler button for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation links -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">

        <!-- Team Section -->
        <li class="nav-item">
          <a class="nav-link" href="#team" data-en="Team" data-es="Equipo" title="Conoce al equipo de AISC Madrid">Equipo</a>
        </li>

        <!-- Events Section -->
        <li class="nav-item">
          <a class="nav-link" href="#events" data-en="Events" data-es="Eventos" title="Próximos eventos y talleres de inteligencia artificial">Eventos</a>
        </li>

        <!-- Newsletter or Updates Section -->
        <li class="nav-item">
          <a class="nav-link" href="#get-involved" data-en="Don't miss a thing" data-es="Mantente al tanto" title="Suscríbete para no perderte nada">Mantente al tanto</a>
        </li>

        <!-- Log In Button -->
        <li class="nav-item">
          <a class="btn btn-custom my-2 my-lg-0 ms-lg-3" href="/login" data-en="Log In" data-es="Inicia Sesión" role="button" title="Inicia sesión o regístrate">Inicia Sesión</a>
        </li>

        <!-- Language Selector -->
        <li class="nav-item dropdown">
          <button class="btn btn-custom dropdown-toggle py-1 mx-2 rounded-pill shadow-sm"
            type="button"
            id="languageDropdown"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            aria-label="Cambiar idioma">
            ES
          </button>
          <ul id="language-dropdown" class="dropdown-menu" aria-labelledby="languageDropdown" style="min-width: auto !important; left:-10px;">
            <li>
              <a class="dropdown-item language-option" href="?lang=en" data-lang="en" lang="en" hreflang="en" title="Switch to English">English</a>
            </li>
            <li>
              <a class="dropdown-item language-option" href="?lang=es" data-lang="es" lang="es" hreflang="es" title="Cambiar a español">Español</a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
