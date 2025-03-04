<div class="container">
    <div class="row">
        <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form class="" action="/register" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" value="<?=set_value('firstname')?>">
                            </div> 
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" value="<?=set_value('lastname')?>">
                            </div> 
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control" name="email" id="email" value="<?=set_value('email')?>">
                            </div> 
                        </div>
                    </div>
                    <div class="container-fluid pt-3 pb-3 px-5 col-12 col-sm-6"><h5>Occupation</h5>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?=set_value('type')?>" >
                            <label class="form-check-label" for="flexRadioDefault1">Doctor</label>
                        </div>
                        <div class="form-check pb-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?=set_value('type')?>">
                            <label class="form-check-label" for="flexRadioDefault1">Nurse</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?=set_value('type')?>">
                            <label class="form-check-label" for="flexRadioDefault1">Administrator</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password_confirm"> Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
                            </div>
                        </div>
                    </div>

                    <?php if (isset($validation)): ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?=$validation->listErrors() ?>
                            </div>
                        </div>
                        <?php endif; ?>
                   <div class="row">
                    <div class="col-12 col-sm-4 mt-2">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <div class="col-12 col-sm-8 text-right mt-2">
                        <a href="/">Already have an account?</a>
                    </div>

                   </div>
                </form>
            </div>
        </div>
    </div>
</div>