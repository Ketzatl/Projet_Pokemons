<div class="container">
    <div class="row justify-content-center text-center">

        <div class="col-4 login">
            <form id="form-signin">
                <img class="mb-4 img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1280px-International_Pok%C3%A9mon_logo.svg.png" alt="">

                <p class="field-error" data-field="error_general"></p>

                <label for="loginPseudo" class="sr-only">Pseudo</label>
                <input type="text" id="loginPseudo" name="loginPseudo" class="form-control" placeholder="Pseudo" required autofocus>
                <p class="field-error mb-2" data-field="loginPseudo"></p>
                <label for="loginPassword" class="sr-only">Mot de Passe</label>
                <input type="password" id="loginPassword" name="loginPassword" class="form-control" placeholder="Mot de Passe" required>
                <p class="field-error mb-2" data-field="loginPassword"></p>
                <button class="btn btn-lg btn-gold btn-block mt-4" type="submit">Connexion</button>
                <p class="mt-5 mb-3 text-light">&copy; Poké Academy <img src="https://i.pinimg.com/originals/62/94/6e/62946e7ca82fa5dcd5f3e38d1d09c2f1.png" height="16" alt=""> 2020 </p>

            </form>
        </div>

        <div class="col-4 register" style="display: none">
            <form id="form-signup">
                <img class="mb-4 img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1280px-International_Pok%C3%A9mon_logo.svg.png" alt="">
                <h1 class="h3 mb-3 font-weight-normal">Formulaire d'inscription</h1>
                <div class="form-group">
                    <label for="registerPseudo" class="sr-only">Pseudo</label>
                    <input type="text" id="registerPseudo" name="registerPseudo" class="form-control mb-2" placeholder="Pseudo" required autofocus>
                    <p class="field-error" data-field="registerPseudo"></p>
                    <label for="registerEmail" class="sr-only">Email</label>
                    <input type="email" id="registerEmail" name="registerEmail" class="form-control mb-2" placeholder="Email" required autofocus>
                    <p class="field-error" data-field="registerEmail"></p>
                    <label for="registerPassword" class="sr-only">Mot de Passe</label>
                    <input type="password" id="registerPassword" name="registerPassword" class="form-control mb-2" placeholder="Mot de Passe" required>
                    <p class="field-error" data-field="registerPassword"></p>
                    <label for="registerPasswordConfirm" class="sr-only">Confirmation</label>
                    <input type="password" id="registerPasswordConfirm" name="registerPasswordConfirm" class="form-control" placeholder="Confirmation" required>
                    <p class="field-error" data-field="registerPasswordConfirm"></p>
                </div>

                <button class="btn btn-lg btn-gold btn-block mt-4" type="submit">Inscription</button>
                <p class="mt-5 mb-3 text-light">&copy; Poké Academy <img src="https://i.pinimg.com/originals/62/94/6e/62946e7ca82fa5dcd5f3e38d1d09c2f1.png" height="16" alt=""> 2020 </p>
            </form>
        </div>
    </div>

    <div class="row justify-content-center text-center">
        <div class="col-4">
            <a class="links switch text-light" href="#">S'inscrire</a>
        </div>
    </div>
</div>