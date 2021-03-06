<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/Form.css" type="text/css" />

    <meta charset="utf-8">
    <title>RS_QueryPlace</title>
</head>

<body style=margin:0px>
    <!-- 網頁上方的工具列或訊息 -->
    <header>
        <!--高大logo-->
        <div class="grayBlock" style="padding:1.2%"></div>

        <div style="padding-left: 3%;" display: inline-block>
            <img src="/asset/logoword_.png" class="logo">
            <a href="/webpage/Login.php" class="logoTEXT">烤肉露營區租借系統</a>
        </div>
        <div style="background-color:#f5be11;padding:0.7%; margin: 0px; width: 100%; border: 0%"></div>
        <div class="grayBlock menu">
            <ul>
                <li><a href="RS_Form.html">租借場地</a></li>
                <li><a href="RS_Record.html">個人紀錄</a></li>
                <li class="grayLi"><a href="RS_QueryPlace.html">場地使用狀況</a></li>
            </ul>
            <ul class="dropDown">
                <li><a>Hi,
                            <span>使用者</span>
                        </a>
                    <ul>
                        <li><a href="RS_AccountInfo.html">管理帳戶</a></li>
                        <li><a href="/webpage/Login.php">登出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <!--中間區塊-->
    <div class="centerRegion">
        <!-- 日期查詢區塊 -->
        <div class="text">
            <p class="title">
                日期查詢
            </p>
            <div class="content" style="margin: 25px 380px">
                <span>日期：</span>
                <input type="text" placeholder="2000" style="width: 7em;" />
                <span>年</span>
                <input type="text" placeholder="01" style="width: 7em;" />
                <span>月</span>
                <input type="text" placeholder="01" style="width: 7em;" />
                <span>日</span>
            </div>
            <div class="contentflex" style="margin: 25px 380px">
                <p>時段：</p>
                <select id="timeschooser" style="width: 18em;">
                    <option>09:00 ~ 12:00</option>
                    <option>12:00 ~ 15:00</option>
                    <option>15:00 ~ 18:00</option>
                    <option>18:00 ~ 21:00</option>
                    </select>
                <a href="RS_QueryPlace.html"><button type="button" style="cursor: pointer;">查詢</button></a>
            </div>
        </div>
        <div style="background-color: #707070; width: 100%; height: 7px;"></div>
        <div class="text" style="padding: 0em 3em;">

            <!-- 烤爐、露營區選取紀錄 -->
            <div class="content" style="align-items: flex-end;margin: 5px 150px 25px 150px;">
                <div style="width: 25em;">
                    <!--左區域：烤爐部分-->
                    <div class="stateflex" style="margin: 10px 0px 20px 0px; color: black;">
                        <span style="font-weight: bold;">尚未租借烤爐</span>
                    </div>
                    <div class="stateflex">
                        <div>
                            <p class="index">1.</p>
                            <img src="/asset/烤爐去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                        <div>
                            <p class="index">2.</p>
                            <img src="/asset/烤爐去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                        <div>
                            <p class="index">3.</p>
                            <img src="/asset/烤爐去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                    </div>
                    <div class="stateflex">
                        <div>
                            <p class="index">4.</p>
                            <img src="/asset/烤爐去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                        <div>
                            <p class="index">5.</p>
                            <img src="/asset/烤爐去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                        <div>
                            <p class="index">6.</p>
                            <img src="/asset/烤爐去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                    </div>
                </div>

                <div style="width: 25em;">
                    <!--右區域：露營區部分-->
                    <div class="stateflex" style="margin: 10px 0px 20px 0px; color: black;">
                        <span style="font-weight: bold;">尚未租借露營區</span>
                    </div>
                    <div class="stateflex">
                        <div>
                            <p class="index">1.</p>
                            <img src="/asset/帳篷去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                        <div>
                            <p class="index">2.</p>
                            <img src="/asset/帳篷去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                        <div>
                            <p class="index">3.</p>
                            <img src="/asset/帳篷去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                    </div>
                    <div class="stateflex">
                        <div>
                            <p class="index">4.</p>
                            <img src="/asset/帳篷去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                        <div>
                            <p class="index">5.</p>
                            <img src="/asset/帳篷去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                        <div>
                            <p class="index">6.</p>
                            <img src="/asset/帳篷去背.png" />
                            <div class="price">$ ? ?</div>
                        </div>
                    </div>
                </div>
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