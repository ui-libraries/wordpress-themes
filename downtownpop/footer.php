<footer class="footer container">
<!--register a footer widget here -->

<?php if ( is_active_sidebar( 'footer_left' ) ) : ?>
	<div id="footer-left" class="footer-left widget-area col-md-9" role="complementary">
		<?php dynamic_sidebar( 'footer_left' ); ?>
	</div> <!--footer-left-->
<?php endif; ?>

<?php if ( is_active_sidebar( 'footer_right' ) ) : ?>
	<div id="footer-right" class="footer-right widget-area col-md-3" role="complementary">
		<?php dynamic_sidebar( 'footer_right' ); ?>
	</div> <!--footer-right-->
<?php endif; ?>

<?php if ( is_active_sidebar( 'footer_bottom' ) ) : ?>
	<div id="footer-bottom" class="footer-bottom widget-area col-12" role="complementary">
		<?php dynamic_sidebar( 'footer_bottom' ); ?>
	</div> <!--footer-bottom-->
<?php endif; ?>

</footer>




<script>
	function goBack() {
    window.history.back();
}

</script>

<?php wp_footer(); ?>

</body>
</html>
