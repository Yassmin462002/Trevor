<?php
ob_start();
$token ='توكن';
define('API_KEY',$token);
  echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $ALI = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ALI";
        $xtxtk = file_get_contents($url);
        return json_decode($xtxtk);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$namee = $update->callback_query->from->first_name;
$user = $message->from->username;
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
 $user = $update->callback_query->from->username;
}
$ex = explode("#",$data);
if($text == 'مسلسلات' || $text == 'افلام'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
اختر نوع الفلام 📺                                   
Choose your movie 📺
. ", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'مسلسلات💛','callback_data'=>"tv1"]],
[['text'=>'افلام 💛','callback_data'=>"tv2"]],
[['text'=>'افلام اجنبي','callback_data'=>"tv3"]],
]
])
]);
}

if($meme == "tv" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر نوع الفلام 📺                                   
Choose your movie 📺

',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'مسلسلات💛','callback_data'=>"tv1"]],
[['text'=>'افلام 💛','callback_data'=>"tv2"]],
[['text'=>'افلام اجنبي','callback_data'=>"tv3"]],
]
])
]);
}
if($data == "tv1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
آخـتر آلُِمسلُِسلُِ 🎞 𖤐
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Dark📺 ','callback_data'=>"Dark"],['text'=>'Chernobyl','callback_data'=>"Chernobyl"]],
[['text'=>'Sherlock','callback_data'=>"pp"],['text'=>'Lucifer','callback_data'=>"lu"]],
[['text'=>'See','callback_data'=>"se"],['text'=>'ما وراء الطبيعة','callback_data'=>"ما"]],
[['text'=>'The Witcher 2019','callback_data'=>"20"]],
[['text'=>'black mirror','callback_data'=>"black"]],
[['text'=>'the end of the fucking world','callback_data'=>"s"]],
[['text'=>'𝙳𝙴𝚅 - 𝑲𝑮𝑻 𝑴𝑶𝑯𝑨𝑴𝑬𝑫 𝑮𝑶𝑶𝑮𝑳𝑬 𖡛“ 𖢛 ','url'=>'t.me/KGTBR']],[['text'=>'𝙲𝙷 𖣲. - 𝑮𝑶𝑶𝑮𝑳𝑬💛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv"]],
]
])
]);
}
if($data == "Dark" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اسم المسلسل : Dark
سنة الانتاج : 2017
التقييم : 8.8
النوع : جريمة، دراما، غموض، خيال علمي، اثارة
القصة : قصة عائلية مأساوية مع أمور غير طبيعية، حدثت في مدينة المانية، حيث اختفاء طفلان صغيران يوضح العلاقة بين اربع عائلات
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' Dark ⓵','callback_data'=>"Dark1"]],
[['text'=>'Dark ②','callback_data'=>"Dark2"]],
[['text'=>'Dark ③','callback_data'=>"Dark3"]],
[['text'=>'𝙳𝙴𝚅 - 𝑲𝑮𝑻 𝑴𝑶𝑯𝑨𝑴𝑬𝑫 𝑮𝑶𝑶𝑮𝑳𝑬 𖡛“ 𖢛 ','url'=>'t.me/KGTBR']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv1"]],
]
])
]);
}
if($data == "Dark1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' Dark ⓵','callback_data'=>"d1"],['text'=>' Dark ②','callback_data'=>"d2"]],
[['text'=>'Dark ③','callback_data'=>"d3"],['text'=>' Dark ④','callback_data'=>"d4"]],
[['text'=>'Dark ⑤','callback_data'=>"d5"],['text'=>' Dark ⑥','callback_data'=>"d6"]],
[['text'=>'Dark ⑦','callback_data'=>"d7"],['text'=>' Dark ⑧','callback_data'=>"d8"]],
[['text'=>'Dark ⑨','callback_data'=>"d9"],['text'=>' Dark⓵⓿','callback_data'=>"d10"]],
[['text'=>'𝙳𝙴𝚅 - 𝑲𝑮𝑻 𝑴𝑶𝑯𝑨𝑴𝑬𝑫 𝑮𝑶𝑶𝑮𝑳𝑬 𖡛“ 𖢛 ','url'=>'t.me/KGTBR']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"Dark"]],
]
])
]);
}


