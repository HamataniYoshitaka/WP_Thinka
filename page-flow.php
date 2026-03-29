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
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flow/mv.png" alt="" class="image">
    </div>
  </section>


  <section class="section-contact-to-construction">
    <div class="container">
      <div class="box-title">
        <h2 class="section-title">
          <span class="english">Contact to Construction</span>
          お問い合わせから工事の流れ
        </h2>
        <p class="overview"><span class="highlight">ご契約まで一切費用はかかりません。</span>お気軽にお問い合わせください。</p>

      </div>
      <ul class="list-flow">
        <li class="flow">
          <p class="number"><span>1</span></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flow/step1.png" alt="お問い合わせ" class="image">
          <p class="text">お問い合わせ</p>
        </li>
        <li class="flow">
          <p class="number"><span>2</span></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flow/step2.png" alt="初回訪問・ヒアリング"
            class="image">
          <p class="text">初回訪問・ヒアリング</p>
        </li>
        <li class="flow">
          <p class="number"><span>3</span></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flow/step3.png" alt="ご提案" class="image">
          <p class="text">ご提案</p>
        </li>
        <li class="flow">
          <p class="number"><span>4</span></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flow/step4.png" alt="業者決定(設計契約締結)"
            class="image">
          <p class="text">業者決定(設計契約締結)</p>
        </li>
        <li class="flow">
          <p class="number"><span>5</span></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flow/step5.png" alt="実施設計・申請業務"
            class="image">
          <p class="text">実施設計・申請業務</p>
        </li>
        <li class="flow">
          <p class="number"><span>6</span></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flow/step6.png" alt="工事請負契約締結"
            class="image">
          <p class="text">工事請負契約締結</p>
        </li>
        <li class="flow">
          <p class="number"><span>7</span></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flow/step7.png" alt="工事着工" class="image">
          <p class="text">工事着工</p>
        </li>
        <li class="flow">
          <p class="number"><span>8</span></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flow/step8.png" alt="アフターケア" class="image">
          <p class="text">アフターケア</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-construction">
    <div class="container">
      
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