<!--
// 작성 폼 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//중복 체크 시작
var idchk=0;		
var idchk2=0;
var idchk3=0;
var flag = true;

function send() {


		// 이름 검색
		if(document.reser_frm.NfromText3.value == "")
		{
			alert ("이름을 작성하세요.");
			document.reser_frm.NfromText3.focus();
			return;
		}	

	    if (document.reser_frm.NfromText3.value == "")
	    {
			document.reser_frm.NfromText3.focus();		
			return;
		}

/* 이름: 중복검사 설정
		 if(idchk==0) {		// 중복검사를 했는지 여부 판단
				//	alert("이름에 대한 중복검사를 하셔야합니다.")
					Name_Check();
					return;
		}
*/

		// 생년월일 검색
		if(document.reser_frm.NfromText4.value == "")
		{
			alert ("생년월일을 작성하세요. 예)1990-05-05");
			document.reser_frm.NfromText4.focus();
			return;
		}

		// 소속센터
		if(document.reser_frm.NfromText8.value == "")
		{
			alert ("소속센터를 선택하세요.");
			document.reser_frm.NfromText8.focus();
			return;
		}	

/* 
		생년월일: 중복검사 설정
		 if(idchk2==0) {		// 중복검사를 했는지 여부 판단
					Birth_Check();
					return;
		}
*/

		// 연락처 검색
		if(document.reser_frm.NfromText5.value == "")
		{
			alert ("연락처를 작성하세요. 예)010-1234-5678");
			document.reser_frm.NfromText5.focus();
			return;
		}	


		if(document.reser_frm.NfromText6.value == "")
		{
			alert ("1365 나눔포털 등록아이디를 작성하세요.");
			document.reser_frm.NfromText6.focus();
			return;
		}	



		if(document.reser_frm.NfromText7.value == "")
		{
			alert ("메일을 작성하세요.");
			document.reser_frm.NfromText7.focus();
			return;
		}	

		if (check_email2()){
			return;
		}  


/*
		 if (check_email2()){
			return;
		}  

		 if (Ntype_check()){
			return;
		}  

		//제목 검사		
		if((!document.reser_frm.Ntitle.value) || (document.reser_frm.Ntitle.value.length < 2))
		{
			alert ("해당항목을 입력하세요.");
			document.reser_frm.Ntitle.focus();
			return;
		}	
*/

/*
		//내용 검사		
		if((!document.reser_frm.Ncontent.value) || (document.reser_frm.Ncontent.value.length < 2))
		{
			alert ("전달내용을 입력하세요.");
			document.reser_frm.Ncontent.focus();
			return;
		}	
*/

/*
		if((!document.reser_frm.Ntdate.value) || (document.reser_frm.Ntdate.value=="날짜선택"))
		{ 
		alert("상담을 원하시는 일자를 선택하세요.");
		document.reser_frm.Ntdate.focus();
		return;
		}	

		if(document.reser_frm.Nreturn.value==""){ 
		alert("원하시는 시간을 선택하세요.");
		document.reser_frm.Nreturn.focus();
		return;
		}		


		if((!document.reser_frm.NPasswd.value) || (document.reser_frm.NPasswd.value.length < 4))
		{
			alert ("해당항목을 입력하세요.");
			document.reser_frm.NPasswd.focus();
			return;
		}	


		if(idchk==0) {		
			alert("상담일자와 시간은 반드시 중복검사를 하셔야 합니다s.")
			tg_check();
			return;
		}		

		if((!document.reser_frm.Nhome.value) || (document.reser_frm.Nhome.value.length < 2))
		{
			alert ("신청인 이름을 입력하세요.");
			document.reser_frm.Nhome.focus();
			return;
		}	
*/

		if (icon_check2()){
			return;
		}  


		document.reser_frm.submit();
	}





function sendpoll() {
		document.reser_frm.submit();
	}





