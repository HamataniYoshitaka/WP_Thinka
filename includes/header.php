<header class="header">
  <div class="container">
    <div class="box-logo">
      <a href="<?php echo home_url('/'); ?>" class="link">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-black.svg" alt="株式会社堀健" class="logo">
      </a>
    </div>
      <ul class="list-menu normal">
          <li class="menu">
            <a href="<?php echo home_url('/works'); ?>" class="link">施工事例</a>
          </li>
          <li class="menu">
            <a href="<?php echo home_url('/flow'); ?>" class="link">施工の流れ</a>
          </li>
          <li class="menu">
            <a href="<?php echo home_url('/large-facility'); ?>" class="link">大型施設</a>
          </li>
          <li class="menu">
            <a href="<?php echo home_url('/price'); ?>" class="link">参考価格</a>
          </li>
          <li class="menu">
            <a href="<?php echo home_url('/news'); ?>" class="link">お知らせ</a>
          </li>
          <li class="menu">
            <a href="<?php echo home_url('/company'); ?>" class="link">会社案内</a>
          </li>
          <li class="menu">
            <a href="<?php echo home_url('/recruit'); ?>" class="link">採用情報</a>
          </li>
        </ul>

  </div>
</header>
<?php include_once(__DIR__ . '/menu-sp.php'); ?>