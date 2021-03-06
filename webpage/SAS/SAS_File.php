<!doctype html>
<html>
<?php
// 總之你系統管理員R，其它網頁改成 .php 後，通通加上下面這段 code 就對惹。
set_include_path($_SERVER["DOCUMENT_ROOT"] . '/util');
require('util.php');
CheckEntry("SAS");
?>
<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/SAS.css" type="text/css" />

    <meta charset="utf-8">
    <title>SAS_File</title>
</head>

<body style=margin:0px>
    <!-- 網頁上方的工具列或訊息 -->
    <header>
        <!--高大logo-->
        <div class="grayBlock" style="padding:1.2%"></div>

        <div style="padding-left: 3%;" display: inline-block>
            <img src="/asset/logoword_.png" class="logo">
            <a href="SAS_File.html" class="logoTEXT">烤肉露營區管理系統</a>
        </div>
        <div style="background-color:#f5be11;padding:0.7%; margin: 0px; width: 100%; border: 0%"></div>
        <div class="grayBlock menu">
            <ul>
                <li class="grayLi"><a href="SAS_File.html">歸檔</a></li>
                <li><a href="SAS_AccountManage.html">帳號</a></li>
                <!-- <li><a href="#">場地列表</a></li> -->
                <li><a href="SAS_AnnouncementManage.html">公告</a></li>
            </ul>
            <!-- 下拉式選單 -->
            <ul class="dropDown">
                <li class><a href="#">Hi,
                            <span>系統管理員</span>
                        </a>
                    <ul>
                        <li><a href="SAS_ModifyPasswd.php">管理帳戶</a></li>
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
                <span>歸檔</span>
            </p>
            <div style="margin:1em 0em">
                <span><input id="date" type="date"></span>
                <input type="button" value="歸檔" onclick="location.href='SAS_ArchiveReply.html'" style="cursor: pointer;">
            </div>
            <!-- 列表內容 -->
            <div class="lst" style="margin-bottom: 1em; font-weight: bold;color: black;">
                <div> 租借起始日</div>
                <div> 申請人</div>
                <div>填寫日期</div>
                <div>訂單編號</div>
                <div>申請爐數</div>
                <div>申請營位數量</div>
                <div>訂單狀態</div>
                <div>租借金額</div>
            </div>

            <div class="lst" style="margin-bottom: 1em;color: #707070;">
                <div> 2000/12/18</div>
                <div> 高XX</div>
                <div>2000/12/01</div>
                <div>11111111</div>
                <div>3</div>
                <div>0</div>
                <div>尚未審核</div>
                <div>87</div>
            </div>

            <div class="lst" style="margin-bottom: 1em; color: #707070;">
                <div> 2000/12/18</div>
                <div> 高XX</div>
                <div>2000/12/01</div>
                <div>11111111</div>
                <div>3</div>
                <div>0</div>
                <div>繳費完成</div>
                <div>87</div>
            </div>

            <div class="lst" style="margin-bottom: 1em; color: #707070;">
                <div> 2000/12/18</div>
                <div> 高XX</div>
                <div>2000/12/01</div>
                <div>11111111</div>
                <div>3</div>
                <div>0</div>
                <div>活動結束</div>
                <div>87</div>
            </div>

            <div class="lst" style="margin-bottom: 1em; color: #707070;">
                <div> 2000/12/18</div>
                <div> 高XX</div>
                <div>2000/12/01</div>
                <div>11111111</div>
                <div>3</div>
                <div>0</div>
                <div>活動結束</div>
                <div>87</div>
            </div>
        </div>
    </div>

    <!-- 網頁下方的工具列或訊息 -->
    <footer style="margin: 0%;">
        <div style="background-color:#f5be11;padding:0.3%; width:100%; height: 0.3%"></div>
        <div class="grayBlock" style="padding-left:3%;padding-top: 1.5%; padding-bottom:1.5%; color: #ffffff;">
            811726 高雄市楠梓區高雄大學路700號<br> 700, Kaohsiung University Rd, Nanzih District, Kaohsiung 811, Taiwan, R.O.C.<br> 高大總機:886-7-5919000 ｜ 傳真號碼:886-7-5919083<br> 高大校園緊急聯絡電話:886-7-5917885 ｜ 高大警衛室:886-7-5919009<br> 網頁維護:秘書室 ｜ 系統維護:圖書資訊館<br> © 2019 高雄大學
            National University of Kaohsiung<br>
            <br> 意見反映信箱 尊重智慧財產權 網路使用規範要點<br>
        </div>
    </footer>

</body>

</html>