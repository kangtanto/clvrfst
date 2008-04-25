<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title><?=$siteName?> &#8250; <?=$pageTitle?></title>
		<link rel="stylesheet" href="<?=base_url()?>views/themes/<?=$theme?>/css/style.css"/>
		<script src="<?=base_url()?>views/js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>views/themes/<?=$theme?>/js/main.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body id="<?=$this->uri->segment(1).$this->uri->segment(2).$this->uri->segment(3)?>">
		<div id="nav">
			<ul>
				<li><?=anchor("show/home","Home")?></li>
				<?if($loggedIn == false):?>
				<li><?=anchor("show/login","Login")?></li>
				<li><?=anchor("show/signup","Sign up")?></li>
				<?endif;?>
				<li><?=anchor("show/forums","Forums")?></li>
				<?if($loggedIn == true):?>
				<li><?=anchor("show/account","Account")?></li>
				<li><?=anchor("backend/logout","Logout")?></li>
				<?endif;?>
				<li><?=anchor("show/help","Help")?></li>
				<?if($this->common->getGroup() == 1):?>
				<li><?=anchor("admin","Admin")?></li>
				<?endif;?>
			</ul>
		</div>
		<div id="head">
			<h1><?=$siteName?></h1>
			<h2><?=$pageTitle?></h2>
		</div>
		<div id="wrap">
			<div id="content">
				<?=$message?>
				<?=$error?>
				<?=$yield?>
			</div>
			<div id="footer">
				powered by <a href="http://cloverfaust.com">Cloverfaust</a> / &copy; <?=date(Y)?> <?=$siteName?>
			</div>
		</div>
		
		<!-- cloverfaust aeta :: {elapsed_time} is how much I love you :: by evan walsh -->
		
	</body>
</html>