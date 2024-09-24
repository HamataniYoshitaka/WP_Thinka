<?php
/**
 * horikenテンプレートの投稿ページのファイルです。
 *
 * @since horiken 1.0.0
 */

get_header();
?>

<main class="post-news-page">
  <?php
get_template_part( 'includes/header' );
?>
  <article class="post-content">
    <div class="box-firstview">
      <div class="box-overview">
        <p class="page-title">News</p>
        <h1 class="title">
                   <?php echo get_the_title(); ?>
</h1>
        <div class="box-information">
          <p class="date">
            <?php echo get_the_date(); ?>
          </p>
          <ul class="list-category">
            <?php

                $categories = get_the_category();
                foreach ($categories as $category) {
                  echo '<li class="category">' . $category->name . '</li>';
                }
                ?>
          </ul>
        </div>
      </div>
      <div class="button green pc">
        <a href="<?php echo site_url('/news'); ?>" class="link">
          お知らせ一覧へ
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="お知らせ一覧へ" class="icon">
        </a>
      </div>
    </div>
    <div class="box-article">
      <div class="box-main">
        <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
        <?php the_content();?>
      </div>
      <div class="box-related">
        <p class="title">Recommend article</p>
        <ul class="list-related-post">
          <?php 
    $catkwds = array();
 
    if(has_category()) {
 
      $cats = get_the_category();
 
      foreach($cats as $cat){
        $catkwds[] = $cat->term_id;
      }
 
    } 
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => '3',
      'post__not_in' => array($post->ID),
      'category__in' => $catkwds,
      'orderby' => 'rand'
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    while($the_query->have_posts()): $the_query->the_post();
    ?>
          <li class="related-post">
            <a href="<?php the_permalink(); ?>" class="link">
              <?php 
        if(has_post_thumbnail()) {
 
          the_post_thumbnail('medium'); 
 
        } else {
 
          echo '<img src="'.get_template_directory_uri().'/images/no-image.gif">';
 
        }
        ?>
              <div class="box-text">

                <div class="title">
                  <?php the_title(); ?>
                </div>
                <div class="box-information">
                  <p class="date">
                    <?php echo get_the_date(); ?>
                  </p>
                  <ul class="list-category">
                    <?php

                $categories = get_the_category();
                foreach ($categories as $category) {
                  echo '<li class="category">' . $category->name . '</li>';
                }
                ?>
                  </ul>
                </div>
              </div>
            </a>
          </li>
          <?php
    endwhile;
    endif;
    
    wp_reset_postdata();
    ?>
        </ul>
      </div>
    </div>
     <div class="button green">
        <a href="<?php echo site_url('/news'); ?>" class="link">
          お知らせ一覧へ
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="お知らせ一覧へ" class="icon">
        </a>
      </div>
  </article>
  <?php
get_template_part( 'includes/flow' );
?>

  <?php
get_template_part( 'includes/contact' );
?>
  <?php
get_template_part( 'includes/footer' );
?>

</main><!-- #site-content -->
<?php
get_footer();
?>