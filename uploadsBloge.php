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
        <main>
            <section class="panel">
                <div class="sideBar">
                    <span id="xMarkspanel" class="fa-regular fa-circle-xmark"></span>
                    <img src="Picture/sadarlastin.jpg" alt="" />
                    <nav>
                        <ul>
                            <li>
                                <a href=""><span class="fa-solid fa-gauge">داشبورد</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-user">پروفایل</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-add">اضافه کردن مقاله</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-add">اضافه کردن نمونه</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-bell">کنترل شفارشات</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-list-check">اهداف روزانه</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-right-from-bracket">خروج</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="dashbords">
                    <span id="bars" class="fa-solid fa-bars"></span>
                    <section>
                        <div class="profile">
                            <form action="uploadsBloge.php" method="post" enctype="multipart/form-data">
                                <label for="">عنوان</label>
                                <input type="text" placeholder="عنوان" name="Title">
                                <label for="">نویسنده</label>
                                <input type="text" placeholder="نویسنده" name="Writer">
                                <label for="">دسته بندی</label>
                                <input type="text" placeholder="دسته بندی" name="Category">
                                <label for="">تاریخ بارگذاری</label>
                                <input type="text" placeholder="تاریخ بارگذاری" name="historys">
                                <label for="">متن مقاله</label>
                                <textarea name="Discription" id="" placeholder="متن مقاله"></textarea>
                                <input type="file" id="flies" name="picture">
                                <label for="flies" id="uplaods">بارگذاری عکس</label>
                                <button>ارسال</button>
                            </form>
                            <?php
                            $ok = false;
                            $error = "";
                            if (isset($_POST["Title"])) {
                                $Title = $_POST["Title"];
                                $Writer = $_POST["Writer"];
                                $Publics = $_POST["historys"];
                                $Category = $_POST["Category"];
                                $Discription = $_POST["Discription"];
                                $target_dir = "Picture/";
                                $target_file = $target_dir . basename($_FILES["picture"]["name"]);
                                if (isset($_POST["submit"])) {
                                    if (move_uploaded_file($_FILES["picture"]["tmp_name"],  $target_file)) {
                                        echo "آپلود من با موفقیت انجام شد";
                                    } else {
                                        echo "آپلود ناموفق";
                                    }
                                }
                                if (empty($Title)) {
                                    echo $error = "عنوان خود را وادکنید.";
                                    $ok = false;
                                }
                                if ($error == "") {
                                    $ok = true;
                                }
                                if ($ok == true) {
                                    $insertBloge = mysqli_query($db, "INSERT INTO bloge(Title,Picture,Discription,Writer,Public,Category)VALUES('$Title',' $target_file','$Discription','$Writer','$Publics','$Category')");
                                    echo '<p>آپلود با موفقیت انجام شد.</p>';
                                }
                            }
                            ?>
                        </div>
                    </section>
                    <section>
                        <div class="titleinpanel">
                            <h2>مشاهده مقالات بارگذاری شده</h2>
                        </div>
                        <div class="GalleyandBloge">
                            <div class="lastBloge total">
                                <table>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عکس</th>
                                        <th>عنوان</th>
                                    </tr>
                                    <?php
                                    $showbloge = mysqli_query($db, "select*from bloge where 1 limit 3");
                                    while ($rowshowbloge = mysqli_fetch_array($showbloge)) {
                                        echo '
                                            <tr>
                                            <td>1</td>
                                            <td><img src="' . $rowshowbloge["Picture"] . '" alt="" /></td>
                                            <td>' . $rowshowbloge["Title"] . '</td>
                                            </tr>    
                                            ';
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </main>
    </div>
</body>
<script src="Javascript/scroll.js"></script>
<script src="Javascript/panel.js"></script>

</html>