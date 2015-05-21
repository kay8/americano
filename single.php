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

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>" class="article-content">

			<h1 class="entry-title"><?php the_title(); ?></h1>

				<ul class="post-info">
					<li><?php posted_on(); ?></li>
					<li><?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?></li>
				</ul>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>

		</article>
	<div class="post-comment">
		<?php comments_template(); ?>
	</div>
	<?php endwhile; endif; ?>

</main>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>