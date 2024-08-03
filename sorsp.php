<?php
ob_start();
$API_KEY = "7050850861:AAHerUabzGfm02k_6M4vGEYgqPnJOAlTVJQ";// توكن بوتك العزيز
$buy = "@nnnn";//  يوزرك تليكرام .
$sudo = "7309262354";// خلي ايديك هنا .
$admin = "$sudo";// عوفة لا تبعبص بي .
$idBot = "7050850861";// ايدي بوتك خلي بشكل صحيح .
$admmm = $sudo;// لا تبعصة عوفة .
$Dev = array("$sudo", "" );
$userrr = "WebhookHostHeawlgalkabot"; # خلي معرف بوتك بدون نيم ( @ )
date_default_timezone_set('Asia/Damascus');
$get_toke = file_get_contents('info.php');
$get_token = explode("\n", $get_toke);
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$bot_id = $json_info->result->id;
$url_info = file_get_contents("https://api.telegram.org/bot$get_token[0]/getMe");
define('API_KEY',$API_KEY);
function bot($method,$TH3SS=[]){
$TH3SS = http_build_query($TH3SS);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$TH3SS";
$TH3SS = file_get_contents($url);
return json_decode($TH3SS);}

$json_info = json_decode($url_info,true);
$usernamebot = $json_info['result']['username'];
$bot_id = $json_info['result']['id'];
$admmm = "$sudo";
$bgh = file_get_contents("$re_id.txt");
$Dev = array("$admmm","6480697494"); # حط ايدي المطور ثاني المساعد او بكيفك خلي ايديك .
$channel = "Tbiix";
$token = API_KEY;

$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text  = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
# ~~~~~~ dev : @Tbiix - @nnnnnnnnnr ~~~~~ #
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
# ~~~~~~ dev : @Tbiix - @nnnnnnnnnr ~~~~~ #
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
# ~~~~~~ dev : @Tbiix - @nnnnnnnnnr ~~~~~ #
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
# ~~~~~~ dev : @Tbiix - @nnnnnnnnnr ~~~~~ #
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);

$channel = "Tbiix";
$token = API_KEY;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$reply = $update->message->reply_to_message->forward_from->id;
$data = $update->callback_query->data;
$tc = $update->message->chat->type;
$namegroup = $update->message->chat->title;
$newchatmemberid = $update->message->new_chat_member->id;
$edit = $update->edited_message->text;
$re_id = $update->message->reply_to_message->from->id;
$re = $update->message->reply_to_message;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->from->id;
$caption = $update->message->caption;
$name = $update->message->from->first_name;
$name20 = substr($name,0,20)."";
$user = $update->message->from->username;
$mid = $message->message_id;

$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$status = $statjson['result']['status'];
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
$statusrt = $statjsonrt['result']['status'];
$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
$you = $info['result']['status'];
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$channel."&user_id=".$from_id));
$tch = $forchannel->result->status;
$settings = json_decode(file_get_contents("data/$chat_id/$chat_id.json"),true);
$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
$user = json_decode(file_get_contents("data/user.json"),true);
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
$filterget = $settings["filterlist"];
$allmsgpv = file_get_contents("data/allmsgpv.txt");

function objectToArrays($object){ if(!is_object($object) && !is_array($object)) { return $object;} if(is_object($object)) { $object = get_object_vars($object);} return array_map("objectToArrays", $object); }

if ($tc == 'private'){
$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);}
}
elseif ($tc == 'group' | $tc == 'supergroup'){
$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);}
}

#  ~~~ NaDaR ~~~~
$developerتطويري o = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers."⌯ ".$developers_infos."\n┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉\n⌔︙الايديات » ⤈ \n" ."⌯ `".$developers_info . "`";

# ~~~~ تطوير NaDaR ~~~~
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);

# --      info admins       --
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);

# ~~~~ تطوير NaDaR ~~~~
$vipmems_info = file_get_contents("data/vipmem/$chat_id.txt");
$vipmem  = explode("\n",$vipmems_info);
$vipmems_infos = file_get_contents("data/vipmem/$chat_id/mange.txt");
$vipmems = explode ("\n",$vipmems_infos);

