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
<link rel="stylesheet" href="css/table.css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/system.js"></script>
<body id="top">
<?php
	//***** 画像アップロード *****
	move_uploaded_file( $_FILES['img1']['tmp_name'], 'images/' . $_FILES['img1']['name'] );
	move_uploaded_file( $_FILES['img2']['tmp_name'], 'images/' . $_FILES['img2']['name'] );
	move_uploaded_file( $_FILES['img3']['tmp_name'], 'images/' . $_FILES['img3']['name'] );
	move_uploaded_file( $_FILES['img4']['tmp_name'], 'images/' . $_FILES['img4']['name'] );
	move_uploaded_file( $_FILES['img5']['tmp_name'], 'images/' . $_FILES['img5']['name'] );
	move_uploaded_file( $_FILES['img6']['tmp_name'], 'images/' . $_FILES['img6']['name'] );
	
	//***** 家系図データ構成 *****
	$LineVal1 = json_decode( $_POST['jsonLine'], true );
	$LineVal2 = json_decode( $_POST['jsonLineY'], true );
	$kakeiVal1 = json_decode( $_COOKIE['kakeiData1'], true );
	$kakeiVal2 = json_decode( $_COOKIE['kakeiData2'], true );
	$kakeiVal3 = json_decode( $_COOKIE['kakeiData3'], true );
	$kakeiVal4 = json_decode( $_COOKIE['kakeiData4'], true );
	$kakeiVal5 = json_decode( $_COOKIE['kakeiData5'], true );
	$kakeiVal6 = json_decode( $_COOKIE['kakeiData6'], true );
	$kakeiVal7 = json_decode( $_COOKIE['kakeiData7'], true );
	$kakeiVal8 = json_decode( $_COOKIE['kakeiData8'], true );
	$kakeiVal9 = json_decode( $_COOKIE['kakeiData9'], true );
	$kakeiVal10 = json_decode( $_COOKIE['kakeiData10'], true );
	$kakeiVal11 = json_decode( $_COOKIE['kakeiData11'], true );
	$kakeiVal12 = json_decode( $_COOKIE['kakeiData12'], true );
	$kakeiVal13 = json_decode( $_COOKIE['kakeiData13'], true );
	$kakeiVal14 = json_decode( $_COOKIE['kakeiData14'], true );
	$kakeiVal15 = json_decode( $_COOKIE['kakeiData15'], true );
	$kakeiVal16 = json_decode( $_COOKIE['kakeiData16'], true );
	$kakeiVal17 = json_decode( $_COOKIE['kakeiData17'], true );
	$kakeiVal18 = json_decode( $_COOKIE['kakeiData18'], true );
	$kakeiVal19 = json_decode( $_COOKIE['kakeiData19'], true );
?>
<div id="containerWrap">
	<header>
	</header>
	
	<div id="container">
		<div id="content">
			<h3>お申込者様 入力内容</h3>
			<table>
				<tr>
					<td class="form8L2">委託者</td>
					<td class="form8R2">
						<?php echo( $_POST['nameKAN'] . '（' . $_POST['nameFURI'] . '）' );?>
					</td>
				</tr>
				<tr>
					<td class="form8L2">受託者</td>
					<td class="form8R2">
						<?php echo( $_POST['nameKAN2'] . '（' . $_POST['nameFURI2'] . '）＜' . $_POST['nameZoku'] . '＞' );?>
					</td>
				</tr>
<?php
	if ( isset( $_POST['niji'] ) && $_POST['niji'] != '' ) {
		$nijiVal =  $_POST['niji'];
		$nijiMoti11 =  $_POST['nijiMoti11'];
		$nijiMoti12 =  $_POST['nijiMoti12'];
	} else {
		$nijiVal = '－';
		$nijiMoti11 =  '－';
		$nijiMoti12 =  '－';
	}
	if ( isset( $_POST['niji2'] ) && $_POST['niji2'] != '' ) {
		$nijiVal2 =  $_POST['niji2'];
		$nijiMoti21 =  $_POST['nijiMoti21'];
		$nijiMoti22 =  $_POST['nijiMoti22'];
	} else {
		$nijiVal2 = '－';
		$nijiMoti21 =  '－';
		$nijiMoti22 =  '－';
	}
	if ( isset( $_POST['niji3'] ) && $_POST['niji3'] != '' ) {
		$nijiVal3 =  $_POST['niji3'];
		$nijiMoti31 =  $_POST['nijiMoti31'];
		$nijiMoti32 =  $_POST['nijiMoti32'];
	} else {
		$nijiVal3 = '－';
		$nijiMoti31 =  '－';
		$nijiMoti32 =  '－';
	}
	if ( isset( $_POST['niji4'] ) && $_POST['niji4'] != '' ) {
		$nijiVal4 =  $_POST['niji4'];
		$nijiMoti41 =  $_POST['nijiMoti41'];
		$nijiMoti42 =  $_POST['nijiMoti42'];
	} else {
		$nijiVal4 = '－';
		$nijiMoti41 =  '－';
		$nijiMoti42 =  '－';
	}
	echo( '
			<tr>
				<td class="form8L2">二次受益者</td>
				<td class="form8R2">
					' . $nijiVal . '（持分' . $nijiMoti11 . '分の' . $nijiMoti12 . ')
				</td>
			</tr>
			<tr>
				<td class="form8L2"></td>
				<td class="form8R2">
					' . $nijiVal2 . '（持分' . $nijiMoti21 . '分の' . $nijiMoti22 . ')
				</td>
			</tr>
			<tr>
				<td class="form8L2"></td>
				<td class="form8R2">
					' . $nijiVal3 . '（持分' . $nijiMoti31 . '分の' . $nijiMoti32 . ')
				</td>
			</tr>
			<tr>
				<td class="form8L2"></td>
				<td class="form8R2">
					' . $nijiVal4 . '（持分' . $nijiMoti41 . '分の' . $nijiMoti42 . ')
				</td>
			</tr>
	' );
?>


