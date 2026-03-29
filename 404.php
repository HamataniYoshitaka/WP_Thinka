<?php
/**
 * 404
 *
 * @since THINKA 1.0.0
 */

get_header();
?>

<main class="post-news-page">
  <?php
get_template_part( 'includes/header' );
?>
  <article class="post-content">
    <div class="box-firstview">
      <div class="box-overview">
        <p class="page-title">Not found</p>
        <h1 class="title">
          404
        </h1>
      </div>
    </div>
    <div style="margin-bottom: 80px;">
      <p>お探しのページが見つかりませんでした。</p>
      <p>URLが間違っているか、ページが移動または削除された可能性があります。</p>
    </div>
    
     <div class="button green">
        <a href="<?php echo home_url(); ?>" class="link">
          TOPへ
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="お知らせ一覧へ" class="icon">
        </a>
      </div>
  </article>
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