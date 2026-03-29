<?php
/**
 * 固定ページのデフォルトテンプレート
 *
 * @since THINKA 1.0.0
 */

get_header();
?>

<main class="company-page">
  <?php
    get_template_part( 'includes/header' );
  ?>
  <section class="section-mv">
    <div class="container" style="padding-bottom: 100px;">
      <div class="box-title">
        <h1 class="page-title">
          <?php the_title(); ?>
        </h1>
      </div>
      <?php the_content(); ?>
    </div>
  </section>
  <?php
    get_template_part( 'includes/footer' );
  ?>

</main><!-- #site-content -->
<?php
get_footer();
?>