# --      auto folders      --
mkdir("data");
mkdir("data/developers");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/vipmem");
mkdir("data/vipmem/$chat_id");
mkdir("statistics");
mkdir("SudoOrders");

$setch = file_get_contents("SudoOrders/setch.txt");
$setchannel = file_get_contents("SudoOrders/setchannel.txt");
if($text == "تفعيل" or $text == "ايديي" or $text == "ايدي" or $text == "صلاحيتي" or $text == "فحص البوت" or $text == "الاوامر" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "فحص" or $text == "الالعاب" or $text == "وضع قناة" or $text == "تفعيل اشتراك المجموعه" or $text == "تعطيل اشتراك المجموعه" or $text == "زخرفه" or $text == "بحث"){
if($setchannel == "الاشتراك الاجباري مفعل"){
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$setch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌔︙عذرا لايمكنك استخدام البوت \n⌔︙رجائا اشترك في قناة البوت \n⌔︙لتتمكن من استخدامه \n⌔︙القناة » { [$setch] } \n ",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⌔ ︙ القناة ︙ ⌔",'url'=>"t.me/$setch"]],]])]); return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>" ",'reply_to_message_id'=>$message->message_id,]);}}

if(in_array($re,$Dev)){
$info = "المطور";
}elseif($statusrt == "creator"){
$info = "المنشئ الاساسي";
}elseif($statusrt == "administrator"){
$info = "المشرف";
}elseif(in_array($re_id,$admin_user) ){
$info = "الادمن";
}elseif(in_array($re_id,$manger) ){
$info = "المدير";
}elseif(in_array($re_id,$vipmem) ){
$info = "عضو مميز";
}elseif(in_array($re_id,$developer) ){
$info = "المطور";
}elseif($statusrt== "member" ){
$info = "فقط عضو";
}
if(!$re_user){
$usew = "$first_name";
}elseif($re_user){
$usew = "@$re_user";
}

mkdir("data/$chat_id/absset");
$set = file_get_contents("data/$chat_id/absset/set.txt");
$abssetids = file_get_contents("data/$chat_id/absset/abssetid.txt");
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){ if($text == "اضف امر ايدي"){ file_put_contents("data/$chat_id/absset/set.txt","abssetid"); bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙ارسل امر الايدي الجديد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]); }}
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){
if($text && $set == "abssetid" and $text != "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙تم حُفِظ الامر بنجاح",'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); file_put_contents("data/$chat_id/absset/abssetid.txt","$text"); }
elseif($text == "حذف امر ايدي" or $text == "مسح امر ايدي"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف امر الايدي بنجاح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); unlink("data/$chat_id/absset/abssetid.txt");}
}
if(!$abssetids){ $abssetid = "NULL"; }elseif($abssetids){ $abssetid = $abssetids; }

$set = file_get_contents("data/$chat_id/absset/set.txt");
$abssetrds = file_get_contents("data/$chat_id/absset/abssetrd.txt");
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){if($text == "اضف امر طرد"){ file_put_contents("data/$chat_id/absset/set.txt","abssetrd"); bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙ارسل امر الطرد الجديد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]); }}
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){
if($text && $set == "abssetrd" and $text != "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙تم حُفِظ الامر بنجاح",'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); file_put_contents("data/$chat_id/absset/abssetrd.txt","$text");}
elseif($text == "حذف امر طرد" or $text == "مسح امر طرد"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف امر الطرد بنجاح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); unlink("data/$chat_id/absset/abssetrd.txt");}
}
if(!$abssetrds){ $abssetrd = "NULL"; }elseif($abssetrds){ $abssetrd = $abssetrds; }

$set = file_get_contents("data/$chat_id/absset/set.txt");
$abssethdrs = file_get_contents("data/$chat_id/absset/abssethdr.txt");
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){ if($text == "اضف امر حظر"){ file_put_contents("data/$chat_id/absset/set.txt","abssethdr"); bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙ارسل امر الحظر الجديد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]); }}
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){
if($text && $set == "abssethdr" and $text != "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙تم حُفِظ الامر بنجاح",'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); file_put_contents("data/$chat_id/absset/abssethdr.txt","$text");}
elseif($text == "حذف امر حظر" or $text == "مسح امر حظر"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف امر الحظر بنجاح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); unlink("data/$chat_id/absset/abssethdr.txt");}
}
if(!$abssethdrs){ $abssethdr = "NULL"; }elseif($abssethdrs){ $abssethdr = $abssethdrs; }

