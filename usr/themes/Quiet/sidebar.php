<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-12 col-lg-3 hidden-md" id="secondary" class="sidebar" role="complementary">

    <section class="widget paddingall">
        <div class="side-info-img">
        </div>
        <div class="side-info-author">
        	<span>Cgons</span>
    	</div>
    	<div class="side-info-link">
        	<a href="mailto:seeindo@163.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true">&nbsp; </i></a>
        	<a href="https://cgons.com" target="_blank"><i class="fa fa-internet-explorer" aria-hidden="true">&nbsp; </i></a>
    	</div>
    	<div class="side-info-con">
        	<pre class="hitokoto">无数次寻找，依旧一无所获</pre>
    	</div>
    </section>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget paddingall">
		<h5 class="widget-title"><?php _e('最新文章'); ?></h5>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}"><i class="fa fa-caret-right fa-lg">&nbsp; </i>{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="widget paddingall">
		<h5 class="widget-title"><?php _e('最近回复'); ?></h5>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><span class="avatar"><?php $comments->gravatar(24);?></span><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(28, '...'); ?></li>
        <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget paddingall">
		<h5 class="widget-title"><?php _e('分类'); ?></h5>
        <?php //$this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list');
        _e('<ul class="widget-list">');
        $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}"><i class="fa fa-book fa-lg" aria-hidden="true">&nbsp; </i>{name}</a></li>'); 
        _e('</ul>');
        ?>
	</section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget paddingall">
		<h5 class="widget-title"><?php _e('归档'); ?></h5>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}"><i class="fa fa-clock-o fa-lg" aria-hidden="true">&nbsp; </i>{date}</a></li>'); ?>
        </ul>
	</section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<section class="widget paddingall">
		<h5 class="widget-title"><?php _e('其它'); ?></h5>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
        </ul>
	</section>
    <?php endif; ?>

</div><!-- end #sidebar -->
