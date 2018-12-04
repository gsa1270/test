<?php
//PC or MOBILE
define("pc",true);

//DIRECTORY
define('DIR','');
define('PATH',$_SERVER['DOCUMENT_ROOT'].DIR);

//GNB ADD ACTIVE
function pubGnb($str){
	global $_dep;
	$exp = explode(',',$str);
	$exp_count = count($exp);
	$act = 0;
	for($i=0;$i<count($exp);$i++){
		if($_dep[$i] == $exp[$i]){
			$act ++;
		}
	}
	if($act==$exp_count){
		echo 'active';
	}
}

/*
//Language
$lanVar = $_GET['lanVar'];
$lanCk = $_COOKIE['lanCk3'];
if(isset($lanVar)) {
	$language = $lanVar;
	setcookie('lanCk3',$language, time() + 86400 * 30,'/');
}else if(!isset($lanCk)){
	$language = 'ko';
}else{
	$language = $lanCk;
}
include $_SERVER['DOCUMENT_ROOT']."/lan-txt/".$language.'.php';
*/
?>
