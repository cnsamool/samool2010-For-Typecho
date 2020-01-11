<?php
 $this->need('header.php');
 ?>

<div class="all">
		<div class="wrapper">
				<div class="content_wrapper">
						<div class="entry_main">
							<ul>										
										<li>
												<ul>
													<li><h1><?php $this->title() ?></h1></li>
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
														<div>

																		<div style="clear:both">																		
																			<?php $this->content(); ?>
																		</div>							
														</div>
														<p class="tags"><?php _e('标签'); ?>: <?php $this->tags(', ', true, 'none'); ?></p>


													</li>
													<li class="fenge"></li>	
													<?php $this->need('comments.php'); ?>
										
										

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
