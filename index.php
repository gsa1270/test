<?
define("main",true);
$_dep = array('0','0','0');
$_tit = array('main','','');
$_txt = array('','','');
include_once './inc/common.php';
?>
<?include_once PATH.'/inc/head.php';?>

	<div class="visual">
		<div class="text">
			<div class="inner">
				<img src="/images/common/visual_text.png" alt="">
				<hgroup>
					<h2>비쥬얼 텍스트</h2>
					<h3>비쥬얼 텍스트 내용</h3>
				</hgroup>
			</div>
		</div>
		<ul class="_roll">
			<li><img src="http://wimg.kr/1920x600" /></li>
			<li><img src="<?=DIR?>/images/common/visual01.jpg" alt=""></li>
			<li><img src="<?=DIR?>/images/common/visual02.jpg" alt=""></li>
			<li><img src="<?=DIR?>/images/common/visual03.jpg" alt=""></li>
			<li><img src="<?=DIR?>/images/common/visual04.jpg" alt=""></li>
			<li><img src="<?=DIR?>/images/common/visual05.jpg" alt=""></li>
		</ul>
	</div>
	<!--//visual-->

	<div class="main_product">
		<div class="inner">
		
		</div>
	</div>

<?include_once PATH.'/inc/foot.php';?>
