<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->

    <!-- Example row of columns -->

    <!--Registration Form -->
    <div class="row">
        <div class="span9">
            <p>
            <form class="form-horizontal" method="POST" action="<?php echo URL; ?>visitor/updateVisitor">
                <fieldset>  

                    <legend>Edit Visitor Information</legend>

                    <div class="rightMargin">
                        <h2>Picture goes here</h2>
                        <!--<p><?php // echo $this->singleVisitor->title;        ?></p>-->
                        <?php
                        if ($this->singleVisitor->title == 'miss') {
                            echo "I'm a Miss!";
                        } else if ($this->singleVisitor->title == 'mr') {
                            echo "I'm a Mr!";
                        } else {
                            echo "I'm a Mrs.";
                        }
                        ?>
                    </div>

                    <div class="leftMargin">
                        <input type="hidden" name="id" value="<?php echo $this->singleVisitor->id; ?>" />

                        <div class="control-group">
                            <label class="control-label" for="title">Title</label>
                            <div class="controls">  
                                <?php if ($this->singleVisitor->title == 'miss') { ?>
                                    <select id="title" name="title">
                                        <option name="miss" value="miss" selected >miss</option>
                                        <option name="mrs" value="mrs">Mrs.</option>
                                        <option name="mr" value="mr">Mr.</option>
                                    </select>
                                <?php } else if ($this->singleVisitor->title == 'mrs') { ?>
                                    <select id="title" name="title">
                                        <option name="mrs" value="mrs" selected >Mrs.</option>
                                        <option name="mr" value="mr">Mr.</option>
                                        <option name="miss" value="miss">Miss</option>
                                    </select>
                                <?php } else { ?>
                                    <select id="title" name="title">
                                        <option name="mrs" value="mrs" selected >Mr.</option>
                                        <option name="mr" value="mr">Miss.</option>
                                        <option name="miss" value="miss">Mrs.</option>
                                    </select>
                                <?php } ?>                  
                            </div>
                        </div>

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
                                       value="<?php echo $this->singleVisitor->lname; ?>" /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="sex">Gender</label>
                            <div class="controls">  
                                <select id="sex" name="sex">
                                    <?php if ($this->singleVisitor->sex == 'Female') { ?>
                                        <option name="Female" selected >Female</option>
                                        <option name="Male">Male</option>
                                    <?php } else { ?>
                                        <option name="Male" selected >Male</option>
                                        <option name="Female">Female</option>
                                    <?php } ?>
                                </select>  
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="address">Address</label>
                            <div class="controls">  
                                <input class="input-xlarge" id="address" name="address" rows="3"
                                       value= "<?php echo $this->singleVisitor->address; ?>" />
                                </textarea>  
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="country">Country</label>
                            <div class="controls">  
                                <input type="text" class="input-xlarge" id="country" name="country" rows="3"
                                       value = "<?php echo $this->singleVisitor->country; ?>"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="phone">Phone Number</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="phone" name="phone"
                                       value="<?php echo $this->singleVisitor->phone; ?>" /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="email">Email Address</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="email" name="email"
                                       value="<?php echo $this->singleVisitor->email; ?>" /><br />
                            </div>
                        </div>
                    </div>

                </fieldset>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Save" class="btn btn-success" />
                    </div>
                </div>

            </form>

        </div>

    </div>

