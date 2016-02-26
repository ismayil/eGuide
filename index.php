<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Aztelekom İstehsalat Birliyi</title>
<meta name="" content="">
 <link rel="stylesheet" href="css/jquery-ui.css" />
 <link rel="stylesheet" href="css/style7.css" />
 <link rel="stylesheet" href="css/css.css" />

  <script src="jquery/jquery-1.9.1.js"></script>
  <script src="jquery/jquery-ui.js"></script>
</head>
<body>
<div class="header" id="header"><div class="subheader"><img height="80px" src="logo.png" align="middle"/> <span style="color:#eae400; margin-left:150px; font-weight: bold; font-size: 35px">Aztelekom İstehsalat Birliyi</span> </div></div>
<!--<div  id="buttons" align="center">
<a href="#" id="bt1" class="button" >
<img height="120" src="about.png"/><br/>
Haqqımızda</a>
<a href="#" id="bt2"  class="button" >Xidmətlər</a>
<a href="#"  id="bt3" class="button" >Tariflər</a>
<a href="#" id="bt4"  class="button" >Xidmət ərazisi</a>
<a href="#" id="bt5"  class="button" >Qoşulma qaydaları</a>
<a href="#"  id="bt6" class="button" >Bizimlə əlaqə</a>
</div>-->

<script src="jquery/jquery-blink/fcarriedo-jquery-blink-c0b98c2/lib/jquery.blink.js"></script>
<script type="text/javascript" language="javascript">
 
$(document).ready(function()
{

	$('#bt1').blink({
	    maxBlinks: 0, 
	    blinkPeriod: 1000,   // in milliseconds
	    onBlink: function(){}, 
	    onMaxBlinks: function(){}
	});
	$('#bt2').blink({
	    maxBlinks: 120, 
	    blinkPeriod: 1200,   // in milliseconds
	    onBlink: function(){}, 
	    onMaxBlinks: function(){}
	});
	$('#bt3').blink({
	    maxBlinks: 120, 
	    blinkPeriod: 1400,   // in milliseconds
	    onBlink: function(){}, 
	    onMaxBlinks: function(){}
	});
	$('#bt4').blink({
	    maxBlinks: 120, 
	    blinkPeriod: 1600,   // in milliseconds
	    onBlink: function(){}, 
	    onMaxBlinks: function(){}
	});
	$('#bt5').blink({
	    maxBlinks: 120, 
	    blinkPeriod: 1500,   // in milliseconds
	    onBlink: function(){}, 
	    onMaxBlinks: function(){}
	});
	$('#bt6').blink({
	    maxBlinks: 120, 
	    blinkPeriod: 1300,   // in milliseconds
	    onBlink: function(){}, 
	    onMaxBlinks: function(){}
	});
	
});

setInterval(function() {
    var nextItem = $('.slider_item.active').fadeOut().removeClass('active').next('.slider_item');

    if (nextItem.length === 0) {
        nextItem = $('.slider_item').first();
    }

    nextItem.fadeIn().addClass('active ');
}, 2000); 
</script>

<div id="letter-container" align="center" class="letter-container">
<h2 style="width:1024px;"><a id="bt1" href="#"><span class="char1">
<img style="margin-top:10px; margin-bottom:5px;" height="90px;"  src="about.png"/><br/>HAQQIMIZDA</span></a>
<a id="bt2" href="#"><span style="white-space: nowrap" class="char3">
<img style="margin-top:5px; margin-bottom:5px;" height="90px;"  src="area.png"/><br/>XİDMƏT ƏRAZİSİ</span></a>
<a id="bt3" href="#"><span class="char2">
<img style="margin-top:10px; margin-bottom:5px;" height="90px;"  src="services.png"/><br/>XİDMƏTLƏR</span></a>
<a id="bt4" href="#"><span class="char4">
<img style="margin-top:5px; margin-bottom:5px;" height="90px;"  src="tariff.png"/><br/>TARİFLƏR</span></a>
<a id="bt5" href="#"><span class="char5">
<img style="margin-top:5px; margin-bottom:5px;" height="90px;"  src="connection.png"/><br/>QOŞULMA</span></a>
<a id="bt6" href="#"><span class="char6">
<img style="margin-top:5px; margin-bottom:5px;" height="90px;"  src="contacts.png"/><br/>ƏLAQƏ</span></a></h2>
			</div>
 <script>
  $(function() {
     $( ".button" ).mouseover(function() {
          $( this).animate({
          backgroundColor: "#3072b3",
                 }, 200 );
      });
	   $( ".button" ).mouseleave(function() {
        $( this ).animate({
          backgroundColor: "#ececec",
                 }, 700 );
      })
	  } )
	  
	  </script>
