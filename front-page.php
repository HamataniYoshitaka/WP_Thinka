<?php
/**
 * horikenテンプレートのフロントページのファイルです。
 *
 * @since horiken 1.0.0
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
        <h1 class="copy">創業65年の<br class="xs">実績と信頼</h1>
        <p class="english">65 Years of Experience and Trust</p>
      </div>
      <video class="video pc" loop muted playsinline autoplay>
        <source type="video/mp4" src="<?php echo get_theme_file_uri('/assets/imgs/mv-pc.mp4') ?>">
      </video>
       <video class="video sp" loop muted playsinline autoplay>
        <source type="video/mp4" src="<?php echo get_theme_file_uri('/assets/imgs/mv-sp.mp4') ?>">
      </video>
    </div>
  </section>

  <section class="section-works">
    <div class="container gap-8">
      <div class="box-text shrink-0">
        <h2 class="section-title">
          <span class="english">Works</span>
          施工事例
        </h2>
        <p class="overview">挑み続け、進化し続ける<br>多様な実績をご紹介します。</p>
        <div class="button green">
          <a href="<?php echo site_url('/works'); ?>" class="link">
            もっと見る
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="もっと見る" class="icon">
          </a>
        </div>
      </div>
      <div class="grow overflow-hidden mt-6 md:mt-0 -ml-5 md:ml-0">
        <div class="slick-works">
          <?php 
            $args = array(
              'post_type' => 'works',
              'posts_per_page' => 6,
              'orderby' => 'date',
              'order' => 'DESC',
            );
            $works = new WP_Query($args);
            while ($works->have_posts()) :
              $works->the_post();
              // サムネイルのURLを取得
              $thumbnail_id = get_post_thumbnail_id();
              $thumbnail_img = wp_get_attachment_image_src($thumbnail_id, 'large');
          ?>
          <div class="w-52 md:w-64 lg:w-72 xl:w-96 pr-4 md:pr-6 lg:pr-8 ">
            <a class="block w-full h-full transition-opacity hover:opacity-80" href="<?php echo the_permalink(); ?>">
              <img src="<?php echo $thumbnail_img[0]; ?>" class="w-full h-64 md:h-72 lg:h-72 xl:h-108 object-cover" />
              <div class="flex justify-between mt-6">
                <div>
                  <p class="title text-black"><?php the_title(); ?></p>
                  <p class="text-xs text-gray-600"><?php echo get_the_date('Y.m.d'); ?></p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="もっと見る" class="w-7 h-7 block">
              </div>
            </a>
          </div>
          <?php 
            endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </section>
  <script>
    $(function(){
      $('.slick-works').slick({
        dots: false,
        arrows: false,
        variableWidth: true,
        infinite: false,
      });
    })
  </script>

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
        <a href="<?php echo site_url('/large-facility'); ?>" class="link">
          もっと見る
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-white.svg" alt="もっと見る" class="icon">
        </a>
      </div>
      <div class="button sp">
        <a href="<?php echo site_url('/large-facility'); ?>" class="link">
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
          <p class="overview">堀健の日常と<br class="xs">お知らせを掲載しています。</p>
        </div>
        <div class="button green pc">
          <a href="<?php echo site_url('/news'); ?>" class="link">
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
            ));

            while ($posts->have_posts()) {
                $posts->the_post(); ?>
        <li class="news fade">
          <a href="#<?php the_ID(); ?>" class="link">
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
          <a href="<?php echo site_url('/news'); ?>" class="link">
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
          <p class="overview">堀健で働く仲間を<br class="xs">募集しています。</p>
        </div>
        <p class="head">- 変わらないことは、変わり続けること。</p>
        <p class="text">
          堀健で働く社員の平均年齢は37.9歳。<br class="pc">
          年々平均年齢は下がり、建設業界では異例とも言われています。<br class="pc">
         私たちが採用に力を入れる理由は、新しい世代とともに<br class="pc">
         建設業界を前進させていきたいという強い想いから。<br class="pc">
          建設って面白い！と思える業界の一歩を作っていきたいと考えています。
        </p>
        <div class="button green">
          <a href="<?php echo site_url('/recruit'); ?>" class="link">
            もっと見る
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="もっと見る" class="icon">
          </a>
        </div>
      </div>
      <div class="box-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/top/image-recruit1.png" alt="採用情報写真1枚目" class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/top/image-recruit2.png" alt="採用情報写真2枚目" class="image">
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
        <p class="overview">堀健のひとりひとりが持つ「二人三脚のものづくり」という姿勢を軸に<br class="pc">
          お客様と共に、明日の風景をつくっていきます。</p>
      </div>
      <div class="button pc">
        <a href="<?php echo site_url('/large-facility'); ?>" class="link">
          もっと見る
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-white.svg" alt="もっと見る" class="icon">
        </a>
      </div>
         <div class="button sp">
        <a href="<?php echo site_url('/company'); ?>" class="link">
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