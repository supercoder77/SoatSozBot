<?php
define('API_KEY','1663740713:AAH670Wai39x5Lov9CEbZSCjOuqARohBK-s');
$admin = "1790466359";
$adminuser= "supercoderuz";
$sayt = 'https://supercoder.fastxost.ru/SoatSozBot';
$bot = "SoatSoz_Bot";
$time=date('H:i',strtotime('3 hour'));
$vaqt = date("d",strtotime("3 hour"));
$sana=date("d.m.Y",strtotime("3 hour"));
function del($nomi){
array_map('unlink', glob("step/$nomi.*"));
}
function put($fayl, $nima){
file_put_contents("$fayl", "$nima");
}
function pstep($cid,$zn){
file_put_contents("step/$cid.step",$zn);
}
function step($cid){
$step = file_get_contents("step/$cid.step");
$step += 1;
file_put_contents("step/$cid.step",$step);
}
function ty($ch){
return bot('sendChatAction', [
'chat_id' => $ch,
'action' => 'typing',
]);
}

function ACL($callbackQueryId, $text = null, $showAlert = false)
{
return bot('answerCallbackQuery', [
'callback_query_id' => $callbackQueryId,
'text' => $text,
'show_alert' => $showAlert,
]);
}

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$cid.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$bio = $message->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$chat_id = $message->chat->id;

$call = $update->callback_query;
$mes = $call->message;
$data = $call->data;
$qid = $call->id;
$callcid = $mes->chat->id;
$callmid = $mes->message_id;
$callfrid = $call->from->id;
$calluser = $mes->chat->username;
$callfname = $call->from->first_name;

$photo = $message->photo;
$gif = $message->animation;
$video = $message->video;
$music = $message->audio;
$voice = $message->voice;
$sticker = $message->sticker;
$document = $message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$adstep = file_get_contents("admin/admin.step");

$soni = file_get_contents("olmos/$chat_id/$uid.db");
$chan = file_get_contents("olmos/$chat_id.db");
$user = file_get_contents("supercoder.ids");
$guruh = file_get_contents("olmos/guruh.db");

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$uid = $message->from->id;
$mid = $message->message_id;
$type = $message->chat->type;

$reply = $message->reply_to_message->text;
$nomer = $message->contact->phone_number;

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

if ($soni == false){$soni = 0;}

$getss = file_get_contents("admin/blocks.txt");
if(mb_stripos($getss, $uid)!==false){
	bot('sendMessage',[
	'chat_id' => $cid,
	'text' => "Kechirasiz <b>$name</b> siz bloklangansiz!",
	'parse_mode'=>'html',
	]); 
	return false;
	}

mkdir("admin");
mkdir("baza");
mkdir("baza/$uid");
mkdir("bonus");
mkdir("cron");
mkdir("odam");
mkdir("olmos");
$otex1 = "Ortga🔙";
$kalt2 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⌚Oddiy soat"],['text'=>"🖼Rasmli soat"],],
[['text'=>"⏰24 soat online"],['text'=>"🚫Barcha rasmlarni o‘chirish"],],
[['text'=>"❌Soatni o‘chirish"],],
[['text'=>"$otex1"],]
]
]);

$olmosyigish = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👥Referal"],['text'=>"♻️Account"],],
[['text'=>"💎Olmos sotib olish"],],
[['text'=>"$otex1"],]
]
]);

$kalt = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⏳Soat sozlash"],['text'=>"⏰Cron o‘rnatish"],],
[['text'=>"🔄Yangilash"],['text'=>"💎Olmos yig‘ish"],],
[['text'=>"🎁Bonus"],['text'=>"🎯Kabinetim"],],
[['text'=>"📊Statistika"],['text'=>"ℹ️Qo‘llanma"],],
[['text'=>"👨🏻‍💻Admin paneli"],['text'=>"Do‘stimga💎o‘tkazish"],],
[['text'=>"📝Xabar yozish"],]
]
]);
$otmen1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"],]
]
]);


$admp1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝Foydalanuvchiga xabar yozish"],],
[['text'=>"🔐Bot kodi"],['text'=>"👥Xabar👥"],],
[['text'=>"✅Blokdan olish"],['text'=>"❌Bloklash"],],
[['text'=>"💎Olmos berish"],['text'=>"💎Olmos ayirish"],],
[['text'=>"✅Botni yoqish"],['text'=>"❌Botni o‘chirish"],],
[['text'=>"$otex1"],]
]
]);

