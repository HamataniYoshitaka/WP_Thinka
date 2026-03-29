<?php
/**
 * THINKAテンプレートの施工の流れページのファイルです。
 *
 * @since THINKA 1.0.0
 */

get_header();
?>

<main class="flow-page">
  <?php
get_template_part( 'includes/header' );
?>


  <section class="section-mv">
    <div class="container">
      <div class="box-title">
        <h1 class="page-title">
          <span class="english">Flow</span>
          施工の流れ
        </h1>
        <p class="overview">THINKAの施工の流れを掲載しています。</p>
      </div>
      <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/mv-3.jpg" alt="" class="image">
    </div>
  </section>

  <section class="section-menu xs">
    <div class="container">
      <ul class="list-anchor">
        <li class="anchor">
          <a href="<?php echo home_url('/flow#contact'); ?>" class="link">
            お問い合わせから工事
          </a>
        </li>
         <li class="anchor">
          <a href="<?php echo home_url('/flow#construction'); ?>" class="link">
            工事の流れ
          </a>
        </li>
      </ul>
    </div>
  </section>
  <section class="section-contact-to-construction" id="contact">
    <div class="container">
      <div class="box-title">
        <h2 class="section-title">
          <span class="english">Contact to Construction</span>
          お問い合わせから工事の流れ
        </h2>
        <p class="overview"><span class="highlight">ご契約まで一切費用はかかりません。</span>お気軽にお問い合わせください。</p>

      </div>
      <ul class="list-contact-construction">
        <li class="contact-construction">
          <p class="number"><span>1</span></p>
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/step1.webp" alt="お問い合わせ" class="image">
          <h3 class="text">お問い合わせ</h3>
        </li>
        <li class="contact-construction">
          <p class="number"><span>2</span></p>
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/step2.webp" alt="初回訪問・ヒアリング"
            class="image">
          <h3 class="text">初回訪問・<br class="xs">ヒアリング</h3>
        </li>
        <li class="contact-construction">
          <p class="number"><span>3</span></p>
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/step3.webp" alt="ご提案" class="image">
          <h3 class="text">ご提案</h3>
        </li>
        <li class="contact-construction">
          <p class="number"><span>4</span></p>
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/step4.webp" alt="業者決定(設計契約締結)"
            class="image">
          <h3 class="text">業者決定<br class="xs">(設計契約締結)</h3>
        </li>
        <li class="contact-construction">
          <p class="number"><span>5</span></p>
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/step5.webp" alt="実施設計・申請業務"
            class="image">
          <h3 class="text">実施設計・申請業務</h3>
        </li>
        <li class="contact-construction">
          <p class="number"><span>6</span></p>
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/step6.webp" alt="工事請負契約締結"
            class="image">
          <h3 class="text">工事請負契約締結</h3>
        </li>
        <li class="contact-construction">
          <p class="number"><span>7</span></p>
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/step7.webp" alt="工事着工" class="image">
          <h3 class="text">工事着工</h3>
        </li>
        <li class="contact-construction">
          <p class="number"><span>8</span></p>
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/step8.webp" alt="アフターケア" class="image">
          <h3 class="text">アフターケア</h3>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-construction" id="construction">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Construction</span>
        工事の流れ
      </h2>
  <ul class="list-contact-construction">
    <?php 
    // クエリパラメータを設定
    $args = array(
        'post_type' => 'flow', 
        'orderby' => 'date',                   // 日付で並べ替え
        'order' => 'ASC',                      // 昇順 (古い順) に並べ替え
        'posts_per_page' => -1                 // 表示する投稿数 (-1は全ての投稿)
    );

    // カスタムクエリを作成
    $custom_query = new WP_Query($args);

    // クエリのループを開始
    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
    <li class="contact-construction fade">
        <a class="link" href="<?php the_permalink(); ?>">
            <p class="number">
                <?php
                $scf_text = get_post_meta(get_the_ID(), 'number', true);
                if (isset($scf_text)) {
                    echo '<span>' . $scf_text . '</span>';
                }
                ?>
            </p>
            <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            <h3 class="title">
              <?php echo get_the_title(); ?>
            </h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="詳しく見る" class="icon">
        </a>
    </li>
    <?php endwhile; ?>

    <?php 
    // クエリをリセットしてメインクエリに戻す
    wp_reset_postdata(); 
    ?>
</ul>

    </div>
  </section>


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