<?php
	$_dep = array('2','2');
	$_tit = array(' 제품','뷰페이지');
	$_txt = array('','','');
	include_once "../../inc/common.php";
?>
<?include_once PATH.'/inc/head.php';?>

<div class="item_view">
	<div class="image">
		<div class="big">
			<ul class="roll">
				<li><img src="http://wimg.kr/385x385" alt=""/></li>
				<li><img src="http://wimg.kr/385x385" alt=""/></li>
				<li><img src="http://wimg.kr/385x385" alt=""/></li>
				<li><img src="http://wimg.kr/385x385" alt=""/></li>
				<li><img src="http://wimg.kr/385x385" alt=""/></li>
			</ul>
		</div>
		<div class="tmb">
			<ul class="roll">
				<li data-slide-index="0"><img src="http://wimg.kr/85x85" alt=""/></li>
				<li data-slide-index="1"><img src="http://wimg.kr/85x85" alt=""/></li>
				<li data-slide-index="2"><img src="http://wimg.kr/85x85" alt=""/></li>
				<li data-slide-index="3"><img src="http://wimg.kr/85x85" alt=""/></li>
				<li data-slide-index="4"><img src="http://wimg.kr/85x85" alt=""/></li>
			</ul>
		</div>
	</div>

	<div class="title">
		<h4>제품명</h4>
		<em>제품명 서브설명</em>
	</div>

	<div class="info">
		<ul>
			<li><strong>모델명</strong> 내용 無</li>
			<li><strong>정격전압</strong></li>
			<li><strong>소비전력</strong></li>
			<li><strong>중량</strong></li>
		</ul>
	</div>

	<div class="desc">
		<h5>제품상세내용</h5>
		<div class="box">
		
		</div>
	</div>

	<div class="desc">
		<h5>제품상세내용</h5>
		<div class="_tab jsOff">
			<ul class="__tab2 ">
				<li class="t1 active">
					<a href="#view1">메뉴1</a>
					<div id="view1" >
						메뉴1의 내용
					</div>
				</li>
				<li class="t2">
					<a href="#view2">메뉴2</a>
					<div id="view2">
						메뉴2의 내용
					</div>
				</li>
				<li class="t3">
					<a href="#view3">메뉴3</a>
					<div id="view3">
						메뉴3의 내용
					</div>
				</li>
			</ul>
		</div>

	</div>
</div>

<script>
	$(document).ready(function(){
		viewImg.init();
	})
</script>

<?include_once PATH.'/inc/foot.php';?>