<script>
	   $(function() {
      $("#bt1").mousedown(function(){
	  	$("#letter-container").hide('fade',500,function() {;
	 showcontent();
	  })
	  })
	 function showcontent (){	  	
	  	$(".bt1").dialog({
			show: 'blind',
			draggable: false,
            resizable: false,
			modal:true,
			hide: 'blind',
			buttons:{ "Geri": function() { $(this).dialog("close"); } },
            close: function(ev, ui) { $(this).remove(); },
			height: $(window).height()-10,
			width:  $(window).width()-30,
			close:function(){
			$("#letter-container").show('fade',100);
			}
		});
		$(".ui-dialog-titlebar").css("background","#3072b3");
		$(".ui-dialog-titlebar").css("color","white");
		}
    });

 </script>
 
 <script>
	   $(function() {
      $("#bt2").mousedown(function(){
	  	$("#letter-container").hide('fade',500,function() {;
	 showcontent();
	  })
	  })
	 function showcontent (){	  	
	  	$(".bt4").dialog({
			show: 'blind',
			draggable: false,
            resizable: false,
			modal:true,
			buttons:{ "Geri": function() { $(this).dialog("close"); } },
            close: function(ev, ui) { $(this).remove(); },
			hide: 'blind',
			height: $(window).height()-10,
			width:  $(window).width()-30,
			close:function(){
			$("#letter-container").show('fade',100);
			}
		});
		$(".ui-dialog-titlebar").css("background","#3072b3");
		$(".ui-dialog-titlebar").css("color","white");
		}
    });

 </script>
 
 <script>
	   $(function() {
      $("#bt3").mousedown(function(){
	  	$("#letter-container").hide('fade',500,function() {;
	 showcontent();
	  })
	  })
	 function showcontent (){	  	
	  	$(".bt2").dialog({
			show: 'blind',
			draggable: false,
            resizable: false,
			modal:true,
			buttons:{ "Geri": function() { $(this).dialog("close"); } },
            close: function(ev, ui) { $(this).remove(); },
			hide: 'blind',
			height: $(window).height()-10,
			width:  $(window).width()-30,
			close:function(){
			$("#letter-container").show('fade',100);
			}
		});
		$(".ui-dialog-titlebar").css("background","#3072b3");
		$(".ui-dialog-titlebar").css("color","white");
		}
    });

 </script>
 
 <script>
	   $(function() {
	   	$("#accordion").accordion({
heightStyle: "content",
 active: false,
 collapsible: true 

  });
  $("#accordion2").accordion({
heightStyle: "content",
 collapsible: true ,
 active: false

  });
      $("#bt4").mousedown(function(){
	  	$("#letter-container").hide('fade',500,function() {;
	 showcontent();
	  })
	  })
	 function showcontent (){	  	
	  	$(".bt3").dialog({
			show: 'blind',
			draggable: false,
            resizable: false,
			modal:true,
			buttons:{ "Geri": function() { $(this).dialog("close"); } },
            close: function(ev, ui) { $(this).remove(); },
			hide: 'blind',
			height: $(window).height()-10,
			width:  $(window).width()-30,
			close:function(){
			$("#letter-container").show('fade',100);
			}
		});
		$(".ui-dialog-titlebar").css("background","#3072b3");
		$(".ui-dialog-titlebar").css("color","white");
		}
    });

 </script>
 
 <script>
	   $(function() {
      $("#bt5").mousedown(function(){
	  	$("#letter-container").hide('fade',500,function() {;
	 showcontent();
	  })
	  })
	 function showcontent (){	  	
	  	$(".bt5").dialog({
			show: 'blind',
			draggable: false,
            resizable: false,
			modal:true,
			buttons:{ "Geri": function() { $(this).dialog("close"); } },
            close: function(ev, ui) { $(this).remove(); },
			hide: 'blind',
			height: $(window).height()-10,
			width:  $(window).width()-30,
			close:function(){
			$("#letter-container").show('fade',100);
			}
		});
		$(".ui-dialog-titlebar").css("background","#3072b3");
		$(".ui-dialog-titlebar").css("color","white");
		}
    });

 </script>
 
 <script>
	   $(function() {
      $("#bt6").mousedown(function(){
	  	$("#letter-container").hide('fade',500,function() {;
	 showcontent();
	  })
	  })
	 function showcontent (){	  	
	  	$(".bt6").dialog({
			show: 'blind',
			draggable: false,
            resizable: false,
			modal:true,
			buttons:{ "Geri": function() { $(this).dialog("close"); } },
            close: function(ev, ui) { $(this).remove(); },
			hide: 'blind',
			height: $(window).height()-10,
			width:  $(window).width()-30,
			close:function(){
			$("#letter-container").show('fade',100);
			}
		});
		$(".ui-dialog-titlebar").css("background","#3072b3");
		$(".ui-dialog-titlebar").css("color","white");
		}
    });

 </script>

  <div class="bt1" title="Haqqımızda" style="display: none">
<div id="accordion">

  <h3><a href="#">Tarixi</a></h3>

  <div>"AZTELEKOM" İstehsalat Birliyi Azərbaycan Respublikası Prezidentinin 02 iyul 1992-ci il 13 nömrəli sərəncamına müvafiq olaraq, Azərbaycan Respublikası Rabitə Nazirinin 09.09.1992-ci il 107 nömrəli əmri ilə 1992-ci ildə yaradılmışdır.</div>

  <h3><a href="#">Rəhbərlik</a></h3>

  <div align="center"><img src="struktur.png" height="480px"/></div>
  <h3><a href="#">Struktur</a></h3>

  <div align="center"><img src="st.png" height="480px"/></div>

  <h3><a href="#">Qəbul Günləri</a></h3>

  <div align="center"><!--<b>Baş Direktor M.Ə.Məmmədov</b><br/>
Qəbul günləri: Çərşənbə axşamı, saat 17<sup>00</sup>-19<sup>00</sup>
<br/><br/><hr/>
<b>Texniki Direktor<br/>
Baş Direktorun I müavini  Z.M.Vəliyev</b><br/>
Qəbul günləri: Çərşənbə və cümə günləri, saat 17<sup>00</sup>-19<sup>00</sup><br/><hr/>
<b>Baş Direktorun müavini M.H.Həsənov</b><br/>
Qəbul günləri: Çərşənbə və cümə günləri, saat 17<sup>00</sup>-19<sup>00</sup><br/><br/><hr/>
<b>Baş Direktorun müavini  T.Y.Məmmədov</b><br/>
Qəbul günləri: Çərşənbə və cümə günləri, saat 17<sup>00</sup>-19<sup>00</sup><br/><br/><hr/>-->
<img  src="qebul.png" height="490px;"/>
</div>
</div>
 
<!--<div id="close" align="right"><a href="javascript:void()" onclick="$(this).dialog('close')" class="close">< Geri</a></div>--></div>
  <div class="bt2" title="Xidmətlər" style="display: none">
 <ul style="font-size: 26px;">
 <li>Yerli telefon xidmətləri.</li><br/>
<li>Şəhərlərarası və beynəlxalq danışıq xidmətləri.</li><br/>
<li>"107" sifariş vasitəsi ilə şəhərlərarası və beynəlxalq danışıqlar xidməti.</li><br/>
<li>CDMA texnologiyası vasitəsilə naqilsiz telefon xidməti.</li><br/>
<li>"TAC kart" danışıq kartı vasitəsi ilə şəhərlərarası və beynəlxalq danışıq xidməti.</li><br/>
<li>SMS xidməti.</li><br/>
<li>İP TV və İP telefoniya xidməti.</li><br/>
<li>DATA və sürətli İNTERNET xidməti.</li><br/>
<li>Video konfrans xidməti.</li>
</ul>
  </div>
  <div align="center" class="bt3" title="Tariflər" style="display: none">
  <div id="accordion2">

  <h3><a href="#">Şəhərlərarası və beynəlxalq telefon rabitəsi xidmətləri üçün tariflər</a></h3>

  <div><table border="1" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td rowspan="2">