if(mb_stripos($text,"/start $cid")!==false){
bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Siz botga o‘zingizni taklif qila olmaysiz!",
      'parse_mode'=>'html',
      'reply_markup'=>$kalt,
      ]);
}else{
      $idref = "olmos/$ex.db";
      $idref2 = file_get_contents($idref);
      $id = "$cid\n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);
if(mb_stripos($idref2,$cid) !== false ){
}else{
$pub=explode(" ",$text);
$ex=$pub[1];
$olmos = file_get_contents("olmos/$ex.txt");
$a=$olmos+10;
file_put_contents("olmos/$ex.txt","$a");
$odam = file_get_contents("odam/$ex.dat");
$b=$odam+1;
file_put_contents("odam/$ex.dat","$b");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz 🤖 botimizga birinchi bor tashrif buyurdingiz! 😊
Kanalimizga obuna bo‘lmagan bo‘lsangiz obuna bo‘lib botga qayta /start bosing!</b>",
'parse_mode'=>'html',
'reply_markup'=>$kaltt,
]);
bot('sendmessage',[
'chat_id'=>$ex,
'text'=>"💥 Siz do‘stingizni taklif qildingiz sizga <b>10 ta</b>💎olmos berildi!",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}
}

    $ret = bot("getChatMember",[
         "chat_id"=>"-1001462342054",
         "user_id"=>$uid
         ]);

$stat = $ret->result->status;


         if(($stat=="creator" or $stat=="administrator" or $stat=="member")){}else{
     bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"<b>Quyidagi kanallarimizga obuna boʻling. Obuna bo‘lib botga qayta /start bosing! Botni keyin to‘liq ishlatishingiz mumkin!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ Obuna bo‘lish","url"=>"https://t.me/UzXakkersTv"],],
[["text"=>"➕ Obuna bo‘lish","url"=>"https://t.me/UzXakkersTv_Group"],],
]
]),
]); 
return false;
}
$on = file_get_contents("on.txt");

if ($on == "off" && $cid = "$admin") {

bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>@$bot da texnik ishlar olib borilmoqda, bir necha soatdan so‘ng botga qayta /start bosing!</b>",
        'parse_mode'=>'html',
]);
}
if($text == "❌Botni o‘chirish" && $cid == $admin){
file_put_contents("on.txt","off");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Offline.</b>",
        'parse_mode'=>'html',
]);
}

if($text == "✅Botni yoqish" && $cid == $admin){
file_put_contents("on.txt","on");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Online</b>",
        'parse_mode'=>'html',
]);
}


if($text=="👨🏻‍💻Admin paneli"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>Bu bo‘limni faqat bot administratori ishlata oladi!</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$kalt,
    ]);
}
if($text=="👨🏻‍💻Admin paneli"){
bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"<b>Panel👇</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$admp1,
    ]);
}
if($text=="/start"){
$post = file_get_contents("supercoder.ids");
$posti = explode("\n",$post);
file_put_contents("supercoder.ids", "$post\n$cid");
$olmos = file_get_contents("olmos/$cid.txt");
$mm=$olmos+0;
file_put_contents("olmos/$cid.txt","$mm");
$odam = file_get_contents("odam/$cid.dat");
$kkd=$odam+1;
file_put_contents("odam/$cid.dat","$kkd");
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"Assalomu aleykum <a href = 'tg://user?id=$cid'>$name</a>
Quyidagi menyular orqali botdan foydalaning👇 ",
    'parse_mode'=>'html',
    'reply_markup'=>$kalt,
    ]);
}

if(mb_stripos($text, "💎Olmos berish")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Olmos berish uchun quyidagi buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib olmosni yozing!
Masalan:
/olmosberish
$admin
1000</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($text, "/olmosberish")!==false){
if($cid == $admin){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("olmos/$id1.txt");
$miqdor = $olmos+$id2;
file_put_contents("olmos/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅ $id1 🆔️ Raqamiga $id2 ta 💎olmos berildi!\nTekshirib ko‘ring❗</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*Admin hisobingizga $id2 ta 💎olmos qo‘shdi!*",
'parse_mode'=>'Markdown',
]);
}else{
	bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>Bu bo‘limni faqat bot administratori ishlata oladi!</b>",
'parse_mode'=>'Markdown',
]);
}
}

