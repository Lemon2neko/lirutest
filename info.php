<html>
<head>
	<meta charset="UTF-8"/>
	<title>フォーム送信</title>
	<link rel="apple-touch-icon" sizes="180x180" href="parts/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/x-icon" href="parts/favicon.ico">
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body  link="#ffffff" vlink="#ffffff" alink="#ffffff" text="#ffffff">
	<center><br><br>
	<div class="title" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><img src="./parts/lmrogo.png"></div>
	<br><br>
<table cellpadding="0" cellspacing="0" class="waku" align="center">
<tr><td><img src="http://monstown.egoism.jp/parts/02.gif"></td>
<td bgcolor="black"></td><td><img src="http://monstown.egoism.jp/parts/01.gif"></td>
<tr><td bgcolor="black"></td>
<td bgcolor="black" width="650">
	
<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//info
if($_POST['info']){
	if(isset($_POST["info_type"])){
		$type = $_POST["info_type"];
	}
	$message = "LiruMuni(リルムニ)サイトページの問い合わせフォームにて、以下のお問い合わせが届きました。\n氏名：".mb_convert_kana($_POST['name'],"K")."\n問い合わせ種類：".$type."\n内容：".mb_convert_kana($_POST['info_com'],"K");

	$message_back = "LiruMuni(リルムニ)サイトページの問い合わせフォームにて、以下のお問い合わせを受け付けました。\n氏名：".mb_convert_kana($_POST['name'],"K")."\n問い合わせ種類：".$type."\n内容：".mb_convert_kana($_POST['info_com'],"K")."\n\n※このメールは自動送信です。後ほどサイト管理者が内容を確認し、返信しますのでそれまでお待ちください。";

	if(mb_send_mail($_POST["mail"],"【自動送信】リルムニへのお問い合わせを受け付けました。",$message_back,"From:info@lirumuni.com")==true){
	if(mb_send_mail("oimdem@gmil.com","【リルムニホームページ】お問い合わせのご連絡",$message,"From:".$_POST["mail"])==true){

		echo 'お問い合わせを送信しました。後ほどサイト管理者が内容を確認し、返信しますのでそれまでお待ちください。<br>下の「戻る」ボタンを押すとメインページに戻ります。<br><br><a href="http://lirumuni.com/" class="btn">戻る</a>';
		}}else{
			echo '<font coler="red">送信に失敗しました。お手数ですがもう一度フォームに戻って再送信してください。</font><br>下の「戻る」ボタンを押すとメインページに戻ります。<br><br><a href="http://lirumuni.com/" class="btn">戻る</a>';
		}
}
?>

<br><br>
</font></div>
	
</td><td bgcolor="black"></td></tr>
<tr><td><img src="http://monstown.egoism.jp/parts/03.gif"></td>
<td bgcolor="Black"></td>
<td><img src="http://monstown.egoism.jp/parts/04.gif"></td></tr>
</table>

</body>
</html>