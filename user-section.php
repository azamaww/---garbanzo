<?php
$sharh="1- أهلا بك في شرح بوت $bot ✅

2- لإستخدام هذا البوت عليك أولاً شحن حسابك بإحدى طرق الدفع المقبولة بالبوت ✅

3- لشحن حسابك قم بالضغط على زر 💰شحن الرصيد ومن ثم عليك إختيار طريقة دفع متوفرة لديك ومقبولة بالبوت ✅

4- بعد شحن رصيدك قم بالضغط على زر ☎ شراء رقم من البوت ومن ثم قم بإختيار التطبيق المطلوب ومن ثم الدولة التي تريد رقم لها ✅

5- في حال عدم وصول الكود يمكنك 🚫 حظر الرقم، لا تقلق لن يتم خصم سعر الرقم من رصيدك إلا بعد وصول الكود ✅

6- لتحويل رصيد إلى مستخدم آخر قم بالضغط على زر 🔄 تحويل رصيد ثم أرسل أيدي الشخص الذي تريد تحويل الرصيد له ثم أرسل الكمية التي تريد تحويلها، بالتوفيق 🌸✅";//شرح البوت
#================#
$ApiKey5sim        = "1d8434c131af4c9988309662811e8654";//5sim
$api_key_vak        = "736b708a89c44a28be69b9493fbe6175";//vak
$ApiKeySmsMan = "Ipsdinasq3x4Ndra1yf921hhVJHBY0*ZVxvdj91qTQZSnUN";//sms
#==============#

if(isset($update)):
if(($data == "home" || $text) && $info[$chat_id]["checker"] == "stop"){
	send("لا يمكنك استخدم البوت نظرا لانه لديك طلب معلق قم بحظر الرقم الذي طلبته او حظره لتتمكن من استخدام البوت");
    exit;
    }
    @$home=[[["text"=>"القائمة الرئيسية 🏡","callback_data"=>"home"]]]; //home
#==============#
if( $point["members"][$check[$chat_id]['mail']]['point'] == null ):
            $point["members"][$check[$chat_id]['mail']]["point"] = 0;//نقاط العضو
            save($point,"opint");
endif;
#==============#

#===CHECK_MAIL======#
if($data=="home" && $check[$chat_id]["mail"] == null):
answer("لا يمكنك استخدام البوت قم بإنشاء حساب أولا 🛑");
exit; endif;
#===CHECK_MAIL======#

if( $text == "/start" ):    
    
        $info["members"][$chat_id]["mode"] =   null;
        save($info);
        send("☑️ ⁞ الرجاء الضغط على الزر بالأسفل لبدء الإستخدام.

💥 ⁞ قناة البوت الرسمية: @DIDSIM", [
            [
                ["text"=>" ↩️¦ دخول البوت","callback_data"=>"login_pannel"]
            ]
            ]);      
         exit; 
#==============#     
elseif ( $data == "home"):
              $info["members"][$chat_id]["mode"] =   null;
              $info[$chat_id]['mode'] =null;
              save($info);
              edit( "👨‍✈️ ⁞  اهلا بك:[$fname](tg://user?id=$chat_id)  🤍🌺
        
📧 ¦ إيميلك :" .$check[$chat_id][ mail ] ."
🎟 ¦ ايدي حسابك : $id 🆔
💳 ¦ رصيدك : ₽  💴 . " . $point["members"][$check[$chat_id]['mail']]["point"] . " \n
✅ ¦ قناة البوت الرسمية : @DIDSIM

|🔱|يمكنك التحكم بالبوت عبر الأزرار في الاسفل." , [
            [
                ["text"=>'☎¦️ شراء رقم. ',"callback_data"=>"numbers"]
            ],
            [
                
                ["text"=>"✴️¦ الارقام الجاهزة. ️","callback_data"=>"readynumbers"],
                ["text"=>"💰¦ شحن روبل. ","callback_data"=>"shahn"]
            ],
            [
                ["text"=>"🌟¦ قسم العروض. ","callback_data"=>"fav"],
                ["text"=>"🏷¦ قسم الكروت. ","callback_data"=>"market_cards"]
            ],       
            [
                ['text'=>"مشاركة رابط الإحالة ✔",'callback_data'=>"collect"]
            ],
            [
                ["text"=>"⚙¦ الاعدادات. ","callback_data"=>"settings"],
                ["text"=>"🔍¦ البحث السريع. ","callback_data"=>"search"]
            ],       
            [
                ["text"=>"⁞ سجل الحساب 🅿️","callback_data"=>"info"],
                ["text"=>"🔄¦ تحويل روبل. ","callback_data"=>"transfer"],
            ],
            [
                ['text'=>"📮¦ خدمة العملاء.",'callback_data'=>"help"]
            ]
            ]);      
        exit;
#==============#        
elseif($el[0] == "/start") :
$link = decrypt($el[1]);
send($link." elias");
if($refral[$chat_id]["ref"] == null && $link != $check[$check[$chat_id]["mail"]]["idd"]) {       
        $refral[$link]["invit"]++;
        $refral[$chat_id]["ref"] = $link;
        save($refral , "refral");
sendd($link , "قام " . "[$chat_id](tg://user?id=$chat_id) " . " بالدخول إلى فريقك عدد أعضاء فريقك الحالي " . $refral[$link]["invit"] );
send("شكرا لإنضمامك إلى البوت الخاص بنا يمكنك إنشاء حساب والتمتع بخدماتنا " , [
            [
                ["text"=>" ↩️ ¦ دخول البوت","callback_data"=>"login_pannel"]
            ]
    ]);
}
exit;
elseif ($ex[0] =="numbers" ):
edit("☑️ ⁞ إختر البرنامج الذي تريد تفعيله. ☺️🌺",[           
                [                
                    ["text"=>"★⁞☎️وتساب💭", "callback_data"=>"con#wa#whatsapp"]
                ],
                [
                    ["text"=>"★⁞☎️تيليجرام💭", "callback_data"=>"con#tg#telegram"],
                    ["text"=>"★⁞☎️فيسبوك💭", "callback_data"=>"con#fb#facebook"]
                ],
                [
                    ["text"=>"★⁞☎️ايمو💭", "callback_data"=>"con#im#imo"],
                    ["text"=>"★⁞☎️جوجل💭", "callback_data"=>"con#go#google"]
                ],
                [
                    ["text"=>"★⁞☎️انستجرام💭", "callback_data"=>"con#ig#instagram"],
                    ["text"=>"★⁞☎️تويتر💭", "callback_data"=>"con#tw#twitter"]
                ],
                [
                    ["text"=>"★⁞☎️يلاشات💭", "callback_data"=>"con#yl#yalla"],
                    ["text"=>"★⁞☎️فايبر💭", "callback_data"=>"con#fa#viber"]
                ],
                [                
                    ["text"=>"القائمة الرئيسية 🏡", "callback_data"=>"home"]
                ]
                ]);
