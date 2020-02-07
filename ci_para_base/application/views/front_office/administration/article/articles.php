<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="text-center">
                <a href="<?php echo site_url("administration/article/add") ?>" class="btn btn-success mb-2 text-center"><i class="fa fa-plus"></i> Ajouter un article</a>
            </div>
            <table class="table table-hover table-dark text-center">
                <tbody>
                <?php foreach ($articles as $article) { ?>
                    <div class="card mb-2" >
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= htmlspecialchars($article->article_name)  ?></h5>
                            <p class="font-italic">Créé le
                                <time datetime="à compléter ici pour référencement (format exemple -> 2010-11-13T20:00+00:00) : http://www.oujood.com/balises/HTML-balise-time.php"><?= htmlspecialchars($article->created_at) ?></time>
                            </p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn btn-gold" href=<?= base_url('administration/article/edit/' . $article->id ) ?>><i class="fa fa-cog mr-1"></i>Modifier</a>
                            <a class="btn btn-danger" href=<?= base_url('administration/article/delete/' . $article->id ) ?>><i class="fa fa-trash mr-1"></i>Suprimer</a>
                        </div>
                    </div>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>