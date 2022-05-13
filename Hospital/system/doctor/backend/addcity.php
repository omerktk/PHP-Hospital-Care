<?php
include ("../connection.php");
if (isset($_POST["city_name"]))
{
   

    $insertss = mysqli_query($con, "insert into city (app_doc_id,app_p_id,app_weak,app_date,app_time) VALUES ('1','1','1','1','1')");

    if ($insertss > 0)
    {
        header("Location: ../cities.php?q=1");
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
