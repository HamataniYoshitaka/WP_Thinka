<?php
/**
 * Template Name: 大型施設
 * horikenテンプレートの大型施設ページのファイルです。
 *
 * @since horiken 1.0.0
 */

get_header();
?>

<main class="large-facility-page">
  <?php
get_template_part( 'includes/header' );
?>


  <section class="section-mv">
    <div class="container">
      <div class="box-title">
        <h1 class="page-title">
          <span class="english">Large facility</span>
          高品質なシステム建築、短納期でお届け
        </h1>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/mv.png" alt="" class="image">
    </div>
  </section>

  <section class="section-message">
    <div class="container">
      <div class="box-text">
        <p class="title">
          効率と品質を追求する<br>システム建築
        </p>
        <p class="text">
          当社は短工期、低価格、高品質を実現するシステム建築を提供しています。専用工場での一環生産により、材料の無駄を削減し、品質管理を徹底。大空間の実現から細部にわたるカスタマイズまで、お客様の多様なニーズに応えるフレキシブルな建築を実現します。
        </p>
      </div>
      <div class="box-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/message.png" alt=""
          class="image">
      </div>
    </div>
  </section>


  <section class="section-feature">
    <div class="container">
      <ul class="list-feature">
        <li class="feature">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/feature1.png" alt=""
            class="image">
          <p class="number"><span>1</span></p>
          <p class="label">短納期</p>
          <p class="text">合理的な構造設計・生産システムにより<br class="pc">工期を20%短縮。</p>
        </li>
        <li class="feature">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/feature2.png" alt=""
            class="image">
          <p class="number"><span>2</span></p>
          <p class="label">低価格</p>
          <p class="text">構造評価で裏付けされた工法により、<br class="pc">一般鉄骨造の約30~40%の軽量化。</p>
        </li>
        <li class="feature">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/feature3.png" alt=""
            class="image">
          <p class="number"><span>3</span></p>
          <p class="label">高品質</p>
          <p class="text">設計から製作まで自社専用工場で国内生産、<br class="pc">一貫処理による制度の高い工業化製品。</p>
        </li>
        <li class="feature">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/feature4.png" alt=""
            class="image">
          <p class="number"><span>4</span></p>
          <p class="label">大空間</p>
          <p class="text">最大無柱スパン60m・建物幅120m<br class="pc">（中間柱付）を実現。</p>
        </li>
      </ul>
    </div>
  </section>


  <section class="section-reasons">
    <div class="container">
      <p class="english">Reasons for high quality, low cost, and quick delivery</p>
      <p class="title">高品質・低コスト・<br class="sp">短納期を<br class="pc">実現できる理由</p>
      <div class="box-overview">
        <p class="title"><span>構造計算における</span>”ルート3”</p>
        <p class="text">
          ルートごとの違いはルート1→2→3の順で計算が複雑になっていきます。イメージとしては、ルート1では「中規模の地震で損傷しなければいい」という比較的、単純な考え方をもとにしていますが、ルート3になると「万一、大地震が起きて建物が壊れても、崩壊せずに中にいる人命を守れるか」といったところまで計算する必要があります。また、ルート3は適合性判定を受けなければいけません。
        </p>
        <div class="box-root sp">
          <p class="type one"><span class="label">ルート</span><span class="number">1</span></p>
          <p class="type two"><span class="label">ルート</span><span class="number">2</span></p>
          <p class="type three"><span class="label">ルート</span><span class="number">3</span></p>
        </div>
      </div>
      <ul class="list-feature">
        <li class="feature">
          <p class="type one"><span class="label">ルート</span><span class="number">1</span></p>
          <p class="text">地震・台風に耐えられるのか計算、中規模建築構造物（鉄骨造2階以上）を対象</p>
          <ul class="list-assets">
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-typhoon.png" alt=""
                class="image">
            </li>
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-earthquake.png"
                alt="" class="image">
            </li>
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-building.png" alt=""
                class="image">
            </li>
          </ul>
        </li>
        <li class="feature">
          <p class="type two"><span class="label">ルート</span><span class="number">2</span></p>
          <p class="text">ルート1の計算を満足しつつ局部座屈防止など計算。大規模建築構造物（鉄骨造4階以上）を対象</p>
          <ul class="list-assets">
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-typhoon.png" alt=""
                class="image">
            </li>
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-earthquake.png"
                alt="" class="image">
            </li>
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-building.png" alt=""
                class="image">
            </li>
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-buckling.png" alt=""
                class="image">
            </li>
            <li class="asset">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-building-vertical.png"
                alt="" class="image">
            </li>
          </ul>
        </li>
        <li class="feature">
          <p class="type three"><span class="label">ルート</span><span class="number">3</span></p>
          <p class="text">ルート2の計算を満足しつつ大規模地震で崩壊せず粘り強く耐えられるかを計算</p>
          <ul class="list-assets">
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-typhoon.png" alt=""
                class="image">
            </li>
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-earthquake.png"
                alt="" class="image">
            </li>
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-building.png" alt=""
                class="image">
            </li>
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-buckling.png" alt=""
                class="image">
            </li>
            <li class="asset">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-building-vertical.png"
                alt="" class="image">
            </li>
            <li class="asset">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/icon-big-earthquake.png"
                alt="" class="image">
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-knowhow">
    <div class="container">
      <p class="english">How Route 3 allows for inexpensive and safe proposals</p>
      <p class="title">ルート3によって<br>安価で安全な<br class="xs">提案ができる仕組み</p>
      <ul class="list-knowhow">
        <li class="knowhow">
          <div class="box-text">
            <p class="number">1</p>
            <p class="text">ルート３の計算により細部までの検討で<br class="pc"><span class="green">使用する鉄骨を絞る</span>事が出来るので<br
                class="pc"><span class="green">無駄な鉄骨重量が減量</span>しコストを削減</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/knowhow1.png" alt=""
            class="image">
        </li>
        <li class="knowhow">
          <div class="box-text">
            <p class="number">2</p>
            <p class="text"><span class="green">鉄骨重量の減少</span>に伴い<br class="pc"><span
                class="green">それを受ける基礎がコンパクトに縮小</span>、<br class="pc">コストを削減</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/knowhow2.png" alt=""
            class="image">
        </li>
        <li class="knowhow">
          <div class="box-text">
            <p class="number">3</p>
            <p class="text"><span class="green-text">鉄骨重量の減少・基礎の小型化</span>に伴い<br class="pc"><span
                class="green">全体の重量が軽量化可能</span>な為、<br class="pc"><span class="green">基礎下の杭を簡略化や不要</span>となり<br>コストを削減
            </p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/knowhow3.png" alt=""
            class="image">
        </li>
        <li class="knowhow">
          <div class="box-text">
            <p class="number">4</p>
            <p class="text"><span class="green">本来必要な中柱は一切不要の</span><br class="pc"><span
                class="green">無柱空間</span>になり、柱が無ければその<br class="pc"><span class="green">下部の基礎や杭も不要</span>になり、コストを削減</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/knowhow4.png" alt=""
            class="image">
        </li>
      </ul>
    </div>
  </section>

  <section class="section-voice">
    <div class="container">
      <div class="box-overview">
        <h2 class="section-title">
          <span class="english">Customer voices</span>
          お客様の声
        </h2>
        <p class="overview">弊社のシステム建築をご体験<br class="pc">いただいたお客様からの感想です。</p>
      </div>
      <ul class="list-voice">
        <li class="voice">
          <div class="box-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/voice1.png" alt=""
              class="image">
            <div class="box-text">
              <p class="title">工期を短縮短縮、コストをカット。<br>嬉しいご提案に大感謝。</p>
              <p class="name">製造業 / K社さま</p>
              <p class="text">
                大型工場設立のために、数社へ見積もり依頼しました。そのなかで、タイトなスケジュールにも関わらず工期の短いシステム建築を提案し、工場の稼働予定に合わせてくれたのが堀健さんだけでした。建物建物の土間コンクリートの仕様変更により工期を短くし、かつコストも下がる嬉しいご提案も。また、工場内機械用配線設備の増設による受変電設備の変更や、工事中に出てきた地中障害物に対しても施工管理の方と設計士さんが柔軟に対応してくれました。スタッフの皆さんのご尽力に、心から感謝しております。
              </p>
            </div>
          </div>
        </li>
        <li class="voice">
          <div class="box-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/voice1.png" alt=""
              class="image">
            <div class="box-text">
              <p class="title">工期を短縮短縮、コストをカット。<br>嬉しいご提案に大感謝。</p>
              <p class="name">製造業 / K社さま</p>
              <p class="text">
                大型工場設立のために、数社へ見積もり依頼しました。そのなかで、タイトなスケジュールにも関わらず工期の短いシステム建築を提案し、工場の稼働予定に合わせてくれたのが堀健さんだけでした。建物建物の土間コンクリートの仕様変更により工期を短くし、かつコストも下がる嬉しいご提案も。また、工場内機械用配線設備の増設による受変電設備の変更や、工事中に出てきた地中障害物に対しても施工管理の方と設計士さんが柔軟に対応してくれました。スタッフの皆さんのご尽力に、心から感謝しております。
              </p>
            </div>
          </div>
        </li>
        <li class="voice">
          <div class="box-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/large-facility/voice1.png" alt=""
              class="image">
            <div class="box-text">
              <p class="title">工期を短縮短縮、コストをカット。<br>嬉しいご提案に大感謝。</p>
              <p class="name">製造業 / K社さま</p>
              <p class="text">
                大型工場設立のために、数社へ見積もり依頼しました。そのなかで、タイトなスケジュールにも関わらず工期の短いシステム建築を提案し、工場の稼働予定に合わせてくれたのが堀健さんだけでした。建物建物の土間コンクリートの仕様変更により工期を短くし、かつコストも下がる嬉しいご提案も。また、工場内機械用配線設備の増設による受変電設備の変更や、工事中に出てきた地中障害物に対しても施工管理の方と設計士さんが柔軟に対応してくれました。スタッフの皆さんのご尽力に、心から感謝しております。
              </p>
            </div>
          </div>
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