<p align="center"><span style="color: #000000; font-size: 120%;"><strong>№</strong></span></p>
</td>
<td rowspan="2">
<p align="center"><span style="color: #000000; font-size: 120%;"><strong>Xidmətlərin adı</strong></span></p>
</td>
<td colspan="2">
<p align="center"><span style="color: #000000;"><strong>Tarif (ƏDV daxil olmaqla) manat</strong></span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;"><strong>Əhali üçün</strong></span></p>
</td>
<td>
<p align="center"><span style="color: #000000;"><strong>İdarə, müəssisə və təşkilatlar</strong></span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">1.</span></p>
</td>
<td>
<p><span style="color: #000000;">Şəhərlərarası telefon danışıqlarının bir dəqiqəsi </span></p>
</td>
<td>
<p align="center">&nbsp;</p>
</td>
<td>
<p align="center">&nbsp;</p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">1.1.</span></p>
</td>
<td>
<p><span style="color: #000000;">Respublika daxilində: O cümlədən kartlı taksafonlardan</span></p>
</td>
<td>
<p align="center"><span style="color: #000000;">0,07</span></p>
</td>
<td>
<p align="center"><span style="color: #000000;">0,07</span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">1.2.</span></p>
</td>
<td>
<p><span style="color: #000000;">Naxçıvan MR daxilində </span></p>
</td>
<td>
<p align="center"><span style="color: #000000;">0,06</span></p>
</td>
<td>
<p align="center"><span style="color: #000000;">0,06</span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">1.3.</span></p>
</td>
<td>
<p><span style="color: #000000;">Şəhərlərarası telefon stansiyasına qoşulmuş birbaşa telefona
    görə illik abunə haqqı </span></p>
</td>
<td>
<p align="center">&nbsp;</p>
</td>
<td>
<p align="center"><span style="color: #000000;">180,00</span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">2.</span></p>
</td>
<td>
<p><span style="color: #000000;">Qrup şəhərlərarası telefon rabitəsi (QŞTR) QŞTR sistemi üzrə
    müşavirənin keçirilməsi </span></p>
</td>
<td>
<p align="center">&nbsp;</p>
</td>
<td>
<p align="center">&nbsp;</p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">2.1</span></p>
</td>
<td>
<p><span style="color: #000000;">Müşavirədə iştirak edən (çıxış üçün qoşulub və ya
    qoşulmamasından asılı olmayaraq) hər məntəqə üçün tam və natamam saata görə
    </span></p>
</td>
<td>
<p align="center">&nbsp;</p>
</td>
<td>
<p align="center"><span style="color: #000000;">4,40</span></p>
</td>
</tr>
<tr>
<td colspan="4">
<p align="center"><span style="color: #000000;"><strong>Əlavə xidmətlər </strong></span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">3.</span></p>
</td>
<td colspan="3">
<p><span style="color: #000000;">Aşağıdakı hallarda abunəçilərdən danışıq haqqından əlavə
    şəhərlərarası danışıq tarifi məbləğində bir dəqiqə danışıq haqqı tutulur:</span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">3.1.</span></p>
</td>
<td colspan="3">
<p><span style="color: #000000;">Çağıran abunəçinin xahişi ilə çağırılan şəxsə bildiriş
    verilərkən </span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">3.2.</span></p>
</td>
<td colspan="3">
<p><span style="color: #000000;">Müəyyən şəxsin telefona çağırılması </span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">3.3.</span></p>
</td>
<td colspan="3">
<p><span style="color: #000000;">Tapşırıqlı danışığın başqa telefon nömrəsinə və ya başqa
    danışıq məntəqəsinə dəyişilməsi</span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">3.4.</span></p>
</td>
<td colspan="3">
<p><span style="color: #000000;">Başqa şəhərdə telefon nömrəsi haqda arayış </span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">4. </span></p>
</td>
<td>
<p><span style="color: #000000;">Şəhərlərarası və beynəlxalq danışıqlara görə açıqlamaların
    verilməsi</span></p>
</td>
<td>
<p align="center"><span style="color: #000000;">0,10</span></p>
</td>
<td>
<p align="center"><span style="color: #000000;">0,10</span></p>
</td>
</tr>
<tr>
<td>
<p align="center"><span style="color: #000000;">5. </span></p>
</td>
<td>
<p><span style="color: #000000;">Mənzil telefonlarından və mehmanxanada yaşayan vətəndaşlar
    tərəfindən kreditlə aparılan danışıqlara görə hər hansı danışıq üçün əlavə </span></p>
</td>
<td>
<p align="center"><span style="color: #000000;">0,024</span></p>
</td>
<td valign="top">
<p align="center">&nbsp;</p>
</td>
</tr>
</tbody>
</table></div>

<h3>Şəhər və kənd telefon rabitəsi xidmətləri üçün tariflər</h3>
<div><table border="0" cellspacing="0" cellpadding="0" width="652">
<tbody>
<tr>
<td>
<table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="text-align: center;" rowspan="2" width="54" valign="top">
<p><span style="font-size: 120%;"><strong><span style="color: #000000;">Maddə və bəndlərin &nbsp;№-si </span></strong></span></p>
</td>
<td style="text-align: center;" rowspan="2" width="169">
<p><span style="font-size: 120%; color: #000000;"><strong>Xidmətlərin adı</strong></span></p>
</td>
<td style="text-align: center;" colspan="6" width="371">
<p><span style="color: #000000;"><strong><span style="font-size: 120%;">Tariflər</span></strong></span></p>
<p><span style="color: #000000;"><strong><span style="font-size: 120%;">(ƏDV daxil olmaqla), manat</span></strong></span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;"><strong><span style="font-size: 120%;">Əhali üçün</span></strong></span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="font-size: 120%; color: #000000;"><strong>Büdcə təşkilatları</strong></span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="font-size: 120%; color: #000000;"><strong>Digər abunəçilər</strong></span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
<p><span style="color: #000000;"><strong>1</strong></span></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p>&nbsp;</p>
<p><span style="color: #000000;"><strong>Telefon çəkilişi:</strong></span></p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">1.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində:</span></p>
<p><span style="color: #000000;">Elektron ATS-lər</span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p>&nbsp;</p>
<p><span style="color: #000000;">80,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">80,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">120,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">1.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində:</span></p>
<p><span style="color: #000000;">Elektron ATS-lər</span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p>&nbsp;</p>
<p><span style="color: #000000;">40,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">40,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">60,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">4.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">Telefonlaşdırılmış obyektdə olan hər bir telefonun ada
    keçirilməsi</span></strong></p>