// 수정 폼 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function edit_send() {

		if(document.reser_frm.Nmobile.value == "")
		{
			alert ("휴대폰번호를 작성하세요.");
			document.reser_frm.Nmobile.focus();
			return;
		}	

		if(document.reser_frm.Nmail.value == "")
		{
			alert ("메일을 작성하세요.");
			document.reser_frm.Nmail.focus();
			return;
		}	

		 if (check_email2()){
			return;
		}  

		if(document.reser_frm.Narea.value == "")
		{
			alert ("주소를 입력하세요.");
			document.reser_frm.Narea.focus();
			return;
		}	


		//제목 검사		
		if((!document.reser_frm.Ntitle.value) || (document.reser_frm.Ntitle.value.length < 2))
		{
			alert ("제목을 입력해주세요.");
			document.reser_frm.Ntitle.focus();
			return;
		}	


		//내용 검사		
		if((!document.reser_frm.Ncontent.value) || (document.reser_frm.Ncontent.value.length < 2))
		{
			alert ("내용을 입력하세요.");
			document.reser_frm.Ncontent.focus();
			return;
		}	


/*
		if((!document.reser_frm.Ntdate.value) || (document.reser_frm.Ntdate.value=="날짜선택"))
		{ 
		alert("상담을 원하시는 일자를 선택하세요.");
		document.reser_frm.Ntdate.focus();
		return;
		}		

		if(document.reser_frm.Nreturn.value==""){ 
		alert("원하시는 시간을 선택하세요.");
		document.reser_frm.Nreturn.focus();
		return;
		}		
*/


		if((!document.reser_frm.NPasswd.value) || (document.reser_frm.NPasswd.value.length < 4))
		{
			alert ("비밀번호를 입력하세요.");
			document.reser_frm.NPasswd.focus();
			return;
		}	
/*
		if(idchk==0) {		
			alert("상담일자와 시간은 반드시 중복검사를 하셔야 합니다.")
			tg_check();
			return;
		}		
*/

		if (icon_check2()){
			return;
			}  

  		document.reser_frm.submit();
	}




function icon_check2(){
    if(document.reser_frm.protective.checked == false){
                alert("개인정보 수집 및 이용에 동의해주세요."); return true;
       }
}





// 1-1. 이름 중복 체크
function Name_Check(){
    
	if(document.reser_frm.NfromText3.value==""){ 
	alert("이름을 입력하세요.");
	document.reser_frm.NfromText3.focus();
	return false;
	}		

/*
     cc=document.reser_frm.NfromText3.value;
		if ( !Check_Char(cc) ) {
			alert("아이디는 숫자와 영문자만 가능합니다.");
			document.reser_frm.NfromText3.value=="";
			document.reser_frm.NfromText3.focus();
			return false;
		} 
		else if ( !CheckCN(cc) ) {
			document.reser_frm.NfromText3.focus();
			return false;
		}
*/

	window.open('chk_name.asp?chk_name='+document.reser_frm.NfromText3.value,"new","top=70,left=70,width=560,height=260,menubar=no,scrollbars=no")
  } 



// 1-2. 이름 검사
function CheckName(strName)    
{				
    for( var intinx = 0; intinx <= strName.length -1 ; intinx++ )
    { 
        ch = escape(strName.substring(intinx,intinx+1)); 
        if (ch.length < 6 || ch.substring(2,6) < "AC00" || ch.substring(2,6) > "D7AF")
        {
            alert( "한글만 입력이 가능하며, 띄어쓰기는 허용되지 않습니다.");
            return true;
        }
    }

	if ( !Check_nonChar( strName ) ) {
		alert("이름에 특수문자는 입력할 수 없습니다.");
		return false;
	}
}

// 2-1. 생년월일 중복 검사
function Birth_Check(){
    
	if(document.reser_frm.NfromText4.value==""){ 
	alert("생년월일을 입력하세요.");
	document.reser_frm.NfromText4.focus();
	return false;
	}		

	window.open('chk_birth.asp?chk_birth='+document.reser_frm.NfromText4.value,"new2","top=70,left=70,width=560,height=260,menubar=no,scrollbars=no")
  } 