if(mb_stripos($text, "💎Olmos ayirish")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Olmos ayirish uchun quyidagi buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib olmosni yozing!
Masalan:
/olmosayirish
$admin
1000</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($text, "/olmosayirish")!==false){
if($cid == $admin){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("olmos/$id1.txt");
$miqdor = $olmos-$id2;
file_put_contents("olmos/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅ $id1 🆔️ Raqamidan $id2 ta 💎olmos ayrildi!\nTekshirib ko‘ring❗</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*Admin hisobingizdan $id2 ta 💎olmos ayirdi!*",
'parse_mode'=>'Markdown',
]);
}else{
	bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>Bu bo‘limni faqat bot administratori ishlata oladi!</b>",
'parse_mode'=>'Markdown',
]);
}
}
if($tx == "❌Bloklash" and $cid == $admin){
	bot('sendmessage',[
	'chat_id'=>$admin,
	'text'=>"🚫Bloklanadigan foydalanuvchini ID raqamini kiriting!",
	]);
	file_put_contents("admin/admin.step", "blok");
	}
if($adstep == "blok" and $cid == $admin){
$get = file_get_contents("admin/blocks.txt");
if(mb_stripos($get, $tx)==false){
file_put_contents("admin/blocks.txt", "$get\n$tx");
	bot('sendmessage',[
	'chat_id'=>$admin,
	'text'=>"Foydalanuvchi bloklandi!✅",
	]);
	bot('sendmessage',[
	'chat_id'=>$tx,
	'text'=>"Siz bizning botimizdan 🚫bloklandingiz. Endi botni ishlata olmaysiz. Blokdan chiqish uchun 👨‍💻dasturchiga murojaat qiling!
👨‍💻Dasturchi: @$adminuser",
	]);
	unlink("admin/admin.step");
	}
	}
if($tx == "✅Blokdan olish" and $cid == $admin){
	bot('sendmessage',[
	'chat_id'=>$admin,
	'text'=>"🚫Blokdan olinadigan foydalanuvchini ID raqamini kiriting!",
	]);
	file_put_contents("admin/admin.step", "unblok");
	}
if($adstep == "unblok" and $cid == $admin){
$get = file_get_contents("admin/blocks.txt");
if(mb_stripos($get, $tx)==false){
	bot('sendmessage',[
	'chat_id'=>$admin,
	'text'=>"Foydalanuvchi bloklanmagan",
	]);
	unlink("admin/admin.step");
}else{
$bl = file_get_contents("admin/blocks.txt");
$bl = str_replace("$tx", " ", $bl);
file_put_contents("admin/blocks.txt", "$bl");
	bot('sendmessage',[
	'chat_id'=>$admin,
	'text'=>"Foydalanuvchi blokdan olindi✅",
	]);
	bot('sendmessage',[
	'chat_id'=>$tx,
	'text'=>"🎉Tabriklayman! Siz blokdan muvaffaqiyatli olindingiz! Yana botni ishlatishingiz mumkin. 🤖Botga qayta /start bosing.",
	]);
	unlink("admin/admin.step");
	}
	}

if($text == "Do‘stimga💎o‘tkazish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Do‘stingizga olmos o‘tkazish uchun /otkazish bitta pastga tushib id yana bitta pastga tushib 100 raqami
Misol
/otkazish
$admin
100
Shu tartibda👆</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}

if($text == "💎Olmos yig‘ish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>💎Olmos yig‘ish uchun quyidagi bo‘limlardan birini tanlang!✔</b>",
'parse_mode'=>'html',
'reply_markup'=>$olmosyigish,
]);
}

if($text == "♻️Account"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>♻️Accountni 💎olmosga almashtirish narxlari:

👥1 ta account - 50 ta 💎olmos
👥2 ta account - 100 ta 💎olmos
👥3 ta account - 150 ta 💎olmos
👥4 ta account - 200 ta 💎olmos
👥5 ta account - 250 ta 💎olmos</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"💬Bog‘lanish", "url"=>"https://t.me/$adminuser"]],
            ]
        ])
        ]);
}

