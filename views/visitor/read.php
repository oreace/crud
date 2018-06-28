<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->

    <!-- Example row of columns -->

    <!--Registration Form -->
    <div class="row">
        <div class="span9">
            <p>
            <form class="form-horizontal" method="POST" action="<?php echo URL; ?>visitor">
                <fieldset>  

                    <legend><h2><?php echo $this->singleVisitor->fname . " " . $this->singleVisitor->lname . "'s Information"; ?></h2></legend>

                    <div class="rightMargin">
                        <h2>Picture goes here</h2>
                    </div>

                    <div class="leftMargin">
                        <input type="hidden" name="id" value="<?php echo $this->singleVisitor->id; ?>" />

                        <?php 
//                        //if (isset($this->singleVisitor->title)){
//                            foreach ($this->singleVisitor->title as $Title){
//                                echo "<label class=\"control-label\" for=\"title\">Title</label>";
//                                echo "<div class=\"controls\">
//                                    <input type=\"text\" class=\"input-xlarge\" id=\"title\" name=\"title\"
//                                       value= \"" . $Title . "\" disabled=\"\">
//                            </div>";
//                                //echo "<div class=\"control-group\">" .  $Title . "</div>";
//                            }
//                        //}
                        ?>
                        
                        <div class="control-group">
                            <label class="control-label" for="title">Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="title" name="title"
                                       value= "<?php echo $this->singleVisitor->title; ?>" disabled="">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="fname">First Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="fname" name="fname"
                                       value="<?php echo $this->singleVisitor->fname; ?>" disabled="" /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="lname">Last Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="lname" name="lname"
                                       value="<?php echo $this->singleVisitor->lname; ?>" disabled="" /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="sex">Gender</label>
                            <div class="controls">  
                                <input type="text" class="input-xlarge" id="sex" name="sex"
                                       value="<?php echo $this->singleVisitor->sex; ?>" disabled="" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="address">Address</label>
                            <div class="controls">  
                                <input type="text" class="input-xlarge" id="address" name="address" rows="3"
                                       value="<?php echo $this->singleVisitor->address; ?>" disabled="" />
                                </textarea>  
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="country">Country</label>
                            <div class="controls">  
                                <input type="text" class="input-xlarge" id="country" name="country" rows="3"
                                       value = "<?php echo $this->singleVisitor->country; ?>" disabled=""/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="phone">Phone Number</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="phone" name="phone"
                                       value="<?php echo $this->singleVisitor->phone; ?>" disabled="" /><br />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="email">Email Address</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="email" name="email"
                                       value="<?php echo $this->singleVisitor->email; ?>" disabled="" /><br />
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Back to Visitor Page" class="btn btn-success" />
                    </div>
                </div>

            </form>
            </p>
        </div>

    </div>

