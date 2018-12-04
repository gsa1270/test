
<header id="header">
	<div class="inner">
		<h1>
			<img src="/images/common/logo.png" alt="<?=$config_company?> 로고">
			<a href="<?=DIR?>/index.php"><?=$config_company?>메인으로</a>
		</h1>
		<div class="util">
			<a href="">로그인</a>
			<a href="">회원가입</a>
			<a href="">북마크</a>
		</div>
		<nav id="nav">
			<h2>메뉴</h2>
			<div id="gnb">
				<?include PATH.'/inc/gnb.php';?>
			</div>
		</nav>
	</div>
</header>

<!--main content-->
<?if(defined("main")==true){?>
<section id="main">
	<div id="content">			
<?}?>

<!--sub content-->
<?if(defined("main")==false){?>
<section id="sub">
	<?include PATH.'/inc/head.sub.php';?>
	<div id="content" class="inner">
<?}?>