if($data == "d1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/14",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "d2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/15",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "d3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/16",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "d4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/17",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "d5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/18",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "d6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/19",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "d7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/20",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "d9"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/22",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "d10"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/23",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data == "Dark2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' Dark⓵','callback_data'=>"r1"],['text'=>' Dark ②','callback_data'=>"r2"]],
[['text'=>'Dark ③ ','callback_data'=>"r3"],['text'=>' Dark ④','callback_data'=>"r4"]],
[['text'=>'Dark⑤','callback_data'=>"r5"],['text'=>'Dark ⑥','callback_data'=>"r6"]],
[['text'=>'Dark⑦','callback_data'=>"r7"],['text'=>'Dark ⑧','callback_data'=>"r8"]],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"Dark"]],
]
])
]);
}

if($data == "r1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/24",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "r2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/25",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "r3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/26",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "r4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/27",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "r5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/28",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "r6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/29",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "r7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/30",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "r8"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/31",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data == "Dark3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' Dark ⓵','callback_data'=>"k1"],['text'=>' Dark ②','callback_data'=>"k2"]],
[['text'=>'Dark ③ ','callback_data'=>"k3"],['text'=>' Dark ④','callback_data'=>"k4"]],
[['text'=>'Dark ⑤','callback_data'=>"k5"],['text'=>'Dark ⑥','callback_data'=>"k6"]],
[['text'=>'Dark ⑦','callback_data'=>"k7"],['text'=>'Dark ⑧','callback_data'=>"k8"]],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"Dark"]],
]
])
]);
}


if($data == "k1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/32",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "k2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/33",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "k3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/34",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "k4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/35",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "k5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/36",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "k6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/37",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "k7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/38",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "k8"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/39",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data == "Chernobyl" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Chernobyl ⓵ ','callback_data'=>"c1"],['text'=>'Chernobyl ②','callback_data'=>"c2"]],
[['text'=>'Chernobyl ③','callback_data'=>"c3"],['text'=>'Chernobyl ④','callback_data'=>"c4"]],
[['text'=>'Chernobyl ⑤','callback_data'=>"c5"]],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv1"]],
]
])
]);
}

if($data == "c1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/40",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "c2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/41",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "c3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/42",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "c4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/43",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "c5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/44",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data == "black" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'black mirror s⓵','callback_data'=>"karoki1"]],
[['text'=>'① ','callback_data'=>"11"],['text'=>'②','callback_data'=>"22"],['text'=>'③','callback_data'=>"33"]],
[['text'=>'black mirror s②','callback_data'=>"②"]],
[['text'=>'① ','callback_data'=>"111"],['text'=>'②','callback_data'=>"222"],['text'=>'③','callback_data'=>"333"]],
[['text'=>'black mirror s③','callback_data'=>"②"]],
[['text'=>'① ','callback_data'=>"1111"],['text'=>'②','callback_data'=>"2222"],['text'=>'③','callback_data'=>"3333"]],
[['text'=>'④','callback_data'=>"44"],['text'=>'⑤','callback_data'=>"55"],['text'=>'⑥','callback_data'=>"66"]],
[['text'=>'black mirror s④','callback_data'=>"②"]],
[['text'=>'① ','callback_data'=>"11111"],['text'=>'②','callback_data'=>"22222"],['text'=>'③','callback_data'=>"33333"]],
[['text'=>'④','callback_data'=>"444"],['text'=>'⑤','callback_data'=>"555"],['text'=>'⑥','callback_data'=>"666"]],
[['text'=>'black mirror ⑤','callback_data'=>"②"]],
[['text'=>'① ','callback_data'=>"81"],['text'=>'②','callback_data'=>"82"],['text'=>'③','callback_data'=>"83"]],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv1"]],
]
])
]);
}

