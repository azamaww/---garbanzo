<?php 
if(isset($update)):
        $channel ='1984496548';
    @$a = explode("\n",$text);
    @$home=[[["text"=>"القائمة الرئيسية","callback_data"=>"home"]]];
    @$bak=[[["text"=>"رجوع 🔙","callback_data"=>"home"]]];
    @$cancel=[[["text"=>"إلغاء ❌","callback_data"=>"home"]]];
    if ( $text == "/start" ):
        send(
            "اهلا وسهلا بك عزيزي المطور". 
            "الاوامر امامك اختر ماتريد",
            [
            "اهلا وسهلا بك عزيزي المطور". 
            "الاوامر امامك اختر ماتريد",
            [
                [["text" => 'اضافه دولة ✔', "callback_data" => 'addnum'],                                
                ["text" => 'حذف دولة ❌', "callback_data" => 'delcon']],
                [["text" => 'اضافه رقم جاهز ☎️', "callback_data" => 'make_ready']],                                
                [["text" => 'حذف رقم جاهز ❌', "callback_data" => 'del_ready']],
                [["text" => 'اضافه كرت 🛄', "callback_data" => 'make_card']],                           
                [["text" => "فك تقييد عضو 🔧", "callback_data" => "unban"]],                               
                [["text"=>"اضافة رصيد 💲","callback_data"=>"addpoint"],                              
                ["text"=>"خصم رصيد 💱","callback_data"=>"delpoint"]],                               
                [["text"=>"اضافة نسبة 💯","callback_data"=>"add-n"]], 
                [["text"=>"اضافة مورد 📮","callback_data"=>"add_operator"],
                ["text"=>"احذف مورد ✖","callback_data"=>"del_operator"]]
            ]
        );
        $info[$chat_id]['mode']=null;
        save($info);
        exit;
    elseif ( $data == "home" ):
        edit(
            "اهلا وسهلا بك عزيزي المطور". 
            "الاوامر امامك اختر ماتريد",
            [
                
                [["text" => 'اضافه دولة ✔', "callback_data" => 'addnum'],                                
                ["text" => 'حذف دولة ❌', "callback_data" => 'delcon']],
                [["text" => 'اضافه رقم جاهز ☎️', "callback_data" => 'make_ready']],                                
                [["text" => 'حذف رقم جاهز ❌', "callback_data" => 'del_ready']],
                [["text" => 'اضافه كرت 🛄', "callback_data" => 'make_card']],                           
                [["text" => "فك تقييد عضو 🔧", "callback_data" => "unban"]],                               
                [["text"=>"اضافة رصيد 💲","callback_data"=>"addpoint"],                              
                ["text"=>"خصم رصيد 💱","callback_data"=>"delpoint"]],                               
                [["text"=>"اضافة نسبة 💯","callback_data"=>"add-n"]], 
                [["text"=>"اضافة مورد 📮","callback_data"=>"add_operator"],
                ["text"=>"احذف مورد ✖","callback_data"=>"del_operator"]]
            ]
        );
        $info[$chat_id]['mode']=null;
        save($info);
        exit;
        
elseif($data == "addnum") :
           edit("ارسل إسم الدولة الذي سيظهر للمستخدمين مع إسمها في الموقع بالشكل التالي :
اليمن \nyemen" , 
            [
                  [["text" => 'دول 5sim', "callback_data" => '5sim']],                                
                  [["text" => 'دول sms-man', "callback_data" => 'sms-man']],
                  [["text" => 'دول vak', "callback_data" => 'vak']],                           
          ]);    
           $info[$chat_id]["mode"] = "addnum";
           save($info);
exit;

elseif(preg_match("/[A-z]+/",$a[1]) && $info[$chat_id]["mode"] == "addnum"):
          send("حسنا عزيزي اختر القارة 🚩" , [
          
                    [["text" => 'آسياء 🏁',   "callback_data"   => 'con#Asia']],    
                    [["text" => 'افريقيا 🏴', "callback_data" => 'con#Africa']],
                    [["text" => 'أوروبا 🚩',  "callback_data"  => 'con#Erub']],    
                    [["text" => 'أمريكا 🏳',  "callback_data"  => 'con#Amrica']],    
         ]);
             $numbers[$chat_id]["name"] = $a[0];
             $numbers[$chat_id]["name2"] = $a[1];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addcon";
             save($info);
exit;

elseif($ex[0] == "con" &&  preg_match("/[A-z]+/",$ex[1]) && $info[$chat_id]["mode"] == "addcon"):
          edit("حسنا عزيزي قم باختيار السيرفر 💻" , [
          
                  [["text" => '5sim 🔴', "callback_data" => 'ser#5sim']],                                
                  [["text" => 'Sms-Man 🔵', "callback_data" => 'ser#man']],
                  [["text" => 'Vak ⚪', "callback_data" => 'ser#vak']],                           
             ]);
             $numbers[$chat_id]["con"] = $ex[1];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addser";
             save($info);
exit;      


elseif($ex[0] == "ser" &&  preg_match("/[A-z0-9]+/",$ex[1]) && $info[$chat_id]["mode"] == "addser"):
          edit("حسنا قم بإرسال مفتاح الدولة مثال :-\n اليمن ( 967 )" , [
          
                    [["text" => 'مفاتيح الدول 🚩', "callback_data" => 'countrys']],                                                  
         ]);
         
             $numbers[$chat_id]["ser"] = $ex[1];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addkey";
             save($info);
exit;

elseif(preg_match("/[0-9]+/",$text) && $info[$chat_id]["mode"] == "addkey"):
          send("تم الحفظ ✔" , $home);
                     
         
             $numbers["num"][$text]["name"]         = $numbers[$chat_id]["name"];
             $numbers["num"][$text]["con"]            = $numbers[$chat_id]["con"];
             $numbers["num"][$text]["ser"]            = $numbers[$chat_id]["ser"];
             $numbers["num"][$text]["site-name"] = $numbers[$chat_id]["name2"];
             $numbers["num"][$text]["con-key"]     = $numbers[$chat_id]["name"];
             save($numbers , "numbers");
             unset($info[$chat_id]["mode"]); 
             save($info);
exit;
            

elseif($ex[0] == "send") :
edit("ارسل رسالتك الآن",$home);
$info[$chat_id]["mode"]    =   "id";
$info[$chat_id]['mid']     = $ex[2];
$info[$chat_id]['idmem']   = $ex[1];
save($info);
exit;
elseif($message && $chat_id == $admin && $info[$chat_id]["mode"]  == "id") :
       bot('sendmessage',[
       'chat_id' => $info[$chat_id]['idmem'],
       'text' => "تم الرد على رسالتك الرد 💎",
       'reply_to_message_id' => $info[$chat_id]['mid']
       ]);
       bot(copymessage,[
            chat_id=>$info[$chat_id]['idmem'],
            message_id=>$message_id,
           from_chat_id=>$admin,
'reply_to_message_id' => $info[$chat_id]['mid']
       ]);
     exit;

elseif($data == "unban"):
edit("ارسل آيدي العضو",$home);
$info[$chat_id]['mode'] = "ok";
save($info);
exit;

elseif(preg_match("/\d+/",$text) && $info[$chat_id]['mode'] =="ok" ) :
send("تم الغاء التقييد بنجاح ✅",$home);
unset($info[$text]['check']);
save($info);
unset($readynumber[$text]["buy"]);
save($readynumber , "readynum");
exit;
    
    elseif ( $data == "make_card" ) :
        edit("قم بارسال فئة الكرت ",$home);
        $info[$chat_id]["mode"]     =   "make_code";
        save($info);
        exit;
       elseif (  $text and $text != null && $info[$chat_id]['mode'] == "make_code" ) :
       send ( "قم بإرسال الكمية");

        $info[$chat_id]['price']    =   filter_var($text,FILTER_VALIDATE_INT);
        $info[$chat_id]['mode'] = "amount";
        save($info);
    elseif ( $text && $text != null && $info[$chat_id]['mode'] == "amount" ) :
        send("جاري الانشاء....");
        $info[$chat_id]['amount'] = filter_var($text, FILTER_VALIDATE_INT);
        $info[$chat_id]["mode"]     =   null;
        save($info);
        send("تم الانشاء");
        send("تم انشاء " . $info['amount'] . " بطاقة وبسعر" . $info['price'] ." يمكنك الآن تنويه المستخدمين لشراء بطائق من متجر كروت الشحن"
        ,$home);
        $codes  =   substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOBQRSTUVWXYZ"), 1, 10);
        $numbers['cards'][$codes]['price'] = $info[$chat_id]['price'];
        $numbers['cards'][$codes]['amount'] = $info[$chat_id]['amount'];
        save($numbers,"numbers");
        exit;
    elseif($data == 'make_ready'):
edit("
🌷 اضف الرقم بالشكل التالي
💢 الاسم :-
💯 السعر :-
⁉️ الحالة :-
⚠️ ملاحظة :-
🌷 الرقم :-
♻ الكود :-
",$home );
$info[$chat_id]['mode'] = 'ready';
save($info);
exit;

elseif($text && $info[$chat_id]['mode'] == 'ready' ) :
$explode        = explode("\n",$text);
if(isset($explode[4])){
$country         = $explode[0];
$price             = $explode[1];
$now             = $explode[2];
$what             = $explode[3];
$number             = $explode[4];
$num =              substr($number, 0,-4)."••••";
$code             = $explode[5];
$pk                  = rand(1,100980077);
$readynumber['ready'][$pk]['country'] = $country;
$readynumber['ready'][$pk]['price'] = $price;
$readynumber['ready'][$pk]['now'] = $now;
$readynumber['ready'][$pk]['what'] = $what;
$readynumber['ready'][$pk]['number'] = $number;
$readynumber['ready'][$pk]['code'] = $code;
save($readynumber,"readynum");
sendd($channel , "
☑ ⁞ تم إضافه رقم جاهز لقسم الأرقام الجاهزة.

☎️ ⁞ الدولة:  $country
💸 ⁞ السعر: ₽ $price
☎️ ⁞ الرقم:  $num
✳️ ⁞ الحالة: $now
", [
   [
         ["text"=>"⏮ ⁞ إضغط هنا لشراء الرقم. ☑️","url"=>"https://t.me/$bot?start=buy#$pk"]]
 ]);

send("*تم إضافة رقم جديد الى قسم الأرقام الجاهزة بنجاح! ✅

🏴 الدولة: $country
💸 السعر: ₽ $price
📞 الرقم: $num
✨ الحالة: $now
💳 كود السلعة  $pk *
",$home);
$info[$chat_id]['mode'] = null;
save($info);
}
exit;

elseif($data == "del_ready") :
$keyboad['inline_keyboard'][] = [['text'=>'حذف السلعة ⛔','callback_data'=>'no'],['text'=>'السعـــر💲','callback_data'=>'no'],['text'=>'الدولة 🏴','callback_data'=>'no']];
foreach($readynumber['ready'] as $key => $nhh ):
$con =   $nhh["country"];
$price = $nhh["price"];
$code = substr($key,0,8);

$keyboad['inline_keyboard'][] = [['text'=>"$key",'callback_data'=>"del#$key"],['text'=>$price . ".00₽",'callback_data'=>"no"],['text'=>"$con",'callback_data'=>"no"]];
endforeach;
$keyboad['inline_keyboard'][] = [['text'=>'تحديث الصفحة 🔂',"callback_data"=>"readynumbers"],['text'=>'القائمة الرئيسية 🏡',"callback_data"=>"home"]];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text' => "
اختر الدولة الذي تريد حذفها ❌
",
'reply_markup'=>json_encode($keyboad)
]);
exit;

