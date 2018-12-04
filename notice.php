<?
define("main",true);
$_dep = array('0','0','0');
$_tit = array('MAIN','','');
$_txt = array('','','');
include_once './inc/common.php';
?>
<?include_once PATH.'/inc/head.php';?>
<style>
	h1,h2,h3,h4,h5,h6{font-size:18px }
	dl, ul, ol, menu, li{list-style:list-item; }
</style>

<div class="inner">
	<h2><?=$config_company?> 퍼블리싱 가이드</h2>

	<section>
		<h3>기본</h3>
		
		<h4>/inc</h4>
		<ol>
			<li>
				<strong>1. /inc/head.php</strong>
				<code>
					&lt; div &gt;
				</code>

			</li>

			<li>
				<strong>2. /inc/head.sub.php</strong>

			</li>


			<li>
				<strong>3. /inc/footer.php</strong>
			</li>
		</ol>

	</section>
</div>

<style>

</style>
<?include_once PATH.'/inc/foot.php';?>
