<?php

include 'header.php';
include 'db.php';
?>

<?php



?>
<!-- Add Notes for  -->

<div class="container mt-4">
  <div class="alert" role="alert" style="background-color: #80bf91;">
    <h1 class="text-center">
      <i>
        <ins>Add a Note</ins>
      </i>
    </h1>
    <div class="head">
      <form action="addanote.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">
            <b>Title:-</b>
          </label>
          <input type="text" name="title" class="form-control" require id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add a Title">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">
            <b>Description:-</b>
          </label>
          <textarea name="description" class="form-control" required cols="20" rows="5" placeholder="Add a Description"></textarea>
          <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</div>
</div>