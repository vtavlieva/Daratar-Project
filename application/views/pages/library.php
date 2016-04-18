<div class="context">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel login-panel panel-default">
                <div class="panel-body">
                    <span id="logInfo">
                        <strong>Welcome, <?php echo $username;?>!</strong>
                        <a href="<?php echo base_url(); ?>index.php/login/logout/logout">Log out</a>
                    </span>
                    <div id="options">
                        <h3 class="col-md-offset-3" style="padding-left: 10px">PLEASE, SELECT AN OPTION</h3>
                        <br>
                        <span id="buttons">
                            <button id="btn2" class="btn btn-primary col-sm-6 col-sm-offset-3" type="button">SEE</button><br><br>
                            <button id="btn1" class="btn btn-primary col-sm-6 col-sm-offset-3" type="button">ADD</button><br><br>
                            <?php if($username=='admin') {?>
                                <button id="btn3" class="btn btn-primary col-sm-6 col-sm-offset-3" type="button">DELETE</button>
                            <?php } ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>