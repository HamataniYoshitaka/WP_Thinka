<?php
/**
 * horikenテンプレートの採用情報ページのファイルです。
 *
 * @since horiken 1.0.0
 */

get_header();
?>

<main class="recruit-page">
  <?php
get_template_part( 'includes/header' );
?>


  <section class="section-mv">
    <div class="container">
      <div class="box-title">
        <h1 class="page-title">
          <span class="english">Recruit</span>
          採用情報
        </h1>
        <p class="overview">堀健で働く仲間を募集しています</p>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/mv.png" alt="" class="image">
    </div>
  </section>

  <section class="section-message" id="message">
    <div class="container">
      <div class="box-content">
        <div class="box-text">
          <p class="title">
            よき仲間がよき組織へと成長させる。
          </p>
          <p class="text">
            当社は、お客様のご要望に寄り添うことをモットーに、地域に根差した建築会社として多くの信頼を築いてきました。当社の強みは施工管理者が、見積、積算、現場監督、竣工後のアフターフォロー、そして次回工事のプランニングまですべて責任を持って担当することです。更地、時には土地のない状態からご相談いただくこともあり、お客様の要望を具現化するプロフェッショナルとして、責任を持ってお手伝いをしています。<br
              class="pc">会社の成長、実績、そして信頼は、他ならない社員ひとりひとりの努力そのものです。
          </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/message1.png" alt="" class="image">
      </div>
      <div class="box-content">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/message2.png" alt="" class="image">
        <div class="box-text">
          <p class="text">
            建物が完成すると、大きな感動を味わいます。お客様の建物ではあるのですが、自分たちが計画し、レイアウトし、時に予想外のことに対面しながらも完成を目指して奮闘してきた建物はまさに「私の建物」。たくさんの思いが喜びに代わる瞬間です。ともにこの喜びを分かち合いたいと思っています。<br
              class="pc"><br>また、人生において仕事だけではなくプライベートの時間も大切です。人間味というのは、仕事だけではなく、日々の生活や学びや遊びから生まれると考えています。現場だけではなく、いろんな場所に視点を移すことで、視野が広がってゆきます。よく働き、よく遊び、よく学び、よく休むこと。学生の皆さんも、今目の前にあることを全力で楽しんでください。
          </p>
        </div>
      </div>
      <ul class="list-gallery">
        <li class="gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/gallery1.png" alt="" class="image">
        </li>
        <li class="gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/gallery2.png" alt="" class="image">
        </li>
        <li class="gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/gallery3.png" alt="" class="image">
        </li>
      </ul>
    </div>
  </section>

      <section class="section-menu xs">
    <div class="container">
      <ul class="list-anchor">
         <li class="anchor">
          <a href="<?php echo site_url('/recruit#interview'); ?>" class="link">
        スタッフインタビュー
          </a>
        </li>
        <li class="anchor">
          <a href="<?php echo site_url('/recruit#position'); ?>" class="link">
        募集職種
          </a>
        </li>
         <li class="anchor">
          <a href="<?php echo site_url('/recruit#step'); ?>" class="link">
          選考ステップ
          </a>
        </li>
          <li class="anchor">
          <a href="<?php echo site_url('/recruit#form'); ?>" class="link">
         応募フォーム
          </a>
        </li>
      </ul>
    </div>
  </section>


  <section class="section-interview" id="interview">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Interview</span>
        スタッフ<br class="pc">
        インタビュー
      </h2>
      <ul class="list-interview">
        <li class="interview">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/interview-horikawa.png" alt=""
            class="image">
          <div class="box-text">
            <p class="position">施工管理</p>
            <p class="name">堀川 人優</p>
            <p class="title">失敗から多くを学べる<br class="pc">技術者になる</p>
            <div class="button green">
              <a href="<?php echo site_url('/interview1'); ?>" class="link">
                インタビューを読む
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="インタビューを読む"
                  class="icon">
              </a>
            </div>
          </div>
        </li>
        <li class="interview">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/interview-shirai.png" alt=""
            class="image">
          <div class="box-text">
            <p class="position">施工管理</p>
            <p class="name">白井 瞭成</p>
            <p class="title">営業 / 積算 / 監督<br>オールマイティな技術者になる</p>
            <div class="button green">
              <a href="<?php echo site_url('/interview2'); ?>" class="link">
                インタビューを読む
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="インタビューを読む"
                  class="icon">
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-position" id="position">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Recruitment type</span>
        募集職種
      </h2>
      <div class="box-content">
        <div class="box-type">
          <p class="title">施工管理(正社員)</p>
          <ul class="list-condition">
            <li class="condition">
              <p class="label">応募資格</p>
              <p class="data">未経験者歓迎</p>
            </li>
            <li class="condition">
              <p class="label">職種</p>
              <p class="data">施工管理：<br>
                建築工事の施工管理や、現場での工程管理・品質管理を行っていただきます。リーダーシップやマネジメント能力の求められる、大きなやりがいのある仕事です。</p>
            </li>
            <li class="condition">
              <p class="label">給与</p>
              <p class="data">240,000円～365,000円</p>
            </li>
            <li class="condition">
              <p class="label">応募資格</p>
              <p class="data">未経験者歓迎</p>
            </li>
          </ul>
          <div class="cover"></div>
          <div class="button">
            全ての条件を見る
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="もっと見る" class="icon">
          </div>
          <ul class="list-condition accordion">
            <li class="condition">
              <p class="label">応募資格</p>
              <p class="data">未経験者歓迎</p>
            </li>
            <li class="condition">
              <p class="label">職種</p>
              <p class="data">施工管理：<br>
                建築工事の施工管理や、現場での工程管理・品質管理を行っていただきます。リーダーシップやマネジメント能力の求められる、大きなやりがいのある仕事です。</p>
            </li>
            <li class="condition">
              <p class="label">給与</p>
              <p class="data">240,000円～365,000円</p>
            </li>
            <li class="condition">
              <p class="label">諸手当</p>
              <p class="data">未経験者歓迎</p>
            </li>
          </ul>
        </div>
        <div class="box-type">
          <p class="title">一般事務（正社員）</p>
          <ul class="list-condition">
            <li class="condition">
              <p class="label">応募資格</p>
              <p class="data">基本的なワード・エクセルの操作ができる方。簿記資格保持者優遇。</p>
            </li>
            <li class="condition">
              <p class="label">職種</p>
              <p class="data">一般事務
            </li>
            <li class="condition">
              <p class="label">給与</p>
              <p class="data">180,000円～330,000円</p>
            </li>
            <li class="condition">
              <p class="label">諸手当</p>
              <p class="data">住宅手当／通勤手当</p>
            </li>
          </ul>
          <div class="cover"></div>
          <div class="button">
            全ての条件を見る
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/arrow-green.svg" alt="もっと見る" class="icon">
          </div>
          <ul class="list-condition accordion">
            <li class="condition">
              <p class="label">応募資格</p>
              <p class="data">未経験者歓迎</p>
            </li>
            <li class="condition">
              <p class="label">職種</p>
              <p class="data">施工管理：<br>
                建築工事の施工管理や、現場での工程管理・品質管理を行っていただきます。リーダーシップやマネジメント能力の求められる、大きなやりがいのある仕事です。</p>
            </li>
            <li class="condition">
              <p class="label">給与</p>
              <p class="data">240,000円～365,000円</p>
            </li>
            <li class="condition">
              <p class="label">応募資格</p>
              <p class="data">未経験者歓迎</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section-entry" id="step">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Recruitment step</span>
        選考ステップ
      </h2>
      <ul class="list-step">
        <li class="step">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/step1.png" alt="" class="image pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/step1-sp.png" alt=""
            class="image sp">
          <p class="number"><span>1</span></p>
          <p class="label">応募フォームから<br class="pc">応募</p>
        </li>
        <li class="step">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/step2.png" alt="" class="image pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/step2-sp.png" alt=""
            class="image sp">
          <p class="number"><span>2</span></p>
          <p class="label">書類選考</p>
        </li>
        <li class="step">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/step3.png" alt="" class="image pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/step3-sp.png" alt=""
            class="image sp">
          <p class="number"><span>3</span></p>
          <p class="label">面接</p>
        </li>
        <li class="step">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/step4.png" alt="" class="image pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/recruit/step4-sp.png" alt=""
            class="image sp">
          <p class="number"><span>4</span></p>
          <p class="label">内定</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-form" id="form">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Apply form</span>
        応募フォーム
      </h2>
      <?php echo do_shortcode( '[mwform_formkey key="31"]' ); ?>
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