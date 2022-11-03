<?php
/*
$info["members"][$chat_id]["point"] نقاط العضو
*/
@$token = filter_var($_GET["5638963200:AAEz3Gwbbm5a1-7aPP-nLBfTcE_3neq2FSs"], FILTER_SANITIZE_STRING);
if ( isset($token) ):
define("API_KEY", $token);
function bot($method, $datas = [])
{
$url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
$res = curl_exec($ch);
if (curl_error($ch)) {
var_dump(curl_error($ch));
} else {
return json_decode($res);
}
}
@$update = json_decode(file_get_contents("php://input"));
@$info = json_decode(file_get_contents("stor/info.json"),1);
@$numbers = json_decode(file_get_contents("stor/numbers.json"),1);
@$readynumber = json_decode(file_get_contents("stor/readynum.json"),1);
@$static = json_decode(file_get_contents("stor/static.json"),1);
@$point = json_decode(file_get_contents("stor/point.json"),1);
@$check = json_decode(file_get_contents("stor/check.json"),1);
@$chart = json_decode(file_get_contents("data/$chat_id.json"),1);
@$refral = json_decode(file_get_contents("stor/refral.json"),1);
@$favourite = json_decode(file_get_contents("stor/favourite.json"),1);
if(!is_dir("data")) mkdir("data");
if(!is_dir("stor")) mkdir("stor");
if(!is_dir("mem")) mkdir("mem");
function done($array){
	global $chat_id;
@file_put_contents("data/$chat_id.json",json_encode($array));
}
function save($array,$file="info"){
@file_put_contents("stor/$file.json",json_encode($array));
}
function decrypt($tex){
    return @openssl_decrypt($tex,"AES-256-CFB1", 1 );}
function encrypt($a){
    return @openssl_encrypt($a,"AES-256-CFB1", 1 );}


$message=$update->message;
$call=$update->callback_query;
$text = $message->text;
$data = $call->data;
$chat_id = $message->chat->id ?? $call->message->chat->id;
$id = $message->from->id ?? $call->from->id;
$message_id = $message->message_id ?? $call->message->message_id;
$fname = $message->from->first_name ?? $call->from->first_name;
$user = $message->from->username ?? $call->from->username;
$photo = $message->photo;
$photo_id = $photo->file_id;
$calid = $update->callback_query->id;
$bot   =   bot('getme',['bot'])->result->username;
$el = explode(" " , $text);
$channel ='1984496548';
$key = [1,2,3,4,5,6,7,8,9 ,"♻️",0, "❌" , "✔"];

if($user == null) $user = "no user name";
$admin = -'1984496548';
@$members = explode("\n",file_get_contents('mem/members.txt'));
@$ex = explode("#",$data);
@$tet =  explode(" " , $text);

