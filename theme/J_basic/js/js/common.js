

/* OS 체크 불린값 전달 window 폰, window 기반 태블릿pc 에서 테스트가 필요함 */
function chaked_OS(){
	var device = navigator.userAgent;

	var str = device.split(";");
		str = str[0].split("(");
		str = str[1].split(" ");

	var chkOS = false;

	if(str[0] != "Windows" && str[0] != "Macintosh" && str[0] != "compatible"){
		chkOS = true; // 데스크탑이 아닐 때 true
	}

	return chkOS;
}
function return_width(){
	var w = $(window).width(); return w;
}
/* MSIE 9이하 버전체크 */
function ms_ver(){
	if(navigator.userAgent.match('MSIE')){
		var msie = navigator.userAgent;
		var ms_ver = msie.substr(msie.lastIndexOf('MSIE')).split('MSIE')[1];
			ms_ver = Number(ms_ver.split('.')[0]);

		return ms_ver;
	}else{
		return null;
	}
}

/* flow label */
$(document).ready(function(){
	if(!$("label").is(".flow")) return false;
	
	var o1 = $("label.flow");
	var o2 = $("label.flow").next();
	
	o1.css({"position":"absolute"});

	o1.bind("click focusin",function(){
		$(this).css({"visibility":"hidden"});
	});
	o2.bind("click focusin",function(){
		$(this).prev().css({"visibility":"hidden"});
	});

	o2.bind("focusout",function(){
		if($(this).val() == ""){
			$(this).prev().css({"visibility":"visible"});
		}
	});

	if(o2.val() != "") o1.css({"visibility":"hidden"});
});

$(document).ready(function(){
	var param = $("#lang");
	var obj = param.find("#lang_site");
	var btn = param.find("dt>a");
	var close = param.find(".close>a");
	btn.unbind().bind("click",function(event){
		var t = $(this);
		if(obj.css("display") == "none"){
			obj.stop(true,true).slideDown(300);
		}else{
			obj.stop(true,true).slideUp(300);
		}
		t.toggleClass('fold');
		event.preventDefault();
		event.stopPropagation();
	});
	close.unbind().bind("click",function(event){
		var t = $(this);
		if(obj.css("display") == "none"){
			obj.stop(true,true).slideDown(300);
		}else{
			obj.stop(true,true).slideUp(300);
		}
		t.toggleClass('fold');
		event.preventDefault();
		event.stopPropagation();
	});
});

//쿠키저장
function setCookie( name, value, expiredays ) { 
 var todayDate = new Date(); 
 todayDate.setDate( todayDate.getDate() + expiredays ); 
 document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";" 
} 

function getCookie(name) 
{ 
	var arg = name + "="; 
	var alen = arg.length; 
	var clen = document.cookie.length; 
	var i = 0; while(i< clen) 
	{ 
		var j = i + alen; 
		if(document.cookie.substring(i,j)==arg)
			{ 
			var end = document.cookie.indexOf(";",j); 
			if(end == -1) end = document.cookie.length;
			return unescape(document.cookie.substring(j,end)); 
			} 
		i=document.cookie.indexOf(" ",i)+1; 
		if (i==0) break; 
	} 
	return null; 
}


/*********팝업관련 자바스크립트 소스****************/
function close_layer(num, flag){
	document.getElementById(num).style.display = 'none';

	//쿠키굽기
	if( flag == "N")
		setCookie(num, 'done' , 1); 
	else 
		setCookie(num, num , 1); 
}
function close_layer2(num){
	document.getElementById(num).style.display = 'none';

}
function link_target(url,target){
	if(target=='_blank'){
		window.open(url);
	}else if(target=='_self'){
		location.href=url;
	}else{
		opener.location.href=url;
	}
}
/*********팝업관련 자바스크립트 소스****************/



//********서버시간 불러오기****************/

var xmlHttp;

function srvTime(){

	if (window.XMLHttpRequest) {//분기하지 않으면 IE에서만 작동된다.

		xmlHttp = new XMLHttpRequest(); // IE 7.0 이상, 크롬, 파이어폭스 등

		xmlHttp.open('HEAD',window.location.href.toString(),false);

		xmlHttp.setRequestHeader("Content-Type", "text/html");

		xmlHttp.send('');

		return xmlHttp.getResponseHeader("Date");

	}else if (window.ActiveXObject) {

		xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');

		xmlHttp.open('HEAD',window.location.href.toString(),false);

		xmlHttp.setRequestHeader("Content-Type", "text/html");

		xmlHttp.send('');

		return xmlHttp.getResponseHeader("Date");

	}

}
/*
svrTime 함수의 호출로 인해 페이지들이 2번씩 호출되는 문제로 주석처리 함. 20190509. 황선호
var st = srvTime();
var today = new Date(st);
*/

/*********서버시간 불러오 소스****************/


/**************확인창 스크립트 - 특정 문구를 사용할 경우에는 msg 에 값 입력, '삭제하시겠습니까?' 기본값 ************/
function ConfirmMsg(msg){
	if(msg) var chk = confirm(msg);
	else var chk = confirm("처리하시겠습니까?");

	if(chk) return true;
	else return false;
}
/************************************************/



function goto(url) {
	location.href=url;
}



