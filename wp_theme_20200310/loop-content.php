<article <?php post_class( 'article-list' ); ?>>
  <a href="<?php the_permalink(); ?>">
    <div class="img-wrap">
    <!--画像を追加-->
    <?php if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail('medium'); ?>
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
    <?php endif; ?>
    <!--カテゴリ-->
    <?php if (!is_category() && has_category()): ?>
      <span class="cat-data">
      <?php
        $postcat = get_the_category();
        echo $postcat[0]->name;
      ?>
      </span>
    <?php endif; ?>
    </div><!--end img-warp-->
    <div class="text">
      <!--タイトル-->
      <h2><?php the_title(); ?></h2>
 
      <!--投稿日を表示-->
      <span class="article-date">
        <i class="far fa-clock"></i>
        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
          <?php echo get_the_date(); ?>
        </time>
      </span>
      <!--著者を表示-->
      <span class="article-author">
        <i class="fas fa-user"></i><?php the_author(); ?>
      </span>
      <!--抜粋-->
      <?php the_excerpt(); ?>
    </div><!--end text-->
  </a>
</article>