// 2-2. 생년월일 검사
function CheckBirth(strName)    
{				
	if ( !Check_nonChar2( strName ) ) {
		alert("생년월일에 특수문자는 입력할 수 없습니다.");
		return false;
	}
}




// 메일 체크 
function check_email2() {		
//	alert(document.getElementById("NfromText7").value);
	var email = document.reser_frm.NfromText7.value;
	var exptext = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;
		if(exptext.test(email)==false){
		//이메일 형식이 알파벳+숫자@알파벳+숫자.알파벳+숫자 형식이 아닐경우			
		alert("메일이 올바르지 않습니다.");
		document.reser_frm.NfromText7.focus();
		return true;
	}
}



//입력한값 소문자로 바꾸어주기
 function lo() {
				idchk=0;
				document.reser_frm.loginid.value=document.reser_frm.loginid.value.toLowerCase();			
			//	document.reser_frm.loginid.value=document.reser_frm.loginid.value.toUpperCase();		대문자로 변경!!
			} 


//입력한값 대문자로 바꾸어주기
 function UC() {
				document.reser_frm.cb_artcode.value=document.reser_frm.cb_artcode.value.toUpperCase();		
			} 


// 상담일자+시간 체크
function tg_check(){
    var fk = document.reser_frm;

	if(document.reser_frm.Ntdate.value==""){ 
	alert("상담을 원하시는 일자를 선택하세요.");
	document.reser_frm.Ntdate.focus();
	return;
	}		
/*
	if(document.reser_frm.Nreturn.value==""){ 
	alert("상담을 원하시는 시간을 선택하세요.");
	document.reser_frm.Nreturn.focus();
	return;
	}		
*/
	 Ntdate=document.reser_frm.Ntdate.value;
	 Nreturn=document.reser_frm.Nreturn.value;
	
	window.open("get_tgsvc.asp?Ntdate="+Ntdate+"&Nreturn="+Nreturn,"new","top=0,left=0,width=502,height=296,menubar=no,scrollbars=no")
//	location.href = "get_tgsvc.asp?hDate="+h_date+"&hHour="+h_time,"new","top=0,left=0,width=0,height=0,menubar=no,scrollbars=no"
//	fk.target="hidden_frame";
//	fk.action="get_tgsvc.asp?hDate="+h_date+"&hHour="+h_time;
//	fk.submit();
  } 


// 특수문자 체크
function Check_nonChar(id_text) {
	var nonchar = '~`!@#$%^&*()-_=+\|<>?,./;:"';
	var numeric = '1234567890';
	var nonkorean = nonchar+numeric; 
	
	var i ; 
	for ( i=0; i < id_text.length; i++ )  {
		if( nonkorean.indexOf(id_text.substring(i,i+1)) > 0) {
			break ; 
		}
	}
	if ( i != id_text.length ) {
		return false ; 
	}
	else{
		return true ;
	} 

	return false;
}


// 특수문자2 체크
function Check_nonChar2(id_text) {
	var nonchar = '';
	var numeric = '1234567890';
	var nonkorean = nonchar+numeric; 
	
	var i ; 
	for ( i=0; i < id_text.length; i++ )  {
		if( nonkorean.indexOf(id_text.substring(i,i+1)) > 0) {
			break ; 
		}
	}
	if ( i != id_text.length ) {
		return false ; 
	}
	else{
		return true ;
	} 

	return false;
}




// 영숫자 체크
function Check_Char(id_text) {
	var alpha = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	var numeric = '1234567890';
	var nonkorean = alpha+numeric; 
	
	var i ; 
	for ( i=0; i < id_text.length; i++ )  {
		if( nonkorean.indexOf(id_text.substring(i,i+1)) < 0) {
			break ; 
		}
	}

	if ( i != id_text.length ) {
		return false ; 
	}
	else{
		return true ;
	} 

	return true;
}

	

