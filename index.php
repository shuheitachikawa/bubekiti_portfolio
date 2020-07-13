  <?php get_header(); ?>

  
  <section class="top-view">
    <h1><p class="top-view__title">Bubekiti<span class="top-view__title--kana">[ぶべきち]</span></p><p class="top-view__sub-title">Web creating</p></h1>
    <svg class="top-view__svg"><path id="wave"></svg>
    <div class="top-view__btn">Welcome</div>
  </section>
  

  <div class="scroll-area">

    <section class="service">
      <div class="service__container container">
        <h2 class="service__title title">SERVICE<span class="service__title--ja ja-title">サービス内容</span></h2>
        <h3 class="service__maintxt">
          ご覧頂きありがとうございます。<br>
          フリーランスで、Web制作を行っております。<br>
          企業・個人様向けWebサイトの制作/改修を承ります。<br>
          プロジェクトのお手伝いも承ります。
        </h3>
        <div class="service__items">
          <!-- ここからサービスアイテム -->
          <div class="service__item">
            <div class="service__circle"></div>
            <h3 class="service__name">HTML/CSSコーディング</h3>
            <i class="service__icon fas fa-code fa-3x"></i>
            <p class="service__detail">
              お客様のWebサイトデザインを忠実に再現するコーディングを行います。
              <br>
              SEOを踏まえた正しい文法でコーディングします。
            </p>
          </div>

          <div class="service__item">
            <div class="service__circle"></div>
            <h3 class="service__name">WordPressサイト構築</h3>
            <i class="service__icon fab fa-wordpress-simple fa-4x"></i>
            <p class="service__detail">
              更新が必要なサイト(コーポレートサイト、ニュースやブログを含むサイト)はWordPressを提案いたします。<br>
              ・　既存サイトのWordPress化<br>
              ・　既存WordPressサイトの改修<br>
              ・　デザインデータに沿ったサイト構築<br>
              それぞれ対応いたします。<br>
              SNS, YouTube連携もお任せください。
            </p>
          </div>

          <div class="service__item">
            <div class="service__circle"></div>
            <h3 class="service__name">Shopifyサイト構築</h3>
            <i class="service__icon fab fa-shopify fa-4x"></i>
            <p class="service__detail">
              こちらは準備中です。
            </p>
          </div>


          <!-- ここまでサービスアイテム -->
        </div>
        <p class="service__note">
          お客様の収益貢献・スピード対応を徹底いたしますが、<br>
          個人運営のため対応が難しい業務もございますので、
          <br>
          お気軽にご相談いただければと思います。
        </p>
      </div>
    </section>

    <section class="about">
      <div class= "about__container container">
        <h2 class="about__title title">ABOUT<span class="about__title--ja ja-title">自己紹介・経歴
        </span></h2>
        <div class="about__intro">
          <table class="about__table">
            <tr>
              <td width="20%" class="about__table-item">事業主</th>
              <td width="80%" class="about__tabel-value">立川 修平</th>
            </tr>
            <tr>
              <td class="about__table-item">事業内容</th>
              <td>Webサイト制作/改修/コーディング</th>
            </tr>
            <tr>
              <td class="about__table-item">活動拠点</th>
              <td>東京・神奈川</th>
            </tr>
            <tr>
              <td class="about__table-item">保有スキル</td></th>
              <td class="about__skills">コーディング : HTML/CSS/Sass/JavaScript<br>
                  サイト構築 : WordPress<br>
                  デザインツール : XD/Photoshop(デザインデータからの書き出し)</th>
              からの書き出し)</th>
            </tr>
            <tr>
              <td class="about__table-item">SNS/ブログ</td></th>
              <td class="about__skills">
                <a href="" class="about__sns fab fa-twitter "></a>
                <span>/</span>
                <a href="" class="about__blog fas fa-pen-alt "></a>
              </tr>
          </table>
        </div>
        <div class="about__history history">
          <div class="history__item">
            <p class="history__year">2014年</p>
            <p class="history__detail">
              東京理科大学大学院を卒業し<br>
              化学系メーカーに就職<br>研究開発職に従事
            </p>
          </div>
          <div class="history__item">
            <p class="history__year">2014〜2019年</p>
            <p class="history__detail">
              東京理科大学大学院 工学工学研究科<br>(電気工学)卒業<br>
              化学系メーカー就職
            </p>
          </div>
          <div class="history__item">
            <p class="history__year">2020年</p>
            <p class="history__detail">
              東京理科大学大学院 工学工学研究科(電気工学)卒業<br>
              化学系メーカー就職
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="price">
      <div class="section__container container">
        <h2 class="about__title title">PRICE<span class="about__title--ja ja-title">価格</span></h2>
      </div>
      <p class="price__exp">
        ここに説明をいれる
      </p>
      <div class="prive__table-area">
        <!-- ここに投稿内容 -->
      </div>
    </section>

    <section class="work">
      <div class="work__container container">
        <h2 class="word__title title">WORK<span class="work__title--ja ja-title">制作実績</span></h2>
        <div class="work__btn-area">
          <p class="work__btn-exp">FILTER:</p>
          <div class="btn__area">
            <button type="button" class="work__btn active">ALL</button>
            <button type="button" class="work__btn">CORPORATE</button>
            <button type="button" class="work__btn">WORDPRESS</button>
          </div>
        </div>
        <div class="work__area">
          <article class="work__item article">
            <a href="" class="article__link">
              <div class="article__img"><img src="<?php echo get_template_directory_uri(); ?>/img/test1.jpg" alt=""></div>
              <div class="article__txt-area">
                <h3 class="article__title">タイトル</h3>
              </div>
            </a>
          </article>
          <article class="work__item article">
            <a href="" class="article__link">
              <div class="article__img"><img src="<?php echo get_template_directory_uri(); ?>/img/test1.jpg" alt=""></div>
              <div class="article__txt-area">
                <h3 class="article__title">タイトル</h3>
              </div>
            </a>
          </article>
          <article class="work__item article">
            <a href="" class="article__link">
              <div class="article__img"><img src="<?php echo get_template_directory_uri(); ?>/img/test1.jpg" alt=""></div>
              <div class="article__txt-area">
                <h3 class="article__title">タイトル</h3>
              </div>
            </a>
          </article>
          <article class="work__item article">
            <a href="" class="article__link">
              <div class="article__img"><img src="<?php echo get_template_directory_uri(); ?>/img/test1.jpg" alt=""></div>
              <div class="article__txt-area">
                <h3 class="article__title">タイトル</h3>
              </div>
            </a>
          </article>
          
        </div>
      </div>
    </section>


    <section class="contact">
      <div class="contact__container container">
        <h2 class="contact__title title">CONTACT<span class="contact__title--ja ja-title">お問い合わせ</span></h2>
      </div>
      <p class="contact__exp">
        Web制作・コーディングの依頼など、下記フォームよりお気軽にご相談ください。
      </p>
      <div class="contact__form-area">
        <!-- ここにフォーム設置 -->
      </div>
    </section>

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.wavify.js"></script>
  
  <?php get_footer(); ?>