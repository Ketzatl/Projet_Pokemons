<div class="container">
    <div class="" id="modalRegisterForm" tabindex="" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="w-50 modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-4">
                        <i class="fas fa-user prefix grey-text mr-3"></i>
                        <label data-error="wrong" data-success="right" for="">Your name</label>
                        <input type="text" id="orangeForm-name" class="form-control validate">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-envelope prefix grey-text mr-3"></i>
                        <label data-error="wrong" data-success="right" for="">Your email</label>
                        <input type="email" id="orangeForm-email" class="form-control validate">
                    </div>
                    <div class="md-form mb-3">
                        <i class="fas fa-lock prefix grey-text mr-3"></i>
                        <label data-error="wrong" data-success="right" for="">Your password</label>
                        <input type="password" id="orangeForm-pass" class="form-control validate">
                    </div>
                    <div>
                        <button type="button" class="btn btn-outline-dark">Inscription</button>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-right">
                    <a class="btn btn-light border-secondary" href="<?= base_url('home/connexion'); ?>">Already have an account ?</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--<div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
            Modal Register Form</a>
    </div>-->
