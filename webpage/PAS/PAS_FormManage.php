<!doctype html>
<?php
// 總之你一般使用者R，其它網頁改成 .php 後，通通加上下面這段 code 就對惹。
set_include_path($_SERVER["DOCUMENT_ROOT"] . '/util');
require('util.php');
CheckEntry("PAS");
?>

<html>

<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/PAS.css" type="text/css" />

    <meta charset="utf-8">
    <title>PAS_FormManage</title>
</head>

<body style=margin:0px>
    <!-- 網頁上方的工具列或訊息 -->
    <header>
        <!--高大logo-->
        <div class="grayBlock" style="padding:1.2%"></div>

        <div style="padding-left: 3%;" display: inline-block>
            <img src="/asset/logoword_.png" class="logo">
            <a href="PAS_FormManage.html" class="logoTEXT">烤肉露營區管理系統</a>
        </div>
        <div style="background-color:#f5be11;padding:0.7%; margin: 0px; width: 100%; border: 0%"></div>
        <div class="grayBlock menu">
            <ul>
                <li class="grayLi"><a href="PAS_FormManage.html">申請批准</a></li>
                <li><a href="PAS_Record.html">租借紀錄</a></li>
                <li><a href="PAS_PlaceManage.html">場地管理</a></li>
                <li><a href="PAS_AnnouncementManage.html">公告</a></li>
            </ul>
            <!-- 下拉式選單 -->
            <ul class="dropDown">
                <li class><a href="#">Hi,
                        <span>場地管理員</span>
                    </a>
                    <ul>
                        <li><a href="PAS_ModifyPasswd.html">修改密碼</a></li>
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
                <span>申請批准列表</span>
            </p>
            <!-- 列表內容 -->
            <div class="lst" style="margin-bottom: 1em; font-weight: bold;color: black;">
                <div> 訂單編號</div>
                <div> 申請人</div>
                <div>申請日期</div>
                <div>活動日期</div>
                <div>申請爐數</div>
                <div>申請營位數量</div>
                <div>租借金額</div>
            </div>

            <a href = "PAS_ApproveApply.html">
                <div class="lst" style="margin-bottom: 1em;color: #707070;">
                    <div>11111111</div>
                    <div> 高XX</div>
                    <div> 2000/12/18</div>
                    <div>2000/12/01</div>
                    <div>3</div>
                    <div>0</div>
                    <div>87</div>
                </div>
            </a>
            <a href="PAS_ApproveApply.html">
                <div class="lst" style="margin-bottom: 1em;color: #707070;">
                    
                    <div>156111111</div>
                    <div> 搭啦啦</div>
                    <div> 2021/15/12</div>
                    <div>2022/02/21</div>
                    <div>34</div>
                    <div>4</div>
                    <div>870</div>
                </div>
            </a>
            <a href="PAS_ApproveApply.html">
                <div class="lst" style="margin-bottom: 1em;color: #707070;">
                    <div>11111111</div>
                    <div> 高XX</div>
                    <div> 2000/12/18</div>
                    <div>2000/12/01</div>
                    <div>3</div>
                    <div>0</div>
                    <div>87</div>
                </div>
            </a>
            <a href="PAS_ApproveApply.html">
                <div class="lst" style="margin-bottom: 1em;color: #707070;">
            
                    <div>156111111</div>
                    <div> 搭啦啦</div>
                    <div> 2021/15/12</div>
                    <div>2022/02/21</div>
                    <div>34</div>
                    <div>4</div>
                    <div>870</div>
                </div>
            </a>
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