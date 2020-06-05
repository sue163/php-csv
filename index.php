<?php
require_once "./Export.php";
//测试数据
$headerList= ['列名1','列名2','列名3'];
$data = [
	['值1','值2','值3'],
	['值11','值22','值33'],
	['值111','值222','值333']
];
$fileName = "测试导出文件名";
$tmp = ['备份字段1','备份值1','','备份字段2','备份值2'];
$export = new Export();
$result = $export->exportToCsv($headerList,$data,$fileName,$tmp);