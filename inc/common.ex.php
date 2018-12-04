<?php 
include_once 'pub.config.php';
include_once($_SERVER['DOCUMENT_ROOT']."/board.path.php");
include_once($_SERVER['DOCUMENT_ROOT']."/".SP_BOARD_PATH."/config/sp.header.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=1200px,user-scalable=yes"/>
<!--
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
-->
<?php 
//sp.header.php 로 부터 해당 스크립트 변수를 불러옵니다.
echo $siteHeaderPrint;
echo $siteFaviconPrint;
echo $basicSetScript;
?>
<link rel="stylesheet" type="text/css" href="<?=DIR?>/css/common.css"/>
<link rel="stylesheet" type="text/css" href="<?=DIR?>/css/global.css"/>
<link rel="stylesheet" type="text/css" href="<?=DIR?>/css/board.css"/>
<link rel="stylesheet" type="text/css" href="<?=DIR?>/css/pub_lee.css"/>
<script src="<?=DIR?>/js/jquery.min.js"></script>
<script src="<?=DIR?>/js/java.js"></script>
<script src="<?=DIR?>/js/global.js"></script>

<!--[if lt IE 9]>
<script src="<?=DIR?>/js/html5.js"></script>
<![endif]-->
</head>
<body>
<div id="wrap">