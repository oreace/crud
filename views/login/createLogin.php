<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->

    <!-- Example row of columns -->

    <!--Registration Form -->
    <div id="register" class="row">
        <div class="span9">
            <p>
            <form class="form-horizontal" method="POST" action="<?php echo URL; ?>login/createLogin">

                <fieldset>  

                    <legend>New Login Information</legend>

                    <?php
//                    if (!empty($_SESSION['error'])) {
//                        echo "<p class='error_message'>" . $_SESSION['error'] . "</p>";
//                    }
//                    
                    ?>
                    <div class="control-group">
                        <label class="control-label" for="fname">First Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="fname" name="fname" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="lname">Last Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="lname" name="lname" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="uname">User Name</label>
                        <div class="controls">  
                            <input type="text" class="input-xlarge" id="uname" name="uname"></textarea>  
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="pwd">Password</label>
                        <div class="controls">
                            <input type="password" class="input-xlarge" id="pwd" name="pwd" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="pwd2">Confirm Password</label>
                        <div class="controls">
                            <input type="password" class="input-xlarge" id="pwd2" name="pwd2" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="role">Role</label>
                        <div class="controls">  
                            <select id="role" name="role">  
                                <option value="Guest" selected>Guest</option>
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>  
                            </select>  
                        </div>
                    </div>

                </fieldset>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Submit" class="btn btn-success" />
                    </div>
                </div>
            </form>
            </p>
        </div>
    </div>