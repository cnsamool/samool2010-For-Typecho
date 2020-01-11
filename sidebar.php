						<div class="sidebar">
								
								<div class="sidebar_rss">
									<ul>
									<li style="width:200px; text-align:center;">
										<a href="http://weibo.com/samool" target="_bank"><img src="<?php $this->options->themeUrl('images/weibo.jpg'); ?>"  border="0"/></a>
									</li>																		
									</ul>									
								</div>
								
								<div class="sidebar_info">
										<div class="sidebar_info_pic">
											<div class="sidebar_info_img">
											  <a href="http://www.samool.com/feed/" target="_bank"><img src="<?php $this->options->themeUrl('images/samool_03.gif'); ?>"  border="0"/></a>
											  <h1 style="width:96px; float:left; margin:10px 0px 0px 0px; padding:0px; font-size:16px; color:#ffffff;">关于我</h1>
											<p style="margin:50px 0px 0px 0px; ">网名：傻猫<br />
													QQ：6042506<br />
													本人有5年Delphi软件开发经验，擅长数据库开发、管理系统软件、验证码识别、软件破解、认证系统软件、sablog二次开发，图像处理软件、网页控件OCX开发。欢迎有志之士与本人联系合作业务。<br>邮箱:samool.com#gmail.com<br> 						
													
											</p>
											</div> 											
										</div>
										<div class="sidebar_info_fen"></div>
								</div>

								<div class="sidebar_info_link">
									<h1>&nbsp;&nbsp;&nbsp;<?php _e('站内搜索'); ?></h1>
									<ul>										
										<form id="search" method="post" action="<?php $this->options->siteUrl(); ?>">
											<div style="padding:2px;"><input type="text" name="s" class="text" size="18" /> <input type="submit" class="submit" value="<?php _e('搜索'); ?>" /></div>
										</form>
									</ul>
								</div>

								<?php if (empty($this->options->sidebarBlock) || in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
								<div class="sidebar_info_link">
									<h1>&nbsp;&nbsp;&nbsp;<?php _e('最新文章'); ?></h1>
									<ul>
											<?php $this->widget('Widget_Contents_Post_Recent')
										->parse('<li class="mytxt"><a href="{permalink}" title="{title}">{title}</a></li>'); ?>
									</ul>
								</div>
								<?php endif; ?>


								<?php if ($this->is('post')): ?> 	
								<!--有相关文章时才显示此sidber-->
									  <?php $this->related(8)->to($relatedPosts); ?>
									  <?php if ($relatedPosts->have()): ?>
											<div class="sidebar_info_link">
											<h1 style="color:red;">&nbsp;&nbsp;&nbsp;<?php _e('相关文章'); ?></h1>
											<ul>
											  <?php while ($relatedPosts->next()): ?>
													<li class="mytxt"><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>" ><?php $relatedPosts->title(); ?></a></li>
											  <?php endwhile; ?>
											</ul>
											</div>
									  <?php endif; ?>
								<?php endif; ?> 

								<?php if ($this->is('index')): ?>
										<?php if (empty($this->options->sidebarBlock) || in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
										<div class="sidebar_info_link">
											<h1>&nbsp;&nbsp;&nbsp;<?php _e('最近回复'); ?></h1>
											<ul>
											<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
											<?php while($comments->next()): ?>
												<li class="mytxt"><a href="<?php $comments->permalink(); ?>" title="<?php $comments->excerpt(200, '...'); ?>"><?php $comments->author(false); ?>: <?php $comments->excerpt(200, '...'); ?></a></li>
											<?php endwhile; ?>
											</ul>
										</div>
										<?php endif; ?>

										<?php if (empty($this->options->sidebarBlock) || in_array('ShowCategory', $this->options->sidebarBlock)): ?>
										<div class="sidebar_info_link">
											<h1>&nbsp;&nbsp;&nbsp;<?php _e('日志分类'); ?></h1>
											<ul>
												<?php $this->widget('Widget_Metas_Category_List')
												->parse('<li><a href="{permalink}" title="{name}">{name}</a> <span id="ignore">({count})</span></li>'); ?>
											</ul>
										</div>
										<?php endif; ?>										
								<?php endif; ?>




								<?php if ($this->is('index')): ?> 
									<?php if (empty($this->options->sidebarBlock) || in_array('ShowArchive', $this->options->sidebarBlock)): ?>
									<div class="sidebar_info_link">
										<h1>&nbsp;&nbsp;&nbsp;<?php _e('日志归档'); ?></h1>
										<ul>
											<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')
											->parse('<li><a href="{permalink}" title="{date}">{date}</a> <span id="ignore">({count})</span></li>'); ?>
										</ul>
									</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php if ($this->is('index')): ?>
								<div class="sidebar_info_link">
								<h1>&nbsp;&nbsp;&nbsp;<?php _e('链接'); ?></h1>
								<ul>
										<?php Links_Plugin::output(); ?> 
								</ul>
								</div>
								<?php endif; ?>

								<?php if (empty($this->options->sidebarBlock) || in_array('ShowOther', $this->options->sidebarBlock)): ?>
								<div class="sidebar_info_link">
									<h1>&nbsp;&nbsp;&nbsp;<?php _e('其它'); ?></h1>
									<ul>
										<?php if($this->user->hasLogin()): ?>
											<li><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
											<li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
										<?php else: ?>
											<li><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
										<?php endif; ?>
										<li><a href="http://validator.w3.org/check/referer">Valid XHTML</a></li>
										<li><a href="http://www.typecho.org">Typecho</a></li>

												<?php
												// THE FOLLOWING BLOCK IS USED TO RETRIEVE AND DISPLAY LINK INFORMATION.
												// PLACE THIS ENTIRE BLOCK IN THE AREA YOU WANT THE DATA TO BE DISPLAYED.

												// MODIFY THE VARIABLES BELOW:
												// The following variable defines whether links are opened in a new window
												// (1 = Yes, 0 = No)
												$OpenInNewWindow = "1";

												// # DO NOT MODIFY ANYTHING ELSE BELOW THIS LINE!
												// ----------------------------------------------
												$BLKey = "N8ED-W3U6-VJ9S";

												if(strlen($_SERVER['SCRIPT_URI'])){
													$_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_URI'].((strlen($_SERVER['QUERY_STRING']))?'?'.$_SERVER['QUERY_STRING']:'');
												}

												if(!strlen($_SERVER['REQUEST_URI'])){
													$_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'].((strlen($_SERVER['QUERY_STRING']))?'?'.$_SERVER['QUERY_STRING']:'');
												}

												$QueryString  = "LinkUrl=".urlencode((($_SERVER['HTTPS']=='on')?'https://':'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
												$QueryString .= "&Key=" .urlencode($BLKey);
												$QueryString .= "&OpenInNewWindow=" .urlencode($OpenInNewWindow);


												if(intval(get_cfg_var('allow_url_fopen')) && function_exists('readfile')) {
													@readfile("http://www.backlinks.com/engine.php?".$QueryString); 
												}
												elseif(intval(get_cfg_var('allow_url_fopen')) && function_exists('file')) {
													if($content = @file("http://www.backlinks.com/engine.php?".$QueryString)) 
														print @join('', $content);
												}
												elseif(function_exists('curl_init')) {
													$ch = curl_init ("http://www.backlinks.com/engine.php?".$QueryString);
													curl_setopt ($ch, CURLOPT_HEADER, 0);
													curl_exec ($ch);

													if(curl_error($ch))
														print "error";

													curl_close ($ch);
												}
												else {
													print "error";
												}
												?>
									</ul>
								</div>
								<?php endif; ?>
								
						</div>


