<?php
include ("../connection.php");
if (isset($_POST["doc_firstname"]))
{
    $doc_id = $_POST["doc_id"];
    $doc_firstname = $_POST["doc_firstname"];
    $doc_lastname = $_POST["doc_lastname"];
    $doc_gender = $_POST["doc_gender"];
    $doc_contact = $_POST["doc_contact"];
    $doc_email = $_POST["doc_email"];
    $doc_pass = $_POST["doc_pass"];
    $doc_age = $_POST["doc_age"];

    $insertss = mysqli_query($con, "insert into patient 
        ( p_firstname ,  p_lastname ,  p_gender ,  p_contact ,  p_email ,  p_pass ,  p_age ) VALUES 
        ('$doc_firstname','$doc_lastname','$doc_gender' ,'$doc_contact' ,'$doc_email','$doc_pass','$doc_age' );");

    if ($insertss > 0)
    {
        header("Location: ../patients.php?q=1");
    }
    else
    {
        echo "<script>alert('error')</script>";
    }
}
else
{
    header("Location: ../index.php");
}
?>
