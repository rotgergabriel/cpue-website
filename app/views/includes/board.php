<?php $idAttr = isset($boardId) ? 'id="' . $boardId . '"' : ''; ?>
<section class="board <?php echo $boardModifier ?>" <?php echo $idAttr; ?>>
    <div class="board__container">
        <figure class="board__content">
            <div class="board__body">
                <img src="<?php echo BASE_URL ?>public/assets/img/board.webp"
                    alt="Miembros del Consiglio Direttivo Nazionale"
                    class="board__img">
            </div>
            <figcaption class="board__text">
                <h2 class="board__text--title">Consiglio Direttivo Nazionale</h2>
                <p class="board__text--description">Da sinistra a destra:</p>
                <h3 class="board__text--names text-uppercase">Victor Bustamante, Jair Pedrozo, Robinson Rodriguez</h3>
                <p class="board__text--roles">(Tesoriere, Presidente - Missionario, Segretario)</p>
            </figcaption>
        </figure>
    </div>
</section>