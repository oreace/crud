<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="leaderboard">
        <h1 class="lesserfont">Members Page</h1>
        <p>You can search for members, based on any criteria like first name, 
            last name, phone number</p>
        <form method="POST" action="<?php echo URL; ?>member" class="form-search">
            <div class="">
                <input class="span8 input-medium search-query" type="text" name="searchfield" size="100" />
                <input type="submit" class="btn" value="Search" />
            </div>
        </form>
        </p>
        <p><a href="<?php echo URL; ?>member/new_member" class="btn btn-info">Register New Member</a></p>

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
            <th>Phone</th>  
            <th>Email</th>  
            <th>Home Address</th>
            <th width='150'>View/Edit/Delete</th>
          </tr>  
        </thead>  
        <tbody>";
                foreach ($this->memberList as $value) {
                    echo "<tr>";
                    echo "<td>" . $value->fname . " " . $value->lname . "</td>";
                    echo "<td>" . $value->phone . "</td>";
                    echo "<td>" . $value->email . "</td>";
                    echo "<td>" . $value->address . "</td>";


                    echo "<td><a href='" . URL . "member/viewMember/" . $value->id . "' class='btn btn-success btn-small'>View</a>&nbsp;
                        <a href='" . URL . "member/editMember/" . $value->id . "' class='btn btn-success btn-small'>Edit</a>&nbsp;
                <a href='" . URL . "member/deleteMember/" . $value->id . "' class='btn btn-danger btn-small'>Delete</a></td>";
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
              <h2>Member Details</h2>
              <p>You can search for members, based on any criteria like first name, 
                last name, phone number</p>
            </div>
        -->
    </div>

