<?php
/**
 * horikenテンプレートの株式会社堀健についてのページのファイルです。
 *
 * @since horiken 1.0.0
 */

get_header();
?>


<main class="contact-page">
  <?php
get_template_part( 'includes/header' );
?>

  <section class="section-mv">
    <div class="container">
      <div class="box-title">
        <h1 class="page-title">
          <span class="english">Contact</span>
          お問い合わせ
        </h1>
        <p class="overview">ご契約まで一切費用はかかりません。お気軽にお問い合わせください。</p>
      </div>
      <ul class="list-step">
        <li class="step">
          <p class="label">Step 01</p>
          <p class="text">お問い合わせフォーム入力</p>
        </li>
        <li class="step">
          <p class="label">Step 02</p>
          <p class="text">お問い合わせ完了</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-contents">
    <div class="container">
      <div class="box-form">
        <div class="box-left">
  <p class="notice">*印の項目は入力必須です。</p>
        <?php //echo do_shortcode( '[mwform_formkey key="18"]' ); ?>
        <div class="form-wrapper">
          <?php the_content(); ?>
        </div>
        </div>
      </div>
      <div class="box-othertool">
        <p class="text">お急ぎの方はお電話でもお問い合わせを受け付けております。下記電話番号へお気軽にお問い合わせください。</p>
        <div class="box-contact">
          <a href="tel:072-427-1301" class="link">
            <p class="label">お電話でお問い合わせ</p>
            <p class="text">072-427-1301</p>
            <p class="notice">平日9:00 - 17:00</p>
          </a>
        </div>
      </div>
    </div>
  </section>


    <?php
get_template_part( 'includes/flow' );
?>
  <?php
get_template_part( 'includes/footer' );
?>

</main><!-- #site-content -->
<?php
get_footer();
?>