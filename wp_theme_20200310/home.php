<?php get_header(); ?>
<div class="container">
  <?php if ( !is_paged()): ?>
    <div class="home-top">
      <?php if(have_posts()): the_post(); ?>
        <article <?php post_class( 'article-list article-top' ); ?>>
          <a href="<?php the_permalink(); ?>">
            <div class="img-wrap">
            <!--画像を追加-->
            <?php if( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail('full'); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
            <?php endif; ?>
            <!--カテゴリ-->
            <?php if (!is_category() && has_category()): ?>
              <span class="cat-data">
              <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              </span>
            <?php endif; ?>
            </div><!--end img-warp-->
            <div class="text">
              <span class="new-post"><i class="fas fa-star"></i> NEW POST</span>
              <!--タイトル-->
              <h2><?php the_title(); ?></h2>
              <!--投稿日を表示-->
              <span class="article-date">
                <i class="far fa-clock"></i>
                <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                  <?php echo get_the_date(); ?>
                </time>
              </span>
              <span class="article-author">
                <i class="fas fa-user"></i><?php the_author(); ?>
              </span>
              <!--抜粋-->
              <?php the_excerpt(); ?>
            </div><!--end text-->
          </a>
        </article>
      <?php endif; ?>
    </div><!--end home-top;-->
  <?php endif;?>

  <div class="contents">
  	<?php if(have_posts()): while(have_posts()): the_post(); ?>
  		<?php get_template_part('loop-content'); ?>
  	<?php endwhile; endif; ?>
  	<div class="pagination">
  		<?php echo paginate_links( array(
  			'type' => 'list',
  			'mid_size' => '1',
	  		'prev_text' => '<i class="fas fa-angle-left"></i>',
	  		'next_text' => '<i class="fas fa-angle-right"></i>'
	  	) ); ?>
    </div>
  </div><!--end contents-->
<?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