<?php
	if ( isset( $_POST['sanji'] ) && $_POST['sanji'] != '' ) {
		$sanjiVal =  $_POST['sanji'];
		$sanjiMoti11 = $_POST['sanjiMoti11'];
		$sanjiMoti12 = $_POST['sanjiMoti12'];
	} else {
		$sanjiVal = '－';
		$sanjiMoti11 = '－';
		$sanjiMoti12 = '－';
	}
	if ( isset( $_POST['sanji2'] ) && $_POST['sanji2'] != '' ) {
		$sanjiVal2 =  $_POST['sanji2'];
		$sanjiMoti21 = $_POST['sanjiMoti21'];
		$sanjiMoti22 = $_POST['sanjiMoti22'];
	} else {
		$sanjiVal2 = '－';
		$sanjiMoti21 = '－';
		$sanjiMoti22 = '－';
	}
	if ( isset( $_POST['sanji3'] ) && $_POST['sanji3'] != '' ) {
		$sanjiVal3 =  $_POST['sanji3'];
		$sanjiMoti31 = $_POST['sanjiMoti31'];
		$sanjiMoti32 = $_POST['sanjiMoti32'];
	} else {
		$sanjiVal3 = '－';
		$sanjiMoti31 = '－';
		$sanjiMoti32 = '－';
	}
	if ( isset( $_POST['sanji4'] ) && $_POST['sanji4'] != '' ) {
		$sanjiVal4 =  $_POST['sanji4'];
		$sanjiMoti41 = $_POST['sanjiMoti41'];
		$sanjiMoti42 = $_POST['sanjiMoti42'];
	} else {
		$sanjiVal4 = '－';
		$sanjiMoti41 = '－';
		$sanjiMoti42 = '－';
	}
	echo( '
			<tr>
				<td class="form8L2">三次受益者</td>
				<td class="form8R2">
					' . $sanjiVal . '（持分' . $sanjiMoti11 . '分の' . $sanjiMoti12 . ')
				</td>
			</tr>
			<tr>
				<td class="form8L2"></td>
				<td class="form8R2">
					' . $sanjiVal2 . '（持分' . $sanjiMoti21 . '分の' . $sanjiMoti22 . ')
				</td>
			</tr>
			<tr>
				<td class="form8L2"></td>
				<td class="form8R2">
					' . $sanjiVal3 . '（持分' . $sanjiMoti31 . '分の' . $sanjiMoti32 . ')
				</td>
			</tr>
			<tr>
				<td class="form8L2"></td>
				<td class="form8R2">
					' . $sanjiVal4 . '（持分' . $sanjiMoti41 . '分の' . $sanjiMoti42 . ')
				</td>
			</tr>
	' );
	switch ( $_POST['iE'] ) {
	case "1":
		$okuriSaki = '委託者（実家所有者）宛　';
		break;
	case "2":
		$okuriSaki = '受託者（不動産を管理する方）宛';
		break;
	}
?>
				<tr>
					<td class="form8L2">郵送先</td>
					<td class="form8R2">
						<?php echo( $okuriSaki  );?>
					</td>
				</tr>
				<tr>
					<td class="form8L2">書類郵送先住所</td>
					<td class="form8R2">
						<?php echo( $_POST['documentAdd']  );?>
					</td>
				</tr>
<?php
	if ( $_POST['estateC2'] != "yes" || isset( $_POST['estateC2'] ) ) {
		$fudousanAdd = '不動産住所とは違う';
	} else {
		$fudousanAdd = '不動産住所と同じ';
	}
?>
				<tr>
					<td class="form8L2">不動産の住所</td>
					<td class="form8R2">
						<?php echo( $fudousanAdd );?>
					</td>
				</tr>
				<tr>
					<td class="form8L2">電話番号</td>
					<td class="form8R2">
						<?php echo( $_POST['tel'] );?>
					</td>
				</tr>
				<tr>
					<td class="form8L2">メールアドレス</td>
					<td class="form8R2">
						<?php echo( $_POST['email'] );?>
					</td>
				</tr>
<?php
	switch ( $_POST['place'] ) {
	case "1":
		$place = '弊所本店（東京丸の内）にて本人確認を希望';
		break;
	case "2":
		$place = '出張を希望（別途出張費用）';
		break;
	}
?>
				<tr>
					<td class="form8L2">面談場所</td>
					<td class="form8R2">
						<?php echo( $place  );?>
					</td>
				</tr>