<p><strong><span style="color: #000000;">&nbsp;(telefonun təhvil verilməsi barədə arayış təqdim
    etdikdə) </span></strong></p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">4.1. </span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;">2,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">20,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">50,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">4.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində</span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;">1,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">10,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">20,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">4.3.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Telefonun ailə üzvünün birinin &nbsp;adına keçirilməsi </span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;">0,80</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">5</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">Telefonlaşdırılmış obyektdə olan hər bir telefonun ada)
    keçirilməsi</span></strong></p>
<p><strong><span style="color: #000000;">&nbsp;(telefonun təhvil verilməsi barədə arayış təqdim
    etmədikdə) </span></strong></p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">5.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində: </span></p>
<p><span style="color: #000000;">-sərbəst nömrə</span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p>&nbsp;</p>
<p><span style="color: #000000;">60,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">80,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">120,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">5.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində: </span></p>
<p><span style="color: #000000;">-sərbəst nömrə</span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;">&nbsp;30,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">&nbsp;40,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p>&nbsp;</p>
<p><span style="color: #000000;">60,00</span></p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">6.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">Telefonu təhvil verib telefonu olmayan obyektə köçdükdə
    telefon çəkilişi</span></strong></p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">6.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində:</span></p>
<p><span style="color: #000000;">-sərbəst nömrə</span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;">&nbsp;30,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p>&nbsp;</p>
<p><span style="color: #000000;">40,00</span></p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p>&nbsp;</p>
<p><span style="color: #000000;">60,00</span></p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">6.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində: </span></p>
<p><span style="color: #000000;">-sərbəst nömrə</span></p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p>&nbsp;</p>
<p><span style="color: #000000;">15,00</span></p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p>&nbsp;</p>
<p><span style="color: #000000;">20,00</span></p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p>&nbsp;</p>
<p><span style="color: #000000;">30,00</span></p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">7.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">Ayrı-ayrı mənzillərə, idarə və ofislərə paralel telefonun
    çəkilişi </span></strong></p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">7.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;">30,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">40,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">60,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">7.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;">15,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">20,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">30,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54">
<p><strong><span style="color: #000000;">8.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540">
<p><strong><span style="color: #000000;">Ayrı-ayrı mənzillərə, idarə və ofislərə çəkilmiş paralel</span></strong></p>
<p><strong><span style="color: #000000;">telefonun əvəzinə abunəçilərə fərdi telefonun verilməsi</span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">8.1</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;">30,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">40,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">60,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">8.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p><span style="color: #000000;">15,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">20,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">30,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">9.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p>&nbsp;</p>
<p><strong><span style="color: #000000;">Sabit şəbəkə telefonlarından istifadəyə görə aylıq abunə1</span></strong></p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
<p><span style="color: #000000;">9.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p>&nbsp;</p>
<p><span style="color: #000000;">Şəhər və kənd yerlərində:</span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p>&nbsp;</p>
<p><span style="color: #000000;">2,00</span></p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">3,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">7,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">9.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Əsas telefon aparatına əlavə 2-dən artıq paralel qoşulmuş
    hər bir telefon aparatından istifadəyə görə aylıq abunə </span></p>
</td>
<td style="text-align: center;" colspan="2" width="231">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="67">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">0,40</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><strong><span style="color: #000000;">11.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p><strong><span style="color: #000000;">Telefon şəbəkəsinə çıxış üçün birləşdirici xəttin çəkilişi:</span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">11.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">50,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">120,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">11.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">25,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">60,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><strong><span style="color: #000000;">12.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p><strong><span style="color: #000000;">Telefon şəbəkəsinə çıxış üçün çəkilmiş birləşdirici xəttin
    aylıq abunəsi:</span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">12.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">3,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">7,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">12.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">1,60</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">4,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><strong><span style="color: #000000;">13.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p><strong><span style="color: #000000;">İki son məntəqə arasında birbaşa rabitə xəttinin çəkilişi: </span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">İkinaqilli sistem üzrə: </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">13.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">120,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">120,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">13.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">60,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">60,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Üçnaqilli sistem üzrə: </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">13.3.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">180,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">180,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">13.4.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">80,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">80,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Dördnaqilli sistem üzrə: </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">13.5.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">220,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">220,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">13.6.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">100,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">100,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><strong><span style="color: #000000;">14.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p><strong><span style="color: #000000;">İki son məntəqə arasında birbaşa rabitə xəttindən istifadəyə
    görə aylıq abunə2 </span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">İkinaqilli sistem üzrə: </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">14.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">3,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">7,20</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">14.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">2,40</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">4,80</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Üçnaqilli sistem üzrə:</span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">14.3.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">4,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">10,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">14.4.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">3,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">6,40</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Dördnaqilli sistem üzrə: </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">14.5.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">5,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">12,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">14.6.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" width="228">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">4,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">8,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><strong><span style="color: #000000;">15.</span></strong></p>
</td>
<td style="text-align: center;" colspan="7" width="540" valign="top">
<p><strong><span style="color: #000000;">Birləşdirici xətt vasitəsi ilə telefon çəkilişi3</span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">15.1.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Birləşdirici xətt vasitəsi ilə digər ATS ərazisində işləyən
    nömrənin elektron ATS nömrəsinə dəyişdirilməsi (Bu, texnoloci dəyişikliklər
    nəticəsində baş verdikdə, abunəçidən heç bir haqq alınmır və telefon yerli
    ATS nömrəsinə dəyişdirilir):</span></p>
</td>
<td style="text-align: center;" width="228">
<p><span style="color: #000000;">30,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">30,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">100,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">15.2.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Birləşdirici xətt vasitəsi ilə digər ATS ərazisində işləyən
    telefonun aylıq abunəsi</span></p>