if($text == "📝Foydalanuvchiga xabar yozish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Foydalanuvchiga xabar yozish uchun /sms 🆔️
Shu tarzda yozing!✅
⌚Soat: $time</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}

if($tx=="👥Referal"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Referal ssilkangiz :</b>

👉 https://t.me/$bot?start=$cid

Do‘stingiz ssilka orqali ro‘yxatdan o‘tsa sizga 10 ta 💎olmos beriladi✅",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"♻Ulashish", "url"=>"https://t.me/share/url?url=https://t.me/$bot?start=$cid"]],
            ]
        ])
        ]);
}

if($text == "🎁Bonus"){	
$bonustime = file_get_contents("bonus/$cid.txt");
$bonusrand = rand(1,10);
if($bonustime == $vaqt){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"📛Siz kunlik bonusni olib bo‘lgansiz!",
'parse_mode'=>'markdown',
]);
}else{
$olmos = file_get_contents("olmos/$cid.txt");
$bonus=$olmos+$bonusrand;
file_put_contents("olmos/$cid.txt","$bonus");
file_put_contents("bonus/$cid.txt","$vaqt");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👏Tabriklaymiz sizga $bonusrand 💎olmos miqdorida 🎁bonus taqdim etildi!",
'parse_mode'=>'markdown',
]);
}
}

if(mb_stripos($text,"🔄Yangilash") !== false){ 
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
    bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "Sizning ma'lumotlaringiz yangilandi.✅
Ma'lumotlar bazasida sizning hisobingiz xavfsiz ekanligi yana bir bor tekshirildi.☢
Botimizdan bemalol foydalanishigiz mumkin!✅",
       'parse_mode'=>'html',  
       'reply_markup'=>$kalt,
]);
}

if($text == "📝Xabar yozish"){
  bot('sendMessage',[
  'chat_id'=>$cid,
  'message_id'=>$mid,
  'text'=>"Xabaringizni kiriting!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Xabaringizni kiriting!"){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"Xabar keldi!
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🧒Yuboruvchi: <a href = 'tg://user?id=$uid'>$name</a>
🔷Usernamesi: @$user
🆔️Raqami: <a href = 'tg://user?id=$uid'>$uid</a>
📱$nomer
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

🗒️Xabar: $text

➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Javob yozish uchun /sms 🆔️
Shu tarzda yozing!✅
⌚Soat: $time",
'parse_mode'=>'html',
]);
sleep(2);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Yaxshi adminlarga xabaringiz yetkazildi!✅
👨‍💻Adminlar sizga 24 soat ichida javob yozadi!",
'parse_mode'=>"markdown",
'reply_markup'=>$kalt,
]);
}

if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendMessage',[
'chat_id'=>$ex[1],
'text'=>"[👨‍💻Admin👨‍💻](tg://user?id=$admin) dan javob keldi!✅


💌Javob: $sms

⏰Soat: $time",
'parse_mode'=>"markdown", 
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"[👤Savol bergan odam👤]($egasi)ga xabaringiz yuborildi📩",
'parse_mode'=>"markdown", 
]);
}else{
bot("sendMessage",[
'chat_id'=>$cid,
'text'=> "<b>Bu bo‘limni faqat bot administratori ishlata oladi!</b>",
'parse_mode'=>'Markdown',
]);
}
}

if($tx == "⏳Soat sozlash"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"♻️Kerakli bo‘limni tanlang✔",
'reply_markup'=>$kalt2,
]);
}


if($tx == "💎Olmos sotib olish"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"💎 OLMOS NARXLARI 💰
••••••••••••••••••••••••••••••••••••••••••••••
💰 100 ta 💎 - 20 rubl  ✅
💰 200 ta 💎 - 35 rubl  ✅
💰 300 ta 💎 - 45 rubl  ✅
💰 400 ta 💎 - 60 rubl  ✅
💰 500 ta 💎 - 75 rubl  ✅
••••••••••••••••••••••••••••••••••••••••••••••",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"💬Bog‘lanish", "url"=>"https://t.me/$adminuser"]],
            ]
        ])
        ]);
}

