<?php
include ("../connection.php");
if (isset($_POST["doc_firstname"]))
{
    $doc_firstname = $_POST["doc_firstname"];
    $doc_lastname = $_POST["doc_lastname"];
    $doc_gender = $_POST["doc_gender"];
    $doc_contact = $_POST["doc_contact"];
    $doc_address = $_POST["doc_address"];
    $doc_email = $_POST["doc_email"];
    $doc_pass = $_POST["doc_pass"];
    $doc_city = $_POST["doc_city"];
    $doc_study = $_POST["doc_study"];
    $doc_speciality = $_POST["doc_speciality"];
    $doc_exp = $_POST["doc_exp"];
    $doc_from = $_POST["doc_from"];
    $doc_to = $_POST["doc_to"];

    $insertss = mysqli_query($con, "insert into doctor (  doc_firstname ,  doc_lastname ,  doc_gender ,  doc_contact ,  doc_address ,  doc_email ,  doc_pass ,  doc_city ,  doc_study ,  doc_speciality ,  doc_exp ,  doc_from ,  doc_to ) VALUES ('$doc_firstname' ,  '$doc_lastname' ,  '$doc_gender' ,  '$doc_contact' ,  '$doc_address' ,  '$doc_email' ,  '$doc_pass' ,  '$doc_city' ,  '$doc_study' ,  '$doc_speciality' ,  '$doc_exp',  '$doc_from' ,  '$doc_to')");

    if ($insertss > 0)
    {
        header("Location: ../doctors.php?q=1");
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
