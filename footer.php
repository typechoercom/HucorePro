<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div>
<div class="footer">
<div class="footer_page">
<ul class="footer_page_ul">
    <li><a href="<?php $this->options->siteUrl(); ?>">网站首页</a></li>
    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
</div>
<div class="my_socials">
 <a href="<?php $this->options->instagram() ?>" title="instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="<?php $this->options->twitter() ?>" title="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="<?php $this->options->weibo() ?>" title="weibo">
                            <i class="fa fa-weibo"></i>
                        </a>
                        <a href="<?php $this->options->github() ?>" title="github">
                            <i class="fa fa-github"></i>
                        </a>
                        <a href="<?php $this->options->rss() ?>" title="rss">
                            <i class="fa fa-rss"></i>
                        </a>
                    </div>

    <div class="powered_by">
        &copy;<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>  <a href="http://typecho.org" target="_blank">Typecho</a>
    </div>
</div>

<?php $this->footer(); ?>
</body>

</html>