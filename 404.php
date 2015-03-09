<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<div class="content-wrapper">
<main class="notfound">
	<h2><?php _e('Error 404 - Page Not Found','html5reset'); ?></h2>
	<p><?php _e('It seems we can’t find what you’re looking for. Perhaps searching can help.','html5reset'); ?></p>
	<?php get_search_form(); ?>
</main>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>