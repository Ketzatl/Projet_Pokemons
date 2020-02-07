<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-4 createArticle">
            <form class="form-article">
                <img class="mb-4 img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1280px-International_Pok%C3%A9mon_logo.svg.png" alt="">
                <div class="form-group">
                    <label for="articleName" class="sr-only">Title</label>
                    <input type="text" id="articleName" name="articleName" class="form-control mb-2" placeholder="Title" required autofocus>
                    <p class="field-error" data-field="articleName"></p>
                    <label for="articleContent" class="sr-only">Content</label>
                    <textarea id="articleContent" name="articleContent" class="form-control" aria-label="With textarea" placeholder="Content" style="height: 15vw;"></textarea>
                    <p class="field-error" data-field="articleContent"></p>
                </div>
                <button class="btn btn-lg btn-gold btn-block mt-4 btn-createArticle" type="button">Create article</button>
            </form>
        </div>
    </div>
</div>