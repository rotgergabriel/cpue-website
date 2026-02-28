<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid" style="max-width: 1440px;">

        <a class="navbar-brand m-0" href="<?php echo BASE_URL ?>">
            <img src="<?php echo BASE_URL; ?>/public/assets/img/logo-white.webp" alt="Logo" width="80" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navCPUE" aria-controls="navCPUE" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navCPUE">
            <ul class="navbar-nav fw-semibold mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        La Chiesa
                    </a>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>about#chi-siamo">Chi siamo</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>about#missione">Missione</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>about#visione">Visione</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>about#consiglio-direttivo">Consiglio Direttivo Nazionale</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Congregazioni
                    </a>
                    <ul class="dropdown-menu shadow">

                        <li>
                            <a class="dropdown-item" href="<?php echo BASE_URL ?>proiezione">
                                Opere in Proiezione
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <?php
                        foreach ($cities as $id => $navCity) {
                            if (!empty($navCity['hero']['title'])) { ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo BASE_URL ?>city/<?php echo $id ?>">
                                        <?php echo $navCity['hero']['title'] ?>
                                    </a>
                                </li>
                        <?php }
                        } ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comitati
                    </a>
                    <ul class="dropdown-menu shadow">
                        <?php
                        foreach ($comitati as $id => $navComitati) {
                            if (!empty($navComitati['info']['title'])) { ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo BASE_URL ?>comitato/<?php echo $id ?>">
                                        <?php echo $navComitati['info']['title'] ?>
                                    </a>
                                </li>
                        <?php }
                        } ?>
                    </ul>
                </li>
            </ul>
            <a href="<?php echo BASE_URL; ?>login" class="text-white-50 d-inline-block mx-auto mx-lg-0 opacity-75" title="Admin Access">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px" fill="currentColor">
                    <path d="M 12 2 C 9.2447116 2 7 4.2447116 7 7 L 7 9 L 5.5 9 C 4.1250151 9 3 10.125015 3 11.5 L 3 19.5 C 3 20.874985 4.1250151 22 5.5 22 L 18.5 22 C 19.874985 22 21 20.874985 21 19.5 L 21 11.5 C 21 10.125015 19.874985 9 18.5 9 L 17 9 L 17 7 C 17 4.2447116 14.755288 2 12 2 z M 12 3 C 14.214712 3 16 4.7852884 16 7 L 16 9 L 8 9 L 8 7 C 8 4.7852884 9.7852884 3 12 3 z M 5.5 10 L 7.4199219 10 A 0.50005 0.50005 0 0 0 7.5820312 10 L 16.419922 10 A 0.50005 0.50005 0 0 0 16.582031 10 L 18.5 10 C 19.335015 10 20 10.664985 20 11.5 L 20 19.5 C 20 20.335015 19.335015 21 18.5 21 L 5.5 21 C 4.6649849 21 4 20.335015 4 19.5 L 4 11.5 C 4 10.664985 4.6649849 10 5.5 10 z" />
                </svg>
            </a>
        </div>
</nav>