</td>
<td style="text-align: center;" width="228">
<p><span style="color: #000000;">6,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">3,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">12,00</span></p>
</td>
<td style="text-align: center;" width="9">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="54" valign="top">
<p><span style="color: #000000;">15.3.</span></p>
</td>
<td style="text-align: center;" width="169" valign="top">
<p><span style="color: #000000;">Bir ATS ərazisindən digər ATS ərazisinə stansiya-lararası
    birləşdirici xətt vasitəsi ilə&nbsp;telefon çəkilməsi</span></p>
</td>
<td style="text-align: center;" width="228">
<p><span style="color: #000000;">90,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="65">
<p><span style="color: #000000;">110,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="69">
<p><span style="color: #000000;">200,00</span></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td width="52" valign="top">
<p>&nbsp;</p>
<table border="1" cellspacing="0" cellpadding="0" width="652">
<tbody>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><strong><span style="color: #000000;">17.</span></strong></p>
</td>
<td style="text-align: center;" colspan="11" width="600" valign="top">
<p><strong><span style="color: #000000;">Şəhərdaxili rəqəmsal kanallar</span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">17.1.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">2 Mbit/san. şəhərdaxili rəqəmsal
  kanalların&nbsp;(portların) qoşulması </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">600,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">600,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">17.2.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">2 Mbit/san. şəhərdaxili rəqəmsal
  kanalların (portların) aylıq istifadəsi</span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">160,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">300,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">17.3</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">İnternet xidmətlərinin göstərilməsi məqsədilə internet
  provayderlər tərəfindən fiziki birləşdirici rabitə xətlərinə müxtəlif tipli
  avadanlıqlar qoşmaqla yüksəktezlikli kanal kimi istifadə edildiyi halda, bu
  kanalların tutumundan asılı olmayaraq:</span></p>
<p><span style="color: #000000;">qoşulma&nbsp;haqqı </span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;">&nbsp;aylıq abunə haqqı</span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">48,0</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;">12,80</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">18.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Başqa idarə və müəssisələrin ATS-lərindən RİTN-in telefon
  şəbəkəsinə çıxışı olan hər telefona görə aylıq abunə</span></p>
</td>
<td style="text-align: center;" colspan="8" width="339">
<p><span style="color: #000000;">1,50</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><strong><span style="color: #000000;">19.</span></strong></p>
</td>
<td style="text-align: center;" colspan="11" width="600" valign="top">
<p><strong><span style="color: #000000;">Çıxış rabitəli (birtərəfli) telefonun çəkilişi </span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">19.1.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Şəhər yerlərində </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p><span style="color: #000000;">30,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">40,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">60,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">19.2.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Kənd yerlərində </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p><span style="color: #000000;">15,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">20,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">30,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><strong><span style="color: #000000;">20.</span></strong></p>
</td>
<td style="text-align: center;" colspan="11" width="600" valign="top">
<p><strong><span style="color: #000000;">Çıxış rabitəli (birtərəfli) telefon üçün aylıq abunə haqqı </span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">20.1.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Şəhər və kənd yerlərində </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p><span style="color: #000000;">2,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">2,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">2,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">21.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Rayon mərkəzindən kəndlərə kənd ATS-nin birləşdirici xətləri
  vasitəsilə (fiziki xətt və kanal) çəkilmiş telefonun (abunə haqqından əlavə)
  hər km xətti üçün aylıq abunə</span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
<p><span style="color: #000000;">0,05</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p>&nbsp;</p>
<p><span style="color: #000000;">0,10</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p>&nbsp;</p>
<p><span style="color: #000000;">0,10</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">22.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Şəhərdən kənarda yerləşən abunəçinin eyni zamanda şəhərin
  telefon stansiyasına qoşulmasına görə, aylıq abunə haqqından əlavə, şəhərin
  hüdudlarına qədər olan xəttin tam və ya natamam km-i üçün aylıq abunə4</span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
<p><span style="color: #000000;">0,10</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><strong><span style="color: #000000;">23.</span></strong></p>
</td>
<td style="text-align: center;" colspan="11" width="600" valign="top">
<p><strong><span style="color: #000000;">Əsas telefonun ATS ərazisində yerinin dəyişdirilməsi (material
  xərcindən &nbsp;əlavə)5,6:</span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">23.1.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Bir mənzildə </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p><span style="color: #000000;">0,80</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">2,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">4,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">23.2.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Bir binada </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p><span style="color: #000000;">2,40</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">5,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">7,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">23.3.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Başqa binaya köçürülməsi </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p><span style="color: #000000;">4,80</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">10,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">20,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">23.4.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Abunəçilərin xahişi ilə xəttin bərpa olunması</span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">0,80</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">23.5.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Mövcud telefon xəttinə mühafizə siqnalları&nbsp;qurğusunun
  qoşulması</span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
<p><span style="color: #000000;">3,00</span></p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">5,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">8,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">23.6.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Mühafizə siqnalları qurğusunun qoşulmasına görə aylıq abunə </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
<p><span style="color: #000000;">0,30</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p>&nbsp;</p>
<p><span style="color: #000000;">1,40</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p>&nbsp;</p>
<p><span style="color: #000000;">2,80</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">24.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">İdarə və müəssisələrdə telefonun addan-ada keçirilməsi
  struktur dəyişik-likləri ilə əlaqədar olduğu halda ad və şəxsi hesabın
  dəyişilməsi</span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">3,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">20,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">25.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Müəssisələr özəlləşdirilərkən işləyən hər telefonun yeni
  mülkiyyətçinin adına keçiril-məsi </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
<p><span style="color: #000000;">20,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p>&nbsp;</p>
<p><span style="color: #000000;">20,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">26.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">İstifadəçilərin ünvanına telefon avtomatlarının qoyulması </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">80,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">120,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">27.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Telefon avtomatından istifadə üçün
  illik abunə </span></p>
</td>
<td style="text-align: center;" colspan="2" width="216">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="67">
<p><span style="color: #000000;">40,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="56">
<p><span style="color: #000000;">80,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">28.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Telefon avtomatından danışıq&nbsp;cetonları</span></p>
</td>
<td style="text-align: center;" colspan="9" width="396">
<p><span style="color: #000000;">&nbsp;&nbsp;&nbsp; 0,10</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><strong><span style="color: #000000;">29.</span></strong></p>
</td>
<td style="text-align: center;" colspan="11" width="600" valign="top">
<p><strong><span style="color: #000000;">Müvəqqəti &nbsp;telefonların çəkilişi və istifadəsi7 </span></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">29.1.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Birləşdirici xətt vasitəsi ilə və ya adi qaydada müvəqqəti
  telefon çəkilişi (ən azı üç ay müddətinə)</span></p>