elseif($ex[0] == "del" ):
edit("تم حذف السلعة بنجاح ✔",$home);
unset($readynumber["ready"][$ex[1]]);
save($readynumber,"readynum");
exit;

    elseif ( $data == "addpoint" ):
        edit("قم بإرسال إيميل الشخص المراد إرسال النقاط له",$cancel);
        $info[$chat_id]["mode"] =   "sendpoint";
        save($info);
        exit;
    elseif ( preg_match("/^[A-z0-9\.]*@*[A-z]+\.[A-z]+$/",$text) && $info[$chat_id]["mode"] == "sendpoint" ):
        $info[$chat_id]["mode"] =   "sendpoint";
        $info[$chat_id]["email"] =   $text;
        save($info);
        send("قم باسال الرصيد الذي تريد اضافته",$cancel);
        exit;
    elseif ( preg_match("/\d+/",$text) && $info[$chat_id]["mode"] == "sendpoint" ):
        if( is_numeric($text) ):
            $donor   =   $check[$info[$chat_id]["email"]]["idd"];
            $receive = $refral[$check[$info[$chat_id]["email"]]["idd"]]["ref"];
            $idrec     = $check[$receive]["idd"];
            $point["members"][$info[$chat_id]["email"]]["point"]  +=   $text;
            save($point , "point");
            if($point["members"][$receive]["point"] >= 50) {
            $point["members"][$receive]["point"] += 0.1 * $text;
            save($point , "point"); }
            $info[$chat_id]["mode"]             =   null;     
            save($info);
            send(" اكتملت عملية الشحن بنجاح ✔",$home);
            sendd($donor , "☑️ تم إعادة شحن حسابك بـ مبلغ  $text روبل\n ↩️ رصيدك الأن : " .
            $point["members"][$info[$chat_id]["email"]]["point"] . " روبل" );
            
            sendd($idrec , "🎊 مفاجأه  \n 💡 لقد قام أحد فريقك بشحن حسابة وربحت $po روبل 💰");
            unset($info[$chat_id]["email"]);
            unset($info[$chat_id]["mode"]);
            save($info);
           else :
           send("قم بارسال قيمة رقمية وليس نص ",$home);
           endif;
        
    elseif ( $data == "delpoint" ):
        edit("قم بإرسال إيميل الشخص الذي تريد خصم نقاط عليه",$cancel);
        $info[$chat_id]["mode"] =   "delpoint";
        save($info);
        exit;
    elseif ( preg_match("/^[A-z0-9\.]*@*[A-z]+\.[A-z]+$/",$text) && $info[$chat_id]["mode"] == "delpoint" ):
        $info[$chat_id]["mode"] =   "delpoints";
        $info[$chat_id]["del"]    = $text;
        save($info);
        send("قم باسال الرصيد الذي تريد حذفه",$cancel);
        exit;
    elseif ( $text && $text != null && $info[$chat_id]["mode"] == "delpoints" ):
        if( is_numeric($text) ):
            $info["members"][$info[$chat_id]["del"]]["point"]  -=   $text;
            unset($info[$chat_id]["del"]);
            unset($info[$chat_id]["mode"]);
            save($info);
            send("تمت الاضافة",$home);
            sendd($ex[1],"تمت حذف <br/> $text الى حسابك");
        else:
            send("قم بارسال قيمة رقمية وليس نص ",$bak);
        endif;
        
    elseif ( $data == "getcodes" ):
        foreach ( $numbers["numbers"] as $code=>$num ):
            $result .=   $num["name"] . " [ <code> " . $code . "</code><br/>]";
        endforeach;
        edit($result,$home);
    

