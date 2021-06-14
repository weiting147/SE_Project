<!doctype html>
<html>
<script> 
function check_all(obj,cName){
    var checkboxs = document.getElementsByName(cName);
    for(var i=0;i<checkboxs.length;i++){checkboxs[i].checked=obj.checked;} 
} </script>
<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/PAS.css" type="text/css" />

    <meta charset="utf-8">
    <title>PAS_Reject</title>
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
                <span>不核准原因</span>
            </p>
            <div class="text-left" >
                <div style="border: 2px #707070 solid; margin: 0px 300px; padding: 20px 50px ;">
                    <!-- 拒絕內容 -->
                    <p style="margin: 0.5em 0px">
                        <input type="checkbox" id="r1" name="r1" readonly="readonly" />
                        <label for="r1">&nbsp;該時段暫停開放</label>
                    </p>
                    <p style="margin: 0.5em 0px">
                        <input type="checkbox" id="r2" name="rr" onclick="check_all(this,'rr')"  />
                        <label for="r2">&nbsp;訂單填寫缺漏：</label>
                        <p style ="margin:0.25em 0 0 2em;">
                            <input type="checkbox" id="r3" name="rr" readonly="readonly" />
                            <label for="r3">&nbsp;聯絡資訊不完整</label>
                        </p>
                        <p style="margin:0.25em 0 0 2em;">
                            <input type="checkbox" id="r4" name="rr" readonly="readonly" />
                            <label for="r4">&nbsp;使用人數超過上限</label>
                        </p>
                        <p style="margin:0.25em 0  0 2em;">
                            <input type="checkbox" id="r5" name="rr" readonly="readonly" />
                            <label for="r5">&nbsp;露營區或烤肉爐超過可租借數量</label>
                        </p>
                    </p>
                    



                </div>
            </div>
            <!-- 確認鍵 -->
            <div>
                <a href="PAS_FormManage.html"><button type="button"
                        style="cursor: pointer; margin:1em 1em;">返回</button></a>
                <a href="PAS_FormManage.html"><button type="button" 
                        style="cursor: pointer; margin:1em 1em;">確認</button></a>
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