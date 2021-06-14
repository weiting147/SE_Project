<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/PAS.css" type="text/css" />

    <meta charset="utf-8">
    <title>PAS_RecordInfo</title>
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
                <li><a href="PAS_FormManage.html">申請批准</a></li>
                <li class="grayLi"><a href="PAS_Record.html">租借紀錄</a></li>
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
                <span>訂單資訊</span>
            </p>
            <div class="text">
                <div style="border: 2px #707070 solid; margin: 0px 100px; padding-top: 20px">
                    <!-- 申請單內容 -->
                    <div class="content">
                        <p> 申請人：</p>
                        <input type="text" style="width: 18em;" readonly="readonly" />
                        <p>申請單位：</p>
                        <input type="text" style="width: 18em;" readonly="readonly" />
                    </div>
                    <div class="content">
                        <div style="display: flex; align-items: flex-end;">
                            <p>學號</p>
                            <p style="font-size: 0.7em;">(校內學生借用)</p>
                            <p>：</p>
                        </div>
                        <input type="text" style="width: 18em;" readonly="readonly" />
                        <p>聯絡單位：</p>
                        <input type="text" style="width: 18em;" readonly="readonly" />
                    </div>
                    <div class="content">
                        <p>電子信箱：</p>
                        <input type="text" style="width: 28em;" readonly="readonly" />
                        <p>使用總人數：</p>
                        <input type="text" style="width: 8em;" readonly="readonly" />
                    </div>
                    <div class="content" style="margin-bottom: 5px;">
                        <p style="width: 12em;">收據繳款(人)(公司名稱)：</p>
                        <input type="text" style="width: 50em;" readonly="readonly" />
                    </div>
                    <div style="margin: 0px 150px;">
                        <p style="text-align: left; width: 30em; font-size: 0.7em;">(如為公司請詳填全名，開立收據後不可更改收據抬頭)</p>
                    </div>
                    <div class="content">
                        <p> 地址：</p>
                        <input type="text" style="width: 52em;" readonly="readonly" />
                    </div>
                    <div style="margin: 25px 150px; text-align: left;">
                        <span style="font-weight: bold;"> 是否租借烤肉區？</span>
                        &nbsp;&nbsp;
                        <!--空格-->
                        <label for="r1">是</label>
                        <input type="radio" id="r1" name="rr" readonly="readonly" />
                        &nbsp;&nbsp;
                        <label for="r2">否</label>
                        <input type="radio" id="r2" name="rr" readonly="readonly" />
                    </div>
                    <div class="content">
                        <div class="contentflex" style="width: 28.8em;">
                            <p>租借日期：</p>
                            <input type="text" style="width: 7em;" readonly="readonly" />
                            <p>年</p>
                            <input type="text" style="width: 7em;" readonly="readonly" />
                            <p>月</p>
                            <input type="text" style="width: 7em;" readonly="readonly" />
                            <p>日</p>
                        </div>
                        <div class="contentflex" style="width: 20em;">
                            <p>時段：</p>
                            <input type="text" style="width: 18em;" readonly="readonly">
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; margin: 25px 150px;">
                        <div style="display: flex; width: auto; align-items: flex-end;">
                            <p>租借烤爐數量</p>
                            <p style="font-size: 0.7em;">(提供水電、洗手台)(一爐限十人使用)</p>
                            <p>：</p>
                        </div>
                        <span style="width: 1.8em;"></span>
                        <!--排版用的-->
                        <div>
                            <input type="text" style="width: 5em;" readonly="readonly" />
                            <span>個</span>
                        </div>
                    </div>
                    <div style="margin: 25px 150px; text-align: left;">
                        <span style="font-weight: bold;"> 是否租借露營區？</span>
                        &nbsp;&nbsp;
                        <!--空格-->
                        <label for="r3">是</label>
                        <input type="radio" id="r3" name="rrr" readonly="readonly" />
                        &nbsp;&nbsp;
                        <label for="r4">否</label>
                        <input type="radio" id="r4" name="rrr" readonly="readonly" />
                    </div>
                    <div class="content">
                        <div class="contentflex" style="width: 55em;">
                            <p>租借日期：</p>
                            <input type="text" style="width: 7em;" readonly="readonly" />
                            <p>年</p>
                            <input type="text" style="width: 7em;" readonly="readonly" />
                            <p>月</p>
                            <input type="text" style="width: 7em;" readonly="readonly" />
                            <p>日</p>
                            <p>~</p>
                            <input type="text" style="width: 7em;" readonly="readonly" />
                            <p>年</p>
                            <input type="text" style="width: 7em;" readonly="readonly" />
                            <p>月</p>
                            <input type="text" style="width: 7em;" readonly="readonly" />
                            <p>日</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; margin: 25px 150px;">
                        <div style="display: flex; width: auto; align-items: flex-end;">
                            <p>租借烤爐數量</p>
                            <p style="font-size: 0.7em;">(提供水電、洗手間、夜間照明及沐浴熱水)</p>
                            <p>：</p>
                        </div>
                        &nbsp;&nbsp;
                        <div>
                            <input type="text" style="width: 5em;" readonly="readonly" />
                            <span>個</span>
                        </div>
                    </div>
                    <div class="content">
                        <p style="font-size: 0.8em; width: auto;" ;>
                            備註：<br>
                            1. 烤肉爐租借一時段為 4 小時，若有特殊需求，請洽事務組 07-5919094)<br>
                            2. 營位租借以日為單位，時間為12：30~翌日11：30<br>
                            3. 若是校外人士租借，汽車停車收費方式(請先自備場地繳費收據正本或影本，並於進校園時出示給警衛室)：
                            將以日計費/每台車收30元。
                        </p>
                    </div>
                    <!-- 烤爐&露營區狀態 -->
                    <div class="content" style="align-items: flex-end">
                        <div style="width: 25em;">
                            <!--左區域：烤爐部分-->
                            <div class="stateflex" style="margin: 10px 0px;">
                                <span style="font-weight: bold;">租借烤爐</span>
                            </div>
                            <div class="stateflex">
                                <div>
                                    <p class="index">1.</p>
                                    <img src="/asset/烤爐去背.png" />
                                    <div class="price">$$$</div>
                                </div>
                                <div>
                                    <p class="index">2.</p>
                                    <img src="/asset/烤爐去背.png" />
                                    <div class="price">$$$</div>
                                </div>
                                <div>
                                    <p class="index">3.</p>
                                    <img src="/asset/烤爐去背.png" />
                                    <div class="price">$$$</div>
                                </div>
                            </div>
                            <div class="stateflex">
                                <div>
                                    <p class="index">4.</p>
                                    <img src="/asset/烤爐去背.png" />
                                    <div class="price">$$$</div>
                                </div>
                                <div>
                                    <p class="index">5.</p>
                                    <img src="/asset/烤爐去背.png" />
                                    <div class="price">$$$</div>
                                </div>
                                <div>
                                    <p class="index">6.</p>
                                    <img src="/asset/烤爐去背.png" />
                                    <div class="price">$$$</div>
                                </div>
                            </div>
                        </div>

                        <div style="width: 25em;">　
                            <!--右區域：露營區部分-->
                            <div class="stateflex" style="margin: 10px 0px;">
                                <span style="font-weight: bold;">租借露營區</span>
                            </div>
                            <div class="stateflex">
                                <div>
                                    <p class="index">1.</p>
                                    <img src="/asset/帳篷去背.png" />
                                    <div class="price">$$$</div>
                                </div>
                                <div>
                                    <p class="index">2.</p>
                                    <img src="/asset/帳篷去背.png" />
                                    <div class="price">$$$</div>
                                </div>
                                <div>
                                    <p class="index">3.</p>
                                    <img src="/asset/帳篷去背.png" />
                                    <div class="price">$$$</div>
                                </div>
                            </div>
                            <div class="stateflex">
                                <div>
                                    <p class="index">4.</p>
                                    <img src="/asset/帳篷去背.png" />
                                    <div class="price">$$$</div>
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
            <!-- 確認鍵 -->
            <div>
                <a href="PAS_Record.html"><button type="button"
                        style="cursor: pointer; margin:2em 0 0 2em;">返回</button></a>
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