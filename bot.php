<?php
$fuckingproprietario = 416613587; // id ancor + important lol
$idfather = 93372553; // id di botfather
$chiunque = ['556562103']; // porcodio
$spambot = 178220800; // id spambot
if(!isset($msg)) $msg = NULL;
$forward = rand(10,12);

if(strpos(" ".$msg, "/start") and in_array($userID, $chiunque)){
    sm($chatID, "<b>I'm here!!</b>");
}


if(strpos(" ".$msg, ".setnome")and in_array($userID, $chiunque)){
    $nome = str_replace(".setnome ", "", $msg);
    $MadelineProto->account->updateProfile(['first_name' => $nome]);
    sm($chatID, "<b>✍🏻 Nome cambiato in:</b> $nome<b>.</b>");
}

if(strpos(" ".$msg, ".setcognome")and in_array($userID, $chiunque)){
    $cognome = str_replace(".setcognome ", "", $msg);
    $MadelineProto->account->updateProfile(['last_name' => $cognome]);
    sm($chatID, "<b>✍🏻 Cognome cambiato in:</b> $cognome<b>.</b>");
}


if(strpos(" ".$msg, ".delcognome")and in_array($userID, $chiunque)){
    $MadelineProto->account->updateProfile(['last_name' => ""]);
    sm($chatID, "<b>❌ Cognome rimosso!</b>");
}

if(strpos(" ".$msg, ".setbio")and in_array($userID, $chiunque)){
    $bio = str_replace(".setbio ", "", $msg);
    $MadelineProto->account->updateProfile(['about' => $bio]);
    sm($chatID, "<b>✍🏻 Bio cambiata in:</b> $bio<b>.</b>");
}

if(strpos(" ".$msg, ".delbio")and in_array($userID, $chiunque)){
    $MadelineProto->account->updateProfile(['about' => ""]);
    sm($chatID, "<b>❌ Bio rimossa!</b>");
}

if(strpos(" ".$msg, ".randomuser")and in_array($userID, $chiunque)){
    $url = "https://uinames.com/api/?ext";
	$content = file_get_contents($url);
	$json = json_decode($content, true);
	$name = $json["name"];
  $rand = rand(5456,23456);
	$userbotta = "$name.$rand";
	$MadelineProto->account->updateUsername(['username' => "$userbotta"]);
	sm($chatID, "<b>🔠 User random impostato.</b>");
}

if(strpos(" ".$msg, ".deluser")and in_array($userID, $chiunque)){
    $MadelineProto->account->updateUsername(['username' => ""]);
    sm($chatID, "<b>❌ User rimosso!</b>");
}

if(strpos(" ".$msg, ".setuser")and in_array($userID, $chiunque)){
    $tag = str_replace('.setuser ', '', $msg);
    $MadelineProto->account->updateUsername(['username' => $tag]);
    sm($chatID, "<b>✍🏻 User cambiato in:</b> $tag<b>.</b>");
}

if(strpos(" ".$msg, ".setpic")and $userID == $mioid){
        $link = str_replace('.setpic ', '', $msg);
	$get_photo = file_get_contents("$link");
	file_put_contents("pic.jpg", $get_photo);
	$inputFile = $MadelineProto->upload('pic.jpg');
	$MadelineProto->photos->uploadProfilePhoto(['file' => $inputFile]);
	sm($chatID, '<b>🌄 Nuova foto profilo impostata!</b>');
}

if(strpos(" ".$msg, ".check")and in_array($userID, $chiunque)){
    sm(178220800, "/start");
	    }
if (stripos($msg, "Buone notizie") === 0 and $userID == 178220800)
	    {
sm($fuckingproprietario, "<b>🔓 Non sono limitato.</b>");
	    }
if (stripos($msg, "Caro") === 0 and $userID == 178220800)
	    {
  $MadelineProto->messages->forwardMessages(['from_peer' => $spambot, 'id' => [$msgid], 'to_peer' => $fuckingproprietario, ]);
	sm($fuckingproprietario, "<b>🔒 Sono limitato.</b>");
	    }