if($tx == "ℹ️Qo‘llanma"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"[⚠ Qo‘llanmani ko‘rib chiqing.](https://t.me/UzXakkersTv/30)",
'parse_mode'=>'Markdown',
'reply_markup'=>$kalt,
]);
}

if($text == "🔐Bot kodi"){
bot('senddocument',[
'chat_id'=>$admin,
'document'=>new CURLfile(__FILE__),
]);
}

if($tx == "📊Statistika"){
$baza = file_get_contents("azo.dat");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;
     bot('sendMessage',[
     'chat_id'=>$cid,
     'text'=>"👥 Bot foydalanuvchilari: $obsh ta!
♻ Botni tark etganlar: $gruppa ta!
⏰ $time 📆$sana",
     'parse_mode'=>'markdown',
     'reply_markup'=>$kalt,
     ]);
     }
     
     
if($tx == "🎯Kabinetim"){
$olmos = file_get_contents("olmos/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
$baza = file_get_contents("supercoder.ids");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$madeline = $olmos / 100;
$lichka = $obsh - $gruppa;
     bot('sendMessage',[
     'chat_id'=>$cid,
     'text'=>"<b>💎Sizning hisobingiz: $olmos
😎Taklif qilgan odamlaringiz: $odam ta
♻️Madeline hisoblar: ".round($madeline)." dona
⏳Rejalashtiruvchi[CRON]: Cheksiz
🎯Id raqamingiz: <code>$uid</code>
⏰$time 📆$sana
👨‍💻Dasturchi: @$adminuser</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}

if(mb_stripos($tx,"⌚Oddiy soat")!==false){
$olmos = file_get_contents("olmos/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($olmos>=100){
$clone=file_get_contents("baza/$uid/index1.php");
    file_put_contents("baza/$uid/index.php", file_get_contents("index1.php"));
    $savet =  str_replace("api_api", "$name", file_get_contents("baza/$uid/index.php"));
    file_put_contents("baza/$uid/index.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index.php"));
    file_put_contents("baza/$uid/index.php", "$savea");
$olmos = file_get_contents("olmos/$cid.txt");
$mm=$olmos-100;
file_put_contents("olmos/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Yaxshi siz ro‘yxatga qo‘shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro‘yxatdan o‘ting!
 - $sayt/baza/$uid/index.php
 - Ssilkaga kirib ro‘yxatdan o‘ting!
🔺️🔺️🔺️🔺️🔺️
Ro‘yxatdan o‘tsangiz bu ssilkani nusxalab ⏰Cron o‘rnatish bo‘limi orqali cronlab oling!",
'parse_mode'=>'html',
'reply_markup'=>$kalt3,
]);
/*bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$cid</a> oddiy soat o‘rnatmoqchi!
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);*/
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bu bo‘limdan foydalanish uchun 100 ta 💎olmos kerak. Referalni bosing va botni do‘stlaringizga ulashing har bir taklif qilgan odamingiz uchun sizga 10 ta 💎olmos beriladi!",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}
}

if(mb_stripos($tx,"🖼Rasmli soat")!==false){
$olmos = file_get_contents("olmos/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($olmos>=100){
$clone=file_get_contents("baza/$uid/index2.php");
    file_put_contents("baza/$uid/index.php", file_get_contents("index2.php"));
    $savet =  str_replace("api_api", "$name", file_get_contents("baza/$uid/index.php"));
    file_put_contents("baza/$uid/index.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index.php"));
    file_put_contents("baza/$uid/index.php", "$savea");
$olmos = file_get_contents("olmos/$cid.txt");
$mm=$olmos-100;
file_put_contents("olmos/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Yaxshi siz ro‘yxatga qo‘shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro‘yxatdan o‘ting!
 - $sayt/baza/$uid/index.php
 - Ssilkaga kirib ro‘yxatdan o‘ting!
🔺️🔺️🔺️🔺️🔺️
Ro‘yxatdan o‘tsangiz bu ssilkani nusxalab ⏰Cron o‘rnatish bo‘limi orqali cronlab oling!",
'parse_mode'=>'html',
'reply_markup'=>$kalt3,
]);
/*bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$cid</a> rasmli soat o‘rnatmoqchi!
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);*/
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bu bo‘limdan foydalanish uchun 100 ta 💎olmos kerak. Referalni bosing va botni do‘stlaringizga ulashing har bir taklif qilgan odamingiz uchun sizga 10 ta 💎olmos beriladi!",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}
}

if(mb_stripos($tx,"⏰24 soat online")!==false){
$olmos = file_get_contents("olmos/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($olmos>=100){
$clone=file_get_contents("baza/$uid/index3.php");
    file_put_contents("baza/$uid/index.php", file_get_contents("index3.php"));
    $savet =  str_replace("api_api", "$name", file_get_contents("baza/$uid/index.php"));
    file_put_contents("baza/$uid/index.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index.php"));
    file_put_contents("baza/$uid/index.php", "$savea");
$olmos = file_get_contents("olmos/$cid.txt");
$mm=$olmos-100;
file_put_contents("olmos/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Yaxshi siz ro‘yxatga qo‘shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro‘yxatdan o‘ting!
 - $sayt/baza/$uid/index.php
 - Ssilkaga kirib ro‘yxatdan o‘ting!
🔺️🔺️🔺️🔺️🔺️
Ro‘yxatdan o‘tsangiz bu ssilkani nusxalab ⏰Cron o‘rnatish bo‘limi orqali cronlab oling!",
'parse_mode'=>'html',
'reply_markup'=>$kalt3,
]);
/*bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$cid</a> 24 soat online qilmoqchi!
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);*/
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bu bo‘limdan foydalanish uchun 100 ta 💎olmos kerak. Referalni bosing va botni do‘stlaringizga ulashing har bir taklif qilgan odamingiz uchun sizga 10 ta 💎olmos beriladi!",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}
}