if($data == "11"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/45",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "22"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/46",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "33"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/47",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "111"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/49",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "222"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/50",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "333"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/51",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "1111"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/53",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "2222"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/54",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "3333"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/55",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "44"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/56",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "55"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/57",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "66"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/58",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "11111"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/59",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "22222"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/60",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "33333"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/61",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "444"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/62",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "555"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/63",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "666"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/64",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "81"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/65",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id,  
]);
}
if($data == "82"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/66",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "83"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/68",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "se" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' see ¹','callback_data'=>"bakkkarerr"]],
[['text'=>'see ⓵','callback_data'=>"o1"],['text'=>' see ②','callback_data'=>"o2"]],
[['text'=>'see ③','callback_data'=>"o3"],['text'=>' see④','callback_data'=>"o4"]],
[['text'=>'see ⑤ ','callback_data'=>"o5"],['text'=>' see ⑥ ','callback_data'=>"o6"]],
[['text'=>'see ⑦ ','callback_data'=>"o7"],['text'=>' see ⑧ ','callback_data'=>"o8"]],
[['text'=>'𝙳𝙴𝚅 - 𝑲𝑮𝑻 𝑴𝑶𝑯𝑨𝑴𝑬𝑫 𝑮𝑶𝑶𝑮𝑳𝑬 𖡛“ 𖢛 ','url'=>'t.me/KGTBR']],
[['text'=>'𝙳𝙴𝚅 - 𝑮𝑶𝑶𝑮𝑳𝑬 💛𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv1"]],
]
])
]);
}


if($data == "o1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/71",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "o2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/72",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "o3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/73",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "o4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/74",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "o5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/75",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "o6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/76",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "o7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/77",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "o8"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/78",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "ما" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' ما وراء الطبيعة 😍','callback_data'=>"kgtttttttttt"]],
[['text'=>'① ','callback_data'=>"ما1"],['text'=>' ②','callback_data'=>"ما2"]],
[['text'=>'③','callback_data'=>"ما3"],['text'=>'④','callback_data'=>"ما4"]],
[['text'=>'⑤','callback_data'=>"ما5"],['text'=>'⑥','callback_data'=>"ما6"]],
[['text'=>'𝙲𝙷 𖣲 - 𝑮𝑶𝑶𝑮𝑳𝑬 💛𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv1"]],
]
])
]);
}

if($data == "ما1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/81",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "م2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/82",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "ما3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/83",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "ما4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/84",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "ما5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/85",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "ما6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/86",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' Lucifer⓵ ','callback_data'=>"⓵⓵"]],
[['text'=>'⓵','callback_data'=>"lu1"],['text'=>' ②','callback_data'=>"lu2"],['text'=>'③','callback_data'=>"lu3"],['text'=>' ④','callback_data'=>"lu4"],['text'=>'⑤','callback_data'=>"lu5"],['text'=>' ⑥','callback_data'=>"lu6"]],
[['text'=>'⑦','callback_data'=>"lu7"],['text'=>' ⑧','callback_data'=>"lu8"],['text'=>'⑨','callback_data'=>"lu9"],['text'=>' ⓵ ⓿','callback_data'=>"lu10"],['text'=>'⑫','callback_data'=>"lu11"],['text'=>' ⑥','callback_data'=>"lu12"]],
[['text'=>'⑬','callback_data'=>"lu13"],['text'=>'𝙲𝙷 𖣲 -  𝑮𝑶𝑶𝑮𝑳𝑬 𖡛💛“ 𖢛 ','url'=>'t.me/kgtbm']],
[['text'=>' Lucifer② ','callback_data'=>"⓵⓵"]],
[['text'=>'⓵','callback_data'=>"lu11"],['text'=>' ②','callback_data'=>"lu22"],['text'=>'③','callback_data'=>"lu33"],['text'=>' ④','callback_data'=>"lu44"],['text'=>'⑤','callback_data'=>"lu55"],['text'=>' ⑥','callback_data'=>"lu66"],['text'=>'⑦','callback_data'=>"lu77"],['text'=>' ⑧','callback_data'=>"lu88"],['text'=>'⑨','callback_data'=>"lu99"]],
[['text'=>'⓵⓿','callback_data'=>"lu100"],['text'=>' ⑪','callback_data'=>"lu111"],['text'=>'⑫','callback_data'=>"lu122"],['text'=>' ⑬','callback_data'=>"lu133"],['text'=>'⑭','callback_data'=>"lu14"],['text'=>' ⑮','callback_data'=>"lu15"],['text'=>'⑯','callback_data'=>"lu16"],['text'=>' ⑰','callback_data'=>"lu17"],['text'=>'⑱','callback_data'=>"lu18"]],
[['text'=>' Lucifer③ ','callback_data'=>"⓵⓵"]],
[['text'=>'⓵','callback_data'=>"@1"],['text'=>' ②','callback_data'=>"@2"],['text'=>'③','callback_data'=>"@3"],['text'=>' ④','callback_data'=>"@4"],['text'=>'⑤','callback_data'=>"@5"],['text'=>' ⑥','callback_data'=>"@6"],['text'=>'⑦','callback_data'=>"@7"],['text'=>' ⑧','callback_data'=>"@8"],['text'=>'⑨','callback_data'=>"@9"]],
[['text'=>'⓵⓿','callback_data'=>"@10"],['text'=>' ⑪','callback_data'=>"@11"],['text'=>'⑫','callback_data'=>"@12"],['text'=>' ⑬','callback_data'=>"@13"],['text'=>'⑭','callback_data'=>"@14"],['text'=>' ⑮','callback_data'=>"@15"],['text'=>'⑯','callback_data'=>"@16"],['text'=>' ⑰','callback_data'=>"@17"],['text'=>'⑱','callback_data'=>"@18"]],
[['text'=>'⑲','callback_data'=>"@19"],['text'=>' ⑳','callback_data'=>"@20"],['text'=>'②⓵','callback_data'=>"@21"],['text'=>' ②②','callback_data'=>"@22"],['text'=>'②③','callback_data'=>"@23"],['text'=>' ②④','callback_data'=>"@24"],['text'=>'②⑤','callback_data'=>"@25"],['text'=>'②⑥','callback_data'=>"@26"]],
[['text'=>' Lucifer③و ④ ','callback_data'=>"@@"]],
[['text'=>'𝙳𝙴𝚅 - 𝑲𝑮𝑻 𝑴𝑶𝑯𝑨𝑴𝑬𝑫 𝑮𝑶𝑶𝑮𝑳𝑬 𖡛“ 𖢛 ','url'=>'t.me/KGTBR']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv1"]],
]
])
]);
}


