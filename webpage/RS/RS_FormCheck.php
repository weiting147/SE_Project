<!doctype html>
<?php
set_include_path($_SERVER["DOCUMENT_ROOT"] . '/util');
require('util.php');
CheckEntry("RS");

$appTime = date('Y/m/d H:i:s');

$acc=$_COOKIE['acc'];
$userName=$_COOKIE['userName'];
$Email=$_COOKIE['Email'];
$Phone=$_COOKIE['Phone'];
$Address=$_COOKIE['Address'];
$studentID=$_COOKIE['studentID'];

$appUnit=$_POST['appUnit'];
$peopleNum=$_POST['peopleNum'];
$receiptPayer=$_POST['receiptPayer'];
$or=$_POST['or'];
$oRentY=$_POST['oRentY'];
$oRentM=$_POST['oRentM'];
$oRentD=$_POST['oRentD'];
$oRentT=$_POST['oRentT'];
$oNum=$_POST['oNum'];
$cr=$_POST['cr'];
$cRentY=$_POST['cRentY'];
$cRentM=$_POST['cRentM'];
$cRentD=$_POST['cRentD'];
$cReturnY=$_POST['cReturnY'];
$cReturnM=$_POST['cReturnM'];
$cReturnD=$_POST['cReturnD'];
$cNum=$_POST['cNum'];
$thing=$_POST['thing'];
$thing2=$_POST['thing2'];
$thing3=$_POST['thing3'];
$thing4=$_POST['thing4'];
$thing5=$_POST['thing5'];
$thing6=$_POST['thing6'];
$camp=$_POST['camp'];
$camp2=$_POST['camp2'];
$camp3=$_POST['camp3'];
$camp4=$_POST['camp4'];
$camp5=$_POST['camp5'];
$camp6=$_POST['camp6'];

$ovenNum=0;
if($thing=='valuable')
    $ovenNum++;
if($thing2=='valuable')
    $ovenNum++;
if($thing3=='valuable')
    $ovenNum++;
if($thing4=='valuable')
    $ovenNum++;
if($thing5=='valuable')
    $ovenNum++;
if($thing6=='valuable')
    $ovenNum++;

$campNum=0;
if($camp=='valuable')
    $campNum++;
if($camp2=='valuable')
    $campNum++;
if($camp3=='valuable')
    $campNum++;
if($camp4=='valuable')
    $campNum++;
if($camp5=='valuable')
    $campNum++;
if($camp6=='valuable')
    $campNum++;

echo $ovenNum.'<br>';
echo $campNum.'<br>';


// sql insert application

//$newApplicant = <<<EOF
    //Insert Into Applicant_form values ('$acc','001','$peopleNum','$appTime','統編','$appUnit','TaxNumber','$ovenNum','$campNum',0,0,0);    
//EOF;

//$ret = sendQuery($newApplicant);

?>
<html>

