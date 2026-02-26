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
                            <a class="dropdown-item" href="<?= BASE_URL ?>proiezione">
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
            <div class="d-none d-lg-block" style="width: 80px;"></div>
        </div>
    </div>
</nav>