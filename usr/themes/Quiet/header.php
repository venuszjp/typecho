<?php if (! defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta content="大自然的搬运工，码农的呐喊的博客，博客，venus，typecho" name="keywords"/>
    <meta content="大自然的搬运工，一头爱睡懒觉的，很任性的猪。大自然的搬运工的博客主页、个人资料、相册,厦门理工学院。" name="description"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章'),
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 网站icon -->
    <link rel="icon" href="/favicon-16x16.ico" sizes="16x16" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" sizes="32x32" type="image/x-icon"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="bookmark" href="/favicon.ico" type="image/x-icon"/>
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('bootstrap/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/typo.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.bootcss.com/highlight.js/9.12.0/styles/agate.min.css">


    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
<div class="browsehappy" role="dialog">
    <?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 
    <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.
</div>
<![endif]-->

<header id="header" class="header">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <?php if ($this->options->logoUrl): ?>
                <a id="logo" class="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>"/>
                </a>
            <?php else: ?>
                <a id="logo" class="logo"
                   href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                <!-- <p class="description"><?php $this->options->description() ?></p> -->
            <?php endif; ?>
            <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?php $this->options->siteUrl(); ?>"><span><?php _e('首页'); ?></span></a>
                    </li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while ($pages->next()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php $pages->permalink(); ?>"
                               title="<?php $pages->title(); ?>"><span><?php $pages->title(); ?></span></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="site-search kit-hidden-tb">
                    <form id="search" class="form-inline" method="post" action="<?php $this->options->siteUrl(); ?>"
                          role="search">
                        <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                        <input type="text" id="s" name="s" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>"/>
                        <button type="submit" class="search-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>


<div id="body" class="body">
    <div class="container">
        <div class="row">