<head>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/Form.css" type="text/css" />

    <meta charset="utf-8">
    <title>RS_FormCheck</title>
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
                <li class="grayLi"><a href="PS_Form.html">租借場地</a></li>
                <li><a href="RS_Record.html">個人紀錄</a></li>
                <li><a href="RS_QueryPlace.html">場地使用狀況</a></li>
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
        <div class="text">
            <p class="title">
                注意事項
            </p>
            <div class="notice">
                一、申請案經本校審核通過並接獲通知後，最遲需於使用前一日將應繳款項：
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; １. 臨櫃(無法使用ATM)匯至「帳戶：033056000076(土地銀行高雄分行)，戶名：國立高雄大學401專戶」後，
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 來電通知或將繳費收據傳真至本校，傳真號碼：(07)591-9017。
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ２. 逕至本校總務處事務拿取申請書，並至出納組現金繳費。
                <br>二、因本校須向國稅局繳納營業稅，請繳款人詳填公司名稱、統一編號或稅籍編號。
            </div>
            <div style="border: 2px #707070 solid; margin: 0px 100px; padding-top: 20px">
                <p class="title">
                    訂單資訊
                </p>
                <!-- 訂單資訊 -->
                <div class="content">
                    <p> 申請人：</p>
                    <?php
                    echo "<input type=\"text\" readonly=\"readonly\" value=\"$userName\" style=\"width: 18em;\" />";
                    ?>
                    <p>申請單位：</p>
                    <?php
                    echo "<input type=\"text\" style=\"width: 18em;\" readonly=\"readonly\" value=\"$appUnit\" />";
                    ?>
                </div>
                <div class="content">
                    <div style="display: flex; align-items: flex-end;">
                        <p>學號</p>
                        <p style="font-size: 0.7em;">(校內學生借用)</p>
                        <p>：</p>
                    </div>
                    <?php
                    echo "<input type=\"text\" readonly=\"readonly\" value=\"$studentID\" style=\"width: 18em;\" />";
                    ?>
                    <p>聯絡單位：</p>
                    <?php
                    echo "<input type=\"text\" readonly=\"readonly\" value=\"$Phone\" style=\"width: 18em;\" />";
                    ?>
                </div>
                <div class = "content">
                    <p>統一編號：</p>
                    <input type="text" style="width: 18em;" readonly="readonly"/>
                    <p>稅籍編號：</p>
                    <input type="text" style="width: 18em;" readonly="readonly"/>
                </div>
                <div class="content">
                    <p>電子信箱：</p>
                    <?php
                    echo "<input type=\"text\" readonly=\"readonly\" value=\"$Email\" style=\"width: 28em;\" />";
                    ?>
                    <p>使用總人數：</p>
                    <?php
                    echo "<input type=\"text\" style=\"width: 8em;\" readonly=\"readonly\" value=\"$peopleNum\" />";
                    ?>
                </div>
                <div class="content" style="margin-bottom: 5px;">
                    <p style="width: 12em;">收據繳款(人)(公司名稱)：</p>
                    <?php
                    echo "<input type=\"text\" style=\"width: 50em;\" readonly=\"readonly\" value=\"$receiptPayer\" />";
                    ?>
                </div>
                <div style="margin: 0px 150px;">
                    <p style="text-align: left; width: 30em; font-size: 0.7em;">(如為公司請詳填全名，開立收據後不可更改收據抬頭)</p>
                </div>
                <div class="content">
                    <p> 地址：</p>
                    <?php
                    echo "<input type=\"text\" readonly=\"readonly\" value=\"$Address\" style=\"width: 52em;\" />";
                    ?>
                </div>
                <div style="margin: 25px 150px; text-align: left;">
                    <span style="font-weight: bold;"> 是否租借烤肉區？</span> &nbsp;&nbsp;
                    <!--空格-->
                    <?php
                    if($or==1){
                    ?>
                        <label for="r1">是</label>
                        <input type="radio" id="r1" name="or" readonly="readonly" checked="true"/> &nbsp;&nbsp;
                        <label for="r2">否</label>
                        <input type="radio" id="r2" name="or" readonly="readonly" />
                    <?php
                    }
                    else{
                    ?>
                        <label for="r1">是</label>
                        <input type="radio" id="r1" name="or" readonly="readonly" /> &nbsp;&nbsp;
                        <label for="r2">否</label>
                        <input type="radio" id="r2" name="or" readonly="readonly" checked="true"/>
                    <?php
                    }
                    ?>
                </div>
                <div class="content">
                    <div class="contentflex" style="width: 28.8em;">
                        <p>租借日期：</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 7em;\" readonly=\"readonly\" value=\"$oRentY\" />";
                        ?>
                        <p>年</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 7em;\" readonly=\"readonly\" value=\"$oRentM\" />";
                        ?>
                        <p>月</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 7em;\" readonly=\"readonly\" value=\"$oRentD\" />";
                        ?>
                        <p>日</p>
                    </div>
                    <div class="contentflex" style="width: 20em;">
                        <p>時段：</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 18em;\" readonly=\"readonly\" value=\"$oRentT\" />";
                        ?>
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
                        <?php
                        echo "<input type=\"text\" style=\"width: 5em;\" readonly=\"readonly\" value=\"$oNum\"/>";
                        ?>
                        <span>個</span>
                    </div>
                </div>
                <div style="margin: 25px 150px; text-align: left;">
                    <span style="font-weight: bold;"> 是否租借露營區？</span> &nbsp;&nbsp;
                    <!--空格-->
                    <?php
                    if($or==1){
                    ?>
                        <label for="r3">是</label>
                        <input type="radio" id="r3" name="cr" readonly="readonly" checked="true"/> &nbsp;&nbsp;
                        <label for="r4">否</label>
                        <input type="radio" id="r4" name="cr" readonly="readonly" />
                    <?php
                    }
                    else{
                    ?>
                        <label for="r3">是</label>
                        <input type="radio" id="r3" name="cr" readonly="readonly" /> &nbsp;&nbsp;
                        <label for="r4">否</label>
                        <input type="radio" id="r4" name="cr" readonly="readonly" checked="true"/>
                    <?php
                    }
                    ?>
                </div>
                <div class="content">
                    <div class="contentflex" style="width: 55em;">
                        <p>租借日期：</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 7em;\" readonly=\"readonly\" value=\"$cRentY\" />";
                        ?>
                        <p>年</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 7em;\" readonly=\"readonly\" value=\"$cRentM\" />";
                        ?>
                        <p>月</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 7em;\" readonly=\"readonly\" value=\"$cRentD\" />";
                        ?>
                        <p>日</p>
                        <p>~</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 7em;\" readonly=\"readonly\" value=\"$cReturnY\" />";
                        ?>
                        <p>年</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 7em;\" readonly=\"readonly\" value=\"$cReturnM\" />";
                        ?>
                        <p>月</p>
                        <?php
                        echo "<input type=\"text\" style=\"width: 7em;\" readonly=\"readonly\" value=\"$cReturnD\" />";
                        ?>
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
                        <?php
                        echo "<input type=\"text\" style=\"width: 5em;\" readonly=\"readonly\" value=\"$cNum\"/>";
                        ?>
                        <span>個</span>
                    </div>
                </div>
                <div class="content">
                    <p style="font-size: 0.8em; width: auto;" ;>
                        備註：<br> 1. 烤肉爐租借一時段為 4 小時，若有特殊需求，請洽事務組 07-5919094)<br> 2. 營位租借以日為單位，時間為12：30~翌日11：30<br> 3. 若是校外人士租借，汽車停車收費方式(請先自備場地繳費收據正本或影本，並於進校園時出示給警衛室)： 將以日計費/每台車收30元。
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
            <p class="title" style="margin-top: 2em;">
                校園地圖
            </p>
            <div style="margin: 2em;">
                <img src="/asset/校園地圖.png" style="width: 80%;" />
            </div>
            <!-- 確認鍵 -->
            <div>
                <a href="RS_Record.php"><button type="button" style="cursor: pointer;">確認</button></a>
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