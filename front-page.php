<?php
/**
 * THINKAテンプレートのフロントページのファイルです。
 *
 * @since THINKA 1.0.0
 */

get_header();
?>

<main class="top-page">
  <?php
get_template_part( 'includes/header-top' );
?>

  <section class="section-mv">
    <div class="container">
      <div class="box-text">
        <h1 class="copy">創業70年の<br class="xs">実績と信頼</h1>
        <p class="english">70 Years of Experience and Trust</p>
      </div>
      <video class="video pc" loop muted playsinline autoplay>
        <source type="video/mp4" src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/mv-pc.mp4">
      </video>
       <video class="video sp" loop muted playsinline autoplay>
        <source type="video/mp4" src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/mv-sp.mp4">
      </video>
    </div>
  </section>
  <section class="section-announce">
    <div class="container">
      <h2 class="title">
        社名変更のお知らせ
      </h2>
      <p class="text">
        <span class="serif">2026年4月1日</span>をもって、<br class="pc">
株式会社堀健は株式会社THINKAへ社名変更いたしました。<br class="pc">
これからも皆様のご期待に添えますよう努力してまいる所存です。<br class="pc">
今後とも株式会社THINKAをどうぞよろしくお願いいたします。
      </p>
    </div>
  </section>

  <?php
    get_template_part( 'includes/works-slider' );
  ?>

  <section class="section-large-facility">
    <div class="container">
      <div class="box-text">
        <h2 class="section-title">
          <span class="english">Large Facility</span>
          大型施設
        </h2>
        <p class="overview">システム建築を用いた<br class="xs">大型施設を強みとしています。</p>
      </div>
      <div class="button pc">
        <a href="<?php echo home_url('/large-facility'); ?>" class="link">
          もっと見る
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-white.svg" alt="もっと見る" class="icon">
        </a>
      </div>
      <div class="button sp">
        <a href="<?php echo home_url('/large-facility'); ?>" class="link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-white.svg" alt="もっと見る" class="icon">
        </a>
      </div>
    </div>
  </section>

  <?php
get_template_part( 'includes/flow' );
?>


  <section class="section-news">
    <div class="container">
      <div class="box-overview">
        <div class="box-text">
          <h2 class="section-title">
            <span class="english">News</span>
            お知らせ
          </h2>
          <p class="overview">THINKAの日常と<br class="xs">お知らせを掲載しています。</p>
        </div>
        <div class="button green pc">
          <a href="<?php echo home_url('/category/news'); ?>" class="link">
            もっと見る
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="もっと見る" class="icon">
          </a>
        </div>
      </div>

      <ul class="list-news">
        <?php
            $posts = new WP_Query(array(
              'posts_per_page' => 3,
              'post_type' => 'post',
              'orderby' => 'date',
              'order'   => 'DESC',
              'category_name' => 'news',
            ));

            while ($posts->have_posts()) {
                $posts->the_post(); ?>
        <li class="news fade">
          <a href="<?php the_permalink(); ?>" class="link">
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
            <div class="box-information">
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
        <?php
            }
            wp_reset_postdata();
            ?>
      </ul>
      <div class="button green sp">
          <a href="<?php echo home_url('/news'); ?>" class="link">
            もっと見る
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="もっと見る" class="icon">
          </a>
        </div>
    </div>
  </section>

  <section class="section-recruit">
    <div class="container">
      <div class="box-text">
        <div class="box-title">
          <h2 class="section-title">
            <span class="english">Recruit</span>
            採用情報
          </h2>
          <p class="overview">THINKAで働く仲間を<br class="xs">募集しています。</p>
        </div>
        <p class="head">- 変わらないことは、変わり続けること。</p>
        <p class="text">
          THINKAで働く社員の平均年齢は37.9歳。<br class="pc">
          年々平均年齢は下がり、建設業界では異例とも言われています。<br class="pc">
         私たちが採用に力を入れる理由は、新しい世代とともに<br class="pc">
         建設業界を前進させていきたいという強い想いから。<br class="pc">
          建設って面白い！と思える業界の一歩を作っていきたいと考えています。
        </p>
        <div class="button green">
          <a href="<?php echo home_url('/recruit'); ?>" class="link">
            もっと見る
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="もっと見る" class="icon">
          </a>
        </div>
      </div>
      <div class="box-image">
        <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/image-recruit1.jpg" alt="採用情報写真1枚目" class="image">
        <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/image-recruit2.jpg" alt="採用情報写真2枚目" class="image">
      </div>
    </div>
  </section>

  <section class="section-company">
    <div class="container">
      <div class="box-text">
        <h2 class="section-title">
          <span class="english">Company</span>
          会社案内
        </h2>
        <p class="overview">THINKAのひとりひとりが持つ「二人三脚のものづくり」という姿勢を軸に<br class="pc">
          お客様と共にご満足を作っていきます。</p>
      </div>
      <div class="button pc">
        <a href="<?php echo home_url('/company'); ?>" class="link">
          もっと見る
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-white.svg" alt="もっと見る" class="icon">
        </a>
      </div>
         <div class="button sp">
        <a href="<?php echo home_url('/company'); ?>" class="link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-white.svg" alt="もっと見る" class="icon">
        </a>
      </div>
    </div>
  </section>

  <?php
get_template_part( 'includes/footer' );
?>



</main><!-- #site-content -->
<?php
get_footer();
?>