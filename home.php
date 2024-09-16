<?php
/**
 * horikenテンプレートのお知らせ一覧ページのファイルです。
 *
 * @since unajiro 1.0.0
 */

get_header();
?>

<main class="news-page">
  <?php
get_template_part( 'includes/header' );
?>

  <section class="section-mv">
    <div class="container">
      <div class="box-title">
        <h1 class="page-title">
          <span class="english">News</span>
          お知らせ
        </h1>
        <p class="overview">堀健の日常とお知らせを掲載しています。</p>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/news/mv.png" alt="" class="image">
    </div>
  </section>

  <section class="section-contents">
    <div class="container">
      <?php
$args = array(
    'taxonomy' => 'category', 
    'hide_empty' => 0, 
);
$categories = get_categories($args);
$current_category_id = get_queried_object_id(); // 現在表示されているカテゴリーのIDを取得
$is_category_page = is_category(); // 現在のページがカテゴリーアーカイブページかどうかを判定
?>
      <div class="box-category">
        <button class="toggle-category">Category</button>
        <div class="category-dropdown">
          <ul class="list-category">
            <li class="category <?php echo !$is_category_page ? 'active' : ''; ?>">
              <a href="<?php echo site_url('/news'); ?>" class="link">すべて</a>
            </li>

            <?php if (is_array($categories) && !empty($categories)) { ?>
            <?php foreach($categories as $category) { 
                    $class = ($current_category_id == $category->term_id) ? 'active' : ''; // 現在のカテゴリーIDと比較
                ?>
            <li class="category js-post-category <?php echo $class; ?>">
              <a class="link" href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a>
            </li>
            <?php } ?>
            <?php } else { ?>
            <li class="category">カテゴリーがありません。</li>
            <?php } ?>
          </ul>
        </div>
      </div>


      <div class="box-news">
        <ul class="list-news">
          <?php while (have_posts()) : the_post(); ?>
          <li class="news fade">
            <a class="link" href="<?php the_permalink(); ?>">
              <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
              <p class="title">
                <?php
                if(mb_strlen($post->post_title)>47) {
                  $title= mb_substr($post->post_title,0,47) ;
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  }
              ?>
              </p>
              <div class="box-imformation">
                <p class="date"><?php echo get_the_date(); ?></p>
                <ul class="list-category">
                  <?php
                $categories = get_the_category();
                foreach ((array)$categories as $category) {
                  echo '<li class=" .$cat->slug. category">' . $category->name . '</li>';
                }
                ?>
                </ul>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <div class="box-pagenation fade">
          <?php
              echo paginate_links(array(
                'end_size' => 1,
                'mid_size' => 3,
                'prev_text' => '<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="14" cy="14" r="13.5" transform="rotate(-180 14 14)" fill="#F3F7F5" stroke="#007F41"/>
<path d="M12.0345 14.6546L14.9537 16.8858C15.2827 17.1373 15.7573 16.9027 15.7573 16.4885L15.7573 12.0262C15.7573 11.6121 15.2827 11.3775 14.9537 11.6289L12.0345 13.8601C11.7726 14.0602 11.7726 14.4545 12.0345 14.6546Z" fill="#007F41"/>
</svg>

',
                'next_text' => '<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="14" cy="14" r="13.5" fill="#F3F7F5" stroke="#007F41"/>
<path d="M15.9655 13.3454L13.0463 11.1142C12.7173 10.8627 12.2427 11.0973 12.2427 11.5115L12.2427 15.9738C12.2427 16.3879 12.7173 16.6225 13.0463 16.3711L15.9655 14.1399C16.2274 13.9398 16.2274 13.5455 15.9655 13.3454Z" fill="#007F41"/>
</svg>
',
              ));
              ?>
        </div>
      </div>

    </div>
  </section>
  <?php
get_template_part( 'includes/contact' );
?>
  <?php
get_template_part( 'includes/footer' );
?>

</main>

<?php
get_footer();