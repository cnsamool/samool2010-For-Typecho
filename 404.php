<?php
 $this->need('header.php');
 ?>

<div class="all">
		<div class="wrapper">
				<div class="content_wrapper">
						<div class="entry_main">
							<ul>
								<h2>404 - <?php _e('页面没找到'); ?></h2>
								<h1>The page you were looking for doesn't exist.</h1>
								<p>You may have mistyped the address or the page may have moved.</p>
					 
								<p>您所访问的页面不存在，或者地址已经改变，请使用下面搜索文章！</p>
								<form method="post">
									<div><input type="text" name="s" class="text" size="20" /> <input type="submit" class="submit" value="<?php _e('搜索'); ?>" /></div>
								</form>
							</ul>
						</div>

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