<?php
	if ( $_POST['lost'] == "1" ) {
		echo( '
				<tr>
					<td class="form8L2">登記権利証の紛失・不通知・失効</td>
					<td class="form8R2">
						チェック済
					</td>
				</tr>
		' );
	}
?>
			</table>
<?php
	//***** 家系図データ表示 *****
	if ( $_POST['kakeizuNumber'] == "1" ) {
		echo( '<h3>家系図<span class="fontsize85">（実家所有者の親はすべて死亡している場合）</span></h3>' );
		echo( '<script>$(function() {' );
		for ( $i = 0, $j = 1; $i <= 20; $i++, $j++ ) {
			if ( $j == 11 ) {$k = 0;}
			if ( in_array( $j, $LineVal1 ) ) {
				if ( $j <= 11 ) {
					$lineData = "line" . $j . "B";
					echo( '$( "[name=\'' . $lineData . '\']" ).addClass( "borderYOC" );' );
				} else {
					$lineData = "line" . $k . "B";
					echo( '$( "[name=\'' . $lineData . '\']" ).addClass( "borderXOC" );' );
				}
			}
			if ( $j > 11 ) {$k = $k + 1;}
		}
		echo( '});</script>' );
		echo( '
			<div class="widthSizeSet">
				<table class="tablePositionCenter" style="height:50px;padding-right:170px;margin-left:262px;">
					<!--0段目-->
					<tr>
						<td class="tableFLine1" rowspan="2">
							<span class="fontSize2EM">父</span>
						</td>
						<td class="tableSpace borderXD" colspan="2"></td>
						<td class="tableFLine1" rowspan="2">
							<span class="fontSize2EM">母</span>
						</td>
					</tr>
					<tr>
						<td style="width: 12px;"></td>
						<td class="borderY" style="width: 18px;"></td>
					</tr>
				</table>
				
				<table class="tablePositionCenter kakeiTable2">
					<tr>
						<td class="border3"></td>
						<td class="border2"></td>
						<td class="border2"></td>
						<td class="border2 borderY"></td>
						<td class="border2"></td>
						<td class="border2"></td>
						<td class="border3"></td>
					</tr>
					<tr>
						<td class="border3"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2 borderY"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2"></td>
						<td class="border3 alignChange2"></td>
					</tr>
				</table>
				
				<!--1段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableFLine1 borderNone"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							<span class="fontRed">実家所有者</span>
						</td>
						<td class="tableSpace borderBottom borderXD" colspan="2"></td>
						<td class="tableFLine1">
							配偶者
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
					</tr>
					<tr>
						<td class="tableFLine2 borderNone"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal1['zoku'] . '<br>
							名前：' . $kakeiVal1['name'] . '<br>
							死亡日：' . $kakeiVal1['sibo'] . '
						</td>
						<td style="width: 12px;"></td>
						<td class="borderY" style="width: 18px;"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal2['zoku'] . '<br>
							名前：' . $kakeiVal2['name'] . '<br>
							死亡日：' . $kakeiVal2['sibo'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
					</tr>
				</table>
				
				<table class="tablePositionCenter kakeiTable2">
					<tr>
						<td class="border3"></td>
						<td class="border2"></td>
						<td class="border2 borderX"></td>
						<td class="border2_2 borderX"></td>
						<td class="border2_2 borderY borderX"></td>
						<td class="border2 borderX"></td>
						<td class="border2 borderX"></td>
						<td class="border3"></td>
					</tr>
					<tr>
						<td class="border3"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2 borderY"></td>
						<td class="border2_2 alignChange2 borderY"></td>
						<td class="border2_2"></td>
						<td class="border2 alignChange2 borderY"></td>
						<td class="border2 alignChange2 borderY"></td>
						<td class="border3 alignChange2 borderY"></td>
					</tr>
				</table>
				
				<!--2段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableFLine1">
							配偶者
						</td>
						<td class="tableSpace2 borderXD"></td><td class="tableSpace2 borderXD"></td>
						<td class="tableFLine1" id="pos21">
							<span class="fontRed">受託者</span>
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							兄弟姉妹
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							兄弟姉妹
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							兄弟姉妹
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							兄弟姉妹
						</td>
					</tr>
					<tr>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal3['zoku'] . '<br>
							名前：' . $kakeiVal3['name'] . '<br>
							死亡日：' . $kakeiVal3['sibo'] . '<br>
							未成年：' . $kakeiVal3['mise'] . '
						</td>
						<td class="tableSpace2"></td><td class="tableSpace2"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal4['zoku'] . '<br>
							名前：' . $kakeiVal4['name'] . '<br>
							死亡日：' . $kakeiVal4['sibo'] . '<br>
							未成年：' . $kakeiVal4['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal5['zoku'] . '<br>
							名前：' . $kakeiVal5['name'] . '<br>
							死亡日：' . $kakeiVal5['sibo'] . '<br>
							未成年：' . $kakeiVal5['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal6['zoku'] . '<br>
							名前：' . $kakeiVal6['name'] . '<br>
							死亡日：' . $kakeiVal6['sibo'] . '<br>
							未成年：' . $kakeiVal6['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal7['zoku'] . '<br>
							名前：' . $kakeiVal7['name'] . '<br>
							死亡日：' . $kakeiVal7['sibo'] . '<br>
							未成年：' . $kakeiVal7['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal8['zoku'] . '<br>
							名前：' . $kakeiVal8['name'] . '<br>
							死亡日：' . $kakeiVal8['sibo'] . '<br>
							未成年：' . $kakeiVal8['mise'] . '
						</td>
					</tr>
				</table>
				
				<table class="tablePositionCenter kakeiTable">
					<tr>
						<td class="border3"></td>
						<td class="border2 borderXO" name="line0B"></td>
						<td class="border2 borderXO borderYO" name="line1B"></td>
						<td class="border2 borderXO borderYO" name="line2B"></td>
						<td class="border2 borderXO borderYO" name="line3B"></td>
						<td class="border2 borderXO borderYO" name="line4B"></td>
						<td class="border3 borderYO" name="line5B"></td>
					</tr>
					<tr>
						<td class="border3"></td>
						<td class="border2 alignChange2 borderYO" name="line6B"></td>
						<td class="border2 alignChange2 borderYO" name="line7B"></td>
						<td class="border2 alignChange2 borderYO" name="line8B"></td>
						<td class="border2 alignChange2 borderYO" name="line9B"></td>
						<td class="border2 alignChange2 borderYO" name="line10B"></td>
						<td class="border3 alignChange2 borderYO" name="line11B"></td>
					</tr>
				</table>
				
				<!--3段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableFLine1">
							甥／姪
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1" id="pos21">
							甥／姪
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							甥／姪
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							甥／姪
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							甥／姪
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							甥／姪
						</td>
					</tr>
					<tr>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal9['zoku'] . '<br>
							名前：' . $kakeiVal9['name'] . '<br>
							死亡日：' . $kakeiVal9['sibo'] . '<br>
							未成年：' . $kakeiVal9['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal10['zoku'] . '<br>
							名前：' . $kakeiVal10['name'] . '<br>
							死亡日：' . $kakeiVal10['sibo'] . '<br>
							未成年：' . $kakeiVal10['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal11['zoku'] . '<br>
							名前：' . $kakeiVal11['name'] . '<br>
							死亡日：' . $kakeiVal11['sibo'] . '<br>
							未成年：' . $kakeiVal11['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal12['zoku'] . '<br>
							名前：' . $kakeiVal12['name'] . '<br>
							死亡日：' . $kakeiVal12['sibo'] . '<br>
							未成年：' . $kakeiVal12['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal13['zoku'] . '<br>
							名前：' . $kakeiVal13['name'] . '<br>
							死亡日：' . $kakeiVal13['sibo'] . '<br>
							未成年：' . $kakeiVal13['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal14['zoku'] . '<br>
							名前：' . $kakeiVal14['name'] . '<br>
							死亡日：' . $kakeiVal14['sibo'] . '<br>
							未成年：' . $kakeiVal14['mise'] . '
						</td>
					</tr>
				</table>
			</div>
		' );
	} else if ( $_POST['kakeizuNumber'] == "2" ) {
		echo( '<h3>家系図<span class="fontsize85">（実家所有者の親が１名でも生存している場合）</span></h3>' );
		echo( '
			<div class="widthSizeSet">
				<table class="tablePositionCenter">
					<tr>
						<td class="tableFLine1">
							<span class="fontRed">父</span>
						</td>
						<td class="tableSpace borderBottom borderXD" colspan="2"></td>
						<td class="tableFLine1">
							母
						</td>
						<td class="tableSpace3"></td>
					</tr>
					<tr>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal1['zoku'] . '<br>
							名前：' . $kakeiVal1['name'] . '<br>
							死亡日：' . $kakeiVal1['sibo'] . '
						</td>
						<td style="width: 12px;"></td>
						<td class="borderY" style="width: 18px;"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal2['zoku'] . '<br>
							名前：' . $kakeiVal2['name'] . '<br>
							死亡日：' . $kakeiVal2['sibo'] . '
						</td>
						<td class="tableSpace3"></td>
					</tr>
				</table>
				<table class="tablePositionCenter kakeiTable2">
					<tr>
						<td class="tableSpace4"></td>
						<td class="tableSpace5 borderY"></td>
					</tr>
				</table>
				
				<!--1段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace6"></td>
						<td class="tableFLine1">
							<span class="fontRed">実家所有者</span>
						</td>
						<td class="tableSpace borderBottom borderXD" colspan="2"></td>
						<td class="tableFLine1">
							配偶者
						</td>
						<td class="tableSpace7"></td>
					</tr>
					<tr>
						<td class="tableSpace6"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal3['zoku'] . '<br>
							名前：' . $kakeiVal3['name'] . '<br>
							死亡日：' . $kakeiVal3['sibo'] . '
						</td>
						<td style="width: 12px;"></td>
						<td class="borderY" style="width: 18px;"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal4['zoku'] . '<br>
							名前：' . $kakeiVal4['name'] . '<br>
							死亡日：' . $kakeiVal4['sibo'] . '
						</td>
						<td class="tableSpace7"></td>
					</tr>
				</table>
				
				<table class="tablePositionCenter kakeiTable2">
					<tr>
						<td class="tableSpace8"></td>
						<td class="tableSpace9 borderY"></td>
					</tr>
				</table>
				
				<!--2段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableFLine1">
							配偶者
						</td>
						<td class="tableSpace borderBottom borderXD"></td>
						<td class="tableFLine1">
							<span class="fontRed">受託者</span>
						</td>
						<td class="tableSpace3"></td>
					</tr>
					<tr>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal5['zoku'] . '<br>
							名前：' . $kakeiVal5['name'] . '<br>
							死亡日：' . $kakeiVal5['sibo'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal6['zoku'] . '<br>
							名前：' . $kakeiVal6['name'] . '<br>
							死亡日：' . $kakeiVal6['sibo'] . '
						</td>
						<td class="tableSpace3"></td>
					</tr>
				</table>
			</div>
		' );
	} else if ( $_POST['kakeizuNumber'] == "3" ) {
		echo( '<h3>家系図<span class="fontsize85">（実家所有者に離婚歴があり、元配偶者との間に子がいる場合）</span></h3>' );
		echo( '<script>$(function() {' );
		for ( $i = 0, $j = 1; $i <= 20; $i++, $j++ ) {
			if ( $j == 11 ) {$k = 0;}
			if ( in_array( $j, $LineVal1 ) ) {
				if ( $j <= 11 ) {
					$lineData = "line" . $j . "B";
					echo( '$( "[name=\'' . $lineData . '\']" ).addClass( "borderYOC" );' );
				} else {
					$lineData = "line" . $k . "B";
					echo( '$( "[name=\'' . $lineData . '\']" ).addClass( "borderXOC" );' );
				}
			}
			if ( $j > 11 ) {$k = $k + 1;}
		}
		echo( '});</script>' );
		echo( '
			<div class="widthSizeSet">
			<table class="tablePositionCenter" style="height:50px;padding-right:170px;margin-left:262px;">
					<!--0段目-->
					<tr>
						<td class="tableFLine1" rowspan="2">
							<span class="fontSize2EM">父</span>
						</td>
						<td class="tableSpace borderXD" colspan="2"></td>
						<td class="tableFLine1" rowspan="2">
							<span class="fontSize2EM">母</span>
						</td>
					</tr>
					<tr>
						<td style="width: 12px;"></td>
						<td class="borderY" style="width: 18px;"></td>
					</tr>
				</table>
				
				<table class="tablePositionCenter kakeiTable2">
					<tr>
						<td class="border3"></td>
						<td class="border2"></td>
						<td class="border2"></td>
						<td class="border2 borderY"></td>
						<td class="border2"></td>
						<td class="border2"></td>
						<td class="border3"></td>
					</tr>
					<tr>
						<td class="border3"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2 borderY"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2"></td>
						<td class="border3 alignChange2"></td>
					</tr>
				</table>
				
				<!--1段目-->
				<table class="tablePositionCenter" style="margin-left: 22px;">
					<tr>
						<td class="tableFLine1">
							前配偶者
						</td>
						<td class="tableSpace borderXD"></td>
						<td class="tableFLine3 borderXD"></td>
						<td class="tableSpace borderXD"></td>
						<td class="tableFLine1">
							<span class="fontRed">実家所有者</span>
						</td>
						<td class="tableSpace borderBottom borderXD" colspan="2"></td>
						<td class="tableFLine1">
							配偶者
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
					</tr>
					<tr>
						<td class="tableFLine2 rightPos">
							離婚日：' . $kakeiVal1['sibo'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal2['zoku'] . '<br>
							名前：' . $kakeiVal2['name'] . '<br>
							死亡日：' . $kakeiVal2['sibo'] . '
						</td>
						<td style="width: 12px;"></td>
						<td class="borderY" style="width: 18px;"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal3['zoku'] . '<br>
							名前：' . $kakeiVal3['name'] . '<br>
							死亡日：' . $kakeiVal3['sibo'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine1 borderNone"></td>
					</tr>
				</table>
				
				<table class="tablePositionCenter kakeiTable2">
					<tr>
						<td class="tableSpace12"></td>
						<td class="tableSpace13 borderY"></td>
						<td class="tableSpace17"></td>
						<td class="border2"></td>
						<td class="border2_2 borderX"></td>
						<td class="border2_2 borderY borderX"></td>
						<td class="border2 borderX"></td>
						<td class="border2 borderX"></td>
						<td class="border3"></td>
					</tr>
					<tr>
						<td class="tableSpace12"></td>
						<td class="tableSpace13 borderY"></td>
						<td class="tableSpace17"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2_2 alignChange2 borderY"></td>
						<td class="border2_2"></td>
						<td class="border2 alignChange2 borderY"></td>
						<td class="border2 alignChange2 borderY"></td>
						<td class="border3 alignChange2 borderY"></td>
					</tr>
				</table>
				
				<!--2段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace15"></td>
						<td class="tableSpace16 borderY"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine1" id="pos21">
							配偶者
						</td>
						<td class="tableSpace2 borderXD"></td><td class="tableSpace2 borderXD"></td>
						<td class="tableFLine1">
							<span class="fontRed">受託者</span>
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							兄弟姉妹
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							兄弟姉妹
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							兄弟姉妹
						</td>
					</tr>
					<tr>
						<td class="tableSpace15"></td>
						<td class="tableSpace16 borderY"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal4['zoku'] . '<br>
							名前：' . $kakeiVal4['name'] . '<br>
							死亡日：' . $kakeiVal4['sibo'] . '<br>
							未成年：' . $kakeiVal4['mise'] . '
							
						</td>
						<td class="tableSpace2"></td><td class="tableSpace2"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal5['zoku'] . '<br>
							名前：' . $kakeiVal5['name'] . '<br>
							死亡日：' . $kakeiVal5['sibo'] . '<br>
							未成年：' . $kakeiVal5['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal6['zoku'] . '<br>
							名前：' . $kakeiVal6['name'] . '<br>
							死亡日：' . $kakeiVal6['sibo'] . '<br>
							未成年：' . $kakeiVal6['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal7['zoku'] . '<br>
							名前：' . $kakeiVal7['name'] . '<br>
							死亡日：' . $kakeiVal7['sibo'] . '<br>
							未成年：' . $kakeiVal7['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal8['zoku'] . '<br>
							名前：' . $kakeiVal8['name'] . '<br>
							死亡日：' . $kakeiVal8['sibo'] . '<br>
							未成年：' . $kakeiVal8['mise'] . '
						</td>
					</tr>
				</table>
				
				<table class="tablePositionCenter kakeiTable">
					<tr>
						<td class="tableSpace12"></td>
						<td class="tableSpace13 borderY"></td>
						<td class="tableSpace14" name="line0B"></td>
						<td class="border2 borderXO" name="line1B"></td>
						<td class="border2 borderXO borderYO" name="line2B"></td>
						<td class="border2 borderXO borderYO" name="line3B"></td>
						<td class="border2 borderXO borderYO" name="line4B"></td>
						<td class="border3 borderYO" name="line5B"></td>
					</tr>
					<tr>
						<td class="tableSpace12"></td>
						<td class="tableSpace13 borderY"></td>
						<td class="tableSpace14" name="line6B"></td>
						<td class="border2 alignChange2 borderYO" name="line7B"></td>
						<td class="border2 alignChange2 borderYO" name="line8B"></td>
						<td class="border2 alignChange2 borderYO" name="line9B"></td>
						<td class="border2 alignChange2 borderYO" name="line10B"></td>
						<td class="border3 alignChange2 borderYO" name="line11B"></td>
					</tr>
				</table>
				
				<!--3段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace10"></td>
						<td class="tableSpace11 borderY"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine1" id="pos21">
							甥／姪
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							甥／姪
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							甥／姪
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							甥／姪
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							甥／姪
						</td>
					</tr>
					<tr>
						<td class="tableSpace10"></td>
						<td class="tableSpace11 borderY"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal9['zoku'] . '<br>
							名前：' . $kakeiVal9['name'] . '<br>
							死亡日：' . $kakeiVal9['sibo'] . '<br>
							未成年：' . $kakeiVal9['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal10['zoku'] . '<br>
							名前：' . $kakeiVal10['name'] . '<br>
							死亡日：' . $kakeiVal10['sibo'] . '<br>
							未成年：' . $kakeiVal10['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal11['zoku'] . '<br>
							名前：' . $kakeiVal11['name'] . '<br>
							死亡日：' . $kakeiVal11['sibo'] . '<br>
							未成年：' . $kakeiVal11['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal12['zoku'] . '<br>
							名前：' . $kakeiVal12['name'] . '<br>
							死亡日：' . $kakeiVal12['sibo'] . '<br>
							未成年：' . $kakeiVal12['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal13['zoku'] . '<br>
							名前：' . $kakeiVal13['name'] . '<br>
							死亡日：' . $kakeiVal13['sibo'] . '<br>
							未成年：' . $kakeiVal13['mise'] . '
						</td>
					</tr>
				</table>
				
				<table class="tablePositionCenter kakeiTable2">
					<tr>
						<td class="border3"></td>
						<td class="border2 borderX borderY"></td>
						<td class="border2 borderX"></td>
						<td class="border2_2"></td>
						<td class="border2_2"></td>
						<td class="border2"></td>
						<td class="border2"></td>
						<td class="border3"></td>
					</tr>
					<tr>
						<td class="border3"></td>
						<td class="border2 borderY"></td>
						<td class="border2 borderY"></td>
						<td class="border2_2 borderY"></td>
						<td class="border2_2"></td>
						<td class="border2"></td>
						<td class="border2"></td>
						<td class="border3"></td>
					</tr>
				</table>
				
				<!--4段目-->
				<table class="tablePositionCenter" style="margin-left:18px;">
					<tr>
						<td class="tableFLine1" id="pos21">
							異母兄弟
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1" id="pos21">
							異母兄弟
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine1">
							異母兄弟
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine3">
						<td class="tableSpace"></td>
						<td class="tableFLine3">
						<td class="tableSpace"></td>
						<td class="tableFLine3"></td>
					</tr>
					<tr>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal14['zoku'] . '<br>
							名前：' . $kakeiVal14['name'] . '<br>
							死亡日：' . $kakeiVal14['sibo'] . '<br>
							未成年：' . $kakeiVal14['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal15['zoku'] . '<br>
							名前：' . $kakeiVal15['name'] . '<br>
							死亡日：' . $kakeiVal15['sibo'] . '<br>
							未成年：' . $kakeiVal15['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine2 rightPos">
							続柄：' . $kakeiVal16['zoku'] . '<br>
							名前：' . $kakeiVal16['name'] . '<br>
							死亡日：' . $kakeiVal16['sibo'] . '<br>
							未成年：' . $kakeiVal16['mise'] . '
						</td>
						<td class="tableSpace"></td>
						<td class="tableFLine3"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine3"></td>
						<td class="tableSpace"></td>
						<td class="tableFLine3"></td>
					</tr>
				</table>
			</div>
		' );
	} else if ( $_POST['kakeizuNumber'] == "4" ) {
		echo( '<h3>家系図<span class="fontsize85">（どのケースにも当てはまらない場合）</span></h3>' );
		echo( '<script>$(function() {' );
		for ( $i = 0, $j = 1; $i <= 22; $i++, $j++ ) {
			if ( in_array( $i, $LineVal1 ) ) {
				$lineData = "lineBT" . $i;
				echo( '$( "[name=\'' . $lineData . '\']" ).addClass( "borderYOC" );' );
			}
		}
		for ( $i = 0; $i <= 21; $i++ ) {
			if ( in_array( $i, $LineVal2 ) ) {
				$lineData2 = "lineBY" . $i;
				if ( $i == 1 || $i == 2 || $i == 14 || $i == 15 || $i == 16 || $i == 17 ) {
					echo( '$( "[name=\'' . $lineData2 . '\']" ).addClass( "borderXD" );' );
				} else {
					echo( '$( "[name=\'' . $lineData2 . '\']" ).addClass( "borderXOC" );' );
					echo( '$( "[data-yoko=\'' . $lineData2 . '\']" ).addClass( "borderXOC" );' );
				}
			}
		}
		echo( '});</script>' );
		echo( '
			<div class="widthSizeSet">
				<table class="tablePositionCenter" style="height:50px;padding-right:170px;margin-left:100px;">
					<!--0段目-->
					<tr>
						<td class="tableFLine1">
							父
						</td>
						<td class="tableSpace borderXD" colspan="2"></td>
						<td class="tableFLine1">
							母
						</td>
					</tr>
					<tr>
						<td class="tableFLine1 rightPos" rowspan="2">
							続柄：' . $kakeiVal1['zoku'] . '<br>
							名前：' . $kakeiVal1['name'] . '<br>
							死亡日：' . $kakeiVal1['sibo'] . '
						</td>
						<td style="width: 12px;"></td>
						<td class="borderY" style="width: 18px;"></td>
						<td class="tableFLine1 rightPos" rowspan="2">
							続柄：' . $kakeiVal2['zoku'] . '<br>
							名前：' . $kakeiVal2['name'] . '<br>
							死亡日：' . $kakeiVal2['sibo'] . '
						</td>
					</tr>
				</table>
				
				<table class="tablePositionCenter kakeiTable2">
					<tr>
						<td class="border3"></td>
						<td class="border2"></td>
						<td class="border2 borderY"></td>
						<td class="border2"></td>
						<td class="border2"></td>
						<td class="border2"></td>
						<td class="border3"></td>
					</tr>
					<tr>
						<td class="border3"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2 borderY"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2"></td>
						<td class="border2 alignChange2"></td>
						<td class="border3 alignChange2"></td>
					</tr>
				</table>
				
				<!--1段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace18 rightPos2">' . $kakeiVal3['titl'] . '</td>
						<td class="tableSpace19 borderXO" name="lineBY1"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal4['titl'] . '</td>
						<td class="tableSpace19 borderXO" name="lineBY2"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal5['titl'] . '</td>
						<td class="tableSpace19 "></td>
						<td class="tableSpace18_1"></td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18_1"></td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18_1"></td>
					</tr>
					<tr>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal3['zoku'] . '<br>
							名前：' . $kakeiVal3['name'] . '<br>
							死亡日：' . $kakeiVal3['sibo'] . '<br>
							未成年：' . $kakeiVal3['mise'] . '
						</td>
						<td class="tableSpace21 cBoxPosC"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal4['zoku'] . '<br>
							名前：' . $kakeiVal4['name'] . '<br>
							死亡日：' . $kakeiVal4['sibo'] . '<br>
							未成年：' . $kakeiVal4['mise'] . '
						</td>
						<td class="tableSpace21 cBoxPosC"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal5['zoku'] . '<br>
							名前：' . $kakeiVal5['name'] . '<br>
							死亡日：' . $kakeiVal5['sibo'] . '<br>
							未成年：' . $kakeiVal5['mise'] . '
						</td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20_1"></td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20_1"></td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20_1"></td>
					</tr>
				</table>
				
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace22_5"></td><td class="tableSpace22_5 borderYO" name="lineBT0"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"><td class="tableSpace22_1 borderXO borderYO" name="lineBT1" data-yoko="lineBY3"></td>
						<td class="tableSpace24 borderXO" name="lineBY3"></td>
						<td class="tableSpace22_1 borderXO" name="lineBY3"></td><td class="tableSpace22_1 borderXO borderYO" name="lineBT2" data-yoko="lineBY4"></td>
						<td class="tableSpace24 borderXO" name="lineBY4"></td>
						<td class="tableSpace22_1 borderXO" name="lineBY4"></td><td class="tableSpace22_1 borderXO" data-yoko="lineBY5"></td>
						<td class="tableSpace24 borderXO" name="lineBY5"></td>
						<td class="tableSpace22_1 borderXO" name="lineBY5"></td><td class="tableSpace22_1 borderXO" data-yoko="lineBY6"></td>
						<td class="tableSpace24 borderXO" name="lineBY6"></td>
						<td class="tableSpace22_1 borderXO" name="lineBY6"></td><td class="tableSpace22_1"></td>
					</tr>
					<tr>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT0"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT3"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT4"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT5"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT6"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT7"></td>
					</tr>
				</table>
				
				<!--2段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace25_2" rowspan="2"></td>
						<td class="tableSpace26 borderYO" name="lineBT0" rowspan="2"></td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal6['titl'] . '</td>
						<td class="tableSpace19 borderXO" name="lineBY14"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal7['titl'] . '</td>
						<td class="tableSpace19 borderXO" name="lineBY15"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal8['titl'] . '</td>
						<td class="tableSpace19 borderXO" name="lineBY16"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal9['titl'] . '</td>
						<td class="tableSpace19 borderXO" name="lineBY17"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal10['titl'] . '</td>
					</tr>
					<tr>
						<td class="tableSpace21"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal6['zoku'] . '<br>
							名前：' . $kakeiVal6['name'] . '<br>
							死亡日：' . $kakeiVal6['sibo'] . '<br>
							未成年：' . $kakeiVal6['mise'] . '
						</td>
						<td class="tableSpace21 cBoxPosC"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal7['zoku'] . '<br>
							名前：' . $kakeiVal7['name'] . '<br>
							死亡日：' . $kakeiVal7['sibo'] . '<br>
							未成年：' . $kakeiVal7['mise'] . '
						</td>
						<td class="tableSpace21 cBoxPosC"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal8['zoku'] . '<br>
							名前：' . $kakeiVal8['name'] . '<br>
							死亡日：' . $kakeiVal8['sibo'] . '<br>
							未成年：' . $kakeiVal8['mise'] . '
						</td>
						<td class="tableSpace21 cBoxPosC"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal9['zoku'] . '<br>
							名前：' . $kakeiVal9['name'] . '<br>
							死亡日：' . $kakeiVal9['sibo'] . '<br>
							未成年：' . $kakeiVal9['mise'] . '
						</td>
						<td class="tableSpace21 cBoxPosC"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal10['zoku'] . '<br>
							名前：' . $kakeiVal10['name'] . '<br>
							死亡日：' . $kakeiVal10['sibo'] . '<br>
							未成年：' . $kakeiVal10['mise'] . '
						</td>
					</tr>
				</table>
				
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT0"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"><td class="tableSpace22_1 borderXO borderYO" name="lineBT8" data-yoko="lineBY7"></td>
						<td class="tableSpace24 borderXO" name="lineBY7"></td>
						<td class="tableSpace22_1  borderXO" name="lineBY7"></td><td class="tableSpace22_1 borderXO borderYO" name="lineBT9" data-yoko="lineBY8"></td>
						<td class="tableSpace24  borderXO" name="lineBY8"></td>
						<td class="tableSpace22_1  borderXO" name="lineBY8"></td><td class="tableSpace22_1 borderXO borderYO" name="lineBT10" data-yoko="lineBY9"></td>
						<td class="tableSpace24  borderXO" name="lineBY9"></td>
						<td class="tableSpace22_1  borderXO" name="lineBY9"></td><td class="tableSpace22_1 borderXO borderYO" name="lineBT11" data-yoko="lineBY10"></td>
						<td class="tableSpace24  borderXO" name="lineBY10"></td>
						<td class="tableSpace22_1  borderXO" name="lineBY10"></td><td class="tableSpace22_1 borderYO" name="lineBT12"></td>
					</tr>
					<tr>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT0"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT13"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT14"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT15"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT16"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT17"></td>
					</tr>
				</table>
				
				<!--3段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace25_2" rowspan="2"></td>
						<td class="tableSpace26 borderYO" name="lineBT0" rowspan="2"></td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal11['titl'] . '</td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal12['titl'] . '</td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal13['titl'] . '</td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal14['titl'] . '</td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal15['titl'] . '</td>
					</tr>
					<tr>
						<td class="tableSpace21"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal11['zoku'] . '<br>
							名前：' . $kakeiVal11['name'] . '<br>
							死亡日：' . $kakeiVal11['sibo'] . '<br>
							未成年：' . $kakeiVal11['mise'] . '
						</td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal12['zoku'] . '<br>
							名前：' . $kakeiVal12['name'] . '<br>
							死亡日：' . $kakeiVal12['sibo'] . '<br>
							未成年：' . $kakeiVal12['mise'] . '
						</td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal13['zoku'] . '<br>
							名前：' . $kakeiVal13['name'] . '<br>
							死亡日：' . $kakeiVal13['sibo'] . '<br>
							未成年：' . $kakeiVal13['mise'] . '
						</td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal14['zoku'] . '<br>
							名前：' . $kakeiVal14['name'] . '<br>
							死亡日：' . $kakeiVal14['sibo'] . '<br>
							未成年：' . $kakeiVal14['mise'] . '
						</td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal15['zoku'] . '<br>
							名前：' . $kakeiVal15['name'] . '<br>
							死亡日：' . $kakeiVal15['sibo'] . '<br>
							未成年：' . $kakeiVal15['mise'] . '
						</td>
					</tr>
				</table>
				
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace22_2"></td><td class="tableSpace22_1 borderXO borderYO" name="lineBT0" data-yoko="lineBY11"></td>
						<td class="tableSpace24 borderXO" name="lineBY11"></td>
						<td class="tableSpace22_1 borderXO" name="lineBY11"></td><td class="tableSpace22_1 borderXO" data-yoko="lineBY12"></td>
						<td class="tableSpace24 borderXO" name="lineBY12"></td>
						<td class="tableSpace22_1 borderXO" name="lineBY12"></td><td class="tableSpace22_1 borderXO" data-yoko="lineBY13"></td>
						<td class="tableSpace24 borderXO" name="lineBY13"></td>
						<td class="tableSpace22_1 borderXO" name="lineBY13"></td><td class="tableSpace22_1"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1"></td>
					</tr>
					<tr>
						<td class="tableSpace22_2"></td><td class="tableSpace22_1 borderYO" name="lineBT18"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT19"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT20"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1 borderYO" name="lineBT21"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1"></td>
						<td class="tableSpace24"></td>
						<td class="tableSpace22_1"></td><td class="tableSpace22_1"></td>
					</tr>
				</table>
					
				<!--4段目-->
				<table class="tablePositionCenter">
					<tr>
						<td class="tableSpace18 rightPos2">' . $kakeiVal16['titl'] . '</td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal17['titl'] . '</td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal18['titl'] . '</td>
						<td class="tableSpace19"></td>
						<td class="tableSpace18 rightPos2">' . $kakeiVal19['titl'] . '</td>
						<td class="tableSpace19"></td>
						<td class="tableSpace20_2" ></td>
						<td class="tableSpace19"></td>
						<td class="tableSpace20_2"></td>
					</tr>
					<tr>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal16['zoku'] . '<br>
							名前：' . $kakeiVal16['name'] . '<br>
							死亡日：' . $kakeiVal16['sibo'] . '<br>
							未成年：' . $kakeiVal16['mise'] . '
						</td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal17['zoku'] . '<br>
							名前：' . $kakeiVal17['name'] . '<br>
							死亡日：' . $kakeiVal17['sibo'] . '<br>
							未成年：' . $kakeiVal17['mise'] . '
						</td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal18['zoku'] . '<br>
							名前：' . $kakeiVal18['name'] . '<br>
							死亡日：' . $kakeiVal18['sibo'] . '<br>
							未成年：' . $kakeiVal18['mise'] . '
						</td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20 rightPos2">
							続柄：' . $kakeiVal19['zoku'] . '<br>
							名前：' . $kakeiVal19['name'] . '<br>
							死亡日：' . $kakeiVal19['sibo'] . '<br>
							未成年：' . $kakeiVal19['mise'] . '
						</td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20_1"></td>
						<td class="tableSpace21"></td>
						<td class="tableSpace20_1"></td>
					</tr>
				</table>
					
			</div>
		' );
	}
?>
			<div class="widthSizeSet">
				<h3>添付ファイル</h3>
				<p>①対象不動産の登記事項証明書（登記簿）</p>
				－＞<a href="<?php echo( 'images/' . $_FILES['img1']['name'] );?>"><?php echo( $_FILES['img1']['name'] );?></a>
				<p>②対象不動産の公図（地図に準ずる図面ともいいます）</p>
				－＞<a href="<?php echo( 'images/' . $_FILES['img6']['name'] );?>"><?php echo( $_FILES['img6']['name'] );?></a>
				
				<p>③今年度の固定資産納税通知書の課税明細書</p>
<?php
	if ( $_FILES['img2']['name'] != '' ) {
		echo( '－＞<a href="images/' . $_FILES['img6']['name'] . '">' . $_FILES['img2']['name'] . '</a>' );
	} else {
		echo( '<p>添付無し</p>' );
	}	
?>
				<p>④今年度の固定資産評価証明書</p>
				－＞<a href="<?php echo( 'images/' . $_FILES['img3']['name'] );?>"><?php echo( $_FILES['img3']['name'] );?></a>
				<p>⑤今年度の固定資産課税台帳（名寄帳ともいいます）の閲覧書</p>
				－＞<a href="<?php echo( 'images/' . $_FILES['img4']['name'] );?>"><?php echo( $_FILES['img4']['name'] );?></a>
				<p>⑥申込者の方の身分証明書</p>
				－＞<a href="<?php echo( 'images/' . $_FILES['img5']['name'] );?>"><?php echo( $_FILES['img5']['name'] );?></a>
			</div>
			<form action="sheet86.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="clickCheck" value="ture">
				<input type="hidden" name="kakeizuNumber" value="<?php echo($_POST['kakeizuNumber']);?>">
				<input type="hidden" name="fileID" value="<?php echo($_POST['fileID']);?>">
				<input type="hidden" name="nameFURI" value="<?php echo($_POST['nameFURI']);?>">
				<input type="hidden" name="nameKAN" value="<?php echo($_POST['nameKAN']);?>">
				<input type="hidden" name="nameFURI2" value="<?php echo($_POST['nameFURI2']);?>">
				<input type="hidden" name="nameKAN2" value="<?php echo($_POST['nameKAN2']);?>">
				<input type="hidden" name="nameZoku" value="<?php echo($_POST['nameZoku']);?>">
				<input type="hidden" name="iE" value="<?php echo($_POST['iE']);?>">
				<input type="hidden" name="niji" value="<?php echo($_POST['niji']);?>">
				<input type="hidden" name="nijiMoti11" value="<?php echo($_POST['nijiMoti11']);?>">
				<input type="hidden" name="nijiMoti12" value="<?php echo($_POST['nijiMoti12']);?>">
				<input type="hidden" name="niji2" value="<?php echo($_POST['niji2']);?>">
				<input type="hidden" name="nijiMoti21" value="<?php echo($_POST['nijiMoti21']);?>">
				<input type="hidden" name="nijiMoti22" value="<?php echo($_POST['nijiMoti22']);?>">
				<input type="hidden" name="niji3" value="<?php echo($_POST['niji3']);?>">
				<input type="hidden" name="nijiMoti31" value="<?php echo($_POST['nijiMoti31']);?>">
				<input type="hidden" name="nijiMoti32" value="<?php echo($_POST['nijiMoti32']);?>">
				<input type="hidden" name="niji4" value="<?php echo($_POST['niji4']);?>">
				<input type="hidden" name="nijiMoti41" value="<?php echo($_POST['nijiMoti41']);?>">
				<input type="hidden" name="nijiMoti42" value="<?php echo($_POST['nijiMoti42']);?>">
				<input type="hidden" name="sanji" value="<?php echo($_POST['sanji']);?>">
				<input type="hidden" name="sanjiMoti11" value="<?php echo($_POST['sanjiMoti11']);?>">
				<input type="hidden" name="sanjiMoti12" value="<?php echo($_POST['sanjiMoti12']);?>">
				<input type="hidden" name="sanji2" value="<?php echo($_POST['sanji2']);?>">
				<input type="hidden" name="sanjiMoti21" value="<?php echo($_POST['sanjiMoti21']);?>">
				<input type="hidden" name="sanjiMoti22" value="<?php echo($_POST['sanjiMoti22']);?>">
				<input type="hidden" name="sanji3" value="<?php echo($_POST['sanji3']);?>">
				<input type="hidden" name="sanjiMoti31" value="<?php echo($_POST['sanjiMoti31']);?>">
				<input type="hidden" name="sanjiMoti32" value="<?php echo($_POST['sanjiMoti32']);?>">
				<input type="hidden" name="sanji4" value="<?php echo($_POST['sanji4']);?>">
				<input type="hidden" name="sanjiMoti41" value="<?php echo($_POST['sanjiMoti41']);?>">
				<input type="hidden" name="sanjiMoti42" value="<?php echo($_POST['sanjiMoti42']);?>">
				<input type="hidden" name="okuriSaki" value="<?php echo( $okuriSaki  );?>">
				<input type="hidden" name="documentAdd" value="<?php echo($_POST['documentAdd']);?>">
				<input type="hidden" name="estateC2" value="<?php echo($_POST['estateC2']);?>">
				<input type="hidden" name="fudousanAdd" value="<?php echo($fudousanAdd);?>">
				<input type="hidden" name="tel" value="<?php echo($_POST['tel']);?>">
				<input type="hidden" name="email" value="<?php echo($_POST['email']);?>">
				<input type="hidden" name="place" value="<?php echo($place);?>">
				<input type="hidden" name="lost" value="<?php echo($_POST['lost']);?>">
				<input type="hidden" name="jsonLine" value="<?php echo($_POST['jsonLine']);?>">
				<input type="hidden" name="jsonLineY" value="<?php echo($_POST['jsonLineY']);?>">
				<input type="hidden" name="img1URL" value="<?php echo( 'images/' . $_FILES['img1']['name'] );?>">
				<input type="hidden" name="img2URL" value="<?php echo( 'images/' . $_FILES['img2']['name'] );?>">
				<input type="hidden" name="img3URL" value="<?php echo( 'images/' . $_FILES['img3']['name'] );?>">
				<input type="hidden" name="img4URL" value="<?php echo( 'images/' . $_FILES['img4']['name'] );?>">
				<input type="hidden" name="img5URL" value="<?php echo( 'images/' . $_FILES['img5']['name'] );?>">
				<input type="hidden" name="img6URL" value="<?php echo( 'images/' . $_FILES['img6']['name'] );?>">
                <input type="submit" class="submitButton" value="上記の内容で申し込む">
				<input type="button" class="submitButton" name="kakeiReturn" value="戻る">
				
			</form>
		</div><!--end content-->
	</div><!--end container-->
</div><!--end containerWrap-->
</body>
</html>