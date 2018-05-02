<?php defined('__TYPECHO_ROOT_DIR__') or exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-sm-12 col-lg-9" id="main" role="main">
    <article class="post Card typo" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="post-box paddingall">
            <div class="post-title-box">
                <h4 class="post-title" itemprop="name headline">
                    <a itemprop="url"
                       href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h4>
            </div>
            <div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>
        </div>
        <div class="tags-box paddingall">
            <span itemprop="keywords" class="tags"><?php $this->tags(' ', true, ''); ?></span>
        </div>
        <div class="info">
            <ul class="post-meta">
                <li itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <i class="fa fa-user-circle-o" aria-hidden="true">&nbsp; </i>
                    <a itemprop="name"
                       href="<?php $this->author->permalink(); ?>"
                       rel="author"><?php $this->author(); ?></a>
                </li>
                <li>
                    <i class="fa fa-calendar" aria-hidden="true">&nbsp; </i>
                    <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                </li>
                <li>
                    <i class="fa fa-book fa-fw" aria-hidden="true">&nbsp; </i><?php $this->category(','); ?>
                </li>
                <li itemprop="interactionCount"><i class="fa fa-comments-o" aria-hidden="true">&nbsp; </i>
                    <a itemprop="discussionUrl"
                       href="<?php $this->permalink() ?>#comments">
                        <?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
                </li>
                <li>
                    <i class="fa fa-hand-o-up" aria-hidden="true">&nbsp; </i>
                    <span><?php get_post_view($this);
                        _e(' 次浏览'); ?></span>
                </li>
            </ul>
        </div>
    </article>
    <div class="Card turned">
        <span style="float: left;padding:2px;">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;
            <?php $this->thePrev('%s', '没有了'); ?>
        </span>
        <span class="num" style="visibility:hidden">1/1</span>
        <span style="float: right;padding:2px;">
            <?php $this->theNext('%s', '没有了'); ?>&nbsp;
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </span>
    </div>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