// 숫자만을 기입받게 하는 방법
function onlyNumber() {
   if( (event.keyCode<48) || (event.keyCode>57) )
      event.returnValue=false;
}
	
				

function isValidDomain(el) { //도메인 체크
	var pattern = /^.+(\.[a-zA-Z]{2,3})$/;
	return (pattern.test(el.value.trim())) ? true : false;
}

//자동 탭이동
function autotab(original, destination) {
	if (original.getAttribute && original.value.length == original.getAttribute("maxlength"))
	destination.focus()
}
//################### jylee #########################


//####################################################################################################
//다음 우편번호 팝업  zinys
//####################################################################################################


function execDaumPostcode_mall(target) {

	if (typeof target == "undefined") target = '';

	//아래 코드처럼 테마 객체를 생성합니다.(color값은 #F00, #FF0000 형식으로 입력하세요.)
	//변경되지 않는 색상의 경우 주석 또는 제거하시거나 값을 공백으로 하시면 됩니다.
	var themeObj = {
	   //bgColor: "", //바탕 배경색
	   //searchBgColor: "", //검색창 배경색
	   //contentBgColor: "", //본문 배경색(검색결과,결과없음,첫화면,검색서제스트)
	   //pageBgColor: "", //페이지 배경색
	   //textColor: "", //기본 글자색
	   //queryTextColor: "", //검색창 글자색
	   //postcodeTextColor: "", //우편번호 글자색
	   //emphTextColor: "", //강조 글자색
	   //outlineColor: "" //테두리
	};

	//팝업 위치를 지정(화면의 가운데 정렬)
	var width = 500; //팝업의 너비
	var height = 600; //팝업의 높이

	new daum.Postcode({
		oncomplete: function(data) {
			// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

			// 각 주소의 노출 규칙에 따라 주소를 조합한다.
			// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
			var fullAddr = ''; // 최종 주소 변수
			var extraAddr = ''; // 조합형 주소 변수

			// 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
			if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
				fullAddr = data.roadAddress;

			} else { // 사용자가 지번 주소를 선택했을 경우(J)
				fullAddr = data.jibunAddress;
			}

			// 사용자가 선택한 주소가 도로명 타입일때 조합한다.
			if(data.userSelectedType === 'R'){
				//법정동명이 있을 경우 추가한다.
				if(data.bname !== ''){
					extraAddr += data.bname;
				}
				// 건물명이 있을 경우 추가한다.
				if(data.buildingName !== ''){
					extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
				}
				// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
				fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
			}
			
			if (target=="ordPost"){
					// 우편번호와 주소 정보를 해당 필드에 넣는다.
					document.getElementById('ordPost').value = data.zonecode; //5자리 새우편번호 사용
					document.getElementById('ordAddr').value = fullAddr;

					// 커서를 상세주소 필드로 이동한다.
					document.getElementById('ordAddrDetail').focus();

			}else if (target=="rcvPost"){
					// 우편번호와 주소 정보를 해당 필드에 넣는다.
					document.getElementById('rcvPost').value = data.zonecode; //5자리 새우편번호 사용
					document.getElementById('rcvAddr').value = fullAddr;

					// 커서를 상세주소 필드로 이동한다.
					document.getElementById('rcvAddrDetail').focus();

			}else{
					// 우편번호와 주소 정보를 해당 필드에 넣는다.
					document.getElementById('post').value = data.zonecode; //5자리 새우편번호 사용
					document.getElementById('addr').value = fullAddr;

					// 커서를 상세주소 필드로 이동한다.
					document.getElementById('addrDetail').focus();
			}
		},
		
		theme: themeObj
		
	}).open({
		popupName: 'postPopup', //팝업이름
		left: (window.screen.width / 2) - (width / 2),
		top: (window.screen.height / 2) - (height / 2)
	});
}

//-->