$Asia              = ["البحرين 🇧🇭" => "973" ,"الصين 🇨🇳" => "86"  , "كازاخستان 🇰🇿" => "+7" , "السعودية 🇸🇦" => "966"  , "عمان 🇴🇲" => "968" , "قطر 🇶🇦" => "974"  , "أندونيسيا 🇮🇩" => "62"  , "الكويت 🇰🇼" => "965" , "الأردن 🇯🇴" => "962" , "نيبال 🇳🇵" => "977" , "قرغيزستان 🇰🇬" => "996"  , "الهند 🇮🇳" => "91" , "ماليزيا 🇲🇾" => "60" , "منغوليا 🇲🇳" => "974"  , "سيريلانك 🇱🇰" => "94"  , "باكستان 🇵🇰" => "92" , "أوزبكستان🇺🇿" => "998" , "العراق 🇮🇶" => "964" , "أفغانستان 🇦🇫" => "93"  , "الإمارات 🇦🇪" => "971" , "هونغ 🇭🇰" => "852"  , "اليمن 🇾🇪" => "967" , "ميانمار 🇲🇲" => "95" , "تايوان 🇹🇼" => "886" , "بنغلاديش🇧🇩" => "880"  ,"جورجيا 🇬🇪" => "995" , "الفلبين 🇵🇭" => "63"  , "كمبوديا 🇰🇭" => "855" , "لاوس 🇱🇦" => "856"  , "تايلاند 🇹🇭" => "66" , "فيتنام 🇻🇳" => "84" , "ارمينيا 🇦🇲" => "374"  , "المالديف 🇲🇻" => "960" , "طاجيكستان 🇹🇯" => "992" , "تركمانستان🇹🇲" => "993" ];
$Africa           = ["مصر 🇪🇬" => "20", "أثيوبيا 🇪🇹" => "251", "تونس 🇹🇳" => "216" , "توجو 🇹🇬" => "228" , "ليبيا 🇱🇾" => "218", "كينيا 🇰🇪" => "254", "السودان 🇸🇩" => "249", "الجزائر 🇩🇿" => "213", "المغرب 🇲🇦" => "212", "موريتانيا 🇲🇷" => "222", "الصومال 🇸🇴" => "252", "الكاميرون 🇨🇲" => "237", "ناميبيا 🇳🇦" => "264" , "انغولا 🇦🇴" => "244", "مدغشقر 🇲🇬" => "261" , "زامبيا 🇿🇲" => "260", "جزر القمر 🇰🇲" => "269" , "السنغال 🇸🇳" => "221" , "ليبيريا 🇱🇷" => "231", "مالي 🇲🇱" => "223", "أوغندا 🇺🇬" => "256", "نيجيريا 🇳🇬" => "234", "غامبيا 🇬🇲" => "220", "ملاوي 🇲🇼" => "265", "تنزانيا 🇹🇿" => "255", "جنوب افريقيا 🇿🇦" => "27"];
$Erub              = [ "استونيا 🇪🇪" => "372" , "بولندا 🇵🇱" => "48", "روسيا 🇷🇺" => "7" , "البرتغال 🇵🇹" => "351", "اسبانيا 🇪🇸" => "34" , "أيرلندا 🇮🇪" => "353" , "فرنسا 🇫🇷" => "33", "قبرص 🇨🇾" => "357" , "تركيا 🇹🇷" => "90" , "المانيا 🇩🇪" => "49", "مولدوفا 🇲🇩" => "373" , "النرويج 🇳🇴" => "47" , "بلجيكا 🇧🇪" => "32", "السويد 🇸🇪" => "46", "لاتفيا 🇱🇻" => "371" , "رومانيا 🇷🇴" => "40", "هولندا 🇳🇱" => "31", "بلغاريا 🇧🇬" => "359" , "استراليا 🇦🇺" => "61", "النمسا 🇦🇹" => "43"];
$Amrica         = [ "فنزويلا 🇻🇪" => "58" , "كولومبيا 🇨🇴" =>"57" , "امريكا 🇺🇲" => "1", "الأرجنتين 🇦🇷" => "54" , "البرازيل 🇧🇷" => "55" , "بيرو 🇵🇪" => "51", "المكسيك 🇲🇽" => "52" , "بوليفيا 🇧🇴" => "391", "بابو 🇵🇬" => "675" , "الإكوادور 🇪🇨" => "593" , "كندا 🇨🇦" => "+1", "باراغواي 🇵🇾" => "595", "هايتي 🇭🇹" => "509" , "بنما 🇵🇦" => "507" , "هندوراس 🇭🇳" => "504", "سيلفادور 🇸🇻" => "salvador", "نيكاراغو 🇳🇮" => "505", "كاليدونيا 🇳🇨" => "687" ];
#=======5sim_country========#
$Asia5sim      = [ "bahrain" , "china" ,  "kazakhstan" ,  "saudiarabia" ,  "oman" ,  "qatar" ,  "indonesia",  "kuwait" ,  "jordan" ,  "nepal" ,  "kyrgyzstan" ,  "india" ,  "malaysia",  "mongolia" ,  "srilanka" ,  "pakistan" ,  "uzbekistan",  "iraq" ,  "afghanistan" ,  "uae",  "hongkong" ,  "yemen" ,  "myanmar",  "taiwan" ,  "bangladesh" , "georgia",  "philippines" ,  "cambodia" ,  "laos",  "thailand",  "vietnam" ,  "armenia" ,  "maldives",  "tajikistan" ,  "turkmenistan" ];
$Africa5sim   = [ "egypt",  "ethiopia",  "tunisia" ,  "togo" ,  "libya",  "kenya",  "sudan",  "algeria",  "morocco",  "mauritania",  "somalia",  "cameroon",  "namibia" ,  "angola",  "madagascar" ,  "zambia",  "comoros" ,  "senegal" ,  "liberia",  "mali",  "uganda",  "nigeria",  "gambia",  "malawi",  "tanzania",  "southafrica"];
$Erub5sim      = [ "estonia" ,  "poland",  "russia" ,  "portugal",  "spain" ,  "ireland" ,  "france",  "cyprus" ,  "turkey" ,  "germany" , "moldova" , "norway" ,  "belgium",  "sweden",  "latvia" , "romania",  "netherlands",  "bulgaria" ,  "australia",  "austria"];
$Amrica5sim = [  "venezuela" , "colombia" ,  "usa",  "argentina" ,  "brazil",  "peru",  "mexico" ,  "bolivia",  "papuanewguinea" ,  "ecuador" ,  "canada",  "paraguay",  "haiti" ,  "banama" ,  "honduras",  "salvador",  "nicaragua" ,  "newcaledonia" ];
#=====SmsMan_country======#
$Erubsms      = [ "34","15","0","117","56","23","78","77","62","43","85","174","82","46","49","32","48","83","175","50"];
$Amricasms = ["70","33","187","39","73","65","54","92","79","105","36","87","26","112","88","101","90","185" ];
$Africasms   = ["21","71","89","99","102","8","98","58","37","114","149","41","138","76","17","147","133","61","135","69","75","19","28","137","9","31"];
$Asiasms      = ["145","3","2","53","107","111","6","100","116","81","11","22","7","72","64","66","40","47","74","95","14","30","5","55","60","128","4","24","25","52","10","148","159","143","161" ];
#==========function========#
function send($text, $list = [])
{
global $chat_id;
$result = bot("sendmessage", [
"chat_id" => $chat_id,
'text' => $text,
"parse_mode"=>"markdown",
"reply_markup" => json_encode([
"inline_keyboard" => $list
])
])->result;
return $result;
}
function answer($text) {
global $calid;
bot('answercallbackquery',[
'callback_query_id' => $calid,
'text'=>$text,
'show_alert'=>true,
]);
}

