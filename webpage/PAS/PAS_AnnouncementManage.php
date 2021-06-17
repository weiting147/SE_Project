<!doctype html>
<?php
set_include_path($_SERVER["DOCUMENT_ROOT"] . '/util');
require('util.php');
CheckEntry("PAS");
$announceQuery = <<<EOF
    Select * From Announcement Where identity = 1;    
EOF;
$announceTable = GetQueryTable($announceQuery);
?>
<html>

<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/Announcement.css" type="text/css" />
    <style>
        input {
            caret-color: auto;
            /* 預設 */
            caret-color: transparent;
            /* 透明 */
            caret-color: #FF1744;
            /* 指定色 */
            outline: none;
            /* 外框效果 */
        }
    </style>
    <script type="text/javascript">
        function submitForm(formName) {
            document.getElementById(formName).submit(); 
        }
    </script>
    <meta charset="utf-8">
    <title>PAS_AnnouncementManage</title>
</head>

<body style=margin:0px>
    <!-- 網頁上方的工具列或訊息 -->
    <header>
        <!--高大logo-->
        <div class="grayBlock" style="padding:1.2%"></div>

        <div style="padding-left: 3%;" display: inline-block>
            <img src="/asset/logoword_.png" class="logo">
            <a href="PAS_FormManage.php" class="logoTEXT">烤肉露營區管理系統</a>
        </div>
        <div style="background-color:#f5be11;padding:0.7%; margin: 0px; width: 100%; border: 0%"></div>
        <div class="grayBlock menu">
            <ul>
                <li><a href="PAS_FormManage.php">申請批准</a></li>
                <li><a href=" href= PAS_Record.php">租借紀錄</a></li>
                <li><a href="PAS_PlaceManage.php">場地管理</a></li>
                <li class="grayLi"><a href="PAS_AnnouncementManage.php">公告</a></li>
            </ul>
            <!-- 下拉式選單 -->
            <ul class="dropDown">
                <li class><a href="#">Hi,
                        <span>場地管理員</span>
                    </a>
                    <ul>
                        <li><a href="PAS_ModifyPasswd.php">修改密碼</a></li>
                        <li><a href="/webpage/Login.php">登出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <!--中間區塊-->
    <div class="centerRegion">

        <div class="text">
            <p class="title">
                <span>公告</span>
            </p>
            <div class="right" style="margin: 1em 0em">
                <input type="button" value="發布新公告" onclick="location.href='PAS_CreateAnnoucement.php'" style="cursor: pointer;">
            </div>
            <!-- 列表內容 -->
            <div class="lst" style="margin-bottom: 1em; font-weight: bold;color: black;">
                <div>公告標題</div>
                <div style="width:60%;">公告內文</div>
                <div> 發布日期</div>
                <div> 發布時間</div>
            </div>

            <?php
            while ($row = mysqli_fetch_row($announceTable)) {
                $title = $row[3];
                $text = $row[4];
                $date = "";
                $time = "";
                sscanf($row[2], "%s %s", $date, $time);
                echo <<<EOF
                <form id="$row[0]_$row[1]" action="PAS_AnnounceInfo.php" method="POST">
                <div class = "lst" style = "margin-bottom: 1em;color: #707070;" onclick="submitForm('$row[0]_$row[1]');">
                    <div>$title</div>
                    <div style ="width:60%;">
                        $text
                    </div>
                    <div> $date</div>
                    <div> $time</div>
                </div>
                <input type="hidden" name="title" value="$title" readonly="readonly"/>
                <input type="hidden" name="text" value="$text" readonly="readonly"/>
                <input type="hidden" name="date" value="$date" readonly="readonly"/>
                <input type="hidden" name="time" value="$time" readonly="readonly"/>
                </form>
            EOF;
            }
            ?>
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
            <br>
            意見反映信箱 尊重智慧財產權 網路使用規範要點<br>
        </div>
    </footer>

</body>

</html>