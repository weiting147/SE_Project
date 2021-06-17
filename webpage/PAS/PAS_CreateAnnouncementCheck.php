<!doctype html>
<?php
set_include_path($_SERVER["DOCUMENT_ROOT"] . '/util');
require('util.php');
CheckEntry("PAS");
?>
<html>

<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/Form.css" type="text/css" />
    <link rel="stylesheet" href="/css/Announcement.css" type="text/css" />

    <meta charset="utf-8">
    <title>PAS_CreateAnnouncementCheck</title>
</head>

<body style=margin:0px>
    <!-- 網頁上方的工具列或訊息 -->
    <header>
        <!--高大logo-->
        <div class="grayBlock" style="padding:1.2%"></div>

        <div style="padding-left: 3%;" display: inline-block>
            <img src="/asset/logoword_.png" class="logo">
            <a href="PAS_File.php" class="logoTEXT">烤肉露營區管理系統</a>
        </div>
        <div style="background-color:#f5be11;padding:0.7%; margin: 0px; width: 100%; border: 0%"></div>
        <div class="grayBlock menu">
            <ul>
                <li><a href="PAS_FormManage.php">申請批准</a></li>
                <li><a href="PAS_Record.php">租借紀錄</a></li>
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
            <p class="reply" style="padding: 2em 0;">
                <span>是否發布公告？</span>
            </p>
            <div>
                <form id="AnnounceForm" action="PAS_CreateAnnouncementReply.php" method="POST">
                    <div style="border: 2px #707070 solid;margin: auto; padding-top: 20px; width:40em">
                        <p class="title">
                            公告
                        </p>
                        <!-- 申請單內容 -->
                        <div class="content">
                            <p> 標題：</p>
                            <input type="text" name="title" value="<?php echo $_POST["title"];?>" readonly="readonly" style="width: 40em;" placeholder="請輸入公告標題" />
                        </div>
                        <div class="content">
                            <p> 發布者：</p>
                            <input type="text" name="author" value="<?php echo $_POST["author"];?>" readonly="readonly" style="width: 15em;" readonly="readonly" value="場地管理員" />
                            <p style="margin-left: 1em;"> 發布時間：</p>
                            <input type="text" name="time" value="<?php echo date("Y-m-d H:i:s");?>" readonly="readonly"  style="width: 15em;" />
                        </div>

                        <div class="content">
                            <p> 內文：</p>
                            <textarea name="author_text" readonly="readonly" style="width:40em;height:20em;" placeholder="請輸入公告內文"><?php echo $_POST["author_text"];?></textarea>
                        </div>
                    </div>
                    <!-- 確認鍵 -->
                    <div style="margin:2em 0em">
                        <input type="button" value="取消" onclick="javascript:history.back();" style="margin: 0em 2em;cursor: pointer;">
                        <input type="submit" value="確認新增" style="margin: 0em 2em; cursor: pointer;">
                    </div>
                </form>
            </div>
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