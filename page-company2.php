<?php
/**
 * horikenテンプレートの会社概要ページのファイルです。
 *
 * @since horiken 1.0.0
 */

get_header();
?>

<main class="company-page">
  <?php
get_template_part( 'includes/header' );
?>


  <section class="section-mv">
    <div class="container">
      <div class="box-title">
        <h1 class="page-title">
          <span class="english">Company</span>
          会社案内
        </h1>
        <p class="overview">堀健についてご紹介します。</p>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/mv.png" alt="" class="image">
    </div>
  </section>

  <section class="section-message">
    <div class="container">
      <div class="box-text">
        <p class="title">
          二人三脚だからこそ、<br>できること。
        </p>
        <p class="text">
          私たちは実績と信頼を軸に60年、<br class="pc">地域の皆様と共に歩んでまいりました。
        </p>
        <p class="text">
          「堀健さんに頼んでよかった」<br class="pc">
          「また現場監督の〇〇さんに来てほしい」<br class="pc">
          と、お客様からたくさんのお声をいただきます。
        </p>
        <p class="text">
          次の10年、30年、50年に向けて、<br class="pc">
          私たちがこれからも大切にしたいこと。<br class="pc">
          それは、堀健のひとりひとりが持つ<br class="pc">
          「二人三脚のものづくり」という姿勢です。
        </p>
        <p class="text">
          お客様と共に、<br class="pc">
          地域の明日の風景をつくっていきます。
        </p>
        <p class="text">
          建設をもっと、おもしろく。
        </p>
      </div>
      <div class="box-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/message1.png" alt="" class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/message2.png" alt="" class="image">
      </div>
    </div>
  </section>

  <section class="section-mission">
    <div class="container">
      <ul class="list-philosophy">
        <li class="philosophy mission">
          <div class="box-text">
            <p class="label">Mission <span><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/label-mission.png" alt=""
                  class="image"></span></p>
            <h2 class="copy">
              声になる前の声をカタチに
            </h2>
            <p class="text">
              潜在的ニーズ、お客様自身も気付いていない要望を経験から読み取り、<br class="pc">
              提案し現場に反映させるまごころがお客様の想いを超えた満足を<br class="pc">造ることに繋がります。
            </p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/mission.png" alt=""
            class="image sp">
        </li>
        <li class="philosophy vision">
          <div class="box-text">
            <p class="label">Vision<span><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/label-vision.png" alt=""
                  class="image"></span></p>
            <h2 class="copy">
              建設をもっとおもしろく
            </h2>
            <p class="text">
              建設業界はマイナスな問題がトレンドに上がりがちですが、<br class="pc">
              いかに建設とは面白く魅力的な業界かをアピールして行きます。<br class="pc">
              その為に地域や日本にアクセントの様な『おもしろい』を創造し<br class="pc">業界のアップデートを計ります。
            </p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/vision.png" alt="" class="image sp">
        </li>
        <li class="philosophy value">
          <div class="box-text">
            <p class="label">Value<span><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/label-value.png" alt=""
                  class="image"></span></p>
            <h2 class="copy">
              建設を共に楽しむ
            </h2>
            <p class="text">
              計画段階から建設途中、完成引渡し、アフターやその後の計画までを<br class="pc">
              二人三脚の距離感で一緒に建設を楽しみ、お客様の満足を愉しみます。
            </p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/value.png" alt="" class="image sp">
        </li>
      </ul>
      <div class="box-illust pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/mission.png" alt=""
            class="image step1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/vision.png" alt=""
            class="image step2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/value.png" alt=""
            class="image step3">
      </div>
    </div>
  </section>

  <section class="section-number">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Numbers of horiken</span>
        数字で知る堀健
      </h2>
      <ul class="list-numbers">
        <li class="number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/number-establised.png" alt=""
            class="image">
          <div class="box-text">
            <p class="label">創業</p>
            <p class="number"><span class="strong">63</span>年</p>
          </div>
        </li>
        <li class="number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/number-staff.png" alt=""
            class="image">
          <div class="box-text">
            <p class="label">従業員数</p>
            <p class="number"><span class="strong">15</span>人</p>
          </div>
        </li>
        <li class="number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/number-holiday.png" alt=""
            class="image">
          <div class="box-text">
            <p class="label">年間休日</p>
            <p class="number"><span class="strong">110</span>日</p>
          </div>
        </li>
        <li class="number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/number-overtime.png" alt=""
            class="image">
          <div class="box-text">
            <p class="label">平均残業時間</p>
            <p class="number"><span class="strong">16.8</span>時間</p>
          </div>
        </li>
        <li class="number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/number-age.png" alt=""
            class="image">
          <div class="box-text">
            <p class="label">平均年齢</p>
            <p class="number"><span class="strong">37.9</span>歳</p>
          </div>
        </li>
        <li class="number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/number-paidholiday.png" alt=""
            class="image">
          <div class="box-text">
            <p class="label">有給平均取得日数</p>
            <p class="number"><span class="strong">7.2</span>日</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-information">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Company information</span>
        会社概要
      </h2>
      <ul class="list-information">
        <li class="information">
          <p class="label">会社名</p>
          <p class="data">株式会社 堀健 (かぶしきかいしゃ ほりけん)</p>
        </li>
        <li class="information">
          <p class="label">所在地</p>
          <p class="data">〒596-0831 大阪府岸和田市畑町4-3-7
            <a href="" class="link" target="_black">Google map</a></p>
        </li>
        <li class="information">
          <p class="label">電話番号</p>
          <p class="data">072-427-1301</p>
        </li>
        <li class="information">
          <p class="label">FAX番号</p>
          <p class="data">072-427-6552</p>
        </li>
        <li class="information">
          <p class="label">代表者</p>
          <p class="data">代表取締役社長 堀田幸一</p>
        </li>
        <li class="information">
          <p class="label">設立年月日</p>
          <p class="data">昭和34年2月</p>
        </li>
        <li class="information">
          <p class="label">資本金</p>
          <p class="data">45,000,000円</p>
        </li>
        <li class="information">
          <p class="label">業務内容</p>
          <p class="data">総合建設業</p>
        </li>
        <li class="information">
          <p class="label">建設業許可</p>
          <p class="data">大阪府知事許可 特定建築業 第6162号<br><br>
            土木工事業、建築工事業、大工工事業、左官工事業、とび土木工事業、石工事業、<br class="pc">
            屋根工事業、タイル・煉瓦・ブロック工事業、鋼構造物工事業、鉄筋工事業、<br class="pc">
            舗装工事業、しゅんせつ工事業、板金工事業、ガラス工事業、塗装工事業、防水工事業、内装仕上工事業 熱絶縁工事業、建具工事業、水道施設工事業、<br class="pc">
            住宅建築業（住宅性能保障登録店）</p>
        </li>
        <li class="information">
          <p class="label">従業員数</p>
          <p class="data">13名</p>
        </li>
        <li class="information">
          <p class="label">取引銀行</p>
          <p class="data">紀陽銀行 岸和田支店<br>三菱東京UFJ銀行 岸和田支店<br>三井住友銀行岸和支店</p>
        </li>
        <li class="information">
          <p class="label">資格技術者</p>
          <p class="data">一級建築士<br>一級建築施工管理士<br>一級土木施工管理士<br>宅地建物取引主任者</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-history">
    <div class="container">
      <h2 class="section-title">
        <span class="english">History</span>
        沿革
      </h2>
      <ul class="list-information">
        <li class="information">
          <p class="label">昭和34年2月</p>
          <p class="data">大阪府知事登録「ほ第10222号」にて個人企業として土木建築業を創立</p>
        </li>
        <li class="information">
          <p class="label">昭和42年10月</p>
          <p class="data">資本金500万円をもって株式会社に組織を変更し其の業務一切を継承して今日に至る</p>
        </li>
        <li class="information">
          <p class="label">平成11年1月</p>
          <p class="data">資本金2,500万円に増資</p>
        </li>
        <li class="information">
          <p class="label">平成24年7月</p>
          <p class="data">株式会社堀健に社名変更</p>
        </li>
        <li class="information">
          <p class="label">平成29年6月</p>
          <p class="data">資本金4,500万円に増資</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-machines">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Machines</span>
        保有重機・車輌
      </h2>
      <ul class="list-machines">
        <li class="machines">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/machines-excavator.png" alt=""
            class="image">
          <p class="name">ミニショベル</p>
          <p class="maker">日立建機日本株式会社 ZX20UR-5A</p>
        </li>
        <li class="machines">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/machines-lifttrack.png" alt=""
            class="image">
          <p class="name">フォークリフトトラック</p>
          <p class="maker">株式会社豊田自動織機 5FG15</p>
        </li>
        <li class="machines">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/machines-dump.png" alt=""
            class="image">
          <p class="name">スーパー強化ダンプ</p>
          <p class="maker">いすゞ自動車株式会社 NKR81-7042487</p>
        </li>
        <li class="machines">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/machines-carry.png" alt=""
            class="image">
          <p class="name">スズキキャリー</p>
          <p class="maker">スズキ株式会社 KKCU-P3</p>
        </li>
        <li class="machines">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/machines-eletric.png" alt=""
            class="image">
          <p class="name">発電機</p>
          <p class="maker">デンヨー株式会社 GA-2800ES-IV2</p>
        </li>
        <li class="machines">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/machines-cutter.png" alt=""
            class="image">
          <p class="name">コンクリートカッター</p>
          <p class="maker">大旭建機株式会社 TCC16S</p>
        </li>
      </ul>
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