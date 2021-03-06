<?php
include_once './incio_plantilla.php';
include_once './menu_navegacion.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="page-header">
                <div class="alert alert-info" role="alert">
                    <h4>This demo shows how to integrate JQuery-validation and the Bootstrap framework.</h4>
                    <ul>
                        <li><a href="https://getbootstrap.com/" class="alert-link">Bootstrap home project</a>.</li>
                    </ul>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Using feedback icons</h3>
                </div>
                <div class="panel-body">
                    <form id="FORMULARIO_VALIDADO" method="post" class="form-horizontal" action="">///////////////////////////////////////
                        <div class="form-group">

                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="firstname1" name="firstname1" placeholder="First name" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="username1">Username</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="username1" name="username1" placeholder="Username" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="email1">Email</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="email1" name="email1" placeholder="Email" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="password1">Password</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="confirm_password1">Confirm password</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" id="confirm_password1" name="confirm_password1" placeholder="Confirm password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-5 col-sm-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="agree1" name="agree1" value="agree" />Please agree to our policy
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once './fin_plantilla.php';
?>