elseif($data == "add_operator" ):
edit("قم بارسل اسم وقيمة المورد بالطريقة التالية
`مورد 1
virt1`

",$cancel);
$info[$chat_id]["mode"] = "op";
save($info);
exit;

elseif($text && $info[$chat_id]["mode"] == "op" ) :
$pk = rand(1,100980077);
$exx = explode( "\n" , $text);
if(preg_match("/[A-z]/" , $exx[1]) ){
send("تم الحفظ \n اسم المورد $exx[0] \n الكود : `$pk`",$home);
$info["operator"][$pk]["name"] = $exx[0];
$info["operator"][$pk]["val"] = $exx[1];
save($info);
unset($info[$chat_id]["mode"]);
save($info);
}
exit;

elseif($data == "del_operator") :
$json["inline_keyboard"][]  =   [["text"=>"اسم المورد ♨️","callback_data"=>"hello"],["text"=>"القيمة 🛑","callback_data"=>"hmm"]];
foreach($info["operator"] as $k => $v):
$name = $info["operator"][$k]["name"];
$val  = $info["operator"][$k]["val"];
$json["inline_keyboard"][]  =   [["text"=>"$name","callback_data"=>"hello"],["text"=>"","callback_data"=>"delope#$k"]];
endforeach;
bot("editmessagetext",[
                "chat_id"=>$chat_id,
                "text"=>"اختر المورد الذي تريد حذفه 🗑",
                "message_id" => $message_id,
                "reply_markup" => json_encode($json)
        ]);
     exit;
     
elseif($ex[0] == "delope"):
unset($info["operator"][$ex[1]]);
save($info);
edit("تم الحذف بنجاح ✔");
exit;

elseif(preg_match("/[0-9]/", $text)&& $info[$chat_id]["mode"] == "del_op" ) :
if($info["operator"][$text]["name"] != null){
unset($info["operator"][$text]["name"]);
unset($info["operator"][$text]["val"]);
unset($info[$chat_id]["mode"]);
save($info);
send("تم الحذف");
} else {
send("المورد الذي قمت بارسالة غير موجود",$home);
}

elseif($data == "add-n"):
edit("ارسل النسبة التي تريد اضافتها الآن",$cancel);
$info[$chat_id]["mode"] = "hmm";
save($info);
exit;

elseif(is_numeric($text)):
if($text > 1 && $text < 99 ){
send("تم حفظ النسبة بنجاح✔");
$info["nesbah"] = $text;
unset($info[$chat_id]["mode"]);
save($info);
} else {
send("الرجاء ادخال رقم اقل من 100");
}

endif;
    #====================================================================#
else:  
  die("@Baageel_Programmer");
endif;