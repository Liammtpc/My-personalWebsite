<?php
$db = mysqli_connect("localhost", "root", "", "mypersonal");
mysqli_query($db, "SET time_zone = '+3:30'");
mysqli_query($db, "SET CHARACTER SET 'utf8'");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/all.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Liam</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="menuBar">
                <span id="xMark" class="fa-regular fa-circle-xmark"></span>
                <a href="index.html" id="logo">LOGO</a>
                <nav>
                    <ul id="gapsUl">
                        <li><a href="">خانه</a></li>
                        <li><a href="">درباره من</a></li>
                        <li><a href="">خدمات</a></li>
                        <li><a href="">مهارت من</a></li>
                        <li><a href="">نمونه کارها</a></li>
                        <li><a href="">ارتباط با ما</a></li>
                        <li><a href="">مقالات</a></li>
                    </ul>
                </nav>
            </div>
            <span id="bars" class="fa-solid fa-bars"></span>
            <div class="searchBoxAndLogin">
                <a href=""><span id="searchBox" class="fa-solid fa-magnifying-glass"></span></a>
                <a href=""><span class="fa-solid fa-user"></span></a>
            </div>
            <div class="searchBox">
                <span id="xMarks" class="fa-regular fa-circle-xmark"></span>
                <form action="" method="post">
                    <input type="search" placeholder="جستجو ..." />
                    <button class="fa-solid fa-magnifying-glass"></button>
                </form>
            </div>
        </header>
        <main>
            <section>
                <div class="searchBoxBloge">
                    <?php
                    if (isset($_POST["Title"])) {
                        $search = $_POST["Title"];
                        $_SESSION["Tilte"] = $search;
                        header("Location:search.php");
                    }
                    ?>
                    <form action="" method="post">
                        <input type="text" name="Title" placeholder="جستجو مقاله...">
                        <button><a href=""><span id="searchBox" class="fa-solid fa-magnifying-glass">جستجو</span></a></button>
                    </form>
                </div>
            </section>
            <section id="category">
                <h3>دسته بندی مقالات</h3>
                <div class="allCategory">
                    <a href=""><i class="fa-solid fa-pen-nib">گرافیکی</i></a>
                    <a href="bloge.php?category=Frontend"><i class="fa-brands fa-html5">فرانت اند</i></a>
                    <a href="bloge.php?category=Backend"><i class="fa-solid fa-database">بک اند</i></a>
                    <a href="bloge.php?category=Ai"><i class="fa-solid fa-hexagon-nodes">هوش مصنوعی</i></a>
                    <a href="bloge.php?category=Robot"><i class="fa-solid fa-robot">رباتیک</i></a>
                    <a href="bloge.php?category=Technologe"><i class="fa-solid fa-microchip">تکنولوژی</i></a>
                </div>
            </section>
            <section>
                <div class="bolges page">
                    <div class="sectionBloges warp">
                        <?php
                        $showBloge = mysqli_query($db, "select*from bloge where 1");
                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }
                        $results_per_page = 6;
                        $page_first_result = ($page - 1) * $results_per_page;
                        $number_of_result = mysqli_num_rows($showBloge);
                        $number_of_page = ceil($number_of_result / $results_per_page);
                        $query = mysqli_query($db, "SELECT *FROM gallery LIMIT   $page_first_result , $results_per_page");
                        if (isset($_GET["category"])) {
                            $Category = $_GET["category"];
                            $showBloge1 = mysqli_query($db, "select*from bloge where category='$Category'");
                            while ($rowShowBloge = mysqli_fetch_array($showBloge1)) {
                                echo '
                                <div class="bloge">
                                <img src="' . $rowShowBloge['Picture'] . '" alt="">
                                <strong>' . $rowShowBloge['Title'] . '</strong>
                                <a href="' . $rowShowBloge['Id'] . '">اطلاعات بیشتر</a>
                                </div>
                            ';
                            }
                        } else {
                            $showBloge = mysqli_query($db, "select*from bloge where 1");
                            while ($rowShowBloge = mysqli_fetch_array($showBloge)) {
                                echo '
                            <div class="bloge">
                            <img src="' . $rowShowBloge['Picture'] . '" alt="">
                            <strong>' . $rowShowBloge['Title'] . '</strong>
                            <a href="' . $rowShowBloge['Id'] . '">اطلاعات بیشتر</a>
                            </div>
                            ';
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>
            <section>
                <div class="navgaition">
                    <?php
                    if ($page >= 2) {
                        echo '<a href="bloge.php?page=' . ($page - 1) . '">  قبلی </a>';
                    }
                    for ($i = 1; $i <= $number_of_page; $i++) {
                        if ($i == $page) {
                            $pagLink = '<a href = "bloge.php?page=' . $i . '" class="active">' . $i . ' </a>';
                        } else {
                            $pagLink = '<a href="bloge.php?page=' .  $i . '">   
                    ' .  $i . '</a>';
                        }
                        echo $pagLink;
                    }
                    if ($page < $number_of_page) {
                        echo '<a href="bloge.php?page=' . ($page + 1) . '"> بعدی </a>';
                    }
                    ?>
                </div>
            </section>
        </main>

    </div>
    <footer>
        <div class="subfooter">
            <div class="menuBar footer">
                <a href="index.html" id="logo">LOGO</a>
                <nav id="center">
                    <ul id="gap">
                        <li><a href="">خانه</a></li>
                        <li><a href="">درباره من</a></li>
                        <li><a href="">خدمات</a></li>
                        <li><a href="">مهارت من</a></li>
                        <li><a href="">نمونه کارها</a></li>
                        <li><a href="">ارتباط با ما</a></li>
                        <li><a href="">مقالات</a></li>
                    </ul>
                </nav>
            </div>
            <div class="social">
                <a href=""><i class="fa-brands fa-github"></i></a>
                <a href=""><i class="fa-brands fa-telegram"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="bottomfooter">
            <span>تمامی اطلاعات در این سایت محفوظ می‌باشد.</span>
        </div>
    </footer>
</body>
<script src="Javascript/scrollabout.js"></script>
<script src="Javascript/javascript.js"></script>

</html>