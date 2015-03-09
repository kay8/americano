<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<div class="content-wrapper">
<main>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>



				<ul class="post-info">
					<li><?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?></li>
					<li><?php posted_on(); ?></li>
				</ul>

			</div>

			<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>

		</article>
	<div class="post-comment">
		<?php comments_template(); ?>
	</div>
	<?php endwhile; endif; ?>

<?php post_navigation(); ?>
</main>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>