$set = file_get_contents("data/$chat_id/absset/set.txt");
$abssetvips = file_get_contents("data/$chat_id/absset/abssetvip.txt");
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){ if($text == "اضف امر رفع مميز"){ file_put_contents("data/$chat_id/absset/set.txt","abssetvip"); bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙ارسل امر رفع مميز الجديد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]); }}
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){
if($text && $set == "abssetvip" and $text != "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙تم حُفِظ الامر بنجاح",'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); file_put_contents("data/$chat_id/absset/abssetvip.txt","$text");}
elseif($text == "حذف امر رفع مميز" or $text == "مسح امر رفع مميز"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف امر رفع مميز بنجاح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); unlink("data/$chat_id/absset/abssetvip.txt");}
}
if(!$abssetvips){ $abssetvip = "NULL"; }elseif($abssetvips){ $abssetvip = $abssetvips; }

$set = file_get_contents("data/$chat_id/absset/set.txt");
$abssetfids = file_get_contents("data/$chat_id/absset/abssetfid.txt");
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){ if($text == "اضف امر تفعيل الايدي بالصوره"){ file_put_contents("data/$chat_id/absset/set.txt","abssetfid"); bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙ارسل امر  تفعيل الايدي بالصوره الجديد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]); }}
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){
if($text && $set == "abssetfid" and $text != "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙تم حُفِظ الامر بنجاح",'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); file_put_contents("data/$chat_id/absset/abssetfid.txt","$text");}
elseif($text == "حذف امر تفعيل الايدي بالصوره" or $text == "مسح امر  تفعيل الايدي بالصوره"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف امر  تفعيل الايدي بالصوره بنجاح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); unlink("data/$chat_id/absset/abssetfid.txt");}
}
if(!$abssetfids){ $abssetfid = "NULL"; }elseif($abssetfids){ $abssetfid = $abssetfids; }

$set = file_get_contents("data/$chat_id/absset/set.txt");
$abssetaids = file_get_contents("data/$chat_id/absset/abssetaid.txt");
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){ if($text == "اضف امر تعطيل الايدي بالصوره"){ file_put_contents("data/$chat_id/absset/set.txt","abssetaid"); bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙ارسل امر تعطيل الايدي بالصوره الجديد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]); }}
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){
if($text && $set == "abssetaid" and $text != "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙تم حُفِظ الامر بنجاح",'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); file_put_contents("data/$chat_id/absset/abssetaid.txt","$text");}
elseif($text == "حذف امر تعطيل الايدي بالصوره" or $text == "مسح امر تعطيل الايدي بالصوره"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف امر تعطيل الايدي بالصوره بنجاح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); unlink("data/$chat_id/absset/abssetaid.txt");}
}
if(!$abssetaids){ $abssetaid = "NULL"; }elseif($abssetaids){ $abssetaid = $abssetaids; }

$set = file_get_contents("data/$chat_id/absset/set.txt");
$abssetktms = file_get_contents("data/$chat_id/absset/abssetktm.txt");
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){ if($text == "اضف امر كتم" or $text == "اضف امر تقييد" or $text == "اضف امر تقيد"){ file_put_contents("data/$chat_id/absset/set.txt","abssetktm"); bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙ارسل امر التقييد الجديد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]); }}
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){
if($text && $set == "abssetktm" and $text != "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙تم حُفِظ الامر بنجاح",'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); file_put_contents("data/$chat_id/absset/abssetktm.txt","$text");}
elseif($text == "حذف امر كتم" or $text == "مسح امر كتم" or $text == "حذف امر تقييد" or $text == "مسح امر تقييد" or $text == "حذف امر تقيد" or $text == "مسح امر تقيد"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف امر التقييد بنجاح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); unlink("data/$chat_id/absset/abssetktm.txt");}
}
if(!$abssetktms){ $abssetktm = "NULL"; }elseif($abssetktms){ $abssetktm = $abssetktms; }

