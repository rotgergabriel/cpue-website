<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid" style="max-width: 1440px;">

        <a class="navbar-brand m-0" href="#">
            <img src="<?php echo BASE_URL; ?>/public/assets/img/logo-white.webp" alt="Logo" width="80" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navCPUE" aria-controls="navCPUE" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navCPUE">
            <ul class="navbar-nav text-uppercase fw-semibold">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Chi siamo
                    </a>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="#">Missione</a></li>
                        <li><a class="dropdown-item" href="#">Visione</a></li>
                        <li><a class="dropdown-item" href="#">Consiglio Direttivo Nazionale</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Congregazioni
                    </a>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="#">Opere in Proiezione</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Val Rendena</a></li>
                        <li><a class="dropdown-item" href="#">Trento</a></li>
                        <li><a class="dropdown-item" href="#">Milano</a></li>
                        <li><a class="dropdown-item" href="#">Torino</a></li>
                        <li><a class="dropdown-item" href="#">Pordenone</a></li>
                        <li><a class="dropdown-item" href="#">Reggio Emilia</a></li>
                        <li><a class="dropdown-item" href="#">Firenze</a></li>
                        <li><a class="dropdown-item" href="#">Pedaso</a></li>
                        <li><a class="dropdown-item" href="#">Roma</a></li>
                        <li><a class="dropdown-item" href="#">Ostia</a></li>
                        <li><a class="dropdown-item" href="#">Catania</a></li>
                        <li><a class="dropdown-item" href="#">Palermo</a></li>
                    </ul>
                </li>
            </ul>

            <form class="d-flex" role="search">
                <div class="input-group search-group-custom">
                    <input class="form-control bg-transparent text-white border-subtle rounded-pill-start"
                        type="search"
                        placeholder="Ricerca..."
                        aria-label="Search">

                    <button class="btn btn-search-white rounded-pill-end d-flex align-items-center justify-content-center" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>