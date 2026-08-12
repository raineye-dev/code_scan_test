

<!---/////추가20210217----->
<script src="/theme/J_basic/js/js/jQuery.print.min.js"></script>
<script>
		(function(){
            var param = "#gnb_layout",
                obj = ".item",
                btn = ".th1_lnk",
                wrap = "#top_layout",
                dur = 300,
                meth = "easeOutCubic";
            gnb(param,obj,btn,wrap,dur,meth);
            gnb_open();
            
        }()); 

        $(function(){
			$("[data-print=print]").on('click', function() {
		        $("#printme").print({
		            globalStyles : true,
		            mediaPrint : false,
		            iframe : true,
		            noPrintSelector : ".avoid-this",
		            deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
		        });
			 });
		});

		$(".clickOpen > a").on("click",function(){
            $(this).parent().addClass("on");  
        });
        $(".clickOpen a.clickClose").on("click",function(){
            $(this).parents(".clickOpen").removeClass("on");
        });
	</script>
<ul class="print_wrap setting-box__group">
                        	<li class="n2" id="print"><button data-print="print"><span class="tmpl_ir ir"></span>프린트</button></li>                
                        	<!-- <li class="n1 snslist clickOpen" id="snslist">
                        		<a href="#sns_wrap"><span class="tmpl_ir ir"></span>공유</a>
                        	                                <div class="sns_wrap" data-id="ui-open">
                        	                                	<a class="fa" href="#" onclick="facebookOpen('신고현황 > 희생자 명예회복 > 노근리사건안내 > 노근리평화공원','http://yd21.go.kr/site/nogunri/html/sub04/040301.html'); return false;" title="페이스북 공유하기, 새창열림"><span class="tmpl_ir ir">페이스북</span></a>
                        	                                	<a class="tw" href="#" onclick="twitterOpen('신고현황 > 희생자 명예회복 > 노근리사건안내 > 노근리평화공원','http://yd21.go.kr/site/nogunri/html/sub04/040301.html'); return false;" title="트위터 공유하기, 새창열림"><span class="tmpl_ir ir">트위터</span></a>
                        										<a class="bl" href="#" onclick="naverOpen('신고현황 > 희생자 명예회복 > 노근리사건안내 > 노근리평화공원','http://yd21.go.kr/site/nogunri/html/sub04/040301.html'); return false;" title="블로그 공유하기, 새창열림">블로그</a>
                        										<a href="#sns_wrap" class="clickClose"><span class="tmpl_ir ir"></span>닫기</a>
                        	                                </div>
                        	                            </li> -->
                            
                        </ul>
<!---추가20210217/////----->