if(strpos(" ".$msg, ".join")and in_array($userID, $chiunque)){
    $gruppo = str_replace('.join ', '', $msg);
	if (strpos($msg, '@') == false){
	             $domini_telegram = array(
			'https://telegram.me/',
			'http://telegram.me/',
			'telegram.me/',
			'https://telegram.dog/',
			'http://telegram.dog/',
			'telegram.dog/',
			'https://t.me/',
			'http://t.me/',
			't.me/',
			'https://joinchat/'
		);
		$gruppo = str_replace($domini_telegram, '', $gruppo);
		if (strpos($gruppo, 'joinchat') === 0)
			{
			$gruppo = str_replace('joinchat/', '', $gruppo);
			}
		  else
			{
			$gruppo = '@' . $gruppo;
			}
		}
	if (strpos($gruppo, '@') === 0)
		{
		$MadelineProto->channels->joinChannel(['channel' => $gruppo]);
		}
	  else
		{
		$MadelineProto->messages->importChatInvite(['hash' => $gruppo]);
		}
     sm($chatID, "<b>☑️ Sono entrato nel gruppo/canale.</b>");
}

if(strpos(" ".$msg, ".leave")and in_array($userID, $chiunque)){
    $gruppo = str_replace(".leave ", "", $msg);
    $MadelineProto->channels->leaveChannel(['channel' => $gruppo, ]);
    sm($chatID, "<b>❎ Sono uscito dal gruppo/canale.</b>");
}

if(strpos(" ".$msg, ".chatid")and in_array($userID, $chiunque)){
    sm($chatID,"<b>ℹ️ ChatID:</b> $chatID<b>.</b>");
}

if(strpos(" ".$msg, ".spam")and in_array($userID, $chiunque)){
sm($chatID, "<b>✔️ Inizio spam su </b>@XStrangerBot <b>e</b> @ChatIncognitoBot<b>!</b>");
$test = explode(" ", $msg);
$mex = str_replace(".spam ".$test[1], "", $msg);
    $icsdd = 0;
  	while ($test[1] > $icsdd){
    $icsdd++;
		sm(611063553, "/start");
		sleep(2);
		sm(611063553, "$mex");
		sleep(2);
		sm(611063553, "/end");
		sleep(2);
    sm(339959826, "•Nuova Chat ✅•");
    sleep(2);
    sm(339959826, "$mex");
    sleep(2);
    sm(339959826, "•Lascia Chat ❌•");
    }
}

if(strpos(" ".$msg, ".sendmsg")and in_array($userID, $chiunque)){
  $command = explode(" ", $msg, 3);
	$newID = $command[1];
	$text = $command[2];
	sm($newID, $text);
	sm($chatID, "<b>📨 Messaggio inviato.</b>", 1);
}

if(strpos($msg, '.flood ')===0 and in_array($userID, $chiunque)){
$e1 = explode(" ", $msg);
$msg1 = str_replace(".flood ".$e1[1]." ".$e1[2], "",$msg);
$tim = $e1[1];
$i = 0;
while($i < $tim){
    $i++;
    $MadelineProto->messages->sendMessage([ 'message' => $msg1, 'peer' => $e1[2], ], ['noResponse' => true]);
    }
}

if(strpos($msg, '.multiforwardflood ')===0 and in_array($userID, $chiunque)){
$e1 = explode(" ", $msg);
//$msg1 = str_replace(".multiforwardflood ".$e1[1]." ".$e1[2], "",$msg);
$tim = $e1[1];
$i = 0;
while($i < $tim){
    $i++;
    $MadelineProto->messages->forwardMessages([ 'from_peer' => -1001193430380, 'id' => [$forward], 'to_peer' => $e1[2], ], ['noResponse' => true]);
    }
}

if(strpos(" ".$msg, ".report")and in_array($userID, $chiunque)){
    $canal1 = explode(" ", $msg);
    $Bool = $MadelineProto->channels->reportSpam(['channel' => $canal1[1], ]);
    sm($chatID, "<b>⚠️ Canale/gruppo corrispondente all'User</b> $canal1 <b>reportato.</b>");
}

if(strpos(" ".$msg, ".cancellaccount")and in_array($userID, $chiunque)){
    $Bool = $MadelineProto->account->deleteAccount(['reason' => 'Bye D:', ]);
}

if(strpos(" ".$msg, ".cancellasessioni")and in_array($userID, $chiunque)){
    $Bool = $MadelineProto->auth->resetAuthorizations();
    sm($fuckingproprietario, "<b>♻️ Sessioni ripulite.</b>");
}

if(strpos(" ".$msg, ".delpic")and in_array($userID, $chiunque)){
    $inputFile = $MadelineProto->upload('pic.jpg');
    $Vector_of_long = $MadelineProto->photos->deletePhotos(['id' => [$inputFile], ]);
    sm($chatID, "<b>❌ Propic rimossa.</b>");
}

