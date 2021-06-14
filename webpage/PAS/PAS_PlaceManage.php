<!doctype html>
<?php
set_include_path($_SERVER["DOCUMENT_ROOT"] . '/util');
require('util.php');
CheckEntry("PAS");
$BBQ_PlaceQuery = <<<EOF
            Select * From Place Where Place_ID Like 'BBQ%' ;
        EOF;
$Camp_PlaceQuery = <<<EOF
        Select * From Place Where Place_ID Like 'Camp%' ;
    EOF;
$BBQ_Tables = GetQueryTable($BBQ_PlaceQuery);
$Camp_Tables = GetQueryTable($Camp_PlaceQuery);
?>
<html>

<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/PAS.css" type="text/css" />

    <meta charset="utf-8">
    <title>PAS_AccountManage</title>
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
                <li><a href="PAS_Record.php">租借紀錄</a></li>
                <li class="grayLi"><a href="PAS_PlaceManage.php">場地管理</a></li>
                <li><a href="PAS_AnnouncementManage.php">公告</a></li>
            </ul>
            <!-- 下拉式選單 -->
            <ul class="dropDown">
                <li class><a href="#">Hi,
                        <span>系統管理員</span>
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
                場地列表
            </p>


            <!-- 列表內容 -->
            <div class="lsttitle" style="margin-bottom: 1em; font-weight: bold;color: black; ">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div>
                    <input type="button" value="新增場地" onclick="location.href = 'PAS_CreatePlace.php'" style="cursor: pointer;">
                </div>
            </div>
            <div style="border: 2px #707070 solid; margin: 50px 150px; padding: 20px 50px ;">
                <p class="title">烤肉區</p>

                <div>
                    <div class="lst" style="margin: 1em; font-weight: bold;color: black;text-align:center;">
                        <div></div>
                        <div></div>
                        <div>編號</div>
                        <div>價格</div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <?php
                $row = NULL;
                while ($row = mysqli_fetch_row($BBQ_Tables)) {
                    echo <<<EOF
                        <div class="lst" style="margin: 1em ;color: #707070;">
                            <div></div><div></div>
                            <div>$row[0]</div>
                            <div>$row[1]</div>
                            <div><input type="button" value="修改" 
                            onclick="location.href = 'PAS_ModifyPlace.php'" 
                            style="cursor: pointer;"></div>
                            <div><input type="button" value="刪除" 
                            onclick="location.href = 'PAS_DeletePlaceCheck.php'" 
                            style="cursor: pointer;"></div>
                            <div></div><div></div>
                        </div>
                        EOF;
                }
                ?>

            </div>

            <!--露營區-->
            <div style="border: 2px #707070 solid; margin: 50px 150px; padding: 20px 50px ;">
                <p class="title">露營區</p>
                <div>
                    <div class="lst" style="margin: 1em; font-weight: bold;color: black;text-align:center;">
                        <div></div>
                        <div></div>
                        <div>編號</div>
                        <div>價格</div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <?php
                $row = NULL;
                while ($row = mysqli_fetch_row($Camp_Tables)) {
                    echo <<<EOF
                        <div class="lst" style="margin: 1em ;color: #707070;">
                            <div></div><div></div>
                            <div>$row[0]</div>
                            <div>$row[1]</div>
                            <div><input type="button" value="修改" 
                            onclick="location.href = 'PAS_ModifyPlace.php'" 
                            style="cursor: pointer;"></div>
                            <div><input type="button" value="刪除" 
                            onclick="location.href = 'PAS_DeletePlaceCheck.php'" 
                            style="cursor: pointer;"></div>
                            <div></div><div></div>
                        </div>
                        EOF;
                }
                ?>
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