</td>
<td style="text-align: center;" colspan="9" width="396">
<p><span style="color: #000000;">&nbsp;&nbsp;&nbsp; Çəkiliş haqqı ödənilmir</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">29.2.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Adi qaydada çəkilmiş müvəqqəti telefonların aylıq abunəsi </span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">7,00</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">7,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">11,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">29.3.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Birləşdirici xətt vasitəsilə çəkilmiş müvəqqəti telefon-ların
  aylıq abunəsi</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">8,00</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">11,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">18,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">30.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Telefon nömrəsinin dəyişdirilməsi</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">3,00</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">3,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">3,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">31. </span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Abunəçinin arzusuna uyğun olaraq analoq ATS nömrəsinin
  elektron ATS nömrəsinə dəyişdirilməsi (bir ATS ərazisində)</span></p>
</td>
<td style="text-align: center;" width="215">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">10,00</span></p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p>&nbsp;</p>
<p><span style="color: #000000;">15,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
<p><span style="color: #000000;">20,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">32.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Telefon nömrəsinin seçilməsi </span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">6,00</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">6,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">6,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52" valign="top">
<p><span style="color: #000000;">33.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204" valign="top">
<p><span style="color: #000000;">Mərkəzləşdirilmiş çağırış şkafına çıxışın təmin edilməsi</span></p>
</td>
<td style="text-align: center;" width="215">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">1,60</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">3,20</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">34.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Elektrik montyoru tərəfindən əlavə xidmətin yerinə
  yetirilməsi, xəttin bərpa olunması</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">0,60</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">1,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">35.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Çağırışa görə elektrik montyoru tərəfindən əlavə xidmətlərin
  yerinə yetirilməsi (təyin olunmuş vaxtdan 3 saat müddətinə)8</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">2,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">2,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">36.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Əlavə zəngin quraşdırılması</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">1,00</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">1,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">1,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">37.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">İşıq siqnallarının quraşdı-rılması </span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,60</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">2,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">2,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">38.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Telefon aparatının əvəz edilməsi </span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,60</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">0,60</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">0,60</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">39.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Standart xətt şnurunun dəyişdirilməsi</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,60</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">0,60</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">0,60</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">40.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Sorğu-informasiya bürosu xidmətləri (hava haqqında məlumat, öz
  şəhərinin sakininin ünvanı haqqında arayış, natamam ünvana görə telefon
  nömrəsinin müəyyənləşdirilməsi və s.)&nbsp;&nbsp;&nbsp; </span></p>
</td>
<td style="text-align: center;" width="215">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">40.1.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Telefonçu tərəfindən arayışın verilməsi&nbsp;</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">0,40</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">40.2.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Məlumat Hesablama Mərkəzi tərəfindən bir telefon nömrəsinin
  araşdırılması&nbsp;</span></p>
</td>
<td style="text-align: center;" width="215">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p>&nbsp;</p>
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" width="57">
<p>&nbsp;</p>
<p><span style="color: #000000;">0,20</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">40.3.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Hər tam və natamam dəqiqə avtomatik
  informasiyanın verilməsi</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">0,40</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">40.4</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Abunəçinin xahişi ilə telefonun müvəqqəti bağlanması üçün
  birdəfəlik haqq</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">1,00</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">2,00</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">40.5</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Abunəçinin xahişi ilə onun telefonu barədə məlumatın sorğu
  informasiya bürosunun &nbsp;siyahısına salınmaması üçün birdəfəlik haqq</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">0,80</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">41.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">Şəhərlərarası və beynəlxalq stansiyalara çıxış kodunun (“0”,
  “00”, “000” kodlarının) bağlanması</span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">0,40</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" colspan="3" width="52">
<p><span style="color: #000000;">42.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="204">
<p><span style="color: #000000;">“012 109” xidmətindən istifadə </span></p>
</td>
<td style="text-align: center;" width="215">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" colspan="7" width="125">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" width="57">
<p><span style="color: #000000;">0,40</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><strong><span style="color: #000000;">43.</span></strong></p>
</td>
<td style="text-align: center;" colspan="12" width="604" valign="top">
<p><strong><span style="color: #000000;">Servis xidmətləri:</span></strong></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">44.1.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Müraciət əsasında hər servis xidmətindən istifadəyə görə aylıq
  abunə</span></p>
</td>
<td style="text-align: center;" colspan="5" width="268">
<p><span style="color: #000000;">0,35</span></p>
</td>
<td style="text-align: center;" colspan="3" width="66">
<p><span style="color: #000000;">0,35</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">0,35</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">44.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Telefona aylıq texniki xidmət göstərilməsi (könüllülük
  əsasında)</span></p>
</td>
<td style="text-align: center;" colspan="5" width="268">
<p><span style="color: #000000;">0,60</span></p>
</td>
<td style="text-align: center;" colspan="3" width="66">
<p><span style="color: #000000;">0,60</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">0,60</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">45.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Telefon xəttinə sıxlaşdırılma yolu ilə teleqraf&nbsp;kanalının
  buraxılması</span></p>
</td>
<td style="text-align: center;" colspan="5" width="268">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="66">
<p><span style="color: #000000;">6,80</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">6,80</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">46.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Abunəçi xəttindən təşkil olunmuş teleqraf&nbsp;kanalına görə
  aylıq abunə</span></p>
</td>
<td style="text-align: center;" colspan="5" width="268">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="66">
<p><span style="color: #000000;">1,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">1,00</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">47.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Radiouzadıcıya görə əlavə aylıq abunə </span></p>
</td>
<td style="text-align: center;" colspan="5" width="268">
<p><span style="color: #000000;">1,00</span></p>
</td>
<td style="text-align: center;" colspan="3" width="66">
<p><span style="color: #000000;">2,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p><span style="color: #000000;">4,00</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">48.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Abunəçilərin müraciətləri əsasında istifadə etdikləri telefon
  nömrələrindən birinin “pilot” nömrə olmaqla, digər nömrələrin seriyalı
  axtarış sisteminə qoşulması: </span></p>