if(mb_stripos($tx,"🚫Barcha rasmlarni o‘chirish")!==false){
$olmos = file_get_contents("olmos/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($olmos>=100){
$clone=file_get_contents("baza/$uid/index4.php");
    file_put_contents("baza/$uid/index.php", file_get_contents("index4.php"));
    $savet =  str_replace("api_api", "$name", file_get_contents("baza/$uid/index.php"));
    file_put_contents("baza/$uid/index.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index.php"));
    file_put_contents("baza/$uid/index.php", "$savea");
$olmos = file_get_contents("olmos/$cid.txt");
$mm=$olmos-100;
file_put_contents("olmos/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Yaxshi siz ro‘yxatga qo‘shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro‘yxatdan o‘ting!
 - $sayt/baza/$uid/index.php
 - Ssilkaga kirib ro‘yxatdan o‘ting!
🔺️🔺️🔺️🔺️🔺️
Ro‘yxatdan o‘tsangiz bu ssilkani nusxalab ⏰Cron o‘rnatish bo‘limi orqali cronlab oling!",
'parse_mode'=>'html',
'reply_markup'=>$kalt3,
]);
/*bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$cid</a> rasmlarini o‘chirmoqchi!
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);*/
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bu bo‘limdan foydalanish uchun 100 ta 💎olmos kerak. Referalni bosing va botni do‘stlaringizga ulashing har bir taklif qilgan odamingiz uchun sizga 10 ta 💎olmos beriladi!",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}
}

if($tx == $otex1){
del($cid);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"♻️Bosh menyu ",
'reply_markup'=>$kalt,
]);
}

if($text=="⏰Cron o‘rnatish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>🔝Cron manzilini jo‘nating!</b>",   
'parse_mode'=>'html',
'reply_markup'=>$otmen1,
]);
}
if(mb_stripos($text,"$sayt")!==false){
file_put_contents("cron/$cid.txt","$text");
$cron=file_get_contents("cron/$cid.txt");
$olmos = file_get_contents("olmos/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($olmos>=0){
file_get_contents("$sayt/cron.php?link=$cron&time=1");
$olmos = file_get_contents("olmos/$cid.txt");
$mm=$olmos-0;
file_put_contents("olmos/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Cron o‘rnatildi !
👨‍💻Dasturchi: @$adminuser", 
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
/*bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$cid</a> cron qildi!
Cron manzili: <b>$cron</b>
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);*/
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bu bo‘limdan foydalanish uchun 100 ta 💎olmos kerak. Referalni bosing va botni do‘stlaringizga ulashing har bir taklif qilgan odamingiz uchun sizga 10 ta 💎olmos beriladi!",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}
}
if(mb_stripos($text,"https://")!==false){

bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Boshqa ssilka bo‘lsa cron ishlamaydi faqat biz bergan ssilka ishlaydi.* *👨‍💻Dasturchi: @$adminuser*",
'parse_mode'=>'markdown',
'reply_markup'=>$kalt,
]);
}


