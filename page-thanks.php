<?php
/**
 * horikenテンプレートの株式会社堀健についてのページのファイルです。
 *
 * @since horiken 1.0.0
 */

get_header();
?>


<main class="thanks-page">
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
      <div class="box-text">
        <p class="text">
          お問い合わせありがとうございました。内容を確認し、担当者よりご返信いたします。
          メールアドレスでご返信をご希望された方は、〇〇@horiken.comからのメールアドレスを受け入れるよう、ご入力いただいたメールアドレスの設定をお願いいたします。
          3営業日たっても返信がない場合は、お手数ですがもう一度お問い合わせいただきますようお願い申し上げます。
        </p>
        <div class="button green">
          <a href="<?php echo site_url('/'); ?>" class="link">
            TOPページへ
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="" class="icon">
          </a>
        </div>
      </div>
      <div class="box-image">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/contact/thanks.png" alt="" class="image">
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