if(strpos(" ".$msg, ".joinstorm")and in_array($userID, $chiunque)){
$e1 = explode(" ", $msg);
$InputChannel = $e1[2];
$tim = $e1[1];
$i = 0;
while($i < $tim){
    $i++;
    $MadelineProto->channels->joinChannel(['channel' =>" $InputChannel", ]);
    sleep(0.25);
    $MadelineProto->channels->leaveChannel(['channel' => "$InputChannel", ]);
    }
}

if(strpos(" ".$msg, ".addbots")and in_array($userID, $chiunque)){
$gruppo = str_replace('.addbots ', '', $msg);
if(strpos($msg, '@') == false){
$domini_telegram = array('https://telegram.me/', 'http://telegram.me/', 'telegram.me/', 'https://telegram.dog/', 'http://telegram.dog/', 'telegram.dog/', 'https://t.me/', 'http://t.me/', 't.me/', 'https://joinchat/');
$gruppo = str_replace($domini_telegram, '', $gruppo);
if(strpos($gruppo, 'joinchat') === 0){
$gruppo = str_replace('joinchat/', '', $gruppo);
}else{
$gruppo = '@'. $gruppo;
}
}
if (strpos($gruppo, '@') === 0){
@$MadelineProto->channels->joinChannel(['channel' => $gruppo]);
} else {
@$MadelineProto->messages->importChatInvite(['hash' => $gruppo]);
}
sm($chatID, '<b>Sono entrato correttamente nel gruppo. Provo ad aggiungere i bot...</b>');
  $e = explode(" ", $msg, 2);
  $canale = $e[1];
  $array = ["@boostermembri1bot","@boostermembri2bot","@boostermembri3bot","@boostermembri4bot","@boostermembri5bot","@ghmerda1bot","@ghmerda2bot",'@muroponybot', '@muropony2bot', '@muropony1bot', '@muropony3bot', '@muropony5bot', '@muropony4bot', '@muropony7bot', '@muropony6bot', '@muropony10bot', '@muropony9bot', '@muropony8bot', ];
 @$MadelineProto->channels->inviteToChannel(['channel' => $canale, 'users' => $array, ]);
 @$MadelineProto->channels->leaveChannel(['channel' => $canale]);

if(strpos(" ".$msg, ".slowjoin")and in_array($userID, $chiunque)){
    $antibanfd = rand(0,32);
    $gruppo = str_replace('.slowjoin ', '', $msg);
	if (strpos($msg, '@') == false){
	             $domini_telegram = array(
			'https://telegram.me/',
			'http://telegram.me/',
			'telegram.me/',
			'https://telegram.dog/',
			'http://telegram.dog/',
			'telegram.dog/',
			'https://t.me/',
			'http://t.me/',
			't.me/',
			'https://joinchat/'
		);
		$gruppo = str_replace($domini_telegram, '', $gruppo);
		if (strpos($gruppo, 'joinchat') === 0)
			{
			$gruppo = str_replace('joinchat/', '', $gruppo);
			}
		  else
			{
			$gruppo = '@' . $gruppo;
			}
		}
	if (strpos($gruppo, '@') === 0)
		{
    sleep($antibanfd);
		$MadelineProto->channels->joinChannel(['channel' => $gruppo]);
		}
	  else
		{
    sleep($antibanfd);
		$MadelineProto->messages->importChatInvite(['hash' => $gruppo]);
		}
     sm($chatID, "<b>☑️ Sono nel gruppo/canale.</b>");
}

if(strpos($msg, '.forwardflood ')===0 and in_array($userID, $chiunque)){
$e1 = explode(" ", $msg);
//$msg1 = str_replace(".forwardflood ".$e1[1]." ".$e1[2], "",$msg);
$tim = $e1[1];
$i = 0;
while($i < $tim){
    $i++;
    $MadelineProto->messages->forwardMessages([ 'from_peer' => -1001193430380, 'id' => [12], 'to_peer' => $e1[2], ], ['noResponse' => true]);
    }
}

if(strpos($msg, '.linkchatid ')===0 and in_array($userID, $chiunque)){
    $young = str_replace(".linkchatid ", "", $msg);
    $rich = '-100'.$MadelineProto->get_info($young)['Chat']['id'];
    sm($chatID, "<b>ℹ️ ChatID:</b> $rich<b>.</b>");
}

if(strpos($msg, '.prendiuser ')===0 and in_array($userID, $chiunque)){
    $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => "Entro all'interno del gruppo..."]);
    try{
        if(strpos($msg, '/joinchat/')){
            $MadelineProto->messages->importChatInvite(['hash' => explode('/joinchat/', $msg)[1]]);
        }else{
            $MadelineProto->channels->joinChannel(['channel' => explode(' ', $msg)[1]]);
        }
    }catch(Exception $e){
        sm($chatID, "⛔ Si è verificato un errore, quindi non vado avanti.\n<code>".$e->getMessage()."</code>", 1);

    }
    $MadelineProto->id = '-100'.$MadelineProto->get_full_info(explode(' ', $msg)[1])['Chat']['id'];
    $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => "1️⃣ Sono entrato nel gruppo e ho preso l'ID (".$MadelineProto->id.")."]);
    $pwr = $MadelineProto->get_pwr_chat($MadelineProto->id);
    $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => "2️⃣ Ho preso l'array con tutti i membri (".count($pwr['participants'])." membri)."]);
    if(file_exists('utenti.json')) $l = json_decode(file_get_contents('utenti.json'), true); else $l = [];
    foreach($pwr['participants'] as $pwr){
        if(!isset($l[$pwr['user']['id']])){
            $l[] = ['id' => $pwr['user']['id'], 'bot_info' => $MadelineProto->get_info($pwr['user']['id'])['User']['bot']];
        }
    }
    $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => "3️⃣ Ora ci sono ".count($l)." Utenti in totale in lista.."]);
    file_put_contents('utenti.json', json_encode($l, JSON_PRETTY_PRINT));
}

