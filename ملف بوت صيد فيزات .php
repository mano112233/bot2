<?php 
////////////////////////////////////////////////////############
/////قناة الملف √ @amrakl 
//////////#المطور @tti4tt 
/////كاتب الملف @tti4tt
/////الرجاء عدم الخمط
////////////////////////////////////////////////////############
ob_start();
$token = "6593044210:AAGVRqqX4EFggf4ufojX5p_xB49EaDRg0CI";
define("API_KEY", $token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$Alsh = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Alsh";
$Alsh = file_get_contents($url);
return json_decode($Alsh);}
################
$mr = "7187027002"; #ايدي الادمن
$chs = "@ayman_mano"; #معرف قناتك  بي @
$bot = "@acehehrbot"; #معرف بوتك بي @
$ad = "@mano_2004_ayman"; #معرف المطور 
////////تم انتهاء من تسجيل بينات البوت ★/////////


////////////////////////////////////////////////////############
/////قناة الملف √ @amrakl 
//////////#المطور @tti4tt 
/////كاتب الملف @tti4tt
/////الرجاء عدم الخمط
////////////////////////////////////////////////////############


//////////////رساله البدا /////////////
$amr5 = "هلا بك اخي. 💛

في بوت  صيد فيزات مجاني √

 للدخول الي قائمه الصيد  اضغط /amr7";
///////////////قائمه الصيد //////////////////
$zx = "هلا بك في صفحه التخمين 🧡
 
لتخمين فيزا اضغط /sud ★