if($data == "lu1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/89",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/90",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/91",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/92",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/93",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/94",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/95",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu8"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/96",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu9"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/97",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu10"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/98",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu11"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/99",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu12"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/100",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu13"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/101",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu11"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/103",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu22"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/104",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu33"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/105",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu44"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/106",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu55"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/107",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu66"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/108",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu77"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/109",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu88"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/110",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu99"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/111",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu100"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/112",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu111"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/113",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu122"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/114",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu133"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/115",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu14"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/116",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu15"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/117",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu16"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/118",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu17"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/119",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lu18"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/120",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/122",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/123",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/124",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/125",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/126",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/127",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/128",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@8"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/129",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@9"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/130",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@10"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/131",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@11"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/132",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@12"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/133",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@13"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/134",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@14"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/135",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@15"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/136",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@16"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/137",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@17"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/138",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@18"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/139",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@19"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/140",
 'caption'=>"??𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@20"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/141",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@21"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/142",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@22"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/143",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@23"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/144",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@24"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/145",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@25"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/146",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@26"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/147",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@@" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' Lucifer ④ ','callback_data'=>"⓵⓵"]],
[['text'=>'⓵','callback_data'=>"@11"],['text'=>' ②','callback_data'=>"@22"],['text'=>'③','callback_data'=>"@33"],['text'=>' ④','callback_data'=>"@44"],['text'=>'⑤','callback_data'=>"@55"],['text'=>' ⑥','callback_data'=>"@66"],['text'=>'⑦','callback_data'=>"@77"],['text'=>' ⑧','callback_data'=>"@88"],['text'=>'⑨','callback_data'=>"@99"]],
[['text'=>'⓵⓿','callback_data'=>"@100"],['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>' Lucifer ⑤ ','callback_data'=>"⓵⓵"]],
[['text'=>'⓵','callback_data'=>"@111"],['text'=>' ②','callback_data'=>"@222"],['text'=>'③','callback_data'=>"@333"],['text'=>' ④','callback_data'=>"@444"],['text'=>'⑤','callback_data'=>"@555"],['text'=>' ⑥','callback_data'=>"@666"],['text'=>'⑦','callback_data'=>"@777"],['text'=>' ⑧','callback_data'=>"@888"]],
[['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"lu"]],
]
])
]);
}


