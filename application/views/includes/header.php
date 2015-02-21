<!DOCTYPE html>
<html>
<head  >
	<meta http-equiv="content-type" content="text/html; charset=utf-8" pageEncoding="UTF-8"/>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.lavalamp.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.easing.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/cistyle.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/menustyle.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/login.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/mystyle.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/listyle.css" />
	<title>nest</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>public/image/hqico.ico" />
</head>
<header id="header" class="my_header" >
<div id="logo"><h1>Ho~<a href="<?php echo base_url(); ?>">nest</a><span id="logoc" >杂 貨</span></h1></div>

<div style="width:60%;margin-left:auto;margin-right:auto;padding-top:22px;">
<a class="<?php echo ($navigation=='Home'?'my_navigation_bar_on':'my_navigation_bar')?>" href="<?php echo base_url(); ?>">首 页</a>
<?php

	echo '<a class="'.($navigation=='Login'?'my_navigation_bar_on':'my_navigation_bar').'" href="'.base_url().'index.php/login">登 陆</a>';

?>
</div>
<img id="bottomshadow" src="<?php echo base_url(); ?>public/image/bottomshadow.png" style="width:100%;height:2px;top:48px;left:0;position:absolute;"></img>
</header>

<div id="search-field">                  
	<input type="text" name="q" id="itemname" placeholder="搜索商品" maxlength="200" data-autocomplete-disabled="false"/>
    <span onclick="search()" class="magnify" value=""></span>
</div>

<script>
function search()
{
	var itemname = document.getElementById('itemname').value;
	if(itemname!='')
	{
		var url = '<?php echo base_url() ?>index.php/purchased/searchitems/'+((itemname=='')?'null':itemname);
		window.location.href = url;

	}
}
function jump(url)
{
	window.location.href = url;
}
</script>
<body>
