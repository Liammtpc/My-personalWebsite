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
          <a href=""
            ><span id="searchBox" class="fa-solid fa-magnifying-glass"></span
          ></a>
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
        <div class="about">
          <div class="about-right">
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
          <div class="about-left">
            <div class="about-picture">
              <img src="Picture/personal.png" alt="" />
            </div>
          </div>
        </div>
      </main>
      <div class="connections">
        <div class="title column">
            <h2>تماس با ما</h2>
            <p>راه های ارتباطی و تماس با ما و نمایش نمونه از طریق شبکه‌های اجتماعی</p>
        </div>
        <div class="connectionCard">
            <a href="https://github.com/Liammtpc"><i class="fa-brands fa-github"></i></a>
            <div class="textConnectionCard">
                <h3>GitHub</h3>
                <p>جهت نمایش رزومه و نمونه</p>
            </div>
        </div>
        <div class="connectionCard">
            <a href=""><i class="fa-brands fa-telegram"></i></a>
            <div class="textConnectionCard">
                <h3>Telegram</h3>
                <p>جهت ارتباط با ما به ایدی تلگرام پیام بدهید</p>
            </div>
        </div>
        <div class="connectionCard">
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <div class="textConnectionCard">
                <h3>instagram</h3>
                <p>جهت نمایش نمونه بیشتر به اینستاگرام سر بزنید.</p>
            </div>
        </div>
        <div class="connectionCard">
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
            <div class="textConnectionCard">
                <h3>Whatsapp</h3>
                <p>جهت ارتباط با ما به ایدی وتساپ پیام بدهید</p>
            </div>
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
