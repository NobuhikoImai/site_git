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
<script src="js/script.js"></script>
<script src="js/jquery.activity-indicator-1.0.0.min.js"></script>
<body id="top">
<div id="loading"></div>
<div id="main-contents">
<div id="containerWrap">
<?php
//***** リファラー *****
$requestCut = explode( '/', $_SERVER['HTTP_REFERER'] );
$requestCount = count( $requestCut ) - 1;

//***** データ復帰 (一部再読み込み用)*****
if ( isset( $_POST['sheetNumber']) && $_POST['sheetNumber'] != '' || $requestCut[$requestCount] == "sheet85.php" ) {
	$kakeizuMaster = $_POST['sheetNumber'];
	$nameFuri = str_replace( '"', '', $_COOKIE['nameFURI'] );
	$nameKanj = str_replace( '"', '', $_COOKIE['nameKAN'] );
	$nameFuri2 = str_replace( '"', '', $_COOKIE['nameFURI2'] );
	$nameKanj2 = str_replace( '"', '', $_COOKIE['nameKAN2'] );
	$nameZoku = str_replace( '"', '', $_COOKIE['nameZoku'] );
	if ( isset( $_COOKIE['ie'] ) ) {
		$ie = str_replace( '"', '', $_COOKIE['ie'] );
		switch ( $ie ) {
		case "1":
			$ieChecked = "checked";
			$ieChecked2 = "";
			break;
		case "2":
			$ieChecked = "";
			$ieChecked2 = "checked";
			break;
		}
		echo( '<script>$(function(){$("[name=\'iE\']").val( "' . $ie . '" );});</script>' );
	}
	$nameNiji = str_replace( '"', '', $_COOKIE['niji'] );
	$nijiMoti11 = str_replace( '"', '', $_COOKIE['nijiMoti11'] );
	$nijiMoti12 = str_replace( '"', '', $_COOKIE['nijiMoti12'] );
	$nameNiji2 = str_replace( '"', '', $_COOKIE['niji2'] );
	$nijiMoti21 = str_replace( '"', '', $_COOKIE['nijiMoti21'] );
	$nijiMoti22 = str_replace( '"', '', $_COOKIE['nijiMoti22'] );
	$nameNiji3 = str_replace( '"', '', $_COOKIE['niji3'] );
	$nijiMoti31 = str_replace( '"', '', $_COOKIE['nijiMoti31'] );
	$nijiMoti32 = str_replace( '"', '', $_COOKIE['nijiMoti32'] );
	$nameNiji4 = str_replace( '"', '', $_COOKIE['niji4'] );
	$nijiMoti41 = str_replace( '"', '', $_COOKIE['nijiMoti41'] );
	$nijiMoti42 = str_replace( '"', '', $_COOKIE['nijiMoti42'] );
	$nameSanji = str_replace( '"', '', $_COOKIE['sanji'] );
	$sanjiMoti11 = str_replace( '"', '', $_COOKIE['sanjiMoti11'] );
	$sanjiMoti12 = str_replace( '"', '', $_COOKIE['sanjiMoti12'] );
	$nameSanji2 = str_replace( '"', '', $_COOKIE['sanji2'] );
	$sanjiMoti21 = str_replace( '"', '', $_COOKIE['sanjiMoti21'] );
	$sanjiMoti22 = str_replace( '"', '', $_COOKIE['sanjiMoti22'] );
	$nameSanji3 = str_replace( '"', '', $_COOKIE['sanji3'] );
	$sanjiMoti31 = str_replace( '"', '', $_COOKIE['sanjiMoti31'] );
	$sanjiMoti32 = str_replace( '"', '', $_COOKIE['sanjiMoti32'] );
	$nameSanji4 = str_replace( '"', '', $_COOKIE['sanji4'] );
	$sanjiMoti41 = str_replace( '"', '', $_COOKIE['sanjiMoti41'] );
	$sanjiMoti42 = str_replace( '"', '', $_COOKIE['sanjiMoti42'] );
	$documentAdd = str_replace( '"', '', $_COOKIE['documentAdd'] );
	if ( isset( $_COOKIE['estateC2'] ) ) {
		$estateC2 = str_replace( '"', '', $_COOKIE['estateC2'] );
		if ( $estateC2 == "yes") {
			echo( '<script>$(function(){$("[name=\'estateC2\']").attr("checked",true);});</script>' );
		}
	}
	$tel = str_replace( '"', '', $_COOKIE['tel'] );
	$email = str_replace( '"', '', $_COOKIE['email'] );
	if ( isset( $_COOKIE['place'] ) ) {
		$place = str_replace( '"', '', $_COOKIE['place'] );
		switch ( $place ) {
		case "1":
			$placeChecked = "checked";
			$placeChecked2 = "";
			break;
		case "2":
			$placeChecked = "";
			$placeChecked2 = "checked";
			break;
		}
	}
	$lost = str_replace( '"', '', $_COOKIE['lost'] );
	if ( $lost == "1" ) {
		echo( '<script>$(function(){$("[name=\'lost\']").attr("checked",true);});</script>' );
	}
	$jsonLine = $_POST['jsonLine'];
	$jsonLineY = $_POST['jsonLineY'];
	
	//***** リファラーより分け *****
	if ( $requestCut[$requestCount] == "sheet85.php" ) {
		if ( isset( $_COOKIE['sheetNUM'] ) ) {
			$kakeizuNum = str_replace( '"', '', $_COOKIE['sheetNUM'] );
			$kakeizu = "#kakeizu" . $kakeizuNum;
			echo( '
				<script>
					$(function(){
						$( "' . $kakeizu . '" ).addClass( "kakeizuColor" );
						$( "[name=\'kakeizuNumber\']" ).val( "' . $kakeizuNum . '" );
					});
				</script>
			' );
		}
	} else {
		$kakeizu = "#kakeizu" . $_POST['sheetNumber'];
		
		if(isset($_POST['jsonLine'])){$jsonLine = $_POST['jsonLine'];}else{$jsonLine='';}
		if(isset($_POST['jsonLineY'])){$jsonLineY = $_POST['jsonLineY'];}else{$jsonLineY='';}
		if(isset($_POST['kakeiData7'])){$kakeiData7 = $_POST['kakeiData7'];}else{$kakeiData7='';}
		if(isset($_POST['kakeiData8'])){$kakeiData8 = $_POST['kakeiData8'];}else{$kakeiData8='';}
		if(isset($_POST['kakeiData9'])){$kakeiData9 = $_POST['kakeiData9'];}else{$kakeiData9='';}
		if(isset($_POST['kakeiData10'])){$kakeiData10 = $_POST['kakeiData10'];}else{$kakeiData10='';}
		if(isset($_POST['kakeiData11'])){$kakeiData11 = $_POST['kakeiData11'];}else{$kakeiData11='';}
		if(isset($_POST['kakeiData12'])){$kakeiData12 = $_POST['kakeiData12'];}else{$kakeiData12='';}
		if(isset($_POST['kakeiData13'])){$kakeiData13 = $_POST['kakeiData13'];}else{$kakeiData13='';}
		if(isset($_POST['kakeiData14'])){$kakeiData14 = $_POST['kakeiData14'];}else{$kakeiData14='';}
		if(isset($_POST['kakeiData15'])){$kakeiData15 = $_POST['kakeiData15'];}else{$kakeiData15='';}
		if(isset($_POST['kakeiData16'])){$kakeiData16 = $_POST['kakeiData16'];}else{$kakeiData16='';}
		if(isset($_POST['kakeiData17'])){$kakeiData17 = $_POST['kakeiData17'];}else{$kakeiData17='';}
		if(isset($_POST['kakeiData18'])){$kakeiData18 = $_POST['kakeiData18'];}else{$kakeiData18='';}
		if(isset($_POST['kakeiData19'])){$kakeiData19 = $_POST['kakeiData19'];}else{$kakeiData19='';}
		echo( '
			<script>
				$(function(){
					$( "' . $kakeizu . '" ).addClass( "kakeizuColor" );
					$.cookie.json = true;
					$.cookie( "sheetNUM", "' . $_POST['sheetNumber'] . '" );
					$.cookie( "jsonLine", ' . $jsonLine . ' );
					$.cookie( "jsonLineY", ' . $jsonLineY . ' );
					$.cookie( "kakeiData1", ' . $_POST['kakeiData1'] . ' );
					$.cookie( "kakeiData2", ' . $_POST['kakeiData2'] . ' );
					$.cookie( "kakeiData3", ' . $_POST['kakeiData3'] . ' );
					$.cookie( "kakeiData4", ' . $_POST['kakeiData4'] . ' );
					$.cookie( "kakeiData5", ' . $_POST['kakeiData5'] . ' );
					$.cookie( "kakeiData6", ' . $_POST['kakeiData6'] . ' );
					$.cookie( "kakeiData7", ' . $kakeiData7 . ' );
					$.cookie( "kakeiData8", ' . $kakeiData8 . ' );
					$.cookie( "kakeiData9", ' . $kakeiData9 . ' );
					$.cookie( "kakeiData10", ' . $kakeiData10 . ' );
					$.cookie( "kakeiData11", ' . $kakeiData11 . ' );
					$.cookie( "kakeiData12", ' . $kakeiData12 . ' );
					$.cookie( "kakeiData13", ' . $kakeiData13 . ' );
					$.cookie( "kakeiData14", ' . $kakeiData14 . ' );
					$.cookie( "kakeiData15", ' . $kakeiData15 . ' );
					$.cookie( "kakeiData16", ' . $kakeiData16 . ' );
					$.cookie( "kakeiData17", ' . $kakeiData17 . ' );
					$.cookie( "kakeiData18", ' . $kakeiData18 . ' );
					$.cookie( "kakeiData19", ' . $kakeiData19 . ' );
				});
			</script>
		' );
	}
} else if ( $requestCut[$requestCount] != "sheet7.php" ) {
	echo( '
		<script>
			location.href = "sheet5.php";
		</script>
	' );
}
?>
	<header>
    <h1 class="logo"><img src="images/logo.png"></h1>
	</header>
	<div id="container">
		<div id="content">
			<form action="" method="post" id="S80action" enctype="multipart/form-data">
				<h2>お申込みフォーム</h2>
				<p class="fontRed">※すべて必須項目です</p>
                <h3>委託者（実家所有者）</h3>
				<table class="shindanTable">
					<tr>
						<td colspan="2">
							<b>委託者（実家所有者）</b>
						</td>
					</tr>
					<tr>
						<td class="form8L">
							ふりがな<span class="supT">※</span>
						</td>
						<td class="form8R">
							<input type="text" size="40" name="nameFURI" value="<?php echo( $nameFuri );?>">
						</td>
					</tr>
					<tr>
						<td class="form8L">
							名前<span class="supT">※</span>
						</td>
						<td class="form8R">
							<input type="text" size="40" name="nameKAN" value="<?php echo( $nameKanj );?>">
						</td>
					</tr>
					</table>
                    <h3>受託者（不動産を管理する方）</h3>
				<table class="shindanTable">
					<tr>
						<td class="form8L">
							ふりがな<span class="supT">※</span>
						</td>
						<td class="form8R">
							<input type="text" size="40" name="nameFURI2" value="<?php echo( $nameFuri2 );?>">
						</td>
					</tr>
					<tr>
						<td class="form8L">
							名前<span class="supT">※</span>
						</td>
						<td class="form8R">
							<input type="text" size="40" name="nameKAN2" value="<?php echo( $nameKanj2 );?>"><br>
                            関係性：委託者（実家所有者）から見て＜続柄：<input type="text" size="10" name="nameZoku" value="<?php echo( $nameZoku );?>">＞にあたります
						</td>
					</tr>
					
					</tr>
                    </table>
                    <h3>二次受益者（：実家所有者がお亡くなりになった後、受益権を引き継ぐ方）の氏名<br>
                    （なお、受益権とは、実家を貸した時に賃料を受け取ったり、実家を売却した時に売却代金を受け取ったりする等、不動産からの利益を受ける権利をいいます。）</h3>
				<table class="shindanTable">
					<tr>
						<td class="form8L"></td>
						<td class="form8R">
							氏名　<input type="text" size="40" name="niji" value="<?php echo( $nameNiji );?>">（持分<input type="text" size="5" name="nijiMoti11" value="<?php echo( $nijiMoti11 );?>">分の<input type="text" size="5" name="nijiMoti12" value="<?php echo( $nijiMoti12 );?>">）
						</td>
					</tr>
					</table>
                    ※二次受益者に複数名ご指定する場合は、下記もご入力ください<br>
	２人目以降の二次受益者
                    <table class="shindanTable">
					<tr>
						<td class="form8L"></td>
						<td class="form8R">
							２人目氏名　<input type="text" size="20" name="niji2" value="<?php echo( $nameNiji2 );?>">（持分<input type="text" size="5" name="nijiMoti21" value="<?php echo( $nijiMoti21 );?>">分の<input type="text" size="5" name="nijiMoti22" value="<?php echo( $nijiMoti22 );?>">）
						</td>
					</tr>
					<tr>
						<td class="form8L"></td>
						<td class="form8R">
							３人目氏名　<input type="text" size="20" name="niji3" value="<?php echo( $nameNiji3 );?>">（持分<input type="text" size="5" name="nijiMoti31" value="<?php echo( $nijiMoti31 );?>">分の<input type="text" size="5" name="nijiMoti32" value="<?php echo( $nijiMoti32 );?>">）
						</td>
					</tr>
					<tr>
						<td class="form8L"></td>
						<td class="form8R">
							４人目氏名　<input type="text" size="20" name="niji4" value="<?php echo( $nameNiji4 );?>">（持分<input type="text" size="5" name="nijiMoti41" value="<?php echo( $nijiMoti41 );?>">分の<input type="text" size="5" name="nijiMoti42" value="<?php echo( $nijiMoti42 );?>">）
						</td>
					</tr>
					</table>
                    <span style="padding-left:1em;">下記は<strong>二次受益者</strong>が、実家所有者の<strong>配偶者のみ</strong>の場合ご記入ください</span><br>
	・三次受益者（：二次受益者がお亡くなりになった後、不動産から受ける利益を引き継ぐ方）の氏名
                    <table class="shindanTable">
					<tr>
						<td class="form8L"></td>
						<td class="form8R">
							氏名　<input type="text" size="40" name="sanji" value="<?php echo( $nameSanji );?>" placeholder="※上記の二次受益者が、実家所有者の配偶者のみの場合">（持分<input type="text" size="5" name="sanjiMoti11" value="<?php echo( $sanjiMoti11 );?>">分の<input type="text" size="5" name="sanjiMoti12" value="<?php echo( $sanjiMoti12 );?>">）
						</td>
					</tr>
					<tr>
						<td class="form8L"></td>
						<td class="form8R">
							※三次受益者に複数名ご指定する場合は、下記もご入力ください<br>
							２人目以降の三次受益者
						</td>
					</tr>
					<tr>
						<td class="form8L"></td>
						<td class="form8R">
							２人目氏名　<input type="text" size="20" name="sanji2" value="<?php echo( $nameSanji2 );?>">（持分<input type="text" size="5" name="sanjiMoti21" value="<?php echo( $sanjiMoti21 );?>">分の<input type="text" size="5" name="sanjiMoti22" value="<?php echo( $sanjiMoti22 );?>">）
						</td>
					</tr>
					<tr>
						<td class="form8L"></td>
						<td class="form8R">
							３人目氏名　<input type="text" size="20" name="sanji3" value="<?php echo( $nameSanji3 );?>">（持分<input type="text" size="5" name="sanjiMoti31" value="<?php echo( $sanjiMoti31 );?>">分の<input type="text" size="5" name="sanjiMoti32" value="<?php echo( $sanjiMoti32 );?>">）
						</td>
					</tr>
					<tr>
						<td class="form8L"></td>
						<td class="form8R">
							４人目氏名　<input type="text" size="20" name="sanji4" value="<?php echo( $nameSanji4 );?>">（持分<input type="text" size="5" name="sanjiMoti41" value="<?php echo( $sanjiMoti41 );?>">分の<input type="text" size="5" name="sanjiMoti42" value="<?php echo( $sanjiMoti42 );?>">）
						</td>
					</tr>
					
                    </table>
                    <h3>申込み後、弊所よりご捺印いただく書類等を郵送いたします。郵送先について以下ご入力ください</h3>
                    <table class="shindanTable">
					<tr>
						<td class="form8L">
							郵送先<span class="supT">※</span>
						</td>
						<td class="form8R">
							<input type="hidden" name="iE" value="<?php echo( $ie );?>">
							<input type="radio" name="ie" data-ie="1" value="1" <?php echo( $ieChecked ); ?>>委託者（実家所有者）宛　<input type="radio" name="ie" data-ie="2" value="2" <?php echo( $ieChecked2 ); ?>>受託者（不動産を管理する方）宛
						</td>
					</tr>
					<tr>
						<td class="form8L">
							書類郵送先住所<span class="supT">※</span>
						</td>
						<td class="form8R">
							<input type="text" size="80" name="documentAdd" value="<?php echo( $documentAdd );?>" placeholder="例：〒100-0005 東京都千代田区丸の内〇〇〇">
						</td>
					</tr>
					<tr>
						<td class="form8L" colspan="2">
							実家信託パック対象の不動産の住所（<input type="checkbox" name="estateC2" value="<?php echo( $estateC2 );?>">上記住所と同じ)
						</td>
					</tr>
					<tr>
						<td class="form8L">
							連絡窓口になる方の電話番号<span class="supT">※</span>(日中連絡のつく電話番号)
						</td>
                        <td class="form8R">
							<input type="text" size="40" name="tel" value="<?php echo( $tel );?>">
						</td>
					</tr>
					<tr>
						<td class="form8L">
							連絡窓口になる方のメールアドレス<span class="supT">※</span>
						</td>
                        <td class="form8R">
							<input type="text" size="40" name="email" value="<?php echo( $email );?>">
						</td>
					</tr>
                    <tr>
                    <td class="form8L">
							面談場所<br>
                            お手続きには、司法書士による本人確認が必要です
						</td>
                        <td class="form8R">
							<input type="radio" name="place" value="1" <?php echo($placeChecked); ?>>弊所本店（東京丸の内）にて本人確認を希望<br><br>
                            <input type="radio" name="place" value="2" <?php echo($placeChecked2); ?>>出張を希望（別途出張費用）<br>
                            ※遠方にお住まい等で、弊所本店にお越しになれない場合は出張承ります（別途お見積りさせていただきます）</td>
                    </table>
                    <div class="kakunin">
					<input type="checkbox" class="buttonBig" name="lost" value="<?php echo( $lost );?>">
							対象不動産の登記権利証（登記識別情報通知）を紛失・不通知・失効しているかたはこちらをクリック<br>※この場合、司法書士による本人確認情報の作成が必要になりますので別途報酬１０万円かかります。
	</div>
				<table class="border">
					<tr>
						<td class="tableT8" colspan="4">
							家系図入力（※下記当てはまる方をクリックし、ご入力ください）
						</td>
                        </tr>
					<tr>
						<td class="tableL8" id="kakeizu1">
							<a href="sheet81.php">実家所有者の親はすべて死亡している場合</a>
						</td>
						<td class="tableL8" id="kakeizu2">
							<a href="sheet82.php">実家所有者の親が１名でも生存している場合</a>
						</td>
						<td class="tableL8" id="kakeizu3">
							<a href="sheet83.php">実家所有者に離婚歴があり、元配偶者との間に子がいる場合</a>
						</td>
						<td class="tableR8" id="kakeizu4">
							<a href="sheet84.php">どのケースにも当てはまらない場合</a>
						</td>
					</tr>
				</table>
				<p>【以下の書類を添付してください】<br>※ファイル名には分かり易いように、お客様の名前を含んだファイル名を指定してください。<br><span style="padding-left:1em;">例→【東京太郎】登記事項証明書.pdf</span></p>
				<table class="border">
					<tr>
						<td class="tableT82L">
							添付済み
						</td>
						<td class="tableT82C">
							ご用意いただく書類
						</td>
						<td class="tableT82R">
							備考
						</td>
					</tr>
					<tr>
						<td class="tableT82L tableCenter">
							<input type="checkbox" name="n1">
						</td>
						<td class="tableT82C">
							①対象不動産の登記事項証明書（登記簿）<br><input type="file" name="img1">
						</td>
						<td class="tableT82R" rowspan="2">
							お近くの法務局で取得願います（窓口・郵送）<br>
							取得方法につきましては<a href="">Q＆A</a>をご参照ください。
						</td>
					</tr>
					<tr>
						<td class="tableT82L tableCenter">
							<input type="checkbox" name="n6">
						</td>
						<td class="tableT82C">
							②対象不動産の公図（地図に準ずる図面ともいいます）<br><input type="file" name="img6">
						</td>
					</tr>
					<tr>
						<td class="tableT82L tableCenter">
							<input type="checkbox" name="n2">
						</td>
						<td class="tableT82C">
							③今年度の固定資産納税通知書の課税明細書<br><input type="file" name="img2">
						</td>
						<td class="tableT82R">
							紛失している場合は添付不要
						</td>
					</tr>
					<tr>
						<td class="tableT82L tableCenter">
							<input type="checkbox" name="n3">
						</td>
						<td class="tableT82C">
							④今年度の固定資産評価証明書<br><input type="file" name="img3">
						</td>
						<td class="tableT82R" rowspan="2">
							管轄の市区町村役場、都税事務所で取得願います(窓口・郵送)<br>
							取得方法につきましては<a href="">Q＆A</a>をご参照ください。
						</td>
					</tr>
					<tr>
						<td class="tableT82L tableCenter">
							<input type="checkbox" name="n4">
						</td>
						<td class="tableT82C">
							⑤今年度の固定資産課税台帳（名寄帳ともいいます）の閲覧書<br><input type="file" name="img4">
						</td>
					</tr>
					<tr>
						<td class="tableT83L tableCenter">
							<input type="checkbox" name="n5">
						</td>
						<td class="tableT83C">
							⑥申込者の方の身分証明書<br><input type="file" name="img5">
						</td>
						<td class="tableT83R">
						</td>
					</tr>
				</table>
				
				<p>なお、場合によっては別途書類の追加取得をお願いすることがございます。あらかじめご了承ください。<br>ご不明点等ございましたら、お気軽に上記「お問い合わせフォーム」よりご連絡ください</p>
				<input type="hidden" name="kakeizuNumber" value="<?php echo( $kakeizuMaster ); ?>">
				<input type="hidden" name="jsonLine" value="<?php echo( $jsonLine ); ?>">
				<input type="hidden" name="jsonLineY" value="<?php echo( $jsonLineY ); ?>">
				<input type="hidden" name="nextValue">
				<input type="submit" class="submitButton" id="S80submit" value="入力確認">
			</form>
		</div><!--end content-->
	</div><!--end container-->
</div><!--end containerWrap-->
</div><!--end main-contents-->
</body>
</html>