#==============#               
        elseif( $ex[0]  == "con") :
        edit("☑️ ⁞ إختر القارة التي تريد شراء رقم منها ☺️🌸  🛍️ ⁞ يوجد اكثر من 180 دولة متوفرة" , [
        
              [['text'=>' ⁞ خدمة البحث السريع 🔎','callback_data'=>"searching"]],
              [['text'=>'★⁞ قارة آسيا 🌎','callback_data'=>"server#Asia#$ex[1]#$ex[2]"],
              ['text'=>'★⁞ قارة أفريقيا 🌍','callback_data'=>"server#Africa#$ex[1]#$ex[2]"]],                
              [['text'=>' ★⁞ قارة أمريكا 🌍','callback_data'=>"server#Amrica#$ex[1]#$ex[2]" ],
              ['text'=>'★⁞ قارة أوروبا 🌏','callback_data'=>"server#Erub#$ex[1]#$ex[2]" ]],
              [['text'=>'رجوع للخلف 🔙','callback_data'=>"numbers" ],
              ['text'=>'القائمة الرئيسية 🏡',"callback_data"=>"home"]
          ]
          ]);
       exit;
#==============#
elseif($ex[0] == "server") :
$e = 0;
foreach($numbers["num"] as $key => $val) :    
                       $i++;
                       if($i % 3 == 0) $e++;
                       $ser  = $numbers["num"][$key]["ser"];   
                       $con = $numbers["num"][$key]["con"];   
if($ser == "5sim")  : $app  = $ex[3];  else   : $app  = $ex[2];
                      endif;                 
        if($numbers["num"][$key]["con"] == $ex[1] ) :
                  	$name      = $numbers["num"][$key]["name"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>$name ,"callback_data"=>"Buy#$key#$app#$ex[2]#$ex[3]"];
                      else : $name = null;
         endif;                     
endforeach;
                $json["inline_keyboard"][]  =   [["text"=>"للخلف ⏯","callback_data"=>"con"],["text"=>"القائمة الرئيسية 🏡","callback_data"=>"home"]] ;
                 bot("editmessagetext",[
                "chat_id"=>$chat_id,
                "text"=>"أختر الدولة الذي تريد شراء رقم لها يوجد أكثر من 100 دولة وبسيرفرات مختلفة اختر ما يناسبك",
                "message_id" => $message_id,
                "reply_markup" => json_encode($json)
        ]);
        
     exit;
#==============#
elseif($ex[0] == "Buy") :
$ser  = $numbers["num"][$ex[1]]["ser"];
$con = $numbers["num"][$ex[1]]["con"];
$app = $ex[2];
                $json = [];
                $json["inline_keyboard"][]  =   [["text"=>"الدولة 🌐","callback_data"=>"hello"],["text"=>"➕⏩🌟","callback_data"=>"hmm"],["text"=>"السعر 💰","callback_data"=>"Alwalidee"]];
