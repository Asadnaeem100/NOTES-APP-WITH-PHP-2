<?php

include 'header.php';
include 'db.php';

?>

<!-- Add a Note -->

<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO `inotes`(`title`, `description`) VALUES ('$title','$description')";
    $run = mysqli_query($conn, $query);
    if($run){
        echo "<script>alert('Note Has been Added SuccessFully');window.location.href='allnotes.php';</script>";
    }
    else{
        echo "Something Went Wrong Please try again later.";
    }
}
?>