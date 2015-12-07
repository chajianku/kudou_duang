<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 
/*
Plugin Name: Duang一下插件
Version: 1.2
Plugin URL: http://www.itakuya.pw
Description: 利用CSS+JS实现网页滚动
Author: 工藤新一
Author URL: http://www.itakuya.pw
For: 不限
*/

function kudou_duang_core()
{
?>
<script type="text/javascript" src="plugins/kudou_duang/duang.js"></script>
<?php
}

addAction('header', 'kudou_duang_core');


function kudou_duang_navi()
{
?>
<li><a href="javascript:duang()"><span class="glyphicon glyphicon-play"></span> Duang一下</a></li>
<?php
}

addAction('navi_6', 'kudou_duang_navi');
