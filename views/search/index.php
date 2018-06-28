<div class="container">
  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="leaderboard">
    <h1>Search</h1>
    <p>
    <form method="POST" action="<?php echo URL; ?>search" class="form-search">
      <div class="">
        <input class="span8 input-medium search-query" type="text" name="searchfield" size="100" />
        <input type="submit" class="btn" value="Search" />
      </div>
    </form>
    </p>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="span12">
      <p>
      <table class="table table-condensed">
        <?php
        if ($_POST) {
          echo "<thead>  
          <tr>  
            <th>#</th>  
            <th>Title</th>  
            <th>Subtitle</th>  
            <th>Author</th>  
            
          </tr>  
        </thead>  
        <tbody>";
          foreach ($this->searchBookList as $value) {
            echo "<tr>";
            echo "<td>" . $value->id . "</td>";
            echo "<td>" . $value->title . "</td>";
            echo "<td>" . $value->subtitle . "</td>";
            echo "<td>" . $value->author . "</td>";
            // echo "<td>" . $value->cat_id . "</td>";
            if (Session::get('role') != 'admin') {
              echo "<td><a href='" . URL . "borrow/register/" . $value->id . "' class='btn btn-success'>Borrow</a></td>";
            }
            echo "<tr>";
          }
        }
        ?>
      </table>
      </p>
    </div>
    <!--    <div class="span3">
          <h2>Do You Know?</h2>
          <p>You can search for books, based on any criteria like it's title, subtitle,
            author or even a description of the category to which the book belongs.</p>
        </div>-->
  </div>

