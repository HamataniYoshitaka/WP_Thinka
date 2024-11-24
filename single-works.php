<?php
/**
 * horikenテンプレートの投稿ページのファイルです。
 *
 * @since horiken 1.0.0
 */

get_header();
?>

<main class="post-works-page">
  <?php
get_template_part( 'includes/header' );
?>
  <article class="post-content">
    <div class="box-firstview">
      <div class="box-overview">
        <h2 class="page-title">Works</h2>
        <h1 class="title">
            <?php echo get_the_title(); ?>
        </h1>
        <div class="box-information">
          <p class="date">
            <?php echo get_the_date(); ?>
          </p>
          <ul class="list-category">
                  <?php
        $terms = get_the_terms(get_the_ID(), 'works_category');
        
        if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                echo '<li class="' . esc_attr($term->slug) . ' category">' . esc_html($term->name) . '</li>';
            }
        }
        ?>
                </ul>
        </div>
      </div>
      <div class="button green pc">
        <a href="<?php echo home_url('/works'); ?>" class="link">
          施工事例一覧へ
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="施工事例一覧へ" class="icon">
        </a>
      </div>
    </div>
    <div class="box-article">
      <div class="box-main">
        <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
        <div class="box-overview">
          <?php
$scf_text = get_post_meta( get_the_ID(), 'overview', true );

if ( isset( $scf_text ) ) {
	echo '<p class="overview">' . $scf_text . '</p>';
}
              ?>
          <ul class="list-information">
            <li class="info">
              <p class="label">構造</p>
              <?php
$scf_text = get_post_meta( get_the_ID(), 'structure', true );

if ( isset( $scf_text ) ) {
	echo '<p class="data">' . $scf_text . '</p>';
}
              ?>
            </li>
            <li class="info">
              <p class="label">工期</p>
              <?php
$scf_text = get_post_meta( get_the_ID(), 'period', true );

if ( isset( $scf_text ) ) {
	echo '<p class="data">' . $scf_text . '</p>';
}
              ?>
            </li>
            <li class="info">
              <p class="label">延床面積</p>
              <?php
$scf_text = get_post_meta( get_the_ID(), 'floor_area', true );

if ( isset( $scf_text ) ) {
	echo '<p class="data">' . $scf_text . '</p>';
}
              ?>
            </li>
            <li class="info">
              <p class="label">所在地</p>
              <?php
$scf_text = get_post_meta( get_the_ID(), 'address', true );

if ( isset( $scf_text ) ) {
	echo '<p class="data">' . $scf_text . '</p>';
}
              ?>
            </li>
          </ul>
        </div>
        <?php the_content();?>
           <div class="button green sp">
        <a href="<?php echo home_url('/works'); ?>" class="link">
          施工事例一覧へ
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="施工事例一覧へ" class="icon">
        </a>
      </div>
      </div>
      <div class="box-related">
        <?php
// カスタム投稿タイプのシングルページで使用されるタクソノミーを指定
$taxonomy = 'works_category'; // ここで 'your_taxonomy' を実際のタクソノミー名に置き換えます

// 現在の投稿IDを取得
$current_post_id = get_the_ID();

// 現在の投稿のタクソノミー（カテゴリー）を取得
$terms = wp_get_post_terms($current_post_id, $taxonomy);

if ($terms && !is_wp_error($terms)) {
    $term_ids = wp_list_pluck($terms, 'term_id');

    // 同じタクソノミー（カテゴリー）の投稿を取得
    $related_args = array(
        'post_type' => 'works', // カスタム投稿タイプを指定
        'posts_per_page' => 1, // 表示する投稿数を1に設定
        'post__not_in' => array($current_post_id), // 現在の投稿を除外
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'term_id',
                'terms' => $term_ids,
            ),
        ),
    );

    $related_query = new WP_Query($related_args);

    // 関連投稿がある場合、表示
    if ($related_query->have_posts()) {
        while ($related_query->have_posts()) : $related_query->the_post(); ?>
        <div class="box-text">
          <p class="label">Recommend work</p>
          <h2 class="works-title">
            <?php the_title(); ?>
          </h2>
          <p class="overview">
<?php
if(mb_strlen(SCF::get('overview'), 'UTF-8')>100){
	$text= mb_substr(SCF::get('overview'), 0, 100, 'UTF-8');
	echo $text.'…';
}else{
	echo SCF::get('overview');
}
?>
          </p>
          <div class="button green">
            <a href="<?php the_permalink(); ?>" class="link">
              詳しく見る
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="施工事例一覧へ"
                class="icon">
            </a>
          </div>
        </div>
        <div class="box-thumbnail"><?php the_post_thumbnail(); ?></div>
        <?php endwhile;
        wp_reset_postdata();
    }
}
?>

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