if($ser == "5sim") {                               
                $country    = $numbers["num"][$ex[1]]["site-name"];
                $name       = $numbers["num"][$ex[1]]["name"];                    
foreach($info["operator"] as  $pk => $hmm ):
               $opname = $info["operator"][$pk]["name"] ;
               $opvalue = $info["operator"][$pk]["val"] ;
               $ok = $favourite["number"][$ex[1]]["ok"];
               $p = json_decode(file_get_contents("https://5sim.net/v1/guest/products/$country/$opvalue"))->$app->Price ; 
               $price = $info["nesbah"] / 100 * $p +$p;
               if($p != null)
               $json["inline_keyboard"][]  =   [["text"=>$opname , "callback_data"=>"nothings"],["text" => "📬 / $ok" ,"callback_data"=>"add#$ex[1]#$ex[2]#$opvalue"],["text"=>$price ." ₽"  ,"callback_data"=>"B-N#$ex[1]#$ex[2]#$price#$opvalue"]]; 
endforeach;

 }  elseif($ser == "man" ) {
            	$ok = $favourite["number"][$ex[1]]["ok"];
                $country    = $numbers["num"][$ex[1]]["site-name"];
                $name       = $numbers["num"][$ex[1]]["name"];                
                $chart       = json_decode(file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getPrices&api_key=$ApiKeySmsMan&country=$country&service=$app"));
                $cost         =  $chart->$ex[2]->cost ;
                $price        = $info["nesbah"] / 100 * $cost + $cost;
                $json["inline_keyboard"][]  =   [["text" => "مورد 2💎" ,"callback_data"=>"nothings"],["text"=>"📬 / $ok" ,"callback_data"=>"add#$ex[1]#$ex[2]"],["text"=>"$price ₽","callback_data"=>"B-N#$ex[1]#$ex[2]#$price"]]; 
  }
                $json["inline_keyboard"][]  =   [["text" => "تحديث الصفحة 🔁","callback_data"=>"Buy#$ex[1]#$ex[2]#$ex[3]#$ex[4]"]];
                $json["inline_keyboard"][]  =   [["text" => "للخلف ⏯","callback_data"=>"server#$con#$ex[3]#$ex[4]"],["text"=>"القائمة الرئيسية 🏡","callback_data"=>"home"]];
bot("editmessagetext",[
            "chat_id"=>$chat_id,
            "text"=>"😁🌸 ⌯ الدولة: $name
🤧♥️ ⌯ التطبيق : $ex[2]. ☑️

☑️ ⌯ إختر احد السيرفرات للشراء منه. ☺️🌸

🛍️ ⌯ كل سيرفر يقوم بتوفير عدد من الارقام وكل سيرفر له سعر خاص به. 😌🌼" ,
            "message_id" => $message_id,
            "reply_markup" => json_encode($json)
        ]);
exit;
#==============#
elseif($ex[0] == "add"):
$web = $numbers["num"][$ex[1]]["ser"];
if($web == "5sim") { $elias = $favourite["number"][$ex[1]]["key"];
} else { $elias = $favourite["number"][$ex[1]]["key"]; }
if($elias == null) :
if($web == "5sim"):
$favourite["number"][$ex[1]]["key"] = $ex[2];
$favourite["number"][$ex[1]]["ok"] = "🌟";
$favourite["number"][$ex[1]]["ope"] = $ex[3];
save($favourite , "favourite");

else:
$favourite["number"][$ex[1]]["key"] = $ex[2];
$favourite["number"][$ex[1]]["ok"] = "🌟";
save($favourite , "favourite");
endif;
answer("تم إضافة الرقم الى قسم العروض 🌟 \n اعمل تحديث للصفحة 🔃");

else : 
answer("تم حذف الرقم من قسم العروض 🗑");
unset($favourite["number"][$ex[1]]);
save($favourite , "favourite");
endif;
#==============#
        elseif ( $data == "shahn" ) :
        edit("🔰 ⁞ تستطيع شحن حسابك الان عبر:🔰

🎖#تحويل_كريمي_او_ايداع.
🎖#تحويل_اي_صرافةة_يمني. 
🎖#بطائق_سو_stc. 
🎖#كروت_اسيا_عراقي. 
🎖#شحن_سباء_فون.
🎖#شحن_بايير_بايبال_لايتكوين.

🎫للشحن والطلب تواصل مع المطور💛. 
- か𝙰𝚉𝙰𝙼𝙰𝙻𝚂𝙻𝚆𝙴.☻
@MX309" ,[
           [
                 ['text'=>'💳 كرت شحن','callback_data'=>'card'],
                 ['text'=>'?? بيتكوين', "url"=>"https://t.me/MX309"]
           ],
          [
                ['text'=>'🚈 نقل من موقع 5sim','callback_data'=>'trans']
          ],
          [
                ['text'=>'بايبال 🅱', "url"=>"https://t.me/MX309"],
                ['text'=>'بايير 🅿️', "url"=>"https://t.me/MX309" ]
          ],
          [
                ['text'=>'💸 جوجل بلاي','callback_data'=>'GooglePlay']],
          [
                ['text'=>'راجحي - سوا 🇸??', "url"=>"https://t.me/MX309"],
                ['text'=>'البنك اليمني 🇾🇪', "url"=>"https://t.me/MX309"]
          ],
          [
                ['text'=>'🔙 الرجوع إلى الصفحة الرئيسية','callback_data'=>'home']
         ]
         
    ]);                  
 exit;
 #==============#
elseif (preg_match("/buycard#([0-9]+)#([0-9]+)#([A-z0-9]+)/",$data,$res)) :
          edit("⛔️ سيتم خصم ₽ $ex[1] من رصيد حسابك ✅🔄 مقابل شراء كرت شحن ₽ $ex[1] روبل ♈️
💳 رصيدك الان هو:"  . $point["members"][$check[$chat_id]['mail']]["point"]
. "💰\n

☑️ هل أنت موافق على ذالك أم لا!! ⬇️
" , [
           [
                ["text"=>"موافق | ✅","callback_data"=>"okk#$res[1]#$res[2]#$res[3]"],
                ["text"=>"الإلغاء والرجوع | ⛔","callback_data"=>"home"]
            ]
]);                         
exit;
#==============#
       elseif ( preg_match("/okk#([0-9]+)#([0-9]+)#([A-z0-9]+)/",$data,$res)) :
        if($res[2] > 0) {
        if($res[1] <=  $point["members"][$check[$chat_id]['mail']]["point"] ) :
        $numbers['baageel'] += 1;
        save($numbers,'numbers');
        $acode  =   substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOBQRSTUVWXYZ"), 1, 10);
        $code   =   $numbers['baageel'].$acode;
        $balance = $point['members'][$check[$chat_id]['mail']]['point'] - $res[1];
        edit("✳️ ⁞ تم شراء الكرت بنجاح!

☎️ ⁞ الكود: $code
💬 ⁞ السعر: $res[1]
🌀 ⁞ رصيدك الحالي:  " . $members['members'][$check[$chat_id]['mail']]['point'] . "\n
💰 ⁞ رصيدك السابق: ₽ $balance

✅ تمت العملية  بنجاح. 😉♥️",
$home);
       $point["members"][$check[$chat_id]['mail']]["point"] -= $res[1];
        save($point , "point");
        $numbers[$code]['price'] = $res[1];
        save($numbers,"numbers");
        $static['cards']++;
        $static[$chat_id]['cards']++;
        save($static,"static");
        $chart[$chat_id]["buycards"][] = $code;
          done($chart);
        else : 
       answer("رصيدك غير كافي لإتمام العملية");
                  endif;
                }  else {
                  answer("لقد انتهت الكروت لهذه الفئه انتظر حتى يتم توفيرها");         
                }
        
       elseif($data == "help"):
       edit("👨‍✈|أهلاً صديقي.

📍|أنت الأن في التواصل مع الدعم، أي رسالة ارسلها سيتم إيصالها الئ الأدارة فوراً.
📊|أي مشكلة واجهتك في البوت فقط قم بإرسالها هنا الان،ولااتنسئ إرفاقها مع الأيدي الخاص بك بالبوت.
🕐|متواجدون علئ مدار الساعة.

❎|تجنب إرسال الاساءات إن أمكن.", [
            [               
                ["text"=>"الغاء التواصل ⛔","callback_data"=>"login_pannel"]
            ],
            ]);
            $info[$chat_id]['mode'] = "help";
            save($info);           
