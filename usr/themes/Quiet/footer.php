<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" class="footer info" role="contentinfo">
	<em>
    	&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    	<?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
    </em>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('bootstrap/bootstrap.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/instantclick.min.js'); ?>"></script>
<script src="//cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>

</body>
</html>
