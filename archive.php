<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="autopagerize_page_element">
            <div class="content">

 <?php if ($this->have()): ?>
<?php while($this->next()): ?>

    <div class="crumbs_patch">
	<a href="<?php $this->options->siteUrl(); ?>">网站首页</a> &raquo;</li>
	<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
		Latest Post
	<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
		<?php $this->category(); ?> &raquo; <?php $this->title() ?>
	<?php else: ?><!-- 页面为其他页时 -->
		<?php $this->archiveTitle(' &raquo; ','',''); ?>
	<?php endif; ?>
</div>
                <div class="post animated fadeInDown">
                    <div class="post_title">
                        <h2>
                            <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>

                        </h2>
                    </div>

                    <div class="list">
                        <div class="post_content">
                            <p><?php $this->excerpt(180, '[...]'); ?></p>

                        </div>

                    </div>

                    <div class="post_footer">
                        <div class="meta">
                            <div class="info">
                                <span class="field">
                                    <i class="fa fa-sun-o"></i>
                                    <span class="date"><?php $this->date('F j, Y'); ?></span>
                                </span>
                                <span class="field">
                                    <i class="fa fa-comment-o"></i>
                                    <span><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></span>
                                </span>
                                <span class="field tags">
                                    <i class="fa fa-flask"></i>
                                    <?php $this->category(','); ?>

                                </span>


                            </div>

                        </div>

                    </div>

                </div>

<?php endwhile; ?>
<?php else: ?>
<article>
<div class="content">
        <?php _e('没有找到任何内容，请重试。'); ?>
  </div>
</article>
<?php endif; ?>

                <div class="paginator pager pagination">
                    <div class="paginator_container pagination_container">
                    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>




                        <div style="clear:both;height:0;"></div>


                    </div>

                </div>

            </div>

        </div>
        <?php $this->need('footer.php'); ?>