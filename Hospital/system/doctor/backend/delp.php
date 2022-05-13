<?php
include ("../connection.php");
if (isset($_GET['delid']))
   {
    $doc_id = $_GET["delid"];

    $insertss = mysqli_query($con, "DELETE FROM patient WHERE patient.p_id = $doc_id");

    if ($insertss > 0)
    {
        header("Location: ../patients.php?e=1");
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