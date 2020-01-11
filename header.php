<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="keywords" content="傻猫,日记,日志,网络日志" />
<meta name="description" content="本博客记录傻猫的生活、工作和学习，并与大家一起分享快乐" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body>
<script type="text/javascript">
document.body.oncopy = function () { 
    setTimeout( function () { 
        var text = clipboardData.getData("text");
        if (text) { 
            text = text + "\r\n文章来源于《傻猫网络日志》 "+this.location.href; 
clipboardData.setData("text", text);
        } 
                }, 100 ) 
}
</script>

<div class="header_wrapper">
		<div class="header_txt"><?php $this->options->description()?></div>
			<div class="header_nav">
				<ul>
					<li><a href="<?php $this->options->siteUrl(); ?>" class="nav" title="<?php _e('首页'); ?>"><?php _e('首页'); ?></a></li>
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
					<li><a href="<?php $pages->permalink(); ?>"  class="nav" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>



