<?php
function LoginCheck()
{

    $db = mysqli_connect('localhost','A10755demo', 'A10755demo', 'cbs_db');
    // NULL => 空值

    if (!$db) {
        echo "Error!";
        exit();
    }
    echo "success!";
    
}

function GetQueryTable($query)
{
    $db = mysqli_connect();

    if (!$db) {
        exit();
    }

    $returnTable = mysqli_query($db, $query);

    if (!$returnTable) {
        mysqli_close($db);
        exit();
    }
    mysqli_close($db);

    return $returnTable;
}