$set = file_get_contents("data/$chat_id/absset/set.txt");
$abssetadmins = file_get_contents("data/$chat_id/absset/abssetadmin.txt");
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){ if($text == "اضف امر رفع ادمن"){ file_put_contents("data/$chat_id/absset/set.txt","abssetadmin"); bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙ارسل امر رفع ادمن الجديد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]); }}
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){
if($text && $set == "abssetadmin" and $text != "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙تم حُفِظ الامر بنجاح",'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); file_put_contents("data/$chat_id/absset/abssetadmin.txt","$text"); }
elseif($text == "حذف امر رفع ادمن" or $text == "مسح امر رفع ادمن"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف امر رفع ادمن بنجاح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); unlink("data/$chat_id/absset/abssetadmin.txt");}
}
if(!$abssetadmins){ $abssetadmin = "NULL"; }elseif($abssetadmins){ $abssetadmin = $abssetadmins; }

$set = file_get_contents("data/$chat_id/absset/set.txt");
$abssetmangers = file_get_contents("data/$chat_id/absset/abssetmanger.txt");
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){ if($text == "اضف امر رفع مدير"){ file_put_contents("data/$chat_id/absset/set.txt","abssetmanger"); bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙ارسل امر رفع مدير الجديد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]); }}
if($status == "creator" or $status == "administrator" or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$manger)){
if($text && $set == "abssetmanger" and $text != "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙تم حُفِظ الامر بنجاح",'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); file_put_contents("data/$chat_id/absset/abssetmanger.txt","$text"); }
elseif($text == "حذف امر رفع مدير" or $text == "مسح امر رفع مدير"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف امر رفع مدير بنجاح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
unlink("data/$chat_id/absset/set.txt"); unlink("data/$chat_id/absset/abssetmanger.txt");}
}
if(!$abssetmangers){ $abssetmanger = "NULL"; }elseif($abssetmangers){ $abssetmanger = $abssetmangers; }

if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙تم رفعه في قائمة المطورين", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

elseif($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙هوَ بالفعل مطور في البوت", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "حذف المطورين" || $text == "مسح المطورين" and in_array($from_id,$Dev)){
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$re_id) \n⌔︙تم حذف مطورين البوت \n ✓", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" and in_array($re_id,$developer)){
$re_id_info = file_get_contents("data/developers/$chat_id.txt");
$devr = file_get_contents("data/developers/$chat_id/developer.txt");
$devr1 = explode("             \n",$devr);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯[" . "@". $re_user ."] " . "•" . "`". $re_id ."` ","",$devr1);
file_put_contents("data/developers/developer.txt",$str);
file_put_contents("data/developers/developers.txt",$str);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙تم تنزيله من قائمة المطورين", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }}

if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" and !in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙هوَ ليس مطور ليتم تنزيله", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); } }