function sendd($chat_id,$text, $list = [])
{
$result = bot("sendmessage", [
"chat_id" => $chat_id,
'text' => $text,
"parse_mode"=>"markdown",
"reply_markup" => json_encode([
"inline_keyboard" => $list
])
])->result;
return $result;
}
function keys($val,$arr) {
        if(empty ($val)) $z ="كلمة المرور";
        else $z=$val;
        $a =1;
        $nhh[inline_keyboard][0][] = ['text' => $z, callback_data => "nothing"];

        foreach($arr as $i => $va) :
        if(preg_match("/\d/",$va)){
        $b ="ok#$val#$va";
        } elseif($va =="❌") {$b ="del#$val";
        } elseif($va =="♻️") {$b ="ok#-----"; 
        } elseif($va =="✔") {$b ="true#$val"; }
       $nhh[inline_keyboard][$a][] = ['text' => $va, callback_data => $b];
       if(($i+1)%3==0)$a++;
       endforeach;
        return json_encode($nhh);
   }
function edit($text, $list = [])
{
global $chat_id;
global $message_id;
$result = bot("editmessagetext", [
"chat_id" => $chat_id,
'text' => $text,
"message_id" => $message_id,
"parse_mode"=>"markdown",
"reply_markup" => json_encode([
"inline_keyboard" => $list
])
])->result;
return $result;
}

if($chat_id==$admin){
require_once "admin.php";
} else {
require_once "user-section.php";
require_once "login.php";
}

#===============
#api_key
#5sim
$ApiKey5sim        = "1d8434c131af4c9988309662811e8654";//5sim
$api_key_vak        = "736b708a89c44a28be69b9493fbe6175";//vak
#sms
$ApiKeySmsMan = "Ipsdinasq3x4Ndra1yf921hhVJHBY0*ZVxvdj91qTQZSnUN";//sms


