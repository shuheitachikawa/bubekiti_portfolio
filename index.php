  <?php get_header(); ?>

  
  <section class="top-view key" id="top-t">
    <h1><p class="top-view__title">Bubekiti<span class="top-view__title--kana">[ぶべきち]</span></p><p class="top-view__sub-title">Web creating</p></h1>
    <svg class="top-view__svg"><path id="wave"></svg>
    <button class="top-view__btn">Welcome</button>
  </section>
  

  <div class="scroll-area">

    <section class="service key" id="service-t">
      <div class="service__container container">
        <h2 class="service__title title ">SERVICE<span class="service__title--ja ja-title">サービス内容</span></h2>
        <span class="title-emphasis"></span>
        <h3 class="service__maintxt">
          Webサイト制作/コーディング承ります。
        </h3>
        <div class="service__items">

        <?php
          $cf_group = SCF::get('service',11);
          foreach ($cf_group as $field_name => $field_value){
        ?>

          <!-- ここからサービスアイテム -->
          <div class="service__item animated">
            <div class="service__circle"></div>
            <h3 class="service__name"><?php echo $field_value['title-se']; ?></h3>
            <i class="service__icon <?php echo $field_value['font-se']; ?>"></i>
            <p class="service__detail"><?php echo nl2br($field_value['detail-se']); ?></p>
          </div>
          <!-- ここまでサービスアイテム -->

        <?php }; ?>

        </div>
        <p class="service__note">
          お客様の収益貢献・スピード対応を徹底いたしますが、<br>
          個人運営のため対応が難しい業務もございますので、
          <br>
          お気軽にご相談いただければと思います。
        </p>
      </div>
    </section>



    <section class="about key" id="about-t">
      <div class= "about__container container">
        <h2 class="about__title title">ABOUT<span class="about__title--ja ja-title">自己紹介・経歴
        </span></h2>
        <span class="title-emphasis"></span>
        <div class="about__intro">
          <table class="about__table animated">
            <tr>
              <td width="20%" class="about__table-item">事業主</td>
              <td width="80%" class="about__tabel-value">立川 修平</td>
            </tr>
            <tr>
              <td class="about__table-item">事業内容</td>
              <td>Webサイト制作/改修/コーディング</td>
            </tr>
            <tr>
              <td class="about__table-item">活動拠点</td>
              <td>東京・神奈川</td>
            </tr>
            <tr>
              <td class="about__table-item">保有スキル</td>
              <td class="about__skills">コーディング : HTML/CSS/Sass/JavaScript<br>
                  サイト構築 : WordPress<br>
                  デザインツール : XD/Photoshop(デザインデータからの書き出し)
              </td>
            </tr>
            <tr>
              <td class="about__table-item">SNS/ブログ</td>
              <td class="about__skills">
                <a href="https://twitter.com/bubekiti" class="about__sns fab fa-twitter" target="brank"></a>
                <span>/</span>
                <a href="https://bubekiti.net" class="about__blog fas fa-pen-alt " target="brank"></a>
              </td>
            </tr>
          </table>
        </div>
        <div class="about__history history animated">

        <?php
          $cf_group = SCF::get('about',13);
          foreach ($cf_group as $field_name => $field_value){
        ?>

          <div class="history__item">
            <p class="history__year"><?php echo $field_value['time-ab']; ?></p>
            <p class="history__detail"><?php echo nl2br($field_value['text-ab']); ?></p>
          </div>

          <div class="history__arrow"></div>
          <?php }; ?>
        </div>
      </div>
    </section>



    <section class="price key" id="price-t">
    <?php
      $price_obj = get_page_by_path("price");
      $post = $price_obj;
      setup_postdata($post);
    ?>

      <div class="section__container container">
        <h2 class="about__title title">PRICE<span class="about__title--ja ja-title">価格</span></h2>
        <span class="title-emphasis"></span>
        <div class="price__table-area animated">
          <?php the_content(); ?>
        </div>
      </div>

    <?php
      wp_reset_postdata();
    ?>
    </section>



    <section class="work key" id="work-t">
      <?php
        $work_posts = get_specific_posts('work',null,-1);
      ?>
      <div class="work__container container">
        <h2 class="work__title title">WORK<span class="work__title--ja ja-title">制作実績</span></h2>
        <span class="title-emphasis"></span>
        <div class="work__btn-area">
          <p class="work__btn-exp">FILTER:</p>
          <ul class="work__btn-list">
            <li class="work__btn-item active">ALL</li>
            <?php
              $filters = get_terms('work_filter');
              foreach($filters as $filter): 
            ?>
            <li class="work__btn-item"><?php echo $filter->name; ?></li>
              <?php endforeach; ?>
          </ul>
        </div>
        <div class="work__area">
          <?php
            if($work_posts->have_posts()):
              while($work_posts->have_posts()):
                $work_posts->the_post();
                $product_terms = wp_get_object_terms( $post->ID,  'work_filter' );                
          ?>
                  
          <article class="work__item article animated <?php foreach( $product_terms as $term ): echo $term->name; echo" "; endforeach; ?>">

            <a href="<?php the_permalink(); ?>" class="article__link">
              <div class="article__img">
                <?php the_post_thumbnail(array(810,810), array('class' => "card-article__thumbnail-img")); ?>
              </div>
              <div class="article__txt-area">
                <h3 class="article__title"><?php the_title(); ?></h3>
              </div>
            </a>
          </article>
          <?php
              endwhile;
            endif;
          ?>
          
        </div>
      </div>
    </section>


    <section class="contact key" id="contact-t">
      <div class="contact__container container">
        <h2 class="contact__title title">CONTACT<span class="contact__title--ja ja-title">お問い合わせ</span></h2>
        <span class="title-emphasis"></span>
        <div class="contact__form-area">
          <?php echo do_shortcode('[contact-form-7 id="222" title="コンタクトフォーム 1"]'); ?>
        </div>
      </div>
    </section>
  
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.wavify.js"></script>

  <?php get_footer(); ?>