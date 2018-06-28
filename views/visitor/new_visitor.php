<div class="container">
<!--Registration Form -->
    <div id="register" class="row">
        <div class="span9">
            <p>
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo URL; ?>visitor/createVisitor">

                <fieldset>  

                    <legend>New Visitor Information</legend>

                    <?php
//                    if (!empty($_SESSION['error'])) {
//                        echo "<p class='error_message'>" . $_SESSION['error'] . "</p>";
//                    }
//                    ?>
                    
                    <div class="control-group">
                        <label class="control-label" for="file">Upload Picture</label>
                        <div class="controls">
                            <input type="hidden" class="input-xlarge" name="MAX_FILE_SIZE" value="1000000" /><br />
                            <input type="file" class="input-xlarge" id="file" name="file" /><br />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="title">Title</label>
                        <div class="controls">  
                            <select id="title" name="title[]">  
                                <option name="miss" selected>Miss</option>
                                <option name="mrs">Mrs.</option>
                                <option name="mr">Mr.</option>  
                            </select>  
                        </div>
                    </div>

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
                        <label class="control-label" for="sex">Gender</label>
                        <div class="controls">  
                            <select id="sex" name="sex[]">  
                                <option value="Female">Female</option>  
                                <option value="Male">Male</option>  
                            </select>  
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">  
                            <textarea class="input-xlarge" id="address" name="address" rows="3"></textarea>  
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="country">Country</label>
                        <div class="controls">  
                            <input type="text" class="input-xlarge" id="country" name="country"></textarea>  
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="phone">Phone Number</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="phone" name="phone" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Email Address</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="email" name="email" /><br />
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