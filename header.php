<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle('', '', ' - '); ?><?php $this->options->title(); ?>
<?php if($this->is('index')): ?> - <?php $this->options->description() ?><?php endif; ?></title>
    <?php if($this->is('index')): ?>
    <meta name="keywords" content="<?php $this->options->keyswords() ?>" />
    <meta name="description" content="<?php $this->options->descriptions() ?>" />	
<?php else: ?>
<?php $this->header(); ?><?php endif; ?>   
    <link href="<?php $this->options->themeUrl(); ?>css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl(); ?>css/basic.css" type="text/css" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl(); ?>css/animate.3.5.2.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl(); ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div class="main animated">
        <div class="header animated fadeInDown">
            <div class="site_title_container">
                <div class="site_title">
                <?php if ($this->options->logoUrl): ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?> - <?php $this->options->description() ?>" />
                </a>
            <?php else: ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        	    
            <?php endif; ?>                
                      
                </div>              
               

            </div>
            <div class="my_menu">
                <ul class="clearfix" id="nav_menu">
    <li><a href="<?php $this->options->siteUrl(); ?>">网站首页</a></li>
    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
<?php while($category->next()): ?>
<li><a<?php if($this->is('category', $category->slug)): ?> class="current"<?php endif; ?> href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
<?php endwhile; ?>
</ul>
                </div>
        </div>