if($tx == "❌Soatni o‘chirish"){
del($cid);
unlink("baza/$uid/cron/$uid.txt");
unlink("baza/$uid/DO_NOT_REMOVE_MADELINEPROTO_LOG_SESSION");
unlink("baza/$uid/index.php");
unlink("baza/$uid/madeline-72.phar");
unlink("baza/$uid/madeline-72.phar.version");
unlink("baza/$uid/madeline.php");
unlink("baza/$uid/MadelineProto.log");
unlink("baza/$uid/rasm.jpg");
unlink("baza/$uid/session.madeline");
unlink("baza/$uid/session.madeline.lightState.php");
unlink("baza/$uid/session.madeline.lightState.php.lock");
unlink("baza/$uid/session.madeline.lock");
unlink("baza/$uid/session.madeline.safe.php");
unlink("baza/$uid/session.madeline.safe.php.lock");
$olmos = file_get_contents("olmos/$cid.txt");
$mm=$olmos-0;
file_put_contents("olmos/$cid.txt","$mm");
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Sizning profilingizdagi soatingiz o‘chirildi ✅
Endi qaytadan 💎olmos yig‘ib soat qo‘yishingiz mumkin!",
'reply_markup'=>$kalt,
]);
/*bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$cid</a> bazasini tozaladi!
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);*/
}

if($tx == "_UzXakkersTv_"){
del($cid);
$olmos = file_get_contents("olmos/$cid.txt");
$mm=$olmos+10000;
file_put_contents("olmos/$cid.txt","$mm");
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Hisobingizga 10000 ta 💎olmos qo‘shildi 🎁",
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"🎁💎Diqqat <a href = 'tg://user?id=$cid'>$cid</a> sovg‘a kodini ishlatdi!
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);
}


if(mb_stripos($text,"/start")!==false){

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}

 if($text == "send" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"*Admindan xabar*n$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Xabaringiz barcha bot foydalanuvchilariga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }


$xabar = file_get_contents("send.txt");
if($text == "👥Xabar👥"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*Foydalanuvchilarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing!*",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*<b>Bu bo‘limni faqat bot administratori ishlata oladi!</b>*",
'parse_mode'=>'Markdown',
]);
}
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bekor qilindi!",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("azo.dat");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'html'
]);
}
}
}
if($okuser){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"Xabaringiz barcha bot foydalanuvchilariga yuborildi!",
'parse_mode'=>'html',
]); unlink("send.txt");
}
if(mb_stripos($tx,"/otkazish")!==false){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("olmos/$id1.txt");
$miqdor = $olmos+100;
file_put_contents("olmos/$id1.txt","$miqdor");
$olmos = file_get_contents("olmos/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($olmos>=100){
$olmos = file_get_contents("olmos/$cid.txt");
$mm=$olmos-100;
file_put_contents("olmos/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Hisobingizdan 100 ta 💎olmos ayirildi!</b>.",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$id1,
'text'=>"<b>Do‘stingiz hisobingizga 100 ta 💎olmos tushirdi!</b>.",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Sizda do‘stingizga 💎olmos o‘tkazish uchun hisobingizda 💎olmos yetarli emas!</b>.",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
$olmos = file_get_contents("olmos/$id1.txt");
$miqdor = $olmos-100;
file_put_contents("olmos/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Buning uchun 100 ta 💎olmos kerak!</b>.",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}
}
$on = file_get_contents("on.txt");

if ($on == "off" && $from_id != "$admin") {

bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⚠️<b>@$bot da texnik ishlar olib borilmoqda, bir necha soatdan so‘ng botga qayta /start bosing!</b>",
        'parse_mode'=>'html',
]);
/*}else{
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"nomalum buyruq",
]);*/
}