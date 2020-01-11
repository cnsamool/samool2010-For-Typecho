				<div id="comments">
							<h4><?php $this->commentsNum(_t('当前暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?> &raquo;</h4>	
							<?php $this->comments()->to($comments); ?>
							<?php while($comments->next()): ?>
								<div class="commentlist" id="<?php $comments->theId(); ?>">
									<div class="commentlist_top"></div>
										<div class="commentlist_cont">
												<div class="comment-author">
													<?php $comments->gravatar(32, 'X', '', 'avatar'); ?>
													<p><?php $comments->author(); ?> <span><?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?></span></p>
													<CITE class="big_font">#<?php echo $comments->sequence(); ?></cite>
												</div>
												<div class="commentlist_cont_c">
													<?php $comments->content(); ?>
												</div>
										</div>
										<div class="commentlist_bottom"></div>
								</div>
							<?php endwhile; ?>
							
							<?php if($this->allow('comment')): ?>
									<div class="respond">
										<ul>
											<li><span style="color:#686868; font-size:14px; font-weight:bold;">发表评论：</span>
											<span style="color:#FF6633; font-size:14px; font-weight:bold;">( 注意：为了防止广告评论，本站链接已经启用nofollow)</span>
											</li>
											<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
												<?php if($this->user->hasLogin()): ?>
														<p>Logged in as <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('登出'); ?> &raquo;</a></p>
												<?php else: ?>
														<li><input name="author"  id="author" type="text" style="width:240px;" class="respond_kuang" value="<?php $this->remember('author'); ?>"/> &nbsp;&nbsp;您的名字</li>
														<li><input name="mail" id="mail"  type="text" style="width:240px;" class="respond_kuang" value="<?php $this->remember('mail'); ?>"/> &nbsp;&nbsp;E-mail</li>
														<li><input name="url" id="url" type="text" style="width:240px;" class="respond_kuang" value="<?php $this->remember('url'); ?>"/> &nbsp;&nbsp;您的网址(选填)</li>
												<?php endif; ?>
														<li>
															 <label>
															 <textarea name="text" id="textarea"  style="width:380px; height:160px; overflow:auto; overflow-x:hidden;"cols="45" rows="5" class="respond_kuang"></textarea>
															 </label>
														</li>
																						   
											   <li><?php Captcha_Plugin::output(); ?></li>
											   <li><input type="submit" value="<?php _e('提交评论'); ?>" class="submit" /></li>										   
										   </form>
										</ul>
									</div>
							<?php else: ?>
									<h4><?php _e('由于一些不和谐的原因，该评论已关闭'); ?></h4>
							<?php endif; ?>
							
				</div>

			</ul>
		</li>
	</ul>
</div>

