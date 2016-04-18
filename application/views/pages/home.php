<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel  login-panel panel-default">
            <div class="panel-heading">
                <div class="col-xs-8">
                    <a class="active" id="login-form-link">Login</a>
                </div>
                <div class="col-xs-4">
                    <a style="padding-left:40px;" id="register-form-link" >Register</a>
                </div>
                <hr>
            </div>
            <div class="panel-body">
                <div id="login-form">
                    <div class="form-group">
                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                <span style="color:red; text-align: center; " id="user-result"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <form id="reg-form" style="display:none;">
                    <div class="form-group">
                        <input id="name" class="form-control" type="text" placeholder="First name" name="name"/>
                    </div>
                    <div class="form-group surname">
                        <input id="surname" class="form-control" type="text" placeholder="Second name" name="surname"/>
                    </div>
                    <div class="form-group">
                        <input id="family" class="form-control" type="text" placeholder="Family name" name="family"/>
                    </div>
                    <div class="form-group">
                        <input id="email" class="form-control" type="text" placeholder="Email" name="email"/>
                    </div>
                    <div class="form-group">
                        <input id="username" class="form-control" type="text" placeholder="Username" name="usern"/>
                    </div>
                    <div class="form-group">
                        <input id="pass" class="form-control" type="password" placeholder="Password" name="password"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Re-type password" name="password2"/>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="register-submit" id="register-submit" class="form-control btn btn-register" value="Register Now">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
           
