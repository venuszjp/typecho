<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-sm-12 col-lg-8" id="main" role="main">
        <div class="Card turned">
            <h6><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 "%s" 下的文章'),
            'search'    =>  _t('包含关键字 "%s" 的文章'),
            'tag'       =>  _t('标签 "%s" 下的文章'),
            'author'    =>  _t('"%s" 发布的文章')
            ), '', ''); ?><h6>
        </div>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post Card typo" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="post-box paddingall">
                <div class="post-title-box">
                <h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                </div>
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content('阅读全文'); ?>
                </div>
            </div>
            <div class="info">
                <ul class="post-meta">
                    <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
                    <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
                    <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
                    <li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
                </ul>
            </div>
        </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post Card typo">
                <h5 class="post-title ml5"><?php _e('没有找到内容'); ?></h5>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
