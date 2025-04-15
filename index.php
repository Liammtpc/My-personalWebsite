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
            <div class="banner">
                <div class="banner-right">
                    <h1>من مهران حشمتیان هستم</h1>
                    <p>
                        من برنامه نویس و طراح گرافیک خلاق با دیدی نوآورانه و توانایی تلفیق
                        هنر و تکنولوژی هستم. مسلط به زبان‌های برنامه نویسی و نرم افزارهای
                        گرافیکی مختلف و همچنین قادر به طراحی و پیاده سازی پروژه های چند
                        وجهی که نیازمند دانش برنامه نویسی و گرافیک به صورت همزمان هستم.
                        مشتاق به همکاری در پروژه هایی که به نوآوری، خلاقیت و حل مسائل چالش
                        برانگیز و افزایش تجربه در زمینه‌ها اهمیت می‌دهم و همچنین دوست دارم
                        در زمینه هوش مصنوعی خود را به چالش بکشم.
                    </p>
                    <a href="">دانلود رزومه</a>
                </div>
                <div class="banner-left">
                    <div class="banner-picture">
                        <img src="Picture/personal.png" alt="" />
                    </div>
                </div>
            </div>
        </main>
        <section class="box">
            <div class="service hidden">
                <h2>خدمات</h2>
                <p>خدماتی می‌توان به شما ارائه داد</p>
                <div class="part-service">
                    <div class="service-section" id="section1">
                        <h3>طراحی سایت</h3>
                        <p>
                            طراحی ui/ux سایت در همه زمینه‌ها برای برنامه نویسی پذیرفته می‌شود
                        </p>
                    </div>
                    <div class="service-section" id="section2">
                        <h3>برنامه نویسی وب</h3>
                        <p>برنامه نویسی سایت شما در هر زمینه پذیرفته می‌شود.</p>
                    </div>
                    <div class="service-section" id="section2">
                        <h3>بنر و پوستر</h3>
                        <p>طراحی پوستر و بنر سایت در زمینه مختلف پذیرفته می‌شود.</p>
                    </div>
                    <div class="service-section" id="section2">
                        <h3>طراحی لوگو</h3>
                        <p>طراحی لوگو به صورت حرفه‌ای و دارای تجربه در این زمینه</p>
                    </div>
                    <div class="service-section" id="section3">
                        <h3>طراحی گرافیکی</h3>
                        <p>
                            طراحی گرافیگی در دیگر زمینه گرافیکی ( کارت ویزیت، ست اداری و...)
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="box">
            <div class="skillfull hidden">
                <h2>مهارت من</h2>
                <p>مهارت‌‌هایی که در زمینه برنامه نویسی و گرافیک دارم</p>
                <div class="skillfulls">
                    <div class="skill">
                        <div class="skill-icon">
                            <i class="fa-brands fa-html5"></i>
                        </div>
                        <div class="skill-per">
                            <div class="circle"></div>
                            <div class="per">
                                <span class="per-count">85%</span>
                                <strong class="per-label">HTML</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i class="fa-brands fa-css3-alt"></i>
                        </div>
                        <div class="skill-per">
                            <div class="circle"></div>
                            <div class="per">
                                <span class="per-count">85%</span>
                                <strong class="per-label">CSS</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i class="fa-brands fa-js" id="jsIcon"></i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perJs"></div>
                            <div class="per">
                                <span class="per-count">60%</span>
                                <strong class="per-label">JS</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i class="fa-brands fa-php" id="phpIcon"></i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perPhp"></div>
                            <div class="per">
                                <span class="per-count">45%</span>
                                <strong class="per-label">PHP</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i class="fa-solid fa-database" id="databaseIcon"></i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perDatabase"></div>
                            <div class="per">
                                <span class="per-count">45%</span>
                                <strong class="per-label">Mysql</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i class="fa-brands fa-wordpress" id="wordpressIcon"></i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perWordress"></div>
                            <div class="per">
                                <span class="per-count">55%</span>
                                <strong class="per-label">Wordpress</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i class="fa-brands fa-react" id="reactIcon"></i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perReact"></div>
                            <div class="per">
                                <span class="per-count">50%</span>
                                <strong class="per-label">React</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i class="fa-brands fa-github" id="githubIcon"></i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perGithub"></div>
                            <div class="per">
                                <span class="per-count">70%</span>
                                <strong class="per-label">Github</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i id="apiIcon">API</i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perApi"></div>
                            <div class="per">
                                <span class="per-count">33%</span>
                                <strong class="per-label">API</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i id="tsIcon">TS</i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perTypescript"></div>
                            <div class="per">
                                <span class="per-count">33%</span>
                                <strong class="per-label">TS</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i id="psIcon">Ps</i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perPhotoshop"></div>
                            <div class="per">
                                <span class="per-count">70%</span>
                                <strong class="per-label">Ps</strong>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <i id="aiIcon">Ai</i>
                        </div>
                        <div class="skill-per">
                            <div class="circle" id="perAi"></div>
                            <div class="per">
                                <span class="per-count">40%</span>
                                <strong class="per-label">Ai</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="box">
            <div class="gallery">
                <div class="title">
                    <h2>نمونه کار</h2>
                    <a href="">نمونه بیشتر</a>
                </div>
                <div class="category">
                    <p>نمونه کار‌ها در زمینه طراحی سایت، برنامه نویسی و گرافیک می‌باشد.
                    </p>
                    <div class="category-tab">
                        <button class="active">گرافیکی</button>
                        <button>برنامه نویسی</button>
                    </div>
                </div>
                <div class="pictures">
                    <div class="picture-right">
                        <?php
                        $showGallery = mysqli_query($db, "select*from gallery where 1 limit 1");
                        $showGallery1 = mysqli_query($db, "select*from gallery where 1 limit 2 offset 1");
                        while ($rowShowGallery = mysqli_fetch_array($showGallery)) {
                            echo '
                            <figure>
                            <img src="' . $rowShowGallery['Picture'] . '" alt="" class="img1">
                            <a href="" id="a1">نمایش بیشتر</a>
                            </figure>';
                        }
                        while ($rowShowGallery1 = mysqli_fetch_array($showGallery1)) {
                            echo '
                            <figure>
                            <img src="' . $rowShowGallery1['Picture'] . '" alt="" class="img2">
                            <a href="" id="a2">نمایش بیشتر</a>
                            </figure>';
                        }
                        ?>
                    </div>
                    <div class="picture-left">
                        <?php
                        $showGallery3 = mysqli_query($db, "select*from gallery where 1 limit 1 offset 3");
                        while ($rowShowGallery3 = mysqli_fetch_array($showGallery3)) {
                            echo '
                            <figure>
                            <img src="' . $rowShowGallery3['Picture'] . '" alt="" class="img1">
                            <a href="" id="a3">نمایش بیشتر</a>
                            </figure>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="box">
            <div class="bolges">
                <h2>مقالات</h2>
                <p>آخرین مقالات منتشر شده در این سایت</p>
                <div class="sectionBloges">
                    <?php
                       $showBloge = mysqli_query($db, "select*from bloge where 1 limit 3");
                       while($rowShowBloge=mysqli_fetch_array($showBloge)){
                        echo'
                        <div class="bloge">
                        <img src="'.$rowShowBloge['Picture'].'" alt="">
                        <strong>'.$rowShowBloge['Title'].'</strong>
                        <a href="">مطالعه بیشتر</a>
                        </div>
                        ';
                       }
                    ?>
                </div>
            </div>
        </section>
        <section class="box">
            <div class="contacts">
                <h2>تماس با ما</h2>
                <p>جهت ارتباط با ما و ثبت درخواست پروژه در این بخش اطلاعات خود را پر کنید تا در اسرع وقت با شما تماس بگریم.</p>
                <form action="#" method="post">
                    <div class="right-form">
                        <label for="">نام کاربری*</label>
                        <input type="text" placeholder="نام کاربری" name="Username">
                        <label for="">شماره تماس*</label>
                        <input type="text" placeholder="شماره تماس" name="Number">
                        <label for="">موضوع*</label>
                        <input type="text" placeholder="موضوع" name="Title">
                        <button>ارسال</button>
                    </div>
                    <div class="left-form">
                        <textarea name="Discreption" id="" placeholder="توضیحات"></textarea>
                        <button>ارسال</button>
                    </div>
                </form>
            </div>
            <?php
            $ok = false;
            $error = "";
            if (isset($_POST["Username"])) {
                $Username = $_POST["Username"];
                $Number = $_POST["Number"];
                $Title = $_POST["Title"];
                $Discreption = $_POST["Discreption"];
                if ($Username == "") {
                    echo $error = '<span style="color:red;">نام کاربری را وارد نمایید</span>';
                    $ok = false;
                }
                if ($Number == "") {
                    echo "<br/>";
                    echo $error = '<span style="color:red;> شماره تلفن کاربر را وارد نمایید</span>';
                    $ok = false;
                }
                if (substr($Number, 0, 2) != "09") {
                    echo "<br/>";
                    echo  $error = '<span style="color:red;>شماره تلفن کاربر معتبر نمی‌باشد</span>';
                    $ok = false;
                }
                if ($error == "") {
                    $ok = true;
                }
                if ($ok == true) {
                    $InsertOrder = mysqli_query($db, "insert into orders(Username,Number,Title,Discription)values('$Username','$Number','$Title','$Discreption')");
                    echo '<p style="color:green;">اطلاعات شما جهت تماس با موفقیت ثبت گردید</p>';
                }
            }
            ?>
        </section>
    </div>
    </div>
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
                <a href="https://github.com/Liammtpc"><i class="fa-brands fa-github"></i></a>
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
<script src="Javascript/scroll.js"></script>
<script src="Javascript/javascript.js"></script>

</html>