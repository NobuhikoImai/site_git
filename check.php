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
<link rel="stylesheet" href="css/table.css" media="all" />
<link rel="stylesheet" href="css/layout.css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/system.js"></script>
<body id="top">
<?php
//***** データベース情報取得 *****
	require_once( 'lib/setup.php' );
	$db_connect->set_charset( 'utf8' );
	
	if ( isset( $_GET['id'] ) && $_GET['id'] != '' ) {
		$stmt = $db_connect->prepare( "SELECT * FROM wp_app WHERE id = " . $_GET['id']. ";" );
		$stmt->execute();
		$val =$stmt->get_result();
		$result = $val->fetch_array();
		$stmt->close();
		
		echo("<pre>");
		print_r($result);
		echo("</pre>");
		
		
		//***** 家系図データ構成 *****
		$LineVal1 = json_decode( $result['17'], true );
		$LineVal2 = json_decode( $result['18'], true );
		$kakeiVal1 = json_decode( $result['19'], true );
		$kakeiVal2 = json_decode( $result['20'], true );
		$kakeiVal3 = json_decode( $result['21'], true );
		$kakeiVal4 = json_decode( $result['22'], true );
		$kakeiVal5 = json_decode( $result['23'], true );
		$kakeiVal6 = json_decode( $result['24'], true );
		$kakeiVal7 = json_decode( $result['25'], true );
		$kakeiVal8 = json_decode( $result['26'], true );
		$kakeiVal9 = json_decode( $result['27'], true );
		$kakeiVal10 = json_decode( $result['28'], true );
		$kakeiVal11 = json_decode( $result['29'], true );
		$kakeiVal12 = json_decode( $result['30'], true );
		$kakeiVal13 = json_decode( $result['31'], true );
		$kakeiVal14 = json_decode( $result['32'], true );
		$kakeiVal15 = json_decode( $result['33'], true );
		$kakeiVal16 = json_decode( $result['34'], true );
		$kakeiVal17 = json_decode( $result['35'], true );
		$kakeiVal18 = json_decode( $result['36'], true );
		$kakeiVal19 = json_decode( $result['37'], true );
	} else {
		echo("データが存在しません");
	}
?>
<div id="containerWrap">
	<header>
	</header>
	<div id="container">
		<div id="content">
			<div style="width:960px;height: 30px;background-color: aliceblue;">幅見本960px</div>
			<h3>お申込者様 入力内容</h3>
			<table>
				<tr>
					<td class="form8L2">委託者</td>
					<td class="form8R2">
						<?php echo( $result['2'] . '（' . $result['3']  . '）' );?>
					</td>
				</tr>
				<tr>
					<td class="form8L2">受託者</td>
					<td class="form8R2">
						<?php echo( $result['4'] . '（' . $result['5']  . '）' );?>＜続柄：<?php echo( $result['6'] );?>＞
					</td>
				</tr>