exit;
elseif(preg_match("/send#([0-9])+#([0-9])+/",$data , $s)) :
send("ارسل رسالتك الآن");
$info[$chat_id]["mode"]  =   "id";
$info[$chat_id]['mid']  = $s[2];
$info[$chat_id]['idmem'] = $s[1];
save($info);
exit;
elseif($message && $chat_id == $admin && $info[$chat_id]["mode"]  == "id") :
       bot('sendmessage',[
       'chat_id' => $info[$chat_id]['idmem'],
       'text' => "تم الرد على رسالتك الرد 👇👇",
       'reply_to_message_id'=> $info[$chat_id]['mid']
       ]);
       bot(copymessage,[
            chat_id=>$info[$chat_id]['idmem'],
            message_id=>$message_id,
           from_chat_id=>$admin,
       ]);
     exit;
            elseif ($message && $info[$chat_id]['mode'] =="help") : 
            if(isset($text)) : $type = "نص"; else : $type ="ميديا"; endif;          
            bot(copymessage,[
            chat_id=>$admin,
            message_id=>$message_id,
           from_chat_id=>$chat_id,
       ]);
sendd($admin, "📨 | رسالة جديدة 
-----------------------------
🧑‍✈️ | المرسل :- $fname
🆔 | ايدي المرسل :- $chat_id
🗒 | نوع الرسالة :- $type
-----------------------------
هل تريد الرد على الرسالة 🙄🙄" , 
          [
            [
                ["text"=>"الرد على الرسالة ✅","callback_data"=>"send#$chat_id#$mid"],                
            ],
            ]);
            unset($info[$chat_id]["idmem"]);
            unset($info[$chat_id]["mid"]);
            save($info);
            send("تم وصول رسالتك الى الإدارة انتظر حتى يتم الرد عليك");

#==============#
    elseif ( $data == "card" ):
               edit("قم باسال الكرت",$home);
               $info[$chat_id]["mode"]  =   "card";
               save($info);
     exit;
