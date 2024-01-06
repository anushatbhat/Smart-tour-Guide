<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .b {
        height: 30px;
        width: 120px;
        font-size: 40;
        border: none;
        background: none;
        padding: 0;

    }

    h2 {
        color: white;
    }
</style>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"></h2>
            </div>

            <div class="menu">
                <ul>

                    <li>
                        <form action="front.php">
                            <button class="b" style="color:white">
                                <h2> HOME</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="about.php">
                            <button class="b" style="color:white">
                                <h2>ABOUT</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="service.php">
                            <button class="b" style="color:white">
                                <h2> SERVICE</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="guide.php">
                            <button class="b" style="color:white">
                                <h2> GUIDELINES</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="contact.php">
                            <button class="b" style="color:white">
                                <h2> CONTACT</h2>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>



        </div>

        <div class="form">
            <h2>Signin</h2>

            <form action='guidedb.php' class="btnn" method="POST" style="text-align:center;">


                <label for="user">username:</label>
                <input type='text' name="name" required /><br><br>
                <label for="password">password:</label>
                <input type='password' name="password" required /><br><br>

                <input type='submit' name='submit' id="submit" />
            </form>
        </div>

</body>

</html>