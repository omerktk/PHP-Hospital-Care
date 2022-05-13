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
   

    $insertss = mysqli_query($con, "update patient set 
        p_firstname = '$doc_firstname',  
        p_lastname = '$doc_lastname',  
        p_gender = '$doc_gender',  
        p_contact = '$doc_contact', 
        p_email = '$doc_email',  
        p_pass = '$doc_pass' 
        where 
        patient.p_id = $doc_id");

    if ($insertss > 0)
    {
        header("Location: ../patients.php?w=1&&did=$doc_id");
    }
    else
    {
        echo "<script>alert('error $doc_firstname $doc_lastname $doc_gender $doc_contact $doc_email $doc_pass')</script>";
    }
}
else
{
    header("Location: ../index.php");
}
?>

