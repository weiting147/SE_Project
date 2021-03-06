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
    <link rel="stylesheet" href="/css/Account.css" type="text/css" />
    <meta charset="utf-8">
    <title>SAS_ModifyPasswd</title>
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
                <li><a href="SAS_File.php">歸檔</a></li>
                <li><a href="SAS_AccountManage.html">帳號</a></li>
                <!-- <li><a href="#">場地列表</a></li> -->
                <li><a href="SAS_AnnouncementManage.html">公告</a></li>
            </ul>
            <!-- 下拉式選單 -->
            <ul class="dropDown">
                <li class="grayLi"><a href="#">Hi,
                        <span>系統管理員</span>
                    </a>
                    <ul>
                        <li><a href="SAS_ModifyPasswd.html">管理帳戶</a></li>
                        <li><a href="/webpage/Login.html">登出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <!--中間區塊-->
    <div class="centerRegion">
        <div class="text">
            <p class="title">
                密碼修改
            </p>
            <div class="content">
                <div class="formTextR">
                    <p>帳號：</p>
                </div>
                <div class="formBlock">
                    <!-- 帳號不能修改，為readonly，value的部分要填該行政人員的帳號 -->
                    <input type="text" name="account" style="width: 200px" readonly="readonly" value="行政人員的帳號">
                </div>
                <div class="formTextL">
                    <p>密碼：</p>
                </div>
                <div class="formBlock">
                    <input type="text" name="psw" style="width: 200px">
                </div>
            </div>
            <div class="content">
                <div class="formTextR">
                    <p>身分別：</p>
                </div>
                <div class="formBlock">
                    <input type="text" name="identity" style="width: 200px " readonly="readonly" value="行政人員">
                </div>
                <div class="formTextL">
                    <p>再次確認密碼：</p>
                </div>
                <div class="formBlock">
                    <input type="text" name="pswCheck" style="width: 200px">
                </div>
            </div>
            <div class="bottom" style="text-align: center;">
                <a href="SAS_File.html"><button type="button"
                        style="cursor: pointer; margin: 4em 2em 0 0;">取消修改</button></a>
                <a href="SAS_PasswdChecking.html"><button type="button"
                        style="cursor: pointer; margin: 4em 0 0 2em;">確認修改</button></a>
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