<p><span style="color: #000000;">- “Pilot” nömrənin müəyyən olunması üçün birdəfəlik haqq;</span></p>
<p><span style="color: #000000;">- Hər əlavə nömrənin seriyalı axtarışa istiqamətləndirilməsi
  üçün birdəfəlik haqq</span></p>
</td>
<td style="text-align: center;" colspan="5" width="268">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">100,00</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">2,00</span></p>
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="66">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">100,00</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">2,00</span></p>
</td>
<td style="text-align: center;" colspan="2" width="73">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">100,00</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">6,00</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><strong><span style="color: #000000;">49.</span></strong></p>
</td>
<td style="text-align: center;" colspan="12" width="604" valign="top">
<p><strong><span style="color: #000000;">Şəhər və kənd telefon rabitəsi şəbəkəsi üzrə çoxproqramlı
  verilişlərin radionöqtələri üçün:&nbsp;</span></strong></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">49.1.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Çəkiliş </span></p>
</td>
<td style="text-align: center;" colspan="4" width="264">
<p><span style="color: #000000;">0,20</span></p>
</td>
<td style="text-align: center;" colspan="3" width="69">
<p><span style="color: #000000;">0,72</span></p>
</td>
<td style="text-align: center;" colspan="3" width="74">
<p><span style="color: #000000;">0,72</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">49.2.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Aylıq abunə </span></p>
</td>
<td style="text-align: center;" colspan="4" width="264">
<p><span style="color: #000000;">0,10</span></p>
</td>
<td style="text-align: center;" colspan="3" width="69">
<p><span style="color: #000000;">0,36</span></p>
</td>
<td style="text-align: center;" colspan="3" width="74">
<p><span style="color: #000000;">0,36</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><strong><span style="color: #000000;">50.</span></strong></p>
</td>
<td style="text-align: center;" colspan="12" width="604" valign="top">
<p><strong><span style="color: #000000;">Radioşəbəkənin quraşdırılması:</span></strong></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">50.1.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Bir əsas rozetka</span></p>
</td>
<td style="text-align: center;" colspan="4" width="264">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="3" width="69">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="3" width="74">
<p><span style="color: #000000;">0,40</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">50.2.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Hər əlavə rozetka</span></p>
</td>
<td style="text-align: center;" colspan="4" width="264">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="3" width="69">
<p><span style="color: #000000;">0,40</span></p>
</td>
<td style="text-align: center;" colspan="3" width="74">
<p><span style="color: #000000;">0,40</span></p>
</td>
</tr>
<tr>
<td width="4">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" width="44" valign="top">
<p><span style="color: #000000;">51.</span></p>
</td>
<td style="text-align: center;" colspan="2" width="196" valign="top">
<p><span style="color: #000000;">Faks aparatlarından istifa-dəyə görə
  aylıq abunə&nbsp;</span></p>
</td>
<td style="text-align: center;" colspan="4" width="264">
<p>&nbsp;</p>
</td>
<td style="text-align: center;" colspan="3" width="69">
<p><span style="color: #000000;">0,80</span></p>
</td>
<td style="text-align: center;" colspan="3" width="74">
<p><span style="color: #000000;">0,80</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
</td>
<td width="600" valign="top">
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table></div>
<h3>Beynəlxalq telefon danışıqlarnın 1 dəqiqəsi üçün tariflər</h3>
<div><table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="31" valign="top">
<p align="right">&nbsp;</p>
<p align="right">&nbsp;</p>
<p style="text-align: center;" align="center"><span style="font-size: 120%;"><strong><span style="color: #000000;">№</span></strong></span></p>
</td>
<td style="text-align: center;" width="171">
<p align="center"><span style="font-size: 120%;"><strong><span style="color: #000000;">Zonalar</span></strong></span></p>
</td>
<td style="text-align: center;" width="101">
<p><strong><span style="color: #000000; font-size: 120%;">Tarif&nbsp;- 1 dəqiqə&nbsp;&nbsp;&nbsp;üçün
  (ƏDV&nbsp;daxil&nbsp;olmaqla),
  manat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></strong></p>
</td>
<td style="text-align: center;" width="101">
<p><strong><span style="color: #000000; font-size: 120%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  1dəqiqədə&nbsp;olan&nbsp;konturların&nbsp;sayı</span></strong></p>
</td>
<td style="text-align: center;" width="101">
<p align="center"><strong><span style="color: #000000; font-size: 120%;">1&nbsp;konturun&nbsp;qiyməti, manat</span></strong></p>
</td>
<td style="text-align: center;" width="101">
<p><strong><span style="color: #000000; font-size: 120%;">1 konturdakı&nbsp;&nbsp;&nbsp; saniyələrin&nbsp;sayı</span></strong></p>
</td>
</tr>
<tr>
<td width="31">
<p><span style="color: #000000;">1</span></p>
</td>
<td width="171">
<p><span style="color: #000000;">MDB və Baltikyanı ölkələr</span></p>
</td>
<td width="101">
<p align="center"><span style="color: #000000;">0,36</span></p>
</td>
<td width="101">
<p align="center"><span style="color: #000000;">60</span></p>
</td>
<td width="101">
<p align="center"><span style="color: #000000;">0,0060</span></p>
</td>
<td width="101">
<p align="center"><span style="color: #000000;">1</span></p>
</td>
</tr>
<tr>
<td width="31">
<p><span style="color: #000000;">2</span></p>
</td>
<td width="171">
<p><span style="color: #000000;">İran,Türkiyə, Pakistan </span></p>
</td>
<td width="101">
<p align="center"><span style="color: #000000;">0,45</span></p>
</td>
<td width="101">
<p align="center"><span style="color: #000000;">60</span></p>
</td>
<td width="101">
<p align="center"><span style="color: #000000;">0,0075</span></p>
</td>
<td width="101">
<p align="center"><span style="color: #000000;">1</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="31">
<p><span style="color: #000000;">3</span></p>
</td>
<td style="text-align: center;" width="171">
<p><span style="color: #000000;">Avropa, Amerika və digər ölkələr</span></p>
</td>
<td style="text-align: center;" width="101">
<p align="center"><span style="color: #000000;">0,54</span></p>
</td>
<td style="text-align: center;" width="101">
<p align="center"><span style="color: #000000;">60</span></p>
</td>
<td style="text-align: center;" width="101">
<p align="center"><span style="color: #000000;">0,0090</span></p>
</td>
<td width="101">
<p style="text-align: center;" align="center"><span style="color: #000000;">1</span></p>
</td>
</tr>
</tbody>
</table></div>
<h3>İstifadəyə verilən fiziki kanallar</h3>
<div><table border="1" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td style="text-align: center;" rowspan="2">
<p align="center"><span style="color: #000000;"><strong>№</strong></span></p>
</td>
<td style="text-align: center;" rowspan="2">
<p align="center"><span style="color: #000000;"><strong>Xidmətlərin adı</strong></span></p>
</td>
<td style="text-align: center;" colspan="2">
<p align="center"><span style="color: #000000;"><strong>Kanalların saatlıq istifadəsinə görə tarif (ƏDV daxil
    olmaqla), manat </strong></span></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;"><strong>Çox yüklənmə vaxtı saat 7-dən 18-dək</strong></span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;"><strong>İdarə, müəssisə və təşkilatlar</strong></span></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center">&nbsp;</p>