#RESOCONTO
if(strpos($msg, '.resoconto')===0 and in_array($userID, $chiunque)){
    if(file_exists('utenti.json')) $l = json_decode(file_get_contents('utenti.json'), true); else $l = [];
    $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => count($l)." Utenti in lista."]);
}

#AGGIUNTA, CON add_slow / add_fast
if(strpos($msg, '.add_')===0 and in_array($userID, $chiunque)){
    if(file_exists('utenti.json')) $l = json_decode(file_get_contents('utenti.json'), true); else $l = [];
    if(json_encode($l) != '[]'){
        $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => 'Aggiungo Utenti al gruppo...']);
        if(explode('_', $msg)[1] == 'fast'){
            if(file_exists('utenti.json')) $l = json_decode(file_get_contents('utenti.json'), true); else $l = [];
            $MadelineProto->count = 0;
              foreach($l as $ID => $ARRAY){
                $MadelineProto->count++;
                if(!pcntl_fork()){
                    try{
                        $MadelineProto->channels->inviteToChannel(['channel' => $chatID, 'users' => [$ID]]);
                    }catch(Exception $e){
                        $MadelineProto->count--;
                    }
                    die();
                }
            }
            $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => 'Ho aggiunto degli utenti!']);
            if(isset($MadelineProto->count)) unset($MadelineProto->count);
        }elseif(explode('_', $msg)[1] == 'slow'){
            if(!pcntl_fork()){
                $MadelineProto->i = '0';
                foreach($l as $ID => $ARRAY){
                    try{
                        $MadelineProto->i++;
                        $MadelineProto->channels->inviteToChannel(['channel' => $chatID, 'users' => [$ARRAY['id']]]);
                    }catch(Exception $e){
                        $MadelineProto->i--;
                    }
                    sleep(2);
                }
            }
        }
        $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => '✔️ Ho aggiunto '.$MadelineProto->i.' utenti!']);
        if(isset($MadelineProto->i)) unset($MadelineProto->i);
    }else{
        $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => '⚠️ Non posso aggiungere utenti, visto che il file utenti.json sembra non esistere nella cartella '.__DIR__."!"]);

    }
}

if($msg == ".leaveall" and in_array($userID, $chiunque)){
if(!pcntl_fork()){
    foreach ($MadelineProto->get_dialogs() as $voipsarabimerda){
        if($voipsarabimerda['_'] == 'peerChannel' and $voipsarabimerda['channel_id'] != str_replace('-100', '', $chatID)){
            $MadelineProto->channels->leaveChannel(['channel' => $voipsarabimerda, ], ['noResponse' => true]);
    }
 exit;
 }
sm($chatID, "<b>⚠️ Sono uscito dalle altre chat, gruppi o canali.</b>");
}}}
