<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/Account.css" type="text/css" />
    <meta charset="utf-8">
    <title> RS_AccountInfo</title>
</head>

<body style=margin:0px>
    <!-- 網頁上方的工具列或訊息 -->
    <header>
        <!--高大logo-->
        <div class="grayBlock" style="padding:1.2%"></div>
        <!-- <table align = "center" width = "95%" cellpadding = "5"> -->

        <span style="padding-left: 3%;" display: inline-block>
                <img src="/asset/logoword_.png" class = "logo">
                <a href="/webpage/Login.php" class = "logoTEXT">烤肉露營區租借系統</a>
            </span>
        <div style="background-color:#f5be11;padding:0.7%; margin: 0px; width: 100%; border: 0%"></div>
        <div class="grayBlock menu">
            <ul>
                <li><a href="RS_Form.html">租借場地</a></li>
                <li><a href="RS_Record.html">個人紀錄</a></li>
                <!-- <li><a href="#">訂單修改/刪除</a></li> -->
                <li><a href="RS_QueryPlace.html">場地使用狀況</a></li>
            </ul>
            <ul class="dropDown">
                <li class="grayLi"><a href="#">Hi,
                            <span>使用者</span>
                        </a>
                    <ul>
                        <li><a href="RS_AccountInfo.html">管理帳戶</a></li>
                        <li><a href="/webpage/Login.php">登出</a></li>
                    </ul>
                </li>
            </ul>
            </ul>
        </div>
    </header>

    <!--中間區塊-->
    <div class="centerRegion">
        <div class="text">
            <p class="title">
                個人帳號資訊
            </p>
            <!-- 帳號資訊所有欄位皆為唯讀 -->
            <div class="content">
                <div class="formTextR">
                    <p>姓名：</p>
                </div>
                <div class="formBlock">
                    <input type="text" name="name" style="width: 200px" readonly="readonly">
                </div>
                <div class="formTextL">
                    <p>連絡電話：</p>
                </div>
                <div class="formBlock">
                    <input type="text" name="name" style="width: 200px" readonly="readonly">
                </div>
            </div>
            <div class="content">
                <div class="formTextR">
                    <p>帳號：</p>
                </div>
                <div class="formBlock">
                    <input type="text" name="account" style="width: 200px" readonly="readonly">
                </div>
                <div class="formTextL">
                    <p>密碼：</p>
                </div>
                <div class="formBlock">
                    <input type="text" name="psw" style="width: 200px" readonly="readonly">
                </div>
            </div>
            <div class="content">
                <div class="formTextR">
                    <p>身分別：</p>
                </div>
                <div class="formBlock">
                    <input type="text" name="identity" style="width: 200px " readonly="readonly">
                </div>
                <div class="formTextL">
                    <p></p>
                </div>
                <div class="formBlock">
                </div>
            </div>
            <div class="content">
                <div class="formTextR">
                    <p>email：</p>
                </div>
                <div class="formBlock2">
                    <input type="text" name="email" style="width: 100%" readonly="readonly">
                </div>
            </div>
            <div class="content">
                <div class="formTextR">
                    <p>服務單位：</p>
                </div>
                <div class="formBlock2">
                    <input type="text" name="office" style="width: 100%" readonly="readonly">
                </div>
            </div>

            <div class="content">
                <div class="formTextR">
                    <p>聯絡地址：</p>
                </div>
                <div style="width:5px; display: inline-block; vertical-align: -webkit-baseline-middle;">&nbsp;</div>
                <div class="formBlock2">
                    <input type="text" name="address" style="width: 100%" readonly="readonly">
                </div>
            </div>
            <div class="bottom" style="text-align: center;">
                <a href="RS_Record.html"><button type="button" style="cursor: pointer; margin-right: 2em;">確認</button></a>
                <a href="RS_AccountModify.html"><button type="button" style="cursor: pointer; margin-left: 2em;">修改</button></a>
            </div>
        </div>
    </div>

    <!-- 網頁下方的工具列或訊息 -->
    <footer style="margin: 0%;">
        <div style="background-color:#f5be11;padding:0.3%; width:100%; height: 0.3%"></div>
        <div class="grayBlock" style="padding-left:3%;padding-top: 1.5%; padding-bottom:1.5%; color: #ffffff;line-height: 1.3em;">
            811726 高雄市楠梓區高雄大學路700號<br> 700, Kaohsiung University Rd, Nanzih District, Kaohsiung 811, Taiwan, R.O.C.<br> 高大總機:886-7-5919000 ｜ 傳真號碼:886-7-5919083<br> 高大校園緊急聯絡電話:886-7-5917885 ｜ 高大警衛室:886-7-5919009<br> 網頁維護:秘書室 ｜ 系統維護:圖書資訊館<br> © 2019 高雄大學
            National University of Kaohsiung<br><br> 意見反映信箱 尊重智慧財產權 網路使用規範要點<br>
        </div>
    </footer>

</body>

</html>