if($data == "@11"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/149",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@22"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/150",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@33"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/151",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@44"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/152",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@55"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/153",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@66"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/154",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@77"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/155",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@88"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/156",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@99"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/157",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@100"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/158",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@111"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/161",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@222"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/162",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@333"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/163",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@444"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/164",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@555"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/165",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@666"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/167",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@777"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/168",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "@888"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/169",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "pp" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'  S   ⓵ ','callback_data'=>"④④④"]],
[['text'=>'① ','callback_data'=>"#1"],['text'=>'②','callback_data'=>"#2"],['text'=>'③','callback_data'=>"#3"]],
[['text'=>' S  ② ','callback_data'=>"④②"]],
[['text'=>'① ','callback_data'=>"#4"],['text'=>'②','callback_data'=>"#5"],['text'=>'③','callback_data'=>"#6"]],
[['text'=>'  S  ③ ','callback_data'=>"④②"]],
[['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>'① ','callback_data'=>"#7"],['text'=>'②','callback_data'=>"#8"],['text'=>'③','callback_data'=>"#9"]],
[['text'=>'  S ④ ','callback_data'=>"④②"]],
[['text'=>'① ','callback_data'=>"#10"],['text'=>'②','callback_data'=>"#11"],['text'=>'③','callback_data'=>"#12"],['text'=>'④','callback_data'=>"#13"]],
[['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv1"]],
]
])
]);
}


if($data == "#1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/170",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/171",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/172",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/173",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/174",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/175",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/176",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#8"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/177",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#9"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/178",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#10"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/179",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#11"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/180",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#12"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/181",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "#13"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/182",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "s" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' The End of the Fucking World ⓵ ','callback_data'=>"⓵⓵"]],
[['text'=>'⓵','callback_data'=>"*1"],['text'=>' ②','callback_data'=>"*2"],['text'=>'③','callback_data'=>"*3"],['text'=>' ④','callback_data'=>"*4"],['text'=>'⑤','callback_data'=>"*5"],['text'=>' ⑥','callback_data'=>"*6"],['text'=>'⑦','callback_data'=>"*7"],['text'=>' ⑧','callback_data'=>"*8"]],
[['text'=>' The End of the Fucking World ② ','callback_data'=>"⓵⓵"]],
[['text'=>'⓵','callback_data'=>"*9"],['text'=>' ②','callback_data'=>"*10"],['text'=>'③','callback_data'=>"*11"],['text'=>' ④','callback_data'=>"*12"],['text'=>'⑤','callback_data'=>"*13"],['text'=>' ⑥','callback_data'=>"*14"],['text'=>'⑦','callback_data'=>"*15"],['text'=>' ⑧','callback_data'=>"*16"]],
[['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv1"]],
]
])
]);
}


if($data == "*1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/184",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/185",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/186",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/187",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/188",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/189",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/190",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*8"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/191",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*9"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/200",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*10"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/201",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*11"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/202",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*12"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/203",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*13"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/204",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*14"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/205",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*15"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/206",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "*16"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/207",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "20" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقه 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' The Witcher ②⓿⓵⑨ ','callback_data'=>"⓵⓵"]],
[['text'=>'⓵','callback_data'=>"&1"],['text'=>' ②','callback_data'=>"&2"],['text'=>'③','callback_data'=>"&3"],['text'=>' ④','callback_data'=>"&4"]],
[['text'=>'⑤','callback_data'=>"&5"],['text'=>' ⑥','callback_data'=>"&6"],['text'=>'⑦','callback_data'=>"&7"],['text'=>' ⑧','callback_data'=>"&8"]],
[['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv1"]],
]
])
]);
}


