 <header class="header top">
   <div class="container">
     <div class="box-logo">
       <a href="<?php echo site_url('/'); ?>" class="link">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo.svg" alt="株式会社堀健" class="image white">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-black.svg" alt="株式会社堀健"
           class="image black">
       </a>
     </div>
     <ul class="list-menu">
       <li class="menu">
         <a href="<?php echo site_url('/works'); ?>" class="link">施工事例</a>
       </li>
       <li class="menu">
         <a href="<?php echo site_url('/flow'); ?>" class="link">施工の流れ</a>
       </li>
       <li class="menu">
         <a href="<?php echo site_url('/large-facility'); ?>" class="link">大型施設</a>
       </li>
       <li class="menu">
         <a href="<?php echo site_url('/price'); ?>" class="link">参考価格</a>
       </li>
       <li class="menu">
         <a href="<?php echo site_url('/news'); ?>" class="link">お知らせ</a>
       </li>
       <li class="menu">
         <a href="<?php echo site_url('/company'); ?>" class="link">会社案内</a>
       </li>
       <li class="menu">
         <a href="<?php echo site_url('/recruit'); ?>" class="link">採用情報</a>
       </li>
     </ul>
     <div class="hamburger-menu md">
       <span class="line">
       </span>
       <span class="line">
       </span>
       <span class="line">
       </span>
     </div>

<?php /*

     <div class="menu-sp">
       <div class="box-menu-content">
         <ul class="list-menu">
           <li class="menu">
             <a href="<?php echo site_url('/'); ?>" class="link">
               トップページ
             </a>
           </li>
           <li class="menu">
             <a href="<?php echo site_url('/works'); ?>" class="link">施工事例</a>
           </li>
           <li class="menu">
             <a href="<?php echo site_url('/flow'); ?>" class="link">施工の流れ</a>
           </li>
           <li class="menu">
             <a href="<?php echo site_url('/large-facility'); ?>" class="link">大型施設</a>
           </li>
           <li class="menu">
             <a href="<?php echo site_url('/price'); ?>" class="link">参考価格</a>
           </li>
           <li class="menu">
             <a href="<?php echo site_url('/news'); ?>" class="link">お知らせ</a>
           </li>
           <li class="menu">
             <a href="<?php echo site_url('/company'); ?>" class="link">会社案内</a>
           </li>
           <li class="menu">
             <a href="<?php echo site_url('/recruit'); ?>" class="link">採用情報</a>
           </li>
         </ul>
         <div class="box-logo">
           <a href="<?php echo site_url('/'); ?>" class="link">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-black.svg" alt="株式会社堀健"
               class="image">
           </a>
           <div class="box-text">
            <p class="copy">創業65年の実績と信頼</p>
            <p class="address">〒596-0831 大阪府岸和田市畑町4-3-7</p>
           </div>
         </div>
       </div>
     </div>
     */ ?>
   </div>
 </header>

 <?php include_once(__DIR__ . '/menu-sp.php'); ?>