<div class="container">
    <!--Registration Form -->
    <div id="register" class="row">
        <div class="span9">
            <p>
            <form class="form-horizontal" method="POST" action="<?php echo URL; ?>member/createMember">

                <fieldset>  

                    <legend>Upgrade to Member</legend>

                    <div class="control-group">
                        <label class="control-label" for="fname">First Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="fname" name="fname" 
								   value="<?php echo $this->singleVisitor->fname; ?>" /><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="lname">Last Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="lname" name="lname" 
								   value="<?php echo $this->singleVisitor->lname; ?>"/><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="phone">Phone Number</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="phone" name="phone" 
								   value="<?php echo $this->singleVisitor->phone; ?>"/><br />
                        </div> 
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Email Address</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="email" name="email" 
								   value="<?php echo $this->singleVisitor->email; ?>"/><br />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="sex">Gender</label>
                        <div class="controls">  
                            <select id="sex" name="sex">  
                                <option value="female">female</option>  
                                <option value="male">male</option>  
                            </select>  
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">  
                            <input type="text" class="input-xlarge" id="address" name="address" 
								   value="<?php echo $this->singleVisitor->address; ?>"/>
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