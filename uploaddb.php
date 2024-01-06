<?php
$filename = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];
$filesize = $_FILES['file']['size'];
$folder = 'images/' . $filename;
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'project');
$query = mysqli_query($con, " insert into images(file) values ('$filename')");

if (move_uploaded_file($tempname, $folder)) {
    echo "file uploaded successfuly";
} else {
    echo "file not uploaded successfuly";
}

?>