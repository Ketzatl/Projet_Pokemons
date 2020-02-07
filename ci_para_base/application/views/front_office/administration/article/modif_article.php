<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-4 createArticle">
            <form class="form-article">
                <input type="hidden" name="id" class="form-control mb-2" value="<?= $article->id ?>">
                <img class="mb-4 img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1280px-International_Pok%C3%A9mon_logo.svg.png" alt="">

                <div class="form-group">
                    <label for="articleUpdateName" class="sr-only">Title</label>
                    <input type="text" id="articleUpdateName" name="articleUpdateName" class="form-control mb-2" placeholder="Title" value="<?= $article->article_name ?>" required autofocus>
                    <p class="field-error" data-field="articleUpdateName"></p>
                    <label for="articleUpdateContent" class="sr-only">Content</label>
                    <textarea id="articleUpdateContent" name="articleUpdateContent" class="form-control"  aria-label="With textarea" placeholder="Content" style="height: 15vw;"><?= $article->article_content ?></textarea>
                    <p class="field-error" data-field="articleUpdateContent" ></p>
                </div>
                <button class="btn btn-lg btn-gold btn-block mt-4 btn-updateArticle" type="button">Mofifier l'article</button>
            </form>
        </div>
    </div>
</div>