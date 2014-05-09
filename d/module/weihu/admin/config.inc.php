<?php
defined('IN_DESTOON') or exit('Access Denied');
$MCFG['module'] = 'weihu';
$MCFG['name'] = '维护';
$MCFG['author'] = 'DESTOON.COM';
$MCFG['homepage'] = 'www.destoon.com';
$MCFG['copy'] = false;
$MCFG['uninstall'] = true;
$MCFG['moduleid'] = 99;

$RT = array();
$RT['file']['index'] = '商品管理';
$RT['file']['order'] = '订单管理';
$RT['file']['html'] = '更新网页';

$RT['action']['index']['add'] = '添加商品';
$RT['action']['index']['edit'] = '修改商品';
$RT['action']['index']['relate'] = '关联商品';
$RT['action']['index']['delete'] = '删除商品';
$RT['action']['index']['check'] = '审核商品';
$RT['action']['index']['expire'] = '下架商品';
$RT['action']['index']['onsale'] = '上架商品';
$RT['action']['index']['reject'] = '未通过商品';
$RT['action']['index']['recycle'] = '回收站';
$RT['action']['index']['move'] = '移动商品';
$RT['action']['index']['level'] = '信息级别';

$CT = 1;
?>