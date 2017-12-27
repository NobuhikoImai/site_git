<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie6" lang="ja"><![endif]-->
<!--[if IE 7]><html class="ie7" lang="ja"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="ja"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="ja"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="ja"><![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="keywords" content="実家診断,家族信託,信託" />
<meta name="description" content="実家診断パックチェック＆お申し込みフォーム" />
<title>実家診断パック｜司法書士法人ソレイユ</title>
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta name="format-detection" content="telephone=no">
<title></title>
</head>

<link rel="stylesheet" href="css/system.css" media="all" />
<link rel="stylesheet" href="css/layout.css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/system.js"></script>
<body id="top">
<?php
//***** データベース情報取得 *****
require_once( 'lib/setup.php' );
$db_connect->set_charset( 'utf8' );
$stmtB = $db_connect->prepare( "SELECT MAX(id) FROM wp_app;" );
$stmtB->execute();
$stmtB->bind_result( $maxID );
$stmtB->fetch();
$stmtB->close();
	
$data1 = $_POST['nameKAN'];
$data2 = $_POST['nameFURI'];
$data3 = $_POST['iE'];
$nijiTotal = array( 0=>$_POST['niji'], 1=>$_POST['nijiMoti11'], 2=>$_POST['nijiMoti12'], 3=>$_POST['niji2'], 4=>$_POST['nijiMoti21'], 5=>$_POST['nijiMoti22'], 6=>$_POST['niji3'], 7=>$_POST['nijiMoti31'], 8=>$_POST['nijiMoti32'], 9=>$_POST['niji4'], 10=>$_POST['nijiMoti41'], 11=>$_POST['nijiMoti42'] );
$data4 = serialize( $nijiTotal );
$sanjiTotal = array( 0=>$_POST['sanji'], 1=>$_POST['sanjiMoti11'], 2=>$_POST['sanjiMoti12'], 3=>$_POST['sanji2'], 4=>$_POST['sanjiMoti21'], 5=>$_POST['sanjiMoti22'], 6=>$_POST['sanji3'], 7=>$_POST['sanjiMoti31'], 8=>$_POST['sanjiMoti32'], 9=>$_POST['sanji4'], 10=>$_POST['sanjiMoti41'], 11=>$_POST['sanjiMoti42'] );
$data5 = serialize( $sanjiTotal );
$data6 = $_POST['documentAdd'];
$data7 = $_POST['estateC2'];
$data8 = $_POST['okuriSaki'];
$data9 = $_POST['tel'];
$data10 = $_POST['email'];
$data11 = $_POST['lost'];
$data12 = $_POST['jsonLine'];
$data13 = $_COOKIE['kakeiData1'];
$data14 = $_COOKIE['kakeiData2'];
$data15 = $_COOKIE['kakeiData3'];
$data16 = $_COOKIE['kakeiData4'];
$data17 = $_COOKIE['kakeiData5'];
$data18 = $_COOKIE['kakeiData6'];
$data19 = $_COOKIE['kakeiData7'];
$data20 = $_COOKIE['kakeiData8'];
$data21 = $_COOKIE['kakeiData9'];
$data22 = $_COOKIE['kakeiData10'];
$data23 = $_COOKIE['kakeiData11'];
$data24 = $_COOKIE['kakeiData12'];
$data25 = $_COOKIE['kakeiData13'];
$data26 = $_COOKIE['kakeiData14'];
$data27 = $maxID + 1;
$data28 = $_POST['img1URL'];
$data29 = $_POST['img2URL'];
$data30 = $_POST['img3URL'];
$data31 = $_POST['img4URL'];
$data32 = $_POST['img5URL'];
$data33 = $_POST['img6URL'];
$data34 = $_POST['kakeizuNumber'];
$data35 = $_COOKIE['kakeiData15'];
$data36 = $_COOKIE['kakeiData16'];
$data37 = $_COOKIE['kakeiData17'];
$data38 = $_COOKIE['kakeiData18'];
$data39 = $_COOKIE['kakeiData19'];
$data40 = $_POST['jsonLineY'];
$data43 = $_POST['nameKAN2'];
$data44 = $_POST['nameFURI2'];
$data45 = $_POST['nameZoku'];
$data46 = $_POST['place'];

//***** データベース登録 *****
$stmt = $db_connect->prepare( "INSERT INTO wp_app SET namrKJ = ?, nameKN = ?, iE = ?, niji = ?, sanji = ?, address = ?, estate = ?, estateAdd = ?, tel = ?, email = ?, lost = ?, jsonLine = ?, kakei1 = ?, kakei2 = ?, kakei3 = ?, kakei4 = ?, kakei5 = ?, kakei6 = ?, kakei7 = ?, kakei8 = ?, kakei9 = ?, kakei10 = ?, kakei11 = ?, kakei12 = ?, kakei13 = ?, kakei14 = ?, fileName = ?, img1URL = ?, img2URL = ?, img3URL = ?, img4URL = ?, img5URL = ?, img6URL = ?, sheetID = ?, kakei15 = ?, kakei16 = ?, kakei17 = ?, kakei18 = ?, kakei19 = ?, jsonLineY = ?, namrKJ2 = ?, namrKN2 = ?, nameZoku = ?, place = ?");
$stmt->bind_param('ssisssssssissssssssssssssssssssssissssssssss', $data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12, $data13, $data14, $data15, $data16, $data17, $data18, $data19, $data20, $data21, $data22, $data23, $data24, $data25, $data26, $data27, $data28, $data29, $data30, $data31, $data32, $data33, $data34, $data35, $data36, $data37, $data38, $data39, $data40, $data43, $data44, $data45, $data46 );
$stmt->execute();
$stmt->close();
	
//***** 申し込み者向けの確認メール生成 *****
$To = $_POST['email'];																//申込者のメールアドレス
$From = "mokaokawari2004@gmail.com";												//お問い合わせ元メールアドレス
$Subject = '【司法書士法人ソレイユ】 空き家にさせない！実家信託パック';				//サブジェクト
$Headers = "From:$From\r\n";														//ヘッダー
$Message .= "\n"
.'----------------------------------------------------------------------------'."\n"
.'お申込み手続きが完了いたしました。'."\n"
.'近日中に、弊所より、書類をお送りいたしますのでしばらくお待ちください。'."\n"
.'ありがとうございました。'."\n"
.'----------------------------------------------------------------------------';	//本文
	
//***** 申し込み者向けの確認メール生成 *****
$To2 = "mokaokawari2004@gmail.com";													//受付送信先メールアドレス
$From2 = "mokaokawari2004@gmail.com";												//お問い合わせ元メールアドレス
$Subject2 = '【申し込み】 空き家にさせない！実家信託パック';						//サブジェクト
$Headers2 = "From:$From2\r\n";														//ヘッダー
$Message2 .= "\n"
.'----------------------------------------------------------------------------'."\n"
.'お申込み手続きが完了いたしました。'."\n"
. $mailURL . '/check.php?id='.$data27."\n"
.'ありがとうございました。'."\n"
.'----------------------------------------------------------------------------';	//本文
	
mb_language("ja");
mb_internal_encoding("UTF-8");
mb_send_mail( $To, $Subject, $Message, $Headers );
mb_send_mail( $To2, $Subject2, $Message2, $Headers2 );
?>
<div id="containerWrap">
	<header>
    <h1 class="logo"><img src="images/logo.png"></h1>
	</header>
	<div id="container">
		<div id="content">
			<p>お申し込み完了いたしました。<br>
            お客様のアドレス宛に、お申込み完了のメールをお送りしました。</p>
            <br>
            <br>
            <div class="button"><a href="http://votre-soleil.com/">ソレイユホームページへ戻る</a></div>
		</div><!--end content--
	</div><!--end container-->
</div><!--end containerWrap-->
<script>
	$(function() {
		$.removeCookie( "sheetNUM", "", { expires:-1, path:"/" } );
		$.removeCookie( "nameFURI", "", { expires:-1, path:"/" } );
		$.removeCookie( "sheetNUM2", "", { expires:-1, path:"/" } );
		$.removeCookie( "nameFURI2", "", { expires:-1, path:"/" } );
		$.removeCookie( "nameKAN", "", { expires:-1, path:"/" } );
		$.removeCookie( "nameZoku", "", { expires:-1, path:"/" } );
		$.removeCookie( "ie", "", { expires:-1, path:"/" } );
		$.removeCookie( "niji", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanji", "", { expires:-1, path:"/" } );
		$.removeCookie( "tel", "", { expires:-1, path:"/" } );
		$.removeCookie( "email", "", { expires:-1, path:"/" } );
		$.removeCookie( "documentAdd", "", { expires:-1, path:"/" } );
		$.removeCookie( "estateC2", "", { expires:-1, path:"/" } );
		$.removeCookie( "estateAdd", "", { expires:-1, path:"/" } );
		$.removeCookie( "place", "", { expires:-1, path:"/" } );
		$.removeCookie( "lost", "", { expires:-1, path:"/" } );
		$.removeCookie( "jsonLine", "", { expires:-1, path:"/" } );
		$.removeCookie( "jsonLineY", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData1", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData2", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData3", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData4", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData5", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData6", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData7", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData8", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData9", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData10", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData11", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData12", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData13", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData14", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData15", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData16", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData17", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData18", "", { expires:-1, path:"/" } );
		$.removeCookie( "kakeiData19", "", { expires:-1, path:"/" } );
		
		$.removeCookie( "niji2", "", { expires:-1, path:"/" } );
		$.removeCookie( "niji3", "", { expires:-1, path:"/" } );
		$.removeCookie( "niji4", "", { expires:-1, path:"/" } );
		$.removeCookie( "nijiMoti11", "", { expires:-1, path:"/" } );
		$.removeCookie( "nijiMoti12", "", { expires:-1, path:"/" } );
		$.removeCookie( "nijiMoti21", "", { expires:-1, path:"/" } );
		$.removeCookie( "nijiMoti22", "", { expires:-1, path:"/" } );
		$.removeCookie( "nijiMoti31", "", { expires:-1, path:"/" } );
		$.removeCookie( "nijiMoti32", "", { expires:-1, path:"/" } );
		$.removeCookie( "nijiMoti41", "", { expires:-1, path:"/" } );
		$.removeCookie( "nijiMoti42", "", { expires:-1, path:"/" } );
		
		$.removeCookie( "sanji2", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanji3", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanji4", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanjiMoti11", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanjiMoti12", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanjiMoti21", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanjiMoti22", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanjiMoti31", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanjiMoti32", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanjiMoti41", "", { expires:-1, path:"/" } );
		$.removeCookie( "sanjiMoti42", "", { expires:-1, path:"/" } );
	});
</script>
</body>
</html>