<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="front.css">
</head>
<style>
    .b {
        height: 40px;
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
                            <button class="b" style="color:black">
                                <h2> HOME</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="about.php">
                            <button class="b" style="color:black">
                                <h2>ABOUT</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="service.php">
                            <button class="b" style="color:black">
                                <h2> SERVICE</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="guide.php">
                            <button class="b" style="color:black">
                                <h2> GUIDELINES</h2>
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="contact.php">
                            <button class="b" style="color:black">
                                <h2> CONTACT</h2>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>



        </div>

        <div class="form">
            <h2>Welcome</h2>
            <form action="guidee.php">
                <button class="btnn"><a href="#">Guide Login</a></button>
            </form>
            <form action="guides.php">
                <button class="btnn"><a href="#">Guide Signin</a></button>
            </form>
            <form action="userl.php">
                <button class="btnn"><a href="#">User Login</a></button>
            </form>
            <form action="users.php">
                <button class="btnn"><a href="#">User Signin</a></button>
            </form>
        </div>

</body>

</html>