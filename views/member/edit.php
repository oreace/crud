<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->

    <!-- Example row of columns -->

    <!--Registration Form -->
    <div class="row">
        <div class="span9">
            <p>
            <form class="form-horizontal" method="POST" action="<?php echo URL; ?>member/updateMember">
                <fieldset>  

                    <legend>Edit Member Information</legend>

                    <input type="hidden" name="id" value="<?php echo $this->singleMember->id; ?>" />

                    <div class="control-group">
                        <label class="control-label" for="fname">First Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="fname" name="fname"
                                   value="<?php echo $this->singleMember->fname; ?>" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="lname">Last Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="lname" name="lname"
                                   value="<?php echo $this->singleMember->lname; ?>" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="phone">Phone Number</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="phone" name="phone"
                                   value="<?php echo $this->singleMember->phone; ?>" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Email Address</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="email" name="email"
                                   value="<?php echo $this->singleMember->email; ?>" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="sex">Gender</label>
                        <div class="controls">  
                            <select id="sex" name="sex">
                                <?php if ($this->singleMember->sex == 'female') { ?>
                                    <option name="male" selected >male</option>
                                    <option name="female">female</option>  
                                <?php } else { ?>
                                    <option name="female" selected >female</option>  
                                    <option name="male">male</option>
                                <?php } ?>
                            </select>  
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">  
                            <input type="text" class="input-xlarge" id="address" name="address" rows="3"
                                   value= "<?php echo $this->singleMember->address; ?>" />  
                        </div>
                    </div>

                </fieldset>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Save" class="btn btn-success" />
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <a href="<?php echo URL; ?>member" class="btn btn-success btn-small">Back</a>
                    </div>
                </div>
            </form>
            </p>
        </div>
        <div class="span3">
            <h2>Edit Member</h2>
            <p>You can edit a member, and save it</p>
        </div>
    </div>

