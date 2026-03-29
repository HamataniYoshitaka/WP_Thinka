<?php
/**
 * THINKAテンプレートの会社概要ページのファイルです。
 *
 * @since THINKA 1.0.0
 */

get_header();
?>
<?php
get_template_part( 'includes/header' );
?>

<main class="company-page">


  <section class="section-mv">
    <div class="container">
      <div class="box-title">
        <h1 class="page-title">
          <span class="english">Company</span>
          会社案内
        </h1>
        <p class="overview">THINKAについてご紹介します。</p>
      </div>
      <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/mv-7.jpg" alt="" class="image">
    </div>
  </section>

  <section class="section-message" id="policy">
    <div class="container">
      <div class="box-text">
        <p class="title">
          二人三脚だからこそ、<br class="pc">できること。
        </p>
        <p class="text">
          私たちは実績と信頼を軸に70年、<br class="pc">地域の皆様と共に歩んでまいりました。
        </p>
        <p class="text">
          「THINKAさんに頼んでよかった」<br class="pc">
          「また現場監督の〇〇さんに来てほしい」<br class="pc">
          と、お客様からたくさんのお声をいただきます。
        </p>
        <p class="text">
          次の10年、30年、50年に向けて、<br class="pc">
          私たちがこれからも大切にしたいこと。<br class="pc">
          それは、THINKAのひとりひとりが持つ<br class="pc">
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
        <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/message1-1.jpg" alt="" class="image">
        <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/message2-1.jpg" alt="" class="image">
      </div>
    </div>
  </section>

  <section class="section-menu xs">
    <div class="container">
      <ul class="list-anchor">
        <li class="anchor">
          <a href="<?php echo home_url('/company#mvv'); ?>" class="link">
            ミッション・ビジョン・バリュー
          </a>
        </li>
        <li class="anchor">
          <a href="<?php echo home_url('/company#number'); ?>" class="link">
            数字で知るTHINKA
          </a>
        </li>
        <li class="anchor">
          <a href="<?php echo home_url('/company#information'); ?>" class="link">
            会社概要
          </a>
        </li>
        <li class="anchor">
          <a href="<?php echo home_url('/company#history'); ?>" class="link">
            沿革
          </a>
        </li>
        <li class="anchor">
          <a href="<?php echo home_url('/company#machine'); ?>" class="link">
            保有重機・車輌
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-mission" id="mvv">
    <div class="container">
      <h2 class="section-title mission">
        <span class="japanese">ミッション・ビジョン・バリュー</span>
        Mission・Vision・Value
      </h2>
      <ul class="list-philosophy">
        <li class="philosophy mission">
          <div class="box-text">
            <div class="box-copy">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/icon_mission.png" alt=""
              class="icon">
              <p class="label">Mission <span>提供価値</span></p>
              <h3 class="copy">
                声になる前の声をカタチに
              </h3>
            </div>
            <p class="text">
              幸福度が高い建物を追求し続ける。<br class="pc">
              お客様自身でも気付いていない潜在的なニーズをくみとり、<br class="pc">
              技術力にこだわった「<span class="english">THINKA</span>品質」でカタチにする。
            </p>
          </div>
          <p class="detail-title">「<span class="english">THINKA</span>品質」を生み出す方程式</p>
          <div class="box-detail">
            <div class="box-quality">
              <p class="title">
                くみとる<span>虜にさせる対人力</span>
              </p>
              <ul class="list-quality">
                <li class="card-quality">
                  <p class="overview">最適な印象力<span class="supplement">(表情・立場)</span></p>
                  <p class="detail">身だしなみ / あいさつ / 会話のトーン・テンポ</p>
                </li>
                <li class="card-quality">
                  <p class="overview">最適な対応力<span class="supplement">(場面、出来事)</span></p>
                  <p class="detail">スピード / レスポンス</p>
                </li>
                <li class="card-quality">
                  <p class="overview">繊細な温度感知力<span class="supplement">(その場の状況)</span></p>
                  <p class="detail">雰囲気 / 興味度 / 熱量</p>
                </li>
                <li class="card-quality">
                  <p class="overview">魅せる提案力<span class="supplement">(ワクワク)</span></p>
                  <p class="detail">3手先の提案 / 今までにない / 未来を魅せる</p>
                </li>
                <li class="card-quality">
                  <p class="overview">的確な可視力<span class="supplement">(相手の想い、考え、ビジョン)</span></p>
                  <p class="detail">潜在的ニーズ / 課題把握 / 意図の読解</p>
                </li>
              </ul>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/icon_times.svg" alt=""
              class="icon">
            <div class="box-quality">
              <p class="title">
                こだわる<span>高水準な技術力</span>
              </p>
              <ul class="list-quality">
                <li class="card-quality">
                  <p class="overview">遂げる工程管理力<span class="supplement">(イレギュラー発生も厭わず厳守)</span></p>
                  <p class="detail">良好な人間関係 / 柔軟な対応</p>
                </li>
                <li class="card-quality">
                  <p class="overview">高める価値創造力<span class="supplement">(予算内での最大値化)</span></p>
                  <p class="detail">決まり事・法令 / 予算を抑える知識 / デザイントレンド</p>
                </li>
                <li class="card-quality">
                  <p class="overview">沸かす士気向上力<span class="supplement">(好循環で安心安全な環境)</span></p>
                  <p class="detail">意識 / 気を張る / 無事故</p>
                </li>
                <li class="card-quality">
                  <p class="overview">魅せる感動品質力<span class="supplement">(次も頼みたくなる価値)</span></p>
                  <p class="detail">歴史を重ねて得た技術・知識の結晶 / ワクワクする仕上がり</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="box-result">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/icon_equal.svg" alt=""
              class="icon">
            <p class="title">カタチにする<span class="detail">声になる前の声をカタチにした感動</span></p>
          </div>
        </li>
        <li class="philosophy vision">
          <div class="box-text">
            <div class="box-copy">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/icon_vision.png" alt=""
              class="icon">
              <p class="label">Vision<span>目指すべき姿</span></p>
              <h3 class="copy">
                「一択」され続ける
              </h3>
            </div>
            <p class="text">
              仕事を依頼する度に信頼が増していく。<br class="pc">
              「もうTHINKA以外では考えられない」と<br class="pc">
              いつまでも比類なく選ばれ続ける会社へ。
            </p>
          </div>
        </li>
        <li class="philosophy value">
          <div class="box-text">
            <div class="box-copy">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/company/icon_value.png" alt=""
              class="icon">
              <p class="label">Value<span>守るべき行動基準</span></p>
              <h3 class="copy">
                あくなき、挑人たち
              </h3>
            </div>
            <p class="text">
              自発的な成長に挑み続けることで、<br class="pc">
              視野が広がり、視座が高まり、選択肢が増え<br class="pc">
              より濃密な人生を掴み取ることが出来る。
            </p>
          </div>
          <p class="detail-title">あくなき自己成長の行動基準</p>
          <ul class="list-standard">
            <li class="card-standard">
              <p class="overview">目標を持ち続け成長に必要な行動を具体化する</p>
            </li>
            <li class="card-standard">
              <p class="overview">常に110％の自分を発揮する</p>
            </li>
            <li class="card-standard">
              <p class="overview">他を寄せつけないスピードで対応する</p>
            </li>
            <li class="card-standard">
              <p class="overview">自らアンテナ感度を高めて知識を増やす</p>
            </li>
            <li class="card-standard">
              <p class="overview">やり遂げられる方法だけを考える</p>
            </li>
            <li class="card-standard">
              <p class="overview">仕事の本質を想像する</p>
            </li>
             <li class="card-standard">
              <p class="overview">結果の再現性を求め振り返る</p>
            </li>
             <li class="card-standard">
              <p class="overview">常識に捉われず変化をリードする</p>
            </li>
             <li class="card-standard">
              <p class="overview">プライベートに本気で向き合う</p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-number" id="number">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Numbers of THINKA</span>
        数字で知るTHINKA
      </h2>
      <ul class="list-numbers">
        <li class="number">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/number-establised.webp" alt="" class="image">
          <div class="box-text">
            <p class="label">創業</p>
            <p class="number"><span class="strong">70</span>年</p>
          </div>
        </li>
        <li class="number">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/number-staff.webp" alt="" class="image">
          <div class="box-text">
            <p class="label">従業員数</p>
            <p class="number"><span class="strong">15</span>人</p>
          </div>
        </li>
        <li class="number">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/number-holiday.webp" alt="" class="image">
          <div class="box-text">
            <p class="label">年間休日</p>
            <p class="number"><span class="strong">126</span>日</p>
          </div>
        </li>
        <li class="number">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/number-overtime.webp" alt="" class="image">
          <div class="box-text">
            <p class="label">平均残業時間</p>
            <p class="number"><span class="strong">16.8</span>時間</p>
          </div>
        </li>
        <li class="number">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/number-age.webp" alt="" class="image">
          <div class="box-text">
            <p class="label">平均年齢</p>
            <p class="number"><span class="strong">37.9</span>歳</p>
          </div>
        </li>
        <li class="number">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/number-paidholiday.webp" alt="" class="image">
          <div class="box-text">
            <p class="label">有給平均取得日数</p>
            <p class="number"><span class="strong">6.3</span>日</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-information" id="information">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Company information</span>
        会社概要
      </h2>
      <ul class="list-information">
        <li class="information">
          <p class="label">会社名</p>
          <p class="data">株式会社 THINKA (かぶしきがいしゃ しんか)</p>
        </li>
        <li class="information">
          <p class="label">所在地</p>
          <p class="data">〒596-0831 大阪府岸和田市畑町4-3-7
            <a href="https://maps.app.goo.gl/QogWPKTC5NJxuggU6" class="link" target="_black">Google map<img
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/window.svg" alt="" class="icon"></a></p>
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
            土木工事業、建築工事業、大工工事業、左官工事業、とび土木工事業、石工事業、<br class="pc">屋根工事業、タイル・煉瓦・ブロック工事業、鋼構造物工事業、鉄筋工事業、<br
              class="pc">舗装工事業、しゅんせつ工事業、板金工事業、ガラス工事業、塗装工事業、防水工事業、内装仕上工事業 熱絶縁工事業、建具工事業、水道施設工事業、解体工事業、<br
              class="pc">住宅建築業（住宅性能保証登録店）</p>
        </li>
        <li class="information">
          <p class="label">従業員数</p>
          <p class="data">15名</p>
        </li>
        <li class="information">
          <p class="label">取引銀行</p>
          <p class="data">池田泉州銀行<br>紀陽銀行<br>京都銀行<br>三菱ＵＦＪ銀行<br>商工組合中央金庫<br>徳島大正銀行</p>
        </li>
        <li class="information">
          <p class="label">資格技術者</p>
          <p class="data">一級建築士<br>一級建築施工管理士<br>一級土木施工管理士<br>宅地建物取引主任者</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-history" id="history">
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
        <li class="information">
          <p class="label">令和8年4月</p>
          <p class="data">株式会社THINKAに社名変更</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-machines" id="machine">
    <div class="container">
      <h2 class="section-title">
        <span class="english">Machines</span>
        保有重機・車輌
      </h2>
      <ul class="list-machines">
        <li class="machines">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/machines-excavator.jpg" alt="" class="image">
          <p class="name">ミニショベル</p>
          <p class="maker">日立建機日本株式会社 ZX20UR-5A</p>
        </li>
        <li class="machines">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/machines-lifttrack.jpg" alt="" class="image">
          <p class="name">フォークリフトトラック</p>
          <p class="maker">株式会社豊田自動織機 5FG15</p>
        </li>
        <li class="machines">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/machines-dump.jpg" alt="" class="image">
          <p class="name">スーパー強化ダンプ</p>
          <p class="maker">いすゞ自動車株式会社 NKR81-7042487</p>
        </li>
        <li class="machines">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/machines-carry.jpg" alt="" class="image">
          <p class="name">スズキキャリー</p>
          <p class="maker">スズキ株式会社 KKCU-P3</p>
        </li>
        <li class="machines">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/machines-eletric.jpg" alt="" class="image">
          <p class="name">発電機</p>
          <p class="maker">デンヨー株式会社 GA-2800ES-IV2</p>
        </li>
        <li class="machines">
          <img src="https://hori-ken.jp/wp2024/wp-content/uploads/2024/12/machines-cutter.jpg" alt="" class="image">
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