#functions
#5sim============================================================================
function getBalance5sim(){
$api = file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=getBalance");
if ( $api == "BAD_KEY" || $api == "ERROR_SQL" ):
$result = "false";
else :
$result = $api;
endif;
return $result;
}
function getNumber5sim($service,$country,$operator){
$api = file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=getNumber&service=$service&forward=forward&operator=$operator&country=$country") ;
if ( $api == "BAD_ACTION" || $api == "BAD_SERVICE" || $api == "BAD_KEY" || $api == "ERROR_SQL" ):
$result = ["result"=>$api];
elseif( $api == "NO_NUMBERS" || $api == "NO_BALANCE" ):
$result = ["result"=>$api];
else:
$ApiExploded = explode(":",$api);
$result = ["result"=>"true","number" => $ApiExploded[2], "idnumber" => $ApiExploded[1]];
endif;
return $result;
}
function setStatus5sim($idnum,$status){ #هذا لالغاء الرقم او حظره او انهاء الطلب
/*
-1 = cencel older
6 = finish older
8 = ban number
*/
$api = file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=setStatus&status=$status&id=$idnum");
if ( $api == "ACCESS_ACTIVATOIN" ):
$result = ["resutl"=>"true","action"=>$api];
else:
$result = ["result"=>"false","ation"=>$api];
endif;
return $result;
}
function getCode5sim( $idnum ) { #get the code
$api = file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=getStatus&id=$idnum");
$explodedApi = explode(":",$api);
if ( $explodedApi[0] == "STATUS_OK" ):
$result = ["result"=>"true","code"=>$explodedApi[1]];
else:
$result = ["result"=>"false","action"=>$api];
endif;
return $result;
}
#vak===============================================================================
function getBalanceVak(){
$api = json_decode(file_get_contents("https://vak-sms.com/api/getBalance/?apikey=$api_key_vak"));
if ( $api->error == null ):
$result = $api->balance;
else:
$result = $api->error;
endif;

return $result;
}
function getNumberVak($service,$country){
$vak = json_decode(file_get_contents("https://vak-sms.com/api/getNumber/?apikey=$api_key_vak&service=$service&country=$country"));
if ( $vak->tel != null ):
$result = ["result"=>"true","number"=>$vak->tel, "idnum" =>$vak->idNum] ; 
else:
$result = ["result"=>$api->error];
endif;
return $result;
}
function getStatusVak($status,$idnum){
/*
status:
end = cancel the number
bad = banned
send = the number is ready



*/
$api = json_decode(file_get_contents("https://vak-sms.com/api/setStatus/?apikey=$api_key_vak&status=$status&idNum=$idnum"));
//$api->error == null

}
function getSmsVak($idnum){
$vak = json_decode(file_get_contents("https://vak-sms.com/api/getSmsCode/?apiKey=$api_key_vak&idNum=$idnum&all"));
if ( $vak->error != null ):
$result = ["result"=>"false"];
elseif ( $vak->smsCode == null ):
$result = ["result"=>"NoCode"];
else:
$result = ["result"=>"true","code"=>$vak];//some time code be as an array
endif;
return $result;
}
#sms======================================================================================
function getBalance(){
$sms = file_get_contents("https://sms-activate.ru/stubs/handler_api.php?api_key=$api_key_sms&action=getBalance");
$explodedApi = explode(":",$sms);
if ( $explodedApi[0] == "ACCESS_BALANCE" ):
$result = ["result"=>"true","balance"=>$explodedApi[0]];
else:
$result = ["result"=>$sms];
endif;
return $result;
}
function getNumberSms($service,$country){
$sms = file_get_contents("https://sms-activate.ru/stubs/handler_api.php?api_key=$api_key_sms&action=getNumber&service=$service&country=$country");
$explodedApi = explode(":",$api);
if ( $explodedApi[0] == "ACCESS_NUMBER" ):
$result = ["result"=>"true","number"=>$explodedApi[2], "idnum"=>$explodedApi[1]];
elseif($sms == "NO_BALANCE"):
$result = ["result" => "NO_BALANCE"];
else:
$result = ["result"=>$api];
endif;
return $result;
}
function getStatusSms($idnum ,$status){
$sms = file_get_contents("https://sms-activate.ru/stubs/handler_api.php?api_key=$api_key_sms&action=setStatus&id=$idnum&status=$status"); 
/*
status
6 done
8 band
*/
if ( $sms == "ACCESS_ACTIVATION" || $sms == "ACCESS_CANCEL" ):
$result = ["result"=>"true"];
else:
$result = ["result"=>$sms];
endif;
return $result;
}
function getSmsSms($idnum){
$sms = file_get_contents("https://sms-activate.ru/stubs/handler_api.php?api_key=$api_key_sms&action=getStatus&id=$idnum");
$explodedApi = explode(":",$sms);
if ( $explodedApi[1] != null ):
$result = ["result"=>"true","code"=>$explodedApi[1]];
elseif( $api == "STATUS-WAIT_CODE" ):
$result = ["result"=>"nocode"];
else:
$result = ["result"=>$api];
endif;
return $result;
}
#================
else:
die("@Baageel_Programmer");
endif;










