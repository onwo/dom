<?php 
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';
$head_title = $L['goto'];
$email = isset($email) && is_email($email) ? $email : '';
if($email) {
	$tmp = explode('@', $email);
	$url = str_replace('vip.', '', $tmp[1]);
	$url = 'http://mail.'.$url;
} else {
	$url = 'http://';
}
$rs=$db->get_one("select * from d_member where email='$email'");

if($rs[regid]==5){
	$rs[a]="on";
}else{
	$rs[b]="on";
}

include template('goto', $module);
?>