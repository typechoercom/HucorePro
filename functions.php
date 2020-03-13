<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $keyswords = new Typecho_Widget_Helper_Form_Element_Text('keyswords', NULL, NULL, _t('首页关键字'), _t('首页'));
    $descriptions = new Typecho_Widget_Helper_Form_Element_Text('descriptions', NULL, NULL, _t('首页描述'), _t(''));

    $instagram = new Typecho_Widget_Helper_Form_Element_Text('instagram', NULL, NULL, _t('Instagram'), _t(''));
    $twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('Twitter'), _t(''));
    $weibo = new Typecho_Widget_Helper_Form_Element_Text('weibo', NULL, NULL, _t('Weibo'), _t(''));
    $github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('Github'), _t(''));
    $rss = new Typecho_Widget_Helper_Form_Element_Text('rss', NULL, NULL, _t('RSS'), _t(''));

    $form->addInput($logoUrl);
    $form->addInput($keyswords);
    $form->addInput($descriptions);

    $form->addInput($instagram);
    $form->addInput($twitter);
    $form->addInput($weibo);
    $form->addInput($github);
    $form->addInput($rss);
}



//获取评论的锚点链接
function get_comment_at($coid)
{
    $db = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')->from('table.comments')
        ->where('coid = ? AND status = ?', $coid, 'approved'));
    $parent = $prow['parent'];
    if ($parent != "0") {
        $arow = $db->fetchRow($db->select('author')->from('table.comments')
            ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        $href = '<a href="#comment-' . $parent . '">@' . $author . '</a>';
        echo $href;
    } else {
        echo '';
    }
}

//输出评论内容
function get_filtered_comment($coid)
{
    $db = Typecho_Db::get();
    $rs = $db->fetchRow($db->select('text')->from('table.comments')
        ->where('coid = ? AND status = ?', $coid, 'approved'));
    $content = $rs['text'];
    echo $content;
}