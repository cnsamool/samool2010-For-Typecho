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
													<li><h1><?php $this->title() ?></a></h1></li>
													<li>														
														<div>
															<?php $this->content(); ?>													
														</div>
													</li>
													<li class="fenge"></li>													
												</ul>
										</li>
										<?php $this->need('comments.php'); ?>

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