/* mobile select */
function tab_mobile(){
    var window_w = $(window).width();
    tab = $("#tab_moType1");
    tab_li = tab.find(">ul>li");
    tab_on = tab.find(">ul>li.on");
  		if(tab.find(">.title").size() == 0){
        $('<strong class="title"><i class="arrow"></i></strong>').prependTo(tab);
     }
    var tab_tit = tab.find(">.title");
    if(tab_on.size() != 0){
        tab_tit.html(tab_on.find(">a").clone());
        } else {
        tab_tit.html(tab_li.eq(0).find(">a").clone());
        }
        var tab_btn = tab_tit.find(">a");
        tab_btn.click(function(){
        if(tab_li.eq(0).is(":hidden")){
            tab_tit.find(">a").addClass("on");
            tab_li.slideDown();
            } else {
                tab_tit.find(">a").removeClass("on");
                tab_li.slideUp();
            }
            return false;
        });
	     if(window_w < 768){
	         if(tab.hasClass("mobile")) return false;
	         tab.removeClass("pc").addClass("mobile");
	     } else {
	         if(!tab.hasClass("mobile")) return false;
	         tab.removeClass("mobile").addClass("pc");
	         tab_li.removeAttr("style");
	     }
    }





//탭

function targetOpener(btn,option){
    var btn = $(btn);

    $(option.obj).hide().first().show();

    btn.bind("click",function(event){
        var t = $(this);
        href = t.attr("href").substr(1);


        if(t.children().is('img')){
            var btnIMG = btn.find('img');
            var thisIMG = t.children();
            var thisSRC = thisIMG.attr('src');
            thisSRC = thisSRC.substr(thisSRC.lastIndexOf('_')).split(".");

            if(thisSRC[0] != "_ov"){
                $.each(btnIMG,function(){
                    $(this).attr("src",$(this).attr('src').replace('_ov.'+thisSRC[1],'.'+thisSRC[1]));
                });
                thisIMG.attr("src",thisIMG.attr('src').replace('.'+thisSRC[1],'_ov.'+thisSRC[1]));
            }
        }

        if(option.lv == 0){
            if($("[id="+href+"]").css("display") == "none"){
                $("[id="+href+"]").show().css({'visibility':'visible'});
                t.addClass("ov");
            }else{
                $("[id="+href+"]").hide().css({'visibility':'hidden'});
                t.removeClass("ov");
            }
        }

        if(option.lv == 1){
            $(option.obj).hide().css({'visibility':'hidden'});
            $("[id="+href+"]").show().css({'visibility':'visible'});
            btn.removeClass("ov");
            t.addClass("ov");
        }
        event.preventDefault();
    });
}


//탭 시작
function tabObj(_target,_tabBtn,_tabCon,_active, _isAjax){
    _tabBtn.removeClass("on");
    if(_isAjax != true) _tabCon.removeClass("on");
    if(_active == undefined){
        _tabBtn.eq(0).addClass("on");
        if(_isAjax != true) _tabCon.eq(0).addClass("on");
    }
    _tabBtn.on("click",function(e){
        var _clickNum = $(this).parent().index()+1;
        _tabBtn.removeClass("on");
        $(this).addClass("on");
        if(_isAjax != true) {
            _tabCon.removeClass("on");
            $("#tab_"+_clickNum).addClass("on");
        }

        e.preventDefault();
    });
}
//탭 끝


var shift = false;
$(function(){
    $(document).keydown(function(event){
        if(event.keyCode == 16 && shift != true) shift = true;
    });
    $(document).keyup(function(event){
        if(event.keyCode == 16) shift = false;
    });
});


$(function(){
    //레이어팝업 시작
    $(".lpOpen").on("click",function(){
      var _lpName = $(this).attr("href");
      //console.log(">>> _lpName : "+_lpName);
      var _winHeight = $("body").height();
      $("html").css({"height":_winHeight,"overflow":"hidden"});
      $("#lp_layout, #lp_layout .lp_wrap").removeClass("on");

      $("#lp_layout").addClass("on");
      $("#lp_layout").find(_lpName).addClass("on");
      //$("[data-slider]").slick("setPosition");

      $(_lpName).focus();

      $(_lpName).find(" .lpClose").keydown(function(event) {
        if(event.keyCode == 9 && !shift){
          $(_lpName).find(" .lp_tit").focus();
          event.preventDefault();
        }
      });

      $(_lpName).find(" a").eq(0).keydown(function(event) {
        if(event.keyCode == 9 && shift){
          $(_lpName).find(" .lpClose").focus();
          event.preventDefault();
        }
      });

      var _returnBtn = $(this);
      $(_lpName).find(" .lpClose").on("click", function(e){
          e.preventDefault();
        $("#lp_layout").removeClass();
        $("#lp_layout .lp_wrap").removeClass("on");
        $("html, body").removeAttr("style");
        _returnBtn.focus();
      });
      
      
    });


});





$(function(){
    $(".top_list2 .lpOpen").on("mouseover",function(){
		$(".pop_wrap .pop_right #pop_wrap > .menu_wrap li a").removeClass('ov');
        $(".pop_wrap .pop_right #pop_wrap > .menu_wrap li:nth-child(3) a").addClass('ov');
		$(".pop_wrap .pop_right #pop_wrap > .con_wrap > .con").css({'display':'none','visibility':'hidden'});
		$(".pop_wrap .pop_right #pop_wrap > .con_wrap > .con3").css({'display':'block','visibility':'visible'});
				

	});

	$(".service_btn .lpOpen").on("mouseover",function(){
		$(".pop_wrap .pop_right #pop_wrap > .menu_wrap li a").removeClass('ov');
        $(".pop_wrap .pop_right #pop_wrap > .menu_wrap li:nth-child(1) a").addClass('ov');
		$(".pop_wrap .pop_right #pop_wrap > .con_wrap > .con").css({'display':'none','visibility':'hidden'});
		$(".pop_wrap .pop_right #pop_wrap > .con_wrap > .con1").css({'display':'block','visibility':'visible'});
				

	});


});



$(document).ready(function(){
 	$(".tab-ul li a").removeAttr("title");
    $(".tab-ul li.on a").attr("title","선택됨");

});