#==============#     
    elseif ( preg_match("/([A-z0-9])+/",$text) && $info[$chat_id]["mode"] == "card" ):
               $price = $numbers[$text]['price'];
               $last = $point["members"][$check[$chat_id]['mail']]["point"] - $price;
    if ( $numbers[$text]['price'] == null ):
               send("الكرت هذا غير موجود أو تم استخدامه",$home);
   else :
              $point["members"][$check[$chat_id]['mail']]["point"] += $price;
               save($point , "point");
              send("تم شحن حسابك ب $price
--------------------------
💰 ⁞ رصيدك السابق :-  $last
💵 ⁞ رصيدك الحالي :- " . $point["members"][$check[$chat_id]['mail']]["point"] . "
-------------------------
شكرا لاستخدامك البوت🌟"
, $home);
            $info[$chat_id]["mode"]   =   null;
            save($info);
            sendd($admin,"⚜ New Card has discharge  :\n\n📝 Code: $text\n🧭 ID: $chat_id
🎫 Name:\n[$fname](tg://user?id=$chat_id)\n💰 Price: ₽ 5");
            $static[$chat_id]['cards']++;
            $static[$chat_id]['cardcount']++;
            $static[$chat_id]['shahn']++;
            save($static,"static");
            unset($numbers[$text]['price']);
            $numbers['cards'][$code]['amount']--;
            save($numbers,"numbers");
            $chart[$chat_id]["cards"][] = $text;
            done($chart);
        endif;
        exit;
#==============#     
elseif ( $data == "How" ):
                  edit($sharh,$home);
#==============#
        elseif($data == "transfer") :
        edit("✅ | يمكنك الأن تحويل رصيد من حسابك الئ حساب شخص أخر بشكل مباشر .

👨‍✈️ | عمولة التحويل:  0%.
⚠️ | أقل مبلغ للتحويل:  20.00✅.\n
✳️ | هل تريد تحويل رصيد الئ حساب أخر؟",  [
           [
                ["text"=>"تأكيد ✅","callback_data"=>"continue"],
                ["text"=>"الإلغاء والرجوع ⛔","callback_data"=>"home"]
            ],
            ]);
#==============#         
elseif ($data == "info") :
if($static['conum']==null) { $static['conum']=0; }  if($static['bot']['balance']) $static['bot']['balance'] =0;
if($static['cards']==null) { $static['cards']=0; } if($static[$chat_id]['unconum']==null) { $static[$chat_id]['unconum'] =0; } 
        $mem = count($members);
        $complete = $static['conum'];
        $incomplete = $static['unconum'];
        $cardnum = $static['cards'];
        $botba = $static['bot']['balance'];
        $ready = $static['ready'];
        //user static //
if($static[$chat_id]['conum']==null) { $static[$chat_id]['conum']=0; } if($static[$chat_id]['ready']==null) { $static[$chat_id]['ready']=0; }
if($static[$chat_id]['cards']==null) { $static[$chat_id]['cards']=0; } if($static['unconum']==null) { $static['unconum'] =0; }
        $usco = $static[$chat_id]['conum'];
        $usready = $static[$chat_id]['ready'];
        $uscards = $static[$chat_id]['cards'];
        $minus    = $static[$chat_id]["minus"] ;
        $usrobel = $point["members"][$chat_id]["point"];
        $member =  count($members);
        edit("☑️ ⁞ إحصائيات استخدام بوت : 🌻🌞

👬 ⁞ عدد المستخدمين النشطين: { $member } 
✅ ⁞ عدد الأرقام المكتملة: { $complete } 
🏷 ⁞ عدد الكروت التي تم شراوها: { $cardnum } 
🎫 ⁞ عدد الروبل المستهلك: { $botba } 

💰 ⁞ عدد الروبل المتبقي:  ₽ $robel  💰
🌞 ⁞ عدد الأرقام الجاهزة المشتراة:  $ready  ☑️

☑️ ⁞ سجل حسابك الشخصي:
❇️ ⁞ عدد الأرقام الجاهزة التي تم شراؤها: { $usready } 
✅ ⁞ إحصائيات أرقامك المكتملة: { $usco } 
🏦 ⁞ إحصائيات كروتك المشترى: { $uscards } 
💸 ⁞ إحصائيات الروبل المستهلك: { $minus ₽ } 
💰 ⁞ إحصائيات الروبل المتبقي: { $usrobel ₽ } 

💹 ⁞ تم بدء نظام الحوسبة من 2022/1/15م"
, [
                            [
                            ['text'=>'💸 الكروت التي قمت بتحصيل قيمها','callback_data'=>'cCard']
                            ],
                   [
                            ['text'=>'📞 سجل الأرقام','callback_data'=>'cNumber'],
                            ['text'=>'💳 سجل الكروت','callback_data'=>'cCardBuy']
                   ],
                   [
                            ['text'=>'القائمة الرئيسية 🏡',"callback_data"=>"home"]
            ]
 ]);
exit;
#==============#
            elseif($data == "continue") :
           if($point['members'][$chat_id]['point'] >20){        
            edit("حسنا قم بإرسال ايدي الشخص",$home);
            $info[$chat_id]['mode'] = "send";
            save($info);
                  } else {
        	bot("answercallbackquery",[
                "callback_query_id"=>$update->callback_query->id,
                "text"=>"رصيدك لا يكفي لهذه العملية",
                "show_alert"=>true
            ]);
                  }
            elseif( is_numeric($text) && $info[$chat_id]['mode'] == "send") :
                        $chartchat = bot('getchat',['chat_id'=>$text ])->ok;
            if($chartchat == "true") {
                        send("حسنا قم بإرسال النقاط الآن");
                        $info[$chat_id]['mode'] = "point";
                        $info[$chat_id]['idm'] = $text;
                        save($info);
        } else {
           send("هذا المستخدم غير موجود في البوت أو أنه قام بحظره"); 
           }
                 
        elseif( is_numeric($text) && $info[$chat_id]['mode'] == "point") :
        if($text >20){ 
                if($text > $point['members'][$check[$chat_id]['mail']]['point'])exit;  
                $point['members'][$check[$chat_id]['mail']]['point'] -= $text;
                $point['members'][$info[$check[$chat_id]['mail']]['idm']]['point'] += $text;
        save($point , "point");
        $last = $point['members'][$check[$chat_id]['mail']]['point'] - $text;
        $idm =$info[$chat_id]['idm'];
        send("تم التحويل بنجاح ✅

📟 المرسل : $fname
🧭 المستلم : [$idm](tg://user?id=$idm)
💵 المبلغ المحول : $text
💰 الرصيد المتبقي : $last
===================");
                sendd($info[$chat_id]['idm'] , "💰 ⁞ تم تحويل ₽ $text إليك!✅ ⁞ من  $fname ");
                $info[$chat_id]['idm'] =null;
                $info[$chat_id]['mode'] =null;
                save($info);
        } else {
        	send("عذرا لا يمكنك التحويل برصيد اقل من المسموح به");
        }
        
#====BUY_NUMBER====#

elseif($el[0] == "/start") :
$code = explode("#"  , $el[1]);
if($code[0] == "buy") {
$number           = $readynumber['ready'][$code[1]]['number'];
$price                = $readynumber['ready'][$code[1]]['price'];
$now                = $readynumber['ready'][$code[1]]['now'];
$country          = $readynumber['ready'][$code[1]]['country'];
$what               = $readynumber['ready'][$code[1]]['what'];
$numbery = substr($number, 0,-6)."••••";
 if($number != null ){
 	      $keyboad['inline_keyboard'][] = [['text'=>'االحالة ⁉️','callback_data'=>'no'],['text'=>'السعـــر💲','callback_data'=>'no'],['text'=>'الدولة 🏴','callback_data'=>'no']];
           $keyboad['inline_keyboard'][] = [['text'=>"$now",'callback_data'=>"Noyesnum#$code[1]"],['text'=>$price . ".00₽",'callback_data'=>"Noyesnum#$code[1]"],['text'=>"$country",'callback_data'=>"Noyesnum#$code[1]"]];
           $keyboad['inline_keyboard'][] = [['text'=>'القائمة الرئيسية 🏡',"callback_data"=>"home"]];
           bot('sendmessage', [
           'chat_id' => $chat_id,
           'text' => "💯 إليك قائمة الأرقام الجاهزة للواتس اب\n👇 اضغط على احدها للشراء",
           'reply_markup'=>json_encode($keyboad)
     ]);
} else {
	send("الرقم غير موجود او قد تم شراءه");
	}}
exit;
    
elseif($data == 'readynumbers') :
if($readynumber['ready'] != null ){
               $keyboard = [];
               $keyboad['inline_keyboard'][] = [['text'=>'االحالة ⁉️','callback_data'=>'no'],['text'=>'السعـــر💲','callback_data'=>'no'],['text'=>'الدولة 🏴','callback_data'=>'no']];
foreach($readynumber['ready'] as $zero=>$val) :
               $now = $val['now'];
               $country = $val['country'];
               $price = $val['price'];
               $keyboad['inline_keyboard'][] = [['text'=>"$now",'callback_data'=>"Noyesnum#$zero"],['text'=>$price . ".00₽",'callback_data'=>"Noyesnum#$zero"],['text'=>"$country",'callback_data'=>"Noyesnum#$zero"]];
endforeach;
               $keyboad['inline_keyboard'][] = [['text'=>'تحديث الصفحة 🔂',"callback_data"=>"readynumbers"],['text'=>'القائمة الرئيسية 🏡',"callback_data"=>"home"]];
               bot('EditMessageText',[
               'chat_id'=>$chat_id,
               'message_id'=>$message_id,
               'text' => "💯 إليك قائمة الأرقام الجاهزة للواتس اب \n ✅ اضغط على احدها للشراء",
               'reply_markup'=>json_encode($keyboad)
            ]);
       } else {
              answer("❌ لا يتوفر أرقام جاهزة حاليا ");
  }
exit;

//قبول ورفض شراء الأرقام الجاهزة
elseif(preg_match('/(Noyesnum)/',$data)) :
$zero              = $ex[1];
$num              = $readynumber['ready'][$zero]['number'];
$price             = $readynumber['ready'][$zero]['price'];
$now              = $readynumber['ready'][$zero]['now'];
$country        = $readynumber['ready'][$zero]['country'];
$what             = $readynumber['ready'][$zero]['what'];
$number        = substr($num, 0,-6) . "••••";
$Balancee     = $point["members"][$check[$chat_id]['mail']]['point'];
$Balance       = $Balancee - $price;

if($readynumber[$chat_id]["buy"] == "stop") {
answer(" لا يمكنك شراء الرقم الجاهز في نفس وقت شراء رقم آخر قم بإلغاء الرقم السابق ثم حاول مجدداً 🌚" );

} elseif($price > $point["members"][$check[$chat_id]['mail']]['point']) {
send("رصيدك لا يكفي لشراء هذا الرقم، قم بشحن الرصيد حتى تتمكن من شراء الأرقام 🌟");
} elseif($zero == null) {
send("
❌ هذا الرقم لم يعد متاحا
♻ اضغط تحديث الصفحة
");
} else {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*☑️ أنت الان تقوم بشراء رقم جاهز من البوت 🌚
⚠️ معلومات عن الرقم الذي تريد شرائه:
🏴 الدولة: $country
📞 الرقم: $number
📲 التطبيق: واتساب - (Whatsapp)
💰 السعر: $price ₽
✨ الحالة: $now ✅
⁉️ ملاحظة: $what

🛃 رصيدك الان هو: ₽ $Balancee 💰
🔄 سيكون رصيدك بعد الشراء: ₽ $Balance 🧭

📮 هل أنت موافق على ذالك أو لا!! ⬇️*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم ✅','callback_data'=>"readdd#$zero"],['text'=>'لا ❌','callback_data'=>"readynumbers"]],
[['text'=>'القائمة الرئيسية 🏡','callback_data'=>"home"]]
]
])
]);
$readynumber[$chat_id]["buy"] = "stop";
save($readynumber , "readynum");

}
exit;

