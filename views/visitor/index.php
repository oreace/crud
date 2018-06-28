<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="leaderboard">
        <h1 class="lesserfont">Visitors Page</h1>
        <p>You can search for visitors, based on any criteria like first name, 
            last name, phone number.</p>
        <form method="POST" action="<?php echo URL; ?>visitor" class="form-search">
            <div class="">
                <input class="span8 input-medium search-query" type="text" name="searchfield" size="100" />
                <input type="submit" class="btn" value="Search" />
            </div>
        </form>
        <p><a href="<?php echo URL; ?>visitor/new_visitor" class="btn btn-info">Register New Visitor</a></p>

    </div>

    <!-- Example row of columns -->
    <?php // Pagination::init(); ?>
    <div class="row">
        <div class="span12">
            <p>
            <table class="table table-condensed">
                <?php
                echo "<thead>  
          <tr>  
            <th>Title</th>            
            <th>Name</th>  
            <th>Home Address</th>
            <th>Country</th>
            <th>Phone</th>  
            <th>Email</th>
            <th width='250'>View/Edit/Delete</th>
          </tr>  
        </thead>  
        <tbody>";
                foreach ($this->visitorList as $value) {
                    echo "<tr>";
                    echo "<td>" . $value->title . "</td>";
                    echo "<td>" . $value->fname . " " . $value->lname . "</td>";
                    echo "<td>" . $value->address . "</td>";
                    echo "<td>" . $value->country . "</td>";
                    echo "<td>" . $value->phone . "</td>";
                    echo "<td>" . $value->email . "</td>";

                    echo "<td><a href='" . URL . "visitor/viewVisitor/" . $value->id . "' class='btn btn-success btn-small'>View</a>&nbsp;
                        <a href='" . URL . "visitor/editVisitor/" . $value->id . "' class='btn btn-success btn-small'>Edit</a>&nbsp;
                            <a href='" . URL . "visitor/upgradeVisitor/" . $value->id . "' class='btn btn-success btn-small'>Upgrade</a>&nbsp;
                <a href='" . URL . "visitor/deleteVisitor/" . $value->id . "' class='btn btn-danger btn-small'>Delete</a></td>";
                }
                echo "<tr>";
                echo "</tbody>";
                $_POST = "";
                ?>
            </table>
            </p>
        </div>
        <!--        <div class="pagination span12">
        <?php // if (Pagination::total_pages() > 1) { ?>
                    <ul>
        <?php // if (Pagination::has_previous_page()) { ?>
                        <li><a href="<?php // echo URL . "visitor/newVisitorList/" . Pagination::previous_page();   ?>">Previous</a></li>
        <?php // } ?>
                        <li><a href="">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
        <?php // } ?>
                </div>-->
    </div>

