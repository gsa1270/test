<?php
	$_dep = array('1','5');
	$_tit = array('회사소개','오시는 길');
	$_txt = array('','','');
	$page = 'location';
	include_once "../../inc/common.php";
?>
<?include_once PATH.'/inc/head.php';?>

	<div class="sub_location">

		<?include_once './location_map.php';?>

		<div class="info">
			<ul>
				<li>주소 : <?=$config_addr1?> <?=$config_addr2?></li>
				<li>TEL : <?=$config_tel?></li>
				<li>FAX : <?=$config_fax?></li>
				<li>E-MAIL : <?=$config_email?></li>
			</ul>
		</div>
	</div>

<?include_once PATH.'/inc/foot.php';?>
