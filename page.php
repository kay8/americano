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

		<article class="post" id="post-<?php the_ID(); ?>" class="article-content">

			<h1><?php the_title(); ?></h1>

			<div class="post-info"><?php posted_on(); ?></div>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>

		</article>

	<div class="post-comment">
		<?php comments_template(); ?>
	</div>

		<?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