// التحقق من الرصيد عند شراء الرقم الجاهز
elseif(preg_match('/(readdd)/',$data)) :
$zero                 = $ex[1];
$num                 = $readynumber['ready'][$zero]['number'];
$code                = $readynumber['ready'][$zero]['code'];
$price                = $readynumber['ready'][$zero]['price'];
$country            = $readynumber['ready'][$zero]['country'];
$now                  = $readynumber['ready'][$zero]['now'];
$what                 = $readynumber['ready'][$zero]['what'];
$idnum              = substr(str_shuffle('12345689807'),1,9);


if($price > $point["members"][$check[$chat_id]['mail']]['point']) {
answer("رصيدك لا يكفي لشراء هذا الرقم، قم بشحن الرصيد حتى تتمكن من شراء الأرقام 🌟");
} elseif( $zero == null) {
answer("
❌ هذا الرقم لم يعد متاحا
♻ اضغط تحديث الصفحة
");
} else {
edit("
*تم شراء الرقم بنجاح ☑️

🔶 الدولة: $country
📞 الرقم: $num
♻️ الكود: $code
💰 السعر: $price ₽
🆔 ايدي معاملتك: $idnum
✨ الحالة: $now ✅
⁉️ ملاحظة: $what

🌸 شكراً لإستخدامك @$me 👍*
",$home);
unset($readynumber['ready'][$zero]);
unset($readynumber[$chat_id]["buy"]);
save($readynumber , "readynum");
$point["members"][$check[$chat_id]['mail']]["point"] -= $price;
save($point , "point");
$static['ready']++;             
$static[$chat_id]['ready']++;             
$static['bot']['balance'] +=  $price;     
$static[$chat_id]["minus"] += $price;        
save($static,"static");             
$chart[$chat_id]["numbers"][] = $num;             
done($chart);
} 


    
elseif( $ex[0] == "B-N" ) :    
if ( $ex[3] <= $point["members"][$check[$chat_id]['mail']]["point"] ) {
	
            $name        =    $numbers["num"][$ex[1]]["name"]; //اسم السلعة//
            $price         =     $ex[3] ; //السعر//
            $country     =     $numbers["num"][$ex[1]]["site-name"]; //الدولة//
            $service      =     $ex[2];//اسم الخدمة//
            $web            =     $numbers["num"][$ex[1]]["ser"]; //اسم الموقع//
            $operator    =     $ex[4]; //اسم المشغل//
            
if ( $web == "5sim" ) {
          $sim5 = file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=getNumber&service=$service&forward=forward&operator=$operator&country=$country");             
          $ex_api = explode(":",$sim5);
          $idnumber = $ex_api[1];
          $num = "+" ."`$ex_api[2]`";
          
if($sim5 == "NO_NUMBERS" || $sim5 == "BAD_ACTION" || $sim5 == "BAD_SERVICE" || $sim5 == "ERROR_SQL" || $sim5 == "" || $num == null || $p == null ){
          answer("الأرقام من الدولة التي إخترتها غير متوفرة حالياً، حاول مجدداً بعد 15 دقيقة 👌");
} elseif($sim5 == "NO_BALANCE" || $sim5 == "BAD_KEY"){
                	answer("عذرا عزيزي المشترك لقد انتهى الرصيد في الموقع تخلى بالصبر سيتم اعادة شحن الموقع قريبا 🙃 $service $country");
                    sendd($admin,"تم إيقاف النقل، إما بسبب تغير api الحساب أو بسبب نقصان الرصيد في الموقع ❌");
                    sendd($usapi["user_id"],"لقد اكتملت عملية النقل وتم الرصيد اضافة الرصيد الى حسابك");
                    unlink("stor/Api.kson");
                  } else {
                    edit("- - ✳️ تم شراء الرقم بنجاح!

☎️ الرقم: $num
💬 الكود: *...Loading*
♻️ الحالة: *غير مكتمل ❌*
💰 السعر: *₽ $price* 
☑️ إضغط على الرقم لنسخة.!
🔰 أدخل الرقم في واتسأب لوصول الكود.!
⚜ إضغط على تحديث ليصلك الكود.! 
",             [
                        [
                            [
                                "text"=>"تحديث♻️️",
                                "callback_data"=>"getcode#$num#$idnumber#5sim"
                            ]
                        ],
                        [
                            [
                                "text"=>"🚫 حظر الرقم.",
                                "callback_data"=>"bandnumber#$num#$idnumber#$price#5sim"
                            ]
                        ],
                        [
                            [
                                "text"=>"معاينة الرقم في وتساب 🌐 ",
                                "url"=>"http://wa.me/$num"
                            ]
                        ]
                    ]);
sendd($admin,"⚜ Someone Buy Number :\n\n☎️ Number: $num\n?? From: $country\n☑️ Name: $first\n🧭 ID: $idnumber\n💰 Price: ₽ $price\n🎫 Name: [$first](tg://user?id=$chat_id)\n🎯 Chat-id: [$chat_id](tg://user?id=$chat_id)\n🏋‍♀ Site: 5sim.net\n🎗 Website: $operator");                       
            $info[$chat_id][$web]['check'] = "ban"; 
            save($info);
            $static["info"]["numbers"]["count"]  +=  1;
            $static["info"]["numbers"]["point"]  +=  $price;
            save($static,"static");
            $info[$chat_id]["checker"] = "stop";
             save($info);
       }
 }
                
        
        if ( $web == "man" ) {
            	$man = file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getNumber&api_key=$ApiKeySmsMan&service=$service&country=$country");
                $sms = explode(":",$man);
                $num = "+" ."`$sms[2]`";
                $idnumber = $sms[1];
                if ($man == "NO_NUMBERS" ) {
                answer("لا يتوفر أرقام حاليا حاول مجددا 😉");
                exit;
       } elseif($man =="NO_BALANCE" ) {
               answer("انتهى الرصيد في الموقع انتظر حتى يتم الشحن");                       
                  
                   } elseif($sms[0] == "ACCESS_NUMBER" ) {
                    edit("✳️ تم شراء الرقم بنجاح!\n☎️ الرقم: $num\n💬 الكود: *...Loading*\n♻️ الحالة: *غير مكتمل ❌*\n💰 السعر: *₽ $price*",[
                        [
                            [
                                "text"=>"تحديث♻️",
                                "callback_data"=>"getcode#$num#$idnumber#man"
                            ]
                        ],
                        [
                            [
                                "text"=>"🚫 حظر الرقم.",
                                "callback_data"=>"bandnumber#$num#$idnumber#$price#man"
                            ]
                        ],
                        [
                            [
                                "text"=>"معاينة الرقم في وتساب 🌐 ",
                                "url"=>"http://wa.me/$num"
                            ]
                        ]
                    ]);
                $info[$chat_id]["checker"] = "stop";
                save($info);
sendd($admin,"⚜ Someone Buy Number :\n\n☎️ Number: $num\n🚸 From: $country\n☑️ Name: $fname\n🧭 ID: $idnumber\n💰 Price: ₽ $price\n🎫 Name: [$first](tg://user?id=$chat_id)\n🎯 Chat-id: [$chat_id](tg://user?id=$chat_id)\n🏋‍♀ Site: sms-activate.ru\n🎗 Website: $operator");            
        
      }  else {
      	
      	answer("لا يوجد أرقام حاليا حاول مجددا ( hmm🙂 )");
      }
   }          
        } else {
        answer("يرجى شحن رصيدك اولا");
        }
        exit;
#================================#
    elseif ( $ex[0] == "getcode" && $ex[3] == "5sim" ) :
        $chartcode5sim  =   file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=getStatus&id=$ex[2]");
        $exx    =   explode(":",$chartcode5sim);
        if ( $exx[0] == "STATUS_OK" ) {
            $num = $ex[1];
            $code = $exx[1];
            edit("✳️ ⁞ تم شراء الرقم بنجاح!

☎️ ⁞ الرقم: $num
💬 ⁞ الكود: $code
🌀 ⁞ الحالة: مكتملة ✅
💰 ⁞ السعر: ₽ $ex[2]

✅ تم وصول الكود بنجاح. 😉♥️");
            file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=setStatus&status=6&id=$ex[2]");
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            $static[$chat_id]['robel']++;
            $static['bot']['balance'] +=  $price;
            save($static,"static");
            $point["members"][$check[$chat_id]['mail']]["point"] -= $price;
            save($point, "point");
            unset($info[$chat_id]["checker"]);
             save($info);
            $chart[$chat_id]["numbers"][] = $code;
            done($chart);
        } else {
            answer("يرجى الضغط علئ زر تحديث بعد 30 ثانية");
        }
                                 
    elseif ( $ex[0] == "getcode" && $ex[3] == "man" ):
        $man    =   file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getStatus&api_key=$ApiKeySmsMan&id=$ex[2]");
        if( $man == "STATUS_WAIT_CODE" || $man == "STATUS_WAIT_RETRY"  ) {
        	answer("لم يصل الكود يرجى المحاولة بعد 5 ثواني");
        } elseif($sms == "STATUS_CANCEL") {
        	answer("انتهت مهلة الرقم حاول مرة أخرى");
        } else {
        	$sms = explode(":",$man);
            $num = $ex[1];
            $code = $sms[1];  
  if($code == null) :       
           answer("لم يصل الكود الى الآن تأكد من ان الرقم غير محظور او تم استخدامه");
  else :
            edit("✳️ ⁞ تم شراء الرقم بنجاح!
       
☎️ ⁞ الرقم: $num
💬 ⁞ الكود: $code
🌀 ⁞ الحالة: مكتملة ✅
💰 ⁞ السعر: ₽ $ex[2]

✅ تم وصول الكود بنجاح. 😉♥️");
            file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=setStatus&api_key=$ApiKeySmsMan&id=$ex[2]&status=6");  
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            $static[$chat_id]['robel']++;
            $static['bot']['balance'] +=  $price;
            save($static,"static");
            $chart[$chat_id]["numbers"][] = $code;
            done($chart);
            unset($info[$chat_id]["checker"]);
             save($info);
            endif;
        }
 #=================================#
    elseif ( $ex[0] == "bandnumber" && $ex[4] == "5sim" ):
        $sim5    =   file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=getStatus&id=$ex[2]");
        $exx    =   explode(":",$sim5);
        if ( $exx[0] == "STATUS_OK" ) {
            $num = $ex[1];
            $code = $exx[1];
            edit("لم يتم الحظر لانك طلبت الكود وتم استلامه في الموقع الرقم : $num \nالكود : $code \nالحالة مكتملة");
            file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=setStatus&status=6&id=$ex[2]");
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        }else{
            //عند الحظر
            edit("تم الحظر بنجاح وتمت استعادة اموالك ",$home);
            $info["members"][$check[$chat_id]['mail']]["point"]    += $ex[3];
            save($info);
            file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=setStatus&status=8&id=$ex[2]");
            $static['unconum'] ++;
            $static[$chat_id]['unconum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        }
           
    elseif ( $ex[0] == "bandnumber" && $ex[4] == "man" ):
        $man    =   file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getStatus&api_key=$ApiKeySmsMan&id=$ex[2]");
        $sms = explode(":",$man);
            $num = $ex[1];
            $code = $sms[1];  
        if ( $code != null ){//عند استلام الكود في حالة وجوده لكن تم ضغط زر الحظر
            $num = $ex[1];
            edit("لم يتم الحظر لانك طلبت الكود وتم استلامه في الموقع الرقم : $num \nالكود : $code \nالحالة مكتملة");
            file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=setStatus&api_key=$ApiKeySmsMan&id=$ex[2]&status=6");  
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        } else {
            //عند الحظر
            edit("تم الحظر بنجاح وتمت استعادة اموالك ",$home);
            $point["members"][$check[$chat_id]['mail']]["point"]    += $ex[3];
            save($info);
            file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=setStatus&api_key=$ApiKeySmsMan&id=$ex[2]&status=8"); 
            $static['unconum'] ++;
            $static[$check[$chat_id]['mail']]['unconum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        }
        exit;
        
        elseif($data == "market_cards") : 
        $json = [];
        $json["inline_keyboard"][]  =   [["text"=>"الــكود 📩","callback_data"=>"card_price"],["text"=>"لسعـــر💲","callback_data"=>"card_amount"],["text"=>"الــكمية 📮","callback_data"=>"elias"]];
        
        foreach ($numbers['cards'] as $code => $card  ) :
        if($code != null){
        $amount = $numbers['cards'][$code]['amount'];
        $price      = $numbers['cards'][$code]['price'];
        $cod        = substr($code, 0,-6)."••••";
        $json["inline_keyboard"][]  =   [["text"=>"$cod","callback_data"=>"nothing"],["text"=>"$price ₽", "callback_data"=>"nothing"],["text"=>"$amount","callback_data"=>"buycard#$price#$amount#$code"]];
        }
        endforeach;
        $json["inline_keyboard"][]  =   [['text'=>'تحديث الصفحة 🔂',"callback_data"=>"market_cards"],['text'=>'القائمة الرئيسية 🏡',"callback_data"=>"home"]];
        bot("editmessagetext",[
            "chat_id"=>$chat_id,
             "message_id" => $message_id,
            "text" => "🛄 إليك متجر الكروت الجاهزة الشحن الخاص بالبوت
⁉️ يمكنك شراء الكرت وشحنه في حساب آخر ♻️
✳️ هذا المتجر مخصص لبيع كروت الشحن فقط ✔️",
            "reply_markup" => json_encode($json)
        ]);
        exit;
        
        elseif($data == "cCard") :
             	if($chart[$chat_id]["cards"] != null) :
             	foreach($chart[$chat_id]["cards"] as $val):
                 $cards .= "`$val`" . "\n";
                 endforeach;
       edit("سجل الكروت الذي قمت بشحنها  \n $cards");
       else : 
       answer("أنت لم تقم بشحن كرت الى الآن ✥🌐");
       endif;
       exit;
       
elseif($data == "cNumber") :
             	if($chart[$chat_id]["numbers"] != null) :
foreach($chart[$chat_id]["numbers"] as $val):
                 $nums .= "`$val`" . "\n";
                 endforeach;
       edit("سجل الأرقام الذي قمت بشرائها \n $nums");
else : 
       answer("❌ لا يوجد سجل لك! لم تقم بشراء أي رقم حتى الآن");
       endif;
       exit;
       elseif($data == "cCardBuy"):
       if($chart[$chat_id]["buycards"] != null) :
             	foreach($chart[$chat_id]["buycards"] as $val):
                 $buycards .= "`$val`" . "\n";
                 endforeach;
       edit("سجل الكروت الذي قمت بشرائها \n $buycards");
       else : 
       answer("❌ لا يوجد سجل لك! 👌 لم تقم بشراء أي كرت حتى الآن");
       endif;
       exit;
    endif;
    
    
#=========================================================================#
else:
    die("@Baageel_Programmer");
endif;
include("login.php");

