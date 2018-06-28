<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->

    <!-- Example row of columns -->

    <!--Registration Form -->
    <div class="row">
        <div class="span9">
            <p>
            <form class="form-horizontal" method="POST" action="<?php echo URL; ?>login/updateLogin">
                <fieldset>  

                    <legend>Edit Login Information</legend>

                    <input type="hidden" name="id" value="<?php echo $this->singleLogin->id; ?>" />

                    <div class="control-group">
                        <label class="control-label" for="fname">First Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="fname" name="fname"
                                   value="<?php echo $this->singleLogin->fname; ?>" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="lname">Last Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="lname" name="lname"
                                   value="<?php echo $this->singleLogin->lname; ?>" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="uname">User Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="uname" name="uname"
                                   value="<?php echo $this->singleLogin->uname; ?>" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="pwd">Password</label>
                        <div class="controls">
                            <input type="password" class="input-xlarge" id="pwd" name="pwd"
                                   value="<?php echo $this->singleLogin->pwd; ?>" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="pwd2">Confirm Password</label>
                        <div class="controls">
                            <input type="password" class="input-xlarge" id="pwd2" name="pwd2"
                                   value="<?php echo $this->singleLogin->pwd; ?>" /><br />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="role">Title</label>
                        <div class="controls">  
                            <select id="role" name="role">
                                <?php if ($this->singleLogin->title == 'Guest') { ?>
                                    <option name="Guest" selected >Guest</option>
                                    <option name="User">User</option>
                                    <option name="Admin">Admin</option>
                                <?php } else if ($this->singleLogin->title == 'User') { ?>
                                    <option name="Guest">Guest</option>
                                    <option name="User" selected >User</option>
                                    <option name="Admin">Admin</option>
                                <?php } else { ?>
                                    <option name="Guest">Guest</option>
                                    <option name="User">User</option>
                                    <option name="Admin" selected >Admin</option>
                                <?php } ?>
                            </select>  
                        </div>
                    </div>

                </fieldset>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Save" class="btn btn-success" />
                    </div>
                </div>
            </form>
            </p>
        </div>
        <div class="span3">
            <h2>Edit Login</h2>
            <p>You can edit a login, and save it</p>
        </div>
    </div>

