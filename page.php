<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
        <div class="autopagerize_page_element">
            <div class="content">
                <div class="post_page">
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
                        <div class="post_title post_detail_title">
                            <h2>
                                <a><?php $this->title() ?></a>

                            </h2>
                            <span class="date"><?php $this->date('F j, Y'); ?></span>

                        </div>

                        <div class="post_content markdown">
                        <?php $this->content(); ?>
                        </div>

                        <div class="post_footer">
                            <div class="meta">
                                <div class="info">
                                    <span class="field tags">
                                        <i class="fa fa-flask"></i>
                                        <?php $this->category(','); ?>
                                    </span>


                                </div>

                            </div>

                        </div>

                       

                    </div>


                </div>

            </div>

        </div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>