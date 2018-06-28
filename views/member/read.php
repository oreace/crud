<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->

    <!-- Example row of columns -->

    <!--Registration Form -->
    <div class="row">
        <div class="span9">
            <p>
            <form class="form-horizontal" method="POST" action="<?php echo URL; ?>member">
                <fieldset>  

                    <legend><h2><?php echo $this->singleMember->fname . " " . $this->singleMember->lname . "'s Information"; ?></h2></legend>

                    <div class="rightMargin">
                        <h2>Picture Here</h2>
                    </div>
                    <div class="leftMargin">
                        <input type="hidden" name="id" value="<?php echo $this->singleMember->id; ?>" />

                        <div class="control-group">
                            <label class="control-label" for="fname">First Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="fname" name="fname"
                                       value="<?php echo $this->singleMember->fname; ?>" disabled="" /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="lname">Last Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="lname" name="lname"
                                       value="<?php echo $this->singleMember->lname; ?>" disabled="" /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="phone">Phone Number</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="phone" name="phone"
                                       value="<?php echo $this->singleMember->phone; ?>" disabled=""  /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="email">Email Address</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="email" name="email"
                                       value="<?php echo $this->singleMember->email; ?>" disabled=""  /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="sex">Gender</label>
                            <div class="controls"> 
                                <input type="text" class="input-xlarge" id="sex" name="sex"
                                       value="<?php echo $this->singleMember->sex; ?>" disabled=""  /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="address">Address</label>
                            <div class="controls">  
                                <input type="text" class="input-xlarge" id="address" name="address" rows="3" disabled=""
                                    value= "<?php echo $this->singleMember->address; ?>" />
                            </div>
                        </div>
                    </div>

                </fieldset>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Back to Member Page" class="btn btn-success" />
                    </div>
                </div>
            </form>

        </div>

    </div>

