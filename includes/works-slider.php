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