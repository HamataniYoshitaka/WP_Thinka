<?php
/**
 * horikenテンプレートの採用情報ページのファイルです。
 *
 * @since horiken 1.0.0
 */

get_header();
?>

<main class="interview-page">
  <?php
get_template_part( 'includes/header' );
?>


  <section class="section-mv">
    <div class="container">
      <p class="page-title">
        <span class="english">Recruit</span>
        スタッフインタビュー
      </p>
      <h1 class="interview-title">営業 / 積算 / 監督 オールマイティな技術者になる</h1>
      <div class="box-text">
        <p class="position">施工管理</p>
        <p class="name">白井 瞭成</p>
      </div>
    </div>
  </section>
  <section class="section-contents">
    <div class="container">
      <div class="box-content">
        <div class="box-text">
          <p class="title">会社の雰囲気</p>
          <p class="text">
            当社は本当に親切な人たちが多いです。教えてあげよう、フォローしてあげようとしてくれます。失敗したときもフォローしてくださってありがたかったです。休憩中も「弁当あるか？メシいこか？」などのコミュニケーションを取ってくれるので、すごく助けられています。
資格取得にも理解があり、現在2級建築士の資格の勉強で学校に通っているのですが、火曜日は早退をさせてもらっています。工事に関しても、住宅のちょっとした修理から、何億円規模という新築工事まで経験できるので勉強になることばかりです。いずれは経験を積んで所長になることが今の夢。新築工事を問題なくできるようなスキルを身につけたいです。</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/interview2/1.png" alt=""
          class="image">
      </div>
      <div class="box-content row">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/interview2/2.png" alt=""
          class="image">
        <div class="box-text">
          <p class="title">現場がスキルアップの場所</p>
          <p class="text">
           私はモノづくりが好きなので、率先して作業したい！と思うタイプです。なので気候の暑いや寒い以外はあまり大変だと感じることはありません。むしろ楽しいですね。嬉しいことはたくさんあって、施主様に喜んでいただくこと、下請けの職人さんに褒めていただくことなどやりがいにつながります。現場では多くの人と関わります。親世代の人にも指示を出すことが必要なので礼儀は大切にしています。言うべきことは言わないといけないので、図太さは大事なのかなと感じます。現場で会話をしているだけで勉強になることが多いですね。材質やねじの種類なんかは職人さんたちから教えてもらいました。
          </p>
        </div>
      </div>
      <div class="box-content no-image">
        <div class="box-text">
          <p class="title">面接は ”話しやすかった”</p>
          <p class="text">
            就職活動では何社か受けたのですが、当社は「めっちゃしゃべって帰ったなあ」というくらい話しやすい雰囲気が印象的でした。監督以外に積算や営業など幅広い業務ができるという点も魅力的でしたね。入社してからは3つの現場を経験しました。1つは鉄骨の倉庫（在来工法）、2つ目は幼稚園の教室の改修工事、そして今竣工中のシステム建築の新築倉庫です。軽量鉄骨を使っています。大半は現場に出ていて内勤業務も現場でしています。建物の基礎など見えない部分に関しては、学生時代は本で学んだだけでイメージするしかなかったのですが、仕事をするとそこを見ることができたのがいい経験でした。
          </p>
        </div>
      </div>
      <div class="box-content no-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/interview2/3.png" alt=""
          class="image">
      </div>
    </div>
  </section>

  <section class="section-other-interview">
    <div class="container">
      <div class="box-text">
        <p class="title">Other people</p>
        <div class="box-text">
          <p class="position">施工管理</p>
          <p class="name">堀川人優</p>
        </div>
        <p class="interview-title">失敗から多くを学べる<br>技術者になる</p>
        <div class="button green">
          <a href="<?php echo site_url('/interview1'); ?>" class="link">
            インタビューを読む
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="インタビューを読む"
              class="icon">
          </a>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/interview1/mv.png" alt="インタビューを読む"
        class="image">
    </div>
  </section>


  <?php
get_template_part( 'includes/flow' );
?>
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