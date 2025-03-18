<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smoovie</title>

  <!-- OGP -->
  <meta property="og:url" content=""> <!-- //ページのURLを設定 -->
  <meta property="og:type" content=""> <!-- //ページの種類を設定 -->
  <meta property="og:title" content=""> <!-- //ページのタイトルを設定 -->
  <meta property="og:description" content=""> <!-- //ページのディスカッションを設定 -->
  <meta property="og:site_name" content=""> <!-- //サイトの名前を設定 -->
  <meta property="og:image" content=""> <!-- //ogp画像の設定 -->
  <meta property="og:locale" content="ja_JP"> <!-- //ページの国コードの設定 -->

  <!-- Import Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Import CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <!-- Import JS/jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
          integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
          crossorigin="anonymous">
  </script>
<script defer src="assets/js/main.js"></script><link href="assets/css/style.css" rel="stylesheet"></head>
<body>
  <div class="wrapper">
    <!--======== header ========-->
    <header class="l-header"> 
      <div class="l-header__container">
        <div class="l-header__logo">
          <img src="assets/images/header_logo.png" alt="">
        </div>
        <nav class="l-header__nav">
          <ul class="l-header__nav__list">
            <a href="#top" class="l-header__nav__link">
              <img src="assets/images/アセット 4@4x.png" alt="">
            </a>
            <a href="#service" class="l-header__nav__link">
              <img src="assets/images/アセット 9@4x.png" alt="">
            </a>
            <a href="#plan" class="l-header__nav__link">
              <img src="assets/images/アセット 3@4x.png" alt="">
            </a>
            <a href="#fee" class="l-header__nav__link">
              <img src="assets/images/アセット 6@4x.png" alt="">
            </a>
            <a href="#deliver" class="l-header__nav__link">
              <img src="assets/images/アセット 7@4x.png" alt="">
            </a>
            <a href="#qa" class="l-header__nav__link">
              <img src="assets/images/アセット 10@4x.png" alt="">
            </a>
            <a href="#staff" class="l-header__nav__link">
              <img src="assets/images/アセット 8@4x.png" alt="">
            </a>
            <a href="#contact" class="l-header__nav__link">
              <img src="assets/images/アセット 10@4x.png" alt="">
            </a>
          </ul>
        </nav>
      </div>
    </header>
    <!--======== p-top ========-->
    <section id="top" class="p-top l-section">
      <div class="p-top__container l-container">
        <div class="p-top__block">
          <div class="p-top__block__inner">
            <div class="p-top__heading">
              <div class="p-top__heading__logo">
                <img src="assets/images/hero_logo.png" alt="">
              </div>
              <div class="p-top__heading__text">
                <p>
                  企業の動画制作を、手軽に、手頃に！<br>
                  サンプル動画でイメージを共有しながら、<br>
                  リーズナブルな料金プランと信頼のクオリテイで<br>
                  スムーズな動画制作を実現する。<br>
                  それがSmoovie！
                </p>
              </div>
            </div>
            <div class="p-top__movies">
              <img src="assets/images/hero_img.png" alt="">
            </div>
          </div>
          <div class="p-top__cards">
            <a href="#service" class="p-top__card">
              <div class="p-top__card__img">
                <img src="assets/images/service_logo.png" alt="">
              </div>
              <div class="p-top__card__text">
                <span>サービスの<br>特長を知る</span>
              </div>
            </a>
            <a href="#plan" class="p-top__card">
              <div class="p-top__card__img">
                <img src="assets/images/plan_logo.png" alt="">
              </div>
              <div class="p-top__card__text">
                <span>料金プランと<br>サンプルで<br>検討する</span>
              </div>           
            </a>
            <a href="#contact" class="p-top__card">
              <div class="p-top__card__img">
                <img src="assets/images/contact_logo.png" alt="">
              </div>
              <div class="p-top__card__text">
                <span>とりあえず<br>相談する</span>
              </div>           
            </a>
          </div>
          <div class="p-top__swiper__heading">
            <span>こんなとき</span>
            <span>Smoovie！</span>
          </div>
          <!-- === swiperの実装　=== -->
          <div class="p-top__swiper swiper infinite-slider">
            <!-- 必要に応じたwrapper -->
            <div class="p-top__swiper__wrapper swiper-wrapper">
              <!-- スライド -->
              <div class="p-top__swiper__slide swiper-slide">
                <p>できるだけ<br><span class="u-color-primary u-font-bold">安く、パパッと</span><br>つくってほしい！</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>フリーランスは<br>安いけど、<span class="u-color-primary u-font-bold">安心</span>できる<br>企業に依頼したい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>映像はあるから<br><span class="u-color-primary u-font-bold">字幕</span>と<span class="u-color-primary u-font-bold">編集</span>だけ<br>やってほしい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>イメージがないから<br><span class="u-color-primary u-font-bold">参考動画</span>をもとに<br>検討したい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>忙しいので<br>企画・構成も含めて<br><span class="u-color-primary u-font-bold">丸投げ</span>したい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>簡易でいいから<br><span class="u-color-primary u-font-bold">商品撮影</span>して<br>ほしい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p><span class="u-color-primary u-font-bold">シリーズ</span>で<br>複数制作したいけど<br><span class="u-color-primary u-font-bold">割引</span>できる？</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>できるだけ<br><span class="u-color-primary u-font-bold">安く、パパッと</span><br>つくってほしい！</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>フリーランスは<br>安いけど、<span class="u-color-primary u-font-bold">安心</span>できる<br>企業に依頼したい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>映像はあるから<br><span class="u-color-primary u-font-bold">字幕</span>と<span class="u-color-primary u-font-bold">編集</span>だけ<br>やってほしい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>イメージがないから<br><span class="u-color-primary u-font-bold">参考動画</span>をもとに<br>検討したい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>忙しいので<br>企画・構成も含めて<br><span class="u-color-primary u-font-bold">丸投げ</span>したい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>簡易でいいから<br><span class="u-color-primary u-font-bold">商品撮影</span>して<br>ほしい</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p><span class="u-color-primary u-font-bold">シリーズ</span>で<br>複数制作したいけど<br><span class="u-color-primary u-font-bold">割引</span>できる？</p>
              </div>
              <div class="p-top__swiper__slide swiper-slide">
                <p>できるだけ<br><span class="u-color-primary u-font-bold">安く、パパッと</span><br>つくってほしい！</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--======== p-service ========-->
    <section id="service" class="p-service l-section">
      <div class="p-service__container l-container">
        <div class="p-service__block">
          <div class="p-service__heading c-heading-box">
            <div class="p-service__heading__logo">
              <img src="assets/images/service_logo.png" alt="">
            </div>
            <h2 class="c-heading">サービス特長</h2>
          </div>
          <div class="p-service__boxs">
            <div class="p-service__box">
              <div class="p-service__box__flex">
                <div class="p-service__box__check"></div>
                <h3 class="p-service__box__heading">
                  <img src="assets/images/service_heading_img_01.png" alt="">
                </h3>
              </div>
              <div class="p-service__box__body">
                <div class="p-service__box__body__flex">
                  <div class="p-service__box__body__text">
                    <p>最安6万円から！動画の制作タイプと納品尺（秒／分）で<br>選べるからわかりやすい！<br><span>※各種条件／オプション料金があります。</span></p>
                  </div>
                  <div class="p-service__box__body__img">
                    <img src="assets/images/service_img_01.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-service__box">
              <div class="p-service__box__flex">
                <div class="p-service__box__check"></div>
                <h3 class="p-service__box__heading">
                  <img src="assets/images/service_heading_img_02.png" alt="">
                </h3>
              </div>
              <div class="p-service__box__body">
                <div class="p-service__box__body__flex">
                  <div class="p-service__box__body__text">
                    <p>制作のタイプ別にサンプル動画を豊富にご用意！<br>料金目安もわかりやすく、制作イメージを共有しやすい！</p>
                  </div>
                  <div class="p-service__box__body__img">
                    <img src="assets/images/service_img_02.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-service__box">
              <div class="p-service__box__flex">
                <div class="p-service__box__check"></div>
                <h3 class="p-service__box__heading">
                  <img src="assets/images/service_heading_img_03.png" alt="">
                </h3>
              </div>
              <div class="p-service__box__body">
                <div class="p-service__box__body__flex">
                  <div class="p-service__box__body__text">
                    <p>40数名の豊富なナレーターから１名を無料で起用できる！<br>しかも、期限なしの買取で！<br>※２人目以降は、10,000円/１名の追加料金で起用できます。</p>
                  </div>
                  <div class="p-service__box__body__img">
                    <img src="assets/images/service_img_03.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-service__box">
              <div class="p-service__box__flex">
                <div class="p-service__box__check"></div>
                <h3 class="p-service__box__heading">
                  <img src="assets/images/service_heading_img_04.png" alt="">
                </h3>
              </div>
              <div class="p-service__box__body">
                <div class="p-service__box__body__flex">
                  <div class="p-service__box__body__text">
                    <p>数分の短い動画なら編集の１次提出は１-２週間程度。<br>納品まで最短で２週間程度の場合も！<br>※短納期での対応が必要の際は、一度ご相談ください。<br>※制作内容によってはお時間をいただく場合がございます</p>
                  </div>
                  <div class="p-service__box__body__img">
                    <img src="assets/images/service_img_04.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-service__box">
              <div class="p-service__box__flex">
                <div class="p-service__box__check"></div>
                <h3 class="p-service__box__heading">
                  <img src="assets/images/service_heading_img_05.png" alt="">
                </h3>
              </div>
              <div class="p-service__box__body">
                <div class="p-service__box__body__flex">
                  <div class="p-service__box__body__text">
                    <p>クリエイティブディレクター、動画エディターやデザイナーなど、<br>豊富な経験とスキルを持つスタッフ体制で安心して任せられます。</p>
                  </div>
                  <div class="p-service__box__body__img">
                    <img src="assets/images/service_img_05.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="p-service__bubble">
            <img src="assets/images/service_bubble_img.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <!--======== p-plan ========-->
    <section id="plan" class="p-plan l-section">
      <div class="p-plan__container l-container">
        <div class="p-plan__block">
          <div class="p-plan__heading c-heading-box">
            <div class="p-plan__heading__logo">
              <img src="assets/images/plan_logo.png" alt="">
            </div>
            <h2 class="c-heading">料金プランとサンプル</h2>
          </div>
          <div class="p-plan__btns">
            <div id="plan-A" class="p-plan__btn active" data-target="#content-A">
              <span>A</span>
            </div>
            <div id="plan-B" class="p-plan__btn" data-target="#content-B">
              <span>B</span>
            </div>
            <div id="plan-C" class="p-plan__btn" data-target="#content-C">
              <span>C</span>
            </div>
            <div id="plan-D" class="p-plan__btn" data-target="#content-D">
              <span>D</span>
            </div>
            <div id="plan-E" class="p-plan__btn" data-target="#content-E">
              <span>E</span>
            </div>
            <div id="plan-F" class="p-plan__btn" data-target="#content-F">
              <span>F</span>
            </div>
            <div id="plan-G" class="p-plan__btn" data-target="#content-G">
              <span>G</span>
            </div>
            <div id="plan-H" class="p-plan__btn" data-target="#content-H">
              <span>H</span>
            </div>
          </div>
          <div class="p-plan__contents">
            <!-- === PLAN-A === -->
            <div id="content-A" class="p-plan__content p-plan__content__A open">
              <div class="p-plan__content__border">
                <div class="p-plan__content__border__border"></div>
                <p>PLAN<span>A</span>(撮影なし)</p>
                <div class="p-plan__content__border__border"></div>
              </div>
              <div class="p-plan__content__heading">
                <h3>ご提供のテキスト・画像のスライド・ショー編集</h3>
                <div class="p-plan__content__heading__body">
                  <div class="p-plan__content__heading__body__img">
                    <img src="assets/images/plan_A_logo.png" alt="">
                  </div>
                  <div class="p-plan__content__heading__body__text">
                    <p>画像やテキスト素材をご提供いただき、シンプルな<span class="u-color-primary">スライド・ショー編集</span>をします。<br>商品やサービスの<span class="u-color-primary">説明動画</span>やセミナーなどの<span class="u-color-primary">資料動画</span>にオススメです。</p>
                  </div>
                </div>
              </div>
              <div class="p-plan__content__sample">
                <div class="p-plan__content__sample__list">
                  <span>SAMPLE</span>
                  <div class="p-plan__content__sample__list__border"></div>
                  <a href="">サンプル一覧</a>
                </div>
                <div class="p-plan__content__sample__items__swiper__inner">
                  <div class="p-plan__content__sample__items swiper sample-slider">
                    <div class="p-plan__content__sample__items__inner swiper-wrapper">
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__A swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_A_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>災害対策説明</p>
                          <span>「防災」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_A_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p>CP告知</p>
                          <span>「寝具製品」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__A swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_A_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>キッチン用品紹介</p>
                          <span>「Smoovie Kitchen」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__A swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_A_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>スライドショー</p>
                          <span>「セミナー」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__A swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_A_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>災害対策説明</p>
                          <span>「防災」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_A_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p>CP告知</p>
                          <span>「寝具製品」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__A swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_A_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>キッチン用品紹介</p>
                          <span>「Smoovie Kitchen」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__A swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_A_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>スライドショー</p>
                          <span>「セミナー」</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
              <div class="p-plan__content__price">
                <div class="p-plan__content__price__flex">
                  <div class="p-plan__content__price__tables">
                    <div class="p-plan__content__price__tables__heading">
                      <span>PRICE</span>
                      <div class="p-plan__content__price__tables__heading__border"></div>
                      <a href="#fee">料金表</a>
                    </div>
                    <table class="p-plan__content__price__tables__table">
                      <thead class="p-plan__content__price__tables__table__thead">
                        <tr>
                          <th>30秒まで</th>
                          <th>1分まで</th>
                          <th>以降1分単位</th>
                        </tr>
                      </thead>
                      <tr class="p-plan__content__price__tables__table__tr">
                        <td class="p-plan__content__price__tables__table__td">
                          <span>6</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td">
                          <span>9</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td">
                          ＋<span>3</span>万円
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="p-plan__content__price__service">
                    <div class="p-plan__content__price__service__heading">本プランに含むサービス</div>
                    <div class="p-plan__content__price__service__items">
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_01.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>NA・セリフ<br>字幕挿入</p>
                        </div>
                      </div>
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_02.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>ナレーター<br><span class="u-color-primary">1名</span>起用</p>
                        </div>
                      </div>
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_03.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>ロイヤリティ・<br>フリー<span class="u-color-primary">楽曲</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-plan__content__price__supplyment">
                  <p>
                    ※金額は、すべて税別です。ご依頼の内容により変動する場合があります。　※時間（分）は、<span class="u-color-primary">制作動画の納品尺</span>です。<br>
                    ※追加オプションは料金表を参照 　※パワーポイントなどのプレゼンテーション・ソフトによる制作には対応していません。
                  </p>
                </div>
              </div>
              
            </div>
            <!-- === PLAN-B === -->
            <div id="content-B" class="p-plan__content p-plan__content__B">
              <div class="p-plan__content__border">
                <div class="p-plan__content__border__border"></div>
                <p>PLAN<span>B</span>(撮影なし)</p>
                <div class="p-plan__content__border__border"></div>
              </div>
              <div class="p-plan__content__heading">
                <h3>ご提供の画像・動画に演出を加えて編集</h3>
                <div class="p-plan__content__heading__body">
                  <div class="p-plan__content__heading__body__img">
                    <img src="assets/images/plan_B_logo.png" alt="">
                  </div>
                  <div class="p-plan__content__heading__body__text">
                    <p>画像や動画素材をご提供いただき、動きのあるタイトルや簡易なデザインによる<br>演出を加えます。<span class="u-color-primary">ご所有の素材を活かしたい場合</span>にオススメです。</p>
                  </div>
                </div>
              </div>
              <div class="p-plan__content__sample">
                <div class="p-plan__content__sample__list">
                  <span>SAMPLE</span>
                  <div class="p-plan__content__sample__list__border"></div>
                  <a href="">サンプル一覧</a>
                </div>
                <div class="p-plan__content__sample__items__swiper__inner">
                  <div class="p-plan__content__sample__items swiper sample-slider">
                    <div class="p-plan__content__sample__items__inner swiper-wrapper">
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_B_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>観光地PR</p>
                          <span>「観光協会」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_B_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>製造プロセス紹介</p>
                          <span>「工場」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_B_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>参加型CP告知</p>
                          <span>「ダンス」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_B_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p>イベントCP告知</p>
                          <span>「ラーメン祭」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_B_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>観光地PR</p>
                          <span>「観光協会」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_B_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p>製造プロセス紹介</p>
                          <span>「工場」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_B_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>参加型CP告知</p>
                          <span>「ダンス」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_B_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>イベントCP告知</p>
                          <span>「ラーメン祭」</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
              <div class="p-plan__content__price">
                <div class="p-plan__content__price__flex">
                  <div class="p-plan__content__price__tables">
                    <div class="p-plan__content__price__tables__heading">
                      <span>PRICE</span>
                      <div class="p-plan__content__price__tables__heading__border"></div>
                      <a href="#fee">料金表</a>
                    </div>
                    <table class="p-plan__content__price__tables__table">
                      <thead class="p-plan__content__price__tables__table__thead">
                        <tr>
                          <th>30秒まで</th>
                          <th>1分まで</th>
                          <th>以降1分単位</th>
                        </tr>
                      </thead>
                      <tr class="p-plan__content__price__tables__table__tr">
                        <td class="p-plan__content__price__tables__table__td">
                          <span>6</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td">
                          <span>9</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td">
                          ＋<span>3</span>万円
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="p-plan__content__price__service">
                    <div class="p-plan__content__price__service__heading">本プランに含むサービス</div>
                    <div class="p-plan__content__price__service__items">
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_01.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>NA・セリフ<br>字幕挿入</p>
                        </div>
                      </div>
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_02.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>ナレーター<br><span class="u-color-primary">1名</span>起用</p>
                        </div>
                      </div>
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_03.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>ロイヤリティ・<br>フリー<span class="u-color-primary">楽曲</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-plan__content__price__supplyment">
                  <p>
                    ※金額は、すべて税別です。ご依頼の内容により変動する場合があります。　※時間（分）は、<span class="u-color-primary">制作動画の納品尺</span>です。<br>
                    ※追加オプションは料金表を参照 　※パワーポイントなどのプレゼンテーション・ソフトによる制作には対応していません。
                  </p>
                </div>
              </div>
            </div>
            <!-- === PLAN-C === -->
            <div id="content-C" class="p-plan__content p-plan__content__C">
              <div class="p-plan__content__border">
                <div class="p-plan__content__border__border"></div>
                <p>PLAN<span>C</span>(撮影なし)</p>
                <div class="p-plan__content__border__border"></div>
              </div>
              <div class="p-plan__content__heading">
                <h3>ロイヤリティ・フリーの画像・動画をベースに編集</h3>
                <div class="p-plan__content__heading__body">
                  <div class="p-plan__content__heading__body__img">
                    <img src="assets/images/plan_C_logo.png" alt="">
                  </div>
                  <div class="p-plan__content__heading__body__text">
                    <p>ロイヤリティ・フリーの画像や動画を活用して編集します。<br><span class="u-color-primary">料金を抑えながらも、強い印象や好イメージを残したい場合</span>にオススメです。</p>
                  </div>
                </div>
              </div>
              <div class="p-plan__content__sample">
                <div class="p-plan__content__sample__list">
                  <span>SAMPLE</span>
                  <div class="p-plan__content__sample__list__border"></div>
                  <a href="">サンプル一覧</a>
                </div>
                <div class="p-plan__content__sample__items__swiper__inner">
                  <div class="p-plan__content__sample__items swiper sample-slider">
                    <div class="p-plan__content__sample__items__inner swiper-wrapper">
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_C_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>観光雑誌PR</p>
                          <span>「大和浪漫」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_C_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>セール告知</p>
                          <span>「アウトレットセール」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_C_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>スポーツ観戦告知</p>
                          <span>「サッカー日本代表戦告知」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_C_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>商品PR</p>
                          <span>「飲料」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_C_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>観光雑誌PR</p>
                          <span>「大和浪漫」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_C_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>セール告知</p>
                          <span>「アウトレットセール」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_C_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>スポーツ観戦告知</p>
                          <span>「サッカー日本代表戦告知」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_C_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>商品PR</p>
                          <span>「飲料」</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
              <div class="p-plan__content__price">
                <div class="p-plan__content__price__flex">
                  <div class="p-plan__content__price__tables">
                    <div class="p-plan__content__price__tables__heading">
                      <span>PRICE</span>
                      <div class="p-plan__content__price__tables__heading__border"></div>
                      <a href="#fee">料金表</a>
                    </div>
                    <table class="p-plan__content__price__tables__table">
                      <thead class="p-plan__content__price__tables__table__thead p-plan__content__price__tables__table__thead__4">
                        <tr>
                          <th>15秒まで</th>
                          <th>30秒まで</th>
                          <th>1分まで</th>
                          <th>以降1分単位</th>
                        </tr>
                      </thead>
                      <tr class="p-plan__content__price__tables__table__tr">
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          <span>20</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          <span>25</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          <span>30</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          ＋<span>5</span>万円
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="p-plan__content__price__service p-plan__content__price__service__C">
                    <img src="assets/images/a.png" alt="">
                  </div>
                </div>
                <div class="p-plan__content__price__supplyment">
                  <p>
                    ※金額は、すべて税別です。ご依頼の内容により変動する場合があります。　※時間（分）は、<span class="u-color-primary">制作動画の納品尺</span>です。<br>
                    ※追加オプションは料金表を参照 　※パワーポイントなどのプレゼンテーション・ソフトによる制作には対応していません。
                  </p>
                </div>
              </div>
            </div>
            <!-- === PLAN-D === -->
            <div id="content-D" class="p-plan__content p-plan__content__A">
              <div class="p-plan__content__border">
                <div class="p-plan__content__border__border"></div>
                <p>PLAN<span>D</span>(撮影なし)</p>
                <div class="p-plan__content__border__border"></div>
              </div>
              <div class="p-plan__content__heading">
                <h3>文字や図、イラストのアニメーションで制作</h3>
                <div class="p-plan__content__heading__body">
                  <div class="p-plan__content__heading__body__img">
                    <img src="assets/images/plan_D_logo.png" alt="">
                  </div>
                  <div class="p-plan__content__heading__body__text">
                    <p>ストーリー性のある<span class="u-color-primary">簡易アニメ</span>や情報を視覚的に見せる<span class="u-color-primary">インフォグラフィックス</span>を制作。<br><span class="u-color-primary">楽しく、わかりやすく伝えたい場合</span>にオススメです。</p>
                  </div>
                </div>
              </div>
              <div class="p-plan__content__sample">
                <div class="p-plan__content__sample__list">
                  <span>SAMPLE</span>
                  <div class="p-plan__content__sample__list__border"></div>
                  <a href="">サンプル一覧</a>
                </div>
                <div class="p-plan__content__sample__items__swiper__inner">
                  <div class="p-plan__content__sample__items swiper sample-slider">
                    <div class="p-plan__content__sample__items__inner swiper-wrapper">
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_D_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>教育サービス紹介</p>
                          <span>「英会話」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_D_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p>イベントPR告知</p>
                          <span>「ゲーム」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_D_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>環境問題</p>
                          <span>「電気自動車」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_D_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p>商品PR告知</p>
                          <span>「Wi-Fi Pocket」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_D_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>教育サービス紹介</p>
                          <span>「英会話」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_D_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p>イベントPR告知</p>
                          <span>「ゲーム」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_D_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>環境問題</p>
                          <span>「電気自動車」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_D_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p>商品PR告知</p>
                          <span>「Wi-Fi Pocket」</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
              <div class="p-plan__content__price">
                <div class="p-plan__content__price__flex">
                  <div class="p-plan__content__price__tables">
                    <div class="p-plan__content__price__tables__heading">
                      <span>PRICE</span>
                      <div class="p-plan__content__price__tables__heading__border"></div>
                      <a href="#fee">料金表</a>
                    </div>
                    <table class="p-plan__content__price__tables__table">
                      <thead class="p-plan__content__price__tables__table__thead p-plan__content__price__tables__table__thead__4">
                        <tr>
                          <th>15秒まで</th>
                          <th>30秒まで</th>
                          <th>1分まで</th>
                          <th>以降1分単位</th>
                        </tr>
                      </thead>
                      <tr class="p-plan__content__price__tables__table__tr">
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          <span>20</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          <span>30</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          <span>40</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          ＋<span>10</span>万円
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="p-plan__content__price__service">
                    <div class="p-plan__content__price__service__heading">本プランに含むサービス</div>
                    <div class="p-plan__content__price__service__items">
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_01.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>NA・セリフ<br>字幕挿入</p>
                        </div>
                      </div>
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_02.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>ナレーター<br><span class="u-color-primary">1名</span>起用</p>
                        </div>
                      </div>
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_03.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>ロイヤリティ・<br>フリー<span class="u-color-primary">楽曲</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-plan__content__price__supplyment">
                  <p>
                    ※金額は、すべて税別です。ご依頼の内容により変動する場合があります。　※時間（分）は、<span class="u-color-primary">制作動画の納品尺</span>です。<br>
                    ※追加オプションは料金表を参照
                  </p>
                </div>
              </div>
            </div>
            <!-- === PLAN-E === -->
            <div id="content-E" class="p-plan__content p-plan__content__E">
              <div class="p-plan__content__border p-plan__content__border__subColor">
                <div class="p-plan__content__border__border"></div>
                <p>PLAN<span>E</span>(撮影なし)</p>
                <div class="p-plan__content__border__border"></div>
              </div>
              <div class="p-plan__content__heading">
                <h3>シンプルな3DCGをベースに制作</h3>
                <div class="p-plan__content__heading__body">
                  <div class="p-plan__content__heading__body__img">
                    <img src="assets/images/plan_E_logo.png" alt="">
                  </div>
                  <div class="p-plan__content__heading__body__text">
                    <p>3DCGによって<span class="u-color-primary">立体的な構造を見せて説明</span>したり、<span class="u-color-primary">商品を様々な角度で見せたい</span><br>場合にオススメです。</p>
                  </div>
                </div>
              </div>
              <div class="p-plan__content__sample">
                <div class="p-plan__content__sample__list">
                  <span>SAMPLE</span>
                  <div class="p-plan__content__sample__list__border"></div>
                  <a href="">サンプル一覧</a>
                </div>
                <div class="p-plan__content__sample__items__swiper__inner">
                  <div class="p-plan__content__sample__items swiper sample-slider">
                    <div class="p-plan__content__sample__items__inner swiper-wrapper">
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_E_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>新商品紹介</p>
                          <span>「スマートフォン」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_E_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>商業施設案内</p>
                          <span>「ショッピングモール」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_E_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>サービス紹介</p>
                          <span>「位置情報サービス」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_E_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>設備紹介</p>
                          <span>「飲料」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_E_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>新商品紹介</p>
                          <span>「スマートフォン」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_E_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>商業施設案内</p>
                          <span>「ショッピングモール」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_E_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>サービス紹介</p>
                          <span>「位置情報サービス」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item">
                        <div class="p-plan__content__sample__item__movie">
                          <img src="assets/images/plan_sample_list_E_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p>設備紹介</p>
                          <span>「飲料」</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
              <div class="p-plan__content__price">
                <div class="p-plan__content__price__flex">
                  <div class="p-plan__content__price__tables">
                    <div class="p-plan__content__price__tables__heading">
                      <span>PRICE</span>
                      <div class="p-plan__content__price__tables__heading__border"></div>
                      <a href="#fee">料金表</a>
                    </div>
                    <table class="p-plan__content__price__tables__table">
                      <thead class="p-plan__content__price__tables__table__thead p-plan__content__price__tables__table__thead__4">
                        <tr>
                          <th>15秒まで</th>
                          <th>30秒まで</th>
                          <th>1分まで</th>
                          <th>以降30秒単位</th>
                        </tr>
                      </thead>
                      <tr class="p-plan__content__price__tables__table__tr">
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          <span>25</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          <span>35</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          <span>50</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4">
                          ＋<span>15</span>万円
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="p-plan__content__price__service">
                    <div class="p-plan__content__price__service__heading">本プランに含むサービス</div>
                    <div class="p-plan__content__price__service__items">
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_01.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>NA・セリフ<br>字幕挿入</p>
                        </div>
                      </div>
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_02.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>ナレーター<br><span class="u-color-primary">1名</span>起用</p>
                        </div>
                      </div>
                      <div class="p-plan__content__price__service__item">
                        <div class="p-plan__content__price__service__item__img">
                          <img src="assets/images/plan_service_logo_03.png" alt="">
                        </div>
                        <div class="p-plan__content__price__service__item__name">
                          <p>ロイヤリティ・<br>フリー<span class="u-color-primary">楽曲</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-plan__content__price__supplyment">
                  <p>
                    ※金額は、すべて税別です。ご依頼の内容により変動する場合があります。　※時間（分）は、<span class="u-color-primary">3DCG部分１素材あたりになります。</span><br>
                    ※各プランのオプションとしてもご発注いただけます。　※追加オプションは料金表を参照　※CGソフト：Blender／Chinema４D対応<br>
                    ※ただし、精度の高いリアルなCGには対応できない場合があります。  
                  </p>
                </div>
              </div>
            </div>
            <!-- === PLAN-F === -->
            <div id="content-F" class="p-plan__content p-plan__content__F">
              <div class="p-plan__content__border p-plan__content__border__subColor">
                <div class="p-plan__content__border__border"></div>
                <p>PLAN<span>F</span>(撮影なし)</p>
                <div class="p-plan__content__border__border"></div>
              </div>
              <div class="p-plan__content__heading p-plan__content__heading__subColor">
                <h3>商品などの簡易撮影による制作</h3>
                <div class="p-plan__content__heading__body">
                  <div class="p-plan__content__heading__body__img">
                    <img src="assets/images/plan_F_logo.png" alt="">
                  </div>
                  <div class="p-plan__content__heading__body__text">
                    <p><span class="u-color-primary-2">業務用カメラ１台</span>による簡易な撮影を行い、<span class="u-color-primary-2">商品・サービスの解説動画</span>や<br><span class="u-color-primary-2">マニュアル動画</span>を手軽に制作したい場合にオススメです。</p>
                  </div>
                </div>
              </div>
              <div class="p-plan__content__sample">
                <div class="p-plan__content__sample__list">
                  <span class="u-color-primary-2">SAMPLE</span>
                  <div class="p-plan__content__sample__list__border p-plan__content__sample__list__border__subColor u-color-primary-2"></div>
                  <a href="" class="u-color-primary-2 u-subColor-btn">サンプル一覧</a>
                </div>
                <div class="p-plan__content__sample__items__swiper__inner">
                  <div class="p-plan__content__sample__items swiper sample-slider">
                    <div class="p-plan__content__sample__items__inner swiper-wrapper">
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_F_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">新商品紹介</p>
                          <span>「スマートフォン」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_F_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">商業施設案内</p>
                          <span>「ショッピングモール」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item  swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_F_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">サービス紹介</p>
                          <span>「位置情報サービス」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_F_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p class="u-color-primary-2">設備紹介</p>
                          <span>「火力発電」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_F_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">新商品紹介</p>
                          <span>「スマートフォン」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_F_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">商業施設案内</p>
                          <span>「ショッピングモール」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item  swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_F_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">サービス紹介</p>
                          <span>「位置情報サービス」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_F_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p class="u-color-primary-2">設備紹介</p>
                          <span>「火力発電」</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
              <div class="p-plan__content__price">
                <div class="p-plan__content__price__flex">
                  <div class="p-plan__content__price__tables">
                    <div class="p-plan__content__price__tables__heading">
                      <span class="u-color-primary-2">PRICE</span>
                      <div class="p-plan__content__price__tables__heading__border p-plan__content__price__tables__heading__border__subColor"></div>
                      <a href="#fee" class="u-subColor-btn">料金表</a>
                    </div>
                    <table class="p-plan__content__price__tables__table">
                      <thead class="p-plan__content__price__tables__table__thead p-plan__content__price__tables__table__thead__4 p-plan__content__price__tables__table__thead__subColor">
                        <tr>
                          <th class="u-subColor-table-border">5分まで</th>
                          <th class="u-subColor-table-border">10分まで</th>
                          <th class="u-subColor-table-border">15分まで</th>
                          <th class="u-subColor-table-border">以降1分単位</th>
                        </tr>
                      </thead>
                      <tr class="p-plan__content__price__tables__table__tr">
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4 u-subColor-table-border u-color-primary-2">
                          <span class="u-color-primary-2">30</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4 u-subColor-table-border u-color-primary-2">
                          <span class="u-color-primary-2">45</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4 u-subColor-table-border u-color-primary-2">
                          <span class="u-color-primary-2">60</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4 u-subColor-table-border u-color-primary-2">
                          ＋<span class="u-color-primary-2">15</span>万円
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="p-plan__content__price__service p-plan__content__price__service__F">
                    <img src="assets/images/plan_service_F.png" alt="">
                  </div>
                </div>
                <div class="p-plan__content__price__supplyment">
                  <p>
                  ※金額は、すべて税別です。ご依頼の内容により変動する場合があります。　※時間（分）は、<span class="u-color-primary-2">制作動画の納品尺</span>です。<br>  
                  ※撮影に伴う出張経費やメイク・小道具・スタジオ手配等は別途　　※撮影日数が２日以上、または宿泊が必要な遠方の場合は、別途お見積もり<br>
                  ※追加オプションは料金表を参照
                  </p>
                </div>
              </div>
            </div>
            <!-- === PLAN-G === -->
            <div id="content-G" class="p-plan__content p-plan__content__F">
              <div class="p-plan__content__border p-plan__content__border__subColor">
                <div class="p-plan__content__border__border"></div>
                <p>PLAN<span>G</span>(撮影なし)</p>
                <div class="p-plan__content__border__border"></div>
              </div>
              <div class="p-plan__content__heading p-plan__content__heading__subColor">
                <h3>インタビューやイベントの撮影による制作</h3>
                <div class="p-plan__content__heading__body">
                  <div class="p-plan__content__heading__body__img">
                    <img src="assets/images/plan_G_logo.png" alt="">
                  </div>
                  <div class="p-plan__content__heading__body__text">
                    <p>カメラマンや撮影・録音機材などを手配した屋内撮影による動画制作です。<br><span class="u-color-primary-2">カメラは２台</span>用意。<span class="u-color-primary-2">インタビューやイベントの記録</span>などにオススメです。</p>
                  </div>
                </div>
              </div>
              <div class="p-plan__content__sample">
                <div class="p-plan__content__sample__list">
                  <span class="u-color-primary-2">SAMPLE</span>
                  <div class="p-plan__content__sample__list__border p-plan__content__sample__list__border__subColor u-color-primary-2"></div>
                  <a href="" class="u-color-primary-2 u-subColor-btn">サンプル一覧</a>
                </div>
                <div class="p-plan__content__sample__items__swiper__inner">
                  <div class="p-plan__content__sample__items swiper sample-slider">
                    <div class="p-plan__content__sample__items__inner swiper-wrapper">
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_G_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">リクルート案内</p>
                          <span>「新卒採用動画」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_G_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">セミナー紹介</p>
                          <span>「講演会」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item  swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_G_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">サービス紹介</p>
                          <span>「オンラインサロン」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_G_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p class="u-color-primary-2">インタビュー</p>
                          <span>「夏期講習」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_G_01.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">リクルート案内</p>
                          <span>「新卒採用動画」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_G_02.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">セミナー紹介</p>
                          <span>「講演会」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item  swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_G_03.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text">
                          <p class="u-color-primary-2">サービス紹介</p>
                          <span>「オンラインサロン」</span>
                        </div>
                      </div>
                      <div class="p-plan__content__sample__item p-plan__content__sample__item__beside swiper-slide">
                        <div class="p-plan__content__sample__item__movie p-plan__content__sample__item__movie__subColor">
                          <img src="assets/images/plan_sample_list_G_04.png" alt="">
                        </div>
                        <div class="p-plan__content__sample__item__text p-plan__content__sample__item__text__vertical">
                          <p class="u-color-primary-2">インタビュー</p>
                          <span>「夏期講習」</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
              <div class="p-plan__content__price">
                <div class="p-plan__content__price__flex">
                  <div class="p-plan__content__price__tables">
                    <div class="p-plan__content__price__tables__heading">
                      <span class="u-color-primary-2">PRICE</span>
                      <div class="p-plan__content__price__tables__heading__border p-plan__content__price__tables__heading__border__subColor"></div>
                      <a href="#fee" class="u-subColor-btn">料金表</a>
                    </div>
                    <table class="p-plan__content__price__tables__table">
                      <thead class="p-plan__content__price__tables__table__thead p-plan__content__price__tables__table__thead__4 p-plan__content__price__tables__table__thead__subColor">
                        <tr>
                          <th class="u-subColor-table-border">5分まで</th>
                          <th class="u-subColor-table-border">10分まで</th>
                          <th class="u-subColor-table-border">15分まで</th>
                          <th class="u-subColor-table-border">以降5分単位</th>
                        </tr>
                      </thead>
                      <tr class="p-plan__content__price__tables__table__tr">
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4 u-subColor-table-border u-color-primary-2">
                          <span class="u-color-primary-2">50</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4 u-subColor-table-border u-color-primary-2">
                          <span class="u-color-primary-2">65</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4 u-subColor-table-border u-color-primary-2">
                          <span class="u-color-primary-2">80</span>万円
                        </td>
                        <td class="p-plan__content__price__tables__table__td p-plan__content__price__tables__table__td__4 u-subColor-table-border u-color-primary-2">
                          ＋<span class="u-color-primary-2">15</span>万円
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="p-plan__content__price__service p-plan__content__price__service__G">
                    <img src="assets/images/plan_service_g.png" alt="">
                  </div>
                </div>
                <div class="p-plan__content__price__supplyment">
                  <p>
                  ※金額は、すべて税別です。ご依頼の内容により変動する場合があります。　※時間（分）は、<span class="u-color-primary-2">制作動画の納品尺</span>です。<br>  
                  ※撮影に伴う出張経費やメイク・小道具・スタジオ手配等は別途　　※撮影日数が２日以上、または宿泊が必要な遠方の場合は、別途お見積もり<br>
                  ※追加オプションは料金表を参照
                  </p>
                </div>
              </div>
            </div>
            <!-- === PLAN-H === -->
            <div id="content-H" class="p-plan__content p-plan__content__F">
              <div class="p-plan__content__border p-plan__content__border__subColor">
                <div class="p-plan__content__border__border"></div>
                <p>PLAN<span>H</span>(撮影なし)</p>
                <div class="p-plan__content__border__border"></div>
              </div>
              <div class="p-plan__content__heading p-plan__content__heading__subColor">
                <h3>企画から編集までをカスタマイズで制作</h3>
                <div class="p-plan__content__heading__body">
                  <div class="p-plan__content__heading__body__img">
                    <img src="assets/images/plan_H_logo.png" alt="">
                  </div>
                  <div class="p-plan__content__heading__body__text">
                    <p>料金プランに当てはまらず、<span class="u-color-primary-2">１から企画を検討したい場合</span>や、<br><span class="u-color-primary-2">規模の大きな映像制作を実施したい場合</span>に、カスタマイズで対応します。</p>
                    <div class="p-plan__content__heading__body__text__flex">
                      <a href="#contact">個別にお見積もり</a>
                      <span>※本プランは、他のメニュープランと違い、ご提案からの<br>実施・納品にお時間をいただくことになります。</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-plan__content__detail">
                <div class="p-plan__content__detail__flex">
                  <div class="p-plan__content__detail__consult">
                    <div class="p-plan__content__detail__consult__heading">
                      <strong>以下のような場合にご相談ください</strong>
                    </div>
                    <ul class="p-plan__content__detail__consult__list">
                      <li class="p-plan__content__detail__consult__item">さまざまなアプローチで企画・制作を検討したい</li>
                      <li class="p-plan__content__detail__consult__item">ブランドを高めるクオリティの高い動画をつくりしたい</li>
                      <li class="p-plan__content__detail__consult__item">グラフィックや販促企画とセットで動画をつくりたい</li>
                      <li class="p-plan__content__detail__consult__item">著名なタレントを起用したCMをつくりたい</li>
                      <li class="p-plan__content__detail__consult__item">オリジナルのキャラクターをつくって動画をつくりたい</li>
                      <li class="p-plan__content__detail__consult__item">オリジナルの楽曲をつくってCMをつくりたい</li>
                      <li class="p-plan__content__detail__consult__item">支社や工場など、数箇所のロケ撮影を希望したい</li>
                      <li class="p-plan__content__detail__consult__item">海外での撮影を検討したい</li>
                      <li class="p-plan__content__detail__consult__item">ドローンなどの特殊機材を使用した撮影をしたい</li>
                      <li class="p-plan__content__detail__consult__item">.etc</li>
                    </ul>
                  </div>
                  <div class="p-plan__content__detail__imagenation">
                    <div class="p-plan__content__detail__imagenation__heading">
                      <strong>フル・カスタマイズの体制イメージ</strong>
                    </div>
                    <div class="p-plan__content__detail__imagenation__body">
                      <div class="p-plan__content__detail__imagenation__boxs">
                        <div class="p-plan__content__detail__imagenation__box">お客様</div>
                        <div class="p-plan__content__detail__imagenation__box">代理店様</div>
                        <div class="p-plan__content__detail__imagenation__box">制作会社様</div>
                      </div>
                      <div class="p-plan__content__detail__imagenation__arrow">
                        <img src="assets/images/top_arrow.png" alt="">
                      </div>
                      <div class="p-plan__content__detail__imagenation__logo">
                        <img src="assets/images/header_logo.png" alt="">
                      </div>
                      <div class="p-plan__content__detail__imagenation__alignment">
                        <img src="assets/images/alignment_icon.png" alt="">
                      </div>
                      <div class="p-plan__content__detail__imagenation__alignment__boxs">
                        <div class="p-plan__content__detail__imagenation__alignment__box">大手制作会社</div>
                        <div class="p-plan__content__detail__imagenation__alignment__box">広告デザイン会社</div>
                        <div class="p-plan__content__detail__imagenation__alignment__box">プロモーション会社</div>
                        <div class="p-plan__content__detail__imagenation__alignment__box">キャスティング会社</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--======== p-fee ========-->
    <section id="fee" class="p-fee l-section">
      <div class="p-fee__container l-container">
        <div class="p-fee__block">
          <div class="p-fee__heading c-heading-box">
            <div class="p-fee__heading__logo">
              <img src="assets/images/fee_logo.png" alt="">
            </div>
            <h2 class="c-heading">料金表</h2>
          </div>
          <!-- == オプション料金のタイトル == -->
          <div id="option-heading" class="p-fee__heading p-fee__heading__option c-heading-box">
            <div class="p-fee__heading__logo">
              <img src="assets/images/option_logo.png" alt="">
            </div>
            <h2 class="c-heading">オプション料金</h2>
          </div>
          <div class="p-fee__btns">
            <button id="fee-btn" class="p-fee__btn active" data-target="#fee-content">料金プラン</button>
            <button id="option-fee-btn" class="p-fee__btn" data-target="#option-content">オプションプラン</button>
          </div>
          <!-- == 料金プランのコンテンツ == -->
          <div id="fee-content" class="p-fee__content open">
            <div class="p-fee__content__edit__block p-fee__content__block">
              <div class="p-fee__content__edit__ele__1 p-fee__content__ele__1">
                <div class="p-fee__content__edit__heading p-fee__content__heading">
                  <strong>編集のみ</strong>
                  <span>※追加オプションは料金表をご参照ください</span>
                </div>
                <div class="p-fee__content__edit__length p-fee__content__length">
                  <div class="p-fee__content__edit__length__heading p-fee__content__length__heading">
                    <span>完成動画の総尺</span>
                  </div>
                  <div class="p-fee__content__edit__length__times p-fee__content__length__times">
                    <div class="p-fee__content__edit__length__time p-fee__content__length__time">15秒まで</div>
                    <div class="p-fee__content__edit__length__time p-fee__content__length__time">30秒まで</div>
                    <div class="p-fee__content__edit__length__time p-fee__content__length__time">1分まで</div>
                    <div class="p-fee__content__edit__length__time p-fee__content__length__time">以降1分単位</div>
                  </div>
                </div>
              </div>
              <div class="p-fee__content__edit__ele__A p-fee__content__ele">
                <div class="p-fee__content__edit__logo">
                  <img src="assets/images/plan_A_logo.png" alt="planA">
                  <span>A</span>
                </div>
                <div class="p-fee__content__edit__text">
                  <span>ご提供のテキスト・画像のスライド・ショー編集</span>
                </div>
                <div class="p-fee__content__edit__amounts">
                  <div class="p-fee__content__edit__amount"><span>6</span>万円</div>
                  <div class="p-fee__content__edit__amount"><span>9</span>万円</div>
                  <div class="p-fee__content__edit__amount">＋<span>3</span>万円</div>
                </div>
              </div>
              <div class="p-fee__content__edit__ele__flex">
                <div class="p-fee__content__edit__ele__BC">
                  <div class="p-fee__content__edit__ele__B">
                    <div class="p-fee__content__edit__logo p-fee__content__edit__logo__B">
                      <img src="assets/images/plan_B_logo.png" alt="planB">
                      <span>B</span>
                    </div>
                    <div class="p-fee__content__edit__text p-fee__content__edit__text__B">
                      <span>ご提供の画像・動画に演出を加えて編集</span>
                    </div>
                    <div class="p-fee__content__edit__amounts p-fee__content__edit__amounts__B">
                      <div class="p-fee__content__edit__amount p-fee__content__edit__amount__B"><span>15</span>万円</div>
                      <div class="p-fee__content__edit__amount p-fee__content__edit__amount__B"><span>20</span>万円</div>
                    </div>
                  </div>
                  <div class="p-fee__content__edit__ele__C">
                    <div class="p-fee__content__edit__logo p-fee__content__edit__logo__C">
                      <img src="assets/images/plan_C_logo.png" alt="planC">
                      <span>C</span>
                    </div>
                    <div class="p-fee__content__edit__text p-fee__content__edit__text__C">
                      <span>ご提供の画像・動画に演出を加えて編集</span>
                    </div>
                    <div class="p-fee__content__edit__amounts p-fee__content__edit__amounts__C">
                      <div class="p-fee__content__edit__amount p-fee__content__edit__amount__C"><span>20</span>万円</div>
                      <div class="p-fee__content__edit__amount p-fee__content__edit__amount__C"><span>25</span>万円</div>
                      <div class="p-fee__content__edit__amount p-fee__content__edit__amount__C"><span>30</span>万円</div>
                    </div>
                  </div>
                </div>
                <div class="p-fee__content__edit__ele__BC__last__amounts">
                  <div class="p-fee__content__edit__ele__BC__last__amount">＋<span>5</span>万円</div>
                </div>
              </div>
              <div class="p-fee__content__edit__ele__D">
                <div class="p-fee__content__edit__logo">
                  <img src="assets/images/plan_D_logo.png" alt="planD">
                  <span>D</span>
                </div>
                <div class="p-fee__content__edit__text">
                  <span>文字や図、イラストのアニメーションで制作</span>
                </div>
                <div class="p-fee__content__edit__amounts">
                  <div class="p-fee__content__edit__amount p-fee__content__edit__amount__basicSize"><span>20</span>万円</div>
                  <div class="p-fee__content__edit__amount"><span>30</span>万円</div>
                  <div class="p-fee__content__edit__amount"><span>40</span>万円</div>
                  <div class="p-fee__content__edit__amount">＋<span>10</span>万円</div>
                </div>
              </div>
            </div>
            <div class="p-fee__content__3D__block p-fee__content__block">
              <div class="p-fee__content__3D__ele_1 p-fee__content__ele__1">
                <div class="p-fee__content__3D__heading p-fee__content__heading">
                  <strong>3DCG</strong>
                  <span>※追加オプションは料金表をご参照ください</span>
                </div>
                <div class="p-fee__content__3D__length p-fee__content__length">
                  <div class="p-fee__content__3D__length__heading p-fee__content__length__heading">
                    <span>1素材あたりの総尺</span>
                  </div>
                  <div class="p-fee__content__3D__length__times p-fee__content__length__times">
                    <div class="p-fee__content__3D__length__time p-fee__content__length__time">15秒まで</div>
                    <div class="p-fee__content__3D__length__time p-fee__content__length__time">30秒まで</div>
                    <div class="p-fee__content__3D__length__time p-fee__content__length__time">1分まで</div>
                    <div class="p-fee__content__3D__length__time p-fee__content__length__time">以降30秒単位</div>
                  </div>
                </div>
              </div>
              <div class="p-fee__content__edit__ele__E">
                <div class="p-fee__content__edit__logo">
                  <img src="assets/images/plan_E_logo.png" alt="planE">
                  <span>E</span>
                </div>
                <div class="p-fee__content__edit__text">
                  <span>シンプルな３DCGをベースに制作</span>
                </div>
                <div class="p-fee__content__edit__amounts">
                  <div class="p-fee__content__edit__amount p-fee__content__edit__amount__E"><span>25</span>万円</div>
                  <div class="p-fee__content__edit__amount p-fee__content__edit__amount__E"><span>35</span>万円</div>
                  <div class="p-fee__content__edit__amount p-fee__content__edit__amount__E"><span>50</span>万円</div>
                  <div class="p-fee__content__edit__amount p-fee__content__edit__amount__E">＋<span>15</span>万円</div>
                </div>
              </div>
            </div>
            <div class="p-fee__content__photograph__block p-fee__content__block">
              <div class="p-fee__content__photograph__ele_1 p-fee__content__ele__1">
                <div class="p-fee__content__photograph__heading p-fee__content__heading">
                  <strong>撮影・編集</strong>
                  <span>※撮影に伴う出張経費やメイク・小道具・スタジオ手配等は、<br>別途お見積りとなります</span>
                </div>
                <div class="p-fee__content__edit__length p-fee__content__length">
                  <div class="p-fee__content__edit__length__heading p-fee__content__length__heading">
                    <span>完成動画の総尺</span>
                  </div>
                  <div class="p-fee__content__edit__length__times p-fee__content__length__times">
                    <div class="p-fee__content__edit__length__time p-fee__content__length__time">5秒まで</div>
                    <div class="p-fee__content__edit__length__time p-fee__content__length__time">10秒まで</div>
                    <div class="p-fee__content__edit__length__time p-fee__content__length__time">15秒まで</div>
                    <div class="p-fee__content__edit__length__time p-fee__content__length__time">以降5分単位</div>
                  </div>
                </div>
              </div>
              <div class="p-fee__content__photograph__ele__flex">
                <div class="p-fee__content__photograph__ele__FG">
                  <div class="p-fee__content__photograph__ele__F">
                    <div class="p-fee__content__photograph__logo p-fee__content__photograph__logo__F">
                      <img src="assets/images/plan_F_logo.png" alt="planF">
                      <span>F</span>
                    </div>
                    <div class="p-fee__content__photograph__text p-fee__content__photograph__text__F">
                      <span>商品などの簡易撮影と編集</span><br>
                      <span>※業務用カメラ1台を含む（撮影１日）</span>
                    </div>
                    <div class="p-fee__content__photograph__amounts">
                      <div class="p-fee__content__photograph__amount p-fee__content__photograph__amount__F"><span>30</span>万円</div>
                      <div class="p-fee__content__photograph__amount p-fee__content__photograph__amount__F"><span>45</span>万円</div>
                      <div class="p-fee__content__photograph__amount p-fee__content__photograph__amount__F"><span>65</span>万円</div>
                    </div>
                  </div>
                  <div class="p-fee__content__photograph__ele__G">
                    <div class="p-fee__content__photograph__logo p-fee__content__photograph__logo__G">
                      <img src="assets/images/plan_G_logo.png" alt="planG">
                      <span>G</span>
                    </div>
                    <div class="p-fee__content__photograph__text p-fee__content__photograph__text__G">
                      <span>インタビューやイベントの撮影と編集</span><br>
                      <span>※業務用カメラ２台/ピンマイク２機を含む（撮影１日）</span>
                    </div>
                    <div class="p-fee__content__photograph__amounts">
                      <div class="p-fee__content__photograph__amount p-fee__content__photograph__amount__G"><span>50</span>万円</div>
                      <div class="p-fee__content__photograph__amount p-fee__content__photograph__amount__G"><span>65</span>万円</div>
                      <div class="p-fee__content__photograph__amount p-fee__content__photograph__amount__G"><span>80</span>万円</div>
                    </div>
                  </div>
                </div>
                <div class="p-fee__content__photograph__ele__FG__last__amounts">
                  <div class="p-fee__content__photograph__ele__FG__last__amount">＋<span>15</span>万円</div>
                </div>
              </div>
            </div>
            <div class="p-fee__content__customize__block p-fee__content__block">
              <div class="p-fee__content__customize__ele_1 p-fee__content__ele__1">
                <div class="p-fee__content__customize__heading p-fee__content__heading">
                  <strong>カスタマイズ制作</strong>
                </div>
                <div class="p-fee__content__length">
                  <div class="p-fee__content__customize__length__heading p-fee__content__length__heading">
                    <span>完成動画の総尺:個別にご設定</span>
                  </div>
                </div>
              </div>
              <div class="p-fee__content__photograph__ele__H">
                <div class="p-fee__content__photograph__logo p-fee__content__photograph__logo__H">
                  <img src="assets/images/plan_H_logo.png" alt="planH">
                  <span>H</span>
                </div>
                <div class="p-fee__content__photograph__text p-fee__content__photograph__text__H">
                  <span>企画から編集までをカスタマイズで制作</span>
                </div>
                <div class="p-fee__content__photograph__amounts__customize p-fee__content__photograph__amounts">
                  <div class="p-fee__content__photograph__amount__customize p-fee__content__photograph__amount">個別にお見積もり</div>
                </div>
              </div>
            </div>
            <div class="p-fee__content__service__include">
              <div class="p-fee__content__service__include__body">
                <p>※上記のプランすべてに右の<br>サービスを含んでいます。</p>
              </div>
              <div class="p-fee__content__service__include__contents">
                <div class="p-fee__content__service__include__content">
                  <div class="p-fee__content__service__include__content__icon">
                    <img src="assets/images/fee_plan_lnclude_logo_01.png" alt="">
                  </div>
                  <div class="p-fee__content__service__include__content__text">
                    <span>NA・セリフ<br>字幕挿入</span>
                  </div>
                </div>
                <div class="p-fee__content__service__include__content">
                  <div class="p-fee__content__service__include__content__icon">
                    <img src="assets/images/fee_plan_lnclude_logo_02.png" alt="">
                  </div>
                  <div class="p-fee__content__service__include__content__text">
                    <span>ナレーター<br><span class="u-color-primary">１名</span></span>
                  </div>
                </div>
                <div class="p-fee__content__service__include__content">
                  <div class="p-fee__content__service__include__content__icon">
                    <img src="assets/images/fee_plan_lnclude_logo_03.png" alt="">
                  </div>
                  <div class="p-fee__content__service__include__content__text">
                    <span>ロイヤリティ・<br>フリー楽曲<span class="u-color-primary">１曲</span></span>
                  </div>
                </div>
                <div class="p-fee__content__service__include__content">
                  <div class="p-fee__content__service__include__content__icon">
                    <img src="assets/images/fee_plan_lnclude_logo_04.png" alt="">
                  </div>
                  <div class="p-fee__content__service__include__content__text">
                    <span>映像の修正<br><span class="u-color-primary">５回</span>まで</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-fee__content__discount">
              <div class="p-fee__content__discount__heading">
                <div class="p-fee__content__discount__heading__img">
                  <img src="assets/images/fee_discount_img_01.png" alt="">
                </div>
                <div class="p-fee__content__discount__heading__text">
                  <p>シリーズ<br><span>割引</span></p>
                </div>
              </div>
              <div class="p-fee__content__discount__body">
                <div class="p-fee__content__discount__body__desc">
                  <p><span class="u-color-primary">同様の企画を同時に２本以上</span>ご発注される場合は、該当する順番の素材に、以下の割引を適用します。</p>
                </div>
                <div class="p-fee__content__discount__body__numbers__block">
                  <div class="p-fee__content__discount__body__numbers">
                    <div class="p-fee__content__discount__body__number">
                      <span class="p-fee__content__discount__body__number__pieces">2本目</span>
                      <span class="p-fee__content__discount__body__number__unit">10<span>%</span></span>
                    </div>
                    <div class="p-fee__content__discount__body__number__img">
                      <img src="assets/images/fee_discount_img_02.png" alt="">
                      <p>OFF</p>
                    </div>
                  </div>
                  <div class="p-fee__content__discount__body__numbers">
                    <div class="p-fee__content__discount__body__number">
                      <span class="p-fee__content__discount__body__number__pieces">3本目</span>
                      <span class="p-fee__content__discount__body__number__unit">15<span>%</span></span>
                    </div>
                    <div class="p-fee__content__discount__body__number__img">
                      <img src="assets/images/fee_discount_img_02.png" alt="">
                      <p>OFF</p>
                    </div>
                  </div>
                  <div class="p-fee__content__discount__body__numbers">
                    <div class="p-fee__content__discount__body__number">
                      <span class="p-fee__content__discount__body__number__pieces">4本目</span>
                      <span class="p-fee__content__discount__body__number__unit">20<span>%</span></span>
                    </div>
                    <div class="p-fee__content__discount__body__number__img">
                      <img src="assets/images/fee_discount_img_02.png" alt="">
                      <p>OFF</p>
                    </div>
                  </div>
                  <div class="p-fee__content__discount__body__numbers">
                    <div class="p-fee__content__discount__body__number">
                      <span class="p-fee__content__discount__body__number__pieces">5本目以降</span>
                      <span class="p-fee__content__discount__body__number__unit">25<span>%</span></span>
                    </div>
                    <div class="p-fee__content__discount__body__number__img">
                      <img src="assets/images/fee_discount_img_02.png" alt="">
                      <p>OFF</p>
                    </div>
                  </div>
                </div>
                <div class="p-fee__content__discount__supplyment">
                  <p>※企画内容が大きく違う場合は適用されません。</p>
                </div>
              </div>
            </div>
          </div>
          <!-- == オプション料金のコンテンツ == -->
          <div id="option-content" class="p-fee__optionContent p-fee__content">
            <div class="p-fee__optionContent__tables">
              <table class="p-fee__optionContent__table">
                <tr class="p-fee__optionContent__tr">
                  <th class="p-fee__optionContent__th">オプション料金</th>
                  <th class="p-fee__optionContent__th">内容</th>
                  <th class="p-fee__optionContent__th">費用の目安</th>
                </tr>
                <!-- === ナレーション原稿制作 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">ナレーション原稿制作</td>
                  <td class="p-fee__optionContent__td">
                    参考資料をご提供いただき、ヒアリングを行った上で<br>当社がナレーション原稿を制作します。<br>
                    <span class="p-fee__optionContent__td__supplyment">※映像構成制作が必要な際は下記料金が別途追加となります。</span>
                  </td>
                  <td class="p-fee__optionContent__td">500文字まで：20,000円<br><span>※以降：+5,000円 / 500文字</span></td>
                </tr>
                <!-- === 映像構成制作 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">映像編集制作</td>
                  <td class="p-fee__optionContent__td">
                    参考資料をご提供いただき、ヒアリングを行った上で映像編集を制作します。<br>
                    <span class="p-fee__optionContent__td__supplyment">※ナレーション原稿制作が必要な際は上記料金が別途追加となります。</span>
                  </td>
                  <td class="p-fee__optionContent__td">1分まで：30,000円<br><span>※以降：+10,000円 / 30秒</span></td>
                </tr>
                <!-- === 映像の修正 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">映像の修正</td>
                  <td class="p-fee__optionContent__td">修正が大幅な場合は追加料金が発生する場合があります。</td>
                  <td class="p-fee__optionContent__td">個別お見積もり</td>
                </tr>
                <!-- === 日本語ナレーターの追加 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">日本語ナレーターの追加</td>
                  <td class="p-fee__optionContent__td">
                    ナレーター・声優を、2 名以上起用したい場合に手配します。<br>
                    <span class="p-fee__optionContent__td__supplyment">※1名までは基本プランの料金に含みます。<br>※人選は、Gravies 声部のメンバーからになります。</span>
                  </td>
                  <td class="p-fee__optionContent__td">10,000円 / 1名</td>
                </tr>
                <!-- === テキストの外国語翻訳 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">テキストの外国語翻訳</td>
                  <td class="p-fee__optionContent__td" rowspan="2">
                    外部提携会社より翻訳・ナレーターを手配します。<br>
                    <span class="p-fee__optionContent__td__supplyment">※ご依頼の言語に対応できない場合があります。<br>※音声は無期限・買取での契約ができない場合があります。</span>
                  </td>
                  <td class="p-fee__optionContent__td" rowspan="2">個別お見積もり</td>
                </tr>
                <!-- === 外国語ナレーション収録 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td p-fee__optionContent__td__1">外国語ナレーション収録</td>
                </tr>
                <!-- === ロイヤリティフリー画像 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">ロイヤリティフリー画像</td>
                  <td class="p-fee__optionContent__td" rowspan="3">
                    外部サービスサイトからセレクトし、手配します。<br>
                    <span class="p-fee__optionContent__td__supplyment">※素材の検索や複数候補のご提案を含んでの料金となります。<br>※素材によって、目安の料金より高くなる場合があります。</span>
                  </td>
                  <td class="p-fee__optionContent__td">5,000 円 /1 点</td>
                </tr>
                <!-- === ロイヤリティフリー動画 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">ロイヤリティフリー動画</td>
                  <td class="p-fee__optionContent__td">15,000 円 /1 点</td>
                </tr>
                <!-- === ロイヤリティフリー音源 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">ロイヤリティフリー音源</td>
                  <td class="p-fee__optionContent__td">
                    5,000 円 /1 点<br>
                    <span class="p-fee__optionContent__td__cost__supplyment">※SE など短い音源：2,000 円 /1 点</span>
                  </td>
                </tr>
                <!-- === カラーグレーディング === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">カラーグレーディング</td>
                  <td class="p-fee__optionContent__td">
                    映像素材を希望の色の方向性に調整し、質を高めます。<br>
                    <span class="p-fee__optionContent__td__supplyment">※軽微な色変更の場合は、無料で対応します。<br>※素材の状態により、希望の色への調整が難しい場合があります。</span>
                  </td>
                  <td class="p-fee__optionContent__td">50,000 円 /1 分</td>
                </tr>
                <!-- === MA スタジオ使用料 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">
                    MA スタジオ使用料<br>
                    <span>（都内近郊限定）</span>
                  </td>
                  <td class="p-fee__optionContent__td">
                  ナレーション収録を、スタジオにてお立ち合いのもと実施します。<br>また、音声と楽曲の音量調整等を行います。<br>
                    <span class="p-fee__optionContent__td__supplyment">※手配するスタジオの規模や時間によって料金は変動します。</span>
                  </td>
                  <td class="p-fee__optionContent__td">30,000 円 /1 時間</td>
                </tr>
                <!-- === ナレーターのスタジオ派遣 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">
                    ナレーターのスタジオ派遣<br>
                    <span>（都内近郊限定）</span>
                  </td>
                  <td class="p-fee__optionContent__td">
                    ナレーターをスタジオに派遣する料金です。<br>
                    <span class="p-fee__optionContent__td__supplyment">※当社、または貴社にて別途 MA スタジオの手配が必要となります。</span>
                  </td>
                  <td class="p-fee__optionContent__td">
                    50,000 円 /1 時間<br>
                    <span class="p-fee__optionContent__td__cost__supplyment">※以降：＋10,000 円 /1 時間</span>
                  </td>
                </tr>
                <!-- === 画角変更リサイズ === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">画角変更リサイズ</td>
                  <td class="p-fee__optionContent__td">
                    縦型・横型・スクウェア型など、画角のリサイズを行います。<br>
                    <span class="p-fee__optionContent__td__supplyment">※余白部のテキスト挿入など軽徴な追加も含めて対応します。<br>※縦横比が同じサイズによる解像度のダウングレードは無償で対応します。</span>
                  </td>
                  <td class="p-fee__optionContent__td">10,000 円 /1 点</td>
                </tr>
                <!-- === WebCM 入稿データ制作 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">WebCM 入稿データ制作</td>
                  <td class="p-fee__optionContent__td">
                    媒体社の媒体規定に応じて入稿素材を制作します。<br>
                    <span class="p-fee__optionContent__td__supplyment">※画角変更が必要な際は、画角変更リサイズの料金になります。</span>
                  </td>
                  <td class="p-fee__optionContent__td">5,000 円 /1 点</td>
                </tr>
                <!-- === TVCM 用入稿データ素材制作 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">TVCM 用入稿データ素材制作</td>
                  <td class="p-fee__optionContent__td">
                    媒体社の媒体規定に応じて入稿素材を制作します。<br>
                    <span class="p-fee__optionContent__td__supplyment">※入稿期限までに数日の余裕を持ってご依頼ください。</span>
                  </td>
                  <td class="p-fee__optionContent__td">個別お見積もり</td>
                </tr>
                <!-- === 動画内容の改訂納品 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">動画内容の改訂納品</td>
                  <td class="p-fee__optionContent__td">
                    納品された動画の改訂編集を行います。<br>
                    <span class="p-fee__optionContent__td__supplyment">※納品後、2 年以内の素材が対象になります。</span>
                  </td>
                  <td class="p-fee__optionContent__td">個別お見積もり</td>
                </tr>
                <!-- === サムネイル制作 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">サムネイル制作</td>
                  <td class="p-fee__optionContent__td">
                    制作動画の YouTube 掲載などに必要なサムネイルを制作します。<br>
                    サイズは、1920x1080 や 1280x720px などご指定ください。
                  </td>
                  <td class="p-fee__optionContent__td">5,000 円 /1 点</td>
                </tr>
                <!-- === グラフィック制作 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">グラフィック制作</td>
                  <td class="p-fee__optionContent__td">
                    制作動画に関わるサービスなどの紹介やイベント告知のチラシ、<br>
                    リーフレットを制作します。
                  </td>
                  <td class="p-fee__optionContent__td">
                    50,000 円 /A4 片面<br>
                    <span class="p-fee__optionContent__td__cost__supplyment">※フルカラー</span>
                  </td>
                </tr>
                <!-- === Web サイト制作 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">Web サイト制作</td>
                  <td class="p-fee__optionContent__td">
                    制作動画を格納し、サービスなどを紹介するLPサイトを<br>
                    制作します。
                  </td>
                  <td class="p-fee__optionContent__td">個別お見積もり</td>
                </tr>
                <!-- === 短期納品対応 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">短期納品対応</td>
                  <td class="p-fee__optionContent__td">
                    当社ご提示の納期より、大幅な短縮をご希望の場合は、<br>
                    メニュー料金に対して割増料金を加算します。<br>
                    <span class="p-fee__optionContent__td__supplyment">※納期によってはご希望に添えない場合があります。</span>
                  </td>
                  <td class="p-fee__optionContent__td">個別お見積もり</td>
                </tr>
              </table>
              <!-- ===== 撮影関連オプション料金のテーブル表 ===== -->
              <table class="p-fee__optionContent__table p-fee__optionContent__photograph__table">
                <tr class="p-fee__optionContent__tr">
                  <th class="p-fee__optionContent__th">撮影関連オプション料金</th>
                  <th class="p-fee__optionContent__th">内容</th>
                  <th class="p-fee__optionContent__th">
                    費用の目安<br>
                    <span>※条件によって異なります</span>
                  </th>
                </tr>
                <!-- === 各種スタッフの追加 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">各種スタッフの追加</td>
                  <td class="p-fee__optionContent__td">
                    撮影規模に応じて、制作進行、撮影技師、照明技師、<br>
                    録音技師を追加で手配します。
                  </td>
                  <td class="p-fee__optionContent__td" rowspan="7">個別お見積もり</td>
                </tr>
                <!-- === 各種機材の追加 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">各種機材の追加</td>
                  <td class="p-fee__optionContent__td">
                    撮影内容や規模に応じて、撮影機材、照明機材、<br>
                    録音機材を追加で手配します。
                  </td>
                </tr>
                <!-- === 撮影スタジオ・ロケ地使用料 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">撮影スタジオ・ロケ地使用料</td>
                  <td class="p-fee__optionContent__td">
                    スタジオやロケ地を手配します。ロケ地の選定にあたって<br>
                    別途ロケ・コーディネーターの手配が必要な場合があります。
                  </td>
                </tr>
                <!-- === 美術・小道具の手配 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">美術・小道具の手配</td>
                  <td class="p-fee__optionContent__td">
                    撮影内容に応じて美術や小道具を手配します。<br>
                    内容・希望に応じて人件費等も別途必要になります。
                  </td>
                </tr>
                <!-- === 著名人 / タレントのキャスティング === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">著名人 / タレントの<br>キャスティング</td>
                  <td class="p-fee__optionContent__td">著名人やタレントをキャスティング会社を通して<br>発注します。</td>
                </tr>
                <!-- === 各種経費 === -->
                <tr class="p-fee__optionContent__tr">
                  <td class="p-fee__optionContent__td">各種経費</td>
                  <td class="p-fee__optionContent__td">出張移動・宿泊費・食費・雑費など、必要に応じて<br>各種経費を別途計上いたします。</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--======== p-deliver ========-->
    <section id="deliver" class="p-deliver l-section">
      <div class="p-deliver__container l-container">
        <div class="p-deliver__block">
          <div class="p-deliver__heading c-heading-box">
            <div class="p-deliver__heading__logo">
              <img src="assets/images/deliver_logo.png" alt="">
            </div>
            <h2 class="c-heading">ご納品までの流れ</h2>
          </div>
          <div class="p-deliver__btns">
            <div id="edit-flow-btn" class="p-deliver__btn active" data-target="#edit-flow">
              <div class="p-deliver__btn__img">
                <img src="assets/images/deliver_btn_img_01.png" alt="">
              </div>
              <div class="p-deliver__btn__text">
                <p><span>「編集のみ」</span>制作の流れ</p>
              </div>
            </div>
            <div id="production-flow-btn" class="p-deliver__btn" data-target="#production-flow">
              <div class="p-deliver__btn__img">
                <img src="assets/images/deliver_btn_img_02.png" alt="">
              </div>
              <div class="p-deliver__btn__text p-deliver__btn__text__production">
                <p><span>「制作あり」</span>制作の流れ</p>
              </div>
            </div>
          </div>
          <!-- === 「編集のみ」制作の流れの納品フロー === -->
          <div id="edit-flow" class="p-deliver__flow p-deliver__editOnly__flow open">
            <div class="p-deliver__flow__body">
              <!-- == ご依頼 == -->
              <div class="p-deliver__flow__item">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_request_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name">
                  <p>ご依頼（ご相談フォーム orお電話）</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon.png" alt="">
                </div>
              </div>
              <!-- == ヒアリング（オンライン会議） == -->
              <div class="p-deliver__flow__item">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_hearing_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name">
                  <p>ヒアリング（オンライン会議）</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text">
                  <p>資料・動画像等のご送付</p>
                </div>
              </div>
              <!-- == お見積もり == -->
              <div class="p-deliver__flow__item">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/estimate_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name">
                  <p>お見積もり</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text">
                  <p>実施のご決定</p>
                </div>
              </div>
              <!-- == 原稿・構成のご提案 == -->
              <div class="p-deliver__flow__item">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_manuscript_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name">
                  <p>原稿・構成のご提案</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text">
                  <p>お戻し</p>
                </div>
              </div>
              <!-- == 第一編集ご提出 == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__primaryColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_edit_logo_01.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__primaryColor">
                  <p>第一編集ご提出</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon_blue.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text p-deliver__flow__arrow__text__primaryColor">
                  <p>お戻し</p>
                </div>
              </div>
              <!-- == 第二編集ご提出 == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__primaryColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_edit_logo_02.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__primaryColor">
                  <p>第二編集ご提出</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon_blue.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text p-deliver__flow__arrow__text__primaryColor">
                  <p>お戻し</p>
                </div>
              </div>
              <!-- == ナレーション収録（お立合なし） == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__primaryColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_narration_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__primaryColor">
                  <p>ナレーション収録（お立合なし）</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon_blue.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text p-deliver__flow__arrow__text__primaryColor">
                  <p>お戻し</p>
                </div>
              </div>
              <!-- == 最終映像ご納品 == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__primaryColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_final_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__primaryColor">
                  <p>最終映像ご納品</p>
                </div>
              </div>
            </div>
            <div class="p-deliver__flow__schedules">
              <div class="p-deliver__flow__schedule">
                <div class="p-deliver__flow__schedule__heading">
                  <p>動画尺</p>
                  <span class="p-deliver__flow__schedule__heading__span__primaryColor">短</span>
                </div>
                <div class="p-deliver__flow__schedule__first">
                  <p>１〜２週間程度</p>
                </div>
                <div class="p-deliver__flow__schedule__last">
                  <p>１〜２週間程度</p>
                </div>
              </div>
              <div class="p-deliver__flow__schedule">
                <div class="p-deliver__flow__schedule__heading">
                  <p>動画尺</p>
                  <span class="p-deliver__flow__schedule__heading__span__subColor">長</span>
                </div>
                <div class="p-deliver__flow__schedule__first">
                  <p>2〜3週間程度</p>
                </div>
                <div class="p-deliver__flow__schedule__last">
                  <p>2〜3週間程度</p>
                </div>
              </div>
              <div class="p-deliver__flow__schedule__supplyment">
                <p>※動画尺は、<span class="u-color-primary">３分程度までを短め、５分程度以上を長め</span>とします。<br>ただし、上記はあくまでも目安で、制作内容や修正量、お戻しの期間によりスケジュールは前後します。</p>
              </div>
            </div>
          </div>
          <!-- === 「制作あり」制作の流れの納品フロー === -->
          <div id="production-flow" class="p-deliver__flow p-deliver__addProduction__flow">
            <div class="p-deliver__flow__body">
              <!-- == ご依頼 == -->
              <div class="p-deliver__flow__item">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_request_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name">
                  <p>ご依頼（ご相談フォーム orお電話）</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon.png" alt="">
                </div>
              </div>
              <!-- == ヒアリング（オンライン会議） == -->
              <div class="p-deliver__flow__item">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_hearing_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name">
                  <p>ヒアリング（オンライン会議）</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text">
                  <p>資料・動画像等のご送付</p>
                </div>
              </div>
              <!-- == お見積もり == -->
              <div class="p-deliver__flow__item">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/estimate_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name">
                  <p>お見積もり</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text">
                  <p>実施のご決定</p>
                </div>
              </div>
              <!-- == 原稿・構成のご提案 == -->
              <div class="p-deliver__flow__item">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_manuscript_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name">
                  <p>原稿・構成のご提案</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text">
                  <p>お戻し</p>
                </div>
              </div>
              <!-- == ロケハン（ロケ地確認・選定） == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__subColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_location_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__subColor">
                  <p>ロケハン（ロケ地確認・選定）</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon_subcolor.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text p-deliver__flow__arrow__text__subColor">
                  <p>撮影プランの確定</p>
                </div>
              </div>
              <!-- == 撮影（内容によりお立合い） == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__subColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_btn_img_02.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__subColor">
                  <p>撮影（内容によりお立合い）</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon_subcolor.png" alt="">
                </div>
              </div>
              <!-- == 第一編集ご提出 == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__primaryColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_edit_logo_01.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__primaryColor">
                  <p>第一編集ご提出</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon_blue.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text p-deliver__flow__arrow__text__primaryColor">
                  <p>お戻し</p>
                </div>
              </div>
              <!-- == 第二編集ご提出 == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__primaryColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_edit_logo_02.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__primaryColor">
                  <p>第二編集ご提出</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon_blue.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text p-deliver__flow__arrow__text__primaryColor">
                  <p>お戻し</p>
                </div>
              </div>
              <!-- == ナレーション収録（お立合なし） == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__primaryColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_narration_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__primaryColor">
                  <p>ナレーション収録（お立合なし）</p>
                </div>
              </div>
              <div class="p-deliver__flow__arrow">
                <div class="p-deliver__flow__arrow__img">
                  <img src="assets/images/deliver_arrow_icon_blue.png" alt="">
                </div>
                <div class="p-deliver__flow__arrow__text p-deliver__flow__arrow__text__primaryColor">
                  <p>お戻し</p>
                </div>
              </div>
              <!-- == 最終映像ご納品 == -->
              <div class="p-deliver__flow__item p-deliver__flow__item__primaryColor">
                <div class="p-deliver__flow__item__img">
                  <img src="assets/images/deliver_final_logo.png" alt="">
                </div>
                <div class="p-deliver__flow__item__name p-deliver__flow__item__name__primaryColor">
                  <p>最終映像ご納品</p>
                </div>
              </div>
            </div>
            <div class="p-deliver__flow__schedules">
              <div class="p-deliver__flow__schedule">
                <div class="p-deliver__flow__schedule__heading p-deliver__flow__schedule__heading__column">
                  <div class="p-deliver__flow__schedule__heading__flex">
                    <p>動画尺</p>
                    <span class="p-deliver__flow__schedule__heading__span__primaryColor">短</span>
                  </div>
                  <div class="p-deliver__flow__schedule__heading__flex">
                    <p>撮影手配</p>
                    <span class="p-deliver__flow__schedule__heading__span__primaryColor">少</span>
                  </div>
                </div>
                <div class="p-deliver__flow__schedule__first">
                  <p>１〜２週間程度</p>
                </div>
                <div class="p-deliver__flow__schedule__middle">
                  <p>１週間程度</p>
                </div>
                <div class="p-deliver__flow__schedule__last">
                  <p>１〜２週間程度</p>
                </div>
              </div>
              <div class="p-deliver__flow__schedule">
                <div class="p-deliver__flow__schedule__heading p-deliver__flow__schedule__heading__column">
                  <div class="p-deliver__flow__schedule__heading__flex">
                    <p>動画尺</p>
                    <span class="p-deliver__flow__schedule__heading__span__subColor">長</span><br>
                  </div>
                  <div class="p-deliver__flow__schedule__heading__flex">
                    <p>撮影手配</p>
                    <span class="p-deliver__flow__schedule__heading__span__subColor">多</span>
                  </div>
                </div>
                <div class="p-deliver__flow__schedule__first">
                  <p>2〜3週間程度</p>
                </div>
                <div class="p-deliver__flow__schedule__middle">
                  <p>１〜２週間程度</p>
                </div>
                <div class="p-deliver__flow__schedule__last">
                  <p>2〜3週間程度</p>
                </div>
              </div>
              <div class="p-deliver__flow__schedule__supplyment">
                <p>※動画尺は、<span class="u-color-primary">３分程度までを短め、５分程度以上を長め</span>とします。また、撮影の手配とは、<span class="u-color-primary">ロケ地や出演者、衣装・美術・小道具などの手配</span>を指します。<br>ただし、上記はあくまでも目安で、制作内容や修正量、お戻しの期間によりスケジュールは前後します。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--======== p-cancel ========-->
    <section class="p-cancel">
      <div class="p-cancel__container l-container">
        <div class="p-cancel__block">
          <div class="p-cancel__heading c-heading-box">
            <div class="p-cancel__heading__logo">
              <img src="assets/images/cancel_logo.png" alt="">
            </div>
            <h2 class="c-heading">キャンセル・ポリシー</h2>
          </div>
          <div class="p-cancel__desc">
            <p>お見積もりをご提示し、実施のご決定をいただいて以降に<span class="u-color-primary-2">キャンセルした場合、<br>または２ヶ月を超えて制作が中断した場合に、</span>以下のキャンセル・フィーが発生いたします。</p>
          </div>
          <div class="p-cancel__cards">
            <div class="p-cancel__card__notPhotograph p-cancel__card">
              <div class="p-cancel__card__heading">
                <p><span class="u-color-primary">撮影なし</span>での制作の場合</p>
              </div>
              <div class="p-cancel__card__bodys">
                <div class="p-cancel__card__body">
                  <div class="p-cancel__card__body__text">
                    <p>原稿・構成の提出後</p>
                  </div>
                  <div class="p-cancel__card__body__arrow"></div>
                  <div class="p-cancel__card__body__subText">
                    <p>見積金額の<span>20</span>%</p>
                  </div>
                </div>
                <div class="p-cancel__card__body">
                  <div class="p-cancel__card__body__text">
                    <p>第一次編集の提出後</p>
                  </div>
                  <div class="p-cancel__card__body__arrow"></div>
                  <div class="p-cancel__card__body__subText">
                    <p>見積金額の<span>60</span>%</p>
                  </div>
                </div>
                <div class="p-cancel__card__body">
                  <div class="p-cancel__card__body__text">
                    <p>第二次編集の提出後</p>
                  </div>
                  <div class="p-cancel__card__body__arrow"></div>
                  <div class="p-cancel__card__body__subText">
                    <p>見積金額の<span>80</span>%</p>
                  </div>
                </div>
                <div class="p-cancel__card__body">
                  <div class="p-cancel__card__body__text">
                    <p>ナレーション収録後</p>
                  </div>
                  <div class="p-cancel__card__body__arrow"></div>
                  <div class="p-cancel__card__body__subText">
                    <p>見積金額の<span>100</span>%</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-cancel__card__photograph p-cancel__card">
              <div class="p-cancel__card__heading p-cancel__card__heading__photograph">
                <p><span class="u-color-primary-2">撮影あり</span>での制作の場合</p>
              </div>
              <div class="p-cancel__card__bodys p-cancel__card__bodys__photograph">
                <div class="p-cancel__card__body p-cancel__card__body__photograph">
                  <div class="p-cancel__card__body__text p-cancel__card__body__text__photograph">
                    <p>原稿・構成・撮影プランの提出後</p>
                  </div>
                  <div class="p-cancel__card__body__arrow"></div>
                  <div class="p-cancel__card__body__subText p-cancel__card__body__subText__subColor">
                    <p>見積金額の<span>20</span>%</p>
                  </div>
                </div>
                <div class="p-cancel__card__body p-cancel__card__body__photograph">
                  <div class="p-cancel__card__body__text p-cancel__card__body__text__photograph">
                    <p>撮影直前（〜3日前まで）</p>
                  </div>
                  <div class="p-cancel__card__body__arrow"></div>
                  <div class="p-cancel__card__body__subText p-cancel__card__body__subText__subColor">
                    <p>見積金額の<span>40</span>%</p>
                  </div>
                </div>
                <div class="p-cancel__card__body p-cancel__card__body__photograph">
                  <div class="p-cancel__card__body__text p-cancel__card__body__text__photograph">
                    <p>撮影後</p>
                  </div>
                  <div class="p-cancel__card__body__arrow"></div>
                  <div class="p-cancel__card__body__subText p-cancel__card__body__subText__subColor">
                    <p>見積金額の<span>60</span>%</p>
                  </div>
                </div>
                <div class="p-cancel__card__body p-cancel__card__body__photograph">
                  <div class="p-cancel__card__body__text p-cancel__card__body__text__photograph">
                    <p>第一次編集の提出後</p>
                  </div>
                  <div class="p-cancel__card__body__arrow"></div>
                  <div class="p-cancel__card__body__subText p-cancel__card__body__subText__subColor">
                    <p>見積金額の<span>80</span>%</p>
                  </div>
                </div>
                <div class="p-cancel__card__body p-cancel__card__body__photograph">
                  <div class="p-cancel__card__body__text p-cancel__card__body__text__photograph">
                    <p>ナレーション収録以降</p>
                  </div>
                  <div class="p-cancel__card__body__arrow"></div>
                  <div class="p-cancel__card__body__subText p-cancel__card__body__subText__subColor">
                    <p>見積金額の<span>100</span>%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="p-cancel__supplyment">
            <p>
              ※キャンセル・フィーのご請求後、<span class="u-color-primary">6ヶ月以内に制作が再開</span>した場合、当初の制作内容に大幅な変更がなければ、<br>
              ご請求したフィーの残りのお見積もり金額にて最終納品までの対応いたします。<br>
              ※キャンセル・フィーのご請求後、<span class="u-color-primary">6ヶ月以降の制作の再開</span>は、最終納品にかかるお見積もりを改めてご提示いたします。
            </p>
          </div>
          <div class="p-cancel-payment">
            <div class="p-cancel-payment__heading c-heading-box">
              <div class="p-cancel-payment__heading__logo">
                <img src="assets/images/payment_logo.png" alt="">
              </div>
              <h2 class="c-heading">ご入金について</h2>
            </div>
            <div class="p-cancel-payment__content">
              <div class="p-cancel-payment__content__body__inner">
                <div class="p-cancel-payment__content__body">
                  <div class="p-cancel-payment__content__body__check"></div>
                  <div class="p-cancel-payment__content__body__text">
                    <p><span class="u-color-primary">御請求書発行の翌月末までのご入金</span>をお願いしています。</p>
                  </div>
                </div>
                <div class="p-cancel-payment__content__body">
                  <div class="p-cancel-payment__content__body__check"></div>
                  <div class="p-cancel-payment__content__body__text">
                    <p>ご入金は、<span class="u-color-primary">銀行振込のみ</span>とさせていただきます。</p>
                  </div>
                </div>
                <div class="p-cancel-payment__content__body">
                  <div class="p-cancel-payment__content__body__check"></div>
                  <div class="p-cancel-payment__content__body__text">
                    <p>
                      ご入金の際の<span class="u-color-primary">振込手数料は、貴社のご負担</span>とさせていただきます。<br>
                      <span class="p-cancel-payment__content__body__text__supplyment">※貴社独自の取引規定がある際は、一度ご相談ください。</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--======== p-qa ========-->
    <section id="qa" class="p-qa l-section">
      <div class="p-qa__container l-container">
        <div class="p-qa__block">
          <div class="p-qa__heading c-heading-box">
            <div class="p-qa__heading__logo">
              <img src="assets/images/qa_logo.png" alt="">
            </div>
            <h2 class="c-heading">よくあるご質問</h2>
          </div>
          <div class="p-qa__content">
            <!-- === 納期　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>納期</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>制作日数はどの程度かかりますか。</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>ご制作の内容、ご選択のプランによって変動します。「納品の流れ」をご参照のうえ、制作内容をご相談ください。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>できる限り短期で制作できますか。</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>当社がご提示する納期より大幅な短縮をご希望の場合は、割増料金を加算してお見積もりをご提示いたします。<br>ただし、納期によってはお受けできない場合ごもざいます。</p>
                </div>
              </div>
            </div>
            <!-- === 料金　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>料金</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>見積もり金額からさらに料金を値引きできますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>料金をメニュー化することで低額でのサービスを実現しているため、基本的にお値引きはできません。<br>ただし、以下については割引料金を適用いたします。<br>シリーズ割引：同様企画を同時に２本以上発注した場合、２本目10％OFF、３本目15％OFF、４本目20％OFF、５本目25％OFF</p>
                </div>
              </div>
            </div>
            <!-- === お打ち合わせ　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>お打ち合わせ</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>対面での打ち合わせは可能ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>料実施ご決定までは、メールやオンライン・ミーティングでのやりとりとさせていただいております。<br>実施ご決定後も基本的には同様ですが、東京近郊の場合は、ご訪問も可能なケースがございますのでご相談ください。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>オンライン・ミーティングなしで、電話やメールのみでやりとりすることも可能ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>制作内容がシンプルな場合や、同様案件で複数回ご発注いただいている際には、オンライン・ミーティングなしでも可能です。</p>
                </div>
              </div>
            </div>
            <!-- === 原稿・構成制作　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>原稿・構成制作</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>動画のナレーション原稿や映像構成の制作は、どのような仕様になりますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>ナレーション原稿は、Microsoft Word での文字のみの制作になります。（Power Pointも可）<br>映像構成資料は、Power PointにA4縦で写真画像やイラストを配置して制作いたします。（Wordも可）<br>お客様ご提供のwordまたはPower Point資料に追記することも可能です。料金は、オプション料金表をご参照ください。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>ナレーションやテロップの外国語への翻訳は可能ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>協力会社を通じて手配します。料金は、別途お見積もりとなります。（対応できない言語もあります）</p>
                </div>
              </div>
            </div>
            <!-- === ナレーション収録　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>ナレーション収録</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span> ナレーション収録後に原稿修正が発生し、再収録が必要になった際は、追加料金は発生しますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>再収録は、1回までは無料で修正に対応いたします。2回目以降の修正収録は、別途お見積もりとなります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>収録音声の品質に問題はないですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>収録は各ナレーターの宅録環境にて行っていますが、Web動画やWeb広告などの視聴には問題のない品質を確保しています。<br>TVCMやTV番組でご使用の際は、放送基準へのデータ調整が必要になります。料金は、別途お見積もりとなります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>立ち合いのもと、スタジオでの収録をお願いできますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>都内近郊であれば、ナレーターを派遣の上、スタジオで収録することも可能です。料金は、オプション料金表をご参照ください。<br>また、当社にてスタジオを手配することも可能です。料金は、別途お見積もりとなります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>外国語ナレーターは手配できますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>協力会社を通じて手配します。また、都内近郊であれば、ナレーターを派遣の上、スタジオで収録することも可能です。<br>料金は、別途お見積もりとなります。ただし、外国語ナレーターの場合、基本、音声の買取はできません。</p>
                </div>
              </div>
            </div>
            <!-- === 映像編集　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>映像編集</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>映像編集の修正で追加料金は発生しますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>５回を修正の目処とさせていただき、以降は修正内容によって、別途お見積もりをさせていただきます。<br>５回以内であっても、映像構成全体に関わる修正が発生した際には、別途お見積もりをさせていただくことがあります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>画像や映像の色変更（カラーコレクト／グレーディング）はお願いできますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>画像、映像どちらも、微調整の範囲の色調整であれば料金内で対応します。ただし、大幅な変更、細部の広範囲な調整になると、オプション料金「カラーグレーディング」の適用となり、動画尺１分につき50,000円（税別）となります。スタジオでの立ち会い編集の場合は、別途、お見積もりとなります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>編集スタジオでの客先立ち会い編集は可能ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>都内近郊であれば可能です。ただし、オプション料金となり、スタジオ代やエディター代など、別途、お見積もりとなります。</p>
                </div>
              </div>
            </div>
            <!-- === 撮影　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>撮影</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>撮影は、どのような体制で実施しますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>商品のマニュアル説明など、一定程度の映像品質があれば問題ない場合は、業務用カメラ１台でプロのカメラマンが対応するPlan Fをお勧めします。音声の収録が必要なインタビュー撮影やイベント・講演などの撮影の場合は、業務用カメラ２台でプロのカメラマンが対応するPlan Gをお勧めします。撮影には、基本的な照明機材も含まれていますが、追加で小道具や美術、その他機材などが必要な際は、別途お見積もりとなります。また、映像クオリティや体制の強化をお求めの際は、Plan Hのカスタマイズ制作となります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>８Kでの撮影は可能ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>可能です。ただし、撮影はPlan Hのカスタマイズ制作が適用され、別途お見積もりとなります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>GoProやドローンなどによる撮影は可能ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>撮影条件により対応可能です。撮影前にお申し付けください。撮影機材を指定する場合は、Plan Hのカスタマイズ制作が適用され、別途、お見積もりとなります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>スマートフォンカメラによる撮影は可能ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>スマートフォンカメラによる撮影には対応していません。ただし、条件によっては可能の場合もありますので、一度ご相談ください。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>自社や関連の施設などに訪問の上、撮影することは可能ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>スケジュールを調整した上で、対応いたします。撮影内容によっては、ロケハンが必要な場合もあります。出張撮影にあたっては、別途、移動に関わる交通費や各種雑費が必要となります。撮影日数が２日以上、または、宿泊が必要となる遠方での撮影の場合、Plan H のカスタマイズ制作の適用され、別途お見積もりとなります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>役者や著名人・タレントを手配しての撮影は可能ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>キャスティング会社を通じて手配します。また、オーディションによる選出も対応します。<br>キャスティング費、出演費、契約費用、オーディション費は、別途、お見積もりとなります。</p>
                </div>
              </div>
            </div>
            <!-- === 納品　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>納品</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>動画の納品仕様を教えてください。</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>データ形式はmovまたはmp4、サイズはフルHD（1920 x 1080px）またはHD（1080 x 720px）を基本としてご納品します。<br>wmvなど他の形式、4KやSDなど他のサイズをご希望の際は事前にお申し付けください。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>納品動画の容量はどのくらいになりますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>動画尺にもより大きく変動しますが、movでフルHD （1920 x 1080px）の場合、１動画あたり数百メガから数ギガ、<br>mp4の場合、１動画あたり数メガから数百メガが目安となります。画質を落とすことでファイル容量を小さくすることも可能です。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>制作動画の提出、納品方法を教えてください。</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>オンライン・ストレージのURL送付によるご納品が基本となります。容量が大きい場合は、USBメモリやSSDなどの外部記録メディアを郵送にてご送付することもあります。（メディア購入の費用が別途必要です）<br>ご指定の送付方式等がある場合は、事前にお申し付けください。</p>
                </div>
              </div>
            </div>
            <!-- === 映像の権利・契約　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>映像の権利・契約</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>制作した動画、撮影した映像の使用期限や著作権はどうなりますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>当社で制作した画像や映像、当社が手配したナレーションなど、制作した動画に関わる素材は、基本、期限や媒体の制限なしでご使用いただけます。著作権についても貴社に譲渡いたします。ただし、第三者サービスが提供する、ロイヤリティ・フリーの画像、動画、BGM等は、期限や媒体の制限なくご使用いただけるものを選定しますが、著作権は、第三者サービスの規定に基づきます。<br>また、撮影にあたって、出演者を起用する際は、使用に条件が発生する場合がございます。その他、Plan F カスタマイズ制作において使用条件や著作権について条件が発生する場合は、都度、ご相談いたします。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>動画に関する著作権譲渡の契約は締結できますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>契約書雛形を貴社にてご提供いただき、合意が成立した際に締結いたします。ただし、ロイヤリティ・フリーの画像、動画、BGMなど、第三者サービスが提供する素材については、第三者サービスの規定に基づきます。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>守秘義務契約は締結できますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>契約書雛形を貴社にてご提供いただき、合意が成立した際に締結いたします。</p>
                </div>
              </div>
            </div>
            <!-- === リサイズ、画角変更　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>リサイズ、画角変更</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>フルHD（1920 x 1080px）とHD（1280 x 720px）など複数の解像度での制作が必要な際、追加料金は必要ですか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>同画角での解像度違いの納品は、無料で対応します。４K以上の解像度で納品が必要な際は、事前にお申し付けください。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span> 16:9の横長で制作した映像を、スマホ用に縦長、または正方形にすることはできますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>１点につき、10,000円（税別）で対応します。横型の映像をそのまま縦長にする場合、上下の余白を入れて縦長にします。<br>余白にはテキストや画像を入れることも可能です。また、映像に影響のない程度に左右を切り取って（トリミング）し、正方形などにするリサイズも可能です。</p>
                </div>
              </div>
            </div>
            <!-- === 納品後の改訂　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>納品後の改訂</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>制作後に、改訂が必要になった場合も対応できますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>改訂内容を伺い、お見積もりいたします。 ただし、映像素材の保管は、ご納品から２年までとなります。<br>それ以降は、編集素材を破棄している場合がございますのでご了承ください。</p>
                </div>
              </div>
            </div>
            <!-- === グラフィック、LP制作　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>グラフィック、LP制作</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>YouTube用のサムネイル画像は制作できますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>サイズに関わらず、１点につき3,000円になります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>動画の素材を活かしたチラシを同時に制作できますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>対応可能です。オプション料金で、A4カラー片面50,000円（両面100,000円／A4・4P200,000円）になります。</p>
                </div>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>動画の素材を格納するLPも制作できますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>サイト・デザイン、コーディングともに対応可能です。別途、お見積もりとなります。</p>
                </div>
              </div>
            </div>
            <!-- === キャンセル・フィー　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>キャンセル・フィー</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>途中キャンセルの場合は、キャンセル・フィーは発生しますか？</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>お見積もりをご提示し、実施のご決定をいただいて以降にキャンセルした場合、または２ヶ月を超えて制作が中断した場合に、キャンセル・フィーが発生いたします。詳しくは、キャンセル・ポリシーをご覧ください。</p>
                </div>
              </div>
            </div>
            <!-- === ご請求・お支払い　=== -->
            <div class="p-qa__content__list">
              <div class="p-qa__content__list__heading">
                <h3>ご請求・お支払い</h3>
              </div>
              <div class="p-qa__content__list__item">
                <summary class="p-qa__content__list__question">
                  <p><span>Q</span>支払い方法、支払いサイトを教えてください。</p>
                  <div class="p-qa__content__list__icon"></div>
                </summary>
                <div class="p-qa__content__list__answer">
                  <p><span>A</span>お支払いは銀行振込のみとなっています。振込手数料は、貴社のご負担でお願いしています。また、お支払いのサイトは、納品月の末締め、翌月末までの入金をお願いしています。 貴社の取引規定等がございましたら、一度ご相談ください。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--======== p-staff ========-->
    <section id="staff" class="p-staff l-section">
      <div class="p-staff__container l-container">
        <div class="p-staff__block">
          <div class="p-staff__heading c-heading-box">
            <div class="p-staff__heading__logo">
              <img src="assets/images/staff_logo.png" alt="">
            </div>
            <h2 class="c-heading">スタッフのご紹介</h2>
          </div>
          <div class="p-staff__profile__president">
            <div class="p-staff__profile__president__img p-staff__profile__president__img__yuki">
              <img src="assets/images/staff_yuki_icon.png" alt="Yuki">
            </div>
            <div class="p-staff__profile__president__body">
              <h3>GRAVIES 代表／クリエイティブ・ディレクター 結城 悠</h3>
              <p>
                広告代理店の CD として数多くの TVCM や Web 動画などを手掛け、独立・起業以降も、
                様々な動画制作に携わる機会をいただきました。そうしたなか、企業のご担当者様が
                気軽に、でも安心して任せられる動画サービスを開発できないかと考え、これまでの
                制作ノウハウやスタッフのネットワークを結集して実現したのが、この Smoovie です。
                ぜひ一度ご利用いただき、お客様の販促や PR のお力に立てますと幸いです。
              </p>
            </div>
          </div>
          <div class="p-staff__profile__members">
            <div class="p-staff__profile__member">
              <div class="p-staff__profile__member__img p-staff__profile__member__img__hisaki">
                <img src="assets/images/staff_hisaki_icon.png" alt="Hisaki">
              </div>
              <div class="p-staff__profile__member__body">
                <h3>ムービーエディター／デザイナー</h3>
                <p>初期メンバーとして<br>動画とグラフィックの二刀流で活躍。<br>育休から 25 年春に復帰</p>
              </div>
            </div>
            <div class="p-staff__profile__member">
              <div class="p-staff__profile__member__img p-staff__profile__member__img__mossy">
                <img src="assets/images/staff_mossy_icon.png" alt="Mossy">
              </div>
              <div class="p-staff__profile__member__body">
                <h3>デザイナー／ムービーエディター</h3>
                <p>Smoovie のサイトも手がけたデザイナー。<br>デザイン・ディレクションに加え、<br>ムービーエディットも担当。</p>
              </div>
            </div>
            <div class="p-staff__profile__member">
              <div class="p-staff__profile__member__img p-staff__profile__member__img__funa">
                <img src="assets/images/staff_funa_icon.png" alt="Fuuna">
              </div>
              <div class="p-staff__profile__member__body">
                <h3>ムービーエディター／デザイナー</h3>
                <p>デザイナーとして入社するも<br>動画制作のセンスを発揮し、デザインの<br>できるムービーエディターに。</p>
              </div>
            </div>
            <div class="p-staff__profile__member">
              <div class="p-staff__profile__member__img p-staff__profile__member__img__task">
                <img src="assets/images/staff_task_icon.png" alt="Task">
              </div>
              <div class="p-staff__profile__member__body">
                <h3>ムービーエディター／カメラマン</h3>
                <p>動画撮影も担当する若手クリエイター。<br>映像ディレクターへの道を<br>着々と歩んでいる。</p>
              </div>
            </div>
            <div class="p-staff__profile__member">
              <div class="p-staff__profile__member__img p-staff__profile__member__img__machiko">
                <img src="assets/images/staff_machiko_icon.png" alt="Machiko">
              </div>
              <div class="p-staff__profile__member__body">
                <h3>ムービーエディター</h3>
                <p>看護師を続けるなか、一念発起して<br>ムービーエディターへと<br>転身した異色のクリエイター。</p>
              </div>
            </div>
            <div class="p-staff__profile__member">
              <div class="p-staff__profile__member__img p-staff__profile__member__img__narumi">
                <img src="assets/images/staff_narumi_icon.png" alt="narumi">
              </div>
              <div class="p-staff__profile__member__body">
                <h3>デザイナー</h3>
                <p>美大卒のグラフィックデザイナー。<br>動画制作では、Mossy とともに<br>デザインを担当。</p>
              </div>
            </div>
            <div class="p-staff__profile__member">
              <div class="p-staff__profile__member__img p-staff__profile__member__img__yukiya">
                <img src="assets/images/staff_yukiya_icon.png" alt="Yukiya">
              </div>
              <div class="p-staff__profile__member__body">
                <h3>映像ディレクター／ムービーエディター</h3>
                <p>20 年以上の業界歴を持つ<br>ベテラン・ディレクター<br>テクニカル・アドバイザーとして提携。</p>
              </div>
            </div>
            <div class="p-staff__profile__member">
              <div class="p-staff__profile__member__img p-staff__profile__member__img__tommyK">
                <img src="assets/images/staff_tommyK_icon.png" alt="tommy K">
              </div>
              <div class="p-staff__profile__member__body">
                <h3>アートディレクター／デザイナー</h3>
                <p>ベテランアートディレクター。<br>動画とグラフィック同時制作や<br>大型案件で活躍（日本人です）。</p>
              </div>
            </div>
            <div class="p-staff__profile__member">
              <div class="p-staff__profile__member__img p-staff__profile__member__img__monin">
                <img src="assets/images/staff_monin_icon.png" alt="Monin">
              </div>
              <div class="p-staff__profile__member__body">
                <h3>修行僧</h3>
                <p>Smoovie の立ち上げに携わる名付け親。<br>実家のお寺を継ぐため名誉社員として退社し、<br>現在、福井県のお寺で修行中。</p>
              </div>
            </div>
          </div>
          <div class="p-staff__desc">
            <p>その他、必要に応じてさまざまな外部スタッフとの協業のもと取り組んでいきます。</p>
          </div>
        </div>
      </div>
    </section>
    <!--======== p-contact ========-->
    <section id="contact" cla id="top"ss="p-contact l-section">
      <div class="p-contact__container l-container">
        <div class="p-contact__block">
          <div class="p-contact__heading c-heading-box">
            <div class="p-contact__heading__logo">
              <img src="assets/images/contact_logo.png" alt="">
            </div>
            <h2 class="c-heading">ご相談・お見積もりフォーム</h2>
          </div>
          <div class="p-contact__btns">
            <div class="p-contact__btn active" data-target="#contact-form">
              <p>とりあえず問合せや<br>相談をしたいお客さま</p>
            </div>
            <div class="p-contact__btn" data-target="#estimate-form">
              <p>お見積もりをご希望の<br>お客さま</p>
            </div>
          </div>
          <div class="p-contact__forms">
            <!-- === とりあえず問合せや相談をしたいお客さま === -->
            <form action="" method="post" id="contact-form" class="p-contact__form p-contact__consult__form open">
              <div class="p-contact__form__inner">
                <div class="p-contact__form__box">
                  <!-- = お名前 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>お名前</label>
                    </div>
                    <div class="p-contact__form__item__input">
                      <input type="text" name="name">
                    </div>
                  </div>
                  <!-- = 読み方 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>読み方</label>
                    </div>
                    <div class="p-contact__form__item__input">
                      <input type="text" name="furigana">
                    </div>
                  </div>
                  <!-- = 会社名 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>会社名</label>
                    </div>
                    <div class="p-contact__form__item__input">
                      <input type="text" name="company">
                    </div>
                  </div>
                  <!-- = 業種 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>業種</label>
                    </div>
                    <div class="p-contact__form__item__input">
                      <input type="text" name="company">
                    </div>
                  </div>
                  <!-- = ご連絡先電話番号 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>ご連絡先<br>電話番号</label>
                    </div>
                    <div class="p-contact__form__item__input p-contact__form__item__input__phoneNumber">
                      <input type="text" name="phoneNumber">
                    </div>
                  </div>
                  <!-- = Emailアドレス = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>E-mail<br>アドレス</label>
                    </div>
                    <div class="p-contact__form__item__input p-contact__form__item__input__email">
                      <input type="text" name="phoneNumber">
                    </div>
                  </div>
                </div>
                <!-- = ご質問・ご相談の内容（自由回答） = -->
                <div class="p-contact__form__item p-contact__form__item__textarea">
                  <div class="p-contact__form__item__label p-contact__form__item__label__textarea">
                    <label>ご質問・ご相談の内容（自由回答）</label>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__input__textarea">
                    <textarea name="body"></textarea>
                  </div>
                </div>
                <div class="p-contact__form__text">
                  <p>オンライン・ミーティングでの事前ご相談を希望されますか。</p>
                </div>
                <div class="p-contact__form__item p-contact__form__item__radios">
                  <div class="p-contact__form__item__radio">
                    <input type="radio" name="meeting-hope">
                    <span>希望する</span>
                  </div>
                  <div class="p-contact__form__item__radio">
                    <input type="radio" name="meeting-hope">
                    <span>希望しない</span>
                  </div>
                </div>
                <div class="p-contact__form__arrow"></div>
                <div class="p-contact__form__text p-contact__form__text__schedule">
                  <p>オンライン・ミーティング希望日時（第三希望まで御入力ください）</p>
                </div>
                <div class="p-contact__form__item p-contact__form__item__schedules">
                  <div class="p-contact__form__item__label">
                    <label>第一希望</label>
                  </div>
                  <div class="p-contact__form__item__arrow"></div>
                  <div class="p-contact__form__item__input p-contact__form__item__select">
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-month-1">
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>月</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-date-1">
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>日</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-1">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-1">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__wave">〜</div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-last-1">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-last-1">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="p-contact__form__item p-contact__form__item__schedules">
                  <div class="p-contact__form__item__label">
                    <label>第二希望</label>
                  </div>
                  <div class="p-contact__form__item__arrow"></div>
                  <div class="p-contact__form__item__input p-contact__form__item__select">
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-month-2">
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>月</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-date-2">
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>日</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-2">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-2">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__wave">〜</div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-last-2">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-last-2">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="p-contact__form__item p-contact__form__item__schedules">
                  <div class="p-contact__form__item__label">
                    <label>第三希望</label>
                  </div>
                  <div class="p-contact__form__item__arrow"></div>
                  <div class="p-contact__form__item__input p-contact__form__item__select">
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-month-3">
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>月</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-date-3">
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>日</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-3">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-3">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__wave">〜</div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-last-3">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-last-3">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="p-contact__form__item__supplyment">
                  <p>※ミーティングは、30分から1時間程度のお時間をいただきます。<br>※上記ご希望で日程調整ができない場合は、改めてメールにてご連絡させていただきます。</p>
                </div>
              </div>
              <button type="submit" class="p-contact__form__submit">返信内容の確定</button>
            </form>
            <!-- === お見積もりをご希望のお客さま === -->
            <form action="" method="post" id="estimate-form" class="p-contact__form p-contact__estimate__form">
              <div class="p-contact__form__inner p-contact__form__inner__subColor">
                <div class="p-contact__form__box">
                  <!-- = お名前 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>お名前</label>
                    </div>
                    <div class="p-contact__form__item__input">
                      <input type="text" name="name">
                    </div>
                  </div>
                  <!-- = 読み方 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>読み方</label>
                    </div>
                    <div class="p-contact__form__item__input">
                      <input type="text" name="furigana">
                    </div>
                  </div>
                  <!-- = 会社名 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>会社名</label>
                    </div>
                    <div class="p-contact__form__item__input">
                      <input type="text" name="company">
                    </div>
                  </div>
                  <!-- = 業種 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>業種</label>
                    </div>
                    <div class="p-contact__form__item__input">
                      <input type="text" name="company">
                    </div>
                  </div>
                  <!-- = ご連絡先電話番号 = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>ご連絡先<br>電話番号</label>
                    </div>
                    <div class="p-contact__form__item__input p-contact__form__item__input__phoneNumber">
                      <input type="text" name="phoneNumber">
                    </div>
                  </div>
                  <!-- = Emailアドレス = -->
                  <div class="p-contact__form__item">
                    <div class="p-contact__form__item__label">
                      <label>E-mail<br>アドレス</label>
                    </div>
                    <div class="p-contact__form__item__input p-contact__form__item__input__email">
                      <input type="text" name="phoneNumber">
                    </div>
                  </div>
                </div>
                <div class="p-contact__form__text p-contact__form__text__production">
                  <p>※お見積もりにあたって以下ご記入ください。（ご発注を確定するものではございません）</p>
                </div>
                <!-- = 制作内容 = -->
                <div class="p-contact__form__item p-contact__form__item__production">
                  <div class="p-contact__form__item__label p-contact__form__item__label__production">
                    <label>制作内容</label>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__input__production">
                    <div class="p-contact__form__item__estimate__select p-contact__form__item__estimate__select__prodContent">
                      <select name="production-content">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- = 制作対象 = -->
                <div class="p-contact__form__item p-contact__form__item__production">
                  <div class="p-contact__form__item__label p-contact__form__item__label__production">
                    <label>制作対象</label>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__input__production">
                    <div class="p-contact__form__item__estimate__select p-contact__form__item__estimate__select__prodTarget">
                      <select name="production-target">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- = 制作の本数 = -->
                <div class="p-contact__form__item p-contact__form__item__production">
                  <div class="p-contact__form__item__label p-contact__form__item__label__production">
                    <label>制作の本数</label>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__input__production">
                    <div class="p-contact__form__item__estimate__select p-contact__form__item__estimate__select__prodNumber">
                      <select name="production-number">
                        <option value="">本</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- = 制作の画角 = -->
                <div class="p-contact__form__item p-contact__form__item__production">
                  <div class="p-contact__form__item__label p-contact__form__item__label__production">
                    <label>制作の画角</label>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__input__production">
                    <div class="p-contact__form__item__estimate__select p-contact__form__item__estimate__select__prodAngle">
                      <select name="production-angle">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- = 動画尺 = -->
                <div class="p-contact__form__item p-contact__form__item__production p-contact__form__item__production__prodLength">
                  <div class="p-contact__form__item__label p-contact__form__item__label__production">
                    <label>動画尺</label>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__input__production">
                    <div class="p-contact__form__item__estimate__select p-contact__form__item__estimate__select__prodLength">
                      <select name="production-length-minutes">
                        <option value="" selected>分</option>
                        <?php for ($i = 1; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                      <select name="production-length-seconds">
                        <option value="" selected>秒</option>
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>秒</option>
                        <?php endfor; ?>
                      </select>
                      <div class="p-contact__form__item__estimate__select__supplyment">※複数制作の場合、最も長い尺で記入ください。</div>
                    </div>
                  </div>
                </div>
                <!-- = 制作予算 = -->
                <div class="p-contact__form__item p-contact__form__item__production">
                  <div class="p-contact__form__item__label p-contact__form__item__label__production">
                    <label>制作予算</label>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__input__production">
                    <div class="p-contact__form__item__estimate__select p-contact__form__item__estimate__select__prodBudget">
                      <select name="production-budget-min">
                      <option value="" selected>円</option>
                        <?php for ($i = 1; $i <= 100; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>円</option>
                        <?php endfor; ?>
                      </select>
                      <div class="p-contact__form__item__select__wave">〜</div>
                      <select name="production-budget-max">
                        <option value="" selected>円</option>
                        <?php for ($i = 1; $i <= 100; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>円</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- = 納品希望時期 = -->
                <div class="p-contact__form__item p-contact__form__item__production">
                  <div class="p-contact__form__item__label p-contact__form__item__label__production">
                    <label>納品希望時期</label>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__input__production">
                    <input type="text" name="production-deliver">
                  </div>
                </div>
                <div class="p-contact__form__text">
                  <p>画像・映像素材の手配（複数選択可）</p>
                </div>
                <!-- = 画像・映像素材の手配（複数選択可）= -->
                <div class="p-contact__form__item p-contact__form__item__arrangement">
                  <div class="p-contact__form__item__input p-contact__form__item__input__material">
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="material">
                      <span>貴社にて素材を手配</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="material">
                      <span>レンタルの素材を当社が手配</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="material">
                      <span>イラストやアニメ、CGを当社が制作</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="material">
                      <span>当社が素材を撮影</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="radio" name="material">
                      <span>まだ未定</span>
                    </div>
                  </div>
                </div>
                <div class="p-contact__form__text">
                  <p>ご希望のプラン（複数選択可）  ※「サンプルと料金目安」をご参照の上、チェックを入れてください。</p>
                </div>
                <!-- = ご希望のプラン（複数選択可）= -->
                <div class="p-contact__form__item p-contact__form__item__plan">
                  <div class="p-contact__form__item__input p-contact__form__item__input__plan">
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="plan">
                      <span>A：ご提供のテキスト・画像のスライド・ショー編集</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="plan">
                      <span>B：ご提供の画像・動画に演出を加えて編集</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="plan">
                      <span>C：ロイヤリティ・フリーの画像・動画をベースに編集</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="plan">
                      <span>D：文字や図、イラストのアニメーションで制作</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="plan">
                      <span>E：シンプルな3DCGをベースに制作</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="plan">
                      <span>F：商品などの簡易撮影による制作</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="plan">
                      <span>G：インタビューやイベントの撮影による制作</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="plan">
                      <span>H：企画から制作までフル・カスタマイズ</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="radio" name="plan">
                      <span>まだ未定／このなかにはない</span>
                    </div>
                  </div>
                </div>
                <div class="p-contact__form__text">
                  <p>サンプル動画のなかで、お客さまの制作イメージに近いものがあれば選択ください。</p>
                </div>
                <!-- = サンプル動画のなかで、お客さまの制作イメージに近いもの = -->
                <div class="p-contact__form__item p-contact__form__item__sampleImage">
                  <div class="p-contact__form__item__input p-contact__form__item__input__sampleImage">
                    <div class="p-contact__form__item__input__sampleImage__inner">
                      <span>Plan</span>
                      <input type="text" name="sample-image">
                    </div>
                    <div class="p-contact__form__item__input__sampleImage__border">ー</div>
                    <div class="p-contact__form__item__input__sampleImage__inner">
                      <span>番号</span>
                      <input type="text" name="sample-image">
                    </div>
                    <div class="p-contact__form__item__input__sampleImage__inner">
                      <span>Plan</span>
                      <input type="text" name="sample-image">
                    </div>
                    <div class="p-contact__form__item__input__sampleImage__border">ー</div>
                    <div class="p-contact__form__item__input__sampleImage__inner">
                      <span>番号</span>
                      <input type="text" name="sample-image">
                    </div>
                    <div class="p-contact__form__item__input__sampleImage__inner">
                      <span>Plan</span>
                      <input type="text" name="sample-image">
                    </div>
                    <div class="p-contact__form__item__input__sampleImage__border">ー</div>
                    <div class="p-contact__form__item__input__sampleImage__inner">
                      <span>番号</span>
                      <input type="text" name="sample-image">
                    </div>
                  </div>
                  <div class="p-contact__form__item__supplyment p-contact__form__item__supplyment__sampleImage">
                    <p>※イメージのものが見つからない、または、まだご覧になっていない場合は、空欄のままでかまいません。</p>
                  </div>
                </div>
                <div class="p-contact__form__text">
                  <p>オプション・メニューのうち、ご利用したいものがあればご回答ください。</p>
                </div>
                <div class="p-contact__form__item p-contact__form__item__optionMenu">
                  <div class="p-contact__form__item__input p-contact__form__item__select p-contact__form__item__select__optionMenu">
                    <select name="option-menu">
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__select p-contact__form__item__select__optionMenu">
                    <select name="option-menu">
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="p-contact__form__item__input p-contact__form__item__select p-contact__form__item__select__optionMenu">
                    <select name="option-menu">
                      <option value=""></option>
                    </select>
                  </div>
                </div>
                <div class="p-contact__form__text">
                  <p>ご検討の動画制作において優先して重視したいものを２つまでお選びください。</p>
                </div>
                <!-- = ご検討の動画制作において優先して重視したいものを２つまでお選びください。= -->
                <div class="p-contact__form__item p-contact__form__item__priority">
                  <div class="p-contact__form__item__input p-contact__form__item__input__priority">
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority">
                      <span>料金の安さ</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>制作のクオリティ</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>撮影での対応力</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>企画・原稿のサポート、提案力</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>納期の早さ</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>対応の早さ・ていねいさ</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>修正対応の回数</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>制作動画の効果</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>リサイズの数</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>SNSでの運用</span>
                    </div>
                    <div class="p-contact__form__item__input__checkbox">
                      <input type="checkbox" name="priority" class="priority-checkbox">
                      <span>その他</span>
                    </div>
                  </div>
                </div>
                <!-- = その他、ご相談やご質問事項があればご記入ください（自由回答）= -->
                <div class="p-contact__form__item p-contact__form__item__textarea">
                  <div class="p-contact__form__item__label p-contact__form__item__label__textarea">
                    <label>その他、ご相談やご質問事項があればご記入ください（自由回答）</label>
                  </div>
                  <div class="p-contact__form__item__input">
                    <textarea name="body"></textarea>
                  </div>
                </div>
                <div class="p-contact__form__text">
                  <p>オンライン・ミーティングでの事前ご相談を希望されますか。</p>
                </div>
                <div class="p-contact__form__item p-contact__form__item__radios">
                  <div class="p-contact__form__item__radio">
                    <input type="radio" name="meeting-hope">
                    <span>希望する</span>
                  </div>
                  <div class="p-contact__form__item__radio">
                    <input type="radio" name="meeting-hope">
                    <span>希望しない</span>
                  </div>
                </div>
                <div class="p-contact__form__arrow"></div>
                <div class="p-contact__form__text p-contact__form__text__schedule">
                  <p>オンライン・ミーティング希望日時（第三希望まで御入力ください）</p>
                </div>
                <div class="p-contact__form__item p-contact__form__item__schedules">
                  <div class="p-contact__form__item__label">
                    <label>第一希望</label>
                  </div>
                  <div class="p-contact__form__item__arrow"></div>
                  <div class="p-contact__form__item__input p-contact__form__item__select">
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-month-1">
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>月</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-date-1">
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>日</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-1">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-1">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__wave">〜</div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-last-1">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-last-1">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="p-contact__form__item p-contact__form__item__schedules">
                  <div class="p-contact__form__item__label">
                    <label>第二希望</label>
                  </div>
                  <div class="p-contact__form__item__arrow"></div>
                  <div class="p-contact__form__item__input p-contact__form__item__select">
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-month-2">
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>月</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-date-2">
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>日</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-2">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-2">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__wave">〜</div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-last-2">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-last-2">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="p-contact__form__item p-contact__form__item__schedules">
                  <div class="p-contact__form__item__label">
                    <label>第三希望</label>
                  </div>
                  <div class="p-contact__form__item__arrow"></div>
                  <div class="p-contact__form__item__input p-contact__form__item__select">
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-month-3">
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>月</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-date-3">
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>日</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-3">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-3">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__wave">〜</div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-hour-last-3">
                        <?php for ($i = 8; $i <= 20; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>時</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="p-contact__form__item__select__inner">
                      <select name="schedule-minutes-last-3">
                        <?php for ($i = 00; $i <= 59; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?>分</option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="p-contact__form__item__supplyment">
                  <p>※ミーティングは、30分から1時間程度のお時間をいただきます。<br>※上記ご希望で日程調整ができない場合は、改めてメールにてご連絡させていただきます。</p>
                </div>
              </div>
              <button type="submit" class="p-contact__form__submit p-contact__form__submit__subColor">内容の確定</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--======== l-footer ========-->
    <footer class="l-footer">
      <div class="l-footer__container">
        <div class="l-footer__call">
          <div class="l-footer__call__text">
            <p>お急ぎの場合は</p>
          </div>
          <div class="l-footer__call__icon">
            <img src="assets/images/contact_call_icon.png" alt="">
          </div>
          <a href="tel:03-6427-1096" class="l-footer__call__body">
            <div class="l-footer__call__body__number">
              <p>03-6427-1096</p>
            </div>
            <div class="l-footer__call__body__text">
              <span>10:00-18:00 (土日祝日を除く)</span>
            </div>
          </a>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>