if($text == "المطورين" and in_array($from_id,$Dev) and $developers_info != NULL or $text == "» المطورين ⌔" and in_array($from_id,$Dev) and $developers_info != NULL){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙مطورين البوت » ⤈ \n┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉\n$list_developers\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
if($text == "المطورين" and in_array($from_id,$Dev) and $developers_info == NULL or $text == "» المطورين ⌔" and in_array($from_id,$Dev) and $developers_info == NULL){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙*عذرا لم يتم رفع اي مطورين*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع منشئ" and !in_array($re_id,$manger)){
file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/manger/$chat_id/mange.txt" , "⌯[" . "@". $re_user ."] " . "•" . "`". $re_id ."` ". "\n" , FILE_APPEND);
bot('SendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙تم رفعه في قائمة المنشئ الاساسيين",'parse_mode'=>'markdown', 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=>true, ]); }

elseif($re and in_array($text,$textmanger) and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙هوَ بالفعل منشئ في المجموعة",'parse_mode'=>'markdown','parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($re and $text == "تنزيل منشئ" and in_array($re_id,$manger)){
$re_id_info = file_get_contents("data/manger/$chat_id.txt");
$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯[" . "@". $re_user ."] " . "•" . "`". $re_id ."` ","",$mdrs1);
file_put_contents("data/manger/$chat_id.txt",$str);
file_put_contents("data/manger/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙المنشئ » [$usew]\n⌔︙تم تنزيله من قائمة المنشئ الاساسيين",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($re and $text == "تنزيل منشئ" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙هوَ ليس منشئ ليتم تنزيله",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
}

$textmanger = array("رفع مدير","رفع المدير","$abssetmanger");
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and in_array($text,$textmanger) and !in_array($re_id,$manger)){
file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/manger/$chat_id/mange.txt" , "⌯[" . "@". $re_user ."] " . "•" . "`". $re_id ."` ". "\n" , FILE_APPEND);
bot('SendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙تم رفعه في قائمة المدراء",'parse_mode'=>'markdown', 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=>true, ]); }

elseif($re and in_array($text,$textmanger) and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙هوَ بالفعل مدير في المجموعة",'parse_mode'=>'markdown','parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "حذف المدراء" || $text == "مسح المدراء" ){
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$re_id) \n⌔︙تم حذف المدراء \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  ]); }

if($re and $text == "تنزيل مدير" || $text == "تنزيل المدير"  and in_array($re_id,$manger)){
$re_id_info = file_get_contents("data/manger/$chat_id.txt");
$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯[" . "@". $re_user ."] " . "•" . "`". $re_id ."` ","",$mdrs1);
file_put_contents("data/manger/$chat_id.txt",$str);
file_put_contents("data/manger/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙المدير » [$usew]\n⌔︙تم تنزيله من قائمة المدراء",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙هوَ ليس مدير ليتم تنزيله",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "المدراء" || $text == "قائمه المدراء" and $mangers_info != NULL and $mangers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙قائمة المدراء » ⤈ \n┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉\n$mangers_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
if($text == "المدراء" ||  $text == "قائمه المدراء" and $mangers_info == NULL || $mangers_info == " " || $mangers_info == ""){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙*لا يوجد مدراء*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
}

$textadmin = array("رفع ادمن","$abssetadmin");
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$manger)) {
if($re and in_array($text,$textadmin) and !in_array($re_id,$admin_user)){
file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/admin_user/$chat_id/mange.txt" , "⌯[" . "@". $re_user ."] " . "•" . "`". $re_id ."` ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙تم رفعه في قائمة الادمنية",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

elseif($re and in_array($text,$textadmin) and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙الادمن » [$usew]\n⌔︙هوَ بالفعل ادمن في المجموعة",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "حذف الادمنيه" || $text == "مسح الادمنيه" ){
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$re_id) \n⌔︙تم حذف الادمنية \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  ]); }

if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admn1 = explode(" \n",$admn);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯[" . "@". $re_user ."] " . "•" . "`". $re_id ."` ","",$admn1);
file_put_contents("data/admin_user/$chat_id.txt",$str);
file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙الادمن » [$usew]\n⌔︙تم تنزيله من قائمة الادمنية",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙هوَ ليس ادمن ليتم تنزيله",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_info != NULL and $admin_users_info != " "){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙قائمة الادمنية » ⤈ \n┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉\n$admin_users_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_info == NULL || $admin_users_info == " " || $admin_users_info == ""){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙*لا يوجد ادمنية*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
}

$textvip = array("رفع مميز","$abssetvip");
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and in_array($text,$textvip) and !in_array($re_id,$vipmem)){
file_put_contents("data/vipmem/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/vipmem/$chat_id/mange.txt" , "⌯[" . "@". $re_user ."] " . "•" . "`". $re_id ."` ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙تم رفعه في قائمة المميزين",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

elseif($re and in_array($text,$textvip) and in_array($re_id,$vipmem)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙المميز » [$usew]\n⌔︙هوَ بالفعل مميز في المجموعة",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "حذف المميزين" ){
file_put_contents("data/vipmem/$chat_id.txt","");
file_put_contents("data/vipmem/$chat_id.txt","");
file_put_contents("data/vipmem/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$re_id) \n⌔︙تم حذف الاعضاء المميزين \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  ]); }

if($re and $text == "تنزيل مميز" and in_array($re_id,$vipmem)){
$re_id_info = file_get_contents("data/vipmem/$chat_id.txt");
$mdrs = file_get_contents("data/vipmem/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯[" . "@". $re_user ."] " . "•" . "`". $re_id ."` ","",$mdrs1);
file_put_contents("data/vipmem/$chat_id.txt",$str);
file_put_contents("data/vipmem/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙المميز » [$usew]\n⌔︙تم تنزيله من قائمة المميزين",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($re and $text == "تنزيل مميز" and !in_array($re_id,$vipmem)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙العضو » [$usew]\n⌔︙هوَ ليس مميز ليتم تنزيله",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "المميزين" || $text == "قائمه المميزين" and $vipmems_info != NULL and $vipmems_info != " "){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙قائمة المميزين » ⤈ \n┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉\n$vipmems_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
if($text == "المميزين" ||  $text == "قائمه المميزين" and $vipmems_info == NULL || $vipmems_info == " " || $vipmems_info == ""){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"⌔︙*لا يوجد مميزين*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
}

if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer)){ if($text == "رفع مدير" || $text == "رفع منشئ" or $text == "رفع الادمنيه" or $text == "رفع المشرفين" or $text == "تفعيل"){ bot('SendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙*عذرا هذا الامر ليس لك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}

if(!in_array($from_id,$Dev)){ if($text == "رفع مطور" || $text == "تنزيل مطور" or $text == "الاحصائيات" or $text == "المطورين" or $text == "مسح المطورين" or $text == "المشتركين" or $text == "حذف المطورين" or $text == "م8" or $text == "الكروبات" or $text == "تفعيل الاشتراك الاجباري" or $text == "تعطيل الاشتراك الاجباري"){ bot('SendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙*عذرا هذا الامر ليس لك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}

if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){ if($text == "رفع ادمن" || $text == "رفع مميز" or $text == "تنزيل مميز" or $text == "تنزيل ادمن" or $text == "قفل الفيديو" or $text == "فتح الفيديو" or $text == "تفعيل الايدي" or $text == "تعطيل الايدي"  or $text == "تفعيل اشتراك المجموعه"){ bot('SendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙*عذرا هذا الامر ليس لك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}

if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){ if($text == "فتح الروابط"  || $text == "الادمنيه" || $text == "المميزين" || $text == "قفل الروابط" or $text == "قفل التوجيه" or $text == "فتح التوجيه" or $text == "تفعيل الالعاب" or $text == "تعطيل الالعاب" or $text == "تفعيل الرابط" or $text == "تعطيل الرابط"){ bot('SendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙*عذرا هذا الامر ليس لك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}

if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){ if($text == "قفل المعرف" or $text == "فتح المعرف" or $text == "قفل البوتات" or $text == "فتح البوتات" or $text == "قفل المتحركه" or $text == "قفل الاشعارات" or $text == "قفل البوتات بالطرد" or $text == "قفل الكل" or $text == "فتح الكل" or $text == "قفل الصور" or $text == "فتح الصور" or $text == "قفل الكفر" or $text == "فتح الكفر" or $text == "قفل الفشار" or $text == "فتح الفشار" or $text == "قفل الطائفيه" or $text == "فتح الطائفيه" or $text == "قفل الفارسيه" or $text == "فتح الفارسيه"){ bot('SendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙*عذرا هذا الامر ليس لك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}

if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){ if($text == "وضع رابط"  || $text == "حذف الرابط" || $text == "صنع رابط" || $text == "انشاء رابط" || $text == "تفعيل الرابط" or $text == "تعطيل الرابط" or $text == "قفل الدردشة" or $text == "فتح الدردشة" or $text == "قفل الدردشه" or $text == "فتح الدردشه" or $text == "كتم" or $text == "حظر" or $text == "طرد" or $text == "تقييد" or $text == "الغاء حظر" or $text == "الغاء كتم" or $text == "الغاء تقييد" or $text == "وضع ترحيب" or $text == "حذف الترحيب"){ bot('SendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙*عذرا هذا الامر ليس لك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text =="رفع الادمنيه" or $text == "رفع المشرفين"){
$abscount1 = file_get_contents("data/count/$chat_id.txt");
$abscount2  = explode("\n",$abscount1);
$abscount = count($abscount2);
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⌔︙تم رفع ( $abscount ) ادمنية هنا
⌔︙تم رفع منشئ المجموعة
 ✓",'reply_to_message_id'=>$message_id,]);}}}
 
if($text == "صيح الادمنيه" or $text == "تاك للادمنيه"){
$up = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$chat_id),true);
$result = $up['result'];
foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
$owner = $result[$key]['user']['id'];
$owner2 = $result[$key]['user']['username'];
}
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$in_names = str_replace(['[',']'],'',$result[$key]['user']['username']);
$msg = $msg."⌯".""."@[$in_names]"."\n";
}
}
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔︙وينكم يالربع
⌯@[".$result[$key]['user']['username']."]
$msg",'reply_to_message_id'=>$message_id,'parse_mode'=>"MarkDown",]);}

$set = file_get_contents("SudoOrders/set.txt");
$setch = file_get_contents("SudoOrders/setch.txt");
if(in_array($from_id,$Dev)){
if ($text == "تغيير الاشتراك الاجباري" or $text == "تعيين الاشتراك الاجباري" or $text == "تغيير قناة الاشتراك" or $text == "تعيين قناة الاشتراك"){
file_put_contents("SudoOrders/set.txt","setch");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⌔︙*ارسل لي معرف قناة الاشتراك الان*\n",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="setch" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/setch.txt",$text);
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"⌔︙تم حفظ قناة الاشتراك \n⌔︙الان قم برفع البوت ادمن في القناة \n⌔︙بعدها قم بتفعيل الاشتراك الاجباري ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if(in_array($from_id,$Dev)){
if($text == "مسح قناة الاشتراك" or $text == "حذف قناة الاشتراك"){
file_put_contents("SudoOrders/setch.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⌔︙تم حذف قناة الاشتراك الاجباري",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if($text == "جلب قناة الاشتراك" or $text == "قناة الاشتراك" or $text == "الاشتراك الاجباري" or $text == "قناة الاشتراك الاجباري"){
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⌔︙*قناة الاشتراك* » [$setch]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
}

$setlink = file_get_contents("data/$chat_id/set.txt");
$linktxt = file_get_contents("data/$chat_id/link.txt");
if ($text == "وضع رابط" or $text == "ضع رابط" or $text == "وضع الرابط" or $text == "ضع الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/set.txt","setlink");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⌔︙ارسل رآبط المجمۄعة ليتم حفظة",'parse_mode'=>'markdown','reply_to_message_id'=>$message_id,]);}}}

if($text && $setlink =="setlink"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/link.txt",$text);
file_put_contents("data/$chat_id/set.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⌔︙تم صنع الرآبط الجديد\n⌔︙ارسل (الرابط) لعړض الرآبط",'parse_mode'=>'markdown','reply_to_message_id'=>$message_id,]);}}}

if ($text == "حذف الرابط" or $text == "مسح الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/link.txt","");
bot("sendMessage",["chat_id"=>$chat_id,'text'=>"⌔︙اهلا عزيزي » [$info](tg://user?id=$from_id) \n⌔︙تم حذف رابط المجموعة \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message_id,]);}}}

if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "معلومات المجموعه" || $text == "معلومات المجموعة"){
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$cmmyz = count($vipmems)-1;
$cmanger = count($mangers)-1;
$cadmin = count($admin_users)-1;
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙المجموعة»$namegroup
⌔︙الايدي »$chat_id
⌔︙عدد الاعضاء »$MEMH
⌔︙عدد الادمنية »$cadmin
⌔︙عدد المدراء »$cmanger
⌔︙عدد المنشئ الاساسيين »$cmsg
⌔︙عدد المميزين »$cmmyz
⌔︙عدد الرسائل »$message->message_id",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}

if($text == "ايدي المجموعه" or $text == "ايدي المجموعة"){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙ايدي المجموعة » " . $chat_id,'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}
if($text == "اسم المجموعه" or $text == "اسم المجموعة"){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙اسم المجموعة » ❨" . $namegroup . "❩",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}

if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "اضف امر" or $text == "حذف امر" or $text == "مسح امر"){ bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⌔︙* اضف امر • حذف امر + الامر » ⤈*\n*⌯ ايدي • طرد • حظر • كتم • تقييد • رفع مميز • رفع مدير • رفع ادمن • تفعيل الايدي بالصوره • تعطيل الايدي بالصوره ⌯*\n⌔︙*مثال اوضح » ⤈*\n*ارسل » ( اضف امر ايدي )*\n*بعدها قم بارسال الامر الجديد*\n*ارسل » ( حذف امر ايدي ) لحذفه*\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}

# link
if($settings["lock"]["link"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($te
