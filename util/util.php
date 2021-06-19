<?php
function LoginCheck()
{
    $isUser = false;
    if ($_POST) {
        $db = mysqli_connect('localhost', 'A10755demo', 'A10755demo', 'cbs_db');
        // NULL => 空值

        if (!$db) {
            echo "Error!";
            exit();
        }
        $AccountQuery = <<<EOF
            Select * From Account;
        EOF;

        $returnTable = mysqli_query($db, $AccountQuery);

        if (!$returnTable) {
            echo "Query Error";
            exit();
        }

        mysqli_close($db);

        $row = NULL;
        while ($row = mysqli_fetch_row($returnTable)) {
            $num = count($row);
            if ($_POST["account"] == $row[0] && $_POST["password"] == $row[1]) {
                $isUser = true;
                break;
            }
        }
        if ($isUser) {
            // 設置 cookie 為60分鐘
            setcookie("account", $_POST["account"], time() + 3600, '/');
            setcookie("identity", $row[2], time() + 3600, '/');
            if ($row[2] == 0) {
                header("Location:SAS/SAS_File.php");
            }
            else if ($row[2] == 1) {
                header("Location:PAS/PAS_FormManage.php");
            }
            else if ($row[2] == 2) {
                header("Location:CS/CS_Unpaid.php");
            }
            else {
                header("Location:RS/RS_Record.php");
            }
        }
    }
    return $isUser;
}

function CheckEntry($subsystem) {
    if (!$_COOKIE["account"]) {
        header("Location:/index.php");
    }
    if ($subsystem == "RS" && $_COOKIE["identity"] < 3) {
        header("Location:/index.php");
    }
    else if ($subsystem == "SAS" && $_COOKIE["identity"] != 0) {
        header("Location:/index.php");
    }
    else if ($subsystem == "CS" && $_COOKIE["identity"] != 2) {
        header("Location:/index.php");
    }
    else if ($subsystem == "PAS" && $_COOKIE["identity"] != 1) {
        header("Location:/index.php");
    }
}

function GetQueryTable($query)
{
    $db = mysqli_connect('localhost', 'A10755demo', 'A10755demo', 'cbs_db');

    if (!$db) {
        echo "Error!";
        exit();
    }

    $returnTable = mysqli_query($db, $query);

    if (!$returnTable) {
        mysqli_close($db);
        echo "Query Error";
        exit();
    }
    mysqli_close($db);

    return $returnTable;
}

function sendQuery($query) {
    $db = mysqli_connect('localhost', 'A10755demo', 'A10755demo', 'cbs_db');

    if (!$db) {
        echo "Error!";
        exit();
    }
    $successful = mysqli_query($db, $query);

    mysqli_close($db);

    return $successful;
}