<?php ?>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="login">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" onsubmit="return validate()" action="../../process/user-process/login/user-login.php">
                        <div class="login-form">
                            <p>If you have an account Please Sign in here  </p>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id=username name="userName" placeholder="Email">
                                    <p id="demo1" style="color: darkred;position: absolute"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <p id="demo2" style="color: darkred; position: absolute"></p>
                                </div>
                            </div>

                            <div class="signin">
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h5 class="no-reg">If you have no account Register here </h5>
                    <div class="reg">
                        <button type="button" class="btn btn-primary mr-auto">Register</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