if($data == "&1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/209",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "&2"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/210",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "&3"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/211",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "&4"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/212",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "&5"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/213",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "&6"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/214",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "&7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/215",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "&8"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/216",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "tv2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الفيلم 📽
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'الرجل الاخطر😍 ','callback_data'=>"الرجل"],['text'=>'احنا اسفين يا باشا😥','callback_data'=>"احنا"]],
[['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>' قلب امه','callback_data'=>"امه"],['text'=>' الحارث','callback_data'=>"رث"],['text'=>' الغساله','callback_data'=>"غساله"]],
[['text'=>' جحيم في الهند 😂😂','callback_data'=>"جحيم"]],
[['text'=>'لص بغداد ','callback_data'=>"لص"],['text'=>'خط الدم😥','callback_data'=>"خط"]],
[['text'=>' القرموطي في ارض النار 🔥🔥','callback_data'=>"قرمط"]],
[['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>' نوم التلات','callback_data'=>"نوم"],['text'=>' ليل خارجي','callback_data'=>"ليل"],['text'=>' انت ايه','callback_data'=>"ايه"]],
[['text'=>'خسسني شكرا','callback_data'=>"شكرا"],['text'=>'نص جوازة','callback_data'=>"نص"]],
[['text'=>'تصبح ع خير','callback_data'=>"ع"],['text'=>'تعويذة تو ','callback_data'=>"تو"]],
[['text'=>'𝙳𝙴𝚅 - 𝑲𝑮𝑻 𝑴𝑶𝑯𝑨𝑴𝑬𝑫 𝑮𝑶𝑶𝑮𝑳𝑬 𖡛“ 𖢛 ','url'=>'t.me/KGTBR']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv"]],
]
])
]);
}


if($data == "الرجل"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/218",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "احنا"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/219",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "امه"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/220",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "رث"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/221",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "غساله"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/222",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "جحيم"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/223",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "لص"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/224",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "خط"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/225",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "قرمط"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/226",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "نوم"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/227",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "ليل"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/228",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "ايه"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/229",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "نص"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/230",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "شكرا"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/231",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "ع"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/232",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "تو"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/233",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "tv3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الفيلم 📽
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Furious ⑦','callback_data'=>"/7"],['text'=>'Furious⑧','callback_data'=>"/8"]],
[['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>' ⓵⑨⓵⑦','callback_data'=>"⓵⑨⓵⑦"],['text'=>' safa','callback_data'=>"/s"],['text'=>' the town','callback_data'=>"//t"]],
[['text'=>' persuasion ②⓿⓿⑦','callback_data'=>"/2007"]],
[['text'=>'wild card ','callback_data'=>"/w"],['text'=>'dont breathe','callback_data'=>"/d"]],
[['text'=>' Hellboy','callback_data'=>"/o"]],
[['text'=>'𝙲𝙷 𖣲. -  𝑮𝑶𝑶𝑮𝑳𝑬 💛🇪🇬𖡛“ 𖢛 ','url'=>'t.me/KGTBM']],
[['text'=>' Skylines.②⓿②⓿','callback_data'=>"/202"]],
[['text'=>'hoobs and shaw','callback_data'=>"/بكار"],['text'=>'Robin Hood ','callback_data'=>"/بيض"]],
[['text'=>'up②⓿⓿⑨','callback_data'=>"/up"],['text'=>'forrest gump','callback_data'=>"/u1"]],
[['text'=>'𝙳𝙴𝚅 - 𝑲𝑮𝑻 𝑴𝑶𝑯𝑨𝑴𝑬𝑫 𝑮𝑶𝑶𝑮𝑳𝑬 𖡛“ 𖢛 ','url'=>'t.me/KGTBR']],
[['text'=>'𝖇𝖆𝖈𝖐 ','callback_data'=>"tv"]],
]
])
]);
}


if($data == "/7"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/234",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/8"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/235",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/2007"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/236",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/o"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/237",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "⓵⑨⓵⑦"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/238",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/s"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/239",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "//t"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/240",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/up"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/241",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/u1"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/242",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/بكار"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/243",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/بيض"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/244",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/w"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/245",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/d"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/246",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "/202"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/247",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "tv" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الفيلم 📽
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'مسلسلات💛','callback_data'=>"tv1"]],
[['text'=>'افلام 💛','callback_data'=>"tv2"]],
[['text'=>'افلام اجنبي','callback_data'=>"tv3"]],
]
])
]);
}


if($data == "/777777777"){
bot( sendvideo ,[
 'chat_id'=>$chat_id, 
 video =>"https://t.me/KGTBRRR/234",
 'caption'=>"𝙲𝙷 𖣲. : @KGTBM",
 reply_to_message_id =>$message->message_id, 
]);
}