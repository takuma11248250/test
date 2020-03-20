<?php get_header(); ?>
<div class="container">
	<div class="contents">
		<?php if(have_posts()): the_post(); ?>
			<article <?php post_class( 'article-content' ); ?>>
				<!--タイトル-->
				<h1><?php the_title(); ?></h1>
				<!--本文取得-->
				<?php the_content(); ?>
				<!--タグ-->
				<div class="article-tag">
					<?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'
				); ?>
				</div>
			</article>
		<?php endif; ?>
	</div><!--end contents-->
	<?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
