<?php
/**
 * 傻猫博客第二款主题
 *
 * @package Samool2010 Theme 
 * @author Samool
 * @version 1.0.0
 * @link http://samool.com
 */

 $this->need('header.php');
 ?>

<div class="all">
		<div class="wrapper">
				<div class="content_wrapper">
						<div class="entry_main">
							<ul>
										<?php while($this->next()): ?>
										<li>
												<ul>
													<li><h1><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h1></li>
													<li>
														<SPAN class=post-info>
															<?php _e('分类：'); ?><?php $this->category(','); ?>
														</SPAN>
														<SPAN class=post-info2>
														该日志由 <?php $this->author(); ?> 发表于 <?php $this->date('Y-m-d G:i:s'); ?>
														&nbsp;&nbsp;&nbsp;<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
														</SPAN>
													</li>
													<li>
														<div><?php $this->content('阅读剩余部分...'); ?>														
														</div>
														
													</li>
													<li class="fenge"></li>
												</ul>
										</li>
										<?php endwhile; ?>											
							</ul>
							<div style="float:left;">
									<ol class="pages clearfix">
										<?php $this->pageNav(); ?>
									</ol>
							</div>
						</div>
						

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
