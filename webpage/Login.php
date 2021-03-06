<!doctype html>
<html>
<?php
set_include_path($_SERVER["DOCUMENT_ROOT"] . '/util');
require('util.php');
$isUser = LoginCheck();
if ($_COOKIE["account"]) {
    if ($_COOKIE["identity"] >= 3) {
        header("Location:RS/RS_Record.php");
    } else if ($_COOKIE["identity"] == 0) {
        header("Location:SAS/SAS_File.php");
    } else if ($_COOKIE["identity"] == 2) {
        header("Location:CS/CS_Unpaid.php");
    } else if ($_COOKIE["identity"] == 1) {
        header("Location:PAS/PAS_FormManage.php");
    } else {
        setcookie("account", "", time() - 3600, '/');
        setcookie("identity", "", time() - 3600, '/');
    }
}

?>

<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/Login.css" type="text/css" />
    <script type="text/javascript">
        function submitForm(formName) {
            document.getElementById(formName).submit();
        }
    </script>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body style=margin:0px>
    <!-- 網頁上方的工具列或訊息 -->
    <header>
        <!--高大logo-->
        <div class="grayBlock" style="padding:1.2%"></div>
        <!-- <table align = "center" width = "95%" cellpadding = "5"> -->

        <span style="padding-left: 3%;" display: inline-block>
            <img src="/asset/logoword_.png" class="logo" />
            <a href="Login.php" class="logoTEXT">烤肉露營區租借系統</a>
        </span>
        <div style="background-color:#f5be11;padding:0.7%; margin: 0px; width: 100%; border: 0%"></div>

        <div class="grayBlock menu">
            <ul>
                <li class="grayLi"><a href="Login.php">公告</a></li>
                <li><a href="/webpage/RS/RS_QueryPlaceIntro.php">介紹</a></li>
            </ul>
        </div>
    </header>

    <!--中間區塊-->
    <div class="centerRegion">
        <div class="news">
            <div>
                <p class="title">最新消息 <span style="color: red;">News</span></p>
                <div class="lsttitle" style="font-weight: bold;color: black;">
                    <div style="width: 300px; ">標題</div>
                    <div style="padding-left: 2em;">發布者</div>
                    <div>發布日期</div>
                </div>
                <?php
                $currentYear = date('Y');
                $announceQuery = sprintf(<<<EOF
                Select * From Announcement Where ReleaseTime Like '$currentYear-%-%' Order By identity asc, ReleaseTime desc;
                EOF, $year, $month);
                $announceTable = GetQueryTable($announceQuery);
                while ($row = mysqli_fetch_row($announceTable)) {
                    $title = $row[3];
                    $text = $row[4];
                    $date = "";
                    $time = "";
                    sscanf($row[2], "%s %s", $date, $time);
                    $author = "場地管理員";
                    if ($row[0] == 0)
                        $author = "系統管理員";
                    echo <<<EOF
                <form id="$row[0]_$row[1]" action="RS/RS_QueryAnnouncement.php" method="POST">
                <div class = "lst" onclick="submitForm('$row[0]_$row[1]');">
                    <div style="width: 350px;">[公告]$title</div>
                    <div>$author</div>
                    <div>$date</div>
                </div>
                <input type="hidden" name="title" value="$title" readonly="readonly"/>
                <input type="hidden" name="author" value="$author" readonly="readonly"/>
                <input type="hidden" name="text" value="$text" readonly="readonly"/>
                <input type="hidden" name="date" value="$date" readonly="readonly"/>
                <input type="hidden" name="time" value="$time" readonly="readonly"/>
                </form>
                EOF;
                }
                ?>
            </div>

        </div>
        <div class="login">
            <form action="Login.php" method="POST">
                <div>帳號：</div>
                <div><input type="text" name="account" style="width: 70%;" value="<?php
                                                                                    if ($_POST && $isUser == false)
                                                                                        echo $_POST["account"];
                                                                                    ?>">
                </div>
                <div>密碼：</div>
                <div><input type="password" name="password" style="width: 70%;"></div>
                <div>
                    <div>
                        <input type="submit" value="登入">
                    </div>
                    <?php
                    if ($_POST && $isUser == false)
                        echo '<h3 style="color:red">輸入錯誤！</h3>';
                    ?>
                    <div class="text">
                        <p style="text-align: center;">
                            <font size="2">校內人士請使用<br>教務系統之帳號密碼 </font>
                        </p>
                    </div>
                </div>
                <span>尚未有帳密 &nbsp → &nbsp</span>
                <a href="/webpage/RS/RS_AccountApply.html" style="font-weight: bold; ">註冊帳號</a>
            </form>
        </div>

    </div>



    <!-- 網頁下方的工具列或訊息 -->
    <footer style="margin: 0%;">
        <div style="background-color:#f5be11;padding:0.3%; width:100%; height: 0.3%"></div>
        <div class="grayBlock" style="padding-left:3%;padding-top: 1.5%; padding-bottom:1.5%; color: #ffffff;">
            811726 高雄市楠梓區高雄大學路700號<br>
            700, Kaohsiung University Rd, Nanzih District, Kaohsiung 811, Taiwan, R.O.C.<br>
            高大總機:886-7-5919000 ｜ 傳真號碼:886-7-5919083<br>
            高大校園緊急聯絡電話:886-7-5917885 ｜ 高大警衛室:886-7-5919009<br>
            網頁維護:秘書室 ｜ 系統維護:圖書資訊館<br>
            © 2019 高雄大學 National University of Kaohsiung<br>

            意見反映信箱 尊重智慧財產權 網路使用規範要點<br>
        </div>
    </footer>

</body>

</html>