<?php
	$resultNiji = unserialize( $result['8'] );
	if ( $resultNiji[0] != '' ) {
		$nijiVal = $resultNiji[0];
		$nijiMoti11 = $resultNiji[1];
		$nijiMoti12 = $resultNiji[2];
	} else {
		$nijiVal = '－';
		$nijiMoti11 =  '－';
		$nijiMoti12 =  '－';
	}
	if ( $resultNiji[3] != '' ) {
		$nijiVal2 = $resultNiji[3];
		$nijiMoti21 = $resultNiji[4];
		$nijiMoti22 = $resultNiji[5];
	} else {
		$nijiVal2 = '－';
		$nijiMoti21 =  '－';
		$nijiMoti22 =  '－';
	}
	if ( $resultNiji[6] != '' ) {
		$nijiVal3 = $resultNiji[6];
		$nijiMoti31 = $resultNiji[7];
		$nijiMoti32 = $resultNiji[8];
	} else {
		$nijiVal3 = '－';
		$nijiMoti31 =  '－';
		$nijiMoti32 =  '－';
	}
	if ( $resultNiji[9] != '' ) {
		$nijiVal4 = $resultNiji[9];
		$nijiMoti41 = $resultNiji[10];
		$nijiMoti42 = $resultNiji[11];
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
	$resultSanji = unserialize( $result['9'] );
	if ( $resultSanji[0] != '' ) {
		$sanjiVal =  $resultSanji[0];
		$sanjiMoti11 = $resultSanji[1];
		$sanjiMoti12 = $resultSanji[2];
	} else {
		$sanjiVal = '－';
		$sanjiMoti11 = '－';
		$sanjiMoti12 = '－';
	}
	if ( $resultSanji[3] != '' ) {
		$sanjiVal2 = $resultSanji[3];
		$sanjiMoti21 = $resultSanji[4];
		$sanjiMoti22 = $resultSanji[5];
	} else {
		$sanjiVal2 = '－';
		$sanjiMoti21 = '－';
		$sanjiMoti22 = '－';
	}
	if ( $resultSanji[6] != '' ) {
		$sanjiVal3 = $resultSanji[6];
		$sanjiMoti31 = $resultSanji[7];
		$sanjiMoti32 = $resultSanji[8];
	} else {
		$sanjiVal3 = '－';
		$sanjiMoti31 = '－';
		$sanjiMoti32 = '－';
	}
	if ( $resultSanji[9] != '' ) {
		$sanjiVal4 = $resultSanji[9];
		$sanjiMoti41 = $resultSanji[10];
		$sanjiMoti42 = $resultSanji[11];
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
?>
				<tr>
					<td class="form8L2">郵送先</td>
					<td class="form8R2">
						<?php echo( $result['12']  );?>
					</td>
				</tr>
				<tr>
					<td class="form8L2">書類郵送先住所</td>
					<td class="form8R2">
						<?php echo( $result['10']  );?>
					</td>
				</tr>
<?php
	if ( $result['11'] != "yes" ) {
		$fudouAdd = "";
	} else {
		$fudouAdd = "上記住所と同じ";
	}
?>
				<tr>
					<td class="form8L2">不動産住所</td>
					<td class="form8R2">
						<?php echo( $fudouAdd );?>
					</td>
				</tr>
				<tr>
					<td class="form8L2">電話番号</td>
					<td class="form8R2">
						<?php echo( $result['13'] );?>
					</td>
				</tr>
				<tr>
					<td class="form8L2">メールアドレス</td>
					<td class="form8R2">
						<?php echo( $result['14'] );?>
					</td>
				</tr>
				<tr>
					<td class="form8L2">面談場所</td>
					<td class="form8R2">
						<?php echo( $result['44'] );?>
					</td>
				</tr>
<?php
	if ( $result['15'] == "1" ) {
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
	if ( $result['16'] == "1" ) {
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
	} else if ( $result['16'] == "2" ) {
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
	} else if ( $result['16'] == "3" ) {
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
	} else if ( $result['16'] == "4" ) {
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
				<p><a href="<?php echo( $result['38'] );?>">①対象不動産の登記事項証明書（登記簿）</a></p>
				<p><a href="<?php echo( $result['43'] );?>">②対象不動産の公図（地図に準ずる図面ともいいます）</a></p>
				<p><a href="<?php echo( $result['39'] );?>">③今年度の固定資産納税通知書の課税明細書</a></p>
				<p><a href="<?php echo( $result['40'] );?>">④今年度の固定資産評価証明書</a></p>
				<p><a href="<?php echo( $result['41'] );?>">⑤今年度の固定資産課税台帳（名寄帳ともいいます）の閲覧書</a></p>
				<p><a href="<?php echo( $result['42'] );?>">⑥申込者の方の身分証明書</a></p>
			</div>
		</div><!--end content-->
	</div><!--end container-->
</div><!--end containerWrap-->
</body>
</html>