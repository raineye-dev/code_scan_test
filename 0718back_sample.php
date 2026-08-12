 <?php

 

$pageIndex = ($pageIndex) ? $pageIndex : 1;
$srchSido = ($srchSido) ? $srchSido : "6460000";
$srchSigu = ($srchSigu) ? $srchSigu : "";

$ch = curl_init(); // 리소스 초기화
	
  $url = "https://www.1365.go.kr/vols/P9140/srvcinfo/volsDnttInfo.do";

  // 옵션 설정
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//jsonUrl=https%3A%2F%2Fwww.1365.go.kr%2Fvols%2FP9210%2Fmber%2FvolsMberJson.do&searchFlag=search&cPage=1&nanmmbyId=&srchSido=6460000&srchSigu=4840000&srchFclty=&srchDnttNm=

  // post 형태로 데이터를 전송할 경우
  $postdata = array(
	"jsonUrl"=>"/vols/P9210/mber/volsMberJson.do",
	"searchFlag"=>"search",
	"cPage"=>$pageIndex,
	"nanmmbyId"=>"",
	"srchSido"=>$srchSido,
	"srchSigu"=>$srchSigu,
	"srchFclty"=>"",
	"srchDnttNm"=>""
  );
  //print_r($postdata);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

  $output = curl_exec($ch); 
 $html_str= $output;
$html_str = str_replace("\"/js","\"https://www.1365.go.kr/js",$html_str);
$html_str = str_replace("\"/vols","\"https://www.1365.go.kr/vols",$html_str);
$html_str = str_replace("'/vols","'https://www.1365.go.kr/vols",$html_str);
$html_str = str_replace("\"/web","\"https://www.1365.go.kr/web",$html_str);
$html_str = str_replace("volsDnttInfo.do?","https://www.1365.go.kr/vols/P9140/srvcinfo/volsDnttInfo.do?",$html_str);

//echo "<xmp>".$html_str."</xmp>";
echo $html_str;
  curl_close($ch);  // 리소스 해제
?>


 <script type="text/javascript">
        function change_parent_url(url)
        {
	    document.top.location=url;
        }		
    </script>