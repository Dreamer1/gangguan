<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    <link href="<?php echo CSS_PATH;?>reset_panda.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo CSS_PATH;?>style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>DD_belatedPNG_0.0.8a-min.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>global.js"></script>
	<!--[if IE 6]>
	<script src="DD_belatedPNG.js"></script>
	<script>
	  DD_belatedPNG.fix('.nav,.tips,.about_left h1');
	</script>
	<![endif]-->
</head>
<body>
<div class="web center">
	<div class="tips center">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=61ccb3cb58bd3cba83a77221565c43c7&action=lists&siteid=%24siteid&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">淇敼</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'10',));}?>
		<div class="notice left">
			<div id="announ">
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><a href="<?php echo APP_PATH;?>index.php?m=announce&c=index&a=show&aid=<?php echo $r['aid'];?>" class="bright" target="_blank"><?php echo str_cut($r[title],'100');?></a></li>
				<?php $n++;}unset($n); ?>
			</ul>
			</div>
			<script type="text/javascript">
				$(function(){
					startmarquee('announ',40,1,500,4000);
				})
			</script>
		</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<div class="setup right">
			<ul>
				<li><a href="#" id="sethomepage">设为首页</a>|<a href="#" id="favorites">加入收藏</a></li>
			</ul>
		</div>
	</div>
	<div class="header center">
		<a href="<?php echo siteurl($siteid);?>"><img src="<?php echo IMG_PATH;?>logo.jpg" /></a>
		<ul class="nav">
		<li class="left"><a href="<?php echo siteurl($siteid);?>">首 页<br><span>HOME</span></a></li>
		<li class="left"><a href="<?php echo $CATEGORYS['6']['url'];?>">公司简介<br><span>ABOUT US</span></a></li>
		<li class="left"><a href="<?php echo $CATEGORYS['13']['url'];?>">产品展示<br><span>PRODUCT</span></a></li>
		<li class="left"><a href="<?php echo $CATEGORYS['8']['url'];?>">新闻中心<br><span>NEWS</span></a></li>
		<li class="left"><a href="<?php echo $CATEGORYS['9']['url'];?>">工程案例<br><span>CASE</span></a></li>
		<li class="left"><a href="<?php echo $CATEGORYS['10']['url'];?>">人才招聘<br><span>JOB</span></a></li>
		<li class="left"><a href="<?php echo $CATEGORYS['11']['url'];?>">联系我们<br><span>CONTACT</span></a></li>
		<li class="left"><a href="<?php echo $CATEGORYS['12']['url'];?>">留言板<br><span>MESSAGE</span></a></li>
		</ul>
	</div>