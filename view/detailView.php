<?php ob_start(); ?>

    <div class="row">
        <div class="col-md-4 offset-md-8">
            <form method="get">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Seasons
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">Season 1</a>
                        <a class="dropdown-item" href="#">Season 2</a>
                    </div>
                </div>
                <div class="form-group has-btn">
                    <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control"
                           placeholder="Rechercher un film ou une série">

                    <button type="submit" class="btn btn-block bg-red">Valider</button>
                </div>
            </form>
        </div>
    </div>

    <div class="media-list">
        <!--<form method="post" action="index.php?media=test">-->
        <?php foreach( $medias as $media ): ?>
            <a class="item" href="index.php?media=<?= $media['title']; ?>">
                <div class="video">
                    <div>
                        <iframe allowfullscreen="" frameborder="0"
                                src="<?= $media['trailer_url']; ?>" >
                        </iframe>
                    </div>
                </div>
                <div class="title"><?= $media['title']; ?></div>
                <div class="summary"><?= $media['short_summary']; ?></div>
                <div class="duration"><?= $media['duration']; ?></div>
            </a>
        <?php endforeach; ?>
        </form>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>