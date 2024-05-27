<?php

include 'db.php';
include 'header.php';

?>

<!-- Add a Query to Delete A Note -->

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Query for Delete
    $query = "DELETE FROM `inotes` WHERE `id` = $id";
    $run = mysqli_query($conn, $query);
    if($run){
        echo "<script>alert('Note has been Deleted Successfully');window.location.href='allnotes.php';</script>";
    }
    else{
        echo "<script>alert('SORRY! Something went wrong');windo.location.href='allnotes.php';</script>";
    }
}
else{
    header("location:allnotes.php");
}

?>