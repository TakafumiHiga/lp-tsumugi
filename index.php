<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/script.js" defer></script>
  <title>tsumugi_code</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <a href="#contact" class="contact__btn">お問合せ</a>
  <header class="header">
    <!-- スマフォ用の画面 -->
    <div class="curtain" id="curtain"></div>
    <a class="hamburger" id="hamburger">
      <div></div>
      <div></div>
      <!-- <div></div> -->
    </a>


    <nav id="drawer">
      <?php 
wp_nav_menu(array(
'theme_location' => 'hamburger',
'container' => 'div',
'depth' => 0,
'container_class' => 'hamburger__navi-container', 
'menu_id'         => 'hamburger__navi-menu', // ulのid名
'menu_class' => 'hamburger__navi-menu', // ulのclass名
));
?>

    </nav>
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/tsumugi-logo.png" alt="つむぎロゴ" class="logo">
    <h1 class="mv__heading">飲食店専用ホームページ制作-つむぎ-</h1>
    <div class="header__inner">
      <div class="swiper-container mv__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide1"></div>
          <div class="swiper-slide slide2"></div>
          <div class="swiper-slide slide3"></div>
          <div class="swiper-slide slide4"></div>
          <div class="swiper-slide slide5"></div>
        </div>
        <!-- <div class="swiper-pagination swiper-pagination-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-scrollbar"></div> -->
      </div>
    </div>
    <div class="sns"></div>
  </header>
  <main>
    <section id="point" class="container point">
      <h2 class="heading">飲食店専用ホームページ制作とは？</h2>
      <article class="point__item">
        <p class="point__no"><span>01</span></p>
        <div class="point__item-text">
          <h3 class="point__item-title">
            現役のパスタ屋が手がけるホームページです。
          </h3>
          <p class="point__item-desc">
            完成した料理だけでは、伝えたくてもなかなか伝えられないこだわりの食材の特徴や調理の調理人の心のこもったひと手間など、同業者だからこを分かるこだわりを弊社がお伝えいたします。</p>
        </div>
      </article>
      <article class="point__item">
        <p class="point__no"><span>02</span></p>
        <div class="point__item-text">
          <h3 class="point__item-title">セミオーダー方式により低価格、スピード納品</h3>
          <p class="point__item-desc">
            ホームページは作りたいけど予算が厳しいで手が出ないなどお困りのお客様へ弊社のテンプレートを使って早めの制作と低価格を実現しました。安いからと言って低品質ではなく、しっかりとしたテンプレート（雛形）に作りますので０がお作りするよりも低価格、スピード制作が可能となりました。
          </p>
        </div>
      </article>
      <article class="point__item">
        <p class="point__no"><span>03</span></p>
        <div class="point__item-text">
          <h3 class="point__item-title">instagram表示できる</h3>
          <p class="point__item-desc">ホームページはSNSとの連携でより高い効果を発揮します。特に相性の良いSNS、instagramとの連携も無料でできます。(高機能対応の場合別途料金がかかります。)
          </p>
        </div>
      </article>
      <article class="point__item">
        <p class="point__no"><span>04</span></p>
        <div class="point__item-text">
          <h3 class="point__item-title">操作が分からない？納品後の困った際にも対応いたします。</h3>
          <p class="point__item-desc">納品後も安心のサポート。ブログの投稿方法や、操作方法等分からなくなってもサポートが付いておりますので、ご安心下さい。
          </p>
        </div>
      </article>
      <article class="point__item">
        <p class="point__no"><span>05</span></p>
        <div class="point__item-text">
          <h3 class="point__item-title">お客様へ最新情報を提供できる。</h3>
          <p class="point__item-desc">Blog投稿機能が標準で付いていますので、営業時間の変更や、新メニューの紹介など素早く簡単に投稿できます。</p>
        </div>
      </article>
      <article class="point__item">
        <p class="point__no"><span>06</span></p>
        <div class="point__item-text">
          <h3 class="point__item-title">スマフォ、タブレットで表示したい</h3>
          <p class="point__item-desc">もちろんスマフォ、タブレット表示に標準で対応しております。また、モバイルファーストと呼ばれるスマフォ、タブレット優先した設計でお作りしておりますので安心です。
          </p>
        </div>
      </article>
      <article class="point__item">
        <p class="point__no"><span>07</span></p>
        <div class="point__item-text">
          <h3 class="point__item-title">こだわりの料理をきれいな写真を撮って載せたい！</h3>
          <p class="point__item-desc">
            お写真はホームページのかなり重要な部分を担います。特にブランディングを目的としているホームページでは写真もプロに依頼して制作しております。その点も弊社とパートナーを組んでいるプロのカメラマンをご紹介できますのでお気軽にご相談下さい。
            （別途料金）商品を見たお客様が食べたいっ！と感じるお写真を撮影できます。</p>
        </div>
      </article>
    </section>
    <section id="price" class="price">
      <h2 class="heading">料金について</h2>
      <div class="price__flex container">
        <dl class="price__wrap">
          <dt class="price__title">スピードプラン
          </dt>
          <dd class="price__body">¥29,800〜
          </dd>
          <dd class="price__body">月額¥9,800〜</dd>
        </dl>
        <dl class="price__wrap">
          <dt class="price__title">スピードプラン
          </dt>
          <dd class="price__body">¥29,800〜
          </dd>
          <dd class="price__body">月額¥9,800〜</dd>
        </dl>
        <dl class="price__wrap">
          <dt class="price__title">フルオーダープラン
          </dt>
          <dd class="price__body">¥59,800〜
          </dd>
          <dd class="price__body">月額¥14,980〜</dd>
        </dl>
      </div>
    </section>
    <section id="profile" class="profile__bg-sp">
      <div class="profile__wrap profile__bg-pc">
        <div class="profile__heading-wrap container">
          <h2 class="profile__heading">プロフィール</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/img/pic/profile.png" alt="つむぎ店内スタッフの写真"
            class="profile__img" />
          <p class="profile__desc">
            教員歴14年、通信制高校の沖縄校立ち上げから携わり叩き上げで沖縄校の責任者に。
            健康とパスタをテーマにした薬膳パスタTSUMUGI-つむぎ-を開業。
            軌道に乗り始めた、2020年に新型コロナウィルスにより売上減少。
            店の存続のため、兼業としてウェブ制作を学び、3ヶ月で案件獲得。
            web制作×パスタ屋×健康を目指し活動している 資格：健康管理士,
            、学校心理士、薬膳コーディネーター
          </p>
        </div>
        <div class="skill__card-wrap">
          <article class="skill__card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-direction.png" alt="矢印のアイコン"
              class="skill__card-img" />
            <h3 class="skill__card-title">ディレクション</h3>
            <p class="skill__card-desc">
              お客様から要望をヒアリングさせて頂き、その上で効果の高い戦略をご提案いたします。
            </p>
          </article>
          <article class="skill__card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-design.png" alt="デザインをイメージする定規とペンのアイコン"
              class="skill__card-img" />
            <h3 class="skill__card-title">デザイン</h3>
            <p class="skill__card-desc">
              集客やブランディングなどお客様の目的に合わせ、シンプルなデザインを基本としております。
            </p>
          </article>
          <article class="skill__card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-pc.png" alt="パソコンのアイコン"
              class="skill__card-img" />
            <h3 class="skill__card-title">コーディング</h3>
            <p class="skill__card-desc">HTML/CSS/SCSS<br>WordPress/Git Hub</p>
          </article>
        </div>
        <section id="results" class="results">
          <h2 class="results__heading">制作実績</h2>
          <h3 class="results__sub-title">デザイン、コーディング</h3>
          <div class="results__wrap">
            <figure class="results__img">
              <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pic/pc-tsumugishop.png"
                  alt="つむぎのホームページ" /></a>
            </figure>
            <figure class="results__img">
              <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pic/pc-tsumugishop.png"
                  alt="つむぎのホームページ" /></a>
            </figure>
            <figure class="results__img">
              <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pic/pc-tsumugishop.png"
                  alt="つむぎのホームページ" /></a>
            </figure>
          </div>
          <h3 class="results__sub-title">コーディング</h3>
          <figure class="results__img">
            <a href="/">
              <img src="<?php echo get_template_directory_uri(); ?>/img/pic/pc-tsumugishop.png" alt="つむぎのホームページ" /></a>
          </figure>
        </section>
      </div>
    </section>
    <section id="flow" class="flow">
      <h2 class="flow__heading">制作の流れ</h2>
      <div class="flow__item-wrap">
        <article class="flow__item">
          <h3 class="flow__item-heading">ヒアリング</h3>
          <p class="flow__item-desc">
            ホームページ制作の目的や背景やエンドユーザー様、業界の背景などヒアリングさせて頂きます。(オンラインでも対応可能です。)
          </p>
        </article>
        <article class="flow__item">
          <h3 class="flow__item-heading">ヒアリング</h3>
          <p class="flow__item-desc">
            ホームページ制作の目的や背景やエンドユーザー様、業界の背景などヒアリングさせて頂きます。(オンラインでも対応可能です。)
          </p>
        </article>
        <article class="flow__item">
          <h3 class="flow__item-heading">ヒアリング</h3>
          <p class="flow__item-desc">
            ホームページ制作の目的や背景やエンドユーザー様、業界の背景などヒアリングさせて頂きます。(オンラインでも対応可能です。)
          </p>
        </article>
        <article class="flow__item">
          <h3 class="flow__item-heading">ヒアリング</h3>
          <p class="flow__item-desc">
            ホームページ制作の目的や背景やエンドユーザー様、業界の背景などヒアリングさせて頂きます。(オンラインでも対応可能です。)
          </p>
        </article>
        <article class="flow__item">
          <h3 class="flow__item-heading">ヒアリング</h3>
          <p class="flow__item-desc">
            ホームページ制作の目的や背景やエンドユーザー様、業界の背景などヒアリングさせて頂きます。(オンラインでも対応可能です。)
          </p>
        </article>
      </div>
    </section>
    <section id="faq" class="faq container">
      <h3 class="faq__heading">よくある質問</h3>
      <div class="faq__item-wrap">
        <article class="faq__item">
          <div class="faq__item-inner">
            <h3 class="faq__item-heading">
              サーバー・ドメインの準備もしてくれますか？
            </h3>
            <p class="faq__item-desc">
              サーバー・ドメインの契約・支払いはお客様にてお願いしております。もし分からないことがありましたら、お気軽にご相談下さい。
            </p>
          </div>
        </article>
        <article class="faq__item">
          <div class="faq__item-inner">
            <h3 class="faq__item-heading">
              サーバー・ドメインの準備もしてくれますか？
            </h3>
            <p class="faq__item-desc">
              サーバー・ドメインの契約・支払いはお客様にてお願いしております。もし分からないことがありましたら、お気軽にご相談下さい。
            </p>
          </div>
        </article>
        <article class="faq__item">
          <div class="faq__item-inner">
            <h3 class="faq__item-heading">
              サーバー・ドメインの準備もしてくれますか？
            </h3>
            <p class="faq__item-desc">
              サーバー・ドメインの契約・支払いはお客様にてお願いしております。もし分からないことがありましたら、お気軽にご相談下さい。
            </p>
          </div>
        </article>
        <article class="faq__item">
          <div class="faq__item-inner">
            <h3 class="faq__item-heading">
              サーバー・ドメインの準備もしてくれますか？
            </h3>
            <p class="faq__item-desc">
              サーバー・ドメインの契約・支払いはお客様にてお願いしております。もし分からないことがありましたら、お気軽にご相談下さい。
            </p>
          </div>
        </article>
        <article class="faq__item">
          <div class="faq__item-inner">
            <h3 class="faq__item-heading">
              サーバー・ドメインの準備もしてくれますか？
            </h3>
            <p class="faq__item-desc">
              サーバー・ドメインの契約・支払いはお客様にてお願いしております。もし分からないことがありましたら、お気軽にご相談下さい。
            </p>
          </div>
        </article>
        <article class="faq__item">
          <div class="faq__item-inner">
            <h3 class="faq__item-heading">
              サーバー・ドメインの準備もしてくれますか？
            </h3>
            <p class="faq__item-desc">
              サーバー・ドメインの契約・支払いはお客様にてお願いしております。もし分からないことがありましたら、お気軽にご相談下さい。
            </p>
          </div>
        </article>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container">
        <h3 class="contact__heading">お問合せ</h3>
        <p class="contact__desc">こちらのフォームより<br>お気軽にお問合せ下さい。</p>
        <?php echo do_shortcode('[contact-form-7 id="5" title="お問合せ①"]'); ?>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__inner">
        <h3 class="footer__heading">応援キャンペーン</h3>
        <ul>
          <li class="footer__list"><span>制作費</span></li>
          <li class="footer__list"><span>制作費</span></li>
        </ul>
        <ul class="footer__bottom-wrap">
          <li class="footer__bottom-list">飲食店専門ホームページ制作</li>
          <li class="footer__bottom-list">
            パスタ屋が手がけるホームーページ
          </li>
        </ul>
      </div>
    </footer>
  </main>
  <?php wp_footer(); ?>
</body>

</html>