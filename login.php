<?php
$db = mysqli_connect("localhost", "root", "", "mypersonal");
mysqli_query($db, "SET time_zone = '+3:30'");
mysqli_query($db, "SET CHARACTER SET 'utf8'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login/Signup Form</title>
    <link rel="stylesheet" href="Css/all.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container center">
        <section id="login">
            <div class="form-box login">
                <?php
                $ok = false;
                $error = "";
                if (isset($_GET["user"])) {
                    $user = $_GET["user"];
                    $pass = $_GET["pass"];
                    $sql = mysqli_query($db, "select*from user where Username='$user'and Password='$pass'");
                    if ($row = mysqli_fetch_all($sql)) {
                    }
                }
                ?>
                <form action="" method="post">
                    <h1 id="color">ورود</h1>
                    <div class="input-box">
                        <input type="text" id="name" name="user" placeholder="نام کاربری" required />
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" id="pass" name="pass" placeholder="رمزعبور" required />
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="forgot-link">
                        <a href="#">فراموشی رمز عبور؟</a>
                    </div>
                    <button type="submit" class="btn" onclick="send()" id="btn">ورود</button>
                </form>
            </div>

            <div class="form-box register">
                <?php
                $error = "";
                $ok = false;
                if (isset($_POST["Username"])) {
                    $Username = $_POST["Username"];
                    $Email = $_POST["Email"];
                    $Password = $_POST["Password"];
                    if (empty($Username)) {
                        $error = "نام کاربری خود را واردکنید.";
                        $ok = false;
                    }
                    if (empty($Email)) {
                        $error = "ایمیل  خود را واردکنید.";
                        $ok = false;
                    }
                    if (empty($Password)) {
                        $error = " رمز خود را واردکنید.";
                        $ok = false;
                    }
                    if ($error == "") {
                        $ok = true;
                    }
                    if ($ok == true) {
                        $insertBloge = mysqli_query($db, "INSERT INTO user(Username,Email,Password)VALUES('$Username',' $Email','$Password')");
                        echo '<meta http-equiv="refresh" content="2; url=paneladmin.php"> ';
                    }
                }

                ?>
                <form action="#" method="post">
                    <h1 id="color">ثبت نام</h1>
                    <div class="input-box">
                        <input type="text" placeholder="نام کاربری" required name="Username" />
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="ایمیل" name="Email" required />
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="رمزعبور" name="Password" required />
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <button type="submit" class="btn">ثبت نام</button>
                </form>
            </div>

            <div class="toggle-box">
                <div class="toggle-panel toggle-left">
                    <h1>سلام, خوش آمدید!</h1>
                    <p>آیا شما اکانت ندارید؟</p>
                    <button class="btn register-btn">ثبت نام</button>
                </div>

                <div class="toggle-panel toggle-right">
                    <h1>خوش برگشتید!</h1>
                    <p>آیا شما اکانت دارید؟</p>
                    <button class="btn login-btn">ورود</button>
                </div>
            </div>
        </section>
    </div>
    <?php
    if ($ok == true) {
        echo '<div Id="error">ورود با موفقیت انجام شد.</div>';
    }
    ?>
    <script src="Javascript/login.js"></script>
    <script src="Javascript/ajax.js"></script>
</body>

</html>