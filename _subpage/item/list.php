<?php
	$_dep = array('2','1');
	$_tit = array(' 제품','제품 리스트');
	$_txt = array('','','');
	include_once "../../inc/common.php";
?>
<?include_once PATH.'/inc/head.php';?>

<div class="sub_item">

	<div class="__sort">
		<strong><span>3</span>개의 상품이 있습니다.</strong>
		<div class="sort">
			<a href="/shop/list.php?ca_id=10&amp;sort=it_update_time&amp;sortodr=desc">등록일순</a>
			<a href="/shop/list.php?ca_id=10&amp;sort=it_price&amp;sortodr=asc">낮은가격</a>
			<a href="/shop/list.php?ca_id=10&amp;sort=it_price&amp;sortodr=desc">높은가격</a>
		</div>
	</div>

	<div class="item_list">
		<ul>
			<li>
				<div class="tmb"><img src="http://wimg.kr/500x500" /></div>
				<div class="info">
					<strong>제품제목</strong>
					<p>제품설명</p>
				</div>
				<a href="<?=DIR?>/item/view">자세히보기</a>
			</li>
			<li>
				<div class="tmb"><img src="http://wimg.kr/500x500" /></div>
				<div class="info">
					<strong>제품제목</strong>
					<p>제품설명</p>
				</div>
				<a href="<?=DIR?>/item/view">자세히보기</a>
			</li>
			<li>
				<div class="tmb"><img src="http://wimg.kr/500x500" /></div>
				<div class="info">
					<strong>제품제목</strong>
					<p>제품설명</p>
				</div>
				<a href="<?=DIR?>/item/view">자세히보기</a>
			</li>
			<li>
				<div class="tmb"><img src="http://wimg.kr/500x500" /></div>
				<div class="info">
					<strong>제품제목</strong>
					<p>제품설명</p>
				</div>
				<a href="<?=DIR?>/item/view">자세히보기</a>
			</li>
		</ul>
	</div>

	<div class="__search">
		<form name="" method="" action="">
			<select class="selectbox">
				<option value="title">제목</option>
			</select>
			<input class="text" type="text" value="" placeholder="SEARCH">
			<input type="submit" value="검색" class="btn_submit">
		</form>
	</div>

	<div class="__paging">
		<a class="first" href="">맨처음</a>
		<a class="prev" href="">10페이지 이전</a>
		<a href="">1</a>
		<a href="">2</a>
		<a class="next" href="">10페이지 이후</a>
		<a class="last" href="">맨끝</a>
	</div>

</div>



<?include_once PATH.'/inc/foot.php';?>
