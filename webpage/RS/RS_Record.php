<!doctype html>
<?php
// 總之你一般使用者R，其它網頁改成 .php 後，通通加上下面這段 code 就對惹。
set_include_path($_SERVER["DOCUMENT_ROOT"] . '/util');
require('util.php');
CheckEntry("RS");
?>
    <html>

    <head>
        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/Record.css" type="text/css" />

        <meta charset="utf-8">
        <title>RS_Record</title>
    </head>

    <body style=margin:0px>
        <!-- 網頁上方的工具列或訊息 -->
        <header>
            <!--高大logo-->
            <div class="grayBlock" style="padding:1.2%"></div>

            <div style="padding-left: 3%;" display: inline-block>
                <img src="/asset/logoword_.png" class="logo">
                <a href="/webpage/Login.html" class="logoTEXT">烤肉露營區租借系統</a>
            </div>
            <div style="background-color:#f5be11;padding:0.7%; margin: 0px; width: 100%; border: 0%"></div>
            <div class="grayBlock menu">
                <ul>
                    <li><a href="RS_Form.html">租借場地</a></li>
                    <li class="grayLi"><a href="RS_Record.html">個人紀錄</a></li>
                    <!-- <li><a href="#">訂單修改/刪除</a></li> -->
                    <li><a href="RS_QueryPlace.html">場地使用狀況</a></li>
                </ul>
                <ul class="dropDown">
                    <li><a>Hi,
                            <span>使用者</span>
                        </a>
                        <ul>
                            <li><a href="RS_AccountInfo.html">管理帳戶</a></li>
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
                    當前訂單狀態
                </p>
                <div class="state">
                    <div>
                        <div>
                            <img src="/asset/竹籤去背.png" width="120px" ;/>
                            <p class="statetext">申請中</p>
                        </div>
                    </div>
                    <div style="margin-bottom: 4em;">
                        <img src="/asset/right-arrow.png" width="40px" />
                    </div>
                    <div>
                        <div>
                            <img src="/asset/半隻烤肉串去背.png" width="120px" />
                            <p class="statetext">已審核</p>
                        </div>
                    </div>
                    <div style="margin-bottom: 4em;">
                        <img src="/asset/right-arrow.png" width="40px" />
                    </div>
                    <div>
                        <div>
                            <img src="/asset/整隻烤肉串去背.png" width="120px" />
                            <p class="statetext">已繳費</p>
                        </div>
                    </div>
                    <div style="margin-bottom: 4em;">
                        <img src="/asset/right-arrow.png" width="40px" />
                    </div>
                    <div>
                        <div class="grayscale">
                            <!-- 要灰階 -->
                            <img src="/asset/整隻烤肉串&白芝麻去背.png" width="120px " />
                            <p class="statetext">活動完成</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #707070; width: 100%; height: 7px;"></div>
            <div class="text">
                <p class="title">
                    歷史紀錄
                </p>
                <!-- 列表內容 -->
                <div class="lsttitle" style="margin-bottom: 1em; font-weight: bold;color: black;">
                    <div> 租借起始日</div>
                    <div> 申請人</div>
                    <div>填寫日期</div>
                    <div>訂單編號</div>
                    <div>申請爐數</div>
                    <div>申請營位數量</div>
                    <div>訂單狀態</div>
                    <div>租借費用</div>
                </div>
                <a href="RS_RecordInfo.html">
                    <div class="lst" style="margin-bottom: 1em;color: #707070;">
                        <div> 2021/07/18</div>
                        <div> 高XX</div>
                        <div>2021/06/01</div>
                        <div>11111111</div>
                        <div>3</div>
                        <div>0</div>
                        <div>申請中</div>
                        <div>240</div>
                    </div>
                </a>
                <a href="RS_RecordInfo.html">
                    <div class="lst" style="margin-bottom: 1em; color: #707070;">
                        <div> 2021/06/13</div>
                        <div> 高XX</div>
                        <div>2021/05/20</div>
                        <div>11111111</div>
                        <div>4</div>
                        <div>0</div>
                        <div>已繳費</div>
                        <div>320</div>
                    </div>
                </a>
                <a href="RS_RecordInfo.html">
                    <div class="lst" style="margin-bottom: 1em; color: #707070;">
                        <div> 2021/01/03</div>
                        <div> 高XX</div>
                        <div>2000/12/11</div>
                        <div>11111111</div>
                        <div>1</div>
                        <div>1</div>
                        <div>活動完成</div>
                        <div>280</div>
                    </div>
                </a>
                <a href="RS_RecordInfo.html">
                    <div class="lst" style="margin-bottom: 1em; color: #707070;">
                        <div> 2020/07/22</div>
                        <div> 高XX</div>
                        <div>2020/07/01</div>
                        <div>11111111</div>
                        <div>5</div>
                        <div>0</div>
                        <div>活動完成</div>
                        <div>400</div>
                    </div>
                </a>
            </div>
        </div>

        <!-- 網頁下方的工具列或訊息 -->
        <footer style="margin: 0%;">
            <div style="background-color:#f5be11;padding:0.3%; width:100%; height: 0.3%"></div>
            <div class="grayBlock" style="padding-left:3%;padding-top: 1.5%; padding-bottom:1.5%; color: #ffffff;">
                811726 高雄市楠梓區高雄大學路700號<br> 700, Kaohsiung University Rd, Nanzih District, Kaohsiung 811, Taiwan, R.O.C.<br> 高大總機:886-7-5919000 ｜ 傳真號碼:886-7-5919083<br> 高大校園緊急聯絡電話:886-7-5917885 ｜ 高大警衛室:886-7-5919009<br> 網頁維護:秘書室 ｜ 系統維護:圖書資訊館<br> © 2019
                高雄大學 National University of Kaohsiung<br>
                <br> 意見反映信箱 尊重智慧財產權 網路使用規範要點<br>
            </div>
        </footer>

    </body>

    </html>