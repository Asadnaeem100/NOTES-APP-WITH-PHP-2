<?php

include 'db.php';
include 'header.php';

?>

<?php

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $note_title = $_GET['notetitle'];
    $desc = $_GET['notedescription'];

    if(isset($_POST['submit'])){

        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE `inotes` SET `title`='$title',`description`='$description' WHERE `id` = $id";
        $run = mysqli_query($conn, $query);
        if($run){
                echo "<script>alert('The Note has been Edited Successfully.');window.location.href='allnotes.php';</script>";
            }
            else{
                echo "<script>alert('Something went wrong...(');window.location.href='allnotes.php';</script>";
            }
        }
}
else{
    header("location:index.php");
}
?>

<div class="container mt-3">
    <div class="alert" role="alert" style="background-color: #80bf91;">
    <h1 class="text-center">Edit Note</h1>
    <div class="head">
    <form action="#" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title:-</label>
            <input type="text" value="<?php echo $note_title; ?>" name="title" class="form-control" placeholder="Add a Title">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description:-</label>
            <textarea name="description" class="form-control" cols="20" rows="5" placeholder="Add a Description"><?php echo $desc; ?></textarea>
            <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
        </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    </div>
</div>