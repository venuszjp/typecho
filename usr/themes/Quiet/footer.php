<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div><!-- end .container -->
    <div class="go-top" title="返回顶部"></div>
</div><!-- end #body -->

<footer id="footer" class="footer" role="contentinfo">
    <em>
        &copy; <?php echo date('Y'); ?>
        <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
    </em>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('bootstrap/bootstrap.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/instantclick.min.js'); ?>"></script>
<script src="//cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
<!-- 开启预加载插件 -->
<script data-no-instant>InstantClick.init('mousedown');</script>

</body>
</html>
