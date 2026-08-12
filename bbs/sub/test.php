<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Kakao 지도 시작하기</title>
</head>
<style>
.kakao_map {
    position: relative;
}
.root_daum_roughmap {
    position: relative;
    width: 550px;
    margin: 0 auto;
    background-color: #efefef;
}
.root_daum_roughmap_landing {
    overflow: hidden;
    margin: 0;
    background: transparent;
}
.kakao_map .root_daum_roughmap {
    width: 100%;
}
.kakao_map .cont{display:none;}
</style>
<body>
<!-- 		<div class="kakao_map">d
			<div id="daumRoughmapContainer1606975759256" class="root_daum_roughmap root_daum_roughmap_landing"></div>
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>	
			<script charset="UTF-8">new daum.roughmap.Lander({"timestamp" : "1622097895723","key" : "25yzt","mapHeight" : "422"}).render();</script>
		</div> -->
		<div class="kakao_map">
	<div id="daumRoughmapContainer1622099005765" class="root_daum_roughmap root_daum_roughmap_landing"></div>
	<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>	
	<script charset="UTF-8">new daum.roughmap.Lander({"timestamp" : "1622099005765","key" : "25y2d","mapHeight" : "422"}).render();</script>
</div>
</body>
</html>



<!--
	* 카카오맵 - 약도서비스
	* 한 페이지 내에 약도를 2개 이상 넣을 경우에는
	* 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
-->

