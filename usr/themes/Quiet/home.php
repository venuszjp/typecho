<?php
/**
 * 自定义PHP分类模板
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');

$categoryPosts = NULL;
$this->widget('Widget_Archive@categoryHandle', 'type=category', 'mid=2')->to($categoryPosts);
 ?>

<div class="col-12 col-lg-9" id="main" role="main">
	<?php while($categoryPosts->next()): ?>
        <article class="post Card typo" itemscope itemtype="http://schema.org/BlogPosting">
        	<div class="post-box paddingall">
        		<div class="post-title-box">
				<h4 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $categoryPosts->permalink() ?>"><?php $categoryPosts->title() ?></a></h4>
				</div>
	            <div class="post-content" itemprop="articleBody">
					<?php $categoryPosts->content('阅读全文'); ?>
				</div>
			</div>
            <div class="info">
            	<ul class="post-meta">
					<li itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="fa fa-user-circle-o" aria-hidden="true">&nbsp; </i><a itemprop="name" href="<?php $categoryPosts->author->permalink(); ?>" rel="author"><?php $categoryPosts->author(); ?></a></li>
					<li><i class="fa fa-calendar" aria-hidden="true">&nbsp; </i><time datetime="<?php $categoryPosts->date('c'); ?>" itemprop="datePublished"><?php $categoryPosts->date(); ?></time></li>
					<li><i class="fa fa-book fa-fw" aria-hidden="true">&nbsp; </i><?php $categoryPosts->category(','); ?></li>
					<li itemprop="interactionCount"><i class="fa fa-comments-o" aria-hidden="true">&nbsp; </i><a itemprop="discussionUrl" href="<?php $categoryPosts->permalink() ?>#comments"><?php $categoryPosts->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
					<li><i class="fa fa-hand-o-up" aria-hidden="true">&nbsp; </i><span><?php get_post_view($categoryPosts);_e(' 次浏览'); ?></span></li>
				</ul>
            </div>
        </article>
	<?php endwhile; ?>

	<?php $categoryPosts->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
