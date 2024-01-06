<html>

<body>
    <div>
        <?php
        $con = mysqli_connect('localhost', 'root', '');

        mysqli_select_db($con, 'project');

        $res = mysqli_query($con, "select * from images");

        while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <video src="images/<?= $row['file'] ?> " controls>
            </video>
        <?php } ?>

    </div>
</body>

</html>