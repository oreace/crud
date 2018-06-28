<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="leaderboard">
        <h1 class="lesserfont">Logins Page</h1>
        <p>You can search for logins, based on any criteria like first name, 
            last name, phone number.</p>
        <form method="POST" action="<?php echo URL; ?>login" class="form-search">
            <div class="">
                <input class="span8 input-medium search-query" type="text" name="searchfield" size="100" />
                <input type="submit" class="btn" value="Search" />
            </div>
        </form>
        <p><a href="<?php echo URL; ?>login/new_login" class="btn btn-info">Register New Login</a></p>

    </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="span12">
            <p>
            <table class="table table-condensed">
                <?php
                echo "<thead>  
          <tr>  
            <th>Name</th>  
            <th>User Name</th>  
            <th>Role</th>
            <th width='100'>Edit/Delete</th>
          </tr>  
        </thead>  
        <tbody>";
                foreach ($this->loginList as $value) {
                    echo "<tr>";
                    echo "<td>" . $value->fname . " " . $value->lname . "</td>";
                    echo "<td>" . $value->uname . "</td>";
                    echo "<td>" . $value->role . "</td>";
                    
                    echo "<td><a href='" . URL . "login/editLogin/" . $value->id . "' class='btn btn-success btn-small'>Edit</a>&nbsp;
                <a href='" . URL . "login/deleteLogin/" . $value->id . "' class='btn btn-danger btn-small'>Delete</a></td>";
                }
                echo "<tr>";
                echo "</tbody>";
                $_POST = "";
                ?>
            </table>
            </p>
        </div>
        <!--    
            <div class="span3">
              <h2>Login Details</h2>
              <p>You can search for logins, based on any criteria like first name, 
                last name, phone number</p>
            </div>
        -->
    </div>
