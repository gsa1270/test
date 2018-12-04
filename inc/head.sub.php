<?
//    디자인 서브페이지 일 때 GNB에서 해당 LNB 메뉴를 스트립트로 가져옴 가져옴  
//   /_subpage/etc -> $_dep[0] =100  :  사이트맵, 이메일 수집거부, 개인정보보호 등은 $_tit[0] 사용
?>
<script type="text/javascript">
	$(document).ready(function(){


		var gnb = $('#gnb').html();
		var gnb_ul = $('#gnb>ul>li.active>ul').html();
		var dep1 = $('#gnb>ul>li.active>a').html();
		var dep2 = $('#gnb>ul>li>ul>li.active>a').html();
		var dep1_href = $('#gnb>ul>li.active>a').attr('href');
		var dep2_href = $('#gnb>ul>li>ul>li.active>a').attr('href');

		$('#sub .visual h2').html(dep1);
		$('#sub .title h3').html(dep2);
		$('#lnb ul').html(gnb_ul);

		//lnb auto width
		$('#lnb').each(function(){
			var len = $(this).find('li').length;
			if(len <= 5){
				$(this).find('li').css({
					'width' : ( 100 / len ) + '%'
				});
			}
		});		
		

	});
</script>

<div id="sub_header">
	<div class="visual">
		 <img src="http://wimg.kr/1902x300" />
		 <div class="text">
			<div class="inner">
				<hgroup>
					<h2><?=$_tit[0]?></h2>
					<h3>회사정보 입니다.</h3>
				</hgroup>
			</div>
		</div>
	</div>

	<div id="lnb">
		<div class="inner">
			<ul>
				<li class="active"><a href="<?=DIR?>"><?=$_tit[1]?></a></li>
			</ul>
		</div>
	</div>

	<div class="title">
		<div class="inner">
			<h3><?=$_tit[1]?></h3>
		</div>
	</div>

</div>