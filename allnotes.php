<?php

include 'header.php';
include 'db.php';

?>

<div class="container mt-4">
    <h1 class="text-center" style="text-decoration: underline;"><b><i>Notes List</i></b></h1>
    <div class="head">
        <!-- Table for Notes -->
        <table class="table text-center table-bordered mt-4 mb-3" style="border: 2px solid black; background-color: #94d695;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col"><b>Title</b></th>
                        <th scope="col"><b>Description</b></th>
                        <th scope="col"><b>CRUD</b></th>
                    </tr>
                </thead>
                <?php

                $query = "SELECT * FROM `inotes`";
                $run = mysqli_query($conn, $query);
                if($run){
                    $id = 0;
                    while ($row = mysqli_fetch_assoc($run)) {
                        $id = $id + 1;
                        // echo $row['title'];

                        ?>
            <tbody>
                    <tr>
                        <th scope="row"><?php echo $id; ?></th>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><a href="editnote.php?id=<?php echo $row['id']; ?>&notetitle=<?php echo $row['title']; ?> &notedescription=<?php echo $row['description']; ?>" class="btn btn-primary">Edit</a> 
                        &nbsp; 
                        <a href="deletenote.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
            </tbody>
            <?php
                }
            }
        ?>
        </table>
    </div>
</div>