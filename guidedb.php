<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'project') or die("Connection Failed:" . mysqli_connect_error());
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $age = $_POST['password'];


        $stmt = $conn->prepare("select * from nameguide where name = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();

        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
        }
        if ($data['password'] === $age) {
            header('location:upfile.php');
        } else {
            echo '<script>alert("Invalid Email or password")</script>';


        }
    }
}

?>
<script>
    window.location.href = "guidel.php";</script>