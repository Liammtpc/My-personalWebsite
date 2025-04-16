<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "mypersonal");
mysqli_query($db, "SET time_zone = '+3:30'");
mysqli_query($db, "SET CHARACTER SET 'utf8'");
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
                    <ul>
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
            <section id="category">
                <h3>جستجوی </h3>
            </section>
            <section>
                <div class="bolges page">
                    <div class="sectionBloges warp">
                        <?php
                        if (isset($_SESSION["search"])) {
                            $search = $_SESSION["search"];
                            $allBloge = mysqli_query($db, "SELECT COUNT(*) FROM gallery WHERE Title LIKE '%$search%'");
                            $row = mysqli_fetch_row($allBloge);
                            $number_of_result = $row[0];

                            if (!isset($_GET['page'])) {
                                $page = 1;
                            } else {
                                $page = $_GET['page'];
                            }

                            $results_per_page = 6;
                            $page_first_result = ($page - 1) * $results_per_page;
                            $number_of_page = ceil($number_of_result / $results_per_page);
                            $showBloge = mysqli_query($db, "SELECT * FROM gallery WHERE Title LIKE '%$search%' LIMIT $page_first_result, $results_per_page");

                            while ($rowShowBloge = mysqli_fetch_array($showBloge)) {
                                echo '
                             <div class="bloge">
                              <img src="' . $rowShowBloge['Picture'] . '" alt="">
                              <strong>' . $rowShowBloge['Title'] . '</strong>
                              <a href="' . $rowShowBloge['Id'] . '">اطلاعات بیشتر</a>
                             </div>
                      ';
                            }
                        } else {
                            $Title = $_SESSION["Tilte"];
                            echo $Tilte;
                            $allBloge = mysqli_query($db, "SELECT COUNT(*) FROM bloge WHERE Title LIKE '%$Tilte%'");
                            $row = mysqli_fetch_row($allBloge);
                            $number_of_result = $row[0];

                            if (!isset($_GET['page'])) {
                                $page = 1;
                            } else {
                                $page = $_GET['page'];
                            }

                            $results_per_page = 6;
                            $page_first_result = ($page - 1) * $results_per_page;
                            $number_of_page = ceil($number_of_result / $results_per_page);
                            $showBloge = mysqli_query($db, "SELECT * FROM bloge WHERE Title LIKE '%$search%' LIMIT $page_first_result, $results_per_page");
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
                        echo '<a href="gallery.php?page=' . ($page - 1) . '"> قبلی </a>';
                    }
                    for ($i = 1; $i <= $number_of_page; $i++) {
                        if ($i == $page) {
                            $pagLink = '<a href = "gallery.php?page=' . $i . '" class="active">' . $i . ' </a>';
                        } else {
                            $pagLink = '<a href="gallery.php?page=' . $i . '">   
                             ' . $i . '</a>';
                        }
                        echo $pagLink;
                    }
                    if ($page < $number_of_page) {
                        echo '<a href="gallery.php?page=' . ($page + 1) . '"> بعدی </a>';
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