</td>
<td style="text-align: center;">
<p><span style="color: #000000;">Hər tam nə natamam saat danışığa görə</span></p>
</td>
<td style="text-align: center;">
<p align="center">&nbsp;</p>
</td>
<td style="text-align: center;">
<p align="center">&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">1.</span></p>
</td>
<td style="text-align: center;">
<p><span style="color: #000000;"><strong>Respublika daxilində</strong></span></p>
</td>
<td style="text-align: center;">
<p align="center">&nbsp;</p>
</td>
<td style="text-align: center;">
<p align="center">&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">1.1.</span></p>
</td>
<td style="text-align: center;">
<p><span style="color: #000000;">-əhali və büdcə təşkilatları </span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">0,30</span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">0,20</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">1.2.</span></p>
</td>
<td style="text-align: center;">
<p><span style="color: #000000;">-Müdafiə Nazirliyi, Hərbi Hava qüvvələri və Hərbi
    Komissarlıqlar </span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">0,10</span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">0,05</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">1.3.</span></p>
</td>
<td style="text-align: center;">
<p><span style="color: #000000;">-təsərrüfat hesablı müəssisələr və digər təşkilatlar </span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">0,80</span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">0,40</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">2.</span></p>
</td>
<td style="text-align: center;">
<p><span style="color: #000000;"><strong>MDB və Baltikyanı ölkələr
    </strong></span></p>
</td>
<td style="text-align: center;">
<p align="center">&nbsp;</p>
</td>
<td style="text-align: center;">
<p align="center">&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">2.1.</span></p>
</td>
<td style="text-align: center;">
<p><span style="color: #000000;">-əhali və büdcə təşkilatları </span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">1,20</span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">0,80</span></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">2.2.</span></p>
</td>
<td style="text-align: center;">
<p><span style="color: #000000;">-təsərrüfat hesablı müəssisələr və digər təşkilatlar</span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">6,00</span></p>
</td>
<td style="text-align: center;">
<p align="center"><span style="color: #000000;">4,00</span></p>
</td>
</tr>
</tbody>
</table></div>
<h3>IP-TV</h3>
<div><table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="213" valign="top">
<p align="center"><strong><span style="color: #000000;">№</span></strong></p>
</td>
<td width="213" valign="top">
<p align="center"><strong><span style="color: #000000;">Birdəfəlik qoşulma haqqı</span></strong></p>
<p align="center"><strong><span style="color: #000000;">(manat)</span></strong></p>
</td>
<td width="213" valign="top">
<p align="center"><strong><span style="color: #000000;">Aylıq istifadə haqqı</span></strong></p>
<p align="center"><strong><span style="color: #000000;">(manat)</span></strong></p>
</td>
</tr>
<tr>
<td width="213" valign="top">
<p align="center"><strong><span style="color: #000000;">1.</span></strong></p>
</td>
<td width="213" valign="top">
<p align="center"><strong><span style="color: #000000;">5 manat</span></strong></p>
</td>
<td width="213" valign="top">
<p align="center"><strong><span style="color: #000000;">7 manat</span></strong></p>
</td>
</tr>
</tbody>
</table></div>
<h3>Internet</h3>
<div>
<table border="1" style="font-size:22px; font-weight: bold;" align="center" width="80%">
	<tr><td>1024 kbit/s</td><td align="center">10 AZN</td></tr>
	<tr><td>2048 kbit/s</td><td align="center">15 AZN</td></tr>
	<tr><td>4096 kbit/s</td><td align="center">20 AZN</td></tr>
	<tr><td>5120 kbit/s</td><td align="center">30 AZN</td></tr>
	<tr><td>6144 kbit/s</td><td align="center">40 AZN</td></tr>
	<tr><td>8192 kbit/s</td><td align="center">60 AZN</td></tr>
	<tr><td>10240 kbit/s</td><td align="center">80 AZN</td></tr>
	</table></div>
</div>
 </div>
   <div align="center" class="bt4" title="Xidmət ərazisi" style="display: none">
  	
	Bakı şəhəri və Naxçıvan Muxtar Respublikasının ərazisi istisna olmaq şərti ilə respublikanın qalan şəhər, rayon və kəndlərində xidmət verilir.<hr />
	<img src="tae.png" height="570px"/>
  </div>
  <div align="center" class="bt5" title="Qoşulma qaydaları" style="display: none">
<img  src="qosulma.png" height="500px"/>
  </div>
  <div align="center" class="bt6" title="Bizimlə əlaqə" style="display: none">
  	<table><tr><td align="center"><img width="960px" src="contact.png"/></td></tr><tr><td>
<div id="contact">İctimaiyyətlə əlaqələr üzrə baş mütəxəssis<br/>
Tel: 344-00-00 (2-59)<br/>
e-mail: prm@aztelekom.net</div><div id="contact2">Məktublar şöbəsi:<br/>
Tel: 344-00-00 (2-21)<br/>
e-mail: kmbs@aztelekom.net</div>

</td></tr></table>
  </div>

  <div class="footer" id="footer"><div id="contact">E-mail: kmbs@aztelekom.net<br /> URL: http://aztelekom.org</div><div id="contact2">Ünvan:Bakı ş.,Tbilisi pr., məh.3166.<br />Tel:(+994 12) 3440000</div></div>
</body>
</html>