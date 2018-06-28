<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="leaderboard">
        <h1>Members Page</h1>

    </div>

    <!-- Example row of columns -->
    <!--Registration Form -->
    <div class="row">
        <div class="span9">
            <p><form class="form-horizontal" method="POST" action="<?php echo URL; ?>member/createMember">
                <fieldset>  

                    <legend>New Member Information</legend>

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
                            <textarea class="input-xlarge" id="address" name="address" rows="3"></textarea>  
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
        <div class="span3">
            <h2>New Member</h2>
            <p>You can search for members, based on any criteria like first name, 
                last name, phone number</p>
        </div>
    </div>

