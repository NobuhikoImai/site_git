function relodeS5() {
	for ( var i = 1; i <= 11; i++ ) {
		$( "[name='n" + i + "']" ).attr( "checked", false );
	}
}
$(function() {
	var num1, num2, num3, num4, num5, num6, num7, num8, num9, num10, num11 = 0;
	$( "[name^='n']" ).change( function () {
		$( this ).toggleClass( "active" );
		if ( $( "[name='n1']" ).hasClass( "active" ) ) { num1 = 1; } else { num1 = 0; }
		if ( $( "[name='n2']" ).hasClass( "active" ) ) { num2 = 1; } else { num2 = 0; }
		if ( $( "[name='n3']" ).hasClass( "active" ) ) { num3 = 1; } else { num3 = 0; }
		if ( $( "[name='n4']" ).hasClass( "active" ) ) { num4 = 1; } else { num4 = 0; }
		if ( $( "[name='n5']" ).hasClass( "active" ) ) { num5 = 1; } else { num5 = 0; }
		if ( $( "[name='n6']" ).hasClass( "active" ) ) { num6 = 1; } else { num6 = 0; }
		if ( $( "[name='n7']" ).hasClass( "active" ) ) { num7 = 1; } else { num7 = 0; }
		if ( $( "[name='n8']" ).hasClass( "active" ) ) { num8 = 1; } else { num8 = 0; }
		if ( $( "[name='n9']" ).hasClass( "active" ) ) { num9 = 1; } else { num9 = 0; }
		if ( $( "[name='n10']" ).hasClass( "active" ) ) { num10 = 1; } else { num10 = 0; }
		if ( $( "[name='n11']" ).hasClass( "active" ) ) { num11 = 1; } else { num11 = 0; }
		var numTotal = num1 + num2 + num3 + num4 + num5 + num6 + num7 + num8 + num9 + num10 + num11;
		$( "[name='numFin']" ).val( numTotal );
		if ( numTotal == 11 ) {
			$( "[name='linkURL']" ).attr( "action", "sheet7.php" );
		} else {
			$( "[name='linkURL']" ).attr( "action", "sheet6.php" );
		}
	});
	//sheet8js
	$( "[name='img1']" ).change( function () {
		var file = this.files[0];
		if ( file != null ) {
			$( "[name='n1']" ).attr( "checked", true );
			$( "[name='n1']" ).val( "1" );
			$( "[name='n1']" ).attr( "disabled","disabled" );
		}
	});
	$( "[name='img2']" ).change( function () {
		var file = this.files[0];
		if ( file != null ) {
			$( "[name='n2']" ).attr( "checked", true );
			$( "[name='n2']" ).val( "1" );
			$( "[name='n2']" ).attr( "disabled","disabled" );
		}
	});
	$( "[name='img3']" ).change( function () {
		var file = this.files[0];
		if ( file != null ) {
			$( "[name='n3']" ).attr( "checked", true );
			$( "[name='n3']" ).val( "1" );
			$( "[name='n3']" ).attr( "disabled","disabled" );
		}
	});
	$( "[name='img4']" ).change( function () {
		var file = this.files[0];
		if ( file != null ) {
			$( "[name='n4']" ).attr( "checked", true );
			$( "[name='n4']" ).val( "1" );
			$( "[name='n4']" ).attr( "disabled","disabled" );
		}
	});
	$( "[name='img5']" ).change( function () {
		var file = this.files[0];
		if ( file != null ) {
			$( "[name='n5']" ).attr( "checked", true );
			$( "[name='n5']" ).val( "1" );
			$( "[name='n5']" ).attr( "disabled","disabled" );
		}
	});
	$( "[name='img6']" ).change( function () {
		var file = this.files[0];
		if ( file != null ) {
			$( "[name='n6']" ).attr( "checked", true );
			$( "[name='n6']" ).val( "1" );
			$( "[name='n6']" ).attr( "disabled","disabled" );
		}
	});
	var h = $(window).height();
	$('#loader-bg ,#loader').css('display','none');
	$( "#S80submit" ).click( function () {
		if ( $( "[name='nameFURI']" ).val() != '' && $( "[name='nameKAN']" ).val() != '' && $( "[name='nameFURI2']" ).val() != '' && $( "[name='nameKAN2']" ).val() != '' && $( "[name='nameZoku']" ).val() != '' && $( "[name='iE']" ).val() != '' && $( "[name='documentAdd']" ).val() != '' && $( "[name='tel']" ).val() != '' && $( "[name='email']" ).val() != '' && $( "[name='n1']" ).val() == "1" && $( "[name='n6']" ).val() == "1" && $( "[name='n3']" ).val() == "1" && $( "[name='n4']" ).val() == "1" && $( "[name='n5']" ).val() == "1" && $( "[name='kakeizuNumber']" ).val() != '' ) {
			$('#loader-bg ,#loader').height(h).css('display','block');
			$('#loader-bg').fadeOut(1800);
			$('#loader').fadeOut(1300);
			$('#main-contents').css('display', 'block');
			$('#loading').activity();
			$('#loading').css( {"position":"fixed"} );
			$( "#S80action" ).attr( "action", "sheet85.php" );
		} else {
			var errMes = '';
			if ( $( "[name='nameFURI']" ).val() == '' ) {
				errMes = errMes + '＜ふりがな（委託者）＞\n';
			}
			if ( $( "[name='nameKAN']" ).val() == '' ) {
				errMes = errMes + '＜名前（委託者）＞\n';
			}
			if ( $( "[name='nameFURI2']" ).val() == '' ) {
				errMes = errMes + '＜ふりがな（受託者）＞\n';
			}
			if ( $( "[name='nameKAN2']" ).val() == '' ) {
				errMes = errMes + '＜名前（受託者）＞\n';
			}
			if ( $( "[name='nameZoku']" ).val() == '' ) {
				errMes = errMes + '＜続柄（受託者）＞\n';
			}
			if ( $( "[name='iE']" ).val() == '' ) {
				errMes = errMes + '＜郵送先チェック＞\n';
			}
			if ( $( "[name='documentAdd']" ).val() == '' ) {
				errMes = errMes + '＜書類郵送先住所＞\n';
			}
			if ( $( "[name='tel']" ).val() == '' ) {
				errMes = errMes + '＜電話番号＞\n';
			}
			if ( $( "[name='email']" ).val() == '' ) {
				errMes = errMes + '＜メールアドレス＞\n';
			}
			if ( $( "[name='kakeizuNumber']" ).val() == '' ) {
				errMes = errMes + '＜家系図＞\n';
			}
			if ( $( "[name='img1']" ).val() == '' ) {
				errMes = errMes + '＜①対象不動産の登記事項証明書＞\n';
			}
			if ( $( "[name='img2']" ).val() == '' ) {
				errMes = errMes + '＜②対象不動産の公図＞\n';
			}
			if ( $( "[name='img4']" ).val() == '' ) {
				errMes = errMes + '＜④今年度の固定資産評価証明書＞\n';
			}
			if ( $( "[name='img5']" ).val() == '' ) {
				errMes = errMes + '＜⑤今年度の固定資産課税台帳＞\n';
			}
			if ( $( "[name='img6']" ).val() == '' ) {
				errMes = errMes + '＜⑥申込者の方の身分証明書＞\n';
			}
			confirm( "全ての必須項目が記入、チェックされていません。\n" + errMes );
			return false;
		}
	});
	$( "[name='ie']" ).click( function () {
		var value = $( this ).val();
		$( "[name='iE']" ).val( value );
	});
	$( "[name='estateC']" ).click( function () {
		$( "[name='estateC']" ).val( "1" );
	});
	$( "[name='nameFURI']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nameFURI", data );
	});
	$( "[name='nameKAN']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nameKAN", data );
	});
	$( "[name='nameFURI2']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nameFURI2", data );
	});
	$( "[name='nameKAN2']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nameKAN2", data );
	});
	$( "[name='nameZoku']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nameZoku", data );
	});
	$( "[name='ie']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "ie", data );
	});
	$( "[name='niji']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "niji", data );
	});
	$( "[name='nijiMoti11']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nijiMoti11", data );
	});
	$( "[name='nijiMoti12']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nijiMoti12", data );
	});
	$( "[name='niji2']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "niji2", data );
	});
	$( "[name='nijiMoti21']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nijiMoti21", data );
	});
	$( "[name='nijiMoti22']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nijiMoti22", data );
	});
	$( "[name='niji3']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "niji3", data );
	});
	$( "[name='nijiMoti31']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nijiMoti31", data );
	});
	$( "[name='nijiMoti32']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nijiMoti32", data );
	});
	$( "[name='niji4']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "niji4", data );
	});
	$( "[name='nijiMoti41']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nijiMoti41", data );
	});
	$( "[name='nijiMoti42']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "nijiMoti42", data );
	});
	$( "[name='sanji']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanji", data );
	});
	$( "[name='sanjiMoti11']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanjiMoti11", data );
	});
	$( "[name='sanjiMoti12']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanjiMoti12", data );
	});
	$( "[name='sanji2']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanji2", data );
	});
	$( "[name='sanjiMoti21']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanjiMoti21", data );
	});
	$( "[name='sanjiMoti22']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanjiMoti22", data );
	});
	$( "[name='sanji3']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanji3", data );
	});
	$( "[name='sanjiMoti31']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanjiMoti31", data );
	});
	$( "[name='sanjiMoti32']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanjiMoti32", data );
	});
	$( "[name='sanji4']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanji4", data );
	});
	$( "[name='sanjiMoti41']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanjiMoti41", data );
	});
	$( "[name='sanjiMoti42']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "sanjiMoti42", data );
	});
	$( "[name='documentAdd']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "documentAdd", data );
	});
	$( "[name='estateC2']" ).click( function () {
		if ( $( "[name='estateC2']" ).val() == "yes" ) {
			$( "[name='estateC2']" ).val( "no" );
			$( "[name='estateAdd']" ).attr( "disabled", false);
			$.cookie( "estateC2", "no" );
		} else {
			$( "[name='estateC2']" ).val( "yes" );
			$( "[name='estateAdd']" ).attr( "disabled", true );
			$.cookie( "estateC2", "yes" );
		}
	});
	$( "[name='tel']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "tel", data );
	});
	$( "[name='email']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "email", data );
	});
	$( "[name='place']" ).change( function () {
		var data = $( this ).val();
		$.cookie( "place", data );
	});
	$( "[name='lost']" ).click( function () {
		if ( $( this ).val() == "0" ) {
			$( "[name='lost']" ).val( "1" );
			$.cookie( "lost", "1" );
		} else {
			$( "[name='lost']" ).val( "0" );
			$.cookie( "lost", "0" );
		}
	});
	$( "[name='kakeiReturn']" ).click( function () {
		location.href = "sheet8.php";
	});
});
function cookieClear() {
	$(function() {
		$.cookie( "sheetNUM", "", { expires:-1, path:"/" } );
		$.cookie( "nameFURI", "", { expires:-1, path:"/" } );
		$.cookie( "nameKAN", "", { expires:-1, path:"/" } );
		$.cookie( "nameFURI2", "", { expires:-1, path:"/" } );
		$.cookie( "nameKAN2", "", { expires:-1, path:"/" } );
		$.cookie( "nameZoku", "", { expires:-1, path:"/" } );
		$.cookie( "ie", "", { expires:-1, path:"/" } );
		$.cookie( "niji", "", { expires:-1, path:"/" } );
		$.cookie( "sanji", "", { expires:-1, path:"/" } );
		$.cookie( "tel", "", { expires:-1, path:"/" } );
		$.cookie( "email", "", { expires:-1, path:"/" } );
		$.cookie( "documentAdd", "", { expires:-1, path:"/" } );
		$.cookie( "estateC2", "", { expires:-1, path:"/" } );
		$.cookie( "estateAdd", "", { expires:-1, path:"/" } );
		$.cookie( "place", "", { expires:-1, path:"/" } );
		$.cookie( "lost", "", { expires:-1, path:"/" } );
		$.cookie( "jsonLine", "", { expires:-1, path:"/" } );
		$.cookie( "jsonLineY", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData1", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData2", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData3", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData4", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData5", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData6", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData7", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData8", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData9", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData10", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData11", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData12", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData13", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData14", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData15", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData16", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData17", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData18", "", { expires:-1, path:"/" } );
		$.cookie( "kakeiData19", "", { expires:-1, path:"/" } );
	});
}