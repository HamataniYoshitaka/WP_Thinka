<?php
/**
 * THINKAテンプレートの工事の流れ投稿ページのファイルです。
 *
 * @since THINKA 1.0.0
 */

get_header();
?>

<main class="post-flow-page">
  <?php
get_template_part( 'includes/header' );
?>
  <article class="post-content">
    <div class="box-firstview">
      <h2 class="page-title">Construction</h2>
      <div class="box-overview">
        <div class="box-text">
          <p class="number">
            <?php
                $scf_text = get_post_meta(get_the_ID(), 'number', true);
                if (isset($scf_text)) {
                    echo '<span>' . $scf_text . '</span>';
                }
                ?>
          </p>
          <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
          <div class="box-title">
            <h1 class="title">
              <?php echo get_the_title(); ?>
            </h1>
            <?php
                $scf_text = get_post_meta(get_the_ID(), 'english_title', true);
                if (isset($scf_text)) {
                    echo '<p class="english-title">' . $scf_text . '</p>';
                }
                ?>
          </div>
        </div>
        <div class="box-term">
          <p class="label">必要期間</p>
          <?php
                $scf_text = get_post_meta(get_the_ID(), 'term', true);
                if (isset($scf_text)) {
                    echo '<p class="term">' . $scf_text . '</p>';
                }
                ?>
        </div>
      </div>
    </div>
    <div class="box-article">
      <div class="container">
        <div class="box-post-content">
          <?php
        the_content();
        ?>
        </div>
        <div class="box-index">
          <?php
        echo do_shortcode('[ez-toc]');
        ?>
        </div>
      </div>
    </div>
    <div class="box-related">
      <div class="container">
        <?php
        $current_post_id = get_the_ID();

        $args = array(
            'post_type' => 'flow',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'ASC',
            'post_status' => 'publish',
            'date_query' => array(
                array(
                    'after' => get_the_date('Y-m-d H:i:s', $current_post_id),
                    'inclusive' => false,
                ),
            ),
        );

        $next_post_query = new WP_Query($args);

        if ($next_post_query->have_posts()) :
            while ($next_post_query->have_posts()) : $next_post_query->the_post(); ?>
        <div class="box-next">
          <p class="section-label">Next step</p>
          <div class="box-flex">
            <div class="box-text">
              <?php
                        $number_field = get_post_meta(get_the_ID(), 'number', true);
                        if ($number_field) {
                            echo '<p class="number"><span>' . esc_html($number_field) . '</span></p>';
                        }
                        ?>
              <p class="title"><?php the_title(); ?></p>
              <?php
                        $overview_field = get_post_meta(get_the_ID(), 'overview', true);
                        if ($number_field) {
                            echo '<p class="overview">' . esc_html($overview_field) . '<span>など</span></p>';
                        }
                        ?>
              <?php
                        $term_field = get_post_meta(get_the_ID(), 'term', true);
                        if ($number_field) {
                            echo '<p class="term"><span>必要期間：</span>' . esc_html($term_field) . '</p>';
                        }
                        ?>
              <div class="button green">
                <a href="<?php the_permalink(); ?>" class="link">
                  もっと見る
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="お知らせ一覧へ"
                    class="icon">
                </a>
              </div>
            </div>
            <?php if (has_post_thumbnail()) : ?>
            <div class="box-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php endwhile;
            wp_reset_postdata(); ?>
        <?php endif; ?>
          <ul class="list-banner">
            <li class="banner">
              <a href="<?php echo home_url('/flow'); ?>" class="link">
                <p class="title">
                  <span class="english">Flow</span>
                  施工の流れ一覧へ
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-white.svg" alt="施工の流れ一覧へ"
                  class="icon">
              </a>
            </li>
            <li class="banner">
              <a href="<?php echo home_url('/flow#construction'); ?>" class="link">
                <p class="title">
                  <span class="english">Construction Flow</span>
                  工事の流れ一覧へ
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-white.svg" alt="施工の流れ一覧へ"
                  class="icon">
              </a>
            </li>
          </ul>
      </div>
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