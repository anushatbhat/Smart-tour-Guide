<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'project');
$name = $_POST['name'];

$pass = $_POST['password'];


$s = "select *from nameguide where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if ($num == 1) {
    echo " Usename Already Taken";
} else {



    $reg = " insert into nameguide(name,password) values ('$name','$pass')";

    mysqli_query($con, $reg);

}
?>
<script>
    alert(" Registration Successful");
    window.location.href = "about.php";
</script>