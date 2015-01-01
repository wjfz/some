<?php
header('Content-type:text/html;charset=utf-8');
require_once('bankList.php');

function bankInfo($card,$bankList)
{
    $card_8 = substr($card, 0, 8);
    if (isset($bankList[$card_8])) {
        echo $bankList[$card_8];
        return;
    }
    $card_6 = substr($card, 0, 6);
    if (isset($bankList[$card_6])) {
        echo $bankList[$card_6];
        return;
    }
    $card_5 = substr($card, 0, 5);
    if (isset($bankList[$card_5])) {
        echo $bankList[$card_5];
        return;
    }
    $card_4 = substr($card, 0, 4);
    if (isset($bankList[$card_4])) {
        echo $bankList[$card_4];
        return;
    }
    echo '该卡号信息暂未录入';
}

bankInfo('6228481552887309119',$bankList);