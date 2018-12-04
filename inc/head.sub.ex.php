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
		
		$('#snb h2').html(dep1);
		$('#snb ul').html(gnb_ul);

		$('#path span.dep1 a').html(dep1);
		$('#path span.dep2 a').html(dep2);
		$('#path span.dep1 a').attr('href' , dep1_href);
		$('#path span.dep2 a').attr('href' , dep2_href);

		$('#navi .dep2>a').html(dep2);
		$('#navi .dep2>a').attr('href' , dep2_href);
		$('#navi .dep2 ul').html(gnb_ul);
		

		//lnb auto width
		$('#lnb').each(function(){
			var len = $(this).find('li').length;
			if(len <= 5){
				$(this).find('li').css({
					'width' : ( 100 / len ) + '%'
				});
			}
		});		
		
		//tnb
		if( $("#sub").length>0 ){
			var snb =  $('#gnb>ul>li>ul>li.active').html();
			var prev = $("#tnb .prev");
			var next = $("#tnb .next");
			var snbNum = snb.index();
            var snbPar = snb.closest('ul');
            var snbParLi = snbPar.children('li');
            var snbLeng = snbParLi.length - 1;

			var prevLink = snbParLi.eq(snbNum-1).find('a').attr('href');
            var prevTxt = snbParLi.eq(snbNum-1).find('a').text();

            if(snbNum == snbLeng){
                var nextLink = snbParLi.eq(0).find('a').attr('href');
                var nextTxt = snbParLi.eq(0).find('a').text();
            }else{
                var nextLink = snbParLi.eq(snbNum+1).find('a').attr('href');
                var nextTxt = snbParLi.eq(snbNum+1).find('a').text();
            }

            prev.attr('href',prevLink).text(prevTxt);
            next.attr('href',nextLink).text(nextTxt);
		}
	});
</script>

<style>
#snb {width:280px;border-top:1px solid #ddd;}
#snb h2{display:block;padding:20px 0;text-align:center;font-size:24px;color:#fff;background:#333;}
#snb li a{display:block;margin-top:-1px;height:40px;line-height:40px;padding:0 20px;border:1px solid #ddd;}

#tnb{position:relative;}
#tnb .inner{position:relative;}
#tnb h2{margin-bottom:10px;text-align:center;font-weight:500;font-size:30px;color:#222;}
#tnb h3{text-align:center;font-weight:500;font-size:18px;color:#888;}
#tnb a{position: absolute;top: 50%;margin-top: -25px;width: 50px;height: 50px;border: 1px solid #ddd;background: url(/images/common/arrow_type2.png) no-repeat;text-indent: -999999px;}
#tnb a.prev{left: 0;background-position: 0 0;}
#tnb a.next{right: 0;background-position: -50px 0;}

#path{text-align:center;}
#path span{display:inline-block;vertical-align:top;}
#path span:before{content:'>';display:inline-block;margin:0 10px;}
#path span:first-child:before{display:none;}

#navi{margin-top:20px;}
#navi .inner{position:relative;font-size:0px;border:1px solid #ddd;}
#navi .inner>span{position:relative;display:inline-block;vertical-align:top;}
#navi .inner>span>a{display:block;height:50px;line-height:50px;border-right:1px solid #ddd;box-sizing:border-box;}
#navi .home {min-width:10px;background:url(/images/common/path_home.jpg) no-repeat 50% 50%;}
#navi .home>a{padding:0 25px;text-indent:-99999px;}
#navi .dep>a{padding:0 115px 0 25px;min-width:60px;font-weight:500;font-size:16px;}
#navi .dep1>a{color:#666;background:url(/images/common/path_arrow01.jpg) no-repeat 90% 50%}
#navi .dep2>a{color:#154f8a;background:url(/images/common/path_arrow02.jpg) no-repeat 90% 50%}
#navi .dep ul{display:none;position:absolute;margin-top:1px;width:100%;z-index:9;}
#navi .dep ul>li{width:100%;}
#navi .dep ul>li>a{display:block;padding:0 20px 0 25px;width:100%;height:40px;line-height:40px;font-size:14px;color:#333;background:#FCFEFD;box-sizing:border-box;}
#navi .dep ul>li:first-child{margin-top:0px;}
#navi .dep ul>li:hover>a,
#navi .dep ul>li.active>a{font-weight:bold;color:#154f8a;}
#navi .dep:hover ul{display:block;}

</style>

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

	<div id="path">
		<div class="inner">
			<span class="home"><a href="<?=DIR?>/">HOME</a></span>
			<span class="dep1"><a href="<?=DIR?>"><?=$_tit[0]?></a></span>
			<span class="dep2"><a href="<?=DIR?>"><?=$_tit[1]?></a></span>
		</div>
	</div>

	<div class="inner">
		<div id="snb">
			<h2><?=$_tit[0]?></h2>
			<ul>
				<li><a href="<?=DIR?>"><?=$_tit[1]?></a></li>
			</ul>
		</div>
	</div>


	<div id="tnb">
		<div class="inner">
			<hgroup>
				<h2><?=$_tit[1]?></h2>
				<h3>상세내용조금</h3>
			</hgroup>
			<a class="prev" href="#">이전페이지</a>
			<a class="next" href="#">다음페이지</a>
		</div>
	</div>

	<div id="navi">
		<div class="inner">
			<span class="home">
				<a href="<?=DIR?>/">HOME</a>
			</span>
			<span class="dep dep1">
				<a href="<?=DIR?>"><?=$_tit[0]?></a>
				<ul>
					<li><a href="<?=DIR?>"><?=$_tit[0]?></a></li>
				</ul>
			</span>
			<span class="dep dep2">
				<a href="<?=DIR?>"><?=$_tit[1]?></a>
				<ul>
					<li><a href="<?=DIR?>"><?=$_tit[1]?></a></li>
				</ul>
			</span>
		</div>
	</div>


</div>