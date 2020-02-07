<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-grey-dark-plus">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?= site_url(); ?>">Pokédex</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item <?php echo (current_url() == site_url("home")) ? "active" : "" ?>">
                    <a class="nav-link" href="<?= site_url('home'); ?>"><i class="fa fa-home"></i> </a>
                </li>

                <li class="nav-item <?php echo (current_url() == site_url("pokemon")) ? "active" : "" ?>">
                    <a class="nav-link" href="<?= site_url('pokemon'); ?>">Pokémons</a>
                </li>

                <li class="nav-item <?php echo (current_url() == site_url("comparateur")) ? "active" : "" ?>">
                    <a class="nav-link" href="<?= site_url('comparateur'); ?>">Comparateur</a>
                </li>

                <li class="nav-item <?php echo (current_url() == site_url("evenement")) ? "active" : "" ?>">
                    <a class="nav-link" href="<?= site_url('evenement'); ?>">Événements</a>
                </li>

                <?php if ($this->logged){ ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-info mr-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administration
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= site_url('administration/pokemon') ?>">Pokémons</a>
                            <a class="dropdown-item" href="<?= site_url('administration/user') ?>">Utilisateurs</a>
                            <a class="dropdown-item" href="<?= site_url('administration/article') ?>">Articles</a>
                            <a class="dropdown-item" href="<?= site_url('administration/signalement') ?>">Signalements</a>

                        </div>
                    </li>
                <?php } ?>


                <?php if ($this->logged){ ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Utilisateur
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="<?= site_url('profil/pokemon/favoris') ?>">Pokémon Favori</a>

                        </div>
                    </li>
                <?php } ?>

            </ul>


                <ul class="navbar-nav">


                    <?php if ($this->logged){ ?>
                    <li class="nav-item <?php echo (current_url() == site_url("profil")) ? "active" : "" ?>">
                        <a class="nav-link" href="<?= site_url('profil'); ?>">Bonjour, <?= $this->appli_user->use_pseudo ?></a>
                    </li>

                    <?php } ?>

                    <li class="nav-item">
                        <?php if($this->logged){ ?>
                            <a class="nav-link" href="<?= site_url('logout'); ?>"><i class="fa fa-sign-out-alt"></i> </a>
                        <?php } else { ?>
                            <a class="nav-link" href="<?= site_url('auth/login'); ?>">Connexion</a>
                        <?php } ?>

                    </li>
                </ul>


            <!--
            <form class="form-inline my-2 my-lg-0">

                <input class="form-control mr-sm-2" type="search" placeholder="Salamèche..." aria-label="Search">
                <button class="btn btn-green my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
            -->
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
        <div class="col-12 pt-5 pb-5">
            <h1 class="text-center text-light"><?= $title ?></h1>
        </div>
    </div>
</div>