----------------------------------ـ
تحديثات البوت : $chs
معرف البوت : $bot
مطور البوت : $ad";
////////////////////////////////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$id = $message->from->id;
$data = $update->callback_query->data;
$messageid = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$name2=$update->callback_query->message->chat->name;
$message_id2 = $update->callback_query->message->message_id;
$MROAN = file_get_contents("MROAN.txt");
$message_id = $message->message_id;
$type = $message->chat->type; 
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
$name = $update->message->from->first_name;   
$fn = $update->message->from->first_name;   
$from_id = $update->message->from->id;
$us = $message->from->username;
$replyid = $message->reply_to_message->message_id;
$info = json_decode(file_get_contents('info.json'),true);
$infoget= json_decode(file_get_contents('info.json')); 
$g= json_decode(file_get_contents('t.json'));  $pp= $g->pp; $urll=$g->urll;  $pp2= $g->pp2; $urll2=$g->urll2;  $onbot=$g->onbot; $offbot=$g->offbot;
$welcom=$g->welcom;   $edt= $g->edt; 
if ($welcom=="null") { 
$start="welcom  to my bot";
}else {
$start=$welcom;
}
$ch1=$g->ch1;  $ch2=$g->ch2;  $sj=$g->sj;  $on=$g->on; $into=$g->into; if($into=="✅"){$m="❎";} if($into=="❎"){ $m="✅";} $s=$g->s; if($s=="✅"){$k="❎";} if($s=="❎"){ $k="✅";} if($onbot=="✅"){$qq="❎";} if($offbot=="❎"){ $qq="✅";}
$relpymessageid = $infoget->chat->$replyid;
$NN=json_decode(file_get_contents("addadmin.json"));
mkdir("mber");
$php88 = json_decode(file_get_contents("mber/id.json"),true);
if($text and !in_array($from_id, $php88["userid"])){
$php88['userid'][] = "$from_id";
file_put_contents("mber/id.json", json_encode($php88));}
$mbere = json_decode(file_get_contents("mber/bc.json"),true);
$php88 = json_decode(file_get_contents("mber/id.json"),true);
$MMM = $php88['userid'];
$admin= $mr ; 
$nmder= count ($MMM);
$bc= file_get_contents("MROAN.txt");
$us=$nmder;
$g= json_decode(file_get_contents('t.json'));
$bot= $g->ch;
$usern=$g->usern;
$uu = str_ireplace("@","",$usern);
$mem= $g->mem;
$co = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMemberscount?chat_id=$usern")); 
$count = $co->result;  $endmem = $mem;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$usern&user_id=".$from_id);
if($text && $count <$endmem && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⚠️  عذراً عزيزي ⚙  يجب عليك الاشتراك في قنوات البوت أولا📮  اشترك ثم ارسل /start ⬇️[『 اضغط هنا  للاشتراك  』](https://t.me/$uu)$usern— — — — — — — — — ",'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown", 'reply_markup'=>json_encode([ 'inline_keyboard'=>[[['text'=>"『 ch 』⚠️",'url'=>'T.me/'.$uu]],]])]);return false;}
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch1&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){bot('sendMessage',['chat_id'=>$chat_id,'text'=>" ⚠️  عذراً عزيزي ⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[『 ch 』](https://t.me/$ch1)
@$ch1  — — — — — — — — —",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"『 ch 』⚠️",'url'=>'T.me/$ch1']],]])]);return false;}
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch2&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⚠️  عذراً عزيزي ⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[『 ch 』](https://t.me/$ch2)
@$ch2  — — — — — — — — —",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"『 ch 』⚠️",'url'=>'T.me/$ch1']],]])]);return false;}  
if($count == $endmem and  !is_null($mem)) { $ing=['s'=>$s , 'into' =>$into,   'ch'=>"null"  ,'usern'=>"null" , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>"ok" ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2 ,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('sendMessage',[ 'chat_id'=>$admin, 'text'=>"تم بلوغ العدد المطلوب من الاعضاء  لذالك تم حذف الاشتراك", ]); }
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=-$pp&user_id=".$from_id);
if($text && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⚠️  عذراً عزيزي ⚙  يجب عليك الاشتراك في قنوات البوت أولا📮  اشترك ثم ارسل /start ⬇️[『 ch 』]($urll)'\n' $urll — — — — — — — — —",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'reply_markup'=>json_encode([ 'inline_keyboard'=>[  [['text'=>"ch",'url'=>"$urll2"]],]])]);return false;}
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=-$pp2&user_id=".$from_id);
if($text && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⚠️  عذراً عزيزي ⚙  يجب عليك الاشتراك في قنوات البوت أولا📮  اشترك ثم ارسل /start ⬇️[『 ch 』]($urll2)'\n' $urll2 — — — — — — — — —",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'reply_markup'=>json_encode([ 'inline_keyboard'=>[  [['text'=>"ch",'url'=>"$urll2"]],]])]);return false;}
//start
if($NN==1){
$admin= in_array($chat_id,$NN);
}else{
$admin="$mr";
}
if($text == "/start"){bot('sendmessage',[  'chat_id'=>$chat_id, 'text'=>"", 'parse_mode'=>"markdown", 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,  ]); }
if($text=="/admin" and $chat_id==$admin){ bot('sendMessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id,
'text'=>" مرحبا مطوري ★
في في لوحه التحكم ★
اختر ماتريده من الكيبورد ادناه ★",
 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"◈ تشغيل البوت".$onbot, 'callback_data'=>'onbot'],['text'=>"◈ايقاف البوت".$offbot, 'callback_data'=>'offbot'],['text'=>"◈ الإذاعه🎯", 'callback_data'=>'ks']], [['text'=>"◈ أشعارات ⚜",  'callback_data'=>'jj']], [['text'=>"◈تفعيل التواصل⚜".$s,  'callback_data'=>'t'],['text'=>"◈تعطيل التواصل".$k, 'callback_data'=>'k']], [['text'=>"◈⚠️دخول الاعضاء".$into,  'callback_data'=>'in'],['text'=>"◈تعطيل  دخول⚠️🙊".$m, 'callback_data'=>'ou']], [['text'=>"◈قسم القنوات ",  'callback_data'=>'##']], [['text'=>"◈ قسم التمويل" ,'callback_data'=>'tm'],['text'=>"◈ قسم الاشتراك الاجباري",  'callback_data'=>'sj']], [['text'=>"◈ القنوات الخاصه ",  'callback_data'=>'pk']], [['text'=>"◈ اوامر اخرى",  'callback_data'=>'ee2']], ]])]);}
if($data=="bak"){bot('editMessageText',['chat_id'=>$admin,'message_id'=>$message_id2,
 'text'=>"
مرحبا مطوري ★
في في لوحه التحكم ★
اختر ماتريده من الكيبورد ادناه ★",
'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"◈ تشغيل البوت".$onbot, 'callback_data'=>'onbot'],['text'=>"◈ايقاف البوت".$offbot, 'callback_data'=>'offbot']], [['text'=>"◈ الإذاعه🎯", 'callback_data'=>'ks'],['text'=>"◈ أشعارات ⚜",  'callback_data'=>'jj']], [['text'=>"◈تفعيل التواصل⚜".$s,  'callback_data'=>'t'],['text'=>"◈تعطيل التواصل".$k, 'callback_data'=>'k']], [['text'=>"◈⚠️دخول الاعضاء".$into,  'callback_data'=>'in'],['text'=>"◈تعطيل  دخول⚠️🙊".$m, 'callback_data'=>'ou']], [['text'=>"◈قسم القنوات ",  'callback_data'=>'##']], [['text'=>"◈ قسم التمويل" ,'callback_data'=>'tm'],['text'=>"◈ قسم الاشتراك الاجباري",  'callback_data'=>'sj']], [['text'=>"◈ القنوات الخاصه ",  'callback_data'=>'pk']], [['text'=>"◈ اوامر اخرى",  'callback_data'=>'ee2']], ]])]);}
if($data == "t"){  $ing=["s" =>"✅" , "into"=>$into, 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem, 'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2 ,'onbot'=>$onbot, 'offbot'=>$offbot ];file_put_contents('t.json', json_encode($ing));bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'text'=>"- تم تفعيل توجيه الرسائل 🔃✅",'show_alert'=>true]);}
if($data == "k"){ $ing=["s" =>"❎" , "into"=>$into, 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ];file_put_contents('t.json', json_encode($ing));bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'text'=>"- تم تعطيل توجيه الرسائل 🔃❎",'show_alert'=>true]);}
if($data == "in"){ $ing=['s'=>$s ,'into'=> "✅" ,  'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ];file_put_contents('t.json', json_encode($ing));bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'text'=>"- تم تفعيل تنبيه دخول الأعضاء 🚸✅",'show_alert'=>true,]);}
if($data == "ou"){ $ing=['s'=>$s ,'into' => "❎", 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2];file_put_contents('t.json', json_encode($ing));bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'text'=>"- تم تعطيل تنبيه دخول الأعضاء 🚸❎",'show_alert'=>true,]);}
if($data == "onbot"){$ing=["s" =>$s , "into"=>$into, 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem, 'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2 ,'onbot'=>"✅", 'offbot'=>"❎" ];file_put_contents('t.json', json_encode($ing));bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'text'=>"-تم تشغيل البوت 🔃✅",'show_alert'=>true]);}
if($data == "offbot"){ $ing=["s" =>$s , "into"=>$into, 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2 ,'onbot'=>"❎", 'offbot'=>"✅" ]; file_put_contents('t.json', json_encode($ing)); bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'text'=>"❎😐- تم تعطيل البوت بنجاح",'show_alert'=>true]);}
if($data=="st"){ bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"☆︙عزيزي ← [$name2](tg://user?id=$chat_id2)☆︙الان قم بأرسال كليشة الاستارت", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"「تعديل」", 'callback_data'=>'edt'],['text'=>"「، رجوع 」 ", 'callback_data'=>'bak']], ]])]); }
if($data == "edt"){ $ing=['into' =>$into, 's'=>$s ,  'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>"ok",'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2 ,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"ا☆︙عزيزي ← [$name2](tg://user?id=$chat_id2)☆︙الان قم بأرسال كليشة الاستارت", 'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown"]);}
if($edt == "ok" and $text != "/start"){ $ing=['into' =>$into, 's'=>$s ,  'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$text,  'edt'=>"null"  ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing));bot('sendmessage',['chat_id'=>$chat_id, 'text'=>"☆︙بواسطة ← $io  ☆︙تم تعين كليشة الاستارت بنجاح ",]);} 
if($data=="tm"){ bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"**✵مرحبا بك عزيزي في قسم التمويل من هنا تسطيع اضافه تمويل القنوات .✵**", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"『أضافه القناة』", 'callback_data'=>'add'],['text'=>"『ألرجوع』", 'callback_data'=>'bak']], ]])]); }
if($data == "add"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>"ok" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"**『حسنا آلان قم بارسال معرف قناتك مثلا  @amrakl』**", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown" ]); }
if($bot == "ok" and $text != "/start"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>"inn" ,'usern'=>$text , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"**✵تم حفظ معرف القناة بنجاح  قم بأرسال عدد اعضاء القناة بعد التمويل✵**",]); }
if($bot == "inn" and $text != "/start"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>"null" ,'usern'=>$usern, 'mem'=>$text ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"**تم حفظ الاشتراك الاجباري ✵**", 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"『الرجوع』", 'callback_data'=>'bak']], ]])]); }
if($data=="sj"){ bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"**『✦﷽✦』مرحبا في هذا القسم تسطيع تفعيل الاشتراك في بوتك من هنا 『✦﷽✦』 **", 'reply_to_message_id'=>$message->message_id , 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"『1 أضف قناة』", 'callback_data'=>'addc'],['text'=>"『حذف القناة 1』", 'callback_data'=>'d1']], [['text'=>"『أضف قناة 2』", 'callback_data'=>'ch2'],['text'=>"『 حذف القناة2』", 'callback_data'=>'d2']], [['text'=>"『 ألرجوع  』", 'callback_data'=>'bak']], ]])]); }
if($data == "addc"){ $ing=[ 's'=>$s , 'inn'=> $into , 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>"ok" ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"مثال @amrakl **⊰⦁⋘━━━ مثال اهلا بك عزيزي المطور قم بأرسال معرف قناتك الان  ━━━⋙⦁⊱**", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown" ]); }
if($sj == "ok" and $text != "/start"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>"null" ,'ch1'=>$text ,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ];file_put_contents('t.json', json_encode($ing));bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✤**$text تم تفعيل الاشتراك بنجاح**✤",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown" ]);}
if($data == "ch2"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>"s2" ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"مثال @amrakl **⊰⦁⋘━━━ مثال اهلا بك عزيزي المطور قم بأرسال معرف قناتك الان  ━━━⋙⦁⊱**", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown"]); }
if($sj == "s2" and $text != "/start"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>"null" ,'ch1'=>$ch1, 'ch2'=>$text,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"✤**$text تم تفعيل الاشتراك بنجاح**✤",]);}
if($data == "d1"){ $ing=[ 's'=>$s , 'inn'=> $into , 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>"null" ,'ch1'=>"null",'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing));bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"**✺تم حذف الاشتراك الاجباري للقناه الاولى بنجاح✺ **", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"•『 الرجوع 』•", 'callback_data'=>'bak']], ]])]); }
if($data == "d2"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>$bot ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>"null" ,'ch1'=>$ch1 ,'ch2'=>"null",'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"**✺تم حذف الاشتراك الاجباري للقناه الثانيه بنجاح✺**", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"•『 الرجوع 』• ", 'callback_data'=>'bak']], ]])]); }
if($data == "pk"){ bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2,'text'=>"⊰✾⊱** @mroan8 مرحبا بك في القسم الخاص  تسطيع ادره القنوات الخاصه راسل **⊰✾⊱",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"「أضف قناة1」", 'callback_data'=>'kkk'],['text'=>"「أضف قناة 2」•", 'callback_data'=>'ggg']], ]])]); }
if($data == "kkk"){ $ing=[ 's'=>$s , 'inn'=> $into , 'ch'=>"id" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2 ,'pp'=>$pp ,'urll'=>$urll ,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"⊰✾⊱**اهلا بك عزيزي في هذا القسم ارسل ايدي قناتك الخاصه الان **⊰✾⊱", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown"]); }
if($bot == "id" and $text != "/start"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>"url" ,'usern'=>$text , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2, 'pp'=>$text ,'urll'=>$urll ,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"✺**  تم حفظ ايدي قناتك بنجاح الان قم بارسال رابط القناه**✺", ]); }
if($bot == "url" and $text != "/start"){ $ing=[  's'=>$s , 'inn'=> $into , 'ch'=>"null" ,'usern'=>$usern, 'mem'=>$text ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2, 'pp'=>$pp ,'urll'=>$text ,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"♡**تم حفظ الاشتراك الاجباري  للقناه الخاصه ايدي القناه $pp  رابط القناه $urll **♡", 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"「الرجوع」•", 'callback_data'=>'bak']], ]])]); }
if($data == "ggg"){ bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"⊰✾⊱** @mroan8 مرحبا بك في القسم الخاص  تسطيع ادره القنوات الخاصه راسل **⊰✾⊱", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"「اضافة قناة」", 'callback_data'=>'ooo'],['text'=>"「الرجوع」•", 'callback_data'=>'pak']],]])]);}
if($data == "ooo"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>"2id" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2 ,'pp'=>$pp ,'urll'=>$urll ,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot  ]; file_put_contents('t.json', json_encode($ing)); bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"☆.**اهلا بك عزيزي في هذا القسم ارسل ايدي قناتك الخاصه الان **", 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"「الرجوع」•", 'callback_data'=>'bak']], ]])]); }
if($bot == "2id" and $text != "/start"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>"url2" ,'usern'=>$text , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2, 'pp'=>$pp ,'urll'=>$urll ,'pp2'=>$text ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"✺**  تم حفظ ايدي قناتك بنجاح الان قم بارسال رابط القناه**✺", ]); }
if($bot == "url2" and $text != "/start"){ $ing=[ 's'=>$s , 'inn'=> $into , 'ch'=>"null" ,'usern'=>$usern, 'mem'=>$text ,'welcom'=>$welcom,  'edt'=>$edt ,'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2, 'pp'=>$pp ,'urll'=>$urll ,'pp2'=>$pp2 ,'urll2'=>$text,'onbot'=>$onbot, 'offbot'=>$offbot  ]; file_put_contents('t.json', json_encode($ing)); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"♡**تم حفظ الاشتراك الاجباري **♡", 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"「الرجوع」•", 'callback_data'=>'bak']], ]])]); }
if($data=="ee2"){ 
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
مرحبا مطوري ★
في في لوحه التحكم ★
اختر ماتريده من الكيبورد ادناه ★",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"◦قسم الحظر", 'callback_data'=>'##']],
[['text'=>"◦حظر  عضو", 'callback_data'=>'ban1'],['text'=>"◦الغاء حظر ", 'callback_data'=>'ban2']],
[['text'=>"◦المحظورين ", 'callback_data'=>'ban3'],['text'=>" ◦مسح المحظورين", 'callback_data'=>'ban4']],
[['text'=>"◦معلومات عامه", 'callback_data'=>'##']],
[['text'=>"◦ألاحصائيات",'callback_data'=>'akk'],['text'=>"◦ اخر مستخدمين",'callback_data'=>'SSS']],
[['text'=>"◦الادمنية",'callback_data'=>'adminx']]
]])]);
}
$MROAN=json_decode(file_get_contents("ban.json"));
if($data == "ban1"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>"ban1" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing));bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,'text'=>"  • **حسنا عزيزي المطور الان ارسل الايدي **║◈ ",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع", 'callback_data'=>'bak']],]])]);}
if($banid==$text and $bot=="ban1" and preg_match('/([0-9])/i',$text) and $chat_id==$admin and !in_array($text, $MROAN)){
$ing=['s'=>$s , 'inn'=> $into , 'ch'=>"null" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ];
file_put_contents("t.json", json_encode($ing)); 
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⋄︙العضو - [$banname](tg://user?id=$banid)⋄︙تم حـظـرهه بـنـجاح",'parse_mode'=>"Markdown", ]);
$MROAN[]="$text"; 
file_put_contents("ban.json",json_encode($MROAN));}
if($data == "ban2"){
$ing=['s'=>$s , 'inn'=> $into , 'ch'=>"ban2" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; 
file_put_contents("t.json", json_encode($ing));
 bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"• **حسنا عزيزي المطور الان ارسل الايدي **║◈ ",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع", 'callback_data'=>'bak']], ]])]); }
if($banid==$text and $bot=="ban2" and $chat_id==$admin and preg_match('/([0-9])/i',$text) ){
$ing=['s'=>$s , 'inn'=> $into , 'ch'=>"null" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ];
file_put_contents('t.json', json_encode($ing));
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⋄︙العضو - [$banname](tg://user?id=$banid)⋄︙تم الـغـاء حـظـرهه بـنـجاح",'parse_mode'=>"Markdown", ]); $key = array_search($text,$MROAN); unset($MROAN[$key]); $MROAN= array_values($MROAN); $MROAN = json_encode($MROAN,true);file_put_contents("ban.json",$MROAN); }
if($data == "ban3"){ $banlast = $MROAN; for($z = 0;$z <= count($banlast)-1;$z++){$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$banlast[$z]"));$banuser =$apiban->result->username;$banname =$apiban->result->first_name; $banid =$apiban->result->id; $result = $result."⋄︙ $z ← [$banname](https://t.me/$banuser) - $banid"."\n";}bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,'text'=>"⋄︙اليك قائمة المحظورين :  '\n' ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ$result",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,  ]);exit();}
if($data == "ban4"){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,'text'=>"⋄︙ تم مسح قائمة المحظورين⋄︙",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=> true ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع", 'callback_data'=>'bak']],]])]);$MROAN = null;file_put_contents("ban.json",$MROAN);}
 $MROAN=json_decode(file_get_contents("ban.json"));
 $ban=count($MROAN);
$data = $update->callback_query->data;
$ss=count($data);
$qqs=$messageid-3;
if($data == "akk"){bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"**
اليك احصائيات البوت بالتفصيل : 📑
⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯
👥 عـدد اعضاء بوتـك : ❲ $us ❳ .
🗣️ الـمحظورين:($ban ).
📧 الضغطات الشفافة : ❲ $ss ❳ .
📩 الرسائل المستقبلة : ❲ $qqs ❳ .
📁 مـجـموع الرسائـل : ❲ $messageid ❳ .
⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯**",'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"•『 الرجوع 』•", 'callback_data'=>'bak']],  ]])]); }
$lst = json_decode(file_get_contents("mber/ls.json"),true);
$MMM = $lst['userid'];
if($data == "SSS"){ $banlast = $MMM; for($z = 0;$z <= count($banlast)-1;$z++){$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$banlast[$z]"));$banuser =$apiban->result->username;$banname =$apiban->result->first_name; $banid =$apiban->result->id; $result = $result."⋄︙ $z ← [$banname](https://t.me/$banuser) - $banid"."\n";} bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"⋄︙اليك قائمة اخر المستخدمين :  ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ '\n' $result",'parse_mode'=>"markdown", 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,  ]);  }
$MROAN=json_decode(file_get_contents("addadmin.json"));
if($data == "adminx"){  bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,'text'=>"  • ** مرحبا بك عزيزي المطور في هذا القسم من لوحه التحكم تستطيع رفع  ادمنيه معاك في البوت**║◈ ",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown",'reply_markup'=>json_encode(['inline_keyboard'=>[ [['text'=>"࿇ أضف ادمن ", 'callback_data'=>'admin'],['text'=>"࿇ حذف ادمن ", 'callback_data'=>'admin2']], [['text'=>"『الرجوع 』", 'callback_data'=>'bak']], ]])]);}
if($data == "admin"){ $ing=['s'=>$s , 'inn'=> $into , 'ch'=>"admin" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing));bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,'text'=>"  • **حسنا عزيزي المطور الان ارسل الايدي **║◈ ",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown" ]);}
if($bot=="admin" and preg_match('/([0-9])/i',$text) and $chat_id==$admin /*and !in_array($text, $MROAN)*/ ){$ing=['s'=>$s , 'inn'=> $into , 'ch'=>"null" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ];file_put_contents('t.json', json_encode($ing)); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⋄︙العضو⋄︙تم رفع بـنـجاح",'parse_mode'=>"Markdown", ]); $MROAN[]="$text"; file_put_contents("addadmin.json",json_encode($MROAN));}
if($data == "admin2"){$ing=['s'=>$s , 'inn'=> $into , 'ch'=>"admin2" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ]; file_put_contents('t.json', json_encode($ing)); bot('editMessageText',[ 'chat_id'=>$chat_id2, 'message_id'=>$message_id2, 'text'=>"• **حسنا عزيزي المطور الان ارسل الايدي **║◈ ",'disable_web_page_preview'=> true ,'parse_mode'=>"Markdown" ]); }
if($bot=="admin2" and $chat_id==$admin and preg_match('/([0-9])/i',$text) ){$ing=['s'=>$s , 'inn'=> $into , 'ch'=>"null" ,'usern'=>$usern , 'mem'=>$mem ,'welcom'=>$welcom,  'edt'=>$edt, 'sj'=>$sj ,'ch1'=>$ch1,'ch2'=>$ch2,'pp'=>$pp ,'urll'=>$urll,'pp2'=>$pp2 ,'urll2'=>$urll2,'onbot'=>$onbot, 'offbot'=>$offbot ];file_put_contents('t.json', json_encode($ing));bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⋄︙تم الغاء رفع العضو بنجاح عزيزي الادمن ︙⋄",'parse_mode'=>"Markdown", ]); $key = array_search($text,$MROAN); unset($MROAN[$key]); $MROAN= array_values($MROAN); $MROAN = json_encode($MROAN,true);file_put_contents("addadmin.json",$MROAN); }  
$lst = json_decode(file_get_contents("mber/ls.json"),true);
$MMM = $lst['userid'];
$nmder= count ($MMM);
if($text and !in_array($from_id, $lst["userid"]) and $nmder != 11){   $lst['userid'][] = "$from_id";  file_put_contents("mber/ls.json", json_encode($lst));}
if($nmder != "10"  && $nmder=="10"){  unlink("mber/ls.json");  }
#bc 
if($data == "ks"){ file_put_contents("MROAN.txt","MROAN0"); bot('sendMessage',['chat_id'=>$chat_id2,'text'=>' هلا بك عزيزي ارسل رسالتك وسوف يتم نشرها  البوت يدعم كافه المديا يمكنك استخدام الماركدون  ',]);     }
if($message->document &&$chat_id==$admin &&$bc=="MROAN0" ){ bot('sendmessage',[ 'chat_id'=>$admin, 'text'=>"انتضر", 'disable_web_page_preview'=> true ,  'parse_mode'=>"Markdown", ]); foreach($MMM as $OO => $mbere){ bot('senddocument', [ 'chat_id'=>$mbere, 'document'=>$message->document->file_id, 'caption'=>$message->caption, 'parse_mode'=>"Markdown", 'disable_web_page_preview'=>true, ]); file_put_contents("MROAN.txt","null"); }}
if($message &&$chat_id==$admin &&$bc=="MROAN0"){ bot('sendmessage',[ 'chat_id'=>$admin, 'text'=>"انتضر عزيزي", 'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown", ]); foreach($MMM as $OO => $mbere){ bot('sendmessage', [ 'chat_id'=>$mbere, 'text'=>$text, 'caption'=>$message->caption, 'parse_mode'=>"Markdown", 'disable_web_page_preview'=>true, ]); file_put_contents("MROAN.txt","null"); }}
if($message->voice &&$chat_id==$admin &&$bc=="MROAN0"){ bot('sendmessage',[    'chat_id'=>$admin,  'text'=>"انتضر جاي نشر الصوت",  'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown", ]); foreach($MMM as $OO => $mbere){ bot('sendvoice', [ 'chat_id'=>$mbere,  'voice'=>$message->voice->file_id,      'caption'=>$message->caption, 'parse_mode'=>"Markdown", 'disable_web_page_preview'=>true, ]); file_put_contents("MROAN.txt","null"); }}
if($message->photo &&$chat_id==$admin &&$bc=="MROAN0") { bot('sendmessage',[ 'chat_id'=>$admin,  'text'=>"جاري نشر الصوره",  'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown", ]); foreach($MMM as $OO => $mbere){ bot('sendphoto', [ 'chat_id'=>$mbere,  'photo'=>$message->photo[0]->file_id,       'caption'=>$message->caption,       'parse_mode'=>"Markdown", 'disable_web_page_preview'=>true, ]); file_put_contents("MROAN.txt","null"); }}
if($message->sticker&&$chat_id==$admin &&$bc=="MROAN0"){ bot('sendmessage',[  'chat_id'=>$admin,  'text'=>"__تم نشر الملصق '📂!__",  'disable_web_page_preview'=> true ,  'parse_mode'=>"Markdown",  ]); foreach($MMM as $OO => $mbere){ bot('sendsticker', [ 'chat_id'=>$mbere, 'sticker'=>$message->sticker->file_id, 'caption'=>$message->caption,       'parse_mode'=>"Markdown", 'disable_web_page_preview'=>true, ]); file_put_contents("MROAN.txt","null"); }}
if($message->video&&$chat_id==$admin &&$bc=="MROAN0"){bot('sendmessage',[ 'chat_id'=>$admin,  'text'=>"__تم نشر الفيديو '📚!__",  'disable_web_page_preview'=> true ,  'parse_mode'=>"Markdown",  ]); foreach($MMM as $OO => $mbere){ bot('sendvideo', [ 'chat_id'=>$mbere, 'video'=>$message->video->file_id,'caption'=>$message->caption,'parse_mode'=>"Markdown",'disable_web_page_preview'=>true, ]); file_put_contents("MROAN.txt","null"); }}
if($message->audio&&$chat_id==$admin &&$bc=="MROAN0"){ bot('sendmessage',[  'chat_id'=>$admin,  'text'=>" __تم نشر الاغنيه '🎺!__",  'disable_web_page_preview'=> true ,  'parse_mode'=>"Markdown",  ]); foreach($MMM as $OO => $mbere){ bot('sendaudio', [ 'chat_id'=>$mbere, 'audio'=>$message->audio->file_id,'caption'=>$message->caption,'parse_mode'=>"Markdown",'disable_web_page_preview'=>true, ]); file_put_contents("MROAN.txt","null"); }}
if($text == "/start" and $into== "✅" and $from_id != $admin){ bot("sendmessage",[ "chat_id"=>$admin,
"text"=>"
،🔖:عضو جديد قام بالدخول الى البوت 
،🏷:الاسم : [$name](tg://user?id=$from_id) 
،📊:المعرف : [@$username](tg://user?id=$from_id)  
،⚠️:الايدي:  [$from_id](tg://user?id=$from_id)  
",  'parse_mode'=>"MarkDown", 'disable_web_page_preview'=>true, ]);}
if($type == 'private' && $chat_id != $admin  and $s=="✅" ){ bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"تم ارسـال رسالتـك 🗯انتضـر الرد 🚸",]);$bot = bot('forwardMessage',[ 'chat_id'=>$admin, 'from_chat_id'=>$chat_id, 'message_id'=>$message_id ]); $getidmessage = $bot->result->message_id; $info["chat"]["$getidmessage"] = "$chat_id"; file_put_contents('info.json', json_encode($info));}
if($s=="✅" and $chat_id == $admin ){bot('sendMessage',['chat_id'=>$relpymessageid, 'text'=>$text,]);}
$Mk=json_decode(file_get_contents("ban.json"));
if($update && !in_array($chat_id,$Mk)){
if($onbot=="✅" ){
include_once("mroan.php");
}}

    
$codes = ['1','2','3','4','5','6','7','8','9','0'];
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$code11 = array_rand($codes,1);
$code12 = array_rand($codes,1);
$code13 = array_rand($codes,1);
$code14 = array_rand($codes,1);
$code15 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$bcode11 = $codes[$code11];
$bcode12 = $codes[$code12];
$bcode13 = $codes[$code13];
$bcode14 = $codes[$code14];
$bcode15 = $codes[$code15];
$bcode16 = $codes[$code16];
$monthcode = ['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16'];
$amr3 = "$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10$bcode11$bcode12$bcode13$bcode14$bcode15$bcode16";
$amr4 = "$bcode1$bcode2$bcode3";

$update = file_get_contents('php://input');

if (!empty($update)) {
    $update = json_decode($update, true);
    if (isset($update['message'])) {
        $message = $update['message'];
        $chat_id = $message['chat']['id'];
        $first_name = $message['from']['first_name'];
        if (isset($message['text'])) {
            $text = mb_strtolower($message['text']);
if($text == "/start" ){
                bot('sendmessage', [
                 'chat_id' => $chat_id,
                 'text'=>"$amr5",
                 'parse_mode'  =>"Markdown",
     ]);
}
if($text == "/amr7" ){
	Bot('SendMessage',[
	   'chat_id'=>$chat_id,
	   'text'=>"$zx",
	   'parse_mode'  =>"Markdown",
	]);
}
if($text == "/sud" ){
	Bot('SendMessage',[
	   'chat_id'=>$chat_id,
	   'text'=>"
	تم صيد فيزا ✅ 
ـ-----------------------ـ
الرقم -: `4$amr3` 
الباسورد -:  $amr4
التاريخ -:  11/1/2025
البلد : 🇺🇸
ـ-----------------------ـ
تحديثات البوت $chs
",
	   'parse_mode'  =>"Markdown",
	]);
}
        }
    }
}