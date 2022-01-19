<?php
// function sms($MobileNo1,$message){
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, "http://www.tqnit.com/smspro/sendsms.php?user=daralhadeth&password=1133557799A&sender=daralhadeth&numbers=" . $MobileNo1 ."&lang=ar&message=" . urlencode($message) . "");
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     $output = curl_exec($ch);
//     curl_close($ch);
// }


function wat($MobileNo1,$message){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://hiwhats.com/API/send?mobile=966507566622&password=Bhs57239900&instanceid=19145&message=" . urlencode($message) . "&numbers=" . $MobileNo1 ."&json=1&type=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
}



$TYPE = "ar";

function sms($MobileNo1,$message){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://mobile.net.sa/sms/gw/?userName=0500995301&userPassword=70064165&numbers=" . $MobileNo1 ."&userSender=daralhadeth&msg=" . urlencode($message) . "&By=standard");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
}
